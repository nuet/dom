<?php 
defined('IN_DESTOON') or exit('Access Denied');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
login();
require DT_ROOT.'/lang/zh-cn/member.inc.php';
require DT_ROOT.'/include/post.func.php';
$step = isset($step) ? trim($step) : '';
switch($step) {
	
	case 'jieru':
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
			header("Location:?action=update&step=1"); 
			exit;
		}
		if($submits){
		$db->query("insert into d_beian (username,addtime,updatetime,zhutino,zhutipassword,Dwxz,Dwmc,Zjlx,Zjhm,Cgszz,Czzjg,Zjzs,area,Xxdz,ztFzr_xm,ztFzr_dhhm_code,ztFzr_dhhm,ztFzr_sjhm,ztFzr_dzyj,ztFzr_zjlx,ztFzr_zjhm) values ('$_username','$DT_TIME','$DT_TIME','$ztbah','$icpmm','$Dwxz','$Dwmc','$Zjlx','$Zjhm','$Cgszz','$Czzjg','$Zjzs','$area','$Xxdz','$ztFzr_xm','$ztFzr_dhhm_code','$ztFzr_dhhm','$ztFzr_sjhm','$ztFzr_dzyj','$ztFzr_zjlx','$ztFzr_zjhm')");
	   			message("添加成功","beian.php");
		}
	
		
		}
		
	   
	
	break;

	case 'news':
		$beian=$db->get_one("select * from d_beian where username='$_username'");
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
	   		message("添加成功","beian.php"); 		
	   	}

		exit;
		}
	
	break;
	case '1':
	$malls_sql=$db->query("select * from d_mall_order where  buyer='$_username' and status>=9 order by addtime desc ");
   while($rs=$db->fetch_array($malls_sql)){
   	$beian_zt=$db->get_one("select * from d_beian_zt where itemid='$rs[itemid]' and tp='1'");
   	if($beian_zt==""){
   		$rs[shiyong]="未使用";
   	}else{
   		$rs[shiyong]="已使用";
   	}
   	if($rs[endtime]<'$DT_TIME'){
   	$rs[days]="已过期";	
   	}else{
   	$rs[days]="未过期";	
   	}
   	$malls[]=$rs;
   }
	
    $groups_sql=$db->query("select * from d_group_order where  buyer='$_username' and status>=3 order by addtime desc ");
	 while($rn=$db->fetch_array($groups_sql)){
	   	$beian_zt=$db->get_one("select * from d_beian_zt where itemid='$rn[itemid]' and tp='2'");
	   	if($beian_zt==""){
	   		$rn[shiyong]="未使用";
	   	}else{
	   		$rn[shiyong]="已使用";
	   	}
	 	if($rn[endtime]<'$DT_TIME'){
	   	$rn[days]="已过期";	
	   	}else{
	   	$rn[days]="未过期";	
	   	}
	   	$groups[]=$rn;
	   }
    
    $beian=$db->get_one("select * from d_beian where username='$_username'");
	
	break;
	case '2':
		if($_GET[id] && $_GET[act]=="edit"){
			$beian_zt=$db->get_one("select * from d_beian_zt where id='$id' and username='$_username'");
			if(!$beian_zt){
	     	message("参数传输错误");
			}else{
				if($itemid){
				$db->query("update d_beian_zt set updatetime='$DT_TIME',Fzr_xm='$Fzr_xm',Fzr_dhhm_code='$Fzr_dhhm_code',Fzr_dhhm='$Fzr_dhhm',Fzr_sjhm='$Fzr_sjhm',Fzr_dzyj='$Fzr_dzyj',Fzr_zjlx='$Fzr_zjlx',Fzr_zjhm='$Fzr_zjhm','mynote'='$mynote' where id='$id'");
				if($beian_zt[status]==4){
						message("修改成功","beian.php?action=update&act=edit&step=3&id=$id");
				}else{
						message("修改成功","beian.php?action=update&step=3&id=$id");
					
				}
				}
		}	
		
		}else{
      $beian_zt=$db->get_one("select * from d_beian_zt where itemid='$itemid' and tp='$tp'");
	  if($beian_zt){
	  message("您已使用本订单赠送的备案或超出期限"); 	
	  }
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
		if($act=='add'){
			$db->query("insert into d_beian_zt (id,username,addtime,updatetime,status,itemid,tp,Fzr_xm,Fzr_dhhm_code,Fzr_dhhm,Fzr_sjhm,Fzr_dzyj,Fzr_zjlx,Fzr_zjhm,mynote) values(NULL,'$_username','$DT_TIME','$DT_TIME','0','$itemid','$tp','$Fzr_xm','$Fzr_dhhm_code','$Fzr_dhhm','$Fzr_sjhm','$Fzr_dzyj','$Fzr_zjlx','$Fzr_zjhm','$mynote')");
		    $id=$db->insert_id();
		    $db->query("update d_beian_zt set bz=1 where id='$id'");
			message("添加成功","beian.php?action=update&step=3&id=$id");
		 }
		
		}
	break;
	case '3':
	$beian_zt=$db->get_one("select * from d_beian_zt where id='$id' and username='$_username'");
	$beian=$db->get_one("select * from d_beian where  username='$_username'");
	if(!$beian_zt){
		message("参数传输错误");
	}	
	if($act=='add'){
		$db->query("update  d_beian  set pic_gsyy='$post[pic_gsyy]',pic_zzjg='$post[pic_zzjg]',pic_fr='$post[pic_fr]' where username='$_username'");
		$db->query("update d_beian_zt set pic_idcard='$post[pic_idcard]',pic_hyd='$post[pic_hyd]',pic_xinxi='$post[pic_xinxi]' where id='$id'");
		   $db->query("update d_beian_zt set bz=2 where id='$id'");
	    message("上传资料成功","beian.php?action=update&step=4&id=$id"); 
	 }
	if($act=='edit'){
		$db->query("update  d_beian  set pic_gsyy='$post[pic_gsyy]',pic_zzjg='$post[pic_zzjg]',pic_fr='$post[pic_fr]' where username='$_username'");
		$db->query("update d_beian_zt set pic_idcard='$post[pic_idcard]',pic_hyd='$post[pic_hyd]',pic_xinxi='$post[pic_xinxi]' where id='$id'");
		  $db->query("update d_beian_zt set bz=3,status=2 where id='$id'");
	     message("上传资料成功","beian.php"); 
	 }
			
	 
	
	break;
	case '4':
		
		
	$beian_zt=$db->get_one("select * from d_beian_zt where id='$id' and username='$_username'");
	$beian=$db->get_one("select * from d_beian where  username='$_username'");
	if(!$beian_zt){
		message("参数传输错误");
	}	
	if($submit){
		$db->query("update d_beian_zt set mb_name='$post[mb_name]',restyle='2',mb_address='$post[mb_address]',postcode='$postcode',mb_mob='$post[mb_mob]',mb_note='$post[mb_note]' where id='$id'");
      $db->query("update d_beian_zt set bz=3,status=1 where id='$id'");
		message("保存成功","beian.php?action=update&step=4&id=$id"); 
    	}
	if($submit2){
		$db->query("update d_beian_zt set restyle='1' where id='$id'");
      $db->query("update d_beian_zt set bz=3,status=1 where id='$id'");
		message("保存成功","beian.php?action=update&step=4&id=$id"); 
    	}
   if($submit1){
 
		$db->query("update d_beian_zt set pic_mb='$pic_mb' where id='$id'");
	   $db->query("update d_beian_zt set bz=4,status=2 where id='$id'");
	    message("保存成功","beian.php?action=update&step=4&id=$id"); 
    	}
		
		break;
	
	case '5':

	
	
	
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
	 
	
		$sfields = array('按发票抬头','我的备注');
		$dfields = array('taitou','mynote');
	
		$dstatus = array('待申请', '等待快递', '等待审核','已批准','作废');
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
	    $_status = array('待申请', '<span style="color:green;">等待快递</span>', '<span style="color:green;">等待审核</span>', '<span style="color:green;">已批准</span>', '<span style="color:red">作废</span>');
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
		
		$lists_sql = $db->query("select * from d_beian_zt where $condition ORDER BY $dorder[$order] LIMIT $offset,$pagesize");
		while($rs=$db->fetch_array($lists_sql)){
	 			$rs['updatetime'] = timetodate($rs['updatetime'], 5);
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
	
		$rs['addtime'] = timetodate($rs['addtime'], 5);
		
			$lists[]=$rs;
		}
	
	break;
}

if($step==1){
    include template('beian_1', $module);
 
}elseif($step=='jieru'){

		include template('beian_jieru', $module);
}

elseif($step==2){
    include template('beian_2', $module);	
}elseif($step==3){
	  include template('beian_3', $module);	
	
}elseif($step==4){
	  include template('beian_4', $module);	
	
}elseif($step=='news'){
	include template('beian_news', $module);

}elseif($step==5){
	include template('beian_5', $module);
}else{
	include template('beian', $module);
}

?>