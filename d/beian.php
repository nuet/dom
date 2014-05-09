<?php
require 'common.inc.php';
$value=$Val;

switch($Key) {
	case 'ztbah':
	if (!preg_match("/^[\x{4e00}-\x{9fa5}]{1}ICP[\x{4e00}-\x{9fa5}]{1}\d{6,9}[\x{4e00}-\x{9fa5}]{1}+$/u",$value)) {
	echo "主体备案号格式错误"; 
	 exit;
	} else { 
	 exit;
	}
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
    if(!preg_match("/[\x7f-\xff]/",$value)) {
	 echo "证件住所格式错误,必须含有汉字"; 
	 exit;
	}
	else { 
	 exit;
	}	
  case 'Dwmc':
    if(!preg_match("/[\x7f-\xff]/",$value)) {
	 echo "主办名称必须含有汉字"; 
	 exit;
	}
	else { 
	 exit;
	}	
  case 'ztFzr_xm':
    if(!preg_match("/[\x7f-\xff]/",$value)) {
	 echo "姓名必须含有汉字"; 
	 exit;
	}
	else { 
	 exit;
	}	
     break;
     
  case 'Zjhm':
  	  $b=preg_match("/^(P|p\d{7})|(G|g\d{8})$/",$value);
      $a=preg_match("/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/",$value);
      if(!$a && !$b){
      echo "证件号码格式不正确"; 
	 exit;
      }
	else {  
	 exit;
	}	
  	
  
  	break;
}
?>