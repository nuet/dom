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
$.BeianObj.Settings.b_Dwxz="4";
$.BeianObj();
if(<?php echo $beian_zt['restyle'];?>){
if(<?php echo $beian_zt['restyle'];?>==1){
$("#rstyle1").css("display","block");
$("#zt_left").css("display","none");
$("#zt_right").css("display","none");
}else{
$("#rstyle1").css("display","none");
$("#zt_left").css("display","block");
$("#zt_right").css("display","block");
}
}
})
</script>
<div class="beian_c">
 <div id="content">
<div class="mainlayout">
    <ul class="mapbox clearfix" style="float:none">
      <li class="noimg">备案完成</li>
      <li>提交管局</li>
      <li class="hover">上传资料-办理拍照</li>
      <li>填写网站信息</li>
      <li>填写主办单位信息</li>
    </ul>
   
    <div>
  
 
        
    </div>
  
    <div id="zt_box_info">
        <dl id="zt_box" class="clearfix">
        <form name="form_beian" action="?action=<?php echo $action;?>&step=<?php echo $step;?>&id=<?php echo $id;?>" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>" />
          <dt class="titlenew">
            <label>
            <?php if($beian_zt['restyle']==1) { ?>
            <input type="radio" name="restyle" value="1" onclick="rest('1')" checked>方式一：来我司拍照 
            <?php } else { ?>
             <input type="radio" name="restyle" value="1" onclick="rest('1')">方式一：来我司拍照
            <?php } ?>
 </label> 
          </dt>         
            <div id="rstyle1">
            <p>上海地址:</p>   
    <p>上海市普陀区交暨路185号兴远科技创业园置业1号楼B101室(近新村路）</p>
 <p>地铁：7号线新村路站下，1号口出左转直走到交暨路左转（步行约350米）</p>
 <p>公交：117公交-交通路交暨路下(下车步行450米)、547路公交-新沪路新村路站下(下车步行500米)</p>
 <dd>
            <label>&nbsp;</label>
            <?php if($beian_zt['status']!=0) { ?>
             <input type="submit" name="submit2" class="btnstyle1" onclick="return false"style="width:60px;margin-left:10px;" value="提交"/>
            <?php } else { ?>
            <input type="submit" name="submit2" class="btnstyle" onclick="if(confirm('确定您来我司拍照么吗？此操作将不可更改')){return true}else{return false}" style="width:60px;margin-left:10px;" value="提交"/>
            <?php } ?>
            </dd>
           </div>
           
           </form>
        </dl>
        </div>
        <div id="zt_box_info">
        
         
       
      <dl id="zt_box" class="clearfix"> 
        <form name="form_beian" action="?action=<?php echo $action;?>&step=<?php echo $step;?>&id=<?php echo $id;?>" method="post">
       <input type="hidden" name="id" value="<?php echo $id;?>" />
       <dt class="titlenew">
       
            <label>
             <?php if($beian_zt['restyle']==2) { ?>
            <input type="radio" name="restyle" value="2" onclick="rest('2')" checked>方式二：申请快递背景幕布（采取顺丰到付方式）
            <?php } else { ?>
            <input type="radio" name="restyle"  value="2" onclick="rest('2')">方式二：申请快递背景幕布（采取顺丰到付方式）
            <?php } ?>
</label>
          </dt>
            <div id="zt_left">
            <dd>
            <label>收件人:</label>
           <input type="text" name="post[mb_name]" size=30 value="<?php echo $beian_zt['mb_name'];?>"/>
            </dd>
           <dd>
            <label>收件地址:</label>
           <input type="text" name="post[mb_address]" size=30 value="<?php echo $beian_zt['mb_address'];?>"/>
            </dd>
            <dd>
            <label>邮编:</label>
           <input type="text" name="post[postcode]" size=30 value="<?php echo $beian_zt['postcode'];?>"/>
            </dd>
            <dd>
            <label>联系手机:</label>
           <input type="text"  name="post[mb_mob]" size=30 value="<?php echo $beian_zt['mb_mob'];?>"size=30/>
            </dd>
            <dd>
            <label>备注:</label>
           <input type="text"  name="post[mb_note]" size=30 value="<?php echo $beian_zt['mb_note'];?>"size=30/>
            </dd>
            <dd>
            <label>&nbsp;</label>
            <?php if($beian_zt['status']!=0) { ?>
             <input type="submit" name="submit" class="btnstyle1" onclick="return false"style="width:60px;margin-left:10px;" value="提交"/>
            <?php } else { ?>
            <input type="submit" name="submit" class="btnstyle" onclick="if(confirm('确定您的快递信息正确吗？此操作将不可更改')){return true}else{return false}" style="width:60px;margin-left:10px;" value="提交"/>
            <?php } ?>
            </dd>
            
           </div>
             <div id="zt_right">
             <div class="mu_msg">
             <?php if($beian_zt['mb_address'] && $beian_zt['express']==0 ) { ?>
                  <div> 等待工作人员<br>快递背景幕布</div>
             <?php } else if($beian_zt['mb_address'] && $beian_zt['express']==1 ) { ?>
                <div> 幕布快递快递中<br>请注意查收<br>您的快递单号:&nbsp;<a href="http://www.sf-express.com/cn/sc/" target="_blank"><?php echo $beian_zt['tradeid'];?></a></div>
             <?php } ?>
             </div>
             </div>    
          </form> 
        </dl>
 
        </div>
        
          <?php if($beian_zt['status']==0) { ?>
         
         
         
           <?php } else if($beian_zt['mb_address'] && $beian_zt['express']==1 && $beian_zt['restyle']==2 ) { ?>
           
           <form action="?action=<?php echo $action;?>&step=<?php echo $step;?>&id=<?php echo $id;?>" method="post" enctype="multipart/form-data" class="file-box">
        <i>上传幕布照片：</i>
                     <input name="pic_mb" id="fileurl1" type="text" class="txt" size="50" value="<?php echo $beian_zt['pic_mb'];?>">       
                          <input type="button" class="btn1" value="选择文件">            
                         <input type="text" name="fileField" class="file" id="fileField" size="28" onclick="Dfile(2, Dd('fileurl1').value, 'fileurl1', 'jpg|gif|png|bmp');">    
                      
                          <!--<input type="submit" name="submit" class="btn" value="上传" />--> 支持文件格式：jpg,gif,png,bmp
    
        <input type="submit" value="上&nbsp;&nbsp;传" name="submit1" class="btnstyles" >
                </form>
            <?php } else if($beian_zt['status']==2 && $beian_zt['status']==2 && $beian_zt['restyle']==2) { ?>  
             <div id="zt_box_info">
                 您上传的幕布背景是  <img src="<?php if($beian_zt['pic_mb']) { ?><?php echo $beian_zt['pic_mb'];?><?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
" width="100" height="100" id="showthumb1"  title="预览图片" alt="" onclick="_preview(Dd('showthumb1').src, 1);" />
      </div>
            <?php } ?>
           
   
  </div>

</div></div>
<script>
function rest(i){
if(i==1){
$("#rstyle1").css("display","block");
$("#zt_left").css("display","none");
$("#zt_right").css("display","none");
}else{
$("#rstyle1").css("display","none");
$("#zt_left").css("display","block");
$("#zt_right").css("display","block");
}

}
</script>
<?php include template('footer', $module);?>