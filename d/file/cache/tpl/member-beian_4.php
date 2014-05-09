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
<div class="tips-orange pd10">
  <span>新增网站接入是指您原来已经在其他服务商备案成功，现在需要在我司开通一个新网站，可以使用"新增网站"功能来为新网站备案。而无需再到原服务器处修改之前的备案主体信息。</span><br>
</div>

<div class="mainlayout">
    <ul class="mapbox clearfix">
      <li class="noimg">备案完成</li>
      <li>提交管局</li>
      <li>上传资料-办理拍照</li>
      <li>填写网站信息</li>
      <li class="hover">填写主办单位信息</li>
    </ul>
<form method="post" name="form_beian" action="?" >
<input type="hidden" name="tp" value="<?php echo $tp;?>"/>
<input type="hidden" name="type" value="<?php echo $type;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
      <dl>
        <dt class="clearfix">主办单位信息<div class="jrbtnmsg">主体已在其它公司备过案：&nbsp;<input type="button" name="jieruwzbtn" value="点此新增网站" class="btnstyle"></div></dt>
        <dd id="xztixing" style="padding:0; margin:0">
          <ul class="z_bubblebox" id="z_bubblebox" style="margin:0 0 0 100px; width:680px;">
            <li class="top clearfix"><img src="<?php echo DT_SKIN;?>/image/beian/bubble-1.jpg" class="t_left"><img src="<?php echo DT_SKIN;?>/image/beian/bubble-3.jpg" class="t_right"></li>
            <li class="mid">
              <div class="m_content"><span style="color:#F00">提示:</span><span class="tixingmsg"></span>若是企业网站不能以个人名义备案，我司及管局会双重审核，一旦发现企业网站以个人名义备案将直接拒绝！</div>
            </li>
            <li class="bottom clearfix"><img src="<?php echo DT_SKIN;?>/image/beian/bubble-6.jpg" class="t_left"><img src="<?php echo DT_SKIN;?>/image/beian/bubble-jj.jpg" id="jiantou" class="t_left" style="position:relative; left:102px; margin:0"><img src="<?php echo DT_SKIN;?>/image/beian/bubble-8.jpg" class="t_right"></li>
          </ul>
        </dd>
        <dd class="clearfix">
          <label>单位性质:</label>
          <select name="Dwxz"  onchange="otype(this.options[this.options.selectedIndex].value)"><option value="">请选择</option><option value="1">企业</option><option value="2">个人</option></select>
        </dd>
        <dd class="clearfix">
          <label id="Dwmc_title">主办单位或主办者名称:</label>
          <input type="text" name="Dwmc" class="inputbox_2"><div id="Dwmc_call"></div>
        </dd>
        <div class="person">
        <dd class="clearfix">
          <label>证件类型:</label>
          <select name="Zjlx"><option value="">请选择</option><option value="2">个人:身份证</option><option value="7">个人:护照</option><option value="8">个人:军官证</option><option value="11">个人:台胞证</option></select>
        </dd>
        <dd class="clearfix">
          <label>证件号码:</label>
          <input type="text" name="Zjhm" class="inputbox_2"><div id="Zjhm_call"></div>
        </dd>
        </div>
          <div class="company">
        <dd class="clearfix">
          <label>工商营业执照号码:</label>
              <input type="text" name="Cgszz" class="inputbox_2">
        </dd>
        <dd class="clearfix">
          <label>组织机构代码:</label>
          <input type="text" name="Czzjg" class="inputbox_2">
        </dd>
        </div>
        <dd class="clearfix">
          <label>证件住所:</label>
          <input type="text" name="Zjzs" class="inputbox_2"><div id="Zjzs_call"></div>
        </dd>
        
        <dt> 主办单位通信地址 </dt>
        <dd id="sdtixing" style="padding: 0px; margin: 0px;">
      
        
        </dd>
        <div style="padding-left:182px"><?php echo ajax_area_select1('Shengid', '请选择', $user['areaid']);?> </div>
           <dd class="clearfix" id="area_city">
         
          
          </dd>
        <dd class="clearfix">
          <label>详细通信地址:</label>
          <input type="text" name="Xxdz" id='Xxdz' class="inputbox_2"><div id="Xxdz_call"></div>
        </dd>
        
        <!-- *************************主体负责人信息******************** -->
        <dt> 主办单位负责人信息 </dt>
        <dd class="clearfix">
          <label id="Fzr_xm_title">法人姓名:</label>
          <input type="text" name="ztFzr_xm" class="inputbox_2"><div id="ztFzr_xm_call"></div>
        </dd>
        <dd class="clearfix">
          <label id="Fzr_dhhm_title">办公室电话:</label>
          <input type="text" name="ztFzr_dhhm_code" class="inputbox_2" style="width:50px;">
          <label style="width:10px; text-align:center; font-weight:bold;">-</label>
          <input type="text" name="ztFzr_dhhm" class="inputbox_2" style="width:138px"><div id="ztFzr_dhhm_call"></div>
        </dd>
        <dd class="clearfix">
          <label>手机号码:</label>
          <input type="text" name="ztFzr_sjhm" class="inputbox_2"><div id="ztFzr_sjhm_call"></div>
        </dd>
        <dd class="clearfix">
          <label>电子邮件地址:</label>
          <input type="text" name="ztFzr_dzyj" class="inputbox_2"><div id="ztFzr_dzyj_call"></div>
        </dd>
        <dd class="clearfix">
          <label>法人证件类型:</label>
          <select name="ztFzr_zjlx"><option value="2">个人:身份证</option><option value="7">个人:护照</option><option value="8">个人:军官证</option></select><div id="ztFzr_zjlx_call"></div>
        </dd>
        <dd class="clearfix">
          <label>法人证件号码:</label>
          <input type="text" name="ztFzr_zjhm" class="inputbox_2"><div id="ztFzr_zjhm_call"></div>
        </dd>
      </dl>
      <div style="text-align:center; margin:0; margin-bottom:20px;">
        <input type="button" name="submitbutton" value="下一步 填写网站信息" class="textbtn">
        <div style="display:none; text-align:center; font-size:14px; font-weight:bold" id="loadmsg"> <img src="http://www.west263.com/newimages/load2.gif"><br>
          即将提交... </div>
      </div>
      <input type="hidden" name="act">
    </form>
  </div>

        
      </div>
       
<?php include template('footer', $module);?>