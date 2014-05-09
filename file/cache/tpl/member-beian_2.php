<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>beian.css"/>
<script type="text/javascript" src="<?php echo $CFG['url'];?>file/script/beian.js"/></script>
<script type="text/javascript" src="<?php echo $CFG['url'];?>file/script/data.js"/></script>
<script type="text/javascript" src="<?php echo $CFG['url'];?>file/script/check.js"/></script>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="beian.php?action=add"><span>申请备案</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="home"><a href="beian.php"><span>我的备案</span></a></td>
</tr>
</table>
</div>
<script language="javascript">
$(function(){
$.BeianObj();
});
function otype(m){
if(m=='2'){
$('.person').css("display","block");
$('.company').css("display","none");
}else{
$('.person').css("display","none");
$('.company').css("display","block");
}
}
</script>
<div id="beian_c" class="main">

<div class="mainlayout">
    <ul class="mapbox clearfix">
      <li class="noimg">备案完成</li>
        <li>提交管局</li>
        <li>上传资料-办理拍照</li>
        <li class="hover">填写网站信息</li>
        <li>填写主办单位信息</li>
    </ul>
     <?php if($act=="edit") { ?>
         <form name="form_beian" action="?action=<?php echo $action;?>&step=<?php echo $step;?>&id=<?php echo $id;?>&type=<?php echo $beian_zt['type'];?>&itemid=<?php echo $beian_zt['itemid'];?>&tp=<?php echo $beian_zt['tp'];?>&act=<?php echo $act;?>" method="post">
        <?php } else { ?>
          <form name="form_beian" action="?action=<?php echo $action;?>&step=<?php echo $step;?>&itemid=<?php echo $itemid;?>&type=<?php echo $type;?>&tp=<?php echo $tp;?>&act=<?php echo $act;?>" method="post">
        <?php } ?>
  
      <dl>
      
        <dt> 分管网站负责人信息 </dt>        
        <dd class="clearfix" id="wzfzrxmdd">
          <label>网站负责人姓名:</label>
          <input type="text" name="Fzr_xm" class="inputbox_2" value="<?php echo $beian_zt['Fzr_xm'];?>">
        </dd>
        <dd class="clearfix">
          <label id="Fzr_dhhm_title">
          
           办公室电话(可选):
          
          </label>
          <input type="text" name="Fzr_dhhm_code" class="inputbox_2" value="<?php echo $beian_zt['Fzr_dhhm_code'];?>" style="width:50px;">
          <label style="width:10px; text-align:center; font-weight:bold;">-</label>
          <input type="text" name="Fzr_dhhm" class="inputbox_2"  value="<?php echo $beian_zt['Fzr_dhhm'];?>"style="width:138px">
        </dd>
        <dd class="clearfix">
          <label>手机号码(<b style="color:#FF0000">本人的手机号</b>):</label>
          <input type="text" name="Fzr_sjhm" class="inputbox_2"  value="<?php echo $beian_zt['Fzr_sjhm'];?>">
        </dd>
        <dd class="clearfix" style="display: none;">
          <label>手机验证码:</label>
          <input type="text" name="mobilecode" class="inputbox_2" style="width:90px">
          <input type="button" name="mobilecodeButton" value="获取手机验证码" style="width:104px;margin-top:2px; margin-left:4px">
        <dd class="clearfix">
          <label>电子邮件地址:</label>
          <input type="text" name="Fzr_dzyj" class="inputbox_2"value="<?php echo $beian_zt['Fzr_dzyj'];?>">
        </dd>
        <dd class="clearfix">
          <label>负责人证件类型:</label>
          <select name="Fzr_zjlx" id="Fzr_zjlx"><option value="1">个人:身份证</option><option value="2">个人:护照</option></select>
        </dd>
        <dd class="clearfix">
          <label>负责人证件号码:</label>
          <input type="text" name="Fzr_zjhm"  class="inputbox_2"value="<?php echo $beian_zt['Fzr_zjhm'];?>">
        </dd>     
         <dd class="clearfix">
          <label>备注:</label>
          <input type="text" name="mynote"  class="inputbox_2" value="<?php echo $beian_zt['mynote'];?>">
        </dd>  
      </dl>
      <div style="text-align:center; margin:0; margin-bottom:20px;">  
        <?php if($act=="edit") { ?>
        <input type="button" name="submitbuttonwz" value="下一步 上传资料" class="textbtn">
        <?php } else { ?>
        <input type="button" name="bakbutton" value="返回" class="btnstyle">
        <input type="button" name="submitbuttonwz" value="下一步 上传资料" class="textbtn">
        <?php } ?>
        <div style="display:none; text-align:center; font-size:14px; font-weight:bold" id="loadmsg"> <img src="<?php echo DT_SKIN;?>image/load2.gif"><br> 即将提交... </div>
      </div>
      <input type="hidden" name="act">
    </form>
  </div>
        
      </div>
       
<?php include template('footer', $module);?>