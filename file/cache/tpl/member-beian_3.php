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
})
</script>
<div id="beian_c">
 <div id="content">
<div class="mainlayout">
    <ul class="mapbox clearfix">
      <li class="noimg">备案完成</li>
      <li>提交管局</li>
      <li class="hover">上传资料-办理拍照</li>
      <li>填写网站信息</li>
      <li>填写主办单位信息</li>
    </ul>
    
    <div class="main_div_text" style=" margin:0; padding:0 20px"> 1.特别注意：网站负责人照片必须是在核验点拍摄的(<a style="color:#06c" href="/paizhao.asp">点击查看核验点地址</a>)，背景是工信部规定的专用备案幕布，普通照片将会被管局直接拒绝;如果您在偏远地区不便前往核验点，可以<a href="/CkPoint" style="color:#06c">点击此处申请幕布</a>自行拍照（会收取一定费用）。<br>
      2.为提高上传速度，建议将需要上传的图片缩小至1M以内再上传，<a href="help_zoom.asp" target="_blank" style="color:#06c">查看图片缩小的流程</a>。上传后系统会自动缩小为工信部要求的格式大小（100K以内）,请务必在上传完毕后点“<a href="/beian_info.asp" target="_blank" style="color:#06c">备案信息</a>”查看系统压缩后的图片是否清晰，<font color="#FF0000">如果不够清楚的，请自行处理图片到100K以内再重新上传</font>！ </div>
    
    <div style="color:#000;line-height:150%;border:1px solid #FF99CC;background:#FFFFCC;padding:10px; margin:10px;">上海涉及前置审批的备案，请在线提交后及时邮寄前置审批文件复印件至：上海市普陀区交暨路185号兴远科技创业园置业1号楼B101室收（邮编：200333）上海市摩恩网络电话：021-51875581，我司收到材料后会进行审核</div>
    
    <form name="form_beian" action="?action=<?php echo $action;?>&step=<?php echo $step;?>&act=<?php echo $act;?>" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>" />
      <!-- 主体部份-------------------------------------------------------------------------->
      
      <?php if($beian['dwxz']==2) { ?>
      <dl class="dl_border">
        <dt> 主办单位或主办人资料 </dt>
        
        <dd class="clearfix">
          <label>主办单位/主办者的名称:</label>
          <label class="label_left" ><i><?php echo $beian['ztFzr_xm'];?></i></label>
        </dd>
        
        <dd class="clearfix">
          <label>工商营业执照号码:</label>
          <label class="label_left"><i><?php echo $beian['Cgszz'];?></i></label>
        </dd>
        
        <dd class="clearfix">
          <label>工商营业执照扫描/拍摄件:</label>
          <div style="width:auto">
            <div class="ztzjfile_info clearfix">
               <div id="ztzjfile_btn" class="jUploader-button" ><span onclick="Dalbum('1',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb1').value, true);">选择文件</span>
           </div>
             <input type="hidden" name="post[pic_gsyy]" id="thumb1" value="<?php echo $beian['pic_gsyy'];?>"/></b><span><img src="<?php if($beian['pic_gsyy']) { ?><?php echo $beian['pic_gsyy'];?><?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
" width="100" height="100" id="showthumb1"  title="预览图片" alt="" onclick="_preview(Dd('showthumb1').src, 1);" />
               </div>
            <div class="jt_memo clearfix">
              <div class="j_jt"></div>
              <div class="j_memo">请根据主办单位性质上传相关的证件<font color="#FF0000">原件</font>扫描件，复印件无效（可用数码相机拍摄,但必须保证清晰）。
                若是身份证，必须是原件正、反面彩色，且上下摆放，合成在一起,竖版的。（横放会不清楚）,身份证扫描后请用photoshop处理一下，<font color="#FF0000">四周不要留太多的空白</font>，否则缩小后清晰度不高！ </div>
            </div>
          </div>
        </dd>
           <dd class="clearfix">
          <label>组织机构代码号码:</label>
          <label class="label_left"><i><?php echo $beian['Czzjg'];?></i></label>
        </dd>
         <dd class="clearfix">
          <label>组织机构代码扫描/拍摄件:</label>
          <div style="width:auto">
            <div class="ztzjfile_info clearfix">
               <div id="ztzjfile_btn" class="jUploader-button" ><span onclick="Dalbum('2',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb2').value, true);">选择文件</span>
           </div>
             <input type="hidden" name="post[pic_zzjg]" id="thumb2" value="<?php echo $beian['pic_zzjg'];?>"/></b><span><img src="<?php if($beian['pic_zzjg']) { ?><?php echo $beian['pic_zzjg'];?><?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
" width="100" height="100" id="showthumb2" title="预览图片" alt="" onclick="_preview(Dd('showthumb2').src, 1);" />
               </div>
            <div class="jt_memo clearfix">
              <div class="j_jt"></div>
              <div class="j_memo">请根据主办单位性质上传相关的证件<font color="#FF0000">原件</font>扫描件，复印件无效（可用数码相机拍摄,但必须保证清晰）。
                若是身份证，必须是原件正、反面彩色，且上下摆放，合成在一起,竖版的。（横放会不清楚）,身份证扫描后请用photoshop处理一下，<font color="#FF0000">四周不要留太多的空白</font>，否则缩小后清晰度不高！ </div>
            </div>
          </div>
        </dd>
      </dl>
      <dl class="dl_border">
        <dt> 主办单位负责人资料 </dt>
        
        <dd class="clearfix">
          <label id="ztFzr_xm_title">法人姓名:</label>
          <label class="label_left"><i><?php echo $beian['ztFzr_xm'];?></i></label>
        </dd>
        
        <dd class="clearfix">
          <label>法人身份证号码:</label>
          <label class="label_left"><i><?php echo $beian['ztFzr_zjhm'];?></i></label>
        </dd>
        
        <dd class="clearfix">
          <label>法人身份证扫描/拍摄件:</label>
           <div style="width:auto">
            <div class="ztzjfile_info clearfix">
               <div id="ztzjfile_btn" class="jUploader-button" ><span onclick="Dalbum('3',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb3').value, true);">选择文件</span>
           </div>
             <input type="hidden" name="post[pic_fr]" id="thumb3" value="<?php echo $beian['pic_fr'];?>"/></b><span><img src="<?php if($beian['pic_fr']) { ?><?php echo $beian['pic_fr'];?><?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
" width="100" height="100" id="showthumb3" title="预览图片" alt="" onclick="_preview(Dd('showthumb3').src, 1);" />
               </div>
            <div class="jt_memo clearfix">
              <div class="j_jt"></div>
              <div class="j_memo"> 必须是原件正、反面彩色，且上下摆放，合成在一起,竖版的。（横放会不清楚）,身份证扫描后请用photoshop处理一下，<font color="#FF0000">四周不要留太多的空白</font>，否则缩小后清晰度不高！</div>
            </div>
          </div>
        </dd>
      </dl>
      <!-- 网站部份-------------------------------------------------------------------------->
      <?php } ?>
      <dl class="dl_border">
        <dt> 网站负责人资料 </dt>
        <dd>
          
          <!-- 核验单-------------------------------------------------------------------------->
          <dl>
            
            <dd class="clearfix">
              <label>网站负责人姓名:</label>
              <label class="label_left"><i><?php echo $beian_zt['Fzr_xm'];?></i></label>
            </dd>
            
            <dd class="clearfix">
              <label>身份证号码:</label>
              <label class="label_left"><i><?php echo $beian_zt['Fzr_zjhm'];?></i></label>
            </dd>
            
            <dd class="clearfix">
              <label>身份证扫描/拍摄件:</label>
               <div style="width:auto">
            <div class="ztzjfile_info clearfix">
               <div id="ztzjfile_btn" class="jUploader-button" ><span onclick="Dalbum('4',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb4').value, true);">选择文件</span>
           </div>
             <input type="hidden" name="post[pic_idcard]" id="thumb4" value="<?php echo $beian_zt['pic_idcard'];?>"/></b><span><img src="<?php if($beian_zt['pic_idcard']) { ?><?php echo $beian_zt['pic_idcard'];?><?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
