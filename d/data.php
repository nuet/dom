<?php
require 'common.inc.php';

if($_GET[n]==1){
	$pagesize=8;
	$condition = "catid!=8 and designer='$company' and status>=8";
	$offset = ($i-1)*$pagesize;
	$projects=$db->get_all("select * from d_mall_order  WHERE $condition ORDER BY addtime desc limit $offset,$pagesize");
	if($projects){
		echo  json_encode($projects);
	} else{
		echo  json_encode("-1");
	}
}else if($_GET[n]==2){
	$pagesize=8;
	$condition = "catid=8 and designer='$company' and status>=8";
	$offset = ($i-1)*$pagesize;
	$projects=$db->get_all("select * from d_mall_order  WHERE $condition ORDER BY addtime desc limit $offset,$pagesize");
	if($projects){
		echo  json_encode($projects);
	} else{
		echo  json_encode("-1");
	}	


}elseif($_GET[n]==3){
		$pagesize=8;
	$condition = " company='$company' and status=3";
	$offset = ($i-1)*$pagesize;
	$projects=$db->get_all("select * from d_group  WHERE $condition ORDER BY addtime desc limit $offset,$pagesize");
	if($projects){
		echo  json_encode($projects);
	} else{
		echo  json_encode("-1");
	}	
	
	
}elseif($_GET[n]==4){
		$pagesize=8;
	$condition = "username='$username' and status=3";
	$offset = ($i-1)*$pagesize;
  $projects_sql=$db->query("select * from d_honor  WHERE $condition ORDER BY addtime desc limit 8");
	  while($rs=$db->fetch_array($projects_sql)){
	  	 $rs[title]=dsubstr($rs[title], 22, '');
	  	  $rs[content]=dsubstr($rs[content],60,'');
	  	 $projects[]=$rs;
	  }
	if($projects){
		echo  json_encode($projects);
	} else{
		echo  json_encode("-1");
	}	
	
}


?>