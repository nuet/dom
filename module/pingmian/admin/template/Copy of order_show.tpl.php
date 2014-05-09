<?php
defined('IN_DESTOON') or exit('Access Denied');
include tpl('header');
if(!$mallid) show_menu($menus);
?>
<script  src="<?php echo $CFG[url]?>/file/script/mayabox/Maya.Box.js" type="text/javascript"></script>

<script>
function check(){
	
    var x=document.getElementsByName("pwd")[0].value.length;
    
    console.log(x);
    if(x!=6){
        alert("密码长度必须为6位");	
		 return false;
    }else{
   	 return true;
        }
	
	
}

	function down(i){
		new Maya.Box({
			text : "下载文件",
			url : "<?php echo $CFG[url]?>/member/template1.php?id="+i+"",
			width :300,
			height : 100,
			btns : [
	    		{
					text : "    确定    ",
					onClick : function (w){
						w.getIframe().submitForm1(w);
						 _self.close();
					}	
				},
				
				{
					text : "    取消    ",
					onClick : function(w){
	    				w.close();
					}	
				}
			]
		});	
		}
	function down1(i,n){
		new Maya.Box({
			text : "下载文件",
			url : "<?php echo $CFG[url]?>/member/template2.php?id="+i+"&type="+n+"",
			width :300,
			height : 100,
			btns : [
	    		{
					text : "    确定    ",
					onClick : function (w){
						w.getIframe().submitForm1(w);
						 _self.close();
					}	
				},
				
				{
					text : "    取消    ",
					onClick : function(w){
	    				w.close();
					}	
				}
			]
		});	
		}



