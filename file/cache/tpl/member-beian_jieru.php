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

var ss=location.search;
if(ss.indexOf("&act") > 0 )
{
var ms=$("#T_xz").val();
if(ms==2){
otype('2');
}else{
otype('1');
}
var Zjlx=$("#T_Zjlx").val();
var ztFzr_zjlx=$("#T_ztFzr_zjlx").val();
$('#Dwxz option[value='+ms+']').attr("selected","selected");
$('#Zjlx option[value='+Zjlx+']').attr("selected","selected");
$('#ztFzr_zjlx option[value='+ztFzr_zjlx+']').attr("selected","selected");
}




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

<form method="post" name="form_beian" action="?action=<?php echo $action;?>&step=<?php echo $step;?>&itemid=<?php echo $itemid;?>&type=<?php echo $type;?>&tp=<?php echo $tp;?>&act=<?php echo $act;?>" > 
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
          <select id="Dwxz" name="Dwxz"  onchange="otype(this.options[this.options.selectedIndex].value)"><option value="">请选择</option><option value="1">企业</option><option value="2">个人</option></select>
        </dd>
        <dd class="clearfix">
          <label id="Dwmc_title">主办单位或主办者名称:</label>
          <input type="text" name="Dwmc" class="inputbox_2" value="<?php echo $beian['Dwmc'];?>">
        </dd>
        <div class="person">
        <dd class="clearfix">
          <label>证件类型:</label>
          <select name="Zjlx" id="Zjlx">
          <option value="1">个人:身份证</option>
          <option value="2">个人:护照</option>
         </select>
        </dd>
        <dd class="clearfix">
          <label>证件号码:</label>
          <input type="text" name="Zjhm" class="inputbox_2"value="<?php echo $beian['Zjhm'];?>" >
        </dd>
        </div>
          <div class="company">
        <dd class="clearfix">
          <label>工商营业执照号码:</label>
              <input type="text" name="Cgszz" class="inputbox_2"value="<?php echo $beian['Cgszz'];?>">
        </dd>
        <dd class="clearfix">
          <label>组织机构代码:</label>
          <input type="text" name="Czzjg" class="inputbox_2"value="<?php echo $beian['Czzjg'];?>">
        </dd>
        </div>
        <dd class="clearfix">
          <label>证件住所:</label>
          <input type="text" name="Zjzs" class="inputbox_2"value="<?php echo $beian['Zjzs'];?>">
        </dd>
        
        <dt> 主办单位通信地址 </dt>
        <dd id="sdtixing" style="padding: 0px; margin: 0px;">
      
        
        </dd>
        <div style="padding-left:182px"><?php echo ajax_area_select1('Shengid', '请选择', $beian['area']);?> </div>
           <dd class="clearfix" id="area_city">
         
          
          </dd>
        <dd class="clearfix">
          <label>详细通信地址:</label>
          <input type="text" name="Xxdz" id='Xxdz' class="inputbox_2" value="<?php echo $beian['Xxdz'];?>">
          
        </dd>
         <dt> 新增网站接入 </dt>
      <dd class="clearfix">
          <label>主体备案编号:</label>
          <input type="text" name="ztbah" class="inputbox_2" value="<?php echo $beian['zhutino'];?>">
          <div class="itemmsg">可通过 <a href="http://www.miitbeian.gov.cn/" style="color:#06c" target="_blank">www.miitbeian.gov.cn</a>右下角的"公共查询"找到</div>
        </dd>
        <dd class="clearfix">
          <label>ICP密码:</label>
          <input type="text" name="icpmm" class="inputbox_2" value="<?php echo $beian['zhutipassword'];?>">
          <div class="itemmsg" style="background-image:none; padding:0;text-indent:0">        
          此密码是工信部发至您手机的密码</div>
        </dd>      
       
        <!-- *************************主体负责人信息******************** -->
        <dt> 主办单位负责人信息 </dt>
        <dd class="clearfix">
          <label id="Fzr_xm_title">法人姓名:</label>
          <input type="text" name="ztFzr_xm" class="inputbox_2" value="<?php echo $beian['ztFzr_xm'];?>">
        </dd>
        <dd class="clearfix">
          <label id="Fzr_dhhm_title">办公室电话:</label>
          <input type="text" name="ztFzr_dhhm_code" class="inputbox_2" style="width:50px;"value="<?php echo $beian['ztFzr_dhhm_code'];?>">
          <label style="width:10px; text-align:center; font-weight:bold;">-</label>
          <input type="text" name="ztFzr_dhhm" class="inputbox_2" style="width:138px" value="<?php echo $beian['ztFzr_dhhm'];?>">
        </dd>
        <dd class="clearfix">
          <label>手机号码:</label>
          <input type="text" name="ztFzr_sjhm" class="inputbox_2" value="<?php echo $beian['ztFzr_sjhm'];?>">
        </dd>
        <dd class="clearfix">
          <label>电子邮件地址:</label>
          <input type="text" name="ztFzr_dzyj" class="inputbox_2" value="<?php echo $beian['ztFzr_dzyj'];?>">
        </dd>
        <dd class="clearfix">
          <label>法人证件类型:</label>
          <select name="ztFzr_zjlx" id="ztFzr_zjlx"><option value="1">个人:身份证</option><option value="2">个人:护照</option></select>
        </dd>
        <dd class="clearfix">
          <label>法人证件号码:</label>
          <input type="text" name="ztFzr_zjhm" class="inputbox_2" value="<?php echo $beian['ztFzr_zjhm'];?>">
        </dd>
     
       
      </dl>
      <div style="text-align:center; margin:0; margin-bottom:20px;">
        <input type="button" name="bakbutton" value="返回" onclick="javascript:history.back(-1);" class="btnstyle">
        <?php if($act=='edit') { ?>
         <input type="button" name="submitbuttonjrwz" value="继续下一步" class="textbtn">
        <?php } else { ?>
           <input type="button" name="submitbuttonjrwz" value="继续下一步" class="textbtn">
        <?php } ?>
     
        <input type="hidden" name="submits" value="1"/>
         <input type="hidden" id="T_xz" name="T_xz" value="<?php echo $beian['Dwxz'];?>"/>
          <input type="hidden" id="T_Zjlx" name="T_Zjlx" value="<?php echo $beian['Zjlx'];?>"/>
            <input type="hidden" id="T_ztFzr_zjlx" name="T_ztFzr_zjlx" value="<?php echo $beian['ztFzr_zjlx'];?>"/>
        <div style="display:none; text-align:center; font-size:14px; font-weight:bold" id="loadmsg"> <img src="<?php echo DT_SKIN;?>image/load2.gif"><br>
          即将提交... </div>
      </div>
      
        </form>
        
      </div>
       
<?php include template('footer', $module);?>