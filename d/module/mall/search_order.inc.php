<?php 
defined('IN_DESTOON') or exit('Access Denied');
if($DT_BOT || $_POST) dhttp(403);
require DT_ROOT.'/module/'.$module.'/common.inc.php';
if(!check_group($_groupid, $MOD['group_search'])) include load('403.inc');
require DT_ROOT.'/include/post.func.php';
include load('search.lang');
$sorts=explode("<br/>",$DT[sort]);


$CP = $MOD['cat_property'] && $catid && $CAT['property'];


$table='d_mall_order';
$table1='d_mall_order_xq';
if(!$MOD['fulltext']) unset($sfields[2], $dfields[2]);
isset($fields) && isset($dfields[$fields]) or $fields = 0;
isset($order) && isset($dorder[$order]) or $order = 0;


$trades = array();
$pid = 0;
//$condition = "status>='8'";
$condition = "1 AND A.itemid=B.itemid AND A.allow=1";

if($_GET[hy]!=""){
	$condition.=" AND A.hy_sort='$sorts[$hy]'";
}
if($_GET[color]){
	$condition.=" AND B.color_1='$_GET[color]'";
}
if($_GET[package]){
	$condition.=" AND A.catid='$_GET[package]'";
}
if($_GET[order]==0){
$order="A.itemid";
}elseif ($_GET[order]==1){
	$order="A.updatetime";	
}elseif ($_GET[order]==2){
	$order="A.hits";	
}

if($_GET[item]){
	$condition.=" AND concat(A.title,A.buyer_name) like '%$_GET[item]%'";
}

$rs = $db->get_one("SELECT COUNT(*) AS num FROM {$table} A,{$table1} B WHERE $condition");
$pagesize=20;
$offset = ($page-1)*$pagesize;
$pages = pages2($rs['num'], $page, $pagesize);
$trades = array();
$result = $db->query("SELECT * FROM {$table} A,{$table1} B WHERE $condition ORDER BY $order DESC LIMIT $offset,$pagesize");
$amount = $fee = $money = 0;
while($r = $db->fetch_array($result)) {

	if($r[pay_style]==0){
		$r[pay_for]="一次性付款";
	}else{
		$r[pay_for]="阶段性付款";
	}

		$r['addtime'] = date("Y-m-d H:i:s",$r[addtime]);


   
		$r[status_zt]=$L['trade_status'][$r[status]];
		$amount += $r['amount'];
		$fee += $r['fee'];
		$trades[] = $r;
}



include template('search_order', $module);
?>