<?php 
defined('IN_DESTOON') or exit('Access Denied');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
login();
require DT_ROOT.'/lang/zh-cn/member.inc.php';
require DT_ROOT.'/include/post.func.php';
$step = isset($step) ? trim($step) : '';
switch($step) {
	
	case '1':
	 
	
	break;
	case '2':
    $malls=$db->get_all("select * from d_mall_order where  buyer='$_username' and status>=8 order by addtime desc ");
    $groups=$db->get_all("select * from d_group_order where  buyer='$_username' and status>=3 order by addtime desc ");

	break;
	case '3':
		
	if($act=='edit'){
		 $beian=$db->get_one("select * from d_beian where username='$_username'");
		
		if(!$beian){
			message("参数传输错误"); 
			exit;
		}
	
		if($submits){

		$db->query("update d_beian set updatetime='$DT_TIME',Dwxz='$Dwxz',Dwmc='$Dwmc',Zjlx='$Zjlx',Zjhm='$Zjhm',Cgszz='$Cgszz',Czzjg='$Czzjg',Zjzs='$Zjzs',area='$area',Xxdz='$Xxdz',ztFzr_xm='$ztFzr_xm',ztFzr_dhhm_code='$ztFzr_dhhm_code',ztFzr_dhhm='$ztFzr_dhhm',ztFzr_sjhm='$ztFzr_sjhm',ztFzr_dzyj='$ztFzr_dzyj',ztFzr_zjlx='$ztFzr_zjlx',ztFzr_zjhm='$ztFzr_zjhm',zhutino='$ztbah',zhutipassword='$icpmm' where username='$_username'");
		message("修改成功","beian.php");
		}

		}else{
			if($tp==1){
			$mall=$db->get_one("select * from d_mall_order where itemid=$itemid and buyer='$_username' and status>=8 and endtime>'$DT_TIME'");
			if(!$mall){
				message("订单不存在或已过一年服务期");
			}
		}elseif($tp==2){
		 $group=$db->get_one("select * from d_group_order where itemid=$itemid and buyer='$_username' and status>=3 and endtime>'$DT_TIME'");
			if(!$group){
				message("订单不存在或已过一年服务期");
			}	
		}else{
			message("参数传输错误");
		}	
		 $beian=$db->get_one("select * from d_beian where username='$_username'");
		if($beian){
			header("Location:?action=update&step=5"); 
			exit;
		}
		if($submits){
		$db->query("insert into d_beian (username,addtime,updatetime,zhutino,zhutipassword,Dwxz,Dwmc,Zjlx,Zjhm,Cgszz,Czzjg,Zjzs,area,Xxdz,ztFzr_xm,ztFzr_dhhm_code,ztFzr_dhhm,ztFzr_sjhm,ztFzr_dzyj,ztFzr_zjlx,ztFzr_zjhm) values ('$_username','$DT_TIME','$DT_TIME','$ztbah','$icpmm','$Dwxz','$Dwmc','$Zjlx','$Zjhm','$Cgszz','$Czzjg','$Zjzs','$area','$Xxdz','$ztFzr_xm','$ztFzr_dhhm_code','$ztFzr_dhhm','$ztFzr_sjhm','$ztFzr_dzyj','$ztFzr_zjlx','$ztFzr_zjhm')");
	   		message("添加成功","beian.php");
		}
	
		
		}
		
	   
		
		
	 
	
	break;
	case '4':
		
   if($submits){
	   	
   	if($act=="edit"){	
   	 $beian=$db->get_one("select * from d_beian where username='$_username'");
		
		if(!$beian){
			message("参数传输错误"); 
			exit;
		}
	
		if($submits){
		$db->query("update d_beian set updatetime='$DT_TIME',Dwxz='$Dwxz',Dwmc='$Dwmc',Zjlx='$Zjlx',Zjhm='$Zjhm',Cgszz='$Cgszz',Czzjg='$Czzjg',Zjzs='$Zjzs',area='$area',Xxdz='$Xxdz',ztFzr_xm='$ztFzr_xm',ztFzr_dhhm_code='$ztFzr_dhhm_code',ztFzr_dhhm='$ztFzr_dhhm',ztFzr_sjhm='$ztFzr_sjhm',ztFzr_dzyj='$ztFzr_dzyj',ztFzr_zjlx='$ztFzr_zjlx',ztFzr_zjhm='$ztFzr_zjhm',zhutino='$ztbah',zhutipassword='$icpmm' where username='$_username'");
		message("修改成功","beian.php");
		}
   		
   	}else{ 
   		
	   		$db->query("insert into d_beian (username,addtime,updatetime,zhutino,zhutipassword,Dwxz,Dwmc,Zjlx,Zjhm,Cgszz,Czzjg,Zjzs,area,Xxdz,ztFzr_xm,ztFzr_dhhm_code,ztFzr_dhhm,ztFzr_sjhm,ztFzr_dzyj,ztFzr_zjlx,ztFzr_zjhm) values ('$_username','$DT_TIME','$DT_TIME','$ztbah','$icpmm','$Dwxz','$Dwmc','$Zjlx','$Zjhm','$Cgszz','$Czzjg','$Zjzs','$area','$Xxdz','$ztFzr_xm','$ztFzr_dhhm_code','$ztFzr_dhhm','$ztFzr_sjhm','$ztFzr_dzyj','$ztFzr_zjlx','$ztFzr_zjhm')");
	   		message("添加成功","?action=update&step=5"); 		
	   	}

		exit;
		}
	
	break;
	case '5':

	$beian=$db->get_one("select * from d_beian where username='$_username'");
	if(!$beian){
		message("您无权访问","beian.php"); 
		exit;
	}
	
	
	break;
	case 'del':
	$db->query("delete  from d_beian where username='$_username'");
    message("删除主体成功","beian.php"); 
	break;
	default:
	 $beian=$db->get_one("select * from d_beian where username='$_username'");
if($beian){
	 $lx = array(0,'企业','个人');
	 $zjlx = array(0,'身份证','护照');
    $beian[Dwxz]=$lx[$beian[Dwxz]];
    $beian[Zjlx]=$zjlx[$beian[Zjlx]];
    $beian[ztFzr_zjlx]=$zjlx[$beian[ztFzr_zjlx]];
}
	 
	$_status = array('待受理', '<span style="color:green;">已批准</span>', '<span style="color:red;">作废</span>');
		$sfields = array('按发票抬头','我的备注');
		$dfields = array('taitou','mynote');
	
		$dstatus = array('等待处理', '已批准', '作废');
		$estatus = array('等待处理', '已投递', '已送达');
	
		$sorder  = array('结果排序方式', '提交时间降序', '提交时间升序');
		$dorder  = array('itemid DESC', 'itemid DESC', 'itemid ASC');
		isset($fields) && isset($dfields[$fields]) or $fields = 0;
		isset($typeid) or $typeid = 0;
		$status = isset($status) && isset($dstatus[$status]) ? intval($status) : '';
		isset($order) && isset($dorder[$order]) or $order = 0;
		$fields_select = dselect($sfields, 'fields', '', $fields);
		
		$status_select = dselect($dstatus, 'status', '受理状态', $status, '', 1, '', 1);
		$order_select  = dselect($sorder, 'order', '', $order);
		
		$condition = "username='$_username'";
		if($itemid){
			 $condition .= " AND itemid='$itemid'";
		}
		if($keyword) $condition .= " AND $dfields[$fields] LIKE '%$keyword%'";
		if($typeid > 0) $condition .= " AND typeid=$typeid";
		if($status !== '') $condition .= " AND status=$status";
	    $_status = array('待受理', '<span style="color:green;">已批准</span>', '<span style="color:red;">作废</span>');
	    $_exprs = array('未处理', '<span style="color:green;">已投递</span>', '<span style="color:red;">已送达</span>');
	
		if($page > 1 && $sum) {
			$items = $sum;
		} else {
			$r = $db->get_one("SELECT COUNT(*) AS num FROM {$DT_PRE}fapiao WHERE $condition");
			$items = $r['num'];
		}
			$pagesize = '10';
			$offset = ($page-1)*$pagesize;
			$pages = pages2($items, $page, $pagesize);
		
		$lists_sql = $db->query("select * from d_beian where $condition ORDER BY $dorder[$order] LIMIT $offset,$pagesize");
		while($rs=$db->fetch_array($lists_sql)){
	 			$rs['maketime'] = timetodate($rs['maketime'], 5);
		if($rs[status]==0){
			$rs[statu]=$_status[$rs[status]];
		}elseif($rs[status]==1){
			$rs[statu]=$_status[$rs[status]];
		}else{
			$rs[statu]=$_status[$rs[status]];
		}
		if($rs[express]==0){
			$rs[expr]=$_exprs[$rs[express]];
		}elseif($rs[express]==1){
			$rs[expr]=$_exprs[$rs[express]];
		}else{
			$rs[expr]=$_exprs[$rs[express]];
		}
		if($rs[fptype]==0){
			$rs[fptypes]="增值税普通发票";
		}else{
			$rs[fptypes]="增值税专业发票";
		}
		$rs[addtime]=date('Y-m-d H:i:s',$rs[addtime]);
		
			$lists[]=$rs;
		}
	
	break;
}

if($step==1){
    include template('beian_1', $module);
}elseif($step==2){
    include template('beian_2', $module);	
}elseif($step==3){
	if($type==2){
		include template('beian_jieru', $module);
	}elseif($type==1){
		include template('beian_4', $module);	
	}
	if($act=='edit'){
		include template('beian_jieru', $module);
	}
	
}elseif($step==4){
	include template('beian_4', $module);

}elseif($step==5){
	include template('beian_5', $module);
}else{
	
	include template('beian', $module);
}

?>