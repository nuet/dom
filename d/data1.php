<?php
require 'common.inc.php';

if($_GET[n]==4){
	$condition = "catid=4 and status>=8";
	
	$projects_sql=$db->query("select * from d_mall_order  WHERE $condition ORDER BY addtime desc limit 8");
	  while($rs=$db->fetch_array($projects_sql)){
	  	 $rs[title]=dsubstr($rs[title], 22, '');
      
	  	 $projects[]=$rs;
	  }
	
	if($projects){
		echo  json_encode($projects);
		exit;
	} else{
		echo  json_encode("-1");
	}
}else if($_GET[n]==5){
$condition = "catid=5 and status>=8";
	$projects_sql=$db->query("select * from d_mall_order  WHERE $condition ORDER BY addtime desc limit 8");
	  while($rs=$db->fetch_array($projects_sql)){
	  	 $rs[title]=dsubstr($rs[title], 22, '');
    
	  	 $projects[]=$rs;
	  }
	if($projects){
		echo  json_encode($projects);
		exit;
	} else{
		echo  json_encode("-1");
	}	


}elseif($_GET[n]==6){
	$condition = "catid=6 and status>=8 ";
	$projects_sql=$db->query("select * from d_mall_order   WHERE $condition ORDER BY addtime desc limit 8");
	  while($rs=$db->fetch_array($projects_sql)){
	  	 $rs[title]=dsubstr($rs[title], 22, '');
  
	  	 $projects[]=$rs;
	  }
	if($projects){
		echo  json_encode($projects);
		exit;
	} else{
		echo  json_encode("-1");
	}
}elseif($_GET[n]==8){
$condition = "status>=8";
$projects_sql=$db->query("select * from d_weihu_order  WHERE $condition ORDER BY addtime desc limit 8");
	  while($rs=$db->fetch_array($projects_sql)){
	  	 $rs[title]=dsubstr($rs[title], 22, '');
   
	  	 $projects[]=$rs;
	  }
	if($projects){
		echo  json_encode($projects);
		exit;
	} else{
		echo  json_encode("-1");
	}
}


?>