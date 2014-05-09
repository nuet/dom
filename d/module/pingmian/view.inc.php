<?php 
defined('IN_DESTOON') or exit('Access Denied');
if(!$itemid) message('非法进入', 'index.php');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
function send_msg($type,$title,$email,$touser){
	
	$content = ob_template($type, 'mail');
	send_mail($email, $title, stripslashes($content));
	send_message($touser, $title, $content);
}

require DT_ROOT.'/include/post.func.php';
include load('misc.lang');
include load('member.lang');


$item = $db->get_one("SELECT * FROM {$table} A,d_mall_data B WHERE A.itemid=B.itemid and A.itemid=$itemid");
$sorts=explode("<br/>",$DT[sort]);

$user = $db->get_one("SELECT * FROM d_address WHERE username='$_username'");

if($order_yz) {

   
}else{
	
	if($item[catid]==27 || $item[catid]==32){
		include template('order1', $module);
	     exit;
	}else{
		include template('order2', $module);
		exit;
	}
	
}
	
	


?>