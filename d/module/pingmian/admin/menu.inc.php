<?php
defined('IN_DESTOON') or exit('Access Denied');
$menu = array(
	array("添加商品", "?moduleid=$moduleid&action=add"),
	array("商品列表", "?moduleid=$moduleid"),
	array("订单列表", "?moduleid=$moduleid&file=order"),
	array("审核设计师首页", "?moduleid=$moduleid&action=check_sj"),
	array("审核设计师PSD", "?moduleid=$moduleid&action=check_sj2"),
	array("奖金设置", "?moduleid=$moduleid&file=express"),
	array("商品分类", "?file=category&mid=$moduleid"),
	array("更新数据", "?moduleid=$moduleid&file=html"),
	array("模块设置", "?moduleid=$moduleid&file=setting"),
);
?>