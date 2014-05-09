<?php
defined('IN_DESTOON') or exit('Access Denied');
require MD_ROOT.'/mall.class.php';
require DT_ROOT.'/lang/zh-cn/member.inc.php';
require DT_ROOT.'/lang/zh-cn/sms.inc.php';
$menus = array (
    array('商品管理', '?moduleid='.$moduleid),
    array('订单管理', '?moduleid='.$moduleid.'&file='.$file),
    array('统计报表', '?moduleid='.$moduleid.'&file='.$file.'&action=stats'),
    array('审核设计师首页','?moduleid=16&action=check_sj'),
    array('审核设计师PSD','?moduleid=16&action=check_sj2'),
 
   
);

$_status= array(
		'<span style="color:#0000FF;">等待付款</span>',
	    '<span style="color:#0000FF;">等待需求处理</span>',
		'<span style="color:#0000FF;">需求已提交<br/>等待入围初稿</span>',
		'<span style="color:#FF6600;">确定最终首页作品</span>',
		'<span style="color:#008080;">等待买家付款<br/>等待栏目页</span>',
		'<span style="color:#FF0000;">等待设计师<br/>上传作品</span>',
'<i style="color:#FF0000;">等待程序<br/>制作中</i>',
	'<i style="color:#008080;text-decoration:underline;">网站制作完成<br>请验收</i>',
    '<i style="color:#FF6600;text-decoration:underline;">付款并上线</i>',
		'<span style="color:#0000FF;text-decoration:underline;">交易成功</span>',
		'<span style="color:#FF6600;text-decoration:underline;">买家关闭交易</span>',
		'<span style="color:#888888;text-decoration:line-through;">卖家关闭交易</span>',
);
$dstatus = array(
	'等待付款',
	'等待提交需求',
	'需求已提交,等待入围初稿',
	'确定最终首页作品',
	'等待买家付款,等待栏目页',
	'等待设计师上传作品',
	'等待程序制作',
	'网站制作完成请验收',
    '付款并上线',
	'交易成功',
	'买家关闭交易',
	'卖家关闭交易',
);


$STARS = $L['star_type'];
$table = $DT_PRE.'mall_order';
$table1 = $DT_PRE.'mall_order_1';

