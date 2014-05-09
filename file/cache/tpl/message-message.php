<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo DT_CHARSET;?>" />
<title>提示信息<?php echo $DT['seo_delimiter'];?><?php echo $DT['sitename'];?></title>
<meta name="robots" content="noindex,nofollow" />
<style type="text/css">
* {
font-size: 12px;
color: #2B61BA;
}
body {
font-family: Verdana, Arial, Helvetica, sans-serif;
background: #F0F2F7;
margin: 0;
}
input {
color: #333333;
}
a:link,a:visited,a:active {
color: #ABBBD6;
text-decoration: none;
}
.msg {
width: 393px; height : 141px;
background: #FFFFFF url('<?php echo DT_SKIN;?>image/messagebg.gif') repeat-x;
margin: auto;
height: 141px;
border:4px solid #F9B862
}
.head {
letter-spacing: 2px;
line-height: 29px;
height: 26px;
overflow: hidden;
font-weight: bold;
}
.content {
margin: 0 auto;
line-height: 200%;
word-break: break-all;
background: #FFF;
width: 375px; height : 105px;
border-top: none;
word-break: break-all;
background: #FFF; width : 375px; height : 105px;
border-top: none;
background: #FFF; width : 375px;
height: 105px;
border-top: none;
}
.ml {
color: #FFFFFF;
padding-left: 10px;
}
.mr {
float: right;
width: 4px;
font-size: 1px;
font-size: 1px;
}
.p_content {
width: 250px;
margin: 0 40px;
padding-top: 20px;
height: 30px;
line-height: 10px;
}
.p_content a{
color:#828181;
}
.p_content span{
color:#FF9000;
line-height: 20px;
   font-weight:bold;
}
</style>
<script type="text/javascript">
try {
document.execCommand("BackgroundImageCache", false, true);
} catch (e) {
}
</script>
</head>
<?php if($dtime == -1) { ?>
<body style="background: #FFFFFF; margin: 10px; color: #444444;">
<img src="<?php echo DT_SKIN;?>image/load.gif" align="absmiddle" /> Loading...
<?php echo $dmessage;?>
<meta http-equiv="refresh" content="0;URL=<?php echo $dforward;?>">
<?php } else { ?>
<body onkeydown="if(event.keyCode==13) window.history.back();">
<table cellpadding="0" cellspacing="0" width="400" align="center">
<tr>
<td height="150"></td>
</tr>
<tr>
<td>
<div class="msg">
<div class="head">
<div class="mr">&nbsp;</div>
<div class="ml">提示信息</div>
</div>
<div class="content">
<div class="p_content">
<p><span><?php echo $dmessage;?></span></p> <?php if($dforward == 'goback') { ?> <a
href="javascript:location.href=document.referrer;">[ 点这里返回上一页 ]</a>
<?php } else { ?> <p><a href="<?php echo $dforward;?>">如果您的浏览器没有自动跳转，请点击这里</a></p>
<meta http-equiv="refresh" content="<?php echo $dtime;?>;URL=<?php echo $dforward;?>">
<?php } ?>
</div>
</div>
</div>
</td>
</tr>
</table>
<?php } ?>
</body>
</html>