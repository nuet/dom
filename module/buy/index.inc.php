<?php
defined('IN_DESTOON') or exit('Access Denied');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
if(!check_group($_groupid, $MOD['group_index'])) include load('403.inc');
$typeid = isset($typeid) ? intval($typeid) : 99;
isset($TYPE[$typeid]) or $typeid = 99;
$dtype = $typeid != 99 ? " AND typeid=$typeid" : '';
$maincat = get_maincat($catid ? $CAT['parentid'] : 0, $moduleid);
$p=get_cat($catid ? $catid : 0, $moduleid);
if($catid){
login();
}
if($catname && $t==1){
$all_sql=$db->query("select * from d_category where moduleid=6 and catname like '%$catname%'");
while($rs=$db->fetch_array($all_sql)){
	$all[]=$rs;
}
echo json_encode($all);
exit;
}

$CAT1=get_maincat($maincat[0][catid]);
foreach ($CAT1 as $i=>$t){
$CAT1_C[]=get_maincat($CAT1[$i][catid]);
}
$CAT2=get_maincat($maincat[1][catid]);
foreach ($CAT2 as $i=>$t){
$CAT2_C[]=get_maincat($CAT2[$i][catid]);
}

$CAT3=get_maincat($maincat[2][catid]);
foreach ($CAT3 as $i=>$t){
$CAT3_C[]=get_maincat($CAT3[$i][catid]);
}

$CAT4=get_maincat($maincat[3][catid]);
foreach ($CAT4 as $i=>$t){
$CAT4_C[]=get_maincat($CAT4[$i][catid]);
}
$CAT5=get_maincat($maincat[4][catid]);
foreach ($CAT5 as $i=>$t){
$CAT5_C[]=get_maincat($CAT5[$i][catid]);
}

$seo_file = 'index';
include DT_ROOT.'/include/seo.inc.php';
if($catid) $seo_title = $seo_catname.$seo_title;
if($typeid != 99) $seo_title = $TYPE[$typeid].$seo_delimiter.$seo_title;
if($page == 1) $head_canonical = $MOD['linkurl'];
$destoon_task = "moduleid=$moduleid&html=index";
if($EXT['wap_enable']) $head_mobile = $EXT['wap_url'].'index.php?moduleid='.$moduleid.($page > 1 ? '&page='.$page : '');
include template($MOD['template_index'] ? $MOD['template_index'] : 'index', $module);



?>