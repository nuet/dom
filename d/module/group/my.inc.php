<?php 
defined('IN_DESTOON') or exit('Access Denied');
login();
require DT_ROOT.'/module/'.$module.'/common.inc.php';
$MG['group_limit'] > -1 or dalert(lang('message->without_permission_and_upgrade'), 'goback');
require DT_ROOT.'/include/post.func.php';
include load($module.'.lang');
include load('my.lang');
require MD_ROOT.'/group.class.php';
$do = new group($moduleid);

if(in_array($action, array('add', 'edit'))) {
	$FD = cache_read('fields-'.substr($table, strlen($DT_PRE)).'.php');
	if($FD) require DT_ROOT.'/include/fields.func.php';
	isset($post_fields) or $post_fields = array();
	$CP = $MOD['cat_property'];
	if($CP) require DT_ROOT.'/include/property.func.php';
	isset($post_ppt) or $post_ppt = array();
}

$sql = $_userid ? "username='$_username'" : "ip='$DT_IP'";
$limit_used = $limit_free = $need_password = $need_captcha = $need_question = $fee_add = 0;
if(in_array($action, array('', 'add'))) {
	$r = $db->get_one("SELECT COUNT(*) AS num FROM {$table} WHERE $sql AND status>1");
	$limit_used = $r['num'];
	$limit_free = $MG['group_limit'] > $limit_used ? $MG['group_limit'] - $limit_used : 0;
}
if(check_group($_groupid, $MOD['group_refresh'])) $MOD['credit_refresh'] = 0;