" width="100" height="100" id="showthumb4" title="预览图片" alt="" onclick="_preview(Dd('showthumb4').src, 1);" />
               </div>
                <div class="jt_memo clearfix">
                  <div class="j_jt"></div>
                  <div class="j_memo"> 必须是原件正、反面彩色，且上下摆放，合成在一起,竖版的。（横放会不清楚）,身份证扫描后请用photoshop处理一下，<font color="#FF0000">四周不要留太多的空白</font>，否则缩小后清晰度不高！ </div>
                </div>
              </div>
            </dd>
            <dd class="clearfix">
              
              <label>核验单:</label>
              
                <div style="width:auto">
            <div class="ztzjfile_info clearfix">
               <div id="ztzjfile_btn" class="jUploader-button" ><span onclick="Dalbum('5',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb5').value, true);">选择文件</span>
           </div>
             <input type="hidden" name="post[pic_hyd]" id="thumb5" value="<?php echo $beian_zt['pic_hyd'];?>"/></b><span><img src="<?php if($beian_zt['pic_hyd']) { ?><?php echo $beian_zt['pic_hyd'];?><?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
" width="100" height="100" id="showthumb5" title="预览图片" alt="" onclick="_preview(Dd('showthumb5').src, 1);" />
               </div>
                <div class="jt_memo clearfix">
                  <div class="j_jt"></div>
                  <div class="j_memo">核验单请下载：<a href="/doc/beianMiiRealityV12.doc" style="color:#06c">点击此处下载核验单原件</a><span style="color:#F00">(必须用钢笔或签字笔填写，单位需在签字处加盖公章)</span><br> 核验单上的网站域名请勿添加“www”字样<br>
                                                请仔细阅读核验单上的相关说明，按要求填完后扫描上传(<font color="#FF0000">不能用相机拍</font>)。 </div>
                    </div>
              </div>
            </dd>
           <dd class="clearfix">
              
              <label>信息安全书:</label>
              
                <div style="width:auto">
            <div class="ztzjfile_info clearfix">
               <div id="ztzjfile_btn" class="jUploader-button" ><span onclick="Dalbum('6',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb6').value, true);">选择文件</span>
           </div>
             <input type="hidden" name="post[pic_xinxi]" id="thumb6" value="<?php echo $beian_zt['pic_xinxi'];?>"/></b><span><img src="<?php if($beian_zt['pic_xinxi']) { ?><?php echo $beian_zt['pic_xinxi'];?><?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
