<?php
defined('IN_DESTOON') or exit('Access Denied');
include tpl('header');
show_menu($menus);
?>
<form method="post" action="?" onSubmit="return checks()">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<table cellpadding="2" cellspacing="1" class="tb">
<div class="tt">基本信息</div>
<tr>
<td class="tl"><span class="f_hid">*</span> 申请类型</td>
<td><?php echo $fptype;?>(<?php echo $types;?>)</td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span> 申请会员</td>
<td><a href="javascript:_user('<?php echo $username;?>');"  style="color:blue"><?php echo $username;?></a></td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span> 申请日期</td>
<td><?php echo $addtime;?></td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span> 申请快递</td>
<td><?php echo $re;?></td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span> 用户备注</td>
<td><?php echo $mynote;?></td>
</tr>
</table>

<div class="tt">发票信息</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_hid">*</span> 发票抬头</td>
<td><?php echo $taitou;?></td>
</tr>
<tr class="on">
<td class="tl"><span class="f_hid">*</span> 发票金额</td>
<td><?php echo $money;?></td>
</tr>
<?php if($r[type]==0){ ?>
<tr>
<td class="tl"><span class="f_hid">*</span>身份证号码</td>
<td><?php echo $idcard;?></td>
</tr>
<?php }else{ ?>
<tr>
<td class="tl"><span class="f_hid">*</span>纳税人识别号</td>
<td><?php echo $cnumber;?></td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span>开户银行名称、帐号</td>
<td><?php echo $cbank;?><?php echo $cbankno;?></td>
</tr>

<tr>
<td class="tl"><span class="f_hid">*</span>一般纳税人资质证明</td>
<td><a href="javascript:_preview('<?php echo $thumb;?>')" target="_blank"><img src="<?php echo $thumb;?>" style="width:100px;height:100px"/></a></td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span>注册场所地址、电话</td>
<td><?php echo $caddress;?><?php echo $cmob;?></td>
</tr>



<?php } ?>
</table>
<div class="tt">发票处理</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_hid">*</span> 处理状态</td>
<td>
<input type="radio" name="status" id="status" value="0"<?php echo $status == 0 ? ' checked' : '';?>/> 待处理
<input type="radio" name="status" id="status" value="1"<?php echo $status == 1 ? ' checked' : '';?>/> 已批准
<input type="radio" name="status" id="status" value="2"<?php echo $status == 2 ? ' checked' : '';?>/> 作废
</td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span> 说明</td>
<td><textarea name="note" id="note" rows="5" cols="50"><?php echo $note;?></textarea></td>
</tr>


</table>
<div class="tt">快递信息</div>
<table cellpadding="2" cellspacing="1" class="tb">

<tr>
<td class="tl"><span class="f_hid">*</span> 收件地址(收件人)</td>
<td><?php echo $address;?>(<?php echo $truename;?>)</td>
</tr>

<tr>
<td class="tl"><span class="f_hid">*</span>邮政编码</td>
<td><?php echo $postcode;?></td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span> 手机号（电话）</td>
<td><?php echo $mobile;?>（<?php echo $telephone;?>）</td>
</tr>

<tr>
<td class="tl"><span class="f_hid">*</span>快递公司</td>
<td>
<select name="kdcompany">
<option value='0'>---请选择——-</option>
<?php foreach ($send_types as $i=>$k){
if($k==$kdcompany){
?>
<option value="<?php echo $k ?>" selected><?php echo $k ?></option>
<?php }else{ ?>
<option value="<?php echo $k ?>"><?php echo $k ?></option>
<?php } ?>
<?php } ?>
</select></td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span>快递单号</td>
<td><input type="text" name="tradeid" value="<?php echo $tradeid ?>"/></td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span>快递状态</td>
<td>
<select name="express" id="express">
<?php foreach ($estatus as $i=>$v){
if($i==$express){
?>
<option value="<?php echo $i ?>" selected><?php echo $v ?></option>
<?php }else{ ?>
<option value="<?php echo $i ?>"><?php echo $v ?></option>
<?php } ?>
<?php } ?>
</select></td>
</tr>
</table>
<script>
function checks(){
	 var express=$("#express").val();
	 var status= $('input:radio[name="status"]:checked').val();
	 
	if(status!=='1'){
	
		if(express!='0'){
		 alert('必须已批准的情况下更改快递状态');
		 return false;
		}else{
			
			}
		}
}

</script>




<div class="sbt"><input type="submit" name="submit" value=" 确 定 " class="btn">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" 重 置 " class="btn"/></div>
</form>
<script type="text/javascript">Menuon(0);</script>
<?php include tpl('footer');?>