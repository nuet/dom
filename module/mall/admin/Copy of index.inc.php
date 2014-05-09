<?php
defined('IN_DESTOON') or exit('Access Denied');
require MD_ROOT.'/mall.class.php';
require DT_ROOT.'/lang/zh-cn/member.inc.php';
$do = new mall($moduleid);
$menus = array (
    array('添加商品', '?moduleid='.$moduleid.'&action=add'),
    array('商品列表', '?moduleid='.$moduleid),
    array('订单管理','?moduleid='.$moduleid.'&file=order'),
    array('回收站', '?moduleid='.$moduleid.'&action=recycle'),
    array('移动分类', '?moduleid='.$moduleid.'&action=move'),
    
);
$timenow = timetodate($DT_TIME, 3);
$memberurl = $MOD['linkurl'];
$myurl = userurl($_username);
if(in_array($action, array('add', 'edit'))) {
	$FD = cache_read('fields-'.substr($table, strlen($DT_PRE)).'.php');
	if($FD) require DT_ROOT.'/include/fields.func.php';
	isset($post_fields) or $post_fields = array();
	$CP = $MOD['cat_property'];
	if($CP) require DT_ROOT.'/include/property.func.php';
	isset($post_ppt) or $post_ppt = array();
	
}

if($_catids || $_areaids) require DT_ROOT.'/admin/admin_check.inc.php';

