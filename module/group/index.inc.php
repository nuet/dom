<?php
defined('IN_DESTOON') or exit('Access Denied');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
if(!check_group($_groupid, $MOD['group_index'])) include load('403.inc');
$maincat = get_maincat(0, $moduleid);
$seo_file = 'index';
include DT_ROOT.'/include/seo.inc.php';
$destoon_task = "moduleid=$moduleid&html=index";
if($EXT['wap_enable']) $head_mobile = $EXT['wap_url'].'index.php?moduleid='.$moduleid.($page > 1 ? '&page='.$page : '');
$user = $db->get_one("select * from d_member A, d_company B where A.userid=B.userid and A.userid='$_userid'");
		/*设计师  投标入围中标的数量*/
		$sj_all=$db->get_all("select * from d_mall_order_1 group by rid,company_id having company_id='$_username'");
		$sj_in=$db->get_one("SELECT  count(*)as count FROM d_mall_order  where  in_index like '%$_company%'");
		$sj_last=$db->get_one("SELECT count(*)as count FROM d_mall_order WHERE designer like '%$_company%' and status=9");

		$count1=$db->get_one("select count(*) as count from d_mall_order where buyer='$_username' and status in(3,5,7)");
		$count2=$db->get_one("select count(*) as count from d_mall_order where buyer='$_username' and status in(0,4,8)");
		
		
	
include template('index', $module);
?>