# Destoon V5.0 R20131220 http://www.destoon.com
# 2014-03-18 15:55:03
# --------------------------------------------------------


DROP TABLE IF EXISTS `d_404`;
CREATE TABLE `d_404` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL DEFAULT '',
  `robot` varchar(20) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='404日志';


DROP TABLE IF EXISTS `d_ad`;
CREATE TABLE `d_ad` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `typeid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `amount` float NOT NULL DEFAULT '0',
  `currency` varchar(20) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `fromtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `stat` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `note` text NOT NULL,
  `code` text NOT NULL,
  `text_name` varchar(100) NOT NULL DEFAULT '',
  `text_url` varchar(255) NOT NULL DEFAULT '',
  `text_title` varchar(100) NOT NULL DEFAULT '',
  `text_style` varchar(50) NOT NULL DEFAULT '',
  `image_src` varchar(255) NOT NULL DEFAULT '',
  `image_url` varchar(255) NOT NULL DEFAULT '',
  `image_alt` varchar(100) NOT NULL DEFAULT '',
  `flash_src` varchar(255) NOT NULL DEFAULT '',
  `flash_url` varchar(255) NOT NULL DEFAULT '',
  `flash_loop` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `key_moduleid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `key_catid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `key_word` varchar(100) NOT NULL DEFAULT '',
  `key_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='广告';

INSERT INTO `d_ad` VALUES('2','网站首页图片轮播1','14','5','0','0','','http://www.destoon.com/','','0','admin','1393836401','admin','1393836401','1262275200','1577894399','0','','','','','','','file/image/player_1.jpg','http://www.destoon.com/','','','','1','0','0','','0','0','3');
INSERT INTO `d_ad` VALUES('3','首页旗帜A1','20','3','0','0','','','','0','admin','1393836401','admin','1393836401','1262275200','1577894399','0','','','','','','','file/image/150x60.gif','','','','','1','0','0','','0','0','3');
INSERT INTO `d_ad` VALUES('4','首页旗帜A2','21','3','0','0','','http://idc.destoon.com/','','0','admin','1393836401','admin','1393836401','1262275200','1577894399','0','','','','','','','file/image/150x60.gif','','','','','1','0','0','','0','0','3');
INSERT INTO `d_ad` VALUES('5','首页旗帜A3','22','3','0','0','','http://www.destoon.com/','','0','admin','1393836401','admin','1393836401','1262275200','1577894399','0','','','','','','','file/image/150x60.gif','','','','','1','0','0','','0','0','3');
INSERT INTO `d_ad` VALUES('6','首页旗帜A4','23','3','0','0','','http://idc.destoon.com/','','0','admin','1393836401','admin','1393836401','1262275200','1577894399','0','','','','','','','file/image/150x60.gif','','','','','1','0','0','','0','0','3');
INSERT INTO `d_ad` VALUES('7','首页旗帜A5','24','3','0','0','','http://www.destoon.com/','','0','admin','1393836401','admin','1393836401','1262275200','1577894399','0','','','','','','','file/image/150x60.gif','','','','','1','0','0','','0','0','3');
INSERT INTO `d_ad` VALUES('8','首页旗帜A6','25','3','0','0','','http://idc.destoon.com/','','0','admin','1393836401','admin','1393836401','1262275200','1577894399','0','','','','','','','file/image/150x60.gif','','','','','1','0','0','','0','0','3');
INSERT INTO `d_ad` VALUES('9','网站首页图片轮播2','14','5','0','0','','http://www.destoon.com/','','104','admin','1393836401','admin','1393836401','1262275200','1577894399','0','','','','','','','file/image/player_2.jpg','http://www.destoon.com/','','','','1','0','0','','0','0','3');

DROP TABLE IF EXISTS `d_address`;
CREATE TABLE `d_address` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `truename` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `postcode` varchar(10) NOT NULL DEFAULT '',
  `telephone` varchar(30) NOT NULL DEFAULT '',
  `mobile` varchar(30) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL DEFAULT '',
  `hy_sort` varchar(255) NOT NULL,
  `pay_style` int(10) NOT NULL DEFAULT '0' COMMENT '付款方式',
  `name` varchar(255) NOT NULL COMMENT '网站或公司名称',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='收货地址';

INSERT INTO `d_address` VALUES('2','assa','北京啊飒飒萨阿萨斯','1121221','assa','11111111111','admin','1393983475','admin','1393983475','0','ssss','3','0','');
INSERT INTO `d_address` VALUES('3','12121','河北唐山市','212121','','12111111','admin','1393985342','admin','1393985342','0','','4','0','');
INSERT INTO `d_address` VALUES('4','2332','重庆','2232','','12','admin','1393985825','admin','1393985825','0','','6','0','');
INSERT INTO `d_address` VALUES('5','12121','北京','222222','','22222222221','admin','1393987439','admin','1393990712','0','','7','0','');
INSERT INTO `d_address` VALUES('6','111','北京','121121','11','11111111111','admin','1393987933','admin','1393990753','0','','5','0','');
INSERT INTO `d_address` VALUES('12','1221','天津qwwq','212112','211','12122121221','admin','1393992715','admin','1393993275','0','','3','1','dqdw');
INSERT INTO `d_address` VALUES('10','2323323','重庆233233333','233232','','2322332322332','admin','1393991607','admin','1393993271','0','','0','0','2233333333');

DROP TABLE IF EXISTS `d_admin`;
CREATE TABLE `d_admin` (
  `adminid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `title` varchar(30) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `moduleid` smallint(6) NOT NULL DEFAULT '0',
  `file` varchar(20) NOT NULL DEFAULT '',
  `action` varchar(255) NOT NULL DEFAULT '',
  `catid` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COMMENT='管理员';

INSERT INTO `d_admin` VALUES('1','1','0','生成首页','?action=html','','0','','','');
INSERT INTO `d_admin` VALUES('2','1','0','更新缓存','?action=cache','','0','','','');
INSERT INTO `d_admin` VALUES('3','1','0','网站设置','?file=setting','','0','','','');
INSERT INTO `d_admin` VALUES('4','1','0','模块管理','?file=module','','0','','','');
INSERT INTO `d_admin` VALUES('5','1','0','数据维护','?file=database','','0','','','');
INSERT INTO `d_admin` VALUES('6','1','0','模板管理','?file=template','','0','','','');
INSERT INTO `d_admin` VALUES('7','1','0','会员管理','?moduleid=2','','0','','','');
INSERT INTO `d_admin` VALUES('8','1','0','单页管理','?moduleid=3&file=webpage','','0','','','');
INSERT INTO `d_admin` VALUES('9','1','0','排名推广','?moduleid=3&file=spread','','0','','','');
INSERT INTO `d_admin` VALUES('10','1','0','广告管理','?moduleid=3&file=ad','','0','','','');
INSERT INTO `d_admin` VALUES('11','11','0','','','','16','order','','');
INSERT INTO `d_admin` VALUES('21','11','0','','','','2','ask','edit|delete','');
INSERT INTO `d_admin` VALUES('14','11','0','','','','16','index','check_sj','');
INSERT INTO `d_admin` VALUES('15','11','0','审核设计师作品','?moduleid=16&action=check_sj','','0','','','');
INSERT INTO `d_admin` VALUES('18','11','0','订单列表','?moduleid=16&file=order','','0','','','');
INSERT INTO `d_admin` VALUES('60','18','0','订单管理','?moduleid=16&file=order','','0','','','');
INSERT INTO `d_admin` VALUES('67','18','0','','','','1','count','','');
INSERT INTO `d_admin` VALUES('26','11','0','','','','2','validate','','');
INSERT INTO `d_admin` VALUES('27','11','0','会员认证','?moduleid=2&file=validate','','0','','','');
INSERT INTO `d_admin` VALUES('30','11','0','','','','4','index','','');
INSERT INTO `d_admin` VALUES('31','11','0','设计师列表','?moduleid=4','','0','','','');
INSERT INTO `d_admin` VALUES('68','18','0','信息统计','?file=count','','0','','','');
INSERT INTO `d_admin` VALUES('66','18','0','','','','3','link','add|edit|delete|check|order','');
INSERT INTO `d_admin` VALUES('65','18','0','','','','2','charge','|check|recycle|delete|export','');
INSERT INTO `d_admin` VALUES('61','18','0','','','','2','chat','','');
INSERT INTO `d_admin` VALUES('62','18','0','','','','2','contact','','');
INSERT INTO `d_admin` VALUES('63','18','0','','','','3','spread','|add|edit|delete|check|price|html','');
INSERT INTO `d_admin` VALUES('64','18','0','','','','3','ad','|add_place|edit_place|delete_place|view|add|edit|delete|list|html','');
INSERT INTO `d_admin` VALUES('43','11','0','','','','2','index','add|edit|check|show','');
INSERT INTO `d_admin` VALUES('44','11','0','','','','4','vip','add|edit|expire|show','');
INSERT INTO `d_admin` VALUES('45','11','0','','','','21','index','add|edit|check','');
INSERT INTO `d_admin` VALUES('46','11','0','资讯管理','?moduleid=21','','0','','','');
INSERT INTO `d_admin` VALUES('47','11','0','','','','3','announce','','');
INSERT INTO `d_admin` VALUES('48','11','0','公告管理','?moduleid=3&file=announce','','0','','','');
INSERT INTO `d_admin` VALUES('69','18','0','','','','4','index','','');
INSERT INTO `d_admin` VALUES('70','18','0','设计师列表','?moduleid=4','','0','','','');
INSERT INTO `d_admin` VALUES('71','18','0','','','','4','vip','expire|show|update','');
INSERT INTO `d_admin` VALUES('72','18','0','','','','2','validate','check|delete','');
INSERT INTO `d_admin` VALUES('73','18','0','','','','2','ask','','');
INSERT INTO `d_admin` VALUES('74','18','0','客服中心','?moduleid=2&file=ask','','0','','','');
INSERT INTO `d_admin` VALUES('75','18','0','','','','16','index','check_sj','');
INSERT INTO `d_admin` VALUES('76','18','0','审核首页','?moduleid=16&action=check_sj','','0','','','');
INSERT INTO `d_admin` VALUES('77','18','0','审核栏目','?moduleid=16&action=check_sj1','','0','','','');
INSERT INTO `d_admin` VALUES('78','18','0','审核PSD文件','?moduleid=16&action=check_sj2','','0','','','');

DROP TABLE IF EXISTS `d_admin_log`;
CREATE TABLE `d_admin_log` (
  `logid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `qstring` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `logtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='管理日志';

INSERT INTO `d_admin_log` VALUES('1','file=count','bingoo','127.0.0.1','1394705781');
INSERT INTO `d_admin_log` VALUES('2','moduleid=16&action=order','bingoo','127.0.0.1','1394758123');
INSERT INTO `d_admin_log` VALUES('3','moduleid=2&file=group','bing123','127.0.0.1','1394758639');
INSERT INTO `d_admin_log` VALUES('4','file=admin','bing123','127.0.0.1','1394761325');
INSERT INTO `d_admin_log` VALUES('5','moduleid=2&file=validate','bing123','127.0.0.1','1394761326');
INSERT INTO `d_admin_log` VALUES('6','file=admin','bing123','127.0.0.1','1394761328');
INSERT INTO `d_admin_log` VALUES('7','moduleid=2&file=validate','bing123','127.0.0.1','1394761328');
INSERT INTO `d_admin_log` VALUES('8','file=admin','bing123','127.0.0.1','1394761332');
INSERT INTO `d_admin_log` VALUES('9','moduleid=2&file=validate','bing123','127.0.0.1','1394761332');
INSERT INTO `d_admin_log` VALUES('10','moduleid=2&action=add','bing123','127.0.0.1','1394761798');
INSERT INTO `d_admin_log` VALUES('11','moduleid=4&file=vip','bingoo','127.0.0.1','1394762049');
INSERT INTO `d_admin_log` VALUES('12','moduleid=2','bingoo','127.0.0.1','1394762054');
INSERT INTO `d_admin_log` VALUES('13','moduleid=21&action=reject','bingoo','127.0.0.1','1394762168');
INSERT INTO `d_admin_log` VALUES('14','moduleid=21&action=recycle','bingoo','127.0.0.1','1394762171');
INSERT INTO `d_admin_log` VALUES('15','moduleid=21&action=move','bingoo','127.0.0.1','1394762173');

DROP TABLE IF EXISTS `d_admin_online`;
CREATE TABLE `d_admin_online` (
  `sid` varchar(32) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `moduleid` int(10) unsigned NOT NULL DEFAULT '0',
  `qstring` varchar(255) NOT NULL DEFAULT '',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `sid` (`sid`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8 COMMENT='在线管理员';

INSERT INTO `d_admin_online` VALUES('a4379a27a52385d3b77fa62711fa9cc6','admin','127.0.0.1','16','moduleid=16&file=order&action=show&mallid=&itemid=88&widget=1','1395128501');
INSERT INTO `d_admin_online` VALUES('e27b236ed68effdbf4f5fbd036e52f9e','admin','127.0.0.1','1','','1395129303');

DROP TABLE IF EXISTS `d_ad_place`;
CREATE TABLE `d_ad_place` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `moduleid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `typeid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `open` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `code` text NOT NULL,
  `width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `price` float unsigned NOT NULL DEFAULT '0',
  `ads` smallint(4) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `template` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COMMENT='广告位';

INSERT INTO `d_ad_place` VALUES('1','5','6','1','供应排名','','','','','0','0','0','0','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('2','6','6','1','求购排名','','','','','0','0','0','0','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('3','16','6','1','商城排名','','','','','0','0','0','0','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('4','4','6','1','公司排名','','','','','0','0','0','0','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('14','0','5','1','首页图片轮播','','','','','400','160','10','2','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('15','5','7','1','供应赞助商链接','','','','','0','0','10','0','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('17','4','7','1','公司赞助商链接','','','','','0','0','0','0','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('18','0','7','1','求购赞助商链接','','','','','0','0','0','0','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('19','8','7','1','展会赞助商链接','','','','','0','0','0','0','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('20','0','3','1','首页旗帜A1','','','','','150','60','0','1','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('21','0','3','1','首页旗帜A2','','','','','150','60','0','1','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('22','0','3','1','首页旗帜A3','','','','','150','60','0','1','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('23','0','3','1','首页旗帜A4','','','','','150','60','0','1','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('24','0','3','1','首页旗帜A5','','','','','150','60','0','1','0','1393836401','admin','1393836401','');
INSERT INTO `d_ad_place` VALUES('25','0','3','1','首页旗帜A6','','','','','150','60','0','1','0','1393836401','admin','1393836401','');

DROP TABLE IF EXISTS `d_alert`;
CREATE TABLE `d_alert` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `word` varchar(100) NOT NULL DEFAULT '',
  `rate` smallint(4) unsigned NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '0',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `sendtime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='贸易提醒';


DROP TABLE IF EXISTS `d_announce`;
CREATE TABLE `d_announce` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `fromtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `template` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='公告';

INSERT INTO `d_announce` VALUES('1','1','0','0','asa','','&nbsp;saas','2','1393911626','0','0','admin','1393911632','0','http://www.d.com/announce/1.html','0','');

DROP TABLE IF EXISTS `d_area`;
CREATE TABLE `d_area` (
  `areaid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `areaname` varchar(50) NOT NULL DEFAULT '',
  `parentid` int(10) unsigned NOT NULL DEFAULT '0',
  `arrparentid` varchar(255) NOT NULL DEFAULT '',
  `child` tinyint(1) NOT NULL DEFAULT '0',
  `arrchildid` text NOT NULL,
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`areaid`)
) ENGINE=MyISAM AUTO_INCREMENT=392 DEFAULT CHARSET=utf8 COMMENT='地区';

INSERT INTO `d_area` VALUES('1','北京','0','0','0','1','1');
INSERT INTO `d_area` VALUES('2','上海','0','0','0','2','2');
INSERT INTO `d_area` VALUES('3','天津','0','0','0','3','3');
INSERT INTO `d_area` VALUES('4','重庆','0','0','0','4','4');
INSERT INTO `d_area` VALUES('5','河北','0','0','0','5','5');
INSERT INTO `d_area` VALUES('6','山西','0','0','0','6','6');
INSERT INTO `d_area` VALUES('7','内蒙古','0','0','0','7','7');
INSERT INTO `d_area` VALUES('8','辽宁','0','0','0','8','8');
INSERT INTO `d_area` VALUES('9','吉林','0','0','0','9','9');
INSERT INTO `d_area` VALUES('10','黑龙江','0','0','0','10','10');
INSERT INTO `d_area` VALUES('11','江苏','0','0','0','11','11');
INSERT INTO `d_area` VALUES('12','浙江','0','0','0','12','12');
INSERT INTO `d_area` VALUES('13','安徽','0','0','0','13','13');
INSERT INTO `d_area` VALUES('14','福建','0','0','0','14','14');
INSERT INTO `d_area` VALUES('15','江西','0','0','0','15','15');
INSERT INTO `d_area` VALUES('16','山东','0','0','0','16','16');
INSERT INTO `d_area` VALUES('17','河南','0','0','0','17','17');
INSERT INTO `d_area` VALUES('18','湖北','0','0','0','18','18');
INSERT INTO `d_area` VALUES('19','湖南','0','0','0','19','19');
INSERT INTO `d_area` VALUES('20','广东','0','0','0','20','20');
INSERT INTO `d_area` VALUES('21','广西','0','0','0','21','21');
INSERT INTO `d_area` VALUES('22','海南','0','0','0','22','22');
INSERT INTO `d_area` VALUES('23','四川','0','0','0','23','23');
INSERT INTO `d_area` VALUES('24','贵州','0','0','0','24','24');
INSERT INTO `d_area` VALUES('25','云南','0','0','0','25','25');
INSERT INTO `d_area` VALUES('26','西藏','0','0','0','26','26');
INSERT INTO `d_area` VALUES('27','陕西','0','0','0','27','27');
INSERT INTO `d_area` VALUES('28','甘肃','0','0','0','28','28');
INSERT INTO `d_area` VALUES('29','青海','0','0','0','29','29');
INSERT INTO `d_area` VALUES('30','宁夏','0','0','0','30','30');
INSERT INTO `d_area` VALUES('31','新疆','0','0','0','31','31');
INSERT INTO `d_area` VALUES('32','台湾','0','0','0','32','32');
INSERT INTO `d_area` VALUES('33','香港','0','0','0','33','33');
INSERT INTO `d_area` VALUES('34','澳门','0','0','0','34','34');

DROP TABLE IF EXISTS `d_article_21`;
CREATE TABLE `d_article_21` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `subtitle` text NOT NULL,
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `tag` varchar(100) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `author` varchar(50) NOT NULL DEFAULT '',
  `copyfrom` varchar(30) NOT NULL DEFAULT '',
  `fromurl` varchar(255) NOT NULL DEFAULT '',
  `voteid` varchar(100) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `addtime` (`addtime`),
  KEY `catid` (`catid`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='资讯';


DROP TABLE IF EXISTS `d_article_data_21`;
CREATE TABLE `d_article_data_21` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` longtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='资讯内容';


DROP TABLE IF EXISTS `d_ask`;
CREATE TABLE `d_ask` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `admin` varchar(30) NOT NULL DEFAULT '',
  `admintime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `reply` text NOT NULL,
  `star` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='客服中心';

INSERT INTO `d_ask` VALUES('1','10','sasaaaaaaaa','asssssssssssssssssssssssssssssd','admin','1395107618','','0','0','','0');

DROP TABLE IF EXISTS `d_banip`;
CREATE TABLE `d_banip` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL DEFAULT '',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='IP禁止';


DROP TABLE IF EXISTS `d_banword`;
CREATE TABLE `d_banword` (
  `bid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `replacefrom` varchar(255) NOT NULL DEFAULT '',
  `replaceto` varchar(255) NOT NULL DEFAULT '',
  `deny` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='词语过滤';


DROP TABLE IF EXISTS `d_brand_13`;
CREATE TABLE `d_brand_13` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `homepage` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `groupid` smallint(4) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `company` varchar(100) NOT NULL DEFAULT '',
  `vip` smallint(2) unsigned NOT NULL DEFAULT '0',
  `validated` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `telephone` varchar(50) NOT NULL DEFAULT '',
  `fax` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `ali` varchar(30) NOT NULL DEFAULT '',
  `skype` varchar(30) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `editdate` date NOT NULL DEFAULT '0000-00-00',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `catid` (`catid`),
  KEY `areaid` (`areaid`),
  KEY `edittime` (`edittime`),
  KEY `editdate` (`editdate`,`vip`,`edittime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='品牌';


DROP TABLE IF EXISTS `d_brand_data_13`;
CREATE TABLE `d_brand_data_13` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='品牌内容';


DROP TABLE IF EXISTS `d_buy_6`;
CREATE TABLE `d_buy_6` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(2) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `n1` varchar(100) NOT NULL,
  `n2` varchar(100) NOT NULL,
  `n3` varchar(100) NOT NULL,
  `v1` varchar(100) NOT NULL,
  `v2` varchar(100) NOT NULL,
  `v3` varchar(100) NOT NULL,
  `amount` varchar(10) NOT NULL DEFAULT '',
  `price` varchar(10) NOT NULL DEFAULT '',
  `pack` varchar(20) NOT NULL DEFAULT '',
  `days` smallint(3) unsigned NOT NULL DEFAULT '0',
  `tag` varchar(100) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `thumb1` varchar(255) NOT NULL DEFAULT '',
  `thumb2` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `groupid` smallint(4) unsigned NOT NULL DEFAULT '0',
  `company` varchar(100) NOT NULL DEFAULT '',
  `vip` smallint(2) unsigned NOT NULL DEFAULT '0',
  `validated` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `telephone` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `ali` varchar(30) NOT NULL DEFAULT '',
  `skype` varchar(30) NOT NULL DEFAULT '',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `editdate` date NOT NULL DEFAULT '0000-00-00',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `editdate` (`editdate`,`vip`,`edittime`),
  KEY `edittime` (`edittime`),
  KEY `catid` (`catid`),
  KEY `areaid` (`areaid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='求购';

INSERT INTO `d_buy_6` VALUES('1','2','0','1','1','ewe','','0','ewwe','1','212','222','22','11','1','1','','','0','','ewe,求购,求购默认分类','','16','','','','admin','1','DESTOON B2B网站管理系统','0','0','嘉客','','','','','admin@yourdomain.com','','','','1394035199','admin','1393996794','2014-03-05','1393996765','2014-03-05','127.0.0.1','','4','show.php?itemid=1','','');

DROP TABLE IF EXISTS `d_buy_data_6`;
CREATE TABLE `d_buy_data_6` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='求购内容';

INSERT INTO `d_buy_data_6` VALUES('1','&nbsp;ewwe');

DROP TABLE IF EXISTS `d_cache`;
CREATE TABLE `d_cache` (
  `cacheid` varchar(32) NOT NULL DEFAULT '',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `cacheid` (`cacheid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文件缓存';


DROP TABLE IF EXISTS `d_category`;
CREATE TABLE `d_category` (
  `catid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `moduleid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `catname` varchar(50) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `catdir` varchar(255) NOT NULL DEFAULT '',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `letter` varchar(4) NOT NULL DEFAULT '',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `item` bigint(20) unsigned NOT NULL DEFAULT '0',
  `property` smallint(6) unsigned NOT NULL DEFAULT '0',
  `parentid` int(10) unsigned NOT NULL DEFAULT '0',
  `arrparentid` varchar(255) NOT NULL DEFAULT '',
  `child` tinyint(1) NOT NULL DEFAULT '0',
  `arrchildid` text NOT NULL,
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `template` varchar(30) NOT NULL DEFAULT '',
  `show_template` varchar(30) NOT NULL DEFAULT '',
  `seo_title` varchar(255) NOT NULL DEFAULT '',
  `seo_keywords` varchar(255) NOT NULL DEFAULT '',
  `seo_description` varchar(255) NOT NULL DEFAULT '',
  `group_list` varchar(255) NOT NULL DEFAULT '',
  `group_show` varchar(255) NOT NULL DEFAULT '',
  `group_add` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='栏目分类';

INSERT INTO `d_category` VALUES('4','16','展示网站类型','','4','list.php?catid=4','z','1','3','0','25','0,25','0','4','4','','','','','','3,5,6,7','3,5,6,7','3,5,6,7');
INSERT INTO `d_category` VALUES('5','16','品牌网站建设','','5','list.php?catid=5','p','1','0','0','25','0,25','0','5','5','','','','','','3,5,6,7','3,5,6,7','3,5,6,7');
INSERT INTO `d_category` VALUES('6','16','营销网站建设','','6','list.php?catid=6','y','1','1','0','25','0,25','0','6','6','','','','','','3,5,6,7','3,5,6,7','3,5,6,7');
INSERT INTO `d_category` VALUES('20','4','展示网站建设','','20','list.php?catid=20','z','1','1','0','0','0','0','20','20','','','','','','3,5,6,7,8,9','3,5,6,7,8,9','3,5,6,7,8,9');
INSERT INTO `d_category` VALUES('21','4','品牌网站建设','','21','list.php?catid=21','p','1','1','0','0','0','0','21','21','','','','','','3,5,6,7,8,9','3,5,6,7,8,9','3,5,6,7,8,9');
INSERT INTO `d_category` VALUES('22','4','营销网站建设','','22','list.php?catid=22','y','1','3','0','0','0','0','22','22','','','','','','3,5,6,7,8,9','3,5,6,7,8,9','3,5,6,7,8,9');
INSERT INTO `d_category` VALUES('25','16','建站','','25','list.php?catid=25','','1','3','0','0','0','1','25,4,5,6','25','','','','','','3,5,6,7,8,9','3,5,6,7,8,9','3,5,6,7,8,9');
INSERT INTO `d_category` VALUES('23','4','Logo设计','','Logosheji','list.php?catid=23','l','1','3','0','0','0','0','23','23','','','Logo设计','Logo设计','Logo设计','3,5,6,7,8,9','3,5,6,7,8,9','3,5,6,7,8,9');
INSERT INTO `d_category` VALUES('26','16','平面','','26','list.php?catid=26','','1','0','0','0','0','1','26,27','26','','','','','','3,5,6,7,8,9','3,5,6,7,8,9','3,5,6,7,8,9');
INSERT INTO `d_category` VALUES('27','16','Logo设计','','Logosheji','list.php?catid=27','l','1','1','0','26','0,26','0','27','27','','','','','','3,5,6,7,8,9','3,5,6,7,8,9','3,5,6,7,8,9');

DROP TABLE IF EXISTS `d_category_option`;
CREATE TABLE `d_category_option` (
  `oid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `required` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `search` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `extend` text NOT NULL,
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`oid`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='分类属性';


DROP TABLE IF EXISTS `d_category_value`;
CREATE TABLE `d_category_value` (
  `oid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `moduleid` smallint(6) NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `value` text NOT NULL,
  KEY `moduleid` (`moduleid`,`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='分类属性值';


DROP TABLE IF EXISTS `d_chat`;
CREATE TABLE `d_chat` (
  `chatid` char(32) NOT NULL DEFAULT '',
  `fromuser` char(50) NOT NULL DEFAULT '',
  `fgettime` int(10) unsigned NOT NULL DEFAULT '0',
  `freadtime` int(10) unsigned NOT NULL DEFAULT '0',
  `touser` char(50) NOT NULL DEFAULT '',
  `tgettime` int(10) unsigned NOT NULL DEFAULT '0',
  `treadtime` int(10) unsigned NOT NULL DEFAULT '0',
  `forward` char(255) NOT NULL DEFAULT '',
  UNIQUE KEY `chatid` (`chatid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='在线聊天';

INSERT INTO `d_chat` VALUES('ce58f66a119176f7675ef93f577e0663','admin','0','1394096411','sawqq','1394094545','0','http://www.d.com/index.php?homepage=sawqq');
INSERT INTO `d_chat` VALUES('225b1b552863ee130ec0e12d203e49aa','admin','0','1394082954','bing','0','0','http://www.d.com/mall/buy.php?itemid=5&amp;s1=0&amp;s2=0&amp;s3=0');
INSERT INTO `d_chat` VALUES('919c1fb80cdf999097c3eec34da99df3','admin','0','1395128760','bingoo','0','0','http://www.d.com/mall/buy.php?itemid=4&amp;s1=0&amp;s2=0&amp;s3=0&amp;money=1');
INSERT INTO `d_chat` VALUES('f60cdd89da0f5a09abf26ab673ffe4b8','bingoo','0','1395023419','bing345','0','0','');
INSERT INTO `d_chat` VALUES('50d2a2cf38e60269d1dabe01d6de2030','bingoo','0','1395107579','bingz','0','0','');
INSERT INTO `d_chat` VALUES('e8819adf46ce5bdc899248088d98872b','admin','0','1395046664','sasasa','1395046658','0','http://www.d.com/admin.php?moduleid=16&amp;action=check_sj');
INSERT INTO `d_chat` VALUES('b2cadea836836e46912ec812d57848f9','bingoo','0','1395043714','sasasa','0','0','');
INSERT INTO `d_chat` VALUES('6147af9645d9e5a8b57a9a984ad2d6bc','bing123','0','1394761341','bingoo','1394760924','1394761352','');
INSERT INTO `d_chat` VALUES('b5f8d2e6a94c89c5b35b3ffc490eb6d6','127.0.0.1','0','1395108484','bingoo','0','1395108496','');
INSERT INTO `d_chat` VALUES('9e71075241e049f8676fd3c5a5f1433a','127.0.0.1','0','1394760881','bing345','0','0','');
INSERT INTO `d_chat` VALUES('6bdf2685008797cd50bceefd4b75d32d','bing2','0','1394763683','bingoo','0','0','');
INSERT INTO `d_chat` VALUES('97cbe75206fb223f5cc741370d79bc42','bingz','0','1395047168','admin','0','1395045737','');
INSERT INTO `d_chat` VALUES('0ab9e3287e630a831dcbb423265ec29e','admin','0','1395046695','bing345','0','0','');
INSERT INTO `d_chat` VALUES('95550ec9cc42eaa0b369442c0cf05171','admin','0','1395107552','bing123','0','0','');

DROP TABLE IF EXISTS `d_city`;
CREATE TABLE `d_city` (
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `iparea` mediumtext NOT NULL,
  `domain` varchar(255) NOT NULL DEFAULT '',
  `letter` varchar(4) NOT NULL DEFAULT '',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `template` varchar(50) NOT NULL DEFAULT '',
  `seo_title` varchar(255) NOT NULL DEFAULT '',
  `seo_keywords` varchar(255) NOT NULL DEFAULT '',
  `seo_description` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `areaid` (`areaid`),
  KEY `domain` (`domain`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='城市分站';


DROP TABLE IF EXISTS `d_comment`;
CREATE TABLE `d_comment` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `item_mid` smallint(6) NOT NULL DEFAULT '0',
  `item_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `item_title` varchar(255) NOT NULL DEFAULT '',
  `item_username` varchar(30) NOT NULL DEFAULT '',
  `star` tinyint(1) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `qid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `quotation` mediumtext NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `reply` mediumtext NOT NULL,
  `editor` varchar(30) NOT NULL DEFAULT '',
  `replyer` varchar(30) NOT NULL DEFAULT '',
  `replytime` int(10) unsigned NOT NULL DEFAULT '0',
  `agree` int(10) unsigned NOT NULL DEFAULT '0',
  `against` int(10) unsigned NOT NULL DEFAULT '0',
  `quote` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `item_mid` (`item_mid`),
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='评论';

INSERT INTO `d_comment` VALUES('1','4','7','asaas','sasasa','3','SDDSSSDDD','0','','admin','0','1393914927','','','','0','0','0','0','127.0.0.1','3');

DROP TABLE IF EXISTS `d_comment_ban`;
CREATE TABLE `d_comment_ban` (
  `bid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `moduleid` smallint(6) NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='评论禁止';


DROP TABLE IF EXISTS `d_comment_stat`;
CREATE TABLE `d_comment_stat` (
  `sid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `moduleid` smallint(6) NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment` int(10) unsigned NOT NULL DEFAULT '0',
  `star1` int(10) unsigned NOT NULL DEFAULT '0',
  `star2` int(10) unsigned NOT NULL DEFAULT '0',
  `star3` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='评论统计';

INSERT INTO `d_comment_stat` VALUES('1','4','7','1','0','0','1');

DROP TABLE IF EXISTS `d_company`;
CREATE TABLE `d_company` (
  `userid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `groupid` smallint(4) unsigned NOT NULL DEFAULT '0',
  `company` varchar(100) NOT NULL DEFAULT '',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `validated` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `validator` varchar(100) NOT NULL DEFAULT '',
  `validtime` int(10) unsigned NOT NULL DEFAULT '0',
  `vip` smallint(2) unsigned NOT NULL DEFAULT '0',
  `vipt` smallint(2) unsigned NOT NULL DEFAULT '0',
  `vipr` smallint(2) NOT NULL DEFAULT '0',
  `type` varchar(100) NOT NULL DEFAULT '',
  `catid` varchar(100) NOT NULL DEFAULT '',
  `catids` varchar(100) NOT NULL DEFAULT '',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `mode` varchar(100) NOT NULL DEFAULT '',
  `capital` float unsigned NOT NULL DEFAULT '0',
  `regunit` varchar(15) NOT NULL DEFAULT '',
  `size` varchar(100) NOT NULL DEFAULT '',
  `regyear` varchar(4) NOT NULL DEFAULT '',
  `regcity` varchar(30) NOT NULL DEFAULT '',
  `sell` varchar(255) NOT NULL DEFAULT '',
  `buy` varchar(255) NOT NULL DEFAULT '',
  `business` varchar(255) NOT NULL DEFAULT '',
  `telephone` varchar(50) NOT NULL DEFAULT '',
  `idcard` varchar(50) NOT NULL DEFAULT '',
  `mail` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `postcode` varchar(20) NOT NULL DEFAULT '',
  `homepage` varchar(255) NOT NULL DEFAULT '',
  `fromtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `styletime` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '',
  `skin` varchar(30) NOT NULL DEFAULT '',
  `domain` varchar(100) NOT NULL DEFAULT '',
  `icp` varchar(100) NOT NULL DEFAULT '',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  KEY `domain` (`domain`),
  KEY `vip` (`vip`),
  KEY `areaid` (`areaid`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='公司';

INSERT INTO `d_company` VALUES('1','admin','1','DESTOON B2B网站管理系统','0','0','','0','0','0','0','企业单位','','','1','','0','人民币','','','','','','','','','','','','','0','0','0','','','3','DESTOON B2B网站管理系统北京,,,,','','','','','http://www.d.com/com/admin/');
INSERT INTO `d_company` VALUES('2','asas','5','z','0','0','','0','0','0','0','','','','1','','0','人民币','','','','','','','','','','','','','0','0','0','','','0','北京','','','','','http://i.d.com/asas/');
INSERT INTO `d_company` VALUES('3','bingo','5','sasa','0','1','','1393776000','0','0','0','','','','1','','0','','','','','','','','','','','','','','1393776000','1425398399','0','','','0','sasa北京','','','','','http://i.d.com/bingo/');
INSERT INTO `d_company` VALUES('5','wedwq','6','ass','0','0','','0','0','0','0','','','','1','','0','','','','','','','','','','','','','','0','0','0','','','0','ass北京','','','','','http://i.d.com/wedwq/');
INSERT INTO `d_company` VALUES('6','saaas','5','saaas','0','0','','0','0','0','0','','','','2','','0','人民币','','','','','','','','','','','','','0','0','0','','','0','saaas上海,,,,','','','','','http://www.d.com/com/saaas/');
INSERT INTO `d_company` VALUES('7','sasasa','7','sasasa','0','1','dd','1393948800','2','2','0','展示网站建设','21',',,','1','','0','','','1122','','','','21121121222222222','1222222222','','','12212122','','','1393948800','1425571199','0','http://www.d.com/file/upload/201403/05/13-34-55-21-7.png','','4','sasasa北京,,,,','','','','','http://www.d.com/com/sasasa/');
INSERT INTO `d_company` VALUES('8','dsds','6','ww','0','0','','0','0','0','0','','','','3','','0','','','','','','','','','','','','','','0','0','0','','','0','ww天津','','','','','http://i.d.com/dsds/');
INSERT INTO `d_company` VALUES('9','sawqq','6','sawqq','0','0','','0','0','0','0','企业单位','','','5','','0','','','','','','','','','121121111111','','','','','0','0','0','222','','0','维生素河北','','','','','http://i.d.com/sawqq/');
INSERT INTO `d_company` VALUES('13','bingz','7','撒撒撒','0','0','','1393948800','1','1','0','Logo设计',',23,',',23,','7','','0','','','2222','','','','sssssswwswsws','15061855227','','','22222222222','','','1393948800','1425571199','0','','','4','撒撒撒内蒙古,,,,','','','','','http://www.d.com/com/bingz/');
INSERT INTO `d_company` VALUES('11','bingoo','5','bingoo','0','0','','0','0','0','0','','','','1','','0','','','','','','','','','','','','','','0','0','0','','','0','bingoo北京,,,,','','','','','http://www.d.com/com/bingoo/');
INSERT INTO `d_company` VALUES('12','bing345','8','叫我设计师','0','1','ss','1393948800','3','3','0','营销网站建设',',22,23,',',22,23,','4','','0','','','2211','','','','ggsaaaaaaaaaaaaa','15061855227','','','wqqqqqqqqqqqqqqqqwqw','','','1393948800','1425571199','0','','','12','叫我设计师重庆,,,,','','','','','http://www.d.com/com/bing345/');
INSERT INTO `d_company` VALUES('20','bing234','5','1122','0','0','','0','0','0','0','','0','','2','','0','','','','','','','','','','','','','','0','0','0','','','0','1122上海,,,,','','','','','http://www.d.com/com/bing234/');
INSERT INTO `d_company` VALUES('14','211221','6','ewewW','0','0','','0','0','0','0','品牌网站建设',',22,21,20,',',22,21,20,','10','','0','','','2111','','','','wwwwwwewee','1212212112','33333333333','','221122','','','0','0','0','','','0','ewewW黑龙江,,,,','','','','','http://www.d.com/com/211221/');
INSERT INTO `d_company` VALUES('15','sasas','6','ss','0','0','','0','0','0','0','','022,',',22,','3','','0','','','','','','','','','','','','','','0','0','0','','','0','ss天津,,,,','','','','','http://www.d.com/com/sasas/');
INSERT INTO `d_company` VALUES('16','ssasaaad','6','撒撒撒ss','0','0','','0','0','0','0','','','','2','','0','','','','','','','','15061855227','','','','','','0','0','0','','','0','撒撒撒ss','','','','','http://www.d.com/com/ssasaaad/');
INSERT INTO `d_company` VALUES('17','ssssssesss','6','撒撒撒安塞县','0','0','','0','0','0','0','','','','2','','0','','','','','','','','15061855227','342622199001122211','','','','','0','0','0','','','0','撒撒撒安塞县','','','','','http://www.d.com/com/ssssssesss/');
INSERT INTO `d_company` VALUES('18','bing123','1','bing','0','0','','0','0','0','0','','0','','2','','0','','','','','','','','','','','','','','0','0','0','','','0','bing上海,,,,','','','','','http://www.d.com/com/bing123/');

DROP TABLE IF EXISTS `d_company_data`;
CREATE TABLE `d_company_data` (
  `userid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='公司内容';

INSERT INTO `d_company_data` VALUES('1','&nbsp;');
INSERT INTO `d_company_data` VALUES('2','');
INSERT INTO `d_company_data` VALUES('3','');
INSERT INTO `d_company_data` VALUES('5','');
INSERT INTO `d_company_data` VALUES('6','&nbsp;');
INSERT INTO `d_company_data` VALUES('7','&nbsp;1222222222222');
INSERT INTO `d_company_data` VALUES('8','');
INSERT INTO `d_company_data` VALUES('9','飒飒飒飒撒是撒啊飒飒飒飒阿萨啊飒飒啊飒飒');
INSERT INTO `d_company_data` VALUES('11','&nbsp;');
INSERT INTO `d_company_data` VALUES('12','&nbsp;wqqqqqqqqqqqq');
INSERT INTO `d_company_data` VALUES('13','&nbsp;sssssssss');
INSERT INTO `d_company_data` VALUES('14','&nbsp;222222222');
INSERT INTO `d_company_data` VALUES('15','&nbsp;');
INSERT INTO `d_company_data` VALUES('16','');
INSERT INTO `d_company_data` VALUES('17','');
INSERT INTO `d_company_data` VALUES('18','&nbsp;');
INSERT INTO `d_company_data` VALUES('20','&nbsp;');

DROP TABLE IF EXISTS `d_company_setting`;
CREATE TABLE `d_company_setting` (
  `userid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `item_key` varchar(100) NOT NULL DEFAULT '',
  `item_value` text NOT NULL,
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='公司设置';


DROP TABLE IF EXISTS `d_down_15`;
CREATE TABLE `d_down_15` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `tag` varchar(255) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `download` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `fileurl` varchar(255) NOT NULL DEFAULT '',
  `fileext` varchar(10) NOT NULL DEFAULT '',
  `filesize` float NOT NULL DEFAULT '0',
  `unit` varchar(10) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `addtime` (`addtime`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='下载';

INSERT INTO `d_down_15` VALUES('1','28','0','0','sasasas','','0','','sasasas,saassa','','16','2','sss','http://www.d.com/file/upload/201403/06/17-21-05-88-1.jpg','img','0.9','M','admin','1394096594','sdaxx','admin','1394097672','127.0.0.1','','3','show.php?itemid=1','','');
INSERT INTO `d_down_15` VALUES('2','28','0','0','1111','','0','','1111,','','1','0','11111','http://www.d.com/file/upload/201403/14/17-34-03-40-1.docx','doc','0.01','M','admin','1394789629','assasa','admin','1394789648','127.0.0.1','','3','show.php?itemid=2','','');

DROP TABLE IF EXISTS `d_down_data_15`;
CREATE TABLE `d_down_data_15` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='下载内容';

INSERT INTO `d_down_data_15` VALUES('1','sdaxx');
INSERT INTO `d_down_data_15` VALUES('2','&nbsp;assasa');

DROP TABLE IF EXISTS `d_exhibit`;
CREATE TABLE `d_exhibit` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `orders` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `fromtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `city` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `postcode` varchar(20) NOT NULL DEFAULT '',
  `homepage` varchar(255) NOT NULL DEFAULT '',
  `hallname` varchar(100) NOT NULL DEFAULT '',
  `sponsor` varchar(100) NOT NULL DEFAULT '',
  `undertaker` varchar(100) NOT NULL DEFAULT '',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `addr` varchar(255) NOT NULL DEFAULT '',
  `telephone` varchar(100) NOT NULL DEFAULT '',
  `mobile` varchar(20) NOT NULL DEFAULT '',
  `fax` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `remark` mediumtext NOT NULL,
  `sign` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `addtime` (`addtime`),
  KEY `catid` (`catid`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='展会';


DROP TABLE IF EXISTS `d_exhibit_data`;
CREATE TABLE `d_exhibit_data` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='展会内容';


DROP TABLE IF EXISTS `d_exhibit_order`;
CREATE TABLE `d_exhibit_order` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `amount` int(10) unsigned NOT NULL DEFAULT '0',
  `company` varchar(100) NOT NULL,
  `truename` varchar(30) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL,
  PRIMARY KEY (`itemid`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='展会报名';


DROP TABLE IF EXISTS `d_favorite`;
CREATE TABLE `d_favorite` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `userid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `typeid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商机收藏';


DROP TABLE IF EXISTS `d_fetch`;
CREATE TABLE `d_fetch` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sitename` varchar(100) NOT NULL DEFAULT '',
  `domain` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `encode` varchar(30) NOT NULL DEFAULT '',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='单页采编';

INSERT INTO `d_fetch` VALUES('1','慧聪组织管理','http://info.ceo.hc360.com/','--企业管理-hc360慧聪网','<div id=\"article\">[content]</div>','gbk','admin','1394071124');

DROP TABLE IF EXISTS `d_fields`;
CREATE TABLE `d_fields` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tb` varchar(30) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  `length` smallint(4) unsigned NOT NULL DEFAULT '0',
  `html` varchar(30) NOT NULL DEFAULT '',
  `default_value` text NOT NULL,
  `option_value` text NOT NULL,
  `width` smallint(4) unsigned NOT NULL DEFAULT '0',
  `height` smallint(4) unsigned NOT NULL DEFAULT '0',
  `input_limit` varchar(255) NOT NULL DEFAULT '',
  `addition` varchar(255) NOT NULL DEFAULT '',
  `display` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `front` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `tablename` (`tb`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='自定义字段';


DROP TABLE IF EXISTS `d_finance_card`;
CREATE TABLE `d_finance_card` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `number` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) NOT NULL DEFAULT '',
  `amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  UNIQUE KEY `number` (`number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='充值卡';


DROP TABLE IF EXISTS `d_finance_cash`;
CREATE TABLE `d_finance_cash` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `bank` varchar(50) NOT NULL DEFAULT '',
  `account` varchar(30) NOT NULL DEFAULT '',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='申请提现';


DROP TABLE IF EXISTS `d_finance_charge`;
CREATE TABLE `d_finance_charge` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `bank` varchar(20) NOT NULL DEFAULT '',
  `amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `sendtime` int(10) unsigned NOT NULL DEFAULT '0',
  `receivetime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='在线充值';


DROP TABLE IF EXISTS `d_finance_credit`;
CREATE TABLE `d_finance_credit` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `amount` int(10) NOT NULL DEFAULT '0',
  `balance` int(10) NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `reason` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  `editor` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COMMENT='积分流水';

INSERT INTO `d_finance_credit` VALUES('1','asas','20','20','1393837447','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('2','bingo','20','20','1393838308','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('3','admin','1','1','1393893774','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('5','wedwq','20','20','1393896118','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('6','saaas','20','20','1393898021','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('7','sasasa','20','20','1393898690','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('8','dsds','20','20','1393899130','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('9','sawqq','20','20','1393900232','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('84','bing123','1','21','1395049205','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('11','admin','2','3','1393905601','商城发布','ID:1','system');
INSERT INTO `d_finance_credit` VALUES('12','bingoo','20','20','1393906297','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('13','admin','2','5','1393906932','商城发布','ID:2','system');
INSERT INTO `d_finance_credit` VALUES('14','admin','2','7','1393910929','商城发布','ID:3','system');
INSERT INTO `d_finance_credit` VALUES('15','admin','2','9','1393911376','商城发布','ID:4','system');
INSERT INTO `d_finance_credit` VALUES('16','admin','2','11','1393914927','评论发布','ID:1','system');
INSERT INTO `d_finance_credit` VALUES('17','admin','1','12','1393979862','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('18','bingoo','1','21','1393981456','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('19','admin','2','14','1393983077','商城发布','ID:5','system');
INSERT INTO `d_finance_credit` VALUES('20','admin','2','16','1393996794','求购发布','ID:1','system');
INSERT INTO `d_finance_credit` VALUES('21','sasasa','1','21','1393997662','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('87','bing345','1','39','1395128339','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('24','bing345','20','20','1394000384','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('25','bing345','10','30','1394000654','完善资料','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('26','bingz','20','20','1394003286','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('27','bingz','10','30','1394003605','完善资料','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('28','211221','20','20','1394004797','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('29','211221','10','30','1394004891','完善资料','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('30','sasas','20','20','1394005559','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('31','ssasaaad','20','20','1394006170','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('32','ssssssesss','20','20','1394007956','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('33','saaas','1','21','1394008332','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('34','admin','1','17','1394068085','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('35','admin','2','19','1394068220','供应发布','ID:1','system');
INSERT INTO `d_finance_credit` VALUES('36','admin','2','21','1394068454','团购发布','ID:1','system');
INSERT INTO `d_finance_credit` VALUES('37','admin','2','23','1394069117','商城发布','ID:6','system');
INSERT INTO `d_finance_credit` VALUES('38','bing345','1','31','1394073913','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('39','bingoo','1','22','1394074890','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('86','admin','1','44','1395104176','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('41','admin','2','25','1394093848','商城发布','ID:7','system');
INSERT INTO `d_finance_credit` VALUES('42','admin','2','27','1394097672','下载发布','ID:1','system');
INSERT INTO `d_finance_credit` VALUES('43','admin','1','28','1394155601','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('44','bingoo','1','23','1394155732','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('45','bing345','1','32','1394175986','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('46','bingo','1','21','1394176441','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('47','admin','2','30','1394180283','商城发布','ID:8','system');
INSERT INTO `d_finance_credit` VALUES('48','bingoo','1','24','1394411348','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('49','bingo','1','22','1394413275','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('50','bing345','1','33','1394413292','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('51','bingz','1','31','1394413414','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('52','admin','1','31','1394414920','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('53','admin','1','32','1394501177','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('54','bingoo','1','25','1394502765','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('55','admin','2','34','1394516191','商城发布','ID:9','system');
INSERT INTO `d_finance_credit` VALUES('56','bingoo','1','26','1394585054','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('57','admin','1','35','1394592462','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('58','sasasa','1','22','1394593259','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('60','bing345','1','34','1394614277','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('61','sasasa','1','23','1394670648','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('62','admin','1','36','1394671115','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('63','bing345','1','35','1394671576','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('64','bingoo','1','27','1394671603','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('85','bing123','1','22','1395103501','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('66','bingoo','1','28','1394757902','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('67','admin','1','37','1394757969','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('68','bing123','20','20','1394758547','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('69','bing345','1','36','1394761148','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('70','sasasa','1','24','1394762523','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('72','admin','2','39','1394789648','下载发布','ID:2','system');
INSERT INTO `d_finance_credit` VALUES('73','admin','1','40','1394844492','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('74','bingoo','1','29','1394844859','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('75','bing345','1','37','1394844923','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('76','sasasa','1','25','1394869670','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('77','admin','2','42','1394870436','商城发布','ID:10','system');
INSERT INTO `d_finance_credit` VALUES('78','admin','1','43','1395016898','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('79','bingoo','1','30','1395018691','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('80','bing345','1','38','1395026606','登录奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('83','bing234','20','20','1395048707','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_credit` VALUES('82','bingz','1','32','1395032962','登录奖励','127.0.0.1','system');

DROP TABLE IF EXISTS `d_finance_pay`;
CREATE TABLE `d_finance_pay` (
  `pid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `fee` float unsigned NOT NULL DEFAULT '0',
  `currency` varchar(20) NOT NULL DEFAULT '',
  `paytime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `moduleid` smallint(6) NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='支付记录';


DROP TABLE IF EXISTS `d_finance_promo`;
CREATE TABLE `d_finance_promo` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `number` varchar(30) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `amount` float NOT NULL DEFAULT '0',
  `reuse` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  UNIQUE KEY `number` (`number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='优惠码';


DROP TABLE IF EXISTS `d_finance_record`;
CREATE TABLE `d_finance_record` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `bank` varchar(30) NOT NULL DEFAULT '',
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `reason` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  `editor` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=295 DEFAULT CHARSET=utf8 COMMENT='财务流水';

INSERT INTO `d_finance_record` VALUES('275','bing345','站内','80.00','10080.00','1394692707','订单初稿佣金','订单号:34','system');
INSERT INTO `d_finance_record` VALUES('276','sasasa','站内','60.00','10060.00','1394692707','订单初稿佣金','订单号:34','system');
INSERT INTO `d_finance_record` VALUES('291','bing345','站内','0.00','10320.00','1395042460','订单入围佣金','订单号:79','system');
INSERT INTO `d_finance_record` VALUES('290','bing345','站内','80.00','10320.00','1395042460','订单初稿佣金','订单号:79','system');
INSERT INTO `d_finance_record` VALUES('279','sasasa','站内','1500.00','11560.00','1394692707','订单成功佣金','订单号:34','system');
INSERT INTO `d_finance_record` VALUES('280','bingoo','站内','-4680.00','5320.00','1394692707','订单交易成功','订单号:34','system');
INSERT INTO `d_finance_record` VALUES('281','admin','站内','2940.00','12940.00','1394692707','订单交易成功','订单号:34','system');
INSERT INTO `d_finance_record` VALUES('289','bing345','站内','80.00','10240.00','1395042225','订单初稿佣金','订单号:79','system');
INSERT INTO `d_finance_record` VALUES('283','sasasa','站内','60.00','11620.00','1394705006','订单初稿佣金','订单号:72','system');
INSERT INTO `d_finance_record` VALUES('284','bing345','站内','80.00','10160.00','1394705006','订单初稿佣金','订单号:72','system');
INSERT INTO `d_finance_record` VALUES('285','bing345','站内','0.00','10160.00','1394705006','订单入围佣金','订单号:72','system');
INSERT INTO `d_finance_record` VALUES('286','sasasa','站内','1500.00','13120.00','1394705006','订单成功佣金','订单号:72','system');
INSERT INTO `d_finance_record` VALUES('287','bingoo','站内','-4680.00','5320.00','1394705006','订单交易成功','订单号:72','system');
INSERT INTO `d_finance_record` VALUES('288','admin','站内','2940.00','15880.00','1394705006','订单交易成功','订单号:72','system');
INSERT INTO `d_finance_record` VALUES('292','bingz','站内','1500.00','11500.00','1395042460','订单成功佣金','订单号:79','system');
INSERT INTO `d_finance_record` VALUES('293','bingoo','站内','-4680.00','94610.00','1395042460','订单交易成功','订单号:79','system');
INSERT INTO `d_finance_record` VALUES('294','admin','站内','3100.00','18980.00','1395042460','订单交易成功','订单号:79','system');

DROP TABLE IF EXISTS `d_finance_sms`;
CREATE TABLE `d_finance_sms` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `amount` int(10) NOT NULL DEFAULT '0',
  `balance` int(10) NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `reason` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  `editor` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='短信增减';

INSERT INTO `d_finance_sms` VALUES('17','bing123','3','3','1394758547','注册奖励','127.0.0.1','system');
INSERT INTO `d_finance_sms` VALUES('19','bingoo','-1','2','1395043149','手机认证','18661052393','bingoo');
INSERT INTO `d_finance_sms` VALUES('20','bing234','5','5','1395048707','注册奖励','127.0.0.1','system');

DROP TABLE IF EXISTS `d_friend`;
CREATE TABLE `d_friend` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `userid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `typeid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `company` varchar(100) NOT NULL DEFAULT '',
  `career` varchar(20) NOT NULL DEFAULT '',
  `telephone` varchar(20) NOT NULL DEFAULT '',
  `mobile` varchar(20) NOT NULL DEFAULT '',
  `homepage` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `ali` varchar(30) NOT NULL DEFAULT '',
  `skype` varchar(30) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='我的商友';

INSERT INTO `d_friend` VALUES('1','0','1','0','admin','嘉客','','DESTOON B2B网站管理系统','','','','http://www.d.com/com/admin/','','','','','','','1394094485');

DROP TABLE IF EXISTS `d_gift`;
CREATE TABLE `d_gift` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `credit` int(10) unsigned NOT NULL DEFAULT '0',
  `amount` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `orders` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `fromtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='积分换礼';


DROP TABLE IF EXISTS `d_gift_order`;
CREATE TABLE `d_gift_order` (
  `oid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `credit` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`oid`),
  KEY `itemid` (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='积分换礼订单';


DROP TABLE IF EXISTS `d_group`;
CREATE TABLE `d_group` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `marketprice` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `savemoney` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `discount` float unsigned NOT NULL DEFAULT '0',
  `minamount` int(10) unsigned NOT NULL DEFAULT '0',
  `amount` int(10) unsigned NOT NULL DEFAULT '0',
  `logistic` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tag` varchar(100) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `orders` int(10) unsigned NOT NULL DEFAULT '0',
  `sales` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `groupid` smallint(4) unsigned NOT NULL DEFAULT '0',
  `company` varchar(100) NOT NULL DEFAULT '',
  `vip` smallint(2) unsigned NOT NULL DEFAULT '0',
  `validated` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `telephone` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `ali` varchar(30) NOT NULL DEFAULT '',
  `skype` varchar(30) NOT NULL DEFAULT '',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `process` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `addtime` (`addtime`),
  KEY `catid` (`catid`),
  KEY `areaid` (`areaid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='团购';

INSERT INTO `d_group` VALUES('1','24','1','2','ewewew','','0','22','222.00','3333.00','3111.00','0.7','0','0','0','','ewewew,,eweewe','','8','0','0','http://www.d.com/file/upload/201403/06/09-14-03-22-4.jpg','admin','1','DESTOON B2B网站管理系统','0','0','嘉客','','','','','admin@yourdomain.com','','','','0','0','admin','1394068454','1394068418','127.0.0.1','','3','0','show.php?itemid=1','','');

DROP TABLE IF EXISTS `d_group_data`;
CREATE TABLE `d_group_data` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='团购内容';

INSERT INTO `d_group_data` VALUES('1','&nbsp;222222222222');

DROP TABLE IF EXISTS `d_group_order`;
CREATE TABLE `d_group_order` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `buyer` varchar(30) NOT NULL DEFAULT '',
  `seller` varchar(30) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `number` int(10) unsigned NOT NULL DEFAULT '0',
  `amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `logistic` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `password` varchar(6) NOT NULL DEFAULT '',
  `buyer_name` varchar(30) NOT NULL DEFAULT '',
  `buyer_address` varchar(255) NOT NULL DEFAULT '',
  `buyer_postcode` varchar(10) NOT NULL DEFAULT '',
  `buyer_phone` varchar(30) NOT NULL DEFAULT '',
  `buyer_mobile` varchar(30) NOT NULL DEFAULT '',
  `buyer_receive` varchar(50) NOT NULL DEFAULT '',
  `send_type` varchar(50) NOT NULL DEFAULT '',
  `send_no` varchar(50) NOT NULL DEFAULT '',
  `send_time` varchar(20) NOT NULL DEFAULT '',
  `send_days` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `buyer` (`buyer`),
  KEY `seller` (`seller`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='团购订单';


DROP TABLE IF EXISTS `d_guestbook`;
CREATE TABLE `d_guestbook` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `reply` text NOT NULL,
  `hidden` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `telephone` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(30) NOT NULL DEFAULT '',
  `ali` varchar(30) NOT NULL DEFAULT '',
  `skype` varchar(30) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='留言本';


DROP TABLE IF EXISTS `d_honor`;
CREATE TABLE `d_honor` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `authority` varchar(100) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `fromtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='荣誉资质';


DROP TABLE IF EXISTS `d_info_22`;
CREATE TABLE `d_info_22` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `thumb1` varchar(255) NOT NULL DEFAULT '',
  `thumb2` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `groupid` smallint(4) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `company` varchar(100) NOT NULL DEFAULT '',
  `vip` smallint(2) unsigned NOT NULL DEFAULT '0',
  `validated` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `telephone` varchar(50) NOT NULL DEFAULT '',
  `fax` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `ali` varchar(30) NOT NULL DEFAULT '',
  `skype` varchar(30) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `n1` varchar(100) NOT NULL,
  `n2` varchar(100) NOT NULL,
  `n3` varchar(100) NOT NULL,
  `v1` varchar(100) NOT NULL,
  `v2` varchar(100) NOT NULL,
  `v3` varchar(100) NOT NULL,
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `editdate` date NOT NULL DEFAULT '0000-00-00',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `edittime` (`edittime`),
  KEY `catid` (`catid`),
  KEY `areaid` (`areaid`),
  KEY `editdate` (`editdate`,`vip`,`edittime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='招商';


DROP TABLE IF EXISTS `d_info_data_22`;
CREATE TABLE `d_info_data_22` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='招商内容';


DROP TABLE IF EXISTS `d_job`;
CREATE TABLE `d_job` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `department` varchar(100) NOT NULL DEFAULT '',
  `total` smallint(4) unsigned NOT NULL DEFAULT '0',
  `minsalary` int(10) unsigned NOT NULL DEFAULT '0',
  `maxsalary` int(10) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gender` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `marriage` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `education` smallint(2) unsigned NOT NULL DEFAULT '0',
  `experience` smallint(2) unsigned NOT NULL DEFAULT '0',
  `minage` smallint(2) unsigned NOT NULL DEFAULT '0',
  `maxage` smallint(2) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `apply` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `groupid` smallint(4) unsigned NOT NULL DEFAULT '0',
  `company` varchar(100) NOT NULL DEFAULT '',
  `vip` smallint(2) unsigned NOT NULL DEFAULT '0',
  `validated` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `telephone` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `ali` varchar(30) NOT NULL DEFAULT '',
  `skype` varchar(30) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `editdate` date NOT NULL DEFAULT '0000-00-00',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `editdate` (`editdate`,`vip`,`edittime`),
  KEY `edittime` (`edittime`),
  KEY `catid` (`catid`),
  KEY `areaid` (`areaid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='招聘';


DROP TABLE IF EXISTS `d_job_apply`;
CREATE TABLE `d_job_apply` (
  `applyid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jobid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `resumeid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `job_username` varchar(30) NOT NULL DEFAULT '',
  `apply_username` varchar(30) NOT NULL DEFAULT '',
  `applytime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`applyid`),
  KEY `job_username` (`job_username`),
  KEY `apply_username` (`apply_username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='应聘工作';


DROP TABLE IF EXISTS `d_job_data`;
CREATE TABLE `d_job_data` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='招聘内容';


DROP TABLE IF EXISTS `d_job_talent`;
CREATE TABLE `d_job_talent` (
  `talentid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `resumeid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `jointime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`talentid`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='人才库';


DROP TABLE IF EXISTS `d_keylink`;
CREATE TABLE `d_keylink` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `item` varchar(20) NOT NULL DEFAULT '',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `item` (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='关联链接';


DROP TABLE IF EXISTS `d_keyword`;
CREATE TABLE `d_keyword` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `moduleid` smallint(6) NOT NULL DEFAULT '0',
  `word` varchar(255) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `letter` varchar(255) NOT NULL DEFAULT '',
  `items` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `total_search` int(10) unsigned NOT NULL DEFAULT '0',
  `month_search` int(10) unsigned NOT NULL DEFAULT '0',
  `week_search` int(10) unsigned NOT NULL DEFAULT '0',
  `today_search` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '3',
  PRIMARY KEY (`itemid`),
  KEY `moduleid` (`moduleid`),
  KEY `word` (`word`),
  KEY `letter` (`letter`),
  KEY `keyword` (`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='关键词';


DROP TABLE IF EXISTS `d_know`;
CREATE TABLE `d_know` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `credit` int(10) unsigned NOT NULL DEFAULT '0',
  `aid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `hidden` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `process` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `message` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `addition` mediumtext NOT NULL,
  `comment` mediumtext NOT NULL,
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `raise` int(10) unsigned NOT NULL DEFAULT '0',
  `agree` int(10) unsigned NOT NULL DEFAULT '0',
  `against` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `answer` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ask` varchar(30) NOT NULL,
  `expert` varchar(30) NOT NULL,
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `addtime` (`addtime`),
  KEY `catid` (`catid`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='知道';


DROP TABLE IF EXISTS `d_know_answer`;
CREATE TABLE `d_know_answer` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `qid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `vote` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `expert` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `hidden` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `qid` (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='知道回答';


DROP TABLE IF EXISTS `d_know_data`;
CREATE TABLE `d_know_data` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` longtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='知道内容';


DROP TABLE IF EXISTS `d_know_expert`;
CREATE TABLE `d_know_expert` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `style` varchar(50) NOT NULL DEFAULT '',
  `major` varchar(255) NOT NULL,
  `ask` int(10) unsigned NOT NULL DEFAULT '0',
  `answer` int(10) unsigned NOT NULL DEFAULT '0',
  `best` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `introduce` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='知道专家';


DROP TABLE IF EXISTS `d_know_vote`;
CREATE TABLE `d_know_vote` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `qid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `aid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='知道投票';


DROP TABLE IF EXISTS `d_link`;
CREATE TABLE `d_link` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(4) NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `listorder` (`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='友情链接';

INSERT INTO `d_link` VALUES('1','0','0','Destoon B2B','','http://static.destoon.com/logo.gif','Destoon B2B网站管理系统','','1393836401','admin','1393836401','0','1','3','http://www.destoon.com/');

DROP TABLE IF EXISTS `d_login`;
CREATE TABLE `d_login` (
  `logid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `loginip` varchar(50) NOT NULL DEFAULT '',
  `logintime` int(10) unsigned NOT NULL DEFAULT '0',
  `message` varchar(255) NOT NULL DEFAULT '',
  `agent` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='登录日志';


DROP TABLE IF EXISTS `d_mail`;
CREATE TABLE `d_mail` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `sendtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='邮件订阅';


DROP TABLE IF EXISTS `d_mail_list`;
CREATE TABLE `d_mail_list` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `typeids` varchar(255) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='订阅列表';


DROP TABLE IF EXISTS `d_mail_log`;
CREATE TABLE `d_mail_log` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=utf8 COMMENT='邮件记录';

INSERT INTO `d_mail_log` VALUES('1','1274367436@qq.com','摩恩建站-企业网站定制专家邮件发送测试','<b>恭喜！您的站点[摩恩建站-企业网站定制专家]邮件发送设置成功！</b>','1394083259','','0','3','');
INSERT INTO `d_mail_log` VALUES('2','1274367436@qq.com','摩恩建站-企业网站定制专家用户邮件认证','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;摩恩建站-企业网站定制专家用户邮件认证</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n您好！您使用了摩恩建站-企业网站定制专家的<span style=\"color:#FF1100;\">邮件认证</span>功能，请点击下面的链接完成您的邮件认证（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/validate.php?action=email&auth=22E47E8EBB8FCED6141DEE265E9EE0AB\" target=\"_blank\">http://www.d.com/member/validate.php?action=email&auth=22E47E8EBB8FCED6141DEE265E9EE0AB</a><br/>\r\n链接有效期为 <strong style=\"color:red\">3</strong> 天</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','1394083328','','0','3','');
INSERT INTO `d_mail_log` VALUES('3','1274367436@qq.com','aasasasasassss','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;aasasasasassss</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">&nbsp;sasasassd</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系您的好友 bingoo<strong>&lt;<a href=\"mailto:bingoo@q.c\" style=\"color:#FFFFFF;\">bingoo@q.c</a>&gt;</strong> 通过 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 发出<br/>如果发件人显示的不是 <a href=\"mailto:bingoo@q.c\" style=\"color:#FFFFFF;\">bingoo@q.c</a>，请回复至 <a href=\"mailto:bingoo@q.c\" style=\"color:#FFFFFF;\">bingoo@q.c</a><br/></td>\r\n</tr>\r\n</table>','1394512209','','0','3','');
INSERT INTO `d_mail_log` VALUES('4','1274367436','摩恩建站-企业网站定制专家邮件发送测试','<b>恭喜！您的站点[摩恩建站-企业网站定制专家]邮件发送设置成功！</b>','1394671520','','0','3','');
INSERT INTO `d_mail_log` VALUES('5','bing123@qq.com','欢迎加入摩恩建站-企业网站定制专家','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing123</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>bing123<br/>\r\n<strong>密码：</strong>bingbing 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','1394758547','','0','3','');
INSERT INTO `d_mail_log` VALUES('6','bing1@qq.com','欢迎加入摩恩建站-企业网站定制专家','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing2</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>bing2<br/>\r\n<strong>密码：</strong>bingbing 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','1394762672','','0','3','');
INSERT INTO `d_mail_log` VALUES('7','1274367436@qq.com','摩恩建站-企业网站定制专家邮件发送测试','<b>恭喜！您的站点[摩恩建站-企业网站定制专家]邮件发送设置成功！</b>','1394869275','','0','3','');
INSERT INTO `d_mail_log` VALUES('8','','','','1395021781','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('9','','','','1395022082','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('10','','','','1395022082','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('11','','','','1395022082','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('12','','','','1395022084','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('13','','','','1395022084','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('14','','','','1395022084','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('15','','','','1395022104','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('16','','','','1395022104','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('17','','','','1395022104','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('18','','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的用户</strong>：<br/>\r\n您好！您在摩恩建站-企业网站定制专家的邮件注册验证码为<span style=\"color:#FF1100;\"></span>，请使用此验证码继续完成注册。\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','1395022150','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('19','','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的用户</strong>：<br/>\r\n您好！您在摩恩建站-企业网站定制专家的邮件注册验证码为<span style=\"color:#FF1100;\"></span>，请使用此验证码继续完成注册。\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','1395022150','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('20','','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的用户</strong>：<br/>\r\n您好！您在摩恩建站-企业网站定制专家的邮件注册验证码为<span style=\"color:#FF1100;\"></span>，请使用此验证码继续完成注册。\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','1395022150','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('21','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的用户</strong>：<br/>\r\n您好！您在摩恩建站-企业网站定制专家的邮件注册验证码为<span style=\"color:#FF1100;\"></span>，请使用此验证码继续完成注册。\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','1395022269','','0','3','');
INSERT INTO `d_mail_log` VALUES('22','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的用户</strong>：<br/>\r\n您好！您在摩恩建站-企业网站定制专家的邮件注册验证码为<span style=\"color:#FF1100;\"></span>，请使用此验证码继续完成注册。\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','1395022269','','0','3','');
INSERT INTO `d_mail_log` VALUES('23','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的用户</strong>：<br/>\r\n您好！您在摩恩建站-企业网站定制专家的邮件注册验证码为<span style=\"color:#FF1100;\"></span>，请使用此验证码继续完成注册。\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','1395022269','','0','3','');
INSERT INTO `d_mail_log` VALUES('24','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n您好！您的<span style=\"color:#FF1100;\">Array</span>订单已有设计师设计出产品了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"\" target=\"_blank\"></a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>\r\n','1395022355','','0','3','');
INSERT INTO `d_mail_log` VALUES('25','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n您好！您的<span style=\"color:#FF1100;\">Array</span>订单已有设计师设计出产品了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"\" target=\"_blank\"></a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>\r\n','1395022355','','0','3','');
INSERT INTO `d_mail_log` VALUES('26','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n您好！您的<span style=\"color:#FF1100;\">Array</span>订单已有设计师设计出产品了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"\" target=\"_blank\"></a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>\r\n','1395022355','','0','3','');
INSERT INTO `d_mail_log` VALUES('27','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的<span style=\"color:#FF1100;\">73</span>订单已有设计师设计出产品了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"\" target=\"_blank\"></a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022459','','0','3','');
INSERT INTO `d_mail_log` VALUES('28','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的<span style=\"color:#FF1100;\">74</span>订单已有设计师设计出产品了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"\" target=\"_blank\"></a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022459','','0','3','');
INSERT INTO `d_mail_log` VALUES('29','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的<span style=\"color:#FF1100;\">75</span>订单已有设计师设计出产品了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"\" target=\"_blank\"></a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022459','','0','3','');
INSERT INTO `d_mail_log` VALUES('30','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">73</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/mall/trade.php?itemid=73\" target=\"_blank\">http://www.d.com/mall/trade.php?itemid=73</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022633','','0','3','');
INSERT INTO `d_mail_log` VALUES('31','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">74</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/mall/trade.php?itemid=74\" target=\"_blank\">http://www.d.com/mall/trade.php?itemid=74</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022633','','0','3','');
INSERT INTO `d_mail_log` VALUES('32','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/mall/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/mall/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022633','','0','3','');
INSERT INTO `d_mail_log` VALUES('33','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">73</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=73\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=73</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022865','','0','3','');
INSERT INTO `d_mail_log` VALUES('34','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">74</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=74\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=74</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022865','','0','3','');
INSERT INTO `d_mail_log` VALUES('35','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022865','','0','3','');
INSERT INTO `d_mail_log` VALUES('36','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">73</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=73\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=73</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022877','','0','3','');
INSERT INTO `d_mail_log` VALUES('37','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">74</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=74\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=74</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022877','','0','3','');
INSERT INTO `d_mail_log` VALUES('38','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022877','','0','3','');
INSERT INTO `d_mail_log` VALUES('39','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">73</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=73\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=73</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022914','','0','3','');
INSERT INTO `d_mail_log` VALUES('40','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">74</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=74\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=74</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022914','','0','3','');
INSERT INTO `d_mail_log` VALUES('41','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395022914','','0','3','');
INSERT INTO `d_mail_log` VALUES('42','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">73</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=73\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=73</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395023149','','0','3','');
INSERT INTO `d_mail_log` VALUES('43','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">74</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=74\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=74</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395023149','','0','3','');
INSERT INTO `d_mail_log` VALUES('44','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395023149','','0','3','');
INSERT INTO `d_mail_log` VALUES('45','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">73</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=73\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=73</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395023323','','0','3','');
INSERT INTO `d_mail_log` VALUES('46','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">74</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=74\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=74</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395023323','','0','3','');
INSERT INTO `d_mail_log` VALUES('47','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395023323','','0','3','');
INSERT INTO `d_mail_log` VALUES('48','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395023382','','0','3','');
INSERT INTO `d_mail_log` VALUES('49','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395023633','','0','3','');
INSERT INTO `d_mail_log` VALUES('50','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395023758','','0','3','');
INSERT INTO `d_mail_log` VALUES('51','1274367436@qq.com','','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395023952','','0','3','');
INSERT INTO `d_mail_log` VALUES('52','1274367436@qq.com','订单通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395023982','','0','3','');
INSERT INTO `d_mail_log` VALUES('53','1274367436@qq.com','订单通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395024104','','0','3','');
INSERT INTO `d_mail_log` VALUES('54','1274367436@qq.com','订单通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395024183','','0','3','');
INSERT INTO `d_mail_log` VALUES('55','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395024240','','0','3','');
INSERT INTO `d_mail_log` VALUES('56','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395024275','','0','3','');
INSERT INTO `d_mail_log` VALUES('57','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395024326','','0','3','');
INSERT INTO `d_mail_log` VALUES('58','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395024495','','0','3','');
INSERT INTO `d_mail_log` VALUES('59','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395024569','','0','3','');
INSERT INTO `d_mail_log` VALUES('60','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395025829','','0','3','');
INSERT INTO `d_mail_log` VALUES('61','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395026274','','0','3','');
INSERT INTO `d_mail_log` VALUES('62','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出栏目了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395026296','','0','3','');
INSERT INTO `d_mail_log` VALUES('63','','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\"></span>的订单已有设计师设计出栏目页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395033215','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('64','','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\"></span>的订单已有设计师设计出栏目页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395033340','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('65','','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\"></span>的订单已有设计师设计出栏目页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395033350','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('66','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\"></span>的订单已有设计师设计出栏目页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"\" target=\"_blank\"></a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395033863','','0','3','');
INSERT INTO `d_mail_log` VALUES('67','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\"></span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395034010','','0','3','');
INSERT INTO `d_mail_log` VALUES('68','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395034109','','0','3','');
INSERT INTO `d_mail_log` VALUES('69','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395034384','','0','3','');
INSERT INTO `d_mail_log` VALUES('70','1274367436@qq.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395034785','','0','3','');
INSERT INTO `d_mail_log` VALUES('71','1274367436@qq.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395034890','','0','3','');
INSERT INTO `d_mail_log` VALUES('72','1274367436@qq.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395034967','','0','3','');
INSERT INTO `d_mail_log` VALUES('73','1274367436@qq.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395035118','','0','3','');
INSERT INTO `d_mail_log` VALUES('74','1274367436@qq.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395035329','','0','3','');
INSERT INTO `d_mail_log` VALUES('75','1274367436@qq.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395035613','','0','3','');
INSERT INTO `d_mail_log` VALUES('76','1274367436@qq.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395035933','','0','3','');
INSERT INTO `d_mail_log` VALUES('77','1274367436@qq.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395036089','','0','3','');
INSERT INTO `d_mail_log` VALUES('78','1274367436@qq.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395036130','','0','3','');
INSERT INTO `d_mail_log` VALUES('79','1274367436@qq.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">78</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=78\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=78</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395036640','','0','3','');
INSERT INTO `d_mail_log` VALUES('80','bing3245@bing345.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">78</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=78\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=78</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395036640','','0','3','');
INSERT INTO `d_mail_log` VALUES('81','1274367436@qq.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">78</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=78\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=78</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395037010','','0','3','');
INSERT INTO `d_mail_log` VALUES('82','bing3245@bing345.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">78</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=78\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=78</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395037010','','0','3','');
INSERT INTO `d_mail_log` VALUES('83','bing3245@bing345.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395037535','','0','3','');
INSERT INTO `d_mail_log` VALUES('84','bing3245@bing345.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品设为首页稿件了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395037731','','0','3','');
INSERT INTO `d_mail_log` VALUES('85','bing3245@bing345.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">77</span>的订单将您的作品设为首页稿件了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395037828','','0','3','');
INSERT INTO `d_mail_log` VALUES('86','bing3245@bing345.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n很遗憾，订单号为：<span style=\"color:#FF1100;\">77</span>的订单没有选择您的作品,初选费用将于订单完成时候打到您的帐号。请注意查收，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395037932','','0','3','');
INSERT INTO `d_mail_log` VALUES('87','bing3245@bing345.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n很遗憾，订单号为：<span style=\"color:#FF1100;\">77</span>的订单没有选择您的作品,初选费用将于订单完成时候打到您的帐号。请注意查收，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395038062','','0','3','');
INSERT INTO `d_mail_log` VALUES('88','1274367436@qq.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n很遗憾，订单号为：<span style=\"color:#FF1100;\">77</span>的订单没有选择您的作品,初选费用将于订单完成时候打到您的帐号。请注意查收，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395038062','','0','3','');
INSERT INTO `d_mail_log` VALUES('89','1274367436@qq.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n很遗憾，订单号为：<span style=\"color:#FF1100;\">77</span>的订单没有选择您的作品,初选费用将于订单完成时候打到您的帐号。请注意查收，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395038062','','0','3','');
INSERT INTO `d_mail_log` VALUES('90','1274367436@qq.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n很遗憾，订单号为：<span style=\"color:#FF1100;\">77</span>的订单没有选择您的作品,初选费用将于订单完成时候打到您的帐号。请注意查收，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395038062','','0','3','');
INSERT INTO `d_mail_log` VALUES('91','1274367436@qq.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n很遗憾，订单号为：<span style=\"color:#FF1100;\">77</span>的订单没有选择您的作品,初选费用将于订单完成时候打到您的帐号。请注意查收，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395038062','','0','3','');
INSERT INTO `d_mail_log` VALUES('92','1274367436@qq.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n很遗憾，订单号为：<span style=\"color:#FF1100;\">77</span>的订单没有选择您的作品,初选费用将于订单完成时候打到您的帐号。请注意查收，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395038062','','0','3','');
INSERT INTO `d_mail_log` VALUES('93','1274367436@qq.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n很遗憾，订单号为：<span style=\"color:#FF1100;\">77</span>的订单没有选择您的作品,初选费用将于订单完成时候打到您的帐号。请注意查收，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395038062','','0','3','');
INSERT INTO `d_mail_log` VALUES('94','bing3245@bing345.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n很遗憾，订单号为：<span style=\"color:#FF1100;\">77</span>的订单没有选择您的作品,初选费用将于订单完成时候打到您的帐号。请注意查收，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=77\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=77</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395038062','','0','3','');
INSERT INTO `d_mail_log` VALUES('95','1274367436@qq.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n很遗憾，订单号为：<span style=\"color:#FF1100;\">78</span>的订单没有选择您的作品,初选费用将于订单完成时候打到您的帐号。请注意查收，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=78\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=78</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395038343','','0','3','');
INSERT INTO `d_mail_log` VALUES('96','bing3245@bing345.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395038972','','0','3','');
INSERT INTO `d_mail_log` VALUES('97','1274367436@qq.com','订单入围通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的作品入围了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395038972','','0','3','');
INSERT INTO `d_mail_log` VALUES('98','bing3245@bing345.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的作品设为首页稿件了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395039020','','0','3','');
INSERT INTO `d_mail_log` VALUES('99','1274367436@qq.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的作品设为首页稿件了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395039020','','0','3','');
INSERT INTO `d_mail_log` VALUES('100','bing3245@bing345.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的作品设为首页稿件了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395039490','','0','3','');
INSERT INTO `d_mail_log` VALUES('101','1274367436@qq.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的作品设为首页稿件了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395039490','','0','3','');
INSERT INTO `d_mail_log` VALUES('102','bing3245@bing345.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的作品设为首页稿件了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395039611','','0','3','');
INSERT INTO `d_mail_log` VALUES('103','bing3245@bing345.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的作品设为首页稿件了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395039664','','0','3','');
INSERT INTO `d_mail_log` VALUES('104','bing3245@bing345.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的作品设为首页稿件了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395039734','','0','3','');
INSERT INTO `d_mail_log` VALUES('105','lovebing@lovebing.net','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的作品设为首页稿件了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395039856','','0','3','');
INSERT INTO `d_mail_log` VALUES('106','','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n很遗憾，订单号为：<span style=\"color:#FF1100;\">79</span>的订单没有选择您的作品,初选费用将于订单完成时候打到您的帐号。请注意查收，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395039856','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('107','lovebing@lovebing.net','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的作品设为首页稿件了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395039927','','0','3','');
INSERT INTO `d_mail_log` VALUES('108','1274367436@qq.com','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n很遗憾，订单号为：<span style=\"color:#FF1100;\">79</span>的订单没有选择您的作品,初选费用将于订单完成时候打到您的帐号。请注意查收，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395039927','','0','3','');
INSERT INTO `d_mail_log` VALUES('109','','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的作品设为首页稿件了。请注意查看，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395040588','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('110','','订单稿件通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的作品设为首页稿件了。请注意查看，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395040684','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('111','','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的栏目设为最终稿件了。请注意查看，订单完成后佣金将返您的账户。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395040875','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('112','','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的栏目设为最终稿件了。请注意查看，订单完成后佣金将返您的账户。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395040947','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('113','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的栏目设为最终稿件了。请注意查看，订单完成后佣金将返您的账户。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395041027','','0','3','');
INSERT INTO `d_mail_log` VALUES('114','1274367436@qq.com','订单更新通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的栏目设为最终稿件了。请注意查看，订单完成后佣金将返您的账户。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395041116','','0','3','');
INSERT INTO `d_mail_log` VALUES('115','','订单完成通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395041871','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('116','','订单完成通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395042022','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('117','','订单完成通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395042039','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('118','','订单完成通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395042045','','0','2','smtp.omooo.com:25 DATA - 554 5.5.1 Error: no valid recipients\r\n');
INSERT INTO `d_mail_log` VALUES('119','970372715@qq.com','订单完成通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395042081','','0','3','');
INSERT INTO `d_mail_log` VALUES('120','970372715@qq.com','订单完成通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395042116','','0','3','');
INSERT INTO `d_mail_log` VALUES('121','970372715@qq.com','订单完成通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395042225','','0','3','');
INSERT INTO `d_mail_log` VALUES('122','970372715@qq.com','订单完成通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395042460','','0','3','');
INSERT INTO `d_mail_log` VALUES('123','970372715@qq.com','订单完成通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395042460','','0','3','');
INSERT INTO `d_mail_log` VALUES('124','1274367436@qq.com','订单完成通知','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','1395042460','','0','3','');
INSERT INTO `d_mail_log` VALUES('125','1274367436@qq.com','摩恩建站-企业网站定制专家邮件发送测试','<b>恭喜！您的站点[摩恩建站-企业网站定制专家]邮件发送设置成功！</b>','1395105748','','0','3','');

DROP TABLE IF EXISTS `d_mall`;
CREATE TABLE `d_mall` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `mycatid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `elite` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `brand` varchar(100) NOT NULL DEFAULT '',
  `price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `amount` int(10) unsigned NOT NULL DEFAULT '0',
  `tag` varchar(100) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `orders` int(10) unsigned NOT NULL DEFAULT '0',
  `sales` int(10) unsigned NOT NULL DEFAULT '0',
  `comments` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `thumb1` varchar(255) NOT NULL DEFAULT '',
  `thumb2` varchar(255) NOT NULL DEFAULT '',
  `relate_name` varchar(100) NOT NULL,
  `relate_id` varchar(255) NOT NULL,
  `relate_title` varchar(100) NOT NULL,
  `n1` varchar(100) NOT NULL,
  `n2` varchar(100) NOT NULL,
  `n3` varchar(100) NOT NULL,
  `v1` varchar(255) NOT NULL,
  `v2` varchar(255) NOT NULL,
  `v3` varchar(255) NOT NULL,
  `express_1` int(10) unsigned NOT NULL DEFAULT '0',
  `express_name_1` varchar(100) NOT NULL,
  `last_money` decimal(10,2) NOT NULL,
  `rmoney_1` decimal(10,2) unsigned NOT NULL,
  `rmoney_2` decimal(10,2) unsigned NOT NULL,
  `rmoney_3` decimal(10,2) NOT NULL,
  `smoney_1` decimal(10,2) NOT NULL,
  `smoney_2` decimal(10,2) NOT NULL,
  `groupid` smallint(4) unsigned NOT NULL DEFAULT '0',
  `company` varchar(100) NOT NULL DEFAULT '',
  `vip` smallint(2) unsigned NOT NULL DEFAULT '0',
  `validated` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `telephone` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `ali` varchar(30) NOT NULL DEFAULT '',
  `skype` varchar(30) NOT NULL DEFAULT '',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `editdate` date NOT NULL DEFAULT '0000-00-00',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  `n4` varchar(100) NOT NULL,
  `n5` varchar(100) NOT NULL,
  `v4` varchar(255) NOT NULL,
  `v5` varchar(255) NOT NULL,
  `put` varchar(255) NOT NULL DEFAULT '输入框',
  `scount` int(10) NOT NULL COMMENT '设计师接单人数控制',
  `smoney_3` decimal(10,2) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `in_select` int(10) NOT NULL DEFAULT '1' COMMENT '入围选择',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `editdate` (`editdate`,`vip`,`edittime`),
  KEY `catid` (`catid`),
  KEY `areaid` (`areaid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='商城';

INSERT INTO `d_mall` VALUES('10','27','0','1','0','0','qwwqwqqw','','0','','','1.00','22','','qwwqwqqw,,平面,Logo设计','','1','0','0','0','http://www.d.com/file/upload/201403/15/16-00-10-72-1.jpg.thumb.jpg','http://www.d.com/file/upload/201403/15/16-03-30-52-1.jpg.thumb.jpg','http://www.d.com/file/upload/201403/15/16-03-30-52-1.jpg.thumb.jpg','','','','','','','','','','2','展示网站建设-基本型','700.00','0.00','0.00','0.00','40.00','60.00','1','DESTOON B2B网站管理系统','0','0','嘉客','','','','','admin@yourdomain.com','','','','admin','1394870746','2014-03-15','1394870337','2014-03-15','127.0.0.1','','3','show.php?itemid=10','','','','','','','2','2','80.00','admin','2');
INSERT INTO `d_mall` VALUES('5','4','5','1','0','0','展示网站标准型套餐','','0','','','2980.00','1000','','展示网站标准型套餐,,建站,展示网站类型','','33','2','13','1','http://www.d.com/file/upload/201403/11/13-21-21-81-1.png.thumb.png','','','','','','','','','','','','3','展示网站建设-标准型','800.00','0.00','0.00','0.00','40.00','60.00','1','DESTOON B2B网站管理系统','0','0','嘉客','','','','','admin@yourdomain.com','','','','admin','1394515312','2014-03-11','1393982714','2014-03-05','127.0.0.1','','3','show.php?itemid=5','','','','','','','0','4','80.00','admin','1');
INSERT INTO `d_mall` VALUES('6','5','6','1','0','0','品牌网站基础型套餐','','0','','1122','3980.00','1100','','品牌网站基础型套餐,1122,建站,品牌网站建设','','10','0','0','0','http://www.d.com/file/upload/201403/06/09-25-00-91-4.jpg.thumb.jpg','','','','','','','','','','','','5','品牌网站建设-基础性','1200.00','0.00','0.00','0.00','60.00','80.00','1','DESTOON B2B网站管理系统','0','0','嘉客','','','','','admin@yourdomain.com','','','','admin','1394516041','2014-03-11','1394068991','2014-03-06','127.0.0.1','','3','show.php?itemid=6','','','','','','','111|22|22|222','0','100.00','admin','1');
INSERT INTO `d_mall` VALUES('7','4','5','1','0','0','展示网站高级型套餐','','0','','1111','3980.00','1108','','展示网站高级型套餐,1111,建站,展示网站类型','','11','2','2','1','http://www.d.com/file/upload/201403/06/16-17-12-59-1.jpg.thumb.jpg','','','','','','','','','','','','4','展示网站建设-高级型','900.00','150.00','200.00','250.00','40.00','60.00','1','DESTOON B2B网站管理系统','0','0','嘉客','','','','','admin@yourdomain.com','','','','admin','1394779131','2014-03-14','1394093810','2014-03-06','127.0.0.1','','3','show.php?itemid=7','','','','','','','','4','80.00','admin','2');
INSERT INTO `d_mall` VALUES('8','4','5','1','0','0','展示网站基本型套餐','','0','','11','2680.00','2','','展示网站基本型套餐,11,建站,展示网站类型','','43','9','9','1','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','','','','','','页面宽度','网站首页构造','网站主色调','1002px|900px|950px|990px|850px|1258px|1458px|1658px','上下型|左右型','红|橙|黄|绿|青|蓝|紫','2','展示网站建设-基本型','700.00','0.00','0.00','0.00','40.00','60.00','1','DESTOON B2B网站管理系统','0','0','嘉客','','','','','admin@yourdomain.com','','','','admin','1394514723','2014-03-11','1394180241','2014-03-07','127.0.0.1','','3','show.php?itemid=8','','','网站搭配调','','红|橙|黄|绿|青|蓝|紫','','','2','80.00','admin','1');
INSERT INTO `d_mall` VALUES('9','5','6','1','0','0','品牌网站加强型','','0','','','4680.00','965','','品牌网站加强型,,建站,品牌网站建设','','29','35','35','1','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','http://www.d.com/file/upload/201403/07/13-02-01-77-1.jpg.thumb.jpg','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','','','','','','','','','','6','品牌网站建设-标准型','1500.00','0.00','0.00','0.00','60.00','80.00','1','DESTOON B2B网站管理系统','0','0','嘉客','','','','','admin@yourdomain.com','','','','admin','1394682789','2014-03-13','1394516191','2014-03-11','127.0.0.1','','3','show.php?itemid=9','','','','','','','','3','100.00','admin','2');

DROP TABLE IF EXISTS `d_mall_cart`;
CREATE TABLE `d_mall_cart` (
  `userid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='购物车';

INSERT INTO `d_mall_cart` VALUES('11','','1395107516');
INSERT INTO `d_mall_cart` VALUES('20','','1395048767');
INSERT INTO `d_mall_cart` VALUES('18',',9-0-0-0','1395108587');
INSERT INTO `d_mall_cart` VALUES('1',',9-0-0-0','1395126626');
INSERT INTO `d_mall_cart` VALUES('12',',9-0-0-0','1395128339');

DROP TABLE IF EXISTS `d_mall_comment`;
CREATE TABLE `d_mall_comment` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `mallid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `buyer` varchar(30) NOT NULL DEFAULT '',
  `seller` varchar(30) NOT NULL DEFAULT '',
  `buyer_star` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `buyer_comment` text NOT NULL,
  `buyer_ctime` int(10) unsigned NOT NULL DEFAULT '0',
  `buyer_reply` text NOT NULL,
  `buyer_rtime` int(10) unsigned NOT NULL DEFAULT '0',
  `seller_star` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `seller_comment` text NOT NULL,
  `seller_ctime` int(10) unsigned NOT NULL DEFAULT '0',
  `seller_reply` text NOT NULL,
  `seller_rtime` int(10) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `itemid` (`itemid`),
  KEY `buyer` (`buyer`),
  KEY `seller` (`seller`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='订单评论';

INSERT INTO `d_mall_comment` VALUES('1','0','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('2','2','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('3','1','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('4','1','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('5','3','bingoo','admin','3','ssss','1394088952','','0','3','r','1394075140','sasa','1394095794');
INSERT INTO `d_mall_comment` VALUES('6','2','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('7','2','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('8','5','bing','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('9','6','bing','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('10','6','bing','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('11','5','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('12','5','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('13','5','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('14','5','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('15','6','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('16','8','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('17','7','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('18','8','bingoo','admin','3','zzz','1394442118','ss','1394442349','3','www','1394442100','谢谢','1394442254');
INSERT INTO `d_mall_comment` VALUES('19','5','bingoo','admin','3','sss','1394444450','','0','3','sas','1394444438','','0');
INSERT INTO `d_mall_comment` VALUES('20','8','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('21','0','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('22','8','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('23','8','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('24','8','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('25','7','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('26','7','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('27','5','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('28','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('29','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('30','7','bingoo','admin','3','ss','1394671025','','0','3','ki','1394670866','','0');
INSERT INTO `d_mall_comment` VALUES('31','8','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('32','8','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('33','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('34','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('35','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('36','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('37','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('38','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('39','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('40','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('41','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('42','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('43','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('44','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('45','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('46','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('47','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('48','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('49','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('50','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('51','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('52','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('53','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('54','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('55','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('56','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('57','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('58','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('59','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('60','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('61','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('62','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('63','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('64','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('65','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('66','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('67','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('68','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('69','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('70','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('71','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('72','9','bingoo','admin','3','sd','1394705077','','0','3','sd','1394705067','','0');
INSERT INTO `d_mall_comment` VALUES('73','8','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('74','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('75','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('76','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('77','6','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('78','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('79','9','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('80','9','bing234','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('81','9','bing234','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('82','9','bing234','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('83','9','bing234','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('84','9','bing234','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('85','9','bing234','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('86','9','bing234','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('87','9','bing234','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('88','9','bing234','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('89','7','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('90','7','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('91','7','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('92','7','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('93','7','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('94','7','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('95','7','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('96','7','bingoo','admin','0','','0','','0','0','','0','','0');
INSERT INTO `d_mall_comment` VALUES('97','8','bingoo','admin','0','','0','','0','0','','0','','0');

DROP TABLE IF EXISTS `d_mall_data`;
CREATE TABLE `d_mall_data` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商城内容';

INSERT INTO `d_mall_data` VALUES('1','&nbsp;ssssssssssssssssssssssssssssssssssssssssassaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
INSERT INTO `d_mall_data` VALUES('2','&nbsp;122121111111111111111111111111111');
INSERT INTO `d_mall_data` VALUES('3','&nbsp;qwqwwq');
INSERT INTO `d_mall_data` VALUES('4','&nbsp;wwwwwwwww');
INSERT INTO `d_mall_data` VALUES('5','&nbsp;sasasaaaaaaaaaaaaaaaaaa');
INSERT INTO `d_mall_data` VALUES('6','&nbsp;assssssssddddd');
INSERT INTO `d_mall_data` VALUES('7','&nbsp;sssssssssssssss');
INSERT INTO `d_mall_data` VALUES('8','&nbsp;1qxxqassssdddd');
INSERT INTO `d_mall_data` VALUES('9','&nbsp;ddddddddeeeeeeeeeeeeees');
INSERT INTO `d_mall_data` VALUES('10','&nbsp;222asaaaaaaaaaaaaaaaaaaaaaaaa');

DROP TABLE IF EXISTS `d_mall_express`;
CREATE TABLE `d_mall_express` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL,
  `express` varchar(30) NOT NULL,
  `fee_start` decimal(10,2) unsigned NOT NULL,
  `fee_step` decimal(10,2) unsigned NOT NULL,
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `items` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL,
  `last_money` decimal(10,2) NOT NULL,
  `rmoney_1` decimal(10,2) NOT NULL,
  `rmoney_2` decimal(10,2) NOT NULL,
  `rmoney_3` decimal(10,2) NOT NULL,
  `smoney_1` decimal(10,2) NOT NULL,
  `smoney_2` decimal(10,2) NOT NULL,
  `smoney_3` decimal(10,2) NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='运费模板';

INSERT INTO `d_mall_express` VALUES('2','0','0','admin','展示网站建设','展示网站建设-基本型','0.00','0.00','1393913809','0','0','s','700.00','0.00','0.00','0.00','40.00','60.00','80.00');
INSERT INTO `d_mall_express` VALUES('3','0','0','admin','展示网站建设','展示网站建设-标准型','0.00','0.00','1393913826','0','0','','800.00','0.00','0.00','0.00','40.00','60.00','80.00');
INSERT INTO `d_mall_express` VALUES('4','0','0','admin','展示网站建设','展示网站建设-高级型','0.00','0.00','1393916373','0','0','','900.00','150.00','200.00','250.00','40.00','60.00','80.00');
INSERT INTO `d_mall_express` VALUES('5','0','0','admin','品牌网站建设','品牌网站建设-基础性','0.00','0.00','1393917332','0','0','','1200.00','0.00','0.00','0.00','60.00','80.00','100.00');
INSERT INTO `d_mall_express` VALUES('6','0','0','admin','品牌网站建设','品牌网站建设-标准型','0.00','0.00','1393918045','0','0','','1500.00','0.00','0.00','0.00','60.00','80.00','100.00');
INSERT INTO `d_mall_express` VALUES('7','0','0','admin','品牌网站建设','品牌网站建设-高级型','0.00','0.00','1393918143','0','0','','1600.00','200.00','300.00','400.00','60.00','80.00','100.00');
INSERT INTO `d_mall_express` VALUES('8','0','0','admin','营销网站建设','营销网站建设-基本型','0.00','0.00','1393918178','0','0','','1800.00','0.00','0.00','0.00','150.00','200.00','250.00');
INSERT INTO `d_mall_express` VALUES('9','0','0','admin','营销网站建设','营销网站建设-标准型','0.00','0.00','1393918197','0','0','','2200.00','0.00','0.00','0.00','150.00','200.00','250.00');
INSERT INTO `d_mall_express` VALUES('10','0','0','admin','营销网站建设','营销网站建设-高级型','0.00','0.00','1393918216','0','0','','2600.00','300.00','400.00','500.00','150.00','200.00','500.00');
INSERT INTO `d_mall_express` VALUES('11','0','0','admin','Logo设计','Logo设计-最终型','0.00','0.00','1393919517','0','0','','0.00','0.00','0.00','0.00','0.00','0.00','0.00');

DROP TABLE IF EXISTS `d_mall_order`;
CREATE TABLE `d_mall_order` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mallid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `buyer` varchar(30) NOT NULL DEFAULT '',
  `seller` varchar(30) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `number` int(10) unsigned NOT NULL DEFAULT '0',
  `amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `fee_name` varchar(30) NOT NULL DEFAULT '',
  `buyer_name` varchar(30) NOT NULL DEFAULT '',
  `buyer_address` varchar(255) NOT NULL DEFAULT '',
  `buyer_postcode` varchar(10) NOT NULL DEFAULT '',
  `buyer_phone` varchar(30) NOT NULL DEFAULT '',
  `buyer_mobile` varchar(30) NOT NULL DEFAULT '',
  `buyer_receive` varchar(50) NOT NULL DEFAULT '',
  `buyer_star` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `seller_star` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `send_type` varchar(50) NOT NULL DEFAULT '',
  `send_no` varchar(50) NOT NULL DEFAULT '',
  `send_time` varchar(20) NOT NULL DEFAULT '',
  `send_days` int(10) unsigned NOT NULL DEFAULT '0',
  `trade_no` varchar(50) NOT NULL DEFAULT '',
  `add_time` smallint(6) NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `buyer_reason` mediumtext NOT NULL,
  `refund_reason` mediumtext NOT NULL,
  `note` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `buy_sort` int(10) NOT NULL COMMENT '行业',
  `pay_style` int(1) NOT NULL DEFAULT '0',
  `designer` varchar(255) NOT NULL,
  `price_last` decimal(10,2) NOT NULL,
  `in_index` varchar(255) NOT NULL,
  PRIMARY KEY (`itemid`),
  KEY `buyer` (`buyer`),
  KEY `seller` (`seller`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=utf8 COMMENT='商城订单';

INSERT INTO `d_mall_order` VALUES('79','9','bingoo','admin','品牌网站加强型','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','4680.00','1','4680.00','0.00','','112','全国上海新村路','123456','1213131','15061855227','品牌网站建设-标准型','0','0','','','','0','','0','1395038878','1395042460','','','','','7','0','0','撒撒撒','0.00','撒撒撒<br/>叫我设计师');
INSERT INTO `d_mall_order` VALUES('80','9','bing234','admin','品牌网站加强型','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','4680.00','1','4680.00','0.00','','1122','上海上海新村路e1','234000','15061855227','15062185522','品牌网站建设-标准型','0','0','','','','0','','0','1395048743','1395048743','','','','','0','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('81','9','bing234','admin','品牌网站加强型','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','4680.00','1','4680.00','0.00','','1122','上海上海新村路e1','234000','15061855227','15062185522','品牌网站建设-标准型','0','0','','','','0','','0','1395048754','1395048754','','','','','0','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('82','9','bing234','admin','品牌网站加强型','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','4680.00','1','4680.00','0.00','','1122','上海上海新村路e1','234000','15061855227','15062185522','品牌网站建设-标准型','0','0','','','','0','','0','1395048759','1395048759','','','','','4','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('83','9','bing234','admin','品牌网站加强型','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','4680.00','1','4680.00','0.00','','1122','上海上海新村路e1','234000','15061855227','15062185522','品牌网站建设-标准型','0','0','','','','0','','0','1395048764','1395048764','','','','','0','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('84','9','bing234','admin','品牌网站加强型','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','4680.00','1','4680.00','0.00','','1122','上海上海新村路e1','234000','15061855227','15062185522','品牌网站建设-标准型','0','0','','','','0','','0','1395048765','1395048765','','','','','3','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('85','9','bing234','admin','品牌网站加强型','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','4680.00','1','4680.00','0.00','','1122','上海上海新村路e1','234000','15061855227','15062185522','品牌网站建设-标准型','0','0','','','','0','','0','1395048765','1395048765','','','','','0','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('86','9','bing234','admin','品牌网站加强型','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','4680.00','1','4680.00','0.00','','1122','上海上海新村路e1','234000','15061855227','15062185522','品牌网站建设-标准型','0','0','','','','0','','0','1395048766','1395048766','','','','','4','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('87','9','bing234','admin','品牌网站加强型','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','4680.00','1','4680.00','0.00','','1122','上海上海新村路e1','234000','15061855227','15062185522','品牌网站建设-标准型','0','0','','','','0','','0','1395048766','1395048766','','','','','1','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('88','9','bing234','admin','品牌网站加强型','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','4680.00','1','4680.00','0.00','','1122','上海上海新村路e1','234000','15061855227','15062185522','品牌网站建设-标准型','0','0','','','','0','','0','1395048767','1395048767','','','','','6','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('89','7','bingoo','admin','展示网站高级型套餐','http://www.d.com/file/upload/201403/06/16-17-12-59-1.jpg.thumb.jpg','3980.00','1','3980.00','0.00','','112','全国上海新村路','123456','1213131','15061855227','展示网站建设-高级型','0','0','','','','0','','0','1395048797','1395048797','','','','','2','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('90','7','bingoo','admin','展示网站高级型套餐','http://www.d.com/file/upload/201403/06/16-17-12-59-1.jpg.thumb.jpg','3980.00','1','3980.00','0.00','','112','全国上海新村路','123456','1213131','15061855227','展示网站建设-高级型','0','0','','','','0','','0','1395048798','1395048798','','','','','0','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('91','7','bingoo','admin','展示网站高级型套餐','http://www.d.com/file/upload/201403/06/16-17-12-59-1.jpg.thumb.jpg','3980.00','1','3980.00','0.00','','112','全国上海新村路','123456','1213131','15061855227','展示网站建设-高级型','0','0','','','','0','','0','1395048799','1395048799','','','','','5','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('92','7','bingoo','admin','展示网站高级型套餐','http://www.d.com/file/upload/201403/06/16-17-12-59-1.jpg.thumb.jpg','3980.00','1','3980.00','0.00','','112','全国上海新村路','123456','1213131','15061855227','展示网站建设-高级型','0','0','','','','0','','0','1395048799','1395048799','','','','','0','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('93','7','bingoo','admin','展示网站高级型套餐','http://www.d.com/file/upload/201403/06/16-17-12-59-1.jpg.thumb.jpg','3980.00','1','3980.00','0.00','','112','全国上海新村路','123456','1213131','15061855227','展示网站建设-高级型','0','0','','','','0','','0','1395048800','1395048800','','','','','4','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('94','7','bingoo','admin','展示网站高级型套餐','http://www.d.com/file/upload/201403/06/16-17-12-59-1.jpg.thumb.jpg','3980.00','1','3980.00','0.00','','112','全国上海新村路','123456','1213131','15061855227','展示网站建设-高级型','0','0','','','','0','','0','1395048801','1395048801','','','','','0','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('95','7','bingoo','admin','展示网站高级型套餐','http://www.d.com/file/upload/201403/06/16-17-12-59-1.jpg.thumb.jpg','3980.00','1','3980.00','0.00','','112','全国上海新村路','123456','1213131','15061855227','展示网站建设-高级型','0','0','','','','0','','0','1395048802','1395048802','','','','','5','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('96','7','bingoo','admin','展示网站高级型套餐','http://www.d.com/file/upload/201403/06/16-17-12-59-1.jpg.thumb.jpg','3980.00','1','3980.00','0.00','','112','全国上海新村路','123456','1213131','15061855227','展示网站建设-高级型','0','0','','','','0','','0','1395048802','1395048802','','','','','4','0','0','叫我设计师','0.00','');
INSERT INTO `d_mall_order` VALUES('97','8','bingoo','admin','展示网站基本型套餐','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','2680.00','1','2680.00','0.00','','bingoo','北京1222222222222222','123456','1213131','18661052393','展示网建站设-基本型','0','0','','','','0','','0','1395107516','1395107516','','','','页面宽度:1002px 网站首页构造:上下型 网站主色调:红 ','5','0','0','叫我设计师','0.00','');

DROP TABLE IF EXISTS `d_mall_order_1`;
CREATE TABLE `d_mall_order_1` (
  `rid` int(10) NOT NULL COMMENT '订单号',
  `company_id` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '设计师ID',
  `designer` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '设计师姓名',
  `upload` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '附件1',
  `addtime` int(10) NOT NULL,
  `status` int(2) NOT NULL COMMENT '状态',
  `note` varchar(255) COLLATE utf8_bin NOT NULL,
  `level` int(1) NOT NULL,
  `checked` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `sell_note` varchar(255) COLLATE utf8_bin NOT NULL,
  `mallid` varchar(255) COLLATE utf8_bin NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `last` int(2) NOT NULL DEFAULT '0' COMMENT '最终',
  `updatetime` int(15) NOT NULL,
  `pwd` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=221 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `d_mall_order_1` VALUES('79','bingz','撒撒撒','http://www.d.com/file/upload/201403/17/14-09-43-86-13.jpg.thumb.jpg','1395038897','1','','1','1','','9','210','1','0','');
INSERT INTO `d_mall_order_1` VALUES('79','bingz','撒撒撒','http://www.d.com/file/upload/201403/10/09-03-53-29-13.gif.thumb.gif','1395038903','0','','1','1','','9','211','0','0','');
INSERT INTO `d_mall_order_1` VALUES('79','bingz','撒撒撒','http://www.d.com/file/upload/201403/17/14-09-51-93-13.png.thumb.png','1395038907','0','','1','1','','9','212','0','0','');
INSERT INTO `d_mall_order_1` VALUES('79','bing345','叫我设计师','http://www.d.com/file/upload/201403/17/13-04-15-20-12.png.thumb.png','1395038920','0','','1','1','','9','213','0','0','');
INSERT INTO `d_mall_order_1` VALUES('79','bing345','叫我设计师','http://www.d.com/file/upload/201403/17/11-38-48-47-12.jpg.thumb.jpg','1395038926','0','','1','1','','9','214','0','0','');
INSERT INTO `d_mall_order_1` VALUES('79','bing345','叫我设计师','http://www.d.com/file/upload/201403/15/16-07-24-98-12.jpg.thumb.jpg','1395038932','0','','1','1','','9','215','0','0','');
INSERT INTO `d_mall_order_1` VALUES('79','bingz','撒撒撒','http://www.d.com/file/upload/201403/17/15-11-24-64-13.jpg.thumb.jpg','1395040306','0','sss','2','1','','9','216','1','0','');
INSERT INTO `d_mall_order_1` VALUES('79','bingz','撒撒撒','http://www.d.com/file/upload/201403/17/15-11-28-43-13.jpg.thumb.jpg','1395040306','0','assa','2','1','','9','217','1','0','');
INSERT INTO `d_mall_order_1` VALUES('79','bingz','撒撒撒','http://www.d.com/file/upload/201403/17/15-11-44-93-13.jpg.thumb.jpg','1395040306','0','asas','2','1','','9','218','1','0','');
INSERT INTO `d_mall_order_1` VALUES('88','bing345','叫我设计师','http://www.d.com/file/upload/201403/18/15-40-52-39-12.docx','1395128453','0','www','3','1','','9','219','0','0','ybshkk');
INSERT INTO `d_mall_order_1` VALUES('88','bing345','叫我设计师','http://www.d.com/file/upload/201403/18/15-46-25-91-12.docx','1395128798','0','cc','3','1','','9','220','0','0','vm3aj1');

DROP TABLE IF EXISTS `d_mall_order_website`;
CREATE TABLE `d_mall_order_website` (
  `itemid` int(10) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `adminurl` varchar(255) COLLATE utf8_bin NOT NULL,
  `note` text COLLATE utf8_bin
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `d_mall_order_website` VALUES('74','','','','','');
INSERT INTO `d_mall_order_website` VALUES('96','1','','','adminurl','');

DROP TABLE IF EXISTS `d_mall_stat`;
CREATE TABLE `d_mall_stat` (
  `mallid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `seller` varchar(30) NOT NULL DEFAULT '',
  `scomment` int(10) unsigned NOT NULL DEFAULT '0',
  `s1` int(10) unsigned NOT NULL DEFAULT '0',
  `s2` int(10) unsigned NOT NULL DEFAULT '0',
  `s3` int(10) unsigned NOT NULL DEFAULT '0',
  `buyer` varchar(30) NOT NULL DEFAULT '',
  `bcomment` int(10) unsigned NOT NULL DEFAULT '0',
  `b1` int(10) unsigned NOT NULL DEFAULT '0',
  `b2` int(10) unsigned NOT NULL DEFAULT '0',
  `b3` int(10) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `mallid` (`mallid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='评分统计';

INSERT INTO `d_mall_stat` VALUES('0','admin','0','0','0','0','bingoo','0','0','0','0');
INSERT INTO `d_mall_stat` VALUES('2','admin','0','0','0','0','bingoo','0','0','0','0');
INSERT INTO `d_mall_stat` VALUES('1','admin','0','0','0','0','bingoo','0','0','0','0');
INSERT INTO `d_mall_stat` VALUES('3','admin','1','0','0','1','bingoo','1','0','0','1');
INSERT INTO `d_mall_stat` VALUES('5','admin','1','0','0','1','bing','1','0','0','1');
INSERT INTO `d_mall_stat` VALUES('6','admin','0','0','0','0','bing','0','0','0','0');
INSERT INTO `d_mall_stat` VALUES('8','admin','1','0','0','1','bingoo','1','0','0','1');
INSERT INTO `d_mall_stat` VALUES('7','admin','1','0','0','1','bingoo','1','0','0','1');
INSERT INTO `d_mall_stat` VALUES('9','admin','1','0','0','1','bingoo','1','0','0','1');

DROP TABLE IF EXISTS `d_member`;
CREATE TABLE `d_member` (
  `userid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `passport` varchar(30) NOT NULL DEFAULT '',
  `company` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `payword` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `message` smallint(6) unsigned NOT NULL DEFAULT '0',
  `chat` smallint(6) unsigned NOT NULL DEFAULT '0',
  `sound` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `online` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `avatar` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gender` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `ali` varchar(30) NOT NULL DEFAULT '',
  `skype` varchar(30) NOT NULL DEFAULT '',
  `department` varchar(30) NOT NULL DEFAULT '',
  `career` varchar(30) NOT NULL DEFAULT '',
  `admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `role` varchar(255) NOT NULL DEFAULT '',
  `aid` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` smallint(4) unsigned NOT NULL DEFAULT '4',
  `regid` smallint(4) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `sms` int(10) NOT NULL DEFAULT '0',
  `credit` int(10) NOT NULL DEFAULT '0',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `locking` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `bank` varchar(30) NOT NULL DEFAULT '',
  `account` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `regip` varchar(50) NOT NULL DEFAULT '',
  `regtime` int(10) unsigned NOT NULL DEFAULT '0',
  `loginip` varchar(50) NOT NULL DEFAULT '',
  `logintime` int(10) unsigned NOT NULL DEFAULT '0',
  `logintimes` int(10) unsigned NOT NULL DEFAULT '1',
  `black` varchar(255) NOT NULL DEFAULT '',
  `send` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `auth` varchar(32) NOT NULL DEFAULT '',
  `authvalue` varchar(100) NOT NULL DEFAULT '',
  `authtime` int(10) unsigned NOT NULL DEFAULT '0',
  `vemail` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `vmobile` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `vtruename` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `vbank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `vcompany` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `vtrade` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `trade` varchar(50) NOT NULL DEFAULT '',
  `support` varchar(50) NOT NULL DEFAULT '',
  `inviter` varchar(30) NOT NULL DEFAULT '',
  `kf` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `passport` (`passport`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='会员';

INSERT INTO `d_member` VALUES('1','admin','admin','DESTOON B2B网站管理系统','0c909a141f1f2c0a1cb602b0b2d7d050','0c909a141f1f2c0a1cb602b0b2d7d050','mail@yourdomain.com','17','0','0','0','0','1','嘉客','','admin@yourdomain.com','','','','','','1','','0','1','0','1','0','44','18980.00','0.00','','','1395043077','127.0.0.1','1393836401','127.0.0.1','1395128807','81','','1','','','0','0','0','0','0','0','0','','bing123','','4');
INSERT INTO `d_member` VALUES('7','sasasa','sasasa','sasasa','a762a3a63dcccb5616a4b57914d28ed5','a762a3a63dcccb5616a4b57914d28ed5','9507468@qq.com','0','2','1','1','0','1','aaasa','','','','','','','','0','','0','7','6','1','3','25','13120.00','0.00','','','1395043083','127.0.0.1','1393898690','127.0.0.1','1394869670','9','','1','','','0','0','0','0','0','0','0','','bing123','bing345','4');
INSERT INTO `d_member` VALUES('11','bingoo','bingoo','bingoo','a762a3a63dcccb5616a4b57914d28ed5','a762a3a63dcccb5616a4b57914d28ed5','81240341@qq.com','0','0','1','1','0','1','bingoo','18661052393','','','','','','','2','客服','0','5','5','1','2','30','94610.00','28710.00','','','0','127.0.0.1','1393906297','127.0.0.1','1395048795','54','','1','836569','18661052393','1395043149','0','0','0','0','0','0','','bing123','','4');
INSERT INTO `d_member` VALUES('12','bing345','bing345','叫我设计师','a762a3a63dcccb5616a4b57914d28ed5','a762a3a63dcccb5616a4b57914d28ed5','970372715@qq.com','5','0','1','1','0','1','1122','15061855227','','1274367436','','','','','0','','0','8','6','4','3','39','10320.00','0.00','','','1395041274','127.0.0.1','1394000384','127.0.0.1','1395128771','34','','1','22E47E8EBB8FCED6141DEE265E9EE0AB','1274367436@qq.com','1394083328','0','0','0','0','1','0','','admin','','4');
INSERT INTO `d_member` VALUES('13','bingz','bingz','撒撒撒','a762a3a63dcccb5616a4b57914d28ed5','a762a3a63dcccb5616a4b57914d28ed5','1274367436@qq.com','0','0','1','1','0','1','bingz1','15061855227','','1274367436','','','','','0','','0','7','6','7','3','32','11500.00','0.00','','','1395043061','127.0.0.1','1394003286','127.0.0.1','1395032962','4','','1','','','0','0','0','0','0','1','0','','bing123','','4');
INSERT INTO `d_member` VALUES('18','bing123','bing123','bing','a762a3a63dcccb5616a4b57914d28ed5','a762a3a63dcccb5616a4b57914d28ed5','bing123@qq.com','0','0','1','1','0','1','bing','','','','','','','','2','客服','0','1','5','2','3','22','0.00','0.00','','','1395043071','127.0.0.1','1394758547','127.0.0.1','1395108448','16','','1','','','0','0','0','0','0','0','0','','bing345','admin','4');
INSERT INTO `d_member` VALUES('20','bing234','bing234','1122','a762a3a63dcccb5616a4b57914d28ed5','a762a3a63dcccb5616a4b57914d28ed5','113sasas2ds@qq.com','1','0','1','1','0','1','1122','','','','','','','','0','','0','5','5','2','5','20','0.00','0.00','','','1395049791','127.0.0.1','1395048707','127.0.0.1','1395048728','2','','1','','','0','0','0','0','0','0','0','','admin','bing123','');

DROP TABLE IF EXISTS `d_member_group`;
CREATE TABLE `d_member_group` (
  `groupid` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `groupname` varchar(50) NOT NULL DEFAULT '',
  `vip` smallint(2) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='会员组';

INSERT INTO `d_member_group` VALUES('1','管理员','0','1');
INSERT INTO `d_member_group` VALUES('2','禁止访问','0','2');
INSERT INTO `d_member_group` VALUES('3','游客','0','3');
INSERT INTO `d_member_group` VALUES('4','待审核会员','0','4');
INSERT INTO `d_member_group` VALUES('5','客户','0','5');
INSERT INTO `d_member_group` VALUES('6','设计师','0','6');
INSERT INTO `d_member_group` VALUES('7','初级设计师','1','7');
INSERT INTO `d_member_group` VALUES('8','中级设计师','2','8');
INSERT INTO `d_member_group` VALUES('9','高级设计师','3','9');

DROP TABLE IF EXISTS `d_message`;
CREATE TABLE `d_message` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `typeid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `fromuser` varchar(30) NOT NULL DEFAULT '',
  `touser` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `isread` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `issend` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `feedback` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `groupids` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `touser` (`touser`)
) ENGINE=MyISAM AUTO_INCREMENT=514 DEFAULT CHARSET=utf8 COMMENT='站内信件';

INSERT INTO `d_message` VALUES('1','欢迎加入摩恩建站-企业网站定制专家','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的asas</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>asas<br/>\r\n<strong>密码：</strong>11223311 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','','asas','1393837447','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('2','欢迎加入摩恩建站-企业网站定制专家','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingo</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>bingo<br/>\r\n<strong>密码：</strong>aaa111 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','','bingo','1393838308','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('4','欢迎加入摩恩建站-企业网站定制专家','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的wedwq</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>wedwq<br/>\r\n<strong>密码：</strong>qqqqqq 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','','wedwq','1393896118','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('5','欢迎加入摩恩建站-企业网站定制专家','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的saaas</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>saaas<br/>\r\n<strong>密码：</strong>qqqqqqqq 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','','saaas','1393898021','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('7','欢迎加入摩恩建站-企业网站定制专家','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的dsds</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>dsds<br/>\r\n<strong>密码：</strong>wwwwww 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','','dsds','1393899130','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('8','欢迎加入摩恩建站-企业网站定制专家','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的sawqq</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>sawqq<br/>\r\n<strong>密码：</strong>qqqqqq 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','','sawqq','1393900232','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('40','asssss','','0','<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>\r\n<p>sad擦擦擦三是猜猜猜猜猜猜猜猜猜<br />\r\n&nbsp;</p>','bingoo','bingoo','1394095448','127.0.0.1','0','0','0','2','');
INSERT INTO `d_message` VALUES('20','我对您发布的“ewe”很感兴趣','','2','产品信息：<a href=\"http://www.d.com/buy/show.php?itemid=1\"><strong>ewe</strong></a><br/>sss请问您对此产品是长期有需求吗？<br/>公司名：bingoo<br/>联系人：bingoo<br/>联系电话：15061855522<br/>电子邮件：bingoo@q.c<br/>联系QQ： <a href=\"http://wpa.qq.com/msgrd?v=3&uin=111212&site=qq&menu=yes\" target=\"_blank\" rel=\"nofollow\"><img src=\"http://wpa.qq.com/pa?p=1:111212:4\" title=\"点击QQ交谈/留言\" alt=\"\" align=\"absmiddle\" onerror=\"this.src=DTPath+\'file/image/qq-off.gif\';\" onload=\"if(this.width==77){this.src=DTPath+\'file/image/qq-off.gif\';}else if(this.width==23){this.src=DTPath+\'file/image/qq.gif\';}\"/></a> 111212<hr size=\"1\"/>我希望在 2014-03-11 之前回复','bingoo','admin','1393997142','127.0.0.1','0','0','0','2','');
INSERT INTO `d_message` VALUES('23','欢迎加入摩恩建站-企业网站定制专家','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的211221</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>211221<br/>\r\n<strong>密码：</strong>111111111111 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','','211221','1394004797','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('24','欢迎加入摩恩建站-企业网站定制专家','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的sasas</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>sasas<br/>\r\n<strong>密码：</strong>sssssss 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','','sasas','1394005559','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('25','欢迎加入摩恩建站-企业网站定制专家','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的ssasaaad</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>ssasaaad<br/>\r\n<strong>密码：</strong>aaaaaa 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','','ssasaaad','1394006170','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('26','欢迎加入摩恩建站-企业网站定制专家','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的ssssssesss</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>ssssssesss<br/>\r\n<strong>密码：</strong>sssssssssss 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','','ssssssesss','1394007956','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('495','欢迎加入摩恩建站-企业网站定制专家','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing234</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>bing234<br/>\r\n<strong>密码：</strong>bingbing 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','','bing234','1395048707','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('438','站内交易提醒，您有一笔交易需要发货(T77)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要发货(T77)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n买家 <a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 支付了您的订单<br/><a href=\"http://www.d.com/member/trade.php?itemid=77\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395027365','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('486','订单更新通知','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的栏目设为最终稿件了。请注意查看，订单完成后佣金将返您的账户。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','','bingz','1395041027','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('487','订单更新通知','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n恭喜你！您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单将您的栏目设为最终稿件了。请注意查看，订单完成后佣金将返您的账户。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','','bingz','1395041116','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('342','站内交易提醒，您有一笔佣金到账(T34)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔佣金到账(T34)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, sasasa</strong>：<br/>\r\n买家 <a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-13</span> 完成了订单，请查看您的佣金<br/><a href=\"http://www.d.com/member/record.php\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','sasasa','1394692707','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('485','站内交易提醒，您有一笔交易已经有设计师提交作品了(T79)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易已经有设计师提交作品了(T79)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, bingoo</strong>：<br/>\r\n卖家 <a href=\"http://www.d.com/com/bingz/\" class=\"t\">bingz</a> 于 <span class=\"f_gray\">2014-03-17</span> 更新了您的订单<br/><a href=\"http://www.d.com/member/trade.php?action=order&itemid=79\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','bingoo','1395040306','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('452','站内交易提醒，您有一笔交易需要确认(T78)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T78)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=9\" target=\"_blank\" class=\"t\"><strong>品牌网站加强型</strong></a><br/>订单编号：<span class=\"f_red\">T78</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">4680元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=78\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395036522','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('453','站内交易提醒，您有一笔交易需要发货(T78)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要发货(T78)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n买家 <a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 支付了您的订单<br/><a href=\"http://www.d.com/member/trade.php?itemid=78\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395036555','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('496','站内交易提醒，您有一笔交易需要确认(T80)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T80)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bing234/\" class=\"t\">bing234</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=9\" target=\"_blank\" class=\"t\"><strong>品牌网站加强型</strong></a><br/>订单编号：<span class=\"f_red\">T80</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">4680元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=80\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048743','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('434','订单更新通知','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','','bingoo','1395025829','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('435','订单更新通知','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出首页了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','','bingoo','1395026274','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('436','订单更新通知','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;订单更新通知</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingoo</strong>：<br/>\r\n您好！您的订单号为：<span style=\"color:#FF1100;\">75</span>的订单已有设计师设计出栏目了,请注意查看，请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=75\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=75</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','','bingoo','1395026296','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('437','站内交易提醒，您有一笔交易需要确认(T77)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T77)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=6\" target=\"_blank\" class=\"t\"><strong>品牌网站基础型套餐</strong></a><br/>订单编号：<span class=\"f_red\">T77</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">3980元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=77\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395026877','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('244','站内交易提醒，您有一笔佣金到账(T33)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, </strong>：<br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','asas','1394688249','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('247','站内交易提醒，您有一笔佣金到账(T33)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, </strong>：<br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','asas','1394688320','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('471','站内交易提醒，您有一笔交易需要确认(T79)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T79)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=9\" target=\"_blank\" class=\"t\"><strong>品牌网站加强型</strong></a><br/>订单编号：<span class=\"f_red\">T79</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">4680元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=79\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395038878','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('472','站内交易提醒，您有一笔交易需要发货(T79)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要发货(T79)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n买家 <a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 支付了您的订单<br/><a href=\"http://www.d.com/member/trade.php?itemid=79\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395038885','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('420','站内交易提醒，您有一笔交易需要发货(T75)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要发货(T75)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n买家 <a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-15</span> 支付了您的订单<br/><a href=\"http://www.d.com/member/trade.php?itemid=75\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1394869537','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('339','站内交易提醒，您有一笔佣金到账(T34)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔佣金到账(T34)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, sasasa</strong>：<br/>\r\n买家 <a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-13</span> 完成了订单，请查看您的佣金<br/><a href=\"http://www.d.com/member/record.php\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','sasasa','1394692707','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('419','站内交易提醒，您有一笔交易需要确认(T75)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T75)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-15</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=9\" target=\"_blank\" class=\"t\"><strong>品牌网站加强型</strong></a><br/>订单编号：<span class=\"f_red\">T75</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">4680元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=75\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1394869507','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('488','订单完成通知','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','','bing345','1395042081','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('489','订单完成通知','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','','bing345','1395042116','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('396','欢迎加入摩恩建站-企业网站定制专家','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#62B81B;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;欢迎加入摩恩建站-企业网站定制专家</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing123</strong>：<br/>\r\n您好！<br/>\r\n欢迎您加入摩恩建站-企业网站定制专家，您的会员帐号为：<br/>\r\n<strong>户名：</strong>bing123<br/>\r\n<strong>密码：</strong>bingbing 请您妥善保存，勿告诉他人。<br/>\r\n本站网址：<a href=\"http://www.d.com/\" target=\"_blank\">http://www.d.com/</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/>如果此邮件不是您请求的，请忽略并删除！</td>\r\n</tr>\r\n</table>','','bing123','1394758547','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('490','订单完成通知','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','','bing345','1395042225','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('491','订单完成通知','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','','bing345','1395042460','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('492','订单完成通知','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bing345</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','','bing345','1395042460','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('493','订单完成通知','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;\">\r\n<strong>尊敬的bingz</strong>：<br/>\r\n您好！订单号为：<span style=\"color:#FF1100;\">79</span>的订单已完成。请注意查收您的佣金，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>\r\n<a href=\"http://www.d.com/member/trade.php?itemid=79\" target=\"_blank\">http://www.d.com/member/trade.php?itemid=79</a><br/>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;\">请注意：此邮件系 <a href=\"http://www.d.com/\" target=\"_blank\" style=\"color:#FFFFFF;\">摩恩建站-企业网站定制专家</a> 自动发送，请勿直接回复。<br/></td>\r\n</tr>\r\n</table>\r\n','','bingz','1395042460','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('494','站内交易提醒，您有一笔交易已经成功(T79)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易已经成功(T79)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n买家 <a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 确认收货，交易完成<br/><a href=\"http://www.d.com/member/trade.php?itemid=79\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395042460','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('497','站内交易提醒，您有一笔交易需要确认(T81)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T81)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bing234/\" class=\"t\">bing234</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=9\" target=\"_blank\" class=\"t\"><strong>品牌网站加强型</strong></a><br/>订单编号：<span class=\"f_red\">T81</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">4680元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=81\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048754','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('498','站内交易提醒，您有一笔交易需要确认(T82)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T82)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bing234/\" class=\"t\">bing234</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=9\" target=\"_blank\" class=\"t\"><strong>品牌网站加强型</strong></a><br/>订单编号：<span class=\"f_red\">T82</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">4680元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=82\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048759','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('499','站内交易提醒，您有一笔交易需要确认(T83)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T83)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bing234/\" class=\"t\">bing234</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=9\" target=\"_blank\" class=\"t\"><strong>品牌网站加强型</strong></a><br/>订单编号：<span class=\"f_red\">T83</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">4680元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=83\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048764','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('500','站内交易提醒，您有一笔交易需要确认(T84)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T84)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bing234/\" class=\"t\">bing234</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=9\" target=\"_blank\" class=\"t\"><strong>品牌网站加强型</strong></a><br/>订单编号：<span class=\"f_red\">T84</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">4680元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=84\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048765','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('501','站内交易提醒，您有一笔交易需要确认(T85)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T85)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bing234/\" class=\"t\">bing234</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=9\" target=\"_blank\" class=\"t\"><strong>品牌网站加强型</strong></a><br/>订单编号：<span class=\"f_red\">T85</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">4680元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=85\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048765','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('502','站内交易提醒，您有一笔交易需要确认(T86)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T86)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bing234/\" class=\"t\">bing234</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=9\" target=\"_blank\" class=\"t\"><strong>品牌网站加强型</strong></a><br/>订单编号：<span class=\"f_red\">T86</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">4680元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=86\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048766','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('503','站内交易提醒，您有一笔交易需要确认(T87)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T87)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bing234/\" class=\"t\">bing234</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=9\" target=\"_blank\" class=\"t\"><strong>品牌网站加强型</strong></a><br/>订单编号：<span class=\"f_red\">T87</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">4680元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=87\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048766','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('504','站内交易提醒，您有一笔交易需要确认(T88)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T88)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bing234/\" class=\"t\">bing234</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=9\" target=\"_blank\" class=\"t\"><strong>品牌网站加强型</strong></a><br/>订单编号：<span class=\"f_red\">T88</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">4680元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=88\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048767','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('505','站内交易提醒，您有一笔交易需要确认(T89)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T89)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=7\" target=\"_blank\" class=\"t\"><strong>展示网站高级型套餐</strong></a><br/>订单编号：<span class=\"f_red\">T89</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">3980元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=89\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048797','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('506','站内交易提醒，您有一笔交易需要确认(T90)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T90)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=7\" target=\"_blank\" class=\"t\"><strong>展示网站高级型套餐</strong></a><br/>订单编号：<span class=\"f_red\">T90</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">3980元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=90\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048798','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('507','站内交易提醒，您有一笔交易需要确认(T91)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T91)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=7\" target=\"_blank\" class=\"t\"><strong>展示网站高级型套餐</strong></a><br/>订单编号：<span class=\"f_red\">T91</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">3980元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=91\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048799','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('508','站内交易提醒，您有一笔交易需要确认(T92)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T92)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=7\" target=\"_blank\" class=\"t\"><strong>展示网站高级型套餐</strong></a><br/>订单编号：<span class=\"f_red\">T92</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">3980元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=92\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048799','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('509','站内交易提醒，您有一笔交易需要确认(T93)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T93)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=7\" target=\"_blank\" class=\"t\"><strong>展示网站高级型套餐</strong></a><br/>订单编号：<span class=\"f_red\">T93</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">3980元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=93\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048800','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('510','站内交易提醒，您有一笔交易需要确认(T94)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T94)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=7\" target=\"_blank\" class=\"t\"><strong>展示网站高级型套餐</strong></a><br/>订单编号：<span class=\"f_red\">T94</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">3980元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=94\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048801','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('511','站内交易提醒，您有一笔交易需要确认(T95)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T95)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=7\" target=\"_blank\" class=\"t\"><strong>展示网站高级型套餐</strong></a><br/>订单编号：<span class=\"f_red\">T95</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">3980元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=95\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048802','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('512','站内交易提醒，您有一笔交易需要确认(T96)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T96)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-17</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=7\" target=\"_blank\" class=\"t\"><strong>展示网站高级型套餐</strong></a><br/>订单编号：<span class=\"f_red\">T96</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">3980元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=96\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395048802','127.0.0.1','0','0','0','3','');
INSERT INTO `d_message` VALUES('513','站内交易提醒，您有一笔交易需要确认(T97)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔交易需要确认(T97)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, admin</strong>：<br/>\r\n<a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-18</span> 向您订购了：<br/><a href=\"http://www.d.com/mall/show.php?itemid=8\" target=\"_blank\" class=\"t\"><strong>展示网站基本型套餐</strong></a><br/>订单编号：<span class=\"f_red\">T97</span> &nbsp;订单金额为：<span class=\"f_blue f_b\">2680元</span><br/><a href=\"http://www.d.com/member/trade.php?itemid=97\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','admin','1395107516','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('391','站内交易提醒，您有一笔佣金到账(T72)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔佣金到账(T72)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, sasasa</strong>：<br/>\r\n买家 <a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-13</span> 完成了订单，请查看您的佣金<br/><a href=\"http://www.d.com/member/record.php\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','sasasa','1394705006','127.0.0.1','1','0','0','3','');
INSERT INTO `d_message` VALUES('394','站内交易提醒，您有一笔佣金到账(T72)','','4','<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"margin:10px;font-family:Verdana,Arial;\">\r\n<tr>\r\n<td style=\"background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;\">&nbsp;&nbsp;站内交易提醒，您有一笔佣金到账(T72)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;\">\r\n<strong>Hi, sasasa</strong>：<br/>\r\n买家 <a href=\"http://www.d.com/com/bingoo/\" class=\"t\">bingoo</a> 于 <span class=\"f_gray\">2014-03-13</span> 完成了订单，请查看您的佣金<br/><a href=\"http://www.d.com/member/record.php\" class=\"t\" target=\"_blank\">&raquo; 请点这里立即处理或查看详情</a></td>\r\n</tr>\r\n<tr>\r\n<td style=\"background:#555555;padding:3px;font-size:12px;color:#FFFFFF;\">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>\r\n</tr>\r\n</table>','','sasasa','1394705006','127.0.0.1','1','0','0','3','');

DROP TABLE IF EXISTS `d_module`;
CREATE TABLE `d_module` (
  `moduleid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(20) NOT NULL DEFAULT '',
  `moduledir` varchar(20) NOT NULL DEFAULT '',
  `domain` varchar(255) NOT NULL DEFAULT '',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ismenu` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isblank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `logo` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `disabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `installtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`moduleid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='模型';

INSERT INTO `d_module` VALUES('1','destoon','核心','','http://demo.destoon.com/v5.0/','http://www.d.com/','','1','0','0','0','0','0','1393836401');
INSERT INTO `d_module` VALUES('2','member','会员','member','','http://www.d.com/member/','','2','0','0','0','0','0','1393836401');
INSERT INTO `d_module` VALUES('3','extend','扩展','extend','','http://www.d.com/extend/','','0','0','0','0','0','0','1393836401');
INSERT INTO `d_module` VALUES('4','company','设计师','company','','http://www.d.com/company/','','7','0','1','0','0','0','1393836401');
INSERT INTO `d_module` VALUES('22','info','招商','invest','','http://www.d.com/invest/','','12','0','1','0','0','1','1393836401');
INSERT INTO `d_module` VALUES('5','sell','供应','sell','','http://www.d.com/sell/','','5','0','1','0','0','1','1393836401');
INSERT INTO `d_module` VALUES('6','buy','求购','buy','','http://www.d.com/buy/','','6','0','1','0','0','0','1393836401');
INSERT INTO `d_module` VALUES('7','quote','行情','quote','','http://www.d.com/quote/','','9','0','1','0','0','1','1393836401');
INSERT INTO `d_module` VALUES('8','exhibit','展会','exhibit','','http://www.d.com/exhibit/','','10','0','1','0','0','1','1393836401');
INSERT INTO `d_module` VALUES('21','article','资讯','news','','http://www.d.com/news/','','11','0','0','0','0','0','1393836401');
INSERT INTO `d_module` VALUES('9','job','人才','job','','http://www.d.com/job/','','14','0','1','0','0','1','1393836401');
INSERT INTO `d_module` VALUES('13','brand','品牌','brand','','http://www.d.com/brand/','','13','0','1','0','0','1','1393836401');
INSERT INTO `d_module` VALUES('10','know','知道','know','','http://www.d.com/know/','','15','0','1','0','0','1','1393836401');
INSERT INTO `d_module` VALUES('11','special','专题','special','','http://www.d.com/special/','','16','0','1','0','0','1','1393836401');
INSERT INTO `d_module` VALUES('12','photo','图库','photo','','http://www.d.com/photo/','','17','0','1','0','0','1','1393836401');
INSERT INTO `d_module` VALUES('14','video','视频','video','','http://www.d.com/video/','','18','0','1','0','0','1','1393836401');
INSERT INTO `d_module` VALUES('15','down','下载','down','','http://www.d.com/down/','','19','0','1','0','0','0','1393836401');
INSERT INTO `d_module` VALUES('16','mall','商城','mall','','http://www.d.com/mall/','','4','0','1','0','0','0','1393836401');
INSERT INTO `d_module` VALUES('17','group','团购','group','','http://www.d.com/group/','','8','0','1','0','0','0','1393836401');
INSERT INTO `d_module` VALUES('23','destoon','ass','','','/a.php','','23','1','1','1','0','0','1394097845');

DROP TABLE IF EXISTS `d_news`;
CREATE TABLE `d_news` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='公司新闻';


DROP TABLE IF EXISTS `d_news_data`;
CREATE TABLE `d_news_data` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='公司新闻内容';


DROP TABLE IF EXISTS `d_oauth`;
CREATE TABLE `d_oauth` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `site` varchar(30) NOT NULL DEFAULT '',
  `openid` varchar(255) NOT NULL DEFAULT '',
  `nickname` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `logintimes` int(10) unsigned NOT NULL DEFAULT '0',
  `logintime` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `site` (`site`,`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='一键登录';


DROP TABLE IF EXISTS `d_online`;
CREATE TABLE `d_online` (
  `userid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `moduleid` int(10) unsigned NOT NULL DEFAULT '0',
  `online` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `userid` (`userid`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8 COMMENT='在线会员';

INSERT INTO `d_online` VALUES('1','admin','127.0.0.1','2','0','1395128832');

DROP TABLE IF EXISTS `d_page`;
CREATE TABLE `d_page` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='公司单页';


DROP TABLE IF EXISTS `d_page_data`;
CREATE TABLE `d_page_data` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='公司单页内容';


DROP TABLE IF EXISTS `d_photo_12`;
CREATE TABLE `d_photo_12` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `items` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `open` tinyint(1) unsigned NOT NULL DEFAULT '3',
  `password` varchar(30) NOT NULL DEFAULT '',
  `question` varchar(30) NOT NULL DEFAULT '',
  `answer` varchar(30) NOT NULL DEFAULT '',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `addtime` (`addtime`),
  KEY `catid` (`catid`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='图库';


DROP TABLE IF EXISTS `d_photo_data_12`;
CREATE TABLE `d_photo_data_12` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` longtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='图库内容';


DROP TABLE IF EXISTS `d_photo_item_12`;
CREATE TABLE `d_photo_item_12` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `item` bigint(20) unsigned NOT NULL DEFAULT '0',
  `introduce` text NOT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `listorder` (`listorder`),
  KEY `item` (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='图库图片';


DROP TABLE IF EXISTS `d_poll`;
CREATE TABLE `d_poll` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `seo_title` varchar(255) NOT NULL DEFAULT '',
  `seo_keywords` varchar(255) NOT NULL DEFAULT '',
  `seo_description` varchar(255) NOT NULL DEFAULT '',
  `thumb_width` smallint(6) unsigned NOT NULL DEFAULT '0',
  `thumb_height` smallint(6) unsigned NOT NULL DEFAULT '0',
  `poll_max` smallint(6) unsigned NOT NULL DEFAULT '0',
  `poll_page` smallint(6) unsigned NOT NULL DEFAULT '0',
  `poll_cols` smallint(6) unsigned NOT NULL DEFAULT '0',
  `poll_order` smallint(6) unsigned NOT NULL DEFAULT '0',
  `polls` int(10) unsigned NOT NULL DEFAULT '0',
  `items` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `fromtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `template_poll` varchar(30) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='票选';


DROP TABLE IF EXISTS `d_poll_item`;
CREATE TABLE `d_poll_item` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pollid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `polls` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `pollid` (`pollid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='票选选项';


DROP TABLE IF EXISTS `d_poll_record`;
CREATE TABLE `d_poll_record` (
  `rid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pollid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `polltime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='票选记录';


DROP TABLE IF EXISTS `d_question`;
CREATE TABLE `d_question` (
  `qid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='验证问题';

INSERT INTO `d_question` VALUES('1','5+6=?','11');
INSERT INTO `d_question` VALUES('2','7+8=?','15');
INSERT INTO `d_question` VALUES('3','11*11=?','121');
INSERT INTO `d_question` VALUES('4','12-5=?','7');
INSERT INTO `d_question` VALUES('5','21-9=?','12');

DROP TABLE IF EXISTS `d_quote`;
CREATE TABLE `d_quote` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `tag` varchar(100) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `addtime` (`addtime`),
  KEY `catid` (`catid`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='行情';


DROP TABLE IF EXISTS `d_quote_data`;
CREATE TABLE `d_quote_data` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` longtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='行情内容';


DROP TABLE IF EXISTS `d_quote_price`;
CREATE TABLE `d_quote_price` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `market` smallint(6) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL,
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `company` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`itemid`),
  KEY `addtime` (`addtime`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='行情报价';


DROP TABLE IF EXISTS `d_quote_product`;
CREATE TABLE `d_quote_product` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `unit` varchar(10) NOT NULL,
  `price` decimal(10,2) unsigned NOT NULL,
  `minprice` decimal(10,2) unsigned NOT NULL,
  `maxprice` decimal(10,2) unsigned NOT NULL,
  `n1` varchar(100) NOT NULL,
  `n2` varchar(100) NOT NULL,
  `n3` varchar(100) NOT NULL,
  `v1` varchar(100) NOT NULL,
  `v2` varchar(100) NOT NULL,
  `v3` varchar(100) NOT NULL,
  `market` varchar(255) NOT NULL,
  `item` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `seo_title` varchar(255) NOT NULL,
  `seo_keywords` varchar(255) NOT NULL,
  `seo_description` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='行情产品';


DROP TABLE IF EXISTS `d_resume`;
CREATE TABLE `d_resume` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `gender` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `age` smallint(2) unsigned NOT NULL DEFAULT '0',
  `marriage` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `height` smallint(2) unsigned NOT NULL DEFAULT '0',
  `weight` smallint(2) unsigned NOT NULL DEFAULT '0',
  `education` smallint(2) unsigned NOT NULL DEFAULT '0',
  `school` varchar(100) NOT NULL DEFAULT '',
  `major` varchar(100) NOT NULL DEFAULT '',
  `skill` varchar(255) NOT NULL DEFAULT '',
  `language` varchar(255) NOT NULL DEFAULT '',
  `minsalary` int(10) unsigned NOT NULL DEFAULT '0',
  `maxsalary` int(10) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `experience` smallint(2) unsigned NOT NULL DEFAULT '0',
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `telephone` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `ali` varchar(30) NOT NULL DEFAULT '',
  `skype` varchar(30) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `situation` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `open` tinyint(1) NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `edittime` (`edittime`),
  KEY `catid` (`catid`),
  KEY `areaid` (`areaid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='简历';


DROP TABLE IF EXISTS `d_resume_data`;
CREATE TABLE `d_resume_data` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='简历内容';


DROP TABLE IF EXISTS `d_sell_5`;
CREATE TABLE `d_sell_5` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `mycatid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(2) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `elite` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `n1` varchar(100) NOT NULL,
  `n2` varchar(100) NOT NULL,
  `n3` varchar(100) NOT NULL,
  `v1` varchar(100) NOT NULL,
  `v2` varchar(100) NOT NULL,
  `v3` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL DEFAULT '',
  `unit` varchar(10) NOT NULL DEFAULT '',
  `price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `minamount` float unsigned NOT NULL DEFAULT '0',
  `amount` float unsigned NOT NULL DEFAULT '0',
  `days` smallint(3) unsigned NOT NULL DEFAULT '0',
  `tag` varchar(100) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `thumb1` varchar(255) NOT NULL DEFAULT '',
  `thumb2` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `groupid` smallint(4) unsigned NOT NULL DEFAULT '0',
  `company` varchar(100) NOT NULL DEFAULT '',
  `vip` smallint(2) unsigned NOT NULL DEFAULT '0',
  `validated` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `telephone` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `ali` varchar(30) NOT NULL DEFAULT '',
  `skype` varchar(30) NOT NULL DEFAULT '',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `editdate` date NOT NULL DEFAULT '0000-00-00',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `editdate` (`editdate`,`vip`,`edittime`),
  KEY `edittime` (`edittime`),
  KEY `catid` (`catid`),
  KEY `mycatid` (`mycatid`),
  KEY `areaid` (`areaid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='供应';

INSERT INTO `d_sell_5` VALUES('1','1','0','0','1','0','0','dssdd','','0','dsdddddddddddddddddd','','','','','','','d','','0.00','0','0','0','','dssdd,供应,供应默认分类','','1','http://www.d.com/file/upload/201403/06/09-10-14-93-4.jpg.thumb.jpg','','','admin','1','DESTOON B2B网站管理系统','0','0','嘉客','','','','','admin@yourdomain.com','','','','1395417599','admin','1394068220','2014-03-06','1394068200','2014-03-06','127.0.0.1','','3','show.php?itemid=1','','');

DROP TABLE IF EXISTS `d_sell_data_5`;
CREATE TABLE `d_sell_data_5` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='供应内容';

INSERT INTO `d_sell_data_5` VALUES('1','&nbsp;dsdddddddddddddddddd');

DROP TABLE IF EXISTS `d_sell_search_5`;
CREATE TABLE `d_sell_search_5` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `sorttime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='供应搜索';

INSERT INTO `d_sell_search_5` VALUES('1','1','1','dssdd,供应,供应默认分类','3','1394035750');

DROP TABLE IF EXISTS `d_session`;
CREATE TABLE `d_session` (
  `sessionid` varchar(32) NOT NULL DEFAULT '',
  `data` text NOT NULL,
  `lastvisit` int(10) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `sessionid` (`sessionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='SESSION';


DROP TABLE IF EXISTS `d_setting`;
CREATE TABLE `d_setting` (
  `item` varchar(30) NOT NULL DEFAULT '',
  `item_key` varchar(100) NOT NULL DEFAULT '',
  `item_value` text NOT NULL,
  KEY `item` (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='网站设置';

INSERT INTO `d_setting` VALUES('2','uc_bbs','1');
INSERT INTO `d_setting` VALUES('2','uc_key','');
INSERT INTO `d_setting` VALUES('2','uc_appid','');
INSERT INTO `d_setting` VALUES('2','uc_charset','utf8');
INSERT INTO `d_setting` VALUES('2','uc_dbpre','');
INSERT INTO `d_setting` VALUES('2','uc_dbname','');
INSERT INTO `d_setting` VALUES('2','uc_dbpwd','');
INSERT INTO `d_setting` VALUES('2','uc_dbuser','');
INSERT INTO `d_setting` VALUES('4','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('group-6','sendmail','1');
INSERT INTO `d_setting` VALUES('group-6','photo_limit','5');
INSERT INTO `d_setting` VALUES('group-5','down_free_limit','0');
INSERT INTO `d_setting` VALUES('group-5','video_free_limit','0');
INSERT INTO `d_setting` VALUES('2','uc_dbhost','localhost');
INSERT INTO `d_setting` VALUES('1','check_week','');
INSERT INTO `d_setting` VALUES('1','admin_week','');
INSERT INTO `d_setting` VALUES('1','page_text','18');
INSERT INTO `d_setting` VALUES('1','page_logo','18');
INSERT INTO `d_setting` VALUES('1','page_down','5');
INSERT INTO `d_setting` VALUES('1','page_job','5');
INSERT INTO `d_setting` VALUES('1','page_brand','4');
INSERT INTO `d_setting` VALUES('1','page_exhibit','6');
INSERT INTO `d_setting` VALUES('1','page_know','6');
INSERT INTO `d_setting` VALUES('1','page_video','3');
INSERT INTO `d_setting` VALUES('1','page_photo','6');
INSERT INTO `d_setting` VALUES('1','page_news','5');
INSERT INTO `d_setting` VALUES('1','page_newsh','1');
INSERT INTO `d_setting` VALUES('1','page_comnews','5');
INSERT INTO `d_setting` VALUES('1','page_special','1');
INSERT INTO `d_setting` VALUES('1','page_rank','5');
INSERT INTO `d_setting` VALUES('1','page_group','3');
INSERT INTO `d_setting` VALUES('1','page_price','12');
INSERT INTO `d_setting` VALUES('1','page_quote','5');
INSERT INTO `d_setting` VALUES('1','page_mall','10');
INSERT INTO `d_setting` VALUES('1','page_sell','10');
INSERT INTO `d_setting` VALUES('1','page_com','20');
INSERT INTO `d_setting` VALUES('1','page_trade','10');
INSERT INTO `d_setting` VALUES('1','page_catalog','1');
INSERT INTO `d_setting` VALUES('1','page_bigcat','');
INSERT INTO `d_setting` VALUES('1','message_type','0,1,2,3,4');
INSERT INTO `d_setting` VALUES('1','message_time','60');
INSERT INTO `d_setting` VALUES('1','message_group','6,7,8,9');
INSERT INTO `d_setting` VALUES('1','message_email','0');
INSERT INTO `d_setting` VALUES('1','mail_log','1');
INSERT INTO `d_setting` VALUES('1','mail_name','bing');
INSERT INTO `d_setting` VALUES('1','mail_sender','8019@omooo.com');
INSERT INTO `d_setting` VALUES('1','mail_sign','');
INSERT INTO `d_setting` VALUES('2','uc_mysql','1');
INSERT INTO `d_setting` VALUES('2','uc_ip','');
INSERT INTO `d_setting` VALUES('2','uc_api','');
INSERT INTO `d_setting` VALUES('2','passport_key','');
INSERT INTO `d_setting` VALUES('2','passport_url','');
INSERT INTO `d_setting` VALUES('2','passport_charset','gbk');
INSERT INTO `d_setting` VALUES('2','passport','0');
INSERT INTO `d_setting` VALUES('2','ex_name','');
INSERT INTO `d_setting` VALUES('2','ex_rate','');
INSERT INTO `d_setting` VALUES('2','ex_fdnm','');
INSERT INTO `d_setting` VALUES('2','ex_prex','');
INSERT INTO `d_setting` VALUES('2','ex_data','');
INSERT INTO `d_setting` VALUES('2','ex_pass','');
INSERT INTO `d_setting` VALUES('2','ex_user','root');
INSERT INTO `d_setting` VALUES('2','ex_host','localhost');
INSERT INTO `d_setting` VALUES('2','ex_type','PW');
INSERT INTO `d_setting` VALUES('2','credit_exchange','0');
INSERT INTO `d_setting` VALUES('2','credit_price','5|10|45|85');
INSERT INTO `d_setting` VALUES('2','credit_buy','30|100|500|1000');
INSERT INTO `d_setting` VALUES('2','credit_del_page','5');
INSERT INTO `d_setting` VALUES('2','credit_add_page','2');
INSERT INTO `d_setting` VALUES('2','credit_del_news','5');
INSERT INTO `d_setting` VALUES('2','credit_add_news','2');
INSERT INTO `d_setting` VALUES('2','credit_del_credit','5');
INSERT INTO `d_setting` VALUES('2','credit_add_credit','2');
INSERT INTO `d_setting` VALUES('2','credit_charge','1');
INSERT INTO `d_setting` VALUES('2','credit_maxip','50');
INSERT INTO `d_setting` VALUES('2','credit_ip','2');
INSERT INTO `d_setting` VALUES('2','credit_user','20');
INSERT INTO `d_setting` VALUES('2','credit_login','1');
INSERT INTO `d_setting` VALUES('2','credit_edit','10');
INSERT INTO `d_setting` VALUES('2','credit_less','0');
INSERT INTO `d_setting` VALUES('2','send_types','不需要物流|平邮|EMS|顺丰快递|申通E物流|圆通速递|中通速递|宅急送|韵达快运|天天快递|联邦快递|汇通快运|华强物流|其它');
INSERT INTO `d_setting` VALUES('2','trade_send','10');
INSERT INTO `d_setting` VALUES('2','pay_banks','现金|网银在线|贝宝|支付宝|财付通|招商银行|中国工商银行|中国农业银行|中国建设银行|中国交通银行|中国银行|邮政储蓄|邮政汇款');
INSERT INTO `d_setting` VALUES('2','trade_day','10');
INSERT INTO `d_setting` VALUES('2','cash_fee_max','50');
INSERT INTO `d_setting` VALUES('2','cash_fee_min','1');
INSERT INTO `d_setting` VALUES('2','cash_fee','1');
INSERT INTO `d_setting` VALUES('2','cash_max','10000');
INSERT INTO `d_setting` VALUES('2','cash_min','50');
INSERT INTO `d_setting` VALUES('2','cash_times','3');
INSERT INTO `d_setting` VALUES('2','pay_url','');
INSERT INTO `d_setting` VALUES('2','cash_enable','1');
INSERT INTO `d_setting` VALUES('2','cash_banks','招商银行|中国工商银行|中国农业银行|中国建设银行|中国交通银行|中国银行|邮政储蓄|贝宝|支付宝|财付通');
INSERT INTO `d_setting` VALUES('2','mincharge','0');
INSERT INTO `d_setting` VALUES('2','pay_online','1');
INSERT INTO `d_setting` VALUES('2','link_check','2');
INSERT INTO `d_setting` VALUES('2','credit_clear','0');
INSERT INTO `d_setting` VALUES('2','credit_save','0');
INSERT INTO `d_setting` VALUES('2','credit_check','2');
INSERT INTO `d_setting` VALUES('2','page_clear','0');
INSERT INTO `d_setting` VALUES('2','page_save','0');
INSERT INTO `d_setting` VALUES('3','baidunews_items','90');
INSERT INTO `d_setting` VALUES('3','baidunews_update','60');
INSERT INTO `d_setting` VALUES('3','baidunews_email','mail@yourdomain.com');
INSERT INTO `d_setting` VALUES('3','baidunews','1');
INSERT INTO `d_setting` VALUES('3','sitemaps_items','10000');
INSERT INTO `d_setting` VALUES('3','sitemaps_update','60');
INSERT INTO `d_setting` VALUES('3','sitemaps_module','16,4,21');
INSERT INTO `d_setting` VALUES('3','sitemaps_priority','0.8');
INSERT INTO `d_setting` VALUES('3','sitemaps_changefreq','monthly');
INSERT INTO `d_setting` VALUES('3','sitemaps','1');
INSERT INTO `d_setting` VALUES('3','feed_pagesize','50');
INSERT INTO `d_setting` VALUES('3','feed_domain','');
INSERT INTO `d_setting` VALUES('3','feed_enable','2');
INSERT INTO `d_setting` VALUES('3','archiver_domain','');
INSERT INTO `d_setting` VALUES('3','archiver_enable','1');
INSERT INTO `d_setting` VALUES('3','wap_goto','1');
INSERT INTO `d_setting` VALUES('3','wap_maxlength','500');
INSERT INTO `d_setting` VALUES('3','wap_pagesize','20');
INSERT INTO `d_setting` VALUES('3','wap_charset','utf-8');
INSERT INTO `d_setting` VALUES('3','wap_domain','');
INSERT INTO `d_setting` VALUES('3','wap_enable','1');
INSERT INTO `d_setting` VALUES('3','poll_group','3,5,6,7');
INSERT INTO `d_setting` VALUES('3','poll_domain','');
INSERT INTO `d_setting` VALUES('3','poll_enable','1');
INSERT INTO `d_setting` VALUES('3','vote_group','3,5,6,7');
INSERT INTO `d_setting` VALUES('3','vote_domain','');
INSERT INTO `d_setting` VALUES('3','vote_enable','1');
INSERT INTO `d_setting` VALUES('3','gift_domain','');
INSERT INTO `d_setting` VALUES('3','gift_enable','1');
INSERT INTO `d_setting` VALUES('3','guestbook_captcha','1');
INSERT INTO `d_setting` VALUES('3','guestbook_type','业务合作|意见建议|使用问题|页面错误|不良信息|其他');
INSERT INTO `d_setting` VALUES('3','guestbook_domain','');
INSERT INTO `d_setting` VALUES('3','guestbook_enable','1');
INSERT INTO `d_setting` VALUES('3','comment_am','网友');
INSERT INTO `d_setting` VALUES('3','credit_del_comment','5');
INSERT INTO `d_setting` VALUES('3','credit_add_comment','2');
INSERT INTO `d_setting` VALUES('3','comment_limit','30');
INSERT INTO `d_setting` VALUES('3','comment_pagesize','10');
INSERT INTO `d_setting` VALUES('3','comment_time','30');
INSERT INTO `d_setting` VALUES('3','comment_max','500');
INSERT INTO `d_setting` VALUES('3','comment_min','5');
INSERT INTO `d_setting` VALUES('3','comment_vote','1');
INSERT INTO `d_setting` VALUES('3','comment_admin_del','1');
INSERT INTO `d_setting` VALUES('3','comment_user_del','4');
INSERT INTO `d_setting` VALUES('3','comment_captcha_add','2');
INSERT INTO `d_setting` VALUES('3','comment_check','2');
INSERT INTO `d_setting` VALUES('3','comment_vote_group','3,5,6,7,8,9');
INSERT INTO `d_setting` VALUES('3','comment_group','3,5,6,7,8,9');
INSERT INTO `d_setting` VALUES('3','comment_module','4,21');
INSERT INTO `d_setting` VALUES('3','comment_show','1');
INSERT INTO `d_setting` VALUES('3','comment_domain','');
INSERT INTO `d_setting` VALUES('3','link_request','');
INSERT INTO `d_setting` VALUES('3','link_reg','1');
INSERT INTO `d_setting` VALUES('3','link_domain','');
INSERT INTO `d_setting` VALUES('3','link_enable','1');
INSERT INTO `d_setting` VALUES('3','announce_html','1');
INSERT INTO `d_setting` VALUES('3','announce_domain','');
INSERT INTO `d_setting` VALUES('3','announce_enable','1');
INSERT INTO `d_setting` VALUES('3','ad_currency','credit');
INSERT INTO `d_setting` VALUES('3','ad_buy','1');
INSERT INTO `d_setting` VALUES('3','ad_view','1');
INSERT INTO `d_setting` VALUES('3','ad_domain','');
INSERT INTO `d_setting` VALUES('3','ad_enable','1');
INSERT INTO `d_setting` VALUES('3','spread_currency','credit');
INSERT INTO `d_setting` VALUES('3','spread_list','1');
INSERT INTO `d_setting` VALUES('3','spread_check','1');
INSERT INTO `d_setting` VALUES('3','spread_max','10');
INSERT INTO `d_setting` VALUES('3','spread_month','6');
INSERT INTO `d_setting` VALUES('3','spread_step','100');
INSERT INTO `d_setting` VALUES('3','spread_company_price','500');
INSERT INTO `d_setting` VALUES('3','spread_buy_price','500');
INSERT INTO `d_setting` VALUES('3','oauth','0');
INSERT INTO `d_setting` VALUES('3','spread_domain','');
INSERT INTO `d_setting` VALUES('3','spread_sell_price','500');
INSERT INTO `d_setting` VALUES('4','seo_title_show','{内容标题}{分类名称}{分类SEO标题}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('4','seo_description_list','');
INSERT INTO `d_setting` VALUES('4','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('4','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('4','seo_description_index','');
INSERT INTO `d_setting` VALUES('4','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('4','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('4','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('4','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('4','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('4','index_html','0');
INSERT INTO `d_setting` VALUES('4','list_html','0');
INSERT INTO `d_setting` VALUES('4','page_subcat','6');
INSERT INTO `d_setting` VALUES('4','pagesize','20');
INSERT INTO `d_setting` VALUES('4','page_inew','10');
INSERT INTO `d_setting` VALUES('4','page_inews','10');
INSERT INTO `d_setting` VALUES('4','page_ivip','10');
INSERT INTO `d_setting` VALUES('4','page_irec','10');
INSERT INTO `d_setting` VALUES('4','level','推荐设计师');
INSERT INTO `d_setting` VALUES('4','kf','');
INSERT INTO `d_setting` VALUES('4','stats','');
INSERT INTO `d_setting` VALUES('4','map','baidu');
INSERT INTO `d_setting` VALUES('4','vip_honor','1');
INSERT INTO `d_setting` VALUES('4','vip_maxyear','5');
INSERT INTO `d_setting` VALUES('4','vip_year','1');
INSERT INTO `d_setting` VALUES('4','vip_cominfo','1');
INSERT INTO `d_setting` VALUES('4','vip_maxgroupvip','3');
INSERT INTO `d_setting` VALUES('4','delvip','0');
INSERT INTO `d_setting` VALUES('4','openall','0');
INSERT INTO `d_setting` VALUES('4','homeurl','0');
INSERT INTO `d_setting` VALUES('4','comment','1');
INSERT INTO `d_setting` VALUES('4','split','0');
INSERT INTO `d_setting` VALUES('4','order','vip desc,userid desc');
INSERT INTO `d_setting` VALUES('4','fields','userid,username,company,linkurl,thumb,catid,areaid,vip,groupid,validated,business,mode');
INSERT INTO `d_setting` VALUES('5','credit_add','2');
INSERT INTO `d_setting` VALUES('5','fee_back','0');
INSERT INTO `d_setting` VALUES('5','fee_period','0');
INSERT INTO `d_setting` VALUES('5','fee_view','0');
INSERT INTO `d_setting` VALUES('5','fee_add','0');
INSERT INTO `d_setting` VALUES('5','fee_currency','money');
INSERT INTO `d_setting` VALUES('5','fee_mode','1');
INSERT INTO `d_setting` VALUES('5','question_add','2');
INSERT INTO `d_setting` VALUES('5','captcha_add','2');
INSERT INTO `d_setting` VALUES('5','check_add','2');
INSERT INTO `d_setting` VALUES('5','captcha_inquiry','2');
INSERT INTO `d_setting` VALUES('5','question_inquiry','2');
INSERT INTO `d_setting` VALUES('5','group_elite','6,7');
INSERT INTO `d_setting` VALUES('5','group_compare','3,5,6,7');
INSERT INTO `d_setting` VALUES('5','group_refresh','7');
INSERT INTO `d_setting` VALUES('5','group_color','6,7');
INSERT INTO `d_setting` VALUES('5','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('5','group_contact','3,5,6,7');
INSERT INTO `d_setting` VALUES('5','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('5','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('5','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('5','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('5','seo_description_show','');
INSERT INTO `d_setting` VALUES('5','seo_description_list','');
INSERT INTO `d_setting` VALUES('5','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('5','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('5','seo_description_index','');
INSERT INTO `d_setting` VALUES('5','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('5','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('5','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('5','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('5','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('5','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('5','show_html','0');
INSERT INTO `d_setting` VALUES('5','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('5','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('5','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('5','list_html','0');
INSERT INTO `d_setting` VALUES('5','index_html','0');
INSERT INTO `d_setting` VALUES('5','page_subcat','5');
INSERT INTO `d_setting` VALUES('5','max_width','900');
INSERT INTO `d_setting` VALUES('5','pagesize','20');
INSERT INTO `d_setting` VALUES('5','upload_thumb','0');
INSERT INTO `d_setting` VALUES('5','swfu','2');
INSERT INTO `d_setting` VALUES('5','level','推荐信息');
INSERT INTO `d_setting` VALUES('5','fulltext','0');
INSERT INTO `d_setting` VALUES('5','sphinx_name','destoon,delta');
INSERT INTO `d_setting` VALUES('5','sphinx_port','');
INSERT INTO `d_setting` VALUES('5','sphinx_host','');
INSERT INTO `d_setting` VALUES('5','sphinx','0');
INSERT INTO `d_setting` VALUES('5','cat_property','0');
INSERT INTO `d_setting` VALUES('5','save_remotepic','0');
INSERT INTO `d_setting` VALUES('5','clear_link','0');
INSERT INTO `d_setting` VALUES('5','keylink','0');
INSERT INTO `d_setting` VALUES('5','split','0');
INSERT INTO `d_setting` VALUES('5','inquiry_ask','我对贵公司的产品非常感兴趣，能否发一些详细资料给我参考？|请您发一份比较详细的产品规格说明，谢谢！|请问贵公司产品是否可以代理？代理条件是什么？|我公司有意购买此产品，可否提供此产品的报价单和最小起订量？');
INSERT INTO `d_setting` VALUES('5','type','供应|提供服务|供应二手|提供加工|提供合作|库存');
INSERT INTO `d_setting` VALUES('5','inquiry_type','单价|产品规格|型号|价格条款|原产地|能否提供样品|最小订货量|交货期|供货能力|销售条款及附加条件|包装方式|质量/安全认证 ');
INSERT INTO `d_setting` VALUES('5','fields','itemid,title,thumb,linkurl,style,catid,areaid,introduce,addtime,edittime,username,company,groupid,vip,qq,msn,ali,skype,validated,price,unit,minamount,amount');
INSERT INTO `d_setting` VALUES('5','order','editdate desc,vip desc,edittime desc');
INSERT INTO `d_setting` VALUES('5','editor','Destoon');
INSERT INTO `d_setting` VALUES('5','introduce_length','120');
INSERT INTO `d_setting` VALUES('5','thumb_height','100');
INSERT INTO `d_setting` VALUES('5','thumb_width','100');
INSERT INTO `d_setting` VALUES('5','template_inquiry','');
INSERT INTO `d_setting` VALUES('5','template_compare','');
INSERT INTO `d_setting` VALUES('5','template_my','');
INSERT INTO `d_setting` VALUES('5','template_search','');
INSERT INTO `d_setting` VALUES('5','template_show','');
INSERT INTO `d_setting` VALUES('5','template_list','');
INSERT INTO `d_setting` VALUES('5','template_index','');
INSERT INTO `d_setting` VALUES('5','credit_del','5');
INSERT INTO `d_setting` VALUES('5','credit_color','100');
INSERT INTO `d_setting` VALUES('5','credit_elite','100');
INSERT INTO `d_setting` VALUES('5','credit_refresh','1');
INSERT INTO `d_setting` VALUES('5','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('5','title_list','{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('5','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('5','keywords_index','');
INSERT INTO `d_setting` VALUES('5','keywords_list','');
INSERT INTO `d_setting` VALUES('5','keywords_show','');
INSERT INTO `d_setting` VALUES('5','description_index','');
INSERT INTO `d_setting` VALUES('5','description_list','');
INSERT INTO `d_setting` VALUES('5','description_show','');
INSERT INTO `d_setting` VALUES('5','module','sell');
INSERT INTO `d_setting` VALUES('6','fee_add','0');
INSERT INTO `d_setting` VALUES('6','fee_currency','money');
INSERT INTO `d_setting` VALUES('6','fee_mode','1');
INSERT INTO `d_setting` VALUES('6','question_add','2');
INSERT INTO `d_setting` VALUES('6','captcha_add','2');
INSERT INTO `d_setting` VALUES('6','check_add','2');
INSERT INTO `d_setting` VALUES('6','question_price','2');
INSERT INTO `d_setting` VALUES('6','captcha_price','2');
INSERT INTO `d_setting` VALUES('6','group_refresh','7');
INSERT INTO `d_setting` VALUES('6','group_color','6,7');
INSERT INTO `d_setting` VALUES('6','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('6','group_contact','3,5,6,7');
INSERT INTO `d_setting` VALUES('6','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('6','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('6','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('6','seo_description_show','');
INSERT INTO `d_setting` VALUES('6','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('6','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('6','seo_description_list','');
INSERT INTO `d_setting` VALUES('6','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('6','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('6','seo_description_index','');
INSERT INTO `d_setting` VALUES('6','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('6','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('6','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('6','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('6','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('6','show_html','0');
INSERT INTO `d_setting` VALUES('6','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('6','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('6','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('6','list_html','0');
INSERT INTO `d_setting` VALUES('6','index_html','0');
INSERT INTO `d_setting` VALUES('6','page_subcat','6');
INSERT INTO `d_setting` VALUES('6','max_width','900');
INSERT INTO `d_setting` VALUES('6','pagesize','20');
INSERT INTO `d_setting` VALUES('6','level','推荐信息');
INSERT INTO `d_setting` VALUES('6','save_remotepic','0');
INSERT INTO `d_setting` VALUES('6','clear_link','0');
INSERT INTO `d_setting` VALUES('6','keylink','0');
INSERT INTO `d_setting` VALUES('6','split','0');
INSERT INTO `d_setting` VALUES('6','fulltext','0');
INSERT INTO `d_setting` VALUES('6','cat_property','0');
INSERT INTO `d_setting` VALUES('6','type','求购|紧急求购|求购二手|寻求加工|寻求合作|招标');
INSERT INTO `d_setting` VALUES('6','price_ask','请您发一份比较详细的产品规格说明，谢谢！|请问您对此产品是长期有需求吗？|请问您对此产品有多大的需求量？');
INSERT INTO `d_setting` VALUES('6','fields','itemid,title,thumb,linkurl,style,catid,areaid,introduce,addtime,edittime,username,company,groupid,vip,qq,msn,ali,skype,validated,price');
INSERT INTO `d_setting` VALUES('6','order','editdate desc,vip desc,edittime desc');
INSERT INTO `d_setting` VALUES('6','editor','Destoon');
INSERT INTO `d_setting` VALUES('6','introduce_length','120');
INSERT INTO `d_setting` VALUES('6','thumb_height','100');
INSERT INTO `d_setting` VALUES('6','thumb_width','100');
INSERT INTO `d_setting` VALUES('6','template_price','');
INSERT INTO `d_setting` VALUES('6','template_my','');
INSERT INTO `d_setting` VALUES('6','template_search','');
INSERT INTO `d_setting` VALUES('6','template_show','');
INSERT INTO `d_setting` VALUES('6','template_list','');
INSERT INTO `d_setting` VALUES('6','template_index','');
INSERT INTO `d_setting` VALUES('6','fee_view','0');
INSERT INTO `d_setting` VALUES('6','fee_period','0');
INSERT INTO `d_setting` VALUES('6','fee_back','0');
INSERT INTO `d_setting` VALUES('6','credit_add','2');
INSERT INTO `d_setting` VALUES('6','credit_del','5');
INSERT INTO `d_setting` VALUES('6','credit_color','100');
INSERT INTO `d_setting` VALUES('6','credit_refresh','1');
INSERT INTO `d_setting` VALUES('6','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('6','title_list','{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('6','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('6','keywords_index','');
INSERT INTO `d_setting` VALUES('6','keywords_list','');
INSERT INTO `d_setting` VALUES('6','keywords_show','');
INSERT INTO `d_setting` VALUES('6','description_index','');
INSERT INTO `d_setting` VALUES('6','description_list','');
INSERT INTO `d_setting` VALUES('6','description_show','');
INSERT INTO `d_setting` VALUES('6','module','buy');
INSERT INTO `d_setting` VALUES('7','fee_period','0');
INSERT INTO `d_setting` VALUES('7','fee_view','0');
INSERT INTO `d_setting` VALUES('7','fee_add','0');
INSERT INTO `d_setting` VALUES('7','fee_currency','money');
INSERT INTO `d_setting` VALUES('7','question_add','2');
INSERT INTO `d_setting` VALUES('7','fee_mode','1');
INSERT INTO `d_setting` VALUES('7','captcha_add','2');
INSERT INTO `d_setting` VALUES('7','check_add','2');
INSERT INTO `d_setting` VALUES('7','group_add_price','3,5,6,7');
INSERT INTO `d_setting` VALUES('7','group_show_price','3,5,6,7');
INSERT INTO `d_setting` VALUES('7','group_color','6,7');
INSERT INTO `d_setting` VALUES('7','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('7','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('7','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('7','seo_description_show','');
INSERT INTO `d_setting` VALUES('7','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('7','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('7','seo_description_list','');
INSERT INTO `d_setting` VALUES('7','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('7','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('7','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('7','seo_description_index','');
INSERT INTO `d_setting` VALUES('7','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('7','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('7','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('7','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('7','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('7','show_html','0');
INSERT INTO `d_setting` VALUES('7','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('7','index_html','0');
INSERT INTO `d_setting` VALUES('7','list_html','0');
INSERT INTO `d_setting` VALUES('7','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('7','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('7','max_width','550');
INSERT INTO `d_setting` VALUES('7','page_child','5');
INSERT INTO `d_setting` VALUES('7','pagesize','20');
INSERT INTO `d_setting` VALUES('7','page_icat','5');
INSERT INTO `d_setting` VALUES('7','save_remotepic','0');
INSERT INTO `d_setting` VALUES('7','clear_link','0');
INSERT INTO `d_setting` VALUES('7','keylink','0');
INSERT INTO `d_setting` VALUES('7','split','0');
INSERT INTO `d_setting` VALUES('7','fulltext','0');
INSERT INTO `d_setting` VALUES('7','level','推荐行情|暂未指定|推荐图文|头条相关|头条推荐');
INSERT INTO `d_setting` VALUES('7','cat_property','0');
INSERT INTO `d_setting` VALUES('7','fields','itemid,title,thumb,linkurl,style,catid,introduce,addtime,edittime,username');
INSERT INTO `d_setting` VALUES('7','order','addtime desc');
INSERT INTO `d_setting` VALUES('7','editor','Destoon');
INSERT INTO `d_setting` VALUES('7','introduce_length','120');
INSERT INTO `d_setting` VALUES('7','thumb_height','90');
INSERT INTO `d_setting` VALUES('7','thumb_width','120');
INSERT INTO `d_setting` VALUES('7','fee_back','0');
INSERT INTO `d_setting` VALUES('7','pre_view','500');
INSERT INTO `d_setting` VALUES('7','credit_add','2');
INSERT INTO `d_setting` VALUES('7','credit_del','5');
INSERT INTO `d_setting` VALUES('7','credit_color','100');
INSERT INTO `d_setting` VALUES('7','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('7','title_list','{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('7','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('7','keywords_index','');
INSERT INTO `d_setting` VALUES('7','keywords_list','');
INSERT INTO `d_setting` VALUES('7','keywords_show','');
INSERT INTO `d_setting` VALUES('7','description_index','');
INSERT INTO `d_setting` VALUES('7','description_list','');
INSERT INTO `d_setting` VALUES('7','description_show','');
INSERT INTO `d_setting` VALUES('7','module','quote');
INSERT INTO `d_setting` VALUES('8','fee_currency','money');
INSERT INTO `d_setting` VALUES('8','fee_mode','1');
INSERT INTO `d_setting` VALUES('8','question_add','2');
INSERT INTO `d_setting` VALUES('8','captcha_add','2');
INSERT INTO `d_setting` VALUES('8','check_add','2');
INSERT INTO `d_setting` VALUES('8','question_sign','2');
INSERT INTO `d_setting` VALUES('8','captcha_sign','2');
INSERT INTO `d_setting` VALUES('8','group_color','6,7');
INSERT INTO `d_setting` VALUES('8','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('8','group_contact','3,5,6,7');
INSERT INTO `d_setting` VALUES('8','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('8','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('8','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('8','seo_description_show','');
INSERT INTO `d_setting` VALUES('8','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('8','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('8','seo_description_list','');
INSERT INTO `d_setting` VALUES('8','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('8','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('8','seo_description_index','');
INSERT INTO `d_setting` VALUES('8','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('8','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('8','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('8','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('8','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('8','show_html','0');
INSERT INTO `d_setting` VALUES('8','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('8','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('8','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('8','list_html','0');
INSERT INTO `d_setting` VALUES('8','index_html','0');
INSERT INTO `d_setting` VALUES('8','max_width','550');
INSERT INTO `d_setting` VALUES('8','pagesize','10');
INSERT INTO `d_setting` VALUES('8','cat_hall_num','2');
INSERT INTO `d_setting` VALUES('8','cat_hall','0');
INSERT INTO `d_setting` VALUES('8','cat_service_num','8');
INSERT INTO `d_setting` VALUES('8','cat_service','0');
INSERT INTO `d_setting` VALUES('8','cat_news_num','10');
INSERT INTO `d_setting` VALUES('8','page_icat','10');
INSERT INTO `d_setting` VALUES('8','news_id','21');
INSERT INTO `d_setting` VALUES('8','cat_news','0');
INSERT INTO `d_setting` VALUES('8','page_islide','3');
INSERT INTO `d_setting` VALUES('8','level','推荐展会|展会幻灯');
INSERT INTO `d_setting` VALUES('8','fulltext','0');
INSERT INTO `d_setting` VALUES('8','split','0');
INSERT INTO `d_setting` VALUES('8','keylink','0');
INSERT INTO `d_setting` VALUES('8','save_remotepic','0');
INSERT INTO `d_setting` VALUES('8','clear_link','0');
INSERT INTO `d_setting` VALUES('8','cat_property','0');
INSERT INTO `d_setting` VALUES('8','fields','itemid,title,thumb,linkurl,style,catid,addtime,edittime,username,fromtime,totime,city,address,sponsor');
INSERT INTO `d_setting` VALUES('8','order','addtime desc');
INSERT INTO `d_setting` VALUES('8','editor','Destoon');
INSERT INTO `d_setting` VALUES('8','introduce_length','0');
INSERT INTO `d_setting` VALUES('8','thumb_height','100');
INSERT INTO `d_setting` VALUES('8','thumb_width','100');
INSERT INTO `d_setting` VALUES('8','fee_add','0');
INSERT INTO `d_setting` VALUES('8','fee_view','0');
INSERT INTO `d_setting` VALUES('8','fee_period','0');
INSERT INTO `d_setting` VALUES('8','fee_back','0');
INSERT INTO `d_setting` VALUES('8','pre_view','500');
INSERT INTO `d_setting` VALUES('8','credit_add','2');
INSERT INTO `d_setting` VALUES('8','credit_del','5');
INSERT INTO `d_setting` VALUES('8','credit_color','100');
INSERT INTO `d_setting` VALUES('8','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('8','title_list','{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('8','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('8','keywords_index','');
INSERT INTO `d_setting` VALUES('8','keywords_list','');
INSERT INTO `d_setting` VALUES('8','keywords_show','');
INSERT INTO `d_setting` VALUES('8','description_index','');
INSERT INTO `d_setting` VALUES('8','description_list','');
INSERT INTO `d_setting` VALUES('8','description_show','');
INSERT INTO `d_setting` VALUES('8','module','exhibit');
INSERT INTO `d_setting` VALUES('9','check_add_resume','2');
INSERT INTO `d_setting` VALUES('9','group_apply','5');
INSERT INTO `d_setting` VALUES('9','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('9','group_contact','5,6,7');
INSERT INTO `d_setting` VALUES('9','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('9','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('9','fee_back','0');
INSERT INTO `d_setting` VALUES('9','fee_period','0');
INSERT INTO `d_setting` VALUES('9','fee_view_resume','0');
INSERT INTO `d_setting` VALUES('9','fee_add','0');
INSERT INTO `d_setting` VALUES('9','fee_currency','money');
INSERT INTO `d_setting` VALUES('9','fee_mode','1');
INSERT INTO `d_setting` VALUES('9','question_add','2');
INSERT INTO `d_setting` VALUES('9','captcha_add','2');
INSERT INTO `d_setting` VALUES('9','check_add','2');
INSERT INTO `d_setting` VALUES('9','group_talent','7');
INSERT INTO `d_setting` VALUES('9','group_search_resume','3,5,6,7');
INSERT INTO `d_setting` VALUES('9','group_contact_resume','7');
INSERT INTO `d_setting` VALUES('9','group_show_resume','3,5,6,7');
INSERT INTO `d_setting` VALUES('9','group_refresh','7');
INSERT INTO `d_setting` VALUES('9','group_color','6,7');
INSERT INTO `d_setting` VALUES('9','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('9','seo_description_show','');
INSERT INTO `d_setting` VALUES('9','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('9','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('9','seo_description_list','');
INSERT INTO `d_setting` VALUES('9','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('9','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('9','seo_description_index','');
INSERT INTO `d_setting` VALUES('9','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('9','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('9','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('9','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('9','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('9','show_html','0');
INSERT INTO `d_setting` VALUES('9','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('9','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('9','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('9','list_html','0');
INSERT INTO `d_setting` VALUES('9','index_html','0');
INSERT INTO `d_setting` VALUES('9','pagesize','20');
INSERT INTO `d_setting` VALUES('9','max_width','550');
INSERT INTO `d_setting` VALUES('9','page_iresume','10');
INSERT INTO `d_setting` VALUES('9','page_ijob','10');
INSERT INTO `d_setting` VALUES('9','level','推荐');
INSERT INTO `d_setting` VALUES('9','split','0');
INSERT INTO `d_setting` VALUES('9','cat_property','0');
INSERT INTO `d_setting` VALUES('9','save_remotepic','0');
INSERT INTO `d_setting` VALUES('9','clear_link','0');
INSERT INTO `d_setting` VALUES('9','situation','目前正在找工作|观望有好机会再考虑|半年内无换工作计划');
INSERT INTO `d_setting` VALUES('9','education','不限|初中|高中|大专|本科|硕士|博士');
INSERT INTO `d_setting` VALUES('9','marriage','不限|未婚|已婚');
INSERT INTO `d_setting` VALUES('9','gender','不限|男士|女士');
INSERT INTO `d_setting` VALUES('9','type','不限|全职|兼职|实习');
INSERT INTO `d_setting` VALUES('9','order','editdate desc,vip desc,edittime desc');
INSERT INTO `d_setting` VALUES('9','fields','itemid,title,linkurl,style,catid,areaid,introduce,addtime,edittime,username,company,groupid,vip,qq,msn,ali,skype,validated,minsalary,maxsalary');
INSERT INTO `d_setting` VALUES('9','editor','Destoon');
INSERT INTO `d_setting` VALUES('9','introduce_length','120');
INSERT INTO `d_setting` VALUES('9','thumb_height','140');
INSERT INTO `d_setting` VALUES('9','thumb_width','100');
INSERT INTO `d_setting` VALUES('9','captcha_add_resume','2');
INSERT INTO `d_setting` VALUES('9','question_add_resume','2');
INSERT INTO `d_setting` VALUES('9','fee_add_resume','0');
INSERT INTO `d_setting` VALUES('9','fee_view','0');
INSERT INTO `d_setting` VALUES('9','credit_add','2');
INSERT INTO `d_setting` VALUES('9','credit_del','5');
INSERT INTO `d_setting` VALUES('9','credit_color','100');
INSERT INTO `d_setting` VALUES('9','credit_refresh','1');
INSERT INTO `d_setting` VALUES('9','credit_add_resume','2');
INSERT INTO `d_setting` VALUES('9','credit_del_resume','5');
INSERT INTO `d_setting` VALUES('9','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('9','title_list','{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('9','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('9','keywords_index','');
INSERT INTO `d_setting` VALUES('9','keywords_list','');
INSERT INTO `d_setting` VALUES('9','keywords_show','');
INSERT INTO `d_setting` VALUES('9','description_index','');
INSERT INTO `d_setting` VALUES('9','description_list','');
INSERT INTO `d_setting` VALUES('9','description_show','');
INSERT INTO `d_setting` VALUES('9','module','job');
INSERT INTO `d_setting` VALUES('10','credit_answer','2');
INSERT INTO `d_setting` VALUES('10','credit_best','20');
INSERT INTO `d_setting` VALUES('10','credit_hidden','10');
INSERT INTO `d_setting` VALUES('10','credit_color','100');
INSERT INTO `d_setting` VALUES('10','credit_del','20');
INSERT INTO `d_setting` VALUES('10','credit_add','0');
INSERT INTO `d_setting` VALUES('10','pre_view','500');
INSERT INTO `d_setting` VALUES('10','fee_back','0');
INSERT INTO `d_setting` VALUES('10','fee_period','0');
INSERT INTO `d_setting` VALUES('10','fee_view','0');
INSERT INTO `d_setting` VALUES('10','fee_add','0');
INSERT INTO `d_setting` VALUES('10','fee_currency','money');
INSERT INTO `d_setting` VALUES('10','fee_mode','1');
INSERT INTO `d_setting` VALUES('10','question_answer','2');
INSERT INTO `d_setting` VALUES('10','captcha_answer','2');
INSERT INTO `d_setting` VALUES('10','check_answer','2');
INSERT INTO `d_setting` VALUES('10','group_vote','3,5,6,7');
INSERT INTO `d_setting` VALUES('10','group_answer','3,5,6,7');
INSERT INTO `d_setting` VALUES('10','question_add','2');
INSERT INTO `d_setting` VALUES('10','captcha_add','2');
INSERT INTO `d_setting` VALUES('10','check_add','2');
INSERT INTO `d_setting` VALUES('10','group_color','6,7');
INSERT INTO `d_setting` VALUES('10','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('10','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('10','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('10','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('10','seo_description_show','');
INSERT INTO `d_setting` VALUES('10','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('10','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('10','seo_description_list','');
INSERT INTO `d_setting` VALUES('10','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('10','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('10','seo_description_index','');
INSERT INTO `d_setting` VALUES('10','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('10','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('10','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('10','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('10','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('10','show_html','0');
INSERT INTO `d_setting` VALUES('10','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('10','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('10','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('10','list_html','0');
INSERT INTO `d_setting` VALUES('10','index_html','0');
INSERT INTO `d_setting` VALUES('10','max_width','550');
INSERT INTO `d_setting` VALUES('10','answer_pagesize','10');
INSERT INTO `d_setting` VALUES('10','pagesize','20');
INSERT INTO `d_setting` VALUES('10','page_iexpert','2');
INSERT INTO `d_setting` VALUES('10','page_iresolve','8');
INSERT INTO `d_setting` VALUES('10','page_ivote','8');
INSERT INTO `d_setting` VALUES('10','page_isolve','8');
INSERT INTO `d_setting` VALUES('10','page_irec','8');
INSERT INTO `d_setting` VALUES('10','messagedays','14');
INSERT INTO `d_setting` VALUES('10','highcredit','20');
INSERT INTO `d_setting` VALUES('10','raisecredit','20');
INSERT INTO `d_setting` VALUES('10','raisedays','3');
INSERT INTO `d_setting` VALUES('10','maxraise','2');
INSERT INTO `d_setting` VALUES('10','overdays','15');
INSERT INTO `d_setting` VALUES('10','votedays','5');
INSERT INTO `d_setting` VALUES('10','minvote','3');
INSERT INTO `d_setting` VALUES('10','answer_message','1');
INSERT INTO `d_setting` VALUES('10','credits','0|5|10|15|20|30|50|80|100');
INSERT INTO `d_setting` VALUES('10','level','精彩推荐');
INSERT INTO `d_setting` VALUES('10','fulltext','0');
INSERT INTO `d_setting` VALUES('10','split','0');
INSERT INTO `d_setting` VALUES('10','keylink','1');
INSERT INTO `d_setting` VALUES('10','clear_link','0');
INSERT INTO `d_setting` VALUES('10','clear_alink','1');
INSERT INTO `d_setting` VALUES('10','cat_property','0');
INSERT INTO `d_setting` VALUES('10','save_remotepic','0');
INSERT INTO `d_setting` VALUES('10','fields','itemid,title,thumb,linkurl,style,catid,introduce,addtime,edittime,username,answer,process,credit');
INSERT INTO `d_setting` VALUES('10','order','addtime desc');
INSERT INTO `d_setting` VALUES('10','editor','Simple');
INSERT INTO `d_setting` VALUES('10','introduce_length','0');
INSERT INTO `d_setting` VALUES('10','thumb_height','90');
INSERT INTO `d_setting` VALUES('10','thumb_width','120');
INSERT INTO `d_setting` VALUES('10','credit_maxanswer','50');
INSERT INTO `d_setting` VALUES('10','credit_vote','1');
INSERT INTO `d_setting` VALUES('10','credit_maxvote','30');
INSERT INTO `d_setting` VALUES('10','credit_del_answer','5');
INSERT INTO `d_setting` VALUES('10','credit_deal','20');
INSERT INTO `d_setting` VALUES('10','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('10','title_list','{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('10','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('10','keywords_index','');
INSERT INTO `d_setting` VALUES('10','keywords_list','');
INSERT INTO `d_setting` VALUES('10','keywords_show','');
INSERT INTO `d_setting` VALUES('10','description_index','');
INSERT INTO `d_setting` VALUES('10','description_list','');
INSERT INTO `d_setting` VALUES('10','description_show','');
INSERT INTO `d_setting` VALUES('10','module','know');
INSERT INTO `d_setting` VALUES('11','credit_add','2');
INSERT INTO `d_setting` VALUES('11','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('11','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('11','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('11','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('11','seo_description_show','');
INSERT INTO `d_setting` VALUES('11','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('11','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('11','seo_description_list','');
INSERT INTO `d_setting` VALUES('11','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('11','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('11','seo_description_index','');
INSERT INTO `d_setting` VALUES('11','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('11','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('11','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('11','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('11','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('11','show_html','0');
INSERT INTO `d_setting` VALUES('11','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('11','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('11','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('11','list_html','0');
INSERT INTO `d_setting` VALUES('11','index_html','0');
INSERT INTO `d_setting` VALUES('11','pagesize','20');
INSERT INTO `d_setting` VALUES('11','page_icat','8');
INSERT INTO `d_setting` VALUES('11','level_item','推荐信息|幻灯图片|推荐图文|头条相关|头条推荐|视频报道');
INSERT INTO `d_setting` VALUES('11','level','推荐专题|暂未指定|推荐图文|头条相关|头条推荐');
INSERT INTO `d_setting` VALUES('11','fulltext','0');
INSERT INTO `d_setting` VALUES('11','split','0');
INSERT INTO `d_setting` VALUES('11','clear_link','0');
INSERT INTO `d_setting` VALUES('11','cat_property','0');
INSERT INTO `d_setting` VALUES('11','save_remotepic','0');
INSERT INTO `d_setting` VALUES('11','fields','itemid,title,thumb,linkurl,style,catid,introduce,addtime,edittime');
INSERT INTO `d_setting` VALUES('11','editor','Destoon');
INSERT INTO `d_setting` VALUES('11','order','addtime desc');
INSERT INTO `d_setting` VALUES('11','introduce_length','120');
INSERT INTO `d_setting` VALUES('11','banner_height','200');
INSERT INTO `d_setting` VALUES('11','banner_width','960');
INSERT INTO `d_setting` VALUES('11','thumb_height','90');
INSERT INTO `d_setting` VALUES('11','thumb_width','120');
INSERT INTO `d_setting` VALUES('11','credit_del','5');
INSERT INTO `d_setting` VALUES('11','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('11','title_list','{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('11','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('11','keywords_index','');
INSERT INTO `d_setting` VALUES('11','keywords_list','');
INSERT INTO `d_setting` VALUES('11','keywords_show','');
INSERT INTO `d_setting` VALUES('11','description_index','');
INSERT INTO `d_setting` VALUES('11','description_list','');
INSERT INTO `d_setting` VALUES('11','description_show','');
INSERT INTO `d_setting` VALUES('11','module','special');
INSERT INTO `d_setting` VALUES('12','fee_period','0');
INSERT INTO `d_setting` VALUES('12','fee_view','0');
INSERT INTO `d_setting` VALUES('12','fee_add','0');
INSERT INTO `d_setting` VALUES('12','fee_currency','money');
INSERT INTO `d_setting` VALUES('12','fee_mode','1');
INSERT INTO `d_setting` VALUES('12','question_add','2');
INSERT INTO `d_setting` VALUES('12','captcha_add','2');
INSERT INTO `d_setting` VALUES('12','check_add','2');
INSERT INTO `d_setting` VALUES('12','group_color','6,7');
INSERT INTO `d_setting` VALUES('12','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('12','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('12','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('12','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('12','seo_description_show','');
INSERT INTO `d_setting` VALUES('12','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('12','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('12','seo_description_list','');
INSERT INTO `d_setting` VALUES('12','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('12','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('12','seo_description_index','');
INSERT INTO `d_setting` VALUES('12','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('12','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('12','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('12','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('12','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('12','show_html','0');
INSERT INTO `d_setting` VALUES('12','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('12','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('12','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('12','list_html','0');
INSERT INTO `d_setting` VALUES('12','index_html','0');
INSERT INTO `d_setting` VALUES('12','swfu_max','20');
INSERT INTO `d_setting` VALUES('12','max_width','800');
INSERT INTO `d_setting` VALUES('12','pagesize','18');
INSERT INTO `d_setting` VALUES('12','page_irec','4');
INSERT INTO `d_setting` VALUES('12','page_icat','2');
INSERT INTO `d_setting` VALUES('12','page_islide','3');
INSERT INTO `d_setting` VALUES('12','level','推荐图库|幻灯图片|推荐图文|头条相关|头条推荐');
INSERT INTO `d_setting` VALUES('12','fulltext','0');
INSERT INTO `d_setting` VALUES('12','split','0');
INSERT INTO `d_setting` VALUES('12','keylink','0');
INSERT INTO `d_setting` VALUES('12','clear_link','0');
INSERT INTO `d_setting` VALUES('12','save_remotepic','0');
INSERT INTO `d_setting` VALUES('12','cat_property','0');
INSERT INTO `d_setting` VALUES('12','fields','itemid,title,thumb,linkurl,style,catid,introduce,addtime,edittime,username,items,open');
INSERT INTO `d_setting` VALUES('12','introduce_length','120');
INSERT INTO `d_setting` VALUES('12','editor','Simple');
INSERT INTO `d_setting` VALUES('12','order','addtime desc');
INSERT INTO `d_setting` VALUES('12','maxitem','30');
INSERT INTO `d_setting` VALUES('12','thumb_height','90');
INSERT INTO `d_setting` VALUES('12','thumb_width','120');
INSERT INTO `d_setting` VALUES('12','template_my','');
INSERT INTO `d_setting` VALUES('12','template_search','');
INSERT INTO `d_setting` VALUES('12','template_show','');
INSERT INTO `d_setting` VALUES('12','template_list','');
INSERT INTO `d_setting` VALUES('12','template_index','');
INSERT INTO `d_setting` VALUES('12','fee_back','0');
INSERT INTO `d_setting` VALUES('12','pre_view','500');
INSERT INTO `d_setting` VALUES('12','credit_add','2');
INSERT INTO `d_setting` VALUES('12','credit_del','5');
INSERT INTO `d_setting` VALUES('12','credit_color','100');
INSERT INTO `d_setting` VALUES('12','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('12','title_list','{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('12','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('12','keywords_index','');
INSERT INTO `d_setting` VALUES('12','keywords_list','');
INSERT INTO `d_setting` VALUES('12','keywords_show','');
INSERT INTO `d_setting` VALUES('12','description_index','');
INSERT INTO `d_setting` VALUES('12','description_list','');
INSERT INTO `d_setting` VALUES('12','description_show','');
INSERT INTO `d_setting` VALUES('12','module','photo');
INSERT INTO `d_setting` VALUES('13','fee_back','0');
INSERT INTO `d_setting` VALUES('13','fee_period','0');
INSERT INTO `d_setting` VALUES('13','fee_add','0');
INSERT INTO `d_setting` VALUES('13','fee_currency','money');
INSERT INTO `d_setting` VALUES('13','fee_mode','1');
INSERT INTO `d_setting` VALUES('13','question_add','2');
INSERT INTO `d_setting` VALUES('13','captcha_add','2');
INSERT INTO `d_setting` VALUES('13','check_add','2');
INSERT INTO `d_setting` VALUES('13','question_message','2');
INSERT INTO `d_setting` VALUES('13','captcha_message','2');
INSERT INTO `d_setting` VALUES('13','group_refresh','7');
INSERT INTO `d_setting` VALUES('13','group_color','6,7');
INSERT INTO `d_setting` VALUES('13','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('13','group_contact','6,7');
INSERT INTO `d_setting` VALUES('13','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('13','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('13','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('13','seo_description_show','');
INSERT INTO `d_setting` VALUES('13','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('13','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('13','seo_description_list','');
INSERT INTO `d_setting` VALUES('13','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('13','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('13','seo_description_index','');
INSERT INTO `d_setting` VALUES('13','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('13','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('13','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('13','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('13','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('13','show_html','0');
INSERT INTO `d_setting` VALUES('13','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('13','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('13','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('13','list_html','0');
INSERT INTO `d_setting` VALUES('13','index_html','0');
INSERT INTO `d_setting` VALUES('13','page_subcat','6');
INSERT INTO `d_setting` VALUES('13','max_width','550');
INSERT INTO `d_setting` VALUES('13','pagesize','20');
INSERT INTO `d_setting` VALUES('13','page_icat','6');
INSERT INTO `d_setting` VALUES('13','keylink','0');
INSERT INTO `d_setting` VALUES('13','split','0');
INSERT INTO `d_setting` VALUES('13','fulltext','0');
INSERT INTO `d_setting` VALUES('13','level','推荐品牌');
INSERT INTO `d_setting` VALUES('13','page_irec','20');
INSERT INTO `d_setting` VALUES('13','cat_property','0');
INSERT INTO `d_setting` VALUES('13','save_remotepic','0');
INSERT INTO `d_setting` VALUES('13','clear_link','0');
INSERT INTO `d_setting` VALUES('13','message_ask','请问我这个地方有加盟商了吗？|我想加盟，请来电话告诉我具体细节。|初步打算加盟贵公司，请寄资料。|请问贵公司哪里有样板店或直营店？|想了解加盟细节，请尽快寄一份资料。 ');
INSERT INTO `d_setting` VALUES('13','fields','itemid,title,thumb,linkurl,style,catid,areaid,introduce,addtime,edittime,username,company,groupid,vip,qq,msn,ali,skype,validated');
INSERT INTO `d_setting` VALUES('13','editor','Destoon');
INSERT INTO `d_setting` VALUES('13','order','editdate desc,vip desc,edittime desc');
INSERT INTO `d_setting` VALUES('13','thumb_height','60');
INSERT INTO `d_setting` VALUES('13','introduce_length','120');
INSERT INTO `d_setting` VALUES('13','thumb_width','180');
INSERT INTO `d_setting` VALUES('13','template_message','');
INSERT INTO `d_setting` VALUES('13','template_my','');
INSERT INTO `d_setting` VALUES('13','template_search','');
INSERT INTO `d_setting` VALUES('13','template_product','');
INSERT INTO `d_setting` VALUES('13','template_show','');
INSERT INTO `d_setting` VALUES('13','template_list','');
INSERT INTO `d_setting` VALUES('13','template_index','');
INSERT INTO `d_setting` VALUES('13','fee_view','0');
INSERT INTO `d_setting` VALUES('13','credit_add','2');
INSERT INTO `d_setting` VALUES('13','credit_del','5');
INSERT INTO `d_setting` VALUES('13','credit_color','100');
INSERT INTO `d_setting` VALUES('13','credit_refresh','1');
INSERT INTO `d_setting` VALUES('13','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('13','title_list','{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('13','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('13','keywords_index','{$seo_modulename}{$seo_sitename}{$seo_sitetitle}');
INSERT INTO `d_setting` VALUES('13','keywords_list','');
INSERT INTO `d_setting` VALUES('13','keywords_show','');
INSERT INTO `d_setting` VALUES('13','description_index','{$seo_modulename}{$seo_sitename}{$seo_sitetitle}');
INSERT INTO `d_setting` VALUES('13','description_list','');
INSERT INTO `d_setting` VALUES('13','description_show','');
INSERT INTO `d_setting` VALUES('13','module','brand');
INSERT INTO `d_setting` VALUES('14','fee_mode','1');
INSERT INTO `d_setting` VALUES('14','question_add','2');
INSERT INTO `d_setting` VALUES('14','captcha_add','2');
INSERT INTO `d_setting` VALUES('14','check_add','2');
INSERT INTO `d_setting` VALUES('14','question_message','2');
INSERT INTO `d_setting` VALUES('14','captcha_message','2');
INSERT INTO `d_setting` VALUES('14','group_upload','6,7');
INSERT INTO `d_setting` VALUES('14','group_color','6,7');
INSERT INTO `d_setting` VALUES('14','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('14','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('14','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('14','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('14','seo_description_show','');
INSERT INTO `d_setting` VALUES('14','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('14','seo_description_list','');
INSERT INTO `d_setting` VALUES('14','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('14','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('14','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('14','seo_description_index','');
INSERT INTO `d_setting` VALUES('14','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('14','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('14','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('14','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('14','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('14','show_html','0');
INSERT INTO `d_setting` VALUES('14','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('14','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('14','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('14','list_html','0');
INSERT INTO `d_setting` VALUES('14','index_html','0');
INSERT INTO `d_setting` VALUES('14','max_width','550');
INSERT INTO `d_setting` VALUES('14','pagesize','20');
INSERT INTO `d_setting` VALUES('14','page_icat','4');
INSERT INTO `d_setting` VALUES('14','page_irec','8');
INSERT INTO `d_setting` VALUES('14','swfu','1');
INSERT INTO `d_setting` VALUES('14','upload','flv|swf|mp4|wmv');
INSERT INTO `d_setting` VALUES('14','flvend','');
INSERT INTO `d_setting` VALUES('14','flvstart','');
INSERT INTO `d_setting` VALUES('14','flvlink','');
INSERT INTO `d_setting` VALUES('14','flvmargin','10 auto auto 10');
INSERT INTO `d_setting` VALUES('14','autostart','1');
INSERT INTO `d_setting` VALUES('14','flvlogo','video.png');
INSERT INTO `d_setting` VALUES('14','player','FlashPlayer|MediaPlayer|RealPlayer');
INSERT INTO `d_setting` VALUES('14','level','推荐视频');
INSERT INTO `d_setting` VALUES('14','fulltext','0');
INSERT INTO `d_setting` VALUES('14','split','0');
INSERT INTO `d_setting` VALUES('14','keylink','0');
INSERT INTO `d_setting` VALUES('14','clear_link','0');
INSERT INTO `d_setting` VALUES('14','save_remotepic','0');
INSERT INTO `d_setting` VALUES('14','cat_property','0');
INSERT INTO `d_setting` VALUES('14','order','addtime desc');
INSERT INTO `d_setting` VALUES('14','fields','itemid,title,thumb,linkurl,style,catid,introduce,addtime,edittime,username,hits');
INSERT INTO `d_setting` VALUES('14','video_height','400');
INSERT INTO `d_setting` VALUES('14','introduce_length','120');
INSERT INTO `d_setting` VALUES('14','editor','Destoon');
INSERT INTO `d_setting` VALUES('14','video_width','480');
INSERT INTO `d_setting` VALUES('14','thumb_height','90');
INSERT INTO `d_setting` VALUES('14','thumb_width','120');
INSERT INTO `d_setting` VALUES('14','template_my','');
INSERT INTO `d_setting` VALUES('14','template_search','');
INSERT INTO `d_setting` VALUES('14','template_show','');
INSERT INTO `d_setting` VALUES('14','template_list','');
INSERT INTO `d_setting` VALUES('14','template_index','');
INSERT INTO `d_setting` VALUES('14','fee_currency','money');
INSERT INTO `d_setting` VALUES('14','fee_add','0');
INSERT INTO `d_setting` VALUES('14','fee_view','0');
INSERT INTO `d_setting` VALUES('14','fee_period','0');
INSERT INTO `d_setting` VALUES('14','fee_back','0');
INSERT INTO `d_setting` VALUES('14','credit_add','2');
INSERT INTO `d_setting` VALUES('14','credit_del','5');
INSERT INTO `d_setting` VALUES('14','credit_color','100');
INSERT INTO `d_setting` VALUES('14','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('14','title_list','{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('14','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('14','keywords_index','');
INSERT INTO `d_setting` VALUES('14','keywords_list','');
INSERT INTO `d_setting` VALUES('14','keywords_show','');
INSERT INTO `d_setting` VALUES('14','description_index','');
INSERT INTO `d_setting` VALUES('14','description_list','');
INSERT INTO `d_setting` VALUES('14','description_show','');
INSERT INTO `d_setting` VALUES('14','module','video');
INSERT INTO `d_setting` VALUES('15','fee_currency','money');
INSERT INTO `d_setting` VALUES('15','fee_mode','1');
INSERT INTO `d_setting` VALUES('15','question_add','2');
INSERT INTO `d_setting` VALUES('15','captcha_add','2');
INSERT INTO `d_setting` VALUES('15','check_add','2');
INSERT INTO `d_setting` VALUES('15','question_message','2');
INSERT INTO `d_setting` VALUES('15','captcha_message','2');
INSERT INTO `d_setting` VALUES('15','group_upload','6,7');
INSERT INTO `d_setting` VALUES('15','group_color','6,7');
INSERT INTO `d_setting` VALUES('15','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('15','group_contact','5,6,7');
INSERT INTO `d_setting` VALUES('15','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('15','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('15','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('15','seo_description_show','');
INSERT INTO `d_setting` VALUES('15','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('15','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('15','seo_description_list','');
INSERT INTO `d_setting` VALUES('15','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('15','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('15','seo_description_index','');
INSERT INTO `d_setting` VALUES('15','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('15','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('15','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('15','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('15','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('15','show_html','0');
INSERT INTO `d_setting` VALUES('15','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('15','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('15','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('15','list_html','0');
INSERT INTO `d_setting` VALUES('15','index_html','0');
INSERT INTO `d_setting` VALUES('15','max_width','550');
INSERT INTO `d_setting` VALUES('15','page_irec','8');
INSERT INTO `d_setting` VALUES('15','page_icat','10');
INSERT INTO `d_setting` VALUES('15','pagesize','20');
INSERT INTO `d_setting` VALUES('15','swfu','0');
INSERT INTO `d_setting` VALUES('15','upload','rar|zip|pdf|jpg|gif|png|doc|ppt|xls|docx|pptx|xlsx|psd');
INSERT INTO `d_setting` VALUES('15','readsize','10');
INSERT INTO `d_setting` VALUES('15','level','推荐下载');
INSERT INTO `d_setting` VALUES('15','fulltext','0');
INSERT INTO `d_setting` VALUES('15','split','0');
INSERT INTO `d_setting` VALUES('15','keylink','0');
INSERT INTO `d_setting` VALUES('15','clear_link','0');
INSERT INTO `d_setting` VALUES('15','save_remotepic','0');
INSERT INTO `d_setting` VALUES('15','cat_property','0');
INSERT INTO `d_setting` VALUES('15','order','addtime desc');
INSERT INTO `d_setting` VALUES('15','fields','itemid,title,thumb,linkurl,style,catid,introduce,addtime,edittime,username,fileext,filesize,unit');
INSERT INTO `d_setting` VALUES('15','thumb_height','90');
INSERT INTO `d_setting` VALUES('15','introduce_length','120');
INSERT INTO `d_setting` VALUES('15','editor','Destoon');
INSERT INTO `d_setting` VALUES('15','thumb_width','120');
INSERT INTO `d_setting` VALUES('15','template_my','');
INSERT INTO `d_setting` VALUES('15','template_search','');
INSERT INTO `d_setting` VALUES('15','template_show','');
INSERT INTO `d_setting` VALUES('15','template_list','');
INSERT INTO `d_setting` VALUES('15','template_index','');
INSERT INTO `d_setting` VALUES('16','credit_refresh','1');
INSERT INTO `d_setting` VALUES('16','credit_elite','100');
INSERT INTO `d_setting` VALUES('16','credit_color','100');
INSERT INTO `d_setting` VALUES('16','credit_del','5');
INSERT INTO `d_setting` VALUES('16','credit_add','2');
INSERT INTO `d_setting` VALUES('16','fee_back','0');
INSERT INTO `d_setting` VALUES('16','fee_period','0');
INSERT INTO `d_setting` VALUES('16','fee_view','0');
INSERT INTO `d_setting` VALUES('16','fee_add','0');
INSERT INTO `d_setting` VALUES('16','fee_currency','money');
INSERT INTO `d_setting` VALUES('16','fee_mode','1');
INSERT INTO `d_setting` VALUES('16','question_add','2');
INSERT INTO `d_setting` VALUES('16','captcha_add','2');
INSERT INTO `d_setting` VALUES('16','check_add','2');
INSERT INTO `d_setting` VALUES('16','question_inquiry','2');
INSERT INTO `d_setting` VALUES('16','captcha_inquiry','2');
INSERT INTO `d_setting` VALUES('16','group_elite','3,5,6,7');
INSERT INTO `d_setting` VALUES('16','group_compare','3,5,6,7');
INSERT INTO `d_setting` VALUES('16','group_refresh','7');
INSERT INTO `d_setting` VALUES('16','group_color','6,7');
INSERT INTO `d_setting` VALUES('16','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('16','group_contact','3,5,6,7');
INSERT INTO `d_setting` VALUES('16','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('16','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('16','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('16','seo_description_show','');
INSERT INTO `d_setting` VALUES('16','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('16','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('16','seo_description_list','');
INSERT INTO `d_setting` VALUES('16','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('16','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('16','seo_description_index','');
INSERT INTO `d_setting` VALUES('16','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('16','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('16','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('16','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('16','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('16','show_html','0');
INSERT INTO `d_setting` VALUES('16','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('16','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('16','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('16','list_html','0');
INSERT INTO `d_setting` VALUES('16','index_html','0');
INSERT INTO `d_setting` VALUES('16','page_subcat','5');
INSERT INTO `d_setting` VALUES('16','max_width','900');
INSERT INTO `d_setting` VALUES('16','pagesize','20');
INSERT INTO `d_setting` VALUES('16','page_inew','12');
INSERT INTO `d_setting` VALUES('16','page_irec','5');
INSERT INTO `d_setting` VALUES('16','max_cart','30');
INSERT INTO `d_setting` VALUES('16','checkorder','1');
INSERT INTO `d_setting` VALUES('16','swfu','2');
INSERT INTO `d_setting` VALUES('16','level','推荐商品');
INSERT INTO `d_setting` VALUES('16','fulltext','0');
INSERT INTO `d_setting` VALUES('16','split','0');
INSERT INTO `d_setting` VALUES('16','keylink','0');
INSERT INTO `d_setting` VALUES('16','clear_link','0');
INSERT INTO `d_setting` VALUES('16','thumb_width','100');
INSERT INTO `d_setting` VALUES('16','thumb_height','100');
INSERT INTO `d_setting` VALUES('16','introduce_length','0');
INSERT INTO `d_setting` VALUES('16','editor','Destoon');
INSERT INTO `d_setting` VALUES('16','order','editdate desc,vip desc,edittime desc');
INSERT INTO `d_setting` VALUES('16','fields','itemid,title,thumb,linkurl,style,catid,areaid,brand,addtime,edittime,username,company,groupid,vip,qq,msn,ali,skype,validated,price,amount,orders,comments');
INSERT INTO `d_setting` VALUES('16','cat_property','0');
INSERT INTO `d_setting` VALUES('16','save_remotepic','0');
INSERT INTO `d_setting` VALUES('16','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('16','title_list','{$seo_catname}{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}{$seo_cattitle}{$seo_modulename}{$seo_sitename}{$seo_page}');
INSERT INTO `d_setting` VALUES('16','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('16','keywords_index','{$seo_modulename}{$seo_sitename}{$seo_sitetitle}');
INSERT INTO `d_setting` VALUES('16','keywords_list','');
INSERT INTO `d_setting` VALUES('16','keywords_show','');
INSERT INTO `d_setting` VALUES('16','description_index','{$seo_modulename}{$seo_sitename}{$seo_sitetitle}');
INSERT INTO `d_setting` VALUES('16','description_list','');
INSERT INTO `d_setting` VALUES('16','description_show','{$seo_showtitle}{$seo_showintroduce}{$seo_catname}{$seo_catdescription}{$seo_modulename}{$seo_sitename}{$seo_sitedescription}');
INSERT INTO `d_setting` VALUES('16','module','mall');
INSERT INTO `d_setting` VALUES('17','credit_add','2');
INSERT INTO `d_setting` VALUES('17','fee_back','0');
INSERT INTO `d_setting` VALUES('17','fee_period','0');
INSERT INTO `d_setting` VALUES('17','fee_view','0');
INSERT INTO `d_setting` VALUES('17','fee_add','0');
INSERT INTO `d_setting` VALUES('17','fee_currency','money');
INSERT INTO `d_setting` VALUES('17','fee_mode','1');
INSERT INTO `d_setting` VALUES('17','question_add','2');
INSERT INTO `d_setting` VALUES('17','captcha_add','2');
INSERT INTO `d_setting` VALUES('17','check_add','2');
INSERT INTO `d_setting` VALUES('17','question_inquiry','2');
INSERT INTO `d_setting` VALUES('17','captcha_inquiry','2');
INSERT INTO `d_setting` VALUES('17','group_refresh','7');
INSERT INTO `d_setting` VALUES('17','group_color','6,7');
INSERT INTO `d_setting` VALUES('17','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('17','group_contact','3,5,6,7');
INSERT INTO `d_setting` VALUES('17','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('17','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('17','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('17','seo_description_show','');
INSERT INTO `d_setting` VALUES('17','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('17','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('17','seo_description_list','');
INSERT INTO `d_setting` VALUES('17','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('17','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('17','seo_description_index','');
INSERT INTO `d_setting` VALUES('17','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('17','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('17','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('17','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('17','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('17','show_html','0');
INSERT INTO `d_setting` VALUES('17','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('17','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('17','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('17','list_html','0');
INSERT INTO `d_setting` VALUES('17','index_html','0');
INSERT INTO `d_setting` VALUES('17','page_subcat','9');
INSERT INTO `d_setting` VALUES('17','max_width','550');
INSERT INTO `d_setting` VALUES('17','pagesize','9');
INSERT INTO `d_setting` VALUES('17','swfu','2');
INSERT INTO `d_setting` VALUES('17','level','推荐团购');
INSERT INTO `d_setting` VALUES('17','fulltext','0');
INSERT INTO `d_setting` VALUES('17','split','0');
INSERT INTO `d_setting` VALUES('17','keylink','0');
INSERT INTO `d_setting` VALUES('17','clear_link','0');
INSERT INTO `d_setting` VALUES('17','cat_property','0');
INSERT INTO `d_setting` VALUES('17','save_remotepic','0');
INSERT INTO `d_setting` VALUES('17','fields','itemid,title,thumb,linkurl,style,catid,areaid,introduce,addtime,edittime,username,company,groupid,vip,qq,msn,ali,skype,validated,price,marketprice,savemoney,discount,sales,orders,minamount,amount');
INSERT INTO `d_setting` VALUES('17','order','addtime desc');
INSERT INTO `d_setting` VALUES('17','editor','Destoon');
INSERT INTO `d_setting` VALUES('17','introduce_length','120');
INSERT INTO `d_setting` VALUES('17','thumb_height','300');
INSERT INTO `d_setting` VALUES('17','thumb_width','400');
INSERT INTO `d_setting` VALUES('17','credit_del','5');
INSERT INTO `d_setting` VALUES('17','credit_color','100');
INSERT INTO `d_setting` VALUES('17','credit_refresh','1');
INSERT INTO `d_setting` VALUES('17','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('17','title_list','{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('17','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('17','keywords_index','');
INSERT INTO `d_setting` VALUES('17','keywords_list','');
INSERT INTO `d_setting` VALUES('17','keywords_show','');
INSERT INTO `d_setting` VALUES('17','description_index','');
INSERT INTO `d_setting` VALUES('17','description_list','');
INSERT INTO `d_setting` VALUES('17','description_show','');
INSERT INTO `d_setting` VALUES('17','module','group');
INSERT INTO `d_setting` VALUES('21','fee_currency','money');
INSERT INTO `d_setting` VALUES('21','fee_mode','1');
INSERT INTO `d_setting` VALUES('21','question_add','2');
INSERT INTO `d_setting` VALUES('21','captcha_add','2');
INSERT INTO `d_setting` VALUES('21','check_add','2');
INSERT INTO `d_setting` VALUES('21','group_color','6,7');
INSERT INTO `d_setting` VALUES('21','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('21','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('21','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('21','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('21','seo_description_show','');
INSERT INTO `d_setting` VALUES('21','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('21','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('21','seo_description_list','');
INSERT INTO `d_setting` VALUES('21','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('21','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('21','seo_description_index','');
INSERT INTO `d_setting` VALUES('21','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('21','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('21','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('21','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('21','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('21','show_html','0');
INSERT INTO `d_setting` VALUES('21','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('21','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('21','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('21','list_html','0');
INSERT INTO `d_setting` VALUES('21','index_html','0');
INSERT INTO `d_setting` VALUES('21','show_np','1');
INSERT INTO `d_setting` VALUES('21','max_width','550');
INSERT INTO `d_setting` VALUES('21','page_shits','10');
INSERT INTO `d_setting` VALUES('21','page_srec','10');
INSERT INTO `d_setting` VALUES('21','page_srecimg','4');
INSERT INTO `d_setting` VALUES('21','page_srelate','10');
INSERT INTO `d_setting` VALUES('21','page_lhits','10');
INSERT INTO `d_setting` VALUES('21','page_lrec','10');
INSERT INTO `d_setting` VALUES('21','page_lrecimg','4');
INSERT INTO `d_setting` VALUES('21','show_lcat','1');
INSERT INTO `d_setting` VALUES('21','page_child','6');
INSERT INTO `d_setting` VALUES('21','pagesize','20');
INSERT INTO `d_setting` VALUES('21','page_ihits','10');
INSERT INTO `d_setting` VALUES('21','page_irecimg','6');
INSERT INTO `d_setting` VALUES('21','page_icat','6');
INSERT INTO `d_setting` VALUES('21','show_icat','1');
INSERT INTO `d_setting` VALUES('21','page_islide','3');
INSERT INTO `d_setting` VALUES('21','swfu','2');
INSERT INTO `d_setting` VALUES('21','level','推荐文章|幻灯图片|推荐图文|头条相关|头条推荐');
INSERT INTO `d_setting` VALUES('21','fulltext','1');
INSERT INTO `d_setting` VALUES('21','split','0');
INSERT INTO `d_setting` VALUES('21','keylink','1');
INSERT INTO `d_setting` VALUES('21','clear_link','0');
INSERT INTO `d_setting` VALUES('21','cat_property','0');
INSERT INTO `d_setting` VALUES('21','save_remotepic','0');
INSERT INTO `d_setting` VALUES('21','fields','itemid,title,thumb,linkurl,style,catid,introduce,addtime,edittime,username,islink');
INSERT INTO `d_setting` VALUES('21','editor','Default');
INSERT INTO `d_setting` VALUES('21','order','addtime desc');
INSERT INTO `d_setting` VALUES('21','introduce_length','120');
INSERT INTO `d_setting` VALUES('21','thumb_height','90');
INSERT INTO `d_setting` VALUES('21','thumb_width','120');
INSERT INTO `d_setting` VALUES('21','template_my','');
INSERT INTO `d_setting` VALUES('21','template_search','');
INSERT INTO `d_setting` VALUES('21','template_show','');
INSERT INTO `d_setting` VALUES('21','template_list','');
INSERT INTO `d_setting` VALUES('21','template_index','');
INSERT INTO `d_setting` VALUES('21','fee_add','0');
INSERT INTO `d_setting` VALUES('21','fee_view','0');
INSERT INTO `d_setting` VALUES('21','fee_period','0');
INSERT INTO `d_setting` VALUES('21','fee_back','0');
INSERT INTO `d_setting` VALUES('21','pre_view','500');
INSERT INTO `d_setting` VALUES('21','credit_add','2');
INSERT INTO `d_setting` VALUES('21','credit_del','5');
INSERT INTO `d_setting` VALUES('21','credit_color','100');
INSERT INTO `d_setting` VALUES('21','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('21','title_list','{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}{$catname}');
INSERT INTO `d_setting` VALUES('21','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}{$seo_sitetitle}');
INSERT INTO `d_setting` VALUES('21','keywords_index','');
INSERT INTO `d_setting` VALUES('21','keywords_list','');
INSERT INTO `d_setting` VALUES('21','keywords_show','');
INSERT INTO `d_setting` VALUES('21','description_index','');
INSERT INTO `d_setting` VALUES('21','description_list','');
INSERT INTO `d_setting` VALUES('21','description_show','');
INSERT INTO `d_setting` VALUES('21','module','article');
INSERT INTO `d_setting` VALUES('22','fee_back','0');
INSERT INTO `d_setting` VALUES('22','fee_period','0');
INSERT INTO `d_setting` VALUES('22','fee_view','0');
INSERT INTO `d_setting` VALUES('22','fee_add','0');
INSERT INTO `d_setting` VALUES('22','fee_currency','money');
INSERT INTO `d_setting` VALUES('22','fee_mode','1');
INSERT INTO `d_setting` VALUES('22','question_add','2');
INSERT INTO `d_setting` VALUES('22','captcha_add','2');
INSERT INTO `d_setting` VALUES('22','check_add','2');
INSERT INTO `d_setting` VALUES('22','question_message','2');
INSERT INTO `d_setting` VALUES('22','captcha_message','2');
INSERT INTO `d_setting` VALUES('22','group_refresh','7');
INSERT INTO `d_setting` VALUES('22','group_color','6,7');
INSERT INTO `d_setting` VALUES('22','group_search','3,5,6,7');
INSERT INTO `d_setting` VALUES('22','group_contact','6,7');
INSERT INTO `d_setting` VALUES('22','group_show','3,5,6,7');
INSERT INTO `d_setting` VALUES('22','group_list','3,5,6,7');
INSERT INTO `d_setting` VALUES('22','group_index','3,5,6,7');
INSERT INTO `d_setting` VALUES('22','seo_description_show','');
INSERT INTO `d_setting` VALUES('22','seo_keywords_show','');
INSERT INTO `d_setting` VALUES('22','seo_title_show','{内容标题}{分隔符}{分类名称}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('22','seo_description_list','');
INSERT INTO `d_setting` VALUES('22','seo_keywords_list','');
INSERT INTO `d_setting` VALUES('22','seo_title_list','{分类SEO标题}{页码}{模块名称}{分隔符}{网站名称}');
INSERT INTO `d_setting` VALUES('22','seo_description_index','');
INSERT INTO `d_setting` VALUES('22','seo_keywords_index','');
INSERT INTO `d_setting` VALUES('22','seo_title_index','{模块名称}{分隔符}{页码}{网站名称}');
INSERT INTO `d_setting` VALUES('22','php_item_urlid','0');
INSERT INTO `d_setting` VALUES('22','htm_item_urlid','1');
INSERT INTO `d_setting` VALUES('22','htm_item_prefix','');
INSERT INTO `d_setting` VALUES('22','show_html','0');
INSERT INTO `d_setting` VALUES('22','php_list_urlid','0');
INSERT INTO `d_setting` VALUES('22','htm_list_urlid','0');
INSERT INTO `d_setting` VALUES('22','htm_list_prefix','');
INSERT INTO `d_setting` VALUES('22','list_html','0');
INSERT INTO `d_setting` VALUES('22','index_html','0');
INSERT INTO `d_setting` VALUES('22','page_subcat','5');
INSERT INTO `d_setting` VALUES('22','max_width','550');
INSERT INTO `d_setting` VALUES('22','page_srelate','10');
INSERT INTO `d_setting` VALUES('22','show_message','1');
INSERT INTO `d_setting` VALUES('22','page_lkw','10');
INSERT INTO `d_setting` VALUES('22','show_larea','1');
INSERT INTO `d_setting` VALUES('22','show_lcat','1');
INSERT INTO `d_setting` VALUES('22','pagesize','20');
INSERT INTO `d_setting` VALUES('22','page_ihits','10');
INSERT INTO `d_setting` VALUES('22','show_iarea','1');
INSERT INTO `d_setting` VALUES('22','show_icat','1');
INSERT INTO `d_setting` VALUES('22','page_icat','8');
INSERT INTO `d_setting` VALUES('22','page_irec','8');
INSERT INTO `d_setting` VALUES('22','swfu','2');
INSERT INTO `d_setting` VALUES('22','clear_link','0');
INSERT INTO `d_setting` VALUES('22','keylink','0');
INSERT INTO `d_setting` VALUES('22','split','0');
INSERT INTO `d_setting` VALUES('22','fulltext','0');
INSERT INTO `d_setting` VALUES('22','level','推荐信息');
INSERT INTO `d_setting` VALUES('22','cat_property','0');
INSERT INTO `d_setting` VALUES('22','save_remotepic','0');
INSERT INTO `d_setting` VALUES('22','message_ask','请问我这个地方有加盟商了吗？|我想加盟，请来电话告诉我具体细节。|初步打算加盟贵公司，请寄资料。|请问贵公司哪里有样板店或直营店？|想了解加盟细节，请尽快寄一份资料。 ');
INSERT INTO `d_setting` VALUES('22','order','edittime desc');
INSERT INTO `d_setting` VALUES('22','fields','itemid,title,thumb,linkurl,style,catid,areaid,introduce,addtime,edittime,username,company,groupid,vip,qq,msn,ali,skype,validated,islink');
INSERT INTO `d_setting` VALUES('22','thumb_height','100');
INSERT INTO `d_setting` VALUES('22','introduce_length','120');
INSERT INTO `d_setting` VALUES('22','editor','Destoon');
INSERT INTO `d_setting` VALUES('22','thumb_width','100');
INSERT INTO `d_setting` VALUES('22','template_message','');
INSERT INTO `d_setting` VALUES('22','template_my','');
INSERT INTO `d_setting` VALUES('22','template_search','');
INSERT INTO `d_setting` VALUES('22','template_show','');
INSERT INTO `d_setting` VALUES('22','template_list','');
INSERT INTO `d_setting` VALUES('22','template_index','');
INSERT INTO `d_setting` VALUES('22','credit_add','2');
INSERT INTO `d_setting` VALUES('22','credit_del','5');
INSERT INTO `d_setting` VALUES('22','credit_color','100');
INSERT INTO `d_setting` VALUES('22','credit_refresh','1');
INSERT INTO `d_setting` VALUES('22','title_index','{$seo_modulename}{$seo_delimiter}{$seo_page}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('22','title_list','{$seo_cattitle}{$seo_page}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('22','title_show','{$seo_showtitle}{$seo_delimiter}{$seo_catname}{$seo_modulename}{$seo_delimiter}{$seo_sitename}');
INSERT INTO `d_setting` VALUES('22','keywords_index','');
INSERT INTO `d_setting` VALUES('22','keywords_list','');
INSERT INTO `d_setting` VALUES('22','keywords_show','');
INSERT INTO `d_setting` VALUES('22','description_index','');
INSERT INTO `d_setting` VALUES('22','description_list','');
INSERT INTO `d_setting` VALUES('22','description_show','');
INSERT INTO `d_setting` VALUES('22','module','info');
INSERT INTO `d_setting` VALUES('pay-tenpay','percent','1');
INSERT INTO `d_setting` VALUES('pay-tenpay','notify','');
INSERT INTO `d_setting` VALUES('pay-tenpay','keycode','');
INSERT INTO `d_setting` VALUES('pay-tenpay','partnerid','');
INSERT INTO `d_setting` VALUES('pay-tenpay','order','1');
INSERT INTO `d_setting` VALUES('pay-tenpay','name','财付通');
INSERT INTO `d_setting` VALUES('pay-tenpay','enable','0');
INSERT INTO `d_setting` VALUES('pay-alipay','percent','1');
INSERT INTO `d_setting` VALUES('pay-alipay','notify','');
INSERT INTO `d_setting` VALUES('pay-alipay','keycode','');
INSERT INTO `d_setting` VALUES('pay-alipay','partnerid','');
INSERT INTO `d_setting` VALUES('pay-alipay','email','');
INSERT INTO `d_setting` VALUES('pay-alipay','order','2');
INSERT INTO `d_setting` VALUES('pay-alipay','name','支付宝');
INSERT INTO `d_setting` VALUES('pay-alipay','enable','0');
INSERT INTO `d_setting` VALUES('pay-chinabank','percent','1');
INSERT INTO `d_setting` VALUES('pay-chinabank','keycode','');
INSERT INTO `d_setting` VALUES('pay-chinabank','partnerid','');
INSERT INTO `d_setting` VALUES('pay-chinabank','order','3');
INSERT INTO `d_setting` VALUES('pay-chinabank','name','网银在线');
INSERT INTO `d_setting` VALUES('pay-chinabank','enable','0');
INSERT INTO `d_setting` VALUES('pay-yeepay','percent','1');
INSERT INTO `d_setting` VALUES('pay-yeepay','keycode','');
INSERT INTO `d_setting` VALUES('pay-yeepay','partnerid','');
INSERT INTO `d_setting` VALUES('pay-yeepay','order','4');
INSERT INTO `d_setting` VALUES('pay-yeepay','name','易宝支付');
INSERT INTO `d_setting` VALUES('pay-yeepay','enable','0');
INSERT INTO `d_setting` VALUES('pay-kq99bill','percent','1');
INSERT INTO `d_setting` VALUES('pay-kq99bill','notify','');
INSERT INTO `d_setting` VALUES('pay-kq99bill','cert','');
INSERT INTO `d_setting` VALUES('pay-kq99bill','partnerid','');
INSERT INTO `d_setting` VALUES('pay-kq99bill','order','5');
INSERT INTO `d_setting` VALUES('pay-kq99bill','name','快钱支付');
INSERT INTO `d_setting` VALUES('pay-kq99bill','enable','0');
INSERT INTO `d_setting` VALUES('pay-chinapay','percent','1');
INSERT INTO `d_setting` VALUES('pay-chinapay','partnerid','');
INSERT INTO `d_setting` VALUES('pay-chinapay','order','6');
INSERT INTO `d_setting` VALUES('pay-chinapay','name','中国银联');
INSERT INTO `d_setting` VALUES('pay-chinapay','enable','0');
INSERT INTO `d_setting` VALUES('pay-paypal','percent','0');
INSERT INTO `d_setting` VALUES('pay-paypal','currency','USD');
INSERT INTO `d_setting` VALUES('pay-paypal','partnerid','');
INSERT INTO `d_setting` VALUES('pay-paypal','order','7');
INSERT INTO `d_setting` VALUES('pay-paypal','name','贝宝');
INSERT INTO `d_setting` VALUES('pay-paypal','enable','0');
INSERT INTO `d_setting` VALUES('oauth-qq','sync','0');
INSERT INTO `d_setting` VALUES('oauth-qq','key','');
INSERT INTO `d_setting` VALUES('oauth-qq','id','');
INSERT INTO `d_setting` VALUES('oauth-qq','order','1');
INSERT INTO `d_setting` VALUES('oauth-qq','name','QQ登录');
INSERT INTO `d_setting` VALUES('oauth-qq','enable','0');
INSERT INTO `d_setting` VALUES('oauth-sina','sync','0');
INSERT INTO `d_setting` VALUES('oauth-sina','key','');
INSERT INTO `d_setting` VALUES('oauth-sina','id','');
INSERT INTO `d_setting` VALUES('oauth-sina','order','2');
INSERT INTO `d_setting` VALUES('oauth-sina','name','新浪微博');
INSERT INTO `d_setting` VALUES('oauth-sina','enable','0');
INSERT INTO `d_setting` VALUES('oauth-baidu','key','');
INSERT INTO `d_setting` VALUES('oauth-baidu','id','');
INSERT INTO `d_setting` VALUES('oauth-baidu','order','3');
INSERT INTO `d_setting` VALUES('oauth-baidu','name','百度');
INSERT INTO `d_setting` VALUES('oauth-baidu','enable','0');
INSERT INTO `d_setting` VALUES('oauth-netease','key','');
INSERT INTO `d_setting` VALUES('oauth-netease','id','');
INSERT INTO `d_setting` VALUES('oauth-netease','order','4');
INSERT INTO `d_setting` VALUES('oauth-msn','key','');
INSERT INTO `d_setting` VALUES('oauth-msn','id','');
INSERT INTO `d_setting` VALUES('oauth-msn','order','5');
INSERT INTO `d_setting` VALUES('oauth-msn','name','MSN');
INSERT INTO `d_setting` VALUES('oauth-msn','enable','0');
INSERT INTO `d_setting` VALUES('group-1','listorder','1');
INSERT INTO `d_setting` VALUES('group-1','reg','0');
INSERT INTO `d_setting` VALUES('group-1','quote_limit','0');
INSERT INTO `d_setting` VALUES('group-1','exhibit_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','exhibit_limit','0');
INSERT INTO `d_setting` VALUES('group-1','group_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','group_limit','0');
INSERT INTO `d_setting` VALUES('group-1','mall_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','mall_limit','0');
INSERT INTO `d_setting` VALUES('group-1','buy_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','buy_limit','0');
INSERT INTO `d_setting` VALUES('group-1','sell_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','sell_limit','0');
INSERT INTO `d_setting` VALUES('group-1','edit_limit','0');
INSERT INTO `d_setting` VALUES('group-1','refresh_limit','0');
INSERT INTO `d_setting` VALUES('group-1','day_limit','0');
INSERT INTO `d_setting` VALUES('group-1','add_limit','0');
INSERT INTO `d_setting` VALUES('group-1','copy','1');
INSERT INTO `d_setting` VALUES('group-1','delete','1');
INSERT INTO `d_setting` VALUES('group-1','vcompany','0');
INSERT INTO `d_setting` VALUES('group-1','vtruename','0');
INSERT INTO `d_setting` VALUES('group-1','vmobile','0');
INSERT INTO `d_setting` VALUES('group-1','vemail','0');
INSERT INTO `d_setting` VALUES('group-1','moduleids','16,5,6,17,7,8,21,22,13,9,10,12,14,15');
INSERT INTO `d_setting` VALUES('group-1','link_limit','0');
INSERT INTO `d_setting` VALUES('group-1','honor_limit','0');
INSERT INTO `d_setting` VALUES('group-1','page_limit','0');
INSERT INTO `d_setting` VALUES('group-1','news_limit','0');
INSERT INTO `d_setting` VALUES('group-1','kf','1');
INSERT INTO `d_setting` VALUES('group-1','stats','1');
INSERT INTO `d_setting` VALUES('group-1','map','1');
INSERT INTO `d_setting` VALUES('group-1','style','0');
INSERT INTO `d_setting` VALUES('group-1','main_d','1,5');
INSERT INTO `d_setting` VALUES('group-1','main_c','1,5');
INSERT INTO `d_setting` VALUES('group-1','home_main','0');
INSERT INTO `d_setting` VALUES('group-1','side_d','0,3,6');
INSERT INTO `d_setting` VALUES('group-1','side_c','0,3,6');
INSERT INTO `d_setting` VALUES('group-1','home_side','0');
INSERT INTO `d_setting` VALUES('group-1','menu_d','0,6,7,11');
INSERT INTO `d_setting` VALUES('group-1','menu_c','0,6,7,11');
INSERT INTO `d_setting` VALUES('group-1','home_menu','0');
INSERT INTO `d_setting` VALUES('group-1','home','0');
INSERT INTO `d_setting` VALUES('group-1','styleid','0');
INSERT INTO `d_setting` VALUES('group-1','homepage','0');
INSERT INTO `d_setting` VALUES('group-1','type_limit','0');
INSERT INTO `d_setting` VALUES('group-1','price_limit','0');
INSERT INTO `d_setting` VALUES('group-1','inquiry_limit','0');
INSERT INTO `d_setting` VALUES('group-1','message_limit','0');
INSERT INTO `d_setting` VALUES('group-1','express_limit','0');
INSERT INTO `d_setting` VALUES('group-1','address_limit','0');
INSERT INTO `d_setting` VALUES('group-1','alert_limit','0');
INSERT INTO `d_setting` VALUES('group-1','favorite_limit','0');
INSERT INTO `d_setting` VALUES('group-1','friend_limit','0');
INSERT INTO `d_setting` VALUES('group-1','inbox_limit','0');
INSERT INTO `d_setting` VALUES('group-1','chat','1');
INSERT INTO `d_setting` VALUES('group-1','ad','1');
INSERT INTO `d_setting` VALUES('group-1','spread','1');
INSERT INTO `d_setting` VALUES('group-1','trade_sell','1');
INSERT INTO `d_setting` VALUES('group-1','sendmail','1');
INSERT INTO `d_setting` VALUES('group-1','sms','1');
INSERT INTO `d_setting` VALUES('group-1','mail','1');
INSERT INTO `d_setting` VALUES('group-1','ask','1');
INSERT INTO `d_setting` VALUES('group-1','cash','1');
INSERT INTO `d_setting` VALUES('group-1','question','0');
INSERT INTO `d_setting` VALUES('group-1','captcha','0');
INSERT INTO `d_setting` VALUES('group-1','check','0');
INSERT INTO `d_setting` VALUES('group-1','uploadpt','0');
INSERT INTO `d_setting` VALUES('group-1','uploadday','0');
INSERT INTO `d_setting` VALUES('group-1','uploadlimit','0');
INSERT INTO `d_setting` VALUES('group-1','uploadsize','0');
INSERT INTO `d_setting` VALUES('group-1','uploadtype','');
INSERT INTO `d_setting` VALUES('group-1','upload','1');
INSERT INTO `d_setting` VALUES('group-1','editor','Destoon');
INSERT INTO `d_setting` VALUES('group-1','grade','0');
INSERT INTO `d_setting` VALUES('group-1','discount','100');
INSERT INTO `d_setting` VALUES('group-1','fee','0');
INSERT INTO `d_setting` VALUES('group-1','fee_mode','0');
INSERT INTO `d_setting` VALUES('group-1','quote_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','job_limit','0');
INSERT INTO `d_setting` VALUES('group-1','job_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','resume_limit','0');
INSERT INTO `d_setting` VALUES('group-1','resume_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','article_limit','0');
INSERT INTO `d_setting` VALUES('group-1','article_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','info_limit','0');
INSERT INTO `d_setting` VALUES('group-1','info_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','know_limit','0');
INSERT INTO `d_setting` VALUES('group-1','know_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','brand_limit','0');
INSERT INTO `d_setting` VALUES('group-1','brand_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','photo_limit','0');
INSERT INTO `d_setting` VALUES('group-1','photo_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','video_limit','0');
INSERT INTO `d_setting` VALUES('group-1','video_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-1','down_limit','0');
INSERT INTO `d_setting` VALUES('group-1','down_free_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','listorder','2');
INSERT INTO `d_setting` VALUES('group-2','reg','0');
INSERT INTO `d_setting` VALUES('group-2','resume_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','resume_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','job_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','job_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','quote_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','quote_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','exhibit_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','exhibit_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','group_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','group_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','mall_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','mall_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','buy_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','buy_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','sell_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','sell_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','edit_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','refresh_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','day_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','add_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','copy','0');
INSERT INTO `d_setting` VALUES('group-2','delete','0');
INSERT INTO `d_setting` VALUES('group-2','vcompany','0');
INSERT INTO `d_setting` VALUES('group-2','vtruename','0');
INSERT INTO `d_setting` VALUES('group-2','vmobile','0');
INSERT INTO `d_setting` VALUES('group-2','vemail','0');
INSERT INTO `d_setting` VALUES('group-2','moduleids','6');
INSERT INTO `d_setting` VALUES('group-2','link_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','honor_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','page_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','news_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','kf','0');
INSERT INTO `d_setting` VALUES('group-2','stats','0');
INSERT INTO `d_setting` VALUES('group-2','map','0');
INSERT INTO `d_setting` VALUES('group-2','style','0');
INSERT INTO `d_setting` VALUES('group-2','main_d','5');
INSERT INTO `d_setting` VALUES('group-2','main_c','5');
INSERT INTO `d_setting` VALUES('group-2','home_main','0');
INSERT INTO `d_setting` VALUES('group-2','side_d','0');
INSERT INTO `d_setting` VALUES('group-2','side_c','0');
INSERT INTO `d_setting` VALUES('group-2','home_side','0');
INSERT INTO `d_setting` VALUES('group-2','menu_d','0');
INSERT INTO `d_setting` VALUES('group-2','menu_c','0');
INSERT INTO `d_setting` VALUES('group-2','home_menu','0');
INSERT INTO `d_setting` VALUES('group-2','home','0');
INSERT INTO `d_setting` VALUES('group-2','styleid','0');
INSERT INTO `d_setting` VALUES('group-2','homepage','0');
INSERT INTO `d_setting` VALUES('group-2','type_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','price_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','inquiry_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','message_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','express_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','address_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','alert_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','favorite_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','friend_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','inbox_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','chat','0');
INSERT INTO `d_setting` VALUES('group-2','ad','0');
INSERT INTO `d_setting` VALUES('group-2','spread','0');
INSERT INTO `d_setting` VALUES('group-2','trade_sell','0');
INSERT INTO `d_setting` VALUES('group-2','trade_pay','0');
INSERT INTO `d_setting` VALUES('group-2','sendmail','0');
INSERT INTO `d_setting` VALUES('group-2','sms','0');
INSERT INTO `d_setting` VALUES('group-2','mail','0');
INSERT INTO `d_setting` VALUES('group-2','ask','0');
INSERT INTO `d_setting` VALUES('group-2','cash','0');
INSERT INTO `d_setting` VALUES('group-2','question','1');
INSERT INTO `d_setting` VALUES('group-2','captcha','1');
INSERT INTO `d_setting` VALUES('group-2','check','1');
INSERT INTO `d_setting` VALUES('group-2','uploadpt','1');
INSERT INTO `d_setting` VALUES('group-2','uploadday','10');
INSERT INTO `d_setting` VALUES('group-2','uploadlimit','2');
INSERT INTO `d_setting` VALUES('group-2','uploadsize','200');
INSERT INTO `d_setting` VALUES('group-2','uploadtype','');
INSERT INTO `d_setting` VALUES('group-2','upload','0');
INSERT INTO `d_setting` VALUES('group-2','editor','Basic');
INSERT INTO `d_setting` VALUES('group-2','grade','0');
INSERT INTO `d_setting` VALUES('group-2','discount','100');
INSERT INTO `d_setting` VALUES('group-2','fee','0');
INSERT INTO `d_setting` VALUES('group-2','fee_mode','0');
INSERT INTO `d_setting` VALUES('group-2','article_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','article_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','info_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','info_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','know_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','know_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','brand_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','brand_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','photo_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','photo_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','video_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','video_free_limit','0');
INSERT INTO `d_setting` VALUES('group-2','down_limit','-1');
INSERT INTO `d_setting` VALUES('group-2','down_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','listorder','3');
INSERT INTO `d_setting` VALUES('group-3','reg','0');
INSERT INTO `d_setting` VALUES('group-3','know_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','know_limit','3');
INSERT INTO `d_setting` VALUES('group-3','info_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','info_limit','3');
INSERT INTO `d_setting` VALUES('group-3','article_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','article_limit','3');
INSERT INTO `d_setting` VALUES('group-3','resume_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','resume_limit','3');
INSERT INTO `d_setting` VALUES('group-3','job_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','down_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','down_limit','3');
INSERT INTO `d_setting` VALUES('group-3','video_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','video_limit','3');
INSERT INTO `d_setting` VALUES('group-3','job_limit','3');
INSERT INTO `d_setting` VALUES('group-3','quote_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','quote_limit','3');
INSERT INTO `d_setting` VALUES('group-3','exhibit_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','exhibit_limit','3');
INSERT INTO `d_setting` VALUES('group-3','group_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','group_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','mall_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','mall_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','buy_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','buy_limit','3');
INSERT INTO `d_setting` VALUES('group-3','sell_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','photo_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','photo_limit','3');
INSERT INTO `d_setting` VALUES('group-3','brand_free_limit','0');
INSERT INTO `d_setting` VALUES('group-3','brand_limit','3');
INSERT INTO `d_setting` VALUES('group-3','sell_limit','3');
INSERT INTO `d_setting` VALUES('group-3','edit_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','refresh_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','day_limit','3');
INSERT INTO `d_setting` VALUES('group-3','add_limit','30');
INSERT INTO `d_setting` VALUES('group-3','copy','0');
INSERT INTO `d_setting` VALUES('group-3','delete','0');
INSERT INTO `d_setting` VALUES('group-3','vcompany','0');
INSERT INTO `d_setting` VALUES('group-3','vtruename','0');
INSERT INTO `d_setting` VALUES('group-3','vmobile','0');
INSERT INTO `d_setting` VALUES('group-3','vemail','0');
INSERT INTO `d_setting` VALUES('group-3','moduleids','5,6,8,22,9,-9');
INSERT INTO `d_setting` VALUES('group-3','link_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','honor_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','page_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','news_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','kf','0');
INSERT INTO `d_setting` VALUES('group-3','stats','0');
INSERT INTO `d_setting` VALUES('group-3','map','0');
INSERT INTO `d_setting` VALUES('group-3','style','0');
INSERT INTO `d_setting` VALUES('group-3','main_d','5');
INSERT INTO `d_setting` VALUES('group-3','main_c','5');
INSERT INTO `d_setting` VALUES('group-3','home_main','0');
INSERT INTO `d_setting` VALUES('group-3','side_d','0');
INSERT INTO `d_setting` VALUES('group-3','side_c','0');
INSERT INTO `d_setting` VALUES('group-3','menu_d','0');
INSERT INTO `d_setting` VALUES('group-3','home_side','0');
INSERT INTO `d_setting` VALUES('group-3','menu_c','0');
INSERT INTO `d_setting` VALUES('group-3','home_menu','0');
INSERT INTO `d_setting` VALUES('group-3','home','0');
INSERT INTO `d_setting` VALUES('group-3','styleid','0');
INSERT INTO `d_setting` VALUES('group-3','homepage','0');
INSERT INTO `d_setting` VALUES('group-3','type_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','price_limit','10');
INSERT INTO `d_setting` VALUES('group-3','inquiry_limit','30');
INSERT INTO `d_setting` VALUES('group-3','message_limit','30');
INSERT INTO `d_setting` VALUES('group-3','express_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','address_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','alert_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','favorite_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','friend_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','inbox_limit','-1');
INSERT INTO `d_setting` VALUES('group-3','chat','1');
INSERT INTO `d_setting` VALUES('group-3','ad','0');
INSERT INTO `d_setting` VALUES('group-3','spread','0');
INSERT INTO `d_setting` VALUES('group-3','trade_sell','0');
INSERT INTO `d_setting` VALUES('group-3','trade_pay','0');
INSERT INTO `d_setting` VALUES('group-3','sendmail','0');
INSERT INTO `d_setting` VALUES('group-3','sms','0');
INSERT INTO `d_setting` VALUES('group-3','mail','0');
INSERT INTO `d_setting` VALUES('group-3','ask','0');
INSERT INTO `d_setting` VALUES('group-3','cash','0');
INSERT INTO `d_setting` VALUES('group-3','question','1');
INSERT INTO `d_setting` VALUES('group-3','captcha','1');
INSERT INTO `d_setting` VALUES('group-3','check','1');
INSERT INTO `d_setting` VALUES('group-3','uploadpt','1');
INSERT INTO `d_setting` VALUES('group-3','uploadday','10');
INSERT INTO `d_setting` VALUES('group-3','uploadlimit','5');
INSERT INTO `d_setting` VALUES('group-3','uploadsize','500');
INSERT INTO `d_setting` VALUES('group-3','uploadtype','');
INSERT INTO `d_setting` VALUES('group-3','upload','0');
INSERT INTO `d_setting` VALUES('group-3','editor','Basic');
INSERT INTO `d_setting` VALUES('group-3','grade','0');
INSERT INTO `d_setting` VALUES('group-3','discount','100');
INSERT INTO `d_setting` VALUES('group-3','fee','0');
INSERT INTO `d_setting` VALUES('group-3','fee_mode','0');
INSERT INTO `d_setting` VALUES('group-4','listorder','4');
INSERT INTO `d_setting` VALUES('group-4','reg','0');
INSERT INTO `d_setting` VALUES('group-4','article_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','article_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','resume_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','resume_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','job_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','job_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','quote_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','quote_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','exhibit_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','exhibit_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','group_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','group_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','mall_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','mall_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','buy_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','buy_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','sell_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','sell_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','edit_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','refresh_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','day_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','add_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','copy','0');
INSERT INTO `d_setting` VALUES('group-4','delete','0');
INSERT INTO `d_setting` VALUES('group-4','vcompany','0');
INSERT INTO `d_setting` VALUES('group-4','vtruename','0');
INSERT INTO `d_setting` VALUES('group-4','vmobile','0');
INSERT INTO `d_setting` VALUES('group-4','vemail','0');
INSERT INTO `d_setting` VALUES('group-4','moduleids','6');
INSERT INTO `d_setting` VALUES('group-4','link_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','honor_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','page_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','news_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','kf','0');
INSERT INTO `d_setting` VALUES('group-4','stats','0');
INSERT INTO `d_setting` VALUES('group-4','map','0');
INSERT INTO `d_setting` VALUES('group-4','style','0');
INSERT INTO `d_setting` VALUES('group-4','main_d','5');
INSERT INTO `d_setting` VALUES('group-4','main_c','5');
INSERT INTO `d_setting` VALUES('group-4','home_main','0');
INSERT INTO `d_setting` VALUES('group-4','side_d','0');
INSERT INTO `d_setting` VALUES('group-4','side_c','0');
INSERT INTO `d_setting` VALUES('group-4','home_side','0');
INSERT INTO `d_setting` VALUES('group-4','menu_d','0');
INSERT INTO `d_setting` VALUES('group-4','menu_c','0');
INSERT INTO `d_setting` VALUES('group-4','home_menu','0');
INSERT INTO `d_setting` VALUES('group-4','home','0');
INSERT INTO `d_setting` VALUES('group-4','styleid','0');
INSERT INTO `d_setting` VALUES('group-4','homepage','0');
INSERT INTO `d_setting` VALUES('group-4','type_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','price_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','inquiry_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','message_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','express_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','address_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','alert_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','favorite_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','friend_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','inbox_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','chat','1');
INSERT INTO `d_setting` VALUES('group-4','ad','0');
INSERT INTO `d_setting` VALUES('group-4','spread','0');
INSERT INTO `d_setting` VALUES('group-4','trade_sell','0');
INSERT INTO `d_setting` VALUES('group-4','trade_pay','0');
INSERT INTO `d_setting` VALUES('group-4','sendmail','0');
INSERT INTO `d_setting` VALUES('group-4','sms','0');
INSERT INTO `d_setting` VALUES('group-4','mail','0');
INSERT INTO `d_setting` VALUES('group-4','ask','0');
INSERT INTO `d_setting` VALUES('group-4','cash','0');
INSERT INTO `d_setting` VALUES('group-4','question','1');
INSERT INTO `d_setting` VALUES('group-4','captcha','1');
INSERT INTO `d_setting` VALUES('group-4','check','1');
INSERT INTO `d_setting` VALUES('group-4','uploadpt','1');
INSERT INTO `d_setting` VALUES('group-4','uploadday','10');
INSERT INTO `d_setting` VALUES('group-4','uploadlimit','5');
INSERT INTO `d_setting` VALUES('group-4','uploadsize','500');
INSERT INTO `d_setting` VALUES('group-4','uploadtype','');
INSERT INTO `d_setting` VALUES('group-4','upload','0');
INSERT INTO `d_setting` VALUES('group-4','editor','Basic');
INSERT INTO `d_setting` VALUES('group-4','grade','0');
INSERT INTO `d_setting` VALUES('group-4','discount','100');
INSERT INTO `d_setting` VALUES('group-4','fee','0');
INSERT INTO `d_setting` VALUES('group-4','fee_mode','0');
INSERT INTO `d_setting` VALUES('group-4','info_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','info_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','know_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','know_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','brand_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','brand_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','photo_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','photo_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','video_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','video_free_limit','0');
INSERT INTO `d_setting` VALUES('group-4','down_limit','-1');
INSERT INTO `d_setting` VALUES('group-4','down_free_limit','0');
INSERT INTO `d_setting` VALUES('group-5','down_limit','3');
INSERT INTO `d_setting` VALUES('group-5','video_limit','3');
INSERT INTO `d_setting` VALUES('group-5','photo_free_limit','0');
INSERT INTO `d_setting` VALUES('group-5','photo_limit','3');
INSERT INTO `d_setting` VALUES('group-5','brand_free_limit','0');
INSERT INTO `d_setting` VALUES('group-5','brand_limit','3');
INSERT INTO `d_setting` VALUES('group-5','know_free_limit','0');
INSERT INTO `d_setting` VALUES('group-5','know_limit','0');
INSERT INTO `d_setting` VALUES('group-5','info_free_limit','0');
INSERT INTO `d_setting` VALUES('group-5','info_limit','3');
INSERT INTO `d_setting` VALUES('group-5','article_free_limit','0');
INSERT INTO `d_setting` VALUES('group-5','article_limit','3');
INSERT INTO `d_setting` VALUES('group-5','resume_free_limit','0');
INSERT INTO `d_setting` VALUES('group-5','resume_limit','3');
INSERT INTO `d_setting` VALUES('group-5','job_free_limit','0');
INSERT INTO `d_setting` VALUES('group-5','job_limit','3');
INSERT INTO `d_setting` VALUES('group-5','quote_free_limit','0');
INSERT INTO `d_setting` VALUES('group-5','quote_limit','3');
INSERT INTO `d_setting` VALUES('group-5','exhibit_free_limit','0');
INSERT INTO `d_setting` VALUES('group-5','exhibit_limit','3');
INSERT INTO `d_setting` VALUES('group-5','group_free_limit','0');
INSERT INTO `d_setting` VALUES('group-5','group_limit','-1');
INSERT INTO `d_setting` VALUES('group-5','mall_free_limit','0');
INSERT INTO `d_setting` VALUES('group-5','mall_limit','-1');
INSERT INTO `d_setting` VALUES('group-5','buy_free_limit','3');
INSERT INTO `d_setting` VALUES('group-5','buy_limit','3');
INSERT INTO `d_setting` VALUES('group-5','sell_free_limit','2');
INSERT INTO `d_setting` VALUES('group-5','sell_limit','3');
INSERT INTO `d_setting` VALUES('group-5','edit_limit','3');
INSERT INTO `d_setting` VALUES('group-5','refresh_limit','600');
INSERT INTO `d_setting` VALUES('group-5','day_limit','3');
INSERT INTO `d_setting` VALUES('group-5','add_limit','30');
INSERT INTO `d_setting` VALUES('group-5','copy','1');
INSERT INTO `d_setting` VALUES('group-5','delete','1');
INSERT INTO `d_setting` VALUES('group-5','vcompany','0');
INSERT INTO `d_setting` VALUES('group-5','vtruename','0');
INSERT INTO `d_setting` VALUES('group-5','vmobile','0');
INSERT INTO `d_setting` VALUES('group-5','vemail','0');
INSERT INTO `d_setting` VALUES('group-5','moduleids','6,21');
INSERT INTO `d_setting` VALUES('group-5','link_limit','-1');
INSERT INTO `d_setting` VALUES('group-5','honor_limit','-1');
INSERT INTO `d_setting` VALUES('group-5','page_limit','-1');
INSERT INTO `d_setting` VALUES('group-5','news_limit','-1');
INSERT INTO `d_setting` VALUES('group-6','brand_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','brand_limit','5');
INSERT INTO `d_setting` VALUES('group-6','know_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','know_limit','0');
INSERT INTO `d_setting` VALUES('group-6','info_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','info_limit','5');
INSERT INTO `d_setting` VALUES('group-6','article_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','article_limit','5');
INSERT INTO `d_setting` VALUES('group-6','resume_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','resume_limit','5');
INSERT INTO `d_setting` VALUES('group-6','job_limit','5');
INSERT INTO `d_setting` VALUES('group-6','job_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','quote_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','quote_limit','5');
INSERT INTO `d_setting` VALUES('group-6','exhibit_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','exhibit_limit','5');
INSERT INTO `d_setting` VALUES('group-6','group_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','group_limit','5');
INSERT INTO `d_setting` VALUES('group-6','mall_limit','5');
INSERT INTO `d_setting` VALUES('group-6','mall_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','buy_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','buy_limit','5');
INSERT INTO `d_setting` VALUES('group-6','sell_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','sell_limit','5');
INSERT INTO `d_setting` VALUES('group-6','edit_limit','0');
INSERT INTO `d_setting` VALUES('group-6','refresh_limit','600');
INSERT INTO `d_setting` VALUES('group-6','day_limit','5');
INSERT INTO `d_setting` VALUES('group-6','add_limit','60');
INSERT INTO `d_setting` VALUES('group-6','copy','1');
INSERT INTO `d_setting` VALUES('group-6','delete','1');
INSERT INTO `d_setting` VALUES('group-6','vcompany','0');
INSERT INTO `d_setting` VALUES('group-6','vtruename','0');
INSERT INTO `d_setting` VALUES('group-6','vmobile','0');
INSERT INTO `d_setting` VALUES('group-6','vemail','0');
INSERT INTO `d_setting` VALUES('group-7','article_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','article_limit','0');
INSERT INTO `d_setting` VALUES('group-7','resume_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','resume_limit','0');
INSERT INTO `d_setting` VALUES('group-7','job_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','job_limit','0');
INSERT INTO `d_setting` VALUES('group-7','quote_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','quote_limit','0');
INSERT INTO `d_setting` VALUES('group-7','exhibit_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','exhibit_limit','0');
INSERT INTO `d_setting` VALUES('group-7','group_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','group_limit','0');
INSERT INTO `d_setting` VALUES('group-7','mall_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','mall_limit','0');
INSERT INTO `d_setting` VALUES('group-7','buy_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','buy_limit','0');
INSERT INTO `d_setting` VALUES('group-7','sell_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','sell_limit','0');
INSERT INTO `d_setting` VALUES('group-7','edit_limit','0');
INSERT INTO `d_setting` VALUES('group-7','refresh_limit','60');
INSERT INTO `d_setting` VALUES('group-7','day_limit','10');
INSERT INTO `d_setting` VALUES('group-7','add_limit','0');
INSERT INTO `d_setting` VALUES('group-7','copy','1');
INSERT INTO `d_setting` VALUES('group-7','delete','1');
INSERT INTO `d_setting` VALUES('group-7','vcompany','0');
INSERT INTO `d_setting` VALUES('group-7','vtruename','0');
INSERT INTO `d_setting` VALUES('group-7','vmobile','0');
INSERT INTO `d_setting` VALUES('group-7','vemail','1');
INSERT INTO `d_setting` VALUES('group-7','moduleids','16,21');
INSERT INTO `d_setting` VALUES('group-7','link_limit','0');
INSERT INTO `d_setting` VALUES('group-7','honor_limit','0');
INSERT INTO `d_setting` VALUES('group-7','page_limit','5');
INSERT INTO `d_setting` VALUES('group-7','news_limit','0');
INSERT INTO `d_setting` VALUES('group-7','kf','1');
INSERT INTO `d_setting` VALUES('group-7','stats','1');
INSERT INTO `d_setting` VALUES('group-7','map','1');
INSERT INTO `d_setting` VALUES('group-7','style','1');
INSERT INTO `d_setting` VALUES('group-7','main_d','0,1,2,7');
INSERT INTO `d_setting` VALUES('group-7','main_c','0,1,2,4,5,6,7');
INSERT INTO `d_setting` VALUES('group-7','home_main','1');
INSERT INTO `d_setting` VALUES('group-7','side_d','0,1,2,4,6');
INSERT INTO `d_setting` VALUES('destoon','backtime','1393926147');
INSERT INTO `d_setting` VALUES('1','smtp_pass','bingbing520');
INSERT INTO `d_setting` VALUES('1','smtp_user','8019@omooo.com');
INSERT INTO `d_setting` VALUES('1','smtp_auth','1');
INSERT INTO `d_setting` VALUES('1','smtp_port','25');
INSERT INTO `d_setting` VALUES('1','smtp_host','smtp.omooo.com');
INSERT INTO `d_setting` VALUES('1','mail_delimiter','1');
INSERT INTO `d_setting` VALUES('1','mail_type','smtp');
INSERT INTO `d_setting` VALUES('1','max_image','800');
INSERT INTO `d_setting` VALUES('1','thumb_title','0');
INSERT INTO `d_setting` VALUES('1','thumb_album','1');
INSERT INTO `d_setting` VALUES('1','middle_h','180');
INSERT INTO `d_setting` VALUES('1','middle_w','240');
INSERT INTO `d_setting` VALUES('1','water_middle','1');
INSERT INTO `d_setting` VALUES('1','water_com','1');
INSERT INTO `d_setting` VALUES('1','bmp_jpg','1');
INSERT INTO `d_setting` VALUES('1','water_pos','5');
INSERT INTO `d_setting` VALUES('1','water_min_wh','40');
INSERT INTO `d_setting` VALUES('1','water_margin','10');
INSERT INTO `d_setting` VALUES('1','water_type','2');
INSERT INTO `d_setting` VALUES('1','water_fontcolor','#000000');
INSERT INTO `d_setting` VALUES('1','water_fontsize','20');
INSERT INTO `d_setting` VALUES('1','water_font','simhei.ttf');
INSERT INTO `d_setting` VALUES('1','water_text','摩恩科技');
INSERT INTO `d_setting` VALUES('1','water_jpeg_quality','80');
INSERT INTO `d_setting` VALUES('1','water_transition','30');
INSERT INTO `d_setting` VALUES('1','water_mark','watermark.png');
INSERT INTO `d_setting` VALUES('1','file_my','my.php');
INSERT INTO `d_setting` VALUES('1','file_login','login.php');
INSERT INTO `d_setting` VALUES('1','file_register','register.php');
INSERT INTO `d_setting` VALUES('1','defend_proxy','0');
INSERT INTO `d_setting` VALUES('1','defend_reload','0');
INSERT INTO `d_setting` VALUES('1','defend_cc','0');
INSERT INTO `d_setting` VALUES('1','safe_domain','');
INSERT INTO `d_setting` VALUES('1','uploaddir','Ym/d');
INSERT INTO `d_setting` VALUES('1','check_referer','1');
INSERT INTO `d_setting` VALUES('1','jstag','0');
INSERT INTO `d_setting` VALUES('1','uploadsize','2048');
INSERT INTO `d_setting` VALUES('1','uploadtype','jpg|gif|png|rar|zip|pdf|doc|xls|ppt|flv|mp4|wmv|swf|docx|ppts|xlsx');
INSERT INTO `d_setting` VALUES('1','uploadlog','1');
INSERT INTO `d_setting` VALUES('1','anticopy','0');
INSERT INTO `d_setting` VALUES('1','ip_login','0');
INSERT INTO `d_setting` VALUES('1','login_log','0');
INSERT INTO `d_setting` VALUES('1','admin_log','0');
INSERT INTO `d_setting` VALUES('1','admin_online','1');
INSERT INTO `d_setting` VALUES('group-5','kf','0');
INSERT INTO `d_setting` VALUES('group-5','stats','0');
INSERT INTO `d_setting` VALUES('group-5','map','0');
INSERT INTO `d_setting` VALUES('group-5','style','0');
INSERT INTO `d_setting` VALUES('group-5','main_d','5');
INSERT INTO `d_setting` VALUES('group-5','main_c','5');
INSERT INTO `d_setting` VALUES('group-5','home_main','0');
INSERT INTO `d_setting` VALUES('group-5','side_d','0,2');
INSERT INTO `d_setting` VALUES('group-5','side_c','0,1,2');
INSERT INTO `d_setting` VALUES('group-5','home_side','0');
INSERT INTO `d_setting` VALUES('group-5','menu_d','0,1,2,3,4,5');
INSERT INTO `d_setting` VALUES('group-5','menu_c','0,1,2,3,4,5');
INSERT INTO `d_setting` VALUES('group-5','home_menu','0');
INSERT INTO `d_setting` VALUES('group-5','home','0');
INSERT INTO `d_setting` VALUES('group-6','moduleids','16');
INSERT INTO `d_setting` VALUES('group-6','link_limit','20');
INSERT INTO `d_setting` VALUES('group-6','honor_limit','10');
INSERT INTO `d_setting` VALUES('group-6','kf','0');
INSERT INTO `d_setting` VALUES('group-6','news_limit','20');
INSERT INTO `d_setting` VALUES('group-6','page_limit','5');
INSERT INTO `d_setting` VALUES('group-6','stats','0');
INSERT INTO `d_setting` VALUES('group-7','side_c','0,1,2,3,4,5,6');
INSERT INTO `d_setting` VALUES('group-7','home_side','1');
INSERT INTO `d_setting` VALUES('group-7','menu_d','0,1,2,3,4,5,6,7,8,9,10,11,12,13');
INSERT INTO `d_setting` VALUES('group-7','menu_c','0,1,2,3,4,5,6,7,8,9,10,11,12,13');
INSERT INTO `d_setting` VALUES('group-7','home','1');
INSERT INTO `d_setting` VALUES('group-8','inbox_limit','500');
INSERT INTO `d_setting` VALUES('group-8','brand_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','brand_limit','0');
INSERT INTO `d_setting` VALUES('group-8','know_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','know_limit','0');
INSERT INTO `d_setting` VALUES('group-8','info_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','info_limit','0');
INSERT INTO `d_setting` VALUES('group-8','article_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','article_limit','0');
INSERT INTO `d_setting` VALUES('group-8','resume_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','resume_limit','0');
INSERT INTO `d_setting` VALUES('group-8','job_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','job_limit','0');
INSERT INTO `d_setting` VALUES('group-8','quote_limit','0');
INSERT INTO `d_setting` VALUES('group-8','quote_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','exhibit_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','exhibit_limit','0');
INSERT INTO `d_setting` VALUES('group-8','group_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','group_limit','0');
INSERT INTO `d_setting` VALUES('group-8','mall_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','mall_limit','0');
INSERT INTO `d_setting` VALUES('group-8','buy_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','buy_limit','0');
INSERT INTO `d_setting` VALUES('group-8','sell_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','sell_limit','0');
INSERT INTO `d_setting` VALUES('group-8','edit_limit','0');
INSERT INTO `d_setting` VALUES('group-8','refresh_limit','60');
INSERT INTO `d_setting` VALUES('group-8','day_limit','10');
INSERT INTO `d_setting` VALUES('group-8','add_limit','0');
INSERT INTO `d_setting` VALUES('group-8','copy','1');
INSERT INTO `d_setting` VALUES('group-8','delete','1');
INSERT INTO `d_setting` VALUES('group-8','vcompany','0');
INSERT INTO `d_setting` VALUES('group-8','vtruename','0');
INSERT INTO `d_setting` VALUES('group-8','vmobile','0');
INSERT INTO `d_setting` VALUES('group-8','vemail','1');
INSERT INTO `d_setting` VALUES('group-8','moduleids','16,21');
INSERT INTO `d_setting` VALUES('group-9','know_limit','0');
INSERT INTO `d_setting` VALUES('group-9','info_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','info_limit','0');
INSERT INTO `d_setting` VALUES('group-9','article_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','article_limit','0');
INSERT INTO `d_setting` VALUES('group-9','resume_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','resume_limit','0');
INSERT INTO `d_setting` VALUES('group-9','job_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','job_limit','0');
INSERT INTO `d_setting` VALUES('group-9','quote_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','quote_limit','0');
INSERT INTO `d_setting` VALUES('group-9','exhibit_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','exhibit_limit','0');
INSERT INTO `d_setting` VALUES('group-9','group_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','group_limit','0');
INSERT INTO `d_setting` VALUES('group-9','mall_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','mall_limit','0');
INSERT INTO `d_setting` VALUES('group-9','buy_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','buy_limit','0');
INSERT INTO `d_setting` VALUES('group-9','sell_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','sell_limit','0');
INSERT INTO `d_setting` VALUES('group-9','edit_limit','0');
INSERT INTO `d_setting` VALUES('group-9','refresh_limit','60');
INSERT INTO `d_setting` VALUES('group-9','day_limit','10');
INSERT INTO `d_setting` VALUES('group-9','add_limit','0');
INSERT INTO `d_setting` VALUES('group-9','copy','1');
INSERT INTO `d_setting` VALUES('group-9','delete','1');
INSERT INTO `d_setting` VALUES('group-9','vcompany','0');
INSERT INTO `d_setting` VALUES('group-9','vtruename','0');
INSERT INTO `d_setting` VALUES('group-9','vemail','1');
INSERT INTO `d_setting` VALUES('group-9','vmobile','0');
INSERT INTO `d_setting` VALUES('group-9','moduleids','16,21');
INSERT INTO `d_setting` VALUES('group-9','link_limit','0');
INSERT INTO `d_setting` VALUES('group-9','honor_limit','0');
INSERT INTO `d_setting` VALUES('group-9','news_limit','0');
INSERT INTO `d_setting` VALUES('group-9','page_limit','5');
INSERT INTO `d_setting` VALUES('1','md5_pass','1');
INSERT INTO `d_setting` VALUES('1','captcha_admin','0');
INSERT INTO `d_setting` VALUES('2','page_check','2');
INSERT INTO `d_setting` VALUES('2','news_clear','0');
INSERT INTO `d_setting` VALUES('2','news_save','0');
INSERT INTO `d_setting` VALUES('2','news_check','2');
INSERT INTO `d_setting` VALUES('2','introduce_clear','0');
INSERT INTO `d_setting` VALUES('2','introduce_save','0');
INSERT INTO `d_setting` VALUES('2','introduce_length','0');
INSERT INTO `d_setting` VALUES('2','thumb_height','180');
INSERT INTO `d_setting` VALUES('2','thumb_width','180');
INSERT INTO `d_setting` VALUES('2','cate_max','6');
INSERT INTO `d_setting` VALUES('2','mode_max','2');
INSERT INTO `d_setting` VALUES('2','money_unit','');
INSERT INTO `d_setting` VALUES('2','com_mode','制造商|贸易商|服务商|其他机构');
INSERT INTO `d_setting` VALUES('2','com_size','');
INSERT INTO `d_setting` VALUES('2','com_type','展示网站建设|品牌网站建设|营销网站建设|Logo设计|其他');
INSERT INTO `d_setting` VALUES('2','login_goto','0');
INSERT INTO `d_setting` VALUES('2','login_remember','1');
INSERT INTO `d_setting` VALUES('2','captcha_login','0');
INSERT INTO `d_setting` VALUES('2','show_menu','1');
INSERT INTO `d_setting` VALUES('2','editor','Basic');
INSERT INTO `d_setting` VALUES('2','vfax','');
INSERT INTO `d_setting` VALUES('2','vcompany','1');
INSERT INTO `d_setting` VALUES('2','vbank','1');
INSERT INTO `d_setting` VALUES('2','vtruename','1');
INSERT INTO `d_setting` VALUES('2','vmobile','1');
INSERT INTO `d_setting` VALUES('2','vemail','1');
INSERT INTO `d_setting` VALUES('2','vmember','1');
INSERT INTO `d_setting` VALUES('2','chat_img','1');
INSERT INTO `d_setting` VALUES('2','chat_url','1');
INSERT INTO `d_setting` VALUES('group-8','link_limit','0');
INSERT INTO `d_setting` VALUES('group-8','honor_limit','0');
INSERT INTO `d_setting` VALUES('group-8','page_limit','5');
INSERT INTO `d_setting` VALUES('group-8','news_limit','0');
INSERT INTO `d_setting` VALUES('group-8','kf','1');
INSERT INTO `d_setting` VALUES('group-8','stats','1');
INSERT INTO `d_setting` VALUES('group-8','map','1');
INSERT INTO `d_setting` VALUES('group-8','style','1');
INSERT INTO `d_setting` VALUES('group-8','main_d','0,1,2,7');
INSERT INTO `d_setting` VALUES('group-8','main_c','0,1,2,4,5,6,7');
INSERT INTO `d_setting` VALUES('group-8','home_main','1');
INSERT INTO `d_setting` VALUES('group-8','home_side','1');
INSERT INTO `d_setting` VALUES('group-8','side_c','0,1,2,3,4,5,6');
INSERT INTO `d_setting` VALUES('group-9','kf','1');
INSERT INTO `d_setting` VALUES('group-9','stats','1');
INSERT INTO `d_setting` VALUES('group-9','map','1');
INSERT INTO `d_setting` VALUES('group-9','style','1');
INSERT INTO `d_setting` VALUES('group-9','main_c','0,1,2,4,5,6,7');
INSERT INTO `d_setting` VALUES('group-9','main_d','0,1,2,7');
INSERT INTO `d_setting` VALUES('group-9','home_main','1');
INSERT INTO `d_setting` VALUES('group-9','side_d','0,1,2,4,6');
INSERT INTO `d_setting` VALUES('group-9','side_c','0,1,2,3,4,5,6');
INSERT INTO `d_setting` VALUES('group-9','home_side','1');
INSERT INTO `d_setting` VALUES('group-9','menu_d','0,1,2,3,4,5,6,7,8,9,10,11,12,13');
INSERT INTO `d_setting` VALUES('group-9','home_menu','1');
INSERT INTO `d_setting` VALUES('group-8','side_d','0,1,2,4,6');
INSERT INTO `d_setting` VALUES('group-8','menu_d','0,1,2,3,4,5,6,7,8,9,10,11,12,13');
INSERT INTO `d_setting` VALUES('group-8','menu_c','0,1,2,3,4,5,6,7,8,9,10,11,12,13');
INSERT INTO `d_setting` VALUES('group-8','home_menu','1');
INSERT INTO `d_setting` VALUES('group-8','home','1');
INSERT INTO `d_setting` VALUES('group-9','menu_c','0,1,2,3,4,5,6,7,8,9,10,11,12,13');
INSERT INTO `d_setting` VALUES('group-9','home','1');
INSERT INTO `d_setting` VALUES('group-9','styleid','2');
INSERT INTO `d_setting` VALUES('group-9','homepage','1');
INSERT INTO `d_setting` VALUES('group-9','type_limit','20');
INSERT INTO `d_setting` VALUES('group-9','price_limit','20');
INSERT INTO `d_setting` VALUES('group-9','inquiry_limit','50');
INSERT INTO `d_setting` VALUES('group-9','message_limit','100');
INSERT INTO `d_setting` VALUES('group-6','map','1');
INSERT INTO `d_setting` VALUES('group-6','style','0');
INSERT INTO `d_setting` VALUES('group-6','main_d','0,1,2');
INSERT INTO `d_setting` VALUES('group-6','home_main','0');
INSERT INTO `d_setting` VALUES('group-6','main_c','0,1,2,3,4,5,6');
INSERT INTO `d_setting` VALUES('group-6','side_d','0,2,4,6');
INSERT INTO `d_setting` VALUES('group-6','side_c','0,1,2,3,4,5,6');
INSERT INTO `d_setting` VALUES('group-6','home_side','0');
INSERT INTO `d_setting` VALUES('group-6','menu_d','0,1,2,3,4,6,7');
INSERT INTO `d_setting` VALUES('group-6','menu_c','0,1,2,3,4,5,6,7,8,9,10,11');
INSERT INTO `d_setting` VALUES('group-6','home_menu','0');
INSERT INTO `d_setting` VALUES('group-6','home','0');
INSERT INTO `d_setting` VALUES('group-6','homepage','0');
INSERT INTO `d_setting` VALUES('group-7','home_menu','1');
INSERT INTO `d_setting` VALUES('group-7','styleid','2');
INSERT INTO `d_setting` VALUES('group-7','homepage','1');
INSERT INTO `d_setting` VALUES('group-7','type_limit','20');
INSERT INTO `d_setting` VALUES('group-7','price_limit','20');
INSERT INTO `d_setting` VALUES('group-7','inquiry_limit','50');
INSERT INTO `d_setting` VALUES('group-7','message_limit','100');
INSERT INTO `d_setting` VALUES('group-7','express_limit','10');
INSERT INTO `d_setting` VALUES('group-7','address_limit','10');
INSERT INTO `d_setting` VALUES('group-7','alert_limit','10');
INSERT INTO `d_setting` VALUES('group-7','favorite_limit','100');
INSERT INTO `d_setting` VALUES('group-7','friend_limit','200');
INSERT INTO `d_setting` VALUES('group-7','inbox_limit','500');
INSERT INTO `d_setting` VALUES('group-7','chat','1');
INSERT INTO `d_setting` VALUES('group-7','ad','1');
INSERT INTO `d_setting` VALUES('group-7','spread','1');
INSERT INTO `d_setting` VALUES('group-7','trade_sell','1');
INSERT INTO `d_setting` VALUES('group-7','sendmail','1');
INSERT INTO `d_setting` VALUES('group-7','sms','1');
INSERT INTO `d_setting` VALUES('group-7','mail','1');
INSERT INTO `d_setting` VALUES('group-7','ask','1');
INSERT INTO `d_setting` VALUES('group-7','cash','1');
INSERT INTO `d_setting` VALUES('group-7','question','0');
INSERT INTO `d_setting` VALUES('group-7','captcha','0');
INSERT INTO `d_setting` VALUES('group-7','check','0');
INSERT INTO `d_setting` VALUES('group-7','uploadpt','0');
INSERT INTO `d_setting` VALUES('group-6','styleid','0');
INSERT INTO `d_setting` VALUES('group-6','type_limit','10');
INSERT INTO `d_setting` VALUES('group-6','price_limit','3');
INSERT INTO `d_setting` VALUES('group-6','inquiry_limit','10');
INSERT INTO `d_setting` VALUES('group-6','message_limit','20');
INSERT INTO `d_setting` VALUES('group-6','express_limit','5');
INSERT INTO `d_setting` VALUES('group-6','address_limit','10');
INSERT INTO `d_setting` VALUES('group-6','alert_limit','5');
INSERT INTO `d_setting` VALUES('group-6','favorite_limit','50');
INSERT INTO `d_setting` VALUES('group-6','friend_limit','50');
INSERT INTO `d_setting` VALUES('group-6','inbox_limit','500');
INSERT INTO `d_setting` VALUES('group-6','chat','1');
INSERT INTO `d_setting` VALUES('group-6','ad','1');
INSERT INTO `d_setting` VALUES('group-6','spread','0');
INSERT INTO `d_setting` VALUES('group-8','styleid','2');
INSERT INTO `d_setting` VALUES('group-8','homepage','1');
INSERT INTO `d_setting` VALUES('group-8','type_limit','20');
INSERT INTO `d_setting` VALUES('group-8','price_limit','20');
INSERT INTO `d_setting` VALUES('group-8','inquiry_limit','50');
INSERT INTO `d_setting` VALUES('group-8','message_limit','100');
INSERT INTO `d_setting` VALUES('group-8','express_limit','10');
INSERT INTO `d_setting` VALUES('group-8','address_limit','10');
INSERT INTO `d_setting` VALUES('group-8','alert_limit','10');
INSERT INTO `d_setting` VALUES('group-8','favorite_limit','100');
INSERT INTO `d_setting` VALUES('group-9','express_limit','10');
INSERT INTO `d_setting` VALUES('group-9','address_limit','10');
INSERT INTO `d_setting` VALUES('group-9','alert_limit','10');
INSERT INTO `d_setting` VALUES('group-9','favorite_limit','100');
INSERT INTO `d_setting` VALUES('group-9','friend_limit','200');
INSERT INTO `d_setting` VALUES('group-9','inbox_limit','500');
INSERT INTO `d_setting` VALUES('group-9','chat','1');
INSERT INTO `d_setting` VALUES('group-9','ad','1');
INSERT INTO `d_setting` VALUES('group-9','spread','1');
INSERT INTO `d_setting` VALUES('group-9','trade_sell','1');
INSERT INTO `d_setting` VALUES('group-9','sendmail','1');
INSERT INTO `d_setting` VALUES('group-9','sms','1');
INSERT INTO `d_setting` VALUES('group-9','mail','1');
INSERT INTO `d_setting` VALUES('group-9','ask','1');
INSERT INTO `d_setting` VALUES('1','captcha_cn','0');
INSERT INTO `d_setting` VALUES('1','captcha_chars','');
INSERT INTO `d_setting` VALUES('1','check_hour','');
INSERT INTO `d_setting` VALUES('1','admin_hour','');
INSERT INTO `d_setting` VALUES('1','admin_ip','');
INSERT INTO `d_setting` VALUES('1','admin_area','');
INSERT INTO `d_setting` VALUES('1','remote_url','');
INSERT INTO `d_setting` VALUES('1','ftp_path','');
INSERT INTO `d_setting` VALUES('1','ftp_pasv','0');
INSERT INTO `d_setting` VALUES('1','ftp_ssl','0');
INSERT INTO `d_setting` VALUES('1','ftp_pass','');
INSERT INTO `d_setting` VALUES('1','ftp_user','');
INSERT INTO `d_setting` VALUES('1','ftp_port','21');
INSERT INTO `d_setting` VALUES('1','ftp_host','');
INSERT INTO `d_setting` VALUES('1','ftp_remote','0');
INSERT INTO `d_setting` VALUES('1','schcate_limit','10');
INSERT INTO `d_setting` VALUES('1','pagesize','20');
INSERT INTO `d_setting` VALUES('1','pushtime','0');
INSERT INTO `d_setting` VALUES('1','online','1200');
INSERT INTO `d_setting` VALUES('1','search_limit','1');
INSERT INTO `d_setting` VALUES('1','max_kw','30');
INSERT INTO `d_setting` VALUES('1','min_kw','3');
INSERT INTO `d_setting` VALUES('1','search_check_kw','0');
INSERT INTO `d_setting` VALUES('1','search_kw','1');
INSERT INTO `d_setting` VALUES('1','save_draft','0');
INSERT INTO `d_setting` VALUES('1','search_tips','1');
INSERT INTO `d_setting` VALUES('1','anti_spam','1');
INSERT INTO `d_setting` VALUES('1','log_credit','1');
INSERT INTO `d_setting` VALUES('1','pages_mode','0');
INSERT INTO `d_setting` VALUES('1','lazy','1');
INSERT INTO `d_setting` VALUES('1','gzip_enable','0');
INSERT INTO `d_setting` VALUES('1','cache_hits','0');
INSERT INTO `d_setting` VALUES('1','cache_search','0');
INSERT INTO `d_setting` VALUES('1','task_list','1800');
INSERT INTO `d_setting` VALUES('1','task_index','600');
INSERT INTO `d_setting` VALUES('1','log_404','0');
INSERT INTO `d_setting` VALUES('1','pcharset','0');
INSERT INTO `d_setting` VALUES('1','com_www','0');
INSERT INTO `d_setting` VALUES('1','rewrite','1');
INSERT INTO `d_setting` VALUES('1','index_html','0');
INSERT INTO `d_setting` VALUES('1','index','index');
INSERT INTO `d_setting` VALUES('1','file_ext','html');
INSERT INTO `d_setting` VALUES('1','seo_description','摩恩建站-企业网站定制专家');
INSERT INTO `d_setting` VALUES('1','seo_keywords','摩恩建站-企业网站定制专家');
INSERT INTO `d_setting` VALUES('1','seo_title','摩恩建站-企业网站定制专家');
INSERT INTO `d_setting` VALUES('1','seo_delimiter','_');
INSERT INTO `d_setting` VALUES('1','trade_nu','notify.php');
INSERT INTO `d_setting` VALUES('1','trade_tp','0');
INSERT INTO `d_setting` VALUES('1','trade_ac','');
INSERT INTO `d_setting` VALUES('1','trade_pw','');
INSERT INTO `d_setting` VALUES('1','trade_id','');
INSERT INTO `d_setting` VALUES('1','trade_hm','http://www.alipay.com/');
INSERT INTO `d_setting` VALUES('1','trade_nm','支付宝');
INSERT INTO `d_setting` VALUES('1','trade','');
INSERT INTO `d_setting` VALUES('1','sms_len','70');
INSERT INTO `d_setting` VALUES('1','sms_ok','成功');
INSERT INTO `d_setting` VALUES('1','sms_fee','0.1');
INSERT INTO `d_setting` VALUES('1','sms_sign','【摩恩网络】');
INSERT INTO `d_setting` VALUES('1','sms_key','qw78pusbhikckbwf');
INSERT INTO `d_setting` VALUES('1','sms_uid','584');
INSERT INTO `d_setting` VALUES('group-7','uploadday','100');
INSERT INTO `d_setting` VALUES('group-7','uploadlimit','100');
INSERT INTO `d_setting` VALUES('group-7','uploadsize','');
INSERT INTO `d_setting` VALUES('group-7','uploadtype','');
INSERT INTO `d_setting` VALUES('group-7','upload','1');
INSERT INTO `d_setting` VALUES('group-7','editor','Destoon');
INSERT INTO `d_setting` VALUES('group-7','reg','0');
INSERT INTO `d_setting` VALUES('group-7','grade','1');
INSERT INTO `d_setting` VALUES('group-7','discount','');
INSERT INTO `d_setting` VALUES('group-7','fee','2000');
INSERT INTO `d_setting` VALUES('group-7','fee_mode','1');
INSERT INTO `d_setting` VALUES('group-8','friend_limit','200');
INSERT INTO `d_setting` VALUES('group-8','chat','1');
INSERT INTO `d_setting` VALUES('group-8','ad','1');
INSERT INTO `d_setting` VALUES('group-8','spread','1');
INSERT INTO `d_setting` VALUES('group-8','trade_sell','1');
INSERT INTO `d_setting` VALUES('group-8','sendmail','1');
INSERT INTO `d_setting` VALUES('group-8','sms','1');
INSERT INTO `d_setting` VALUES('group-8','mail','1');
INSERT INTO `d_setting` VALUES('group-8','ask','1');
INSERT INTO `d_setting` VALUES('group-8','cash','1');
INSERT INTO `d_setting` VALUES('group-8','question','0');
INSERT INTO `d_setting` VALUES('group-8','captcha','0');
INSERT INTO `d_setting` VALUES('group-8','check','0');
INSERT INTO `d_setting` VALUES('group-8','uploadpt','0');
INSERT INTO `d_setting` VALUES('group-8','uploadday','0');
INSERT INTO `d_setting` VALUES('group-8','uploadlimit','0');
INSERT INTO `d_setting` VALUES('group-8','uploadsize','');
INSERT INTO `d_setting` VALUES('group-9','know_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','cash','1');
INSERT INTO `d_setting` VALUES('group-9','question','0');
INSERT INTO `d_setting` VALUES('group-9','captcha','0');
INSERT INTO `d_setting` VALUES('group-9','check','0');
INSERT INTO `d_setting` VALUES('group-9','uploadpt','0');
INSERT INTO `d_setting` VALUES('group-9','uploadday','100');
INSERT INTO `d_setting` VALUES('group-9','uploadlimit','10');
INSERT INTO `d_setting` VALUES('group-9','uploadsize','');
INSERT INTO `d_setting` VALUES('group-9','uploadtype','');
INSERT INTO `d_setting` VALUES('group-9','upload','1');
INSERT INTO `d_setting` VALUES('group-9','editor','Destoon');
INSERT INTO `d_setting` VALUES('group-9','reg','0');
INSERT INTO `d_setting` VALUES('group-9','grade','0');
INSERT INTO `d_setting` VALUES('group-9','discount','100');
INSERT INTO `d_setting` VALUES('group-9','fee','3000');
INSERT INTO `d_setting` VALUES('group-9','fee_mode','1');
INSERT INTO `d_setting` VALUES('oauth-netease','name','网易通行证');
INSERT INTO `d_setting` VALUES('2','chat_ext','jpg|gif|png|rar|zip|pdf|doc|xls|ppt|docx|xlsx|pptx');
INSERT INTO `d_setting` VALUES('2','chat_file','1');
INSERT INTO `d_setting` VALUES('2','chat_mintime','3');
INSERT INTO `d_setting` VALUES('2','chat_poll','3');
INSERT INTO `d_setting` VALUES('2','chat_timeout','600');
INSERT INTO `d_setting` VALUES('2','chat_maxlen','300');
INSERT INTO `d_setting` VALUES('2','alert_check','2');
INSERT INTO `d_setting` VALUES('2','alertid','5|6|22');
INSERT INTO `d_setting` VALUES('2','auth_days','3');
INSERT INTO `d_setting` VALUES('2','lock_hour','0');
INSERT INTO `d_setting` VALUES('2','login_times','10');
INSERT INTO `d_setting` VALUES('2','captcha_sendmessage','2');
INSERT INTO `d_setting` VALUES('2','iptimeout','0');
INSERT INTO `d_setting` VALUES('2','usernote','欢迎使用摩恩建站专业企业定制网站');
INSERT INTO `d_setting` VALUES('2','maxtouser','5');
INSERT INTO `d_setting` VALUES('2','banagent','');
INSERT INTO `d_setting` VALUES('2','defend_proxy','0');
INSERT INTO `d_setting` VALUES('2','sms_register','5');
INSERT INTO `d_setting` VALUES('2','credit_register','20');
INSERT INTO `d_setting` VALUES('2','money_register','0');
INSERT INTO `d_setting` VALUES('2','welcome_message','1');
INSERT INTO `d_setting` VALUES('2','welcome_email','0');
INSERT INTO `d_setting` VALUES('2','welcome_sms','0');
INSERT INTO `d_setting` VALUES('2','emailcode_register','0');
INSERT INTO `d_setting` VALUES('2','mobilecode_register','1');
INSERT INTO `d_setting` VALUES('2','captcha_register','0');
INSERT INTO `d_setting` VALUES('oauth-netease','enable','0');
INSERT INTO `d_setting` VALUES('2','question_register','0');
INSERT INTO `d_setting` VALUES('2','checkuser','2');
INSERT INTO `d_setting` VALUES('2','banemail','');
INSERT INTO `d_setting` VALUES('2','banmodec','0');
INSERT INTO `d_setting` VALUES('2','bancompany','');
INSERT INTO `d_setting` VALUES('2','banmodeu','0');
INSERT INTO `d_setting` VALUES('1','sms','1');
INSERT INTO `d_setting` VALUES('1','im_skype','0');
INSERT INTO `d_setting` VALUES('1','im_msn','0');
INSERT INTO `d_setting` VALUES('1','im_ali','1');
INSERT INTO `d_setting` VALUES('1','im_qq','0');
INSERT INTO `d_setting` VALUES('1','im_web','1');
INSERT INTO `d_setting` VALUES('1','admin_left','188');
INSERT INTO `d_setting` VALUES('1','credit_unit','点');
INSERT INTO `d_setting` VALUES('1','credit_name','积分');
INSERT INTO `d_setting` VALUES('1','money_unit','元');
INSERT INTO `d_setting` VALUES('1','money_name','资金');
INSERT INTO `d_setting` VALUES('1','close_reason','网站维护中，请稍候访问...');
INSERT INTO `d_setting` VALUES('1','city','0');
INSERT INTO `d_setting` VALUES('1','city_ip','0');
INSERT INTO `d_setting` VALUES('1','close','0');
INSERT INTO `d_setting` VALUES('2','enable_register','1');
INSERT INTO `d_setting` VALUES('2','minusername','4');
INSERT INTO `d_setting` VALUES('1','copyright','Copyright 2003-2011 OMOOO.All Rights Reserved 网站统计<br/>上海摩恩网络科技有限公司 版权所有');
INSERT INTO `d_setting` VALUES('1','sort','机械及行业设备<br/>普通机械制造<br/>通用零部件<br/>五金配件<br/>金属工具<br/>电动工具<br/>电子元件<br/>电子器件<br/>照明及照明器具<br/>安全防护设备<br/>包装<br/>造纸及纸制品<br/>电机、电工电器<br/>电工器材<br/>通用仪器仪表<br/>专用仪器仪表<br/>交通运输设备、零部件<br/>办公、文教用品<br/>数码、电脑及网络配件<br/>日常家居用品<br/>木材、木制品<br/>家具<br/>家用电器<br/>礼品、工艺美术品<br/>食品、饮料<br/>通信产品<br/>玩具<br/>印刷设备<br/>运动、休闲、保健用品<br/>鞋、帽<br/>服装<br/>日用化学品<br/>农用化学品<br/>胶粘剂<br/>染料、颜料、涂料和油墨<br/>催化剂和助剂<br/>库存精细化学品<br/>食品和饲料添加剂<br/>塑料<br/>橡胶制品<br/>环保、环保设备<br/>建筑、建材<br/>能源<br/>粮油、农制品<br/>金属<br/>医药、保健及医疗设备<br/>纺织皮革煤焦化产品<br/>日常服务<br/>广告服务<br/>教育培训<br/>认证<br/>创意设计物流服务进出口代理<br/>维修及安装服务<br/>广告、展览器材<br/>专业录音、放音设备<br/>光学摄影器材<br/>编辑制作设备播出、前端设备建筑、装饰业房地产<br/>安装工程<br/>邮电通信<br/>事务所、公证<br/>卫生、体育、社会、福利公共服务业金融、保险<br/>实业公司、商业贸易<br/>高新技术开发区<br/>卡类市场<br/>');
INSERT INTO `d_setting` VALUES('group-5','styleid','0');
INSERT INTO `d_setting` VALUES('group-5','homepage','0');
INSERT INTO `d_setting` VALUES('group-5','type_limit','10');
INSERT INTO `d_setting` VALUES('group-5','price_limit','3');
INSERT INTO `d_setting` VALUES('group-5','inquiry_limit','3');
INSERT INTO `d_setting` VALUES('group-5','message_limit','10');
INSERT INTO `d_setting` VALUES('group-5','express_limit','-1');
INSERT INTO `d_setting` VALUES('group-5','address_limit','10');
INSERT INTO `d_setting` VALUES('group-5','alert_limit','3');
INSERT INTO `d_setting` VALUES('group-5','favorite_limit','20');
INSERT INTO `d_setting` VALUES('group-5','friend_limit','10');
INSERT INTO `d_setting` VALUES('group-5','inbox_limit','200');
INSERT INTO `d_setting` VALUES('group-5','chat','1');
INSERT INTO `d_setting` VALUES('group-5','ad','1');
INSERT INTO `d_setting` VALUES('group-5','spread','0');
INSERT INTO `d_setting` VALUES('group-5','trade_sell','1');
INSERT INTO `d_setting` VALUES('group-5','sendmail','1');
INSERT INTO `d_setting` VALUES('group-5','sms','1');
INSERT INTO `d_setting` VALUES('group-5','mail','1');
INSERT INTO `d_setting` VALUES('group-5','ask','0');
INSERT INTO `d_setting` VALUES('group-5','cash','0');
INSERT INTO `d_setting` VALUES('group-5','question','1');
INSERT INTO `d_setting` VALUES('group-5','captcha','1');
INSERT INTO `d_setting` VALUES('group-5','check','1');
INSERT INTO `d_setting` VALUES('group-5','uploadpt','1');
INSERT INTO `d_setting` VALUES('group-5','uploadday','20');
INSERT INTO `d_setting` VALUES('group-5','uploadlimit','50');
INSERT INTO `d_setting` VALUES('group-5','uploadsize','');
INSERT INTO `d_setting` VALUES('group-5','uploadtype','');
INSERT INTO `d_setting` VALUES('group-5','upload','1');
INSERT INTO `d_setting` VALUES('group-5','editor','Simple');
INSERT INTO `d_setting` VALUES('group-5','reg','1');
INSERT INTO `d_setting` VALUES('group-5','grade','1');
INSERT INTO `d_setting` VALUES('group-5','discount','100');
INSERT INTO `d_setting` VALUES('group-5','fee','0');
INSERT INTO `d_setting` VALUES('4','seo_description_show','');
INSERT INTO `d_setting` VALUES('4','group_index','3,5,6,7,8,9');
INSERT INTO `d_setting` VALUES('4','group_list','3,5,6,7,8,9');
INSERT INTO `d_setting` VALUES('4','group_search','3,5,6,7,8,9');
INSERT INTO `d_setting` VALUES('4','group_contact','3,5,6,7,8,9');
INSERT INTO `d_setting` VALUES('4','group_buy','3,5,6,7,8,9');
INSERT INTO `d_setting` VALUES('4','group_message','3,5,6,7,8,9');
INSERT INTO `d_setting` VALUES('4','group_inquiry','3,5,6,7,8,9');
INSERT INTO `d_setting` VALUES('4','group_price','3,5,6,7,8,9');
INSERT INTO `d_setting` VALUES('group-6','trade_sell','1');
INSERT INTO `d_setting` VALUES('group-6','sms','1');
INSERT INTO `d_setting` VALUES('group-6','mail','1');
INSERT INTO `d_setting` VALUES('group-6','ask','1');
INSERT INTO `d_setting` VALUES('group-6','cash','0');
INSERT INTO `d_setting` VALUES('group-6','question','1');
INSERT INTO `d_setting` VALUES('group-6','captcha','1');
INSERT INTO `d_setting` VALUES('group-6','check','1');
INSERT INTO `d_setting` VALUES('group-6','uploadpt','0');
INSERT INTO `d_setting` VALUES('group-6','uploadday','500');
INSERT INTO `d_setting` VALUES('group-6','uploadlimit','0');
INSERT INTO `d_setting` VALUES('group-6','uploadsize','');
INSERT INTO `d_setting` VALUES('group-6','uploadtype','');
INSERT INTO `d_setting` VALUES('group-8','uploadtype','');
INSERT INTO `d_setting` VALUES('group-8','upload','1');
INSERT INTO `d_setting` VALUES('group-8','editor','Destoon');
INSERT INTO `d_setting` VALUES('group-8','reg','0');
INSERT INTO `d_setting` VALUES('group-8','grade','0');
INSERT INTO `d_setting` VALUES('group-8','discount','100');
INSERT INTO `d_setting` VALUES('group-8','fee','3000');
INSERT INTO `d_setting` VALUES('group-8','fee_mode','1');
INSERT INTO `d_setting` VALUES('1','telephone','');
INSERT INTO `d_setting` VALUES('1','icpno','沪ICP备07024853号');
INSERT INTO `d_setting` VALUES('1','logo','');
INSERT INTO `d_setting` VALUES('group-5','fee_mode','0');
INSERT INTO `d_setting` VALUES('group-6','upload','1');
INSERT INTO `d_setting` VALUES('group-6','editor','Destoon');
INSERT INTO `d_setting` VALUES('group-6','reg','0');
INSERT INTO `d_setting` VALUES('group-6','grade','1');
INSERT INTO `d_setting` VALUES('group-6','discount','100');
INSERT INTO `d_setting` VALUES('group-6','fee','0');
INSERT INTO `d_setting` VALUES('group-6','fee_mode','0');
INSERT INTO `d_setting` VALUES('group-9','brand_limit','0');
INSERT INTO `d_setting` VALUES('group-9','brand_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','photo_limit','0');
INSERT INTO `d_setting` VALUES('group-9','photo_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','video_limit','0');
INSERT INTO `d_setting` VALUES('group-9','video_free_limit','0');
INSERT INTO `d_setting` VALUES('group-9','down_limit','0');
INSERT INTO `d_setting` VALUES('group-9','down_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','photo_limit','0');
INSERT INTO `d_setting` VALUES('group-8','photo_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','video_limit','0');
INSERT INTO `d_setting` VALUES('group-8','video_free_limit','0');
INSERT INTO `d_setting` VALUES('group-8','down_limit','0');
INSERT INTO `d_setting` VALUES('group-8','down_free_limit','0');
INSERT INTO `d_setting` VALUES('group-6','photo_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','video_limit','5');
INSERT INTO `d_setting` VALUES('group-6','video_free_limit','1');
INSERT INTO `d_setting` VALUES('group-6','down_limit','5');
INSERT INTO `d_setting` VALUES('group-6','down_free_limit','1');
INSERT INTO `d_setting` VALUES('group-7','info_limit','0');
INSERT INTO `d_setting` VALUES('group-7','info_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','know_limit','0');
INSERT INTO `d_setting` VALUES('group-7','know_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','brand_limit','0');
INSERT INTO `d_setting` VALUES('group-7','brand_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','photo_limit','0');
INSERT INTO `d_setting` VALUES('group-7','photo_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','video_limit','0');
INSERT INTO `d_setting` VALUES('group-7','video_free_limit','0');
INSERT INTO `d_setting` VALUES('group-7','down_limit','0');
INSERT INTO `d_setting` VALUES('group-7','down_free_limit','0');
INSERT INTO `d_setting` VALUES('2','banusername','admin|system|master|web|sell|buy|company|quote|job|article|info|page|bbs');
INSERT INTO `d_setting` VALUES('15','fee_add','0');
INSERT INTO `d_setting` VALUES('15','fee_view','0');
INSERT INTO `d_setting` VALUES('15','fee_period','0');
INSERT INTO `d_setting` VALUES('15','fee_back','0');
INSERT INTO `d_setting` VALUES('15','credit_add','2');
INSERT INTO `d_setting` VALUES('15','credit_del','5');
INSERT INTO `d_setting` VALUES('15','credit_color','100');
INSERT INTO `d_setting` VALUES('1','sitename','摩恩建站-企业网站定制专家');
INSERT INTO `d_setting` VALUES('2','maxpassword','20');
INSERT INTO `d_setting` VALUES('2','minpassword','6');
INSERT INTO `d_setting` VALUES('2','maxusername','20');
INSERT INTO `d_setting` VALUES('2','uc_bbspre','');
INSERT INTO `d_setting` VALUES('2','oauth','0');

DROP TABLE IF EXISTS `d_sms`;
CREATE TABLE `d_sms` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mobile` varchar(30) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `word` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `sendtime` int(10) unsigned NOT NULL DEFAULT '0',
  `code` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='短信记录';

INSERT INTO `d_sms` VALUES('1','','您好bingoo,您的订单73已有设计师设计出产品了,请注意查看【摩恩网络】','38','admin','1395020664','参数错误');
INSERT INTO `d_sms` VALUES('2','','您好bingoo,您的订单74已有设计师设计出产品了,请注意查看【摩恩网络】','38','admin','1395020664','参数错误');
INSERT INTO `d_sms` VALUES('3','','您好bingoo,您的订单75已有设计师设计出产品了,请注意查看【摩恩网络】','38','admin','1395020664','参数错误');
INSERT INTO `d_sms` VALUES('4','','您好bingoo,您的订单73已有设计师设计出产品了,请注意查看【摩恩网络】','38','admin','1395020702','参数错误');
INSERT INTO `d_sms` VALUES('5','','您好bingoo,您的订单74已有设计师设计出产品了,请注意查看【摩恩网络】','38','admin','1395020702','参数错误');
INSERT INTO `d_sms` VALUES('6','','您好bingoo,您的订单75已有设计师设计出产品了,请注意查看【摩恩网络】','38','admin','1395020702','参数错误');
INSERT INTO `d_sms` VALUES('7','15061855522','您好bingoo,您的订单73已有设计师设计出产品了,请注意查看【摩恩网络】','38','admin','1395021781','成功/1');
INSERT INTO `d_sms` VALUES('8','15061855522','您好bingoo,您的订单75已有设计师设计出产品了,请注意查看【摩恩网络】','38','admin','1395024495','成功/1');
INSERT INTO `d_sms` VALUES('9','15061855227','您好bingoo,您的订单75已有设计师设计出产品了,请注意查看【摩恩网络】','38','admin','1395024569','成功/1');
INSERT INTO `d_sms` VALUES('10','15061855227','您好bingoo,您的订单75已有设计师设计出产品了,请注意查看【摩恩网络】','38','admin','1395025829','成功/1');
INSERT INTO `d_sms` VALUES('11','15061855227','【摩恩网络】','6','bingoo','1395034785','成功/1');
INSERT INTO `d_sms` VALUES('12','15061855227','【摩恩网络】','6','bingoo','1395034890','成功/1');
INSERT INTO `d_sms` VALUES('13','15061855227','【摩恩网络】','6','bingoo','1395034967','成功/1');
INSERT INTO `d_sms` VALUES('14','1122','15061855227【摩恩网络】','17','bingoo','1395035118','号码错误');
INSERT INTO `d_sms` VALUES('15','','【摩恩网络】','6','bingoo','1395035329','参数错误');
INSERT INTO `d_sms` VALUES('16','15061855227','您好1122,您的订单77已有设计师设计出栏目页了,请注意查看【摩恩网络】','37','bingoo','1395035613','成功/1');
INSERT INTO `d_sms` VALUES('17','15061855227','尊敬的1122,恭喜你！您对订单77的作品被客户入围,请注意查看【摩恩网络】','38','bingoo','1395035933','成功/1');
INSERT INTO `d_sms` VALUES('18','15061855227','【摩恩网络】','6','bingoo','1395036089','成功/1');
INSERT INTO `d_sms` VALUES('19','15061855227','尊敬的1122,恭喜你！您对订单77的作品被客户入围,请注意查看【摩恩网络】','38','bingoo','1395036130','成功/1');
INSERT INTO `d_sms` VALUES('20','15061855227','尊敬的1122,恭喜你！您对订单78的作品被客户入围,请注意查看【摩恩网络】','38','bingoo','1395036640','成功/1');
INSERT INTO `d_sms` VALUES('21','15061855227','尊敬的bingz1,恭喜你！您对订单78的作品被客户入围,请注意查看【摩恩网络】','40','bingoo','1395036640','成功/1');
INSERT INTO `d_sms` VALUES('22','15061855227','尊敬的bingz1,恭喜你！您对订单77的作品被客户入围,请注意查看【摩恩网络】','40','bingoo','1395037535','成功/1');
INSERT INTO `d_sms` VALUES('23','18661052393','您的短信认证码为:836569,有效期3天【摩恩网络】','27','bingoo','1395043149','成功/1');

DROP TABLE IF EXISTS `d_special`;
CREATE TABLE `d_special` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `tag` varchar(100) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `items` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `banner` varchar(255) NOT NULL DEFAULT '',
  `cfg_photo` smallint(4) unsigned NOT NULL DEFAULT '0',
  `cfg_video` smallint(4) unsigned NOT NULL DEFAULT '0',
  `cfg_type` smallint(4) unsigned NOT NULL DEFAULT '0',
  `seo_title` varchar(255) NOT NULL DEFAULT '',
  `seo_keywords` varchar(255) NOT NULL DEFAULT '',
  `seo_description` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `domain` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `addtime` (`addtime`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='专题';


DROP TABLE IF EXISTS `d_special_data`;
CREATE TABLE `d_special_data` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` longtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='专题内容';


DROP TABLE IF EXISTS `d_special_item`;
CREATE TABLE `d_special_item` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `specialid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `typeid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `addtime` (`addtime`),
  KEY `specialid` (`specialid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='专题信息';


DROP TABLE IF EXISTS `d_sphinx`;
CREATE TABLE `d_sphinx` (
  `moduleid` int(10) unsigned NOT NULL DEFAULT '0',
  `maxid` bigint(20) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `moduleid` (`moduleid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Sphinx';


DROP TABLE IF EXISTS `d_spread`;
CREATE TABLE `d_spread` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `tid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `word` varchar(50) NOT NULL DEFAULT '',
  `price` float NOT NULL DEFAULT '0',
  `currency` varchar(30) NOT NULL DEFAULT '',
  `company` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `fromtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='排名推广';


DROP TABLE IF EXISTS `d_spread_price`;
CREATE TABLE `d_spread_price` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `word` varchar(50) NOT NULL DEFAULT '',
  `sell_price` float NOT NULL DEFAULT '0',
  `buy_price` float NOT NULL DEFAULT '0',
  `company_price` float NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='排名起价';


DROP TABLE IF EXISTS `d_style`;
CREATE TABLE `d_style` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `skin` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(50) NOT NULL DEFAULT '',
  `author` varchar(30) NOT NULL DEFAULT '',
  `groupid` varchar(30) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `currency` varchar(20) NOT NULL DEFAULT '',
  `money` float NOT NULL DEFAULT '0',
  `credit` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='公司主页模板';

INSERT INTO `d_style` VALUES('2','0','深蓝模板','blue','homepage','Destoon.COM',',6,7,','0','money','0','0','1','1393836401','admin','1393836401','0');
INSERT INTO `d_style` VALUES('3','0','绿色模板','green','homepage','Destoon.COM',',6,7,','0','money','0','0','0','1393836401','admin','1393836401','0');
INSERT INTO `d_style` VALUES('4','0','紫色模板','purple','homepage','Destoon.COM',',6,7,','0','credit','0','5','2','1393836401','admin','1393836401','0');
INSERT INTO `d_style` VALUES('5','0','橙色模板','orange','homepage','Destoon.COM',',6,7,','0','credit','120','0','1','1393836401','admin','1393836401','0');
INSERT INTO `d_style` VALUES('6','99','默认模板','default','homepage','Destoon.COM',',6,7,','0','money','0','0','0','1393836401','admin','1393836401','0');

DROP TABLE IF EXISTS `d_type`;
CREATE TABLE `d_type` (
  `typeid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `listorder` smallint(4) NOT NULL DEFAULT '0',
  `typename` varchar(255) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `item` varchar(20) NOT NULL DEFAULT '',
  `cache` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`typeid`),
  KEY `listorder` (`listorder`),
  KEY `item` (`item`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='分类';

INSERT INTO `d_type` VALUES('1','1','qwqw','','announce','1');
INSERT INTO `d_type` VALUES('2','21','sa','','announce','1');
INSERT INTO `d_type` VALUES('5','0','展示网站建设','','mall-1','0');
INSERT INTO `d_type` VALUES('6','0','品牌网站建设','','mall-1','0');
INSERT INTO `d_type` VALUES('7','0','营销网站建设','','mall-1','0');
INSERT INTO `d_type` VALUES('8','0','Logo设计','','mall-1','0');
INSERT INTO `d_type` VALUES('9','0','售前咨询','','ask','1');
INSERT INTO `d_type` VALUES('10','0','售后服务','','ask','1');

DROP TABLE IF EXISTS `d_upgrade`;
CREATE TABLE `d_upgrade` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `userid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `groupid` smallint(4) unsigned NOT NULL DEFAULT '0',
  `amount` float NOT NULL DEFAULT '0',
  `message` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `company` varchar(100) NOT NULL DEFAULT '',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `telephone` varchar(30) NOT NULL DEFAULT '',
  `mobile` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(30) NOT NULL DEFAULT '',
  `ali` varchar(30) NOT NULL DEFAULT '',
  `skype` varchar(30) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `promo_code` varchar(30) NOT NULL DEFAULT '',
  `promo_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `promo_amount` float NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `note` text NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='会员升级';

INSERT INTO `d_upgrade` VALUES('1','11','bingoo','6','0','0','bingoo','bingoo','112212121','15061855522','bingoo@q.c','','111212','','','1221','1393913004','127.0.0.1','','0','0','','0','2','');

DROP TABLE IF EXISTS `d_upload_0`;
CREATE TABLE `d_upload_0` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(32) NOT NULL DEFAULT '',
  `moduleid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fileurl` varchar(255) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `fileext` varchar(10) NOT NULL DEFAULT '',
  `upfrom` varchar(10) NOT NULL DEFAULT '',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `item` (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='上传记录0';


DROP TABLE IF EXISTS `d_upload_1`;
CREATE TABLE `d_upload_1` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(32) NOT NULL DEFAULT '',
  `moduleid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fileurl` varchar(255) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `fileext` varchar(10) NOT NULL DEFAULT '',
  `upfrom` varchar(10) NOT NULL DEFAULT '',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `item` (`item`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='上传记录1';

INSERT INTO `d_upload_1` VALUES('1','12e16789286a30136bad238f57af4ddf','2','10','http://www.d.com/file/upload/201403/04/10-59-17-21-1.jpg','10141','jpg','thumb','180','180','1393901957','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('2','5ec29c1779d08d6a0ec60b09018a747b','16','1','http://www.d.com/file/upload/201403/04/11-59-56-19-1.jpg.thumb.jpg','4809','jpg','album','180','180','1393905596','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('3','7c071f89c9809f67a344253dc1eff834','16','2','http://www.d.com/file/upload/201403/04/12-21-50-98-1.jpg.thumb.jpg','4809','jpg','album','180','180','1393906910','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('4','f9288d3e8b801ad6a29a6a8256053fae','16','3','http://www.d.com/file/upload/201403/04/13-28-46-19-1.jpg.thumb.jpg','4809','jpg','album','180','180','1393910926','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('5','f0309ecd18772b1aeea2ff0f2bb8ac2a','16','4','http://www.d.com/file/upload/201403/04/13-35-48-78-1.jpg.thumb.jpg','4809','jpg','album','180','180','1393911348','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('24','a898656482befaa064ee24edc11a2572','2','0','http://www.d.com/file/upload/201403/14/13-15-02-92-1.docx','11620','docx','file','0','0','1394774102','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('11','9e8690aab793b7ca3e3096de2b318780','15','1','http://www.d.com/file/upload/201403/06/17-21-05-88-1.jpg','945055','jpg','file','1920','1400','1394097665','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('10','06d45e271318f0963431d0cc1dccbf06','16','7','http://www.d.com/file/upload/201403/06/16-17-12-59-1.jpg.thumb.jpg','945055','jpg','album','800','583','1394093832','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('12','d88a2c4ea7d6de8cdccfbff87e842404','2','0','http://www.d.com/file/upload/201403/06/17-31-48-20-1.jpg.thumb.jpg','945055','jpg','album','800','583','1394098308','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('15','7b2151055c42074de5b5e6a8cc1e3bc9','2','0','http://www.d.com/file/upload/201403/07/13-02-01-77-1.jpg.thumb.jpg','6829','jpg','album','165','220','1394168521','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('17','040410c7d49c8387b03953ccca2af48d','16','8','http://www.d.com/file/upload/201403/07/16-18-00-24-1.jpg.thumb.jpg','34785','jpg','album','142','142','1394180280','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('19','e3e712e504e6cba3146c10d57c6e1994','16','5','http://www.d.com/file/upload/201403/11/13-21-21-81-1.png.thumb.png','14031','png','album','406','86','1394515281','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('25','266e3c806f2072ea29302789a4ef4533','15','2','http://www.d.com/file/upload/201403/14/17-34-03-40-1.docx','11620','docx','file','0','0','1394789643','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('26','1b99081ec9d0c03eab68fd73c30c6634','15','0','http://www.d.com/file/upload/201403/15/14-00-41-59-1.jpg','3933','jpg','file','100','100','1394863241','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('27','509c982f0bb84c9593dba2ed83d32896','15','0','http://www.d.com/file/upload/201403/15/14-05-24-34-1.docx','0','docx','file','0','0','1394863524','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('28','d751ae3af3f00479d690cb4055f22084','1','0','http://www.d.com/file/upload/201403/15/14-08-05-79-1.jpg','9403','jpg','file','260','142','1394863685','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('31','2228fc8a6f7306ec15707110fed1c17c','16','10','http://www.d.com/file/upload/201403/15/16-03-30-52-1.jpg.thumb.jpg','479501','jpg','album','440','2227','1394870610','admin','127.0.0.1');
INSERT INTO `d_upload_1` VALUES('30','ea0c34117709b2383b906e7d1ebe219e','16','10','http://www.d.com/file/upload/201403/15/16-00-10-72-1.jpg.thumb.jpg','479501','jpg','album','440','2227','1394870410','admin','127.0.0.1');

DROP TABLE IF EXISTS `d_upload_2`;
CREATE TABLE `d_upload_2` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(32) NOT NULL DEFAULT '',
  `moduleid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fileurl` varchar(255) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `fileext` varchar(10) NOT NULL DEFAULT '',
  `upfrom` varchar(10) NOT NULL DEFAULT '',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `item` (`item`)
) ENGINE=MyISAM AUTO_INCREMENT=149 DEFAULT CHARSET=utf8 COMMENT='上传记录2';

INSERT INTO `d_upload_2` VALUES('9','af4dc871b84dcac2e8a8011ec2b1a631','2','0','http://www.d.com/file/upload/201403/06/14-43-42-91-12.jpg.thumb.jpg','945055','jpg','album','800','583','1394088222','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('10','c2f6ac1019f6ba61c7c16874fab55207','2','0','http://www.d.com/file/upload/201403/06/14-53-58-68-12.jpg.thumb.jpg','945055','jpg','album','800','583','1394088838','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('11','67bcc037a1fd90556397408e9e2a07f8','2','0','http://www.d.com/file/upload/201403/06/15-02-57-38-12.jpg.thumb.jpg','945055','jpg','album','800','583','1394089377','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('12','63c159e71ba0ed49cc67ec9752eefc4b','2','0','http://www.d.com/file/upload/201403/07/15-16-54-67-12.jpg.thumb.jpg','945055','jpg','album','800','583','1394176614','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('13','ce6e2df213411f955a300ee9f33293f6','2','0','http://www.d.com/file/upload/201403/07/15-22-06-18-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394176926','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('14','f98393ab49dc1278c54a01338c468f71','2','0','http://www.d.com/file/upload/201403/07/15-29-45-54-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394177385','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('15','ab0bf2ab247b7ef93e31cc1dd81c4bc4','2','0','http://www.d.com/file/upload/201403/07/15-31-22-27-12.jpg.thumb.jpg','945055','jpg','album','800','583','1394177482','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('16','6c91606406ebd1f5bd6df9cfea77c20d','2','0','http://www.d.com/file/upload/201403/07/15-31-33-46-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394177493','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('17','66fae3d63c357d1bea94fff21e5736e7','2','0','http://www.d.com/file/upload/201403/07/16-45-58-25-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394181958','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('18','e1e0ca51947f1843a1a14a7f271bd79a','2','0','http://www.d.com/file/upload/201403/10/08-42-32-77-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394412152','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('19','7b178b9273993ea82aeca08f16565b8f','2','0','http://www.d.com/file/upload/201403/10/08-42-45-46-12.jpg.thumb.jpg','13752','jpg','album','287','287','1394412165','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('20','fabdd7c2d54d1e81c18e4f2e6120fddc','2','0','http://www.d.com/file/upload/201403/10/08-43-21-52-12.jpg.thumb.jpg','6829','jpg','album','165','220','1394412201','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('21','f80c484c058e6e1ac40a5ea7a18e6887','2','0','http://www.d.com/file/upload/201403/10/09-06-17-95-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394413577','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('22','9251b6e24df24d249f082ed93da22e9d','2','0','http://www.d.com/file/upload/201403/10/09-06-29-92-12.jpg.thumb.jpg','6829','jpg','album','165','220','1394413589','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('23','0e92be49ace5980edf89e7d78cc0b1a3','2','0','http://www.d.com/file/upload/201403/10/14-49-40-90-12.jpg.thumb.jpg','6829','jpg','album','165','220','1394434180','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('24','2127dcbe5b4b3c3c6173a67c82aa0e70','2','0','http://www.d.com/file/upload/201403/10/14-50-55-56-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394434255','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('25','9f13d8c01ea0f1f5518ade54af12fd60','2','0','http://www.d.com/file/upload/201403/10/14-51-03-62-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394434263','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('26','fdd388c9af65ff5f56207cae75506f71','2','0','http://www.d.com/file/upload/201403/10/14-51-56-28-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394434316','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('27','030a5f1a50f95c18bc2dc9fc91f14978','2','0','http://www.d.com/file/upload/201403/10/14-52-04-60-12.gif.thumb.gif','1575','gif','album','270','129','1394434324','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('28','c4ffb8fe22e62ba7e98108105ae8b6c1','2','0','http://www.d.com/file/upload/201403/10/14-52-16-65-12.gif.thumb.gif','1575','gif','album','270','129','1394434336','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('29','cd0d4f0698098b6e1b9a9f0e570a1663','2','0','http://www.d.com/file/upload/201403/10/14-53-31-98-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394434411','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('30','c25670e31fd071d4ed29228253d8e5f1','2','0','http://www.d.com/file/upload/201403/10/14-53-38-95-12.gif.thumb.gif','1575','gif','album','270','129','1394434418','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('31','f1057a1e67a4d01d4bb74edc38c956f6','2','0','http://www.d.com/file/upload/201403/10/14-55-11-55-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394434511','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('32','4dcebf5be33a1762071a701c677f5678','2','0','http://www.d.com/file/upload/201403/10/14-55-21-98-12.gif.thumb.gif','1575','gif','album','270','129','1394434521','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('33','f3b0ac8f09578dfe281634591e08482d','2','0','http://www.d.com/file/upload/201403/10/15-55-36-15-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394438136','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('34','ad4f851e8a2806cbe5c409519e8aeb69','2','0','http://www.d.com/file/upload/201403/10/15-58-21-84-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394438301','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('35','886635b398e363f10774c5c942258b25','2','0','http://www.d.com/file/upload/201403/10/17-30-23-14-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394443823','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('36','9c688053edfeb612441f06f5b9e3fd08','2','0','http://www.d.com/file/upload/201403/10/17-32-51-13-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394443971','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('37','885f5199edc9f022e1a2bf9cc5debb23','2','0','http://www.d.com/file/upload/201403/10/17-34-17-89-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394444057','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('38','7ec90b0074fb70bdc5d30f6beefa8479','2','0','http://www.d.com/file/upload/201403/10/17-42-38-79-12.jpg.thumb.jpg','34785','jpg','album','142','142','1394444558','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('39','6084a8f0c7b3eead0b753ca3287cd576','2','0','http://www.d.com/file/upload/201403/10/17-42-47-48-12.jpg.thumb.jpg','13752','jpg','album','287','287','1394444567','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('60','620b8391430ad31058972b9f52862434','2','0','http://www.d.com/file/upload/201403/12/13-16-03-29-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394601363','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('61','26a2c9eb1b6452459bf5acfa9c2333a7','2','0','http://www.d.com/file/upload/201403/12/13-16-27-88-12.jpg.thumb.jpg','9403','jpg','album','260','142','1394601387','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('62','bc29c63602d68ce4899722be7f158f55','2','0','http://www.d.com/file/upload/201403/12/13-16-58-79-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394601418','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('63','dfec30351cee84dc5b668d60fc49811b','2','0','http://www.d.com/file/upload/201403/12/13-19-50-69-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394601590','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('64','a3511fe19c528a95e2ea65cafb282afd','2','0','http://www.d.com/file/upload/201403/12/13-41-13-29-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394602873','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('65','90db7347b0f4a55469b8c8cf59931823','2','0','http://www.d.com/file/upload/201403/12/13-44-53-89-12.jpg.thumb.jpg','9403','jpg','album','260','142','1394603093','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('66','b7c9cc18bba3a109a0d6b62ef11123fa','2','0','http://www.d.com/file/upload/201403/12/16-02-17-83-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394611337','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('59','ae8625531effbd70c787bade7cdad099','2','0','http://www.d.com/file/upload/201403/12/12-46-51-12-12.jpg.thumb.jpg','9403','jpg','album','260','142','1394599611','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('58','56081464f08bc03e4780216e34b06aa9','2','0','http://www.d.com/file/upload/201403/12/12-39-54-17-12.jpg.thumb.jpg','9403','jpg','album','260','142','1394599194','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('57','e9c0bce061e79c24e4139ae2f81c3338','2','0','http://www.d.com/file/upload/201403/12/11-54-04-25-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394596444','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('67','dc526e1d2804cd0e5f2319daabe0c3e3','2','0','http://www.d.com/file/upload/201403/12/16-24-23-55-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394612663','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('68','dbc46887c93dca1c6e6336393080d94d','2','0','http://www.d.com/file/upload/201403/12/16-24-28-85-12.jpg.thumb.jpg','17921','jpg','album','287','287','1394612668','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('69','1ee9943fa4d78c60c9cf5fa84ae64be1','2','0','http://www.d.com/file/upload/201403/12/16-25-31-77-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394612731','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('70','f9b8421d117d7eb416be7c8ba27988da','2','0','http://www.d.com/file/upload/201403/12/16-25-43-71-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394612743','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('71','01903e9306ae1af87e5c34bfad851757','2','0','http://www.d.com/file/upload/201403/12/16-25-51-45-12.png.thumb.png','14031','png','album','406','86','1394612751','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('72','9c4fc2d86936e1b2f54da790a9088c5d','2','0','http://www.d.com/file/upload/201403/12/16-26-48-95-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394612808','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('73','2d272d790ae5623c1398149ff07dbb12','2','0','http://www.d.com/file/upload/201403/12/16-27-07-36-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394612827','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('74','cb66ff831489d31a70e22e5627adec3e','2','0','http://www.d.com/file/upload/201403/12/16-28-53-99-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394612933','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('75','b7f0a14ef1e02e3d38be700cd310d276','2','0','http://www.d.com/file/upload/201403/12/16-38-21-20-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394613501','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('76','de654cfb6f40c6977da9c9137da23cd3','2','0','http://www.d.com/file/upload/201403/12/16-39-59-41-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394613599','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('77','88cfc365614487ba8b7bbc6bbc110d70','2','0','http://www.d.com/file/upload/201403/12/16-40-10-53-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394613610','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('78','46804676439c9a8037f6a3a4cf729a7d','2','0','http://www.d.com/file/upload/201403/12/16-40-45-23-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394613645','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('79','489d11e6e44812db1a87e4c579363234','2','0','http://www.d.com/file/upload/201403/12/16-40-57-35-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394613657','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('80','1470a4dae832c7fdc054028e8fa1db1f','2','0','http://www.d.com/file/upload/201403/12/16-41-46-36-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394613706','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('81','0ee7026a01cebd731063c64307b7fd85','2','0','http://www.d.com/file/upload/201403/12/16-43-21-56-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394613801','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('82','c967513092306c5e126328c2c46a8448','2','0','http://www.d.com/file/upload/201403/12/16-43-40-54-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394613820','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('83','1fa105b05718f303b6e72b3e29ba8b74','2','0','http://www.d.com/file/upload/201403/12/16-44-59-12-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394613899','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('84','088668e1e1ec398d54e6072a5c6641ac','2','0','http://www.d.com/file/upload/201403/12/16-45-40-30-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394613940','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('85','31cb504fcda4a8bee36b54e16663d595','2','0','http://www.d.com/file/upload/201403/12/16-45-53-98-12.png.thumb.png','14031','png','album','406','86','1394613953','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('86','704904d8ec52d53cd54f438914c60a74','2','0','http://www.d.com/file/upload/201403/12/16-46-44-38-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394614004','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('87','39b2b6de70cce063d27c0f0d39898c4b','2','0','http://www.d.com/file/upload/201403/12/17-01-48-56-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394614908','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('88','c3c69f5a17ea124fdb3512b738ca48ab','2','0','http://www.d.com/file/upload/201403/12/17-25-11-49-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394616311','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('89','9409e19006315beb399936fa05e88f33','2','0','http://www.d.com/file/upload/201403/12/17-26-42-50-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394616402','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('90','62979aa5b92ef3d9f8ed48a7d7f0d6fd','2','0','http://www.d.com/file/upload/201403/12/17-27-29-48-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394616449','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('91','622172e1fd77d8115f05e69b7dbba53e','2','0','http://www.d.com/file/upload/201403/12/17-28-26-87-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394616506','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('92','72eb4d0a29daba712c96f4a89aca0485','2','0','http://www.d.com/file/upload/201403/12/17-29-01-78-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394616541','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('93','74f702b96ef63656379f73c748182962','2','0','http://www.d.com/file/upload/201403/12/17-29-29-10-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394616569','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('94','9a14658d729b5430d5cf926b65f06473','2','0','http://www.d.com/file/upload/201403/12/17-30-47-96-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394616647','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('95','b24a8341827d9bfd1c2d6ef88b4a1528','2','0','http://www.d.com/file/upload/201403/12/17-31-51-90-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394616711','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('96','9dbc867e09304a474a1a603849913168','2','0','http://www.d.com/file/upload/201403/12/17-33-14-23-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394616794','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('97','4a1b8d0aa6684ab9b573c43fd56ecd1b','2','0','http://www.d.com/file/upload/201403/12/17-34-08-83-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394616848','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('98','cebe94f3db40460ae37e786c0c39b0c2','2','0','http://www.d.com/file/upload/201403/12/17-35-52-17-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394616952','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('99','af00db8a388e71c9c49369c0876bc7fa','2','0','http://www.d.com/file/upload/201403/12/17-38-20-56-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394617100','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('100','171cee61f8ab26b617c9a486200c08f5','2','0','http://www.d.com/file/upload/201403/12/17-39-26-32-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394617166','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('101','1ebb7155c90d05d6976c2d60127bdd46','2','0','http://www.d.com/file/upload/201403/12/17-52-07-83-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394617927','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('102','fa5d45cb312c5aef3d03680203254840','2','0','http://www.d.com/file/upload/201403/12/17-52-52-75-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394617972','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('103','aaced24ef971179f6a62851bc9cfb39a','2','0','http://www.d.com/file/upload/201403/12/17-52-59-89-12.jpg.thumb.jpg','9403','jpg','album','260','142','1394617979','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('104','2f1043d3dd68cab96614263d5f0b51ea','2','0','http://www.d.com/file/upload/201403/12/17-53-09-39-12.jpg.thumb.jpg','17921','jpg','album','287','287','1394617989','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('105','d78731a404b21b92d373d417b1b7ef10','2','0','http://www.d.com/file/upload/201403/12/17-53-59-39-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394618039','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('106','ebc436d5ad03f23bb793af70c875f54f','2','0','http://www.d.com/file/upload/201403/12/17-54-03-48-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394618043','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('107','158e4e6883833b9b9bc722ffb959654f','2','0','http://www.d.com/file/upload/201403/12/17-54-10-52-12.jpg.thumb.jpg','9403','jpg','album','260','142','1394618050','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('108','6ddd37a367bf985c08634b0ba9e0dcd8','2','0','http://www.d.com/file/upload/201403/12/17-54-38-75-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394618078','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('109','9c57130e87b2668ad4d0a47e24264cb6','2','0','http://www.d.com/file/upload/201403/12/17-54-43-56-12.jpg.thumb.jpg','17921','jpg','album','287','287','1394618083','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('110','1dfee7cf0460108f8f5f518de590490b','2','0','http://www.d.com/file/upload/201403/12/17-54-49-67-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394618089','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('112','295246e8afd3f69e952fa49751fcb13b','2','0','http://www.d.com/file/upload/201403/13/12-20-13-64-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394684413','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('113','ad90af6ecfadefa3c17431dbbc020555','2','0','http://www.d.com/file/upload/201403/13/17-57-35-97-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394704655','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('114','f92a3540fc3f8434e2394b14a45b88da','2','0','http://www.d.com/file/upload/201403/14/10-29-16-21-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394764156','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('115','be1fe6368ae01150dd39a3af5c8954f1','2','0','http://www.d.com/file/upload/201403/14/10-29-25-27-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394764165','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('116','0cf6a7ffa76ebde7a951046c6274d277','2','0','http://www.d.com/file/upload/201403/14/10-38-35-94-12.jpg','3933','jpg','file','100','100','1394764715','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('117','cf56cea97d1e2250b24721c8d1ff9883','2','0','http://www.d.com/file/upload/201403/14/10-45-30-72-12.jpg','3933','jpg','file','100','100','1394765130','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('118','633a96fea11090dfec4961c82432cbb8','2','0','http://www.d.com/file/upload/201403/14/11-01-32-37-12.jpg','3933','jpg','file','100','100','1394766092','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('119','8047dc8b13f9ed6d49db6ac21ba7c267','2','0','http://www.d.com/file/upload/201403/14/11-01-36-27-12.jpg','9403','jpg','file','260','142','1394766096','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('120','c0b14978c1c24fb467ee9bd1f457c43c','2','0','http://www.d.com/file/upload/201403/14/11-01-40-16-12.jpg','3933','jpg','file','100','100','1394766100','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('121','cfe3d3f7d20ce84baa5ceb90fad90d4e','2','0','http://www.d.com/file/upload/201403/14/11-01-47-98-12.jpg','9403','jpg','file','260','142','1394766107','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('122','f6c7248c06adf12d9c4fbb6622bc0d19','2','0','http://www.d.com/file/upload/201403/14/11-03-09-35-12.jpg','3933','jpg','file','100','100','1394766189','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('123','4172780d9817a0548eea4da305e311c9','2','0','http://www.d.com/file/upload/201403/14/11-03-15-48-12.jpg','3933','jpg','file','100','100','1394766195','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('124','50e6c8d5b4de788399ea58d48d3b62a1','2','0','http://www.d.com/file/upload/201403/14/11-04-02-18-12.jpg','3933','jpg','file','100','100','1394766242','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('125','e19c6fbcd5d122d2d098e57604f65bdc','2','0','http://www.d.com/file/upload/201403/14/11-05-15-97-12.jpg','3933','jpg','file','100','100','1394766315','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('126','5e721d2c482177e2d6c289c055f93445','2','0','http://www.d.com/file/upload/201403/14/11-05-49-91-12.jpg','9403','jpg','file','260','142','1394766349','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('127','0ffd9a948bb699bd17dad465f76e9265','2','0','http://www.d.com/file/upload/201403/14/11-05-54-24-12.png','310686','png','file','600','403','1394766354','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('128','76becdef79f025999c4915886a1eb444','2','0','http://www.d.com/file/upload/201403/14/11-08-36-72-12.docx','0','docx','file','0','0','1394766516','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('129','a2bfa387a37fa603e1de5bcbd79eb5ab','2','0','http://www.d.com/file/upload/201403/14/11-14-57-21-12.docx','11620','docx','file','0','0','1394766897','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('130','426ec3f56211b7da6da2378127c48888','2','0','http://www.d.com/file/upload/201403/14/12-38-19-99-12.jpg','479501','jpg','file','440','2227','1394771899','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('131','f6573e4d83a46e0c71e12de949385fa9','2','0','http://www.d.com/file/upload/201403/14/12-41-51-68-12.jpg.thumb.jpg','479501','jpg','album','440','2227','1394772111','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('132','ff5e1c7712a9f42ddcde4cb98134872a','2','0','http://www.d.com/file/upload/201403/14/12-50-20-78-12.docx','11620','docx','file','0','0','1394772620','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('133','32a13118ed6b92948829895c1bd7afa9','2','0','http://www.d.com/file/upload/201403/14/15-55-09-93-12.jpg.thumb.jpg','3933','jpg','album','100','100','1394783709','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('134','9e19b7041f5d5db2c68248bce42f459c','2','0','http://www.d.com/file/upload/201403/14/15-55-18-97-12.jpg.thumb.jpg','9403','jpg','album','260','142','1394783718','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('135','0f41e317c586e5be825fff8006d41cb2','2','0','http://www.d.com/file/upload/201403/14/15-55-23-84-12.png.thumb.png','14546','png','album','128','128','1394783723','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('136','81f2a1d77f08daee268fc00684b14134','2','0','http://www.d.com/file/upload/201403/14/17-25-01-96-12.docx','11620','docx','file','0','0','1394789101','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('137','9e8557f6eaad880832fe537a218bfea4','2','0','http://www.d.com/file/upload/201403/14/17-26-00-90-12.docx','11620','docx','file','0','0','1394789160','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('138','36f741e6743f97cf187bf4c71c38cce5','2','0','http://www.d.com/file/upload/201403/14/17-31-16-13-12.docx','11620','docx','file','0','0','1394789476','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('139','1fd257a5dfedfa65f9592c46501e9671','2','0','http://www.d.com/file/upload/201403/14/17-32-07-71-12.jpg','3933','jpg','file','100','100','1394789527','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('140','83c5a9faa3b7ee10fc0b6a4e59851b2c','2','0','http://www.d.com/file/upload/201403/14/18-03-23-96-12.docx','11620','docx','file','0','0','1394791403','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('141','bac294af618dc3a6ed8e4f2c06b8e5b0','2','0','http://www.d.com/file/upload/201403/15/16-07-24-98-12.jpg.thumb.jpg','479501','jpg','album','440','2227','1394870844','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('142','b0e47d8c6bbb7642ed66a9452d1b8c5c','2','0','http://www.d.com/file/upload/201403/17/11-38-48-47-12.jpg.thumb.jpg','9403','jpg','album','260','142','1395027528','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('143','10fdcec41971fbba688a1fbd0d19f09e','2','0','http://www.d.com/file/upload/201403/17/12-10-08-14-12.jpg.thumb.jpg','479501','jpg','album','440','2227','1395029408','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('144','d2f10f7747af34601453b66f20cdc7ec','2','0','http://www.d.com/file/upload/201403/17/13-02-52-37-12.jpg.thumb.jpg','479501','jpg','album','440','2227','1395032572','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('145','1a2b6dc22f0e24d4229ac0a384de0685','2','0','http://www.d.com/file/upload/201403/17/13-04-15-20-12.png.thumb.png','14031','png','album','406','86','1395032655','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('146','4afe72830de96f3fd1360c7559bab98b','2','0','http://www.d.com/file/upload/201403/17/13-04-27-64-12.png.thumb.png','310686','png','album','600','403','1395032667','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('147','419519316600cc9045ff314c86aed99f','2','0','http://www.d.com/file/upload/201403/18/15-40-52-39-12.docx','0','docx','file','0','0','1395128452','bing345','127.0.0.1');
INSERT INTO `d_upload_2` VALUES('148','14508a8647e463b48165c2deebc20aa9','2','0','http://www.d.com/file/upload/201403/18/15-46-25-91-12.docx','11603','docx','file','0','0','1395128785','bing345','127.0.0.1');

DROP TABLE IF EXISTS `d_upload_3`;
CREATE TABLE `d_upload_3` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(32) NOT NULL DEFAULT '',
  `moduleid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fileurl` varchar(255) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `fileext` varchar(10) NOT NULL DEFAULT '',
  `upfrom` varchar(10) NOT NULL DEFAULT '',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `item` (`item`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='上传记录3';

INSERT INTO `d_upload_3` VALUES('1','961b448585d60b0e11ba4885f802c41b','2','0','http://www.d.com/file/upload/201403/05/15-09-40-76-13.jpg','945055','jpg','thumb','1920','1400','1394003380','bingz','127.0.0.1');
INSERT INTO `d_upload_3` VALUES('2','2999dfdaa3d0a65937c5ae21708128cf','2','0','http://www.d.com/file/upload/201403/07/15-32-36-83-3.jpg.thumb.jpg','13752','jpg','album','287','287','1394177556','bingo','127.0.0.1');
INSERT INTO `d_upload_3` VALUES('3','e37fad2adf21559421485a6ba5937e5b','2','0','http://www.d.com/file/upload/201403/07/15-55-13-37-3.jpg.thumb.jpg','945055','jpg','album','800','583','1394178913','bingo','127.0.0.1');
INSERT INTO `d_upload_3` VALUES('4','bf4df420093421791c4406608c959bc3','2','0','http://www.d.com/file/upload/201403/10/09-03-53-29-13.gif.thumb.gif','1575','gif','album','270','129','1394413433','bingz','127.0.0.1');
INSERT INTO `d_upload_3` VALUES('5','7b51839c0afe8ba2cb392fc2e18861ae','2','0','http://www.d.com/file/upload/201403/17/14-09-34-45-13.jpg.thumb.jpg','3933','jpg','album','100','100','1395036574','bingz','127.0.0.1');
INSERT INTO `d_upload_3` VALUES('6','068d8a89e012355df4f24da9f1fe87d4','2','0','http://www.d.com/file/upload/201403/17/14-09-43-86-13.jpg.thumb.jpg','17921','jpg','album','287','287','1395036583','bingz','127.0.0.1');
INSERT INTO `d_upload_3` VALUES('7','588615174d67f9085be4f8e4c90afd07','2','0','http://www.d.com/file/upload/201403/17/14-09-51-93-13.png.thumb.png','310686','png','album','600','403','1395036591','bingz','127.0.0.1');
INSERT INTO `d_upload_3` VALUES('8','92ce91471f4f3233e5a60ff4cbbc977c','2','0','http://www.d.com/file/upload/201403/17/15-11-24-64-13.jpg.thumb.jpg','3933','jpg','album','100','100','1395040284','bingz','127.0.0.1');
INSERT INTO `d_upload_3` VALUES('9','38517adae349f2472ef4314e66437308','2','0','http://www.d.com/file/upload/201403/17/15-11-28-43-13.jpg.thumb.jpg','3933','jpg','album','100','100','1395040288','bingz','127.0.0.1');
INSERT INTO `d_upload_3` VALUES('10','f79c4507587b739705e6df61651ef11f','2','0','http://www.d.com/file/upload/201403/17/15-11-44-93-13.jpg.thumb.jpg','479501','jpg','album','440','2227','1395040304','bingz','127.0.0.1');

DROP TABLE IF EXISTS `d_upload_4`;
CREATE TABLE `d_upload_4` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(32) NOT NULL DEFAULT '',
  `moduleid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fileurl` varchar(255) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `fileext` varchar(10) NOT NULL DEFAULT '',
  `upfrom` varchar(10) NOT NULL DEFAULT '',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `item` (`item`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='上传记录4';


DROP TABLE IF EXISTS `d_upload_5`;
CREATE TABLE `d_upload_5` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(32) NOT NULL DEFAULT '',
  `moduleid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fileurl` varchar(255) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `fileext` varchar(10) NOT NULL DEFAULT '',
  `upfrom` varchar(10) NOT NULL DEFAULT '',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `item` (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='上传记录5';


DROP TABLE IF EXISTS `d_upload_6`;
CREATE TABLE `d_upload_6` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(32) NOT NULL DEFAULT '',
  `moduleid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fileurl` varchar(255) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `fileext` varchar(10) NOT NULL DEFAULT '',
  `upfrom` varchar(10) NOT NULL DEFAULT '',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `item` (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='上传记录6';


DROP TABLE IF EXISTS `d_upload_7`;
CREATE TABLE `d_upload_7` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(32) NOT NULL DEFAULT '',
  `moduleid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fileurl` varchar(255) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `fileext` varchar(10) NOT NULL DEFAULT '',
  `upfrom` varchar(10) NOT NULL DEFAULT '',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `item` (`item`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COMMENT='上传记录7';

INSERT INTO `d_upload_7` VALUES('1','7deda9b930748ce22517453764586e3d','2','7','http://www.d.com/file/upload/201403/05/13-34-55-21-7.png','7365','png','thumb','180','180','1393997695','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('2','81aeaad11a7cba509a285b9ad8a030ce','2','0','http://www.d.com/file/upload/201403/12/11-01-12-42-7.png.thumb.png','310686','png','album','600','403','1394593272','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('3','6927e5e01df2b537fffbc9b6be03aea5','2','0','http://www.d.com/file/upload/201403/12/11-01-20-11-7.png.thumb.png','14031','png','album','406','86','1394593280','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('4','59a3f317c59ea2d98b810ca8f8fb22e2','2','0','http://www.d.com/file/upload/201403/12/11-01-28-65-7.png.thumb.png','14031','png','album','406','86','1394593288','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('5','2c7dc04e34fbc240ac72a2c05000e7a3','2','0','http://www.d.com/file/upload/201403/13/11-06-28-56-7.jpg.thumb.jpg','3933','jpg','album','100','100','1394679988','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('6','4b28f00da407fbf93204af27009aae6d','2','0','http://www.d.com/file/upload/201403/13/11-07-26-74-7.png.thumb.png','14031','png','album','406','86','1394680046','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('7','ef75223bf81909c5022c861814083707','2','0','http://www.d.com/file/upload/201403/13/14-22-51-84-7.jpg.thumb.jpg','3933','jpg','album','100','100','1394691771','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('8','0486a4f5c685f93f0db058e50b8c407c','2','0','http://www.d.com/file/upload/201403/13/14-22-57-94-7.jpg.thumb.jpg','3933','jpg','album','100','100','1394691777','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('9','51ffaffb0f807cced3eb72b1e25ef681','2','0','http://www.d.com/file/upload/201403/13/14-23-07-25-7.jpg.thumb.jpg','3933','jpg','album','100','100','1394691787','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('10','2cc18d2f18c60c48a963f47064ca008d','2','0','http://www.d.com/file/upload/201403/13/14-23-11-83-7.jpg.thumb.jpg','17921','jpg','album','287','287','1394691791','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('11','70f2b81b9acaccb1d408070b66961184','2','0','http://www.d.com/file/upload/201403/13/14-23-15-52-7.png.thumb.png','14031','png','album','406','86','1394691795','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('12','834f63f795cc9286a75188eb75b8792b','2','0','http://www.d.com/file/upload/201403/13/14-23-18-23-7.jpg.thumb.jpg','3933','jpg','album','100','100','1394691798','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('13','1ac94194efa530bac87d50df1f0005a7','2','0','http://www.d.com/file/upload/201403/13/14-23-29-93-7.jpg.thumb.jpg','9403','jpg','album','260','142','1394691809','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('14','329a3549f484e002a79166afb9468267','2','0','http://www.d.com/file/upload/201403/13/14-23-35-40-7.png.thumb.png','310686','png','album','600','403','1394691815','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('15','da8c5d3ee06157f99cc3bbd707a4c3a2','2','0','http://www.d.com/file/upload/201403/13/14-23-42-78-7.jpg.thumb.jpg','9403','jpg','album','260','142','1394691822','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('16','f92d7fa96a09f367802eb246affd320a','2','0','http://www.d.com/file/upload/201403/13/14-23-48-21-7.png.thumb.png','310686','png','album','600','403','1394691828','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('17','9b59dce37cb78bcda92aa7ad78467af3','2','0','http://www.d.com/file/upload/201403/13/14-31-40-67-7.jpg.thumb.jpg','3933','jpg','album','100','100','1394692300','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('18','04c78fda5d7a1396b7faa7480f2d5f16','2','0','http://www.d.com/file/upload/201403/13/14-31-44-37-7.jpg.thumb.jpg','9403','jpg','album','260','142','1394692304','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('19','3ea5cd09cccfe91efbc95682ac5e4368','2','0','http://www.d.com/file/upload/201403/13/14-31-47-45-7.jpg.thumb.jpg','17921','jpg','album','287','287','1394692307','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('20','94fe72a42bff8dbc76e771aaa86c8d82','2','0','http://www.d.com/file/upload/201403/13/14-31-50-79-7.jpg.thumb.jpg','3933','jpg','album','100','100','1394692310','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('21','a52542a1a685adc6bfdda128b021ba23','2','0','http://www.d.com/file/upload/201403/13/17-57-05-37-7.jpg.thumb.jpg','3933','jpg','album','100','100','1394704625','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('22','0ed06444dff439f322eb0190c93da613','2','0','http://www.d.com/file/upload/201403/13/18-01-50-22-7.jpg.thumb.jpg','3933','jpg','album','100','100','1394704910','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('23','498e4a8f4e22df58736ab8f459f1cf65','2','0','http://www.d.com/file/upload/201403/13/18-01-57-16-7.jpg.thumb.jpg','17921','jpg','album','287','287','1394704917','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('24','f674bba40072bbff993361603ca197d1','2','0','http://www.d.com/file/upload/201403/13/18-02-01-93-7.jpg.thumb.jpg','17921','jpg','album','287','287','1394704921','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('25','95f06ca51c061e7b32362ab633549360','2','0','http://www.d.com/file/upload/201403/13/18-02-04-10-7.jpg.thumb.jpg','3933','jpg','album','100','100','1394704924','sasasa','127.0.0.1');
INSERT INTO `d_upload_7` VALUES('26','1632950ffdf91f195c0203aa0d156315','2','0','http://www.d.com/file/upload/201403/13/18-02-09-31-7.jpg.thumb.jpg','3933','jpg','album','100','100','1394704929','sasasa','127.0.0.1');

DROP TABLE IF EXISTS `d_upload_8`;
CREATE TABLE `d_upload_8` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(32) NOT NULL DEFAULT '',
  `moduleid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fileurl` varchar(255) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `fileext` varchar(10) NOT NULL DEFAULT '',
  `upfrom` varchar(10) NOT NULL DEFAULT '',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `item` (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='上传记录8';


DROP TABLE IF EXISTS `d_upload_9`;
CREATE TABLE `d_upload_9` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(32) NOT NULL DEFAULT '',
  `moduleid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fileurl` varchar(255) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `fileext` varchar(10) NOT NULL DEFAULT '',
  `upfrom` varchar(10) NOT NULL DEFAULT '',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `item` (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='上传记录9';


DROP TABLE IF EXISTS `d_validate`;
CREATE TABLE `d_validate` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(30) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `thumb1` varchar(255) NOT NULL DEFAULT '',
  `thumb2` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='资料认证';

INSERT INTO `d_validate` VALUES('1','叫我设计师','company','http://www.d.com/file/upload/201403/05/14-21-53-74-12.png','','','bing345','1394000515','admin','1394000590','127.0.0.1','3');
INSERT INTO `d_validate` VALUES('2','撒撒撒','company','http://www.d.com/file/upload/201403/05/15-09-40-76-13.jpg','','','bingz','1394003381','admin','1394003408','127.0.0.1','3');

DROP TABLE IF EXISTS `d_video_14`;
CREATE TABLE `d_video_14` (
  `itemid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `fee` float NOT NULL DEFAULT '0',
  `tag` varchar(255) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `pptword` varchar(255) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `video` varchar(255) NOT NULL DEFAULT '',
  `mobile` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `width` smallint(4) unsigned NOT NULL DEFAULT '0',
  `height` smallint(4) unsigned NOT NULL DEFAULT '0',
  `player` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`),
  KEY `username` (`username`),
  KEY `addtime` (`addtime`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='视频';


DROP TABLE IF EXISTS `d_video_data_14`;
CREATE TABLE `d_video_data_14` (
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='视频内容';


DROP TABLE IF EXISTS `d_vote`;
CREATE TABLE `d_vote` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` int(10) unsigned NOT NULL DEFAULT '0',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `choose` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `vote_min` smallint(2) unsigned NOT NULL DEFAULT '0',
  `vote_max` smallint(2) unsigned NOT NULL DEFAULT '0',
  `votes` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `fromtime` int(10) unsigned NOT NULL DEFAULT '0',
  `totime` int(10) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `linkto` varchar(255) NOT NULL DEFAULT '',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `template_vote` varchar(30) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '',
  `s1` varchar(255) NOT NULL DEFAULT '',
  `s2` varchar(255) NOT NULL DEFAULT '',
  `s3` varchar(255) NOT NULL DEFAULT '',
  `s4` varchar(255) NOT NULL DEFAULT '',
  `s5` varchar(255) NOT NULL DEFAULT '',
  `s6` varchar(255) NOT NULL DEFAULT '',
  `s7` varchar(255) NOT NULL DEFAULT '',
  `s8` varchar(255) NOT NULL DEFAULT '',
  `s9` varchar(255) NOT NULL DEFAULT '',
  `s10` varchar(255) NOT NULL DEFAULT '',
  `v1` int(10) unsigned NOT NULL DEFAULT '0',
  `v2` int(10) unsigned NOT NULL DEFAULT '0',
  `v3` int(10) unsigned NOT NULL DEFAULT '0',
  `v4` int(10) unsigned NOT NULL DEFAULT '0',
  `v5` int(10) unsigned NOT NULL DEFAULT '0',
  `v6` int(10) unsigned NOT NULL DEFAULT '0',
  `v7` int(10) unsigned NOT NULL DEFAULT '0',
  `v8` int(10) unsigned NOT NULL DEFAULT '0',
  `v9` int(10) unsigned NOT NULL DEFAULT '0',
  `v10` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='投票';


DROP TABLE IF EXISTS `d_vote_record`;
CREATE TABLE `d_vote_record` (
  `rid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `itemid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `votetime` int(10) unsigned NOT NULL DEFAULT '0',
  `votes` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `itemid` (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='投票记录';


DROP TABLE IF EXISTS `d_webpage`;
CREATE TABLE `d_webpage` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(30) NOT NULL DEFAULT '',
  `areaid` int(10) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `style` varchar(50) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `seo_title` varchar(255) NOT NULL DEFAULT '',
  `seo_keywords` varchar(255) NOT NULL DEFAULT '',
  `seo_description` varchar(255) NOT NULL DEFAULT '',
  `editor` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(4) NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `domain` varchar(255) NOT NULL DEFAULT '',
  `template` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='单网页';

INSERT INTO `d_webpage` VALUES('1','1','0','0','关于我们','','关于我们','','','','destoon','1319006891','5','5','0','about/index.html','','');
INSERT INTO `d_webpage` VALUES('3','1','0','0','联系方式','','联系方式','','','','destoon','1310696453','4','3','0','about/contact.html','','');
INSERT INTO `d_webpage` VALUES('4','1','0','0','使用协议','','使用协议','','','','destoon','1310696460','3','1','0','about/agreement.html','','');
INSERT INTO `d_webpage` VALUES('5','1','0','0','版权隐私','','版权隐私','','','','destoon','1310696468','2','1','0','about/copyright.html','','');

