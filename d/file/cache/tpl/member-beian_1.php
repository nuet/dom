<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>beian.css"/>
<script type="text/javascript" src="<?php echo $CFG['url'];?>file/script/beian.js"/></script>
<script type="text/javascript" src="<?php echo $CFG['url'];?>file/script/data.js"/></script>
<script type="text/javascript" src="<?php echo $CFG['url'];?>file/script/check.js"/></script>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="beian.php?action=update&step=1"><span>申请备案</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="home"><a href="beian.php"><span>我的备案</span></a></td>
</tr>
</table>
</div>
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
<a href="beian.php?action=update&step=2&type=1" class="u_btns" >新备案进入</a>
</li>
  
        </ul>
<ul id="old_beian">
        <li class="font24 font-red padding-b28">从未办过备案</li>
            <li class="font16">1. 单位或个人将已有备案号；</li>
            <li class="font16">2. 域名之前备案，备案接入到我司。</li>
         
            <li class="beian-link">
<a href="beian.php?action=update&step=2&type=2" class="u_btns" >点击进入备案</a>
</li>
  </ul>
</div>
<script type="text/javascript">s('beian');m('add');</script>
<?php include template('footer', $module);?>