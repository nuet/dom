<?php 
require 'config.inc.php';
require '../common.inc.php';

if($n==0){
	include template('view_0', 'member');
}else if($n==1){
	include template('view_1', 'member');
}else if($n==2){
	include template('view_2', 'member');
}else if($n==3){
	include template('view_3', 'member');
}else if($n==4){
	include template('view_4', 'member');
}


?>