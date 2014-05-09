<?php
defined('IN_DESTOON') or exit('Access Denied');
$TYPE = get_type('ask', 1);
$menus = array (
    array('发票大厅', '?moduleid='.$moduleid.'&file='.$file),
 
);
$stars = array('', '<span style="color:red;">不满意</span>', '基本满意', '<span style="color:green;">非常满意</span>');
switch($action) {
      case 'ed':
    	$db->query("UPDATE {$DT_PRE}fapiao SET $_GET[t]='$_GET[v]' WHERE itemid=$itemid");
        echo "1";
	   break;
	 case 'edit':
		$itemid or msg();
		if($submit) {
			$r = $db->get_one("SELECT * FROM {$DT_PRE}fapiao WHERE itemid=$itemid");
			
			if($status==2 && $r[restyle]==2){
			money_add($_username, 10);
			money_record($_username,10,'站内', 'system', '退回快递费');
			 yfpmoney_add($_username, -$r[money]);
			}
			$reply = addslashes(save_remote(save_local(stripslashes($reply))));
			$db->query("UPDATE {$DT_PRE}fapiao SET status=$status,maketime='$DT_TIME',note='$note',kdcompany='$kdcompany',tradeid='$tradeid',express='$express' WHERE itemid=$itemid");
			
			
			dmsg('受理成功', $forward);
		} else {
			$estatus = array('等待处理', '已投递', '已送达');
		
			$r = $db->get_one("SELECT * FROM {$DT_PRE}fapiao WHERE itemid=$itemid");
			$r or msg();
			if($r[type]==0){
				$r[types]="个人";
			}else{
				$r[types]="企业";
			}
		  if($r[fptype]==0){
				$r[fptype]="增值税普通发票";
			}else{
				$r[fptype]="增值税专业发票";
			}
			
		   if($r[express]==0){
				$r[expr]="尚未快递";
			}else if($r[express]==1){
				$r[expr]="已投递";
			}else{
				$r[expr]="已送达";
			}
		  if($r[restyle]==0){
				$r[re]="免快递费";
			}else if($r[restyle]==1){
				$r[re]="顺丰到付";
			}else{
				$r[re]="快递费10元";
			}
			
			extract($r);
			$_MOD = cache_read('module-2.php');
			$send_types = explode('|', trim($_MOD['send_types']));
			$addtime = timetodate($addtime, 5);
			$admintime = timetodate($admintime, 5);
			include tpl('fapiao_edit', $module);
		}
	break;
	 case 'update':
	 	
	if($itemid) {
			//通过设计师作品
			
		if($t=="update"){
			$p=implode(",",$itemid);
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
			if($status==2){
				dmsg('作废请选择作废按钮', $forward);
			}
			$sql="update d_fapiao set $a where itemid in($p)";
			$db->query($sql);
			  if($status){
			$sql="select * from d_fapiao where itemid in($p)";
			$order_sql=$db->query($sql);
				while($rs=$db->fetch_array($order_sql)){
			$rm=$db->get_one("select * from d_member where username='$rs[username]'");
			$rs[url] = $CFG[url].'member/usr_chg.php?itemid='.$rs[itemid];
	
			
			$title =$L[fapiao_tz];
			$content = ob_template('fapiao_tz', 'mail');
			if($message){
				send_mail($rm[email], $title, stripslashes($content));
			}
			if($msg){
			send_message($touser, $title, $content);
			}
	
		
			//- send web_in email start-//
			$touser = $rm['username'];
			
				}
				}
	    	dmsg('审核成功', $forward);
		}else if($t="fall"){
			if($status!=2){
				dmsg('本按钮仅供作废发票使用，修改状态请点击确定', $forward);
			}
			if(!$mess){
			dmsg('作废需要原因', $forward);
			}
		
			$p=implode(",",$itemid);
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
			$sql="update d_fapiao set $a where itemid in($p)";
			$db->query($sql);
			$sql="select * from d_fapiao where itemid in($p)";
			$order_sql=$db->query($sql);
			while($rs=$db->fetch_array($order_sql)){
			$rm=$db->get_one("select * from d_member where username='$rs[username]'");
			$rs[url] = $CFG[url].'member/usr_chg.php?itemid='.$rs[itemid];
	          $rm[msg]=$mess;    
			//- send email start-//
			$title =$L[fapiao_tz];
			$content = ob_template('fapiao_tz_fall', 'mail');
		
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
	    	dmsg('发票作废成功', $forward);
			
		}else if($t=='del'){
			$p=implode(",",$itemid);
			$sql="delete from d_fapiao where  itemid in($p)";
			$db->query($sql);
			dmsg('删除发票申请成功', $forward);
		}
 
	}else{
		dmsg('没有选中任何项', $forward);
	}
	 	break;
	case 'delete':
		$itemid or msg();
		$r=$db->get_one("select * from d_fapiao where itemid=$itemid");
		
		if($r[status]==1){
			message("已批准的发票申请不能删除");
	     	exit;	
		}
	
		$db->query("DELETE FROM {$DT_PRE}fapiao WHERE itemid=$itemid ");
		dmsg('删除成功', '?moduleid='.$moduleid.'&file='.$file);
	break;
	default:
		$_status = array('待受理', '<span style="color:green;">已批准</span>', '<span style="color:red;">作废</span>');
		$sfields = array('按发票抬头', '申请人类型', '发票类型', '会员名','快递公司','说明');
		$dfields = array('taitou', 'type', 'fptype', 'username','kdcompany','note');
	
		$dstatus = array('等待处理', '已批准', '作废');
		$estatus = array('等待处理', '已投递', '已送达');
	
		$sorder  = array('结果排序方式', '提交时间降序', '提交时间升序');
		$dorder  = array('itemid DESC', 'itemid DESC', 'itemid ASC');
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
			$r = $db->get_one("SELECT COUNT(*) AS num FROM {$DT_PRE}fapiao WHERE $condition");
			$items = $r['num'];
		}
		$pages = pages($items, $page, $pagesize);
		$asks = array();
		$result = $db->query("SELECT * FROM {$DT_PRE}fapiao WHERE $condition ORDER BY $dorder[$order] LIMIT $offset,$pagesize");
		while($r = $db->fetch_array($result)) {
			$r['addtime'] = timetodate($r['addtime'], 5);
			$r['dstatus'] = $_status[$r['status']];
			if($r[type]==0){
				$r[type]="个人";
			}else{
				$r[type]="企业";
			}
		  if($r[fptype]==0){
				$r[fptype]="增值税普通发票";
			}else{
				$r[fptype]="增值税专业发票";
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
		include tpl('fapiao', $module);
	break;
}
?>