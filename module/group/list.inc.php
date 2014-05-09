<?php 
defined('IN_DESTOON') or exit('Access Denied');
if(!$CAT || $CAT['moduleid'] != $moduleid) include load('404.inc');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
if($MOD['list_html']) {
	$html_file = listurl($CAT, $page);
	if(is_file(DT_ROOT.'/'.$MOD['moduledir'].'/'.$html_file)) d301($MOD['linkurl'].$html_file);
}
if(!check_group($_groupid, $MOD['group_list']) || !check_group($_groupid, $CAT['group_list'])) include load('403.inc');
$CP = $MOD['cat_property'] && $CAT['property'];
if($MOD['cat_property'] && $CAT['property']) {
	require DT_ROOT.'/include/property.func.php';
	$PPT = property_condition($catid);
}
unset($CAT['moduleid']);
extract($CAT);
$maincat = get_maincat($child ? $catid : $parentid, $moduleid);

if(($_GET[catid]==41 && $CAT[parentid]==0) || $CAT[parentid]==41){
	$pimg="41.jpg";
	$pid="41";
	$pclass="Blue";
	$pname="企业模版网站中心";
}elseif(($_GET[catid]==42 && $CAT[parentid]==0) || $CAT[parentid]==42){
	$pimg="42.jpg";
	$pid="42";
	$pclass="Brown";
	$pname="商城模版网站中心";
}elseif(($_GET[catid]==43 && $CAT[parentid]==0)  || $CAT[parentid]==43){
	$pimg="43.jpg";
	$pid="43";
	$pclass="black";
	$pname="Flash模版网站中心";
}elseif(($_GET[catid]==44 && $CAT[parentid]==0) || $CAT[parentid]==44){
	$pimg="44.jpg";
	$pid="44";
	$pclass="ShenBlue";
	$pname="手机模版网站中心";
}


$condition = 'status=3';
$condition .= ($CAT['child']) ? " AND catid IN (".$CAT['arrchildid'].")" : " AND catid=$catid";

$condition .= ($color) ? " AND color='$color' " : " ";
if($_GET[o]==1){
	$MOD['order']="edittime desc";
}elseif($_GET[o]==2){
	$MOD['order']="hits desc";
}else{
	$MOD['order']=$MOD['order'];
}
if($page == 1) {
	$items = $db->count($table, $condition, $CFG['db_expires']);
	if($items != $CAT['item']) {
		$CAT['item'] = $items;
		$db->query("UPDATE {$DT_PRE}category SET item=$items WHERE catid=$catid");
	}
} else {
	$items = $CAT['item'];
}



$pagesize = 20;
$offset = ($page-1)*$pagesize;
$pages = listpages($CAT, $items, $page, $pagesize);
$tags = array();
if($items) {
	$result = $db->query("SELECT ".$MOD['fields']." FROM {$table} WHERE {$condition} ORDER BY ".$MOD['order']." LIMIT {$offset},{$pagesize}", ($CFG['db_expires'] && $page == 1) ? 'CACHE' : '', $CFG['db_expires']);
	while($r = $db->fetch_array($result)) {
		$r['adddate'] = timetodate($r['addtime'], 5);
		$r['editdate'] = timetodate($r['edittime'], 5);
		$r[thumb]=str_replace("thumb","middle",$r[thumb]);
		$r[title]=dsubstr($r[title], 22, '');
		$v=$db->get_one("select * from d_category where catid='$r[catid]'");
		$r[cname]=$v[catname];
		if($lazy && isset($r['thumb']) && $r['thumb']) $r['thumb'] = DT_SKIN.'image/lazy.gif" original="'.$r['thumb'];
		$r['alt'] = $r['title'];
		$r['title'] = set_style($r['title'], $r['style']);
		$r['linkurl'] = $MOD['linkurl'].$r['linkurl'];
	  
	      	$r[url]=$CFG[url].'group/view.php?itemid='.$r[itemid];
	      
		
		$tags[] = $r;
	}
	$db->free_result($result);
}

$showpage = 1;
$datetype = 5;
$width = 250;
$height = 180;
$cols = 3;
$percent = dround(100/$cols).'%';
$seo_file = 'list';
include DT_ROOT.'/include/seo.inc.php';
if($EXT['wap_enable']) $head_mobile = $EXT['wap_url'].'index.php?moduleid='.$moduleid.'&catid='.$catid.($page > 1 ? '&page='.$page : '');
$template = $CAT['template'] ? $CAT['template'] : 'list';

$user = $db->get_one("select * from d_member A, d_company B where A.userid=B.userid and A.userid='$_userid'");
		/*设计师  投标入围中标的数量*/
		$sj_all=$db->get_all("select * from d_mall_order_1 group by rid,company_id having company_id='$_username'");
		$sj_in=$db->get_one("SELECT  count(*)as count FROM d_mall_order  where  in_index like '%$_company%'");
		$sj_last=$db->get_one("SELECT count(*)as count FROM d_mall_order WHERE designer like '%$_company%' and status=9");

		$count1=$db->get_one("select count(*) as count from d_mall_order where buyer='$_username' and status in(3,5,7)");
		$count2=$db->get_one("select count(*) as count from d_mall_order where buyer='$_username' and status in(0,4,8)");
		include template($template, $module);
?>