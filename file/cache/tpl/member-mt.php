<?php defined('IN_DESTOON') or exit('Access Denied');?><link href="<?php echo $CFG['url'];?>/file/script/Maya.MessageBox/Maya.MessageBox.css" rel="stylesheet" />
<SCRIPT LANGUAGE="JavaScript" src="<?php echo $CFG['url'];?>/file/script/jquery-1.8.3.js"></SCRIPT>
<script  src="<?php echo $CFG['url'];?>/file/script/Maya.MessageBox/Maya.MessageBox.js" type="text/javascript"></script>
<script language="javascript">
function download_file(url)
{
if(typeof(download_file.iframe)== "undefined")
{
var iframe = document.createElement("iframe");
download_file.iframe = iframe;
document.body.appendChild(download_file.iframe); 
}
// alert(download_file.iframe);
download_file.iframe.src = url;
download_file.iframe.style.display = "none";
}
function submitForm1(){
if($("#password").val()==""){
Maya.MessageBox("请输入 <strong>密码</strong> ");
return false;
}
var action='submit';
var password=$("#password").val();
var id=$("#id").val();
$.post(
"<?php echo $CFG['url'];?>/member/template1.php?password="+password+"&action="+action+"&id="+id+"",
function(data){
           if(data=="2"){
           Maya.MessageBox("文件下载密码不正确");
           
}else{
download_file(data.url);
Maya.MessageBox("密码匹配正确，正在下载中...","success",function(){              
parent.location.reload();
w.close();

freshIframe();

});

}

},
"json"
);
return false;
}
</script>
<style>
.login{
width:100%;height:auto;
}
.login1{
margin:0 auto;width:200px;height:50px;line-height:50px;margin-left:40px;
}
.img{width:300px;border:0;}
.login1 a{
padding-left:100px;
}
img{border:0}
</style>
<div class="login">
 <div class="login1">
<form name="form" id="form" method="post" onSubmit="return submitForm1(this)">
<input type="hidden" name='id' id="id" value="<?php echo $_GET['id'];?>" />
         <p> 密码: <input type="text" id="password" name="password" style="width:120px;height:24px;"></p>
                    <p style="float:right;margin-top:0px;color:red;font-size:12px;line-height: 0;
height: 10px;">请输入6位数下载密码(再按回车)</p>
            <input type="hidden" name="step" value="2">
            <input type="hidden" name="fromurl" value="$FROMURL">
         </form>
    
             
 </div>
     </div>
