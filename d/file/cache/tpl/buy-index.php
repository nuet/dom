<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<link href="<?php echo DT_SKIN;?>GeXing.css" rel="stylesheet" type="text/css">
<link href="<?php echo $CFG['url'];?>/member/image/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $CFG['url'];?>/file/script/tooltips.js"></script>
<?php if($catid=="") { ?>
<script>
$(document).ready(function(){ 
  
$('.G_X_XQ_XTab_li ul li').hover(function(){
   var liindex = $('.G_X_XQ_XTab_li ul li').index(this);
        $(this).addClass('on').siblings().removeClass('on');
        $('.G_X_XQ_XTabWarm div.G_X_XQ_list').eq(liindex).fadeIn(0).siblings('div.G_X_XQ_list').hide();
        var liWidth = $('.G_X_XQ_XTab_li li').width();
});
});
</script>
<div class="G_XBox">
  <div class="G_X_Bbg">
     <div class="G_XBox_baner">
       <img src="<?php echo DT_SKIN;?>image/G_XBox_baner_img.jpg" alt="">
     </div>
  </div>
  <div class="G_X_XQ">
    <div class="G_X_XQ_JD1">
      <img src="<?php echo DT_SKIN;?>image/G_X_XQ_JD1.jpg" alt="">
    </div>
    <div class="G_X_XQ_XTab">
    <div class="G_X_XQ_XTabLf" id="G_X_XQ_XTabLf">
      <div class="G_X_XQ_XTab_li">
     
           <?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
<?php if($k%$MOD['page_subcat']==0) { ?><ul><?php } ?>
<li class="G_X_XQ_li_li"><?php if($v['catid']==$catid) { ?> class="f_b"<?php } ?>
<a href=""><?php echo set_style($v['catname'],$v['style']);?></a></li>
<?php if($k%$MOD['page_subcat']==($MOD['page_subcat']-1)) { ?></ul><?php } ?>
<?php } } ?>
      </div>
      <div class="G_X_XQ_XTab_Sea">
        <div class="cat_search">
        <div class="cat_search_gest block" id="sear_gest">
        </div>
          <input autocomplete="off" id="search" placeholder="请输入关键字选择分类" onkeyup="sear()" class="cat_search_inpt" type="text"></div>
      </div>
    </div>
      <div class="G_X_XQ_XTabRt">
        <div class="G_X_XQ_XTabWarm" id="G_X_XQ_XTabWarm" >
        <!-- Logo设计 -->
          <div class="G_X_XQ_list on">
          <?php if(is_array($CAT1)) { foreach($CAT1 as $i => $v) { ?>
            <dl>
              <dt><?php echo $v['catname'];?></dt>
              <dd>
                <ul>
                   <?php if(is_array($CAT1_C[$i])) { foreach($CAT1_C[$i] as $v) { ?>
       <li><a href="<?php echo $MODULE['6']['linkurl'];?>?catid=<?php echo $v['catid'];?>"><?php echo set_style($v['catname'],$v['style']);?></a></li>
       <?php } } ?>
                </ul>
              </dd>
            </dl>
             <?php } } ?>
          </div>
          <div class="G_X_XQ_list">
             <?php if(is_array($CAT2)) { foreach($CAT2 as $i => $v) { ?>
            <dl>
              <dt><?php echo $v['catname'];?></dt>
              <dd>
                <ul>
                   <?php if(is_array($CAT2_C[$i])) { foreach($CAT2_C[$i] as $v) { ?>
       <li><a href="<?php echo $MODULE['6']['linkurl'];?>?catid=<?php echo $v['catid'];?>"><?php echo set_style($v['catname'],$v['style']);?></a></li>
       <?php } } ?>
                </ul>
              </dd>
            </dl>
             <?php } } ?>
          </div>
           <!-- 网站建设end -->
           <!-- APP开发 -->
           <div class="G_X_XQ_list">
             <?php if(is_array($CAT3)) { foreach($CAT3 as $i => $v) { ?>
            <dl>
              <dt><?php echo $v['catname'];?></dt>
              <dd>
                <ul>
                   <?php if(is_array($CAT3_C[$i])) { foreach($CAT3_C[$i] as $v) { ?>
       <li><a href="<?php echo $MODULE['6']['linkurl'];?>?catid=<?php echo $v['catid'];?>"><?php echo set_style($v['catname'],$v['style']);?></a></li>
       <?php } } ?>
                </ul>
              </dd>
            </dl>
             <?php } } ?>
          </div>
          <!-- APP开发 end -->
          <!-- 包装设计 -->
          <div class="G_X_XQ_list">
            <?php if(is_array($CAT4)) { foreach($CAT4 as $i => $v) { ?>
            <dl>
              <dt><?php echo $v['catname'];?></dt>
              <dd>
                <ul>
                   <?php if(is_array($CAT4_C[$i])) { foreach($CAT4_C[$i] as $v) { ?>
       <li><a href="<?php echo $MODULE['6']['linkurl'];?>?catid=<?php echo $v['catid'];?>"><?php echo set_style($v['catname'],$v['style']);?></a></li>
       <?php } } ?>
                </ul>
              </dd>
            </dl>
             <?php } } ?>
          </div>
          <!-- 包装设计end -->
          <!-- 网络推广 -->
          <div class="G_X_XQ_list">
            <?php if(is_array($CAT5)) { foreach($CAT5 as $i => $v) { ?>
            <dl>
              <dt><?php echo $v['catname'];?></dt>
              <dd>
                <ul>
                   <?php if(is_array($CAT5_C[$i])) { foreach($CAT5_C[$i] as $v) { ?>
       <li><a href="<?php echo $MODULE['6']['linkurl'];?>?catid=<?php echo $v['catid'];?>"><?php echo set_style($v['catname'],$v['style']);?></a></li>
       <?php } } ?>
                </ul>
              </dd>
            </dl>
             <?php } } ?>
          </div>
          <!-- 网络推广end -->
        </div>
      </div>
    </div>
  </div>
  <div class="G_X_XQ2_CJhelp">
      <div class="G_X_XQ2_CJhelpH2">
        <a href="">更多</a>
        <h2>常见问题：</h2>
      </div>
        <ul>
          <li class="faq-q">我在摩恩网络上交易有安全保障吗？</li>
          <li class="faq-a">
            <span class="faq-a-label">答：</span>
            <ul>
              <li>1）您发布需求后先支付项目首付款，对项目满意后，再支付项目尾款；如项目我们无法完成，保证退回全部款项，保障您的交易效果。</li>
              <li>
                2）我们是公司合作第三方资源经营，可以与您签订项目合同，保证项目进度。
              </li>
              
            </ul>
          </li>
          
          <li class="faq-q">我该怎么填写我的需求？</li>
          <li class="faq-a">
            <span class="faq-a-label">答：</span>
            <ul>
              <li>您可以：</li>
              <li>1）参考需求模版，将自己的需求描述清楚，可以使用上传附件进行说明。</li>
              <li>2）尽量用简单、明了的语言来表述自己的需求。</li>
              <li>3）实在难以表述清楚的，可以联系摩恩网络的客服人员协助</li>
            </ul>
          </li>
        </ul>
    </div>