switch($action) {
	
	case 'add':
		
		if($MG['group_limit'] && $limit_used >= $MG['group_limit']) dalert(lang($L['info_limit'], array($MG[$MOD['module'].'_limit'], $limit_used)), $_userid ? $MODULE[2]['linkurl'].$DT['file_my'].'?mid='.$mid : $MODULE[2]['linkurl'].$DT['file_my']);
		if($MG['day_limit']) {
			$today = $today_endtime - 86400;
			$r = $db->get_one("SELECT COUNT(*) AS num FROM {$table} WHERE $sql AND addtime>$today");
			if($r && $r['num'] >= $MG['day_limit']) dalert(lang($L['day_limit'], array($MG['day_limit'])), $_userid ? $MODULE[2]['linkurl'].$DT['file_my'].'?mid='.$mid : $MODULE[2]['linkurl'].$DT['file_my']);
		}

		if($MG['group_free_limit'] >= 0) {
			$fee_add = ($MOD['fee_add'] && (!$MOD['fee_mode'] || !$MG['fee_mode']) && $limit_used >= $MG['group_free_limit'] && $_userid) ? dround($MOD['fee_add']) : 0;
		} else {
			$fee_add = 0;
		}
		$fee_currency = $MOD['fee_currency'];
		$fee_unit = $fee_currency == 'money' ? $DT['money_unit'] : $DT['credit_unit'];
		$need_password = $fee_add && $fee_currency == 'money';
		$need_captcha = $MOD['captcha_add'] == 2 ? $MG['captcha'] : $MOD['captcha_add'];
		$need_question = $MOD['question_add'] == 2 ? $MG['question'] : $MOD['question_add'];
		$could_color = check_group($_groupid, $MOD['group_color']) && $MOD['credit_color'] && $_userid;

		if($submit) {
	
			if($need_password && !is_payword($_username, $password)) dalert($L['error_payword']);

			if(!$_userid) {
				if(strlen($post['company']) < 4) dalert($L['type_company']);
				if($AREA) {
					if(!isset($AREA[$post['areaid']])) dalert($L['type_area']);
				} else {
					if(!$post['areaid']) dalert($L['type_area']);
				}
				if(strlen($post['truename']) < 4) dalert($L['type_truename']);
				if(strlen($post['mobile']) < 7) dalert($L['type_mobile']);
			}
	
			if($MG['add_limit']) {
				$last = $db->get_one("SELECT addtime FROM {$table} WHERE $sql ORDER BY itemid DESC");
				if($last && $DT_TIME - $last['addtime'] < $MG['add_limit']) dalert(lang($L['add_limit'], array($MG['add_limit'])));
			}
			$msg = captcha($captcha, $need_captcha, true);
			if($msg) dalert($msg);
			$msg = question($answer, $need_question, true);
		 	if($msg) dalert($msg);
			 $post_fields[yearprice]='680|1480|2180';
              $post[yearprice]='680|1480|2180';
              $post[n1]='基础型 入门套餐<br />1、1G网页空间；<br />2、1用户企业邮箱；<br />3、顶级域名一个；|  标准型 超值套餐<br />1、3G网页空间；<br />2、5用户企业邮箱；<br />3、顶级域名一个；| 高级型 无忧使用<br />1、5G-无限空间；<br />2、10用户企业邮箱；<br />3、顶级域名一个;';
			  $post[n2]="无移动版<br />1、无手机专用网站；<br />2、手机也访问PC站；<br />3、以后可选购；|手机版<br />1、有手机网站；<br />2、PC访问PC站；<br />3、手机访问手机站；|响应式网站<br />1、自动适应显示器；<br />2、有手机和平板站；<br />3、PC访问PC站;";
               $post[n3]="国内机房<br />1、国内访问快；<br />2、需要进行ICP备案；<br />3、适合做内贸；<br />|香港机房<br />1、东南亚访问快；<br />2、无需进行备案；<br />3、适合紧急上线网站；<br />|美国机房<br />1、国外访问快；<br />2、无需进行备案；<br />3、适合做外贸;";
			  $post[v1]="基础性|标准型|高级型 ";
			   $post[p1]="0|1|2";
			    $post[ys]="2";
				$post[v2]="无移动版|手机版|响应式网站";
				$post[p2]="0|1500|2500 ";
				$post[v3]="国内机房(需备案)|香港机房(免备案)|美国机房(免备案)"; 
				$post[v4]="1年|3年|5年";
				$post[p4]="300|500|800";

				
		   
               if($do->pass($post)) {
				$CAT = get_cat($post['catid']);
				if(!$CAT || !check_group($_groupid, $CAT['group_add'])) dalert(lang($L['group_add'], array($CAT['catname'])));
				if($MOD['upload_thumb'] && $_userid && strlen($post['thumb']) < 5) dalert($L['group_upload_image']);
				$post['addtime'] = $post['level'] = $post['fee'] = 0;
				$post['style'] = $post['template'] = $post['note'] = $post['filepath'] = '';
				if(!$IMVIP && $MG['uploadpt']) $post['thumb1'] = $post['thumb2'] = '';
				$need_check =  $MOD['check_add'] == 2 ? $MG['check'] : $MOD['check_add'];
				$post['status'] = get_status(3, $need_check);
				$post['hits'] = 0;
				$post['orders'] = 0;
				$post['username'] = $_username;

				if($could_color && $color && $_credit > $MOD['credit_color']) {
					$post['style'] = $color;
					credit_add($_username, -$MOD['credit_color']);
					credit_record($_username, -$MOD['credit_color'], 'system', $L['title_color'], '['.$MOD['name'].']'.$post['title']);
				}
				if($FD) fields_check($post_fields);
				if($CP) property_check($post_ppt);
				$do->add($post);
				if($FD) fields_update($post_fields, $table, $do->itemid);
				if($CP) property_update($post_ppt, $moduleid, $post['catid'], $do->itemid);
				if($MOD['show_html'] && $post['status'] > 2) $do->tohtml($do->itemid);

				if($fee_add) {
					if($fee_currency == 'money') {
						money_add($_username, -$fee_add);
						money_record($_username, -$fee_add, $L['in_site'], 'system', lang($L['credit_record_add'], array($MOD['name'])), 'ID:'.$do->itemid);
					} else {
						credit_add($_username, -$fee_add);
						credit_record($_username, -$fee_add, 'system', lang($L['credit_record_add'], array($MOD['name'])), 'ID:'.$do->itemid);
					}
				}
				
				$msg = $post['status'] == 2 ? $L['success_check'] : $L['success_add'];
				$js = '';
				if(isset($post['sync_sina']) && $post['sync_sina']) $js .= sync_weibo('sina', $moduleid, $do->itemid);
				if(isset($post['sync_qq']) && $post['sync_qq']) $js .= sync_weibo('qq', $moduleid, $do->itemid);
				if(isset($post['sync_qzone']) && $post['sync_qzone']) $js .= sync_weibo('qzone', $moduleid, $do->itemid);
				if($_userid) {
					set_cookie('dmsg', $msg);
					$forward = $MODULE[2]['linkurl'].$DT['file_my'].'?mid='.$mid.'&status='.$post['status'];
					$msg = '';
				} else {
					$forward = $MODULE[2]['linkurl'].$DT['file_my'].'?mid='.$mid.'&action=add';
				}
				$js .= 'window.onload=function(){parent.window.location="'.$forward.'";}';
                	for($ssc=0;$ssc<=count($pot);$ssc++){	
								$fileurl=$post['fileurl'.$ssc];
								 $nnote=$pot['titledb'.$ssc];
							
								
								if($fileurl!="" && $nnote!=""){
								
									$upload_sql="INSERT INTO d_group_website (id,itemid,username,title,pic,checked) VALUES(NULL,$do->itemid,'$_username','$nnote','$fileurl',1)"; 			
							
									$db->query($upload_sql);
								}else{
												
								}	 
		         	}
				dalert($msg, '', $js);
			} else {
				dalert($do->errmsg, '', ($need_captcha ? reload_captcha() : '').($need_question ? reload_question() : ''));
			}
		} else {
			if($itemid) {
				$MG['copy'] && $_userid or dalert(lang('message->without_permission_and_upgrade'), 'goback');
				$do->itemid = $itemid;
				$r = $do->get_one();
				if(!$r || $r['username'] != $_username) message();
				extract($r);
				$thumb = $thumb1 = $thumb2 = '';
				$totime = $totime > $DT_TIME ? timetodate($totime, 3) : '';
			} else {
				foreach($do->fields as $v) {
					$$v = '';
				}
				$content = '';
				$catid = 0;
				$totime = '';
			}
			$item = array();
		}
	break;
	case 'edit':
		$itemid or message();
		$do->itemid = $itemid;
		$item = $do->get_one();
		if($item[status]==3){
			message("您的作品已经通过审核，不能修改",$forward);
		}
		$uploads=$db->get_all("select * from d_group_website where itemid=$itemid");
        $upload=$db->get_one("select count(*) as count from d_group_website where itemid=$itemid");
		if(!$item || $item['username'] != $_username) message();

		if($MG['edit_limit'] < 0) message($L['edit_refuse']);
		if($MG['edit_limit'] && $DT_TIME - $item['addtime'] > $MG['edit_limit']*86400) message(lang($L['edit_limit'], array($MG['edit_limit'])));

		if($submit) {
			if($do->pass($post)) {
				$CAT = get_cat($post['catid']);
				if(!$CAT || !check_group($_groupid, $CAT['group_add'])) dalert(lang($L['group_add'], array($CAT['catname'])));
				$post['addtime'] = timetodate($item['addtime']);
				$post['level'] = $item['level'];
				$post['fee'] = $item['fee'];
				$post['style'] = $item['style'];
				$post['template'] = $item['template'];
				$post['filepath'] = $item['filepath'];
				$post['note'] = $item['note'];
				if(!$IMVIP && $MG['uploadpt']) {
					$post['thumb1'] = $item['thumb1'];
					$post['thumb2'] = $item['thumb2'];
				}
				$need_check =  $MOD['check_add'] == 2 ? $MG['check'] : $MOD['check_add'];
				$post['status'] = get_status($item['status'], $need_check);
				$post['hits'] = $item['hits'];
				$post['orders'] = $item['orders'];
				$post['username'] = $_username;
				if($FD) fields_check($post_fields);
				if($CP) property_check($post_ppt);
				if($FD) fields_update($post_fields, $table, $do->itemid);
				if($CP) property_update($post_ppt, $moduleid, $post['catid'], $do->itemid);
				$do->edit($post);
				set_cookie('dmsg', $L['success_edit']);
				$M=count($pot);	
					for($i=0;$i<=count($pot)-1;$i++){	
				      $id=$ids['id'.$i];
				      
						if($id){
						   $tpic=$post['fileurl'.$i];	
						  $nnote=$pot['titledb'.$i];
						  if($tpic=="" && $nnote==""){
						  	//echo "1111";
						  	$db->query("delete from d_group_website where id=$id");
						  }else{
						    $db->query("update d_group_website set title='$nnote',pic='$tpic' where id='$id'");	
						  }
						}else{
							
							
						   $tpic=$post['fileurl'.$M];	
						   $nnote=$pot['titledb'.$M];
					
				        $upload_sql=$db->query("INSERT INTO d_group_website (id,itemid,username,title,pic,checked) VALUES(NULL,$do->itemid,'$_username','$nnote','$tpic',1)"); 			
                          --$M;
						}
					
		            }	
				dalert('', '', 'parent.window.location="'.$forward.'"');
			} else {
				dalert($do->errmsg);
			}
		} else {
			extract($item);
			$totime = $totime ? timetodate($totime, 3) : '';
		}
	break;
	case 'delete':
		$MG['delete'] or message();
		$itemid or message();
		$itemids = is_array($itemid) ? $itemid : array($itemid);
		foreach($itemids as $itemid) {
			$do->itemid = $itemid;
			$item = $do->get_one();
			if(!$item || $item['username'] != $_username) message();
			$do->recycle($itemid);
		}
		dmsg($L['success_delete'], $forward);
	break;
	case 'refresh':
		$MG['refresh_limit'] > -1 or dalert(lang('message->without_permission_and_upgrade'), 'goback');
		$do->_update($_username);
		$itemid or message($L['select_info']);
		$itemids = $itemid;
		$s = $f = 0;
		foreach($itemids as $itemid) {
			$do->itemid = $itemid;
			$item = $do->get_one();
			$could_refresh = $item && $item['username'] == $_username;
			if($could_refresh && $MG['refresh_limit'] && $DT_TIME - $item['edittime'] < $MG['refresh_limit']) $could_refresh = false;
			if($could_refresh && $MOD['credit_refresh'] && $MOD['credit_refresh'] > $_credit) $could_refresh = false;
			if($could_refresh) {
				$do->refresh($itemid);
				$s++;
				if($MOD['credit_refresh']) $_credit = $_credit - $MOD['credit_refresh'];
			} else {
				$f++;
			}			
		}
		if($MOD['credit_refresh'] && $s) {
			$credit = $s*$MOD['credit_refresh'];
			credit_add($_username, -$credit);
			credit_record($_username, -$credit, 'system', lang($L['credit_record_refresh'], array($MOD['name'])), lang($L['refresh_total'], array($s)));
		}
		$msg = lang($L['refresh_success'], array($s));
		if($f) $msg = $msg.' '.lang($L['refresh_fail'], array($f));
		dmsg($msg, $forward);
	break;
	default:
		$_process = $L['group_process'];
		$sorder  = $L['group_orderby'];
		$dorder  = array($MOD['order'], 'orders DESC', 'orders ASC', 'sales DESC', 'sales ASC', 'price DESC', 'price ASC', 'marketprice DESC', 'marketprice ASC', 'savemoney DESC', 'savemoney ASC', 'discount DESC', 'discount ASC', 'amount DESC', 'amount ASC', 'minamount DESC', 'minamount ASC', 'hits DESC', 'hits ASC');
		isset($order) && isset($dorder[$order]) or $order = 0;
		$status = isset($status) ? intval($status) : 3;
		in_array($status, array(1, 2, 3, 4)) or $status = 3;
		$process = isset($process) ? intval($process) : '-1';
		$order_select  = dselect($sorder, 'order', '', $order);

		$condition = "username='$_username' AND status=$status";
		if($keyword) $condition .= " AND keyword LIKE '%$keyword%'";
		if($catid) $condition .= $CAT['child'] ? " AND catid IN (".$CAT['arrchildid'].")" : " AND catid=$catid";
		if($process > -1) $condition .= " AND process=$process";
		$timetype = strpos($MOD['order'], 'add') !== false ? 'add' : '';
		$lists = $do->get_list($condition, $dorder[$order]);
	break;
}
$head_title = lang($L['module_manage'], array($MOD['name']));
if($_userid) {
	$nums = array();
	for($i = 1; $i < 5; $i++) {
		$r = $db->get_one("SELECT COUNT(*) AS num FROM {$table} WHERE username='$_username' AND status=$i");
		$nums[$i] = $r['num'];
	}
	$r = $db->get_one("SELECT COUNT(*) AS num FROM {$table}_order WHERE seller='$_username'");
	$nums[9] = $r['num'];
}
include template('my_'.$module, 'member');
?>