<?php 
require 'config.inc.php';
require '../common.inc.php';
login();
if($_username && $_groupid <=5){
	$catid=35;
}else{
	$catid=36;
}
if($_GET[action]=='view'){
	$news=$db->get_one("select * from d_article_21 A,d_article_data_21 B where A.itemid=B.itemid and A.catid=$catid and A.itemid=$itemid");
     $news[addtime]=date('Y-m-d H:i:s',$news[addtime]);
     if(!news){message("没有该通知",'my_news.php');}
}else{

	

		$order = 'addtime DESC';
		$cache = '';
		$pagesize=10;
		$offset = ($page-1)*$pagesize;
		if($page > 1 && $sum) {
			$items = $sum;
		} else {
			$r = $db->get_one("SELECT COUNT(*) AS num FROM d_article_21 where catid=$catid ", $cache);
			$items = $r['num'];
		}
		
		$pages = pages($items, $page, $pagesize);
		$lists = $catids = $CATS = array();
		
		$result = $db->query("SELECT * FROM d_article_21 where catid=$catid ORDER BY $order LIMIT $offset,$pagesize", $cache);
		while($rs=$db->fetch_array($result)){
			$rs[edittime]=date('Y-m-d H:i:s',$rs[edittime]);
			$rs[addtime]=date('Y-m-d H:i:s',$rs[addtime]);
			if($rs[addtime]=$rs[edittime]){
				$rs[addtime]=$rs[addtime];
			}else{
				$rs[addtime]= $rs[edittime];
			}
		
			$lists[]=$rs;
		}
	}
	




include template('my_news', 'member');

?>