<?php 
defined('IN_DESTOON') or exit('Access Denied');

require DT_ROOT.'/module/'.$module.'/common.inc.php';
if(!$_username){
	$msg="请登陆后操作";
  include template('gz', $module);
 exit;	
}
require DT_ROOT.'/include/post.func.php';
$itemid or dheader($MOD['linkurl']);
include load('misc.lang');
$item = $db->get_one("SELECT * FROM {$table} WHERE itemid=$itemid");


$favorite=$db->get_one("SELECT * FROM d_favorite WHERE id=$itemid and tp=$moduleid and userid=$_userid");
if($favorite){
	$msg="已收藏过本模版！";
}else{
	$msg="收藏成功";
	$db->query("insert into d_favorite (id,itemid,title,pic,price,note,tp,userid,addtime) values($itemid,NULL,'$item[title]','$item[thumb]','$item[price]','$item[introduce]','$moduleid','$_userid','$DT_TIME')");

	$f=$db->get_one("select count(*) as count from d_favorite where userid=$_userid and tp=$moduleid");
	$count=$f[count];
	
}
$names = $L['type_names'];
require DT_ROOT.'/include/type.class.php';
$do = new dtype;
$do->item = $item.'-'.$_userid;

if($submit) {
	if($MG['type_limit'] && $type[0]['typename'] && count($type) > $MG['type_limit']) dalert(lang($L['type_msg_limit'], array($MG['type_limit'])), 'goback');
	$do->update($type);
	dmsg($L['op_update_success'], '?item='.$item);
} else {
	$types = $db->get_all("select * from d_types where item=$_userid");
	foreach($types as $k=>$v) {
		$types[$k]['style_select'] = dstyle('type['.$v['typeid'].'][style]', $v['style']);
	}
	$new_style = dstyle('type[0][style]');
	
}


	include template('gz', $module);

?>