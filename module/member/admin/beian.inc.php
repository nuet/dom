<?php
defined('IN_DESTOON') or exit('Access Denied');
$TYPE = get_type('ask', 1);
$menus = array (
    array('备案大厅', '?moduleid='.$moduleid.'&file='.$file),
 
);
$stars = array('', '<span style="color:red;">不满意</span>', '基本满意', '<span style="color:green;">非常满意</span>');
switch($action) {
      case 'ed':
      	if($_GET[v]=='顺丰到付'){
      		$_GET[v]=2;
      	}elseif($_GET[v]=='来我司拍照'){
      		$_GET[v]=1;
      	}
    	$db->query("UPDATE {$DT_PRE}beian_zt SET $_GET[t]='$_GET[v]' WHERE id=$id");
        echo "1";
	   break;
	 case 'edit':
	 	$id or msg();
		if($submit) {
			$r = $db->get_one("SELECT * FROM {$DT_PRE}beian_zt WHERE id=$id");
			$reply = addslashes(save_remote(save_local(stripslashes($reply))));
			$db->query("UPDATE {$DT_PRE}beian_zt SET status=$status,maketime='$DT_TIME',note='$note',tradeid='$tradeid',express='$express' WHERE id=$id");
			
			dmsg('受理成功', $forward);
			
		} else {
			$estatus = array('等待处理', '已投递', '已送达');
		
			$r = $db->get_one("SELECT * FROM {$DT_PRE}beian_zt WHERE id=$id");
			$beian = $db->get_one("SELECT * FROM {$DT_PRE}beian WHERE username='$r[username]'");
			 $lx = array(0,'企业','个人');
			 $zjlx = array(0,'身份证','护照');
		    $beian[Dw]=$lx[$beian[Dwxz]];
		    $beian[Zjlx]=$zjlx[$beian[Zjlx]];
		    $beian[ztFzr_zjlx]=$zjlx[$beian[ztFzr_zjlx]];
			$r or msg();
		  if($r[Fzr_zjlx]==1){
				$r[Fzr_zjlx]="身份证";
			}else{
				$r[Fzr_zjlx]="护照";
			}
		    if($r[restyle]==1){
				$r[re]="来我司拍照";
			}elseif($r[restyle]==2){
				$r[re]="顺丰到付";
			}
			
		   if($r[express]==0){
				$r[expr]="尚未快递";
			}else if($r[express]==1){
				$r[expr]="已投递";
			}else{
				$r[expr]="已送达";
			}
		
			
			extract($r);
			$_MOD = cache_read('module-2.php');
			$send_types = explode('|', trim($_MOD['send_types']));
			$addtime = timetodate($addtime, 5);
			$admintime = timetodate($admintime, 5);
			include tpl('beian_edit', $module);
		}
	break;
	 case 'update':
	 	
	if($id) {
			//通过设计师作品
			
		if($t=="update"){
			$p=implode(",",$id);
			if($status && !$express){
				$a="status='$status'";
			}
		    if(!$status && $express){
				$a="express='$express'";
			}
		   if($status && $express){
				$a="status='$status',express='$express'";
			}
			if(!$status && !$express){
			dmsg('没有选中任何项', $forward);
			}
			if($status==4){
				dmsg('退回请选择退回按钮', $forward);
			}
			$sql="update d_beian_zt set $a where id in($p)";
			$db->query($sql);
			 if($express==1){
			  $sql="select * from d_beian_zt where id in($p)";
			$order_sql=$db->query($sql);
			while($rs=$db->fetch_array($order_sql)){
			$rm=$db->get_one("select * from d_member where username='$rs[username]'");
			$rs[url] = $CFG[url].'member/beian.php?id='.$rs[id];
	          $rm[msg]=$mess;    
			//- send email start-//
			$title =$L[beian_kd_tz];
			$content = ob_template('beian_kd_tz', 'mail');
		
			//- send email end-//
		
			//- send web_in email start-//
			$touser = $rm['username'];
			if($message){
				send_mail($rm[email], $title, stripslashes($content));
			}
			if($msg){
			send_message($touser, $title, $content);
			}
			
				}
			 
			 }
			 if($status==3){
			  $sql="select * from d_beian_zt where id in($p)";
			$order_sql=$db->query($sql);
			while($rs=$db->fetch_array($order_sql)){
			$rm=$db->get_one("select * from d_member where username='$rs[username]'");
			$rs[url] = $CFG[url].'member/beian.php?id='.$rs[id];
	          $rm[msg]=$mess;    
			//- send email start-//
			$title =$L[beian_tz];
			$content = ob_template('beian_tz', 'mail');
		
			//- send email end-//
		
			//- send web_in email start-//
			$touser = $rm['username'];
			if($message){
				send_mail($rm[email], $title, stripslashes($content));
			}
			if($msg){
			send_message($touser, $title, $content);
			}
			
				}
			 	
				}
	    	dmsg('审核成功', $forward);
		}else if($t="fall"){
			if($status!=4){
				dmsg('本按钮仅供退回备案使用，修改状态请点击确定', $forward);
			}
			if(!$mess){
			dmsg('退回需要原因', $forward);
			}
		
			$p=implode(",",$id);
			if($status && !$express){
				$a="status='$status'";
			}
		    if(!$status && $express){
				$a="express='$express'";
			}
		   if($status && $express){
				$a="status='$status',express='$express'";
			}
				
			if(!$status && !$express){
			dmsg('没有选中任何项', $forward);
			}
			$sql="update d_beian_zt set $a where id in($p)";
			$db->query($sql);
			$sql="select * from d_beian_zt where id in($p)";
			$order_sql=$db->query($sql);
			while($rs=$db->fetch_array($order_sql)){
			$rm=$db->get_one("select * from d_member where username='$rs[username]'");
			$rs[url] = $CFG[url].'member/beian.php?id='.$rs[id];
	          $rm[msg]=$mess;    
			//- send email start-//
			$title =$L[beian_tz];
			$content = ob_template('beian_tz_fall', 'mail');
		
			//- send email end-//
		
			//- send web_in email start-//
			$touser = $rm['username'];
			if($message){
				send_mail($rm[email], $title, stripslashes($content));
			}
			if($msg){
			send_message($touser, $title, $content);
			}
			
				}
	    	dmsg('备案退回成功', $forward);
			
		}else if($t=='del'){
			$p=implode(",",$id);
			$sql="delete from d_beian_zt where  id in($p)";
			$db->query($sql);
			dmsg('删除备案申请成功', $forward);
		}
 
	}else{
		dmsg('没有选中任何项', $forward);
	}
	 	break;
	case 'delete':
		$id or msg();
		$r=$db->get_one("select * from d_beian_zt where id=$id");
		
		if($r[status]==4){
			message("已批准的备案申请不能删除");
	     	exit;	
		}
	
		$db->query("DELETE FROM {$DT_PRE}beian_zt WHERE id=$id ");
		dmsg('删除成功', '?moduleid='.$moduleid.'&file='.$file);
	break;
	default:
	  $_status = array('待申请', '<span style="color:green;">等待快递</span>', '<span style="color:green;">等待审核</span>', '<span style="color:green;">已批准</span>', '<span style="color:red">退回</span>');
	   
		$sfields = array('负责人', '手机号码', '快递类型', '会员名','快递公司','说明');
		$dfields = array('Fzr_xm', 'Fzr_sjhm', 'restyle', 'username','kdcompany','note');
	
		$dstatus = array('待申请', '等待快递', '等待审核','已批准','退回');
		$estatus = array('等待处理', '已投递', '已送达');
	
		$sorder  = array('结果排序方式', '提交时间降序', '提交时间升序');
		$dorder  = array('id DESC', 'id DESC', 'id ASC');
		isset($fields) && isset($dfields[$fields]) or $fields = 0;
		isset($typeid) or $typeid = 0;
		isset($fromtime) or $fromtime = '';
		isset($totime) or $totime = '';
		$status = isset($status) && isset($dstatus[$status]) ? intval($status) : '';
		isset($order) && isset($dorder[$order]) or $order = 0;
		$fields_select = dselect($sfields, 'fields', '', $fields);
		
		$status_select = dselect($dstatus, 'status', '受理状态', $status, '', 1, '', 1);
		$order_select  = dselect($sorder, 'order', '', $order);
		$condition = '1';
		if($fromtime) $condition .= " AND addtime>".(strtotime($fromtime.' 00:00:00'));
		if($totime) $condition .= " AND addtime<".(strtotime($totime.' 23:59:59'));
		if($keyword) $condition .= " AND $dfields[$fields] LIKE '%$keyword%'";
		if($typeid > 0) $condition .= " AND typeid=$typeid";
		if($status !== '') $condition .= " AND status=$status";
		if($page > 1 && $sum) {
			$items = $sum;
		} else {
			$r = $db->get_one("SELECT COUNT(*) AS num FROM {$DT_PRE}beian_zt WHERE $condition");
			$items = $r['num'];
		}
		$pages = pages($items, $page, $pagesize);
		$asks = array();
		$result = $db->query("SELECT * FROM {$DT_PRE}beian_zt WHERE $condition ORDER BY $dorder[$order] LIMIT $offset,$pagesize");
		while($r = $db->fetch_array($result)) {
			$r['addtime'] = timetodate($r['addtime'], 5);
			$r['dstatus'] = $_status[$r['status']];
			if($r[Fzr_zjlx]==1){
				$r[Fzr_zjlx]="身份证";
			}else{
				$r[Fzr_zjlx]="护照";
			}
		  if($r[restyle]==1){
				$r[restyle]="来我司拍照";
			}elseif($r[restyle]==2){
				$r[restyle]="顺丰到付";
			}
			
		  if($r[express]==0){
				$r[expr]="尚未快递";
			}else if($r[express]==1){
				$r[expr]="已投递";
			}else{
				$r[expr]="已送达";
			}
	
			$asks[] = $r;
		}
		include tpl('beian', $module);
	break;
}
?>