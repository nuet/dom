<?php 
defined('IN_DESTOON') or exit('Access Denied');
$itemid or dheader($MOD['linkurl']);
if(!check_group($_groupid, $MOD['group_show'])) include load('403.inc');
require DT_ROOT.'/module/'.$module.'/common.inc.php';

$item = $db->get_one("SELECT * FROM {$table} WHERE itemid=$itemid");

$rand=rand(0,100000000);



$type_groups=$db->get_all("select * from $table where color='$item[color]' order by hits desc limit 4" );
$type_cats=$db->get_all("select * from $table where catid='$item[catid]' order by hits desc limit 4");
if($item && $item['status'] > 2) {
	if($MOD['show_html'] && is_file(DT_ROOT.'/'.$MOD['moduledir'].'/'.$item['linkurl'])) d301($MOD['linkurl'].$item['linkurl']);
	extract($item);
} else {
	include load('404.inc');
}


$CAT = get_cat($catid);

$CAT_P=get_cat_parent($catid);
$CAT_PS=get_cat_parent1($catid);

if(!check_group($_groupid, $CAT['group_show'])) include load('403.inc');
$content_table = content_table($moduleid, $itemid, $MOD['split'], $table_data);
$t = $db->get_one("SELECT content FROM {$content_table} WHERE itemid=$itemid");
$content = $t['content'];
if($lazy) $content = img_lazy($content);
if($MOD['keylink']) $content = keylink($content, $moduleid);
$CP = $MOD['cat_property'] && $CAT['property'];
if($CP) {
	require DT_ROOT.'/include/property.func.php';
	$options = property_option($catid);
	$values = property_value($moduleid, $itemid);
}
function get_nv($n, $v,$p) {
	if( $v ) 
	{
    $s = explode('|', $v);
	$t = explode('|', $p);
   if($n){ 
   	$n =explode('|', $n);
   }
}
   
	foreach ($s as $k => $r) {
		 if($n){
		 	$Arr4[] = array($s[$k],$t[$k],$n[$k]);
		 }else{
		 	$Arr4[] = array($s[$k],$t[$k]);
		 }
	     
	}
	return count($s) > 1 ? $Arr4 : array();
}

$s1= get_nv($n1, $v1, $p1);
$s2= get_nv($n2, $v2, $p2);
$s3= get_nv($n3, $v3, $p3);
$s4= get_nv($n4, $v4, $p4);
$yearprice=explode("|", $yearprice);
setcookie("tc_price_0".$rand."",$yearprice[0]);
setcookie("tc_price_1".$rand."",$yearprice[1]);
setcookie("tc_price_2".$rand."",$yearprice[2]);
setcookie("mob".$rand."",$s2[0][1]);
setcookie("year".$rand."",$s4[1][1]);
setcookie("tc".$rand."",$s1[1][1]);
setcookie("mob_value_".$rand."",'spec_mob_0');
setcookie("tc_value_".$rand."",'spec_tc_1');
setcookie("year_value_".$rand."",'spec_year_1');
setcookie("jf_value_".$rand."",'spec_jf_0');
setcookie("spec_tc_0",$s1[0][1]);
setcookie("price_mob".$rand."",$item[price]);
setcookie("rand",$rand);
setcookie("spec_tc_1",$s1[1][1]);
setcookie("spec_tc_2",$s1[2][1]);
setcookie("spec_mob_0",$s2[0][1]);
setcookie("spec_mob_1",$s2[1][1]);
setcookie("spec_mob_2",$s2[2][1]);
setcookie("spec_year_0",$s4[0][1]);
setcookie("spec_year_1",$s4[1][1]);
setcookie("spec_year_2",$s4[2][1]);

$adddate = timetodate($addtime, 3);
$editdate = timetodate($edittime, 3);
$todate = $totime ? timetodate($totime, 3) : 0;
$expired = $totime && $totime < $DT_TIME ? true : false;
$linkurl = $MOD['linkurl'].$linkurl;
$jsdate = $totime ? timetodate($totime, 'Y,').(timetodate($totime, 'n')-1).timetodate($totime, ',j,H,i,s') : '';
$iprice = file_ext($price) == '00' ? intval($price) : $price;
$fee = get_fee($item['fee'], $MOD['fee_view']);
$update = '';
$left = $minamount ? $minamount - $orders : 1 - $orders;
if($expired) {
	if($process < 2) {
		$update .= ",process=2,endtime=$DT_TIME";
		$item['process'] = $process = 2;
		$item['endtime'] = $endtime = $DT_TIME;
	}
} else {
	if($process == 0) {
		if(($minamount > 0 && $orders >= $minamount) || ($minamount == 0 && $orders >= 1)) {
			$update .= ",process=1";
			$item['process'] = $process = 1;
		}
	} else if($process == 1) {
		if($amount && $amount <= $orders) {
			$update .= ",process=2,endtime=$DT_TIME";
			$item['process'] = $process = 2;
			$item['endtime'] = $endtime = $DT_TIME;
		}
	}
}
if(check_group($_groupid, $MOD['group_contact'])) {
	if($fee) {
		$user_status = 4;
		$destoon_task = "moduleid=$moduleid&html=show&itemid=$itemid";
	} else {
		$user_status = 3;
		$member = $item['username'] ? userinfo($item['username']) : array();
		if($item['totime'] && $item['totime'] < $DT_TIME && $item['status'] == 3) $update .= ",status=4";
		if($member) {
			foreach(array('groupid', 'vip','validated','company','areaid','truename','telephone','mobile','address','qq','msn','ali','skype') as $v) {
				if($item[$v] != $member[$v]) $update .= ",$v='".addslashes($member[$v])."'";
			}
			if($item['email'] != $member['mail']) $update .= ",email='$member[mail]'";
		}
	}
} else {
	$user_status = $_userid ? 1 : 0;
	if($_username && $item['username'] == $_username) {
		$member = userinfo($item['username']);
		$user_status = 3;
	}
}

include DT_ROOT.'/include/update.inc.php';
$seo_file = 'show';
include DT_ROOT.'/include/seo.inc.php';
if($EXT['wap_enable']) $head_mobile = $EXT['wap_url'].'index.php?moduleid='.$moduleid.'&itemid='.$itemid.($page > 1 ? '&page='.$page : '');
$template = $item['template'] ? $item['template'] : ($CAT['show_template'] ? $CAT['show_template'] : 'show');
include template($template, $module);
?>