</div>
<!-- 个性需求 end -->
  
<!-- div高度自适应 -->
<script type="text/javascript">
window.onload=function()
{

 var divLeft=document.getElementById("G_X_XQ_XTabLf");
 var divRight=document.getElementById("G_X_XQ_XTabWarm");
 if(divLeft.offsetHeight>divRight.offsetHeight){
 
 }
 else{
  divRight.style.height=divLeft.offsetHeight-"20"+"px";
 
  }
 
 }
</script>
<script type="text/javascript">
$(function(){
 

$(".G_X_XQ_li_li").hover(function(){

 var divLeft=$("#G_X_XQ_XTabLf").height();

 var divRight=$("#G_X_XQ_XTabWarm").height();;
 if(divLeft>divRight){
 
 }
   else{

 divRight=divLeft-20;
 $("#G_X_XQ_XTabWarm").css("height",divRight);
   }
 
})

})
 function sear(){
var s=$("#search").val();
 $("#sear_gest").html('');  
 $("#sear_gest").addClass("block");
$.ajax({
url: 'index.php',
type: 'POST',
data:{catname:s,t:"1"},
timeout: 1000,
success: function(msg){
if(msg=="null"){
$("#sear_gest").html('<a id="nomsg">对不起，找不到这个分类</a>');  
 $("#sear_gest").removeClass("block");
}else{
 var oProduct, $row;
 result= eval(msg);
 for(var i=0, l=result.length; i<l; i++)
         {
             oProduct = result[i];
  $item = $('<a href="<?php echo $CFG['url'];?>buy/index.php?catid='+oProduct.catid+'">'+oProduct.catname+'</a>');
  $("#sear_gest").append($item);  
  $("#sear_gest").removeClass("block");
 } 

}
}
});


}
 