</script>
<div class="tt">交易详情</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl">订单单号</td>
<td><?php echo $item['itemid'];?> <?php if($DT['trade']) { ?>(<?php echo $DT['trade_nm'];?>订单单号:<a href="https://lab.alipay.com/consume/queryTradeDetail.htm?tradeNo=<?php echo $item['trade_no'];?>" target="_blank" class="t"><?php echo $item['trade_no'];?></a>)<?php } ?></td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $item['linkurl'];?>" target="_blank" class="t"><?php echo $item['title'];?></a></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $item['linkurl'];?>" target="_blank"><img src="<?php if($item['thumb']) { ?><?php echo $item['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>" width="60" height="60"/></a></td>
</tr>
<tr>
<td class="tl">卖家</td>
<td><?php if($DT['im_web']) { ?><?php echo im_web($item['seller']);?>&nbsp;<?php } ?><a href="javascript:_user('<?php echo $item['seller'];?>');" class="t"><?php echo $item['seller'];?></a></td>
</tr>
<tr>
<td class="tl">买家</td>
<td><?php if($DT['im_web']) { ?><?php echo im_web($item['buyer']);?>&nbsp;<?php } ?><a href="javascript:_user('<?php echo $item['buyer'];?>');" class="t"><?php echo $item['buyer'];?></a></td>
</tr>
</table>
<div class="tt">订单状态</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl">下单时间</td>
<td><?php echo $item['addtime'];?></td>
</tr>
<tr>
<td class="tl">更新时间</td>
<td><?php echo $item['updatetime'];?></td>
</tr>
<tr>
<td class="tl">单价</td>
<td>￥<?php echo $item['price'];?></td>
</tr>
<tr>
<td class="tl">数量</td>
<td><?php echo $item['number'];?></td>
</tr>
<?php if($item['fee']>0) { ?>
<tr>
<td class="tl"><?php echo $item['fee_name'];?></td>
<td>￥<?php echo $item['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">总额</td>
<td class="f_red">￥<?php echo $item['money'];?></td>
</tr>
<tr>
<td class="tl">交易状态</td>
<td><?php echo $_status[$item['status']];?></td>
</tr>
</table>

<div class="tt">订单信息</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl">公司信息</td>
<td><?php echo $item['buyer_name'];?></td>
</tr>
<tr>
<td class="tl">地址</td>
<td><?php echo $item['buyer_address'];?></td>
</tr>
<tr>
<td class="tl">姓名</td>
<td><?php echo $item['buyer_name'];?></td>
</tr>
<tr>
<td class="tl">电话</td>
<td><?php echo $item['buyer_phone'];?></td>
</tr>
<tr>
<td class="tl">手机</td>
<td><?php echo $item['buyer_mobile'];?></td>
</tr>
<tr>
<td class="tl">邮编</td>
<td><?php echo $item['buyer_postcode'];?></td>
</tr>
<?php if($item['send_time']>0) { ?>
<tr>
<td class="tl">物流类型</td>
<td><?php echo $item['send_type'];?></td>
</tr>
<tr>
<td class="tl">物流号码</td>
<td><?php echo $item['send_no'];?><?php if($item['send_no']) { ?> &nbsp;<a href="<?php echo DT_PATH;?>api/express.php?e=<?php echo urlencode($item['send_type']);?>&n=<?php echo $item['send_no'];?>" target="_blank" class="t">[物流追踪]</a><?php } ?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">备注说明</td>
<td><?php echo $item['note'];?></td>
</tr>
</table>
<?php if($item_doc['vcheck']==1 || $item_doc['vcheck']==2){?>
<?php if($item_doc['vcheck']==1){?>
<div class="tt">资料审核</div>
<?php }else{ ?>
<div class="tt">网站资料</div>
<?php } ?>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl">网站需求文件</td>
<td>
<ul>
<li style='width:100px;height:110px;float:left;padding: 0 10px;'>
<?php echo $item_doc[upload] ?>
<span style='text-align: center;
height: 20px;
display: block;'>公司logo</span>
</li>
<li style='width:100px;height:110px;float:left;padding: 0 10px;'>
<a href="<?php echo $item_doc['logo'];?>" ><img src="<?php echo $CFG[url]?>member/image/doc.png" width="70" height="70" /></a>
<span style='text-align: center;
height: 20px;
display: block;'>公司介绍联系方式</span>
</li>
<li style='width:100px;height:110px;float:left;padding: 0 10px;'>
<a  href="<?php echo $item_doc['contact'];?>" ><img src="<?php echo $CFG[url]?>member/image/doc.png" width="70" height="70" /></a>
<span style='text-align: center;
height: 20px;
display: block;'>网站栏目结构</span>
</li>
<li style='width:100px;height:110px;float:left;padding: 0 10px;'>
<a href="<?php echo $item_doc['ad'];?>" ><img src="<?php echo $CFG[url]?>member/image/doc.png" width="70" height="70" /></a>
<span style='text-align: center;
height: 20px;
display: block;'>网站主题广告语</span>	
</li>

</ul>
</td>
</tr>
<tr>
<td class="tl">后续补充资料</td>
<td>
<ul>
<?php foreach ($zl as $z){ ?>
<li style='width:100px;height:80px;float:left;padding: 0 10px;'>
<a href="<?php echo $z[zl] ?>"><img src="<?php echo $CFG[url]?>member/image/doc.png" width="70" height="70" /></a>
</li>
<?php }?>
</ul>
</tr>
<tr>
<td class="tl">客户备注</td>
<td><?php echo $item_doc['note'];?></td>
</tr>
<?php if($item_doc['vcheck']==1){?>
<form action="?" method="get">
<input type="hidden" name="moduleid" value="16">
<input type="hidden" name="file" value="order">
<input type="hidden" name="action" value="shenhe">
<input type="hidden" name="forward" value="<?php echo $forward ?>"/>
<input type="hidden" name="buyer" value="<?php echo $item[buyer] ?>"/>
<input type="hidden" name="itemid" value="<?php echo $item[itemid] ?>"/>
<tr>
<td class="tl">审核需求文件：</td>
<td>
<input type="radio" name="shenhe" value="2" checked/>审核通过
<input type="radio" name="shenhe" value="0" />审核失败
</td>
</tr>
<tr>
<td class="tl">理由（通过或者未通过）：</td>
<td>
<textarea rows="3" cols="40" name="msg"></textarea>
</td>
</tr>
<tr>
<td class="tl">确定后不能更改</td>
<td>
<input type="submit" name="submit"value="确定">
</td>
</tr>
</form>
<?php }?>
</table>
<?php }?>
<div class="tt">项目信息</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl">首页照片</td>
<td><a href="<?php echo $CFG[url] ?>extend/view.php?img=<?php echo $item_index['upload'] ?>" target="_blank"><img src="<?php echo $item_index[upload] ?>" width="70" height="70" onerror="this.src='<?php echo $CFG[url]?>skin/default/image/nopic60.gif'"/></a></td>
</tr>


<tr>
<td class="tl">栏目照片</td>
<td>
<?php foreach ($item_lms as $item_lm){ ?>
<a href="<?php echo $CFG[url] ?>extend/view.php?img=<?php echo $item_lm['upload'] ?>" target="_blank"><img src="<?php echo $item_lm[upload] ?>" width="70" height="70" onerror="this.src='<?php echo $CFG[url]?>skin/default/image/nopic60.gif'"/></a>	
<?php }?>
</td>
</tr>
<tr>
<td class="tl">PSD文件</td>
<td>
<ul>
<?php foreach ($item_psds as $item_psd){?>
<li style='width:80px;height:110px;float:left;padding: 0 10px;'>
<a href="#" onclick="down('<?php echo $item_psd['id'];?>')" ><img src="<?php echo $item_psd[upload] ?>" width="70" height="70" onerror="this.src='<?php echo $CFG[url]?>member/image/psd.png'"/></a>
<span style='text-align: center;
width: 90px;
height: 20px;
display: block;'>栏目:<?php echo $item_psd['note'] ?></span>	<span style='text-align: center;
width: 90px;
height: 20px;display: block;
'>密码:<?php echo $item_psd['pwd'] ?></span>
</li>

<?php } ?>
</ul>
</td>
</tr>
</table>

<div class="tt">买家评价<a name="comment1"></a></div>
<table cellpadding="2" cellspacing="1" class="tb">
<?php if($cm['seller_star']) { ?>
<tr>
<td class="tl">买家评分</td>
<td>
<span class="f_r"><a href="#comment" onclick="Ds('c_edit');" class="t">[修改]</a></span>
<img src="<?php echo DT_PATH;?>file/image/star<?php echo $cm['seller_star'];?>.gif" width="36" height="12" alt="" align="absmiddle"/> <?php echo $STARS[$cm['seller_star']];?>
</td>
</tr>
<tr>
<td class="tl">买家评论</td>
<td><?php echo nl2br($cm['seller_comment']);?></td>
</tr>
<tr>
<td class="tl">评论时间</td>
<td class="px11"><?php echo timetodate($cm['seller_ctime'], 6);?></td>
</tr>
<?php if($cm['buyer_reply']) { ?>
<tr>
<td class="tl">卖家解释</td>
<td style="color:#D9251D;"><?php echo nl2br($cm['buyer_reply']);?></td>
</tr>
<tr>
<td class="tl">解释时间</td>
<td class="px11"><?php echo timetodate($cm['buyer_rtime'], 6);?></td>
</tr>
<?php } ?>
<?php } else { ?>
<tr>
<td class="tl">买家评论</td>
<td>暂未评论</td>
</tr>
<?php } ?>
</table>

<div class="tt">卖家评价<a name="comment2"></a></div>
<table cellpadding="2" cellspacing="1" class="tb">
<?php if($cm['buyer_star']) { ?>
<tr>
<td class="tl">卖家评分</td>
<td>
<span class="f_r"><a href="#comment" onclick="Ds('c_edit');" class="t">[修改]</a></span>
<img src="<?php echo DT_PATH;?>file/image/star<?php echo $cm['buyer_star'];?>.gif" width="36" height="12" alt="" align="absmiddle"/> <?php echo $STARS[$cm['buyer_star']];?>
</td>
</tr>
<tr>
<td class="tl">卖家评论</td>
<td><?php echo nl2br($cm['buyer_comment']);?></td>
</tr>
<tr>
<td class="tl">评论时间</td>
<td class="px11"><?php echo timetodate($cm['buyer_ctime'], 6);?></td>
</tr>
<?php if($cm['seller_reply']) { ?>
<tr>
<td class="tl">买家解释</td>
<td style="color:#D9251D;"><?php echo nl2br($cm['seller_reply']);?></td>
</tr>
<tr>
<td class="tl">解释时间</td>
<td class="px11"><?php echo timetodate($cm['seller_rtime'], 6);?></td>
</tr>
<?php } ?>
<?php } else { ?>
<tr>
<td class="tl">卖家评论</td>
<td>暂未评论</td>
</tr>
<?php } ?>
</table>

<div id="c_edit" style="display:none;">
<div class="tt">修改评价<a name="comment"></a></div>
<form method="post" action="?" id="dform" onsubmit="return check();">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="comment"/>
<input type="hidden" name="mallid" value="<?php echo $mallid;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl">买家评分</td>
<td>
<input type="radio" name="post[seller_star]" value="3"<?php echo $cm['seller_star'] == 3 ? ' checked' : '';?>/> 好评 
<input type="radio" name="post[seller_star]" value="2"<?php echo $cm['seller_star'] == 2 ? ' checked' : '';?>/> 中评 
<input type="radio" name="post[seller_star]" value="1"<?php echo $cm['seller_star'] == 1 ? ' checked' : '';?>/> 差评 
<input type="radio" name="post[seller_star]" value="0"<?php echo $cm['seller_star'] == 0 ? ' checked' : '';?>/> 待评
</td>
</tr>
<tr>
<td class="tl">买家评论</td>
<td><textarea name="post[seller_comment]" style="width:300px;height:60px;"><?php echo $cm['seller_comment'];?></textarea></td>
</tr>
<tr>
<td class="tl">评论时间</td>
<td><input type="text" style="width:150px;" name="post[seller_ctime]" value="<?php echo $cm['seller_ctime'] ? timetodate($cm['seller_ctime'], 6) : '';?>"/></td>
</tr>
<tr>
<td class="tl">卖家解释</td>
<td><textarea name="post[buyer_reply]" style="width:300px;height:60px;"><?php echo $cm['buyer_reply'];?></textarea></td>
</tr>
<tr>
<td class="tl">解释时间</td>
<td><input type="text" style="width:150px;" name="post[buyer_rtime]" value="<?php echo $cm['buyer_rtime'] ? timetodate($cm['buyer_rtime'], 6) : '';?>"/></td>
</tr>

<tr>
<td class="tl">卖家评分</td>
<td>
<input type="radio" name="post[buyer_star]" value="3"<?php echo $cm['buyer_star'] == 3 ? ' checked' : '';?>/> 好评 
<input type="radio" name="post[buyer_star]" value="2"<?php echo $cm['buyer_star'] == 2 ? ' checked' : '';?>/> 中评 
<input type="radio" name="post[buyer_star]" value="1"<?php echo $cm['buyer_star'] == 1 ? ' checked' : '';?>/> 差评 
<input type="radio" name="post[buyer_star]" value="0"<?php echo $cm['buyer_star'] == 0 ? ' checked' : '';?>/> 待评
</td>
</tr>
<tr>
<td class="tl">卖家评论</td>
<td><textarea name="post[buyer_comment]" style="width:300px;height:60px;"><?php echo $cm['buyer_comment'];?></textarea></td>
</tr>
<tr>
<td class="tl">评论时间</td>
<td><input type="text" style="width:150px;" name="post[buyer_ctime]" value="<?php echo $cm['buyer_ctime'] ? timetodate($cm['buyer_ctime'], 6) : '';?>"/></td>
</tr>
<tr>
<td class="tl">买家解释</td>
<td><textarea name="post[seller_reply]" style="width:300px;height:60px;"><?php echo $cm['seller_reply'];?></textarea></td>
</tr>
<tr>
<td class="tl">解释时间</td>
<td><input type="text" style="width:150px;" name="post[seller_rtime]" value="<?php echo $cm['seller_rtime'] ? timetodate($cm['seller_rtime'], 6) : '';?>"/></td>
</tr>
</table>
<div class="sbt"><input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/></div>
</form>
</div>
<script type="text/javascript">
function check() {
	return confirm('确定要修改该订单的评论吗？');
}
</script>
<script type="text/javascript">Menuon(1);</script>
<?php include tpl('footer');?>