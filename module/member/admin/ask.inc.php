<?php
defined('IN_DESTOON') or exit('Access Denied');
$TYPE = get_type('ask', 1);
$menus = array (
    array('客服中心', '?moduleid='.$moduleid.'&file='.$file),
    array('问题分类', 'javascript:Dwidget(\'?file=type&item='.$file.'\', \'问题分类\');'),
);
$stars = array('', '<span style="color:red;">不满意</span>', '基本满意', '<span style="color:green;">非常满意</span>');
switch($action) {
	case 'edit':
		$itemid or msg();
		if($submit) {
			$r = $db->get_one("SELECT * FROM {$DT_PRE}ask WHERE itemid=$itemid");
			if($r[status]==2){
				if($status == 2 && !$reply) msg('回复内容不能为空');
				$reply = addslashes(save_remote(save_local(stripslashes($reply))));
			$db->query("UPDATE {$DT_PRE}ask SET status=$status,admin='$_username',admintime='$DT_TIME',reply='$reply' WHERE itemid=$itemid");
			
			}else{
			
			if($status == 2){
				
				$s = $r[lb];
				extract($s);
				$db->query("update d_weihu_order set $s=$s-1 where itemid='$r[whid]'");
			}
			$reply = addslashes(save_remote(save_local(stripslashes($reply))));
			$db->query("UPDATE {$DT_PRE}ask SET status=$status,admin='$_username',admintime='$DT_TIME',reply='$reply',lb_count=lb_count-1 WHERE itemid=$itemid");
			
			}
			dmsg('受理成功', $forward);
		} else {
			$r = $db->get_one("SELECT * FROM {$DT_PRE}ask WHERE itemid=$itemid");
			$m=$db->get_one("select * from d_weihu_order where itemid='$r[whid]'");
			$r[ym]=$m[note];
			$r or msg();
			extract($r);
			$addtime = timetodate($addtime, 5);
			$admintime = timetodate($admintime, 5);
			include tpl('ask_edit', $module);
		}
	break;
	case 'delete':
		$itemid or msg();
		$db->query("DELETE FROM {$DT_PRE}ask WHERE itemid=$itemid ");
		dmsg('删除成功', '?moduleid='.$moduleid.'&file='.$file);
	break;
	default:
		isset($fromtime) or $fromtime = '';
		isset($totime) or $totime = '';
		$_status = array('待受理', '<span style="color:blue;">受理中</span>', '<span style="color:green;">已解决</span>', '<span style="color:red;">未解决</span>');
		$sfields = array('按条件', '标题', '内容', '会员名', '回复', '受理人');
		$dfields = array('title', 'title', 'content', 'username', 'reply', 'admin');
		$dstatus = array('待受理', '受理中', '已解决', '未解决');
		$sorder  = array('结果排序方式', '提交时间降序', '提交时间升序', '受理时间降序', '受理时间升序', '会员评分降序', '会员评分升序');
		$dorder  = array('itemid DESC', 'itemid DESC', 'itemid ASC', 'admintime DESC', 'admintime ASC', 'star DESC', 'star ASC');
		isset($fields) && isset($dfields[$fields]) or $fields = 0;
		isset($typeid) or $typeid = 0;
		$status = isset($status) && isset($dstatus[$status]) ? intval($status) : '';
		isset($order) && isset($dorder[$order]) or $order = 0;
		$fields_select = dselect($sfields, 'fields', '', $fields);
		$type_select   = type_select('ask', 1, 'typeid', '请选择分类', $typeid);
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
			$r = $db->get_one("SELECT COUNT(*) AS num FROM {$DT_PRE}ask WHERE $condition");
			$items = $r['num'];
		}
		$pages = pages($items, $page, $pagesize);
		$asks = array();
		$result = $db->query("SELECT * FROM {$DT_PRE}ask WHERE $condition ORDER BY $dorder[$order] LIMIT $offset,$pagesize");
		while($r = $db->fetch_array($result)) {
			$r['addtime'] = timetodate($r['addtime'], 5);
			$r['dstatus'] = $_status[$r['status']];
			$r['type'] = $r['typeid'] && isset($TYPE[$r['typeid']]) ? set_style($TYPE[$r['typeid']]['typename'], $TYPE[$r['typeid']]['style']) : '默认';
			$asks[] = $r;
		}
		include tpl('ask', $module);
	break;
}
?>