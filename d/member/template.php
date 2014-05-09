<?php 
require 'config.inc.php';
require '../common.inc.php';

require DT_ROOT.'/module/'.$module.'/template.inc.php';


$pic=$db->get_one("select * from d_mall_order_1 where id='$id'");
$a=array('JPG','PNG','GIF','BMp','jpg','png','JPG');

//匹配图片

for($i=0;$i<=count($a);$i++){
	$pic_yz=strpos($pic['upload'],$a[$i]);
	if($pic_yz){
		$t[]=$pic_yz;
	}

}

/*    by 摩恩科技
 * 判断图片，是图片可以预览，否则弹出消息提示
 * */
if($t){
	$pic[upload]= substr($pic[upload],0,-10);
	$t="<img alt='$pic[note]' src='$pic[upload]'>";
}else{
	message('非法进入本页面', $CFG[url], 3);
	exit;
}
//<img alt='$pic[note]' src='$pic[upload]'>

include template('mb', 'member');
?>