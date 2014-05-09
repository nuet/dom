<?php 
defined('IN_DESTOON') or exit('Access Denied');
if($DT_BOT) dhttp(403);
login();
require DT_ROOT.'/module/'.$module.'/common.inc.php';
require DT_ROOT.'/include/post.func.php';
$itemid or dheader($MOD['linkurl']);
include load('misc.lang');
$item = $db->get_one("SELECT * FROM {$table} WHERE itemid=$itemid");
$item_pid=$db->get_one("select * from d_category where catid='$item[catid]'");
if($item && $item['status'] > 2) {
	if($item['process'] == 2) message($L['group_expired']);
	if($item['username'] == $_username) message($L['buy_self']);
	extract($item);
} else {
	message(lang('message->item_not_exists'), $MOD['linkurl']);
}

$rand=base64_decode($rand);

function get_nv($n, $v,$p) {
	if( $v ) 
	{
    $s = explode('|', $v);
	$t = explode('|', $p);
   if($n){ 
   	$n =explode('|', $n);
   }
}
 
	foreach ($s as $k => $r) {
		 if($n){
		 	$Arr4[] = array($s[$k],$t[$k],$n[$k]);
		 }else{
		 	$Arr4[] = array($s[$k],$t[$k]);
		 }
	     
	}
	return count($s) > 1 ? $Arr4 : array();
}
function unescape($str)
{
$ret = '';
$len = strlen($str);

for ($i = 0; $i < $len; $i++)
{
if ($str[$i] == '%' && $str[$i+1] == 'u')
{
$val = hexdec(substr($str, $i+2, 4));

if ($val < 0x7f) $ret .= chr($val);
else if($val < 0x800) $ret .= chr(0xc0|($val>>6)).chr(0x80|($val&0x3f));
else $ret .= chr(0xe0|($val>>12)).chr(0x80|(($val>>6)&0x3f)).chr(0x80|($val&0x3f));

$i += 5;
}
else if ($str[$i] == '%')
{
$ret .= urldecode(substr($str, $i, 3));
$i += 2;
}
else $ret .= $str[$i];
}
return $ret;
} 
$s1= get_nv($n1, $v1, $p1);
$s2= get_nv($n2, $v2, $p2);
$s3= get_nv($n3, $v3, $p3);
$s4= get_nv($n4, $v4, $p4);

$item[price]=$_COOKIE["price_".$rand.""];

$year_value=$_COOKIE["year_value_".$rand.""];
$mob_value=$_COOKIE["mob_value_".$rand.""];
$tc_value=$_COOKIE["tc_value_".$rand.""];
$jf_value=$_COOKIE["jf_value_".$rand.""];
$language=unescape($_COOKIE["language_".$rand.""]);

$year=substr($year_value,-1,1);
$year=$s4[$year][0];

$mob=substr($mob_value,-1,1);
$mob=$s2[$mob][0];
   
$tc=substr($tc_value,-1,1);
$tc=$s1[$tc][0];
   
$jf=substr($jf_value,-1,1);
$jf=$s3[$jf][0];

setcookie("language",$language);
setcookie("rand",$rand);
$user = userinfo($_username);


if($submit) {
$rand=$_COOKIE[rand];

$item[price]=$_COOKIE["price_".$rand.""];

$language=$_COOKIE[language];


	if($item['logistic']) {
		$add = array_map('trim', $add);
		$add['address'] = area_pos($add['areaid'], '').$add['address'];
		$add = array_map('htmlspecialchars', $add);
		$buyer_address = $add['address'];
		if(strlen($buyer_address) < 10) message($L['msg_type_address']);
		$buyer_postcode = $add['postcode'];
		if(strlen($buyer_postcode) < 6) message($L['msg_type_postcode']);
		$buyer_name = $add['truename'];
		$name=$add['name'];
		if(strlen($buyer_name) < 2) message($L['msg_type_truename']);
		$buyer_phone = $add['telephone'];
		
	} else {
	     $name=$add['name'];
		$buyer_address = htmlspecialchars($user['address']);
		$buyer_postcode = htmlspecialchars($user['postcode']);
		$buyer_name = htmlspecialchars($user['truename']);
		$buyer_phone = htmlspecialchars($user['telephone']);
		$buyer_receive = '';
	}
	$buyer_mobile = htmlspecialchars($add['mobile']);
	is_mobile($buyer_mobile) or message($L['msg_type_mobile']);
	$number = intval($number);
	if($number < 1) $number = 1;
	 $amount=$_COOKIE["price_".$rand.""];
	if($amount > $_money) message($L['need_charge'], 'charge.php?action=pay&amount='.($amount-$_money));
	money_add($_username, -$amount);
	money_record($_username, -$amount, $L['in_site'], 'system', $L['group_order_credit'], 'ID('.$itemid.')');
		
	$note = htmlspecialchars($note);
	$title = addslashes($item['title']);
	$password = strtolower(random(6));
    $endtime=time()+(365 * 24 * 60 * 60);
	$endtime=$endtime;
	$db->query("INSERT INTO {$DT_PRE}group_order (gid,buyer,seller,title,thumb,price,number,amount,logistic,addtime,updatetime,note,password, buyer_postcode,name,buyer_address,buyer_name,buyer_phone,buyer_mobile,buyer_receive,language,mob,year,tc,jf,catid,pid,endtime) VALUES ('$itemid','$_username','$item[username]','$title','$item[thumb]','$item[price]','$number','$amount','$item[logistic]','$DT_TIME','$DT_TIME','$_POST[note]','$password','$buyer_postcode','$name','$buyer_address','$buyer_name','$buyer_phone','$buyer_mobile','$buyer_receive','$language','$mob','$year','$tc','$jf','$item[catid]','$item_pid[parentid]','$endtime')");

	$db->query("UPDATE {$DT_PRE}group SET orders=orders+1,sales=sales+$number WHERE itemid=$itemid");
	message($L['msg_buy_success'], $MODULE[2]['linkurl'].'group.php?action=order', 3);
} else {
	$_MOD = cache_read('module-2.php');
	$result = $db->query("SELECT * FROM {$DT_PRE}address WHERE username='$_username' ORDER BY  listorder ASC,itemid ASC LIMIT 30");
	$address = array();
	while($r = $db->fetch_array($result)) {	
		$address[] = $r;
	}
	$send_types = explode('|', trim($_MOD['send_types']));
	$head_title = $L['buy_title'];
	
	include template('buy', $module);
}
?>