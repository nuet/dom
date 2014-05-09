<?php
defined('IN_DESTOON') or exit('Access Denied');
include tpl('header');
show_menu($menus);
?>
<form method="post" action="?" >
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="id" value="<?php echo $itemid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<table cellpadding="2" cellspacing="1" class="tb">
<div class="tt">基本信息</div>
<tr>
<td class="tl"><span class="f_hid">*</span> 网站负责人信息</td>
<td>姓名：<?php echo $Fzr_xm;?></td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span> 网站负责人基本信息</td>
<td>办公室电话：<?php echo $Fzr_dhhm_code;?>-<?php echo $Fzr_dhhm;?>&nbsp;&nbsp;&nbsp;手机号码：<?php echo $Fzr_sjhm;?>&nbsp;&nbsp;&nbsp;电子邮件<?php echo $Fzr_dzyj;?>&nbsp;&nbsp;&nbsp;证件号码（类型）：<?php echo $Fzr_zjhm ?>(<?php echo $Fzr_zjlx ?>)</td>
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

<div class="tt">主体信息</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_hid">*</span> 单位性质</td>
<td><?php echo $beian[Dw];?></td>
<td class="tl"><span class="f_hid">*</span>主办单位或主办人名称</td>
<td><?php echo $beian[Dwmc];?></td>
<td class="tl"><span class="f_hid">*</span> 证件号码(类型)</td>
<td><?php echo $beian[Zjhm];?>(<?php echo $beian[Zjlx];?>)</td>
</tr>
<tr class="on">

