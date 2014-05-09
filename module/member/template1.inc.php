<?php 
defined('IN_DESTOON') or exit('Access Denied');
login();
require DT_ROOT.'/module/'.$module.'/common.inc.php';
require DT_ROOT.'/include/post.func.php';


$pic=$db->get_one("select * from d_mall_order_1 where id='$_GET[id]'");



if($_GET[action]=='submit'){
	if($pic['pwd']!=$_GET[password]){
		echo "2";	
	    exit;
	}else{
		$newrows=array("a"=>1,"url"=>$pic[upload]);
		echo json_encode($newrows);
		exit;
	}
	

}

include template('mt', 'member');

?>

