<?php
/*
	[Destoon B2B System] Copyright (c) 2008-2013 Destoon.COM
	This is NOT a freeware, use is subject to license.txt
*/
require 'common.inc.php';

$username = $domain = '';
$sorts=explode("<br/>",$DT[sort]);
$AREA or $AREA = cache_read('area.php');

if($action == 'logout' && $admin_user) {
	set_cookie('admin_user', '');
	dmsg($L['index_msg_logout'], $MODULE[2]['linkurl']);
}
if($action == 'go') {
	if(isset($auto)) {
		if($DT['city_ip']) {
			set_cookie('city', '');
		} else {
			$iparea = ip2area($DT_IP);
			$result = $db->query("SELECT * FROM {$DT_PRE}city");
			while($r = $db->fetch_array($result)) {
				if(preg_match("/".$r['name'].($r['iparea'] ? '|'.$r['iparea'] : '')."/i", $iparea)) {
					if($r['domain']) {
						dheader($r['domain']);
					} else {
						set_cookie('city', $r['areaid'].'|'.$r['domain'], $DT_TIME + 365*86400);
					}
					break;
				}
			}
		}
		dheader(DT_PATH);
	}
	$areaid = isset($areaid) ? intval($areaid) : 0;
	if($areaid) {
		$r = $db->get_one("SELECT areaid,name,domain,template FROM {$DT_PRE}city WHERE areaid=$areaid");
		if($r) {
			set_cookie('city', $r['areaid'].'|'.$r['domain'], $DT_TIME + 365*86400);
			$url = '';
			if($forward) {
				if(strpos($forward, DT_PATH) !== false) {
					if($r['domain']) {
						$url = str_replace(DT_PATH, $r['domain'], $forward);
					} else {
						$url = $forward;
					}
				} else if($city_domain && strpos($forward, $city_domain) !== false) {
					if($r['domain']) {
						$url = str_replace($city_domain, $r['domain'], $forward);
					} else {
						//$url = str_replace($city_domain, DT_PATH, $forward); For Module Subdomain
					}
				}
			}
			if(strpos($url, 'city.php') !== false) $url = '';
			dheader($url ? $url : DT_PATH);
		}
	}
	set_cookie('city', '0|', $DT_TIME + 365*86400);
	dheader(DT_PATH);
}

if(isset($homepage) && check_name($homepage)) {
	$username = $homepage;
} else if(!$cityid) {
	$host = get_env('host');
	if(substr($host, 0, 4) == 'www.') {
		$whost = $host;
		$host = substr($host, 4);
	} else {
		$whost = $host;
	}
	if(strpos(DT_PATH, $host) === false) {
		$www = str_replace($CFG['com_domain'], '', $host);
		if(check_name($www)) {
			$username = $homepage = $www;
		} else {
			if($whost == $host) {//301 xxx.com to www.xxx.com
				$w3 = 'www.'.$host;
				$c = $db->get_one("SELECT userid FROM {$DT_PRE}company WHERE domain='$w3'");
				if($c) d301('http://'.$w3);
			}
			$c = $db->get_one("SELECT username,domain FROM {$DT_PRE}company WHERE domain='$whost'".($host == $whost ? '' : " OR domain='$host'"), 'CACHE');
			if($c) {
				$username = $homepage = $c['username'];
				$domain = $c['domain'];
			}
		}
	}
}
if($username) {

	$moduleid = 4;
	$module = 'company';
	$MOD = cache_read('module-'.$moduleid.'.php');

	$user = $db->get_one("select * from d_member A, d_company B where userid=$_userid and A.userid=B.userid");
	include load('company.lang');
	require DT_ROOT.'/module/'.$module.'/common.inc.php';
	include DT_ROOT.'/module/'.$module.'/init.inc.php';
} else {
	if($DT['safe_domain']) {
		$safe_domain = explode('|', $DT['safe_domain']);
		$pass_domain = false;
		foreach($safe_domain as $v) {
			if(strpos($DT_URL, $v) !== false) { $pass_domain = true; break; }
		}
		$pass_domain or dhttp(404);
	}
	if($DT['index_html']) {
		$html_file = $CFG['com_dir'] ? DT_ROOT.'/'.$DT['index'].'.'.$DT['file_ext'] : DT_CACHE.'/index.inc.html';
		if(!is_file($html_file)) tohtml('index');		
		if(is_file($html_file)) exit(include($html_file));
	}

	if($EXT['wap_enable']) $head_mobile = $EXT['wap_url'];
	$seo_title = $DT['seo_title'];
	$head_keywords = $DT['seo_keywords'];
	$head_description = $DT['seo_description'];
	if($city_template) {
		
		include template($city_template, 'city');
	} else {		
		
		$user = $db->get_one("select * from d_member A, d_company B where A.userid=B.userid and A.userid='$_userid'");
		/*设计师  投标入围中标的数量*/
		$sj_all=$db->get_all("select * from d_mall_order_1 group by rid,company_id having company_id='$_username'");
		$sj_in=$db->get_one("SELECT  count(*)as count FROM d_mall_order  where  in_index like '%$_company%'");
		$sj_last=$db->get_one("SELECT count(*)as count FROM d_mall_order WHERE designer like '%$_company%' and status=9");

		$count1=$db->get_one("select count(*) as count from d_mall_order where buyer='$_username' and status in(3,5,7)");
		$count2=$db->get_one("select count(*) as count from d_mall_order where buyer='$_username' and status in(0,4,8)");
	  
	
		include template('index');
	}
}

?>