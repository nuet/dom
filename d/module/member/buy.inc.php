<?php 
defined('IN_DESTOON') or exit('Access Denied');
login();
isset($MODULE[16]) or dheader($MODULE[2]['linkurl']);
require DT_ROOT.'/module/'.$module.'/common.inc.php';
require DT_ROOT.'/include/post.func.php';
$_status = $L['trade_status'];
$dstatus = $L['trade_dstatus'];
$step = isset($step) ? trim($step) : '';
$timenow = timetodate($DT_TIME, 3);
$memberurl = $MOD['linkurl'];
$myurl = userurl($_username);
$table = $DT_PRE.'buy_6';
$STARS = $L['star_type'];

$item = $db->get_one("SELECT * FROM {$table} A,d_buy_data_6 B WHERE A.itemid=B.itemid $where and A.itemid=$itemid");
$CAT = get_cat($item[catid]);
/*
 * send_msg 为发送邮件和站内信
 * */
function send_msg($type,$title,$email,$touser){
	$content = ob_template($type, 'mail');
	send_mail($email, $title, stripslashes($content));
	send_message($touser, $title, $content);
}
function randomkeys($length)
{
	$key = "";
	$pattern='1234567890abcdefghijklmnopqrstuvwxyz';
	for($i=0;$i<$length;$i++)
	{
	$key .= $pattern{mt_rand(0,35)};    //生成php随机数
	}
	return $key;
	}
/*
 * send_mob 为发送手机短信
* */
function send_mob($type,$touser,$itemid,$mobile){
	global $L;
	$message = lang("sms->$type", array($touser,$itemid));
	$message = strip_sms($message);
	send_sms($mobile, $message);
}


	
	
	
	if($item['status'] != 3 ||$item['ifpays'] != 0 || $item['truename'] != $_truename) message($L['trade_msg_deny']);
			$money = $item['amount'];
			$seller = userinfo($item['seller']);
			if($DT['trade']) exit(include DT_ROOT.'/api/trade/'.$DT['trade'].'/update.inc.php');
			if($money > $_money) {
				set_cookie('tradeid', $itemid, $DT_TIME + 1800);
				dheader('charge.php?action=pay&amount='.($money-$_money));
			}
		
			if($submit) {
				is_payword($_username, $password) or message($L['error_payword']);
				$db->query("UPDATE {$DT_PRE}member SET money=money-$money,locking=locking+$money WHERE username='$_username'");
				$db->query("UPDATE {$table} SET status=3,edittime=$DT_TIME,ifpays=1 WHERE itemid=$itemid");

				$touser = $item['seller'];
				$title = lang($L['trade_message_t2'], array($itemid));
				$url = $memberurl.'trade.php?itemid='.$itemid;
				$content = lang($L['trade_message_c2'], array($myurl, $_username, $timenow, $url));
				$content = ob_template('messager', 'mail');
				send_message($touser, $title, $content);			
				//send sms
				if($DT['sms'] && $_sms && $touser && isset($sendsms)) {
					$touser = userinfo($touser);
					if($touser['mobile']) {
						$message = lang('sms->ord_pay', array($itemid, $money));
						$message = strip_sms($message);
						$word = word_count($message);
						$sms_num = ceil($word/$DT['sms_len']);
						if($sms_num <= $_sms) {
							$sms_code = send_sms($touser['mobile'], $message, $word);
							if(strpos($sms_code, $DT['sms_ok']) !== false) {
								$tmp = explode('/', $sms_code);
								if(is_numeric($tmp[1])) $sms_num = $tmp[1];
								if($sms_num) sms_add($_username, -$sms_num);
								if($sms_num) sms_record($_username, -$sms_num, $_username, $L['trade_sms_pay'], $itemid);
							}
						}
					}
				}
				//send sms
				message($L['trade_pay_order_success'], $forward, 3);
			} else {
				$head_title = $L['trade_pay_order_title'];
			}
	


	include template('buy', $module);



?>