<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript">var module_id= <?php echo $moduleid;?>,item_id=<?php echo $itemid;?>,content_id='content',img_max_width=<?php echo $MOD['max_width'];?>;</script>
<div class="m">
<div class="left_box">
<div class="pos">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo;</div>
<div class="b10 c_b"></div>
<table width="100%">
<tr>
<td width="10"> </td>
<td>
<table width="100%">
<tr>
<td colspan="3"><h1 class="title_trade" id="title"><?php echo $title;?></h1></td>
</tr>
<tr>
<td width="250" valign="top">
<div id="mid_pos"></div>
<div id="mid_div" onmouseover="SAlbum();" onmouseout="HAlbum();" onclick="PAlbum(Dd('mid_pic'));">
<img src="<?php echo $albums['0'];?>" width="240" height="180" id="mid_pic"/><span id="zoomer"></span>
</div>
<div class="b5"></div>
<div>
<?php if(is_array($thumbs)) { foreach($thumbs as $k => $v) { ?><img src="<?php echo $v;?>" width="60" height="60" onmouseover="if(this.src.indexOf('nopic60.gif')==-1)Album(<?php echo $k;?>, '<?php echo $albums[$k];?>');" class="<?php if($k) { ?>ab_im<?php } else { ?>ab_on<?php } ?>
" id="t_<?php echo $k;?>"/><?php } } ?>
</div>
<div class="b5"></div>
<div onclick="PAlbum(Dd('mid_pic'));" class="c_b t_c c_p"><img src="<?php echo DT_SKIN;?>image/ico_zoom.gif" width="16" height="16" align="absmiddle"/> 点击图片查看原图</div>
</td>
<td width="15"> </td>
<td valign="top">
<div id="big_div" style="display:none;"><img src="" id="big_pic"/></div>
<table width="100%" cellpadding="5" cellspacing="5">
<tr>
<td>单价：</td>
<td class="f_gray">￥<span class="f_price px16"><?php echo $price;?></span></td>
</tr>
<?php if($fee_start_1>0 || $fee_start_2>0 || $fee_start_3>0) { ?>
<tr>
<td>运费：</td>
<td class="f_gray">
<?php if($fee_start_1>0) { ?> <?php echo $express_name_1;?>:<span class="f_price"><?php echo $fee_start_1;?></span>&nbsp;&nbsp;<?php } ?>
<?php if($fee_start_2>0) { ?> <?php echo $express_name_2;?>:<span class="f_price"><?php echo $fee_start_2;?></span>&nbsp;&nbsp;<?php } ?>
<?php if($fee_start_3>0) { ?> <?php echo $express_name_3;?>:<span class="f_price"><?php echo $fee_start_3;?></span>&nbsp;&nbsp;<?php } ?>
</td>
</tr>
<?php } ?>
<tr>
<td>品牌：</td>
<td><?php if($brand) { ?><a href="<?php echo $MOD['linkurl'];?>search.php?fields=4&kw=<?php echo urlencode($brand);?>" target="_blank" class="b" rel="nofollow"><?php echo $brand;?></a><?php } else { ?>未填写<?php } ?>
</td>
</tr>
<tr>
<td>销量：</td>
<td><a href="#order" onclick="Mshow('order');" class="b">累计出售 <span class="f_orange"><?php echo $sales;?></span> 件，<?php echo $orders;?> 个订单</a></td>
</tr>
<tr>
<td>评价：</td>
<td><a href="#comment" onclick="Mshow('comment');" class="b">已有 <span class="f_orange"><?php echo $comments;?></span> 条评价</a></td>
</tr>
<tr>
<td>库存：</td>
<td>还剩 <span class="f_orange"><?php echo $amount;?></span> 件</td>
</tr>
<tr>
<td width="60">人气：</td>
<td>已有 <span class="f_orange"><span id="hits"><?php echo $hits;?></span></span> 人关注</td>
</tr>
<tr>
<td>更新：</td>
<td><?php echo $editdate;?></td>
</tr>
<?php if($RL) { ?>
<tr>
<td><?php echo $relate_name;?>：</td>
<td>
<?php if(is_array($RL)) { foreach($RL as $v) { ?>
<div class="relate_<?php if($itemid==$v['itemid']) { ?>2<?php } else { ?>1<?php } ?>
"><?php if($itemid==$v['itemid']) { ?><em></em><?php } ?>
<a href="<?php echo $v['linkurl'];?>"><img src="<?php echo $v['thumb'];?>" alt="" title="<?php echo $v['relate_title'];?>"/></a></div>
<?php } } ?>
</td>
</tr>
<?php } ?>
<?php if($p1) { ?>
<tr>
<td><?php echo $n1;?>：</td>
<td id="p1">
<ul>
<?php if(is_array($p1)) { foreach($p1 as $i => $v) { ?>
<li class="nv_<?php if($i==0) { ?>2<?php } else { ?>1<?php } ?>
"><?php echo $v;?></li>
<?php } } ?>
</ul>
</td>
</tr>
<?php } ?>
<?php if($p2) { ?>
<tr>
<td><?php echo $n2;?>：</td>
<td id="p2">
<ul>
<?php if(is_array($p2)) { foreach($p2 as $i => $v) { ?>
<li class="nv_<?php if($i==0) { ?>2<?php } else { ?>1<?php } ?>
"><?php echo $v;?></li>
<?php } } ?>
</ul>
</td>
</tr>
<?php } ?>
<?php if($p3) { ?>
<tr>
<td><?php echo $n3;?>：</td>
<td id="p3">
<ul>
<?php if(is_array($p3)) { foreach($p3 as $i => $v) { ?>
<li class="nv_<?php if($i==0) { ?>2<?php } else { ?>1<?php } ?>
"><?php echo $v;?></li>
<?php } } ?>
</ul>
</td>
</tr>
<?php } ?>
<?php if($status == 3 && $amount > 0) { ?>
<tr>
<td colspan="2">
<div id="cart_tip" style="display:none;">
<p><img src="<?php echo DT_SKIN;?>image/close.gif" alt="关闭" width="17" height="12" onclick="Dh('cart_tip');"/>提示信息</p>
<div>已成功添加到购物车！购物车里已有 <span id="cart_num">0</span> 种商品</div>
<center>
<input type="button" value="再逛逛" onclick="Dh('cart_tip');"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="去结算" onclick="Go('<?php echo $MOD['linkurl'];?>cart.php');"/>
</center>
</div>
<img src="<?php echo DT_SKIN;?>image/btn_tobuy.gif" alt="立即购买" class="c_p" onclick="BuyNow();"/>
&nbsp;
<img src="<?php echo DT_SKIN;?>image/btn_addcart.gif" alt="加入购物车" class="c_p" onclick="AddCart();"/>
</td>
</tr>
<?php } else { ?>
<tr>
<td></td>
<td><strong class="f_red">该商品已下架</strong></td>
</tr>
<?php } ?>
</table>
</td>
</tr>
</table>
</td>
<td width="10"> </td>
<td width="300" valign="top">
<div class="contact_head">公司基本资料信息</div>
<div class="contact_body" id="contact"><?php include template('contact', 'chip');?></div>
<?php if(!$username) { ?>
<br/>
&nbsp;<strong class="f_red">注意</strong>:发布人未在本站注册，建议优先选择<a href="<?php echo $MODULE['2']['linkurl'];?>grade.php"><strong><?php echo VIP;?>会员</strong></a>
<?php } ?>
</div>
</td>
<td width="10"> </td>
</tr>
</table>
<div class="b10">&nbsp;</div>
</div>
</div>
<div class="m">
<div class="b10">&nbsp;</div>
<div class="mall_tab">
<ul>
<li class="mall_tab_2" id="t_detail"><a href="#detail" onclick="Mshow('detail');">商品详情</a></li>
<li class="mall_tab_1" id="t_comment"><a href="#comment" onclick="Mshow('comment');">评价详情(<?php echo $comments;?>)</a></li>
<li class="mall_tab_1" id="t_order"><a href="#order" onclick="Mshow('order');">交易记录(<?php echo $orders;?>)</a></li>
</ul>
</div>
<div class="mall_c" style="display:;" id="c_detail">
<?php if($CP) { ?><?php include template('property', 'chip');?><?php } ?>
<div class="content c_b" id="content"><?php echo $content;?></div>
</div>
<div class="mall_c" style="display:none;" id="c_comment">
<center>正在载入评论详细...</center>
</div>
<div class="mall_c" style="display:none;" id="c_order">
<center>正在载入交易记录...</center>
</div>
</div>
<div class="m">
<form method="post" action="<?php echo $MODULE['2']['linkurl'];?>sendmail.php" name="sendmail" id="sendmail" target="_blank">
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/> 
<input type="hidden" name="title" value="<?php echo $title;?>"/>
<input type="hidden" name="linkurl" value="<?php echo $linkurl;?>"/>
</form>
<br/>
<center>
[ <a href="<?php echo $MOD['linkurl'];?>search.php">商品搜索</a> ]&nbsp;
[ <a href="javascript:SendFav();">加入收藏</a> ]&nbsp;
[ <a href="javascript:Dd('sendmail').submit();void(0);">告诉好友</a> ]&nbsp;
[ <a href="javascript:Print();">打印本文</a> ]&nbsp;
[ <a href="javascript:window.close()">关闭窗口</a> ]
</center>
<br/>
</div>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/album.js"></script>
<?php if($content) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/content.js"></script><?php } ?>
<script type="text/javascript">
var mallurl = '<?php echo $MOD['linkurl'];?>';
var mallid = <?php echo $itemid;?>;
var n_c = <?php echo $comments;?>;
var n_o = <?php echo $orders;?>;
var c_c = Dd('c_comment').innerHTML;
var c_o = Dd('c_order').innerHTML;
var s_s = {'1':0,'2':0,'3':0};
var m_l = {
no_comment:'暂无评论',
no_order:'暂无交易',
no_goods:'商品不存在或已下架',
no_self:'不能添加自己的商品',
lastone:''
};
</script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/mall.js"></script>
<script type="text/javascript">
<?php if($p1) { ?>addE(1);<?php } ?>
<?php if($p2) { ?>addE(2);<?php } ?>
<?php if($p3) { ?>addE(3);<?php } ?>
if(window.location.href.indexOf('#') != -1) {
var t = window.location.href.split('#');
try {Mshow(t[1]);} catch(e) {}
}
</script>
<?php include template('footer');?>