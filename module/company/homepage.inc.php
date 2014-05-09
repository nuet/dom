<?php 
defined('IN_DESTOON') or exit('Access Denied');
$content_table = content_table(4, $userid, is_file(DT_CACHE.'/4.part'), $DT_PRE.'company_data');
$r = $db->get_one("SELECT content FROM {$content_table} WHERE userid=$userid");


$n=$db->get_one("select * from d_company_setting where userid=$userid and item_key='announce'");
if($n[item_value]){
	$n=$n[item_value];
}else{
	$n='我比较懒，还没有写。。o(∩_∩)o ';
}


$sj_all=$db->get_all("select * from d_mall_order_1 group by rid,company_id having company_id='$COM[username]'");
$sj_in=$db->get_one("SELECT  count(*)as count FROM d_mall_order  where  in_index like '%$COM[company]%'");
$sj_last=$db->get_one("SELECT count(*)as count FROM d_mall_order WHERE designer like '%$COM[company]%' and status=9");


$COM['content'] = $r['content'];
$intro_length = isset($HOME['intro_length']) && $HOME['intro_length'] ? intval($HOME['intro_length']) : 1000;
$COM['intro'] = nl2br(dsubstr(trim(strip_tags($r['content'])), $intro_length, '...'));
$COM['thumb'] = $COM['thumb'] ? $COM['thumb'] : DT_SKIN.'image/company.jpg';
if($COMGROUP['main_d']) {
	$_main_show = array();
	foreach($HMAIN as $k=>$v) {
		$_main_show[$k] = strpos(','.$COMGROUP['main_d'].',', ','.$k.',') !== false ? 1 : 0;
	}
	$_main_show = implode(',', $_main_show);
} else {
	$_main_show = '1,1,1,0,0,0,0';
}

$table = $DT_PRE.'page';
$table_data = $DT_PRE.'page_data';

$TYPE = array();
$result = $db->query("SELECT itemid,title,style FROM {$table} WHERE status=3 AND username='$username' ORDER BY listorder DESC,addtime DESC");
while($r = $db->fetch_array($result)) {
	$r['alt'] = $r['title'];
	$r['title'] = set_style($r['title'], $r['style']);
	$r['linkurl'] = userurl($username, "file=$file&itemid=$r[itemid]", $domain);
	$TYPE[] = $r;
}

$new_comments=$db->get_all("select * from d_mall_comment where designer='$COM[company]' order by seller_ctime desc limit 8 ");

$stat=$db->get_one("select * from d_mall_stat_sjs where designer='$COM[company]'");

	if($stat && $stat['scomment']) {
				$stat['pc1'] = dround($stat['s1']*100/$stat['scomment'], 2, true).'%';
				$stat['pc2'] = dround($stat['s2']*100/$stat['scomment'], 2, true).'%';
				$stat['pc3'] = dround($stat['s3']*100/$stat['scomment'], 2, true).'%';
			} else {
				$stat['s1'] = $stat['s2'] = $stat['s3'] = 0;
				$stat['pc1'] = $stat['pc2'] = $stat['pc3'] = '0%';
			}

if($EXT['wap_enable']) $head_mobile = $EXT['wap_url'].'index.php?moduleid=4&username='.$username;
$seo_title = isset($HOME['seo_title']) && $HOME['seo_title'] ? $HOME['seo_title'] : '';
$head_title = '';
include template('index', $template);
if(isset($update) && $db->cache_ids && ($username == $_username || $_groupid == 1 || $domain)) {
	foreach($db->cache_ids as $v) {
		$dc->rm($v);
	}
	dheader($COM['linkurl']);
}
	

		


?>