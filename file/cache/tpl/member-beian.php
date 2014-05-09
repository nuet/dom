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
<?php if($action=='add') { ?>
<div id="beian_c">

<script>
$(function(){
$(".beian_c ul").hover(function(){
    $(this).addClass("bei_ul_hover");
 },function(){
    $(this).removeClass("bei_ul_hover");
 })
})
</script>
<div class="tips-orange pd10">
  <span>1、XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX。</span><br>
  <span>2、XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX </span><br>
  <span>3、XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</span><br>
  <span>4、XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX！</span><br>
  <span>5、XXXXXXXXXXXXXXXXXX。</span><br></div>
<p class="m10">

</p></div>
<div class="tts">申请备案</div>
<div class="beian_c">
<ul id="new_beian">
        <li class="font24 font-red padding-b28">从未办过备案</li>
            <li class="font16">1. 域名无备案号；</li>
            <li class="font16">2. 单位或个人的证件也无备案号。</li>
          <li class="beian-link">
<a href="beian.php?action=update&step=1&type=1" class="u_btns" >新备案进入</a>
</li>
  
        </ul>
<ul id="old_beian">
        <li class="font24 font-red padding-b28">已备案过</li>
            <li class="font16">1. 单位或个人将已有备案号；</li>
            <li class="font16">2. 域名之前备案，备案接入到我司。</li>
         
            <li class="beian-link">
<a href="beian.php?action=update&step=1&type=2" class="u_btns" >点击进入备案</a>
</li>
  </ul>
</div>
<script type="text/javascript">s('beian');m('add');</script>
<?php } else { ?>
<form action="beian.php">
<div class="tt">
&nbsp;<?php echo $fields_select;?>&nbsp;
<?php echo $type_select;?>&nbsp;
<input type="text" size="50" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<?php echo $status_select;?>&nbsp;
<?php echo $order_select;?>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>&nbsp;
<input type="button" value=" 重 置 " class="btn" onclick="Go('beian.php');"/>
</div>
</form>
<?php if($beian) { ?>
      <form name="form_beian"  method="post">        
     <div id="ztlistinfo">
        <dl id="ztinfo" class="clearfix">
          <dt class="titlenew">
            <label>备案主体信息: </label>
            <label class="btn_msg" for=" ">
            <?php if($beian['zhutino']) { ?>
                 备案号:<span style="color:#06c"><?php echo $beian['zhutino'];?></span>
         <input type="button" value="修改主体" class="btnstyle" name="ztmodbtn" onclick="javascript:location.href='?action=update&step=jieru&act=edit'">
            <?php } else { ?> 
 <input type="button" value="修改主体" class="btnstyle" name="ztmodbtn" onclick="javascript:location.href='?action=update&step=news&act=edit'">
 <?php } ?>
      
                  <input type="button" value="删除所有信息" class="textbtn" name="ztdelbtn" onclick="delzt();">
               
            </label>
          </dt>         
          <dd class="clearfix">
            <label>单位性质:</label>
            <label class="bamsg"><?php echo $beian['Dwxz'];?></label>
          </dd>
          <dd class="clearfix">
            <label id="Dwmc_title">主办单位或主办人名称:</label>
            <label class="bamsg"><?php echo $beian['Dwmc'];?></label>
          </dd>
          <dd class="clearfix">
            <label>主办单位或主办人的证件类型:</label>
            <label class="bamsg"><?php echo $beian['Zjlx'];?></label>
          </dd>
          <dd class="clearfix">
            <label>证件号码:</label>
            <label class="bamsg"><?php echo $beian['Zjhm'];?></label>
          </dd>
          <dd class="clearfix">
            <label>证件住所:</label>
            <label class="bamsg"><?php echo $beian['Zjzs'];?></label>
          </dd>
          <dd class="clearfix">
            <label>详细通信地址:</label>
            <label class="bamsg"><?php echo $beian['Xxdz'];?></label>
          </dd>
      
          <!-- *************************主体负责人信息******************** -->
          <dd class="clearfix">
            <label id="ztFzr_xm_title">法人姓名:</label>
            <label class="bamsg"><?php echo $beian['ztFzr_xm'];?></label>
          </dd>
          
          <dd class="clearfix">
            <label id="ztFzr_dhhm_title">办公室电话:</label>
            <label class="bamsg"><?php echo $beian['ztFzr_dhhm_code'];?>-<?php echo $beian['ztFzr_dhhm'];?>&nbsp;</label>
          </dd>
          
          <dd class="clearfix">
            <label>手机号码:</label>
            <label class="bamsg"><?php echo $beian['ztFzr_sjhm'];?>&nbsp;</label>
          </dd>
          <dd class="clearfix">
            <label>电子邮件地址:</label>
            <label class="bamsg"><?php echo $beian['ztFzr_dzyj'];?></label>
          </dd>
          <dd class="clearfix">
            <label>法人证件类型:</label>
            <label class="bamsg"><?php echo $beian['ztFzr_zjlx'];?></label>
          </dd>
          <dd class="clearfix">
            <label>法人证件号码:</label>
            <label class="bamsg"><?php echo $beian['ztFzr_zjhm'];?></label>
          </dd>  
          <dd class="clearfix">
            <label>最后修改时间:</label>
            <label class="bamsg"><?php echo date("Y-m-d H:i:s",$beian['updatetime']);?></label>
          </dd>   
               
        </dl>
        </div>
        <div id="wzlistinfo">
          
          <div class="morebg">
            <input type="button" value="添加网站" class="btnstyle" style="width:200px" onclick="javascript:location.href='?action=update&step=1'">
          </div>  
         
        </div>
       
        
        <input type="hidden" name="wzid">
        <input type="hidden" name="act">
</form>
<?php } ?>
<div class="bd">
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="80">编号</th>
<th>网站负责人</th>
<th width="80">办公室电话</th>
<th width="80">手机号码</th>
<th width="75">申请时间</th>
<th width="75">更新时间</th>
<th width="90" style="">状态</th>
<th width="90" style="">跟踪</th>
</tr>
<?php if($lists) { ?>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td><?php echo $v['itemid'];?></td>
<td class="f_blue f_b px11" ><?php echo $v['Fzr_xm'];?></td>
<td class="px11"><?php echo $v['Fzr_dhhm_code'];?>-<?php echo $v['Fzr_dhhm'];?></td>
<td class="px11"><?php echo $v['Fzr_sjhm'];?></td>
<td class="px11"><?php echo $v['addtime'];?></td>
<td class="px11"><?php echo $v['updatetime'];?></td>
<td><?php echo $v['statu'];?></td>
<td>
<?php if($v['bz']==0) { ?>
<a href="?action=update&step=1">进入</a>
<?php } else if($v['bz']==1) { ?>
<a href="?action=update&step=2&act=edit&id=<?php echo $v['id'];?>">进入</a>
<?php } else if($v['bz']==2) { ?>
<a href="?action=update&step=3&id=<?php echo $v['id'];?>">进入</a>
<?php } else if($v['bz']==3 && $v['status']==4) { ?>
<a href="?action=update&step=2&act=edit&id=<?php echo $v['id'];?>">重新修改上传</a>
<?php } else if($v['bz']==3) { ?>
<a href="?action=update&step=4&id=<?php echo $v['id'];?>">进入</a>
<?php } ?>
</td>
</tr>
<?php } } ?>
<?php } else { ?>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td colspan=8>您还没有添加网站</td>
</tr>
<?php } ?>
<style>
tr{
height:30px;

}
td{
 
        
         height:30px;
}
</style>
<?php if($groups) { ?>
<tr align="center">
<td height="30">&nbsp;</td>
<td><strong>小计</strong></td>
<td class="f_blue f_b px11"><?php echo $money;?></td>
<td colspan="6" align="left" class="f_red">&nbsp;&nbsp;提示：如果交易中有任何问题，请与网站联系</td>
</tr>
<?php } ?>
</table>
</div>
<div class="pages"><?php echo $pages;?></div>
<script>
function delzt(){
if(confirm("确定要将主体信息删除吗？此操作将不可撤销?"))
{
window.location.href='?action=update&step=del';
}
else{ return false;
} 
}
</script>
<script type="text/javascript">s('beian');m('home');</script>
<?php } ?>
<?php include template('footer', $module);?>