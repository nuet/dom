<?php 
defined('IN_DESTOON') or exit('Access Denied');
if(!$_userid) dheader($MODULE[2]['linkurl'].$DT['file_my']);
require DT_ROOT.'/module/'.$module.'/common.inc.php';
if($action == 'logout' && $admin_user) {
	set_cookie('admin_user', '');
	dmsg($L['index_msg_logout'], $MODULE[2]['linkurl']);
}
require MD_ROOT.'/member.class.php';
require DT_ROOT.'/include/post.func.php';
$do = new member;
if($submit) {
	if(word_count($note) > 1000) message($L['index_msg_note_limit']);
	$note = '<?php exit;?>'.htmlspecialchars(stripslashes($note));
	file_put(DT_ROOT.'/file/user/'.dalloc($_userid).'/'.$_userid.'/note.php', $note);
	dmsg($L['op_update_success'], $MODULE[2]['linkurl']);
} else {
	$head_title = '';
	$do->userid = $_userid;
	$user = $do->get_one();
	extract($user);
	$logintime = timetodate($logintime, 5);
	$regtime = timetodate($regtime, 5);
	$userurl = userurl($_username, '', $domain);	
	$sys = array();
	$i = 0;
	$result = $db->query("SELECT itemid,title,addtime,groupids FROM {$DT_PRE}message WHERE groupids<>'' ORDER BY itemid DESC", 'CACHE');
	while($r = $db->fetch_array($result)) {
		$groupids = explode(',', $r['groupids']);
		if(!in_array($_groupid, $groupids)) continue;
		if($i > 2) continue;
		$i++;
		$sys[] = $r;
	}
	$note = DT_ROOT.'/file/user/'.dalloc($_userid).'/'.$_userid.'/note.php';
	$note = file_get($note);
	if($note) {
		$note = substr($note, 13);
	} else {
		$note = $MOD['usernote'];
	}

	
	$trade = $db->count("{$DT_PRE}mall_order", "seller='$_username' AND status=0");
	$expired = $totime && $totime < $DT_TIME ? true : false;
	$havedays = $expired ? 0 : ceil(($totime-$DT_TIME)/86400);
	if ($_username && $_groupid <=5){
		
	    	$where=1;
		if($_POST['item']){
			if(is_numeric($_POST['item'])){
				$where.=" AND itemid={$_POST['item']}";
			}else{
				$time1=strtotime($_POST[item]);
				$time2=strtotime($_POST[item]." 23:59:59");
				$where.=" AND addtime between ".$time1." and ".$time2."";
			}
			
			
		}
		$news=$db->get_all("select * from d_article_21 where catid=35 order by edittime desc limit 6");
		
		$rm = $db->query("SELECT * FROM d_mall_order where $where AND buyer='$_username'  order by addtime desc limit 2");
		
		while($r = $db->fetch_array($rm)) {
			$r[addtime]=date("Y-m-d H:i:s",$r[addtime]);
			$r[xq]=$db->get_one("select * from d_mall_order_xq where itemid=$r[itemid]");
			$r[vcheck]=$r[xq][vcheck];
			if($r[fapiao_yz]==1){
				$r[shui]=$r[amount]*0.08;
				$r[fapiao_yz]="(含税".$r[shui]."元)";
			}else{
				$r[fapiao_yz]="";
			}
			if($r[pay_style]==0){
				$r[pay]="<p>一次性付款</p>";
			}else{
				$r[pay_1]=$r[amount]*0.5;
				$r[pay_2]=$r[amount]*0.3;
				$r[pay_3]=$r[amount]*0.2;
				$r[pay]="阶段性付款 <br>首次:$r[pay_1]元  <br>二次:$r[pay_2]元 <br>三次:$r[pay_3]元 ";
			}
			$r[status_zt]=$L['trade_status'][$r[status]];
			
			$list[] = $r;
		}

		
		$where1=1;
		
		if($_POST['logo']){
			if(is_numeric($_POST['logo'])){
				$where1.=" AND itemid={$_POST['logo']}";
			}else{
				$time1=strtotime($_POST[logo]);
				$time2=strtotime($_POST[logo]." 23:59:59");
				$where1.=" AND addtime between ".$time1." and ".$time2."";
			}
		}

		$rn = $db->query("SELECT * FROM d_pingmian_order where $where1  AND buyer='$_username'    order by addtime desc limit 3");
		while($v = $db->fetch_array($rn)) {
			$v[addtime]=date("Y-m-d H:i:s",$v[addtime]);
			$v[xq]=$db->get_one("select * from d_pingmian_order_xq where itemid=$v[itemid]");
			$v[vcheck]=$v[xq][vcheck];
			if($v[fapiao_yz]==1){
				$v[shui]=$v[amount]*0.08;
				$v[fapiao_yz]="(含税".$v[shui]."元)";
			}else{
				$v[fapiao_yz]="";
			}
			if($v[pay_style]==0){
				$v[pay]="<p>一次性付款</p>";
			}else{
				$v[pay_1]=$v[amount]*0.5;
				$v[pay_2]=$v[amount]*0.3;
				$v[pay_3]=$v[amount]*0.2;
				$v[pay]="阶段性付款 <br>首次:$v[pay_1]元  <br>二次:$v[pay_2]元 <br>三次:$v[pay_3]元 ";
			}
			$v[status_zt]=$L['trade_status'][$v[status]];
		
			$lists[] = $v;
		}
	
		 
		$count1=$db->get_one("select count(*) as count from d_mall_order where buyer='$_username' and status in(2,3,5)");
		$count2=$db->get_one("select count(*) as count from d_mall_order where buyer='$_username' and status=0");
		$count3=$db->get_one("select count(*) as count from d_mall_order where buyer='$_username' and status<7");
		
		
		
		
		$rm = $db->query("SELECT * FROM d_group_order where  buyer='$_username'  order by addtime desc limit 2");
		
		while($r = $db->fetch_array($rm)) {
		$r[addtime]=date("Y-m-d H:i:s",$r[addtime]);
		$list_mb[] = $r;
		}

		include template('index', $module);
		
	}else{
		$where=1;
		if($_POST['item']){
			if(is_numeric($_POST['item'])){
				$where.=" AND itemid={$_POST['item']}";
			}else{
				$time1=strtotime($_POST[item]);
				$time2=strtotime($_POST[item]." 23:59:59");
				$where.=" AND addtime between ".$time1." and ".$time2."";
		}
		}
		
		
		$rm = $db->query("SELECT * FROM d_mall_order where $where  order by addtime desc limit 3");
		
		while($r = $db->fetch_array($rm)) {
			$r[addtime]=date("Y-m-d H:i:s",$r[addtime]);
	      	$r[c]=$db->get_one("select count(*) as c from d_mall_order_1 where rid=$r[itemid]");
	      	$r[count]=$r[c][c];
			$r[buyer_receive] = explode("-",$r[buyer_receive]);
		    $r[buyer_receive] = implode("<br>",$r[buyer_receive]);
		
			$r[status_zt]=$L['sjs_trade_status'][$r[status]];
				
			$list[] = $r;
		}
		/*平面*/
		
		$where1=1;
		if($_POST['logo']){
			if(is_numeric($_POST['logo'])){
				$where1.=" AND itemid={$_POST['logo']}";
			}else{
				$time1=strtotime($_POST[logo]);
				$time2=strtotime($_POST[logo]." 23:59:59");
				$where1.=" AND addtime between ".$time1." and ".$time2."";
			}
		}

		$rn = $db->query("SELECT * FROM d_pingmian_order where $where1  order by addtime desc limit 3");
		while($v = $db->fetch_array($rn)) {
			$v[addtime]=date("Y-m-d H:i:s",$v[addtime]);
			$v[c]=$db->get_one("select count(*) as c from d_pingmian_order_1 where rid=$v[itemid]");
			$v[count]=$v[c][c];
			$v[buyer_receive] = explode("-",$v[buyer_receive]);
			$v[buyer_receive] = implode("<br>",$v[buyer_receive]);
			$v[status_zt]=$L['trade_status'][$v[status]];
		
			$lists[] = $v;
		}
		
		$news=$db->get_all("select * from d_article_21 where catid=36 order by edittime desc limit 6");
		$sj_all=$db->get_all("select * from d_mall_order_1 where company_id='bing345' group by rid");
		$sj_in=$db->get_one("SELECT  count(*)as count FROM d_mall_order_1  where status=1 and level=1 and designer='$_company'");
		$sj_last=$db->get_one("SELECT count(*)as count FROM d_mall_order WHERE designer='$_company' and status=8");
		include template('index_sjs', $module);
	}
	
}
?>