function send_msg($type,$title,$email,$touser){
	$content = ob_template($type, 'mail');
	send_mail($email, $title, stripslashes($content));
	send_message($touser, $title, $content);
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
if($action == 'refund' || $action == 'show' || $action == 'comment') {
	$itemid or msg('未指定记录');
	$item = $db->get_one("SELECT * FROM {$table} WHERE itemid=$itemid ");
	$item['use']=$db->get_one("SELECT * FROM d_company WHERE company='$item[designer]' ");
    $item['userid']=$item['use'][username];
	$item_index=$db->get_one("select * from {$table1} where rid=$itemid and level=1 and checked=1 and status=1 and last=1 ");
    $item_index[addtime]=date("Y-m-d H:i");

	$wsql="select * from d_mall_order_1  where  checked=1 and level=1 and rid='$itemid' order by addtime desc";
					$wall_sql=$db->query($wsql);
					while ($wall=$db->fetch_array($wall_sql)) 
					{
					$wall[addtime]=date("Y-m-d H:i",$wall[addtime]);
					 $index_alls[]=$wall;
					  
				}
    
	$rs_sql=$db->query("select * from {$table1} where rid=$itemid and level=2  and checked=1");
    while($rv=$db->fetch_array($rs_sql)){
    	$rv[addtime]=date("Y-m-d H:i",$rv[addtime]);
    	$item_lms[]=$rv;
    }	
    
    
    $psd_sql=$db->query("select * from {$table1} where rid=$itemid and level=3 and checked=1");
    while($rt=$db->fetch_array($psd_sql)){
    	$rt[addtime]=date("Y-m-d H:i",$rt[addtime]);
    	$item_psds[]=$rt;
    }
 
    $item_doc=$db->get_one("select * from d_mall_order_xq where itemid=$itemid");
    	$item_doc[pic_logo]=pic_add($item_doc[logo]);
		$item_doc[pic_lm]=pic_add($item_doc[lm]);
		$item_doc[pic_contact]=pic_add($item_doc[contact]);
		$item_doc[pic_ad]=pic_add($item_doc[ad]);
     $zl=$db->get_all("select * from d_mall_zl where itemid='$itemid'");

    $pic=$db->get_one("select * from d_mall_order_1 where id='$id'");
    $a=array('JPG','PNG','GIF','BMp','jpg','png','JPG');
    
    //匹配图片
    
    for($i=0;$i<=count($a);$i++){
    	$pic_yz=strpos($item_doc['logo'],$a[$i]);
    	if($pic_yz){
    		$t[]=$pic_yz;
    	}
    
    }
    
    /*    by 摩恩科技
     * 判断图片，
    * */
    if($t){
        $item_doc[upload]="<img  src='$item_doc[logo]' style='width:70px;height:70px;'>";
    }else{
    	 $item_doc[upload]="<a href='#' onclick=\"down1('$item_doc[itemid]','contact')\" ><img src=\"$CFG[url]member/image/doc.png\" style='width:70px;height:70px;' /></a>"; 
    	 //onclick=\"down1('$item_doc[itemid]','contact')\"
    }
    
	$item or msg('记录不存在');
	$item['linkurl'] = $EXT['linkurl'].'redirect.php?mid='.$moduleid.'&itemid='.$item['mallid'];
	$item['money'] = $item['amount'] + $item['fee'];
	$item['addtime'] = timetodate($item['addtime'], 6);
	$item['updatetime'] = timetodate($item['updatetime'], 6);
}


switch($action) {
	
	case 'stats':
		$year = isset($year) ? intval($year) : date('Y', $DT_TIME);
		$year or $year = date('Y', $DT_TIME);
		$month = isset($month) ? intval($month) : date('n', $DT_TIME);
		isset($seller) or $seller = '';
		$chart_data = '';
		$T1 = $T2 = $T3 = 0;
		if($month) {
			$L = date('t', strtotime($year.'-'.$month.'-01'));
			for($i = 1; $i <= $L; $i++) {
				if($i > 1) $chart_data .= '\n';
				$chart_data .= $i;
				$F = strtotime($year.'-'.$month.'-'.$i.' 00:00:00');
				$T = strtotime($year.'-'.$month.'-'.$i.' 23:59:59');
				$condition = "addtime>=$F AND addtime<=$T";
				if($seller) $condition .= " AND seller='$seller'";
				$t = $db->get_one("SELECT SUM(`amount`) AS num1,SUM(`fee`) AS num2 FROM {$table} WHERE {$condition} AND status=4");
				$num1 = $t['num1'] ? dround($t['num1']) : 0;
				$num2 = $t['num2'] ? dround($t['num2']) : 0;
				$num = $num1 + $num2;
				$chart_data .= ';'.$num;
				$T1 += $num;
				$t = $db->get_one("SELECT SUM(`amount`) AS num1,SUM(`fee`) AS num2 FROM {$table} WHERE {$condition} AND status=6");
				$num1 = $t['num1'] ? dround($t['num1']) : 0;
				$num2 = $t['num2'] ? dround($t['num2']) : 0;
				$num = $num1 + $num2;
				$chart_data .= ';'.$num;
				$T2 += $num;
				$t = $db->get_one("SELECT SUM(`amount`) AS num1,SUM(`fee`) AS num2 FROM {$table} WHERE {$condition} AND status=7");
				$num1 = $t['num1'] ? dround($t['num1']) : 0;
				$num2 = $t['num2'] ? dround($t['num2']) : 0;
				$num = $num1 + $num2;
				$chart_data .= ';'.$num;
				$T3 += $num;
			}
			$title = $year.'年'.$month.'月交易报表';
			if($seller) $title = '['.$seller.'] '.$title;
		} else {
			for($i = 1; $i < 13; $i++) {
				if($i > 1) $chart_data .= '\n';
				$chart_data .= $i;
				$F = strtotime($year.'-'.$i.'-01 00:00:00');
				$T = strtotime($year.'-'.$i.'-'.date('t', $F).' 23:59:59');
				$condition = "addtime>=$F AND addtime<=$T";
				if($seller) $condition .= " AND seller='$seller'";
				$t = $db->get_one("SELECT SUM(`amount`) AS num1,SUM(`fee`) AS num2 FROM {$table} WHERE {$condition} AND status=4");
				$num1 = $t['num1'] ? dround($t['num1']) : 0;
				$num2 = $t['num2'] ? dround($t['num2']) : 0;
				$num = $num1 + $num2;
				$chart_data .= ';'.$num;
				$T1 += $num;
				$t = $db->get_one("SELECT SUM(`amount`) AS num1,SUM(`fee`) AS num2 FROM {$table} WHERE {$condition} AND status=6");
				$num1 = $t['num1'] ? dround($t['num1']) : 0;
				$num2 = $t['num2'] ? dround($t['num2']) : 0;
				$num = $num1 + $num2;
				$chart_data .= ';'.$num;
				$T2 += $num;
				$t = $db->get_one("SELECT SUM(`amount`) AS num1,SUM(`fee`) AS num2 FROM {$table} WHERE {$condition} AND status=7");
				$num1 = $t['num1'] ? dround($t['num1']) : 0;
				$num2 = $t['num2'] ? dround($t['num2']) : 0;
				$num = $num1 + $num2;
				$chart_data .= ';'.$num;
				$T3 += $num;
			}
			$title = $year.'年交易报表';
			if($seller) $title = '['.$seller.'] '.$title;
		}
		include tpl('order_stats', $module);
	break;
	case 'refund':
		if($item['status'] != 5) msg('此交易无需受理');
		if($submit) {
			isset($status) or msg('请指定受理结果');
			$content or msg('请填写操作理由');
			if($status == 6) {//已退款，买家胜 退款
				$db->query("UPDATE {$DT_PRE}member SET money=money+$item[money],locking=locking-$item[money] WHERE username='$item[buyer]'");
				$msg = '受理成功，交易状态已经改变为 已退款给买家';
			} else if($status == 7) {//已退款，卖家胜 付款
				$db->query("UPDATE {$DT_PRE}member SET locking=locking-$item[money] WHERE username='$item[buyer]'");
				money_record($item['buyer'], -$item['money'], '站内', 'system', '订单货到付款', '订单号:'.$itemid);
				money_add($item['seller'], $item['money']);
				money_record($item['seller'], $item['money'], '站内', 'system', '订单货到付款', '订单号:'.$itemid);
				$msg = '受理成功，交易状态已经改变为 已付款给卖家';
			} else {
				msg();
			}
			$db->query("UPDATE {$table} SET status=$status,editor='$_username',updatetime=$DT_TIME,refund_reason='$content' WHERE itemid=$itemid");
			msg($msg, $forward, 5);
		} else {
			include tpl('order_refund', $module);
		}
	break;
	case 'show':
		$cm = $db->get_one("SELECT * FROM {$DT_PRE}mall_comment WHERE itemid=$itemid");
		$cn = $db->get_one("SELECT * FROM d_mall_order_website WHERE itemid=$itemid");
		include tpl('order_show', $module);
	break;
	case 'lock':
	
		$mall=$db->get_one("select * from d_mall where itemid=$mallid");
	 	 $td=$db->get_one("select * from d_mall_order where itemid=$itemid");
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
	
			$order_sql=$db->query("select * from d_mall_order_1  group by company_id having level=1  and rid='$itemid' and status=0 and checked=1 order by addtime desc limit $mall[scount]");
	 
			while($order=$db->fetch_array($order_sql)){
       	
       	$rm=$db->get_one("select * from d_member where username='$order[company_id]'");
       	$url = $CFG[url].'/member/record.php';
       	 send_msg('last_fall',$L[order_acce],$rm[email],$rm[username]);
         send_mob('wel_acc',$rm['truename'],$itemid,$rm[mobile]);
	       	$orders[]=$order;
	       }
	
	
			foreach ($orders as $order){ 
				  $or=grade($order[designer]);
				 
				  if($or[0]==7 || $or[0]==6 ){
				
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
		
			//入围2个人
			if($mall[in_select]==2){
		
			if(strstr($td['in_index'], '<br/>')){
			      $indexs=explode("<br/>",$td['in_index']);
			      
			      foreach ($indexs as $r){
			      	if($r!=$td[designer]){
			      		
			      		$rm=$db->get_one("select * from d_member where company='$r'");
			      		$url = $CFG[url].'/member/record.php';
			      		
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
		  $url = $CFG[url].'/member/record.php';
		  send_msg('last_fall',$L[order_acce],$rm[email],$rm[username]);
		  send_mob('wel_acc',$rm['truename'],$itemid,$rm[mobile]);	  
		$money1+=$mall[last_money];
		$db->query("update d_mall_order set locks=1 where itemid=$itemid");
		  	dmsg('分配成功', $forward); 
		
		
		break;
	case 'shenhe':
	
	
	
		$rm=$db->get_one("select * from d_member where username='$_GET[buyer]'");
    
		if($_GET[shenhe]==2){
			$db->query("update  {$table} set status=2,updatetime='$DT_TIME' WHERE itemid=$itemid");
			$db->query("update  d_mall_order_xq set vcheck='$_GET[shenhe]' where itemid='$itemid'");

			$rm[msg]=$_GET[msg];
			//- send email start-//
			$title =$L[ziliao_shenhe];
			$content = ob_template('shenhe_access', 'mail');
			send_mail($rm[email], $title, $content);
			//- send email end-//
	
			//- send web_in email start-//
			$touser = $rm['username'];
			send_message($touser, $title, $content);
			//- send web_in email end-//
		}else{
			$db->query("update  d_mall_order_xq set vcheck='$_GET[shenhe]',addtime='' where itemid='$itemid'");
			$rm[msg]=$_GET[msg];
			//- send email start-//
			$title =$L[ziliao_shenhe];
			$content = ob_template('shenhe_fall', 'mail');
			send_mail($rm[email], $title, stripslashes($content));
			//- send email end-//
	
			//- send web_in email start-//
			$touser = $rm['username'];
			send_message($touser, $title, $content);
			//- send web_in email end-//
			
		}
		
		dmsg('审核成功', $forward);
		
		
		break;
	case 'edit':
		$cm = $db->get_one("SELECT * FROM d_mall_order_website WHERE itemid=$itemid");
		$order=$db->get_one("SELECT * FROM d_mall_order WHERE itemid=$itemid");
		if($cm){
			$action='edit';
		}else{
			$action='add';
		}
		if($submit) {
			if($num!=""){
				$db->query("update d_mall_order set url='$num' where itemid='$itemid'");
			}
			$db->query("update d_mall_order_website set username='$username',password='$password',url='$url',adminurl='$adminurl',note='$note',num='$num' where itemid=$itemid");
			dmsg('编辑成功', $forward);
		}		
		
		include tpl('order_website', $module);
		break;
	case 'comment':
		$cm = $db->get_one("SELECT * FROM {$DT_PRE}mall_comment WHERE itemid=$itemid");
		$cm or msg('评论不存在');
		$mallid = $item['mallid'];
		$post['seller_ctime'] = $post['seller_ctime'] ? strtotime($post['seller_ctime']) : 0;
		$post['seller_rtime'] = $post['seller_rtime'] ? strtotime($post['seller_rtime']) : 0;
		$post['buyer_ctime'] = $post['buyer_ctime'] ? strtotime($post['buyer_ctime']) : 0;
		$post['buyer_rtime'] = $post['buyer_rtime'] ? strtotime($post['buyer_rtime']) : 0;
		if($cm['seller_star'] != $post['seller_star']) {
			$s = $post['seller_star'];
			$s1 = 's'.$cm['seller_star'];
			$s2 = 's'.$post['seller_star'];
			$db->query("UPDATE {$DT_PRE}mall_order SET seller_star=$s WHERE itemid=$itemid");
			$db->query("UPDATE {$DT_PRE}mall_stat SET `$s2`=`$s2`+1 WHERE mallid=$mallid");
			if($cm['seller_star']) $db->query("UPDATE {$DT_PRE}mall_stat SET `$s1`=`$s1`-1 WHERE mallid=$mallid");
		}
		if($cm['buyer_star'] != $post['buyer_star']) {
			$s = $post['buyer_star'];
			$s1 = 'b'.$cm['buyer_star'];
			$s2 = 'b'.$post['buyer_star'];
			$db->query("UPDATE {$DT_PRE}mall_order SET buyer_star=$s WHERE itemid=$itemid");
			$db->query("UPDATE {$DT_PRE}mall_stat SET `$s2`=`$s2`+1 WHERE mallid=$mallid");
			if($cm['buyer_star']) $db->query("UPDATE {$DT_PRE}mall_stat SET `$s1`=`$s1`-1 WHERE mallid=$mallid");
		}
		$sql = '';
		foreach($post as $k=>$v) {
			$sql .= ",$k='$v'";
		}
        $sql = substr($sql, 1);
	    $db->query("UPDATE {$DT_PRE}mall_comment SET $sql WHERE itemid=$itemid");
		msg('修改成功', '?moduleid='.$moduleid.'&file='.$file.'&action=show&itemid='.$itemid.'#comment1');
	break;
	case 'status':
	$itemid or msg('未选择记录');
	$itemids = is_array($itemid) ? implode(',', $itemid) : $itemid;
	$db->query("update  {$table} set status='$_POST[status]' WHERE itemid IN ($itemids)");
	dmsg('修改成功', $forward);
	break;
	case 'delete':
		$itemid or msg('未选择记录');
		$itemids = is_array($itemid) ? implode(',', $itemid) : $itemid;
		$db->query("DELETE FROM {$table} WHERE itemid IN ($itemids)");
		dmsg('删除成功', $forward);
	break;
	default:
	
	
		$person=$db->get_one("select * from d_member where username='$buyer'");
		if($action=='add'){
			if($num!=""){
				$db->query("update d_mall_order set url='$num' where itemid='$itemid'");
			}
			$db->query("insert into d_mall_order_website (itemid,username,password,url,adminurl,note,num) values('$itemid','$username','$password','$url','$adminurl','$note','$num')");
			$db->query("update d_mall_order set status='7' where itemid='$itemid'");
			if($sms){
					$message = lang('sms->chengxu_last', array($person['truename'],$itemid));
					$message = strip_sms($message);
					send_sms($person[mobile], $message);	
			}
			  $url=$CFG[url].'member/trade.php?itemid='.$itemid;
				$title =$L[order_index_tz];
					$content = ob_template('chengxu_last', 'mail');
					send_mail($person[email], $title, stripslashes($content));
					//- send email end-//
				
					//- send web_in email start-//
					$touser = $person['username'];
					send_message($touser, $title, $content);
			dmsg('增加成功', $forward);
		}
		$sfields = array('按条件', '商品名称', '卖家', '买家', '订单金额', '附加金额', '附加名称', '买家名称', '买家地址', '买家邮编', '买家电话', '买家手机', '买家物流', '发货物流', '发货单号', '备注');
		$dfields = array('title', 'title', 'seller', 'buyer', 'amount', 'fee', 'fee_name', 'buyer_name', 'buyer_address', 'buyer_postcode', 'buyer_phone', 'buyer_mobile', 'buyer_receive', 'send_type', 'send_no', 'note');
		$sorder  = array('排序方式', '下单时间降序', '下单时间升序', '更新时间降序', '更新时间升序', '商品单价降序', '商品单价升序', '购买数量降序', '购买数量升序', '订单金额降序', '订单金额升序', '附加金额降序', '附加金额升序');
		$dorder  = array('itemid DESC', 'addtime DESC', 'addtime ASC', 'updatetime DESC', 'updatetime ASC', 'price DESC', 'price ASC', 'number DESC', 'number ASC', 'amount DESC', 'amount ASC', 'fee DESC', 'fee ASC');
		isset($fields) && isset($dfields[$fields]) or $fields = 0;
		$status = isset($status) && isset($dstatus[$status]) ? intval($status) : '';
		$itemid or $itemid = '';
		$mallid = isset($mallid) && $mallid ? intval($mallid) : '';
		$seller_star = isset($seller_star) ? intval($seller_star) : 0;
		$buyer_star = isset($buyer_star) ? intval($buyer_star) : 0;
		isset($seller) or $seller = '';
		isset($buyer) or $buyer = '';
		isset($amounts) or $amounts = '';
		isset($fromtime) or $fromtime = '';
		isset($totime) or $totime = '';
		isset($dfromtime) or $dfromtime = '';
		isset($dtotime) or $dtotime = '';
		isset($timetype) or $timetype = 'addtime';
		isset($mtype) or $mtype = 'money';
		isset($minamount) or $minamount = '';
		isset($maxamount) or $maxamount = '';
		isset($order) && isset($dorder[$order]) or $order = 0;
		$fields_select = dselect($sfields, 'fields', '', $fields);
		$status_select = dselect($dstatus, 'status', '状态', $status, 'style="width:200px;"', 1, '', 1);
		$order_select = dselect($sorder, 'order', '', $order);
		$condition = '1';
// 		if($person[role]=='客服'){ 	
// 			$condition ="B.support='$_username'";
// 		}
		if($keyword) $condition .= " AND A.$dfields[$fields] LIKE '%$keyword%'";
		if($fromtime) $condition .= " AND A.$timetype>".(strtotime($fromtime.' 00:00:00'));
		if($totime) $condition .= " AND A.$timetype<".(strtotime($totime.' 23:59:59'));
		if($status !== '') $condition .= " AND A.status='$status'";
		if($seller) $condition .= " AND A.seller='$seller'";
		if($buyer) $condition .= " AND A.buyer='$buyer'";
		if($itemid) $condition .= " AND A.itemid=$itemid";
		if($mallid) $condition .= " AND A.mallid=$mallid";
		if($seller_star) $condition .= " AND A.seller_star=$seller_star";
		if($buyer_star) $condition .= " AND A.buyer_star=$buyer_star";
		if($mtype == 'money') $mtype = "`amount`+`fee`";
		if($minamount != '') $condition .= " AND A.$mtype>=$minamount";
		if($maxamount != '') $condition .= " AND A.$mtype<=$maxamount";
		if($page > 1 && $sum) {
			$items = $sum;
		} else {
			$r = $db->get_one("SELECT COUNT(*) AS num FROM {$table} A,d_member B WHERE A.buyer=B.username and $condition");
			$items = $r['num'];
		}
		$pages = pages($items, $page, $pagesize);	
		$lists = array();
		$result = $db->query("SELECT * FROM {$table} A,d_member B WHERE A.buyer=B.username and  $condition ORDER BY A.$dorder[$order] LIMIT $offset,$pagesize");
		$amount = $fee = $money = 0;
		while($r = $db->fetch_array($result)) {
			$r['addtime'] = str_replace(' ', '<br/>', timetodate($r['addtime'], 5));
			$r['updatetime'] = str_replace(' ', '<br/>', timetodate($r['updatetime'], 5));
			
			$r['linkurl'] = $EXT['linkurl'].'redirect.php?mid='.$moduleid.'&itemid='.$r['mallid'];
			$r['dstatus'] = $_status[$r['status']];
			$r['money'] = $r['amount'] + $r['fee'];
			$amount += $r['amount'];
			$fee += $r['fee'];
			$lists[] = $r;
		}
		$money = $amount + $fee;
		include tpl('order', $module);
	break;
}
?>