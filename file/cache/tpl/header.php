<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo DT_CHARSET;?>"/>
<title><?php if($seo_title) { ?><?php echo $seo_title;?><?php } else { ?><?php if($head_title) { ?><?php echo $head_title;?><?php echo $DT['seo_delimiter'];?><?php } ?>
<?php if($city_sitename) { ?><?php echo $city_sitename;?><?php } else { ?><?php echo $DT['sitename'];?><?php } ?>
<?php } ?>
</title>
<?php if($head_keywords) { ?>
<meta name="keywords" content="<?php echo $head_keywords;?>"/>
<?php } ?>
<?php if($head_description) { ?>
<meta name="description" content="<?php echo $head_description;?>"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<?php } ?>
<?php if($head_mobile) { ?>
<meta http-equiv="mobile-agent" content="format=xhtml; url=<?php echo $head_mobile;?>"> 
<meta http-equiv="mobile-agent" content="format=html5; url=<?php echo $head_mobile;?>">
<?php } ?>
<meta name="generator" content="<?php echo $CFG['url'];?>"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="bookmark" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<?php if($head_canonical) { ?>
<link rel="canonical" href="<?php echo $head_canonical;?>"/>
<?php } ?>
<?php if($EXT['archiver_enable']) { ?>
<link rel="archives" title="<?php echo $DT['sitename'];?>" href="<?php echo $EXT['archiver_url'];?>"/>
<?php } ?>
<?php if($moduleid>4) { ?><link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?><?php echo $module;?>.css"/><?php } ?>
<?php if($CSS) { ?>
<?php if(is_array($CSS)) { foreach($CSS as $css) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?><?php echo $css;?>.css"/>
<?php } } ?>
<?php } ?>
<link href="<?php echo DT_SKIN;?>/global.css" rel="stylesheet" type="text/css">
<link href="<?php echo DT_SKIN;?>/oy.ddy.css" rel="stylesheet" type="text/css">
<link href="<?php echo DT_SKIN;?>/user.css" rel="stylesheet" type="text/css">
<link href="<?php echo DT_SKIN;?>/New_Index.css" rel="stylesheet" type="text/css">
<link href="<?php echo DT_SKIN;?>/MoBan_Ye_Index.css" rel="stylesheet" type="text/css">
<link href="<?php echo DT_SKIN;?>/New_Index0428.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>style.css"/>
<script type="text/javascript" src="<?php echo DT_STATIC;?>/file/script/jquery-1.8.1.min.js"></script>
<?php if(!DT_DEBUG) { ?><script type="text/javascript">window.onerror=function(){return true;}</script><?php } ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/page.js"></script>
 <script  src="<?php echo $CFG['url'];?>file/script/Maya.MessageBox/Maya.MessageBox.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $CFG['url'];?>file/script/Maya.MessageBox/Maya.MessageBox.css">
 <script  src="<?php echo $CFG['url'];?>file/script/mayabox/Maya.Box.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $CFG['url'];?>file/script/mayabox/style.css">
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/admin.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/member.js"></script>
<?php if($lazy) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.lazyload.js"></script><?php } ?>
<?php if($JS) { ?>
<?php if(is_array($JS)) { foreach($JS as $js) { ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/<?php echo $js;?>.js"></script>
<?php } } ?>
<?php } ?>
<?php $searchid = ($moduleid > 3 && $MODULE[$moduleid]['ismenu'] && !$MODULE[$moduleid]['islink']) ? $moduleid : 5;?>
<script type="text/javascript">
<?php if($moduleid==1 && $EXT['wap_enable'] && $EXT['wap_goto']) { ?>
GoMobile('<?php echo $EXT['wap_url'];?>');
<?php } ?>
var searchid = <?php echo $searchid;?>;
<?php if($itemid && $DT['anticopy']) { ?>
document.oncontextmenu=function(e){return false;};
document.onselectstart=function(e){return false;};
<?php } ?>
</script>
<script type="text/javascript">
function gocity(s) {
Go('<?php echo $CFG['url'];?>index.php?action=go&'+s);
}
</script>
<link href="<?php echo DT_SKIN;?>/oy.ddy.css" rel="stylesheet" type="text/css">
<link href="<?php echo DT_SKIN;?>/user.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo DT_STATIC;?>/file/script/jquery.touchSlider.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>/file/script/tab.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>/file/script/NewIndex0428.js"></script>
</head>
<body>
<div class="oyw_header">
<div class="oyw_top">
<div class="oyw_Land">
<div class="oyw_Land_l fl" style="width:550px;">
<ul>
<li><script type="text/javascript">addFav('收藏本页');</script> |</li>
<li><span style="padding-right:6px;"><img src="<?php echo DT_SKIN;?>/image/oyw_pic_03.jpg" width="10" height="13"></span><a href="<?php echo $EXT['wap_url'];?>mobile.php">手机版</a> |</li>
<li> <span style="padding-right:6px;"><img src="<?php echo DT_SKIN;?>/image/oyw_pic_06.jpg" width="12" height="11"></span>

