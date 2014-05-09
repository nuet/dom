<?php 
defined('IN_DESTOON') or exit('Access Denied');
if(!$itemid) message('非法进入', 'index.php');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
function send_msg($type,$title,$email,$touser){
	
	$content = ob_template($type, 'mail');
	send_mail($email, $title, stripslashes($content));
	send_message($touser, $title, $content);
}
login();

require DT_ROOT.'/include/post.func.php';
include load('misc.lang');
include load('member.lang');

$item = $db->get_one("SELECT * FROM {$table} A,d_mall_data B WHERE A.itemid=B.itemid and A.itemid=$itemid");
if(!$item){
	message("没有此网站建设套餐",$MODULE[2][linkurl]);
}
$sorts=explode("<br/>",$DT[sort]);

$user = $db->get_one("SELECT * FROM d_address WHERE username='$_username'");

if($order_yz) {


	$t_sort=$sorts[$post[hy_sort]];
     $area=$db->get_one("select * from d_area where areaid='$add[areaid]'");
    $expload=explode(",",$language_style);
   $count=count($expload);

   if($count>1){  
   	$money=0;
   $jt0=in_array('简体中文',$expload);
   $jt1=in_array('繁体中文',$expload);
   $jt2=in_array('英文',$expload);
   $jt3=in_array('日文',$expload);
   $jt4=in_array('俄文',$expload);
   $jt5=in_array('其他',$expload);
   
   if($jt0){
   	$money=$money+$item[price]*0.2;
   }
   if($jt1){
   	$money=$money+$item[price]*0.2;
   	 
   }
   if($jt2){
   	$money=$money+$item[price]*0.5;
   }
   if($jt3){
   	$money=$money+$item[price]*0.5;
   }if($jt4){
   	$money=$money+$item[price]*0.5;
   }
   if($jt5){
   	$money=$money+$item[price]*0.5;
   }
   
   if($expload[0]=='简体中文' || $expload[0]=='繁体中文' ){
   	$money=$money-$item[price]*0.2;
   }else if($expload[0]=='英文' || $expload[0]=='日文' || $expload[0]=='俄文' || $expload[0]=='其他'){
 	$money=$money-$item[price]*0.5;
   }
   }elseif($count==1){
   	$money=0;
   }   
  
	if($iswap=='mob1'){
		$last_pirce=$money+$item[mobprice]+$item[mlangprice]*($count-1)+$item[price];
	}elseif($iswap=='mob2'){
		$last_pirce=$money+$item[resprice]+$item[rlangprice]*($count-1)+$item[price];
	}else{
		$last_pirce=$money+$item[price];
	}

	     if($fapiaosq==0){
	     $last_pirce=$last_pirce*0.92;
	     }else if($fapiaosq==1){
	     $last_pirce=$last_pirce;
	    }else{
	    $last_pirce=$last_pirce*10000;
     }
	   if($allow==1){
	   	$last_pirce=$last_pirce;
	   }else{
	   	$last_pirce=$last_pirce+200;
	   }
	$sql="insert into d_mall_order(mallid,buyer,catid,areaid,hy_sort,seller,title,thumb,price,allow,number,amount,buyer_name,buyer_address,area,buyer_phone,buyer_mobile,buyer_username,buyer_receive,buyer_star,seller_star,addtime,updatetime,status,pay_style,fapiao_yz,mob_yz,language_style) values('$itemid','$_username','$item[catid]','$area[areaname]','$t_sort','$item[username]','$item[title]','$item[thumb]','$item[price]','$allow','1','$last_pirce','$post[name]','$post[address]','$add[areaid]','$post[telephone]','$post[mobile]','$post[truename]','$item[express_name_1]','0','0','$DT_TIME','$DT_TIME','0','$playxz','$fapiaosq','$iswap','$language_style')";
	$db->query($sql);

	
	$id=$db->insert_id();
	$db->query("REPLACE INTO d_mall_comment (itemid,mallid,buyer,seller) VALUES ($id,$itemid,'$_username','')");
	$tmp = $db->get_one("SELECT mallid FROM d_mall_stat WHERE mallid=$id");
	if(!$tmp) $db->query("REPLACE INTO d_mall_stat (mallid,buyer,seller) VALUES ($itemid,'$_username','')");
	
	$db->query("insert into d_mall_order_xq (itemid) values('$id')");
	$url = $CFG[url].'member/trade.php?itemid='.$id;
	$date=date('Y-m-d H:i:s');
    send_msg('order_start',$L[order_start],$_email,$_username);	

   //  message($L['order_last'], $MODULE[2][linkurl]);
     echo "success";
}else{
	

		include template('order2', $module);
	
	
}
	
	


?>