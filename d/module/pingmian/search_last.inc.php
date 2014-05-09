<?php 
defined('IN_DESTOON') or exit('Access Denied');
login();
isset($MODULE[16]) or dheader($MODULE[2]['linkurl']);
require DT_ROOT.'/module/'.$module.'/common.inc.php';
require DT_ROOT.'/include/post.func.php';
$_status = $L['trade_status'];
$dstatus = $L['trade_dstatus'];
$step = isset($step) ? trim($step) : '';
$timenow = timetodate($DT_TIME, 3);
$memberurl = $MOD['linkurl'];
$myurl = userurl($_username);
$table = $DT_PRE.'mall_order';
$AREA or $AREA = cache_read('area.php');
$itemid or message();
$td = $db->get_one("SELECT * FROM {$table} WHERE itemid=$itemid");
if($td[allow]!=1){
	message("您没有此权限",$forward);
}
$td[pay]=$td[pay_style];
if($td[pay_style]==0){
	$td[pay_style]="一次性付款";
}else{
	$td[pay_style]="阶段性付款";
}
if($td[fapiao_yz]==1){
	$td[fapiao_yz]="需要发票";
}else{
	$td[fapiao_yz]="不需要付款";
}
$db->query("update d_mall_order set hits=hits+1 where itemid='$_GET[itemid]'");
$td[price2]=$td[amount]*0.3;
$td[price3]=$td[amount]*0.2;

$pos=stripos($td[designer], $_company);//判断是否存在   返回bool值
if ($pos !== false) {
	$td[y]=1;
}
$website=$db->get_one("select * from d_mall_order_website where itemid=$td[itemid]");
$td[status_zt]=$L['trade_status'][$td[status]];
$td[language]=explode(",",$td[language_style]);
//if($td['buyer'] != $_username && $td['seller'] != $_username) message($L['trade_msg_deny']);
$td['adddate'] = timetodate($td['addtime'], 5);
$td['updatedate'] = timetodate($td['updatetime'], 5);
$td['linkurl'] = $EXT['linkurl'].'redirect.php?mid=16&itemid='.$td['mallid'];
$mallid = $td['mallid'];
$nav = $_username == $td['buyer'] ? 'action_order' : 'action';
$mall_sql="select * from d_mall where title='{$td[title]}'";
$malls=$db->get_one($mall_sql);

$ready=$db->query("select * from d_mall_order_1 where rid=$itemid and status=1");
while ($ready_1=$db->fetch_array($ready)) {
	$readys[]=$ready_1;

}
if(strstr($td[designer], '<br/>')){
					$designs=explode("<br/>",$td[designer]);
					$ccc="'".$designs[0]."','".$designs[1]."'";
				}else{
					$ccc="'".$td[designer]."'";	}

$tag_sql=$db->query("select * from d_mall_order_1  group by designer,rid having rid='$itemid' and designer in($ccc)");
while($re_upload_1=$db->fetch_array($tag_sql)){
	$sql="select * from d_mall_order_1  where  checked=1 and level=1 and last=1 and rid='$itemid' and company_id='$re_upload_1[company_id]'";
	$all_sql=$db->query($sql);
	while ($all=$db->fetch_array($all_sql)) {
		$all[addtime]=date("Y-m-d H:i:s",$all[addtime]);
		$re_upload_1[t][]=$all;
	}
	$re_upload_1s[]=$re_upload_1;
}

$lm_sql=$db->query("select * from d_mall_order_1  group by designer,rid having rid='$itemid' and designer in($ccc)");
while($lm_1=$db->fetch_array($lm_sql)){
	$sql="select * from d_mall_order_1  where  checked=1 and level=2 and rid='$itemid' and company_id='$lm_1[company_id]'";

	$lm_all_sql=$db->query($sql);
	while ($lm_all=$db->fetch_array($lm_all_sql)) {
		$lm_all[addtime]=date("Y-m-d H:i:s",$lm_all[addtime]);
		$lm_1[t][]=$lm_all;
	}
	$lm_1s[]=$lm_1;
}


$wsql="select * from d_mall_order_1  where  checked=1 and level=1 and rid='$itemid' order by addtime asc";
$wall_sql=$db->query($wsql);
while ($wall=$db->fetch_array($wall_sql))
{
	$wall[addtime]=date("Y-m-d H:i:s",$wall[addtime]);
	$index_alls[]=$wall;
		
}

	

include template('search_last', $module);
?>