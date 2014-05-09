<?php 
defined('IN_DESTOON') or exit('Access Denied');
if($DT_BOT) dhttp(403);

require DT_ROOT.'/module/'.$module.'/common.inc.php';
require DT_ROOT.'/include/post.func.php';
$itemid or dheader($MOD['linkurl']);
include load('misc.lang');
$item = $db->get_one("SELECT * FROM {$table} A,d_group_data B WHERE A.itemid=B.itemid and A.itemid=$itemid");
$view_pics = $db->get_all("SELECT * FROM d_group_website WHERE itemid=$itemid order by id asc");

$pic=$db->get_one("SELECT * FROM d_group_website WHERE id=$pic");
if(!$pic){
	$pic=$view_pics[0];
}
if($item && $item['status'] > 2) {
	if($item['process'] == 2) message($L['group_expired']);
	extract($item);
} else {
	message(lang('message->item_not_exists'), $MOD['linkurl']);
}

	include template('view', $module);

?>