" width="100" height="100" id="showthumb6" title="预览图片" alt="" onclick="_preview(Dd('showthumb6').src, 1);" />
               </div>
                <div class="jt_memo clearfix">
                  <div class="j_jt"></div>
                      <div class="j_memo">信息安全书请下载：<a href="/doc/beianMiiRealityV12.doc" style="color:#06c">点击此处下载信息安全书原件</a><span style="color:#F00">(必须用钢笔或签字笔填写，单位需在签字处加盖公章)</span><br> 核验单上的网站域名请勿添加“www”字样<br>
                                                请仔细阅读核验单上的相关说明，按要求填完后扫描上传(<font color="#FF0000">不能用相机拍</font>)。 </div>  </div>
              </div>
            </dd>
          </dl>
          
        </dd>
      </dl>
      <!--其它特殊省份需要的资料--------------------------------------------------->
      
      <div style="text-align:center; margin-top:10px; margin-bottom:20px;">
        <div style="text-align:center; background-color:#FF6; padding:5px; color:#F00; margin-bottom:5px;">上传完成后点击保存！</div>
         <input type="button" name="bakbutton" value="返回" onclick="javascript:history.back(-1);" class="btnstyle">
        <input type="button" name="submitbuttonfile" value="确定提交" class="textbtn">
        <div style="display:none; text-align:center; font-size:14px; font-weight:bold" id="loadmsg"> <img src="http://www.west263.com/newimages/load2.gif"><br>
          即将提交... </div>
      </div>
      <input type="hidden" name="act">
    </form>
  </div>

</div></div>
<?php include template('footer', $module);?>