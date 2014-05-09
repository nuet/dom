<?php 
require 'config.inc.php';
require '../common.inc.php';
$pic=$db->get_one("select * from d_mall_order_xq where itemid='$_GET[id]'");

if($_GET[action]=='submit'){
	
	if($_GET[type]=="logo"){
		$type=$pic[logo]; 
		}elseif($_GET[type]=="lm"){
		$type=$pic[lm];
    }elseif($_GET[type]=="contact"){
 		$type=$pic[contact];
 	}elseif($_GET[type]=="server"){
 		$type=$pic[server];
 	}
	
	if($pic['pwd']!=$_GET[password]){

		echo "2";	
	    exit;
	}else{
		
		$newrows=array("a"=>1,"url"=>$type);
		echo json_encode($newrows);
		exit;
	}
	

}

include template('mv', 'member');

?>