</script>
<?php } else { ?>
<div class="G_XBox">
  <div class="G_X_Bbg">
     <div class="G_XBox_baner">
       <img src="<?php echo DT_SKIN;?>image/G_XBox_baner_img.jpg" alt="">
     </div>
  </div>
  <div class="G_X_XQ">
    <div class="G_X_XQ_JD1">
      <img src="<?php echo DT_SKIN;?>image/G_X_XQ_JD2.jpg" alt="">
    </div>
    <!-- 需求进度二 -->
<iframe src="" name="send" id="send" style="display:none;"></iframe>
<form method="post" action="<?php echo $CFG['url'];?>/member/<?php echo $DT['file_my'];?>" id="dform" target="send">
<input type="hidden" name="post[typeid]" value="0" >
<input type="hidden" name="action" value="add"/>
<input type="hidden" name="mid" value="6"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="post[catid]" value="<?php echo $catid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="submit1" value="1"/>
 <div class="G_X_XQ2">
        <div class="G_X_XQ2_lf" id="G_X_XQ2_rt">
          <div class="G_X_XQ2_lf1">
            <span><b>您选择了：</b><?php echo $p['catname'];?> <a href="<?php echo $MODULE['6']['linkurl'];?>" class="textde_unline">修改</a></span>
          </div>
          <div class="G_X_XQ2_lf2">
            <p><b>请一句话描述您的需求：</b></p>
            <div class="G_X_input_prepend clearfix">
            <span class="Gx_add_on"></span>
              <input placeholder="例如：xx科技公司Logo设计" type="text" id="title" name="post[title]" class="text" value="<?php echo $title;?>">
            
            </div>
          </div>
          <div class="G_X_XQ2_lf3">
            <p><b>说说您的具体要求： <i><a href="" class="textde_unline"></a></i></b>
              <a href="#" class="G_X_XQ2_lf3_kankan">看看别人怎么写</a>
          </p>
          </div>
      
          <div class="G_X_X_Qintro_wrap"><textarea id="content" class="G_X_X_Qtext" name="post[content]"></textarea></div>
          <div class="G_X_X_Qintro_upload">
            <a href="#" class="ui_upload"><span onclick="openup()" style='width: 82px;height: 20px;display: block;'>上传文件</span>   
            </a>
            
            <span>将附件打包压缩上传，不能超过10M</span>
            <a target="_blank" class="upload-help" href="" class="textde_unline">上传遇到问题?</a>
          </div>
            <ul id="xs" class="uploadfile-indicator clearfix">
             <li class="clearfix tsuc" data-pid="2796299196387.498">
             <p class="file clearfix">
             <span class="fl"><input name="post[fileurl]" id="fileurl" type="text" size="30" value="<?php echo $fileurl;?>"/></span>
             <a href="#" action-type="cancel" onclick="delup()"> 删除</a></p>
             </li>
             </ul>
          <div class="G_X_X_Qintro_LXLX">
            <p><b>输入您的预算，有利于我们判断此预算是否能完成该需求，预算可以写区间，比如：3000-4000元</b></p>
            <div class="G_X_X_Qintro_LXLX_Q">
              <span class="Gx_add_on Gx_add_onMone"></span>
              <input id="price" name="post[price]" placeholder="输入您的预算(选填)" type="text" value="" class="" ><i>元</i>
            </div>
            <div class="G_X_X_Qintro_LXLX_Q">
              <span class="Gx_add_on Gx_add_onQQ"></span>
              <input id="pack" name="post[pack]" placeholder="输入您的QQ号(选填)" type="text" value="" class="" ><i></i>
            </div> 
            <div class="G_X_XQ2_lf_next">
              <a href="#" class="aNext_Blue" id="G_X_XQ2nextBtn" onclick="check()">下一步</a>
              <a href="<?php echo $MODULE['6']['linkurl'];?>" class="marginleft10 Blue">上一步</a>
            </div>
          </div>
        </div>
        <div class="G_X_XQ2_rt" id="G_X_XQ2_lf">
            <div class="G_X_XQ2_rt1">
              <dl id="j-status" class="sum-status yahei">
                <dt style="display: none">因为信任，所以成就不凡</dt>
                <dd class="task-num">
                  <div class="status-title">需求发布后,</div>
                  <div>一个小时内客服会与您联系</div>
                </dd>
                <dd class="task-reward">
                  <div class="status-title">可能会选择在线沟通,</div>
                  <div>完善会员信息，方便我们进行沟通</div>
                </dd>
                <dd class="task-expert">
                  <div class="status-title">专人跟踪处理，</div>
                  <div>我们重视每一个客户的需求</div>
                </dd>
              </dl>
            </div>
            <div class="G_X_XQ2_rt2">
              <p>发需求前，<br/>可以先联系我们的在线客服，可以电话或者加我们的企业QQ</p>
            </div>
            <div class="G_X_XQ2_rt3">
              <p class="font24">400-651-5550</p>
              <p class="font24">021-51875581</p>
              <p><i>周一至周六9:00-18:00</i></p>
            </div>
            <!-- qq客服 -->
            <div class="G_X_XQ2_rt4QQ">
              <p><a href="" ></a></p>
              <p><a href=""></a></p>
            </div>
            <!-- qq客服 end-->
        </div>
    </div>
    <div class="G_X_XQ2_CJhelp">
      <div class="G_X_XQ2_CJhelpH2">
        <a href="">更多</a>
        <h2>常见问题：</h2>
      </div>
        <ul>
          <li class="faq-q">我在摩恩网络上交易有安全保障吗？</li>
          <li class="faq-a">
            <span class="faq-a-label">答：</span>
            <ul>
              <li>1）您发布需求后先支付项目首付款，对项目满意后，再支付项目尾款；如项目我们无法完成，保证退回全部款项，保障您的交易效果。</li>
              <li>
                2）我们是公司合作第三方资源经营，可以与您签订项目合同，保证项目进度。
              </li>
              
            </ul>
          </li>
          
          <li class="faq-q">我该怎么填写我的需求？</li>
          <li class="faq-a">
            <span class="faq-a-label">答：</span>
            <ul>
              <li>您可以：</li>
              <li>1）参考需求模版，将自己的需求描述清楚，可以使用上传附件进行说明。</li>
              <li>2）尽量用简单、明了的语言来表述自己的需求。</li>
              <li>3）实在难以表述清楚的，可以联系摩恩网络的客服人员协助</li>
            </ul>
          </li>
        </ul>
    </div> </form>
    <!-- 需求进度二end -->
   
  </div>
</div>
<!-- 个性需求 end -->
<!-- div自适应高度 -->
<script type="text/javascript">
window.onload=function()
{
 var divLeft=document.getElementById("G_X_XQ2_lf");
 var divRight=document.getElementById("G_X_XQ2_rt");
 if(divLeft.offsetHeight>divRight.offsetHeight){}
 else{
  
  divLeft.style.height=divRight.offsetHeight+"px";
  }
 
 }
function openup(){
Dfile(<?php echo $moduleid;?>, Dd('fileurl').value, 'fileurl', '<?php echo $MOD['upload'];?>');
Dd('xs').style.display='block';
}
function delup(){
Dd('fileurl').value='';
Dd('xs').style.display='none';
}
</script>  
<script type="text/javascript">
function check() {
var l;
var f;
f = 'title';
l = Dd(f).value.length;
if(l < 5 || l > 30) {
 show_loading();
        show_err_msg('描述应为5-30字，当前已输入'+l+'字', f);  
         $('#title').focus();
return false;
}
f = 'content';
l = Dd(f).value.length;
if(l < 15 || l > 500) {
show_loading();
        show_err_msg('具体文档需求应为15-500字，当前已输入'+l+'字', f);
        $('#content').focus();
return false;
}
 if (confirm("您确认填写信息无误，提交此订单吗？")) {
var tb_pathToImage = "/skin/default/image/jdt.gif";  
   imgLoader = new Image(); //  image对象  
    imgLoader.src = tb_pathToImage;  
    $("body").append("<div id='Image_load'><img src='" + imgLoader.src + "' /></div>"); //page中增加Img  
    $('#Image_load').show(); //show loader  
$("#foot_za").css("display","block");  
$("#foot_za").css("display","block");
$("#dform").submit();
return true;
  }else{
return false;
}

}
var destoon_oauth = '<?php echo $EXT['oauth'];?>';
</script>
<!-- 弹出层 -->
<div class="ui-window tpl-dialog" style="margin-left: -300px; width: 600px; z-index: 190;"><div class="ui-window-header"><a href="javascript:;" class="ui-window-close" action-type="window-close">×</a><h3>需求模版选择</h3></div><div class="ui-window-body"><div><div class="md-alert-boc gray6 " id="use-model">
  <div class="clearfix">
    <ul class="tab_t">
      <li class="tab_i">设计</li>
      <li class="tab_i">文案</li>
      <li class="tab_i">网站开发</li>
      <li class="tab_i">计件任务</li>
    </ul>
    <ul class="tab_c">
      <li class="tab_l" style="display: block;">
            <pre>标题：珠宝公司logo设计
公司名称：XXX珠光宝气
经营范围：黄金、白银、钻石、翡翠、彩色宝石等珠宝
参考样本：周大福（根据自身情况而定）
主要用途：设计logo应用到实体店、网店、柜台、名片和产品
包装中。（根据自身情况而定）
具体要求：
一、设计要求：
1、设计要求主题突出、寓意深刻。
2、表现要求简约大气、突显雍容华贵。
3、作品风格、形式不限，但必须原创。
4、设计规格均为正度8开或16开。（根据自身情况而定）
5、必须是彩色原稿，能以不同的 比例尺寸清晰显示。
6、标识应为平面形式，可用于各类广告、宣传品及办公用品的印刷。
知识产权说明：
1、 所设计的作品为原创，为第一次发布。未侵犯他人的著作权。
如有侵犯他人著作权，由设计者承担所有法律责任。
2、 中标的设计作品，我方支付设计制作费。即拥有该作品的知识
产权，包括著作权、使用权和发布权等，并有权对设计作品进行修
改、组合和应用，设计者不得再向其他任何地方使用该设计作品。
              </pre>
          </li>
          <li class="tab_l">
            <pre>标题：重庆两江新区形象推广文案征集
活动背景：重庆市两江新区成立于2010年6月18日，是全国
第三个国家级开发区，着眼于建设内陆开放经济和现代产业体系，
将打造成内陆重要的先进制造业基地和现代服务业基地、长江
上游金融中心和创新中心。
一、精神要求：
1、作品要具有鲜明的象征意义和两江特色，力求反映量将地域
特色和新区特点，充分体现搏浪远望、后来居上的精神。
2、作品风格、形式不限，但必须是原创且此前未以任何形式发表。
二、表现形式：
1、作品要精练易记、有震撼力、吸引力和潮流感，语言简练，
内涵丰富，朗朗上口，易于记忆和传播。
2、字数应该控制在500字以内，附简单文字说明。
3、作品可以不按常理创作但一定要有道德标准，不能有不好的
谐音或寓意。
知识产权说明：
1、 所设计的作品为原创，为第一次发布。未侵犯他人的著作权。
如有侵犯他人著作权，由设计者承担所有法律责任。
2、 中标的设计作品，我方支付设计制作费。即拥有该作品的
知识产权，包括著作权、使用权和发布权等，并有权对设计作品
进行修改、组合和应用，设计者不得再向其他任何地方使用
该设计作品。
              </pre>
          </li>
      <li class="tab_l">
            <pre>标题：旅游网站开发
开发语言：php、html（根据自身情况而定）
网站用途：旅游行业网站，提供线路查询、出行酒店预订、
伴游信息查询等服务。
参考网站：www.XXXXX.com
具体要求：
首页导航栏：新闻中心（要有幻灯展示）、线路推荐、旅游DIY、
合作伙伴（旅馆）、互动论坛、关于我们
前台功能：会员注册、登陆系统；互动留言系统；站内搜索系统；
人才招募系统、论坛（社区）系统......
后台功能：会员管理系统；新闻、信息、广告发布系统；页面访问
统计；友情链接；站内信息检索系统......
完成时限：XX天
服务商要求：认证机构（认证个人，认证机构或不限）
              </pre>
          </li>
      <li class="tab_l">
            <pre>标题：电子商务网站QQ群推广
条件：QQ群发送，每3个QQ群为一稿，一份稿件为1元，
多劳多得。
QQ群要求：QQ群人数需要在100人以上，在线人数必须超过30人.
超过200人的超级群优先审核。在线人数不够30人的可以多发一个群。
发送对象：求职、招聘、服装、交友、星座等QQ群。
交稿条件：发送结束后提交一整张完整的对话框截图，截图
包含(QQ群名称、QQ群总人数、在线人数和任务广告)
文案字体：宋体12 红色
发布内容请下载附件。（需要上传附件）
完成时限：X月X日X时截止。
              </pre>
          </li>
    </ul>
  </div>
</div>
<div class="buttons mt10" style="text-align: center">
  <a href="javascript:;" class="butn butn-orange" id="use_ok" title="使用模版"><i></i><s class="Yello">使用模版</s></a>&nbsp;&nbsp;&nbsp;
  <a href="javascript:;" class="butn use_close" id="use_close" title="取消"><i></i><s>取消</s></a>
</div>
<script>
$(function(){ 
    
    $('.ui-window-close').click(function(){
       $('.ui-window').css('display','none');
       
    });
     $('.use_close').click(function(){
       $('.ui-window').css('display','none');
       
    });
     $('.G_X_XQ2_lf3_kankan').click(function(){
         $('.ui-window').css('display','block');
         
      });
})
</script>
<script  type="text/javascript">
    //支持Enter键登录
    document.onkeydown = function(e){
      if(!e) e = window.event;
      if((e.keyCode || e.which) == 13){
        var obtnLogin=document.getElementById("G_X_XQ2nextBtn")
        obtnLogin.focus();
      }
    }
</script>
<script>
  var that = this;
  var idx,model = $("#use-model"),
    clo = $("#use-close"),
    o = $("#use_ok"),
    t = model.find(".tab_i"),
    c = model.find(".tab_l");
  idx = t.index(t.filter(".current"));
  
  t.bind("click",function(){
    var that = $(this),
      cur = c.hide().eq(idx);
      
    idx = t.index(that);
    t.removeClass("current");
    that.addClass("current");
    //cur.show();
    c.eq($(this).index()).show();
    return false;
  });
  
  clo.bind("click",function(){
    that.hide();
    return false;
  });
  
  o.bind("click",function(){
    var tex = c.eq(idx).find("pre").html();
    $("#content").val(tex).focus();
   $('.ui-window').css("display","none");
    return false;
  });
</script></div></div><div class="ui-window-footer" style="display:none;"></div></div>
<!-- 弹出层 end -->
<?php } ?>
<?php include template('footer');?>