<td class="tl"><span class="f_hid">*</span>证件住所</td>
<td><?php echo $beian[Zjzs];?></td>
<td class="tl"><span class="f_hid">*</span>主办单位通信地址</td>
<td colspan=3><?php echo $beian[Xxdz];?></td>
</tr>
<?php if($beian[Dwxz]==1){?>
<td class="tl"><span class="f_hid">*</span>公司营业执照</td>
<td><?php echo $beian[Cgszz];?></td>
<td class="tl"><span class="f_hid">*</span>组织机构代码</td>
<td colspan=3><?php echo $beian[Czzjg];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl"><span class="f_hid">*</span>主办单位负责人姓名</td>
<td><?php echo $beian[ztFzr_xm];?></td>
<td class="tl"><span class="f_hid">*</span>主办单位负责人办公电话</td>
<td><?php echo $beian[ztFzr_dhhm_code];?>-<?php echo $beian[ztFzr_dhhm];?></td>
<td class="tl"><span class="f_hid">*</span>主办单位负责人手机号码</td>
<td><?php echo $beian[ztFzr_sjhm];?></td>
</tr>

<tr class="on">
<td class="tl"><span class="f_hid">*</span>主办单位负责人电子邮件</td>
<td><?php echo $beian[ztFzr_dzyj];?></td>
<td class="tl"><span class="f_hid">*</span>主办单位负责人证件号码（类型）</td>
<td colspan=3><?php echo $beian[ztFzr_zjhm];?>（<?php echo $beian[ztFzr_zjlx];?>）</td>
</tr>

</table>
<?php if ($beian[zhutino]!=""){?>
<div class="tt">接入信息</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_hid">*</span>备案号</td>
<td  style="color:red"><?php echo $beian[zhutino];?></td>
<td class="tl"><span class="f_hid">*</span>备案密码</td>
<td style="color:red"><?php echo $beian[zhutipassword];?></td>
</tr>

</table>
<?php } ?>
<div class="tt">拍照资料</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl">全部照片</td>
<td>
<ul>
<?php if($beian[Dwxz]==1){?>
<li style='width:160px;height:120px;float:left;padding: 0 10px;border:1px solid #ccc'>
<a href="javascript:_preview('javascript:_preview('<?php echo $beian[pic_gsyy] ?>');');" target="_blank"><img src="<?php echo $beian[pic_gsyy] ?>"  width="160" height="90" /></a>
<span style='text-align: center;
height: 30px;
display: block;'>公司营业执照</span>
</li>
<li style='width:160px;height:120px;float:left;padding: 0 10px;border:1px solid #ccc'>
<a href="javascript:_preview('<?php echo $beian[pic_zzjg] ?>');" target="_blank"><img src="<?php echo $beian[pic_gsyy] ?>"  width="160" height="90" /></a>
<span style='text-align: center;
height: 30px;
display: block;'>组织机构代码</span>
</li>
<li style='width:160px;height:120px;float:left;padding: 0 10px;border:1px solid #ccc'>
<a href="javascript:_preview('<?php echo $beian[pic_fr] ?>');" target="_blank"><img src="<?php echo $beian[pic_fr] ?>"  width="160" height="90" /></a>
<span style='text-align: center;
height: 30px;
display: block;'>法人身份证扫描件</span>
</li>
<?php } ?>
<li style='width:160px;height:120px;float:left;padding: 0 10px;border:1px solid #ccc'>
<a href="javascript:_preview('<?php echo $pic_idcard ?>');" target="_blank"><img src="<?php echo $pic_idcard ?>"  width="160" height="90" /></a>
<span style='text-align: center;
height: 30px;
display: block;'>网站负责人身份证扫描件</span>
</li>
<li style='width:160px;height:120px;float:left;padding: 0 10px;border:1px solid #ccc'>
<a href="javascript:_preview('<?php echo $pic_hyd ?>');" target="_blank"><img src="<?php echo $pic_hyd ?>"  width="160" height="90" /></a>
<span style='text-align: center;
height: 30px;
display: block;'>核验单</span>
</li>
<li style='width:160px;height:120px;float:left;padding: 0 10px;border:1px solid #ccc'>
<a href="javascript:_preview('<?php echo $pic_xinxi ?>');" target="_blank"><img src="<?php echo $pic_xinxi ?>"  width="160" height="90" /></a>
<span style='text-align: center;
height: 30px;
display: block;'>信息安全书</span>
</li>
<li style='width:160px;height:120px;float:left;padding: 0 10px;border:1px solid #ccc'>
<a href="javascript:_preview('<?php echo $pic_mb ?>');" target="_blank"><img src="<?php echo $pic_mb ?>"  width="160" height="90" /></a>
<span style='text-align: center;
height: 30px;
display: block;'>幕布背景</span>
</li>
</ul>
</td>
</tr>
</table>
<div class="tt">备案处理</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_hid">*</span> 处理状态</td>
<td>
<input type="radio" name="status" id="status" value="0"<?php echo $status == 0 ? ' checked' : '';?>/> 待处理
<input type="radio" name="status" id="status" value="1"<?php echo $status == 1 ? ' checked' : '';?>/> 等待快递
<input type="radio" name="status" id="status" value="2"<?php echo $status == 2 ? ' checked' : '';?>/> 等待审核
<input type="radio" name="status" id="status" value="3"<?php echo $status == 1 ? ' checked' : '';?>/> 已批准
<input type="radio" name="status" id="status" value="4"<?php echo $status == 2 ? ' checked' : '';?>/> 退回
</td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span> 说明</td>
<td><textarea name="note" id="note" rows="5" cols="50"><?php echo $note;?></textarea></td>
</tr>


</table>
<?php if($restyle==2){ ?>
<div class="tt">快递信息</div>
<table cellpadding="2" cellspacing="1" class="tb">

<tr>
<td class="tl"><span class="f_hid">*</span> 收件地址(收件人)</td>
<td><?php echo $mb_address;?>(<?php echo $mb_name;?>)</td>
</tr>

<tr>
<td class="tl"><span class="f_hid">*</span>邮政编码</td>
<td><?php echo $postcode;?></td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span> 手机号</td>
<td><?php echo $mb_mob;?></td>
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
<?php } ?>
<div class="sbt"><input type="submit" name="submit" value=" 确 定 " class="btn">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" 重 置 " class="btn"/></div>
</form>
<script type="text/javascript">Menuon(0);</script>
<?php include tpl('footer');?>