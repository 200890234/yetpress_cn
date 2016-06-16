<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `cn_enewsclass`;");
E_C("CREATE TABLE `cn_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8");
E_D("replace into `cn_enewsclass` values('1','0','网络编程','|10|11|12|13|14|','0','15','10','10','0','9','','0','web_dev','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','网络编程','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','3','0','0','','0','0','0','','0','0','0','0','1424245787');");
E_D("replace into `cn_enewsclass` values('2','0','网络赚钱','|15|16|17|','0','15','10','10','0','9','','0','marketer','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','网络赚钱','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424246138');");
E_D("replace into `cn_enewsclass` values('3','0','绝密资料','|18|19|','0','15','10','10','0','9','','0','secret_stuff','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','绝密资料','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424246249');");
E_D("replace into `cn_enewsclass` values('4','0','英语学习','|20|21|53|','0','15','10','10','0','9','','0','english','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','英语学习','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424246270');");
E_D("replace into `cn_enewsclass` values('5','0','生活娱乐','|22|23|24|40|','0','15','10','10','0','9','','0','life','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','生活娱乐','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424246319');");
E_D("replace into `cn_enewsclass` values('6','0','工具/软件','|25|26|27|','0','15','10','10','0','9','','0','tools','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','工具/软件','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424246347');");
E_D("replace into `cn_enewsclass` values('7','0','关于我们','|28|29|30|36|','0','25','10','0','0','9','','0','about','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','关于我们','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424246438');");
E_D("replace into `cn_enewsclass` values('8','0','精品推荐','|44|','0','25','10','0','0','6','','0','affiliate','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','精品推荐','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','6','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424246498');");
E_D("replace into `cn_enewsclass` values('9','0','查看更多','|31|','0','15','10','10','0','9','','0','additional','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','更多','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424246562');");
E_D("replace into `cn_enewsclass` values('10','1','php&amp;cms','','0','15','10','10','0','9','|1|','1','web_dev/php','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','php&cms','0','0','1','news','0','0','2','2','id DESC','newstime DESC','php技术和开源cms使用','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','3','0','0','','0','0','0','','0','0','21','21','1424246716');");
E_D("replace into `cn_enewsclass` values('11','1','html&amp;js','','0','15','10','10','0','9','|1|','1','web_dev/html_js','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','html&amp;js','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','3','0','0','','0','0','0','','0','0','8','8','1424246750');");
E_D("replace into `cn_enewsclass` values('12','1','服务器','','0','15','10','10','0','9','|1|','1','web_dev/server','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','服务器','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','3','0','0','','0','0','0','','0','0','4','4','1424246771');");
E_D("replace into `cn_enewsclass` values('13','1','Android','','0','15','10','10','0','9','|1|','1','web_dev/android','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','Android','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','3','0','0','','0','0','0','','0','0','0','0','1424246800');");
E_D("replace into `cn_enewsclass` values('14','1','资源/技巧','','0','15','10','10','0','9','|1|','1','web_dev/tips','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','资源/技巧','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','3','0','0','','0','0','0','','0','0','2','2','1424246829');");
E_D("replace into `cn_enewsclass` values('15','2','本站精品','','0','15','10','10','0','9','|2|','1','marketer/yetpress','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','本站精品','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','9','3','1424246900');");
E_D("replace into `cn_enewsclass` values('16','2','活动资讯','','0','15','10','10','0','9','|2|','1','marketer/information','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','活动资讯','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424246952');");
E_D("replace into `cn_enewsclass` values('17','2','项目分享','','0','15','10','10','0','9','|2|','1','marketer/projects','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','项目分享','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424246980');");
E_D("replace into `cn_enewsclass` values('18','3','资料列表','','0','15','10','10','0','13','|3|','1','secret_stuff/resource_list','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','资料列表','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','12','12','1424247014');");
E_D("replace into `cn_enewsclass` values('19','3','免费分享','','0','15','10','10','0','9','|3|','1','secret_stuff/free_samples','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','免费分享','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','10','10','1424247045');");
E_D("replace into `cn_enewsclass` values('20','4','精品资料','','0','15','10','10','0','9','|4|','1','english/materials','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','精品资料','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','17','17','1424247088');");
E_D("replace into `cn_enewsclass` values('21','4','学习笔记','','0','15','10','10','0','9','|4|','1','english/learning_notes','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','学习笔记','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','6','6','1424247146');");
E_D("replace into `cn_enewsclass` values('22','5','生活诀窍','','0','15','10','10','0','9','|5|','1','life/life_tips','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','生活诀窍','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424247180');");
E_D("replace into `cn_enewsclass` values('23','5','创意恶搞','','0','25','10','10','0','11','|5|','1','life/ideas','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','创意恶搞','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','4','4','1424247203');");
E_D("replace into `cn_enewsclass` values('24','5','社会实验','','0','25','10','10','0','11','|5|','1','life/social_experience','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','社会实验','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424247262');");
E_D("replace into `cn_enewsclass` values('25','6','网络/营销','','0','15','10','10','0','9','|6|','1','tools/programme_tools','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','网络/营销','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424247308');");
E_D("replace into `cn_enewsclass` values('26','6','生活/娱乐','','0','15','10','10','0','9','|6|','1','tools/creation_tools','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','生活/娱乐','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424247354');");
E_D("replace into `cn_enewsclass` values('27','6','破解收费','','0','15','10','10','0','9','|6|','1','tools/cracks','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','破解收费','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424247405');");
E_D("replace into `cn_enewsclass` values('28','7','服务与案例','','0','1000','10','10','0','10','|7|','1','about/our_service','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','服务与案例','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','10','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424247486');");
E_D("replace into `cn_enewsclass` values('29','7','本站活动','','0','15','10','10','0','9','|7|','1','about/our_activities','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','本站活动','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424247510');");
E_D("replace into `cn_enewsclass` values('30','7','常见问答','','0','15','10','10','0','9','|7|','1','about/faq','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','常见问答','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424247539');");
E_D("replace into `cn_enewsclass` values('31','9','灰色社会','','0','15','10','10','0','9','|9|','1','additional/social_negtive','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','灰色社会','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1424247604');");
E_D("replace into `cn_enewsclass` values('32','0','辅助栏目','|','0','15','10','10','0','9','','0','subsidiary','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','辅助栏目','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1425005629');");
E_D("replace into `cn_enewsclass` values('33','0','mervyn的案例','','0','15','10','10','0','11','','1','projects','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','mervyn的案例','1','0','1','news','0','0','2','2','id DESC','newstime DESC','mervyn的案例','','1','0','0','1','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','11','11','1425361437');");
E_D("replace into `cn_enewsclass` values('34','0','mervyn私密区','','0','15','10','10','0','9','','1','sec','.php','Y-m-d','0','.php','0','0','10','10','10','','0','0','','10','1','1','10','mervyn私密区','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0',',5,','0','0','1','','0','0','8','8','1426053782');");
E_D("replace into `cn_enewsclass` values('35','0','测试文章发布区','','0','15','10','10','0','9','','1','test_column','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','测试文章发布区','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','3','3','1426829005');");
E_D("replace into `cn_enewsclass` values('36','7','公告信息','','0','15','10','10','0','9','|7|','1','about/notice','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','公告信息','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','3','2','1427183444');");
E_D("replace into `cn_enewsclass` values('37','0','会员服务区','|38|39|41|42|43|45|','0','25','10','0','0','9','','0','user_service','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','会员服务区','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1427183669');");
E_D("replace into `cn_enewsclass` values('38','37','普通会员区','','0','15','10','10','0','9','|37|','1','user_service/general','.php','Y-m-d','0','.php','0','0','10','10','10','','0','0','','10','1','1','10','普通会员区','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0',',1,3,2,4,5,','0','0','1','','0','0','0','0','1427183821');");
E_D("replace into `cn_enewsclass` values('39','37','vip会员区','','0','15','10','10','0','9','|37|','1','user_service/vip','.php','Y-m-d','0','.php','0','0','10','10','10','','0','0','','10','1','1','10','vip会员区','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0',',2,5,','0','0','1','','0','0','0','0','1427184691');");
E_D("replace into `cn_enewsclass` values('40','5','大型福利','','0','25','10','10','0','11','|5|','1','life/sexy_stuff','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','大型福利','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1427207004');");
E_D("replace into `cn_enewsclass` values('41','37','高级vip会员区','','0','15','10','10','0','9','|37|','1','user_service/vip2','.php','Y-m-d','0','.php','0','0','10','10','10','','0','0','','10','1','1','10','高级vip会员区','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0',',6,5,','0','0','1','','0','0','0','0','1427299350');");
E_D("replace into `cn_enewsclass` values('42','37','个性化vip会员区','','0','15','10','10','0','9','|37|','1','user_service/vip3','.php','Y-m-d','0','.php','0','0','10','10','10','','0','0','','10','1','1','10','个性化vip会员区','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0',',7,5,','0','0','1','','0','0','0','0','1427299391');");
E_D("replace into `cn_enewsclass` values('43','37','私密vip会员区','','0','15','10','10','0','9','|37|','1','user_service/sec_vip1','.php','Y-m-d','0','.php','0','0','10','10','10','','0','0','','10','1','1','10','私密vip会员区','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0',',8,5,','0','0','1','','0','0','0','0','1427299458');");
E_D("replace into `cn_enewsclass` values('44','8','yetpress商城','','0','15','10','7','0','6','|8|','1','affiliate/mall','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','6','1','10','yetpress商城','0','0','6','shop','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','6','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1427892324');");
E_D("replace into `cn_enewsclass` values('45','37','发起合购','','0','13','10','10','0','14','|37|','1','user_service/union_buy','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','发起合购','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','1','0','2','0','1',',1,2,6,7,8,5,','0','0','0','','14','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','5','1','1428544196');");
E_D("replace into `cn_enewsclass` values('46','0','个人资源','','0','25','10','10','0','9','','1','personal','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','个人资源','1','0','1','news','0','0','2','2','id DESC','newstime DESC','mervyn的个人资源','','1','0','0','1','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1429191290');");
E_D("replace into `cn_enewsclass` values('47','0','手机站点','|49|50|51|52|','0','15','10','10','0','9','','0','wap','.html','Y-m-d','0','.html','0','0','10','10','10','http://m.yetpress.com','0','0','','10','1','1','10','手机站点','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','4','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1437990219');");
E_D("replace into `cn_enewsclass` values('48','47','绝密资料','|49|50|','0','15','10','10','0','15','|47|','0','wap/secret_stuff','.html','Y-m-d','0','.html','0','0','10','10','10','http://m.yetpress.com/secret_stuff','0','0','','10','1','1','10','绝密资料','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','15','1','0','0','0','0','','1','0','0','0','','0','3','0','0','','0','0','0','','0','0','0','0','1438506283');");
E_D("replace into `cn_enewsclass` values('49','48','资料列表','','0','15','10','12','0','15','|47|48|','1','wap/secret_stuff/resource_list','.html','Y-m-d','0','.html','0','0','10','10','10','http://m.yetpress.com/secret_stuff/resource_list','0','0','','10','1','1','10','资料列表','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','15','1','0','0','0','0','','1','0','0','0','','0','3','0','0','','0','0','0','','0','0','0','0','1438506363');");
E_D("replace into `cn_enewsclass` values('50','48','免费分享','','0','15','10','12','0','15','|47|48|','1','wap/secret_stuff/free_samples','.html','Y-m-d','0','.html','0','0','10','10','10','http://m.yetpress.com/secret_stuff/free_samples','0','0','','10','1','1','10','免费分享','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','15','1','0','0','0','0','','1','0','0','0','','0','3','0','0','','0','0','0','','0','0','1','1','1438506411');");
E_D("replace into `cn_enewsclass` values('51','47','站点公告','','0','15','10','12','0','15','|47|','1','wap/notice','.html','Y-m-d','0','.html','0','0','10','10','10','http://m.yetpress.com/notice','0','0','','10','1','1','10','站点公告','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','15','1','0','0','0','0','','1','0','0','0','','0','3','0','0','','0','0','0','','0','0','1','1','1438507444');");
E_D("replace into `cn_enewsclass` values('52','47','产品展示','','0','25','10','13','0','17','|47|','1','wap/product','.html','Y-m-d','0','.html','0','1','10','10','10','http://m.yetpress.com/product','0','0','','10','1','1','10','产品展示','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','17','1','0','0','0','0','','1','0','0','0','','0','3','0','0','','0','0','0','','0','0','1','1','1438507554');");
E_D("replace into `cn_enewsclass` values('53','4','Entertainment','','0','15','10','10','0','9','|4|','1','english/entertainment','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','entertainment','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1441097728');");

@include("../../inc/footer.php");
?>