<?php defined('IN_DESTOON') or exit('Access Denied');?><!doctype html>
<html lang="en">
<head>
<title>  </title>
<meta name="generator" content="editplus" />
<meta name="author" content="" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="/file/script/jquery-1.8.1.min.js"></script>
<style type="text/css">
body{background:white;font-family:'Lucida Grande',​tahoma,​arial,​宋体;}
html{position:relative;}
*{margin:0px;padding:0px;}
img{border:0px;}
li{list-style:none;}
.lunhuan{width:100%;height:auto;position:relative;}
.lunhuan #lunhuanback{width:100%;height:auto;position:absolute;left:0px;top:0px;overflow:hidden;}
.lunhuan #lunhuanback p{width:100%;height:auto;position:absolute;left:0px;top:0px;background-repeat:no-repeat;background-position:50% 0px;}
.lunhuan .lunhuan_main{width:1190px;height:auto;margin:0 auto;position:relative;}
</style>
 
</head>
<body>
 
<script language="javascript"> 
$(function(){
var h='<?php echo $height;?>';
     $(".lunhuan").css("height",h);
     $(".lunhuan #lunhuanback").css("height",h);
     $("#lunhuanback p").css("height",h);
     $(".lunhuan_main").css("height",h);
})
</script> 
<div class="lunhuan">
    <div id="lunhuanback">
        <p style='background-image:url(<?php echo $img;?>);'></p>
    </div>
</div>
</body>
</html>