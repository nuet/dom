<?php 
defined('IN_DESTOON') or exit('Access Denied');

require MD_ROOT.'/express.class.php';
$do = new express();
switch($action) {
	case 'add':
		
		if($submit) {
			if($do->pass($post)) {
				$post['username'] = $_username;
				$do->add($post);
				dmsg('添加成功', $forward);
			} else {
				message($do->errmsg);
			}
		} else {
			foreach($do->fields as $v) {
				$$v = '';
			}
		}
	break;
	case 'edit':
		$itemid or message();
		$do->itemid = $itemid;
		$r = $do->get_one();
		if(!$r || $r['username'] != $_username) message();
		if($submit) {
			if($do->pass($post)) {
				$post['username'] = $_username;
				$do->edit($post);
				dmsg($L['op_edit_success'], $forward);
			} else {
				message($do->errmsg);
			}
		} else {
			extract($r);
		}
	break;
	case 'delete':
		$itemid or message($L['express_msg_choose']);
		$do->itemid = $itemid;
		$r = $do->get_one();
		if(!$r || $r['username'] != $_username) message();
		$do->delete($itemid);
		dmsg($L['op_del_success'], $forward);
	break;
	case 'area':
		$itemid or message($L['express_msg_choose']);
		$do->itemid = $itemid;
		$I = $r = $do->get_one();
		if(!$r || $r['username'] != $_username) message();
		if($submit) {
			$do->area($post);
			dmsg($L['op_success'], '?action=area&itemid='.$itemid);
		} else {
			$lists = $do->get_list("parentid=$itemid");
			if($r['items'] != $nums) $db->query("UPDATE {$DT_PRE}group_express SET items=$nums WHERE itemid=$itemid");
			$area_select = ajax_area_select('post[0][areaid]', $L['choose']);
		}
	break;
	default:
		$condition = "username='$_username' AND parentid=0";
		if($keyword) $condition .= " AND express LIKE '%$keyword%'";
		$lists = $do->get_list($condition);
		$limit_used = $nums;
		$limit_free = $MG['express_limit'] && $MG['express_limit'] > $limit_used ? $MG['express_limit'] - $limit_used : 0;	
	break;
}
include tpl('express', $module);
?>