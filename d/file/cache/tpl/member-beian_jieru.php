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
$.BeianObj.Settings.b_Dwxz="";
$.BeianObj();
});
</script>
<div id="beian_c" class="main">
<div class="tips-orange pd10">
  <span>新增网站接入是指您原来已经在其他服务商备案成功，现在需要在我司开通一个新网站，可以使用"新增网站"功能来为新网站备案。而无需再到原服务器处修改之前的备案主体信息。</span><br>
</div>

<form method="post" name="form_beian" action="?" > 
<input type="hidden" name="tp" value="<?php echo $tp;?>"/>
<input type="hidden" name="type" value="<?php echo $type;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<dl>
        <dt> 新增网站接入 </dt>
      <dd class="clearfix">
          <label>主体备案编号:</label>
          <input type="text" name="ztbah" class="inputbox_2" value="">
          <div class="itemmsg">可通过 <a href="http://www.miitbeian.gov.cn/" style="color:#06c" target="_blank">www.miitbeian.gov.cn</a>右下角的"公共查询"找到</div>
        </dd>
        <dd class="clearfix">
          <label>ICP密码:</label>
          <input type="text" name="icpmm" class="inputbox_2" value="">
          <div class="itemmsg" style="background-image:none; padding:0;text-indent:0">        
          此密码是工信部发至您手机的密码</div>
        </dd>      
       
      </dl>
      <div style="text-align:center; margin:0; margin-bottom:20px;">
        <input type="button" name="bakbutton" value="返回" onclick="javascript:history.back(-1);" class="btnstyle">
        <input type="submit" name="submitbuttonjrwz" value="继续下一步" class="textbtn">
        <div style="display:none; text-align:center; font-size:14px; font-weight:bold" id="loadmsg"> <img src="http://www.west263.com/newimages/load2.gif"><br>
          即将提交... </div>
      </div>
      
        </form>
        
      </div>
       
<?php include template('footer', $module);?>