<span id="destoon_member1"></span>

 
</ul>
 </div>
<div class="f_r" id="destoon_member"></div>
</div>
</div>
<div class="MoBanLogo" id="MoBanLogo">
<!-- logo图片开始 -->
<!-- logo图片结束 -->
  <div class="MoBanLogoImg1">
  <a href="<?php echo $CFG['url'];?>">
       <img src="<?php echo $DT['logo'];?>" alt="<?php echo $DT['title'];?>"></a>
  </div>
  
  <div class="oyw_city u_fl">
<!-- 显示隐藏div城市 -->
<div class="oyw_city_def"></div>
<div class="oyw_city_showout" id="oyw_city_showa" onmousemove="cityshow()" onmouseout="cityhide()"><span><a href="">[切换城市]</a></span></div>
<div class="oyw_city_qh" id="oyw_city_qh" onmousemove="cityshow()" onmouseout="cityhide()" style="display: none;">
<div class="oyw_city_qh_hot">
<span>热门:</span>
<ul>
 <li><a href="javascript:gocity('areaid=2')">上海</a></li>
 <li><a href="javascript:gocity('areaid=1')">北京</a></li>
 <li><a href="javascript:gocity('areaid=20')">广州</a></li>
 <li><a href="javascript:gocity('areaid=35')">深圳</a></li>
 <li><a href="javascript:gocity('')">全国</a></li>
 </ul>
</div>
<div class="oyw_city_qh_hb">
<span>华北东北:</span>
<ul>
 <li><a href="javascript:gocity('areaid=1')">北京</a></li>
