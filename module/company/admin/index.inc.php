<?php
defined('IN_DESTOON') or exit('Access Denied');
require MD_ROOT.'/company.class.php';
$do = new company;
$menus = array (
    array($MOD['name'].'列表', '?moduleid='.$moduleid),
    array('移动地区', '?moduleid='.$moduleid.'&action=move'),
    array(VIP.'管理', '?moduleid='.$moduleid.'&file=vip'),
    array('会员列表', '?moduleid=2'),
);
$this_forward = '?moduleid='.$moduleid.'&file='.$file;

if($_catids || $_areaids) {
	if(isset($userid)) $itemid = $userid;
	if(isset($member['areaid'])) $post['areaid'] = $member['areaid'];
	require DT_ROOT.'/admin/admin_check.inc.php';
}

switch($action) {
	case 'update':
		is_array($userid) or msg('请选择'.$MOD['name']);
		foreach($userid as $v) {
			$do->update($v);
		}
		dmsg('更新成功', $forward);
	break;
	case 'move':
		if($submit) {
			$fromids or msg('请填写来源ID');
			if($toareaid) {
				$db->query("UPDATE {$table} SET areaid=$toareaid WHERE `{$fromtype}` IN ($fromids)");
				$db->query("UPDATE {$DT_PRE}member SET areaid=$toareaid WHERE `{$fromtype}` IN ($fromids)");
			}
			dmsg('移动成功', $forward);
		} else {
			$userid = isset($userid) ? implode(',', $userid) : '';
			$menuid = 1;
			include tpl($action, $module);
		}
	break;
	case 'level':
		$userid or msg('请选择'.$MOD['name']);
		$level = intval($level);
		$do->level($userid, $level);
		dmsg('级别设置成功', $forward);
	break;
	default:
		$sfields = array('按条件', '设计师名称', '会员名', '擅长领域', '销售', '联系方式', '身份证',  'Email',  '地址',  '邮编', '主页', '风格目录', '模板目录', '顶级域名');
		$dfields = array('keyword', 'company', 'username', 'business', 'sell', 'telephone', 'idcard', 'mail', 'address', 'postcode', 'homepage', 'skin', 'template', 'domain');
		$sorder  = array('结果排序方式', VIP.'指数降序', VIP.'指数升序', '注册年份降序', '注册年份升序', '注册资本降序', '注册资本升序', '服务开始降序', '服务开始升序', '服务结束降序', '服务结束升序','浏览人气降序','浏览人气升序');
		$dorder  = array('userid DESC', 'vip DESC', 'vip ASC', 'regyear DESC', 'regyear ASC', 'capital DESC', 'capital ASC', 'fromtime DESC', 'fromtime ASC', 'totime DESC', 'totime ASC', 'hits DESC', 'hits ASC');
		$svalid = array('认证', '已通过' , '未通过');
		$MS = cache_read('module-2.php');
		
		
		$thumb = isset($thumb) ? intval($thumb) : 0;
		$mincapital = isset($mincapital) ? dround($mincapital) : '';
		$mincapital or $mincapital = '';
		$maxcapital = isset($maxcapital) ? dround($maxcapital) : '';
		$maxcapital or $maxcapital = '';
		$areaid = isset($areaid) ? intval($areaid) : 0;
		isset($mode) && isset($modes[$mode]) or $mode = 0;
		isset($type) && isset($types[$type]) or $type = 0;
		isset($size) && isset($sizes[$size]) or $size = 0;

		$vip = isset($vip) ? ($vip === '' ? -1 : intval($vip)) : -1;
		isset($fields) && isset($dfields[$fields]) or $fields = 0;
		isset($order) && isset($dorder[$order]) or $order = 0;
		$groupid = isset($groupid) ? intval($groupid) : 0;
		$valid = isset($valid) ? intval($valid) : 0;
		$level = isset($level) ? intval($level) : 0;
		$uid = isset($uid) ? intval($uid) : '';
		$username = isset($username) ? trim($username) : '';
		isset($fromtime) or $fromtime = '';
		isset($totime) or $totime = '';
		isset($timetype) or $timetype = 'totime';
	
		$fields_select = dselect($sfields, 'fields', '', $fields);
		$level_select = level_select('level', '级别', $level);
		$order_select  = dselect($sorder, 'order', '', $order);
		$valid_select = dselect($svalid, 'valid', '', $valid);
		$group_select = group_select('groupid', '会员组', $groupid);
		$mode_select = dselect($modes, 'mode', '', $mode);
		$type_select = dselect($types, 'type', '', $type);
		$size_select = dselect($sizes, 'size', '', $size);
	
		$condition = 'groupid>5';
		if($_areaids) $condition .= " AND areaid IN (".$_areaids.")";//CITY
		if($keyword) $condition .= " AND $dfields[$fields] LIKE '%$keyword%'";
		if($groupid) $condition .= " AND groupid=$groupid";
		if($vip > -1) $condition .= " AND vip=$vip";
		if($level) $condition .= " AND level=$level";
		if($valid) $condition .= $valid == 1 ? " AND validated=1" : " AND validated=0";
		if($catid) $condition .= " AND catids LIKE '%,".$catid.",%'";
		if($areaid) $condition .= ($ARE['child']) ? " AND areaid IN (".$ARE['arrchildid'].")" : " AND areaid=$areaid";
		if($mode) $condition .= " AND mode LIKE '%$modes[$mode]%'";
		if($type) $condition .= " AND type='$types[$type]'";
		if($size) $condition .= " AND size='$sizes[$size]'";
		if($mincapital) $condition .= " AND capital>$mincapital";
		if($maxcapital) $condition .= " AND capital<$maxcapital";
		if($thumb)  $condition .= " AND thumb<>''";
		if($uid) $condition .= " AND userid=$uid";
		if($username) $condition .= " AND username='$username'";
		if($fromtime) $condition .= " AND $timetype>".(strtotime($fromtime.' 00:00:00'));
		if($totime) $condition .= " AND $timetype<".(strtotime($totime.' 23:59:59'));
		$lists = $do->get_list($condition, $dorder[$order]);
		
		include tpl('index', $module);
	break;
}
?>