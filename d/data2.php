<?php
require 'common.inc.php';
if($_GET[level]==1){
	$where=" AND A.level=1 ";
}else{
	$where="order by A.addtime desc";
}

if($_GET[n]==41){
	$projects_sql=$db->query("SELECT A.linkurl as linkurl,A.title as title,B.catname as catname,A.thumb as thumb,A.itemid as itemid,A.ys as ys from d_group A,d_category B where A.catid=B.catid  and A.status=3 and B.parentid=41 $where limit 8 ");
    while($rs=$db->fetch_array($projects_sql)){
     $rs[title]=dsubstr($rs[title], 22, '');
    $rs[thumb]=str_replace("thumb","middle",$rs[thumb]);
    	$rs[url]=$CFG[url].'group/view.php?itemid='.$rs[itemid];
       $projects[]=$rs;
    }
   
	if($projects){
		echo  json_encode($projects);
	} else{
		echo  json_encode("-1");
	}
}else if($_GET[n]==42){
   $projects_sql=$db->query("SELECT A.linkurl as linkurl,A.title as title,B.catname as catname,A.thumb as thumb,A.itemid as itemid,A.ys as ys from d_group A,d_category B where A.catid=B.catid  and A.status=3 and B.parentid=42 $where limit 8 ");
    while($rs=$db->fetch_array($projects_sql)){
     $rs[title]=dsubstr($rs[title], 22, '');
  $rs[thumb]=str_replace("thumb","middle",$rs[thumb]);
    	$rs[url]=$CFG[url].'group/view.php?itemid='.$rs[itemid];
    	$projects[]=$rs;
    }
	if($projects){
		echo  json_encode($projects);
	} else{
		echo  json_encode("-1");
	}	


}elseif($_GET[n]==43){
$projects_sql=$db->query("SELECT  A.linkurl as linkurl,A.title as title,B.catname as catname,A.thumb as thumb,A.itemid as itemid,A.ys as ys  from d_group A,d_category B where A.catid=B.catid  and A.status=3 and B.parentid=43 $where limit 8 ");
    while($rs=$db->fetch_array($projects_sql)){
     $rs[title]=dsubstr($rs[title], 22, '');
     $rs[thumb]=str_replace("thumb","middle",$rs[thumb]);
  	$rs[url]=$CFG[url].'group/view.php?itemid='.$rs[itemid];
    	$projects[]=$rs;
    }
	if($projects){
		echo  json_encode($projects);
	} else{
		echo  json_encode("-1");
	}
 }elseif($_GET[n]==44){
$projects_sql=$db->query("SELECT  A.linkurl as linkurl,A.title as title,B.catname as catname,A.thumb as thumb,A.itemid as itemid,A.ys as ys  from d_group A,d_category B where A.catid=B.catid and A.status=3  and B.parentid=44 $where limit 8 ");
    while($rs=$db->fetch_array($projects_sql)){
     $rs[title]=dsubstr($rs[title], 20, '');

      $rs[thumb]=str_replace("thumb","middle",$rs[thumb]);
     
      	$rs[url]=$CFG[url].'group/view.php?itemid='.$rs[itemid];
     
    	$projects[]=$rs;
    }
	if($projects){
		echo  json_encode($projects);
	} else{
		echo  json_encode("-1");
	}
}


?>