if(in_array($action, array('', 'check', 'expire', 'reject', 'recycle'))) {
	$sfields = array('模糊',  '商品名称', '商品品牌', '联系人', '联系电话', '联系地址', '电子邮件', '联系MSN', '联系QQ', '会员名', 'IP');
	$dfields = array('keyword', 'title', 'brand', 'truename', 'telephone', 'address', 'email', 'msn', 'qq','username', 'ip');
	$sorder  = array('结果排序方式', '更新时间降序', '更新时间升序', '添加时间降序', '添加时间升序', VIP.'级别降序', VIP.'级别升序', '商品单价降序', '商品单价升序', '订单数量降序', '订单数量升序', '销售数量降序', '销售数量升序', '库存总量降序', '库存总量升序', '评论次数降序', '评论次数升序', '浏览人气降序', '浏览人气升序', '信息ID降序', '信息ID升序');
	$dorder  = array($MOD['order'], 'edittime DESC', 'edittime ASC', 'addtime DESC', 'addtime ASC', 'vip DESC', 'vip ASC', 'price DESC', 'price DESC', 'orders DESC', 'orders ASC', 'sales DESC', 'sales ASC', 'amount DESC', 'amount ASC', 'comments DESC', 'comments ASC', 'hits DESC', 'hits ASC', 'itemid DESC', 'itemid ASC');

	$level = isset($level) ? intval($level) : 0;
	isset($fields) && isset($dfields[$fields]) or $fields = 0;
	isset($order) && isset($dorder[$order]) or $order = 0;
	$elite = isset($elite) ? intval($elite) : 0;
	$price = isset($price) ? intval($price) : 0;

	isset($datetype) && in_array($datetype, array('edittime', 'addtime')) or $datetype = 'edittime';
	$fromdate = isset($fromdate) && is_date($fromdate) ? $fromdate : '';
	$fromtime = $fromdate ? strtotime($fromdate.' 0:0:0') : 0;
	$todate = isset($todate) && is_date($todate) ? $todate : '';
	$totime = $todate ? strtotime($todate.' 23:59:59') : 0;
	
	$minprice = isset($minprice) ? dround($minprice) : '';
	$minprice or $minprice = '';
	$maxprice = isset($maxprice) ? dround($maxprice) : '';
	$maxprice or $maxprice = '';
	$minorders = isset($minorders) ? intval($minorders) : '';
	$minorders or $minorders = '';
	$maxorders = isset($maxorders) ? intval($maxorders) : '';
	$maxorders or $maxorders = '';
	$minsales = isset($minsales) ? intval($minsales) : '';
	$minsales or $minsales = '';
	$maxsales = isset($maxsales) ? intval($maxsales) : '';
	$maxsales or $maxsales = '';
	$minamount = isset($minamount) ? intval($minamount) : '';
	$minamount or $minamount = '';
	$maxamount = isset($maxamount) ? intval($maxamount) : '';
	$maxamount or $maxamount = '';
	$mincomments = isset($mincomments) ? intval($mincomments) : '';
	$mincomments or $mincomments = '';
	$maxcomments = isset($maxcomments) ? intval($maxcomments) : '';
	$maxcomments or $maxcomments = '';
	$minvip = isset($minvip) ? intval($minvip) : '';
	$minvip or $minvip = '';
	$maxvip = isset($maxvip) ? intval($maxvip) : '';
	$maxvip or $maxvip = '';
	$itemid or $itemid = '';

	$fields_select = dselect($sfields, 'fields', '', $fields);
	$level_select = level_select('level', '级别', $level);
	$order_select  = dselect($sorder, 'order', '', $order);

	$condition = '';
	if($_childs) $condition .= " AND catid IN (".$_childs.")";//CATE
	if($_areaids) $condition .= " AND areaid IN (".$_areaids.")";//CITY
	if($keyword) $condition .= " AND $dfields[$fields] LIKE '%$keyword%'";
	if($catid) $condition .= ($CAT['child']) ? " AND catid IN (".$CAT['arrchildid'].")" : " AND catid=$catid";
	if($areaid) $condition .= ($ARE['child']) ? " AND areaid IN (".$ARE['arrchildid'].")" : " AND areaid=$areaid";

	if($level) $condition .= " AND level=$level";
	if($elite) $condition .= " AND elite>0";
	if($price) $condition .= " AND price>0";
	if($minprice)  $condition .= " AND price>=$minprice";
	if($maxprice)  $condition .= " AND price<=$maxprice";
	if($minorders)  $condition .= " AND orders>=$minorders";
	if($maxorders)  $condition .= " AND orders<=$maxorders";
	if($minsales)  $condition .= " AND sales>=$minsales";
	if($maxsales)  $condition .= " AND sales<=$maxsales";
	if($minamount)  $condition .= " AND amount>=$minamount";
	if($maxamount)  $condition .= " AND amount<=$maxamount";
	if($mincomments)  $condition .= " AND comments>=$mincomments";
	if($maxcomments)  $condition .= " AND comments<=$maxcomments";
	if($minvip)  $condition .= " AND vip>=$minvip";
	if($maxvip)  $condition .= " AND vip<=$maxvip";
	if($fromtime) $condition .= " AND `$datetype`>=$fromtime";
	if($totime) $condition .= " AND `$datetype`<=$totime";
	if($itemid) $condition .= " AND itemid=$itemid";

	$timetype = strpos($dorder[$order], 'add') !== false ? 'add' : '';
}
switch($action) {
	case 'express':
			include tpl('express', $module);
		break;
	case 'add':
		if($submit) {
			if($do->pass($post)) {
				if($FD) fields_check($post_fields);
				if($CP) property_check($post_ppt);
				$do->add($post);
				if($FD) fields_update($post_fields, $table, $do->itemid);
				if($CP) property_update($post_ppt, $moduleid, $post['catid'], $do->itemid);
				if($MOD['show_html'] && $post['status'] > 2) $do->tohtml($do->itemid);
				dmsg('添加成功', '?moduleid='.$moduleid.'&action='.$action);
			} else {
				msg($do->errmsg);
			}
		} else {
			foreach($do->fields as $v) {
				isset($$v) or $$v = '';
			}
			$content = '';
			$status = 3;
			$addtime = timetodate($DT_TIME);
			$username = $_username;
			$item = array();
			$menuid = 0;
			$tname = $menus[$menuid][0];
			isset($url) or $url = '';
			if($url) {
				$tmp = fetch_url($url);
				if($tmp) extract($tmp);
			}
			$EXP = array();
			$result = $db->query("SELECT * FROM {$DT_PRE}mall_express WHERE username='$username' AND parentid=0 ORDER BY listorder ASC,itemid ASC LIMIT 100");
			while($r = $db->fetch_array($result)) {
				$EXP[] = $r;
			}	echo tpl('edit', $module);
			include tpl('edit', $module);
		}
	break;
	case 'edit':
		$itemid or msg();
		$do->itemid = $itemid;
		if($submit) {
			if($do->pass($post)) {
				if($FD) fields_check($post_fields);
				if($CP) property_check($post_ppt);
				if($FD) fields_update($post_fields, $table, $do->itemid);
				if($CP) property_update($post_ppt, $moduleid, $post['catid'], $do->itemid);
				$do->edit($post);
				dmsg('修改成功', $forward);
			} else {
				msg($do->errmsg);
			}
		} else {
			$item = $do->get_one();
			extract($item);
			$EXP = array();
			$result = $db->query("SELECT * FROM {$DT_PRE}mall_express WHERE username='$username' AND parentid=0 ORDER BY listorder ASC,itemid ASC LIMIT 100");
			while($r = $db->fetch_array($result)) {
				$EXP[] = $r;
			}
			$addtime = timetodate($addtime);
			$menuon = array('5', '4', '2', '1', '3');
			$menuid = $menuon[$status];
			$tname = '修改'.$MOD['name'];
			include tpl($action, $module);
		}
	break;
	case 'move':
		if($submit) {
			$fromids or msg('请填写来源ID');
			if($tocatid) {
				$db->query("UPDATE {$table} SET catid=$tocatid WHERE `{$fromtype}` IN ($fromids)");
				dmsg('移动成功', $forward);
			} else {
				msg('请选择目标分类');
			}
		} else {
			$itemid = $itemid ? implode(',', $itemid) : '';
			$menuid = 5;
			include tpl($action, $module);
		}
	break;
	case 'update':
		is_array($itemid) or msg('请选择商品');
		foreach($itemid as $v) {
			$do->update($v);
		}
		dmsg('更新成功', $forward);
	break;
	case 'tohtml':
		is_array($itemid) or msg('请选择商品');
		foreach($itemid as $itemid) {
			tohtml('show', $module);
		}
		dmsg('更新成功', $forward);
	break;
	case 'delete':
		$itemid or msg('请选择商品');
		isset($recycle) ? $do->recycle($itemid) : $do->delete($itemid);
		dmsg('删除成功', $forward);
	break;
	case 'restore':
		$itemid or msg('请选择商品');
		$do->restore($itemid);
		dmsg('还原成功', $forward);
	break;
	case 'refresh':
		$itemid or msg('请选择商品');
		$do->refresh($itemid);
		dmsg('刷新成功', $forward);
	break;
	case 'clear':
		$do->clear();
		dmsg('清空成功', $forward);
	break;
	case 'level':
		$itemid or msg('请选择商品');
		$level = intval($level);
		$do->level($itemid, $level);
		dmsg('级别设置成功', $forward);
	break;
	case 'type':
		$itemid or msg('请选择商品');
		$tid = intval($tid);
		array_key_exists($tid, $TYPE) or $tid = 0;
		$do->type($itemid, $tid);
		dmsg('类型设置成功', $forward);
	break;
	case 'recycle':
		$lists = $do->get_list('status=0'.$condition, $dorder[$order]);
		$menuid = 5;
		include tpl('index', $module);
	break;
	case 'reject':
		if($itemid && !$psize) {
			$do->reject($itemid);
			dmsg('拒绝成功', $forward);
		} else {
			$lists = $do->get_list('status=1'.$condition, $dorder[$order]);
			$menuid = 4;
			include tpl('index', $module);
		}
	break;
	case 'expire':
		if($itemid && !$psize) {
			$do->unsale($itemid);
			dmsg('下架成功', $forward);
		} else {
			$lists = $do->get_list('status=4'.$condition);
			$menuid = 3;
			include tpl('index', $module);
		}
	break;
	case 'onsale':
		$itemid or msg('请选择商品');
		$do->onsale($itemid);
		dmsg('上架成功', $forward);
	break;
	case 'relate_del':
		$itemid or msg('请选择商品');
		$do->itemid = $itemid;
		$M = $do->get_one();
		($M && $M['status'] == 3) or msg('请选择商品');
		$id = isset($id) ? intval($id) : 0;
		$id or msg('请选择移除商品');
		$do->itemid = $id;
		$A = $do->get_one();
		$do->relate_del($M, $A);
		dmsg('移除成功', '?moduleid='.$moduleid.'&file='.$file.'&itemid='.$itemid.'&action=relate');
	break;
	case 'relate_add':
		$relate_name = isset($relate_name) ? htmlspecialchars(trim($relate_name)) : '';
		$relate_name or msg('请填写关联名称');
		$itemid or msg('请选择商品');
		$do->itemid = $itemid;
		$M = $do->get_one();
		($M && $M['status'] == 3) or msg('请选择商品');
		$id = isset($id) ? intval($id) : 0;
		$id or msg('请选择关联商品');
		$do->itemid = $id;
		$A = $do->get_one();
		($A && $A['status'] == 3 && $A['username'] == $M['username']) or msg('请选择关联商品');
		if($itemid == $id) msg('选择的商品已经存在');
		$do->relate_add($M, $A, $relate_name);
		dmsg('新增成功', '?moduleid='.$moduleid.'&file='.$file.'&itemid='.$itemid.'&action=relate');
	break;
	case 'relate':
		$itemid or msg('请选择商品');
		$do->itemid = $itemid;
		$M = $do->get_one();
		($M && $M['status'] == 3) or msg('请选择商品');
		if($submit) {
			$relate_name = isset($relate_name) ? htmlspecialchars(trim($relate_name)) : '';
			$relate_name or msg('请填写关联名称');
			$do->relate($M, $post, $relate_name);
			dmsg('更新成功', '?moduleid='.$moduleid.'&file='.$file.'&itemid='.$itemid.'&action=relate');
		} else {
			$lists = $do->relate_list($M);
			include tpl('relate', $module);
		}
	break;
	
	case 'check':
		if($itemid && !$psize) {
			$do->check($itemid);
			dmsg('审核成功', $forward);
		} else {
			$lists = $do->get_list('status=2'.$condition, $dorder[$order]);
			$menuid = 2;
			include tpl('index', $module);
		}
	break;
	case 'check_sj':

		if($itemid && !$psize) {
			
		
	   

			//通过设计师作品
			if($t=="add"){
				$p=implode(",",$itemid);
			
					
					$sql="select * from d_mall_order_1 a,d_mall_order b where a.rid=b.itemid and a.id in($p) and a. checked=1 group by a.rid";
				$order_sql=$db->query($sql);
				while($rs=$db->fetch_array($order_sql)){
					$rm=$db->get_one("select * from d_member where username='$rs[buyer]'");
				   $rn=$db->get_one("select * from d_member where username='$rs[company_id]'");
				   $rn[itemid]=$rs[itemid];
				   $rn[url]=$CFG[url].'member/trade.php?itemid='.$rs[itemid];
			      $rs[url] = $CFG[url].'member/trade.php?itemid='.$rs[itemid];
			 	 if($sms=="发送短信通知"){	
					//- send sms start-//
					$mess=$mess;
					$message = lang('sms->wel_index', array($rm['truename'],$rs['itemid']));
					$message = strip_sms($message);
					send_sms($rm[mobile], $message);
			 		//- send sms start-//
				 }
					//- send email start-//
					$title =$L[order_index_tz];
					$mess=$mess;
					$content = ob_template('ordex_index', 'mail');
					send_mail($rm[email], $title, stripslashes($content));
					//- send email end-//
				
					//- send web_in email start-//
					$touser = $rm['username'];
					send_message($touser, $title, $content);
					
					
					
					$title =$L[order_index_tz];
					$mess=$mess;
					$content = ob_template('sjs_index', 'mail');
					send_mail($rn[email], $title, stripslashes($content));
					//- send email end-//
				
					//- send web_in email start-//
					$touser =  $rn['username'];
					send_message($touser, $title, $content);
					
					
					//- send web_in email end-//
					$order_1[]=$rs;
				
					
				}
			
				
				$sql="update d_mall_order_1 set checked=1 where  id in($p)";
				$db->query($sql);
				dmsg('审核成功', $forward);
			}else if($t=='fall'){
				$p=implode(",",$itemid);
        	$sql="update d_mall_order_1 set checked=2 where  id in($p)";
         	$sql="select * from d_mall_order_1 a,d_mall_order b where a.rid=b.itemid and a.id in($p) and a. checked=1 group by a.rid";
				$order_sql=$db->query($sql);
				while($rs=$db->fetch_array($order_sql)){
					$rm=$db->get_one("select * from d_member where username='$rs[buyer]'");
				   $rn=$db->get_one("select * from d_member where username='$rs[company_id]'");
				   $rn[itemid]=$rs[itemid];
				   $rn[url]=$CFG[url].'member/trade.php?itemid='.$rs[itemid];
			      $rs[url] = $CFG[url].'member/trade.php?itemid='.$rs[itemid];				
					$mess=$mess;
					$title =$L[order_index_tz];
					$rn[mess]=$mess;
					$content = ob_template('sjs_index_fall', 'mail');
					send_mail($rn[email], $title, stripslashes($content));
					//- send email end-//
				
					//- send web_in email start-//
					$touser =  $rn['username'];
					send_message($touser, $title, $content);
					
					
					//- send web_in email end-//
					$order_1[]=$rs;
					
				}
			
			
      	
				$db->query($sql);
				dmsg('审核失败', $forward);
			}else if($t=='del'){
				$p=implode(",",$itemid);
				$sql="delete from d_mall_order_1 where  id in($p)";
				$db->query($sql);
				dmsg('删除作品成功', $forward);
			}
	
		} else {

		 $table1 = $DT_PRE.'mall_order_1';
			$itemid or $itemid = '';
			$mallid = isset($mallid) && $mallid ? intval($mallid) : '';
			isset($designer) or $designer = '';
			isset($amounts) or $amounts = '';
			isset($fromtime) or $fromtime = '';
			isset($totime) or $totime = '';
	    
			isset($dtotime) or $dtotime = '';
			isset($timetype) or $timetype = 'B.addtime';
			isset($minamount) or $minamount = '';
			isset($maxamount) or $maxamount = '';
			isset($order) && isset($dorder[$order]) or $order = 0;
			$condition = '1';
			if($fromtime) $condition .= " AND B.$timetype>".(strtotime($fromtime.' 00:00:00'));
			if($totime) $condition .= " AND B.$timetype<".(strtotime($totime.' 23:59:59'));

			if($designer) $condition .= " AND designer='$designer'";
			if($itemid){	$condition.=" AND rid=$itemid";}
			if($minamount != '') $condition .= " AND $mtype>=$minamount";
			if($maxamount != '') $condition .= " AND $mtype<=$maxamount";
			if($page > 1 && $sum) {
				$items = $sum;
			} else {
				$r = $db->get_one("select count(*) as num from d_mall_order A,d_mall_order_1 B where A.itemid=B.rid and B.level=1 AND $condition");
				$items = $r['num'];
			}
			$pages = pages($items, $page, $pagesize);
			$lists = array();
			$result = $db->query("SELECT * FROM d_mall_order A,d_mall_order_1 B  WHERE A.itemid=B.rid and B.level=1 AND $condition ORDER BY B.addtime desc LIMIT $offset,$pagesize");
			$amount = $fee = $money = 0;
			
			while($r = $db->fetch_array($result)) {
				
//  				for($i=0;$i<=count($a);$i++){
//  					$pic_yz=strpos($r['upload'],'thumb');//缩略图都包含thumb
//  					if($pic_yz){
//  						$m[]=$pic_yz;
//  					}else{
// 						$m="";
//  					}
				
//  				}
//  				if($r['upload']){
//  					$r['upload1']=$r['upload'];	
//  				}else{
//  					$r['upload1']=$CFG[url]."skin/default/image/nopic60.gif';";
//  			}
//  				if($m){
// 					$r[upload]="<a href=\"$CFG[url]/member/template.php?id=$r[id]\" target='_blank'><img src=\"$r[upload1]\" width='60'height='60' style='padding:5px;'/></a>";
// 				}else{
//  					$r[upload]="<a href='$r[upload]'><img src=\"$CFG[url]member/image/psd.png\" width='60px' height='60px'/></a>";
//  				}
				$lists[] = $r;
			}
		
			include tpl('check_sj', $module);
		}
		break;
		case 'check_sj1':
		
			if($itemid && !$psize) {
				//通过设计师作品
				if($t=="add"){
					$p=implode(",",$itemid);
					
					
							
						$sql="select * from d_mall_order_1 a,d_mall_order b where a.rid=b.itemid and a.id in($p) and a. checked=1 group by a.rid";
					
						$order_sql=$db->query($sql);
						while($rs=$db->fetch_array($order_sql)){
							$rm=$db->get_one("select * from d_member where username='$rs[buyer]'");
					
							$rs[url] = $CFG[url].'member/trade.php?itemid='.$rs[itemid];
							if($sms=="发送短信通知"){
							//- send sms start-//
						$message = lang('sms->wel_lm', array($rm['truename'],$rs['itemid']));
 						$message = strip_sms($message);
						send_sms($rm[mobile], $message);
							//- send sms start-//
							}
							//- send email start-//
							$title =$L[order_index_tz];
							$content = ob_template('ordex_lm', 'mail');
							send_mail($rm[email], $title, stripslashes($content));
							//- send email end-//
						
							//- send web_in email start-//
							$touser = $rm['username'];
							send_message($touser, $title, $content);
							//- send web_in email end-//
					
					
							$order_1[]=$rs;
						
							
					}
					
					$sql="update d_mall_order_1 set checked=1 where  id in($p)";
					$db->query($sql);
					dmsg('审核成功', $forward);
				}else if($t=='fall'){
					$p=implode(",",$itemid);
					$sql="update d_mall_order_1 set checked=2 where  id in($p)";
					$db->query($sql);
					dmsg('审核失败', $forward);
				}else if($t=='del'){
					$p=implode(",",$itemid);
					$sql="delete from d_mall_order_1 where  id in($p)";
					$db->query($sql);
					dmsg('删除作品成功', $forward);
				}
		
			} else {
		
				$table1 = $DT_PRE.'mall_order_1';
				$itemid or $itemid = '';
				$mallid = isset($mallid) && $mallid ? intval($mallid) : '';
				isset($designer) or $designer = '';
				isset($amounts) or $amounts = '';
				isset($fromtime) or $fromtime = '';
				isset($totime) or $totime = '';
			  
				isset($dtotime) or $dtotime = '';
				isset($timetype) or $timetype = 'B.addtime';
				isset($minamount) or $minamount = '';
				isset($maxamount) or $maxamount = '';
				isset($order) && isset($dorder[$order]) or $order = 0;
				$condition = '1';
				if($fromtime) $condition .= " AND B.$timetype>".(strtotime($fromtime.' 00:00:00'));
				if($totime) $condition .= " AND B.$timetype<".(strtotime($totime.' 23:59:59'));
// 				if($level==1){
// 					$condition.=" AND level=$level";
// 				}else if($level==2){
// 					$condition.=" AND level=$level";
// 				}else if($level==3){
// 					$condition.=" AND level=$level";
// 				}
				if($designer) $condition .= " AND designer='$designer'";
				if($itemid){	$condition.=" AND rid=$itemid";}
				if($minamount != '') $condition .= " AND $mtype>=$minamount";
				if($maxamount != '') $condition .= " AND $mtype<=$maxamount";
				if($page > 1 && $sum) {
					$items = $sum;
				} else {
					$r = $db->get_one("select count(*) as num from d_mall_order A,d_mall_order_1 B where A.itemid=B.rid and B.level=2 AND $condition");
					$items = $r['num'];
				}
				$pages = pages($items, $page, $pagesize);
				$lists = array();
				$result = $db->query("SELECT * FROM d_mall_order A,d_mall_order_1 B  WHERE A.itemid=B.rid and B.level=2 AND $condition ORDER BY B.addtime desc LIMIT $offset,$pagesize");
				$amount = $fee = $money = 0;
					
				while($r = $db->fetch_array($result)) {
		
// 					for($i=0;$i<=count($a);$i++){
// 						$pic_yz=strpos($r['upload'],'thumb');//缩略图都包含thumb
// 						if($pic_yz){
// 							$m[]=$pic_yz;
// 						}else{
// 							$m="";
// 						}
		
// 					}
// 					if($r['upload']){
// 						$r['upload1']=$r['upload'];
// 					}else{
// 						$r['upload1']=$CFG[url]."skin/default/image/nopic60.gif';";
// 					}
// 					if($m){
// 						$r[upload]="<a href=\"$CFG[url]/member/template.php?id=$r[id]\" target='_blank'><img src=\"$r[upload1]\" width='60'height='60' style='padding:5px;'/></a>";
// 					}else{
// 						$r[upload]="<a href='$r[upload]'><img src=\"$CFG[url]member/image/psd.png\" width='60px' height='60px'/></a>";
// 					}
					$lists[] = $r;
				}
		
				include tpl('check_sj1', $module);
			}
			break;
			case 'check_sj2':
				if($_POST[pwd]!=""){
					$db->query("update d_mall_order_1 set pwd='$_POST[pwd]'");
				}
				if($itemid && !$psize) {
					//通过设计师作品
					if($t=="add"){
						$p=implode(",",$itemid);
						$sql="update d_mall_order_1 set checked=1 where  id in($p)";
						$db->query($sql);
						dmsg('审核成功', $forward);
					}else if($t=='fall'){
						$p=implode(",",$itemid);
						$sql="update d_mall_order_1 set checked=2 where  id in($p)";
						$db->query($sql);
						dmsg('审核失败', $forward);
					}else if($t=='del'){
						$p=implode(",",$itemid);
						$sql="delete from d_mall_order_1 where  id in($p)";
						$db->query($sql);
						dmsg('删除作品成功', $forward);
					}
			
				} else {
			
					$table1 = $DT_PRE.'mall_order_1';
					$itemid or $itemid = '';
					$mallid = isset($mallid) && $mallid ? intval($mallid) : '';
					isset($designer) or $designer = '';
					isset($amounts) or $amounts = '';
					isset($fromtime) or $fromtime = '';
					isset($totime) or $totime = '';
				  
					isset($dtotime) or $dtotime = '';
					isset($timetype) or $timetype = 'B.addtime';
					isset($minamount) or $minamount = '';
					isset($maxamount) or $maxamount = '';
					isset($order) && isset($dorder[$order]) or $order = 0;
					$condition = '1';
					if($fromtime) $condition .= " AND B.$timetype>".(strtotime($fromtime.' 00:00:00'));
					if($totime) $condition .= " AND B.$timetype<".(strtotime($totime.' 23:59:59'));
				
					if($designer) $condition .= " AND designer='$designer'";
					if($itemid){	$condition.=" AND rid=$itemid";}
					if($minamount != '') $condition .= " AND $mtype>=$minamount";
					if($maxamount != '') $condition .= " AND $mtype<=$maxamount";
					if($page > 1 && $sum) {
						$items = $sum;
					} else {
						$r = $db->get_one("select count(*) as num from d_mall_order A,d_mall_order_1 B where A.itemid=B.rid and B.level=3 AND $condition");
						$items = $r['num'];
					}
					$pages = pages($items, $page, $pagesize);
					$lists = array();
					$result = $db->query("SELECT * FROM d_mall_order A,d_mall_order_1 B  WHERE A.itemid=B.rid and B.level=3 AND $condition ORDER BY B.addtime desc LIMIT $offset,$pagesize");
					$amount = $fee = $money = 0;
						
					while($r = $db->fetch_array($result)) {
					
						$lists[] = $r;
					}
			
					include tpl('check_sj2', $module);
				}
				break;
	default:
		$lists = $do->get_list('status=3'.$condition, $dorder[$order]);
		
		$menuid = 1;
		
		include tpl('index', $module);
	break;
}
?>