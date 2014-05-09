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
$table = $DT_PRE.'pingmian_order';
$STARS = $L['star_type'];
$MOD1 = cache_read('module-16.php');
if($_groupid<6){
	message("您没有权限进入此页面",$MODULE[2][linkurl]);
}
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

if($action == 'update') {
	$itemid or message();
	$td = $db->get_one("SELECT * FROM {$table} WHERE itemid=$itemid");
	$td or message($L['trade_msg_null']);
	$td[pay]=$td[pay_style];
	if($td[pay_style]==0){
		$td[pay_style]="一次性付款";
	}else{
		$td[pay_style]="阶段性付款";
	}
	if($td[fapiao_yz]==1){
		$td[fapiao_yz]="需要发票";
	}else{
		$td[fapiao_yz]="不需要付款";
	}
    $td[price2]=$td[amount]*0.3;
    $td[price3]=$td[amount]*0.2;
  
   $pos=stripos($td[designer], $_company);//判断是否存在   返回bool值
    if ($pos !== false) {
    	$td[y]=1;
    }
    $website=$db->get_one("select * from d_pingmian_order_website where itemid=$td[itemid]");
	$td[status_zt]=$L['logo_status'][$td[status]];
		 $td[status_zt]=str_replace("<br/>","&nbsp;",$td[status_zt]);
	$td[language]=explode(",",$td[language_style]);
	//if($td['buyer'] != $_username && $td['seller'] != $_username) message($L['trade_msg_deny']);
	$td['adddate'] = timetodate($td['addtime'], 5);
	$td['updatedate'] = timetodate($td['updatetime'], 5);
	$td['linkurl'] = $EXT['linkurl'].'redirect.php?mid=16&itemid='.$td['mallid'];
	$mallid = $td['mallid'];
	$nav = $_username == $td['buyer'] ? 'action_order' : 'action';
	$mall_sql="select * from d_pingmian where title='{$td[title]}'";
	$malls=$db->get_one($mall_sql);
	if($_groupid==6){
		$mal[sm]=$malls[smoney_1];
		$mal[rm]=$malls[rmoney_1];
	}elseif($_groupid==7){
		$mal[sm]=$malls[smoney_2];
		$mal[rm]=$malls[rmoney_2];
	}elseif($_groupid==8){
		$mal[sm]=$malls[smoney_3];
		$mal[rm]=$malls[rmoney_3];
	}
	switch($step) {
		case 'upload_1'://设计师上传第一次作品
		
			if($td['status'] != 2 ) message($L['trade_msg_deny']);
			if(!$_company) message($L['trade_msg_deny']);//拒绝不是设计师身份的会员此操作
			if($submit) {
			
				$thumb=$post[thumb];
				/* 作品插入代码*/
				$upload_sql="INSERT INTO d_pingmian_order_1 (id,rid,company_id,designer,upload,addtime,status,note,level,mallid) VALUES(NULL,$itemid,'$_username','$_company','$thumb','$DT_TIME',0,'$nnote',1,'$td[mallid]')";
				$db->query($upload_sql);	
				$db->query("UPDATE {$table} SET status=$status,updatetime=$DT_TIME WHERE itemid=$itemid");//更新订单为1状态

			message($L['trade_input_index_success'], $forward, 3);
			}
			break;
			
		  case 'index':
	
			  if(!$_groupid=5) message($L['trade_msg_deny']);
			  
			  $index_alls=$db->get_all("select * from d_pingmian_order_1  where  level=1 and rid='$itemid' order by addtime asc");
			  
			  
			  $wsql="select * from d_pingmian_order_1  where  level=1 and rid='$itemid'and company_id='$_username' order by addtime asc";
			  $wall_sql=$db->query($wsql);
			  while ($wall=$db->fetch_array($wall_sql))
			  {
			  	$wall[addtime]=date("Y-m-d H:i:s",$wall[addtime]);
			  	$my_indexs[]=$wall;
			  		
			  }
			  
		
			  if($submit) {
			  	 if($pot){
			  	 	foreach ($pot as $k=>$v){
			  	 		$n=substr($k,5);
			  	 		if($v!=1){
			  	 		$db->query("update d_pingmian_order_1 set upload='$v' where id='$n'");
			  	 	}	
			  	 	}
			  	
			  	 
			  	 }
			  
			    if($td[y]==1){
			    	$vcheck=1;
			    }else{
			    	$vcheck=0;
			    }
			    
			    if($sendsms){
			    
			    	$touser = $td['buyer'];
			    	$title = lang($L['trade_message_t1'], array($itemid));
			    	$url = $memberurl.'trade.php?action=order&itemid='.$itemid;
			    	$content = lang($L['trade_message_c1'], array($myurl, $_username, $timenow, $url));
			    	$content = ob_template('messager', 'mail');
			    	send_message($touser, $title, $content);
			    	 
			    	if($DT['sms'] && $_sms && $touser && isset($sendsms)) {
			    		$touser = userinfo($touser);
			    		if($touser['mobile']) {
			    			$message = lang('sms->ord_confirm', array($itemid));
			    			$message = strip_sms($message);
			    			$word = word_count($message);
			    			$sms_num = ceil($word/$DT['sms_len']);
			    			if($sms_num <= $_sms) {
			    				$sms_code = send_sms($touser['mobile'], $message, $word);
			    				if(strpos($sms_code, $DT['sms_ok']) !== false) {
			    					$tmp = explode('/', $sms_code);
			    					if(is_numeric($tmp[1])) $sms_num = $tmp[1];
			    					if($sms_num) sms_add($_username, -$sms_num);
			    					if($sms_num) sms_record($_username, -$sms_num, $_username, $L['trade_sms_confirm'], $itemid);
			    				}
			    			}
			    		}
			    	}
			    	//send sms
			    
			    
			    }
			  	$thumb=$post[upload];
			  	if($thumb==""){
			  		$db->query("UPDATE {$table} SET status=$status,updatetime=$DT_TIME WHERE itemid=$itemid");
			  		message('稿件修改成功', $forward, 3);
			  	}else{
			  	
			  		
			  		
			  		$upload_sql="INSERT INTO d_pingmian_order_1 (id,rid,company_id,designer,upload,addtime,status,checked,note,level,mallid) VALUES(NULL,$itemid,'$_username','$_company','$thumb','$DT_TIME',0,$vcheck,'$nnote',1,'$td[mallid]')";
			  		$db->query($upload_sql);
			  		$db->query("UPDATE {$table} SET status=$status,updatetime=$DT_TIME WHERE itemid=$itemid");//更新订单为1状态
			  		message($L['trade_input_index_success'], $forward, 3);
			  	}
			  	/* 作品插入代码*/
			  
			  }
			break;
		
			    case 'upload_4':
			    	if($td['status'] != 5) message($L['trade_msg_deny']);
			    	if($td['designer'] != $_company ) message($L['trade_msg_deny']);
			    	$ready=$db->query("select * from d_pingmian_order_1 where level=2 and checked=1 and rid=$itemid");
			    	while ($ready_4=$db->fetch_array($ready)) {
			    		$ready_4[a]=$db->get_one("select * from d_pingmian_order where itemid='$ready_4[rid]'");
		 				$ready_4[addtime]=date("Y-m-d H:i:s",$ready_4[addtime]);
		 				if($ready_4[updatetime]){
		 				$ready_4[updatetime]=date("Y-m-d H:i:s",$ready_4[updatetime]);
		 				}
			    		$readys[]=$ready_4;
		 			
		 			}
		 		
			    	break;
			   	case 'edit_order1':
			   		/* By-摩恩科技
			   		 * 设计师对自己上传的栏目图片进行更改
			   		 */
			   		if($td['status'] != 5) message($L['trade_msg_deny']);
			   		if($td['designer'] != $_company ) message($L['trade_msg_deny']);
			    	$ready=$db->get_one("select * from d_pingmian_order_1 where id=$id");
			       if($_company!=$ready[designer]){
			       	 message($L['trade_confirm_lm_fall'], $forward, 3);
			       	 exit;
			       }
			      
			       if($submit) {
			       	$where=' ';
			       if($post[thumb]){
			       		$where.="upload='$post[thumb]',";
			       	}
			       	if($note){
			       		$where.="note='$note',";
			       	}
			       
			       	$sql="update d_pingmian_order_1 set $where updatetime=$DT_TIME  where id=$id";
			     
			       	$db->get_one($sql);
			       	
			         message($L['trade_confirm_lm_success'], $forward, 3);
			       }
			       
			       
			    	break;
		 	
				case 'last':
				
					break;
					case 'lm':
						$lms=$db->get_all("select * from d_pingmian_order_1  where  level=2 and rid='$itemid' and checked=1 order by addtime asc");
						$index_last=$db->get_one("select * from d_pingmian_order_1 where level=1 and rid='$itemid' and checked=1 and last=1");
                        $index_last[addtime]=date('Y-m-d H:i:s',$index_last[addtime]);
						if($submit) {
							
							if($pot){
								foreach ($pot as $k=>$v){
									$n=substr($k,5);
									if($v!=1){
										$db->query("update d_pingmian_order_1 set upload='$v' where id='$n'");
								   	}
								}
							}
								
							if($sendsms){
							
								$touser = $td['buyer'];
								$title = lang($L['trade_message_t1'], array($itemid));
								$url = $memberurl.'trade.php?action=order&itemid='.$itemid;
								$content = lang($L['trade_message_c1'], array($myurl, $_username, $timenow, $url));
								$content = ob_template('messager', 'mail');
								send_message($touser, $title, $content);
								 
								if($DT['sms'] && $_sms && $touser && isset($sendsms)) {
									$touser = userinfo($touser);
									if($touser['mobile']) {
										$message = lang('sms->ord_confirm_lm', array($itemid,$_username));
										$message = strip_sms($message);
										$word = word_count($message);
										$sms_num = ceil($word/$DT['sms_len']);
										if($sms_num <= $_sms) {
											$sms_code = send_sms($touser['mobile'], $message, $word);
											if(strpos($sms_code, $DT['sms_ok']) !== false) {
												$tmp = explode('/', $sms_code);
												if(is_numeric($tmp[1])) $sms_num = $tmp[1];
												if($sms_num) sms_add($_username, -$sms_num);
												if($sms_num) sms_record($_username, -$sms_num, $_username, $L['trade_sms_confirm'], $itemid);
											}
										}
									}
								}
								//send sms
							
							
							}
							if($post['upload']==""){
								message($L['trade_confirm_lm_xg'], $forward, 100);
								
							}else{	
								   $thumb=$post['upload'];
									$nnote=$pot['titledb0'];
									$upload_sql="INSERT INTO d_pingmian_order_1 (id,rid,company_id,designer,upload,addtime,status,checked,note,level,mallid) VALUES(NULL,$itemid,'$_username','$_company','$thumb','$DT_TIME',0,1,'$nnote',2,'$td[mallid]')";
									$db->query($upload_sql);
									message($L['trade_confirm_lm_success'], $forward, 100);
								
							}
							
							
							
						}
						break;
				
				  
				case 'detail'://订单详情
					$td['total'] = $td['amount'] + $td['fee'];
					$head_title = $L['trade_detail_title'];
				break;
	
		
		
		case 'upload_2'://栏目页上传
			if($td['status'] !=5 || $td['designer'] != $_company) message($L['trade_msg_deny']);
			if($submit) {
				
		 for($i=0;$i<=count($post);$i++){
		 	if(strlen($post['thumb'.$i])>=25){
		 
			  $thumb=$post['thumb'.$i];
			  $nnote=$pot['titledb'.$i];

		 	$upload_sql="INSERT INTO d_pingmian_order_1 (id,rid,company_id,designer,upload,addtime,status,checked,note,level,mallid) VALUES(NULL,$itemid,'$_username','$_company','$thumb','$DT_TIME',0,1,'$nnote',2,'$td[mallid]')";
			
		 	$db->query($upload_sql);
		 	}
		 }
		$db->query("UPDATE {$table} SET status=5,updatetime=$DT_TIME WHERE itemid=$itemid");
				$touser = $td['buyer'];
				$title = lang($L['trade_message_t1'], array($itemid));
				$url = $memberurl.'trade.php?action=order&itemid='.$itemid;
				$content = lang($L['trade_message_c1'], array($myurl, $_username, $timenow, $url));
				$content = ob_template('messager', 'mail');
				send_message($touser, $title, $content);
				message($L['trade_confirm_success'], $forward, 3);
			}
	
		
				break;
				case 'design':
					
					if($td['designer'] != $_company) {message($L['trade_msg_deny']);}
					if($submit) {
						$pwd=randomkeys(6);
						for($i=0;$i<=count($post);$i++){
								
							if(strlen($post['fileurl'.$i])>=25){
									
								$fileurl=$post['fileurl'.$i];
								$nnote=$pot['titledb'.$i];
					
					
								$upload_sql="INSERT INTO d_pingmian_order_1 (id,rid,company_id,designer,upload,addtime,status,note,level,mallid,pwd) VALUES(NULL,$itemid,'$_username','$_company','$fileurl','$DT_TIME',0,'$nnote',3,'$td[mallid]','$pwd')";
					
								$db->query($upload_sql);
							}
					
							}
					
					
							message($L['trade_psd_success'], $forward, 3);
					}
					
					
					break;
					
		case 'pay':
			if($td['status'] != 0 || $td['buyer'] != $_username) message($L['trade_msg_deny']);
			$money = $td['amount'] + $td['fee'];
			$seller = userinfo($td['seller']);
			if($DT['trade']) exit(include DT_ROOT.'/api/trade/'.$DT['trade'].'/update.inc.php');
			if($money > $_money) {
				set_cookie('tradeid', $itemid, $DT_TIME + 1800);
				dheader('charge.php?action=pay&amount='.($money-$_money));
			}
			if($submit) {
				is_payword($_username, $password) or message($L['error_payword']);
				$db->query("UPDATE {$DT_PRE}member SET money=money-$money,locking=locking+$money WHERE username='$_username'");
				$db->query("UPDATE {$table} SET status=1,updatetime=$DT_TIME,ready_money=ready_money+$money WHERE itemid=$itemid");

				$touser = $td['seller'];
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
		break;

		
	
		case 'add_time'://增加确认收货时间
			if($DT['trade']) exit(include DT_ROOT.'/api/trade/'.$DT['trade'].'/update.inc.php');
			if($td['status'] != 3 || $_username!=$td[designer]) message($L['trade_msg_deny']);
			if($submit) {
				$add_time = intval($add_time);
				$add_time > 0 or message($L['trade_addtime_null']);
				$db->query("UPDATE {$table} SET add_time='$add_time' WHERE itemid=$itemid");
				message($L['trade_addtime_success'], $forward);
			} else {
				$head_title = $L['trade_addtime_title'];
			}
		break;
		case 'upload_5'://买家上传需求
	 if($td[status]==0){
				message("该笔订单尚未付款",$forward);
				}
			$xq=$db->get_one("select * from d_pingmian_order_xq where itemid='$td[itemid]'");
				$xq[pic_logo]=pic_add($xq[logo]);
						$xq[pic_lm]=pic_add($xq[lm]);
						$xq[pic_contact]=pic_add($xq[contact]);
						$xq[pic_ad]=pic_add($xq[ad]);
			$zl=$db->get_all("select * from d_pingmian_zl where itemid='$td[itemid]'");
			$zl_count=$db->get_one("select count(*)as count from d_pingmian_zl where itemid='$td[itemid]'");
		
			break;
			case 'logo'://买家上传需求
	 if($td[status]==0){
				message("该笔订单尚未付款",$forward);
				}
			$xq=$db->get_one("select * from d_pingmian_order_xq where itemid='$td[itemid]'");
			$zl=$db->get_all("select * from d_pingmian_zl where itemid='$td[itemid]'");
			$zl_count=$db->get_one("select count(*)as count from d_pingmian_zl where itemid='$td[itemid]'");
		
			break;
		case 'receive_goods'://确认收货
	 /* By- 摩恩科技
	  * 对网站开发完进行确认操作，并且对设计师进行佣金分成
	  * 
	  * */
	
			$mall=$db->get_one("select * from d_pingmian where itemid=$td[mallid]");
		
			function grade($t){
				global $db;
				$company=$db->get_one("select * from d_company where company='$t'");
				if($company[groupid]==6){
					$rs=6;//这是设计师	
				}else if($company[groupid]==7){
					$rs=7;//这是初级设计师
				}else if($company[groupid]==8){
					$rs=8;//这是中级设计师
		    	}else if($company[groupid]==9){
					$rs=9;//这是高级设计师
				}else if($company[groupid]==5){
					$rs=5;//这是客户
				}
				$rm=$company[username];
				return array($rs,$rm);
				}
		
			$order_sql=$db->query("select * from d_pingmian_order_1  group by company_id having level=1 and last=0 and status=0 and checked=1 order by addtime asc limit $mall[scount]");
       while($order=$db->fetch_array($order_sql)){
       	
       	$rm=$db->get_one("select * from d_member where username='$order[company_id]'");
       	$url = $CFG[url].'member/trade.php?itemid='.$order[rid];
       	
       	send_msg('last_fall',$L[order_acce],$rm[email],$rm[username]);
       send_mob('wel_acc',$rm['truename'],$itemid,$rm[mobile]);
	       	$orders[]=$order;
	       }
	
         
			foreach ($orders as $order){ 
				  $or=grade($order[designer]);
				 
				  if($or[0]==7){
				
					money_add($or[1], $mall[smoney_1]);
				  money_record($or[1], $mall[smoney_1], $L['in_site'], 'system', $L['trade_start_pay'], $L['trade_order_id'].$itemid);
				  	$money1+=$mall[smoney_1];
		
				  	
				  }else if($or[0]==8)
				  {
				 
					money_add($or[1], $mall[smoney_2]);
				money_record($or[1], $mall[smoney_2], $L['in_site'], 'system', $L['trade_start_pay'], $L['trade_order_id'].$itemid);
				
				  	$money1+=$mall[smoney_2];
				  	
			    }else if($or[0]==9)
				  {
				  	//echo $or[1].'-'.$mall[smoney_3];
				money_add($or[1], $mall[smoney_3]);
				money_record($or[1], $mall[smoney_3], $L['in_site'], 'system', $L['trade_start_pay'], $L['trade_order_id'].$itemid);
				
				
				  	$money1+=$mall[smoney_3];
			    }
				
				
			} 
			if($mall[in_select]==2){
		
			if(strstr($td['in_index'], '<br/>')){
			      $indexs=explode("<br/>",$td['in_index']);
			      //echo '112';
			   
			      foreach ($indexs as $r){
			      	if($r!=$td[designer]){
			      		
			      		$rm=$db->get_one("select * from d_member where company='$r'");
			      		$url = $CFG[url].'member/trade.php?itemid='.$itemid;
			      		
			      		send_msg('last_fall',$L[order_acce],$rm[email],$rm[username]);
			      		send_mob('wel_acc',$rm['truename'],$itemid,$rm[mobile]);
			      		
			      	
			      		$indexs=grade($r);
			      		
			      		if($indexs[0]==7){
			      			//echo $indexs[1]."-".$mall[rmoney_1];
			      			money_add($indexs[1], $mall[rmoney_1]);
			      		money_record($indexs[1], $mall[rmoney_1], $L['in_site'], 'system', $L['trade_secord_pay'], $L['trade_order_id'].$itemid);
			      		
			      	
			      			$money1+=$mall[rmoney_1];
			      		}else if($indexs[0]==8){
			      			//echo $indexs[1]."-".$mall[rmoney_2];
			      				money_add($indexs[1], $mall[rmoney_2]);
			      				money_record($indexs[1], $mall[rmoney_2], $L['in_site'], 'system', $L['trade_secord_pay'], $L['trade_order_id'].$itemid);
			      			$money1+=$mall[rmoney_1];
			      		
			      		}else if($indexs[0]==9){
			      			//echo $indexs[1]."-".$mall[rmoney_3];
			      			money_add($indexs[1], $mall[rmoney_3]);
			      			money_record($indexs[1], $mall[rmoney_3], $L['in_site'], 'system', $L['trade_secord_pay'], $L['trade_order_id'].$itemid);
			      			$money1+=$mall[rmoney_1];
			      			
			      		}
			      }
			      		
			  
			      }
			     	
			}
			} 
			$ord=grade($td[designer]);
		
			money_add($ord[1],$mall[last_money]);
		  money_record($ord[1],$mall[last_money], $L['in_site'], 'system', $L['trade_last_pay'], $L['trade_order_id'].$itemid);
	

		  $rm=$db->get_one("select * from d_member where username='$ord[1]'");
		  $url = $CFG[url].'member/trade.php?itemid='.$itemid;
		  send_msg('last_fall',$L[order_acce],$rm[email],$rm[username]);
		send_mob('wel_acc',$rm['truename'],$itemid,$rm[mobile]);
		  			   
		  
		  
			$money1+=$mall[last_money];
		
			if($DT['trade']) exit(include DT_ROOT.'/api/trade/'.$DT['trade'].'/update.inc.php');
			$gone = $DT_TIME - $td['updatetime'];
			if($td['status'] != 7 || $td['buyer'] != $_username || $gone > ($MOD['trade_day']*35000 + $td['add_time']*3600)) message($L['trade_msg_deny']);
			$money = $td['amount'] + $td['fee'];
	   
		 money_lock($_username, -$money);
		money_record($_username, -$money, $L['in_site'], 'system', $L['trade_record_pay'], $L['trade_order_id'].$itemid);
		
		   money_add($td['seller'], $money-$money1);
		   $touser = $td['seller'];
		   $title = lang($L['trade_message_t4'], array($itemid));
		   $url = $memberurl.'record.php';
		   $content = lang($L['trade_message_c4'], array($myurl, $_username, $timenow, $url));
		   $content = ob_template('messager', 'mail');
		   money_record($td['seller'], $money-$money1, $L['in_site'], 'system', $L['trade_record_pay'], $L['trade_order_id'].$itemid);
			$db->query("UPDATE {$table} SET status=8,updatetime=$DT_TIME WHERE itemid=$itemid");
			$db->query("UPDATE {$DT_PRE}mall SET orders=orders+1,sales=sales+$td[number],amount=amount-$td[number] WHERE itemid=$mallid");
		
			$touser = $td['seller'];
			$title = lang($L['trade_message_t4'], array($itemid));
			$url = $memberurl.'trade.php?itemid='.$itemid;
			$content = lang($L['trade_message_c4'], array($myurl, $_username, $timenow, $url));
			$content = ob_template('messager', 'mail');
			send_message($touser, $title, $content);
		
			message($L['trade_success'], $forward, 3);//交易成功
			break;

		case 'comment'://交易评价
			if($submit) {
				$star = intval($star);
				in_array($star, array(1, 2, 3)) or $star = 3;
				$content = htmlspecialchars($content);
			}
			if($_company == $td['designer']) {
				if($td['buyer_star']) message('您已经评价过此交易');
				if($submit) {
					
					$db->query("UPDATE {$table} SET buyer_star=$star WHERE itemid=$itemid");
					$s = 'b'.$star;
					$db->query("UPDATE {$DT_PRE}mall_comment SET buyer_star=$star,buyer_comment='$content',buyer_ctime=$DT_TIME WHERE itemid=$itemid");
					$db->query("UPDATE {$DT_PRE}mall_stat SET bcomment=bcomment+1,`$s`=`$s`+1 WHERE mallid=$mallid");
					message('评价提交成功', $forward);
				}
			} else if($_username == $td['buyer']) {
				if($td['seller_star']) message('您已经评价过此交易');
				if($submit) {
					$db->query("UPDATE {$DT_PRE}mall SET comments=comments+1 WHERE itemid=$mallid");
					$db->query("UPDATE {$table} SET seller_star=$star WHERE itemid=$itemid");
					$s = 's'.$star;
					$db->query("UPDATE {$DT_PRE}mall_comment SET seller_star=$star,seller_comment='$content',seller_ctime=$DT_TIME WHERE itemid=$itemid");
					$db->query("UPDATE {$DT_PRE}mall_stat SET scomment=scomment+1,`$s`=`$s`+1 WHERE mallid=$mallid");
					message('评价提交成功', $forward);
				}
			}
		break;
		
		case 'comment_detail'://评价详情
			$cm = $db->get_one("SELECT * FROM {$DT_PRE}mall_comment WHERE itemid=$itemid");
			
			if($submit) {
				$content = htmlspecialchars($content);
				$content or message('解释内容不能为空');
				if($_username == $td['designer']) {
					if($cm['buyer_reply']) message('您已经解释过此评价');
					$db->query("UPDATE {$DT_PRE}mall_comment SET buyer_reply='$content',buyer_rtime=$DT_TIME WHERE itemid=$itemid");
				} else {
					if($cm['seller_reply']) message('您已经解释过此评价');
					$db->query("UPDATE {$DT_PRE}mall_comment SET seller_reply='$content',seller_rtime=$DT_TIME WHERE itemid=$itemid");
				}
				dmsg('解释成功', '?action='.$action.'&step='.$step.'&itemid='.$itemid);
			}
		break;
	
	}
} else if($action == 'bind') {
	$DT['trade'] or message('系统未开启担保交易接口');
	$member = $db->get_one("SELECT trade,vtrade FROM {$DT_PRE}member WHERE userid=$_userid");
	if($submit) {
		if($member['trade'] && $member['vtrade']) message('您的帐号已经绑定，不可再修改<br/>如果需要修改，请与网站联系');
		if($trade) {
			if($DT['trade'] == 'alipay' && !is_email($trade) && !is_mobile($trade)) message($DT['trade_nm'].'帐号格式不正确');
			$r = $db->get_one("SELECT userid FROM {$DT_PRE}member WHERE trade='$trade' AND vtrade=1");
			if($r) message('帐号绑定已经存在，请检查您的帐号');
		} else {
			$trade = '';
		}
		$db->query("UPDATE {$DT_PRE}member SET trade='$trade',vtrade=0 WHERE userid=$_userid");
		dmsg('更新成功', '?action=bind');
	} else {
		if(!$member['trade']) $member['vtrade'] = 0;
		$head_title = '绑定'.$DT['trade_nm'].'帐号';
	}
} else if($action == 'order') {
	$sfields = $L['trade_order_sfields'];
	$dfields = array('title', 'title ', 'amount', 'fee', 'fee_name', 'seller', 'send_type', 'send_no', 'note');
	isset($fields) && isset($dfields[$fields]) or $fields = 0;
	$mallid = isset($mallid) ? intval($mallid) : 0;
	(isset($seller) && check_name($seller)) or $seller = '';
	isset($fromtime) or $fromtime = '';
	isset($totime) or $totime = '';
	$status = isset($status) && isset($dstatus[$status]) ? intval($status) : '';
	$fields_select = dselect($sfields, 'fields', '', $fields);
	$status_select = dselect($dstatus, 'status', $L['status'], $status, '', 1, '', 1);
	$condition = "buyer='$_username'";
	 if($my)$condition .= " AND designer='$_company'";
	if($keyword) $condition .= " AND $dfields[$fields] LIKE '%$keyword%'";
	if($fromtime) $condition .= " AND addtime>".(strtotime($fromtime.' 00:00:00'));
	if($totime) $condition .= " AND addtime<".(strtotime($totime.' 23:59:59'));
	if($status !== '') $condition .= " AND status='$status'";
	if($itemid) $condition .= " AND itemid='$itemid'";
	if($mallid) $condition .= " AND mallid=$mallid";
	if($seller) $condition .= " AND seller='$seller'";
	$r = $db->get_one("SELECT COUNT(*) AS num FROM {$table} WHERE $condition");
	$pages = pages($r['num'], $page, $pagesize);		
	$trades = array();
	$result = $db->query("SELECT * FROM {$table} WHERE $condition ORDER BY itemid DESC LIMIT $offset,$pagesize");
	$amount = $fee = $money = 0;
	while($r = $db->fetch_array($result)) {
		if($r['status'] ==7 ) {
			$gone = $DT_TIME - $r['updatetime'];
			if($gone > ($MOD['trade_day']*35000 + $r['add_time']*3600)) {
				$r['lefttime'] = 0;
			} else {
				$r['lefttime'] = secondstodate($MOD['trade_day']*35000 + $r['add_time']*3600 - $gone);
			}
		}
		if($r['status']==2){
			$sql="select * from d_pingmian_order_1 where rid='$r[itemid]' and checked=1 and level=1";
			$m=$db->get_one($sql);
			if($m){
				$r['m']="1";
			}else{
				$r['m']="2";
			}
		}
		if($r['status']==5){
			$sql="select * from d_pingmian_order_1 where rid='$r[itemid]' and checked=1 and level=2";
			$m=$db->get_one($sql);
			if($m){
				$r['m']="1";
			}else{
				$r['m']="2";
			}
		}
		
		
		if(strstr($r['designer'], '<br/>')){
		$r['designs']= explode("<br/>",$r['designer']);		
		$design=$r['designs'];
        $design1=$db->get_one("select username from d_company where company='$design[0]'");
        $design2=$db->get_one("select username from d_company where company='$design[1]'");
        $r['rss']="<a target='_blank' href=".$CFG['url']."/com/".$design1['username'].">".$design[0]."</a><br/><a target='_blank' href=".$CFG['url']."/com/".$design2['username'].">".$design[1]."</a>";
		$r['designer']= $r['rss'];
		$r['mall']="<a href='chat.php?touser={$design1['username']}&mid=16&itemid=$r[mallid]' target='_blank'><img src=".$CFG['url']."file/image/web.gif></a>&nbsp;<a href='message.php?action=send&touser={$design1['username']}' target='_blank'><img src=".$CFG['url']."member/image/ico_message.gif title='发送站内信' align='absmiddle'/></a><br><a href='chat.php?touser={$design2['username']}&mid=16&itemid=$r[mallid]' target='_blank'><img src=".$CFG['url']."file/image/web.gif></a>&nbsp;<a href='message.php?action=send&touser={$design2['username']}' target='_blank'><img src=".$CFG['url']."member/image/ico_message.gif title='发送站内信' align='absmiddle'/></a>";
		
		}else{
			if(!$r['designer']){
				$r['designer']="等待中";
			}else{
		    $design3=$db->get_one("select username from d_company where company='$r[designer]'");
			$r['designer']=$r['designer'];
	     	$r['mall']="<a href='chat.php?touser={$design3['username']}&mid=16&itemid=$r[mallid]' target='_blank'><img src=".$CFG['url']."file/image/web.gif></a>&nbsp;<a href='message.php?action=send&touser={$design3['username']}' target='_blank'><img src=".$CFG['url']."member/image/ico_message.gif title='发送站内信' align='absmiddle'/></a>";
		}}
		
		
		if($r['status'] == 6 ) {
			$gone = $DT_TIME - $r['updatetime'];
			if($gone > ($MOD['trade_day']*35000 + $r['add_time']*3600)) {
				$r['lefttime'] = 0;
			} else {
				$r['lefttime'] = secondstodate($MOD['trade_day']*35000 + $r['add_time']*3600 - $gone);
			}
		}
		$r['addtime'] = date("Y-m-d H:i:s",$r[addtime]);
		$r['updatetime'] = str_replace(' ', '<br/>', timetodate($r['updatetime'], 5));
		
		$r['linkurl'] = $EXT['linkurl'].'redirect.php?mid=16&itemid='.$r['mallid'];

		$r['dstatus'] = $_status[$r['status']];
	
		
		$r['money'] = $r['amount'] + $r['fee'];
		$r['money'] = number_format($r['money'], 2, '.', '');
	
		$amount += $r['amount'];
		$fee += $r['fee'];
		$trades[] = $r;
	}
	$money = $amount + $fee;
	$money = number_format($money, 2, '.', '');
	$forward = urlencode($DT_URL);
	$head_title = $L['trade_order_title'];
	
} else {

	if($_groupid>=6){
	$sfields = $L['trade_sfields'];
	$dfields = array('title', 'title ', 'amount', 'fee', 'fee_name', 'buyer', 'buyer_name', 'buyer_address', 'buyer_postcode', 'buyer_mobile', 'buyer_phone', 'send_type', 'send_no', 'note');
	$mallid = isset($mallid) ? intval($mallid) : 0;
	(isset($buyer) && check_name($buyer)) or $buyer = '';
	isset($fields) && isset($dfields[$fields]) or $fields = 0;
	isset($fromtime) or $fromtime = '';
	isset($totime) or $totime = '';
	$status = isset($status) && isset($dstatus[$status]) ? intval($status) : '';
	$fields_select = dselect($sfields, 'fields', '', $fields);
	$status_select = dselect($dstatus, 'status', $L['status'], $status, '', 1, '', 1);
	$condition = "seller='admin'";
	if($item) $condition.=" AND itemid=$item";

	
	if($keyword) $condition .= " AND $dfields[$fields] LIKE '%$keyword%'";
	if($fromtime) $condition .= " AND addtime>".(strtotime($fromtime.' 00:00:00'));
	if($totime) $condition .= " AND addtime<".(strtotime($totime.' 23:59:59'));
    if($my)$condition .= " AND designer='$_company'";
	if($itemid) $condition .= " AND itemid=$itemid";
	if($mallid) $condition .= " AND mallid=$mallid";
	if($buyer) $condition .= " AND buyer='$buyer'";
	if($n==1){
		$condition .=" AND status<4";
	}elseif($n==2){
		$condition .=" AND 4<status<6";
	}elseif($n==3){
		$condition .=" AND status=8";
	}
	if($t==1){
		$condition .=" AND buyer_receive like '展示站%'";
	}elseif($t==2){
		$condition .=" AND buyer_receive like '品牌站%'";
	}elseif($t==3){
		$condition .=" AND buyer_receive like '营销站%'";
	}elseif($t==4){
		$condition .=" AND buyer_receive like '%基本'";
	}elseif($t==5){
		$condition .=" AND buyer_receive like '%标准%'";
	}
	elseif($t==6){
		$condition .=" AND buyer_receive like '%高级'";
	}
	
	
	$r = $db->get_one("SELECT COUNT(*) AS num FROM {$table} WHERE $condition");
	$pagesize=8;
    $offset = ($page-1)*$pagesize;
	$pages = pages1($r['num'], $page, $pagesize);
	$orders = $r['num'];
	
	$trades = array();
	if($order=='addtime'){
		$order='addtime desc';
	}elseif($order=='status'){
		$order=='status asc';
	}else{
		$order=itemid.' desc';
	}
	
	$result = $db->query("SELECT * FROM {$table} WHERE $condition ORDER BY $order  LIMIT $offset,$pagesize");
	$amount = $fee = $money = 0;
	while($r = $db->fetch_array($result)) {
		if($r['status'] == 7) {
			$gone = $DT_TIME - $r['updatetime'];
			if($gone > ($MOD['trade_day']*35000 + $r['add_time']*3600)) {
				$r['lefttime'] = 0;
			} else {
				$r['lefttime'] = secondstodate($MOD['trade_day']*35000 + $r['add_time']*3600 - $gone);
			}
		}
		if($r['status']==5){
		
			$sql="select * from d_pingmian_order where itemid='$r[itemid]' and designer='$_company'";
			$m=$db->get_one($sql);
			
			if($m){
				$r['m']="1";
			}else{
				$r['m']="2";
			}

		}
		if($r['status']==7){
		
			$sql="select * from d_pingmian_order where itemid='$r[itemid]' and designer='$_company'";
			$m=$db->get_one($sql);
				
			if($m){
				$r['m']="1";
			}else{
				$r['m']="2";
			}
		
		}
		if($r['status'] == 6) {
			$gone = $DT_TIME - $r['updatetime'];
			if($gone > ($MOD['trade_day']*35000 + $r['add_time']*3600)) {
				$r['lefttime'] = 0;
			} else {
				$r['lefttime'] = secondstodate($MOD['trade_day']*35000 + $r['add_time']*3600 - $gone);
			}
		}
		$r[c]=$db->get_one("select count(*) as c from d_pingmian_order_1 where rid=$r[itemid]");
		$r[count]=$r[c][c];
		$r['addtime'] = date("Y-m-d H:i:s",$r[addtime]);
		$r[buyer_receive] = explode("-",$r[buyer_receive]);
		$r[buyer_receive] = implode("<br>",$r[buyer_receive]);
		$r['updatetime'] = str_replace(' ', '<br/>', timetodate($r['updatetime'], 5));
		$r['linkurl'] = $EXT['linkurl'].'redirect.php?mid=16&itemid='.$r['mallid'];
		$r['dstatus'] = $_status[$r['status']];
		$r['money'] = $r['amount'] + $r['fee'];
		$r[status_zt]=$L['logo_trade_status'][$r[status]];
		if($_username==$r['designer']){
			$r['d']="1";
		}else{
			$r['d']="2";
		}
	    
		$r['money'] = number_format($r['money'], 2, '.', '');
		$amount += $r['amount'];
		$fee += $r['fee'];
		$trades[] = $r;
	}
	$money = $amount + $fee;
	$money = number_format($money, 2, '.', '');
	$forward = urlencode($DT_URL);
	$head_title = $L['trade_title'];
	}
	
}

if($step=='pay' || $step=='pay_1' || $step=='pay_2'){
	include template('trade', $module);
}else if($step=="index"){
	$gone = $DT_TIME - $td['updatetime'];
	if($gone > ($MOD['trade_day']*35000 + $td['add_time']*3600)) {
		$td['lefttime'] = 0;
	} else {
		$td['lefttime'] = secondstodate($MOD['trade_day']*35000 + $td['add_time']*3600 - $gone);
	}
	
	include template('design_1', $module);
}else if($step=="logo" || $step=="upload_5" ){
	include template('design_0', $module);
}else if($step=="design"){
	include template('design_2', $module);
}else if($step==''){
	include template('design', $module);
}else{
	include template('trade', $module);
}


?>