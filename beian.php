<?php
require 'common.inc.php';
require 'lang/zh-cn/sms.inc.php';
$value=$Val;
if($act=="sendsms"){
$Key='sendsms';
}
if($act=="getsmsstate"){
	$Key='getsmsstate';
}
switch($Key) {
	case 'ztbah':
	if (!preg_match("/^[\x{4e00}-\x{9fa5}]{1}ICP[\x{4e00}-\x{9fa5}]{1}\d{6,9}[\x{4e00}-\x{9fa5}]{1}+$/u",$value)) {
	echo "主体备案号格式错误"; 
	 exit;
	} else { 
	 exit;
	}
	 break;
	case 'ztFzr_dhhm';
	
  if (!preg_match("/^(\(\d{3,4}\)|\d{3,4}-|\s)?\d{7,14}$/",$value)) {
	echo "电话号码格式错误"; 
	 exit;
	} else { 
	 exit;
	}
	break;
	case 'Fzr_dhhm';
	
  if (!preg_match("/^(\(\d{3,4}\)|\d{3,4}-|\s)?\d{7,14}$/",$value)) {
	echo "电话号码格式错误"; 
	 exit;
	} else { 
	 exit;
	}
	break;
		case 'ztFzr_sjhm';
  if (!preg_match("/^0?(13|15|18|14)[0-9]{9}$/",$value)) {
	echo "手机号码格式错误"; 
	 exit;
	} else {
		 
	 exit;
	}
	break;
		case 'getsmsstate':
			echo "180";
			exit;	
		break;
		
	case 'Fzr_sjhm';
	  if (!preg_match("/^0?(13|15|18|14)[0-9]{9}$/",$value)) {
	echo "手机号码格式错误"; 
	 exit;
	} else {
		 
	 $value=substr($value,0,7);
	$bei=$db->get_one("select * from d_beian where username='$_username'");
	$mobile_all=$db->get_one("select * from d_area A,d_area B where A.parentid=b.areaid and A.areaid='$bei[area]'");
  //  $mobile_all=$db->get_one("select * from d_area where areaid='$bei[area]'");
   
	$codes=$db->get_one("select * from d_mobile where num='$value'and city like '%$mobile_all[areaname]%'");
	if($codes){
		echo "needcode";
		exit;
	}else{

		$mb=$db->get_one("select * from d_mobile where num='$value'");
	if($mb){
		echo "该手机号归属地：$mb[city]（$mb[cardtype]）,请填写$mobile_all[areaname]手机";
		exit;
	}else{
		echo "此手机号不在库中，请联系客服";
		exit;
	}
	
	}
	}
	
	
	break;
	case 'sendsms':
		$mobile = isset($mobile) ? trim($mobile) : '';
		$Fzr_xm = isset($Fzr_xm) ? trim($Fzr_xm) : '';
		$session = new dsession();
		isset($_SESSION['mobile_send']) or $_SESSION['mobile_send'] = 0;
		if($_SESSION['mobile_time'] && $DT_TIME - $_SESSION['mobile_time'] < 180) exit('5');
		if($_SESSION['mobile_send'] > 4) exit('6');

		$mobilecode = random(6, '0123456789');
		$_SESSION['mobile'] = $mobile;
		$_SESSION['mobile_code'] = md5($mobile.'|'.$mobilecode);
		$_SESSION['mobile_time'] = $DT_TIME;
		$_SESSION['mobile_send'] = $_SESSION['mobile_send'] + 1;

		$content = lang('sms->sms_code1', array($_truename,$mobilecode)).$DT['sms_sign'];
		send_sms($mobile, $content);
		exit;
		
	case 'mobilecode':
		
		$value = trim($value);
		if(!preg_match("/[0-9]{6}/", $value)) exit('验证码为空');
		$session = new dsession();
		if($_SESSION['mobile_code'] != md5($_SESSION['mobile'].'|'.$value)){exit('验证码错误');}
		
	break;
	case 'ztFzr_dzyj';
  if (!preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/",$value)) {
	echo "电子邮件格式错误"; 
	 exit;
	} else { 
	 exit;
	}
	break;
	case 'Fzr_dzyj';
  if (!preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/",$value)) {
	echo "电子邮件格式错误"; 
	 exit;
	} else { 
	 exit;
	}
	break;
	
    case 'icpmm':
  
	if ($value=='') {
	echo "密码不能为空"; 
	  exit;
	} else { 
	 exit;
	}
	break;

	
	 case 'Cgszz':
	if (!is_numeric($value)) {
	echo "工商营业执照号码格式错误,只能是数字"; 
	  exit;
	} else { 
	 exit;
	}
	break;
	 case 'Czzjg':
  
	if ($value=='') {
	echo "组织机构代码不能为空"; 
	  exit;
	} else { 
	 exit;
	}
	break;
    case 'Zjzs':
   $value=mb_strlen($value,'utf8');
    if($value<10) {
	 echo "证件住所不能少于10个字符"; 
	 exit;
	}
	else { 
	 exit;
	}	
	 break;
  case 'Dwmc':
      $value=mb_strlen($value,'utf8');
    if($value<3) {
	 echo "主办名称不能少于3个字符"; 
	 exit;
	}
	else { 
	 exit;
	}	
	 break;
  case 'ztFzr_xm':
    if(!preg_match("/[\x7f-\xff]/",$value)) {
	 echo "法人姓名必须含有汉字"; 
	 exit;
	}
	else { 
	 exit;
	}	
     break;
      case 'Fzr_xm':
    if(!preg_match("/[\x7f-\xff]/",$value)) {
	 echo "网站负责人姓名必须含有汉字"; 
	 exit;
	}
	else { 
	 exit;
	}	
     break;
    case 'Xxdz':
    $value=mb_strlen($value,'utf8');
    if($value<15) {
	 echo "详细通信地址不能少于15个字符"; 
	 exit;
	}
	else { 
	 exit;
	}	
     break; 
 
//	 case 'Fzr_zjhm':
//  
//  	$b=preg_match("/^(P|p\d{7})|(G|g\d{8})$/",$value);
//     $a=preg_match("/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/",$value);
//      if(!$a && !$b){
//      echo "证件号码格式不正确"; 
//	 exit;
//      }
//	else {  
//	 exit;
//	}	
//	 break;
	 
	
}

?>