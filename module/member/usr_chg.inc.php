<?php 
defined('IN_DESTOON') or exit('Access Denied');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
login();
require DT_ROOT.'/lang/zh-cn/member.inc.php';
require DT_ROOT.'/include/post.func.php';
switch($action) {
	case 'add':
	  $p=$db->get_one("select * from d_member where userid='$_userid'");
		$wkfpmoney=$p[hkmoney]-$p[yfpmoney];
		if($submit) {
			if($wkfpmoney<$post[money]){
				message("申请金额超过可索取发票总额");
			    exit;		
		 	}
		if($post[type]==0 && $post[fptype]==1){
			message("个人用户不能申请增值税专用发票");
			exit;
		}
		if($post[restyle]==3){
			
			if($_money<10){	
			message("余额不足");
			exit;	
			}
			
			money_add($_username, -10);
			money_record($_username,-10,'站内', 'system', '发票快递费');	
			
			
		}elseif($post[restyle]==1){
			if($post[money]<480){
				message("您的申请金额没有超过480，不能选择第一种快递方式");
		   	   exit;
          	}
		}else{
				
		}
         yfpmoney_add($_username, $post[money]);
			$db->query("insert into d_fapiao (itemid,username,taitou,money,addtime,status,express,type,address,idcard,mobile,postcode,restyle,truename,cnumber,caddress,cbank,cmob,cbankno,fptype,thumb,telephone,mynote) values(NULL,'$_username','$post[taitou]','$post[money]',$DT_TIME,0,0,'$post[type]','$add[address]','$post[idcard]','$add[mobile]','$add[postcode]','$post[restyle]','$add[truename]','$post[cnumber]','$post[caddress]','$post[cbank]','$post[cmob]','$post[cbankno]','$post[fptype]','$post[thumb]','$add[telephone]','$post[mynote]')");
			dmsg('发票申请成功，等待审核', 'usr_chg.php');
			
		} else {
		$p=$db->get_one("select * from d_member where userid='$_userid'");
		$wkfpmoney=$p[hkmoney]-$p[yfpmoney];
		$address = array();
		$result = $db->query("SELECT * FROM {$DT_PRE}address WHERE username='$_username' ORDER BY  listorder ASC,itemid ASC LIMIT 30");
		while($r = $db->fetch_array($result)) {	
			$address[] = $r;
		}
		$user = userinfo($_username);
		$_MOD = cache_read('module-2.php');
		$send_types = explode('|', trim($_MOD['send_types']));
		}
	break;
	
	default:
	
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
		
		$lists_sql = $db->query("select * from d_fapiao where $condition ORDER BY $dorder[$order] LIMIT $offset,$pagesize");
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


include template('usr_chg', $module);
?>