<li><a href="javascript:gocity('areaid=50')">大连</a></li>
<li><a href="javascript:gocity('areaid=49')">沈阳</a></li>
<li><a href="javascript:gocity('areaid=48')">天津</a></li>
<li><a href="javascript:gocity('areaid=46')">哈尔滨</a></li>
</ul>
</div>
<div class="oyw_city_qh_hd">
<span>华东地区:</span>
<ul>
<li><a href="javascript:gocity('areaid=2')">上海</a></li>
<li><a href="javascript:gocity('areaid=47')">南京</a></li>
<li><a href="javascript:gocity('areaid=45')">苏州</a></li>
<li><a href="javascript:gocity('areaid=44')">杭州</a></li>
<li><a href="javascript:gocity('areaid=42')">无锡</a></li>
<li><a href="javascript:gocity('areaid=43')">厦门</a></li>
<li><a href="javascript:gocity('areaid=41')">宁波</a></li>
<li><a href="javascript:gocity('areaid=40')">青岛</a></li>
<li><a href="javascript:gocity('areaid=39')">济南</a></li>
<li><a href="javascript:gocity('areaid=38')">合肥</a></li>
<li><a href="javascript:gocity('areaid=37')">福州</a></li>
</ul>
</div>
<div class="oyw_city_qh_zxb">
<span>中部西部:</span>
<ul>
<li><a href="javascript:gocity('areaid=36')">郑州</a></li>
<li><a href="javascript:gocity('areaid=53')">武汉</a></li>
<li><a href="javascript:gocity('areaid=52')">成都</a></li>
<li><a href="javascript:gocity('areaid=4')">重庆</a></li>
<li><a href="javascript:gocity('areaid=51')">西安</a></li>
</ul>
</div>
<div class="oyw_city_qh_hnd">
<span>华南地区:</span>
<ul>
<li><a href="javascript:gocity('areaid=20')">广州</a></li>
<li><a href="javascript:gocity('areaid=35')">深圳</a></li>
</ul>
</div>
</div>
</div>
  <form action="<?php echo $CFG['url'];?>mall/search_order.php" id="search_header" method="get">
  <div class="MoBanLogoSea1">
    <div class="input_IndexNew">
    <ul id="valuelist">
              <li title="1">定制案例</li>          
              <li title="4">模版市场</li> 
              <li title="4">平面案例</li>      
              </ul>
      <div class="INputLeft">
       <div id="searchtype">
              <div id="searchvalue">定制案例</div>
              <div id="boult"><span></span></div>
                      <div class="zshuxianl"></div>    
       </div>
      </div>
      <input name="item" id="j-header-kw" type="text" class="NEw_secarh" autocomplete="off" disableautocomplete="" autocorrect="off" onwebkitspeechchange="this.form.submit();" lang="zh-CN" x-webkit-grammar="builtin:search" x-webkit-speech="true" placeholder="输入关键字">    
      <button type="submit" class="NEw_secarhbtn ui-btn ui-btn-inverse yahei">搜&nbsp;索</button>
    </div>
    <p><a href="">上海摩恩网站科技</a><a href="">展示网站建设</a></p>
  </div>
  </form>
  <!-- 搜索框结束 -->
  <!-- 联系方式 -->
  <!-- 联系方式结束 -->
 <div class="MoBanLogoLi">
    <img src="<?php echo $CFG['url'];?>/skin/default/image/MoBanLogoLi.gif" alt="">
    <p>上海：021-51875581</p>
  </div>
  <!-- 联系方式结束 -->
</div>
</div>
<!-- 导航开始 -->
<div class="M_YNav_big">
    <div class="M_YNav">
        <div class="M_YNav_lf" >
          <ul id="Newjsddm" class="Newjsddm">
              <li class="MMT5"><a href="<?php echo $CFG['url'];?>" class="hover">首 页</a></li>
              <li class=""><a href="#" class="topli">定制网站套餐&nbsp;&nbsp;<i class="XiaHuala"></i></a>
                  <ul class="New_LI_XXul">
                      <li><a href="<?php echo $CFG['url'];?>mall/list.php?catid=4">展示网站建设</a></li>
                      <li><a href="<?php echo $CFG['url'];?>mall/list.php?catid=5">品牌网站建设</a></li>
                      <li><a href="<?php echo $CFG['url'];?>mall/list.php?catid=6">营销网站建设</a></li>
                     
                  </ul>
              </li>
              <li><a href="<?php echo $CFG['url'];?>group/" target="_blank" class="topli">模版建站市场&nbsp;&nbsp;<i class="XiaHuala"></i></a>
                   <ul class="New_LI_XXul">
              <li><a href="<?php echo $CFG['url'];?>group/list-41.html">企业模版网站</a></li>
              <li><a href="<?php echo $CFG['url'];?>group/list-42.html">商城模版网站</a></li>
              <li><a href="<?php echo $CFG['url'];?>group/list-43.html">全Flash网站</a></li>
              <li><a href="<?php echo $CFG['url'];?>group/list-44.html">手机网站模版</a></li>
                  </ul>
              </li> 
              <li><a href="#" class="topli">手机网站建设</a></li>
              <li><a href="<?php echo $MODULE['100']['linkurl'];?>" class="topli">Logo设计</a></li>
              <li><a href="<?php echo $MODULE['6']['linkurl'];?>" class="topli" target="_blank">个性定制&nbsp;&nbsp;<em></em></a></li>
              <li><a href="#" class="topli">网站维护套餐 </a></li>
          </ul>
       
        </div>
        <div class="M_YNav_NeGifRT">
          <a href="http://www.omooo.net"  target="_blank"><img src="<?php echo DT_SKIN;?>image/M_YNav_NeGifRT.gif" alt=""></a>
        </div>
</div>
<!-- 导航开始end -->
</div>
