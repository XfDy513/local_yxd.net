DROP TABLE IF EXISTS `cmseasy_a_attachment`;--
CREATE TABLE `cmseasy_a_attachment` (
  `id` int(11) NOT NULL auto_increment,
  `aid` int(11) default NULL,
  `path` varchar(150) NOT NULL,
  `thumb` varchar(100) default NULL,
  `intro` varchar(100) default NULL,
  `adddate` datetime default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` USING BTREE (`id`),
  KEY `aid` USING BTREE (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_a_comment`;--
CREATE TABLE `cmseasy_a_comment` (
  `id` int(11) NOT NULL auto_increment,
  `aid` int(11) NOT NULL,
  `content` text NOT NULL,
  `userid` int(11) default NULL,
  `username` varchar(50) default NULL,
  `adddate` datetime default NULL,
  `ip` varchar(20) default NULL,
  `state` tinyint(2) default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` USING BTREE (`id`),
  KEY `aid` USING BTREE (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_a_rank`;--
CREATE TABLE `cmseasy_a_rank` (
  `id` int(11) NOT NULL auto_increment,
  `aid` int(11) default NULL,
  `catid` int(11) default NULL,
  `typeid` int(11) default NULL,
  `ranks` text,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` USING BTREE (`id`),
  UNIQUE KEY `aid` USING BTREE (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_a_vote`;--
CREATE TABLE `cmseasy_a_vote` (
  `id` int(11) NOT NULL auto_increment,
  `aid` int(11) default NULL,
  `titles` text,
  `votes` text,
  `users` text,
  `images` text,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` USING BTREE (`id`),
  UNIQUE KEY `aid` USING BTREE (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_activity`;--
CREATE TABLE `cmseasy_activity` (
  `id` int(255) NOT NULL auto_increment,
  `timestamp` int(255) default NULL,
  `operatorid` varchar(255) NOT NULL default '',
  `departmentid` int(10) NOT NULL default '0',
  `status` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_announcement`;--
CREATE TABLE `cmseasy_announcement` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) default NULL,
  `content` mediumtext NOT NULL,
  `adddate` datetime default NULL,
  `state` tinyint(2) default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` USING BTREE (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_archive`;--
CREATE TABLE `cmseasy_archive` (
  `aid` int(11) NOT NULL auto_increment,
  `catid` int(6) NOT NULL,
  `typeid` int(6) NOT NULL,
  `title` varchar(60) NOT NULL,
  `tag` varchar(255) default NULL,
  `username` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `view` int(11) NOT NULL default '0',
  `color` char(20) default NULL,
  `strong` tinyint(1) default '0',
  `toppost` tinyint(1) default '0',
  `font` char(6) default NULL,
  `spid` int(11) default NULL,
  `ip` varchar(20) default NULL,
  `mtitle` varchar(255) default NULL,
  `keyword` varchar(255) default NULL,
  `description` text,
  `listorder` int(11) default NULL,
  `adddate` datetime default NULL,
  `author` varchar(20) default NULL,
  `image` varchar(255) default NULL,
  `thumb` varchar(255) default NULL,
  `state` tinyint(2) default '1',
  `checked` tinyint(2) default '0',
  `introduce` text,
  `introduce_len` int(5) NOT NULL,
  `content` mediumtext,
  `template` varchar(50) default NULL,
  `templatewap` varchar(50) default NULL,
  `showform` varchar(50) default NULL,
  `htmlrule` varchar(100) default NULL,
  `ishtml` tinyint(2) default '0',
  `iswaphtml` tinyint(2) default '0',
  `linkto` varchar(100) default NULL,
  `attr1` varchar(20) default NULL,
  `attr2` varchar(20) default NULL,
  `attr3` varchar(20) default NULL,
  `comment_num` int(11) default '0',
  `attachment_id` varchar(50) default NULL,
  `attachment_path` varchar(150) default NULL,
  `grade` tinyint(1) unsigned NOT NULL default '0',
  `pics` text,
  `type` char(10) NOT NULL,
  `province_id` int(3) NOT NULL,
  `city_id` int(3) default NULL,
  `section_id` int(3) default NULL,
  `outtime` date NOT NULL,
  `my_size` varchar(100) default NULL,
  `my_zhaopinbumen` varchar(100) default NULL,
  `my_jobtype` varchar(10) default NULL,
  `my_jobtitle` varchar(100) default NULL,
  `my_jobnumber` varchar(100) default NULL,
  `my_jobgender` varchar(10) default NULL,
  `my_jobwork` text,
  `my_jobacademic` varchar(10) default NULL,
  `my_jobage` varchar(100) default NULL,
  `my_jobworkareas` varchar(100) default NULL,
  `my_jobrequirements` text,
  `my_contactname` varchar(100) default NULL,
  `isecoding` tinyint(1) unsigned default '0',
  `ecoding` varchar(255) default NULL,
  `my_tonghangbijiao` varchar(100) default NULL,
  PRIMARY KEY  (`aid`),
  UNIQUE KEY `aid` USING BTREE (`aid`),
  KEY `keyword` USING BTREE (`keyword`),
  KEY `title` USING BTREE (`title`),
  KEY `type` USING BTREE (`type`),
  KEY `catid` USING BTREE (`typeid`),
  KEY `typeid` USING BTREE (`catid`),
  KEY `tag` USING BTREE (`tag`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_assigns`;--
CREATE TABLE `cmseasy_assigns` (
  `id` int(255) NOT NULL auto_increment,
  `departmentid` int(255) NOT NULL default '0',
  `operatorid` int(255) NOT NULL default '0',
  `poll` int(255) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_b_arctag`;--
CREATE TABLE `cmseasy_b_arctag` (
  `id` int(11) NOT NULL auto_increment,
  `aid` int(11) default '0',
  `tagid` int(11) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `arctag` USING BTREE (`aid`,`tagid`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=791 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_b_area`;--
CREATE TABLE `cmseasy_b_area` (
  `id` int(6) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `parentid` int(6) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` USING BTREE (`id`),
  KEY `name` USING BTREE (`name`),
  KEY `parentid` USING BTREE (`parentid`)
) ENGINE=MyISAM AUTO_INCREMENT=3373 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_b_category`;--
CREATE TABLE `cmseasy_b_category` (
  `catid` int(6) NOT NULL auto_increment,
  `parentid` int(6) NOT NULL,
  `catname` varchar(30) NOT NULL,
  `scategory` varchar(50) default NULL,
  `listorder` int(11) default NULL,
  `image` varchar(150) default NULL,
  `meta_title` varchar(255) default NULL,
  `keyword` varchar(150) default NULL,
  `description` text,
  `categorycontent` mediumtext,
  `htmldir` varchar(50) NOT NULL,
  `template` varchar(50) default NULL,
  `listtemplate` varchar(50) default NULL,
  `showtemplate` varchar(50) default NULL,
  `showform` varchar(50) default NULL,
  `templatewap` varchar(50) default NULL,
  `listtemplatewap` varchar(50) default NULL,
  `showtemplatewap` varchar(50) default NULL,
  `htmlrule` varchar(100) default NULL,
  `listhtmlrule` varchar(100) default NULL,
  `showhtmlrule` varchar(100) default NULL,
  `module` varchar(16) NOT NULL default 'article',
  `isshow` tinyint(2) default '1',
  `ishtml` tinyint(2) default '0',
  `iswaphtml` tinyint(2) default '0',
  `ispages` tinyint(2) default NULL,
  `includecatarchives` tinyint(2) default '0',
  `addarcenable` tinyint(2) default NULL,
  `linkto` varchar(150) default NULL,
  `attr1` varchar(20) default NULL,
  `attr2` varchar(20) default NULL,
  `attr3` varchar(20) default NULL,
  `thumb` varchar(100) default NULL,
  `thumb_width` int(3) default NULL,
  `thumb_height` int(3) default NULL,
  `isnav` tinyint(1) default NULL,
  `ismobilenav` tinyint(1) unsigned NOT NULL default '1',
  `isecoding` tinyint(1) unsigned default '0',
  `ecoding` varchar(255) default NULL,
  PRIMARY KEY  (`catid`),
  UNIQUE KEY `category` USING BTREE (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_b_special`;--
CREATE TABLE `cmseasy_b_special` (
  `spid` smallint(5) unsigned NOT NULL auto_increment,
  `title` varchar(80) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `template` varchar(30) NOT NULL,
  `adddate` int(10) unsigned NOT NULL default '0',
  `listorder` smallint(5) unsigned NOT NULL default '0',
  `disabled` tinyint(1) unsigned NOT NULL default '0',
  `order` int(6) default NULL,
  `ishtml` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`spid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_b_tag`;--
CREATE TABLE `cmseasy_b_tag` (
  `tagid` int(11) NOT NULL auto_increment,
  `tagname` varchar(30) default NULL,
  PRIMARY KEY  (`tagid`),
  UNIQUE KEY `tagid` USING BTREE (`tagid`),
  UNIQUE KEY `tagname` USING BTREE (`tagname`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_ballot`;--
CREATE TABLE `cmseasy_ballot` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `type` set('radio','checkbox') NOT NULL default 'radio',
  `num` int(11) unsigned NOT NULL default '0',
  `order` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_bbs_archive`;--
CREATE TABLE `cmseasy_bbs_archive` (
  `aid` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL default '0',
  `lid` int(10) NOT NULL,
  `pid` int(10) NOT NULL default '0',
  `userid` int(11) NOT NULL default '0',
  `username` varchar(30) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `replynum` smallint(6) NOT NULL default '0',
  `replyid` int(11) NOT NULL default '0',
  `click` int(11) NOT NULL default '0',
  `addtime` int(11) NOT NULL default '0',
  `updatetime` int(11) NOT NULL default '0',
  `isstop` tinyint(1) NOT NULL default '0',
  `recommend` tinyint(1) NOT NULL default '0',
  `purview` tinyint(1) NOT NULL default '0',
  `noreply` tinyint(1) NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '0',
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_bbs_category`;--
CREATE TABLE `cmseasy_bbs_category` (
  `cid` int(11) unsigned NOT NULL auto_increment,
  `pid` int(11) NOT NULL default '0',
  `listorder` int(4) NOT NULL,
  `typename` varchar(200) NOT NULL,
  `content` varchar(255) NOT NULL default '这里是专题简介',
  `keyword` varchar(255) NOT NULL default '这里是专题关键字',
  `purview` tinyint(1) NOT NULL default '0',
  `addtime` int(11) NOT NULL default '0',
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_bbs_label`;--
CREATE TABLE `cmseasy_bbs_label` (
  `lid` int(11) unsigned NOT NULL auto_increment,
  `pid` int(11) NOT NULL default '0',
  `labelname` varchar(80) NOT NULL,
  PRIMARY KEY  (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_bbs_reply`;--
CREATE TABLE `cmseasy_bbs_reply` (
  `id` int(10) NOT NULL auto_increment COMMENT '主键',
  `aid` int(10) NOT NULL,
  `pid` int(10) NOT NULL default '0' COMMENT '帖子id',
  `tid` smallint(3) NOT NULL COMMENT '回复的子回复，与id对应，当为第一条时，其值为0',
  `username` varchar(30) NOT NULL,
  `userid` int(10) NOT NULL default '0',
  `content` text NOT NULL,
  `addtime` int(11) NOT NULL default '0',
  `updatetime` int(11) NOT NULL default '0',
  `istop` tinyint(1) NOT NULL default '0',
  `ip` char(15) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_chat`;--
CREATE TABLE `cmseasy_chat` (
  `id` int(255) unsigned NOT NULL auto_increment,
  `sessionid` int(10) NOT NULL default '0',
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(200) default NULL,
  `timestamp` int(10) NOT NULL default '0',
  `ip` varchar(20) NOT NULL,
  `departmentid` int(10) default NULL,
  `operatorid` int(10) default NULL,
  `status` tinyint(1) NOT NULL default '0',
  `admin_status` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_departments`;--
CREATE TABLE `cmseasy_departments` (
  `id` int(255) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `visible` int(1) NOT NULL default '1',
  `order` int(255) NOT NULL default '1',
  `email` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_detail`;--
CREATE TABLE `cmseasy_detail` (
  `id` int(255) NOT NULL auto_increment,
  `chatid` int(255) NOT NULL default '0',
  `detail` text NOT NULL,
  `who_witter` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_event`;--
CREATE TABLE `cmseasy_event` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `username` varchar(50) default NULL,
  `ip` varchar(20) default NULL,
  `addtime` int(11) default NULL,
  `event` varchar(30) default NULL,
  `note` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` USING BTREE (`id`),
  KEY `user` USING BTREE (`uid`,`username`,`ip`),
  KEY `time` USING BTREE (`addtime`)
) ENGINE=MyISAM AUTO_INCREMENT=1593 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_friendlink`;--
CREATE TABLE `cmseasy_friendlink` (
  `id` int(11) NOT NULL auto_increment,
  `linktype` tinyint(2) default NULL,
  `typeid` tinyint(2) default NULL,
  `name` varchar(60) NOT NULL,
  `listorder` int(11) default NULL,
  `url` varchar(255) NOT NULL,
  `logo` varchar(255) default NULL,
  `introduce` text,
  `uid` int(11) default NULL,
  `username` varchar(60) default NULL,
  `adddate` datetime default NULL,
  `hits` int(11) default NULL,
  `state` tinyint(2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_guestbook`;--
CREATE TABLE `cmseasy_guestbook` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `adddate` datetime NOT NULL,
  `state` tinyint(2) default '1',
  `guesttel` varchar(50) NOT NULL,
  `guestemail` varchar(50) NOT NULL,
  `guestqq` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `reply` text,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` USING BTREE (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_invite`;--
CREATE TABLE `cmseasy_invite` (
  `inviteid` int(11) unsigned NOT NULL auto_increment,
  `invitecode` varchar(255) default NULL,
  `ctuid` int(11) unsigned default NULL,
  `ctname` varchar(255) default NULL,
  `reguid` int(11) default NULL,
  `cttime` datetime default NULL,
  `regtime` datetime default NULL,
  `isuse` tinyint(1) unsigned default '0',
  PRIMARY KEY  (`inviteid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_linkword`;--
CREATE TABLE `cmseasy_linkword` (
  `id` int(11) NOT NULL auto_increment,
  `linkword` varchar(255) NOT NULL,
  `linkurl` varchar(255) default NULL,
  `linkorder` int(11) default NULL,
  `linktimes` int(3) default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` USING BTREE (`id`),
  UNIQUE KEY `word` USING BTREE (`linkword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--

DROP TABLE IF EXISTS `cmseasy_my_yingpin`;--
CREATE TABLE `cmseasy_my_yingpin` (
  `fid` int(11) NOT NULL auto_increment,
  `aid` int(11) default NULL,
  `username` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `adddate` datetime default NULL,
  `view` int(11) default '0',
  `state` tinyint(2) default '1',
  `checked` tinyint(2) default '0',
  `ip` varchar(20) default NULL,
  `my_xingming` varchar(100) default NULL,
  `my_xingbie` varchar(10) default NULL,
  `my_nianliang` varchar(100) default NULL,
  `my_minzu` varchar(100) default NULL,
  `my_shengao` varchar(100) default NULL,
  `my_shenfenzheng` varchar(100) default NULL,
  `my_jiguan` varchar(100) default NULL,
  `my_xueli` varchar(10) default NULL,
  `my_zanzhudizhi` varchar(100) default NULL,
  `my_zhuanye` varchar(100) default NULL,
  `my_biyeshijian` datetime default NULL,
  `my_biyeyuanxiao` varchar(100) default NULL,
  `my_waiyujibie` varchar(10) default NULL,
  `my_jisuanji` varchar(10) default NULL,
  `my_zhuanyetechang` varchar(100) default NULL,
  `my_zhicheng` varchar(100) default NULL,
  `my_daiyu` text,
  `my_lianxidianhua` varchar(100) default NULL,
  `my_shouji` varchar(100) default NULL,
  `my_email` varchar(100) default NULL,
  `my_xuexijingli` text,
  `my_gongzuojingli` text,
  `my_gerenjianli` text,
  PRIMARY KEY  (`fid`),
  UNIQUE KEY `fid` (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;--

DROP TABLE IF EXISTS `cmseasy_operators`;--
CREATE TABLE `cmseasy_operators` (
  `id` int(255) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL default '',
  `password` varchar(255) NOT NULL default '',
  `firstname` varchar(255) NOT NULL default '',
  `lastname` varchar(255) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `departmentid` int(10) NOT NULL default '0',
  `level` int(1) NOT NULL default '0',
  `timestamp` int(255) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_option`;--
CREATE TABLE `cmseasy_option` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `bid` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `num` int(11) unsigned NOT NULL default '0',
  `order` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `bid` USING BTREE (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_p_ologin`;--
CREATE TABLE `cmseasy_p_ologin` (
  `ologin_id` tinyint(3) unsigned NOT NULL auto_increment,
  `ologin_code` varchar(20) NOT NULL default '',
  `ologin_name` varchar(120) NOT NULL default '',
  `ologin_desc` text NOT NULL,
  `ologin_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL default '0',
  `is_cod` tinyint(1) unsigned NOT NULL default '0',
  `is_online` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`ologin_id`),
  UNIQUE KEY `ologin_code` (`ologin_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_p_orders`;--
CREATE TABLE `cmseasy_p_orders` (
  `id` mediumint(8) NOT NULL auto_increment,
  `oid` varchar(100) NOT NULL,
  `aid` varchar(50) NOT NULL,
  `status` int(3) NOT NULL default '0',
  `mid` int(10) NOT NULL default '0',
  `adddate` int(10) NOT NULL default '0',
  `ip` char(15) NOT NULL,
  `telphone` varchar(50) NOT NULL,
  `pnums` varchar(50) NOT NULL default '0',
  `pname` char(80) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postcode` char(20) NOT NULL,
  `content` text NOT NULL,
  `courier_number` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `aid` (`aid`,`mid`),
  KEY `adddate` (`adddate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_p_pay`;--
CREATE TABLE `cmseasy_p_pay` (
  `pay_id` tinyint(3) unsigned NOT NULL auto_increment,
  `pay_code` varchar(20) NOT NULL default '',
  `pay_name` varchar(120) NOT NULL default '',
  `pay_fee` varchar(10) NOT NULL default '0',
  `pay_desc` text NOT NULL,
  `pay_order` tinyint(3) unsigned NOT NULL default '0',
  `pay_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL default '0',
  `is_cod` tinyint(1) unsigned NOT NULL default '0',
  `is_online` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`pay_id`),
  UNIQUE KEY `pay_code` (`pay_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_p_shipping`;--
CREATE TABLE `cmseasy_p_shipping` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `price` decimal(10,2) unsigned NOT NULL default '0.00',
  `overweight` int(10) NOT NULL,
  `cashondelivery` tinyint(1) unsigned NOT NULL default '0',
  `insure` tinyint(1) NOT NULL default '0',
  `insureproportion` smallint(6) NOT NULL default '0',
  `addtime` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_pay_exchange`;--
CREATE TABLE `cmseasy_pay_exchange` (
  `exchangeid` int(11) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL default '',
  `type` enum('money','point','time','credit') NOT NULL default 'money',
  `value` float NOT NULL default '0',
  `unit` enum('','y','m','d') NOT NULL default '',
  `note` text NOT NULL,
  `addtime` int(11) NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '',
  `authid` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`exchangeid`),
  KEY `username` (`username`,`type`),
  KEY `authid` (`authid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_sessionox`;--
CREATE TABLE `cmseasy_sessionox` (
  `PHPSESSID` varchar(50) NOT NULL,
  `update_time` int(10) NOT NULL,
  `client_ip` varchar(15) NOT NULL,
  `data` text,
  PRIMARY KEY  (`PHPSESSID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_sessions`;--
CREATE TABLE `cmseasy_sessions` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `departmentid` int(10) NOT NULL default '0',
  `timestamp` int(10) NOT NULL default '0',
  `ip` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_settings`;--
CREATE TABLE `cmseasy_settings` (
  `id` int(11) NOT NULL auto_increment,
  `type` varchar(10) default NULL,
  `tag` varchar(30) NOT NULL default '',
  `value` mediumtext NOT NULL,
  `array` mediumtext,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` USING BTREE (`id`),
  UNIQUE KEY `tag` USING BTREE (`tag`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_stats`;--
CREATE TABLE `cmseasy_stats` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `bot` varchar(50) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `time` datetime NOT NULL default '0000-00-00 00:00:00',
  `url` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_templatetag`;--
CREATE TABLE `cmseasy_templatetag` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `tagmodule` varchar(32) default NULL,
  `tagtype` varchar(32) default NULL,
  `tagcontent` text NOT NULL,
  `tagvar` text,
  `note` text,
  `tagfrom` varchar(16) default 'define',
  `template_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` USING BTREE (`id`),
  UNIQUE KEY `name` USING BTREE (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_type`;--
CREATE TABLE `cmseasy_type` (
  `typeid` int(6) NOT NULL auto_increment,
  `parentid` int(6) NOT NULL,
  `typename` varchar(30) NOT NULL,
  `stype` varchar(50) default NULL,
  `listorder` int(11) default NULL,
  `image` varchar(150) default NULL,
  `meta_title` varchar(255) default NULL,
  `keyword` varchar(150) default NULL,
  `description` text,
  `typecontent` mediumtext,
  `htmldir` varchar(50) NOT NULL,
  `template` varchar(50) default NULL,
  `listtemplate` varchar(50) default NULL,
  `showtemplate` varchar(50) default NULL,
  `htmlrule` varchar(100) default NULL,
  `listhtmlrule` varchar(100) default NULL,
  `showhtmlrule` varchar(100) default NULL,
  `module` varchar(16) NOT NULL default 'article',
  `isshow` tinyint(2) default '1',
  `ishtml` tinyint(2) default '0',
  `iswaphtml` tinyint(2) default '0',
  `ispages` tinyint(2) default NULL,
  `includecatarchives` tinyint(2) default '0',
  `addarcenable` tinyint(2) default NULL,
  `linkto` varchar(150) default NULL,
  `attr1` varchar(20) default NULL,
  `attr2` varchar(20) default NULL,
  `attr3` varchar(20) default NULL,
  `thumb` varchar(100) default NULL,
  `thumb_width` int(3) default NULL,
  `thumb_height` int(3) default NULL,
  PRIMARY KEY  (`typeid`),
  UNIQUE KEY `type` USING BTREE (`typeid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_union`;--
CREATE TABLE `cmseasy_union` (
  `userid` int(10) unsigned NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `payaccount` varchar(30) NOT NULL default '',
  `website` varchar(100) NOT NULL default '',
  `visits` int(10) unsigned NOT NULL default '0',
  `registers` int(10) unsigned NOT NULL default '0',
  `settleexpendamount` float unsigned NOT NULL default '0',
  `totalexpendamount` float unsigned NOT NULL default '0',
  `totalpayamount` float unsigned NOT NULL default '0',
  `lastpayamount` float unsigned NOT NULL default '0',
  `lastpaytime` float unsigned NOT NULL default '0',
  `profitmargin` float unsigned NOT NULL default '0',
  `regtime` int(10) unsigned NOT NULL default '0',
  `regip` varchar(15) NOT NULL default '',
  `passed` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_union_pay`;--
CREATE TABLE `cmseasy_union_pay` (
  `payid` int(10) unsigned NOT NULL auto_increment,
  `userid` int(10) unsigned NOT NULL default '0',
  `payaccount` varchar(100) NOT NULL default '',
  `amount` float NOT NULL default '0',
  `expendamount` float unsigned NOT NULL default '0',
  `profitmargin` float unsigned NOT NULL default '0',
  `inputer` varchar(30) NOT NULL default '',
  `addtime` int(10) unsigned NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`payid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_union_visit`;--
CREATE TABLE `cmseasy_union_visit` (
  `visitid` int(10) unsigned NOT NULL auto_increment,
  `userid` int(10) unsigned NOT NULL default '0',
  `visittime` int(10) unsigned NOT NULL default '0',
  `visitip` varchar(15) NOT NULL default '',
  `referer` varchar(255) NOT NULL default '',
  `regusername` varchar(30) NOT NULL default '',
  `regtime` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`visitid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--

DROP TABLE IF EXISTS `cmseasy_webscan`;--
CREATE TABLE `cmseasy_webscan` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `var` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `ext1` varchar(100) default NULL,
  `ext2` varchar(100) default NULL,
  `state` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_webscan360`;--
CREATE TABLE `cmseasy_webscan360` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `var` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `ext1` varchar(100) default NULL,
  `ext2` varchar(100) default NULL,
  `state` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_weixin`;--
CREATE TABLE `cmseasy_weixin` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `oldid` varchar(255) default NULL,
  `weixinid` varchar(255) default NULL,
  `token` varchar(255) default NULL,
  `appid` varchar(255) default NULL,
  `appsecret` varchar(255) default NULL,
  `checksuc` tinyint(1) unsigned default '1',
  `addtime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_weixinmenu`;--
CREATE TABLE `cmseasy_weixinmenu` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `wid` int(11) unsigned default NULL,
  `pid` int(11) default NULL,
  `typeid` int(11) unsigned default NULL,
  `name` varchar(255) default NULL,
  `sort` int(11) unsigned default NULL,
  `url` varchar(255) default NULL,
  `txt` text,
  `imgtext` text,
  `intro` text,
  `catid` text,
  `num` int(11) default '0',
  `addtime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_weixinreply`;--
CREATE TABLE `cmseasy_weixinreply` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `wid` int(11) unsigned default NULL,
  `typeid` int(11) unsigned default NULL,
  `msgtype` int(11) default '0',
  `word` varchar(255) default NULL,
  `keyword` varchar(255) default NULL,
  `url` varchar(255) default NULL,
  `txt` text,
  `imgtext` text,
  `intro` text,
  `catid` text,
  `num` int(11) default '0',
  `addtime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;--
DROP TABLE IF EXISTS `cmseasy_zanlog`;--
CREATE TABLE `cmseasy_zanlog` (
  `zlid` int(11) unsigned NOT NULL auto_increment,
  `aid` int(11) unsigned default NULL,
  `cid` int(11) unsigned default NULL,
  `uid` int(11) unsigned default NULL,
  `addtime` int(10) unsigned default NULL,
  PRIMARY KEY  (`zlid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;--
INSERT INTO `cmseasy_a_attachment` VALUES('1','20','http://www.baidu.com/logo.gif','','下载','2011-11-11 11:25:45');--



INSERT INTO `cmseasy_a_vote` VALUES('4','3','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','');--
INSERT INTO `cmseasy_a_vote` VALUES('5','8','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('6','9','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('8','20','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','');--
INSERT INTO `cmseasy_a_vote` VALUES('9','21','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','');--
INSERT INTO `cmseasy_a_vote` VALUES('10','22','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','');--
INSERT INTO `cmseasy_a_vote` VALUES('11','19','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('12','23','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','');--
INSERT INTO `cmseasy_a_vote` VALUES('14','11','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('15','12','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('16','13','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('17','14','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('19','16','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('20','17','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('22','27','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('23','28','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('24','29','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('25','30','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('26','31','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('28','33','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('29','34','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('30','35','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('31','36','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('33','38','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('38','43','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','');--
INSERT INTO `cmseasy_a_vote` VALUES('40','45','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('42','47','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('43','48','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('44','49','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('45','50','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('46','51','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('47','52','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('48','53','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('49','54','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('50','55','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('51','56','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('52','57','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('53','58','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('54','59','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('55','60','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('56','61','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('57','62','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('58','63','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('59','64','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('60','65','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('61','66','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('62','67','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('63','68','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('64','69','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('65','70','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('66','71','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('67','72','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('68','73','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('69','74','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('70','75','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('71','76','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('72','77','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('73','78','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('74','79','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('75','80','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('76','81','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('78','83','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('79','84','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('80','85','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('81','86','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('82','87','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('83','88','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('84','89','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('85','90','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','');--
INSERT INTO `cmseasy_a_vote` VALUES('86','91','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','');--
INSERT INTO `cmseasy_a_vote` VALUES('87','92','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','');--
INSERT INTO `cmseasy_a_vote` VALUES('88','93','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','');--
INSERT INTO `cmseasy_a_vote` VALUES('89','94','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','');--
INSERT INTO `cmseasy_a_vote` VALUES('3','7','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('2','6','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('1','5','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('32','37','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('34','39','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('35','40','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('36','41','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('37','42','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('39','44','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('41','46','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('18','15','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('21','18','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('7','10','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('13','24','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('90','95','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('91','96','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('92','97','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('27','32','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('93','25','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('94','98','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('95','99','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('96','100','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('97','101','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('98','102','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('77','82','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--
INSERT INTO `cmseasy_a_vote` VALUES('99','103','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}','','','a:8:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}');--

INSERT INTO `cmseasy_activity` VALUES('120','1463387561','1','0','2');--

INSERT INTO `cmseasy_announcement` VALUES('1','热烈庆祝本公司网站构建成立！','<p>热烈庆祝本公司网站构建成立！</p>','2010-07-07 07:07:07','1');--
INSERT INTO `cmseasy_announcement` VALUES('2','感恩有你,全场低至300元','<p>值此纪念公司成立六周年之际，九州易通科技有限公司为答谢广大用户的支持，特此推出本年度最大型的优惠盛宴。</p>\r\n<p>本次活动将集结易通企业系统的各个类别的商品，包括商业授权、商业模板、企业主机等大类。</p>\r\n<p>三百余套精美企业网站模板供您选择，每套售价仅300元人民币！！!</p>\r\n<p>郑重宣布：</p>\r\n<p>所有CmsEasy系统均免费附赠企业推广模块！</p>\r\n<p>所有CmsEasy系统均免费附赠企业WEB客服程序！</p>\r\n<p>所有CmsEasy系统均免费附赠支付宝，财付通，贝宝支付模块！</p>\r\n<p>所有CmsEasy系统均免费升级微信公共号推送模块！</p>\r\n<p>所有CmsEasy系统均免费升级支微信，快钱支付模块！</p>','2015-09-24 15:46:22','1');--
INSERT INTO `cmseasy_announcement` VALUES('3','五周年庆,感恩回馈,送好礼','<p>&nbsp;值此纪念公司成立5周年之际，九州易通科技有限公司为答谢广大用户的支持，特此推出本年度最大型的网购盛宴，本次活动将集结易通企业系统的各个类别的商品，包括商业授权、商业模板、企业主机等大类。</p>\r\n<div>&nbsp;</div>\r\n<div>郑重宣布所有CmsEasy系统均免费附赠企业WEB客服程序！</div>\r\n<div>建站套餐：</div>\r\n<div>终身版授权+一套商业模板+1GB空间仅需600元！</div>\r\n<div>终身版授权+一套商业模板+COM域名+1GB空间仅需655元！</div>\r\n<div>终身版授权+一套商业模板+1GB空间+人工客服咨询仅需1500元！</div>\r\n<div>终身版版+COM域名+1GB空间+一套商业模板+人工客服咨询仅需1555元！</div>\r\n<div>&nbsp;</div>\r\n<div>客户须知：</div>\r\n<div>&nbsp;</div>\r\n<div>空间为国内双线和香港免备案任选。</div>\r\n<div>海外空间，无须备案。不必象在工信部等待冗长的人工开设备案审核.</div>\r\n<div>注意：禁止放置色情、政治、赌博、小说、淘宝客或含采集功能等</div>\r\n<div>套餐中的空间赠送一年，第二年续费只需200元</div>\r\n<div>套餐中的费用不含发票，如需开具发票，需加8%税点和15元快递费。</div>','2015-09-24 15:47:52','1');--

INSERT INTO `cmseasy_archive` VALUES('1','1','0','企业文化','','cmseasy','127','0','','0','0','','0','','','','','0','2010-07-18 23:53:18','cmseasy','','','1','1','企业文化简介内容&hellip;&hellip;','200','<p>企业文化简介内容&hellip;&hellip;</p>','0','','0','','0','0','','1','','','0','','','0','a:0:{}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('2','1','0','企业荣誉','','cmseasy','127','0','','0','0','','0','','','','','0','2010-07-18 23:53:59','cmseasy','','','1','1','企业荣誉介绍&hellip;&hellip;','200','<p>企业荣誉介绍&hellip;&hellip;</p>','0','','0','','0','0','','','','','0','','','0','a:0:{}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('3','1','0','诚聘英才','','cmseasy','127','0','','0','0','','0','','','','','0','2010-07-18 23:58:30','cmseasy','','','1','1','诚聘英才内容&hellip;&hellip;','200','<p>诚聘英才内容&hellip;&hellip;</p>','0','','0','','0','0','','','','','0','','','0','a:0:{}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('4','1','0','网站地图','','cmseasy','127','0','','0','0','','0','','','','','0','2010-07-18 23:59:22','cmseasy','','','1','1','','200','','archive/show_sitemap.html','','0','','0','0','','','','','0','','','0','a:0:{}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('5','13','0','从酒标解密波尔多葡萄酒','','cmseasy','127','0','','0','0','','0','','','','','2105','2010-07-18 22:14:31','cmseasy','','/upload/images/201304/2105.jpg','1','1','框架介绍 1. 前言 CMSEasy根据当前广为流行的敏捷开发方式，实现了基于ROR模型框架，能够快速高效的完成各种应用的开发和扩展。 2. 环境   开发语言：PHP   数据库：MySQL   系统环境：Window Server 或者Linux   框架结构 Cmseasy内核 ● 数据缓存 ●      数据库CRUD ● URI ●      MVC模式 ●      自定义模板 ●      表单模型 优势： 由内核进行总体控制，提高程序的安全性，可靠性。 …','200','<p>很多设计师认为做好了企业网站就一定能够做好行业网站的设计，其实对设计来说行业网站和企业网站的设计截然不同，对整个网站的创意、风格、整体框架布局、文字编排、图片的合理利用，空间的合理安排上面等&hellip;有着许多诸多的要求，需要考虑的面更广，面对的问题也会更多。对于一名优秀的网站设计师来说不能绝不能放过任何一点小细节，本篇文章简述的是设计师在做行业网站时所需考虑的一些问题。&nbsp;</p><p>一、网站风格/创意</p><p>　　风格(style)是抽象的。是指站点的整体形象给浏览者的综合感受。整体形象包括站点的版面布局，色彩，字体，浏览方式等&hellip;。如：我们觉得迪斯尼是生动活泼的而IBM则是专业严肃的。每一个网站都会给人们留下的不同感受。这里我们需要做到的是根据网站的定位做出网站特有的风格。除此我们还需要在风格同一上需要把握一下，其实这个风格的统一和传统的印刷出版物没什么区别。你网页上所有的图像、文字，包括像背景颜色、区分线、字体、标题、注脚什么的，都要统一风格，贯穿全站。这样子用户看起来舒服、顺畅，会对你的网站留下一个&ldquo;很专业&rdquo;的印象。而企业网站设计师往往就缺乏这一点，没有全局意思。</p><p>　　创意，所谓创意就是不拘一格？某些设计师在做创意的时候大费周章，做出来确实不可否认很有创意、很别致，但往往对于行业网站的客户为什么不能接受呢？此时不要太责怪客户的不识货，应该反思，抓住客户的需求。其实做行业网站不需要很多大的创意，也不要浪费过多的时间去追求如何个性、如何好看，我们只需要一点小小的创意贯穿全站，也许会使网站更生动更具有吸引力、更有思想，比如企业网站管理程序(<a href=\"http://www.cmseasy.cn/\">http://www.cmseasy.cn/</a>)就是一个很好的案例，它把领先的SEO融入到网站中，使它脱颖而出。</p><p>二、网站LOGO</p><p>　　Logo顾名思义就是站点的标志图案，logo最重要的就是用图形化的方式传递网站的定位和经营理念、同时便于人们识别。网站logo的设计过程中一般有以下三种思路：1.直接以网站网址作为logo。2.根据网站提供的产品/服务特点展开logo设计。3.以传递网站运营商的经营理念为特色。如：企业网站建设网logo(<a href=\"http://www.cmseasy.cn\">www.cmseasy.cn</a>)</p><p>三、视觉流程</p><p>　　人们在阅读某种信息时，视觉总有一种自然的流动习惯，先看什么，后看什么，再看什么。在心理学的研究表明，一般的浏览习惯是从上到下、从左到右，在一个平面上，上松下稳而压抑。同样，平面的左松右稳。所以平面的视觉影响力上方强于下方，左侧强于右侧。这样平面的上部和中上部被称为&ldquo;最佳视域&rdquo;，也就是最优选的地方。在网页设计中一些突出或推荐的信息通常都放在这个位置。当然这种视觉流程只是一种感觉并非一种固定的公式，只要符合人们的心理顺序和逻辑顺序，就可以更为灵活地运用，在网页设计中，灵活而合理地运用直接影响到传达信息的准确与有效性。</p><p>四、网页框架与布局</p><p>　　网页布局大致可分为&ldquo;国&rdquo;字型、拐角型、&ldquo;T&rdquo;字型、&ldquo;L&rdquo;字型、综合框架型、Flash型、变化型，在这里就不做一一论述了。其实在我们在做设计的时候并没有过多的去考虑什么形式，比如我们在一张纸看到一个圆形的东西，很容易可以联想到它像太阳，而有些人则联想到月亮等等&hellip;这都是一种形式比喻，最重要的是抓住客户的需求，把握网站的定位做处合理的框架布局。</p><p>1． 分辨率</p><p>　　网页的整体宽度可分为三种设置形式：百分比、象素、象素+百分比。通常在网站建设中以象素形式最为常用，行业网站也不列外。我们在设计网页的时候必定会考虑到分辨率的问题，科技发展到现在我们通常用的是1024*768和800*600的分辨率，现在网络上很多都是用到778个象素的宽度，在800的分辨率下面往往使整个网页很压抑，有种不透气的感觉，其实这个宽度是指在800*600的分辨率上网页的最宽宽度，不代表最佳视觉，不妨试试760~770的象素，不管在1024还是800的分辨率下都可以达到较佳的视觉效果。</p><p>2． 合理广告</p><p>　　在目前一些网站的广告（弹出广告、浮动广告、大广告、banner广告、通栏广告等等&hellip;）让人觉得很烦琐，更本就不愿意来看，有时连你这个网站都不上了，这样一来网站受到了严重的影响、广告也没达到广告的目的。这些问题都是我们在设计网站之前需要考虑、需要规划的内容之一。</p><p>　　浮动广告有两种，第一种是在网页两边空余的地方可以上下浮动的广告，第二种是满屏幕到处随机移动的广告。建议能使用第一种的情况下尽量使用第一种，不可避免第二种情况时尽量在数量上控制最多一个就好。如果数量过多会直接影响到用户的心理、防挨到用户浏览信息,适得其反。首页广告不宜过多适中即可。如在注册或者某个购买步骤的页面上最好不要出现过多的其他无关的内容让用户分心，避免客户流失等&hellip;</p><p>3．空间的合理利用</p><p>　　很多的网页都具有一个特点，用一个字来形容，那就是&ldquo;塞&rdquo;，它将各种各样的信息如文字、图片、动画等不加考虑的塞到页面上，有多少挤多少，不加以规范，导致浏览时会遇到很多的不方便，主要就是页面主次不分，喧宾夺主，要不就是没有重点，没有很好的归类，整体就像各大杂烩。让人难以找到需要的东西。有的则是一片空白失去平衡，也可以用个&ldquo;散&rdquo;字来形容。</p><p>　　并非要把整个页面塞满了才不觉得空，也并非让整个页面空旷才不觉得满，只要合理的安排、有机的组合，使页面达到平衡，既使在一边的部分大面积留空，同样不会让人感到空，相反这样会给人留下广阔的思考空间，给人回味又达到了视觉效果。</p><p>4．文字编排</p><p>　　在网页设计中，字体的处理与颜色、版式、图形化等其他设计元素的处理一样非常关键。</p><p>4.1文字图形化</p><p>　　文字图形化就是将文字用图片的形式来表现，这种形式在页面的子栏目里面最为常用，因为它具有突出，同时又美化了页面，使页面更加人性化加强了视觉效果。是文字无法达到的。对于通用性的网站弊端就是扩展性不强。</p><p>4.2强调文字</p><p>　　如果将个别文字作为页面的诉求重点，则可以通过加粗、加下划线、加大号字体、加指示性符号、倾斜字体、改变字体颜色等手段有意识地强化文字的视觉效果，使其在页面整体中显得出众而夺目。这些方法实际上都是运用了对比的法则。如果在更新频率低的情况下也可以使用文字图形化。</p><p>&nbsp;</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('6','13','0','威龙股份A股主板成功上市 国货自强创导有机葡萄美酒','','cmseasy','127','0','','0','0','','0','','','','','2104','2010-07-18 22:21:57','cmseasy','','/upload/images/201304/2104.jpg','1','1','网站的良好运营靠的是什么？靠技术，肯定不是，因为技术的发展是一个相对的概念，不具有耐久性，缺乏凝聚力，如果仅仅靠这个，是不能维系整个网站发展的。网站其实就是企业，只不过它是提供给自己的客户以不同的产品，即以网页的形式展现给他们浏览、以交互的方式让他们参与等等，既然网站是一个企业就不能回避一个问题，就是盈利的问题，如果只顾向网站投钱，作亏本生意，是那个网站都不愿意做的事情。所以网络如果要给自己带来回报，就必须以高标准来要求，这样就不得不提升到网站文化的高度。还是先来看一下企业文化的定义吧！  　　 只要问一问任何一家一流的高科技企业，什么使这些企业引以自豪，十家有八家或许会告诉你，它们引以自豪的是自己的产品或服务。剩下的两家则会举出一系列的东西，如它们的业务流程、它们的业务伙伴关系、它们的员工等等。总之，概括起来就是：企业文化。 什么是企业文化呢？Terence E. De','200','<p>网站的良好运营靠的是什么？靠技术，肯定不是，因为技术的发展是一个相对的概念，不具有耐久性，缺乏凝聚力，如果仅仅靠这个，是不能维系整个网站发展的。网站其实就是企业，只不过它是提供给自己的客户以不同的产品，即以网页的形式展现给他们浏览、以交互的方式让他们参与等等，既然网站是一个企业就不能回避一个问题，就是盈利的问题，如果只顾向网站投钱，作亏本生意，是那个网站都不愿意做的事情。所以网络如果要给自己带来回报，就必须以高标准来要求，这样就不得不提升到网站文化的高度。还是先来看一下企业文化的定义吧！&nbsp;</p><p>　　 只要问一问任何一家一流的高科技企业，什么使这些企业引以自豪，十家有八家或许会告诉你，它们引以自豪的是自己的产品或服务。剩下的两家则会举出一系列的东西，如它们的业务流程、它们的业务伙伴关系、它们的员工等等。总之，概括起来就是：企业文化。 什么是企业文化呢？Terence E. Deal（特伦斯）和Allan A. Kennedy（阿伦）合著了一部颇具影响的专著，《企业文化》（Corporate Culture）。书中给企业文化的定义是，\"用以规范企业人多数情况下行为的一个强有力的不成文规则体系。\"</p><p>　　其实企业文化指的是一个企业中所有员工共有的一套观念、信念、价值和行为准则，以及由此导致的行为模式。企业文化是以人为本的管理哲学，是把精神文明建设同企业特点和市场对企业发展的要求结合起来的一个重要形式，是借助文化力量的管理方式，良好的企业文化能为企业保持数十年的竞争优势。</p><p>　　可以说企业文化是企业的灵魂。一个没有自己企业文化的企业其经营往往是随波逐流的，其员工也没有主人翁意识，这样的企业是长不了的。纵观国内外现代化企业管理已经从以物为中心的管理转向以人为中心的管理，从而越来越突出人在企业生存和发展中的作用和力量。企业最重要的资源是知识，而知识是人的资源，所以重视人就是重视企业最重要的资源。IBM这样一个老牌的大公司为什么经历如此多的风风雨雨至今仍然是蓝色巨人？HP公司为什么能保持20多年持续稳定的发展？其答案都很简单：重视人的建设是他们立于不败之地的保证。</p><p>　　虽然现在的网站赖以竞争的本钱并不是靠的自己的文化，而是一些比如机遇、技术、条件等，但是现在并不能代表以后，随着社会经济和网络技术的发展，外部条件都不是问题，如果仅靠这些，网站之间的差别将变得很小，这样网站生存的价值就会变小。所以要能够在竞争中立于不败之地，就应该坚持以人为本，挖掘网站人的潜力，让他们发挥自己的才能，使他们能够不断的超越自我，更好的凸现自己的价值。从而形成一种合力，使网站的发展形成一种良好的机制。</p><p>　　 在这样的情况下，网页设计就被赋予了新的内容，要求也随之提高，主要表现在几个方面：</p><p>　　首先就是网站的整体形象，一个网站给人的第一印象就是主页，但是绝不是说，只要主页做好了，网站的整体形象就好，因为在用户对整个网站的浏览的过程中，会自然而然的形成一种对网站的看法，这种看法是附带有感情色彩的，比如喜欢、不喜欢、没有什么感觉等，这就是整体形象的体现，这是靠主页和其它的页面相配合来完成的，所以在制作网页的时候要考虑怎么将自己网站好的一面体现给自己的用户，又要考虑体现的方式，侧重点，不能一锅端，都放在主页上，造成杂乱的形象。而要给人以好的可以信赖的形象就必须从许多细节上入手，同时规范整个网站的外在表现，具体在于标志的设计、标准色彩的表达以及标准字体的设计。这些都是很重要的，有一个统一的、标准的形象是赢得自己用户信赖的条件。</p><p>　　其次是如何在网页设计中将整个网站的员工的精神风貌体现出来，每个企业的员工其实是一分宝贵的财富，所以能够充分的将员工的精神风貌体现出来一方面可以激励他们努力的工作，热爱自己的工作，也是加强企业凝聚力的一个手段；同时也可以通过这样的方法来赢得自己的客户的支持，在网站林立的今天，赢得自己的用户就是赢得了市场，就是获得了生存的基本条件。</p><p>　　再次，在网页设计的时候，需要结合网站本身的特点，提炼出自己的经营理念，摆脱低层次的网站运行模式，网站作为一个企业就必须在不断的发展壮大的时候，结合自身的文化特色，提炼出一些深层次的东西，而这些东西就是企业的灵魂，很多世界知名品牌都有自己的独特的经营理念，比如微软是\"成功诀窍 = 人才 + 创新，管理 = 合适的时间 + 应做的事\"，惠普是\"财富= 人才 = 资本 + 知识\"，飞利普是\"新产品 = 技术内涵 + 观念创新\"，东芝是\"企业活力 = 智力&times;（毅力 + 体力 + 速度）\"，麦当劳是\"企业的活力 = 原材料&times;设备&times;人力资源人力资源 = 人数&times;能力&times;态度\"。这样就给网页设计师提出了更高的要求，要求他们能够深入的了解网站，同时将自己融入的到网站中，不断的发掘具有闪光性的东西，同时找到合适的表达方式来加以强化。这样才能够使网站靠自身的优势获得用户的好感。从而奠定良性运行的基础。</p><p>　　既然网站文化给网页设计师提出了更高的要求，那么具体到网页设计师身上该如何应对呢？提高自身的文化素质是必不可少的，假如自身素质不高的话，就无法领会到很多其中的内涵，这样在自己的设计表达的时候就不可能到位，其实作品就是一面镜子，在其中可以折射出设计者自身的素质，这是掩盖不了的，所以提高自身的文化修养是很重要的，形成一种习惯，这样在无形中就可以在设计的作品表现出来，所以这里没有任何捷径可以走，只有在平时的生活中点点滴滴的积累。同时要有一颗积极向上的心，对生活充满热情！这样才可能在自己的网页设计中挖掘出好的东西来，也给自己的用户留下好的印象。<br/>&nbsp;</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('7','13','0','专家评智利葡萄酒,麦卡斯酒款均获90以上分数','','cmseasy','127','0','','0','0','','0','','','','','2103','2010-07-18 22:22:19','cmseasy','','/upload/images/201304/2103.jpg','1','1','随着网络技术的不断发展，网络应用已经渗透到人类社会的各个角落。作为网络世界的支撑点的网站，更是人们关注的热点：政府利用网站宣传自己的施政纲领，日益成为与百姓交流的直通车；企业利用网站宣传自己的形象，挖掘无限商机；个人利用网站展示个性风采，创建彼此沟通的桥梁。越来越多的人希望拥有网站，开辟网络世界里的一片天地。如何设计一个出色的网站呢？关于这个问题，人们讨论的很多，可以讨论的内容也很多，加之网络技术的飞速发展，很难提出一个绝对权威和正确的设计思路，任何网站都基于以下设计思路：  中国站长第一门户          一、定位网站的主题和名称  网站的主题也就是网站的题材，网站设计开始首先遇到的问题。网站题材千奇百怪,琳琅满目，','200','<p>&nbsp;随着网络技术的不断发展，网络应用已经渗透到人类社会的各个角落。作为网络世界的支撑点的网站，更是人们关注的热点：政府利用网站宣传自己的施政纲领，日益成为与百姓交流的直通车；企业利用网站宣传自己的形象，挖掘无限商机；个人利用网站展示个性风采，创建彼此沟通的桥梁。越来越多的人希望拥有网站，开辟网络世界里的一片天地。如何设计一个出色的网站呢？关于这个问题，人们讨论的很多，可以讨论的内容也很多，加之网络技术的飞速发展，很难提出一个绝对权威和正确的设计思路，任何网站都基于以下设计思路：&nbsp;</p><p>中国站长第一门户</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 一、定位网站的主题和名称 <br/>网站的主题也就是网站的题材，网站设计开始首先遇到的问题。网站题材千奇百怪,琳琅满目，只要想的到，就可以把它制作出来。</p><p>如果题材已经确定以后，就可以围绕题材给网站起一个名字。网站名称，也是网站设计的一部分，而且是很关键的一个要素。</p><p>中国站长第一门户建议：</p><p>1、名称要正。其实就是要合法，和理，和情。不能用反动的，色情的，迷信的，危害社会安全的名词语句。</p><p>2、名称要易记。最好用中文名称，不要使用英文或者中英文混合型名称。另外，网站名称的字数应该控制在六个字(最好四个字)以内，四个字的也可以用成语。字数少还有个好处，适合于其他站点的链接排版。</p><p>3、名称要有特色。名称平实就可以接受，如果能体现一定的内涵，给浏览者更多的视觉冲击和空间想象力，则为上品。例如：音乐前卫，网页陶吧，e书时空等。在体现出网站主题的同时，能点出特色之处。</p><p>二、定位网站的CI形象</p><p>所谓CI(corporate identity)，意思是通过视觉来统一企业的形象。一个杰出的网站，和实体公司一样，需要整体的形象包装和设计。准确的，有创意的CI设计，对网站的宣传推广有事半功倍的效果。中国站长第一门户</p><p>三、确定网站的栏目</p><p>建立一个网站好比写一篇文章，首先要拟好提纲，文章才能主题明确，层次清晰。如果网站结构不清晰，目录庞杂，内容东一块西一块。结果不但浏览者看得糊涂，自己扩充和维护网站也相当困难。网站的题材确定后，并且收集和组织了许多相关的资料内容，但如何组织内容才能吸引网友们来浏览网站呢？栏目的实质是一个网站的大纲索引，索引应该将网 站的主体明确显示出来。</p><p>四、确定网站的目录结构</p><p>网站的目录是指你建立网站时创建的目录。例如：在用frontpage98建立网站时都默认建立了根目录和images(存放图片)子目录。目录结构的好坏，对浏览者来说并没有什么太大的感觉，但是对于站点本身的上传维护，内容未来的扩充和移植有着重要的影响。</p><p>五、确定网站的链接结构中国站长第一门户</p><p>网站的链接结构是指页面之间相互链接的拓扑结构。它建立在目录结构基础之上，但可以跨越目录。建立网站的链接结构有两种基本方式：</p><p>1、树状链接结构</p><p>类似DOS的目录结构，首页链接指向一级页面，一级页面链接指向二级页面。这样的链接结构浏览时，一级级进入，一级级退出。优点是条理清晰，访问者明确知道自己在什么位置，不会\"迷\"路。缺点是浏览效率低，一个栏目下的子页面到另一个栏目下的子页面，必须绕经首页。</p><p>2、星状链接结构</p><p>类似网络服务器的链接，每个页面相互之间都建立有链接。这种链接结构的优点是浏览方便，随时可以到达自己喜欢的页面。缺点是链接太多，容易使浏览者迷路，搞不清自己在什么位置，看了多少内容。中国站长第一门户<br/>&nbsp;</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('38','13','0','河西走廊再遇霜冻 民勤南部地区葡萄受损严重','','admin','1','0','','0','0','','0','','','','','2107','2014-10-11 16:30:47','admin','','/upload/images/201304/2107.jpg','1','1','关于一个网站的开展而言，跟着查找引擎越来越注重用户体验，良多的网站都邑更好的投合用户，然后添加一些比拟利于用户体验的插件，以及良多时分我们网站后期开展的需求，所以网站改版相对而言就会很必定。然则作为小我站长的我们，无论从技能、网站整顿的运作都是显得那么势单力薄。特殊是一些站长由于改版后招致网站降权，然后就懊悔万分，这些都是很经常见的，那么若何才干做到网站改版不降权呢?今日我与人人分享一些我在网站改版中的一些经历心得吧。\r\n　　(一)改版也要包管网站正常拜访。\r\n　　在我们对其网站改版的进程中，切勿封闭网站，招致蜘蛛无法抓取匍匐。然后降低网站的收录，以及降权。所以我们在对网站改版的进程中必然要包管网站可以正常拜访，而且包管内容的正常更新，外链的推行这些方面。\r\n　　(二)应用当地测试的方法进行改版。\r\n　　在我之前做站的时分发现良多站长直接在网站的效劳器上面临网站进行改版，大幅度的调试，完全疏忽了此时蜘蛛还在你的网站匍匐，然后惹起蜘蛛的恶感或许说是不信赖，招致网站降权从新审核。所以在这里，我引荐人人最好是在当地测试性的改版，等模板以及一些插件彻底的精确的调试终了之后，在直接上传到效劳器上面，如许不只仅可以包管在改版时期网站属于正常形态，还也到达了我们改版的目标。\r\n　　(三)做好网站全体构造融洽。\r\n　　关于有些站点而言，良多时分会晤临大幅度的改版，触及到网站一些栏目标途径调整等情况，在这时分我们需求严密的记载好网站栏目标之前途径，而且不要把之前的途径直接删除，可以做成301重定向的方法进行权重传输，而且关于新途径的话百度也是有审核期的，所以我们在做内链的时分尽能够的多引入蜘蛛匍匐，然后促使早日审核。\r\n　　(四)网站题目很主要。\r\n　　一般来说的话，我是不引荐人人修正网站题目的，由于这关系到整个网站的权重以及要害词排名问题，然则有时分不得已照样必需修正的，那么在这个时分我建议人人尽能够的小型变化，不然的话招致网站降权是一定的。还在这时分需求增强内链的根底性以及外链的辅佐性，只要如许才干更好的使其网站即使降权也能疾速恢复。\r\n　　(五)网站改版后的推行任务。\r\n　　关于网站改版之后而言，推行任务的量愈加需求加大，由于在我们改版之后网站同新站一样都是有一个审核期的，在这时期网站排名能够很不睬想，所以我们除了做好网站内部任务之外，推行任务也长短常要害的，然则人人必然切记我们推行出去的不是白费，必然要包管推行出去的外链都是质量性的，只要如许才干更好的使其网站恢复，渡过这个审核期。\r\n　　(六)改版后必然要包管网站友链不会撤失落。\r\n　　在我们改版后网站在面对审核期的时分，网站权重会降低，收录快照等方面也能够会有些缓慢，所以在这时分良多友链站长会把你的网站链接撤失落，招致网站被二次降权都是极为经常见的，所以在这里我想说的是，在我们对网站改版的时分必然要告诉你一切的友谊链接站长们，通知他你的目标，以及是审核期很快就会恢复的，不要他们撤失落你链接，如许就可以了，当然照样需求你人际关系咯，哈哈。\r\n　　总结：其实关于网站改版而言，我们更多的照样需求留意到一些细节性的任务，更好的尊于用户体验的原则结构合理的网站，然后进行优化在到后期的推行恢复任务，这些都不是一朝一夕就可以完成的，照样需求我们有一颗好的心态积极的去面临。只要如许我们的网站才干做好，做强做大。','0','<p>关于一个网站的开展而言，跟着查找引擎越来越注重用户体验，良多的网站都邑更好的投合用户，然后添加一些比拟利于用户体验的插件，以及良多时分我们网站后期开展的需求，所以网站改版相对而言就会很必定。然则作为小我站长的我们，无论从技能、网站整顿的运作都是显得那么势单力薄。特殊是一些站长由于改版后招致网站降权，然后就懊悔万分，这些都是很经常见的，那么若何才干做到网站改版不降权呢?今日我与人人分享一些我在网站改版中的一些经历心得吧。</p><div>　　(一)改版也要包管网站正常拜访。</div><div>　　在我们对其网站改版的进程中，切勿封闭网站，招致蜘蛛无法抓取匍匐。然后降低网站的收录，以及降权。所以我们在对网站改版的进程中必然要包管网站可以正常拜访，而且包管内容的正常更新，外链的推行这些方面。</div><div>　　(二)应用当地测试的方法进行改版。</div><div>　　在我之前做站的时分发现良多站长直接在网站的效劳器上面临网站进行改版，大幅度的调试，完全疏忽了此时蜘蛛还在你的网站匍匐，然后惹起蜘蛛的恶感或许说是不信赖，招致网站降权从新审核。所以在这里，我引荐人人最好是在当地测试性的改版，等模板以及一些插件彻底的精确的调试终了之后，在直接上传到效劳器上面，如许不只仅可以包管在改版时期网站属于正常形态，还也到达了我们改版的目标。</div><div>　　(三)做好网站全体构造融洽。</div><div>　　关于有些站点而言，良多时分会晤临大幅度的改版，触及到网站一些栏目标途径调整等情况，在这时分我们需求严密的记载好网站栏目标之前途径，而且不要把之前的途径直接删除，可以做成301重定向的方法进行权重传输，而且关于新途径的话百度也是有审核期的，所以我们在做内链的时分尽能够的多引入蜘蛛匍匐，然后促使早日审核。</div><div>　　(四)网站题目很主要。</div><div>　　一般来说的话，我是不引荐人人修正网站题目的，由于这关系到整个网站的权重以及要害词排名问题，然则有时分不得已照样必需修正的，那么在这个时分我建议人人尽能够的小型变化，不然的话招致网站降权是一定的。还在这时分需求增强内链的根底性以及外链的辅佐性，只要如许才干更好的使其网站即使降权也能疾速恢复。</div><div>　　(五)网站改版后的推行任务。</div><div>　　关于网站改版之后而言，推行任务的量愈加需求加大，由于在我们改版之后网站同新站一样都是有一个审核期的，在这时期网站排名能够很不睬想，所以我们除了做好网站内部任务之外，推行任务也长短常要害的，然则人人必然切记我们推行出去的不是白费，必然要包管推行出去的外链都是质量性的，只要如许才干更好的使其网站恢复，渡过这个审核期。</div><div>　　(六)改版后必然要包管网站友链不会撤失落。</div><div>　　在我们改版后网站在面对审核期的时分，网站权重会降低，收录快照等方面也能够会有些缓慢，所以在这时分良多友链站长会把你的网站链接撤失落，招致网站被二次降权都是极为经常见的，所以在这里我想说的是，在我们对网站改版的时分必然要告诉你一切的友谊链接站长们，通知他你的目标，以及是审核期很快就会恢复的，不要他们撤失落你链接，如许就可以了，当然照样需求你人际关系咯，哈哈。</div><div>　　总结：其实关于网站改版而言，我们更多的照样需求留意到一些细节性的任务，更好的尊于用户体验的原则结构合理的网站，然后进行优化在到后期的推行恢复任务，这些都不是一朝一夕就可以完成的，照样需求我们有一颗好的心态积极的去面临。只要如许我们的网站才干做好，做强做大。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('8','13','0','葡萄酒为媒 把最醇厚的葡萄酒回馈给福建人民','','cmseasy','127','3','','0','0','','0','','','','','2102','2010-07-18 22:22:46','cmseasy','','/upload/images/201304/2102.jpg','1','1','网站建设合同是在网站建设项目中，企业（需要建网站方）和承建方（专业网站制作公司）之间共同确立的双方在项目中的权利，义务和合作内容的契约文件。本文就网站建设合同应该包含哪些主要内容，应该注意一些什么逐个做说明：         网站建设合同是在网站建设项目中，企业（需要建网站方）和承建方（专业网站制作公司）之间共同确立的双方在项目中的权利，义务和合作内容的契约文件。网站建设合同必须包含以下主要内容： 1）网站建设工作范围 2）网站建设工作流程与时间进度 3）网站建设质量要求 4）网站承建费用支付，支付标准与支付方式 下面就每一部分应该写明一些什么内容和注意一些什么点逐个做说明（合同其他部分如，违约形式与责任，合同附件里的《网','200','<p>&nbsp;网站建设合同是在网站建设项目中，企业（需要建网站方）和承建方（专业网站制作公司）之间共同确立的双方在项目中的权利，义务和合作内容的契约文件。本文就网站建设合同应该包含哪些主要内容，应该注意一些什么逐个做说明：</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 网站建设合同是在网站建设项目中，企业（需要建网站方）和承建方（专业网站制作公司）之间共同确立的双方在项目中的权利，义务和合作内容的契约文件。网站建设合同必须包含以下主要内容：<br/>1）网站建设工作范围<br/>2）网站建设工作流程与时间进度<br/>3）网站建设质量要求<br/>4）网站承建费用支付，支付标准与支付方式<br/>下面就每一部分应该写明一些什么内容和注意一些什么点逐个做说明（合同其他部分如，违约形式与责任，合同附件里的《网站建设方案书》本文不作讨论）。<br/>一、网站建设工作范围<br/>网站建设项目涉及到的工作一般包括，需求调研与《网站建设方案书》制作，网站建设素材准备，网站页面设计与制作，网站功能性部分程序开发与页面融合，数据库设计与数据输入，服务器购买（软件和硬件）或服务器空间租用、服务器存放，域名注册与解析。<br/>所先，在这些网站建设工作中，合同需要确定哪些是承建方的工作，哪些不是，哪些是企业或者第三方的工作，以及各方工作之间的合作方式和要求。<br/>这里需要注意的是，如果企业在工作中需要和建设方或者第三方进行合作，那么必须清晰说明这种合作的流程，方式和要求。譬如，如果网站建设素材由企业提供，合同必须对企业提供的素材内容，时间，要求作出清晰的说明。<br/>其次，对于承建方工作部分，必须细致地说明。<br/>例如，网站需要建设哪些栏目，每个栏目需要制作哪些内容，网站需要开发哪些功能性的程序（如BBS）等，对这些合同必须相当明确地作出说明。合同可以用建设方确认通过的《网站建设方案书》作为合同附录，来更详细阐明承建方的工作。<br/>二、项目建设工作流程与时间进度</p><p>网站建设流程一般流程为：需求调研，完成网站《网站建设方案书》，《方案书》确认，素材（文字，图片，数据）收集与整理，页面风格设计，风格设计确认，页面制作，程序开发，整合（页面，程序），建设方评估与测试，网站改进与建设方确认，服务器与域名准备，网站上传发布，网站维护。<br/>所先，合同必须说明项目开展的工作流程。<br/>其次，对于每个工作流程，需要概要说明承建方的工作内容，尤其对于需要企业参与的部分，需要说明企业的工作内容和要求。例如，需求调研时企业的配合和资源提供；设计制作确认时的确认方式和确认范围。<br/>最后，是对每个流程环节的完成时间要求说明。合同需要给出每个流程环节的工作估计以及项目最终完工的日期估计，双方可以根据需要，协商在进度限制上的严格度。<br/>三、网站建设质量要求<br/>网站建设质量主要指网站页面设计，制作与网站程序的质量。合同需要对这些工作的质量作出周到的，尽量可度量的要求，譬如为保证浏览速度，建设方也可以对每个网页的大小作出一般性限制。<br/>对于页面设计与制作，由于对设计风格的认识差异会导致建设方和承建方的质量评判结果不同，同时设计质量也难以度量，容易出现建设方多次否定设计的情况。在这个时候需要用变通的办法来弥合双方的质量评判差异。<br/>例如，可以由承建方设计出5种建设方要求风格的设计页面，然后由建设方选择，或者重复修正设计不能超过5次，而承建方可以以半价收取落选设计页面费用的代价来限制设计要求的变化。<br/>还有一种办法，就是采取第三方来度量页面设计与制作质量。例如，找一些普通的上网用户，测试他们成功搜索网站中某个特定内容所需要的时间，用这个时间来衡量网站连接设计质量和合理性。例如，可以通过在门户网站做网上调查，由网民来评判网站设计与制作质量，这样做同时也很好地宣传了网站。<br/>而对于网站功能性程序来说，合同应该对功能作出详细的说明。如会员注册登陆系统，那么除了会员的注册，登陆，退出外，系统还应该提供给会员什么功能，譬如新闻定制等。这部分可以在《网站建设方案书》里作出更详细的说明。<br/>如果，网站承建方同时提供虚拟主机空间，那么企业还可以对网站访问速度，宕机时间，网站带宽等方面作出要求（空间租用双方一般也可以另签《网站空间租用合同》）。</p><p>四、网站承建费用支付，支付标准与支付方式<br/>网站建设业内一般采用按制作量记费的方式，譬如按页面数量记费。<br/>但网站制作量，如页面数量等，在制作过程中是变化的，所以在签合同的时候无法给出整个网站建设完成后的确切费用。但是合同却可以给出网站建设的收费项和收费标准，等网站建设完成后，统计整个网站的每项工作量，再结合记费标准来算出项目实际标的。<br/>所先，确定网站建设收费项。网站建设收费项一般可以包括以下一些：<br/>1）素材整理阶段的文字录入费，图片处理费，翻译费<br/>2）《网站建设方案书》制作费用<br/>3）普通页面制作费用<br/>4）页面风格设计费用（一般指主页和栏目首页）<br/>5）页面特效制作费用（譬如JavaScript，Flash等）<br/>6）功能性程序开发费用（如调查系统，会员注册系统等）<br/>7）数据库数据录入费用<br/>8）空间租用费用等。<br/>其次，确定每个收费项的单位价格。例如，文字翻译每千字50元等。<br/>这一条款关系到日后合同标的的计算，所以务必非常清晰，双方不妨多花一点时间来协商这里的细节，以达到彼此在这一条款上的一致认可，以妨日后引起不必要的争执。为了做到这一点，我认为原则就?quot;细\"。譬如，必须定义怎么算作一个页面，是1024下的800*600，还是800*800？如果是800*600，那么一个800*1200的页面就算做两页；这是一个协商的过程，这样计算是否合理，我觉得只要双方都同意这样计算就没有问题，关键是必须使得日后统计制作量和计算合同标的时双方没有歧义。<br/>费用支付一般可以分成三次进行。一般合同签署一周内支付一定数量，作为项目启动费用；项目中期支付一定数量；项目结束后，计算项目实际标的，再支付余额。<br/>如前面所说，作为网站建设项目的建设合同还需要其他很多条款和辅助合同，如：《空间租用合同》等，但是以上谈到四点却是合同里最重要，也是最需要\"细扣\"的内容，希望大家以后在撰写网站建设合同时能从中获得一点帮助。<br/>&nbsp;</p>','archive/show_guest.html','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('9','13','0','中国有机葡萄酒创导者威龙股份主板上市','','cmseasy','127','134','','0','0','','0','','','','','2101','2011-11-27 02:50:29','cmseasy','','/upload/images/201304/2101.jpg','1','1','　　5月16日，国产葡萄酒三巨头之一、中国有机葡萄酒创导者——威龙葡萄酒股份有限公司在上海证券交易所A股主板首发上市，正式进入资本市场。公司股票简称为“威龙股份”，股票代码603779。\r\n\r\n　　根据公司招股说明书，公司首次发行5020万股，发行价格4.61元/股，募集资金将用于4 万吨有机葡萄酒生产、1.8万亩有机酿酒葡萄种植及营销网络建设，并偿还银行贷款。','200','<p>　　5月16日，国产葡萄酒三巨头之一、中国有机葡萄酒创导者——威龙葡萄酒股份有限公司在上海证券交易所A股主板首发上市，正式进入资本市场。公司股票简称为“威龙股份”，股票代码603779。</p><p><br/></p><p>　　根据公司招股说明书，公司首次发行5020万股，发行价格4.61元/股，募集资金将用于4 万吨有机葡萄酒生产、1.8万亩有机酿酒葡萄种植及营销网络建设，并偿还银行贷款。</p><p><br/></p><p>　　威龙股份是一家大型葡萄酒生产企业，公司成立于2007年，目前注册资金2个亿，自有三大葡萄基地，拥有有机葡萄酒、传统葡萄酒、葡萄特酿白酒、白兰地、无醇葡萄酒等系列产品，数百个品种。</p><p><br/></p><p>　　威龙股份是中国葡萄酒行业三巨头之一，有机葡萄酒已成为公司的拳头产品,市场占有率居行业首位,远超第二名。2015年，公司实现营业收入7.375亿元，同比增长3.34%；净利4180.82万元，同比增长18.47%。综合毛利率为58.49%。</p><p><br/></p><p>　　作为中国有机葡萄酒的创导者，威龙在有机葡萄酒研发领域，承担了国家科技部星火计划重点项目，该项目首批入选国家“十二五”科技计划预备项目库。威龙有机葡萄酒的原料，来自威龙甘肃沙漠绿洲有机葡萄庄园，庄园位于甘肃武威腾格里沙漠边缘，远离污染，光照时间长，昼夜温差大，干旱少雨，病虫害罕见，施用自制微生物生态肥，威龙首席农艺师、澳大利亚籍专家布鲁诺称之为“有机葡萄生长天堂”。威龙团队在沙漠旁苦耕十多年，酿造出了高品质的有机葡萄酒，通过了中国、欧盟、美国等国家、组织的有机认证，每批有机原酒都要通过瑞士通用公证行（SGS集团）的严格检测，才会用于有机葡萄酒的灌装生产。</p><p><br/></p><p>　　随着国民收入水平的提高，人们对健康食品的需求越来越强，红酒市场日趋成熟，“有机”处于国家食品安全金字塔的塔尖，连续多年产销量、市场占有率远超全国第二的威龙有机葡萄酒市场前景极其广阔。</p><p><br/></p><p>　　不仅如此，威龙股份还始终走在中国葡萄酒行业创新的前沿。凭借创新，公司荣获“中国葡萄酒A级产品”、“中国国际有机食品博览会金奖”、“首届中拉21国农业 部长论坛国宴用酒”、“中国500最具价值品牌”等荣誉称号。</p><p><br/></p><p>　　目前，威龙在中国酿酒葡萄的黄金种植带上，从东到西已经建成了三大葡萄庄园——山东龙湖威龙国际酒庄、威龙甘肃沙漠绿洲有机葡萄庄园、威龙新疆冰川雪山葡萄庄园，开创以品质为导向的自有基地管理模式，为提高葡萄原料质量提供了有力保障。威龙组建了国际大师团队，全程掌控从葡萄种植到葡萄酒酿造的每个环节，从德国、意大利等国家引进原装进口的现代化生产设备，充分保证威龙葡萄酒的品质。威龙构筑起了覆盖广阔的营销网络，实现了种植、加工、销售纵向一体化的经营格局。</p><p><br/></p><p>　　多年来，威龙坚持“生态文明，百姓致富，政府受益，企业增效”的发展原则，对有机葡萄酒产业、生态经济持续投入，让甘肃武威腾格里沙漠边缘数万亩荒漠变成了绿洲。在大力发展自有葡萄基地的过程中，公司还让迁居贫苦农民变为种植管理人员，带动数千农民脱贫致富，户均年收入从不到3000元，增加到3万元以上；威龙还给农户建造宽敞的砖瓦房，水、电、通讯、太阳能等配套生活设施一应俱全……威龙开启了中国葡萄酒行业的有机时代的同时，更用一粒小小的葡萄创造出了健康、和谐、美好的有机生活。</p><p><br/></p>','archive/show.html','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('10','8','2','内容三','','cmseasy','127','1','','0','0','','0','','','','','3103','2011-11-27 03:31:43','cmseasy','','/upload/images/201304/3103.jpg','1','1',' 罗技持续在零售领域扩展产品线和市场占有率。随着越来越多的消费者为其PC添加具有个性特色的且功能强劲的外设并通过无线桌面获得更多的使用自由，在目前的消费趋势下大大推动了罗技产品多样化和全面化的进程。消费者们还购买为诸如游戏、多媒体或网上视听交流等新的运用或特定目的而设计的辅助设备。此外罗技零售业务涉及的范围远不止基于PC平台个人的周边设备，更包括比如游戏机、便携式音乐播放器、移动电话和家庭娱乐系统等等。','200','<p>罗技持续在零售领域扩展产品线和市场占有率。随着越来越多的消费者为其PC添加具有个性特色的且功能强劲的外设并通过无线桌面获得更多的使用自由，在目前的消费趋势下大大推动了罗技产品多样化和全面化的进程。消费者们还购买为诸如游戏、多媒体或网上视听交流等新的运用或特定目的而设计的辅助设备。此外罗技零售业务涉及的范围远不止基于PC平台个人的周边设备，更包括比如游戏机、便携式音乐播放器、移动电话和家庭娱乐系统等等。</p>\r\n<p>　　如今，罗技的零售业务占收入的88.4%。除了充分发挥其自有的设计和制造优势外，罗技还通过战略购并及结盟其他业界领先厂商，为给消费者提供更多的优秀产品。</p>\r\n<p>　　罗技深信以下战略发展方向将为公司带来持续的业务增长：</p>\r\n<p>　　&middot;拓宽电脑周边产品线：罗技已经超越了台式电脑定位设备提供商的传统角色，成为网络摄像机、键盘、PC音响产品、游戏控制器、数码笔和高级通用遥控器的领先品牌。</p>\r\n<p>　　&middot;从桌面转入起居室：如今，越来越多的消费者在通过高级音响、多媒体设备和游戏机来享受数字娱乐生活。罗技已为PlayStation&reg; 2游戏机和微软Xbox提供多款设备。罗技还为消费者的起居生活设计了一系列产品，包括流媒体音乐解决方案和通用遥控设备。</p>\r\n<p>　　&middot; 为行动中的人们提供个人周边设备：为了满足移动市场的需求，罗技在不同的平台上提供了多种产品。罗技为笔记本用户提供了无线或有线的鼠标以及便携式网络摄像头。为手机用户提供使用舒适的无线或者有线耳机，而对于那些习惯在旅程中享受娱乐的人们来说，罗技提供了一系列PSP的个人周边设备并将很快为iPod 和其他MP3播放器提供各种产品。罗技还提供一种新的数字化输入系统 该系统把人对笔和纸的的熟悉度以及个人电脑数字世界的力量完美结合了起来。</p>\r\n<p>&nbsp;</p>','0','0','0','','0','0','','','360','','0','','','0','a:5:{i:1;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223330863906.jpg\";s:3:\"alt\";s:0:\"\";}i:2;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223330952057.jpg\";s:3:\"alt\";s:0:\"\";}i:3;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223331282027.jpg\";s:3:\"alt\";s:0:\"\";}i:4;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223331408657.jpg\";s:3:\"alt\";s:0:\"\";}i:5;a:2:{s:3:\"url\";s:39:\"/upload/images/201111/1322333133274.jpg\";s:3:\"alt\";s:0:\"\";}}','','82','116','124','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('11','8','2','内容五','','cmseasy','127','0','','0','0','','0','','','','','3105','2011-11-27 03:31:19','cmseasy','','/upload/images/201304/3105.jpg','1','1','罗技持续在零售领域扩展产品线和市场占有率。随着越来越多的消费者为其PC添加具有个性特色的且功能强劲的外设并通过无线桌面获得更多的使用自由，在目前的消费趋势下大大推动了罗技产品多样化和全面化的进程。消费者们还购买为诸如游戏、多媒体或网上视听交流等新的运用或特定目的而设计的辅助设备。此外罗技零售业务涉及的范围远不止基于PC平台个人的周边设备，更包括比如游戏机、便携式音乐播放器、移动电话和家庭娱乐系统等等。','200','<p>罗技持续在零售领域扩展产品线和市场占有率。随着越来越多的消费者为其PC添加具有个性特色的且功能强劲的外设并通过无线桌面获得更多的使用自由，在目前的消费趋势下大大推动了罗技产品多样化和全面化的进程。消费者们还购买为诸如游戏、多媒体或网上视听交流等新的运用或特定目的而设计的辅助设备。此外罗技零售业务涉及的范围远不止基于PC平台个人的周边设备，更包括比如游戏机、便携式音乐播放器、移动电话和家庭娱乐系统等等。</p>\r\n<p>　　如今，罗技的零售业务占收入的88.4%。除了充分发挥其自有的设计和制造优势外，罗技还通过战略购并及结盟其他业界领先厂商，为给消费者提供更多的优秀产品。</p>\r\n<p>　　罗技深信以下战略发展方向将为公司带来持续的业务增长：</p>\r\n<p>　　&middot;拓宽电脑周边产品线：罗技已经超越了台式电脑定位设备提供商的传统角色，成为网络摄像机、键盘、PC音响产品、游戏控制器、数码笔和高级通用遥控器的领先品牌。</p>\r\n<p>　　&middot;从桌面转入起居室：如今，越来越多的消费者在通过高级音响、多媒体设备和游戏机来享受数字娱乐生活。罗技已为PlayStation&reg; 2游戏机和微软Xbox提供多款设备。罗技还为消费者的起居生活设计了一系列产品，包括流媒体音乐解决方案和通用遥控设备。</p>\r\n<p>　　&middot; 为行动中的人们提供个人周边设备：为了满足移动市场的需求，罗技在不同的平台上提供了多种产品。罗技为笔记本用户提供了无线或有线的鼠标以及便携式网络摄像头。为手机用户提供使用舒适的无线或者有线耳机，而对于那些习惯在旅程中享受娱乐的人们来说，罗技提供了一系列PSP的个人周边设备并将很快为iPod 和其他MP3播放器提供各种产品。罗技还提供一种新的数字化输入系统 该系统把人对笔和纸的的熟悉度以及个人电脑数字世界的力量完美结合了起来。</p>\r\n<p>&nbsp;</p>','0','0','0','','0','0','','','520','','0','','','0','a:4:{i:1;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223331569197.jpg\";s:3:\"alt\";s:0:\"\";}i:2;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223332476952.jpg\";s:3:\"alt\";s:0:\"\";}i:3;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223332905428.jpg\";s:3:\"alt\";s:0:\"\";}i:4;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223332814555.jpg\";s:3:\"alt\";s:0:\"\";}}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('12','8','2','内容六','','cmseasy','127','2','','0','0','','0','','','','','3106','2011-11-27 03:31:11','cmseasy','','/upload/images/201304/3106.jpg','1','1','罗技持续在零售领域扩展产品线和市场占有率。随着越来越多的消费者为其PC添加具有个性特色的且功能强劲的外设并通过无线桌面获得更多的使用自由，在目前的消费趋势下大大推动了罗技产品多样化和全面化的进程。消费者们还购买为诸如游戏、多媒体或网上视听交流等新的运用或特定目的而设计的辅助设备。此外罗技零售业务涉及的范围远不止基于PC平台个人的周边设备，更包括比如游戏机、便携式音乐播放器、移动电话和家庭娱乐系统等等。','200','<p>罗技持续在零售领域扩展产品线和市场占有率。随着越来越多的消费者为其PC添加具有个性特色的且功能强劲的外设并通过无线桌面获得更多的使用自由，在目前的消费趋势下大大推动了罗技产品多样化和全面化的进程。消费者们还购买为诸如游戏、多媒体或网上视听交流等新的运用或特定目的而设计的辅助设备。此外罗技零售业务涉及的范围远不止基于PC平台个人的周边设备，更包括比如游戏机、便携式音乐播放器、移动电话和家庭娱乐系统等等。</p>\r\n<p>　　如今，罗技的零售业务占收入的88.4%。除了充分发挥其自有的设计和制造优势外，罗技还通过战略购并及结盟其他业界领先厂商，为给消费者提供更多的优秀产品。</p>\r\n<p>　　罗技深信以下战略发展方向将为公司带来持续的业务增长：</p>\r\n<p>　　&middot;拓宽电脑周边产品线：罗技已经超越了台式电脑定位设备提供商的传统角色，成为网络摄像机、键盘、PC音响产品、游戏控制器、数码笔和高级通用遥控器的领先品牌。</p>\r\n<p>　　&middot;从桌面转入起居室：如今，越来越多的消费者在通过高级音响、多媒体设备和游戏机来享受数字娱乐生活。罗技已为PlayStation&reg; 2游戏机和微软Xbox提供多款设备。罗技还为消费者的起居生活设计了一系列产品，包括流媒体音乐解决方案和通用遥控设备。</p>\r\n<p>　　&middot; 为行动中的人们提供个人周边设备：为了满足移动市场的需求，罗技在不同的平台上提供了多种产品。罗技为笔记本用户提供了无线或有线的鼠标以及便携式网络摄像头。为手机用户提供使用舒适的无线或者有线耳机，而对于那些习惯在旅程中享受娱乐的人们来说，罗技提供了一系列PSP的个人周边设备并将很快为iPod 和其他MP3播放器提供各种产品。罗技还提供一种新的数字化输入系统 该系统把人对笔和纸的的熟悉度以及个人电脑数字世界的力量完美结合了起来。</p>\r\n<p>&nbsp;</p>','0','0','0','','0','0','','','650','','0','','','0','a:4:{i:1;a:2:{s:3:\"url\";s:39:\"/upload/images/201111/1322333614653.jpg\";s:3:\"alt\";s:0:\"\";}i:2;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223336081776.jpg\";s:3:\"alt\";s:0:\"\";}i:3;a:2:{s:3:\"url\";s:39:\"/upload/images/201111/1322333626268.jpg\";s:3:\"alt\";s:0:\"\";}i:4;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223336022154.jpg\";s:3:\"alt\";s:0:\"\";}}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('25','6','0','下载一','','cmseasy','1','23','','0','0','','0','','','','','6001','2012-08-04 10:06:09','cmseasy','','/upload/images/201304/6001.jpg','1','1',' 下载说明\r\n\r\n将压缩包解压到D盘根目录的一个英文文件夹里面，然后双击setup.cmd开始安装；\r\n \r\n里面所有选项，均选择推荐版本；\r\n \r\n安装时，提示设置mysql管理用户的密码，推荐输入root，和管理员用户名一致，方便记忆；\r\n \r\n设置密码后，会继续安装，这时将提示是否解除防火墙阻止，选择解除阻止；\r\n \r\n然后继续安装，安装后，进入cmseasy安装界面；\r\n \r\ncmseasy安装，参考http://chm.cmseasy.cn/cmseasyinstall_1.html；','0','<p>&nbsp;下载说明</p>\r\n<div>将压缩包解压到D盘根目录的一个英文文件夹里面，然后双击setup.cmd开始安装；</div>\r\n<div>&nbsp;</div>\r\n<div>里面所有选项，均选择推荐版本；</div>\r\n<div>&nbsp;</div>\r\n<div>安装时，提示设置mysql管理用户的密码，推荐输入root，和管理员用户名一致，方便记忆；</div>\r\n<div>&nbsp;</div>\r\n<div>设置密码后，会继续安装，这时将提示是否解除防火墙阻止，选择解除阻止；</div>\r\n<div>&nbsp;</div>\r\n<div>然后继续安装，安装后，进入cmseasy安装界面；</div>\r\n<div>&nbsp;</div>\r\n<div>cmseasy安装，参考http://chm.cmseasy.cn/cmseasyinstall_1.html；</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','10 KB','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('13','8','2','内容七','','cmseasy','127','0','','0','0','','0','','','','','3107','2011-11-27 03:31:02','cmseasy','','/upload/images/201304/3107.jpg','1','1','二十年来,瑞士外设厂商罗技凭着出色的设计和优秀的品质受无数用户的喜爱，从MX300到大革命、G19，罗技旗下很多外设产品都为用户留下了深刻的印象。2011年8月30日，罗技召开了新品发布会，推出了多款外设新品，其中型号为G105背光游戏键盘，是罗技目前价格最低的背光游戏键盘。','200','<p>二十年来,瑞士外设厂商罗技凭着出色的设计和优秀的品质受无数用户的喜爱，从MX300到大革命、G19，罗技旗下很多外设产品都为用户留下了深刻的印象。2011年8月30日，罗技召开了新品发布会，推出了多款外设新品，其中型号为G105背光游戏键盘，是罗技目前价格最低的背光游戏键盘。</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; 作为一款面入入门级游戏玩家推出的产品，罗技G105背光游戏键盘的官方零售价格只有299元。市场定位低于G110的G105键盘，是否会是一款严重缩水的产品，定位于入门级的它是否依旧可以为游戏玩家带来丰富的使用体验，下面就让我们一起来看。</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; 罗技G105背光游戏键盘采用极富罗技特色的黑绿两色包装外观，键盘包装采用瓦楞纸板制作。包装采用瓦楞纸板制作，可以对内部的键盘起到一定的保护作用。包装正面印有罗技G105背光游戏键盘产品展示图和产品名称，背面印有键盘的6大设计特点。</p>\r\n<p>&nbsp;</p>','0','0','0','','0','0','','','320','','0','','','0','a:3:{i:1;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223337593193.jpg\";s:3:\"alt\";s:0:\"\";}i:2;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223337491171.jpg\";s:3:\"alt\";s:0:\"\";}i:3;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223337435191.jpg\";s:3:\"alt\";s:0:\"\";}}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('14','8','2','内容八','','cmseasy','127','0','','0','0','','0','','','','','3108','2011-11-27 03:30:32','cmseasy','','/upload/images/201304/3108.jpg','1','1','用CX 200 Street II提升你的街头风格指数吧。 此款时尚的耳机以创新的外壳形状为特点，方便用手指调整，使佩戴更舒适。得益于很高的被动式环境噪声阻抑和强力的低音，CX Street II 是你在小巷里或人行道上的绝佳伙伴。创新的方便手指调整的外形让佩戴更轻松、更舒适（附带不同尺码的耳垫） 强力、低音驱动的立体声 很高的被动式环境噪声阻抑 为MP3播放器、iPod、iPhone、CD播放器和便携游戏机优化设计（iPod和iPhone是Apple公司在美国和其它国家注册了的商标） 对称（等长）的耳机线 2年质保','200','<p><strong>森海塞尔CX200概述</strong></p>\r\n<p>　　用CX 200 Street II提升你的街头风格指数吧。 此款时尚的耳机以创新的外壳形状为特点，方便用手指调整，使佩戴更舒适。得益于很高的被动式环境噪声阻抑和强力的低音，CX Street II 是你在小巷里或人行道上的绝佳伙伴。</p>\r\n<p>　　<strong>特点</strong></p>\r\n<p>　　创新的方便手指调整的外形让佩戴更轻松、更舒适（附带不同尺码的耳垫） 强力、低音驱动的立体声 很高的被动式环境噪声阻抑 为MP3播放器、iPod、iPhone、CD播放器和便携游戏机优化设计（iPod和iPhone是Apple公司在美国和其它国家注册了的商标） 对称（等长）的耳机线 2年质保</p>\r\n<p>　　<strong>包装内含</strong></p>\r\n<p>　　CX 200 Street II 耳塞 耳垫套装（小/中/大） 其它颜色</p>\r\n<p>　　CX 200 Street II 白色</p>\r\n<p>　　<strong>技术参数</strong></p>\r\n<p>　　型号 CX 200 STREET II</p>\r\n<p>　　佩戴方式 入耳式</p>\r\n<p>　　主要用途 随身听</p>\r\n<p>　　换能原理 动圈式</p>\r\n<p>　　频率响应 20Hz-20KHz</p>\r\n<p>　　阻抗 16欧</p>\r\n<p>　　灵敏度 110dB(1kHz/1Vrms)</p>\r\n<p>　　颜色：灰色、白色</p>\r\n<p>　　支持：CD、DVD、iPod、iPhone</p>\r\n<p>　　总谐波失真：<0.2%</p>\r\n<p>　　声压（SPL）：110 dB (1kHz/1Vrms)</p>\r\n<p>　　插头 3.5mm (弯插)</p>\r\n<p>　　电缆 1.2m</p>\r\n<p>　　重量 5g</p>\r\n<p>　　<strong>主要参数</strong></p>\r\n<p>　　方便手指调整的创新外形让佩戴更轻松,更舒适(附带不同尺码的耳垫)/强力,低音驱动的立体声/很高的被动式环境噪声阻抑/为MP3播放器,iPod,iPhone,CD播放器和便携游戏机优化设计(iPod和iPhone是Apple公司在美国和其它国家注册了的商标)/对称(等长)的耳机线/2年质保[1]</p>\r\n<div>&nbsp;</div>\r\n<p>&nbsp;</p>','0','0','0','','0','0','','','200','','0','','','0','a:3:{i:1;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223339078017.jpg\";s:3:\"alt\";s:0:\"\";}i:2;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223339219891.jpg\";s:3:\"alt\";s:0:\"\";}i:3;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223339328968.jpg\";s:3:\"alt\";s:0:\"\";}}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('15','8','1','葡萄酒','','cmseasy','127','514','','0','0','','1','','','','','3101','2011-11-27 03:37:10','cmseasy','','/upload/images/201304/3101.jpg','1','1','古代的波斯是古文明发源地之一。多数历史学家都认为波斯可能是世界上最早酿造葡萄酒的国家。\r\n\r\n随着古代的战争和商业活动，葡萄酒酿造的方法传遍了以色列、叙利亚、小亚细亚阿拉伯国家。由于阿拉伯国家信奉伊斯兰教，而伊斯兰教提倡禁酒律，因而阿拉伯国家的酿酒行业日渐衰萎，几乎被禁绝了。后来葡萄酒酿造的方法从波斯、埃及传到希腊[1]  、罗马、高卢（即法国）。然后，葡萄酒的酿造技术和消费习惯由希腊、意大利和法国传到欧洲各国。由于欧洲人信奉基督教，基督教徒把面包和葡萄酒称为上帝的肉和血，把葡萄酒视为生命中不可缺少的饮料酒，所以葡萄酒在欧洲国家就发展起来，因此法国、意大利、西班牙成为当今世界葡萄酒的“湖泊”，欧洲国家也是当今世界人均消费葡萄酒最多的国家。欧洲国家葡萄酒的产量，占世界葡萄酒总产量的80%以上。此外还有一说为葡萄酒起源于希腊，在此就不赘述了。\r\n传说古代有一位波斯国王，爱吃葡萄，曾将葡萄压紧保藏在一个大陶罐里，标着“有毒”，防人偷吃。等到数天以后，国王妻妾群中有一个妃子对生活发生了厌倦，擅自饮用了标明“有毒”的陶罐内的葡萄酿成的饮料，滋味非常美好，非但没结束自己的生命，反而异常兴奋，这个妃子又对生活充满了信心。她盛了一杯专门呈送给国王，国王饮后也十分欣赏。自此以后，国王颁布了命令，专门收藏成熟的葡萄，压紧盛在容器内进行发酵，以便得到葡萄酒。\r\n','200','<p>古代的波斯是古文明发源地之一。多数历史学家都认为波斯可能是世界上最早酿造葡萄酒的国家。<br/></p><p></p><p></p><p><br/></p><p>随着古代的战争和商业活动，葡萄酒酿造的方法传遍了以色列、叙利亚、小亚细亚阿拉伯国家。由于阿拉伯国家信奉伊斯兰教，而伊斯兰教提倡禁酒律，因而阿拉伯国家的酿酒行业日渐衰萎，几乎被禁绝了。后来葡萄酒酿造的方法从波斯、埃及传到希腊[1]&nbsp;&nbsp;、罗马、高卢（即法国）。然后，葡萄酒的酿造技术和消费习惯由希腊、意大利和法国传到欧洲各国。由于欧洲人信奉基督教，基督教徒把面包和葡萄酒称为上帝的肉和血，把葡萄酒视为生命中不可缺少的饮料酒，所以葡萄酒在欧洲国家就发展起来，因此法国、意大利、西班牙成为当今世界葡萄酒的“湖泊”，欧洲国家也是当今世界人均消费葡萄酒最多的国家。欧洲国家葡萄酒的产量，占世界葡萄酒总产量的80%以上。此外还有一说为葡萄酒起源于希腊，在此就不赘述了。</p><p></p><p>传说古代有一位波斯国王，爱吃葡萄，曾将葡萄压紧保藏在一个大陶罐里，标着“有毒”，防人偷吃。等到数天以后，国王妻妾群中有一个妃子对生活发生了厌倦，擅自饮用了标明“有毒”的陶罐内的葡萄酿成的饮料，滋味非常美好，非但没结束自己的生命，反而异常兴奋，这个妃子又对生活充满了信心。她盛了一杯专门呈送给国王，国王饮后也十分欣赏。自此以后，国王颁布了命令，专门收藏成熟的葡萄，压紧盛在容器内进行发酵，以便得到葡萄酒。</p><p></p><p><br/></p><p>在考古研究中，在欧洲保加利亚的古人遗迹中发现，大约在公元前3000至6000年，已开始以葡萄汁液进行酿酒，而古代诗人荷马亦在其Iliad及Odyssey两本著作中也提到色雷斯人（保加利亚的古人）的优良酿酒技术。所以有很多人认为保加利亚是葡萄酒的发源地。</p><p></p><p><br/></p><p>国际葡萄与葡萄酒组织（OIV）是葡萄和以葡萄为基础的产品领域里的政府间科技组织，它根据1924年11月29日建立国际葡萄酒组织的国际协议而创立。根据成员国的决定，国际葡萄酒组织从1958年4月起使用“国际葡萄与葡萄酒组织”这个名称。</p><p>OIV有47个成员国：摩尔多瓦、阿尔及利亚、阿根廷、澳大利亚、奥地利、比利时、玻利维亚、巴西、保加利亚、智利、克罗地亚、塞浦路斯、捷克共和国、丹麦、芬兰、法国、格鲁吉亚、德国、希腊、匈牙利、以色列、意大利、黎巴嫩、卢森堡、马耳他、马其顿、墨西哥、摩尔多瓦、摩洛哥、荷兰、新西兰、挪威、秘鲁、葡萄牙、罗马尼亚、俄罗斯联邦、斯洛伐克、斯洛文尼亚、南非、西班牙、瑞典、瑞士、突尼斯、土耳其、英国、乌克兰、乌拉圭、南斯拉夫联邦共和国。</p><p>OIV还包括以下观察员（国家）：爱尔兰；地区或省：魁北克（加拿大）</p><p></p><p><br/></p><p>一九一五年，张弼士率领“中国实业考察团”赴美国考察，适逢旧金山各界盛会，庆祝巴拿马运河开通，举办国际商品大赛。张就把随身携带的“可雅白兰地”、“玫瑰香红葡萄酒”、“琼瑶浆”等送去展览和评比，均获得优胜。后来，“可雅白兰地”改为“金奖白兰地”，一直沿用。<br/></p><p>法国卡尔卡纽</p><p><br/></p><p>《史记·大宛列传》：西汉建元三年（公元前138年）张骞奉汉武帝之命，出使西域，看到“宛左右以葡萄为酒，富人藏酒万余石，久者数十岁不败”。随后，“汉使取其实来，于是天子始种苜蓿、蒲陶，肥浇地……”可知西汉中期，中原地区的农民已得知葡萄可以酿酒，并将欧亚种葡萄引进中原了。他们在引进葡萄的同时，还招来了酿酒艺人，自西汉始，中国有了西方制法的葡萄酒人。三国时期的魏文帝曹丕说过：“且说葡萄，醉酒宿醒。掩露而食；甘而不捐，脆而不辞，冷而不寒，味长汁多，除烦解渴。又酿以为酒，甘于曲糜，善醉而易醒……”，这已对葡萄和葡萄酒的特性认识得非常清楚了。只是葡萄酒仅限于在贵族中饮用，平民百姓是绝无此口福的。</p><p>唐朝贞观十四年（公元640年），唐太宗[2]&nbsp;&nbsp;命交河道行军大总管侯君集率兵平定高昌。高昌历来盛产葡萄，在南北朝时，就向梁朝进贡葡萄。《班府元龟 卷970》记载“及破高昌收马乳蒲桃，实於苑中种之，并得其酒法，帝自损益造酒成，凡有八色，芳辛酷烈，既颁赐群臣，京师始识其味”。即唐朝破了高昌国后，收集到马乳葡萄放到院中，并且得到了酿酒的技术，唐太宗把技术资料作了修改后酿出了芳香酷烈的葡萄酒，和大臣们共同品尝。这是史书第一次明确记载内地用西域传来的方法酿造葡萄酒的档案，长安城东至曲江一带，俱有胡姬侍酒之肆，出售西域特产葡萄酒。</p><p><br/></p>','0','0','0','','0','0','','','1650','','0','','','0','a:8:{i:1;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3101-1.jpg\";s:3:\"alt\";s:0:\"\";}i:2;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3101-2.jpg\";s:3:\"alt\";s:0:\"\";}i:3;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3101-3.jpg\";s:3:\"alt\";s:0:\"\";}i:4;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3101-4.jpg\";s:3:\"alt\";s:0:\"\";}i:5;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3101-5.jpg\";s:3:\"alt\";s:0:\"\";}i:6;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3101-6.jpg\";s:3:\"alt\";s:0:\"\";}i:7;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3101-7.jpg\";s:3:\"alt\";s:0:\"\";}i:8;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3101-8.jpg\";s:3:\"alt\";s:0:\"\";}}','','82','116','124','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('16','10','1','内容九','','cmseasy','127','3','','0','0','','0','','','','','3201','2011-11-27 03:30:22','cmseasy','','/upload/images/201304/3201.jpg','1','1','苹果MacBook Air(MC968CH/A)笔记本配备了最新的酷睿i5处理器以及高速度的SSD固态硬盘，对于有移动办公需求并且注重外观设计的朋友来说是个不错的选择。目前，这款笔记本售价稳定仅为6298元，喜欢的朋友可以考虑一下。\r\n\r\n    外观方面，苹果MacBook Air(MC968CH/A)依然是经典的白色外观，1280×800 的分辨率搭配13.3英寸的显示器，使其能够满足大多数用户的视觉需求，而其拥有耐用的无缝一体成型机身，圆润的轮廓让你可以轻松将它取出或放入包袋。坚固的聚碳酸酯外壳足以应对在学校、工作或旅途等日常生活中的碰撞和颠簸，电源线通过磁性固定到位，万一有人绊到线缆，它能够干净利落地断开，从而让您的MacBook安然无恙。','200','<p>苹果MacBook Air(MC968CH/A)笔记本配备了最新的酷睿i5处理器以及高速度的SSD固态硬盘，对于有移动办公需求并且注重外观设计的朋友来说是个不错的选择。目前，这款笔记本售价稳定仅为6298元，喜欢的朋友可以考虑一下。</p>\r\n<p>&nbsp; &nbsp; 外观方面，苹果MacBook Air(MC968CH/A)依然是经典的白色外观，1280&times;800 的分辨率搭配13.3英寸的显示器，使其能够满足大多数用户的视觉需求，而其拥有耐用的无缝一体成型机身，圆润的轮廓让你可以轻松将它取出或放入包袋。坚固的聚碳酸酯外壳足以应对在学校、工作或旅途等日常生活中的碰撞和颠簸，电源线通过磁性固定到位，万一有人绊到线缆，它能够干净利落地断开，从而让您的MacBook安然无恙。</p>\r\n<p>苹果 MacBook Air（MC968CH/A）</p>\r\n<p>&nbsp; &nbsp; 配置方面，苹果MacBook Air(MC968CH/A)笔记本拥有一颗英特尔酷睿i5-2467M处理器，2GB DDR3内存，64GB固态硬盘，吸入式DVD刻录光驱，英特尔HD 3000核芯显卡，AirPort Extreme Wi-Fi无线网卡，机身拥有2个USB 2.0接口，RJ45以及DVI视频输出等接口，预装Mac OS X 10.7 Lion操作系统。</p>\r\n<p>&nbsp;</p>\r\n<p>苹果 MacBook Air（MC968CH/A）</p>\r\n<p>处理器型号<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Intel 酷睿i5 2467M</p>\r\n<p>硬盘容量<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>64GB SSD固态硬盘</p>\r\n<p>显卡芯片<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Intel HD 3000</p>\r\n<p>屏幕尺寸<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>11.6英寸</p>\r\n<p>笔记本重量<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>1080g</p>\r\n<p>电池类型<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>锂电池</p>\r\n<p>操作系统<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Mac OS X 10.7 Lion</p>\r\n<p>>>点击查看详细配置<<</p>\r\n<p>&nbsp; &nbsp; 编辑点评： &nbsp;</p>\r\n<p>&nbsp; &nbsp; 这款苹果 MacBook Air（MC968CH/A）笔记本可谓内外兼备，时尚的设计，良好的处理能力以及极致轻薄便携的性能。对于经常需要移动办公的商务人士，追赶时尚潮流的时尚达人和希望体验全新电脑操作理念的朋友来说，都是不错的选择。目前的报价仅为6298元。感兴趣的朋友多多关注。</p>\r\n<p>&nbsp;</p>','0','0','0','','0','0','','','6298','','0','','','0','a:5:{i:1;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223342498278.jpg\";s:3:\"alt\";s:0:\"\";}i:2;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223342463343.jpg\";s:3:\"alt\";s:0:\"\";}i:3;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223342428847.jpg\";s:3:\"alt\";s:0:\"\";}i:4;a:2:{s:3:\"url\";s:39:\"/upload/images/201111/1322334239093.jpg\";s:3:\"alt\";s:0:\"\";}i:5;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223342235644.jpg\";s:3:\"alt\";s:0:\"\";}}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('17','10','1','内容十','','cmseasy','127','0','','0','0','','0','','','','','3202','2011-11-27 03:30:14','cmseasy','','/upload/images/201304/3202.jpg','1','1','近日笔者的一位好友拿着前不久刚买的单反相机找到我诉苦，说是自己新买的相机出现了问题，明明插入了一张能装下800张照片的8G卡，结果只拍了160多张照片，就提示存储空间已满！并且在电脑上查看存储卡时还发现，存储卡里面出现了好多没用的“垃圾文件”。相机也能产生垃圾文件？这个说法笔者还是第一次听说。笔者在帮这位朋友详细检查了相机的设置后发现，原来他在无意中开启了RAW+JEPG的记录方式，难怪卡里会出现好多打不开的文件。鉴于有很多新手玩家RAW格式的文件都不太熟悉，笔者借此机会详细的给大家讲解下RAW格式的使用方法。','200','<p>近日笔者的一位好友拿着前不久刚买的单反相机找到我诉苦，说是自己新买的相机出现了问题，明明插入了一张能装下800张照片的8G卡，结果只拍了160多张照片，就提示存储空间已满！并且在电脑上查看存储卡时还发现，存储卡里面出现了好多没用的&ldquo;垃圾文件&rdquo;。相机也能产生垃圾文件？这个说法笔者还是第一次听说。笔者在帮这位朋友详细检查了相机的设置后发现，原来他在无意中开启了RAW+JEPG的记录方式，难怪卡里会出现好多打不开的文件。鉴于有很多新手玩家RAW格式的文件都不太熟悉，笔者借此机会详细的给大家讲解下RAW格式的使用方法。</p>\r\n<p>&middot;RAW到底是什么格式？</p>\r\n<p>　　在目前所有的单反相机中都有选择照片格式的这么一个选项，很多新手玩家在购买相机后都将其常年设置在JEPG选项上，对RAW格式并不是很了解。RAW单从字面上解释为&ldquo;未经加工的&rdquo;，我们可以将其理解为在数码相机内部没有进行任何处理的图像数据，它反映的是从影像传感器中得到的最原始的信息，可以说是真正意义上的数字底片。</p>\r\n<p>RAW格式图像没有进过相机的任何处理</p>\r\n<p>　　需要注意的是，我们将照片设置为RAW格式后所拍摄图像文件的后缀名并不一定是xxx.RAW，RAW只是这类未经加工图像的统称。各家相机厂商会采用不同的编码方式来记录RAW数据，所以相应的后缀名也不同。</p>\r\n<p>各家厂商都有自己的RAW格式后缀名</p>\r\n<p>　　通过上面的阅读，我们已经大致的了解了RAW格式图像是什么。那么它和JEPG格式的照片有哪些区别呢？它又有哪些优点和缺点？我们应该怎样处理和使用RAW格式的照片？在使用RAW格式拍照时又需要有哪些需要注意的地方？别着急，下面我会为大家详细讲述。</p>\r\n<p>&nbsp;</p>','0','0','0','','0','0','','','2890','','0','','','0','a:5:{i:1;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223346238903.jpg\";s:3:\"alt\";s:0:\"\";}i:2;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223346177095.jpg\";s:3:\"alt\";s:0:\"\";}i:3;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223346351077.jpg\";s:3:\"alt\";s:0:\"\";}i:4;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223346306073.jpg\";s:3:\"alt\";s:0:\"\";}i:5;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223346272965.jpg\";s:3:\"alt\";s:0:\"\";}}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('18','8','2','内容二','','cmseasy','127','32','','0','0','','1','','','','','3102','2011-11-27 03:32:03','cmseasy','','/upload/images/201304/3102.jpg','1','1','易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。\r\n\r\n九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。','200','<p>易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。</p>\r\n<p>九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。</p>\r\n<p>主体功能列表如下：</p>\r\n<p>支持生成html，支持google和百度地图生成、自定义标题、自定义关键词、自定义描述、伪静态等符合SEO最佳标准的功能；</p>\r\n<p>支持缓存功能，全面提升网站运行速度；</p>\r\n<p>支持自定义模板，拥有特有的模板标签，留有全面的个性化设计空间；</p>\r\n<p>支持图片增加水印，支持水印位置和自定义水印图片等；</p>\r\n<p>支持附件大小控制；支持敏感词过滤；</p>\r\n<p>支持邮件多种模式的群发；内置cnzz全景统计；</p>\r\n<p>支持无限极栏目；支持内容绑定分类；</p>\r\n<p>支持栏目，分类是否启用开关；</p>\r\n<p>支持外部跳转链接控制；</p>\r\n<p>支持分组浏览权限；支持用户组，支持自定义用户字段；</p>\r\n<p>支持内容自定义字段；</p>\r\n<p>支持专题发布；</p>\r\n<p>支持URL自定义；</p>\r\n<p>支持自定义表单；</p>\r\n<p>拥有投票、评论、公告、留言板、友情链接等常用模块；</p>\r\n<p>支持自定义标签，拥有模板助手功能；</p>\r\n<p>拥有地区功能；</p>\r\n<p>中文标签调用内容列表；</p>\r\n<p>中文标签调用图片内容列表；</p>\r\n<p>中文标签调用栏目列表；</p>\r\n<p>拥有商品购物车；</p>\r\n<p>拥有在线订单功能；</p>\r\n<p>拥有物流配货功能；</p>\r\n<p>拥有独创的企业推广联盟模块；</p>\r\n<p>&nbsp;</p>','archive/show_pic.html','0','0','','0','0','','','500','','0','','','0','a:8:{i:1;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3102-1.jpg\";s:3:\"alt\";s:0:\"\";}i:2;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3102-2.jpg\";s:3:\"alt\";s:0:\"\";}i:3;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3102-3.jpg\";s:3:\"alt\";s:0:\"\";}i:4;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3102-4.jpg\";s:3:\"alt\";s:0:\"\";}i:5;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3102-5.jpg\";s:3:\"alt\";s:0:\"\";}i:6;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3102-6.jpg\";s:3:\"alt\";s:0:\"\";}i:7;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3102-7.jpg\";s:3:\"alt\";s:0:\"\";}i:8;a:2:{s:3:\"url\";s:37:\"/upload/images/201304/duotu3102-8.jpg\";s:3:\"alt\";s:0:\"\";}}','','82','116','124','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('19','10','0','内容十一','','cmseasy','127','0','','0','0','','0','','','','','3203','2011-11-27 02:19:39','cmseasy','','/upload/images/201304/3203.jpg','1','1','徕卡M9采用了全新的1800万像素全画幅，面积为24mmX36mm的感光元件。同时，M9能够支持徕卡所有M系列的镜头，可以说是目前世界上最小的全幅数码相机。徕卡M9机身尺寸为139×37×80mm(宽x深x 高)，重量为560克，机身采用了坚固的铝镁合金的金属支撑，机顶与底盖用整块的使用了实心铜锌合金制造，想必会带来不错的手感。 徕卡M9的快门速度为32秒到1／4000秒，也可以半级调整有B门曝光模式。而拍摄模式则设计了手动模式和光圈优先、以及快门优先三种，完全符合传统徕卡传统用家的习惯。\r\n\r\n ','200','<p>推荐理由：就是一个字&ldquo;贵&rdquo;，这个岁数开始享受生活，玩也要玩点特殊东西，徕卡M9顶级做工绝对奢华。</p>\r\n<p>　　徕卡M9采用了全新的1800万像素全画幅，面积为24mmX36mm的感光元件。同时，M9能够支持徕卡所有M系列的镜头，可以说是目前世界上最小的全幅数码相机。徕卡M9机身尺寸为139&times;37&times;80mm(宽x深x 高)，重量为560克，机身采用了坚固的铝镁合金的金属支撑，机顶与底盖用整块的使用了实心铜锌合金制造，想必会带来不错的手感。 徕卡M9的快门速度为32秒到1／4000秒，也可以半级调整有B门曝光模式。而拍摄模式则设计了手动模式和光圈优先、以及快门优先三种，完全符合传统徕卡传统用家的习惯。</p>\r\n<p>&nbsp;</p>','0','0','0','','0','0','','','40500','','0','','','0','a:4:{i:1;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223346177095.jpg\";s:3:\"alt\";s:0:\"\";}i:2;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223346238903.jpg\";s:3:\"alt\";s:0:\"\";}i:3;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223346306073.jpg\";s:3:\"alt\";s:0:\"\";}i:4;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223346272965.jpg\";s:3:\"alt\";s:0:\"\";}}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('24','8','1','内容四','','cmseasy','1','1','','0','0','','0','','','','','3104','2011-11-27 03:31:31','cmseasy','','/upload/images/201304/3104.jpg','1','1','iPhone 4，FaceTime将可视电话变为现实，通过 WLAN 连接两部 iPhone 4，只要轻轻一点，你就可以与地球另一端的人相视微笑；iPhone 4 的 Retina 显示屏是迄今最清晰、 最鲜活、分辨率最高的 iPhone 屏幕，像素数是之前 iPhone 的 4 倍。它开创了多任务处理的新模式。现在，你可以同时运行多个喜爱的第三方应用程序，并在它们之间迅速切换，却不会让前台应用程序变慢，或不必要地消耗过多电量。这种更智能的多任务处理方式仅在 iPhone 上提供。高清摄像，以高清格式拍摄你自己的影片...','0','<p>iPhone 4，FaceTime将可视电话变为现实，通过 WLAN 连接两部 iPhone 4，只要轻轻一点，你就可以与地球另一端的人相视微笑；iPhone 4 的 Retina 显示屏是迄今最清晰、 最鲜活、分辨率最高的 iPhone 屏幕，像素数是之前 iPhone 的 4 倍。它开创了多任务处理的新模式。现在，你可以同时运行多个喜爱的第三方应用程序，并在它们之间迅速切换，却不会让前台应用程序变慢，或不必要地消耗过多电量。这种更智能的多任务处理方式仅在 iPhone 上提供。高清摄像，以高清格式拍摄你自己的影片...</p>','0','0','0','','0','0','','','5620','','0','','','0','a:6:{i:1;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223310325929.jpg\";s:3:\"alt\";s:0:\"\";}i:2;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223310431244.jpg\";s:3:\"alt\";s:0:\"\";}i:3;a:2:{s:3:\"url\";s:39:\"/upload/images/201111/1322331246723.jpg\";s:3:\"alt\";s:0:\"\";}i:4;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223312412788.jpg\";s:3:\"alt\";s:0:\"\";}i:5;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223310486736.jpg\";s:3:\"alt\";s:0:\"\";}i:6;a:2:{s:3:\"url\";s:40:\"/upload/images/201111/13223312538947.jpg\";s:3:\"alt\";s:0:\"\";}}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('26','7','0','部门主管','','cmseasy','1','23','#000000','0','0','','0','','','','','7001','2012-08-04 10:06:32','cmseasy','','','1','1','职位详细说明','0','<p>&nbsp;职位详细说明</p>','0','','0','','0','0','','','','','0','','','0','a:0:{}','','0','0','0','0000-00-00','','销售部','1','热爱本职工作','2','1','至少2年销售经验','4','20-40','不限','5000-8000','董先生','0','','');--
INSERT INTO `cmseasy_archive` VALUES('27','10','0','内容十二','','admin','1','0','','0','0','','0','','','','','3204','2014-10-11 16:10:04','admin','','/upload/images/201304/3204.jpg','1','1','序言：标题里的标准化的需求其实是为了吸引大家的，它是不可能有标准化的，我们要追求标题个性化，但也可以做标准化的，因为很多的人不知道该怎么做。\r\n　　一、标题应该怎么做?\r\n　　怎么样来选择标题，标题要求很简单，他需要有几个特性，大的行业靠长尾关键词，小的行业靠目标关键词，而淘宝客严格意义来说是大的行业，这里说大指的是行业的受众。淘宝客可以做任何行业的受众，它是一个大的行业。同样旅游也是大的行业。而中小型企业点的行业就是小的行业。所以说目标和长尾是一个相对的概念。比如说云南旅游，它的受众很大，可以做目标词，而去云南旅游的注意事项就是长尾词，它是相对的。\r\n　　1、标题应该去找寻有转换率的而关注度较少的长尾词(竞争度非常少)\r\n　　所指的是目录页和内页，目录页可以寄居到一些大型站点下面，比如很多的企业去阿里巴巴开一个二级域名的店铺等。\r\n　　它是一个目录页或者是二级域名。现在有一个问题就是它没有流量，或者有流量没有转换率。而我们seo是要解决这个问题的。流量和转换率是由关键词产生的。关键词有转换率的很多，不能每个都做，大家都认为可以做的词，我们就不要去做的，商业竞争是非常残酷的。\r\n　　我们要选择的词就是大伙还没有发现或者有少数人发现的我们可以去竞争得过人家的词。怎么知道这个词有转换呢?这就一定要做关键词词库，词库就是我们知道有一些词有流量，这种词会大量存在的，而且有规律的，是可以进行推理和推导的，这个词库的统计是一个长期且漫长的过程，通过词库就可以淘汰很多的词。\r\n　　这里举个例子，比如一个做医药类网站，关键词和域名分别是：河南白癜風醫院http://www.goohz.com/bdfcs/\r\n　　，优化此类网站，首先就是有规律的更新一些白癜风原创文章，文章的标题很重要，它体现你这篇文章的中心内容，文章内容最好原创，再加上河南白癜风医院的关键词，而河南白癜风医院的密度就需要自己把握;其次就是去一些与白癜风相关的医药健康类网站发外链，比如BBS论坛、Blog博客和B2B分类信息平台，外链内容与白癜风相关，加上河南白癜风医院的锚链最好;最后就是一些友情链接的交换了，要知道，网站优化比不是一朝一夕的是，三天打鱼两天晒网是不可取的，站长们一定要勤劳才可以见效果的。\r\n　　2、大家的标题都是怎么做的?\r\n　　像上面这个站，可以用到相对论的，云南旅游的竞争是很激烈的，如果我们按照别人的道路来做，那肯定不行，那我们就先从冷门的词去做，去挖词，先对比那些能够赚钱又比较另类的群体，这个是不难找到的，因为做的好人能赚钱，但它的词比较另类，而如果我们要去做的话，那就到他的网站拿他的词进行推导，上面的这站目录它是可以继承到首页的权重的。我么可以在一下几个在同程网上的案例做参考：\r\n　　做得最好的就是最后一个(第四个)，\r\n　　相对来说，“昆明中国国际旅行社有限公司-云南最好的旅行社_昆明中国国际旅行社怎么样_去云南旅游要多少钱”这个标题比较聪明，做了长尾词，容易挣到钱，接到客户订单。我们要为用户提供针对性的内容，有针对性解决方案，如果大家都在做的，都已经挣钱的词，那么我们就不要去，我们已经没有竞争度了，我们要自己去挖掘更多的长尾关键词。','0','<div>序言：标题里的标准化的需求其实是为了吸引大家的，它是不可能有标准化的，我们要追求标题个性化，但也可以做标准化的，因为很多的人不知道该怎么做。</div>\r\n<div>　　一、标题应该怎么做?</div>\r\n<div>　　怎么样来选择标题，标题要求很简单，他需要有几个特性，大的行业靠长尾关键词，小的行业靠目标关键词，而淘宝客严格意义来说是大的行业，这里说大指的是行业的受众。淘宝客可以做任何行业的受众，它是一个大的行业。同样旅游也是大的行业。而中小型企业点的行业就是小的行业。所以说目标和长尾是一个相对的概念。比如说云南旅游，它的受众很大，可以做目标词，而去云南旅游的注意事项就是长尾词，它是相对的。</div>\r\n<div>　　1、标题应该去找寻有转换率的而关注度较少的长尾词(竞争度非常少)</div>\r\n<div>　　所指的是目录页和内页，目录页可以寄居到一些大型站点下面，比如很多的企业去阿里巴巴开一个二级域名的店铺等。</div>\r\n<div>　　它是一个目录页或者是二级域名。现在有一个问题就是它没有流量，或者有流量没有转换率。而我们seo是要解决这个问题的。流量和转换率是由关键词产生的。关键词有转换率的很多，不能每个都做，大家都认为可以做的词，我们就不要去做的，商业竞争是非常残酷的。</div>\r\n<div>　　我们要选择的词就是大伙还没有发现或者有少数人发现的我们可以去竞争得过人家的词。怎么知道这个词有转换呢?这就一定要做关键词词库，词库就是我们知道有一些词有流量，这种词会大量存在的，而且有规律的，是可以进行推理和推导的，这个词库的统计是一个长期且漫长的过程，通过词库就可以淘汰很多的词。</div>\r\n<div>　　这里举个例子，比如一个做医药类网站，关键词和域名分别是：河南白癜風醫院http://www.goohz.com/bdfcs/</div>\r\n<div>　　，优化此类网站，首先就是有规律的更新一些白癜风原创文章，文章的标题很重要，它体现你这篇文章的中心内容，文章内容最好原创，再加上河南白癜风医院的关键词，而河南白癜风医院的密度就需要自己把握;其次就是去一些与白癜风相关的医药健康类网站发外链，比如BBS论坛、Blog博客和B2B分类信息平台，外链内容与白癜风相关，加上河南白癜风医院的锚链最好;最后就是一些友情链接的交换了，要知道，网站优化比不是一朝一夕的是，三天打鱼两天晒网是不可取的，站长们一定要勤劳才可以见效果的。</div>\r\n<div>　　2、大家的标题都是怎么做的?</div>\r\n<div>　　像上面这个站，可以用到相对论的，云南旅游的竞争是很激烈的，如果我们按照别人的道路来做，那肯定不行，那我们就先从冷门的词去做，去挖词，先对比那些能够赚钱又比较另类的群体，这个是不难找到的，因为做的好人能赚钱，但它的词比较另类，而如果我们要去做的话，那就到他的网站拿他的词进行推导，上面的这站目录它是可以继承到首页的权重的。我么可以在一下几个在同程网上的案例做参考：</div>\r\n<div>　　做得最好的就是最后一个(第四个)，</div>\r\n<div>　　相对来说，&ldquo;昆明中国国际旅行社有限公司-云南最好的旅行社_昆明中国国际旅行社怎么样_去云南旅游要多少钱&rdquo;这个标题比较聪明，做了长尾词，容易挣到钱，接到客户订单。我们要为用户提供针对性的内容，有针对性解决方案，如果大家都在做的，都已经挣钱的词，那么我们就不要去，我们已经没有竞争度了，我们要自己去挖掘更多的长尾关键词。</div>\r\n<p>&nbsp;</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('28','10','0','内容十三','','admin','1','0','','0','0','','0','','','','','3205','2014-10-11 16:11:10','admin','','/upload/images/201304/3205.jpg','1','1','对于初涉网站建设的站长来说，很多时候对网站定位、网站seo和网站关键字等相关的概念没能很好的理解，导致网站上线以后等等这些方面都不是考虑得很全面，等到一边做站以后，每天都接触到这些东西以后才发现自己的网站根本就没有核心的关键字，或者说值得去优化的关键字，或者关键字面临非常大的竞争压力， 这其实在做站方面是很吃亏的。对于这些情况，笔者认为可以通过以下几个方面来加以解决，希望能给新手朋友们一些思考和建议。','0','<p>对于初涉网站建设的站长来说，很多时候对网站定位、网站seo和网站关键字等相关的概念没能很好的理解，导致网站上线以后等等这些方面都不是考虑得很全面，等到一边做站以后，每天都接触到这些东西以后才发现自己的网站根本就没有核心的关键字，或者说值得去优化的关键字，或者关键字面临非常大的竞争压力， 这其实在做站方面是很吃亏的。对于这些情况，笔者认为可以通过以下几个方面来加以解决，希望能给新手朋友们一些思考和建议。</p>\r\n<div>&nbsp;</div>\r\n<div>&nbsp; &nbsp; &nbsp; 一、重新定位，更换关键字。这种情况对于新手站长来说特别常见。关键字没有定位好的原因很简单，要么是站长对于要做的内容不是很清晰，再则就是没有在前期 做好仔细的调研工作，导致关键字定义不清楚导致网站没有核心的关键字。这种情况下最好的办法就是给网站做定位，根据定位重新来选择需要优化的关键字，对于新站来说，这种方法可以很好的减少损失，避免在以后再来更换关键字影响网站权重等因素来得有效率。</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>\r\n<div>&nbsp; &nbsp; &nbsp;二、加强内页的优化。我们说对于受众用户较窄，或者是建站时间不长的网站来说，通常必须要重新更换关键字；但对于受众较大，内容涵盖面较广的网站，并且有 一定的建站历史的网站来说，其实也是可以通过优化各个不同信息内容的栏目页来操作。这种方式很常见于门户、资讯较多的网站。大家知道搜索引擎对于网站的首页更新和变动是较为敏感的。但对于栏目页、二级页面甚至是专题页反应速度则没有那么快，而且变动之后不会对网站的权重、收录造成较大的影响，通常就可以及 时变更、优化这些栏目页的关键字。不过对于内页栏目的关键字变动通常见效不会那么快，但我们可以作为一个长期优化的点去实施，效果也是非常好的。</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>\r\n<div>&nbsp; &nbsp; &nbsp;三、做好网站内链。对于很多建站时间较长的网站来说，更换关键字或者关键字竞争非常大，网站内容杂多且主题不够具备特色的网站，一定要做好网站内链。因为根据长时间的积累，这类网站无论是首页还是内页通常都已经具备了一定的权重基础，这样在网站内部链接上下一些功夫，同样是可以弥补网站核心关键字定位不清 晰的缺失。</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>\r\n<div>&nbsp; &nbsp; &nbsp;四、优化长尾关键字。一般来讲，对于一些非商业性质的产品售卖或服务出售的网站来说，很少有花非常力气去专门优化长尾关键字，但对于新入门的新手站长来说，无法跟一些老手seoer去竞争相对热门的关键字，选择优化长尾关键字也是一个不错的选择。从技术层面来说，可以当作是一个学习和锻炼seo方法的机 会，同时也可以弥补一些网站主关键字优化的弊端。当然，长尾关键字优化得好，所带来的流量也是非常可观的。</div>\r\n<div>&nbsp; &nbsp; &nbsp;</div>\r\n<div>&nbsp; &nbsp; &nbsp;五、最终目的是品牌。seo的目的是营销，营销的终极目标是品牌，所有的一切都应该围绕建立品牌去操作。其实对于网站关键字来说，是在第一时间内很好的讲 品牌定义传递给受众和搜索引擎，但如果关键字没有很准确的定义出品牌的理念，则需要通过网站的内容和功能来直观反映出来。这又回归到我们做网站的本质问题。</div>\r\n<p>&nbsp;</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('29','10','0','内容十四','','admin','1','0','','0','0','','0','','','','','3206','2014-10-11 16:13:06','admin','','/upload/images/201304/3206.jpg','1','1','做网站优化必须要有收录，而且一定要收录快，所以说这是一个整体过程，从网站建设到网站的运营，这个过程都离不了优化策略，每个环节都必需有优化思惟。\r\n\r\n1.内容最好是原创。一个新站点，文章质量非常重要，蜘蛛是喜新厌旧的东西，对一个站点内容质量越高，抓取你网站的次数也会越高。可是有些新站长实在写不出丰富原创内容，可以选择伪原创，切忌不要完全的采集别人的文章，伪原创是指看别人写的原创文章，结合几个人所写同类型的文章，在结合自己的观点，用自己的话描述出来。别以为调换一下文章顺序，替换一些关键词就是一篇新文章，现在的百度算法越来越精准，这种采集方式已经是过去式了，还是倡导原创内容。\r\n\r\n2.要迎合用户需求来写。在做网站内容是，要分析用户的需求，迎合用户的需求去写网站内容。因为在互联网上有大量相似的文章，你再去写类似的文章，搜索引擎为什么要收录你的文章给予排名呢？所以做网站内容的时候要考虑到是否用户需要的，网站内容是否新颖。可以登入商标注册网站都是很专业的商标资讯文章\r\n\r\n3.文章定时更新。每日准时更新网站内容，每天都能让蜘蛛有东西吃，满意而归。假如蜘蛛今天有东西吃，明天没东西吃，后天也没东西吃，没准蜘蛛不来你的网站了。发完一篇文章后，最好到百度站长平台抓取诊断一下，看文章抓取是否显示正常。\r\n\r\n4.网站地图。一般蜘蛛要来抓取你的网站首先看的你的网站地图Sitemap，再以它为导航爬行你的网站，一个新站最容易忽视网站地图，网站地图能更好的引导蜘蛛来抓取我们的网站，提高网站收录速度。商标注册网站至少每更新一篇文章之后，立刻生成地图传到网站根目录。\r\n\r\n5.发布外链。到各大高权重外链平台（达到秒收效果最佳）发布外链，例如搜外SEO论坛，A5站长，28推等平台，吸引蜘蛛来抓取网站的文章，也是能加快网站文章收录速度。发外链每天要平稳，不能大跌大增，某某大牛说，一天最少要发10-30条外链。\r\n\r\n6.文章内链。一个页面要被收录，首先要能够被搜索引擎蜘蛛爬行到，蜘蛛的爬行轨迹是顺着一个链接到另一个链接，想让搜索引擎蜘蛛更好地爬行，在你在文章适当位置增加些文章的锚文本链接，这样能有效缩短蜘蛛的抓取网站内容时间，有效提高文章的收录率。如果是新站长建议不要做内链，一个不注意形成死链断链，蜘蛛就无从爬起，那就更别谈网站文章收录了。\r\n\r\n7.提交Sitemap地图。可以到各大搜索引擎站长平台提交网站地图URL，使搜索引擎更好的对网站页面进行收录。千万要记住在robots里面写上你网站Sitemap的地址，因为蜘蛛来抓取网站时，首先看robots，这样更好的让搜索引擎蜘蛛抓取我们网站。\r\n\r\n坚持这7项，想不获得百度收录都难了，这就是让你网站在排名中靠前的7大技巧。','0','<div>做网站优化必须要有收录，而且一定要收录快，所以说这是一个整体过程，从网站建设到网站的运营，这个过程都离不了优化策略，每个环节都必需有优化思惟。</div>\r\n<div>&nbsp;</div>\r\n<div>1.内容最好是原创。一个新站点，文章质量非常重要，蜘蛛是喜新厌旧的东西，对一个站点内容质量越高，抓取你网站的次数也会越高。可是有些新站长实在写不出丰富原创内容，可以选择伪原创，切忌不要完全的采集别人的文章，伪原创是指看别人写的原创文章，结合几个人所写同类型的文章，在结合自己的观点，用自己的话描述出来。别以为调换一下文章顺序，替换一些关键词就是一篇新文章，现在的百度算法越来越精准，这种采集方式已经是过去式了，还是倡导原创内容。</div>\r\n<div>&nbsp;</div>\r\n<div>2.要迎合用户需求来写。在做网站内容是，要分析用户的需求，迎合用户的需求去写网站内容。因为在互联网上有大量相似的文章，你再去写类似的文章，搜索引擎为什么要收录你的文章给予排名呢？所以做网站内容的时候要考虑到是否用户需要的，网站内容是否新颖。可以登入商标注册网站都是很专业的商标资讯文章</div>\r\n<div>&nbsp;</div>\r\n<div>3.文章定时更新。每日准时更新网站内容，每天都能让蜘蛛有东西吃，满意而归。假如蜘蛛今天有东西吃，明天没东西吃，后天也没东西吃，没准蜘蛛不来你的网站了。发完一篇文章后，最好到百度站长平台抓取诊断一下，看文章抓取是否显示正常。</div>\r\n<div>&nbsp;</div>\r\n<div>4.网站地图。一般蜘蛛要来抓取你的网站首先看的你的网站地图Sitemap，再以它为导航爬行你的网站，一个新站最容易忽视网站地图，网站地图能更好的引导蜘蛛来抓取我们的网站，提高网站收录速度。商标注册网站至少每更新一篇文章之后，立刻生成地图传到网站根目录。</div>\r\n<div>&nbsp;</div>\r\n<div>5.发布外链。到各大高权重外链平台（达到秒收效果最佳）发布外链，例如搜外SEO论坛，A5站长，28推等平台，吸引蜘蛛来抓取网站的文章，也是能加快网站文章收录速度。发外链每天要平稳，不能大跌大增，某某大牛说，一天最少要发10-30条外链。</div>\r\n<div>&nbsp;</div>\r\n<div>6.文章内链。一个页面要被收录，首先要能够被搜索引擎蜘蛛爬行到，蜘蛛的爬行轨迹是顺着一个链接到另一个链接，想让搜索引擎蜘蛛更好地爬行，在你在文章适当位置增加些文章的锚文本链接，这样能有效缩短蜘蛛的抓取网站内容时间，有效提高文章的收录率。如果是新站长建议不要做内链，一个不注意形成死链断链，蜘蛛就无从爬起，那就更别谈网站文章收录了。</div>\r\n<div>&nbsp;</div>\r\n<div>7.提交Sitemap地图。可以到各大搜索引擎站长平台提交网站地图URL，使搜索引擎更好的对网站页面进行收录。千万要记住在robots里面写上你网站Sitemap的地址，因为蜘蛛来抓取网站时，首先看robots，这样更好的让搜索引擎蜘蛛抓取我们网站。</div>\r\n<div>&nbsp;</div>\r\n<div>坚持这7项，想不获得百度收录都难了，这就是让你网站在排名中靠前的7大技巧。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('30','10','0','内容十五','','admin','1','0','','0','0','','0','','','','','3207','2014-10-11 16:13:46','admin','','/upload/images/201304/3207.jpg','1','1',' 现在在网站优化这个行业中，已经有越来越多的站长认识到了内链的重要性，可是一些新手站长还是对内链这个概念模模糊糊的，其实随着现在搜索引擎算法的不段改进，内链和外链已经到了一个同等重要性的位置了，对于内链来说不同角度不同方向的人会有不同的看法，下面就给大家说一说从不同的方向看内链都有哪些不同的作用。','0','<p>现在在网站优化这个行业中，已经有越来越多的站长认识到了内链的重要性，可是一些新手站长还是对内链这个概念模模糊糊的，其实随着现在搜索引擎算法的不段改进，内链和外链已经到了一个同等重要性的位置了，对于内链来说不同角度不同方向的人会有不同的看法，下面就给大家说一说从不同的方向看内链都有哪些不同的作用。</p>\r\n<div>一、利于增加网站收录量蜘蛛爬行网站是按超链接的，其实蜘蛛在爬行时就你用户点击网站中的超链接来进入内容页，咱们可以把蜘蛛当成是一个用户，而这个用户往往是每天来访都是全站访问的。但是有一个缺点就是它并不具备感情。而且还要站长设置好网站的内链，让它顺畅的绕着网站内容爬行。许多的网站收录不给力原因在哪里?其实最基本的一点就是无法给蜘蛛提供高速爬行通道，这里出现了断路，那里出现了死胡同，这就让蜘蛛爬行网站时浪费很多时间，而且每次进入死胡同时，蜘蛛都要重新回到首页去，这样一来蜘蛛又要重新爬行网站了，进而就会造成网站被重复收录这是常规现象。有了合理的内链就不会造成这种情况的发生，当站长把每篇内容下面左右都设置好相关的内容版块时，自然就可以引导蜘蛛更有效的爬行完整站，自然收录也会涨起来的。而且对于利用内链来提升网站的收录量并不是什么稀奇的事，一般收录高的网站内链都是做得特别到位的。</div>\r\n<div>&nbsp;</div>\r\n<div>二、利于提升关键词排名外链可以有效的提升关键词排名而内链就是加已巩固排名最好的方法之一。对于内链的作用，其实最基本一点也是可以提升关键词排名的。而且通过内链优化来提升关键词排名，可以使自己在与对手竞争时，更有稳定性，因为同样的方法，取胜之处就在于细节方面的处理，而内链往往是细节中最重要的一环，所以内链的实际作用就目前来说，跟外链的作用是不相上下的。而且要让搜索引挚重视自己的网站，自然通过内链可以更好的使网站的内容相关性更强，自然搜索引挚对于具有文不离题内容的网站适当的照顾一下的。所以，而且内链中的关键词还可以提升网站关键词的整体密度，进而对提升关键词排名起到一定的帮助。所以说内链的最根本的一个作用就是可以帮助网站提升关键词排名，要不然站长也不会越来越重视内链优化了。</div>\r\n<div>&nbsp;</div>\r\n<div>三、利于提升用户体验内链最为关键词的一个作用就是可以提用户的访问深度，也就是打造良好的用户体验，对于用户体验可谓是让所有站长又爱又恨。但是很多网站流量很高，却留不住用户，无法缔造出良好的用户体验归其原因就是出现在内链不够强大，鄙人的淘宝热卖&nbsp;</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('31','10','0','内容十六','','admin','1','0','','0','0','','0','','','','','3208','2014-10-11 16:15:34','admin','','/upload/images/201304/3208.jpg','1','1','序言：标题里的标准化的需求其实是为了吸引大家的，它是不可能有标准化的，我们要追求标题个性化，但也可以做标准化的，因为很多的人不知道该怎么做。\r\n　　一、标题应该怎么做怎么样来选择标题，标题要求很简单，他需要有几个特性，大的行业靠长尾关键词，小的行业靠目标关键词，而淘宝客严格意义来说是大的行业，这里说大指的是行业的受众。淘宝客可以做任何行业的受众，它是一个大的行业。同样旅游也是大的行业。而中小型企业点的行业就是小的行业。所以说目标和长尾是一个相对的概念。比如说云南旅游，它的受众很大，可以做目标词，而去云南旅游的注意事项就是长尾词，它是相对的。\r\n　　1、标题应该去找寻有转换率的而关注度较少的长尾词(竞争度非常少所指的是目录页和内页，目录页可以寄居到一些大型站点下面，比如很多的企业去阿里巴巴开一个二级域名的店铺等。\r\n　　它是一个目录页或者是二级域名。现在有一个问题就是它没有流量，或者有流量没有转换率。而我们seo是要解决这个问题的。流量和转换率是由关键词产生的。关键词有转换率的很多，不能每个都做，大家都认为可以做的词，我们就不要去做的，商业竞争是非常残酷的。\r\n　　我们要选择的词就是大伙还没有发现或者有少数人发现的我们可以去竞争得过人家的词。怎么知道这个词有转换呢?这就一定要做关键词词库，词库就是我们知道有一些词有流量，这种词会大量存在的，而且有规律的，是可以进行推理和推导的，这个词库的统计是一个长期且漫长的过程，通过词库就可以淘汰很多的词。\r\n　　这里举个例子，比如一个做医药类网站，优化此类网站，首先就是有规律的更新一些白癜风原创文章，文章的标题很重要，它体现你这篇文章的中心内容，文章内容最好原创，再加上河南白癜风医院的关键词，而河南白癜风医院的密度就需要自己把握;其次就是去一些与白癜风相关的医药健康类网站发外链，比如BBS论坛、Blog博客和B2B分类信息平台，外链内容与白癜风相关，加上河南白癜风医院的锚链最好;最后就是一些友情链接的交换了，要知道，网站优化比不是一朝一夕的是，三天打鱼两天晒网是不可取的，站长们一定要勤劳才可以见效果的。','0','<p>序言：标题里的标准化的需求其实是为了吸引大家的，它是不可能有标准化的，我们要追求标题个性化，但也可以做标准化的，因为很多的人不知道该怎么做。</p>\r\n<div>　　一、标题应该怎么做怎么样来选择标题，标题要求很简单，他需要有几个特性，大的行业靠长尾关键词，小的行业靠目标关键词，而淘宝客严格意义来说是大的行业，这里说大指的是行业的受众。淘宝客可以做任何行业的受众，它是一个大的行业。同样旅游也是大的行业。而中小型企业点的行业就是小的行业。所以说目标和长尾是一个相对的概念。比如说云南旅游，它的受众很大，可以做目标词，而去云南旅游的注意事项就是长尾词，它是相对的。</div>\r\n<div>　　1、标题应该去找寻有转换率的而关注度较少的长尾词(竞争度非常少所指的是目录页和内页，目录页可以寄居到一些大型站点下面，比如很多的企业去阿里巴巴开一个二级域名的店铺等。</div>\r\n<div>　　它是一个目录页或者是二级域名。现在有一个问题就是它没有流量，或者有流量没有转换率。而我们seo是要解决这个问题的。流量和转换率是由关键词产生的。关键词有转换率的很多，不能每个都做，大家都认为可以做的词，我们就不要去做的，商业竞争是非常残酷的。</div>\r\n<div>　　我们要选择的词就是大伙还没有发现或者有少数人发现的我们可以去竞争得过人家的词。怎么知道这个词有转换呢?这就一定要做关键词词库，词库就是我们知道有一些词有流量，这种词会大量存在的，而且有规律的，是可以进行推理和推导的，这个词库的统计是一个长期且漫长的过程，通过词库就可以淘汰很多的词。</div>\r\n<div>　　这里举个例子，比如一个做医药类网站，优化此类网站，首先就是有规律的更新一些白癜风原创文章，文章的标题很重要，它体现你这篇文章的中心内容，文章内容最好原创，再加上河南白癜风医院的关键词，而河南白癜风医院的密度就需要自己把握;其次就是去一些与白癜风相关的医药健康类网站发外链，比如BBS论坛、Blog博客和B2B分类信息平台，外链内容与白癜风相关，加上河南白癜风医院的锚链最好;最后就是一些友情链接的交换了，要知道，网站优化比不是一朝一夕的是，三天打鱼两天晒网是不可取的，站长们一定要勤劳才可以见效果的。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('32','12','0','《速度与激情》 宝马M3、保时捷赛车吵醒居民','','admin','1','0','','0','0','','0','','','','','3301','2014-10-11 16:17:20','admin','','/upload/images/201304/3301.jpg','1','1','分析过度优化会导致不好的后果\r\n   1、上网站的疑问、描绘不要过多堆砌关头词。良多站长在标题里和描绘里写量的环节词，并且为了省劲通常会把标题和描绘一样，这是大忌。标题写3到5个纽带词，描绘里写100个字符，里面嵌入标题的关键词就可以了，没需要把要做的一切的关键字都一股脑儿的塞进去，这不单对SEO搜索引擎不友好，即是对用户而言，用户体会极差。 \r\n   2、文章内容里塞关键字。网站编纂为了省劲，很难写原创文章，可是又不得不环绕着政策关键字，所以强行把关键字塞进文章里，读着很是欠亨顺，这不光是对蜘蛛不友好，对用户而言也是不友好的。文章内容应该真恰是有用户认可，才干真实注重到你的关键字。 \r\n   3、图像title和alt特点堆砌关键字。站长在给这些图像加title和alt特点为了省劲，图简略，爽性把一切的图像title和alt特点里堆上关键字，尽管可以增加关键字密度，但蜘蛛并不吃这一套。 \r\n   4、网站的次导航建立不合理。次导航确实被许多搜索引擎优化人员所正视，然则许多人就仅仅简略的把关键字聚积到底部，没有排序。其实排序长短常首要的，意图关键字的排序依照热度来合理枚举才是优化的精采习气。 \r\n   5、网站沟通的友情连接的过多且凌乱。许多增加的友情连接根柢和网站不相关，这样的友情连接又有多大的含义呢?并且有的增加友情连接也没有对方是不是加了签?是不是导出来连接过多?还有对方pr值若何?可以自个网站带来若干很多pr值?所以在交流连接时必然要权衡一下，再进行连接交流。 \r\n   6、网站主页过量堆积关键字密度。为了把方针关键字做上去，许多站长在网站主页板框里很多再三关键字，致使关键字密度大得离谱，通常一个网站的关键字密度在2%~8%之间，可是为了让蜘蛛非常好的抓取你的网站关键字，就会加大网站关键字密度的构造。一不留心关键字密渡过大堆积就会形成优化过度，致使网站降权，乃至K站。所以在进行网站优化时一定要合理的采用操作网站关键字的密度。','0','<p>分析过度优化会导致不好的后果</p>\r\n<div>&nbsp; &nbsp;1、上网站的疑问、描绘不要过多堆砌关头词。良多站长在标题里和描绘里写量的环节词，并且为了省劲通常会把标题和描绘一样，这是大忌。标题写3到5个纽带词，描绘里写100个字符，里面嵌入标题的关键词就可以了，没需要把要做的一切的关键字都一股脑儿的塞进去，这不单对SEO搜索引擎不友好，即是对用户而言，用户体会极差。&nbsp;</div>\r\n<div>&nbsp; &nbsp;2、文章内容里塞关键字。网站编纂为了省劲，很难写原创文章，可是又不得不环绕着政策关键字，所以强行把关键字塞进文章里，读着很是欠亨顺，这不光是对蜘蛛不友好，对用户而言也是不友好的。文章内容应该真恰是有用户认可，才干真实注重到你的关键字。&nbsp;</div>\r\n<div>&nbsp; &nbsp;3、图像title和alt特点堆砌关键字。站长在给这些图像加title和alt特点为了省劲，图简略，爽性把一切的图像title和alt特点里堆上关键字，尽管可以增加关键字密度，但蜘蛛并不吃这一套。&nbsp;</div>\r\n<div>&nbsp; &nbsp;4、网站的次导航建立不合理。次导航确实被许多搜索引擎优化人员所正视，然则许多人就仅仅简略的把关键字聚积到底部，没有排序。其实排序长短常首要的，意图关键字的排序依照热度来合理枚举才是优化的精采习气。&nbsp;</div>\r\n<div>&nbsp; &nbsp;5、网站沟通的友情连接的过多且凌乱。许多增加的友情连接根柢和网站不相关，这样的友情连接又有多大的含义呢?并且有的增加友情连接也没有对方是不是加了签?是不是导出来连接过多?还有对方pr值若何?可以自个网站带来若干很多pr值?所以在交流连接时必然要权衡一下，再进行连接交流。&nbsp;</div>\r\n<div>&nbsp; &nbsp;6、网站主页过量堆积关键字密度。为了把方针关键字做上去，许多站长在网站主页板框里很多再三关键字，致使关键字密度大得离谱，通常一个网站的关键字密度在2%~8%之间，可是为了让蜘蛛非常好的抓取你的网站关键字，就会加大网站关键字密度的构造。一不留心关键字密渡过大堆积就会形成优化过度，致使网站降权，乃至K站。所以在进行网站优化时一定要合理的采用操作网站关键字的密度。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('33','12','0','内容十八','','admin','1','0','','0','0','','0','','','','','3302','2014-10-11 16:18:45','admin','','/upload/images/201304/3302.jpg','1','1','现在有很多站长们以为文章被秒收，只是靠运气，在这里西安搜刮引擎优化陈诉宽大新手站长们，只要你做好细节，内部创建及外部创建，这个实在一点都不难。\r\n　　现在有外链吸引蜘蛛：据本人的见解来讲：新站靠的是遍及度，老站呵呵的是质量度。\r\n　　一个新网站刚创建的时间，我们假如想让蜘蛛存眷你的网站，就要去公布链接诱饵以及其他方法让蜘蛛顺着链接来抓取，而老站我们的外链要注意有权重、有存活率的链接。\r\n　　实在外链的目的就是资助蜘蛛年老进入我们的网站有一个引导的左右，让蜘蛛每天走同一条路，蜘蛛越认识就会越有情感。外链越多，蜘蛛就越有喜好，来我们网站就会越勤快，相对的，权重越高的外链，给我们的投票原则还是很可观的。\r\n　　笔者以为大概内容搭建是我们与蜘蛛的初恋阶段，而外链搭建则是我们与蜘蛛相互影响的时间，特殊是要找到本身符合的要领，做好做精，流量就会如滔水般源源不绝。有些站长论坛做外链在行，有些站博客做外链在行，有些站做问答平台外链在行，有些站做分类信息网平台外链在行，有些站投稿在行。以是总有一项外链的方法会得当你的，假如能把这些方法联合在一起，而且做好质量，那蜘蛛抓取还是很有效的。\r\n　　现在笔者以为内容吸引蜘蛛来，小我私人以为：新站在初期要靠坚持，老站要靠稳固的频率。\r\n　　当我们的网站框架已经开端定下来以后，站内要做的就是内容，坚持更新内容才是真理。一篇好的内容是吸引用户和蜘蛛抓取非常紧急的部门，在这里我发起各人最好把内容做好，由于很简单，我们的内容是做给用户的例如 LOGO设计，固然假如是做垃圾站的可以试试用东西去伪原创，剩至几十篇文章打乱序次在联合打乱公布，那样也是可以的，只不外那样只敷衍蜘蛛而非对用户有所资助。\r\n　　我们也晓得做站长的现在有很多朋侪都比力懒了，民风性的每天去收罗些文章，然后改头改尾，有的剩至直接用东西天生内容，如许固然你的网站看上去硕果满满，但对蜘蛛来说这些文章都是对用户不友好的。搜刮引擎的蜘蛛自然而来是望而却步，不要检验蜘蛛的人性化，百度自觉展到如今也是不停在进步的，蜘蛛也黑白凡人性化的。\r\n　　以是在这里我发起各人，内容要分两步走，原创内容投A5或chinaz剩至尚有很多大型流派也是可以投稿的，伪原创实在也不难，好比我们拿一篇好文章来，起首我们先大概欣赏一遍，晓得此中的意思，然后在凭据本身所把握的东西，来举行修改，标题部门直接换掉，变本钱身的明白语句，让文章越发普通，越发形象化一些。内容部门，凭据本身相识的情况把知识穿插在内容内里，只管让这篇文章变个意思，但是又和原文豪不干系了，内容内里在插入你的关键字，固然这个也是必要肯定的文章功底和所把握的理论及实战知识，如许以来基础上本文章就成了本身的了，然后去a5大概china去投稿，假如考核过了固然最好，假如考核不外在去别的大型论坛公布，如许还是干系有效果的。','0','<p>现在有很多站长们以为文章被秒收，只是靠运气，在这里西安搜刮引擎优化陈诉宽大新手站长们，只要你做好细节，内部创建及外部创建，这个实在一点都不难。</p>\r\n<div>现在有外链吸引蜘蛛：据本人的见解来讲：新站靠的是遍及度，老站呵呵的是质量度。</div>\r\n<div>　　一个新网站刚创建的时间，我们假如想让蜘蛛存眷你的网站，就要去公布链接诱饵以及其他方法让蜘蛛顺着链接来抓取，而老站我们的外链要注意有权重、有存活率的链接。</div>\r\n<div>　　实在外链的目的就是资助蜘蛛年老进入我们的网站有一个引导的左右，让蜘蛛每天走同一条路，蜘蛛越认识就会越有情感。外链越多，蜘蛛就越有喜好，来我们网站就会越勤快，相对的，权重越高的外链，给我们的投票原则还是很可观的。</div>\r\n<div>　　笔者以为大概内容搭建是我们与蜘蛛的初恋阶段，而外链搭建则是我们与蜘蛛相互影响的时间，特殊是要找到本身符合的要领，做好做精，流量就会如滔水般源源不绝。有些站长论坛做外链在行，有些站博客做外链在行，有些站做问答平台外链在行，有些站做分类信息网平台外链在行，有些站投稿在行。以是总有一项外链的方法会得当你的，假如能把这些方法联合在一起，而且做好质量，那蜘蛛抓取还是很有效的。</div>\r\n<div>　　现在笔者以为内容吸引蜘蛛来，小我私人以为：新站在初期要靠坚持，老站要靠稳固的频率。</div>\r\n<div>　　当我们的网站框架已经开端定下来以后，站内要做的就是内容，坚持更新内容才是真理。一篇好的内容是吸引用户和蜘蛛抓取非常紧急的部门，在这里我发起各人最好把内容做好，由于很简单，我们的内容是做给用户的例如 LOGO设计，固然假如是做垃圾站的可以试试用东西去伪原创，剩至几十篇文章打乱序次在联合打乱公布，那样也是可以的，只不外那样只敷衍蜘蛛而非对用户有所资助。</div>\r\n<div>　　我们也晓得做站长的现在有很多朋侪都比力懒了，民风性的每天去收罗些文章，然后改头改尾，有的剩至直接用东西天生内容，如许固然你的网站看上去硕果满满，但对蜘蛛来说这些文章都是对用户不友好的。搜刮引擎的蜘蛛自然而来是望而却步，不要检验蜘蛛的人性化，百度自觉展到如今也是不停在进步的，蜘蛛也黑白凡人性化的。</div>\r\n<div>　　以是在这里我发起各人，内容要分两步走，原创内容投A5或chinaz剩至尚有很多大型流派也是可以投稿的，伪原创实在也不难，好比我们拿一篇好文章来，起首我们先大概欣赏一遍，晓得此中的意思，然后在凭据本身所把握的东西，来举行修改，标题部门直接换掉，变本钱身的明白语句，让文章越发普通，越发形象化一些。内容部门，凭据本身相识的情况把知识穿插在内容内里，只管让这篇文章变个意思，但是又和原文豪不干系了，内容内里在插入你的关键字，固然这个也是必要肯定的文章功底和所把握的理论及实战知识，如许以来基础上本文章就成了本身的了，然后去a5大概china去投稿，假如考核过了固然最好，假如考核不外在去别的大型论坛公布，如许还是干系有效果的。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('34','12','0','内容十九','','admin','1','0','','0','0','','0','','','','','3303','2014-10-11 16:19:41','admin','','/upload/images/201304/3303.jpg','1','1','对于我们优化人员来说，在每一个网站建设之初我们都在想我们的网站在优化竞争中赢在起跑线上。为此在建站之初，网站的结构是否有利于我们的优化是我们不得不考虑的一件重要的事情。对于一个好的网站结构来说，它不仅可以对你的排名起到很好的促进作用，对于你的投资回报率提高来说也有很好的作用。如果你的站点有一个用关键词构架的优化结构的话，那么对于你的优化来说将起到事半功倍的效果。我们可以将关键词区分为主关键词、次关键词和长尾关键词，这三种都有各自的优势，那么本文将围绕着这三种关键词阐述如何构建你的站点的优化结构，来使你的站点获得更高的排名和点击率，达到利益的最大化。\r\n　　一：主关键词构建站点的优化结构的第一步就是设置主关键词，我们可以将我们的主要关键词置于站点的标题信息中，当然我们也可以将主要的关键词分布于其他站点的基本信息中。主关键词的设置相对比较简单，笔者就不详细的介绍。\r\n　　二：次要关键词对于一个站点来说，第二个重要的组成部分就是次要关键词。次要关键词相对于主要关键词在优化的难度上会相对较低。我们在构架网站的优化结构的时候，可以将网站的次要关键词设置为站点的分类目录。我们这样做的目的是更好的利用链接的权重。你的站点内容都有链接到各自的目录分类。而这些目录分类又会链接到有着主关键词的主页页面。这一个看似简单的过程却可以很好的提高你的站点的排名，而且也可以使含有主关键词的主页权重更加的高，成为焦点。当然分类目录的数量也要有所控制，笔者建议分类目录的数量最好不要超过8个，对于一些站点分类比较多的话，你可以尝试着使用子类别。\r\n　　三：长尾关键词站点优化结构构建的第三步就是长尾关键词的使用，长尾关键词相对于主关键词和次要关键词来说，优化的难度最小，但是流量比较低，而且存在着不确定的因素。对于长尾关键词你可以在站点的内容中利用。你的站点内容可以影响到你的主关键词、次关键词，当然也包括长尾关键词。对于这方面可以在站点上发布尽可能多的内容，并保持内容的高质量以及内容的相关性和与分类目录的联系。这样才能达到最好的效果。\r\n　　如何让自己的站点赢在起跑线上，是每一优化人员都在苦心琢磨的问题，但其实从最基本的网站的构架就可以有很大的作用，希望本文对大家有所帮助。','0','<p>对于我们优化人员来说，在每一个网站建设之初我们都在想我们的网站在优化竞争中赢在起跑线上。为此在建站之初，网站的结构是否有利于我们的优化是我们不得不考虑的一件重要的事情。对于一个好的网站结构来说，它不仅可以对你的排名起到很好的促进作用，对于你的投资回报率提高来说也有很好的作用。如果你的站点有一个用关键词构架的优化结构的话，那么对于你的优化来说将起到事半功倍的效果。我们可以将关键词区分为主关键词、次关键词和长尾关键词，这三种都有各自的优势，那么本文将围绕着这三种关键词阐述如何构建你的站点的优化结构，来使你的站点获得更高的排名和点击率，达到利益的最大化。</p>\r\n<div>　　一：主关键词构建站点的优化结构的第一步就是设置主关键词，我们可以将我们的主要关键词置于站点的标题信息中，当然我们也可以将主要的关键词分布于其他站点的基本信息中。主关键词的设置相对比较简单，笔者就不详细的介绍。</div>\r\n<div>　　二：次要关键词对于一个站点来说，第二个重要的组成部分就是次要关键词。次要关键词相对于主要关键词在优化的难度上会相对较低。我们在构架网站的优化结构的时候，可以将网站的次要关键词设置为站点的分类目录。我们这样做的目的是更好的利用链接的权重。你的站点内容都有链接到各自的目录分类。而这些目录分类又会链接到有着主关键词的主页页面。这一个看似简单的过程却可以很好的提高你的站点的排名，而且也可以使含有主关键词的主页权重更加的高，成为焦点。当然分类目录的数量也要有所控制，笔者建议分类目录的数量最好不要超过8个，对于一些站点分类比较多的话，你可以尝试着使用子类别。</div>\r\n<div>　　三：长尾关键词站点优化结构构建的第三步就是长尾关键词的使用，长尾关键词相对于主关键词和次要关键词来说，优化的难度最小，但是流量比较低，而且存在着不确定的因素。对于长尾关键词你可以在站点的内容中利用。你的站点内容可以影响到你的主关键词、次关键词，当然也包括长尾关键词。对于这方面可以在站点上发布尽可能多的内容，并保持内容的高质量以及内容的相关性和与分类目录的联系。这样才能达到最好的效果。</div>\r\n<div>　　如何让自己的站点赢在起跑线上，是每一优化人员都在苦心琢磨的问题，但其实从最基本的网站的构架就可以有很大的作用，希望本文对大家有所帮助。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('35','12','0','内容二十','','admin','1','0','','0','0','','0','','','','','3304','2014-10-11 16:21:08','admin','','/upload/images/201304/3304.jpg','1','1','蜘蛛要找到你的网站很多时候是通过其他的网站爬过来的，而这条蜘蛛丝就是我们所谓的外链。在这里要说明一点的就是外链的质量很重要，这挑剔的蜘蛛一般只喜欢爬像那些流量大、PR值高、内容的相关性强，更新频率快的网站。所以做外链的时候一定要有选择性的做，在一些蜘蛛喜欢爬的网站留下诱饵，让蜘蛛来串门。\r\n　　一)从外链的内容质量上分析。对于很多的站长而言，大部分都是盲目的去追求数量而往往忽略了外链的质量性，特别是一些中小企业的公司都会专门的请一些外链发布人员，而且经理们还会每天给他们定制外链的数量，很少去关注外链的质量问题，所以无疑这会成为外链多但网站没有排名的一个主要的原因。\r\n　　何为高质量的外链呢?这个相信很多朋友也是很好奇，不知道怎么去做高质量的外链，难道只有原创的内容发布才算是高质量的外链吗，虽然并不是完全这样，但是大家可以根据我们日常的优化工作中就可以看得出来，蜘蛛喜欢寻找新鲜的内容，大量重复的内容使搜索蜘蛛感到反感，所以发布一些比较有质量的原创内容外链，无疑也是提升我们外链质量的一个好方法。\r\n　　二)从外链平台上找原因分析。“鱼找鱼虾找虾乌龟找王八，龙找龙凤找凤好汉赵英雄”这句古语说的好，其实对于外链平台也是一样的，因为我们做外链都是需要找一些平台进行发布，然而这个时候很多站长都忽略了针对性，从而导致外链内容质量与主题不相关，所以对我们的网站权重提升没有丝毫的帮助。所以这个时候我们还是需要去找一些与自己网站主题相关的平台进行发布。\r\n　　网站的内容是吸引用户的最大保证，如果用户进到你网站，展现在眼前的只有寥寥无几的内容，那么用户对这个网站还会有信心吗?当然并不是内容多就是王道，高质量的内容也是吸引用户的法宝。同样百度蜘蛛也很注重用户感受的，一个可以吸引到用户注意的网站，同时也会引起百度蜘蛛的注意，蜘蛛往往会把好的东西自己都收藏起来，品尝一阵子才和大家分享。因此对于网站的内容我们一定要按时更新，不断的丰富，以一些新颖的内容去吸引用户留住用户。','0','<p>蜘蛛要找到你的网站很多时候是通过其他的网站爬过来的，而这条蜘蛛丝就是我们所谓的外链。在这里要说明一点的就是外链的质量很重要，这挑剔的蜘蛛一般只喜欢爬像那些流量大、PR值高、内容的相关性强，更新频率快的网站。所以做外链的时候一定要有选择性的做，在一些蜘蛛喜欢爬的网站留下诱饵，让蜘蛛来串门。</p>\r\n<div>　　一)从外链的内容质量上分析。对于很多的站长而言，大部分都是盲目的去追求数量而往往忽略了外链的质量性，特别是一些中小企业的公司都会专门的请一些外链发布人员，而且经理们还会每天给他们定制外链的数量，很少去关注外链的质量问题，所以无疑这会成为外链多但网站没有排名的一个主要的原因。</div>\r\n<div>　　何为高质量的外链呢?这个相信很多朋友也是很好奇，不知道怎么去做高质量的外链，难道只有原创的内容发布才算是高质量的外链吗，虽然并不是完全这样，但是大家可以根据我们日常的优化工作中就可以看得出来，蜘蛛喜欢寻找新鲜的内容，大量重复的内容使搜索蜘蛛感到反感，所以发布一些比较有质量的原创内容外链，无疑也是提升我们外链质量的一个好方法。</div>\r\n<div>　　二)从外链平台上找原因分析。&ldquo;鱼找鱼虾找虾乌龟找王八，龙找龙凤找凤好汉赵英雄&rdquo;这句古语说的好，其实对于外链平台也是一样的，因为我们做外链都是需要找一些平台进行发布，然而这个时候很多站长都忽略了针对性，从而导致外链内容质量与主题不相关，所以对我们的网站权重提升没有丝毫的帮助。所以这个时候我们还是需要去找一些与自己网站主题相关的平台进行发布。</div>\r\n<div>　　网站的内容是吸引用户的最大保证，如果用户进到你网站，展现在眼前的只有寥寥无几的内容，那么用户对这个网站还会有信心吗?当然并不是内容多就是王道，高质量的内容也是吸引用户的法宝。同样百度蜘蛛也很注重用户感受的，一个可以吸引到用户注意的网站，同时也会引起百度蜘蛛的注意，蜘蛛往往会把好的东西自己都收藏起来，品尝一阵子才和大家分享。因此对于网站的内容我们一定要按时更新，不断的丰富，以一些新颖的内容去吸引用户留住用户。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('36','12','0','内容二十一','','admin','1','0','','0','0','','0','','','','','3305','2014-10-11 16:21:49','admin','','/upload/images/201304/3305.jpg','1','1','对于网站SEO健康度，前面已经为大家谈到三个方面《快速提升网站SEO健康度一：网站内容健康》《快速提升网站SEO健康度二：网站硬件健康》《快速提升网站SEO健康度三：网站内链健康》，对于网站的SEO健康其实还有很多，而对于关键词的重视程度相信大家也是有相当的认识，今天我要为大家介绍的就是网站关键词的选取与布局。\r\n　　网站的关键词是非常关键的，我们在做SEO的时候对于关键词有两个要注意的，一个就是选取，选取关键词要选取对的关键词，选取适合自己实力，自己能搞定，还要注意这些关键词的效果;另外一个就是布局，布局要根据权重高低原则进行，另外要注意自然性，广泛性，长尾关键词是一个重要的方面。下面从两个方面为大家做一个简单的分析。\r\n　　1、网站关键词的选取健康对于关键词的选取，前面我们已经跟大家做了一个简单的介绍，其实关键词的选取很简单，只需要做到下面的几个方面即可：\r\n　　A、首先我们要看行业的关键词是否适合我们做，例如我们是做SEO的，但是你的实力没有那么大，肯定就不能面向全国做的，我们可以根据自己所在的地区进行选择，在北京就可以选择北京SEO，如果觉得北京SEO比较难做，而我又是湖北人，那么我也可以选择武汉SEO，这里我要说的就是根据自己的实力选择，盲目的选择一个超越自己实力的关键词，不仅仅难以优化，而且还对自己的信心造成伤害。\r\n　　当然根据能力选择只是网站关键词选取是否适合的一个方面，有的行业词太大，能够分出来的长尾词和辅助词特别多，有的甚至延伸到不同的行业去了，这时候就要注意选取，不要可以去做行业词，选取长尾词优化更好，例如我有位朋友是做“印花”的，但是长尾词中有“印花税”这样完全不是行业里的词，那做好印花都有可能造成很大的损失，而且他目前的业务只面向义乌，那么他肯定需要选择长尾词做优化，如义乌印花，义乌印花厂等。\r\n　　B、其次我们选取关键词的时候需要注意衡量这个关键词的价值。之前优化过很多的案例，有些关键词是很热的，做起来也相当的吃力，当然做到第一之后的效果是相当给力的，这样的关键词价值很高的，当然值得去选取，但是开始的时候我们是分辨不了的，这个时候就需要借助工具，例如百度指数，百度的相关搜索，还有站长伯乐，爱站等挖掘长尾词的工具，只要我们能分辨难度大小和价值就可以了。一般来说，我们搜索一个词，百度竞价越多，这个词的价值就越高，当然难度也就有点大了。另外，我们要挖掘一些能带来精准客户的长尾词，这些词虽然一天就几个搜索量，但是有时候来了就可以发展成客户。\r\n　　2、网站关键词的布局健康对于关键词的布局其实我之前都没有好的系统的想法，一直都是按照自己随性的设置，今天为了这篇文章做了一个简单的整理。\r\n　　A、布局首先要考虑关键词所在位置的权重。\r\n　　第一就是网站的标签。在标题标签里的权重当然会非常高，关键词标签和描述标签紧接着，其次一个页面我们权重最高的应该是H1标签，在这个标签里面我们要设置一些需要优化的关键词，接下来就是H2-H6，一些锚文本加粗的关键词位置权重也算不错。\r\n　　第二点就是网站的导航和次导航。一般来说导航里面插入一些关键词，或者说利用不同的关键词做导航会提升这个关键词的权重，因为这些导航链接链向的页面都是和这个关键词相关的知识，相关性得到了很好的保证。例如我们是卖秋装的，在导航里面假如秋装，就会导向所有秋装所在列表页面，用户就会在这个页面找到自己想要的秋装。\r\n　　第三，一般在一个页面的首部和尾部都是权重比较高的，所以需要在这些地方多布局一些关键词，让关键词在重要的位置多表现，权重自然提升了。\r\n　　B、关键词布局的三性：自然性，广泛性，长尾性。\r\n　　关键词在网站内部出现的时候一定要注意自然合理，特别是那些读起来都不通顺的，那就很不友好了，广泛性指的是我们要在网站的每个角落都注意设定一些关键词，特别是对于一些长尾关键词，需要做锚文本的就要做上，权重就在这样一点一滴中积累起来的，另外需要注意关键词布局的长尾性，越多的长尾我们能够引导的流量可能就越多，潜在的意向客户就会越多，所以长尾绝对需要重视，特别是我们每天进行网站更新的时候就需要注意在文章中进行长尾关键词建设，一般我都是利用网站标题优化长尾词，这样权重高，优化的排名也会很好。　　','0','<p>对于网站SEO健康度，前面已经为大家谈到三个方面《快速提升网站SEO健康度一：网站内容健康》《快速提升网站SEO健康度二：网站硬件健康》《快速提升网站SEO健康度三：网站内链健康》，对于网站的SEO健康其实还有很多，而对于关键词的重视程度相信大家也是有相当的认识，今天我要为大家介绍的就是网站关键词的选取与布局。</p>\r\n<div>　　网站的关键词是非常关键的，我们在做SEO的时候对于关键词有两个要注意的，一个就是选取，选取关键词要选取对的关键词，选取适合自己实力，自己能搞定，还要注意这些关键词的效果;另外一个就是布局，布局要根据权重高低原则进行，另外要注意自然性，广泛性，长尾关键词是一个重要的方面。下面从两个方面为大家做一个简单的分析。</div>\r\n<div>　　1、网站关键词的选取健康对于关键词的选取，前面我们已经跟大家做了一个简单的介绍，其实关键词的选取很简单，只需要做到下面的几个方面即可：</div>\r\n<div>　　A、首先我们要看行业的关键词是否适合我们做，例如我们是做SEO的，但是你的实力没有那么大，肯定就不能面向全国做的，我们可以根据自己所在的地区进行选择，在北京就可以选择北京SEO，如果觉得北京SEO比较难做，而我又是湖北人，那么我也可以选择武汉SEO，这里我要说的就是根据自己的实力选择，盲目的选择一个超越自己实力的关键词，不仅仅难以优化，而且还对自己的信心造成伤害。</div>\r\n<div>　　当然根据能力选择只是网站关键词选取是否适合的一个方面，有的行业词太大，能够分出来的长尾词和辅助词特别多，有的甚至延伸到不同的行业去了，这时候就要注意选取，不要可以去做行业词，选取长尾词优化更好，例如我有位朋友是做&ldquo;印花&rdquo;的，但是长尾词中有&ldquo;印花税&rdquo;这样完全不是行业里的词，那做好印花都有可能造成很大的损失，而且他目前的业务只面向义乌，那么他肯定需要选择长尾词做优化，如义乌印花，义乌印花厂等。</div>\r\n<div>　　B、其次我们选取关键词的时候需要注意衡量这个关键词的价值。之前优化过很多的案例，有些关键词是很热的，做起来也相当的吃力，当然做到第一之后的效果是相当给力的，这样的关键词价值很高的，当然值得去选取，但是开始的时候我们是分辨不了的，这个时候就需要借助工具，例如百度指数，百度的相关搜索，还有站长伯乐，爱站等挖掘长尾词的工具，只要我们能分辨难度大小和价值就可以了。一般来说，我们搜索一个词，百度竞价越多，这个词的价值就越高，当然难度也就有点大了。另外，我们要挖掘一些能带来精准客户的长尾词，这些词虽然一天就几个搜索量，但是有时候来了就可以发展成客户。</div>\r\n<div>　　2、网站关键词的布局健康对于关键词的布局其实我之前都没有好的系统的想法，一直都是按照自己随性的设置，今天为了这篇文章做了一个简单的整理。</div>\r\n<div>　　A、布局首先要考虑关键词所在位置的权重。</div>\r\n<div>　　第一就是网站的标签。在标题标签里的权重当然会非常高，关键词标签和描述标签紧接着，其次一个页面我们权重最高的应该是H1标签，在这个标签里面我们要设置一些需要优化的关键词，接下来就是H2-H6，一些锚文本加粗的关键词位置权重也算不错。</div>\r\n<div>　　第二点就是网站的导航和次导航。一般来说导航里面插入一些关键词，或者说利用不同的关键词做导航会提升这个关键词的权重，因为这些导航链接链向的页面都是和这个关键词相关的知识，相关性得到了很好的保证。例如我们是卖秋装的，在导航里面假如秋装，就会导向所有秋装所在列表页面，用户就会在这个页面找到自己想要的秋装。</div>\r\n<div>　　第三，一般在一个页面的首部和尾部都是权重比较高的，所以需要在这些地方多布局一些关键词，让关键词在重要的位置多表现，权重自然提升了。</div>\r\n<div>　　B、关键词布局的三性：自然性，广泛性，长尾性。</div>\r\n<div>　　关键词在网站内部出现的时候一定要注意自然合理，特别是那些读起来都不通顺的，那就很不友好了，广泛性指的是我们要在网站的每个角落都注意设定一些关键词，特别是对于一些长尾关键词，需要做锚文本的就要做上，权重就在这样一点一滴中积累起来的，另外需要注意关键词布局的长尾性，越多的长尾我们能够引导的流量可能就越多，潜在的意向客户就会越多，所以长尾绝对需要重视，特别是我们每天进行网站更新的时候就需要注意在文章中进行长尾关键词建设，一般我都是利用网站标题优化长尾词，这样权重高，优化的排名也会很好。　　</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('37','13','0','缘聚法国GCF集团 酒仙网葡萄酒海外战略再上新台阶','','admin','1','0','','0','0','','0','','','','','2106','2014-10-11 16:25:59','admin','','/upload/images/201304/2106.jpg','1','1','　　分析过度优化会导致不好的后果、上网站的疑问、描绘不要过多堆砌关头词。良多站长在标题里和描绘里写量的环节词，并且为了省劲通常会把标题和描绘一样，这是大忌。标题写3到5个纽带词，描绘里写100个字符，里面嵌入标题的关键词就可以了，没需要把要做的一切的关键字都一股脑儿的塞进去，这不单对SEO搜索引擎不友好，即是对用户而言，用户体会极差。\r\n　　、文章内容里塞关键字。网站编纂为了省劲，很难写原创文章，可是又不得不环绕着政策关键字，所以强行把关键字塞进文章里，读着很是欠亨顺，这不光是对蜘蛛不友好，对用户而言也是不友好的。文章内容应该真恰是有用户认可，才干真实注重到你的关键字。\r\n　　、图像title和alt特点堆砌关键字。站长在给这些图像加title和alt特点为了省劲，图简略，爽性把一切的图像title和alt特点里堆上关键字，尽管可以增加关键字密度，但蜘蛛并不吃这一套。\r\n　　、网站的次导航建立不合理。次导航确实被许多搜索引擎优化人员所正视，然则许多人就仅仅简略的把关键字聚积到底部，没有排序。其实排序长短常首要的，意图关键字的排序依照热度来合理枚举才是优化的精采习气。\r\n　　、网站沟通的友情连接的过多且凌乱。许多增加的友情连接根柢和网站不相关，这样的友情连接又有多大的含义呢?并且有的增加友情连接也没有对方是不是加了签?是不是导出来连接过多?还有对方pr值若何?可以自个网站带来若干很多pr值?所以在交流连接时必然要权衡一下，再进行连接交流。\r\n　　、网站主页过量堆积关键字密度。为了把方针关键字做上去，许多站长在网站主页板框里很多再三关键字，致使关键字密度大得离谱，通常一个网站的关键字密度在2%~8%之间，可是为了让蜘蛛非常好的抓取你的网站关键字，就会加大网站关键字密度的构造。一不留心关键字密渡过大堆积就会形成优化过度，致使网站降权，乃至K站。所以在进行网站优化时一定要合理的采用操作网站关键字的密度。','0','<p>&nbsp;　　分析过度优化会导致不好的后果、上网站的疑问、描绘不要过多堆砌关头词。良多站长在标题里和描绘里写量的环节词，并且为了省劲通常会把标题和描绘一样，这是大忌。标题写3到5个纽带词，描绘里写100个字符，里面嵌入标题的关键词就可以了，没需要把要做的一切的关键字都一股脑儿的塞进去，这不单对SEO搜索引擎不友好，即是对用户而言，用户体会极差。</p><div>　　、文章内容里塞关键字。网站编纂为了省劲，很难写原创文章，可是又不得不环绕着政策关键字，所以强行把关键字塞进文章里，读着很是欠亨顺，这不光是对蜘蛛不友好，对用户而言也是不友好的。文章内容应该真恰是有用户认可，才干真实注重到你的关键字。</div><div>　　、图像title和alt特点堆砌关键字。站长在给这些图像加title和alt特点为了省劲，图简略，爽性把一切的图像title和alt特点里堆上关键字，尽管可以增加关键字密度，但蜘蛛并不吃这一套。</div><div>　　、网站的次导航建立不合理。次导航确实被许多搜索引擎优化人员所正视，然则许多人就仅仅简略的把关键字聚积到底部，没有排序。其实排序长短常首要的，意图关键字的排序依照热度来合理枚举才是优化的精采习气。</div><div>　　、网站沟通的友情连接的过多且凌乱。许多增加的友情连接根柢和网站不相关，这样的友情连接又有多大的含义呢?并且有的增加友情连接也没有对方是不是加了签?是不是导出来连接过多?还有对方pr值若何?可以自个网站带来若干很多pr值?所以在交流连接时必然要权衡一下，再进行连接交流。</div><div>　　、网站主页过量堆积关键字密度。为了把方针关键字做上去，许多站长在网站主页板框里很多再三关键字，致使关键字密度大得离谱，通常一个网站的关键字密度在2%~8%之间，可是为了让蜘蛛非常好的抓取你的网站关键字，就会加大网站关键字密度的构造。一不留心关键字密渡过大堆积就会形成优化过度，致使网站降权，乃至K站。所以在进行网站优化时一定要合理的采用操作网站关键字的密度。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('39','13','0','张裕在布鲁塞尔国际葡萄酒大赛获4银奖','','admin','1','0','','0','0','','0','','','','','2108','2014-10-11 16:31:46','admin','','/upload/images/201304/2108.jpg','1','1','对于我们优化人员来说，在每一个网站建设之初我们都在想我们的网站在优化竞争中赢在起跑线上。为此在建站之初，网站的结构是否有利于我们的优化是我们不得不考虑的一件重要的事情。对于一个好的网站结构来说，它不仅可以对你的排名起到很好的促进作用，对于你的投资回报率提高来说也有很好的作用。如果你的站点有一个用关键词构架的优化结构的话，那么对于你的优化来说将起到事半功倍的效果。我们可以将关键词区分为主关键词、次关键词和长尾关键词，这三种都有各自的优势，那么本文将围绕着这三种关键词阐述如何构建你的站点的优化结构，来使你的站点获得更高的排名和点击率，达到利益的最大化。\r\n　　一：主关键词构建站点的优化结构的第一步就是设置主关键词，我们可以将我们的主要关键词置于站点的标题信息中，当然我们也可以将主要的关键词分布于其他站点的基本信息中。主关键词的设置相对比较简单，笔者就不详细的介绍。\r\n　　二：次要关键词对于一个站点来说，第二个重要的组成部分就是次要关键词。次要关键词相对于主要关键词在优化的难度上会相对较低。我们在构架网站的优化结构的时候，可以将网站的次要关键词设置为站点的分类目录。我们这样做的目的是更好的利用链接的权重。你的站点内容都有链接到各自的目录分类。而这些目录分类又会链接到有着主关键词的主页页面。这一个看似简单的过程却可以很好的提高你的站点的排名，而且也可以使含有主关键词的主页权重更加的高，成为焦点。当然分类目录的数量也要有所控制，笔者建议分类目录的数量最好不要超过8个，对于一些站点分类比较多的话，你可以尝试着使用子类别。\r\n　　三：长尾关键词站点优化结构构建的第三步就是长尾关键词的使用，长尾关键词相对于主关键词和次要关键词来说，优化的难度最小，但是流量比较低，而且存在着不确定的因素。对于长尾关键词你可以在站点的内容中利用。你的站点内容可以影响到你的主关键词、次关键词，当然也包括长尾关键词。对于这方面可以在站点上发布尽可能多的内容，并保持内容的高质量以及内容的相关性和与分类目录的联系。这样才能达到最好的效果。\r\n　　如何让自己的站点赢在起跑线上，是每一优化人员都在苦心琢磨的问题，但其实从最基本的网站的构架就可以有很大的作用，希望本文对大家有所帮助。','0','<p>对于我们优化人员来说，在每一个网站建设之初我们都在想我们的网站在优化竞争中赢在起跑线上。为此在建站之初，网站的结构是否有利于我们的优化是我们不得不考虑的一件重要的事情。对于一个好的网站结构来说，它不仅可以对你的排名起到很好的促进作用，对于你的投资回报率提高来说也有很好的作用。如果你的站点有一个用关键词构架的优化结构的话，那么对于你的优化来说将起到事半功倍的效果。我们可以将关键词区分为主关键词、次关键词和长尾关键词，这三种都有各自的优势，那么本文将围绕着这三种关键词阐述如何构建你的站点的优化结构，来使你的站点获得更高的排名和点击率，达到利益的最大化。</p><div>　　一：主关键词构建站点的优化结构的第一步就是设置主关键词，我们可以将我们的主要关键词置于站点的标题信息中，当然我们也可以将主要的关键词分布于其他站点的基本信息中。主关键词的设置相对比较简单，笔者就不详细的介绍。</div><div>　　二：次要关键词对于一个站点来说，第二个重要的组成部分就是次要关键词。次要关键词相对于主要关键词在优化的难度上会相对较低。我们在构架网站的优化结构的时候，可以将网站的次要关键词设置为站点的分类目录。我们这样做的目的是更好的利用链接的权重。你的站点内容都有链接到各自的目录分类。而这些目录分类又会链接到有着主关键词的主页页面。这一个看似简单的过程却可以很好的提高你的站点的排名，而且也可以使含有主关键词的主页权重更加的高，成为焦点。当然分类目录的数量也要有所控制，笔者建议分类目录的数量最好不要超过8个，对于一些站点分类比较多的话，你可以尝试着使用子类别。</div><div>　　三：长尾关键词站点优化结构构建的第三步就是长尾关键词的使用，长尾关键词相对于主关键词和次要关键词来说，优化的难度最小，但是流量比较低，而且存在着不确定的因素。对于长尾关键词你可以在站点的内容中利用。你的站点内容可以影响到你的主关键词、次关键词，当然也包括长尾关键词。对于这方面可以在站点上发布尽可能多的内容，并保持内容的高质量以及内容的相关性和与分类目录的联系。这样才能达到最好的效果。</div><div>　　如何让自己的站点赢在起跑线上，是每一优化人员都在苦心琢磨的问题，但其实从最基本的网站的构架就可以有很大的作用，希望本文对大家有所帮助。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('40','14','0','“挂满树”再掀小品类果汁饮料市场风暴','','admin','1','0','','0','0','','0','','','','','2201','2014-10-11 16:32:42','admin','','/upload/images/201304/2201.jpg','1','1','蜘蛛要找到你的网站很多时候是通过其他的网站爬过来的，而这条蜘蛛丝就是我们所谓的外链。在这里要说明一点的就是外链的质量很重要，这挑剔的蜘蛛一般只喜欢爬像那些流量大、PR值高、内容的相关性强，更新频率快的网站。所以做外链的时候一定要有选择性的做，在一些蜘蛛喜欢爬的网站留下诱饵，让蜘蛛来串门。\r\n　　一)从外链的内容质量上分析。对于很多的站长而言，大部分都是盲目的去追求数量而往往忽略了外链的质量性，特别是一些中小企业的公司都会专门的请一些外链发布人员，而且经理们还会每天给他们定制外链的数量，很少去关注外链的质量问题，所以无疑这会成为外链多但网站没有排名的一个主要的原因。\r\n　　何为高质量的外链呢?这个相信很多朋友也是很好奇，不知道怎么去做高质量的外链，难道只有原创的内容发布才算是高质量的外链吗，虽然并不是完全这样，但是大家可以根据我们日常的优化工作中就可以看得出来，蜘蛛喜欢寻找新鲜的内容，大量重复的内容使搜索蜘蛛感到反感，所以发布一些比较有质量的原创内容外链，无疑也是提升我们外链质量的一个好方法。\r\n　　二)从外链平台上找原因分析。“鱼找鱼虾找虾乌龟找王八，龙找龙凤找凤好汉赵英雄”这句古语说的好，其实对于外链平台也是一样的，因为我们做外链都是需要找一些平台进行发布，然而这个时候很多站长都忽略了针对性，从而导致外链内容质量与主题不相关，所以对我们的网站权重提升没有丝毫的帮助。所以这个时候我们还是需要去找一些与自己网站主题相关的平台进行发布。\r\n　　网站的内容是吸引用户的最大保证，如果用户进到你网站，展现在眼前的只有寥寥无几的内容，那么用户对这个网站还会有信心吗?当然并不是内容多就是王道，高质量的内容也是吸引用户的法宝。同样百度蜘蛛也很注重用户感受的，一个可以吸引到用户注意的网站，同时也会引起百度蜘蛛的注意，蜘蛛往往会把好的东西自己都收藏起来，品尝一阵子才和大家分享。因此对于网站的内容我们一定要按时更新，不断的丰富，以一些新颖的内容去吸引用户留住用户。','0','<p>蜘蛛要找到你的网站很多时候是通过其他的网站爬过来的，而这条蜘蛛丝就是我们所谓的外链。在这里要说明一点的就是外链的质量很重要，这挑剔的蜘蛛一般只喜欢爬像那些流量大、PR值高、内容的相关性强，更新频率快的网站。所以做外链的时候一定要有选择性的做，在一些蜘蛛喜欢爬的网站留下诱饵，让蜘蛛来串门。</p><div>　　一)从外链的内容质量上分析。对于很多的站长而言，大部分都是盲目的去追求数量而往往忽略了外链的质量性，特别是一些中小企业的公司都会专门的请一些外链发布人员，而且经理们还会每天给他们定制外链的数量，很少去关注外链的质量问题，所以无疑这会成为外链多但网站没有排名的一个主要的原因。</div><div>　　何为高质量的外链呢?这个相信很多朋友也是很好奇，不知道怎么去做高质量的外链，难道只有原创的内容发布才算是高质量的外链吗，虽然并不是完全这样，但是大家可以根据我们日常的优化工作中就可以看得出来，蜘蛛喜欢寻找新鲜的内容，大量重复的内容使搜索蜘蛛感到反感，所以发布一些比较有质量的原创内容外链，无疑也是提升我们外链质量的一个好方法。</div><div>　　二)从外链平台上找原因分析。&ldquo;鱼找鱼虾找虾乌龟找王八，龙找龙凤找凤好汉赵英雄&rdquo;这句古语说的好，其实对于外链平台也是一样的，因为我们做外链都是需要找一些平台进行发布，然而这个时候很多站长都忽略了针对性，从而导致外链内容质量与主题不相关，所以对我们的网站权重提升没有丝毫的帮助。所以这个时候我们还是需要去找一些与自己网站主题相关的平台进行发布。</div><div>　　网站的内容是吸引用户的最大保证，如果用户进到你网站，展现在眼前的只有寥寥无几的内容，那么用户对这个网站还会有信心吗?当然并不是内容多就是王道，高质量的内容也是吸引用户的法宝。同样百度蜘蛛也很注重用户感受的，一个可以吸引到用户注意的网站，同时也会引起百度蜘蛛的注意，蜘蛛往往会把好的东西自己都收藏起来，品尝一阵子才和大家分享。因此对于网站的内容我们一定要按时更新，不断的丰富，以一些新颖的内容去吸引用户留住用户。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('41','14','0','2015-2020年中国果汁饮料行业竞争格局及投资策略分析报告','','admin','1','0','','0','0','','0','','','','','2202','2014-10-11 16:33:35','admin','','/upload/images/201304/2202.jpg','1','1','对于网站SEO健康度，前面已经为大家谈到三个方面《快速提升网站SEO健康度一：网站内容健康》《快速提升网站SEO健康度二：网站硬件健康》《快速提升网站SEO健康度三：网站内链健康》，对于网站的SEO健康其实还有很多，而对于关键词的重视程度相信大家也是有相当的认识，今天我要为大家介绍的就是网站关键词的选取与布局。\r\n　　网站的关键词是非常关键的，我们在做SEO的时候对于关键词有两个要注意的，一个就是选取，选取关键词要选取对的关键词，选取适合自己实力，自己能搞定，还要注意这些关键词的效果;另外一个就是布局，布局要根据权重高低原则进行，另外要注意自然性，广泛性，长尾关键词是一个重要的方面。下面从两个方面为大家做一个简单的分析。\r\n　　1、网站关键词的选取健康对于关键词的选取，前面我们已经跟大家做了一个简单的介绍，其实关键词的选取很简单，只需要做到下面的几个方面即可：\r\n　　A、首先我们要看行业的关键词是否适合我们做，例如我们是做SEO的，但是你的实力没有那么大，肯定就不能面向全国做的，我们可以根据自己所在的地区进行选择，在北京就可以选择北京SEO，如果觉得北京SEO比较难做，而我又是湖北人，那么我也可以选择武汉SEO，这里我要说的就是根据自己的实力选择，盲目的选择一个超越自己实力的关键词，不仅仅难以优化，而且还对自己的信心造成伤害。\r\n　　当然根据能力选择只是网站关键词选取是否适合的一个方面，有的行业词太大，能够分出来的长尾词和辅助词特别多，有的甚至延伸到不同的行业去了，这时候就要注意选取，不要可以去做行业词，选取长尾词优化更好，例如我有位朋友是做“印花”的，但是长尾词中有“印花税”这样完全不是行业里的词，那做好印花都有可能造成很大的损失，而且他目前的业务只面向义乌，那么他肯定需要选择长尾词做优化，如义乌印花，义乌印花厂等。\r\n　　B、其次我们选取关键词的时候需要注意衡量这个关键词的价值。之前优化过很多的案例，有些关键词是很热的，做起来也相当的吃力，当然做到第一之后的效果是相当给力的，这样的关键词价值很高的，当然值得去选取，但是开始的时候我们是分辨不了的，这个时候就需要借助工具，例如百度指数，百度的相关搜索，还有站长伯乐，爱站等挖掘长尾词的工具，只要我们能分辨难度大小和价值就可以了。一般来说，我们搜索一个词，百度竞价越多，这个词的价值就越高，当然难度也就有点大了。另外，我们要挖掘一些能带来精准客户的长尾词，这些词虽然一天就几个搜索量，但是有时候来了就可以发展成客户。\r\n　　2、网站关键词的布局健康对于关键词的布局其实我之前都没有好的系统的想法，一直都是按照自己随性的设置，今天为了这篇文章做了一个简单的整理。\r\n　　A、布局首先要考虑关键词所在位置的权重。\r\n　　第一就是网站的标签。在标题标签里的权重当然会非常高，关键词标签和描述标签紧接着，其次一个页面我们权重最高的应该是H1标签，在这个标签里面我们要设置一些需要优化的关键词，接下来就是H2-H6，一些锚文本加粗的关键词位置权重也算不错。\r\n　　第二点就是网站的导航和次导航。一般来说导航里面插入一些关键词，或者说利用不同的关键词做导航会提升这个关键词的权重，因为这些导航链接链向的页面都是和这个关键词相关的知识，相关性得到了很好的保证。例如我们是卖秋装的，在导航里面假如秋装，就会导向所有秋装所在列表页面，用户就会在这个页面找到自己想要的秋装。\r\n　　第三，一般在一个页面的首部和尾部都是权重比较高的，所以需要在这些地方多布局一些关键词，让关键词在重要的位置多表现，权重自然提升了。\r\n　　B、关键词布局的三性：自然性，广泛性，长尾性。\r\n　　关键词在网站内部出现的时候一定要注意自然合理，特别是那些读起来都不通顺的，那就很不友好了，广泛性指的是我们要在网站的每个角落都注意设定一些关键词，特别是对于一些长尾关键词，需要做锚文本的就要做上，权重就在这样一点一滴中积累起来的，另外需要注意关键词布局的长尾性，越多的长尾我们能够引导的流量可能就越多，潜在的意向客户就会越多，所以长尾绝对需要重视，特别是我们每天进行网站更新的时候就需要注意在文章中进行长尾关键词建设，一般我都是利用网站标题优化长尾词，这样权重高，优化的排名也会很好。\r\n','0','<p>对于网站SEO健康度，前面已经为大家谈到三个方面《快速提升网站SEO健康度一：网站内容健康》《快速提升网站SEO健康度二：网站硬件健康》《快速提升网站SEO健康度三：网站内链健康》，对于网站的SEO健康其实还有很多，而对于关键词的重视程度相信大家也是有相当的认识，今天我要为大家介绍的就是网站关键词的选取与布局。</p><div>　　网站的关键词是非常关键的，我们在做SEO的时候对于关键词有两个要注意的，一个就是选取，选取关键词要选取对的关键词，选取适合自己实力，自己能搞定，还要注意这些关键词的效果;另外一个就是布局，布局要根据权重高低原则进行，另外要注意自然性，广泛性，长尾关键词是一个重要的方面。下面从两个方面为大家做一个简单的分析。</div><div>　　1、网站关键词的选取健康对于关键词的选取，前面我们已经跟大家做了一个简单的介绍，其实关键词的选取很简单，只需要做到下面的几个方面即可：</div><div>　　A、首先我们要看行业的关键词是否适合我们做，例如我们是做SEO的，但是你的实力没有那么大，肯定就不能面向全国做的，我们可以根据自己所在的地区进行选择，在北京就可以选择北京SEO，如果觉得北京SEO比较难做，而我又是湖北人，那么我也可以选择武汉SEO，这里我要说的就是根据自己的实力选择，盲目的选择一个超越自己实力的关键词，不仅仅难以优化，而且还对自己的信心造成伤害。</div><div>　　当然根据能力选择只是网站关键词选取是否适合的一个方面，有的行业词太大，能够分出来的长尾词和辅助词特别多，有的甚至延伸到不同的行业去了，这时候就要注意选取，不要可以去做行业词，选取长尾词优化更好，例如我有位朋友是做&ldquo;印花&rdquo;的，但是长尾词中有&ldquo;印花税&rdquo;这样完全不是行业里的词，那做好印花都有可能造成很大的损失，而且他目前的业务只面向义乌，那么他肯定需要选择长尾词做优化，如义乌印花，义乌印花厂等。</div><div>　　B、其次我们选取关键词的时候需要注意衡量这个关键词的价值。之前优化过很多的案例，有些关键词是很热的，做起来也相当的吃力，当然做到第一之后的效果是相当给力的，这样的关键词价值很高的，当然值得去选取，但是开始的时候我们是分辨不了的，这个时候就需要借助工具，例如百度指数，百度的相关搜索，还有站长伯乐，爱站等挖掘长尾词的工具，只要我们能分辨难度大小和价值就可以了。一般来说，我们搜索一个词，百度竞价越多，这个词的价值就越高，当然难度也就有点大了。另外，我们要挖掘一些能带来精准客户的长尾词，这些词虽然一天就几个搜索量，但是有时候来了就可以发展成客户。</div><div>　　2、网站关键词的布局健康对于关键词的布局其实我之前都没有好的系统的想法，一直都是按照自己随性的设置，今天为了这篇文章做了一个简单的整理。</div><div>　　A、布局首先要考虑关键词所在位置的权重。</div><div>　　第一就是网站的标签。在标题标签里的权重当然会非常高，关键词标签和描述标签紧接着，其次一个页面我们权重最高的应该是H1标签，在这个标签里面我们要设置一些需要优化的关键词，接下来就是H2-H6，一些锚文本加粗的关键词位置权重也算不错。</div><div>　　第二点就是网站的导航和次导航。一般来说导航里面插入一些关键词，或者说利用不同的关键词做导航会提升这个关键词的权重，因为这些导航链接链向的页面都是和这个关键词相关的知识，相关性得到了很好的保证。例如我们是卖秋装的，在导航里面假如秋装，就会导向所有秋装所在列表页面，用户就会在这个页面找到自己想要的秋装。</div><div>　　第三，一般在一个页面的首部和尾部都是权重比较高的，所以需要在这些地方多布局一些关键词，让关键词在重要的位置多表现，权重自然提升了。</div><div>　　B、关键词布局的三性：自然性，广泛性，长尾性。</div><div>　　关键词在网站内部出现的时候一定要注意自然合理，特别是那些读起来都不通顺的，那就很不友好了，广泛性指的是我们要在网站的每个角落都注意设定一些关键词，特别是对于一些长尾关键词，需要做锚文本的就要做上，权重就在这样一点一滴中积累起来的，另外需要注意关键词布局的长尾性，越多的长尾我们能够引导的流量可能就越多，潜在的意向客户就会越多，所以长尾绝对需要重视，特别是我们每天进行网站更新的时候就需要注意在文章中进行长尾关键词建设，一般我都是利用网站标题优化长尾词，这样权重高，优化的排名也会很好。</div><div>&nbsp;</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('42','14','0','2015年中国果汁饮料消费结构分析','','admin','1','0','','0','0','','0','','','','','2203','2014-10-11 16:35:09','admin','','/upload/images/201304/2203.jpg','1','1','分享四大注意点可避免网站优化过度第一点、关键字切勿堆砌过度在优化网站前就要确定好需要优化的关键字，然后再title、网站全体页面上进行恰当的组织，而不是盲目的堆砌许多关键字。这儿关于关键字在网站页面上的方案有个小窍门，那就是：保证优化关键字出现在第一个语句傍边，这个正是搜索引擎在抓取页面的时分所垂青并显示出来的。\r\n　　第二点、恰当的更新网站内容许多站长兄弟都用过信息收集器来给自个的网站添加内容，本来这点不是一个十分正确的做法。首要，搜索引擎不会喜爱重复性的东西，其次，收集的信息尽管多， 可是也缺罕见用的针对性，简略致使网站关键字密度的稀释。真实的做法是，恰当的更新一些有价值，互联网上罕见的内容。只需这样，不论是搜索引擎，用户，还 是自个，都大快人心。\r\n　　第三点、切勿收买过多的外链这点在新站傍边恰当普片，本来这样对网站是弊大于利的。搜索引擎十分喜爱新内容，新网站的参加，而这个新字要表现在哪？无非就是在互联网上没有这个站点的 任何痕迹，假定新站前期收买许多的外链，网站外链俄然暴增，尽管能够添加网站的权重，可是关于搜索引擎就不太友好了，会引起搜索引擎的怀疑。\r\n　　第四点、请不要过火相信你的技能有些兄弟技能很牛X，会运用一些窍门强制性的添加外链或是添加用户的到访（这点跟收买黑链殊途同归），这样尽管会在短时间内给网站带来流量，可是这样为了 优化而优化的心态是永久也留不住客户的，用户体会度欠好，乃至是欺骗了用户，下一次用户就不会买你的帐，而搜索引擎最注重的是什么？当然是用户的体会，如 果你开脱了它的天主，那么它一定也是不会让你好过的。','0','<p>分享四大注意点可避免网站优化过度第一点、关键字切勿堆砌过度在优化网站前就要确定好需要优化的关键字，然后再title、网站全体页面上进行恰当的组织，而不是盲目的堆砌许多关键字。这儿关于关键字在网站页面上的方案有个小窍门，那就是：保证优化关键字出现在第一个语句傍边，这个正是搜索引擎在抓取页面的时分所垂青并显示出来的。</p><div>　　第二点、恰当的更新网站内容许多站长兄弟都用过信息收集器来给自个的网站添加内容，本来这点不是一个十分正确的做法。首要，搜索引擎不会喜爱重复性的东西，其次，收集的信息尽管多， 可是也缺罕见用的针对性，简略致使网站关键字密度的稀释。真实的做法是，恰当的更新一些有价值，互联网上罕见的内容。只需这样，不论是搜索引擎，用户，还 是自个，都大快人心。</div><div>　　第三点、切勿收买过多的外链这点在新站傍边恰当普片，本来这样对网站是弊大于利的。搜索引擎十分喜爱新内容，新网站的参加，而这个新字要表现在哪？无非就是在互联网上没有这个站点的 任何痕迹，假定新站前期收买许多的外链，网站外链俄然暴增，尽管能够添加网站的权重，可是关于搜索引擎就不太友好了，会引起搜索引擎的怀疑。</div><div>　　第四点、请不要过火相信你的技能有些兄弟技能很牛X，会运用一些窍门强制性的添加外链或是添加用户的到访（这点跟收买黑链殊途同归），这样尽管会在短时间内给网站带来流量，可是这样为了 优化而优化的心态是永久也留不住客户的，用户体会度欠好，乃至是欺骗了用户，下一次用户就不会买你的帐，而搜索引擎最注重的是什么？当然是用户的体会，如 果你开脱了它的天主，那么它一定也是不会让你好过的。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('46','14','0','冰峰挺进纯净水领域 饮用水利润比果汁饮料利润高(图)','','admin','1','0','','0','0','','0','','','','','2206','2014-10-11 16:40:02','admin','','/upload/images/201304/2206.jpg','1','1','一、避免友链牵连赏罚。友情链接作为较高质量外链的一种，在传递权重上的能力决然是要高于其他链接的。因为年夜部门友链交流城市选用链接锚文本的形式，所以对方针关头词排名排名的影响也是相当大的。当然，由于友情链接的这种特点，在传递责罚时，也会起到较大的影响。\r\n　　若是与你交换友链的上网站惨遭惩罚，只要友链还在，那你必然受牵连。一向兢兢业业的你也就会被SEO搜索引擎牵连惩罚，从而导致百度引擎快照不更新的情形。按期搜检你的友情链接，发现问题实时与对方联系、沟通、措置。\r\n　　二、网站切莫频仍改版。\r\n　　这点搜罗网站的title、及网站的结构代码。当你确立网站的title、信息与架构、主题时要稳重。一旦确立尽可能的不要更改，即使要改，也要慢慢逐步的改削。不到万不得已，万万不要一次性大改版。\r\n　　一个频繁更改网站信息及架构的网站，百度会认为你还没有筹备好，会把你再次丢进.考查期.。更有甚者，直接k站。如斯一来，网站的百度快照又若何更新三、远离化手法。\r\n　　化就是俗称的.作弊.，诸如堆砌环节字、潜匿链接、桥页等等等等。这些化手段都是经由过程.棍骗.搜索引擎或用户，来达到提高枢纽词排名的目的。百度和谷歌等搜索引擎都是峻厉冲击这些化行为的。小到.百度11位.，大到降权甚至k站。假如你揭竿而起，视搜索引擎为无物。那么，搜索引擎就不会对你手下留情。而网站的快照也就很有可能遏制更新或者倒退。不外对于k站来说，快照不更新倒只是小时而已。\r\n　　四、保证空间的不变性。\r\n　　一个经常宕机的处事器，就别想奢望获得搜索引擎的青睐，更别想快照更新的勤快。试想一下，百度蜘蛛经常爬到你的网站，却时常遭到无法打开的情况。那么，百度如何抓取网站的新内容，又如何更新快照五、坚持内容页面的更新。\r\n　　笔者的不雅概念是，即使搜索引擎蜘蛛经常爬到你的网站，可是如果没有新的内容让它抓取，百度快照也就没有了更新可言。所以，你想要网站的快照更新的勤快，那么，网站的内容及页面也要更新的勤快。\r\n　　不过，复制粘贴的内容笔者劝列位仍是越少越好。蜘蛛见异思迁，巨匠都是知道的。如果你持久的复制粘贴，不仅不能吸引蜘蛛更新网站的快照，反而还会遭到蜘蛛的厌弃。青岛沙盘模子?六、坚持培植外链。\r\n　　网站的外链建设与内容更新都是一样需要持续性去做的事，千万不成三天打鱼两天晒网。可以这么说，拿小我博客来说，相对信息量比其他站要小的多。你可以3天更新一篇文章，切莫一天不增添外链。拥有复杂的外链系统，才能更多的指导蜘蛛爬向你的网站。然后抓取新的内容，是以更新百度快照。\r\n　　还有，新站在做外链的时辰，千万不要想着一顿吃成胖子。建站初期，天天建设外链的数目可以少一点，逐步增加。然则，切记要坚持，','0','<p>&nbsp;　　一、避免友链牵连赏罚。</p><p>　　友情链接作为较高质量外链的一种，在传递权重上的能力决然是要高于其他链接的。因为年夜部门友链交流城市选用链接锚文本的形式，所以对方针关头词排名排名的影响也是相当大的。当然，由于友情链接的这种特点，在传递责罚时，也会起到较大的影响。</p><p>　　若是与你交换友链的上网站惨遭惩罚，只要友链还在，那你必然受牵连。一向兢兢业业的你也就会被SEO搜索引擎牵连惩罚，从而导致百度引擎快照不更新的情形。按期搜检你的友情链接，发现问题实时与对方联系、沟通、措置。</p><p>　　二、网站切莫频仍改版。</p><p>　　这点搜罗网站的title、及网站的结构代码。当你确立网站的title、信息与架构、主题时要稳重。一旦确立尽可能的不要更改，即使要改，也要慢慢逐步的改削。不到万不得已，万万不要一次性大改版。</p><p>　　一个频繁更改网站信息及架构的网站，百度会认为你还没有筹备好，会把你再次丢进.考查期.。更有甚者，直接k站。如斯一来，网站的百度快照又若何更新三、远离化手法。</p><p>　　化就是俗称的.作弊.，诸如堆砌环节字、潜匿链接、桥页等等等等。这些化手段都是经由过程.棍骗.搜索引擎或用户，来达到提高枢纽词排名的目的。百度和谷歌等搜索引擎都是峻厉冲击这些化行为的。小到.百度11位.，大到降权甚至k站。假如你揭竿而起，视搜索引擎为无物。那么，搜索引擎就不会对你手下留情。而网站的快照也就很有可能遏制更新或者倒退。不外对于k站来说，快照不更新倒只是小时而已。</p><p>　　四、保证空间的不变性。</p><p>　　一个经常宕机的处事器，就别想奢望获得搜索引擎的青睐，更别想快照更新的勤快。试想一下，百度蜘蛛经常爬到你的网站，却时常遭到无法打开的情况。那么，百度如何抓取网站的新内容，又如何更新快照五、坚持内容页面的更新。</p><p>　　笔者的不雅概念是，即使搜索引擎蜘蛛经常爬到你的网站，可是如果没有新的内容让它抓取，百度快照也就没有了更新可言。所以，你想要网站的快照更新的勤快，那么，网站的内容及页面也要更新的勤快。</p><p>　　不过，复制粘贴的内容笔者劝列位仍是越少越好。蜘蛛见异思迁，巨匠都是知道的。如果你持久的复制粘贴，不仅不能吸引蜘蛛更新网站的快照，反而还会遭到蜘蛛的厌弃。青岛沙盘模子?六、坚持培植外链。</p><p>　　网站的外链建设与内容更新都是一样需要持续性去做的事，千万不成三天打鱼两天晒网。可以这么说，拿小我博客来说，相对信息量比其他站要小的多。你可以3天更新一篇文章，切莫一天不增添外链。拥有复杂的外链系统，才能更多的指导蜘蛛爬向你的网站。然后抓取新的内容，是以更新百度快照。</p><p>　　还有，新站在做外链的时辰，千万不要想着一顿吃成胖子。建站初期，天天建设外链的数目可以少一点，逐步增加。然则，切记要坚持，</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('44','14','0','拍婚纱照也可以分期付款 - 现代快报多媒体数字报刊平台','','admin','1','0','','0','0','','0','','','','','2204','2014-10-11 16:37:42','admin','','/upload/images/201304/2204.jpg','1','1','1.策划(职称炒作实在说的难听逆耳小半便是炒作，说的业余小半那便是策划。一度好的疑难以及好的情势可以给用户带来反感度以及退步转发、共享率!那样我们要若何敷衍外链情势制止策划呢?童鞋们大概许都看过电视机大要一些带有往事素质的作品，而这类作品都是颠末历程策划职员细致策划的，是以他们的造访量都及高而且用户都非常喜好。说点譬如：譬如拿一些名士名站等敷衍于用户体贴的论题制止策划!千万最重要的是没有要涉及侵权梗概没有犯警就行郑州SEO培训2.人脉接洽作为互联网络职业的我们最重要的大概许便是人脉，当我们的人脉会聚到注定的程度时间敷衍于我们前期的事变以及睁开都会失落去较年夜的帮手。当你方才进入某个职业的时间没有人脉，想要别人给你承接，要么你到群里的吆喝着换情谊联接，吆喝半响上去别人看你的上网站没有权重、没有流量根柢就瞧没有起你网站，更没有会给你加联接!不异除了你够亏弱衰弱，你的网站都非常良好，到阿谁时间的你更没有会瞧没有起那些残余站点了。而自个有人脉的话，就可以间接的跟其住口，正常都邑给你加挽联接。\r\n　　3.构思构思跟反面的策划有点近似千篇一律!凭据现在我们的生理判断出，如今的人好奇心都非常强，分外是敷衍一些搞笑的构思、现已好奇的论题都分外锐敏!相似正在优酷里边的构思搞笑视频，若是说你自个可以想要这类视频，尔后正在视频里边加上自个网站的联接!终极通过该署用户看完后一直的给你转发、共享。那样没有可思议终极你的外链会抵达一度怎样办的程度允在增长4.情势某个斗劲我们就特殊非常明白了，但是这笔还是要简练下自个的一些不雅观点共享给童鞋们。做情势最稀有的便是写软文!把一些有价格的货品共享给有需求的人，进而得到转发以及搜集。一同还可以结识到更多的人脉!正常的人写软文都是比较间接的。作者主意写软文的人最佳凭据自个的零丁的体例来制止翻译的策划!让用户正在获取到自个想要的货色一同还能使得心绪变得开畅。那样的软翰墨是顺遂的软文。\r\n　　通过之上四点我们可以鲜明较着的看进去，该署要领完全跟搜刮引擎优化武艺没有搭边的。最次要也还是要陈诉我们我们没有要被搜刮引擎优化给搜刮引擎优化了!要学会跳出搜刮引擎优化某个制约来敷衍待搜刮引擎优化，叫做旁观者清!当你跳出某个制约的时间你才气看到更多你看没有到的货色!更没有要把搜刮引擎优化想的偏激奇妙了!','0','<p>1.策划(职称炒作实在说的难听逆耳小半便是炒作，说的业余小半那便是策划。一度好的疑难以及好的情势可以给用户带来反感度以及退步转发、共享率!那样我们要若何敷衍外链情势制止策划呢?童鞋们大概许都看过电视机大要一些带有往事素质的作品，而这类作品都是颠末历程策划职员细致策划的，是以他们的造访量都及高而且用户都非常喜好。说点譬如：譬如拿一些名士名站等敷衍于用户体贴的论题制止策划!千万最重要的是没有要涉及侵权梗概没有犯警就行郑州SEO培训2.人脉接洽作为互联网络职业的我们最重要的大概许便是人脉，当我们的人脉会聚到注定的程度时间敷衍于我们前期的事变以及睁开都会失落去较年夜的帮手。当你方才进入某个职业的时间没有人脉，想要别人给你承接，要么你到群里的吆喝着换情谊联接，吆喝半响上去别人看你的上网站没有权重、没有流量根柢就瞧没有起你网站，更没有会给你加联接!不异除了你够亏弱衰弱，你的网站都非常良好，到阿谁时间的你更没有会瞧没有起那些残余站点了。而自个有人脉的话，就可以间接的跟其住口，正常都邑给你加挽联接。</p><div>　　3.构思构思跟反面的策划有点近似千篇一律!凭据现在我们的生理判断出，如今的人好奇心都非常强，分外是敷衍一些搞笑的构思、现已好奇的论题都分外锐敏!相似正在优酷里边的构思搞笑视频，若是说你自个可以想要这类视频，尔后正在视频里边加上自个网站的联接!终极通过该署用户看完后一直的给你转发、共享。那样没有可思议终极你的外链会抵达一度怎样办的程度允在增长4.情势某个斗劲我们就特殊非常明白了，但是这笔还是要简练下自个的一些不雅观点共享给童鞋们。做情势最稀有的便是写软文!把一些有价格的货品共享给有需求的人，进而得到转发以及搜集。一同还可以结识到更多的人脉!正常的人写软文都是比较间接的。作者主意写软文的人最佳凭据自个的零丁的体例来制止翻译的策划!让用户正在获取到自个想要的货色一同还能使得心绪变得开畅。那样的软翰墨是顺遂的软文。</div><div>　　通过之上四点我们可以鲜明较着的看进去，该署要领完全跟搜刮引擎优化武艺没有搭边的。最次要也还是要陈诉我们我们没有要被搜刮引擎优化给搜刮引擎优化了!要学会跳出搜刮引擎优化某个制约来敷衍待搜刮引擎优化，叫做旁观者清!当你跳出某个制约的时间你才气看到更多你看没有到的货色!更没有要把搜刮引擎优化想的偏激奇妙了!</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('45','14','0','果汁饮料行业保健饮品第一品牌','','admin','1','0','','0','0','','0','','','','','2205','2014-10-11 16:37:52','admin','','/upload/images/201304/2205.jpg','1','1','权重的盘算要领是什么样的！在搜刮引擎优化词库中，存在一个名词，叫“权重”，权重是网页本身与查询词（以下俗称关键字）之间的干系度盘算。搜刮引擎在用户发送查找指令后，通常是凭据网页权重来举行排序，通常所说的网站权重，可以明白为网站首页的权重值。\r\n　　网页权重的盘算依靠于基础权重、链接权重、用户评价权重三个方面：\r\n　　网页基础权重：重要受到关键字的绝对权重、关键字频率、网页长度（与网页巨细区离开）的影响。\r\n　　1、绝对权重搜刮引擎会对任何一个新的网页赋予一个缺省的权重值（有喜好的朋侪可以相识下TF*IDF算法），WEB尺度化是提升基础权重的紧急因素，一些标签将影响关键字的权重值，终极的基础权重值是这些因素举行相加得到的；2、关键字频率这一因素各人应该都非常清楚了，关键字频率的理论数据为2%-8%。关键字在网页中的位置都市存在一个权重值，对每个位置上的权重举行求和盘算，则可以得到关键字在整个页面的权重值。\r\n　　3、网页长度上面提到的盘算方法都很公平，但假如思量到雷同的关键字出如今差别的网页中，网页的长度越长，那么，关键字可得到的权重值就会越高，以是，某一关键字的权重值在肯定程度上还受网页长度的影响。\r\n　　网页链接权重：重要是内部链接和外部链接。敷衍内部链接来讲，为了公平，搜刮引擎一重般不会给较多的权分值，特殊是一些牢固位置的链接，这些简直有利用搜刮引擎相识整个网站结构，但权重分值一样平常没有运动链接（内容链接）高。\r\n　　敷衍新的网页来讲，搜刮引擎在链接上会优先赐与一个补偿值，如许有助于它得到更多的链接与用户评价。\r\n　　外部链接对网页的影响就像关键字密度一样被各人所存眷，链接笔墨地点页面的权重值、链接位置、链接数目都市在肯定程度上给促进网页链接权重增长。\r\n　　用户评价权重：重要是搜刮引擎对搜刮结果中网页的用户评价盘算。\r\n　　当用户搜刮某一关键字的时间，总是先欣赏搜刮结果的网页标题与择要部门，末了再决定点击本身以为有效的网页，若某个链接固然在返回结果表上出现的位置不太靠前，但被选取点击的次数比力多，于是搜刮引擎应该感慨该链接是比力受接待的，其位置应该往前调。\r\n　　对与如许的评价方法，敷衍谁人排名考前的网页有很大的上风，而且用户并非只存眷搜刮结果第一页，第二页及反面的，也有大概被存眷，那么，在这里，搜刮引擎会对这些链接引入一个补偿值。\r\n　　这里的补偿值是凭据用户点击搜刮结果每页的概率来盘算补偿因子，末了用这个补偿因子与用户评价权重值乘积求和得到。\r\n　　附：百度权重盘算要领在谷歌推出中国市场之后，百度变得是越来越紧急了，百度权重固然不是由百度提出来的，但是却被浩繁的站长所追捧，关于探究百度权重盘算要领，若何进步百度权重，百度权重是什么意思的文章越发是到处都是，本日搜刮引擎优化天空就简单的扥想一下：百度权重的盘算要领：\r\n　　关于站长东西内里百度权重的盘算要领：\r\n　　百度流量在1到100之间的时间百度权重为百度流量在100到500之间百度权重为百度流量在500到1000之间百度权重为1000到5000之间的就是5000到10000就是10000到50000是5万到20万是20万到100是超过100万是网站关键字排名直接可以大概影响百度流量，而百度流量的巨细直接决定了百度权重的巨细（这就是站长东西现在对百度权重的逆向推理要领，以后大概会篡改）特殊阐发：站长东西的权重盘算要领是比力笼统的，只能大抵的看出网站权重，并不精准！百度从未公然其权重盘算要领！\r\n　　百度自身也曾多次阐发：并没有百度权重这么一说，固然为什么会受到这么多搜刮引擎优化er的追捧，自然是有缘故起因的。','0','<p>权重的盘算要领是什么样的！在搜刮引擎优化词库中，存在一个名词，叫&ldquo;权重&rdquo;，权重是网页本身与查询词（以下俗称关键字）之间的干系度盘算。搜刮引擎在用户发送查找指令后，通常是凭据网页权重来举行排序，通常所说的网站权重，可以明白为网站首页的权重值。</p><div>　　网页权重的盘算依靠于基础权重、链接权重、用户评价权重三个方面：</div><div>　　网页基础权重：重要受到关键字的绝对权重、关键字频率、网页长度（与网页巨细区离开）的影响。</div><div>　　1、绝对权重搜刮引擎会对任何一个新的网页赋予一个缺省的权重值（有喜好的朋侪可以相识下TF*IDF算法），WEB尺度化是提升基础权重的紧急因素，一些标签将影响关键字的权重值，终极的基础权重值是这些因素举行相加得到的；2、关键字频率这一因素各人应该都非常清楚了，关键字频率的理论数据为2%-8%。关键字在网页中的位置都市存在一个权重值，对每个位置上的权重举行求和盘算，则可以得到关键字在整个页面的权重值。</div><div>　　3、网页长度上面提到的盘算方法都很公平，但假如思量到雷同的关键字出如今差别的网页中，网页的长度越长，那么，关键字可得到的权重值就会越高，以是，某一关键字的权重值在肯定程度上还受网页长度的影响。</div><div>　　网页链接权重：重要是内部链接和外部链接。敷衍内部链接来讲，为了公平，搜刮引擎一重般不会给较多的权分值，特殊是一些牢固位置的链接，这些简直有利用搜刮引擎相识整个网站结构，但权重分值一样平常没有运动链接（内容链接）高。</div><div>　　敷衍新的网页来讲，搜刮引擎在链接上会优先赐与一个补偿值，如许有助于它得到更多的链接与用户评价。</div><div>　　外部链接对网页的影响就像关键字密度一样被各人所存眷，链接笔墨地点页面的权重值、链接位置、链接数目都市在肯定程度上给促进网页链接权重增长。</div><div>　　用户评价权重：重要是搜刮引擎对搜刮结果中网页的用户评价盘算。</div><div>　　当用户搜刮某一关键字的时间，总是先欣赏搜刮结果的网页标题与择要部门，末了再决定点击本身以为有效的网页，若某个链接固然在返回结果表上出现的位置不太靠前，但被选取点击的次数比力多，于是搜刮引擎应该感慨该链接是比力受接待的，其位置应该往前调。</div><div>　　对与如许的评价方法，敷衍谁人排名考前的网页有很大的上风，而且用户并非只存眷搜刮结果第一页，第二页及反面的，也有大概被存眷，那么，在这里，搜刮引擎会对这些链接引入一个补偿值。</div><div>　　这里的补偿值是凭据用户点击搜刮结果每页的概率来盘算补偿因子，末了用这个补偿因子与用户评价权重值乘积求和得到。</div><div>　　附：百度权重盘算要领在谷歌推出中国市场之后，百度变得是越来越紧急了，百度权重固然不是由百度提出来的，但是却被浩繁的站长所追捧，关于探究百度权重盘算要领，若何进步百度权重，百度权重是什么意思的文章越发是到处都是，本日搜刮引擎优化天空就简单的扥想一下：百度权重的盘算要领：</div><div>　　关于站长东西内里百度权重的盘算要领：</div><div>　　百度流量在1到100之间的时间百度权重为百度流量在100到500之间百度权重为百度流量在500到1000之间百度权重为1000到5000之间的就是5000到10000就是10000到50000是5万到20万是20万到100是超过100万是网站关键字排名直接可以大概影响百度流量，而百度流量的巨细直接决定了百度权重的巨细（这就是站长东西现在对百度权重的逆向推理要领，以后大概会篡改）特殊阐发：站长东西的权重盘算要领是比力笼统的，只能大抵的看出网站权重，并不精准！百度从未公然其权重盘算要领！</div><div>　　百度自身也曾多次阐发：并没有百度权重这么一说，固然为什么会受到这么多搜刮引擎优化er的追捧，自然是有缘故起因的。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('47','14','0','2016-2022年中国纯果汁饮料市场分析与投资前景研究报告','','admin','1','0','','0','0','','0','','','','','2207','2014-10-11 16:40:48','admin','','/upload/images/201304/2207.jpg','1','1','我们做SEO优化一直都在强调不要轻易更改我们网站的标题，最好在做站初期就规划好自己的网站标题。要不然后期再做修改对我们的影响是可想而知的。就像你开一个店，如果天天改招牌，对你店里的生意影响是一样的。但是有些站一定要改，那么有没有好的办法，或者说修改TITLE后，如何快速恢复网站的权重呢最近我有个朋友一个站，上线了一个多月后听人家说网站的标题没有写好，结果他把整个标题给更改了，结果是导致搜索引擎的蜘蛛几周都没有光临他那个站，所以说网站权重不够的话，轻易更改标题很容易导致网站降权的。这个和我们现实生活差不多，我们本来对一个人相当熟悉，结果他把面部给整容了，那么我们在短时间能认识吗?肯定不会了，我们就必须花一段时间来重新认识，我们的网站标题也是一样，当我们更改标题后，搜索引擎是会需要花一段时间重新考察我们网站的，所以建议大家在建站前期想好网站标题，后期就不要修改了。但是现在我的这位朋友已经修改了文章标题，该怎么恢复网站权重呢?今天十堰SEO就来和大家谈谈网站标题更改后如何恢复网站权重：\r\n　　一 、增加网站内容的质量在修改网站标题的一段时间内，尽可能的每天多更新几篇高质量的文章，因为搜索引擎是最喜欢这样的文章的，这样才能增加搜索引擎蜘蛛来我们网站的次数，让我们的网站早点通过审核期。\r\n　　二 、去高质量的论坛，博客发外链去权重高的论坛，博客通过发链接诱饵，吸引蜘蛛来访问我们的网站，因为这些地方的蜘蛛访问量很大，通过这样的方式把蜘蛛带到我们的网站，增加蜘蛛访问你网站的频率，这样才会在最短的时间内让搜索引擎更新你的网站。\r\n　　三 、通过友情链接带动如果我们有资源的话，可以找一些网站快照新的站点做友情链接，让这些站点带带，网站快照新代表蜘蛛是很喜欢的，说明蜘蛛访问的次数也是挺多的，这样也可以把蜘蛛引导到我们的站点。当然我们也可以通过友情链接交换平台，很多链接平台类收录很大的，可以把我们的网站提交到这些平台，因为友情链接平台因为有着大量的站长在上面更新，所以更新速度非常的快，有利于吸引蜘蛛到上来。\r\n　　四 、门户站点博客像新浪，搜狐，天涯，网易这些博客的权重还是很高的，而且收录比较快，我们可以通过这些平台来引导蜘蛛去访问我们网站的次数，加快网站更新的速度。\r\n　　五 、可以通过百度自己的产品百度对自己的产品待遇还是很好的，我们可以通过百度空间，百度百科，百度知道，百度贴吧等等，发布我们的内容，尽量带上链接地址，这样可以可以加快更新网站的内容。\r\n　　通过上面六个方法，坚持4-8周的时间(一般百度的审核期是这么长)，相信网站的权重是会回来的，以上仅为个人观点，欢迎大家共同探讨，共同交流学习。','0','<p>&nbsp;　　我们做SEO优化一直都在强调不要轻易更改我们网站的标题，最好在做站初期就规划好自己的网站标题。要不然后期再做修改对我们的影响是可想而知的。就像你开一个店，如果天天改招牌，对你店里的生意影响是一样的。但是有些站一定要改，那么有没有好的办法，或者说修改TITLE后，如何快速恢复网站的权重呢最近我有个朋友一个站，上线了一个多月后听人家说网站的标题没有写好，结果他把整个标题给更改了，结果是导致搜索引擎的蜘蛛几周都没有光临他那个站，所以说网站权重不够的话，轻易更改标题很容易导致网站降权的。这个和我们现实生活差不多，我们本来对一个人相当熟悉，结果他把面部给整容了，那么我们在短时间能认识吗?肯定不会了，我们就必须花一段时间来重新认识，我们的网站标题也是一样，当我们更改标题后，搜索引擎是会需要花一段时间重新考察我们网站的，所以建议大家在建站前期想好网站标题，后期就不要修改了。但是现在我的这位朋友已经修改了文章标题，该怎么恢复网站权重呢?今天十堰SEO就来和大家谈谈网站标题更改后如何恢复网站权重：</p><div>　　一 、增加网站内容的质量在修改网站标题的一段时间内，尽可能的每天多更新几篇高质量的文章，因为搜索引擎是最喜欢这样的文章的，这样才能增加搜索引擎蜘蛛来我们网站的次数，让我们的网站早点通过审核期。</div><div>　　二 、去高质量的论坛，博客发外链去权重高的论坛，博客通过发链接诱饵，吸引蜘蛛来访问我们的网站，因为这些地方的蜘蛛访问量很大，通过这样的方式把蜘蛛带到我们的网站，增加蜘蛛访问你网站的频率，这样才会在最短的时间内让搜索引擎更新你的网站。</div><div>　　三 、通过友情链接带动如果我们有资源的话，可以找一些网站快照新的站点做友情链接，让这些站点带带，网站快照新代表蜘蛛是很喜欢的，说明蜘蛛访问的次数也是挺多的，这样也可以把蜘蛛引导到我们的站点。当然我们也可以通过友情链接交换平台，很多链接平台类收录很大的，可以把我们的网站提交到这些平台，因为友情链接平台因为有着大量的站长在上面更新，所以更新速度非常的快，有利于吸引蜘蛛到上来。</div><div>　　四 、门户站点博客像新浪，搜狐，天涯，网易这些博客的权重还是很高的，而且收录比较快，我们可以通过这些平台来引导蜘蛛去访问我们网站的次数，加快网站更新的速度。</div><div>　　五 、可以通过百度自己的产品百度对自己的产品待遇还是很好的，我们可以通过百度空间，百度百科，百度知道，百度贴吧等等，发布我们的内容，尽量带上链接地址，这样可以可以加快更新网站的内容。</div><div>　　通过上面六个方法，坚持4-8周的时间(一般百度的审核期是这么长)，相信网站的权重是会回来的，以上仅为个人观点，欢迎大家共同探讨，共同交流学习。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('48','14','0','荷兰拟提高矿泉水和果汁饮料征税税率','','admin','1','0','','0','0','','0','','','','','2208','2014-10-11 16:41:54','admin','','/upload/images/201304/2208.jpg','1','1','强调剂性诉求的上网站多以成立企业抽象为主，以效劳为导向。那儿那里的效劳有两规模含意，一是自身企业需要的即是效劳，如效劳事业；二是企业的售前、售后效劳。经由效劳晋升企业正在存户心中的位置，从而推进营销，这一典型则定然要正视网站的格调设想和创意，以理性诉求为主，苦心衬着或者营建一种特部门企业空气，苦心默示一种网站或者货色及效劳的价钱感，决没有能顿挫顿挫，更没有能可是将保守的效劳搬到网下去，我看面前绝年夜年夜少数网站就是那样，咱们需要什么什么效劳，欢送与咱们联络，之类，试想，互联收集然则一度虚构的前提，您没有给阅读者营建一种守信的气氛，别人凭什么置信你的效劳呢？事实中企业的信用正在网上一样无效。你能够找没有出本人真正存正在主力的中心，没有主要，咱们能够经过网站创立，回过甚来扫视一下本人的公司、企业，从新为企业塑造一度新的抽象定位，并正在当前的经营中下力量增强创设，从而外行业中自成一家，力争正在顾客心中营建一种簇新的抽象，并发生思疑感。请您细心思忖一下：SEO搜索引擎络上成千盈百的共事业网站，顾客干什么购置或者运用你的货物或者效劳，而没有取舍合作者的货物或者效劳？市道经济是合作性的。你必需为世人取舍你的品牌而没有是别人的品牌创举说辞。因而，一局限，要增强出格气氛的营建，正在理性诉求凹凸功力，消弭企业与顾客正在功夫与时刻上的距离，构建存户忠厚度，增多存户价格，经过拓展、构建、维持并强化存户联系使自己效益最年夜化 ； 另一范围，好好设想你的网站，配合的设想可以营建一种共同的企业文明——互联网络企业文明，或者许这与保守营销格调没有符，没有重要，没有要过度于依托保守营销！ 网站建树：\r\n　　剖析规范楷模也对比罕有，便是将下面而二者连系兴起，因为关于统一种货物，没有同的人能够基于没有同的抉择——偶然货物自身的特功能够决议你是感性的仍是理性的。因而，正在网站的气氛营建上就要寄望区分：假如某一范围没有能充沛注明货物或者效劳的特点，就要将二者联合兴起，正在没有同的全体分辩遏制感性和理性的诉求，借以打动没有同类型的顾客，既以少量的现实一般企业的手艺劣势，又营建一种理性的气氛，强调货物或者效劳给人带来的价格，经过二者的联合，零丁营建企业共同的气氛。正常来说，以理性为主的网站多为消费范例的企业，而理性诉求为主的网站多为效劳范例的企业，万万这种总结法子并没有是相对于的，无意，作为消费型的企业，其网站能够是效劳型的，也有能够是说明型的，也有能够一度网站正在没有同声代取舍没有同范例的网站，正在诉求格调上也就没有一样。但无论是什么范例，照旧那句话，所有为营销效劳，那样，网站能力施展其真正的价格。','0','<p>强调剂性诉求的上网站多以成立企业抽象为主，以效劳为导向。那儿那里的效劳有两规模含意，一是自身企业需要的即是效劳，如效劳事业；二是企业的售前、售后效劳。经由效劳晋升企业正在存户心中的位置，从而推进营销，这一典型则定然要正视网站的格调设想和创意，以理性诉求为主，苦心衬着或者营建一种特部门企业空气，苦心默示一种网站或者货色及效劳的价钱感，决没有能顿挫顿挫，更没有能可是将保守的效劳搬到网下去，我看面前绝年夜年夜少数网站就是那样，咱们需要什么什么效劳，欢送与咱们联络，之类，试想，互联收集然则一度虚构的前提，您没有给阅读者营建一种守信的气氛，别人凭什么置信你的效劳呢？事实中企业的信用正在网上一样无效。你能够找没有出本人真正存正在主力的中心，没有主要，咱们能够经过网站创立，回过甚来扫视一下本人的公司、企业，从新为企业塑造一度新的抽象定位，并正在当前的经营中下力量增强创设，从而外行业中自成一家，力争正在顾客心中营建一种簇新的抽象，并发生思疑感。请您细心思忖一下：SEO搜索引擎络上成千盈百的共事业网站，顾客干什么购置或者运用你的货物或者效劳，而没有取舍合作者的货物或者效劳？市道经济是合作性的。你必需为世人取舍你的品牌而没有是别人的品牌创举说辞。因而，一局限，要增强出格气氛的营建，正在理性诉求凹凸功力，消弭企业与顾客正在功夫与时刻上的距离，构建存户忠厚度，增多存户价格，经过拓展、构建、维持并强化存户联系使自己效益最年夜化 ； 另一范围，好好设想你的网站，配合的设想可以营建一种共同的企业文明&mdash;&mdash;互联网络企业文明，或者许这与保守营销格调没有符，没有重要，没有要过度于依托保守营销！ 网站建树：</p><div>　　剖析规范楷模也对比罕有，便是将下面而二者连系兴起，因为关于统一种货物，没有同的人能够基于没有同的抉择&mdash;&mdash;偶然货物自身的特功能够决议你是感性的仍是理性的。因而，正在网站的气氛营建上就要寄望区分：假如某一范围没有能充沛注明货物或者效劳的特点，就要将二者联合兴起，正在没有同的全体分辩遏制感性和理性的诉求，借以打动没有同类型的顾客，既以少量的现实一般企业的手艺劣势，又营建一种理性的气氛，强调货物或者效劳给人带来的价格，经过二者的联合，零丁营建企业共同的气氛。正常来说，以理性为主的网站多为消费范例的企业，而理性诉求为主的网站多为效劳范例的企业，万万这种总结法子并没有是相对于的，无意，作为消费型的企业，其网站能够是效劳型的，也有能够是说明型的，也有能够一度网站正在没有同声代取舍没有同范例的网站，正在诉求格调上也就没有一样。但无论是什么范例，照旧那句话，所有为营销效劳，那样，网站能力施展其真正的价格。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('49','15','0','果汁饮料含糖高 运动后千万别碰这些食物','','admin','1','0','','0','0','','0','','','','','2308','2014-10-11 16:48:03','admin','','/upload/images/201304/2308.jpg','1','1','SEO优化也即是查找引擎优化，SEO查找引擎优化也即是博客内容被查找引擎录入及优先排序，以此添加博客的点击率和曝光度，终究提升博客的归纳能力。写博客的人，内容不只要对用户友爱，让大部门人都能看懂，并且也要对查找引擎友爱。这儿首要介绍下卢松松常用的博客SEO优化窍门。 \r\n   1：博客要经常连接更新，文字一直紧紧盘绕关头字，环绕上彀站主题。 \r\n   2：SEO优化重点以文章内容页优化为主。 \r\n   3：恰当给每个页面添加环节词页面描绘索引擎抓取器标签。 \r\n   4：在新文章中恰当添加一些老文章的连接，文章的内部连接必定要天然。 \r\n   5：新博客可以建立单一纽带词战略，以增强网站对查找引擎的威望性。如卢松松博客创建初期只要一个网站设计关键词。 \r\n   6：节目分类尽量运用目录方式。如：不是 \r\n   7：可以在页面底部加上站点地图HTML名目是给用户看的，XML花式是给查找引擎看的。 \r\n   8：斗劲首要文章的URL可以运用拼音、英文和朋分线等网址构造。 \r\n   9：外部连接扶植很重要，新博客推荐运用东西 \r\n   10：废物留言一定要删去，很是影响排行。 \r\n   11：记住给每个博文插图加上和文章内容有关的alt信息，并在图像附近添加有关信息。 \r\n   12：文章中不异的关键字不能过多，如果非要堆砌关键字，可恰当运用长尾关键字。 \r\n   13：每篇文章的结尾处可干预“自创文章如G标签可以增强主题的有关性和被查找的概率。 \r\n   15：文章的Title最佳以“文章疑问-博客称号”方式呈现。 \r\n   16：文章标题最佳能泛起一次关键字。 \r\n   17：关键字最佳在第一段或最终一段可以呈现。 \r\n   18：不要选择极端热门的关键字。 \r\n   19：不要一次性添加很多毗邻，更不要一次性删减很多毗邻。 \r\n   20：坚持! \r\n   SEO到今朝停止，最威望的定义为： \r\n   查找引擎优化engine 简称查找引擎优化指遵循查找引擎的查找事理，对网站机关、页面文字说话和站点间互动交际略等进行合理计划布置，以改进网站在查找引擎的查找默示，进而添加客户发现并访谒网站的可能性的这样一个进程. 查找引擎优化也是一种科学的成长不美观和编制论，它跟着查找引擎的开展而开展, 一起也促进了查找引擎的开展。','0','<p>SEO优化也即是查找引擎优化，SEO查找引擎优化也即是博客内容被查找引擎录入及优先排序，以此添加博客的点击率和曝光度，终究提升博客的归纳能力。写博客的人，内容不只要对用户友爱，让大部门人都能看懂，并且也要对查找引擎友爱。这儿首要介绍下卢松松常用的博客SEO优化窍门。&nbsp;</p><div>&nbsp; &nbsp;1：博客要经常连接更新，文字一直紧紧盘绕关头字，环绕上彀站主题。&nbsp;</div><div>&nbsp; &nbsp;2：SEO优化重点以文章内容页优化为主。&nbsp;</div><div>&nbsp; &nbsp;3：恰当给每个页面添加环节词页面描绘索引擎抓取器标签。&nbsp;</div><div>&nbsp; &nbsp;4：在新文章中恰当添加一些老文章的连接，文章的内部连接必定要天然。&nbsp;</div><div>&nbsp; &nbsp;5：新博客可以建立单一纽带词战略，以增强网站对查找引擎的威望性。如卢松松博客创建初期只要一个网站设计关键词。&nbsp;</div><div>&nbsp; &nbsp;6：节目分类尽量运用目录方式。如：不是&nbsp;</div><div>&nbsp; &nbsp;7：可以在页面底部加上站点地图HTML名目是给用户看的，XML花式是给查找引擎看的。&nbsp;</div><div>&nbsp; &nbsp;8：斗劲首要文章的URL可以运用拼音、英文和朋分线等网址构造。&nbsp;</div><div>&nbsp; &nbsp;9：外部连接扶植很重要，新博客推荐运用东西&nbsp;</div><div>&nbsp; &nbsp;10：废物留言一定要删去，很是影响排行。&nbsp;</div><div>&nbsp; &nbsp;11：记住给每个博文插图加上和文章内容有关的alt信息，并在图像附近添加有关信息。&nbsp;</div><div>&nbsp; &nbsp;12：文章中不异的关键字不能过多，如果非要堆砌关键字，可恰当运用长尾关键字。&nbsp;</div><div>&nbsp; &nbsp;13：每篇文章的结尾处可干预&ldquo;自创文章如G标签可以增强主题的有关性和被查找的概率。&nbsp;</div><div>&nbsp; &nbsp;15：文章的Title最佳以&ldquo;文章疑问-博客称号&rdquo;方式呈现。&nbsp;</div><div>&nbsp; &nbsp;16：文章标题最佳能泛起一次关键字。&nbsp;</div><div>&nbsp; &nbsp;17：关键字最佳在第一段或最终一段可以呈现。&nbsp;</div><div>&nbsp; &nbsp;18：不要选择极端热门的关键字。&nbsp;</div><div>&nbsp; &nbsp;19：不要一次性添加很多毗邻，更不要一次性删减很多毗邻。&nbsp;</div><div>&nbsp; &nbsp;20：坚持!&nbsp;</div><div>&nbsp; &nbsp;SEO到今朝停止，最威望的定义为：&nbsp;</div><div>&nbsp; &nbsp;查找引擎优化engine 简称查找引擎优化指遵循查找引擎的查找事理，对网站机关、页面文字说话和站点间互动交际略等进行合理计划布置，以改进网站在查找引擎的查找默示，进而添加客户发现并访谒网站的可能性的这样一个进程. 查找引擎优化也是一种科学的成长不美观和编制论，它跟着查找引擎的开展而开展, 一起也促进了查找引擎的开展。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('50','15','0','喝果汁饮料30秒就伤牙? 减肥可改善牙健康','','admin','1','0','','0','0','','0','','','','','2307','2014-10-11 16:48:53','admin','','/upload/images/201304/2307.jpg','1','1','现在在网站优化这个行业中，已经有越来越多的站长认识到了内链的重要性，可是一些新手站长还是对内链这个概念模模糊糊的，其实随着现在搜索引擎算法的不段改进，内链和外链已经到了一个同等重要性的位置了，对于内链来说不同角度不同方向的人会有不同的看法，下面就给大家说一说从不同的方向看内链都有哪些不同的作用。\r\n　　一、利于增加网站收录量蜘蛛爬行网站是按超链接的，其实蜘蛛在爬行时就你用户点击网站中的超链接来进入内容页，咱们可以把蜘蛛当成是一个用户，而这个用户往往是每天来访都是全站访问的。但是有一个缺点就是它并不具备感情。而且还要站长设置好网站的内链，让它顺畅的绕着网站内容爬行。许多的网站收录不给力原因在哪里?其实最基本的一点就是无法给蜘蛛提供高速爬行通道，这里出现了断路，那里出现了死胡同，这就让蜘蛛爬行网站时浪费很多时间，而且每次进入死胡同时，蜘蛛都要重新回到首页去，这样一来蜘蛛又要重新爬行网站了，进而就会造成网站被重复收录这是常规现象。有了合理的内链就不会造成这种情况的发生，当站长把每篇内容下面左右都设置好相关的内容版块时，自然就可以引导蜘蛛更有效的爬行完整站，自然收录也会涨起来的。而且对于利用内链来提升网站的收录量并不是什么稀奇的事，一般收录高的网站内链都是做得特别到位的。\r\n　　二、利于提升关键词排名外链可以有效的提升关键词排名而内链就是加已巩固排名最好的方法之一。对于内链的作用，其实最基本一点也是可以提升关键词排名的。而且通过内链优化来提升关键词排名，可以使自己在与对手竞争时，更有稳定性，因为同样的方法，取胜之处就在于细节方面的处理，而内链往往是细节中最重要的一环，所以内链的实际作用就目前来说，跟外链的作用是不相上下的。而且要让搜索引挚重视自己的网站，自然通过内链可以更好的使网站的内容相关性更强，自然搜索引挚对于具有文不离题内容的网站适当的照顾一下的。所以，而且内链中的关键词还可以提升网站关键词的整体密度，进而对提升关键词排名起到一定的帮助。所以说内链的最根本的一个作用就是可以帮助网站提升关键词排名，要不然站长也不会越来越重视内链优化了。\r\n　　三、利于提升用户体验内链最为关键词的一个作用就是可以提用户的访问深度，也就是打造良好的用户体验，对于用户体验可谓是让所有站长又爱又恨。但是很多网站流量很高，却留不住用户，无法缔造出良好的用户体验归其原因就是出现在内链不够强大，鄙人的淘宝热卖','0','<p>现在在网站优化这个行业中，已经有越来越多的站长认识到了内链的重要性，可是一些新手站长还是对内链这个概念模模糊糊的，其实随着现在搜索引擎算法的不段改进，内链和外链已经到了一个同等重要性的位置了，对于内链来说不同角度不同方向的人会有不同的看法，下面就给大家说一说从不同的方向看内链都有哪些不同的作用。</p><div>　　一、利于增加网站收录量蜘蛛爬行网站是按超链接的，其实蜘蛛在爬行时就你用户点击网站中的超链接来进入内容页，咱们可以把蜘蛛当成是一个用户，而这个用户往往是每天来访都是全站访问的。但是有一个缺点就是它并不具备感情。而且还要站长设置好网站的内链，让它顺畅的绕着网站内容爬行。许多的网站收录不给力原因在哪里?其实最基本的一点就是无法给蜘蛛提供高速爬行通道，这里出现了断路，那里出现了死胡同，这就让蜘蛛爬行网站时浪费很多时间，而且每次进入死胡同时，蜘蛛都要重新回到首页去，这样一来蜘蛛又要重新爬行网站了，进而就会造成网站被重复收录这是常规现象。有了合理的内链就不会造成这种情况的发生，当站长把每篇内容下面左右都设置好相关的内容版块时，自然就可以引导蜘蛛更有效的爬行完整站，自然收录也会涨起来的。而且对于利用内链来提升网站的收录量并不是什么稀奇的事，一般收录高的网站内链都是做得特别到位的。</div><div>　　二、利于提升关键词排名外链可以有效的提升关键词排名而内链就是加已巩固排名最好的方法之一。对于内链的作用，其实最基本一点也是可以提升关键词排名的。而且通过内链优化来提升关键词排名，可以使自己在与对手竞争时，更有稳定性，因为同样的方法，取胜之处就在于细节方面的处理，而内链往往是细节中最重要的一环，所以内链的实际作用就目前来说，跟外链的作用是不相上下的。而且要让搜索引挚重视自己的网站，自然通过内链可以更好的使网站的内容相关性更强，自然搜索引挚对于具有文不离题内容的网站适当的照顾一下的。所以，而且内链中的关键词还可以提升网站关键词的整体密度，进而对提升关键词排名起到一定的帮助。所以说内链的最根本的一个作用就是可以帮助网站提升关键词排名，要不然站长也不会越来越重视内链优化了。</div><div>　　三、利于提升用户体验内链最为关键词的一个作用就是可以提用户的访问深度，也就是打造良好的用户体验，对于用户体验可谓是让所有站长又爱又恨。但是很多网站流量很高，却留不住用户，无法缔造出良好的用户体验归其原因就是出现在内链不够强大，鄙人的淘宝热卖</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('51','15','0','果汁饮料和纯果汁之间不得不说的事','','admin','1','0','','0','0','','0','','','','','2306','2014-10-11 16:51:51','admin','','/upload/images/201304/2306.jpg','1','1','一、赋有弹性的出色心态做优化便是用自己的才智与阅历和查找引擎“斗智斗法”，面对查找引擎的调整，无论是站长仍是SEOER都处于被逼的境地，特别像baidu常常运用 人工ganyu查找效果，对于算法系统常常性的调整使得网站优化效果常常会出现不稳定改变的表象。面对这种实力不对等的境况和查找引擎改变 的特征，作为专业从事SEO的工作者而言，需要首要练就的便是一副赋有弹性的出色心态，优良的SEOER需要坚持淡定 不紧张的心态，能够做到从容应对。\r\n　　二、堆集各种优化可用的本钱专业的SEO需要运用到林林总总的本钱，从高质量的内容来历到优质的外链发布本钱，都是在打开网站优化进程中有必要用到的。网站的优化工作是一 项涉及到内容、关键词、外链、内链等各个元素的系统化工作，因此在打开有关的工作时需要堆集有满足丰厚的本钱，才有利于能够快速地按照既定的优化方案实 施。优良的SEOER应当在优化打开之前和往常的工作进程中留意搜集和堆集各种今后能够运用的本钱，前进工作的功率和有效性。\r\n　　三、需要出色的沟通和展示诀窍作为专业的SEOER，无论是在接单时仍是在优化进程中与客户的沟通进程中，都需要向客户介绍自己**的优化方案，在施行SEO进程中还需要 及时向客户通报工作进展，以及展示现已到达的优化效果等，这些既是增强接单才干，能够抢夺获得更多客户的才干，也是获得客户的进一步信任与一定，保护好客 情联络，做好后续的客户服务工作的必要技能，因此应当是优良的SEOER必备的才干。\r\n　　四、勇于活泼进行优化检验和立异在具体的优化方法上，虽然有很多咱们所熟知和堆集出来的优化阅历与方法，但是由于查找引擎的算法不断地进行改动，所以要想能够及时捉住查找引 擎最新的算法，做到在优化进程中及时迎合其算法标准，以期获得更佳的效果。因此，要获得最新的查找引擎算法改变状况，优良的SEOER应当勇于活泼进行大 胆的检验，按照自己的阅历运用一些优化措施，来检验查找引擎对于这些优化方法的反响，极力走在同行的前列。\r\n　　五、善用对优化效果进行监控和总结每一个网站的优化项目对于SEOER而言都是一次优化技能的检查和前进，在不一样期间的优化进程中，总能让咱们得到全新的阅历，特别是对于查找 引擎不断改变的算法都能够有更多的知道与掌握。因此，在打开优化的进程中，优良的SEOER要长于对每一次的优化项目进行必要而及时的监控，及时知道和掌 握优化方法所获得的效果，对于效果和缺少做及时的总结，从而在总结和反思之中完善和前进SEO的优化技能。','0','<p>一、赋有弹性的出色心态做优化便是用自己的才智与阅历和查找引擎&ldquo;斗智斗法&rdquo;，面对查找引擎的调整，无论是站长仍是SEOER都处于被逼的境地，特别像baidu常常运用 人工ganyu查找效果，对于算法系统常常性的调整使得网站优化效果常常会出现不稳定改变的表象。面对这种实力不对等的境况和查找引擎改变 的特征，作为专业从事SEO的工作者而言，需要首要练就的便是一副赋有弹性的出色心态，优良的SEOER需要坚持淡定 不紧张的心态，能够做到从容应对。</p><div>　　二、堆集各种优化可用的本钱专业的SEO需要运用到林林总总的本钱，从高质量的内容来历到优质的外链发布本钱，都是在打开网站优化进程中有必要用到的。网站的优化工作是一 项涉及到内容、关键词、外链、内链等各个元素的系统化工作，因此在打开有关的工作时需要堆集有满足丰厚的本钱，才有利于能够快速地按照既定的优化方案实 施。优良的SEOER应当在优化打开之前和往常的工作进程中留意搜集和堆集各种今后能够运用的本钱，前进工作的功率和有效性。</div><div>　　三、需要出色的沟通和展示诀窍作为专业的SEOER，无论是在接单时仍是在优化进程中与客户的沟通进程中，都需要向客户介绍自己**的优化方案，在施行SEO进程中还需要 及时向客户通报工作进展，以及展示现已到达的优化效果等，这些既是增强接单才干，能够抢夺获得更多客户的才干，也是获得客户的进一步信任与一定，保护好客 情联络，做好后续的客户服务工作的必要技能，因此应当是优良的SEOER必备的才干。</div><div>　　四、勇于活泼进行优化检验和立异在具体的优化方法上，虽然有很多咱们所熟知和堆集出来的优化阅历与方法，但是由于查找引擎的算法不断地进行改动，所以要想能够及时捉住查找引 擎最新的算法，做到在优化进程中及时迎合其算法标准，以期获得更佳的效果。因此，要获得最新的查找引擎算法改变状况，优良的SEOER应当勇于活泼进行大 胆的检验，按照自己的阅历运用一些优化措施，来检验查找引擎对于这些优化方法的反响，极力走在同行的前列。</div><div>　　五、善用对优化效果进行监控和总结每一个网站的优化项目对于SEOER而言都是一次优化技能的检查和前进，在不一样期间的优化进程中，总能让咱们得到全新的阅历，特别是对于查找 引擎不断改变的算法都能够有更多的知道与掌握。因此，在打开优化的进程中，优良的SEOER要长于对每一次的优化项目进行必要而及时的监控，及时知道和掌 握优化方法所获得的效果，对于效果和缺少做及时的总结，从而在总结和反思之中完善和前进SEO的优化技能。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('52','15','0','小心,夏天果汁饮料 也会“爆炸”! 喝剩的饮料最好冷藏','','admin','1','0','','0','0','','0','','','','','2305','2014-10-11 16:52:42','admin','','/upload/images/201304/2305.jpg','1','1','序言：标题里的标准化的需求其实是为了吸引大家的，它是不可能有标准化的，我们要追求标题个性化，但也可以做标准化的，因为很多的人不知道该怎么做。\r\n　　一、标题应该怎么做怎么样来选择标题，标题要求很简单，他需要有几个特性，大的行业靠长尾关键词，小的行业靠目标关键词，而淘宝客严格意义来说是大的行业，这里说大指的是行业的受众。淘宝客可以做任何行业的受众，它是一个大的行业。同样旅游也是大的行业。而中小型企业点的行业就是小的行业。所以说目标和长尾是一个相对的概念。比如说云南旅游，它的受众很大，可以做目标词，而去云南旅游的注意事项就是长尾词，它是相对的。\r\n　　1、标题应该去找寻有转换率的而关注度较少的长尾词(竞争度非常少所指的是目录页和内页，目录页可以寄居到一些大型站点下面，比如很多的企业去阿里巴巴开一个二级域名的店铺等。\r\n　　它是一个目录页或者是二级域名。现在有一个问题就是它没有流量，或者有流量没有转换率。而我们seo是要解决这个问题的。流量和转换率是由关键词产生的。关键词有转换率的很多，不能每个都做，大家都认为可以做的词，我们就不要去做的，商业竞争是非常残酷的。\r\n　　我们要选择的词就是大伙还没有发现或者有少数人发现的我们可以去竞争得过人家的词。怎么知道这个词有转换呢?这就一定要做关键词词库，词库就是我们知道有一些词有流量，这种词会大量存在的，而且有规律的，是可以进行推理和推导的，这个词库的统计是一个长期且漫长的过程，通过词库就可以淘汰很多的词。\r\n　　这里举个例子，比如一个做医药类网站，化此类网站，首先就是有规律的更新一些白癜风原创文章，文章的标题很重要，它体现你这篇文章的中心内容，文章内容最好原创，再加上河南白癜风医院的关键词，而河南白癜风医院的密度就需要自己把握;其次就是去一些与白癜风相关的医药健康类网站发外链，比如BBS论坛、Blog博客和B2B分类信息平台，外链内容与白癜风相关，加上河南白癜风医院的锚链最好;最后就是一些友情链接的交换了，要知道，网站优化比不是一朝一夕的是，三天打鱼两天晒网是不可取的，站长们一定要勤劳才可以见效果的。','0','<p>序言：标题里的标准化的需求其实是为了吸引大家的，它是不可能有标准化的，我们要追求标题个性化，但也可以做标准化的，因为很多的人不知道该怎么做。</p><div>　　一、标题应该怎么做怎么样来选择标题，标题要求很简单，他需要有几个特性，大的行业靠长尾关键词，小的行业靠目标关键词，而淘宝客严格意义来说是大的行业，这里说大指的是行业的受众。淘宝客可以做任何行业的受众，它是一个大的行业。同样旅游也是大的行业。而中小型企业点的行业就是小的行业。所以说目标和长尾是一个相对的概念。比如说云南旅游，它的受众很大，可以做目标词，而去云南旅游的注意事项就是长尾词，它是相对的。</div><div>　　1、标题应该去找寻有转换率的而关注度较少的长尾词(竞争度非常少所指的是目录页和内页，目录页可以寄居到一些大型站点下面，比如很多的企业去阿里巴巴开一个二级域名的店铺等。</div><div>　　它是一个目录页或者是二级域名。现在有一个问题就是它没有流量，或者有流量没有转换率。而我们seo是要解决这个问题的。流量和转换率是由关键词产生的。关键词有转换率的很多，不能每个都做，大家都认为可以做的词，我们就不要去做的，商业竞争是非常残酷的。</div><div>　　我们要选择的词就是大伙还没有发现或者有少数人发现的我们可以去竞争得过人家的词。怎么知道这个词有转换呢?这就一定要做关键词词库，词库就是我们知道有一些词有流量，这种词会大量存在的，而且有规律的，是可以进行推理和推导的，这个词库的统计是一个长期且漫长的过程，通过词库就可以淘汰很多的词。</div><div>　　这里举个例子，比如一个做医药类网站，化此类网站，首先就是有规律的更新一些白癜风原创文章，文章的标题很重要，它体现你这篇文章的中心内容，文章内容最好原创，再加上河南白癜风医院的关键词，而河南白癜风医院的密度就需要自己把握;其次就是去一些与白癜风相关的医药健康类网站发外链，比如BBS论坛、Blog博客和B2B分类信息平台，外链内容与白癜风相关，加上河南白癜风医院的锚链最好;最后就是一些友情链接的交换了，要知道，网站优化比不是一朝一夕的是，三天打鱼两天晒网是不可取的，站长们一定要勤劳才可以见效果的。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('53','15','0','海带 芒果复合果汁饮料的加工','','admin','1','0','','0','0','','0','','','','','2304','2014-10-11 16:53:47','admin','','/upload/images/201304/2304.jpg','1','1','“怎样做有效的点击链接?”有朋侪在我博客内留言发问，我想这正是我们各人在以后搜刮引擎优化实践中不绝积极探索的标题，但要想管理“怎样做有效的点击链接”的标题，A5悦怀营销()唐世军以为，起首必须改变看法。\r\n　　在翻译的《搜刮引擎优化艺术》书中，作者将我们所说的“做外链(发外链)”称为“基于网站内容基础之上”的“外链营销”。\r\n　　在云云的外链营销中，我们渴望通过外链方法营销推广的东西就是外链页面内容(或服务)，它必须是值得通过其他网站站长故意识地用链接情势保举的内容页面——百度《搜刮引擎优化指南2.0》中说：“我们经常说的超链，就是(用户)保举的一种(情势)”。\r\n　　《搜刮引擎优化艺术》书中则说：“人们不会链接向低质量内容或用户体验差的网站(除非得到某种利益作为补偿)，除非你荣幸地拥有一个着名品牌，否则人们也不会链接向一个纯粹的贸易网站。你必须为用户提供有代价的东西，也要提供奇特的东西”——你所链接的内面内容必须赐与别人一些东西。\r\n　　而且，既然是“外链营销”，在网站外链建计划谋订定与实行历程中，就必须充实思量营销受众的生理，由于只有捉住营销受众生理的营销举动才大概得到预期的乐成——时下最有说服力的例子是，当大陆扫货者在香港想购置低利润产物时，洞悉大陆客生理的香港卖家一句“我们香港人才不消谁人牌子呢”，结果大陆客就乖乖地被香港卖家牵着鼻子走了。\r\n　　外链营销也不例外，《搜刮引擎优化艺术》书中说：“有些东西天生能吸引链接，由于能触发(读者)生理和情感回声——自负、分享、消息性等。充实利用这些触发性因素，为那些能影响网站内容的访问者(作家、站长、博客作者)制造一个有说服力的来由来引用你的作品，你的链接创建就将会乐成”。\r\n　　因此，作为一个企业网站外链营销专员，我们必须思索，本行业用户存眷的话题是什么?而我网站能赐与别人的奇特内容有些什么呢?海内站长每每缺乏这方面的战略考量，横竖“发外链”呗，能留下外链、被搜刮引擎收录就是乐成，基础不思量受众感觉(这不能完全怪外链专员，很多公司就是以数目考核外链专员的)，从他们的角度来说，如许的外链乐成了，但很难到达“产生高点击率”的外链营销结果。\r\n　　《搜刮引擎优化艺术》作者提示我们，在确定网站外链建计划谋时，起首必须“摸清家底”，晓得本身网站如今有什么内容，可以增长什么内容，我网站特色在那边，用户需求是什么，扬长避短，来确定我们本身“基于网站内容的链接建计划谋”。\r\n　　好比，提问那位朋侪做的是打扮网站，网站内容很难出新，但面对同样标题，淘宝一些女装店家本身做模特儿，展示本身打扮格局的特点，取得较好的营销结果。假如在如许别开生面的内容基础之上，在一些女性消耗者居多的论坛(或微博)挑选出两幅良好图片做“外链营销”，就能很好地收到点击外链的结果。\r\n　　而且如许基于高质量内容的链接，很容易成为“链接诱饵”，被更多用户、网站站长保举，到达“真正的搜刮引擎优化能手只晓得本身外链到处都有，但却不晓得是谁帮创建的”田地。\r\n　　这阐发白内容大概雷同，但由于体现情势的差别，内容受众的生理感觉也肯定差别，以致美学家对美的界说都是“美是故意味的情势”——紧急的是“探求更能引起受众共鸣的内容体现情势”，而不是你体现的东西与众差别。\r\n　　必须指出的是，如许“探求更能引起受众共鸣的内容体现情势”，不但对网站内容构建有启示作用，对“外链营销”也同样。《搜刮引擎优化艺术》中说：“可以用差别种类的内容(同一内容的差别体现情势)吸引链接。文章、有吸引力的图片、视频、东西、以致开辟线上游戏”。好比一些民营医院举行网络手术视频直播，一段时间内直播地点不绝地被各大网站管理员及网友自觉保举分享。\r\n　　别的，敷衍内容大同小异的企业网站来说，无论是网站内容构建还是外链营销环节，捉住“时效性话题”做文章是一个“拓展内家”的好要领。任何时间网络上都不缺乏热门的“时效性话题”，只要我们本身的网站可以大概不绝地捉住具有干系性的“时效性话题”做文章，只要实时奇妙地从中掘客到本身网站的奇特卖点(肯定要有本身新意，而且不能委曲)，借势营销，不难想象，这类盛行话题带来的外链点击率肯定不会低——好比做女装的网站，前些日子就不应该放过不胫而走的“齐B小短裙”话题。\r\n　　末了，就是坚持，不要怕累，不要怕被模拟，不要怕一段时间内结果不显着，以致不如“内容只是偶尔义穿插关键字”的传统“发外链，引蜘蛛”本领。坚持下去。由于任何营销本领都必须坚持才气收效——外链营销也不例外。\r\n　　特殊要提示列位搜刮引擎优化ER的是，不要为本身找放弃的捏词来由，好比“海内网站都是复制收罗伪原创”。这简直是毕竟，但我们不能等待情况好了再做。只要降服困难坚持下去，就肯定会有效果。\r\n　　而且，将如许“基于内容的外链建计划谋”坚持下去，再辅以其他宣传营销本领(好比消息营销等)，一段时间以后，就能有效拉开与其他同类网站的隔断，真正实现网站品牌化的终极营销目的。\r\n　　末了，《搜刮引擎优化艺术》将“外链营销”总结为：“良好的链接创建来自于简单的观点：创建好的内容，陈诉其他人，鼓励他们分享”。\r\n　　这阐发，包罗外链营销在内的统统营销推广实质上都是内容营销，不能将网站内容与网站外链营销破碎开来，网站内容质量与外链质量密切干系——这才是链接干系性的真实寄义。假如你网站内容(服务)真的很优质，你的外链质量肯定不会差，肯定能产生无数赢得更多点击的优质外链;而一个用户体验良好，让人产生点击激动的外链，它所指向页面的内容质量也不会低。','0','<p>&ldquo;怎样做有效的点击链接?&rdquo;有朋侪在我博客内留言发问，我想这正是我们各人在以后搜刮引擎优化实践中不绝积极探索的标题，但要想管理&ldquo;怎样做有效的点击链接&rdquo;的标题，A5悦怀营销()唐世军以为，起首必须改变看法。</p><div>　　在翻译的《搜刮引擎优化艺术》书中，作者将我们所说的&ldquo;做外链(发外链)&rdquo;称为&ldquo;基于网站内容基础之上&rdquo;的&ldquo;外链营销&rdquo;。</div><div>　　在云云的外链营销中，我们渴望通过外链方法营销推广的东西就是外链页面内容(或服务)，它必须是值得通过其他网站站长故意识地用链接情势保举的内容页面&mdash;&mdash;百度《搜刮引擎优化指南2.0》中说：&ldquo;我们经常说的超链，就是(用户)保举的一种(情势)&rdquo;。</div><div>　　《搜刮引擎优化艺术》书中则说：&ldquo;人们不会链接向低质量内容或用户体验差的网站(除非得到某种利益作为补偿)，除非你荣幸地拥有一个着名品牌，否则人们也不会链接向一个纯粹的贸易网站。你必须为用户提供有代价的东西，也要提供奇特的东西&rdquo;&mdash;&mdash;你所链接的内面内容必须赐与别人一些东西。</div><div>　　而且，既然是&ldquo;外链营销&rdquo;，在网站外链建计划谋订定与实行历程中，就必须充实思量营销受众的生理，由于只有捉住营销受众生理的营销举动才大概得到预期的乐成&mdash;&mdash;时下最有说服力的例子是，当大陆扫货者在香港想购置低利润产物时，洞悉大陆客生理的香港卖家一句&ldquo;我们香港人才不消谁人牌子呢&rdquo;，结果大陆客就乖乖地被香港卖家牵着鼻子走了。</div><div>　　外链营销也不例外，《搜刮引擎优化艺术》书中说：&ldquo;有些东西天生能吸引链接，由于能触发(读者)生理和情感回声&mdash;&mdash;自负、分享、消息性等。充实利用这些触发性因素，为那些能影响网站内容的访问者(作家、站长、博客作者)制造一个有说服力的来由来引用你的作品，你的链接创建就将会乐成&rdquo;。</div><div>　　因此，作为一个企业网站外链营销专员，我们必须思索，本行业用户存眷的话题是什么?而我网站能赐与别人的奇特内容有些什么呢?海内站长每每缺乏这方面的战略考量，横竖&ldquo;发外链&rdquo;呗，能留下外链、被搜刮引擎收录就是乐成，基础不思量受众感觉(这不能完全怪外链专员，很多公司就是以数目考核外链专员的)，从他们的角度来说，如许的外链乐成了，但很难到达&ldquo;产生高点击率&rdquo;的外链营销结果。</div><div>　　《搜刮引擎优化艺术》作者提示我们，在确定网站外链建计划谋时，起首必须&ldquo;摸清家底&rdquo;，晓得本身网站如今有什么内容，可以增长什么内容，我网站特色在那边，用户需求是什么，扬长避短，来确定我们本身&ldquo;基于网站内容的链接建计划谋&rdquo;。</div><div>　　好比，提问那位朋侪做的是打扮网站，网站内容很难出新，但面对同样标题，淘宝一些女装店家本身做模特儿，展示本身打扮格局的特点，取得较好的营销结果。假如在如许别开生面的内容基础之上，在一些女性消耗者居多的论坛(或微博)挑选出两幅良好图片做&ldquo;外链营销&rdquo;，就能很好地收到点击外链的结果。</div><div>　　而且如许基于高质量内容的链接，很容易成为&ldquo;链接诱饵&rdquo;，被更多用户、网站站长保举，到达&ldquo;真正的搜刮引擎优化能手只晓得本身外链到处都有，但却不晓得是谁帮创建的&rdquo;田地。</div><div>　　这阐发白内容大概雷同，但由于体现情势的差别，内容受众的生理感觉也肯定差别，以致美学家对美的界说都是&ldquo;美是故意味的情势&rdquo;&mdash;&mdash;紧急的是&ldquo;探求更能引起受众共鸣的内容体现情势&rdquo;，而不是你体现的东西与众差别。</div><div>　　必须指出的是，如许&ldquo;探求更能引起受众共鸣的内容体现情势&rdquo;，不但对网站内容构建有启示作用，对&ldquo;外链营销&rdquo;也同样。《搜刮引擎优化艺术》中说：&ldquo;可以用差别种类的内容(同一内容的差别体现情势)吸引链接。文章、有吸引力的图片、视频、东西、以致开辟线上游戏&rdquo;。好比一些民营医院举行网络手术视频直播，一段时间内直播地点不绝地被各大网站管理员及网友自觉保举分享。</div><div>　　别的，敷衍内容大同小异的企业网站来说，无论是网站内容构建还是外链营销环节，捉住&ldquo;时效性话题&rdquo;做文章是一个&ldquo;拓展内家&rdquo;的好要领。任何时间网络上都不缺乏热门的&ldquo;时效性话题&rdquo;，只要我们本身的网站可以大概不绝地捉住具有干系性的&ldquo;时效性话题&rdquo;做文章，只要实时奇妙地从中掘客到本身网站的奇特卖点(肯定要有本身新意，而且不能委曲)，借势营销，不难想象，这类盛行话题带来的外链点击率肯定不会低&mdash;&mdash;好比做女装的网站，前些日子就不应该放过不胫而走的&ldquo;齐B小短裙&rdquo;话题。</div><div>　　末了，就是坚持，不要怕累，不要怕被模拟，不要怕一段时间内结果不显着，以致不如&ldquo;内容只是偶尔义穿插关键字&rdquo;的传统&ldquo;发外链，引蜘蛛&rdquo;本领。坚持下去。由于任何营销本领都必须坚持才气收效&mdash;&mdash;外链营销也不例外。</div><div>　　特殊要提示列位搜刮引擎优化ER的是，不要为本身找放弃的捏词来由，好比&ldquo;海内网站都是复制收罗伪原创&rdquo;。这简直是毕竟，但我们不能等待情况好了再做。只要降服困难坚持下去，就肯定会有效果。</div><div>　　而且，将如许&ldquo;基于内容的外链建计划谋&rdquo;坚持下去，再辅以其他宣传营销本领(好比消息营销等)，一段时间以后，就能有效拉开与其他同类网站的隔断，真正实现网站品牌化的终极营销目的。</div><div>　　末了，《搜刮引擎优化艺术》将&ldquo;外链营销&rdquo;总结为：&ldquo;良好的链接创建来自于简单的观点：创建好的内容，陈诉其他人，鼓励他们分享&rdquo;。</div><div>　　这阐发，包罗外链营销在内的统统营销推广实质上都是内容营销，不能将网站内容与网站外链营销破碎开来，网站内容质量与外链质量密切干系&mdash;&mdash;这才是链接干系性的真实寄义。假如你网站内容(服务)真的很优质，你的外链质量肯定不会差，肯定能产生无数赢得更多点击的优质外链;而一个用户体验良好，让人产生点击激动的外链，它所指向页面的内容质量也不会低。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('54','15','0','设计一个果汁饮料,竞品有哪些,如何进行竞品分析?','','admin','1','0','','0','0','','0','','','','','2303','2014-10-11 16:54:56','admin','','/upload/images/201304/2303.jpg','1','1','做网站优化必须要有收录，而且一定要收录快，所以说这是一个整体过程，从网站建设到网站的运营，这个过程都离不了优化策略，每个环节都必需有优化思惟。\r\n　　1.内容最好是原创。一个新站点，文章质量非常重要，蜘蛛是喜新厌旧的东西，对一个站点内容质量越高，抓取你网站的次数也会越高。可是有些新站长实在写不出丰富原创内容，可以选择伪原创，切忌不要完全的采集别人的文章，伪原创是指看别人写的原创文章，结合几个人所写同类型的文章，在结合自己的观点，用自己的话描述出来。别以为调换一下文章顺序，替换一些关键词就是一篇新文章，现在的百度算法越来越精准，这种采集方式已经是过去式了，还是倡导原创内容。\r\n　　2.要迎合用户需求来写。在做网站内容是，要分析用户的需求，迎合用户的需求去写网站内容。因为在互联网上有大量相似的文章，你再去写类似的文章，搜索引擎为什么要收录你的文章给予排名呢?所以做网站内容的时候要考虑到是否用户需要的，网站内容是否新颖。可以登入商标注册网站都是很专业的商标资讯文章3.文章定时更新。每日准时更新网站内容，每天都能让蜘蛛有东西吃，满意而归。假如蜘蛛今天有东西吃，明天没东西吃，后天也没东西吃，没准蜘蛛不来你的网站了。发完一篇文章后，最好到百度站长平台抓取诊断一下，看文章抓取是否显示正常。\r\n　　4.网站地图。一般蜘蛛要来抓取你的网站首先看的你的网站地图Sitemap，再以它为导航爬行你的网站，一个新站最容易忽视网站地图，网站地图能更好的引导蜘蛛来抓取我们的网站，提高网站收录速度。每更新一篇文章之后，立刻生成地图传到网站根目录。\r\n　　5.发布外链。到各大高权重外链平台(达到秒收效果最佳)发布外链，例如搜外SEO论坛，A5站长，28推等平台，吸引蜘蛛来抓取网站的文章，也是能加快网站文章收录速度。发外链每天要平稳，不能大跌大增，某某大牛说，一天最少要发10-30条外链。\r\n　　6.文章内链。一个页面要被收录，首先要能够被搜索引擎蜘蛛爬行到，蜘蛛的爬行轨迹是顺着一个链接到另一个链接，想让搜索引擎蜘蛛更好地爬行，在你在文章适当位置增加些文章的锚文本链接，这样能有效缩短蜘蛛的抓取网站内容时间，有效提高文章的收录率。如果是新站长建议不要做内链，一个不注意形成死链断链，蜘蛛就无从爬起，那就更别谈网站文章收录了。\r\n　　7.提交Sitemap地图。可以到各大搜索引擎站长平台提交网站地图URL，使搜索引擎更好的对网站页面进行收录。千万要记住在robots里面写上你网站Sitemap的地址，因为蜘蛛来抓取网站时，首先看robots，这样更好的让搜索引擎蜘蛛抓取我们网站。\r\n　　坚持这7项，想不获得百度收录都难了，这就是让你网站在排名中靠前的7大技巧。','0','<p>做网站优化必须要有收录，而且一定要收录快，所以说这是一个整体过程，从网站建设到网站的运营，这个过程都离不了优化策略，每个环节都必需有优化思惟。</p><div>　　1.内容最好是原创。一个新站点，文章质量非常重要，蜘蛛是喜新厌旧的东西，对一个站点内容质量越高，抓取你网站的次数也会越高。可是有些新站长实在写不出丰富原创内容，可以选择伪原创，切忌不要完全的采集别人的文章，伪原创是指看别人写的原创文章，结合几个人所写同类型的文章，在结合自己的观点，用自己的话描述出来。别以为调换一下文章顺序，替换一些关键词就是一篇新文章，现在的百度算法越来越精准，这种采集方式已经是过去式了，还是倡导原创内容。</div><div>　　2.要迎合用户需求来写。在做网站内容是，要分析用户的需求，迎合用户的需求去写网站内容。因为在互联网上有大量相似的文章，你再去写类似的文章，搜索引擎为什么要收录你的文章给予排名呢?所以做网站内容的时候要考虑到是否用户需要的，网站内容是否新颖。可以登入商标注册网站都是很专业的商标资讯文章3.文章定时更新。每日准时更新网站内容，每天都能让蜘蛛有东西吃，满意而归。假如蜘蛛今天有东西吃，明天没东西吃，后天也没东西吃，没准蜘蛛不来你的网站了。发完一篇文章后，最好到百度站长平台抓取诊断一下，看文章抓取是否显示正常。</div><div>　　4.网站地图。一般蜘蛛要来抓取你的网站首先看的你的网站地图Sitemap，再以它为导航爬行你的网站，一个新站最容易忽视网站地图，网站地图能更好的引导蜘蛛来抓取我们的网站，提高网站收录速度。每更新一篇文章之后，立刻生成地图传到网站根目录。</div><div>　　5.发布外链。到各大高权重外链平台(达到秒收效果最佳)发布外链，例如搜外SEO论坛，A5站长，28推等平台，吸引蜘蛛来抓取网站的文章，也是能加快网站文章收录速度。发外链每天要平稳，不能大跌大增，某某大牛说，一天最少要发10-30条外链。</div><div>　　6.文章内链。一个页面要被收录，首先要能够被搜索引擎蜘蛛爬行到，蜘蛛的爬行轨迹是顺着一个链接到另一个链接，想让搜索引擎蜘蛛更好地爬行，在你在文章适当位置增加些文章的锚文本链接，这样能有效缩短蜘蛛的抓取网站内容时间，有效提高文章的收录率。如果是新站长建议不要做内链，一个不注意形成死链断链，蜘蛛就无从爬起，那就更别谈网站文章收录了。</div><div>　　7.提交Sitemap地图。可以到各大搜索引擎站长平台提交网站地图URL，使搜索引擎更好的对网站页面进行收录。千万要记住在robots里面写上你网站Sitemap的地址，因为蜘蛛来抓取网站时，首先看robots，这样更好的让搜索引擎蜘蛛抓取我们网站。</div><div>　　坚持这7项，想不获得百度收录都难了，这就是让你网站在排名中靠前的7大技巧。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('55','15','0','流言——喝鲜榨果汁可以代替吃鲜水果?','','admin','1','0','','0','0','','0','','','','','2302','2014-10-11 16:55:54','admin','','/upload/images/201304/2302.jpg','1','1','用户体验一直是我们网站的核心数据，网站没有用户那么网站也会被百度抛弃，所以我么一定要去努力提升用户体验度，这一直是百度所传递给我们的意思，一直让我们只要做好用户体验，那么你就一定能得到百度的喜欢，然而我们却这么相信了百度的片面之词。因为网站出了用户体验还有一个很重要的本心就是网站关键词排名。\r\n　　如果我们网站关键词没有一个好的排名，去强调用户体验显然有些枉然，因为我们的用户还是需要通过百度搜索引擎进入我们的网站，如果你连这个通道口都放弃了，那么你的网站将会是一个没有活力的网站，所以今天，在这里给大家介绍关键词排名的相关因素。\r\n　　一、发外链说到发外链，相信seo最熟悉不过了，笔者曾光红从2007年做个人站长，也一直过着发外链的生活，但如今百度搜索引擎对于外链的管制是非常的严格，有些论坛和网站也都杜绝带外链，导致很多很多的外链专员都无法下手，后来转到投稿给chinaz等大网站。当然发外链的难处并非如此，详情以下：\r\n　　1、 页面权重的影响。\r\n　　我们都知道网站的每一个页面都是有一定的权重值，所以我们所发的外链的权重值是根据页面的权重值来衡量的。所以我们在发外链一定要选择高权重的页面。\r\n　　2、 页面导出值。\r\n　　当外链页面的权重值为0.2时，算法是要以0.2在计算出该页面的内链和外链后剩下的权重值才可能会导入你所发的外链。所以说你所发的外链权重值是非常的小。因为内链和外链都会瓜分我们的权重，所以一般一个页面内链最好不多为5条。比如：我在chinaz投稿一文章后，我只带了一条3u推论坛的外链。那么我这一条外链绝对要比带5条外链所导出的权重要高的多。\r\n　　二、网站内链页面内链的插入主要还是以用户的求为主要的。当我们写完一篇文章后，我们在插入内链推荐的时候就要想到用户看到这里的时候还会想去看什么内容，这就要我们去琢磨用户的心理。对于用户比较有价值推荐我们可以加上锚文本链接。这样能提升用户体验度的同时还能增加关键词的内链权重。\r\n　　三、网站内容内容是一个比较常聊到的话题，因为我们也总是在强调说要怎么去写原创文章，今天我所说的内容不单单是指文字内容。更是包括网站所有内容。接下来我就简单的说几点。\r\n　　1、 页面速度。网站的浏览速度是一个非常重要的因素，这关系到用户体验问题，更是关系到网站关键词排名的一个问题。所以网站打开速度一定要快。\r\n　　2、 页面设计。通常对于我们中国人来说，我们看网页都是喜欢从上往下，从左往右，所以我们要把网站的特色更好的展现给用户。\r\n　　3、 页面无限制。这种情况多数于论坛，3u推论坛支持访客评论，但有些论坛看贴都是需要回复内容的，这个限制其实是让人反感。\r\n　　4、 图文并茂。纯文字可能已经过去了，为了用户更好的浏览你的页面，所以你要在文中合理增加图片或者是视频什么的。\r\n　　最后总结：尤其是我们是新站的站长们一定要遵守搜索引擎的原则才会有自己的出路，我们在做用户体验的同时更不能忘记我们需要的更是网站关键词排名！','0','<p>用户体验一直是我们网站的核心数据，网站没有用户那么网站也会被百度抛弃，所以我么一定要去努力提升用户体验度，这一直是百度所传递给我们的意思，一直让我们只要做好用户体验，那么你就一定能得到百度的喜欢，然而我们却这么相信了百度的片面之词。因为网站出了用户体验还有一个很重要的本心就是网站关键词排名。</p><div>　　如果我们网站关键词没有一个好的排名，去强调用户体验显然有些枉然，因为我们的用户还是需要通过百度搜索引擎进入我们的网站，如果你连这个通道口都放弃了，那么你的网站将会是一个没有活力的网站，所以今天，在这里给大家介绍关键词排名的相关因素。</div><div>　　一、发外链说到发外链，相信seo最熟悉不过了，笔者曾光红从2007年做个人站长，也一直过着发外链的生活，但如今百度搜索引擎对于外链的管制是非常的严格，有些论坛和网站也都杜绝带外链，导致很多很多的外链专员都无法下手，后来转到投稿给chinaz等大网站。当然发外链的难处并非如此，详情以下：</div><div>　　1、 页面权重的影响。</div><div>　　我们都知道网站的每一个页面都是有一定的权重值，所以我们所发的外链的权重值是根据页面的权重值来衡量的。所以我们在发外链一定要选择高权重的页面。</div><div>　　2、 页面导出值。</div><div>　　当外链页面的权重值为0.2时，算法是要以0.2在计算出该页面的内链和外链后剩下的权重值才可能会导入你所发的外链。所以说你所发的外链权重值是非常的小。因为内链和外链都会瓜分我们的权重，所以一般一个页面内链最好不多为5条。比如：我在chinaz投稿一文章后，我只带了一条3u推论坛的外链。那么我这一条外链绝对要比带5条外链所导出的权重要高的多。</div><div>　　二、网站内链页面内链的插入主要还是以用户的求为主要的。当我们写完一篇文章后，我们在插入内链推荐的时候就要想到用户看到这里的时候还会想去看什么内容，这就要我们去琢磨用户的心理。对于用户比较有价值推荐我们可以加上锚文本链接。这样能提升用户体验度的同时还能增加关键词的内链权重。</div><div>　　三、网站内容内容是一个比较常聊到的话题，因为我们也总是在强调说要怎么去写原创文章，今天我所说的内容不单单是指文字内容。更是包括网站所有内容。接下来我就简单的说几点。</div><div>　　1、 页面速度。网站的浏览速度是一个非常重要的因素，这关系到用户体验问题，更是关系到网站关键词排名的一个问题。所以网站打开速度一定要快。</div><div>　　2、 页面设计。通常对于我们中国人来说，我们看网页都是喜欢从上往下，从左往右，所以我们要把网站的特色更好的展现给用户。</div><div>　　3、 页面无限制。这种情况多数于论坛，3u推论坛支持访客评论，但有些论坛看贴都是需要回复内容的，这个限制其实是让人反感。</div><div>　　4、 图文并茂。纯文字可能已经过去了，为了用户更好的浏览你的页面，所以你要在文中合理增加图片或者是视频什么的。</div><div>　　最后总结：尤其是我们是新站的站长们一定要遵守搜索引擎的原则才会有自己的出路，我们在做用户体验的同时更不能忘记我们需要的更是网站关键词排名！</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('56','15','0','尼日利亚发布果汁饮料等五项产品法规','','admin','1','4','','0','0','','0','','','','','2301','2014-10-11 16:56:57','admin','','/upload/images/201304/2301.jpg','1','1','随着互联网的越来越成熟，网络营销的风头逐渐开始盖过传统营销了，一个普通的日子居然成了电商一年中成交最多的节日，这无疑是电商们的成功。在企业利用网站营销的今天，数据分析变得越来越重要，包括认知企业的主要用户群体、优化品牌的曝光率，提升产品转化等，今天笔者分享下网站常见的数据分析。\r\n　　一、网站来路的有效流量    信息来源：\r\n　　一个营销类型的网站，流量来源包括了新闻资讯的流量，产品页面的流量等。一般情况下我们的资讯页面的流量转化率要比产品页面流量转化率低，这一个可以直接使用站长统计在后台看。对企业来说，产品页的流量就是有效的，还有企业的产品留言板，一般对你产品没兴趣也就不会问你的产品，这部分流量转化率也不低。\r\n　　二、网站创造什么样的内容才能让用户更关注在以用户体验为主的今天，各个主流引擎都在更新算法鼓励原创的做法，并且严厉地打击垃圾网站。做站长的都应该扪心自问，检查下自己网站的内容，大概参考方法如下，看看整站内容中哪些页面有收录哪些没收录，再从没收录页面总结出一定特征，这个就是用户不太关注需要优化的部分了。    信息来源：\r\n　　三、网站该做些什么活动来催化成交用户不买你产品是因为你页面描述不精细还是产品太陌生，这些我们需要提高下认知。我们的主要目的就是卖出产品，比如把排名做上第一名这也是我们为卖出产品做出的宣传，还有在别的网站投放的专题活动，间接性地为网站引流。又或者公司在新浪的某栏目投放了硬广，并做了来路记录，做seo的此时需要为网站的多种活动流量做分析，比较哪一种产生的订单多和单价高，砍掉那些效率低的活动，节省成本留着投入别的项目。','0','<p>随着互联网的越来越成熟，网络营销的风头逐渐开始盖过传统营销了，一个普通的日子居然成了电商一年中成交最多的节日，这无疑是电商们的成功。在企业利用网站营销的今天，数据分析变得越来越重要，包括认知企业的主要用户群体、优化品牌的曝光率，提升产品转化等，今天笔者分享下网站常见的数据分析。</p><div>　　一、网站来路的有效流量 &nbsp; &nbsp;信息来源：</div><div>　　一个营销类型的网站，流量来源包括了新闻资讯的流量，产品页面的流量等。一般情况下我们的资讯页面的流量转化率要比产品页面流量转化率低，这一个可以直接使用站长统计在后台看。对企业来说，产品页的流量就是有效的，还有企业的产品留言板，一般对你产品没兴趣也就不会问你的产品，这部分流量转化率也不低。</div><div>　　二、网站创造什么样的内容才能让用户更关注在以用户体验为主的今天，各个主流引擎都在更新算法鼓励原创的做法，并且严厉地打击垃圾网站。做站长的都应该扪心自问，检查下自己网站的内容，大概参考方法如下，看看整站内容中哪些页面有收录哪些没收录，再从没收录页面总结出一定特征，这个就是用户不太关注需要优化的部分了。 &nbsp; &nbsp;信息来源：</div><div>　　三、网站该做些什么活动来催化成交用户不买你产品是因为你页面描述不精细还是产品太陌生，这些我们需要提高下认知。我们的主要目的就是卖出产品，比如把排名做上第一名这也是我们为卖出产品做出的宣传，还有在别的网站投放的专题活动，间接性地为网站引流。又或者公司在新浪的某栏目投放了硬广，并做了来路记录，做seo的此时需要为网站的多种活动流量做分析，比较哪一种产生的订单多和单价高，砍掉那些效率低的活动，节省成本留着投入别的项目。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('57','16','0','企业文化概念','','admin','1','0','','0','0','','0','','','','','1101','2014-10-11 17:01:44','admin','','/upload/images/201304/1101.jpg','1','1','　　企业文化，或称组织文化（Corporate Culture或Organizational Culture），是一个组织由其价值观、信念、仪式、符号、处事方式等组成的其特有的文化形象，商业教育均将企业文化作为一项重要内容包含在内。\r\n　　职工文化，也称企业职工文化，是与企业文化相对应的文化形态，职工文化以职工为本，是一种素质文化，企业文化以企业为本，是一种管理文化。\r\n　　企业文化是在一定的条件下，企业生产经营和管理活动中所创造的具有该企业特色的精神财富和物质形态。它包括文化观念、价值观念、企业精神、道德规范、行为准则、历史传统、企业制度、文化环境、企业产品等。其中价值观是企业文化的核心。\r\n　　广义上说，文化是人类社会历史实践过程中所创造的物质财富与精神财富的总和；狭义上说，文化是社会的意识形态以及与之相适应的组织机构与制度。\r\n　　而企业文化则是企业在生产经营实践中，逐步形成的，为全体员工所认同并遵守的、带有本组织特点的使命、愿景、宗旨、精神、价值观和经营理念，以及这些理念在生产经营实践、管理制度、员工行为方式与企业对外形象的体现的总和。它与文教、科研、军事等组织的文化性质是不同的。\r\n　　企业文化是企业的灵魂，是推动企业发展的不竭动力。它包含着非常丰富的内容，其核心是企业的精神和价值观。这里的价值观不是泛指企业管理中的各种文化现象，而是企业或企业中的员工在从事商品生产与经营中所持有的价值观念。','0','<p>　　企业文化，或称组织文化（Corporate Culture或Organizational Culture），是一个组织由其价值观、信念、仪式、符号、处事方式等组成的其特有的文化形象，商业教育均将企业文化作为一项重要内容包含在内。</p>\r\n<p>　　职工文化，也称企业职工文化，是与企业文化相对应的文化形态，职工文化以职工为本，是一种素质文化，企业文化以企业为本，是一种管理文化。</p>\r\n<p>　　企业文化是在一定的条件下，企业生产经营和管理活动中所创造的具有该企业特色的精神财富和物质形态。它包括文化观念、价值观念、企业精神、道德规范、行为准则、历史传统、企业制度、文化环境、企业产品等。其中价值观是企业文化的核心。</p>\r\n<p>　　广义上说，文化是人类社会历史实践过程中所创造的物质财富与精神财富的总和；狭义上说，文化是社会的意识形态以及与之相适应的组织机构与制度。</p>\r\n<p>　　而企业文化则是企业在生产经营实践中，逐步形成的，为全体员工所认同并遵守的、带有本组织特点的使命、愿景、宗旨、精神、价值观和经营理念，以及这些理念在生产经营实践、管理制度、员工行为方式与企业对外形象的体现的总和。它与文教、科研、军事等组织的文化性质是不同的。</p>\r\n<p>　　企业文化是企业的灵魂，是推动企业发展的不竭动力。它包含着非常丰富的内容，其核心是企业的精神和价值观。这里的价值观不是泛指企业管理中的各种文化现象，而是企业或企业中的员工在从事商品生产与经营中所持有的价值观念。</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('58','16','0','企业文化要素','','admin','1','0','','0','0','','0','','','','','1102','2014-10-11 17:02:44','admin','','/upload/images/201304/1102.jpg','1','1','　　迪尔和肯尼迪把企业文化整个理论系统概述为5个要素，即企业环境、价值观、英雄人物、文化仪式和文化网络。\r\n　　企业环境是指企业的性质、企业的经营方向、外部环境企业文化企业文化、企业的社会形象、与外界的联系等方面。它往往决定企业的行为。\r\n　　价值观是指企业内成员对某个事件或某种行为好与坏、善与恶、正确与错误、是否值得仿效的一致认识。价值观是企业文化的核心，统一的价值观使企业内成员在判断自己行为时具有统一的标准，并以此来选择自己的行为。\r\n　　英雄人物是指企业文化的核心人物或企业文化的人格化，其作用在于作为一种活的样板，给企业中其他员工提供可供仿效的榜样，对企业文化的形成和强化起着极为重要的作用。\r\n　　文化仪式是指企业内的各种表彰、奖励活动、聚会以及文娱活动等，它可以把企业中发生的某些事情戏剧化和形象化，来生动的宣传和体现本企业的价值观，使人们通过这些生动活泼的活动来领会企业文化的内涵，使企业文化“寓教于乐”之中。\r\n　　文化网络是指非正式的信息传递渠道，主要是传播文化信息。它是由某种非正式的组织和人群所组成，它所传递出的信息往往能反映出职工的愿望和心态。','0','<p>　　迪尔和肯尼迪把企业文化整个理论系统概述为5个要素，即企业环境、价值观、英雄人物、文化仪式和文化网络。</p>\r\n<p>　　企业环境是指企业的性质、企业的经营方向、外部环境企业文化企业文化、企业的社会形象、与外界的联系等方面。它往往决定企业的行为。</p>\r\n<p>　　价值观是指企业内成员对某个事件或某种行为好与坏、善与恶、正确与错误、是否值得仿效的一致认识。价值观是企业文化的核心，统一的价值观使企业内成员在判断自己行为时具有统一的标准，并以此来选择自己的行为。</p>\r\n<p>　　英雄人物是指企业文化的核心人物或企业文化的人格化，其作用在于作为一种活的样板，给企业中其他员工提供可供仿效的榜样，对企业文化的形成和强化起着极为重要的作用。</p>\r\n<p>　　文化仪式是指企业内的各种表彰、奖励活动、聚会以及文娱活动等，它可以把企业中发生的某些事情戏剧化和形象化，来生动的宣传和体现本企业的价值观，使人们通过这些生动活泼的活动来领会企业文化的内涵，使企业文化&ldquo;寓教于乐&rdquo;之中。</p>\r\n<p>　　文化网络是指非正式的信息传递渠道，主要是传播文化信息。它是由某种非正式的组织和人群所组成，它所传递出的信息往往能反映出职工的愿望和心态。</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('59','16','0','企业文化本质','','admin','1','0','','0','0','','0','','','','','1103','2014-10-11 17:05:37','admin','','/upload/images/201304/1103.jpg','1','1','　　企业文化本质，是通过企业制度的严格执行衍生而成，制度上的强制或激励最终促使群体产生某一行为自觉，这一群体的行为自觉便组成了企业文化。企业文化的本质在东堂策《企业文化一字解》中得到深刻印证，其中也详细道出企业文化产生机理。\r\n　　产生企业领导者把“文化的变化人”的功应用于企业，以解决现代企业管理中的问题，就有了企业文化。企业管理理论和企业文化管理理论都追求效益。但前者为追求效益而把人当作客体，后者为追求效益把文化概念自觉应用于企业，把具有丰富创造性的人作为管理理论的中心。这种指导思想反映到企业管理中去，就有了人们称之为企业文化的种种观念。\r\n　　认识从企业文化的现实出发，进行深入的调查研究，把握企业文化各种现象之间的本质联系。依据实践经验，从感性认识到理性认识，进行科学的概括、总结。\r\n　　意义一．企业文化能激发员工的使命感。不管是什么企业都有它的责任和使命，企业使命感是全体员工工作的目标和方向，是企业不断发展或前进的动力之源。\r\n　　二．企业文化能凝聚员工的归属感。　企业文化的作用就是通过企业价值观的提炼和传播，让一群来自不同地方的人共同追求同一个梦想。\r\n　　三．企业文化能加强员工的责任感。企业要通过大量的资料和文件宣传员工责任感的重要性，管理人员要给全体员工灌输责任意识，危机意识和团队意识，要让大家清楚地认识企业是全体员工共同的企业。\r\n　　四．企业文化能赋予员工的荣誉感。每个人都要在自己的工作岗位，工作领域，多做贡献，多出成绩，多追求荣誉感。\r\n　　五．企业文化能实现员工的成就感。一个企业的繁荣昌盛关系到每一个公司员工的生存，企业繁荣了，员工们就会引以为豪，会更积极努力的进取，荣耀越高，成就感就越大，越明显。','0','<p>&nbsp;　　企业文化本质，是通过企业制度的严格执行衍生而成，制度上的强制或激励最终促使群体产生某一行为自觉，这一群体的行为自觉便组成了企业文化。企业文化的本质在东堂策《企业文化一字解》中得到深刻印证，其中也详细道出企业文化产生机理。</p>\r\n<div>　　产生企业领导者把&ldquo;文化的变化人&rdquo;的功应用于企业，以解决现代企业管理中的问题，就有了企业文化。企业管理理论和企业文化管理理论都追求效益。但前者为追求效益而把人当作客体，后者为追求效益把文化概念自觉应用于企业，把具有丰富创造性的人作为管理理论的中心。这种指导思想反映到企业管理中去，就有了人们称之为企业文化的种种观念。</div>\r\n<div>　　认识从企业文化的现实出发，进行深入的调查研究，把握企业文化各种现象之间的本质联系。依据实践经验，从感性认识到理性认识，进行科学的概括、总结。</div>\r\n<div>　　意义一．企业文化能激发员工的使命感。不管是什么企业都有它的责任和使命，企业使命感是全体员工工作的目标和方向，是企业不断发展或前进的动力之源。</div>\r\n<div>　　二．企业文化能凝聚员工的归属感。　企业文化的作用就是通过企业价值观的提炼和传播，让一群来自不同地方的人共同追求同一个梦想。</div>\r\n<div>　　三．企业文化能加强员工的责任感。企业要通过大量的资料和文件宣传员工责任感的重要性，管理人员要给全体员工灌输责任意识，危机意识和团队意识，要让大家清楚地认识企业是全体员工共同的企业。</div>\r\n<div>　　四．企业文化能赋予员工的荣誉感。每个人都要在自己的工作岗位，工作领域，多做贡献，多出成绩，多追求荣誉感。</div>\r\n<div>　　五．企业文化能实现员工的成就感。一个企业的繁荣昌盛关系到每一个公司员工的生存，企业繁荣了，员工们就会引以为豪，会更积极努力的进取，荣耀越高，成就感就越大，越明显。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('60','16','0','企业文化特征','','admin','1','0','','0','0','','0','','','','','1104','2014-10-11 17:06:26','admin','','/upload/images/201304/1104.jpg','1','1','　　独特性企业文化具有鲜明的个性和特色，具有相对独立性，每个企业都有其独特的文化淀积，这是由企业的生产经营管理特色、企业传统、企业目标、企业员工素质以及内外环境不同所决定的。\r\n　　继承性企业在一定的时空条件下产生、生存和发展，企业文化是历史的产物。企业文化的继承性体现在三个方面：一是继承优秀的民族文化精华。二是继承企业的文化传统。三是继承外来的企业文化实践和研究成果。\r\n　　相融性企业文化的相融性体现在它与企业环境的协调和适应性方面。企业文化反映了时代精神，它必然要与企业的经济环境、政治环境、文化环境以及社区环境相融合。\r\n　　人本性企业文化是一种以人为本的文化，最本质的内容，就是强调人的理想、道德、价值观、行为规范在企业管理中的核心作用，强调在企业管理中要理解人，尊重人，关心人。注重的全面发展，用愿景鼓舞人，用精神凝聚人，用机制激励人，用环境培育人。\r\n　　整体性企业文化是一个有机的统一整体，人的发展和企业的发展密不可分，引导企业职工把个人奋斗目标融于企业整体目标之中，追求企业的整体优势和整体意志的实现。\r\n　　创新性创新既是时代的呼唤，又是企业文化自身的内在要求。优秀的企业文化往往在继承中创新，随着企业环境和国内外市场的变化而改革发展，引导大家追求卓越，追求成效，追求创新。','0','<p>&nbsp;　　独特性企业文化具有鲜明的个性和特色，具有相对独立性，每个企业都有其独特的文化淀积，这是由企业的生产经营管理特色、企业传统、企业目标、企业员工素质以及内外环境不同所决定的。</p>\r\n<div>　　继承性企业在一定的时空条件下产生、生存和发展，企业文化是历史的产物。企业文化的继承性体现在三个方面：一是继承优秀的民族文化精华。二是继承企业的文化传统。三是继承外来的企业文化实践和研究成果。</div>\r\n<div>　　相融性企业文化的相融性体现在它与企业环境的协调和适应性方面。企业文化反映了时代精神，它必然要与企业的经济环境、政治环境、文化环境以及社区环境相融合。</div>\r\n<div>　　人本性企业文化是一种以人为本的文化，最本质的内容，就是强调人的理想、道德、价值观、行为规范在企业管理中的核心作用，强调在企业管理中要理解人，尊重人，关心人。注重的全面发展，用愿景鼓舞人，用精神凝聚人，用机制激励人，用环境培育人。</div>\r\n<div>　　整体性企业文化是一个有机的统一整体，人的发展和企业的发展密不可分，引导企业职工把个人奋斗目标融于企业整体目标之中，追求企业的整体优势和整体意志的实现。</div>\r\n<div>　　创新性创新既是时代的呼唤，又是企业文化自身的内在要求。优秀的企业文化往往在继承中创新，随着企业环境和国内外市场的变化而改革发展，引导大家追求卓越，追求成效，追求创新。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('61','16','0','企业文化功能','','admin','1','0','','0','0','','0','','','','','1105','2014-10-11 17:06:59','admin','','/upload/images/201304/1105.jpg','1','1','　　导向所谓导向功能就是通过它对企业的领导者和职工起引导作用。企业文化的导向功企业文化企业文化能主要体现在以下二个方面。\r\n　　经营哲学和价值观念的指导经营哲学决定了企业经营的思维方式和处理问题的法则，这些方式和法则指导经营者进行正确的决策，指导员工采用科学的方法从事生产经营活动。企业共同的价值观念规定了企业的价值取向，使员工对事物的评判形成共识，有着共同的价值目标，企业的领导和员工为着他们所认定的价值目标去行动。美国学者托马斯·彼得斯和小罗伯特·沃特曼在《追求卓越》一书中指出“我们研究的所有优秀公司都很清楚他们的主张是什么，并认真建立和形成了公司的价值准则。事实上，一个公司缺乏明确的价值准则或价值观念不正确，我们则怀疑它是否有可能获得经营上的成功。”\r\n　　企业目标的指引企业目标代表着企业发展的方向，没有正确的目标就等于迷失了方向。完美的企业文化会从实际出发，以科学的态度去制立企业的发展目标，这种目标一定具有可行性和科学性。企业员工就是在这一目标的指导下从事生产经营活动。\r\n　　约束企业文化的约束功能主要是通过完善管理制度和道德规范来实现。\r\n　　有效规章制度的约束企业制度是企业文化的内容之一。企业制度是企业内部的法规，企业的领导者和企业职工必须遵守和执行，从而形成约束力。\r\n　　道德规范的约束道德规范是从伦理关系的角度来约束企业领导者和职工的行为。如果人们违背了道德规范的要求，就会受到舆论的谴责，心理上会感到内疚。同仁堂药店“济世养生、精益求精、童叟无欺、一视同仁”的道德规范约束着全体员工必须严格按工艺规程操作，严格质量管理，严格执行纪律。\r\n　　凝聚功能企业文化以人为本，尊重人的感情，从而在企业中造成了一种团结友爱、相互信任的和睦气氛，强化了团体意识，使企业职工之间形成强大的凝聚力和向心力。共同的价值观念形成了共同的目标和理想，职工把企业看成是一个命运共同体，把本职工作看成是实现共同目标的重要组成部分，整个企业步调一致，形成统一的整体。这时，“厂兴我荣，厂衰我耻”成为职工发自内心的真挚感情，“爱厂如家”就会变成他们的实际行动。\r\n　　激励企业文化企业文化共同的价值观念使每个职工都感到自己存在和行为的价值，自我价值的实现是人的最高精神需求的一种满足，这种满足必将形成强大的激励。在以人为本的企业文化氛围中，领导与职工、职工与职工之间互相关心，互相支持。特别是领导对职工的关心，职工会感到受人尊重，自然会振奋精神，努力工作。从而形成幸福企业， 另外，企业精神和企业形象对企业职工有着极大的鼓舞作用，特别是企业文化建设取得成功，在社会上产生影响时，企业职工会产生强烈的荣誉感和自豪感，他们会加倍努力，用自己的实际行动去维护企业的荣誉和形象。\r\n　　调适调适就是调整和适应。企业各部门之间、职工之间，由于各种原因难免会产生一些矛盾，解决这些矛盾需要各自进行自我调节；企业与环境、与顾客、与企业、与国家、与社会之间都会存在不协调、不适应之处，这也需要进行调整和适应。企业哲学和企业道德规范使经营者和普通员工能科学地处理这些矛盾，自觉地约束自己。完美的企业形象就是进行这些调节的结果。调适功能实际也是企业能动作用的一种表现。\r\n　　辐射企业文化关系到企业的公众形象、公众态度、公众舆论和品牌美誉度。企业文化不仅在企业内部发挥作用，对企业员工产生影响，它也能通过传播媒体，公共关系活动等各种渠道对社会产生影响，向社会辐射。企业文化的传播对树立企业在公众中的形象有很大帮助，优秀的企业文化对社会文化的发展有很大的影响。','0','<p>&nbsp;　　导向所谓导向功能就是通过它对企业的领导者和职工起引导作用。企业文化的导向功企业文化企业文化能主要体现在以下二个方面。</p>\r\n<div>　　经营哲学和价值观念的指导经营哲学决定了企业经营的思维方式和处理问题的法则，这些方式和法则指导经营者进行正确的决策，指导员工采用科学的方法从事生产经营活动。企业共同的价值观念规定了企业的价值取向，使员工对事物的评判形成共识，有着共同的价值目标，企业的领导和员工为着他们所认定的价值目标去行动。美国学者托马斯&middot;彼得斯和小罗伯特&middot;沃特曼在《追求卓越》一书中指出&ldquo;我们研究的所有优秀公司都很清楚他们的主张是什么，并认真建立和形成了公司的价值准则。事实上，一个公司缺乏明确的价值准则或价值观念不正确，我们则怀疑它是否有可能获得经营上的成功。&rdquo;</div>\r\n<div>　　企业目标的指引企业目标代表着企业发展的方向，没有正确的目标就等于迷失了方向。完美的企业文化会从实际出发，以科学的态度去制立企业的发展目标，这种目标一定具有可行性和科学性。企业员工就是在这一目标的指导下从事生产经营活动。</div>\r\n<div>　　约束企业文化的约束功能主要是通过完善管理制度和道德规范来实现。</div>\r\n<div>　　有效规章制度的约束企业制度是企业文化的内容之一。企业制度是企业内部的法规，企业的领导者和企业职工必须遵守和执行，从而形成约束力。</div>\r\n<div>　　道德规范的约束道德规范是从伦理关系的角度来约束企业领导者和职工的行为。如果人们违背了道德规范的要求，就会受到舆论的谴责，心理上会感到内疚。同仁堂药店&ldquo;济世养生、精益求精、童叟无欺、一视同仁&rdquo;的道德规范约束着全体员工必须严格按工艺规程操作，严格质量管理，严格执行纪律。</div>\r\n<div>　　凝聚功能企业文化以人为本，尊重人的感情，从而在企业中造成了一种团结友爱、相互信任的和睦气氛，强化了团体意识，使企业职工之间形成强大的凝聚力和向心力。共同的价值观念形成了共同的目标和理想，职工把企业看成是一个命运共同体，把本职工作看成是实现共同目标的重要组成部分，整个企业步调一致，形成统一的整体。这时，&ldquo;厂兴我荣，厂衰我耻&rdquo;成为职工发自内心的真挚感情，&ldquo;爱厂如家&rdquo;就会变成他们的实际行动。</div>\r\n<div>　　激励企业文化企业文化共同的价值观念使每个职工都感到自己存在和行为的价值，自我价值的实现是人的最高精神需求的一种满足，这种满足必将形成强大的激励。在以人为本的企业文化氛围中，领导与职工、职工与职工之间互相关心，互相支持。特别是领导对职工的关心，职工会感到受人尊重，自然会振奋精神，努力工作。从而形成幸福企业， 另外，企业精神和企业形象对企业职工有着极大的鼓舞作用，特别是企业文化建设取得成功，在社会上产生影响时，企业职工会产生强烈的荣誉感和自豪感，他们会加倍努力，用自己的实际行动去维护企业的荣誉和形象。</div>\r\n<div>　　调适调适就是调整和适应。企业各部门之间、职工之间，由于各种原因难免会产生一些矛盾，解决这些矛盾需要各自进行自我调节；企业与环境、与顾客、与企业、与国家、与社会之间都会存在不协调、不适应之处，这也需要进行调整和适应。企业哲学和企业道德规范使经营者和普通员工能科学地处理这些矛盾，自觉地约束自己。完美的企业形象就是进行这些调节的结果。调适功能实际也是企业能动作用的一种表现。</div>\r\n<div>　　辐射企业文化关系到企业的公众形象、公众态度、公众舆论和品牌美誉度。企业文化不仅在企业内部发挥作用，对企业员工产生影响，它也能通过传播媒体，公共关系活动等各种渠道对社会产生影响，向社会辐射。企业文化的传播对树立企业在公众中的形象有很大帮助，优秀的企业文化对社会文化的发展有很大的影响。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('62','17','0','获得荣誉一','','admin','1','0','','0','0','','0','','','','','1201','2014-10-11 17:18:15','admin','','/upload/images/201304/1201.jpg','1','1','  CmsEasy是一款基于 PHP+Mysql 架构的网站内容管理系统，也是一个 PHP 开发平台。 采用模块化方式开发，功能易用便于扩展，可面向大中型站点提供重量级网站建设解决方案。2年来，凭借 团队长期积累的丰富的Web开发及数据库经验和勇于创新追求完美的设计理念，使得 CmsEasy v1.0 得到了众多网站的认可，并且越来越多地被应用到大中型商业网站。\r\n','0','<p>&nbsp; CmsEasy是一款基于 PHP+Mysql 架构的网站内容管理系统，也是一个 PHP 开发平台。 采用模块化方式开发，功能易用便于扩展，可面向大中型站点提供重量级网站建设解决方案。2年来，凭借 团队长期积累的丰富的Web开发及数据库经验和勇于创新追求完美的设计理念，使得 CmsEasy v1.0 得到了众多网站的认可，并且越来越多地被应用到大中型商业网站。</p>\r\n<div>&nbsp;</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('63','17','0','获得荣誉二','','admin','1','0','','0','0','','0','','','','','1202','2014-10-11 17:18:43','admin','','/upload/images/201304/1202.jpg','1','1',' 易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。\r\n','0','<p>&nbsp;易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。</p>\r\n<div>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('64','17','0','获得荣誉三','','admin','1','0','','0','0','','0','','','','','1203','2014-10-11 17:19:15','admin','','/upload/images/201304/1203.jpg','1','1','九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。\r\n','0','<p>&nbsp;九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('65','17','0','获得荣誉四','','admin','1','0','','0','0','','0','','','','','1204','2014-10-11 17:19:49','admin','','/upload/images/201304/1204.jpg','1','1','易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。\r\n\r\n九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。\r\n','0','<p>&nbsp;易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。</p>\r\n<p>九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('66','18','0','成功案例一','','admin','1','2','','0','0','','0','','','','','8001','2014-10-11 18:57:57','admin','','/upload/images/201304/8001.jpg','1','1',' 查找引擎优化engine 简称查找引擎优化指遵循查找引擎的查找事理，对网站机关、页面文字说话和站点间互动交际略等进行合理计划布置，以改进网站在查找引擎的查找默示，进而添加客户发现并访谒网站的可能性的这样一个进程. 查找引擎优化也是一种科学的成长不美观和编制论，它跟着查找引擎的开展而开展, 一起也促进了查找引擎的开展。','0','<p>&nbsp;查找引擎优化engine 简称查找引擎优化指遵循查找引擎的查找事理，对网站机关、页面文字说话和站点间互动交际略等进行合理计划布置，以改进网站在查找引擎的查找默示，进而添加客户发现并访谒网站的可能性的这样一个进程. 查找引擎优化也是一种科学的成长不美观和编制论，它跟着查找引擎的开展而开展, 一起也促进了查找引擎的开展。</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('67','18','0','成功案例二','','admin','1','0','','0','0','','0','','','','','8002','2014-10-11 18:58:47','admin','','/upload/images/201304/8002.jpg','1','1','利于提升关键词排名外链可以有效的提升关键词排名而内链就是加已巩固排名最好的方法之一。对于内链的作用，其实最基本一点也是可以提升关键词排名的。而且通过内链优化来提升关键词排名，可以使自己在与对手竞争时，更有稳定性，因为同样的方法，取胜之处就在于细节方面的处理，而内链往往是细节中最重要的一环，所以内链的实际作用就目前来说，跟外链的作用是不相上下的。而且要让搜索引挚重视自己的网站，自然通过内链可以更好的使网站的内容相关性更强，自然搜索引挚对于具有文不离题内容的网站适当的照顾一下的。所以，而且内链中的关键词还可以提升网站关键词的整体密度，进而对提升关键词排名起到一定的帮助。所以说内链的最根本的一个作用就是可以帮助网站提升关键词排名，要不然站长也不会越来越重视内链优化了。','0','<p>利于提升关键词排名外链可以有效的提升关键词排名而内链就是加已巩固排名最好的方法之一。对于内链的作用，其实最基本一点也是可以提升关键词排名的。而且通过内链优化来提升关键词排名，可以使自己在与对手竞争时，更有稳定性，因为同样的方法，取胜之处就在于细节方面的处理，而内链往往是细节中最重要的一环，所以内链的实际作用就目前来说，跟外链的作用是不相上下的。而且要让搜索引挚重视自己的网站，自然通过内链可以更好的使网站的内容相关性更强，自然搜索引挚对于具有文不离题内容的网站适当的照顾一下的。所以，而且内链中的关键词还可以提升网站关键词的整体密度，进而对提升关键词排名起到一定的帮助。所以说内链的最根本的一个作用就是可以帮助网站提升关键词排名，要不然站长也不会越来越重视内链优化了。</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('68','18','0','成功案例三','','admin','1','0','','0','0','','0','','','','','8003','2014-10-11 18:59:23','admin','','/upload/images/201304/8003.jpg','1','1',' 需要出色的沟通和展示诀窍作为专业的SEOER，无论是在接单时仍是在优化进程中与客户的沟通进程中，都需要向客户介绍自己**的优化方案，在施行SEO进程中还需要 及时向客户通报工作进展，以及展示现已到达的优化效果等，这些既是增强接单才干，能够抢夺获得更多客户的才干，也是获得客户的进一步信任与一定，保护好客 情联络，做好后续的客户服务工作的必要技能，因此应当是优良的SEOER必备的才干。\r\n　　勇于活泼进行优化检验和立异在具体的优化方法上，虽然有很多咱们所熟知和堆集出来的优化阅历与方法，但是由于查找引擎的算法不断地进行改动，所以要想能够及时捉住查找引 擎最新的算法，做到在优化进程中及时迎合其算法标准，以期获得更佳的效果。因此，要获得最新的查找引擎算法改变状况，优良的SEOER应当勇于活泼进行大 胆的检验，按照自己的阅历运用一些优化措施，来检验查找引擎对于这些优化方法的反响，极力走在同行的前列。','0','<p>&nbsp;需要出色的沟通和展示诀窍作为专业的SEOER，无论是在接单时仍是在优化进程中与客户的沟通进程中，都需要向客户介绍自己**的优化方案，在施行SEO进程中还需要 及时向客户通报工作进展，以及展示现已到达的优化效果等，这些既是增强接单才干，能够抢夺获得更多客户的才干，也是获得客户的进一步信任与一定，保护好客 情联络，做好后续的客户服务工作的必要技能，因此应当是优良的SEOER必备的才干。</p>\r\n<div>　　勇于活泼进行优化检验和立异在具体的优化方法上，虽然有很多咱们所熟知和堆集出来的优化阅历与方法，但是由于查找引擎的算法不断地进行改动，所以要想能够及时捉住查找引 擎最新的算法，做到在优化进程中及时迎合其算法标准，以期获得更佳的效果。因此，要获得最新的查找引擎算法改变状况，优良的SEOER应当勇于活泼进行大 胆的检验，按照自己的阅历运用一些优化措施，来检验查找引擎对于这些优化方法的反响，极力走在同行的前列。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('69','18','0','成功案例四','','admin','1','0','','0','0','','0','','','','','8004','2014-10-11 19:00:08','admin','','/upload/images/201304/8004.jpg','1','1','赋有弹性的出色心态做优化便是用自己的才智与阅历和查找引擎“斗智斗法”，面对查找引擎的调整，无论是站长仍是SEOER都处于被逼的境地，特别像baidu常常运用 人工ganyu查找效果，对于算法系统常常性的调整使得网站优化效果常常会出现不稳定改变的表象。面对这种实力不对等的境况和查找引擎改变 的特征，作为专业从事SEO的工作者而言，需要首要练就的便是一副赋有弹性的出色心态，优良的SEOER需要坚持淡定 不紧张的心态，能够做到从容应对。\r\n　　堆集各种优化可用的本钱专业的SEO需要运用到林林总总的本钱，从高质量的内容来历到优质的外链发布本钱，都是在打开网站优化进程中有必要用到的。网站的优化工作是一 项涉及到内容、关键词、外链、内链等各个元素的系统化工作，因此在打开有关的工作时需要堆集有满足丰厚的本钱，才有利于能够快速地按照既定的优化方案实 施。优良的SEOER应当在优化打开之前和往常的工作进程中留意搜集和堆集各种今后能够运用的本钱，前进工作的功率和有效性。','0','<div>赋有弹性的出色心态做优化便是用自己的才智与阅历和查找引擎&ldquo;斗智斗法&rdquo;，面对查找引擎的调整，无论是站长仍是SEOER都处于被逼的境地，特别像baidu常常运用 人工ganyu查找效果，对于算法系统常常性的调整使得网站优化效果常常会出现不稳定改变的表象。面对这种实力不对等的境况和查找引擎改变 的特征，作为专业从事SEO的工作者而言，需要首要练就的便是一副赋有弹性的出色心态，优良的SEOER需要坚持淡定 不紧张的心态，能够做到从容应对。</div>\r\n<div>　　堆集各种优化可用的本钱专业的SEO需要运用到林林总总的本钱，从高质量的内容来历到优质的外链发布本钱，都是在打开网站优化进程中有必要用到的。网站的优化工作是一 项涉及到内容、关键词、外链、内链等各个元素的系统化工作，因此在打开有关的工作时需要堆集有满足丰厚的本钱，才有利于能够快速地按照既定的优化方案实 施。优良的SEOER应当在优化打开之前和往常的工作进程中留意搜集和堆集各种今后能够运用的本钱，前进工作的功率和有效性。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('70','18','0','成功案例五','','admin','1','0','','0','0','','0','','','','','8005','2014-10-11 19:00:59','admin','','/upload/images/201304/8005.jpg','1','1','标题应该怎么做怎么样来选择标题，标题要求很简单，他需要有几个特性，大的行业靠长尾关键词，小的行业靠目标关键词，而淘宝客严格意义来说是大的行业，这里说大指的是行业的受众。淘宝客可以做任何行业的受众，它是一个大的行业。同样旅游也是大的行业。而中小型企业点的行业就是小的行业。所以说目标和长尾是一个相对的概念。比如说云南旅游，它的受众很大，可以做目标词，而去云南旅游的注意事项就是长尾词，它是相对的。\r\n　　标题应该去找寻有转换率的而关注度较少的长尾词(竞争度非常少所指的是目录页和内页，目录页可以寄居到一些大型站点下面，比如很多的企业去阿里巴巴开一个二级域名的店铺等。\r\n　　它是一个目录页或者是二级域名。现在有一个问题就是它没有流量，或者有流量没有转换率。而我们seo是要解决这个问题的。流量和转换率是由关键词产生的。关键词有转换率的很多，不能每个都做，大家都认为可以做的词，我们就不要去做的，商业竞争是非常残酷的。\r\n　　我们要选择的词就是大伙还没有发现或者有少数人发现的我们可以去竞争得过人家的词。怎么知道这个词有转换呢?这就一定要做关键词词库，词库就是我们知道有一些词有流量，这种词会大量存在的，而且有规律的，是可以进行推理和推导的，这个词库的统计是一个长期且漫长的过程，通过词库就可以淘汰很多的词。','0','<p>标题应该怎么做怎么样来选择标题，标题要求很简单，他需要有几个特性，大的行业靠长尾关键词，小的行业靠目标关键词，而淘宝客严格意义来说是大的行业，这里说大指的是行业的受众。淘宝客可以做任何行业的受众，它是一个大的行业。同样旅游也是大的行业。而中小型企业点的行业就是小的行业。所以说目标和长尾是一个相对的概念。比如说云南旅游，它的受众很大，可以做目标词，而去云南旅游的注意事项就是长尾词，它是相对的。</p>\r\n<div>　　标题应该去找寻有转换率的而关注度较少的长尾词(竞争度非常少所指的是目录页和内页，目录页可以寄居到一些大型站点下面，比如很多的企业去阿里巴巴开一个二级域名的店铺等。</div>\r\n<div>　　它是一个目录页或者是二级域名。现在有一个问题就是它没有流量，或者有流量没有转换率。而我们seo是要解决这个问题的。流量和转换率是由关键词产生的。关键词有转换率的很多，不能每个都做，大家都认为可以做的词，我们就不要去做的，商业竞争是非常残酷的。</div>\r\n<div>　　我们要选择的词就是大伙还没有发现或者有少数人发现的我们可以去竞争得过人家的词。怎么知道这个词有转换呢?这就一定要做关键词词库，词库就是我们知道有一些词有流量，这种词会大量存在的，而且有规律的，是可以进行推理和推导的，这个词库的统计是一个长期且漫长的过程，通过词库就可以淘汰很多的词。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('71','18','0','成功案例六','','admin','1','0','','0','0','','0','','','','','8006','2014-10-11 19:02:02','admin','','/upload/images/201304/8006.jpg','1','1','外链营销也不例外，《搜刮引擎优化艺术》书中说：“有些东西天生能吸引链接，由于能触发(读者)生理和情感回声——自负、分享、消息性等。充实利用这些触发性因素，为那些能影响网站内容的访问者(作家、站长、博客作者)制造一个有说服力的来由来引用你的作品，你的链接创建就将会乐成”。\r\n　　因此，作为一个企业网站外链营销专员，我们必须思索，本行业用户存眷的话题是什么?而我网站能赐与别人的奇特内容有些什么呢?海内站长每每缺乏这方面的战略考量，横竖“发外链”呗，能留下外链、被搜刮引擎收录就是乐成，基础不思量受众感觉(这不能完全怪外链专员，很多公司就是以数目考核外链专员的)，从他们的角度来说，如许的外链乐成了，但很难到达“产生高点击率”的外链营销结果。\r\n　　《搜刮引擎优化艺术》作者提示我们，在确定网站外链建计划谋时，起首必须“摸清家底”，晓得本身网站如今有什么内容，可以增长什么内容，我网站特色在那边，用户需求是什么，扬长避短，来确定我们本身“基于网站内容的链接建计划谋”。\r\n　　好比，提问那位朋侪做的是打扮网站，网站内容很难出新，但面对同样标题，淘宝一些女装店家本身做模特儿，展示本身打扮格局的特点，取得较好的营销结果。假如在如许别开生面的内容基础之上，在一些女性消耗者居多的论坛(或微博)挑选出两幅良好图片做“外链营销”，就能很好地收到点击外链的结果。\r\n　　而且如许基于高质量内容的链接，很容易成为“链接诱饵”，被更多用户、网站站长保举，到达“真正的搜刮引擎优化能手只晓得本身外链到处都有，但却不晓得是谁帮创建的”田地。\r\n　　这阐发白内容大概雷同，但由于体现情势的差别，内容受众的生理感觉也肯定差别，以致美学家对美的界说都是“美是故意味的情势”——紧急的是“探求更能引起受众共鸣的内容体现情势”，而不是你体现的东西与众差别。','0','<p>外链营销也不例外，《搜刮引擎优化艺术》书中说：&ldquo;有些东西天生能吸引链接，由于能触发(读者)生理和情感回声&mdash;&mdash;自负、分享、消息性等。充实利用这些触发性因素，为那些能影响网站内容的访问者(作家、站长、博客作者)制造一个有说服力的来由来引用你的作品，你的链接创建就将会乐成&rdquo;。</p>\r\n<div>　　因此，作为一个企业网站外链营销专员，我们必须思索，本行业用户存眷的话题是什么?而我网站能赐与别人的奇特内容有些什么呢?海内站长每每缺乏这方面的战略考量，横竖&ldquo;发外链&rdquo;呗，能留下外链、被搜刮引擎收录就是乐成，基础不思量受众感觉(这不能完全怪外链专员，很多公司就是以数目考核外链专员的)，从他们的角度来说，如许的外链乐成了，但很难到达&ldquo;产生高点击率&rdquo;的外链营销结果。</div>\r\n<div>　　《搜刮引擎优化艺术》作者提示我们，在确定网站外链建计划谋时，起首必须&ldquo;摸清家底&rdquo;，晓得本身网站如今有什么内容，可以增长什么内容，我网站特色在那边，用户需求是什么，扬长避短，来确定我们本身&ldquo;基于网站内容的链接建计划谋&rdquo;。</div>\r\n<div>　　好比，提问那位朋侪做的是打扮网站，网站内容很难出新，但面对同样标题，淘宝一些女装店家本身做模特儿，展示本身打扮格局的特点，取得较好的营销结果。假如在如许别开生面的内容基础之上，在一些女性消耗者居多的论坛(或微博)挑选出两幅良好图片做&ldquo;外链营销&rdquo;，就能很好地收到点击外链的结果。</div>\r\n<div>　　而且如许基于高质量内容的链接，很容易成为&ldquo;链接诱饵&rdquo;，被更多用户、网站站长保举，到达&ldquo;真正的搜刮引擎优化能手只晓得本身外链到处都有，但却不晓得是谁帮创建的&rdquo;田地。</div>\r\n<div>　　这阐发白内容大概雷同，但由于体现情势的差别，内容受众的生理感觉也肯定差别，以致美学家对美的界说都是&ldquo;美是故意味的情势&rdquo;&mdash;&mdash;紧急的是&ldquo;探求更能引起受众共鸣的内容体现情势&rdquo;，而不是你体现的东西与众差别。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('72','18','0','成功案例七','','admin','1','0','','0','0','','0','','','','','8007','2014-10-11 19:02:39','admin','','/upload/images/201304/8007.jpg','1','1','必须指出的是，如许“探求更能引起受众共鸣的内容体现情势”，不但对网站内容构建有启示作用，对“外链营销”也同样。《搜刮引擎优化艺术》中说：“可以用差别种类的内容(同一内容的差别体现情势)吸引链接。文章、有吸引力的图片、视频、东西、以致开辟线上游戏”。好比一些民营医院举行网络手术视频直播，一段时间内直播地点不绝地被各大网站管理员及网友自觉保举分享。\r\n　　别的，敷衍内容大同小异的企业网站来说，无论是网站内容构建还是外链营销环节，捉住“时效性话题”做文章是一个“拓展内家”的好要领。任何时间网络上都不缺乏热门的“时效性话题”，只要我们本身的网站可以大概不绝地捉住具有干系性的“时效性话题”做文章，只要实时奇妙地从中掘客到本身网站的奇特卖点(肯定要有本身新意，而且不能委曲)，借势营销，不难想象，这类盛行话题带来的外链点击率肯定不会低——好比做女装的网站，前些日子就不应该放过不胫而走的“齐B小短裙”话题。\r\n　　末了，就是坚持，不要怕累，不要怕被模拟，不要怕一段时间内结果不显着，以致不如“内容只是偶尔义穿插关键字”的传统“发外链，引蜘蛛”本领。坚持下去。由于任何营销本领都必须坚持才气收效——外链营销也不例外。\r\n　　特殊要提示列位搜刮引擎优化ER的是，不要为本身找放弃的捏词来由，好比“海内网站都是复制收罗伪原创”。这简直是毕竟，但我们不能等待情况好了再做。只要降服困难坚持下去，就肯定会有效果。\r\n　　而且，将如许“基于内容的外链建计划谋”坚持下去，再辅以其他宣传营销本领(好比消息营销等)，一段时间以后，就能有效拉开与其他同类网站的隔断，真正实现网站品牌化的终极营销目的。\r\n　　末了，《搜刮引擎优化艺术》将“外链营销”总结为：“良好的链接创建来自于简单的观点：创建好的内容，陈诉其他人，鼓励他们分享”。\r\n　　这阐发，包罗外链营销在内的统统营销推广实质上都是内容营销，不能将网站内容与网站外链营销破碎开来，网站内容质量与外链质量密切干系——这才是链接干系性的真实寄义。假如你网站内容(服务)真的很优质，你的外链质量肯定不会差，肯定能产生无数赢得更多点击的优质外链;而一个用户体验良好，让人产生点击激动的外链，它所指向页面的内容质量也不会低。','0','<p>必须指出的是，如许&ldquo;探求更能引起受众共鸣的内容体现情势&rdquo;，不但对网站内容构建有启示作用，对&ldquo;外链营销&rdquo;也同样。《搜刮引擎优化艺术》中说：&ldquo;可以用差别种类的内容(同一内容的差别体现情势)吸引链接。文章、有吸引力的图片、视频、东西、以致开辟线上游戏&rdquo;。好比一些民营医院举行网络手术视频直播，一段时间内直播地点不绝地被各大网站管理员及网友自觉保举分享。</p>\r\n<div>　　别的，敷衍内容大同小异的企业网站来说，无论是网站内容构建还是外链营销环节，捉住&ldquo;时效性话题&rdquo;做文章是一个&ldquo;拓展内家&rdquo;的好要领。任何时间网络上都不缺乏热门的&ldquo;时效性话题&rdquo;，只要我们本身的网站可以大概不绝地捉住具有干系性的&ldquo;时效性话题&rdquo;做文章，只要实时奇妙地从中掘客到本身网站的奇特卖点(肯定要有本身新意，而且不能委曲)，借势营销，不难想象，这类盛行话题带来的外链点击率肯定不会低&mdash;&mdash;好比做女装的网站，前些日子就不应该放过不胫而走的&ldquo;齐B小短裙&rdquo;话题。</div>\r\n<div>　　末了，就是坚持，不要怕累，不要怕被模拟，不要怕一段时间内结果不显着，以致不如&ldquo;内容只是偶尔义穿插关键字&rdquo;的传统&ldquo;发外链，引蜘蛛&rdquo;本领。坚持下去。由于任何营销本领都必须坚持才气收效&mdash;&mdash;外链营销也不例外。</div>\r\n<div>　　特殊要提示列位搜刮引擎优化ER的是，不要为本身找放弃的捏词来由，好比&ldquo;海内网站都是复制收罗伪原创&rdquo;。这简直是毕竟，但我们不能等待情况好了再做。只要降服困难坚持下去，就肯定会有效果。</div>\r\n<div>　　而且，将如许&ldquo;基于内容的外链建计划谋&rdquo;坚持下去，再辅以其他宣传营销本领(好比消息营销等)，一段时间以后，就能有效拉开与其他同类网站的隔断，真正实现网站品牌化的终极营销目的。</div>\r\n<div>　　末了，《搜刮引擎优化艺术》将&ldquo;外链营销&rdquo;总结为：&ldquo;良好的链接创建来自于简单的观点：创建好的内容，陈诉其他人，鼓励他们分享&rdquo;。</div>\r\n<div>　　这阐发，包罗外链营销在内的统统营销推广实质上都是内容营销，不能将网站内容与网站外链营销破碎开来，网站内容质量与外链质量密切干系&mdash;&mdash;这才是链接干系性的真实寄义。假如你网站内容(服务)真的很优质，你的外链质量肯定不会差，肯定能产生无数赢得更多点击的优质外链;而一个用户体验良好，让人产生点击激动的外链，它所指向页面的内容质量也不会低。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('73','18','0','成功案例八','','admin','1','0','','0','0','','0','','','','','8008','2014-10-11 19:03:22','admin','','/upload/images/201304/8008.jpg','1','1','要迎合用户需求来写。在做网站内容是，要分析用户的需求，迎合用户的需求去写网站内容。因为在互联网上有大量相似的文章，你再去写类似的文章，搜索引擎为什么要收录你的文章给予排名呢?所以做网站内容的时候要考虑到是否用户需要的，网站内容是否新颖。可以登入商标注册网站都是很专业的商标资讯文章文章定时更新。每日准时更新网站内容，每天都能让蜘蛛有东西吃，满意而归。假如蜘蛛今天有东西吃，明天没东西吃，后天也没东西吃，没准蜘蛛不来你的网站了。发完一篇文章后，最好到百度站长平台抓取诊断一下，看文章抓取是否显示正常。\r\n　　网站地图。一般蜘蛛要来抓取你的网站首先看的你的网站地图Sitemap，再以它为导航爬行你的网站，一个新站最容易忽视网站地图，网站地图能更好的引导蜘蛛来抓取我们的网站，提高网站收录速度。每更新一篇文章之后，立刻生成地图传到网站根目录。\r\n　　发布外链。到各大高权重外链平台(达到秒收效果最佳)发布外链，例如搜外SEO论坛，A5站长，28推等平台，吸引蜘蛛来抓取网站的文章，也是能加快网站文章收录速度。发外链每天要平稳，不能大跌大增，某某大牛说，一天最少要发10-30条外链。\r\n　　文章内链。一个页面要被收录，首先要能够被搜索引擎蜘蛛爬行到，蜘蛛的爬行轨迹是顺着一个链接到另一个链接，想让搜索引擎蜘蛛更好地爬行，在你在文章适当位置增加些文章的锚文本链接，这样能有效缩短蜘蛛的抓取网站内容时间，有效提高文章的收录率。如果是新站长建议不要做内链，一个不注意形成死链断链，蜘蛛就无从爬起，那就更别谈网站文章收录了。','0','<p>要迎合用户需求来写。在做网站内容是，要分析用户的需求，迎合用户的需求去写网站内容。因为在互联网上有大量相似的文章，你再去写类似的文章，搜索引擎为什么要收录你的文章给予排名呢?所以做网站内容的时候要考虑到是否用户需要的，网站内容是否新颖。可以登入商标注册网站都是很专业的商标资讯文章文章定时更新。每日准时更新网站内容，每天都能让蜘蛛有东西吃，满意而归。假如蜘蛛今天有东西吃，明天没东西吃，后天也没东西吃，没准蜘蛛不来你的网站了。发完一篇文章后，最好到百度站长平台抓取诊断一下，看文章抓取是否显示正常。</p>\r\n<div>　　网站地图。一般蜘蛛要来抓取你的网站首先看的你的网站地图Sitemap，再以它为导航爬行你的网站，一个新站最容易忽视网站地图，网站地图能更好的引导蜘蛛来抓取我们的网站，提高网站收录速度。每更新一篇文章之后，立刻生成地图传到网站根目录。</div>\r\n<div>　　发布外链。到各大高权重外链平台(达到秒收效果最佳)发布外链，例如搜外SEO论坛，A5站长，28推等平台，吸引蜘蛛来抓取网站的文章，也是能加快网站文章收录速度。发外链每天要平稳，不能大跌大增，某某大牛说，一天最少要发10-30条外链。</div>\r\n<div>　　文章内链。一个页面要被收录，首先要能够被搜索引擎蜘蛛爬行到，蜘蛛的爬行轨迹是顺着一个链接到另一个链接，想让搜索引擎蜘蛛更好地爬行，在你在文章适当位置增加些文章的锚文本链接，这样能有效缩短蜘蛛的抓取网站内容时间，有效提高文章的收录率。如果是新站长建议不要做内链，一个不注意形成死链断链，蜘蛛就无从爬起，那就更别谈网站文章收录了。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('74','18','0','成功案例九','','admin','1','0','','0','0','','0','','','','','8009','2014-10-11 19:04:13','admin','','/upload/images/201304/8009.jpg','1','1','如果我们网站关键词没有一个好的排名，去强调用户体验显然有些枉然，因为我们的用户还是需要通过百度搜索引擎进入我们的网站，如果你连这个通道口都放弃了，那么你的网站将会是一个没有活力的网站，所以今天，在这里给大家介绍关键词排名的相关因素。\r\n　　发外链说到发外链，相信seo最熟悉不过了，笔者曾光红从2007年做个人站长，也一直过着发外链的生活，但如今百度搜索引擎对于外链的管制是非常的严格，有些论坛和网站也都杜绝带外链，导致很多很多的外链专员都无法下手，后来转到投稿给chinaz等大网站。当然发外链的难处并非如此，详情以下：\r\n　　1、 页面权重的影响。\r\n　　我们都知道网站的每一个页面都是有一定的权重值，所以我们所发的外链的权重值是根据页面的权重值来衡量的。所以我们在发外链一定要选择高权重的页面。\r\n　　2、 页面导出值。\r\n　　当外链页面的权重值为0.2时，算法是要以0.2在计算出该页面的内链和外链后剩下的权重值才可能会导入你所发的外链。所以说你所发的外链权重值是非常的小。因为内链和外链都会瓜分我们的权重，所以一般一个页面内链最好不多为5条。比如：我在chinaz投稿一文章后，我只带了一条3u推论坛的外链。那么我这一条外链绝对要比带5条外链所导出的权重要高的多。','0','<p>如果我们网站关键词没有一个好的排名，去强调用户体验显然有些枉然，因为我们的用户还是需要通过百度搜索引擎进入我们的网站，如果你连这个通道口都放弃了，那么你的网站将会是一个没有活力的网站，所以今天，在这里给大家介绍关键词排名的相关因素。</p>\r\n<div>　　发外链说到发外链，相信seo最熟悉不过了，笔者曾光红从2007年做个人站长，也一直过着发外链的生活，但如今百度搜索引擎对于外链的管制是非常的严格，有些论坛和网站也都杜绝带外链，导致很多很多的外链专员都无法下手，后来转到投稿给chinaz等大网站。当然发外链的难处并非如此，详情以下：</div>\r\n<div>　　1、 页面权重的影响。</div>\r\n<div>　　我们都知道网站的每一个页面都是有一定的权重值，所以我们所发的外链的权重值是根据页面的权重值来衡量的。所以我们在发外链一定要选择高权重的页面。</div>\r\n<div>　　2、 页面导出值。</div>\r\n<div>　　当外链页面的权重值为0.2时，算法是要以0.2在计算出该页面的内链和外链后剩下的权重值才可能会导入你所发的外链。所以说你所发的外链权重值是非常的小。因为内链和外链都会瓜分我们的权重，所以一般一个页面内链最好不多为5条。比如：我在chinaz投稿一文章后，我只带了一条3u推论坛的外链。那么我这一条外链绝对要比带5条外链所导出的权重要高的多。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('75','18','0','成功案例十','','admin','1','0','','0','0','','0','','','','','8010','2014-10-11 19:05:14','admin','','/upload/images/201304/8010.jpg','1','1','网站内链页面内链的插入主要还是以用户的求为主要的。当我们写完一篇文章后，我们在插入内链推荐的时候就要想到用户看到这里的时候还会想去看什么内容，这就要我们去琢磨用户的心理。对于用户比较有价值推荐我们可以加上锚文本链接。这样能提升用户体验度的同时还能增加关键词的内链权重。\r\n　　网站内容内容是一个比较常聊到的话题，因为我们也总是在强调说要怎么去写原创文章，今天我所说的内容不单单是指文字内容。更是包括网站所有内容。接下来我就简单的说几点。\r\n　　1、 页面速度。网站的浏览速度是一个非常重要的因素，这关系到用户体验问题，更是关系到网站关键词排名的一个问题。所以网站打开速度一定要快。\r\n　　2、 页面设计。通常对于我们中国人来说，我们看网页都是喜欢从上往下，从左往右，所以我们要把网站的特色更好的展现给用户。\r\n　　3、 页面无限制。这种情况多数于论坛，3u推论坛支持访客评论，但有些论坛看贴都是需要回复内容的，这个限制其实是让人反感。\r\n　　4、 图文并茂。纯文字可能已经过去了，为了用户更好的浏览你的页面，所以你要在文中合理增加图片或者是视频什么的。','0','<p>网站内链页面内链的插入主要还是以用户的求为主要的。当我们写完一篇文章后，我们在插入内链推荐的时候就要想到用户看到这里的时候还会想去看什么内容，这就要我们去琢磨用户的心理。对于用户比较有价值推荐我们可以加上锚文本链接。这样能提升用户体验度的同时还能增加关键词的内链权重。</p>\r\n<div>　　网站内容内容是一个比较常聊到的话题，因为我们也总是在强调说要怎么去写原创文章，今天我所说的内容不单单是指文字内容。更是包括网站所有内容。接下来我就简单的说几点。</div>\r\n<div>　　1、 页面速度。网站的浏览速度是一个非常重要的因素，这关系到用户体验问题，更是关系到网站关键词排名的一个问题。所以网站打开速度一定要快。</div>\r\n<div>　　2、 页面设计。通常对于我们中国人来说，我们看网页都是喜欢从上往下，从左往右，所以我们要把网站的特色更好的展现给用户。</div>\r\n<div>　　3、 页面无限制。这种情况多数于论坛，3u推论坛支持访客评论，但有些论坛看贴都是需要回复内容的，这个限制其实是让人反感。</div>\r\n<div>　　4、 图文并茂。纯文字可能已经过去了，为了用户更好的浏览你的页面，所以你要在文中合理增加图片或者是视频什么的。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('76','18','0','成功案例十一','','admin','1','0','','0','0','','0','','','','','8011','2014-10-11 19:05:49','admin','','/upload/images/201304/8011.jpg','1','1','个营销类型的网站，流量来源包括了新闻资讯的流量，产品页面的流量等。一般情况下我们的资讯页面的流量转化率要比产品页面流量转化率低，这一个可以直接使用站长统计在后台看。对企业来说，产品页的流量就是有效的，还有企业的产品留言板，一般对你产品没兴趣也就不会问你的产品，这部分流量转化率也不低。\r\n　　网站创造什么样的内容才能让用户更关注在以用户体验为主的今天，各个主流引擎都在更新算法鼓励原创的做法，并且严厉地打击垃圾网站。做站长的都应该扪心自问，检查下自己网站的内容，大概参考方法如下，看看整站内容中哪些页面有收录哪些没收录，再从没收录页面总结出一定特征，这个就是用户不太关注需要优化的部分了。    信息来源：\r\n　　网站该做些什么活动来催化成交用户不买你产品是因为你页面描述不精细还是产品太陌生，这些我们需要提高下认知。我们的主要目的就是卖出产品，比如把排名做上第一名这也是我们为卖出产品做出的宣传，还有在别的网站投放的专题活动，间接性地为网站引流。又或者公司在新浪的某栏目投放了硬广，并做了来路记录，做seo的此时需要为网站的多种活动流量做分析，比较哪一种产生的订单多和单价高，砍掉那些效率低的活动，节省成本留着投入别的项目。','0','<p>个营销类型的网站，流量来源包括了新闻资讯的流量，产品页面的流量等。一般情况下我们的资讯页面的流量转化率要比产品页面流量转化率低，这一个可以直接使用站长统计在后台看。对企业来说，产品页的流量就是有效的，还有企业的产品留言板，一般对你产品没兴趣也就不会问你的产品，这部分流量转化率也不低。</p>\r\n<div>　　网站创造什么样的内容才能让用户更关注在以用户体验为主的今天，各个主流引擎都在更新算法鼓励原创的做法，并且严厉地打击垃圾网站。做站长的都应该扪心自问，检查下自己网站的内容，大概参考方法如下，看看整站内容中哪些页面有收录哪些没收录，再从没收录页面总结出一定特征，这个就是用户不太关注需要优化的部分了。 &nbsp; &nbsp;信息来源：</div>\r\n<div>　　网站该做些什么活动来催化成交用户不买你产品是因为你页面描述不精细还是产品太陌生，这些我们需要提高下认知。我们的主要目的就是卖出产品，比如把排名做上第一名这也是我们为卖出产品做出的宣传，还有在别的网站投放的专题活动，间接性地为网站引流。又或者公司在新浪的某栏目投放了硬广，并做了来路记录，做seo的此时需要为网站的多种活动流量做分析，比较哪一种产生的订单多和单价高，砍掉那些效率低的活动，节省成本留着投入别的项目。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('77','18','0','成功案例十二','','admin','1','0','','0','0','','0','','','','','8012','2014-10-11 19:06:31','admin','','/upload/images/201304/8012.jpg','1','1','剖析规范楷模也对比罕有，便是将下面而二者连系兴起，因为关于统一种货物，没有同的人能够基于没有同的抉择——偶然货物自身的特功能够决议你是感性的仍是理性的。因而，正在网站的气氛营建上就要寄望区分：假如某一范围没有能充沛注明货物或者效劳的特点，就要将二者联合兴起，正在没有同的全体分辩遏制感性和理性的诉求，借以打动没有同类型的顾客，既以少量的现实一般企业的手艺劣势，又营建一种理性的气氛，强调货物或者效劳给人带来的价格，经过二者的联合，零丁营建企业共同的气氛。正常来说，以理性为主的网站多为消费范例的企业，而理性诉求为主的网站多为效劳范例的企业，万万这种总结法子并没有是相对于的，无意，作为消费型的企业，其网站能够是效劳型的，也有能够是说明型的，也有能够一度网站正在没有同声代取舍没有同范例的网站，正在诉求格调上也就没有一样。但无论是什么范例，照旧那句话，所有为营销效劳，那样，网站能力施展其真正的价格。\r\n　　强调剂性诉求的上网站多以成立企业抽象为主，以效劳为导向。那儿那里的效劳有两规模含意，一是自身企业需要的即是效劳，如效劳事业；二是企业的售前、售后效劳。经由效劳晋升企业正在存户心中的位置，从而推进营销，这一典型则定然要正视网站的格调设想和创意，以理性诉求为主，苦心衬着或者营建一种特部门企业空气，苦心默示一种网站或者货色及效劳的价钱感，决没有能顿挫顿挫，更没有能可是将保守的效劳搬到网下去，我看面前绝年夜年夜少数网站就是那样，咱们需要什么什么效劳，欢送与咱们联络，之类，试想，互联收集然则一度虚构的前提，您没有给阅读者营建一种守信的气氛，别人凭什么置信你的效劳呢？事实中企业的信用正在网上一样无效。你能够找没有出本人真正存正在主力的中心，没有主要，咱们能够经过网站创立，回过甚来扫视一下本人的公司、企业，从新为企业塑造一度新的抽象定位，并正在当前的经营中下力量增强创设，从而外行业中自成一家，力争正在顾客心中营建一种簇新的抽象，并发生思疑感。\r\n　　请您细心思忖一下：SEO搜索引擎络上成千盈百的共事业网站，顾客干什么购置或者运用你的货物或者效劳，而没有取舍合作者的货物或者效劳？市道经济是合作性的。你必需为世人取舍你的品牌而没有是别人的品牌创举说辞。因而，一局限，要增强出格气氛的营建，正在理性诉求凹凸功力，消弭企业与顾客正在功夫与时刻上的距离，构建存户忠厚度，增多存户价格，经过拓展、构建、维持并强化存户联系使自己效益最年夜化 ； 另一范围，好好设想你的网站，配合的设想可以营建一种共同的企业文明--互联网络企业文明，或者许这与保守营销格调没有符，没有重要，没有要过度于依托保守营销！','0','<p>剖析规范楷模也对比罕有，便是将下面而二者连系兴起，因为关于统一种货物，没有同的人能够基于没有同的抉择&mdash;&mdash;偶然货物自身的特功能够决议你是感性的仍是理性的。因而，正在网站的气氛营建上就要寄望区分：假如某一范围没有能充沛注明货物或者效劳的特点，就要将二者联合兴起，正在没有同的全体分辩遏制感性和理性的诉求，借以打动没有同类型的顾客，既以少量的现实一般企业的手艺劣势，又营建一种理性的气氛，强调货物或者效劳给人带来的价格，经过二者的联合，零丁营建企业共同的气氛。正常来说，以理性为主的网站多为消费范例的企业，而理性诉求为主的网站多为效劳范例的企业，万万这种总结法子并没有是相对于的，无意，作为消费型的企业，其网站能够是效劳型的，也有能够是说明型的，也有能够一度网站正在没有同声代取舍没有同范例的网站，正在诉求格调上也就没有一样。但无论是什么范例，照旧那句话，所有为营销效劳，那样，网站能力施展其真正的价格。</p>\r\n<div>　　强调剂性诉求的上网站多以成立企业抽象为主，以效劳为导向。那儿那里的效劳有两规模含意，一是自身企业需要的即是效劳，如效劳事业；二是企业的售前、售后效劳。经由效劳晋升企业正在存户心中的位置，从而推进营销，这一典型则定然要正视网站的格调设想和创意，以理性诉求为主，苦心衬着或者营建一种特部门企业空气，苦心默示一种网站或者货色及效劳的价钱感，决没有能顿挫顿挫，更没有能可是将保守的效劳搬到网下去，我看面前绝年夜年夜少数网站就是那样，咱们需要什么什么效劳，欢送与咱们联络，之类，试想，互联收集然则一度虚构的前提，您没有给阅读者营建一种守信的气氛，别人凭什么置信你的效劳呢？事实中企业的信用正在网上一样无效。你能够找没有出本人真正存正在主力的中心，没有主要，咱们能够经过网站创立，回过甚来扫视一下本人的公司、企业，从新为企业塑造一度新的抽象定位，并正在当前的经营中下力量增强创设，从而外行业中自成一家，力争正在顾客心中营建一种簇新的抽象，并发生思疑感。</div>\r\n<div>　　请您细心思忖一下：SEO搜索引擎络上成千盈百的共事业网站，顾客干什么购置或者运用你的货物或者效劳，而没有取舍合作者的货物或者效劳？市道经济是合作性的。你必需为世人取舍你的品牌而没有是别人的品牌创举说辞。因而，一局限，要增强出格气氛的营建，正在理性诉求凹凸功力，消弭企业与顾客正在功夫与时刻上的距离，构建存户忠厚度，增多存户价格，经过拓展、构建、维持并强化存户联系使自己效益最年夜化 ； 另一范围，好好设想你的网站，配合的设想可以营建一种共同的企业文明--互联网络企业文明，或者许这与保守营销格调没有符，没有重要，没有要过度于依托保守营销！</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('78','19','0','我们的成员一','','admin','1','0','','0','0','','0','','','','','9001','2014-10-11 19:22:57','admin','','/upload/images/201304/9001.jpg','1','1','当我们用cmseasy企业网站系统做企业网站的初期，就要为这个网站确立一个营销主题，一个主题，就是一个网站主要讨论的话题，也就是网站的主旋律。\r\n　　一个好的企业网站内容的相关性决定了主题的重要性。而搜索引擎又是根据相关性来决定网站的质量，并根据相关性来显示搜索用户的结果。相关性强的网站，会被优先显示在搜索列表的前面，被优先让用户搜索到。这个优先，就是我们追求的搜索优化结果，也就是搜索优化排名。\r\n　　当一个企业网站的内容集中在一个焦点的时候，搜索引擎认为，这个企业网站是为了这个主题建立的，相关的信息会更有价值的针对这个主题出现。搜索引擎根据各个网页所使用的关键词、企业网站被链接的关键词、用来链接各个网页的关键词－这三个主要因素来判断企业网站的相关性是否很强。\r\n　　举个例子来说，一个销售体育用品的网站可以展示很多体育用品等。每一页都会不同于另外一页，比如运动鞋的一页和运动服的就不同，但主题依然是体育用品。这样所有搜索引擎就会针对这个主题对你的企业网站分类，搜索引擎很容易把你的内容推送给搜索用户。主题对一个企业网站的影响非常大，针对搜索排名会有很强的干扰因素。这就是有时，一个pr6的网站会在搜索排名中排在一个pr4或更低的网站后面。\r\n　　如果这个体育用品的网站内容中，又罗列出很多汽车用品的商品和相关内容，那么你的主题就会变的很凌乱。虽然原来的体育用品网站的pr不会变化，但结果会因为你含有不相关主题的内容，导致原来的搜索内容被稀释掉，排名会相对更专业针对性强的主题企业网站所挤掉。','0','<p>当我们用cmseasy企业网站系统做企业网站的初期，就要为这个网站确立一个营销主题，一个主题，就是一个网站主要讨论的话题，也就是网站的主旋律。</p>\r\n<p>　　一个好的企业网站内容的相关性决定了主题的重要性。而搜索引擎又是根据相关性来决定网站的质量，并根据相关性来显示搜索用户的结果。相关性强的网站，会被优先显示在搜索列表的前面，被优先让用户搜索到。这个优先，就是我们追求的搜索优化结果，也就是搜索优化排名。</p>\r\n<p>　　当一个企业网站的内容集中在一个焦点的时候，搜索引擎认为，这个企业网站是为了这个主题建立的，相关的信息会更有价值的针对这个主题出现。搜索引擎根据各个网页所使用的关键词、企业网站被链接的关键词、用来链接各个网页的关键词－这三个主要因素来判断企业网站的相关性是否很强。</p>\r\n<p>　　举个例子来说，一个销售体育用品的网站可以展示很多体育用品等。每一页都会不同于另外一页，比如运动鞋的一页和运动服的就不同，但主题依然是体育用品。这样所有搜索引擎就会针对这个主题对你的企业网站分类，搜索引擎很容易把你的内容推送给搜索用户。主题对一个企业网站的影响非常大，针对搜索排名会有很强的干扰因素。这就是有时，一个pr6的网站会在搜索排名中排在一个pr4或更低的网站后面。</p>\r\n<p>　　如果这个体育用品的网站内容中，又罗列出很多汽车用品的商品和相关内容，那么你的主题就会变的很凌乱。虽然原来的体育用品网站的pr不会变化，但结果会因为你含有不相关主题的内容，导致原来的搜索内容被稀释掉，排名会相对更专业针对性强的主题企业网站所挤掉。</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('79','19','0','我们的成员二','','admin','1','0','','0','0','','0','','','','','9002','2014-10-11 19:24:56','admin','','/upload/images/201304/9002.jpg','1','1','我们在建立企业网站的时候，不仅仅要考虑他的审美和观赏性，还要综合考虑网站的结构组成、实用性和搜索引擎优化部分。\r\n\r\n \r\n\r\n因为如果一个网站的结构不能被搜索引擎接受，那么即使网站再美观，再漂亮，也等于将你的网页和内容放入了一个迷宫里面，让访问者迷路，最后只有自己来欣赏罢了。','0','<p>我们在建立企业网站的时候，不仅仅要考虑他的审美和观赏性，还要综合考虑网站的结构组成、实用性和搜索引擎优化部分。</p>\r\n<p>&nbsp;</p>\r\n<p>因为如果一个网站的结构不能被搜索引擎接受，那么即使网站再美观，再漂亮，也等于将你的网页和内容放入了一个迷宫里面，让访问者迷路，最后只有自己来欣赏罢了。</p>\r\n<p>&nbsp;</p>\r\n<p>所以我们分析绝大多数不被搜索引擎收录的网站都是在结构上犯了不可原谅的错误。主要因为网站设计人员对搜索营销没有足够的知识，设计网站的思路依然是早期的追求美观漂亮。</p>\r\n<p>&nbsp;</p>\r\n<p>搜索引擎的实践越多，则会越觉的网站设计决定一个网站最终是否能够收获。Seo的目标是流量，是转化率。但这些流量来到网站怎么消化，怎么充分利用，网站的结构和设计决定了这些流量是否能够转变成价值。因此，网站设计的最优化操作不仅影响搜索引擎是否喜欢一个网站，而且也决定了一个网站能否被访客接受。</p>\r\n<p>&nbsp;</p>\r\n<p>在网站设计中我们也经常忽略一些常见问题：</p>\r\n<p>&nbsp;</p>\r\n<p>1、导航菜单使用图片、flash</p>\r\n<p>&nbsp;</p>\r\n<p>导航菜单使用图片、flash当然比纯文本来得好看一些，但是搜索引擎并不认识你的图片和flash。如果你非要使用漂亮的图片来做导航的话，可以使用背景替换的方法。建议做一个导航菜单链接的xml文提交到搜索引擎。</p>\r\n<p>&nbsp;</p>\r\n<p>2、不恰当地使用图片</p>\r\n<p>&nbsp;</p>\r\n<p>为了网页美观，经常会到处贴满图片，这样做是不正确的，与内容无关的图片能少就少吧。我们可以把这些图片做成容器的背景。</p>\r\n<p>&nbsp;</p>\r\n<p>3、内容里特殊字体的运用</p>\r\n<p>&nbsp;</p>\r\n<p>楷体很漂亮，草书也不逊色于宋体。但是不是所有人的电脑都安装有这些字体。如果使用这些特殊字体的话，在别人的电脑里看到的网页将会是不堪入目。</p>\r\n<p>&nbsp;</p>\r\n<p>4、新窗口打开</p>\r\n<p>&nbsp;</p>\r\n<p>设计者打开新窗口的本意是要让用户留在他的站点上。但是却忽略了控制用户的机器所带来的负面效应，这种策略恰恰弄巧成拙，因为当用户想通过&ldquo;后退&rdquo;按钮返回先前的站点时，已经做不到了。用户通常注意不到新窗口已经被打开，尤其当他们的显示器很小，而窗口又正好是最大化时。因此，当用户想要返回原来的站点时，面对的却只是一个不可用的灰色 &ldquo;后退&rdquo;按钮。</p>\r\n<p>&nbsp;</p>\r\n<p>5、无实际意义的特效</p>\r\n<p>&nbsp;</p>\r\n<p>避免使用炫耀的技巧。这些特效对你的网页没有任何实际意义。</p>\r\n<p>&nbsp;</p>\r\n<p>6、内容滚动</p>\r\n<p>&nbsp;</p>\r\n<p>内容滚动可以在比较小的空间里展示比较多的内容。这是它的一个好处。但内容滚动却是弊大于利的。不是所有平台和浏览器都支持滚动的;在w3c看来，内容滚动会降低用户体验。</p>\r\n<p>&nbsp;</p>\r\n<p>7、用户难以获取自己想要的内容</p>\r\n<p>&nbsp;</p>\r\n<p>如果一个用户访问你的网站跟走入迷宫一样，会有什么后果?听说过3次点击规则吗?对于小型网站，在你的主页上，没有任何一条信息，需要点击次数超过3次的。对于大型网站，使用导航和工具条来改善操作。</p>\r\n<p>&nbsp;</p>\r\n<p>8、文件名命名不规范</p>\r\n<p>&nbsp;</p>\r\n<p>不要忽视这一点，例如新闻页面可以用：news.html，而不是类似2323123.html这样的无规范的命名方式。使用规范的命名方式不仅有利于搜索引擎，而且有利于网站日后的维护管理。</p>\r\n<p>&nbsp;</p>\r\n<p>9、长篇文章未设置分页</p>\r\n<p>&nbsp;</p>\r\n<p>长篇文章不分页，会导致网页加载速度慢，用户阅读疲劳。所以建议长篇文章设置分页。</p>\r\n<p>&nbsp;</p>\r\n<p>10、颜色搭配错误，网页难于阅读</p>\r\n<p>&nbsp;</p>\r\n<p>如无必要，你应当坚持使用白色的背景和黑色的文本，另外还应当坚持使用通用字体。</p>\r\n<p>&nbsp;</p>\r\n<p>11、没有返回指向</p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;返回指向&rdquo;是网络用户的生命线，同时也是继超文本连接后最常使用的导航特征。用户可以随意尝试网页所指向的任何地方，而只需点击一两次&ldquo;返回&rdquo;按钮就可以回到先前的页面。</p>\r\n<p>&nbsp;</p>\r\n<p>12、显眼的点击计数器</p>\r\n<p>&nbsp;</p>\r\n<p>不要轻易考虑在你的网站上放置一个醒目的点击记数器。你设计网站是为了给访问者提供服务，而不是推销你自己认为重要的东西。大多数浏览者认为计数器毫无意义，它们很容易被做假，浏览者也不想看广告。如果你显示你的网站是多么受欢迎，你最好提供一个链接，显示访问日志。</p>\r\n<p>&nbsp;</p>\r\n<p>13、使用框架</p>\r\n<p>&nbsp;</p>\r\n<p>与记数器一样，框架在网页上越来越流行。在大多数网站上，在屏幕的左边有一个框架。但是设计者立刻就发现，在使用框架时产生了许多的问题。使用框架时如果没有17英寸的显示屏几乎不可能显示整个网站。框架也使得网站内个人主页不能够成为书签。也许更重要的是，搜索引擎常常被框架混淆，从而不能列出你的网站。</p>\r\n<p>&nbsp;</p>\r\n<p>14、不恰当地使用声音</p>\r\n<p>&nbsp;</p>\r\n<p>声音的运用也应得到警惕。内联声音是网页设计者的另一个禁地。因为过多地使用声音会使下载速度很慢，同时并没有带给浏览者多少好处。首次听到鼠标发出声音可能会很有趣，但是多次以后肯定会很烦人。使用声音前，应该仔细考虑声音将会给你带来什么。</p>\r\n<p>&nbsp;</p>\r\n<p>15、兼容性不佳</p>\r\n<p>&nbsp;</p>\r\n<p>你的网页在1024下看得顺眼么?那么换成1280看呢?不是所有人的显示器都用同一种分辨率的。无论是谁，都无法做出所有分辨率下完美的网页，但我们要做出能确保所有分辨率下不出错的网页。还有两点就是：不要以为只有电脑才能看网页!不要以为世界上只有一种浏览器!</p>\r\n<p>&nbsp;</p>\r\n<p>17、急于发布网站</p>\r\n<p>&nbsp;</p>\r\n<p>网站没有内容、网站程序bug，这些问题解决后再发布吧。内容较为充实、程序bug基本没有的网站才会让用户流连。</p>\r\n<p>&nbsp;</p>\r\n<p>18、发布网站后未登录搜索引擎</p>\r\n<p>&nbsp;</p>\r\n<p>有客户问，是不是我的网站已发布就可以在百度搜到了?但是百度不是我家开的，也不是你家开的，你发布网站时百度他是不知道的。所以，你发布网站后要到各大搜索引擎的登录口提交一下你的网站信息。</p>\r\n<p>&nbsp;</p>\r\n<p>19、不留空白</p>\r\n<p>&nbsp;</p>\r\n<p>注意留空白。不要用图像、文本和不必要的动画gifs来充斥网页，即使有足够的空间，在设计时也应该避免使用。</p>\r\n<p>&nbsp;</p>\r\n<p>20、缺乏互动性</p>\r\n<p>&nbsp;</p>\r\n<p>让用户与网站能够互动，让用户与用户之间能够互动。所以最少要有一个留言本，这能激励访问者再次回到你的网站，还有助于扩充网站内容。这个是极其重要的，web 2.0的核心思想。</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('80','19','0','我们的成员三','','admin','1','1','','0','0','','0','','','','','9003','2014-10-11 19:25:29','admin','','/upload/images/201304/9003.jpg','1','1','作为一个企业网站，是要以成功带给企业网站转化率为基础的，也就是要给企业带来一定的回报。在经过辛苦努力将企业网站营销优化到了搜索引擎排名前面后，我们必须明白，我们获得这个排名并不等于是搜索引擎优化取得了成功。\r\n　　获得了排名只是检查优化效果的一种表现，二优化效果的最终目的则是让企业网站在网络营销推广中获得客户，获得高转化率。\r\n　　衡量搜索引擎优化是否成功，我们要看这个网络营销中是否将来访者成功转变为消费者的比率；或者简单的说，来访者-顾客的转化率。这个转化率越高，销售额就越高，网站就越赚钱。\r\n　　因此，我们说网站的流量不算说明网站是否成功的标志。再多的流量如果不算和网站相关，或者不算有购买意向的访客来访都没有意义，对网站的营销没有什么好处。','0','<p>作为一个企业网站，是要以成功带给企业网站转化率为基础的，也就是要给企业带来一定的回报。在经过辛苦努力将企业网站营销优化到了搜索引擎排名前面后，我们必须明白，我们获得这个排名并不等于是搜索引擎优化取得了成功。</p>\r\n<p>　　获得了排名只是检查优化效果的一种表现，二优化效果的最终目的则是让企业网站在网络营销推广中获得客户，获得高转化率。</p>\r\n<p>　　衡量搜索引擎优化是否成功，我们要看这个网络营销中是否将来访者成功转变为消费者的比率；或者简单的说，来访者-顾客的转化率。这个转化率越高，销售额就越高，网站就越赚钱。</p>\r\n<p>　　因此，我们说网站的流量不算说明网站是否成功的标志。再多的流量如果不算和网站相关，或者不算有购买意向的访客来访都没有意义，对网站的营销没有什么好处。</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('81','19','0','我们的成员四','','admin','1','0','','0','0','','0','','','','','9004','2014-10-11 19:25:54','admin','','/upload/images/201304/9004.jpg','1','1','当一个企业网站建成后，我们总是希望能够快速的在搜索中出现。但是很多时候往往你辛辛苦苦地做好了一个网站，希望立刻有人访问，期待搜索引擎会带来流量，而且你也对网站进行了优化，可最后没有看到你想要的流量。\r\n　　这是为什么呢，难得搜索引擎还要观察检验一个网站吗？是的，搜索引擎会将新的网站收录到一个沙盒里面。这意味着在之后的一段时间里面，在搜索中即使搜索网站的关键字，也不会查询到你的网站。\r\n　　你或许感到奇怪，新的网站在投放后，开始曾经在热门关键词上面排名相当不错，然而突然在一个月都消失了。这时候，你会非常害怕，也怀疑是不是网站被搜索引擎K掉了。或者你会怀疑seo到底有没有作用。其实，这可能是你的网站被放进了沙盒。\r\n　　这时请注意，进入沙盒不同于网站被封。这里有个很好的方法来确认您的网站是否在沙盒中还是被封。\r\n　　在搜索栏中输入您网站域名，如果没有任何结果，而且之前曾经出现结果，那么这个网站很可能被封了。但是，如果有结果出现，不管有多少条，你的网站的链接得到显示，你都没有被封。进一步，你在搜索栏目中输入不太有竞争难度的关键词，在搜索结果中显示出你的网页链接，那么你这个网站就是在沙盒里面。\r\n　　如果你的网站进入了沙盒，你不要沮丧，沙盒是最终可以走出来的，但是在走出之前，您可以采取一些积极的措施，争取早日走出沙盒。在这个沙盒期里，最应该做的，也是非常重要的，是慎重的开展缓慢的但是有效的链接工作。','0','<p>当一个企业网站建成后，我们总是希望能够快速的在搜索中出现。但是很多时候往往你辛辛苦苦地做好了一个网站，希望立刻有人访问，期待搜索引擎会带来流量，而且你也对网站进行了优化，可最后没有看到你想要的流量。</p>\r\n<p>　　这是为什么呢，难得搜索引擎还要观察检验一个网站吗？是的，搜索引擎会将新的网站收录到一个沙盒里面。这意味着在之后的一段时间里面，在搜索中即使搜索网站的关键字，也不会查询到你的网站。</p>\r\n<p>　　你或许感到奇怪，新的网站在投放后，开始曾经在热门关键词上面排名相当不错，然而突然在一个月都消失了。这时候，你会非常害怕，也怀疑是不是网站被搜索引擎K掉了。或者你会怀疑seo到底有没有作用。其实，这可能是你的网站被放进了沙盒。</p>\r\n<p>　　这时请注意，进入沙盒不同于网站被封。这里有个很好的方法来确认您的网站是否在沙盒中还是被封。</p>\r\n<p>　　在搜索栏中输入您网站域名，如果没有任何结果，而且之前曾经出现结果，那么这个网站很可能被封了。但是，如果有结果出现，不管有多少条，你的网站的链接得到显示，你都没有被封。进一步，你在搜索栏目中输入不太有竞争难度的关键词，在搜索结果中显示出你的网页链接，那么你这个网站就是在沙盒里面。</p>\r\n<p>　　如果你的网站进入了沙盒，你不要沮丧，沙盒是最终可以走出来的，但是在走出之前，您可以采取一些积极的措施，争取早日走出沙盒。在这个沙盒期里，最应该做的，也是非常重要的，是慎重的开展缓慢的但是有效的链接工作。</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('82','19','0','我们的成员五','','admin','1','0','','0','0','','0','','','','','9005','2014-10-11 19:26:22','admin','','/upload/images/201304/9005.jpg','1','1','拥有管理员和会员组添加及权限自定义出现这个现象，作为企业网站优化者的你，不要着急。要仔细分析情况，确定自己是否在网站优化过程中有过作弊行为，还是是因为竞争对手恶意点击，恶意流量攻击等。\r\n　　当然，如果一个企业网站刚刚建立，也会出现这种情况。Pr一般一年更新四次，所以不要急于使用一些黑帽优化手段去影响pr或者搜索引擎。在经过逐渐的内容优化和企业网站营销后，相信pr会逐渐提升上去。\r\n　　另外一个原因也可能是这个企业网站的导入链接过少，即没有人来链接它。但是，一个网站之前的搜索排名非常好。并且没有其他的重大改变，突然出现了pr等于零的情况，我们认为，这个网站肯定收到了搜索引擎的惩罚。','0','<p>&nbsp;拥有管理员和会员组添加及权限自定义出现这个现象，作为企业网站优化者的你，不要着急。要仔细分析情况，确定自己是否在网站优化过程中有过作弊行为，还是是因为竞争对手恶意点击，恶意流量攻击等。</p>\r\n<div>　　当然，如果一个企业网站刚刚建立，也会出现这种情况。Pr一般一年更新四次，所以不要急于使用一些黑帽优化手段去影响pr或者搜索引擎。在经过逐渐的内容优化和企业网站营销后，相信pr会逐渐提升上去。</div>\r\n<div>　　另外一个原因也可能是这个企业网站的导入链接过少，即没有人来链接它。但是，一个网站之前的搜索排名非常好。并且没有其他的重大改变，突然出现了pr等于零的情况，我们认为，这个网站肯定收到了搜索引擎的惩罚。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('83','19','0','我们的成员六','','admin','1','0','','0','0','','0','','','','','9006','2014-10-11 19:30:04','admin','','/upload/images/201304/9006.jpg','1','1','在企业网站优化过程中，经常遇到企业网站pr值忽然变为零的情况。这是搜索引擎针对有嫌疑作弊手段优化网站的惩罚和观察期。不管这个企业网站有多少外链，所有的页面的pr都为零。\r\n　　出现这个现象，作为企业网站优化者的你，不要着急。要仔细分析情况，确定自己是否在网站优化过程中有过作弊行为，还是是因为竞争对手恶意点击，恶意流量攻击等。\r\n　　当然，如果一个企业网站刚刚建立，也会出现这种情况。Pr一般一年更新四次，所以不要急于使用一些黑帽优化手段去影响pr或者搜索引擎。在经过逐渐的内容优化和企业网站营销后，相信pr会逐渐提升上去。\r\n　　另外一个原因也可能是这个企业网站的导入链接过少，即没有人来链接它。但是，一个网站之前的搜索排名非常好。并且没有其他的重大改变，突然出现了pr等于零的情况，我们认为，这个网站肯定收到了搜索引擎的惩罚。\r\n　　企业网站遭受惩罚的原因，可能是这个网站的网页设计或者优化过程中，采取了一些不良的欺骗搜索引擎的做法。','0','<p>在企业网站优化过程中，经常遇到企业网站pr值忽然变为零的情况。这是搜索引擎针对有嫌疑作弊手段优化网站的惩罚和观察期。不管这个企业网站有多少外链，所有的页面的pr都为零。</p>\r\n<div>　　出现这个现象，作为企业网站优化者的你，不要着急。要仔细分析情况，确定自己是否在网站优化过程中有过作弊行为，还是是因为竞争对手恶意点击，恶意流量攻击等。</div>\r\n<div>　　当然，如果一个企业网站刚刚建立，也会出现这种情况。Pr一般一年更新四次，所以不要急于使用一些黑帽优化手段去影响pr或者搜索引擎。在经过逐渐的内容优化和企业网站营销后，相信pr会逐渐提升上去。</div>\r\n<div>　　另外一个原因也可能是这个企业网站的导入链接过少，即没有人来链接它。但是，一个网站之前的搜索排名非常好。并且没有其他的重大改变，突然出现了pr等于零的情况，我们认为，这个网站肯定收到了搜索引擎的惩罚。</div>\r\n<div>　　企业网站遭受惩罚的原因，可能是这个网站的网页设计或者优化过程中，采取了一些不良的欺骗搜索引擎的做法。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('84','19','0','我们的成员七','','admin','1','0','','0','0','','0','','','','','9007','2014-10-11 19:30:35','admin','','/upload/images/201304/9007.jpg','1','1','很多企业建网站最初，都对seo是什么感到迷惑。那么我们经常遇到网站优化者说的seo 到底是什么呢？这里，我们简单的解释下这个含义。SEO即搜索引擎优化。也就是搜索引擎需要什么，我们就为搜索引擎提供什么，把企业网站设计成搜索引擎喜欢的样式，搜索引擎容易收录的结构。简单的说，这样解释有点太浅显，太直白，不过我们以一个网站管理员的定位来思考的话，就容易把seo是什么这个复杂的问题简单化了。\r\n　　其实seo就是一个摸索和实践网站针对搜索引擎的普遍规律进行制作和变更的过程。对网站的制作有实际经验，这个过程需要对搜索引擎的运作有清晰的了解、对网络市场有丰富的观察和体验、对网站的制作有实际经验、并且需要创意性的推出出新。\r\n　　我们在做企业网站优化的时候，往往会遇到有些网站不被搜索引擎收录。这是为什么呢，分析后，大多数原因是因为这个网站的结构不能让搜索引擎很容易的看到网站内容。一个良好的企业网站，应该具有清晰的目录结构，简洁的页面代码，直截了当的优化关键词。并且一定要建立网站地图，在每篇内容中，都设置企业优化相关的关键词与页面描述，并且在页面中的图片使用关键词alt标题，在链接中使用title链接标题，来丰富网站关键词的描述。\r\n　　经过我们的不断努力，企业网站最终成为企业在互联网上进行网络建设和形像宣传的平台。企业网站就相当于一个企业的网络名片，不但对企业的形象是一个良好的宣传，同时可以辅助企业的销售，甚至可以通过网络直接帮助企业实现产品的销售。选择好企业网站源码就尤为重要，易通企业网站系统CmsEasy是国内较好的企业网站系统源码之一，易通CmsEasy在本站下载栏目中的下载量高达11万多次，在企业网站源码分类下载排行中屡次荣登榜首，可见易通CmsEasy在国内的用户不在少数。作为一个网站管理员，我们知道现在互联网上有很多企业网站系统，在他们之中cmseasy可以说是比较易用，优化效果突出的一款企业网站系统。','0','<p>&nbsp;很多企业建网站最初，都对seo是什么感到迷惑。那么我们经常遇到网站优化者说的seo 到底是什么呢？这里，我们简单的解释下这个含义。SEO即搜索引擎优化。也就是搜索引擎需要什么，我们就为搜索引擎提供什么，把企业网站设计成搜索引擎喜欢的样式，搜索引擎容易收录的结构。简单的说，这样解释有点太浅显，太直白，不过我们以一个网站管理员的定位来思考的话，就容易把seo是什么这个复杂的问题简单化了。</p>\r\n<div>　　其实seo就是一个摸索和实践网站针对搜索引擎的普遍规律进行制作和变更的过程。对网站的制作有实际经验，这个过程需要对搜索引擎的运作有清晰的了解、对网络市场有丰富的观察和体验、对网站的制作有实际经验、并且需要创意性的推出出新。</div>\r\n<div>　　我们在做企业网站优化的时候，往往会遇到有些网站不被搜索引擎收录。这是为什么呢，分析后，大多数原因是因为这个网站的结构不能让搜索引擎很容易的看到网站内容。一个良好的企业网站，应该具有清晰的目录结构，简洁的页面代码，直截了当的优化关键词。并且一定要建立网站地图，在每篇内容中，都设置企业优化相关的关键词与页面描述，并且在页面中的图片使用关键词alt标题，在链接中使用title链接标题，来丰富网站关键词的描述。</div>\r\n<div>　　经过我们的不断努力，企业网站最终成为企业在互联网上进行网络建设和形像宣传的平台。企业网站就相当于一个企业的网络名片，不但对企业的形象是一个良好的宣传，同时可以辅助企业的销售，甚至可以通过网络直接帮助企业实现产品的销售。选择好企业网站源码就尤为重要，易通企业网站系统CmsEasy是国内较好的企业网站系统源码之一，易通CmsEasy在本站下载栏目中的下载量高达11万多次，在企业网站源码分类下载排行中屡次荣登榜首，可见易通CmsEasy在国内的用户不在少数。作为一个网站管理员，我们知道现在互联网上有很多企业网站系统，在他们之中cmseasy可以说是比较易用，优化效果突出的一款企业网站系统。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('85','19','0','我们的成员八','','admin','1','0','','0','0','','0','','','','','9008','2014-10-11 19:31:05','admin','','/upload/images/201304/9008.jpg','1','1','一个制作大气、美观的企业网站首页不仅给浏览者带来信任感，也能通过不断的优化来提升访问者的用户体验，从而促进了网站的网络营销的发展。那么如何利用使用cmseasy网站系统制作企业网站来设计完美用户体验的首页呢。这里我们要参考在美国长期研究网站可用性的著名网站设计工程师杰科伯.尼尔森先生很早就指出的观点，人们大多不由自主的以“F”字母形状模式来阅读网页。尼尔森研究出网页的阅读模式和人们从学校里养成的读书习惯迥异。\r\n　　在几千名测试人员通过上万张网页的实践中得出一个结论，读者的阅读行为在浏览不同性质的网站和肩负不同阅读任务时，表现的基本恒定的习惯。这种有压倒性阅读模式就宛如英文字母F，并且着重表现在以下三个方面。\r\n　　第一，读者的眼睛首先是水平运动的，常常是扫过网页内容的最上半部分，这样就形成了一条横向的运动轨迹。\r\n　　第二，读者的眼光略微下移，很典型地扫描比第一步范围较短的区域。\r\n　　第三，读者朝网页左边的部分进行垂直扫描。','0','<p>一个制作大气、美观的企业网站首页不仅给浏览者带来信任感，也能通过不断的优化来提升访问者的用户体验，从而促进了网站的网络营销的发展。那么如何利用使用cmseasy网站系统制作企业网站来设计完美用户体验的首页呢。这里我们要参考在美国长期研究网站可用性的著名网站设计工程师杰科伯.尼尔森先生很早就指出的观点，人们大多不由自主的以&ldquo;F&rdquo;字母形状模式来阅读网页。尼尔森研究出网页的阅读模式和人们从学校里养成的读书习惯迥异。</p>\r\n<div>　　在几千名测试人员通过上万张网页的实践中得出一个结论，读者的阅读行为在浏览不同性质的网站和肩负不同阅读任务时，表现的基本恒定的习惯。这种有压倒性阅读模式就宛如英文字母F，并且着重表现在以下三个方面。</div>\r\n<div>　　第一，读者的眼睛首先是水平运动的，常常是扫过网页内容的最上半部分，这样就形成了一条横向的运动轨迹。</div>\r\n<div>　　第二，读者的眼光略微下移，很典型地扫描比第一步范围较短的区域。</div>\r\n<div>　　第三，读者朝网页左边的部分进行垂直扫描。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('86','19','0','我们的成员九','','admin','1','0','','0','0','','0','','','','','9009','2014-10-11 19:31:36','admin','','/upload/images/201304/9009.jpg','1','1','随着现在的封网门越来越严重，个人站长们在一阵一阵非常不利好的消息下苦苦挣扎，而如今的网站制作更是摆在站长面前的一个新问题。\r\n　　站长的冬天，站长们该如何制作出对搜索引擎，对服务器都非常有利的网站，笔者多年的网站制作经验，总结出几点网站制作的注意点，帮助站长们顺利的走出冬天。\r\n　　企业网站制作，选择好CMS系统是关键一套好的CMS系统，能帮助你的网站不少的事情，在国内，DEDECMS,KINGCMS一直深受个人站长的好评，但是对于企业网站的CMS，很多站长还不是非常的了解，在这里，推荐一款免费而且强大的企业网站CMS系统-易通企业网站系统（http://www.cmseasy.cn）。它是中国最老牌的企业网站制作CMS，其功能强大，很多老站长都体会较深。\r\n　　有一套很好客服服务系统一套很好的客服服务系统，比你网站上写QQ号，电话等，好处更加明显，而且专业性也体现的更为强烈。\r\n　　现在网上也有很多客服服务系统，但是很多都是比较老款式的，样子难看，而且实用功能不强，所以最好是自己制作一个，如果嫌麻烦，易通CMS也有自带的客服服务，笔者的网站客服都用自带的，效果不错，而且有多种款式供你选择，对于新手站长来说，这一点，易通CMS做的很好。','0','<p>随着现在的封网门越来越严重，个人站长们在一阵一阵非常不利好的消息下苦苦挣扎，而如今的网站制作更是摆在站长面前的一个新问题。</p>\r\n<div>　　站长的冬天，站长们该如何制作出对搜索引擎，对服务器都非常有利的网站，笔者多年的网站制作经验，总结出几点网站制作的注意点，帮助站长们顺利的走出冬天。</div>\r\n<div>　　企业网站制作，选择好CMS系统是关键一套好的CMS系统，能帮助你的网站不少的事情，在国内，DEDECMS,KINGCMS一直深受个人站长的好评，但是对于企业网站的CMS，很多站长还不是非常的了解，在这里，推荐一款免费而且强大的企业网站CMS系统-易通企业网站系统（http://www.cmseasy.cn）。它是中国最老牌的企业网站制作CMS，其功能强大，很多老站长都体会较深。</div>\r\n<div>　　有一套很好客服服务系统一套很好的客服服务系统，比你网站上写QQ号，电话等，好处更加明显，而且专业性也体现的更为强烈。</div>\r\n<div>　　现在网上也有很多客服服务系统，但是很多都是比较老款式的，样子难看，而且实用功能不强，所以最好是自己制作一个，如果嫌麻烦，易通CMS也有自带的客服服务，笔者的网站客服都用自带的，效果不错，而且有多种款式供你选择，对于新手站长来说，这一点，易通CMS做的很好。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('87','19','0','我们的成员十','','admin','1','0','','0','0','','0','','','','','9010','2014-10-11 19:32:05','admin','','/upload/images/201304/9010.jpg','1','1','如何通过网络营销推广公司产品，是一个网络管理员的责任，也是一份报酬优厚的工作。企业网站优化是处理企业网站网页、企业网站的具体实践，但是更是企业网站优化策略。\r\n　　企业网站优化指具体怎样从规划网站的草图时就要将优化的构思、搜索引擎的规则考虑进来，然后根据自身的产品特点依照搜索引擎的规律来建立营销型企业网站的网站结构，按照搜索引擎如何阅读网页的方法来设计网站内容，再按照百度对企业网站的收录规则，来建立企业网站与同行之间的链接关系。\r\n　　这如同一个投资人，在投资前对他的项目进行市场评估，按照项目的发展来设计、规划、制作。只有在这些调查研究顺利完成的情况下开发的企业网站才能保证形成良好的竞争力和拥有良好的发展前景。\r\n　　网站管理员指定网站优化的策略，不能急躁。策略一旦错误，会使后面的工作浪费大量的时间和金钱。与其在网站建立之后对其做修改，不如多花时间来充分计划研究设计好的策略，然后再进行实际的网站优化工作。\r\n　　网站优化技术和策略的出现，给予了众多企业公司前所未有的机会，使其拥有在互联网上与大公司，老公司开展竞争的机会。以小博大成为现实。但是如果没有良好的优化工具，也将前功尽弃。\r\n　　易通企业网站系统的出现解决了众多企业公司进行网络营销的难题，推出了独创的营销联盟模块，让企业主自己可以按照自身的需要，来完成各种网络营销优化的工作。从而使企业网站能够在关键词排名中占得一席之地。\r\n　　网站优化的工作做的出色，使公司的网站在自然排名的位置对大公司，知名公司将有一个有力的冲击。很多企业网站使用cmseasy企业网站系统建站后，通过后台操作，自定义关键词，网页描述，网页标题，来进行长尾关键词的优化，从而提高了企业网站主关键词的出现几率和阅读次数，进而提高了企业网站的自然排名，让企业网站营销得到了一个很好的促进。','0','<p>如何通过网络营销推广公司产品，是一个网络管理员的责任，也是一份报酬优厚的工作。企业网站优化是处理企业网站网页、企业网站的具体实践，但是更是企业网站优化策略。</p>\r\n<div>　　企业网站优化指具体怎样从规划网站的草图时就要将优化的构思、搜索引擎的规则考虑进来，然后根据自身的产品特点依照搜索引擎的规律来建立营销型企业网站的网站结构，按照搜索引擎如何阅读网页的方法来设计网站内容，再按照百度对企业网站的收录规则，来建立企业网站与同行之间的链接关系。</div>\r\n<div>　　这如同一个投资人，在投资前对他的项目进行市场评估，按照项目的发展来设计、规划、制作。只有在这些调查研究顺利完成的情况下开发的企业网站才能保证形成良好的竞争力和拥有良好的发展前景。</div>\r\n<div>　　网站管理员指定网站优化的策略，不能急躁。策略一旦错误，会使后面的工作浪费大量的时间和金钱。与其在网站建立之后对其做修改，不如多花时间来充分计划研究设计好的策略，然后再进行实际的网站优化工作。</div>\r\n<div>　　网站优化技术和策略的出现，给予了众多企业公司前所未有的机会，使其拥有在互联网上与大公司，老公司开展竞争的机会。以小博大成为现实。但是如果没有良好的优化工具，也将前功尽弃。</div>\r\n<div>　　易通企业网站系统的出现解决了众多企业公司进行网络营销的难题，推出了独创的营销联盟模块，让企业主自己可以按照自身的需要，来完成各种网络营销优化的工作。从而使企业网站能够在关键词排名中占得一席之地。</div>\r\n<div>　　网站优化的工作做的出色，使公司的网站在自然排名的位置对大公司，知名公司将有一个有力的冲击。很多企业网站使用cmseasy企业网站系统建站后，通过后台操作，自定义关键词，网页描述，网页标题，来进行长尾关键词的优化，从而提高了企业网站主关键词的出现几率和阅读次数，进而提高了企业网站的自然排名，让企业网站营销得到了一个很好的促进。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('88','19','0','我们的成员十一','','admin','1','0','','0','0','','0','','','','','9011','2014-10-11 19:32:37','admin','','/upload/images/201304/9011.jpg','1','1','一个公司建立企业网站，最重要的就是提高用户对公司的认知，以及企业网站模板,公司网站模板对公司形象所起到的宣传作用，那么一个成功的企业网站是如何提高用户认知和用户粘性的呢。在百度不停的提出用户粘度的重要性时，同时最近大量k站的形势下，搜索牵引擎却给粘度高的网站做了很大的权重提升。但是，我查看了好多关于搜索引擎原理的书籍，都没有提到如何实现用户粘度是怎么样判断的。很多使用CmsEasy来制作企业网站和企业网站模板,公司网站模板的站长都知道，易通企业网站系统在后台里边可以统计出单个用户点击次数、页面停留时间、进入页面、离开页面等信息来判断粘度的高低，那是我们因为易通企业网站系统集成了非常强大的统计代码，他可以监控这些数据，由此我们可以轻松的获得用户粘性的数据。但百度是怎么样判断的呢？我们并没有挂百度的代码，百度又是如何实现统计的？进入页面可以通过百度的搜索进入页面知道，但是页面停留时间和点击次数又是如何实现的？蜘蛛的唯一功能就是抓取而且也不是一直呆在网站，所以蜘蛛是不可能判断出用户粘度的，那么我们的网站没有任何百度的东西，百度又是通过什么技术实现的用户粘度判断的？如果百度真的无法判断用户粘度那么我们优化用户粘度的意义又在哪里？','0','<p>一个公司建立企业网站，最重要的就是提高用户对公司的认知，以及企业网站模板,公司网站模板对公司形象所起到的宣传作用，那么一个成功的企业网站是如何提高用户认知和用户粘性的呢。在百度不停的提出用户粘度的重要性时，同时最近大量k站的形势下，搜索牵引擎却给粘度高的网站做了很大的权重提升。但是，我查看了好多关于搜索引擎原理的书籍，都没有提到如何实现用户粘度是怎么样判断的。很多使用CmsEasy来制作企业网站和企业网站模板,公司网站模板的站长都知道，易通企业网站系统在后台里边可以统计出单个用户点击次数、页面停留时间、进入页面、离开页面等信息来判断粘度的高低，那是我们因为易通企业网站系统集成了非常强大的统计代码，他可以监控这些数据，由此我们可以轻松的获得用户粘性的数据。但百度是怎么样判断的呢？我们并没有挂百度的代码，百度又是如何实现统计的？进入页面可以通过百度的搜索进入页面知道，但是页面停留时间和点击次数又是如何实现的？蜘蛛的唯一功能就是抓取而且也不是一直呆在网站，所以蜘蛛是不可能判断出用户粘度的，那么我们的网站没有任何百度的东西，百度又是通过什么技术实现的用户粘度判断的？如果百度真的无法判断用户粘度那么我们优化用户粘度的意义又在哪里？</p>\r\n<div>　　在通过百度站长平台浏览参考资料，我们得到了答案，在这里为大家分享一下，搜索引擎的确并不能和流量统计工具一样来判断网站的内容的黏度，但是搜索引擎会根据他能统计到的数据进行分析，举两个例子，说两个观点：</div>\r\n<div>　　1.比如从搜索引擎进入你网站的流量是否短时间内又回到搜索引擎点击其他结果或者搜索相关词汇，这种在搜索引擎站内的用户行为搜索引擎是可以分析的。</div>\r\n<div>　　2.搜索引擎一直在努力把自己的&ldquo;机器人&rdquo;做成和普通用户一模一样，你站在他的角度考虑一下，他会怎么判断，对你的内容分析越来越精准;对你主体内容周围推荐的链接和内容的相关性也在判断。</div>\r\n<div>　　3.相信搜索引擎还可以参照其他很多数据，主流搜索引擎会有庞大的数据来进行研究分析。</div>\r\n<div>　　4.做SEO为搜索引擎做内容和用户体验都是不可避免的，但是刻意迎合，搜索引擎对你的所有数据评价超过一个阈值，可能就会把你列为&ldquo;优化过度&rdquo;或者作弊，当然具体怎么做的，搜索引擎是不会告诉大众的。</div>\r\n<div>　　另外，百度也可以通过用户的搜索习惯来判断该问题第一次搜索词，记录一下查询链接，第二次搜索另一个词，观察第二次的查询链接，发现多了很多参数，比如，第一次搜索的关键字就包含在url里了。百度记录下用户搜索的词汇、点击、搜索频率、时间间隔等数据，很容易作出一些判断。</div>\r\n<div>　　如果一个用户搜索关键字A，点了排名第一的网站后，退出又点击排名第二的网站，随后很长时间没有再次进行搜索。那基本可以确定，排名第二的网站提供了用户真正需要的内容，满足了体验，更具有用户粘度。</div>\r\n<div>　　类似的统计方法很多，即使没有挂百度统计的代码，依然有办法去判断用户的行为，所以技术上判断是没有问题的。</div>\r\n<div>　　因此我们判断，在用cmseasy易通企业网站系统建企业网站和企业网站模板,公司网站模板后，还要不断的强化内容建立，对主站的关键词，做长尾分析，多多利用不同的长尾关键词，丰富网站内容，从而促进企业网站用户的阅读性和用户粘度，这样才会真正让访问流量作为一个成功的转化出现。从而使易通企业网站系统制作的企业网站，更具有竞争力。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('89','19','0','我们的成员十二','','admin','1','0','','0','0','','0','','','','','9012','2014-10-11 19:33:13','admin','','/upload/images/201304/9012.jpg','1','1','企业或者公司网站的类型一般分为：信息及产品展示型、电子商务型、多媒体广告型。\r\n　　大多数企业网站属于信息及产品展示类型，主要面向客户、业界人士或者普通浏览者，以介绍企业的基本资料、帮助树立企业形象为主；也可以适当提供行业内的新闻或者知识信息。这种类型网站通常也被形象的比喻为企业的\"WEB Catalog\"。\r\n　　那么，企业网站一般用什么程序来建呢？\r\n　　易通cmseasy企业网站程序， PHP框架，简单、安全、运行快，平台适应性好，被广泛用于企业类网站建设。\r\n　　优点一：简洁的后台操作流程，只需要掌握网站运营流程，不需要学习复杂的编码。\r\n　　优点二：注重企业网站营销，能够充分展示企业良好形象，多种形式图片展示效果，内置SEO优化机制以及各种营销功能，让您公司产品在网络上铺天盖地。\r\n　　优点三：支持多语言网站，可以自定义网站语言类型，任何语言都支持，轻松打造国际化外贸网站。\r\n　　优点四：功能完善，是一款为企业公司打造的专业的建站系统。支持新闻模块、产品图片模块、公告模块、留言评论模块、招聘模块、在线交流模块、询盘订单购物模块、在线支付模块、友情链接模块、会员模块、下载模块等等。\r\n　　优点五：企业网站模板,公司网站模板样式多样化，更换方便。免费风格40套，商业风格近百套，用户在后台可以轻松更换前台模板风格。同时支持自定义标签和PHP标准语法模板制作方式，打造个性、灵活、大气的模板样式。','0','<p>企业或者公司网站的类型一般分为：信息及产品展示型、电子商务型、多媒体广告型。</p>\r\n<div>　　大多数企业网站属于信息及产品展示类型，主要面向客户、业界人士或者普通浏览者，以介绍企业的基本资料、帮助树立企业形象为主；也可以适当提供行业内的新闻或者知识信息。这种类型网站通常也被形象的比喻为企业的\"WEB Catalog\"。</div>\r\n<div>　　那么，企业网站一般用什么程序来建呢？</div>\r\n<div>　　易通cmseasy企业网站程序， PHP框架，简单、安全、运行快，平台适应性好，被广泛用于企业类网站建设。</div>\r\n<div>　　优点一：简洁的后台操作流程，只需要掌握网站运营流程，不需要学习复杂的编码。</div>\r\n<div>　　优点二：注重企业网站营销，能够充分展示企业良好形象，多种形式图片展示效果，内置SEO优化机制以及各种营销功能，让您公司产品在网络上铺天盖地。</div>\r\n<div>　　优点三：支持多语言网站，可以自定义网站语言类型，任何语言都支持，轻松打造国际化外贸网站。</div>\r\n<div>　　优点四：功能完善，是一款为企业公司打造的专业的建站系统。支持新闻模块、产品图片模块、公告模块、留言评论模块、招聘模块、在线交流模块、询盘订单购物模块、在线支付模块、友情链接模块、会员模块、下载模块等等。</div>\r\n<div>　　优点五：企业网站模板,公司网站模板样式多样化，更换方便。免费风格40套，商业风格近百套，用户在后台可以轻松更换前台模板风格。同时支持自定义标签和PHP标准语法模板制作方式，打造个性、灵活、大气的模板样式。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('90','20','0','课程质量','','admin','1','0','#000000','0','0','','0','','','','','0','2015-07-31 14:39:03','admin','','','-1','1','比同行业水平','0','<p>&nbsp;<span style=\"color: rgb(170, 170, 170);-- font-family: \'Microsoft YaHei\', simsun, \'Helvetica Neue\', Arial, Helvetica, sans-serif; font-size: 14px; line-height: 21px;\">比同行业水平</span></p>','0','','0','','0','0','','','','','0','','','0','a:0:{}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','');--
INSERT INTO `cmseasy_archive` VALUES('91','20','0','师资队伍','','admin','1','0','#000000','0','0','','0','','','','','0','2015-07-31 14:40:52','admin','','','1','1','比同行也水平','0','<p>&nbsp;比同行也水平</p>','0','','0','','0','0','','','','','0','','','0','a:0:{}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','高 38.50%');--
INSERT INTO `cmseasy_archive` VALUES('92','20','0','通过率','','admin','1','0','#000000','0','0','','0','','','','','0','2015-07-31 14:41:45','admin','','','1','1','比同行水平','0','<p>&nbsp;比同行水平</p>','0','','0','','0','0','','','','','0','','','0','a:0:{}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','高 38.50%');--
INSERT INTO `cmseasy_archive` VALUES('93','20','0','服务态度','','admin','1','0','#000000','0','0','','0','','','','','0','2015-07-31 14:42:13','admin','','','1','1','比同行水平','0','<p>&nbsp;比同行水平</p>','0','','0','','0','0','','','','','0','','','0','a:0:{}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','高 38.50%');--
INSERT INTO `cmseasy_archive` VALUES('94','20','0','课程质量','','admin','1','0','#000000','0','0','','0','','','','','0','2015-07-31 14:42:32','admin','','','1','1','比同行水平','0','<p>&nbsp;比同行水平</p>','0','','0','','0','0','','','','','0','','','0','a:0:{}','','0','0','0','0000-00-00','','','','','','','','','','','','','0','','高 38.50%');--
INSERT INTO `cmseasy_archive` VALUES('95','12','0','内容二十二','','admin','1','0','','0','0','','0','','','','','3306','2015-09-24 15:06:06','admin','','/upload/images/201304/3306.jpg','1','1','看到这个标题大家肯定会认为写这篇文章的作者定是个狂妄之辈，SEO还没有什么人敢说可以完全理解与掌握了。我绝不是个狂妄之辈，也没有什么值得狂妄的，恰恰相反，我正是带着这种疑问想与大家一起探讨下SEO究竟应该学习些什么?很多朋友也许会说SEO无非就是调整好网站结构布局、注重网站内容与外链 正是基于此种原因，我才决定将文章的标题拟为“SEO：还有什么东西可学”。　　\r\n　　关于SEO的技术知识想必大家也都看过不少，说句实话，看来看去也无非就是网站结构、网站内容、外链等一些基本点，其实事实也正是如此，真正的关键是在于你如何去做，既然这篇文章也是讨论SEO技术，我也难以避免提到这些SEO老生长谈的话题，但是也许会与你之前看到的有所不同。','0','<p>SEO不是一成不变 还有什么东西可学</p>\r\n<div>看到这个标题大家肯定会认为写这篇文章的作者定是个狂妄之辈，SEO还没有什么人敢说可以完全理解与掌握了。我绝不是个狂妄之辈，也没有什么值得狂妄的，恰恰相反，我正是带着这种疑问想与大家一起探讨下SEO究竟应该学习些什么?很多朋友也许会说SEO无非就是调整好网站结构布局、注重网站内容与外链 正是基于此种原因，我才决定将文章的标题拟为&ldquo;SEO：还有什么东西可学&rdquo;。　　</div>\r\n<div>　　关于SEO的技术知识想必大家也都看过不少，说句实话，看来看去也无非就是网站结构、网站内容、外链等一些基本点，其实事实也正是如此，真正的关键是在于你如何去做，既然这篇文章也是讨论SEO技术，我也难以避免提到这些SEO老生长谈的话题，但是也许会与你之前看到的有所不同。</div>\r\n<div>　　网站结构布局</div>\r\n<div>　　网站结构要有利于搜索引擎的抓取和收录，网站布局以用户体验为先。关于这一点我也不想赘述，套句话说就是：前人已言尽矣。我说一点我切身的感受，如果你的网站是中小型企业网站，完全可以选择做成纯静态。现在搜索引擎对于新站的考核越来越严格，纯静态的网站无论是在新站收录的速度上还是在考核期限上占有绝对的优势。搜索引擎蜘蛛程序访问一个网站的时间是有一定的限制的，你需要尽可能的减轻蜘蛛程序的工作负担，在有限的时间内让它抓取到你网站内更多的页面。收录的充分性是网站优化的基础，这一步工作做的扎实了，后期的工作也就顺畅多了。</div>\r\n<div>　　长尾关键词分析</div>\r\n<div>　　在这里我不讨论网站核心关键词的选取，是因为我对长尾关键词的分析更感兴趣一些。说句实话，在SEO工作上众多的事情里面我觉得最有意思的一件事就是长尾关键词分析了，我个人觉得从某种意义上来说，长尾关键词的拓展是无限的。套话不多说，我实际的讲一下我是如何拓展长尾关键词的。</div>\r\n<div>　　1、根据网站核心关键词 自己分析、猜想拓展长尾关键词</div>\r\n<div>　　2、搜索下拉框与相关搜索</div>\r\n<div>　　3、头脑风暴 问朋友、问网友</div>\r\n<div>　　4、问客户，客户通过搜索关键词找到我们的网站后，我们会向客户咨询他是通过搜索什么关键词搜索到我们的网站的，并且还搜索了哪些关键词，再进一步的可以问一下他还可以想到的可能会搜索的关键词。(问客户这一点我觉得很重要，针对性极强，因为这是实实在在的客户需求)</div>\r\n<div>　　5、问答平台 百度知道 搜搜问答&nbsp;</div>\r\n<div>　　6、网站统计工具 我一般都安装百度统计，而且我们公司的网站还搞竞价推广，所以在百度统计里面可以看到搜索用户搜索的很多长尾关键词。除此之外，百度统计里面还有查看相关热门搜索词，这个也很好用，是直接的搜索数据显示的。</div>\r\n<div>　　7、分析同行网站 最简单的可以用站长工具分析同行的网站，现在里面有个关键词库，多多查看同行的网站对于拓展长尾关键词绝对有意外收获。另外找几家做得比较牛的流量高的同行网站，深入其网站仔细分析。</div>\r\n<div>　　就为大家简单的介绍这几种，长尾关键词的拓展方法远非这几种，每个人拓展的方式方法可能都不一样。有些时候出于商业性质的考虑，不仅拓展的长尾词需要保密，拓展的方法也要保密。上文我已经说过，在网站优化工作中我最感兴趣的就是长尾关键词的分析拓展了，每当我拓展出别人遗漏的、没有做过的长尾词并且带来流量的时候我心里就莫名的兴奋。(呵呵，一笑~)</div>\r\n<div>　　网站内容</div>\r\n<div>　　网站内容的原创性不提也罢，估计大家也都听腻了。其实网站内容追求的是有价值性而绝非仅仅停留在原创性，当然这只是&ldquo;追求&rdquo;，实际上对于绝大多数的网站来说，能够做到原创性就已经算很好了。在这里我们既不谈原创性也不谈有价值性，(这并不是说这种做法不对，不，这种做法是绝对的好，只是我们很难去做到，网站内有价值的内容是必须要有的。)我们来探讨下，我们该如何去做网站内容。相信有很多朋友都深有感触：网站内容我还能添加些什么呢?写文章写的我都要吐了，写来写去也无非就那些内容了，有时候实在不知道该怎么编了&hellip;&hellip;</div>\r\n<div>　　1、我的第一种方法就是不断的去拓展新的长尾关键词，新的长尾关键词也许会带给你新的灵感。</div>\r\n<div>　　2、查看同行网站，但绝不要抄袭，取其思维就可以了。</div>\r\n<div>　　3、深入了解你的产品，了解的方法有很多，可以去学习，可以与你的客户聊天&hellip;&hellip;这些都有可能让你写出新的内容来，以我为例，我是在一家网络公司工作，同时也对做网站和网站优化有兴趣，我可以边学习做网站技术和seo边总结、整理感悟想法，这些算是高质量、有价值的网站内容了。</div>\r\n<div>　　4、实在不知怎么编 找一些书籍 抄书吧 抄的时候要搜索下内容是否&ldquo;飘红&rdquo;。</div>\r\n<div>&nbsp;</div>\r\n<div>　　外链建设</div>\r\n<div>　　现在外链建设越来越难了，但是也更说明外链建设的重要性。外链的本质是别人为你的网站投票，自愿的带上你的链接，现在都成自己去找平台发外链了。无论怎么样，还是自然吸引的外链是最稳定、最有效的。外链建设的方法五花八门，大家各显神通吧。不过还是那句老话：注意自然与平衡。</div>\r\n<div>　　总结：SEO不是一成不变，需要我们不断的去研究与学习!最后扯一点题外话：我们为什么做SEO?是因为搜索引擎上有我们的营销市场，是因为网民对于搜索引擎的巨大依赖性。但是现在很多其它的平台也存在大量的潜在的营销市场，比如说微博、微信等等。那么我们该怎么做?毫无疑问，我们的客户可能出现在哪里，我们的工作就需要做到哪里，SEO只是一种手段。</div>\r\n<p>&nbsp;</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','CMSEASY2PvAH7VhsRncNfJ420','');--
INSERT INTO `cmseasy_archive` VALUES('96','12','0','内容二十三','','admin','1','0','','0','0','','0','','','','','3307','2015-09-24 15:07:34','admin','','/upload/images/201304/3307.jpg','1','1','很多企业在做外贸网站制作时，都会咨询很多家的网络公司，而且价格也是五花八门各有不同的，那么这些价格为什么会有如此大的差异呢?做出来的网站又有哪些不同呢?下面就让凯丽隆外贸营销来为大家详细介绍一下：\r\n\r\n对于有的标榜着几百元一个的网站，其网站结构基本上都是比较简单的，而且是固定的模板，不能随意更改，对于企业想要达到的效果是十分有限制的。并且，一般情况下，这样的网站不会单独为企业进行网页设计，网站的内页也与网站首页如出一辙，这样整个的用户体验上也都是会有影响的。所以便宜归便宜，但是展示效果是十分有限的。','0','<p>外贸网站制作的价格区别在哪里</p>\r\n<div>&nbsp;</div>\r\n<div>很多企业在做外贸网站制作时，都会咨询很多家的网络公司，而且价格也是五花八门各有不同的，那么这些价格为什么会有如此大的差异呢?做出来的网站又有哪些不同呢?下面就让凯丽隆外贸营销来为大家详细介绍一下：</div>\r\n<div>&nbsp;</div>\r\n<div>　　对于有的标榜着几百元一个的网站，其网站结构基本上都是比较简单的，而且是固定的模板，不能随意更改，对于企业想要达到的效果是十分有限制的。并且，一般情况下，这样的网站不会单独为企业进行网页设计，网站的内页也与网站首页如出一辙，这样整个的用户体验上也都是会有影响的。所以便宜归便宜，但是展示效果是十分有限的。</div>\r\n<div>&nbsp;</div>\r\n<div>　　而那些定制站就完全不一样了，这样的网站都会根据外贸企业的特点来设计整个网站，有的时候也许只是一个细小的设计也能够起到吸引客户的注意力，让他对你的网站感兴趣。而且网站的功能也可以进行个性化的处理，可以将你的产品，图片以及整个的企业展示得更加高大上，自然这样的企业也是很多海外客户想要合作的对象。</div>\r\n<div>&nbsp;</div>\r\n<div>　　以上是凯丽隆外贸营销为大家介绍的关于外贸网站制作中价格差异的原因，要永远相信一句话：一份价钱一份货，贵的东西不一定好，但是廉价的东西，一定没有太高的质量。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','CMSEASY3aWMPBmJdFBNULF287','');--
INSERT INTO `cmseasy_archive` VALUES('97','12','0','内容二十四','','admin','1','0','','0','0','','0','','','','','3308','2015-09-24 15:08:13','admin','','/upload/images/201304/3308.jpg','1','1','说起排行安稳的要素，信任不少站长朋友都有自己的发言权，比如说：服务器安稳、网站结构安稳、网站内容更新和外链发布频率安稳等；网站的主次明白，主页一定表现主题；网站是不是在处理用户疑问而不是制造疑问；把一些可有可无的东西去掉，不要想着做大而全；当然毕竟少不了一个词：坚持。\r\nSEO是一个长期的工作，是一个统管大局的工作，对于排行安稳、对于流量前进、对于转化率前进都成为我们的焦点。而玩SEO的朋友都能说出自己的一些观念观念。可是为何自己的SEO工作便是做欠好，网站优化便是不安稳呢？','0','<p>说起排行安稳的要素，信任不少站长朋友都有自己的发言权，比如说：服务器安稳、网站结构安稳、网站内容更新和外链发布频率安稳等；网站的主次明白，主页一定表现主题；网站是不是在处理用户疑问而不是制造疑问；把一些可有可无的东西去掉，不要想着做大而全；当然毕竟少不了一个词：坚持。</p>\r\n<div>SEO是一个长期的工作，是一个统管大局的工作，对于排行安稳、对于流量前进、对于转化率前进都成为我们的焦点。而玩SEO的朋友都能说出自己的一些观念观念。可是为何自己的SEO工作便是做欠好，网站优化便是不安稳呢？</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp; &nbsp; 网站的SEO优化效果欠好，我们先看看自己的悉数工作流程有没有出现疑问。</div>\r\n<div>SEO的进程：</div>\r\n<div>一、最基本的网站三要素域名、空间和程序；</div>\r\n<div>二、网站关键词的分析与选定；</div>\r\n<div>三、网站结构和代码分析；</div>\r\n<div>四、网站节目和页面优化；</div>\r\n<div>五、内容发布与衔接安置；</div>\r\n<div>六、与搜索引擎对话；</div>\r\n<div>七、流量核算东西分析。</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp; &nbsp; 信任大多数从事SEO的朋友都是半路出家，因为没有参加过系统的学习和实战，我们只知道更新内容、发外链，查看搜索引擎成果。特别是网站排行出现不坚定的时分，一定要去站长论坛、QQ群去吐槽，寻求我们的处理方案。然后得到的答案是什么呢？更新独创高质量内容，发布高质量外链。</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp; &nbsp; 对于SEO优化效果欠好的缘由已经给我们简略分析了，我们是不是真实处理了这些疑问？假设没处理这些疑问，那么先处理这些疑问吧。网站内部要素能够找安稳的服务商、运用官方的程序、内容更新和外链发布频率更需要安稳。</div>\r\n<div>&nbsp; &nbsp;</div>\r\n<div>&nbsp; &nbsp; 不少站长和SEO工作者最喜欢的便是访问站长有关网站和论坛，特别是排行不坚定的时分喜欢病急乱投医，然后得到千人一面的答案。历来不喜欢自己思考是最大的疑问，当然公司老板不明白是最大的疑问，建议SEO工作者一定要有抉择方案权，毕业作为SEO工作者有时太被动了。</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp; &nbsp; 我们不知道SEO的方向，假设只研讨多变的规则，多变的算法，做SEO基本上累死也很难做好。看看哪些东西是不变的，做到极致。做SEO优化如此，做其他事何曾不是如此？</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','CMSEASY5Bzs7b83hThAb8w122','');--
INSERT INTO `cmseasy_archive` VALUES('98','6','0','下载二','','admin','1','1','','0','0','','0','','','','','6002','2015-09-24 15:25:06','admin','','/upload/images/201304/6002.jpg','1','1','网站永久免费，且不限制商业用途，但必须保留网站底部及相应的官方版权信息和链接；\r\n\r\n推荐配置：	Linux + Apache + Mysql + PHP\r\n\r\n操作系统：	Linux (支持Unix/FreeBSD/Solaris/Windows NT(2000/2003)等操作系统)\r\n\r\nWEB服务器：	Apache (支持httpd, Zeus, IIS 等WEB服务器)\r\n\r\n数据库：	Mysql (5.0 或者更高版本)\r\n\r\n程序支持：	PHP 5.0及以上版本 (推荐使用5.2系列最新版本)','0','<p>网站永久免费，且不限制商业用途，但必须保留网站底部及相应的官方版权信息和链接；</p>\r\n<p>推荐配置：<span class=\"Apple-tab-span\" style=\"white-space: pre;\">	</span>Linux + Apache + Mysql + PHP</p>\r\n<p>操作系统：<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Linux (支持Unix/FreeBSD/Solaris/Windows NT(2000/2003)等操作系统)</p>\r\n<p>WEB服务器：<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Apache (支持httpd, Zeus, IIS 等WEB服务器)</p>\r\n<p>数据库：<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Mysql (5.0 或者更高版本)</p>\r\n<p>程序支持：<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>PHP 5.0及以上版本 (推荐使用5.2系列最新版本)</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','CMSEASYClsDHAueIC6vUEY703','');--
INSERT INTO `cmseasy_archive` VALUES('99','6','0','下载三','','admin','1','3','','0','0','','0','','','','','6003','2015-09-24 15:26:39','admin','','/upload/images/201304/6003.jpg','1','1',' 客户通过电子邮件、电话、即时通讯工具等方式向公司提出网站建设的基本需求，包括：网站风格、项目说明、网站基本功能需求、设计基本要求等，并提供详细的模板定制需求书。\r\n\r\nSTEP1协商模板费用\r\n公司根据提供用户提供的模板定制需求书，报价供客户参考。经双方交流与磋商，确定具体网站建设方案及费用。\r\nSTEP2准备材料\r\n双方签订《模板定制协议》（可选），客户支付款项。客户通过电子邮件、电话、论坛、QQ聊天等方式提供网站建设相关的内容资料，包括文字及图片等（文字：文本文档或Word文档；图片：jpg格式）。\r\nSTEP3联系客服\r\n在完成网站模板定制需求文档后，联系定制客服，提交模板定制需求文档说明。\r\nSTEP4进行预付款支付\r\n协商价格后，预付模板定制总款项的60％；\r\nSTEP5提供首页设计图\r\n预付款后，三个工作日后根据网站建设方案提供网站设计初稿，包括首页、栏目页等页面模板的设计。\r\nSTEP6确认设计开始制作\r\n设计初稿经客户修订、审核后，确认整体网站风格及色调，转换成客户认可的设计正式稿。','0','<p>&nbsp;客户通过电子邮件、电话、即时通讯工具等方式向公司提出网站建设的基本需求，包括：网站风格、项目说明、网站基本功能需求、设计基本要求等，并提供详细的模板定制需求书。</p>\r\n<div>STEP1协商模板费用</div>\r\n<div>公司根据提供用户提供的模板定制需求书，报价供客户参考。经双方交流与磋商，确定具体网站建设方案及费用。</div>\r\n<div>STEP2准备材料</div>\r\n<div>双方签订《模板定制协议》（可选），客户支付款项。客户通过电子邮件、电话、论坛、QQ聊天等方式提供网站建设相关的内容资料，包括文字及图片等（文字：文本文档或Word文档；图片：jpg格式）。</div>\r\n<div>STEP3联系客服</div>\r\n<div>在完成网站模板定制需求文档后，联系定制客服，提交模板定制需求文档说明。</div>\r\n<div>STEP4进行预付款支付</div>\r\n<div>协商价格后，预付模板定制总款项的60％；</div>\r\n<div>STEP5提供首页设计图</div>\r\n<div>预付款后，三个工作日后根据网站建设方案提供网站设计初稿，包括首页、栏目页等页面模板的设计。</div>\r\n<div>STEP6确认设计开始制作</div>\r\n<div>设计初稿经客户修订、审核后，确认整体网站风格及色调，转换成客户认可的设计正式稿。</div>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','CMSEASYmuE989KpnsbDuw8443','');--
INSERT INTO `cmseasy_archive` VALUES('100','7','0','业务经理','','admin','1','3','','0','0','','0','','','','','7002','2015-09-24 15:29:32','admin','','','1','1','','0','','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','人事部','1','热爱本职工作','2','1','无','3','20-40','不限','3000-5000','董先生','0','CMSEASYjuzOUOgQmYsUpva458','');--
INSERT INTO `cmseasy_archive` VALUES('101','7','0','活动推销员','','admin','1','3','','0','0','','0','','','','','7003','2015-09-24 15:30:58','admin','','','1','1','','0','','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','销售部','2','热爱本职工作','2','2','吃苦耐劳','2','20-40','不限','5000-8000','董先生','0','CMSEASYmk6neJp3jDgbKWr353','');--
INSERT INTO `cmseasy_archive` VALUES('103','16','0','企业文化重要','','admin','1','0','','0','0','','0','','','','','0','2015-10-17 14:11:50','admin','','','1','1',' 企业文化的重要   企业文化的重要   企业文化的重要   企业文化的重要   企业文化的重要   企业文化的重要   企业文化的重要   企业文化的重要   企业文化的重要   企业文化的重要   企业文化的重要  ','0','<p>&nbsp;企业文化的重要 &nbsp;&nbsp;企业文化的重要 &nbsp;&nbsp;企业文化的重要 &nbsp;&nbsp;企业文化的重要 &nbsp;&nbsp;企业文化的重要 &nbsp;&nbsp;企业文化的重要 &nbsp;&nbsp;企业文化的重要 &nbsp;&nbsp;企业文化的重要 &nbsp;&nbsp;企业文化的重要 &nbsp;&nbsp;企业文化的重要 &nbsp;&nbsp;企业文化的重要 &nbsp;&nbsp;企业文化的重要 &nbsp;&nbsp;企业文化的重要 &nbsp;</p>','0','0','0','','0','0','','','','','0','','','0','N;','','0','0','0','0000-00-00','','','','','','','','','','','','','0','CMSEASYOIS6COpJI68FeEE815','');--


INSERT INTO `cmseasy_b_arctag` VALUES('9','20','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('3','21','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('4','22','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('248','19','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('7','23','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('241','24','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('269','10','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('242','11','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('782','9','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('243','12','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('244','13','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('245','14','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('790','15','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('246','16','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('247','17','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('291','18','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('249','27','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('250','28','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('251','29','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('252','30','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('253','31','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('698','32','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('259','33','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('260','34','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('261','35','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('262','36','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('787','37','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('783','8','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('784','7','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('785','6','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('786','5','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('788','38','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('789','39','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('767','40','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('768','41','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('769','42','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('112','43','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('746','44','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('770','45','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('771','46','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('772','47','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('773','48','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('780','49','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('779','50','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('778','51','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('781','52','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('777','53','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('776','54','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('775','55','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('774','56','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('199','57','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('200','58','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('201','59','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('202','60','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('203','61','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('204','62','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('205','63','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('206','64','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('207','65','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('461','66','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('462','67','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('463','68','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('464','69','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('465','70','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('466','71','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('467','72','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('468','73','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('469','74','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('470','75','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('471','76','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('472','77','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('522','78','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('523','79','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('524','80','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('525','81','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('526','82','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('527','83','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('528','84','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('529','85','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('530','86','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('531','87','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('532','88','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('533','89','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('171','90','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('172','91','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('173','92','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('174','93','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('175','94','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('236','15','1');--
INSERT INTO `cmseasy_b_arctag` VALUES('238','18','1');--
INSERT INTO `cmseasy_b_arctag` VALUES('239','10','1');--
INSERT INTO `cmseasy_b_arctag` VALUES('263','95','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('264','96','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('265','97','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('271','25','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('272','98','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('273','99','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('277','100','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('278','101','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('276','102','0');--
INSERT INTO `cmseasy_b_arctag` VALUES('426','103','0');--

INSERT INTO `cmseasy_b_area` VALUES('82','北京市','0');--
INSERT INTO `cmseasy_b_area` VALUES('83','天津市','0');--
INSERT INTO `cmseasy_b_area` VALUES('84','河北省','0');--
INSERT INTO `cmseasy_b_area` VALUES('85','山西省','0');--
INSERT INTO `cmseasy_b_area` VALUES('86','内蒙古自治区','0');--
INSERT INTO `cmseasy_b_area` VALUES('87','辽宁省','0');--
INSERT INTO `cmseasy_b_area` VALUES('88','吉林省','0');--
INSERT INTO `cmseasy_b_area` VALUES('89','黑龙江省','0');--
INSERT INTO `cmseasy_b_area` VALUES('90','上海市','0');--
INSERT INTO `cmseasy_b_area` VALUES('91','江苏省','0');--
INSERT INTO `cmseasy_b_area` VALUES('92','浙江省','0');--
INSERT INTO `cmseasy_b_area` VALUES('93','安徽省','0');--
INSERT INTO `cmseasy_b_area` VALUES('94','福建省','0');--
INSERT INTO `cmseasy_b_area` VALUES('95','江西省','0');--
INSERT INTO `cmseasy_b_area` VALUES('96','山东省','0');--
INSERT INTO `cmseasy_b_area` VALUES('97','河南省','0');--
INSERT INTO `cmseasy_b_area` VALUES('98','湖北省','0');--
INSERT INTO `cmseasy_b_area` VALUES('99','湖南省','0');--
INSERT INTO `cmseasy_b_area` VALUES('100','广东省','0');--
INSERT INTO `cmseasy_b_area` VALUES('101','广西壮族自治区','0');--
INSERT INTO `cmseasy_b_area` VALUES('102','海南省','0');--
INSERT INTO `cmseasy_b_area` VALUES('103','重庆市','0');--
INSERT INTO `cmseasy_b_area` VALUES('104','四川省','0');--
INSERT INTO `cmseasy_b_area` VALUES('105','贵州省','0');--
INSERT INTO `cmseasy_b_area` VALUES('106','云南省','0');--
INSERT INTO `cmseasy_b_area` VALUES('107','西藏自治区','0');--
INSERT INTO `cmseasy_b_area` VALUES('108','陕西省','0');--
INSERT INTO `cmseasy_b_area` VALUES('109','甘肃省','0');--
INSERT INTO `cmseasy_b_area` VALUES('110','青海省','0');--
INSERT INTO `cmseasy_b_area` VALUES('111','宁夏回族自治区','0');--
INSERT INTO `cmseasy_b_area` VALUES('112','新疆维吾尔自治区','0');--
INSERT INTO `cmseasy_b_area` VALUES('113','台湾省','0');--
INSERT INTO `cmseasy_b_area` VALUES('114','香港特别行政区','0');--
INSERT INTO `cmseasy_b_area` VALUES('115','澳门特别行政区','0');--
INSERT INTO `cmseasy_b_area` VALUES('116','北京辖区','82');--
INSERT INTO `cmseasy_b_area` VALUES('117','北京辖县','82');--
INSERT INTO `cmseasy_b_area` VALUES('118','天津辖区','83');--
INSERT INTO `cmseasy_b_area` VALUES('119','天津辖县','83');--
INSERT INTO `cmseasy_b_area` VALUES('120','重庆辖区','103');--
INSERT INTO `cmseasy_b_area` VALUES('121','重庆辖县','103');--
INSERT INTO `cmseasy_b_area` VALUES('122','上海辖区','90');--
INSERT INTO `cmseasy_b_area` VALUES('123','上海辖县','90');--
INSERT INTO `cmseasy_b_area` VALUES('124','东城区','116');--
INSERT INTO `cmseasy_b_area` VALUES('125','西城区','116');--
INSERT INTO `cmseasy_b_area` VALUES('126','崇文区','116');--
INSERT INTO `cmseasy_b_area` VALUES('127','宣武区','116');--
INSERT INTO `cmseasy_b_area` VALUES('128','朝阳区','116');--
INSERT INTO `cmseasy_b_area` VALUES('129','丰台区','116');--
INSERT INTO `cmseasy_b_area` VALUES('130','石景山区','116');--
INSERT INTO `cmseasy_b_area` VALUES('131','海淀区','116');--
INSERT INTO `cmseasy_b_area` VALUES('132','门头沟区','116');--
INSERT INTO `cmseasy_b_area` VALUES('133','房山区','116');--
INSERT INTO `cmseasy_b_area` VALUES('134','通州区','116');--
INSERT INTO `cmseasy_b_area` VALUES('135','顺义区','116');--
INSERT INTO `cmseasy_b_area` VALUES('136','昌平区','116');--
INSERT INTO `cmseasy_b_area` VALUES('137','大兴区','116');--
INSERT INTO `cmseasy_b_area` VALUES('138','怀柔区','116');--
INSERT INTO `cmseasy_b_area` VALUES('139','平谷区','116');--
INSERT INTO `cmseasy_b_area` VALUES('140','密云县','117');--
INSERT INTO `cmseasy_b_area` VALUES('141','延庆县','117');--
INSERT INTO `cmseasy_b_area` VALUES('142','和平区','118');--
INSERT INTO `cmseasy_b_area` VALUES('143','河东区','118');--
INSERT INTO `cmseasy_b_area` VALUES('144','河西区','118');--
INSERT INTO `cmseasy_b_area` VALUES('145','南开区','118');--
INSERT INTO `cmseasy_b_area` VALUES('146','河北区','118');--
INSERT INTO `cmseasy_b_area` VALUES('147','红桥区','118');--
INSERT INTO `cmseasy_b_area` VALUES('148','塘沽区','118');--
INSERT INTO `cmseasy_b_area` VALUES('149','汉沽区','118');--
INSERT INTO `cmseasy_b_area` VALUES('150','大港区','118');--
INSERT INTO `cmseasy_b_area` VALUES('151','东丽区','118');--
INSERT INTO `cmseasy_b_area` VALUES('152','西青区','118');--
INSERT INTO `cmseasy_b_area` VALUES('153','北辰区','118');--
INSERT INTO `cmseasy_b_area` VALUES('154','津南区','118');--
INSERT INTO `cmseasy_b_area` VALUES('155','武清区','118');--
INSERT INTO `cmseasy_b_area` VALUES('156','宝坻区','118');--
INSERT INTO `cmseasy_b_area` VALUES('157','静海县','119');--
INSERT INTO `cmseasy_b_area` VALUES('158','宁河县','119');--
INSERT INTO `cmseasy_b_area` VALUES('159','蓟县','119');--
INSERT INTO `cmseasy_b_area` VALUES('160','黄浦区','122');--
INSERT INTO `cmseasy_b_area` VALUES('161','卢湾区','122');--
INSERT INTO `cmseasy_b_area` VALUES('162','徐汇区','122');--
INSERT INTO `cmseasy_b_area` VALUES('163','徐家汇','122');--
INSERT INTO `cmseasy_b_area` VALUES('164','长宁区','122');--
INSERT INTO `cmseasy_b_area` VALUES('165','静安区','122');--
INSERT INTO `cmseasy_b_area` VALUES('166','普陀区','122');--
INSERT INTO `cmseasy_b_area` VALUES('167','闸北区','122');--
INSERT INTO `cmseasy_b_area` VALUES('168','虹口区','122');--
INSERT INTO `cmseasy_b_area` VALUES('169','杨浦区','122');--
INSERT INTO `cmseasy_b_area` VALUES('170','宝山区','122');--
INSERT INTO `cmseasy_b_area` VALUES('171','闵行区','122');--
INSERT INTO `cmseasy_b_area` VALUES('172','嘉定区','122');--
INSERT INTO `cmseasy_b_area` VALUES('173','浦东新区','122');--
INSERT INTO `cmseasy_b_area` VALUES('174','松江区','122');--
INSERT INTO `cmseasy_b_area` VALUES('175','金山区','122');--
INSERT INTO `cmseasy_b_area` VALUES('176','青浦区','122');--
INSERT INTO `cmseasy_b_area` VALUES('177','南汇区','122');--
INSERT INTO `cmseasy_b_area` VALUES('178','奉贤区','122');--
INSERT INTO `cmseasy_b_area` VALUES('179','崇明县','123');--
INSERT INTO `cmseasy_b_area` VALUES('180','渝中区','120');--
INSERT INTO `cmseasy_b_area` VALUES('181','大渡口区','120');--
INSERT INTO `cmseasy_b_area` VALUES('182','江北区','120');--
INSERT INTO `cmseasy_b_area` VALUES('183','沙坪坝区','120');--
INSERT INTO `cmseasy_b_area` VALUES('184','九龙坡区','120');--
INSERT INTO `cmseasy_b_area` VALUES('185','南岸区','120');--
INSERT INTO `cmseasy_b_area` VALUES('186','北碚区','120');--
INSERT INTO `cmseasy_b_area` VALUES('187','万盛区','120');--
INSERT INTO `cmseasy_b_area` VALUES('188','双桥区','120');--
INSERT INTO `cmseasy_b_area` VALUES('189','渝北区','120');--
INSERT INTO `cmseasy_b_area` VALUES('190','巴南区','120');--
INSERT INTO `cmseasy_b_area` VALUES('191','万州区','120');--
INSERT INTO `cmseasy_b_area` VALUES('192','涪陵区','120');--
INSERT INTO `cmseasy_b_area` VALUES('193','黔江区','120');--
INSERT INTO `cmseasy_b_area` VALUES('194','长寿区','120');--
INSERT INTO `cmseasy_b_area` VALUES('195','綦江县','121');--
INSERT INTO `cmseasy_b_area` VALUES('196','潼南县','121');--
INSERT INTO `cmseasy_b_area` VALUES('197','荣昌县','121');--
INSERT INTO `cmseasy_b_area` VALUES('198','璧山县','121');--
INSERT INTO `cmseasy_b_area` VALUES('199','大足县','121');--
INSERT INTO `cmseasy_b_area` VALUES('200','铜梁县','121');--
INSERT INTO `cmseasy_b_area` VALUES('201','梁平县','121');--
INSERT INTO `cmseasy_b_area` VALUES('202','城口县','121');--
INSERT INTO `cmseasy_b_area` VALUES('203','垫江县','121');--
INSERT INTO `cmseasy_b_area` VALUES('204','武隆县','121');--
INSERT INTO `cmseasy_b_area` VALUES('205','丰都县','121');--
INSERT INTO `cmseasy_b_area` VALUES('206','奉节县','121');--
INSERT INTO `cmseasy_b_area` VALUES('207','开县','121');--
INSERT INTO `cmseasy_b_area` VALUES('208','云阳县','121');--
INSERT INTO `cmseasy_b_area` VALUES('209','忠县','121');--
INSERT INTO `cmseasy_b_area` VALUES('210','巫溪县','121');--
INSERT INTO `cmseasy_b_area` VALUES('211','巫山县','121');--
INSERT INTO `cmseasy_b_area` VALUES('212','石柱县','121');--
INSERT INTO `cmseasy_b_area` VALUES('213','秀山县','121');--
INSERT INTO `cmseasy_b_area` VALUES('214','酉阳县','121');--
INSERT INTO `cmseasy_b_area` VALUES('215','彭水县','121');--
INSERT INTO `cmseasy_b_area` VALUES('216','重庆辖市','103');--
INSERT INTO `cmseasy_b_area` VALUES('217','永川市','216');--
INSERT INTO `cmseasy_b_area` VALUES('218','合川市','216');--
INSERT INTO `cmseasy_b_area` VALUES('219','江津市','216');--
INSERT INTO `cmseasy_b_area` VALUES('220','南川市','216');--
INSERT INTO `cmseasy_b_area` VALUES('221','沈阳市','87');--
INSERT INTO `cmseasy_b_area` VALUES('222','大连市','87');--
INSERT INTO `cmseasy_b_area` VALUES('223','鞍山市','87');--
INSERT INTO `cmseasy_b_area` VALUES('224','抚顺市','87');--
INSERT INTO `cmseasy_b_area` VALUES('225','本溪市','87');--
INSERT INTO `cmseasy_b_area` VALUES('226','丹东市','87');--
INSERT INTO `cmseasy_b_area` VALUES('227','锦州市','87');--
INSERT INTO `cmseasy_b_area` VALUES('228','葫芦岛市','87');--
INSERT INTO `cmseasy_b_area` VALUES('229','营口市','87');--
INSERT INTO `cmseasy_b_area` VALUES('230','盘锦市','87');--
INSERT INTO `cmseasy_b_area` VALUES('231','阜新市','87');--
INSERT INTO `cmseasy_b_area` VALUES('232','辽阳市','87');--
INSERT INTO `cmseasy_b_area` VALUES('233','铁岭市','87');--
INSERT INTO `cmseasy_b_area` VALUES('234','朝阳市','87');--
INSERT INTO `cmseasy_b_area` VALUES('235','长春市','88');--
INSERT INTO `cmseasy_b_area` VALUES('236','吉林市','88');--
INSERT INTO `cmseasy_b_area` VALUES('237','四平市','88');--
INSERT INTO `cmseasy_b_area` VALUES('238','辽源市','88');--
INSERT INTO `cmseasy_b_area` VALUES('239','通化市','88');--
INSERT INTO `cmseasy_b_area` VALUES('240','白山市','88');--
INSERT INTO `cmseasy_b_area` VALUES('241','延边朝鲜族自治州','88');--
INSERT INTO `cmseasy_b_area` VALUES('242','白城市','88');--
INSERT INTO `cmseasy_b_area` VALUES('243','松原市','88');--
INSERT INTO `cmseasy_b_area` VALUES('244','哈尔滨市','89');--
INSERT INTO `cmseasy_b_area` VALUES('245','齐齐哈尔市','89');--
INSERT INTO `cmseasy_b_area` VALUES('246','鹤岗市','89');--
INSERT INTO `cmseasy_b_area` VALUES('247','双鸭山市','89');--
INSERT INTO `cmseasy_b_area` VALUES('248','鸡西市','89');--
INSERT INTO `cmseasy_b_area` VALUES('249','大庆市','89');--
INSERT INTO `cmseasy_b_area` VALUES('250','伊春市','89');--
INSERT INTO `cmseasy_b_area` VALUES('251','牡丹江市','89');--
INSERT INTO `cmseasy_b_area` VALUES('252','佳木斯市','89');--
INSERT INTO `cmseasy_b_area` VALUES('253','七台河市','89');--
INSERT INTO `cmseasy_b_area` VALUES('254','黑河市','89');--
INSERT INTO `cmseasy_b_area` VALUES('255','绥化市','89');--
INSERT INTO `cmseasy_b_area` VALUES('256','大兴安岭地区','89');--
INSERT INTO `cmseasy_b_area` VALUES('257','石家庄市','84');--
INSERT INTO `cmseasy_b_area` VALUES('258','唐山市','84');--
INSERT INTO `cmseasy_b_area` VALUES('259','秦皇岛市','84');--
INSERT INTO `cmseasy_b_area` VALUES('260','邯郸市','84');--
INSERT INTO `cmseasy_b_area` VALUES('261','邢台市','84');--
INSERT INTO `cmseasy_b_area` VALUES('262','保定市','84');--
INSERT INTO `cmseasy_b_area` VALUES('263','张家口市','84');--
INSERT INTO `cmseasy_b_area` VALUES('264','承德市','84');--
INSERT INTO `cmseasy_b_area` VALUES('265','廊坊市','84');--
INSERT INTO `cmseasy_b_area` VALUES('266','衡水市','84');--
INSERT INTO `cmseasy_b_area` VALUES('267','沧州市','84');--
INSERT INTO `cmseasy_b_area` VALUES('268','太原市','85');--
INSERT INTO `cmseasy_b_area` VALUES('269','大同市','85');--
INSERT INTO `cmseasy_b_area` VALUES('270','阳泉市','85');--
INSERT INTO `cmseasy_b_area` VALUES('271','长治市','85');--
INSERT INTO `cmseasy_b_area` VALUES('272','晋城市','85');--
INSERT INTO `cmseasy_b_area` VALUES('273','朔州市','85');--
INSERT INTO `cmseasy_b_area` VALUES('274','晋中市','85');--
INSERT INTO `cmseasy_b_area` VALUES('275','运城市','85');--
INSERT INTO `cmseasy_b_area` VALUES('276','忻州市','85');--
INSERT INTO `cmseasy_b_area` VALUES('277','临汾市','85');--
INSERT INTO `cmseasy_b_area` VALUES('278','吕梁地区','85');--
INSERT INTO `cmseasy_b_area` VALUES('279','郑州市','97');--
INSERT INTO `cmseasy_b_area` VALUES('280','开封市','97');--
INSERT INTO `cmseasy_b_area` VALUES('281','平顶山市','97');--
INSERT INTO `cmseasy_b_area` VALUES('282','焦作市','97');--
INSERT INTO `cmseasy_b_area` VALUES('283','鹤壁市','97');--
INSERT INTO `cmseasy_b_area` VALUES('284','新乡市','97');--
INSERT INTO `cmseasy_b_area` VALUES('285','安阳市','97');--
INSERT INTO `cmseasy_b_area` VALUES('286','濮阳市','97');--
INSERT INTO `cmseasy_b_area` VALUES('287','许昌市','97');--
INSERT INTO `cmseasy_b_area` VALUES('288','漯河市','97');--
INSERT INTO `cmseasy_b_area` VALUES('289','三门峡市','97');--
INSERT INTO `cmseasy_b_area` VALUES('290','南阳市','97');--
INSERT INTO `cmseasy_b_area` VALUES('291','商丘市','97');--
INSERT INTO `cmseasy_b_area` VALUES('292','信阳市','97');--
INSERT INTO `cmseasy_b_area` VALUES('293','周口市','97');--
INSERT INTO `cmseasy_b_area` VALUES('294','驻马店市','97');--
INSERT INTO `cmseasy_b_area` VALUES('295','济南市','96');--
INSERT INTO `cmseasy_b_area` VALUES('296','青岛市','96');--
INSERT INTO `cmseasy_b_area` VALUES('297','淄博市','96');--
INSERT INTO `cmseasy_b_area` VALUES('298','枣庄市','96');--
INSERT INTO `cmseasy_b_area` VALUES('299','东营市','96');--
INSERT INTO `cmseasy_b_area` VALUES('300','潍坊市','96');--
INSERT INTO `cmseasy_b_area` VALUES('301','烟台市','96');--
INSERT INTO `cmseasy_b_area` VALUES('302','威海市','96');--
INSERT INTO `cmseasy_b_area` VALUES('303','济宁市','96');--
INSERT INTO `cmseasy_b_area` VALUES('304','泰安市','96');--
INSERT INTO `cmseasy_b_area` VALUES('305','日照市','96');--
INSERT INTO `cmseasy_b_area` VALUES('306','莱芜市','96');--
INSERT INTO `cmseasy_b_area` VALUES('307','临沂市','96');--
INSERT INTO `cmseasy_b_area` VALUES('308','德州市','96');--
INSERT INTO `cmseasy_b_area` VALUES('309','聊城市','96');--
INSERT INTO `cmseasy_b_area` VALUES('310','滨州市','96');--
INSERT INTO `cmseasy_b_area` VALUES('311','菏泽市','96');--
INSERT INTO `cmseasy_b_area` VALUES('312','南京市','91');--
INSERT INTO `cmseasy_b_area` VALUES('313','徐州市','91');--
INSERT INTO `cmseasy_b_area` VALUES('314','连云港市','91');--
INSERT INTO `cmseasy_b_area` VALUES('315','淮安市','91');--
INSERT INTO `cmseasy_b_area` VALUES('316','宿迁市','91');--
INSERT INTO `cmseasy_b_area` VALUES('317','盐城市','91');--
INSERT INTO `cmseasy_b_area` VALUES('318','扬州市','91');--
INSERT INTO `cmseasy_b_area` VALUES('319','泰州市','91');--
INSERT INTO `cmseasy_b_area` VALUES('320','南通市','91');--
INSERT INTO `cmseasy_b_area` VALUES('321','镇江市','91');--
INSERT INTO `cmseasy_b_area` VALUES('322','常州市','91');--
INSERT INTO `cmseasy_b_area` VALUES('323','无锡市','91');--
INSERT INTO `cmseasy_b_area` VALUES('324','苏州市','91');--
INSERT INTO `cmseasy_b_area` VALUES('325','合肥市','93');--
INSERT INTO `cmseasy_b_area` VALUES('326','芜湖市','93');--
INSERT INTO `cmseasy_b_area` VALUES('327','蚌埠市','93');--
INSERT INTO `cmseasy_b_area` VALUES('328','淮南市','93');--
INSERT INTO `cmseasy_b_area` VALUES('329','马鞍山市','93');--
INSERT INTO `cmseasy_b_area` VALUES('330','淮北市','93');--
INSERT INTO `cmseasy_b_area` VALUES('331','铜陵市','93');--
INSERT INTO `cmseasy_b_area` VALUES('332','安庆市','93');--
INSERT INTO `cmseasy_b_area` VALUES('333','黄山市','93');--
INSERT INTO `cmseasy_b_area` VALUES('334','滁州市','93');--
INSERT INTO `cmseasy_b_area` VALUES('335','阜阳市','93');--
INSERT INTO `cmseasy_b_area` VALUES('336','宿州市','93');--
INSERT INTO `cmseasy_b_area` VALUES('337','巢湖市','93');--
INSERT INTO `cmseasy_b_area` VALUES('338','六安市','93');--
INSERT INTO `cmseasy_b_area` VALUES('339','亳州市','93');--
INSERT INTO `cmseasy_b_area` VALUES('340','池州市','93');--
INSERT INTO `cmseasy_b_area` VALUES('341','宣城市','93');--
INSERT INTO `cmseasy_b_area` VALUES('342','南昌市','95');--
INSERT INTO `cmseasy_b_area` VALUES('343','景德镇市','95');--
INSERT INTO `cmseasy_b_area` VALUES('344','萍乡市','95');--
INSERT INTO `cmseasy_b_area` VALUES('345','九江市','95');--
INSERT INTO `cmseasy_b_area` VALUES('346','新余市','95');--
INSERT INTO `cmseasy_b_area` VALUES('347','鹰潭市','95');--
INSERT INTO `cmseasy_b_area` VALUES('348','赣州市','95');--
INSERT INTO `cmseasy_b_area` VALUES('349','吉安市','95');--
INSERT INTO `cmseasy_b_area` VALUES('350','宜春市','95');--
INSERT INTO `cmseasy_b_area` VALUES('351','抚州市','95');--
INSERT INTO `cmseasy_b_area` VALUES('352','上饶市','95');--
INSERT INTO `cmseasy_b_area` VALUES('353','杭州市','92');--
INSERT INTO `cmseasy_b_area` VALUES('354','宁波市','92');--
INSERT INTO `cmseasy_b_area` VALUES('355','温州市','92');--
INSERT INTO `cmseasy_b_area` VALUES('356','嘉兴市','92');--
INSERT INTO `cmseasy_b_area` VALUES('357','湖州市','92');--
INSERT INTO `cmseasy_b_area` VALUES('358','绍兴市','92');--
INSERT INTO `cmseasy_b_area` VALUES('359','金华市','92');--
INSERT INTO `cmseasy_b_area` VALUES('360','衢州市','92');--
INSERT INTO `cmseasy_b_area` VALUES('361','舟山市','92');--
INSERT INTO `cmseasy_b_area` VALUES('362','台州市','92');--
INSERT INTO `cmseasy_b_area` VALUES('363','丽水市','92');--
INSERT INTO `cmseasy_b_area` VALUES('364','福州市','94');--
INSERT INTO `cmseasy_b_area` VALUES('365','厦门市','94');--
INSERT INTO `cmseasy_b_area` VALUES('366','三明市','94');--
INSERT INTO `cmseasy_b_area` VALUES('367','莆田市','94');--
INSERT INTO `cmseasy_b_area` VALUES('368','泉州市','94');--
INSERT INTO `cmseasy_b_area` VALUES('369','漳州市','94');--
INSERT INTO `cmseasy_b_area` VALUES('370','南平市','94');--
INSERT INTO `cmseasy_b_area` VALUES('371','龙岩市','94');--
INSERT INTO `cmseasy_b_area` VALUES('372','宁德市','94');--
INSERT INTO `cmseasy_b_area` VALUES('373','广州市','100');--
INSERT INTO `cmseasy_b_area` VALUES('374','深圳市','100');--
INSERT INTO `cmseasy_b_area` VALUES('375','珠海市','100');--
INSERT INTO `cmseasy_b_area` VALUES('376','汕头市','100');--
INSERT INTO `cmseasy_b_area` VALUES('377','韶关市','100');--
INSERT INTO `cmseasy_b_area` VALUES('378','惠州市','100');--
INSERT INTO `cmseasy_b_area` VALUES('379','河源市','100');--
INSERT INTO `cmseasy_b_area` VALUES('380','梅州市','100');--
INSERT INTO `cmseasy_b_area` VALUES('381','汕尾市','100');--
INSERT INTO `cmseasy_b_area` VALUES('382','东莞市','100');--
INSERT INTO `cmseasy_b_area` VALUES('383','中山市','100');--
INSERT INTO `cmseasy_b_area` VALUES('384','江门市','100');--
INSERT INTO `cmseasy_b_area` VALUES('385','佛山市','100');--
INSERT INTO `cmseasy_b_area` VALUES('386','阳江市','100');--
INSERT INTO `cmseasy_b_area` VALUES('387','湛江市','100');--
INSERT INTO `cmseasy_b_area` VALUES('388','茂名市','100');--
INSERT INTO `cmseasy_b_area` VALUES('389','肇庆市','100');--
INSERT INTO `cmseasy_b_area` VALUES('390','清远市','100');--
INSERT INTO `cmseasy_b_area` VALUES('391','潮州市','100');--
INSERT INTO `cmseasy_b_area` VALUES('392','揭阳市','100');--
INSERT INTO `cmseasy_b_area` VALUES('393','云浮市','100');--
INSERT INTO `cmseasy_b_area` VALUES('394','海口市','102');--
INSERT INTO `cmseasy_b_area` VALUES('395','三亚市','102');--
INSERT INTO `cmseasy_b_area` VALUES('396','省直辖行政单位','102');--
INSERT INTO `cmseasy_b_area` VALUES('397','贵阳市','105');--
INSERT INTO `cmseasy_b_area` VALUES('398','六盘水市','105');--
INSERT INTO `cmseasy_b_area` VALUES('399','遵义市','105');--
INSERT INTO `cmseasy_b_area` VALUES('400','安顺市','105');--
INSERT INTO `cmseasy_b_area` VALUES('401','铜仁地区','105');--
INSERT INTO `cmseasy_b_area` VALUES('402','毕节地区','105');--
INSERT INTO `cmseasy_b_area` VALUES('403','黔西南布依族苗族自治州','105');--
INSERT INTO `cmseasy_b_area` VALUES('404','黔东南南苗族侗族自治州','105');--
INSERT INTO `cmseasy_b_area` VALUES('405','黔南布依族苗族自治州','105');--
INSERT INTO `cmseasy_b_area` VALUES('406','昆明市','106');--
INSERT INTO `cmseasy_b_area` VALUES('407','曲靖市','106');--
INSERT INTO `cmseasy_b_area` VALUES('408','玉溪市','106');--
INSERT INTO `cmseasy_b_area` VALUES('409','保山市','106');--
INSERT INTO `cmseasy_b_area` VALUES('410','昭通市','106');--
INSERT INTO `cmseasy_b_area` VALUES('411','思茅地区','106');--
INSERT INTO `cmseasy_b_area` VALUES('412','临沧地区','106');--
INSERT INTO `cmseasy_b_area` VALUES('413','丽江地区','106');--
INSERT INTO `cmseasy_b_area` VALUES('414','文山壮族苗族自治州','106');--
INSERT INTO `cmseasy_b_area` VALUES('415','红河哈尼族彝族自治州','106');--
INSERT INTO `cmseasy_b_area` VALUES('416','西双版纳傣族自治州','106');--
INSERT INTO `cmseasy_b_area` VALUES('417','楚雄彝族自治州','106');--
INSERT INTO `cmseasy_b_area` VALUES('418','大理白族自治州','106');--
INSERT INTO `cmseasy_b_area` VALUES('419','德宏傣族景颇族自治州','106');--
INSERT INTO `cmseasy_b_area` VALUES('420','怒江傈僳族自治州','106');--
INSERT INTO `cmseasy_b_area` VALUES('421','迪庆藏族自治州','106');--
INSERT INTO `cmseasy_b_area` VALUES('422','成都市','104');--
INSERT INTO `cmseasy_b_area` VALUES('423','自贡市','104');--
INSERT INTO `cmseasy_b_area` VALUES('424','攀枝花市','104');--
INSERT INTO `cmseasy_b_area` VALUES('425','泸州市','104');--
INSERT INTO `cmseasy_b_area` VALUES('426','德阳市','104');--
INSERT INTO `cmseasy_b_area` VALUES('427','绵阳市','104');--
INSERT INTO `cmseasy_b_area` VALUES('428','广元市','104');--
INSERT INTO `cmseasy_b_area` VALUES('429','遂宁市','104');--
INSERT INTO `cmseasy_b_area` VALUES('430','内江市','104');--
INSERT INTO `cmseasy_b_area` VALUES('431','乐山市','104');--
INSERT INTO `cmseasy_b_area` VALUES('432','南充市','104');--
INSERT INTO `cmseasy_b_area` VALUES('433','宜宾市','104');--
INSERT INTO `cmseasy_b_area` VALUES('434','广安市','104');--
INSERT INTO `cmseasy_b_area` VALUES('435','达州市','104');--
INSERT INTO `cmseasy_b_area` VALUES('436','眉山市','104');--
INSERT INTO `cmseasy_b_area` VALUES('437','雅安市','104');--
INSERT INTO `cmseasy_b_area` VALUES('438','巴中市','104');--
INSERT INTO `cmseasy_b_area` VALUES('439','资阳市','104');--
INSERT INTO `cmseasy_b_area` VALUES('440','阿坝藏族羌族自治州','104');--
INSERT INTO `cmseasy_b_area` VALUES('441','甘孜藏族自治州','104');--
INSERT INTO `cmseasy_b_area` VALUES('442','凉山彝族自治州','104');--
INSERT INTO `cmseasy_b_area` VALUES('443','长沙市','99');--
INSERT INTO `cmseasy_b_area` VALUES('444','株洲市','99');--
INSERT INTO `cmseasy_b_area` VALUES('445','湘潭市','99');--
INSERT INTO `cmseasy_b_area` VALUES('446','衡阳市','99');--
INSERT INTO `cmseasy_b_area` VALUES('447','邵阳市','99');--
INSERT INTO `cmseasy_b_area` VALUES('448','岳阳市','99');--
INSERT INTO `cmseasy_b_area` VALUES('449','常德市','99');--
INSERT INTO `cmseasy_b_area` VALUES('450','张家界市','99');--
INSERT INTO `cmseasy_b_area` VALUES('451','益阳市','99');--
INSERT INTO `cmseasy_b_area` VALUES('452','郴州市','99');--
INSERT INTO `cmseasy_b_area` VALUES('453','永州市','99');--
INSERT INTO `cmseasy_b_area` VALUES('454','怀化市','99');--
INSERT INTO `cmseasy_b_area` VALUES('455','娄底市','99');--
INSERT INTO `cmseasy_b_area` VALUES('456','湘西土家族苗族自治州','99');--
INSERT INTO `cmseasy_b_area` VALUES('457','武汉市','98');--
INSERT INTO `cmseasy_b_area` VALUES('458','黄石市','98');--
INSERT INTO `cmseasy_b_area` VALUES('459','襄樊市','98');--
INSERT INTO `cmseasy_b_area` VALUES('460','十堰市','98');--
INSERT INTO `cmseasy_b_area` VALUES('461','荆州市','98');--
INSERT INTO `cmseasy_b_area` VALUES('462','宜昌市','98');--
INSERT INTO `cmseasy_b_area` VALUES('463','荆门市','98');--
INSERT INTO `cmseasy_b_area` VALUES('464','鄂州市','98');--
INSERT INTO `cmseasy_b_area` VALUES('465','孝感市','98');--
INSERT INTO `cmseasy_b_area` VALUES('466','黄冈市','98');--
INSERT INTO `cmseasy_b_area` VALUES('467','咸宁市','98');--
INSERT INTO `cmseasy_b_area` VALUES('468','随州市','98');--
INSERT INTO `cmseasy_b_area` VALUES('469','恩施土家族苗族自治州','98');--
INSERT INTO `cmseasy_b_area` VALUES('470','省直辖行政单位','98');--
INSERT INTO `cmseasy_b_area` VALUES('471','西安市','108');--
INSERT INTO `cmseasy_b_area` VALUES('472','铜川市','108');--
INSERT INTO `cmseasy_b_area` VALUES('473','宝鸡市','108');--
INSERT INTO `cmseasy_b_area` VALUES('474','咸阳市','108');--
INSERT INTO `cmseasy_b_area` VALUES('475','渭南市','108');--
INSERT INTO `cmseasy_b_area` VALUES('476','延安市','108');--
INSERT INTO `cmseasy_b_area` VALUES('477','汉中市','108');--
INSERT INTO `cmseasy_b_area` VALUES('478','榆林市','108');--
INSERT INTO `cmseasy_b_area` VALUES('479','安康市','108');--
INSERT INTO `cmseasy_b_area` VALUES('480','商洛市','108');--
INSERT INTO `cmseasy_b_area` VALUES('481','兰州市','109');--
INSERT INTO `cmseasy_b_area` VALUES('482','金昌市','109');--
INSERT INTO `cmseasy_b_area` VALUES('483','白银市','109');--
INSERT INTO `cmseasy_b_area` VALUES('484','天水市','109');--
INSERT INTO `cmseasy_b_area` VALUES('485','嘉峪关市','109');--
INSERT INTO `cmseasy_b_area` VALUES('486','武威市','109');--
INSERT INTO `cmseasy_b_area` VALUES('487','张掖市','109');--
INSERT INTO `cmseasy_b_area` VALUES('488','平凉市','109');--
INSERT INTO `cmseasy_b_area` VALUES('489','酒泉市','109');--
INSERT INTO `cmseasy_b_area` VALUES('490','庆阳市','109');--
INSERT INTO `cmseasy_b_area` VALUES('491','定西地区','109');--
INSERT INTO `cmseasy_b_area` VALUES('492','陇南地区','109');--
INSERT INTO `cmseasy_b_area` VALUES('493','甘南藏族自治州','109');--
INSERT INTO `cmseasy_b_area` VALUES('494','临夏回族自治州','109');--
INSERT INTO `cmseasy_b_area` VALUES('495','西宁市','110');--
INSERT INTO `cmseasy_b_area` VALUES('496','海东地区','110');--
INSERT INTO `cmseasy_b_area` VALUES('497','海北藏族自治州','110');--
INSERT INTO `cmseasy_b_area` VALUES('498','黄南藏族自治州','110');--
INSERT INTO `cmseasy_b_area` VALUES('499','海南藏族自治州','110');--
INSERT INTO `cmseasy_b_area` VALUES('500','果洛藏族自治州','110');--
INSERT INTO `cmseasy_b_area` VALUES('501','玉树藏族自治州','110');--
INSERT INTO `cmseasy_b_area` VALUES('502','海西蒙古族藏族自治州','110');--
INSERT INTO `cmseasy_b_area` VALUES('503','呼和浩特市','86');--
INSERT INTO `cmseasy_b_area` VALUES('504','包头市','86');--
INSERT INTO `cmseasy_b_area` VALUES('505','乌海市','86');--
INSERT INTO `cmseasy_b_area` VALUES('506','赤峰市','86');--
INSERT INTO `cmseasy_b_area` VALUES('507','通辽市','86');--
INSERT INTO `cmseasy_b_area` VALUES('508','鄂尔多斯市','86');--
INSERT INTO `cmseasy_b_area` VALUES('509','呼伦贝尔市','86');--
INSERT INTO `cmseasy_b_area` VALUES('510','乌兰察布盟','86');--
INSERT INTO `cmseasy_b_area` VALUES('511','锡林郭勒盟','86');--
INSERT INTO `cmseasy_b_area` VALUES('512','巴彦淖尔盟','86');--
INSERT INTO `cmseasy_b_area` VALUES('513','阿拉善盟','86');--
INSERT INTO `cmseasy_b_area` VALUES('514','兴安盟','86');--
INSERT INTO `cmseasy_b_area` VALUES('515','拉萨市','107');--
INSERT INTO `cmseasy_b_area` VALUES('516','那曲地区','107');--
INSERT INTO `cmseasy_b_area` VALUES('517','昌都地区','107');--
INSERT INTO `cmseasy_b_area` VALUES('518','山南地区','107');--
INSERT INTO `cmseasy_b_area` VALUES('519','日喀则地区','107');--
INSERT INTO `cmseasy_b_area` VALUES('520','阿里地区','107');--
INSERT INTO `cmseasy_b_area` VALUES('521','林芝地区','107');--
INSERT INTO `cmseasy_b_area` VALUES('522','乌鲁木齐市','112');--
INSERT INTO `cmseasy_b_area` VALUES('523','克拉玛依市','112');--
INSERT INTO `cmseasy_b_area` VALUES('524','吐鲁番地区','112');--
INSERT INTO `cmseasy_b_area` VALUES('525','哈密地区','112');--
INSERT INTO `cmseasy_b_area` VALUES('526','和田地区','112');--
INSERT INTO `cmseasy_b_area` VALUES('527','阿克苏地区','112');--
INSERT INTO `cmseasy_b_area` VALUES('528','喀什地区','112');--
INSERT INTO `cmseasy_b_area` VALUES('529','克孜勒苏柯尔克孜自治州','112');--
INSERT INTO `cmseasy_b_area` VALUES('530','巴音郭楞州','112');--
INSERT INTO `cmseasy_b_area` VALUES('531','昌吉州','112');--
INSERT INTO `cmseasy_b_area` VALUES('532','博尔塔拉州','112');--
INSERT INTO `cmseasy_b_area` VALUES('533','伊犁哈萨克自治州','112');--
INSERT INTO `cmseasy_b_area` VALUES('534','塔城地区','112');--
INSERT INTO `cmseasy_b_area` VALUES('535','阿勒泰州','112');--
INSERT INTO `cmseasy_b_area` VALUES('536','省直辖行政单位','112');--
INSERT INTO `cmseasy_b_area` VALUES('537','南宁市','101');--
INSERT INTO `cmseasy_b_area` VALUES('538','柳州市','101');--
INSERT INTO `cmseasy_b_area` VALUES('539','桂林市','101');--
INSERT INTO `cmseasy_b_area` VALUES('540','梧州市','101');--
INSERT INTO `cmseasy_b_area` VALUES('541','北海市','101');--
INSERT INTO `cmseasy_b_area` VALUES('542','防城港市','101');--
INSERT INTO `cmseasy_b_area` VALUES('543','钦州市','101');--
INSERT INTO `cmseasy_b_area` VALUES('544','贵港市','101');--
INSERT INTO `cmseasy_b_area` VALUES('545','玉林市','101');--
INSERT INTO `cmseasy_b_area` VALUES('546','百色市','101');--
INSERT INTO `cmseasy_b_area` VALUES('547','贺州市','101');--
INSERT INTO `cmseasy_b_area` VALUES('548','河池市','101');--
INSERT INTO `cmseasy_b_area` VALUES('549','来宾市','101');--
INSERT INTO `cmseasy_b_area` VALUES('550','崇左市','101');--
INSERT INTO `cmseasy_b_area` VALUES('551','银川市','111');--
INSERT INTO `cmseasy_b_area` VALUES('552','石嘴山市','111');--
INSERT INTO `cmseasy_b_area` VALUES('553','吴忠市','111');--
INSERT INTO `cmseasy_b_area` VALUES('554','固原市','111');--
INSERT INTO `cmseasy_b_area` VALUES('557','台北市','113');--
INSERT INTO `cmseasy_b_area` VALUES('558','高雄市','113');--
INSERT INTO `cmseasy_b_area` VALUES('559','基隆市','113');--
INSERT INTO `cmseasy_b_area` VALUES('560','台中市','113');--
INSERT INTO `cmseasy_b_area` VALUES('561','台南市','113');--
INSERT INTO `cmseasy_b_area` VALUES('562','新竹市','113');--
INSERT INTO `cmseasy_b_area` VALUES('563','嘉义市','113');--
INSERT INTO `cmseasy_b_area` VALUES('564','北县','113');--
INSERT INTO `cmseasy_b_area` VALUES('565','板桥市','113');--
INSERT INTO `cmseasy_b_area` VALUES('566','宜兰县','113');--
INSERT INTO `cmseasy_b_area` VALUES('567','宜兰市','113');--
INSERT INTO `cmseasy_b_area` VALUES('568','桃园县','113');--
INSERT INTO `cmseasy_b_area` VALUES('569','桃园市','113');--
INSERT INTO `cmseasy_b_area` VALUES('570','新竹县','113');--
INSERT INTO `cmseasy_b_area` VALUES('571','竹北市','113');--
INSERT INTO `cmseasy_b_area` VALUES('572','苗栗县','113');--
INSERT INTO `cmseasy_b_area` VALUES('573','苗栗市','113');--
INSERT INTO `cmseasy_b_area` VALUES('574','台中县','113');--
INSERT INTO `cmseasy_b_area` VALUES('575','丰原市','113');--
INSERT INTO `cmseasy_b_area` VALUES('576','彰化县','113');--
INSERT INTO `cmseasy_b_area` VALUES('577','彰化市','113');--
INSERT INTO `cmseasy_b_area` VALUES('578','南投县','113');--
INSERT INTO `cmseasy_b_area` VALUES('579','南投市','113');--
INSERT INTO `cmseasy_b_area` VALUES('580','云林县','113');--
INSERT INTO `cmseasy_b_area` VALUES('581','斗六市','113');--
INSERT INTO `cmseasy_b_area` VALUES('582','嘉义县','113');--
INSERT INTO `cmseasy_b_area` VALUES('583','太保市','113');--
INSERT INTO `cmseasy_b_area` VALUES('584','台南县','113');--
INSERT INTO `cmseasy_b_area` VALUES('585','新营市','113');--
INSERT INTO `cmseasy_b_area` VALUES('586','高雄县','113');--
INSERT INTO `cmseasy_b_area` VALUES('587','凤山市','113');--
INSERT INTO `cmseasy_b_area` VALUES('588','屏东县','113');--
INSERT INTO `cmseasy_b_area` VALUES('589','屏东市','113');--
INSERT INTO `cmseasy_b_area` VALUES('590','澎湖县','113');--
INSERT INTO `cmseasy_b_area` VALUES('591','马东市','113');--
INSERT INTO `cmseasy_b_area` VALUES('592','台东县','113');--
INSERT INTO `cmseasy_b_area` VALUES('593','台东市','113');--
INSERT INTO `cmseasy_b_area` VALUES('594','花莲县','113');--
INSERT INTO `cmseasy_b_area` VALUES('595','花莲市','113');--
INSERT INTO `cmseasy_b_area` VALUES('596','金门县','113');--
INSERT INTO `cmseasy_b_area` VALUES('597','连江县','113');--
INSERT INTO `cmseasy_b_area` VALUES('598','九龙城区','114');--
INSERT INTO `cmseasy_b_area` VALUES('599','观塘区','114');--
INSERT INTO `cmseasy_b_area` VALUES('600','深水埗区','114');--
INSERT INTO `cmseasy_b_area` VALUES('601','黄大仙区','114');--
INSERT INTO `cmseasy_b_area` VALUES('602','湾仔区','114');--
INSERT INTO `cmseasy_b_area` VALUES('603','油尖旺区','114');--
INSERT INTO `cmseasy_b_area` VALUES('604','离岛区','114');--
INSERT INTO `cmseasy_b_area` VALUES('605','葵青区','114');--
INSERT INTO `cmseasy_b_area` VALUES('606','西贡区','114');--
INSERT INTO `cmseasy_b_area` VALUES('607','沙田区','114');--
INSERT INTO `cmseasy_b_area` VALUES('608','屯门区','114');--
INSERT INTO `cmseasy_b_area` VALUES('609','大埔区','114');--
INSERT INTO `cmseasy_b_area` VALUES('610','荃湾区','114');--
INSERT INTO `cmseasy_b_area` VALUES('611','元朗区','114');--
INSERT INTO `cmseasy_b_area` VALUES('612','花王堂區','115');--
INSERT INTO `cmseasy_b_area` VALUES('613','望德堂區','115');--
INSERT INTO `cmseasy_b_area` VALUES('614','風順堂區','115');--
INSERT INTO `cmseasy_b_area` VALUES('615','大堂區','115');--
INSERT INTO `cmseasy_b_area` VALUES('616','花地瑪堂區','115');--
INSERT INTO `cmseasy_b_area` VALUES('617','嘉模堂區(氹仔)','115');--
INSERT INTO `cmseasy_b_area` VALUES('618','聖方濟各堂區(路環)','115');--
INSERT INTO `cmseasy_b_area` VALUES('619','芙蓉区','443');--
INSERT INTO `cmseasy_b_area` VALUES('620','岳麓区','443');--
INSERT INTO `cmseasy_b_area` VALUES('621','雨花区','443');--
INSERT INTO `cmseasy_b_area` VALUES('622','望城县','443');--
INSERT INTO `cmseasy_b_area` VALUES('623','浏阳市','443');--
INSERT INTO `cmseasy_b_area` VALUES('624','天心区','443');--
INSERT INTO `cmseasy_b_area` VALUES('625','开福区','443');--
INSERT INTO `cmseasy_b_area` VALUES('626','长沙县','443');--
INSERT INTO `cmseasy_b_area` VALUES('627','宁乡县','443');--
INSERT INTO `cmseasy_b_area` VALUES('629','荷塘区','444');--
INSERT INTO `cmseasy_b_area` VALUES('630','石峰区','444');--
INSERT INTO `cmseasy_b_area` VALUES('631','株洲县','444');--
INSERT INTO `cmseasy_b_area` VALUES('632','茶陵县','444');--
INSERT INTO `cmseasy_b_area` VALUES('633','醴陵市','444');--
INSERT INTO `cmseasy_b_area` VALUES('634','芦淞区','444');--
INSERT INTO `cmseasy_b_area` VALUES('635','天元区','444');--
INSERT INTO `cmseasy_b_area` VALUES('636','攸县','444');--
INSERT INTO `cmseasy_b_area` VALUES('637','炎陵县','444');--
INSERT INTO `cmseasy_b_area` VALUES('638','雨湖区','445');--
INSERT INTO `cmseasy_b_area` VALUES('639','湘潭县','445');--
INSERT INTO `cmseasy_b_area` VALUES('640','韶山市','445');--
INSERT INTO `cmseasy_b_area` VALUES('641','岳塘区','445');--
INSERT INTO `cmseasy_b_area` VALUES('642','湘乡市','445');--
INSERT INTO `cmseasy_b_area` VALUES('643','珠晖区','446');--
INSERT INTO `cmseasy_b_area` VALUES('644','石鼓区','446');--
INSERT INTO `cmseasy_b_area` VALUES('645','南岳区','446');--
INSERT INTO `cmseasy_b_area` VALUES('646','衡南县','446');--
INSERT INTO `cmseasy_b_area` VALUES('647','衡东县','446');--
INSERT INTO `cmseasy_b_area` VALUES('648','耒阳市','446');--
INSERT INTO `cmseasy_b_area` VALUES('649','常宁市','446');--
INSERT INTO `cmseasy_b_area` VALUES('650','雁峰区','446');--
INSERT INTO `cmseasy_b_area` VALUES('651','蒸湘区','446');--
INSERT INTO `cmseasy_b_area` VALUES('652','衡阳县','446');--
INSERT INTO `cmseasy_b_area` VALUES('653','衡山县','446');--
INSERT INTO `cmseasy_b_area` VALUES('654','祁东县','446');--
INSERT INTO `cmseasy_b_area` VALUES('655','双清区','447');--
INSERT INTO `cmseasy_b_area` VALUES('656','北塔区','447');--
INSERT INTO `cmseasy_b_area` VALUES('657','新邵县','447');--
INSERT INTO `cmseasy_b_area` VALUES('658','隆回县','447');--
INSERT INTO `cmseasy_b_area` VALUES('659','绥宁县','447');--
INSERT INTO `cmseasy_b_area` VALUES('660','城步苗族自治县','447');--
INSERT INTO `cmseasy_b_area` VALUES('661','武冈市','447');--
INSERT INTO `cmseasy_b_area` VALUES('662','大祥区','447');--
INSERT INTO `cmseasy_b_area` VALUES('663','邵东县','447');--
INSERT INTO `cmseasy_b_area` VALUES('664','邵阳县','447');--
INSERT INTO `cmseasy_b_area` VALUES('665','洞口县','447');--
INSERT INTO `cmseasy_b_area` VALUES('666','新宁县','447');--
INSERT INTO `cmseasy_b_area` VALUES('667','临湘市','448');--
INSERT INTO `cmseasy_b_area` VALUES('668','岳阳楼区','448');--
INSERT INTO `cmseasy_b_area` VALUES('669','君山区','448');--
INSERT INTO `cmseasy_b_area` VALUES('670','华容县','448');--
INSERT INTO `cmseasy_b_area` VALUES('671','平江县','448');--
INSERT INTO `cmseasy_b_area` VALUES('672','云溪区','448');--
INSERT INTO `cmseasy_b_area` VALUES('673','岳阳县','448');--
INSERT INTO `cmseasy_b_area` VALUES('674','湘阴县','448');--
INSERT INTO `cmseasy_b_area` VALUES('675','汨罗市','448');--
INSERT INTO `cmseasy_b_area` VALUES('676','武陵区','449');--
INSERT INTO `cmseasy_b_area` VALUES('677','安乡县','449');--
INSERT INTO `cmseasy_b_area` VALUES('678','澧县','449');--
INSERT INTO `cmseasy_b_area` VALUES('679','桃源县','449');--
INSERT INTO `cmseasy_b_area` VALUES('680','津市市','449');--
INSERT INTO `cmseasy_b_area` VALUES('681','鼎城区','449');--
INSERT INTO `cmseasy_b_area` VALUES('682','汉寿县','449');--
INSERT INTO `cmseasy_b_area` VALUES('683','临澧县','449');--
INSERT INTO `cmseasy_b_area` VALUES('684','石门县','449');--
INSERT INTO `cmseasy_b_area` VALUES('685','永定区','450');--
INSERT INTO `cmseasy_b_area` VALUES('686','慈利县','450');--
INSERT INTO `cmseasy_b_area` VALUES('687','桑植县','450');--
INSERT INTO `cmseasy_b_area` VALUES('688','武陵源区','450');--
INSERT INTO `cmseasy_b_area` VALUES('689','资阳区','451');--
INSERT INTO `cmseasy_b_area` VALUES('690','南县','451');--
INSERT INTO `cmseasy_b_area` VALUES('691','安化县','451');--
INSERT INTO `cmseasy_b_area` VALUES('692','沅江市','451');--
INSERT INTO `cmseasy_b_area` VALUES('693','赫山区','451');--
INSERT INTO `cmseasy_b_area` VALUES('694','桃江县','451');--
INSERT INTO `cmseasy_b_area` VALUES('695','北湖区','452');--
INSERT INTO `cmseasy_b_area` VALUES('696','桂阳县','452');--
INSERT INTO `cmseasy_b_area` VALUES('697','永兴县','452');--
INSERT INTO `cmseasy_b_area` VALUES('698','临武县','452');--
INSERT INTO `cmseasy_b_area` VALUES('699','桂东县','452');--
INSERT INTO `cmseasy_b_area` VALUES('700','资兴市','452');--
INSERT INTO `cmseasy_b_area` VALUES('701','苏仙区','452');--
INSERT INTO `cmseasy_b_area` VALUES('702','宜章县','452');--
INSERT INTO `cmseasy_b_area` VALUES('703','嘉禾县','452');--
INSERT INTO `cmseasy_b_area` VALUES('704','汝城县','452');--
INSERT INTO `cmseasy_b_area` VALUES('705','安仁县','452');--
INSERT INTO `cmseasy_b_area` VALUES('706','芝山区','453');--
INSERT INTO `cmseasy_b_area` VALUES('707','祁阳县','453');--
INSERT INTO `cmseasy_b_area` VALUES('708','双牌县','453');--
INSERT INTO `cmseasy_b_area` VALUES('709','江永县','453');--
INSERT INTO `cmseasy_b_area` VALUES('710','蓝山县','453');--
INSERT INTO `cmseasy_b_area` VALUES('711','江华瑶族自治县','453');--
INSERT INTO `cmseasy_b_area` VALUES('712','冷水滩区','453');--
INSERT INTO `cmseasy_b_area` VALUES('713','东安县','453');--
INSERT INTO `cmseasy_b_area` VALUES('714','道县','453');--
INSERT INTO `cmseasy_b_area` VALUES('715','宁远县','453');--
INSERT INTO `cmseasy_b_area` VALUES('716','新田县','453');--
INSERT INTO `cmseasy_b_area` VALUES('717','鹤城区','454');--
INSERT INTO `cmseasy_b_area` VALUES('718','沅陵县','454');--
INSERT INTO `cmseasy_b_area` VALUES('719','溆浦县','454');--
INSERT INTO `cmseasy_b_area` VALUES('720','麻阳苗族自治县','454');--
INSERT INTO `cmseasy_b_area` VALUES('721','芷江侗族自治县','454');--
INSERT INTO `cmseasy_b_area` VALUES('722','通道侗族自治县','454');--
INSERT INTO `cmseasy_b_area` VALUES('723','洪江市','454');--
INSERT INTO `cmseasy_b_area` VALUES('724','中方县','454');--
INSERT INTO `cmseasy_b_area` VALUES('725','辰溪县','454');--
INSERT INTO `cmseasy_b_area` VALUES('726','会同县','454');--
INSERT INTO `cmseasy_b_area` VALUES('727','新晃侗族自治县','454');--
INSERT INTO `cmseasy_b_area` VALUES('728','靖州苗族侗族自治县','454');--
INSERT INTO `cmseasy_b_area` VALUES('729','娄星区','455');--
INSERT INTO `cmseasy_b_area` VALUES('730','新化县','455');--
INSERT INTO `cmseasy_b_area` VALUES('731','涟源市','455');--
INSERT INTO `cmseasy_b_area` VALUES('732','双峰县','455');--
INSERT INTO `cmseasy_b_area` VALUES('733','冷水江市','455');--
INSERT INTO `cmseasy_b_area` VALUES('734','吉首市','456');--
INSERT INTO `cmseasy_b_area` VALUES('735','凤凰县','456');--
INSERT INTO `cmseasy_b_area` VALUES('736','保靖县','456');--
INSERT INTO `cmseasy_b_area` VALUES('737','永顺县','456');--
INSERT INTO `cmseasy_b_area` VALUES('738','龙山县','456');--
INSERT INTO `cmseasy_b_area` VALUES('739','泸溪县','456');--
INSERT INTO `cmseasy_b_area` VALUES('740','花垣县','456');--
INSERT INTO `cmseasy_b_area` VALUES('741','古丈县','456');--
INSERT INTO `cmseasy_b_area` VALUES('742','和平区','221');--
INSERT INTO `cmseasy_b_area` VALUES('743','大东区','221');--
INSERT INTO `cmseasy_b_area` VALUES('744','铁西区','221');--
INSERT INTO `cmseasy_b_area` VALUES('745','东陵区','221');--
INSERT INTO `cmseasy_b_area` VALUES('746','于洪区','221');--
INSERT INTO `cmseasy_b_area` VALUES('747','康平县','221');--
INSERT INTO `cmseasy_b_area` VALUES('748','新民市','221');--
INSERT INTO `cmseasy_b_area` VALUES('749','沈河区','221');--
INSERT INTO `cmseasy_b_area` VALUES('750','皇姑区','221');--
INSERT INTO `cmseasy_b_area` VALUES('751','苏家屯区','221');--
INSERT INTO `cmseasy_b_area` VALUES('752','新城子区','221');--
INSERT INTO `cmseasy_b_area` VALUES('753','辽中县','221');--
INSERT INTO `cmseasy_b_area` VALUES('754','法库县','221');--
INSERT INTO `cmseasy_b_area` VALUES('755','中山区','222');--
INSERT INTO `cmseasy_b_area` VALUES('756','沙河口区','222');--
INSERT INTO `cmseasy_b_area` VALUES('757','旅顺口区','222');--
INSERT INTO `cmseasy_b_area` VALUES('758','长海县','222');--
INSERT INTO `cmseasy_b_area` VALUES('759','普兰店市','222');--
INSERT INTO `cmseasy_b_area` VALUES('760','庄河市','222');--
INSERT INTO `cmseasy_b_area` VALUES('761','西岗区','222');--
INSERT INTO `cmseasy_b_area` VALUES('762','甘井子区','222');--
INSERT INTO `cmseasy_b_area` VALUES('763','金州区','222');--
INSERT INTO `cmseasy_b_area` VALUES('764','瓦房店市','222');--
INSERT INTO `cmseasy_b_area` VALUES('765','铁东区','223');--
INSERT INTO `cmseasy_b_area` VALUES('766','立山区','223');--
INSERT INTO `cmseasy_b_area` VALUES('767','台安县','223');--
INSERT INTO `cmseasy_b_area` VALUES('768','海城市','223');--
INSERT INTO `cmseasy_b_area` VALUES('769','铁西区','223');--
INSERT INTO `cmseasy_b_area` VALUES('770','千山区','223');--
INSERT INTO `cmseasy_b_area` VALUES('771','岫岩满族自治县','223');--
INSERT INTO `cmseasy_b_area` VALUES('772','新抚区','224');--
INSERT INTO `cmseasy_b_area` VALUES('773','望花区','224');--
INSERT INTO `cmseasy_b_area` VALUES('774','抚顺县','224');--
INSERT INTO `cmseasy_b_area` VALUES('775','清原满族自治县','224');--
INSERT INTO `cmseasy_b_area` VALUES('776','东洲区','224');--
INSERT INTO `cmseasy_b_area` VALUES('777','顺城区','224');--
INSERT INTO `cmseasy_b_area` VALUES('778','新宾满族自治县','224');--
INSERT INTO `cmseasy_b_area` VALUES('779','平山区','225');--
INSERT INTO `cmseasy_b_area` VALUES('780','明山区','225');--
INSERT INTO `cmseasy_b_area` VALUES('781','本溪满族自治县','225');--
INSERT INTO `cmseasy_b_area` VALUES('782','桓仁满族自治县','225');--
INSERT INTO `cmseasy_b_area` VALUES('783','溪湖区','225');--
INSERT INTO `cmseasy_b_area` VALUES('784','南芬区','225');--
INSERT INTO `cmseasy_b_area` VALUES('785','元宝区','226');--
INSERT INTO `cmseasy_b_area` VALUES('786','振安区','226');--
INSERT INTO `cmseasy_b_area` VALUES('787','东港市','226');--
INSERT INTO `cmseasy_b_area` VALUES('788','凤城市','226');--
INSERT INTO `cmseasy_b_area` VALUES('789','振兴区','226');--
INSERT INTO `cmseasy_b_area` VALUES('790','宽甸满族自治县','226');--
INSERT INTO `cmseasy_b_area` VALUES('791','古塔区','227');--
INSERT INTO `cmseasy_b_area` VALUES('792','太和区','227');--
INSERT INTO `cmseasy_b_area` VALUES('793','义县','227');--
INSERT INTO `cmseasy_b_area` VALUES('794','北宁市','227');--
INSERT INTO `cmseasy_b_area` VALUES('795','凌河区','227');--
INSERT INTO `cmseasy_b_area` VALUES('796','黑山县','227');--
INSERT INTO `cmseasy_b_area` VALUES('797','凌海市','227');--
INSERT INTO `cmseasy_b_area` VALUES('798','连山区','228');--
INSERT INTO `cmseasy_b_area` VALUES('799','南票区','228');--
INSERT INTO `cmseasy_b_area` VALUES('800','建昌县','228');--
INSERT INTO `cmseasy_b_area` VALUES('801','兴城市','228');--
INSERT INTO `cmseasy_b_area` VALUES('802','龙港区','228');--
INSERT INTO `cmseasy_b_area` VALUES('803','绥中县','228');--
INSERT INTO `cmseasy_b_area` VALUES('804','站前区','229');--
INSERT INTO `cmseasy_b_area` VALUES('805','鲅鱼圈区','229');--
INSERT INTO `cmseasy_b_area` VALUES('806','盖州市','229');--
INSERT INTO `cmseasy_b_area` VALUES('807','大石桥市','229');--
INSERT INTO `cmseasy_b_area` VALUES('808','西市区','229');--
INSERT INTO `cmseasy_b_area` VALUES('809','老边区','229');--
INSERT INTO `cmseasy_b_area` VALUES('810','双台子区','230');--
INSERT INTO `cmseasy_b_area` VALUES('811','大洼县','230');--
INSERT INTO `cmseasy_b_area` VALUES('812','盘山县','230');--
INSERT INTO `cmseasy_b_area` VALUES('813','兴隆台区','230');--
INSERT INTO `cmseasy_b_area` VALUES('814','海州区','231');--
INSERT INTO `cmseasy_b_area` VALUES('815','太平区','231');--
INSERT INTO `cmseasy_b_area` VALUES('816','细河区','231');--
INSERT INTO `cmseasy_b_area` VALUES('817','彰武县','231');--
INSERT INTO `cmseasy_b_area` VALUES('818','新邱区','231');--
INSERT INTO `cmseasy_b_area` VALUES('819','清河门区','231');--
INSERT INTO `cmseasy_b_area` VALUES('820','阜新蒙古族自治县','231');--
INSERT INTO `cmseasy_b_area` VALUES('821','白塔区','232');--
INSERT INTO `cmseasy_b_area` VALUES('822','宏伟区','232');--
INSERT INTO `cmseasy_b_area` VALUES('823','太子河区','232');--
INSERT INTO `cmseasy_b_area` VALUES('824','灯塔市','232');--
INSERT INTO `cmseasy_b_area` VALUES('825','文圣区','232');--
INSERT INTO `cmseasy_b_area` VALUES('826','弓长岭区','232');--
INSERT INTO `cmseasy_b_area` VALUES('827','辽阳县','232');--
INSERT INTO `cmseasy_b_area` VALUES('828','银州区','233');--
INSERT INTO `cmseasy_b_area` VALUES('829','铁岭县','233');--
INSERT INTO `cmseasy_b_area` VALUES('830','昌图县','233');--
INSERT INTO `cmseasy_b_area` VALUES('831','开原市','233');--
INSERT INTO `cmseasy_b_area` VALUES('832','清河区','233');--
INSERT INTO `cmseasy_b_area` VALUES('833','西丰县','233');--
INSERT INTO `cmseasy_b_area` VALUES('834','双塔区','234');--
INSERT INTO `cmseasy_b_area` VALUES('835','朝阳县','234');--
INSERT INTO `cmseasy_b_area` VALUES('836','喀喇沁左翼蒙古族自治县','234');--
INSERT INTO `cmseasy_b_area` VALUES('837','凌源市','234');--
INSERT INTO `cmseasy_b_area` VALUES('838','龙城区','234');--
INSERT INTO `cmseasy_b_area` VALUES('839','建平县','234');--
INSERT INTO `cmseasy_b_area` VALUES('840','北票市','234');--
INSERT INTO `cmseasy_b_area` VALUES('841','南关区','235');--
INSERT INTO `cmseasy_b_area` VALUES('842','朝阳区','235');--
INSERT INTO `cmseasy_b_area` VALUES('843','绿园区','235');--
INSERT INTO `cmseasy_b_area` VALUES('844','农安县','235');--
INSERT INTO `cmseasy_b_area` VALUES('845','榆树市','235');--
INSERT INTO `cmseasy_b_area` VALUES('846','德惠市','235');--
INSERT INTO `cmseasy_b_area` VALUES('847','宽城区','235');--
INSERT INTO `cmseasy_b_area` VALUES('848','二道区','235');--
INSERT INTO `cmseasy_b_area` VALUES('849','双阳区','235');--
INSERT INTO `cmseasy_b_area` VALUES('850','九台市','235');--
INSERT INTO `cmseasy_b_area` VALUES('851','昌邑区','236');--
INSERT INTO `cmseasy_b_area` VALUES('852','船营区','236');--
INSERT INTO `cmseasy_b_area` VALUES('853','永吉县','236');--
INSERT INTO `cmseasy_b_area` VALUES('854','桦甸市','236');--
INSERT INTO `cmseasy_b_area` VALUES('855','磐石市','236');--
INSERT INTO `cmseasy_b_area` VALUES('856','龙潭区','236');--
INSERT INTO `cmseasy_b_area` VALUES('857','丰满区','236');--
INSERT INTO `cmseasy_b_area` VALUES('858','蛟河市','236');--
INSERT INTO `cmseasy_b_area` VALUES('859','舒兰市','236');--
INSERT INTO `cmseasy_b_area` VALUES('860','铁西区','237');--
INSERT INTO `cmseasy_b_area` VALUES('861','梨树县','237');--
INSERT INTO `cmseasy_b_area` VALUES('862','公主岭市','237');--
INSERT INTO `cmseasy_b_area` VALUES('863','双辽市','237');--
INSERT INTO `cmseasy_b_area` VALUES('864','铁东区','237');--
INSERT INTO `cmseasy_b_area` VALUES('865','伊通满族自治县','237');--
INSERT INTO `cmseasy_b_area` VALUES('866','龙山区','238');--
INSERT INTO `cmseasy_b_area` VALUES('867','东丰县','238');--
INSERT INTO `cmseasy_b_area` VALUES('868','东辽县','238');--
INSERT INTO `cmseasy_b_area` VALUES('869','西安区','238');--
INSERT INTO `cmseasy_b_area` VALUES('870','东昌区','239');--
INSERT INTO `cmseasy_b_area` VALUES('871','通化县','239');--
INSERT INTO `cmseasy_b_area` VALUES('872','柳河县','239');--
INSERT INTO `cmseasy_b_area` VALUES('873','集安市','239');--
INSERT INTO `cmseasy_b_area` VALUES('874','二道江区','239');--
INSERT INTO `cmseasy_b_area` VALUES('875','辉南县','239');--
INSERT INTO `cmseasy_b_area` VALUES('876','梅河口市','239');--
INSERT INTO `cmseasy_b_area` VALUES('877','八道江区','240');--
INSERT INTO `cmseasy_b_area` VALUES('878','靖宇县','240');--
INSERT INTO `cmseasy_b_area` VALUES('879','江源县','240');--
INSERT INTO `cmseasy_b_area` VALUES('880','临江市','240');--
INSERT INTO `cmseasy_b_area` VALUES('881','抚松县','240');--
INSERT INTO `cmseasy_b_area` VALUES('882','长白朝鲜族自治县','240');--
INSERT INTO `cmseasy_b_area` VALUES('883','延吉市','241');--
INSERT INTO `cmseasy_b_area` VALUES('884','敦化市','241');--
INSERT INTO `cmseasy_b_area` VALUES('885','龙井市','241');--
INSERT INTO `cmseasy_b_area` VALUES('886','安图县','241');--
INSERT INTO `cmseasy_b_area` VALUES('887','汪清县','241');--
INSERT INTO `cmseasy_b_area` VALUES('888','图们市','241');--
INSERT INTO `cmseasy_b_area` VALUES('889','珲春市','241');--
INSERT INTO `cmseasy_b_area` VALUES('890','和龙市','241');--
INSERT INTO `cmseasy_b_area` VALUES('891','洮北区','242');--
INSERT INTO `cmseasy_b_area` VALUES('892','通榆县','242');--
INSERT INTO `cmseasy_b_area` VALUES('893','大安市','242');--
INSERT INTO `cmseasy_b_area` VALUES('894','镇赉县','242');--
INSERT INTO `cmseasy_b_area` VALUES('895','洮南市','242');--
INSERT INTO `cmseasy_b_area` VALUES('896','宁江区','243');--
INSERT INTO `cmseasy_b_area` VALUES('897','长岭县','243');--
INSERT INTO `cmseasy_b_area` VALUES('898','扶余县','243');--
INSERT INTO `cmseasy_b_area` VALUES('899','前郭尔罗斯蒙古族自治县','243');--
INSERT INTO `cmseasy_b_area` VALUES('900','乾安县','243');--
INSERT INTO `cmseasy_b_area` VALUES('901','道里区','244');--
INSERT INTO `cmseasy_b_area` VALUES('902','道外区','244');--
INSERT INTO `cmseasy_b_area` VALUES('903','动力区','244');--
INSERT INTO `cmseasy_b_area` VALUES('904','松北区','244');--
INSERT INTO `cmseasy_b_area` VALUES('905','依兰县','244');--
INSERT INTO `cmseasy_b_area` VALUES('906','宾县','244');--
INSERT INTO `cmseasy_b_area` VALUES('907','木兰县','244');--
INSERT INTO `cmseasy_b_area` VALUES('908','延寿县','244');--
INSERT INTO `cmseasy_b_area` VALUES('909','双城市','244');--
INSERT INTO `cmseasy_b_area` VALUES('910','五常市','244');--
INSERT INTO `cmseasy_b_area` VALUES('911','南岗区','244');--
INSERT INTO `cmseasy_b_area` VALUES('912','香坊区','244');--
INSERT INTO `cmseasy_b_area` VALUES('913','平房区','244');--
INSERT INTO `cmseasy_b_area` VALUES('914','呼兰区','244');--
INSERT INTO `cmseasy_b_area` VALUES('915','方正县','244');--
INSERT INTO `cmseasy_b_area` VALUES('916','巴彦县','244');--
INSERT INTO `cmseasy_b_area` VALUES('917','通河县','244');--
INSERT INTO `cmseasy_b_area` VALUES('918','阿城市','244');--
INSERT INTO `cmseasy_b_area` VALUES('919','尚志市','244');--
INSERT INTO `cmseasy_b_area` VALUES('920','龙沙区','245');--
INSERT INTO `cmseasy_b_area` VALUES('921','铁锋区','245');--
INSERT INTO `cmseasy_b_area` VALUES('922','富拉尔基区','245');--
INSERT INTO `cmseasy_b_area` VALUES('923','梅里斯达斡尔族区','245');--
INSERT INTO `cmseasy_b_area` VALUES('924','依安县','245');--
INSERT INTO `cmseasy_b_area` VALUES('925','甘南县','245');--
INSERT INTO `cmseasy_b_area` VALUES('926','克山县','245');--
INSERT INTO `cmseasy_b_area` VALUES('927','拜泉县','245');--
INSERT INTO `cmseasy_b_area` VALUES('928','建华区','245');--
INSERT INTO `cmseasy_b_area` VALUES('929','昂昂溪区','245');--
INSERT INTO `cmseasy_b_area` VALUES('930','碾子山区','245');--
INSERT INTO `cmseasy_b_area` VALUES('931','龙江县','245');--
INSERT INTO `cmseasy_b_area` VALUES('932','泰来县','245');--
INSERT INTO `cmseasy_b_area` VALUES('933','富裕县','245');--
INSERT INTO `cmseasy_b_area` VALUES('934','克东县','245');--
INSERT INTO `cmseasy_b_area` VALUES('935','讷河市','245');--
INSERT INTO `cmseasy_b_area` VALUES('936','向阳区','246');--
INSERT INTO `cmseasy_b_area` VALUES('937','南山区','246');--
INSERT INTO `cmseasy_b_area` VALUES('938','东山区','246');--
INSERT INTO `cmseasy_b_area` VALUES('939','萝北县','246');--
INSERT INTO `cmseasy_b_area` VALUES('940','工农区','246');--
INSERT INTO `cmseasy_b_area` VALUES('941','兴安区','246');--
INSERT INTO `cmseasy_b_area` VALUES('942','兴山区','246');--
INSERT INTO `cmseasy_b_area` VALUES('943','绥滨县','246');--
INSERT INTO `cmseasy_b_area` VALUES('944','尖山区','247');--
INSERT INTO `cmseasy_b_area` VALUES('945','四方台区','247');--
INSERT INTO `cmseasy_b_area` VALUES('946','集贤县','247');--
INSERT INTO `cmseasy_b_area` VALUES('947','宝清县','247');--
INSERT INTO `cmseasy_b_area` VALUES('948','岭东区','247');--
INSERT INTO `cmseasy_b_area` VALUES('949','宝山区','247');--
INSERT INTO `cmseasy_b_area` VALUES('950','友谊县','247');--
INSERT INTO `cmseasy_b_area` VALUES('951','饶河县','247');--
INSERT INTO `cmseasy_b_area` VALUES('952','鸡冠区','248');--
INSERT INTO `cmseasy_b_area` VALUES('953','滴道区','248');--
INSERT INTO `cmseasy_b_area` VALUES('954','城子河区','248');--
INSERT INTO `cmseasy_b_area` VALUES('955','鸡东县','248');--
INSERT INTO `cmseasy_b_area` VALUES('956','密山市','248');--
INSERT INTO `cmseasy_b_area` VALUES('957','恒山区','248');--
INSERT INTO `cmseasy_b_area` VALUES('958','梨树区','248');--
INSERT INTO `cmseasy_b_area` VALUES('959','麻山区','248');--
INSERT INTO `cmseasy_b_area` VALUES('960','虎林市','248');--
INSERT INTO `cmseasy_b_area` VALUES('961','萨尔图区','249');--
INSERT INTO `cmseasy_b_area` VALUES('962','让胡路区','249');--
INSERT INTO `cmseasy_b_area` VALUES('963','大同区','249');--
INSERT INTO `cmseasy_b_area` VALUES('964','肇源县','249');--
INSERT INTO `cmseasy_b_area` VALUES('965','杜尔伯特蒙古族自治县','249');--
INSERT INTO `cmseasy_b_area` VALUES('966','龙凤区','249');--
INSERT INTO `cmseasy_b_area` VALUES('967','红岗区','249');--
INSERT INTO `cmseasy_b_area` VALUES('968','肇州县','249');--
INSERT INTO `cmseasy_b_area` VALUES('969','林甸县','249');--
INSERT INTO `cmseasy_b_area` VALUES('970','伊春区','250');--
INSERT INTO `cmseasy_b_area` VALUES('971','友好区','250');--
INSERT INTO `cmseasy_b_area` VALUES('972','翠峦区','250');--
INSERT INTO `cmseasy_b_area` VALUES('973','美溪区','250');--
INSERT INTO `cmseasy_b_area` VALUES('974','五营区','250');--
INSERT INTO `cmseasy_b_area` VALUES('975','汤旺河区','250');--
INSERT INTO `cmseasy_b_area` VALUES('976','乌伊岭区','250');--
INSERT INTO `cmseasy_b_area` VALUES('977','上甘岭区','250');--
INSERT INTO `cmseasy_b_area` VALUES('978','铁力市','250');--
INSERT INTO `cmseasy_b_area` VALUES('979','南岔区','250');--
INSERT INTO `cmseasy_b_area` VALUES('980','西\r\n\r\n林区','250');--
INSERT INTO `cmseasy_b_area` VALUES('981','新青区','250');--
INSERT INTO `cmseasy_b_area` VALUES('982','金山屯区','250');--
INSERT INTO `cmseasy_b_area` VALUES('983','乌马河区','250');--
INSERT INTO `cmseasy_b_area` VALUES('984','带岭区','250');--
INSERT INTO `cmseasy_b_area` VALUES('985','红星区','250');--
INSERT INTO `cmseasy_b_area` VALUES('986','嘉荫县','250');--
INSERT INTO `cmseasy_b_area` VALUES('987','东安区','251');--
INSERT INTO `cmseasy_b_area` VALUES('988','爱民区','251');--
INSERT INTO `cmseasy_b_area` VALUES('989','东宁县','251');--
INSERT INTO `cmseasy_b_area` VALUES('990','绥芬河市','251');--
INSERT INTO `cmseasy_b_area` VALUES('991','宁安市','251');--
INSERT INTO `cmseasy_b_area` VALUES('992','阳明区','251');--
INSERT INTO `cmseasy_b_area` VALUES('993','西安区','251');--
INSERT INTO `cmseasy_b_area` VALUES('994','林口县','251');--
INSERT INTO `cmseasy_b_area` VALUES('995','海林市','251');--
INSERT INTO `cmseasy_b_area` VALUES('996','穆棱市','251');--
INSERT INTO `cmseasy_b_area` VALUES('997','永红区','252');--
INSERT INTO `cmseasy_b_area` VALUES('998','前进区','252');--
INSERT INTO `cmseasy_b_area` VALUES('999','郊区','252');--
INSERT INTO `cmseasy_b_area` VALUES('1000','桦川县','252');--
INSERT INTO `cmseasy_b_area` VALUES('1001','抚远县','252');--
INSERT INTO `cmseasy_b_area` VALUES('1002','富锦市','252');--
INSERT INTO `cmseasy_b_area` VALUES('1003','向阳区','252');--
INSERT INTO `cmseasy_b_area` VALUES('1004','东风区','252');--
INSERT INTO `cmseasy_b_area` VALUES('1005','桦南县','252');--
INSERT INTO `cmseasy_b_area` VALUES('1006','汤原县','252');--
INSERT INTO `cmseasy_b_area` VALUES('1007','同江市','252');--
INSERT INTO `cmseasy_b_area` VALUES('1008','新兴区','253');--
INSERT INTO `cmseasy_b_area` VALUES('1009','桃山区','253');--
INSERT INTO `cmseasy_b_area` VALUES('1010','茄子河区','253');--
INSERT INTO `cmseasy_b_area` VALUES('1011','勃利县','253');--
INSERT INTO `cmseasy_b_area` VALUES('1012','爱辉区','254');--
INSERT INTO `cmseasy_b_area` VALUES('1013','逊克县','254');--
INSERT INTO `cmseasy_b_area` VALUES('1014','北安市','254');--
INSERT INTO `cmseasy_b_area` VALUES('1015','嫩江县','254');--
INSERT INTO `cmseasy_b_area` VALUES('1016','孙吴县','254');--
INSERT INTO `cmseasy_b_area` VALUES('1017','五大连池市','254');--
INSERT INTO `cmseasy_b_area` VALUES('1018','北林区','255');--
INSERT INTO `cmseasy_b_area` VALUES('1019','兰西县','255');--
INSERT INTO `cmseasy_b_area` VALUES('1020','庆安县','255');--
INSERT INTO `cmseasy_b_area` VALUES('1021','绥棱县','255');--
INSERT INTO `cmseasy_b_area` VALUES('1022','肇东市','255');--
INSERT INTO `cmseasy_b_area` VALUES('1023','望奎县','255');--
INSERT INTO `cmseasy_b_area` VALUES('1024','青冈县','255');--
INSERT INTO `cmseasy_b_area` VALUES('1025','明水县','255');--
INSERT INTO `cmseasy_b_area` VALUES('1026','安达市','255');--
INSERT INTO `cmseasy_b_area` VALUES('1027','海伦市','255');--
INSERT INTO `cmseasy_b_area` VALUES('1028','呼玛县','256');--
INSERT INTO `cmseasy_b_area` VALUES('1029','漠河县','256');--
INSERT INTO `cmseasy_b_area` VALUES('1030','塔河县','256');--
INSERT INTO `cmseasy_b_area` VALUES('1031','长安区','257');--
INSERT INTO `cmseasy_b_area` VALUES('1032','桥西区','257');--
INSERT INTO `cmseasy_b_area` VALUES('1033','井陉矿区','257');--
INSERT INTO `cmseasy_b_area` VALUES('1034','井陉县','257');--
INSERT INTO `cmseasy_b_area` VALUES('1035','栾城县','257');--
INSERT INTO `cmseasy_b_area` VALUES('1036','灵寿县','257');--
INSERT INTO `cmseasy_b_area` VALUES('1037','深泽县','257');--
INSERT INTO `cmseasy_b_area` VALUES('1038','无极县','257');--
INSERT INTO `cmseasy_b_area` VALUES('1039','元氏县','257');--
INSERT INTO `cmseasy_b_area` VALUES('1040','辛集市','257');--
INSERT INTO `cmseasy_b_area` VALUES('1041','晋州市','257');--
INSERT INTO `cmseasy_b_area` VALUES('1042','鹿泉市','257');--
INSERT INTO `cmseasy_b_area` VALUES('1043','桥东区','257');--
INSERT INTO `cmseasy_b_area` VALUES('1044','新华区','257');--
INSERT INTO `cmseasy_b_area` VALUES('1045','裕华区','257');--
INSERT INTO `cmseasy_b_area` VALUES('1046','正定县','257');--
INSERT INTO `cmseasy_b_area` VALUES('1047','行唐县','257');--
INSERT INTO `cmseasy_b_area` VALUES('1048','高邑县','257');--
INSERT INTO `cmseasy_b_area` VALUES('1049','赞皇县','257');--
INSERT INTO `cmseasy_b_area` VALUES('1050','平山县','257');--
INSERT INTO `cmseasy_b_area` VALUES('1051','赵县','257');--
INSERT INTO `cmseasy_b_area` VALUES('1052','藁城市','257');--
INSERT INTO `cmseasy_b_area` VALUES('1053','新乐市','257');--
INSERT INTO `cmseasy_b_area` VALUES('1054','路南区','258');--
INSERT INTO `cmseasy_b_area` VALUES('1055','古冶区','258');--
INSERT INTO `cmseasy_b_area` VALUES('1056','丰南区','258');--
INSERT INTO `cmseasy_b_area` VALUES('1057','滦县','258');--
INSERT INTO `cmseasy_b_area` VALUES('1058','乐亭县','258');--
INSERT INTO `cmseasy_b_area` VALUES('1059','玉田县','258');--
INSERT INTO `cmseasy_b_area` VALUES('1060','遵化市','258');--
INSERT INTO `cmseasy_b_area` VALUES('1061','路北区','258');--
INSERT INTO `cmseasy_b_area` VALUES('1062','开平区','258');--
INSERT INTO `cmseasy_b_area` VALUES('1063','丰润区','258');--
INSERT INTO `cmseasy_b_area` VALUES('1064','滦南县','258');--
INSERT INTO `cmseasy_b_area` VALUES('1065','迁西县','258');--
INSERT INTO `cmseasy_b_area` VALUES('1066','唐海县','258');--
INSERT INTO `cmseasy_b_area` VALUES('1067','迁安市','258');--
INSERT INTO `cmseasy_b_area` VALUES('1068','海港区','259');--
INSERT INTO `cmseasy_b_area` VALUES('1069','北戴河区','259');--
INSERT INTO `cmseasy_b_area` VALUES('1070','昌黎县','259');--
INSERT INTO `cmseasy_b_area` VALUES('1071','卢龙县','259');--
INSERT INTO `cmseasy_b_area` VALUES('1072','山海关区','259');--
INSERT INTO `cmseasy_b_area` VALUES('1073','青龙满族自治县','259');--
INSERT INTO `cmseasy_b_area` VALUES('1074','抚宁县','259');--
INSERT INTO `cmseasy_b_area` VALUES('1075','新华区','267');--
INSERT INTO `cmseasy_b_area` VALUES('1076','沧县','267');--
INSERT INTO `cmseasy_b_area` VALUES('1077','东光县','267');--
INSERT INTO `cmseasy_b_area` VALUES('1078','盐山县','267');--
INSERT INTO `cmseasy_b_area` VALUES('1079','南皮县','267');--
INSERT INTO `cmseasy_b_area` VALUES('1080','献县','267');--
INSERT INTO `cmseasy_b_area` VALUES('1081','泊头市','267');--
INSERT INTO `cmseasy_b_area` VALUES('1082','黄骅市','267');--
INSERT INTO `cmseasy_b_area` VALUES('1083','运河区','267');--
INSERT INTO `cmseasy_b_area` VALUES('1084','青县','267');--
INSERT INTO `cmseasy_b_area` VALUES('1085','海兴县','267');--
INSERT INTO `cmseasy_b_area` VALUES('1086','肃宁县','267');--
INSERT INTO `cmseasy_b_area` VALUES('1087','吴桥县','267');--
INSERT INTO `cmseasy_b_area` VALUES('1088','孟村回族自治县','267');--
INSERT INTO `cmseasy_b_area` VALUES('1089','任丘市','267');--
INSERT INTO `cmseasy_b_area` VALUES('1090','河间市','267');--
INSERT INTO `cmseasy_b_area` VALUES('1091','桃城区','266');--
INSERT INTO `cmseasy_b_area` VALUES('1092','武邑县','266');--
INSERT INTO `cmseasy_b_area` VALUES('1093','饶阳县','266');--
INSERT INTO `cmseasy_b_area` VALUES('1094','故城县','266');--
INSERT INTO `cmseasy_b_area` VALUES('1095','阜城县','266');--
INSERT INTO `cmseasy_b_area` VALUES('1096','深州市','266');--
INSERT INTO `cmseasy_b_area` VALUES('1097','枣强县','266');--
INSERT INTO `cmseasy_b_area` VALUES('1098','武强县','266');--
INSERT INTO `cmseasy_b_area` VALUES('1099','安平县','266');--
INSERT INTO `cmseasy_b_area` VALUES('1100','景县','266');--
INSERT INTO `cmseasy_b_area` VALUES('1101','冀州市','266');--
INSERT INTO `cmseasy_b_area` VALUES('1102','邯山区','260');--
INSERT INTO `cmseasy_b_area` VALUES('1103','复兴区','260');--
INSERT INTO `cmseasy_b_area` VALUES('1104','邯郸县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1105','成安县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1106','涉县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1107','肥乡县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1108','邱县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1109','广平县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1110','魏县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1111','武安市','260');--
INSERT INTO `cmseasy_b_area` VALUES('1112','丛台区','260');--
INSERT INTO `cmseasy_b_area` VALUES('1113','峰峰矿区','260');--
INSERT INTO `cmseasy_b_area` VALUES('1114','临漳县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1115','大名县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1116','磁县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1117','永年县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1118','鸡泽县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1119','馆陶县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1120','曲周县','260');--
INSERT INTO `cmseasy_b_area` VALUES('1121','桥东区','261');--
INSERT INTO `cmseasy_b_area` VALUES('1122','邢台县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1123','内丘县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1124','隆尧县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1125','南和县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1126','巨鹿县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1127','广宗县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1128','威县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1129','临西县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1130','沙河市','261');--
INSERT INTO `cmseasy_b_area` VALUES('1131','桥西区','261');--
INSERT INTO `cmseasy_b_area` VALUES('1132','临\r\n城县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1133','柏乡县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1134','任县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1135','宁晋县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1136','新河县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1137','平乡县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1138','清河县','261');--
INSERT INTO `cmseasy_b_area` VALUES('1139','南宫市','261');--
INSERT INTO `cmseasy_b_area` VALUES('1140','新市区','262');--
INSERT INTO `cmseasy_b_area` VALUES('1141','南市区','262');--
INSERT INTO `cmseasy_b_area` VALUES('1142','清苑县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1143','阜平县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1144','定兴县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1145','高阳县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1146','涞源县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1147','安新县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1148','曲阳县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1149','顺平县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1150','雄县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1151','定\r\n州市','262');--
INSERT INTO `cmseasy_b_area` VALUES('1152','高碑店市','262');--
INSERT INTO `cmseasy_b_area` VALUES('1153','北市区','262');--
INSERT INTO `cmseasy_b_area` VALUES('1154','满城县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1155','涞水县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1156','徐水县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1157','唐县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1158','容城县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1159','望都县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1160','易县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1161','蠡县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1162','博野县','262');--
INSERT INTO `cmseasy_b_area` VALUES('1163','涿州市','262');--
INSERT INTO `cmseasy_b_area` VALUES('1164','安国市','262');--
INSERT INTO `cmseasy_b_area` VALUES('1165','桥东区','263');--
INSERT INTO `cmseasy_b_area` VALUES('1166','宣化区','263');--
INSERT INTO `cmseasy_b_area` VALUES('1167','宣化县','263');--
INSERT INTO `cmseasy_b_area` VALUES('1168','康保县','263');--
INSERT INTO `cmseasy_b_area` VALUES('1169','尚义县','263');--
INSERT INTO `cmseasy_b_area` VALUES('1170','阳原县','263');--
INSERT INTO `cmseasy_b_area` VALUES('1171','万全县','263');--
INSERT INTO `cmseasy_b_area` VALUES('1172','涿鹿县','263');--
INSERT INTO `cmseasy_b_area` VALUES('1173','崇礼县','263');--
INSERT INTO `cmseasy_b_area` VALUES('1174','桥西区','263');--
INSERT INTO `cmseasy_b_area` VALUES('1175','下花园区','263');--
INSERT INTO `cmseasy_b_area` VALUES('1176','张北县','263');--
INSERT INTO `cmseasy_b_area` VALUES('1177','沽源县','263');--
INSERT INTO `cmseasy_b_area` VALUES('1178','蔚县','263');--
INSERT INTO `cmseasy_b_area` VALUES('1179','怀安县','263');--
INSERT INTO `cmseasy_b_area` VALUES('1180','怀来县','263');--
INSERT INTO `cmseasy_b_area` VALUES('1181','赤城县','263');--
INSERT INTO `cmseasy_b_area` VALUES('1182','双桥区','264');--
INSERT INTO `cmseasy_b_area` VALUES('1183','鹰手营子矿区','264');--
INSERT INTO `cmseasy_b_area` VALUES('1184','兴隆县','264');--
INSERT INTO `cmseasy_b_area` VALUES('1185','滦平县','264');--
INSERT INTO `cmseasy_b_area` VALUES('1186','丰宁满族自治县','264');--
INSERT INTO `cmseasy_b_area` VALUES('1187','围场满族蒙古族自治县','264');--
INSERT INTO `cmseasy_b_area` VALUES('1188','双滦区','264');--
INSERT INTO `cmseasy_b_area` VALUES('1189','承德县','264');--
INSERT INTO `cmseasy_b_area` VALUES('1190','平泉县','264');--
INSERT INTO `cmseasy_b_area` VALUES('1191','隆化县','264');--
INSERT INTO `cmseasy_b_area` VALUES('1192','宽城满族自治县','264');--
INSERT INTO `cmseasy_b_area` VALUES('1193','安次区','265');--
INSERT INTO `cmseasy_b_area` VALUES('1194','固安县','265');--
INSERT INTO `cmseasy_b_area` VALUES('1195','香河县','265');--
INSERT INTO `cmseasy_b_area` VALUES('1196','文安县','265');--
INSERT INTO `cmseasy_b_area` VALUES('1197','霸州市','265');--
INSERT INTO `cmseasy_b_area` VALUES('1198','广阳区','265');--
INSERT INTO `cmseasy_b_area` VALUES('1199','永清县','265');--
INSERT INTO `cmseasy_b_area` VALUES('1200','大城县','265');--
INSERT INTO `cmseasy_b_area` VALUES('1201','大厂回族自治县','265');--
INSERT INTO `cmseasy_b_area` VALUES('1202','三河市','265');--
INSERT INTO `cmseasy_b_area` VALUES('1203','小店区','268');--
INSERT INTO `cmseasy_b_area` VALUES('1204','杏花岭区','268');--
INSERT INTO `cmseasy_b_area` VALUES('1205','万柏林区','268');--
INSERT INTO `cmseasy_b_area` VALUES('1206','清徐县','268');--
INSERT INTO `cmseasy_b_area` VALUES('1207','娄烦县','268');--
INSERT INTO `cmseasy_b_area` VALUES('1208','古交市','268');--
INSERT INTO `cmseasy_b_area` VALUES('1209','迎泽区','268');--
INSERT INTO `cmseasy_b_area` VALUES('1210','尖草坪区','268');--
INSERT INTO `cmseasy_b_area` VALUES('1211','晋源区','268');--
INSERT INTO `cmseasy_b_area` VALUES('1212','阳曲县','268');--
INSERT INTO `cmseasy_b_area` VALUES('1213','城区','269');--
INSERT INTO `cmseasy_b_area` VALUES('1214','南郊区','269');--
INSERT INTO `cmseasy_b_area` VALUES('1215','阳高县','269');--
INSERT INTO `cmseasy_b_area` VALUES('1216','广灵县','269');--
INSERT INTO `cmseasy_b_area` VALUES('1217','浑源县','269');--
INSERT INTO `cmseasy_b_area` VALUES('1218','大同县','269');--
INSERT INTO `cmseasy_b_area` VALUES('1219','矿区','269');--
INSERT INTO `cmseasy_b_area` VALUES('1220','新荣区','269');--
INSERT INTO `cmseasy_b_area` VALUES('1221','天镇县','269');--
INSERT INTO `cmseasy_b_area` VALUES('1222','灵丘县','269');--
INSERT INTO `cmseasy_b_area` VALUES('1223','左云县','269');--
INSERT INTO `cmseasy_b_area` VALUES('1224','城区','270');--
INSERT INTO `cmseasy_b_area` VALUES('1225','郊区','270');--
INSERT INTO `cmseasy_b_area` VALUES('1226','盂县','270');--
INSERT INTO `cmseasy_b_area` VALUES('1227','矿区','270');--
INSERT INTO `cmseasy_b_area` VALUES('1228','平定县','270');--
INSERT INTO `cmseasy_b_area` VALUES('1229','城区','271');--
INSERT INTO `cmseasy_b_area` VALUES('1230','长治县','271');--
INSERT INTO `cmseasy_b_area` VALUES('1231','屯留县','271');--
INSERT INTO `cmseasy_b_area` VALUES('1232','黎城县','271');--
INSERT INTO `cmseasy_b_area` VALUES('1233','长子县','271');--
INSERT INTO `cmseasy_b_area` VALUES('1234','沁县','271');--
INSERT INTO `cmseasy_b_area` VALUES('1235','潞城市','271');--
INSERT INTO `cmseasy_b_area` VALUES('1236','郊区','271');--
INSERT INTO `cmseasy_b_area` VALUES('1237','襄垣县','271');--
INSERT INTO `cmseasy_b_area` VALUES('1238','平顺县','271');--
INSERT INTO `cmseasy_b_area` VALUES('1239','壶关县','271');--
INSERT INTO `cmseasy_b_area` VALUES('1240','武乡县','271');--
INSERT INTO `cmseasy_b_area` VALUES('1241','沁源县','271');--
INSERT INTO `cmseasy_b_area` VALUES('1242','城区','272');--
INSERT INTO `cmseasy_b_area` VALUES('1243','阳城县','272');--
INSERT INTO `cmseasy_b_area` VALUES('1244','泽州县','272');--
INSERT INTO `cmseasy_b_area` VALUES('1245','高平市','272');--
INSERT INTO `cmseasy_b_area` VALUES('1246','沁水县','272');--
INSERT INTO `cmseasy_b_area` VALUES('1247','陵川县','272');--
INSERT INTO `cmseasy_b_area` VALUES('1248','朔城区','273');--
INSERT INTO `cmseasy_b_area` VALUES('1249','怀仁县','273');--
INSERT INTO `cmseasy_b_area` VALUES('1250','平鲁区','273');--
INSERT INTO `cmseasy_b_area` VALUES('1251','山阴县','273');--
INSERT INTO `cmseasy_b_area` VALUES('1252','右玉县','273');--
INSERT INTO `cmseasy_b_area` VALUES('1253','应县','273');--
INSERT INTO `cmseasy_b_area` VALUES('1254','榆次区','274');--
INSERT INTO `cmseasy_b_area` VALUES('1255','左权县','274');--
INSERT INTO `cmseasy_b_area` VALUES('1256','昔阳县','274');--
INSERT INTO `cmseasy_b_area` VALUES('1257','太谷县','274');--
INSERT INTO `cmseasy_b_area` VALUES('1258','平遥县','274');--
INSERT INTO `cmseasy_b_area` VALUES('1259','介休市','274');--
INSERT INTO `cmseasy_b_area` VALUES('1260','榆社县','274');--
INSERT INTO `cmseasy_b_area` VALUES('1261','和顺县','274');--
INSERT INTO `cmseasy_b_area` VALUES('1262','寿阳县','274');--
INSERT INTO `cmseasy_b_area` VALUES('1263','祁县','274');--
INSERT INTO `cmseasy_b_area` VALUES('1264','灵石县','274');--
INSERT INTO `cmseasy_b_area` VALUES('1265','盐湖区','275');--
INSERT INTO `cmseasy_b_area` VALUES('1266','万荣县','275');--
INSERT INTO `cmseasy_b_area` VALUES('1267','稷山县','275');--
INSERT INTO `cmseasy_b_area` VALUES('1268','绛县','275');--
INSERT INTO `cmseasy_b_area` VALUES('1269','夏县','275');--
INSERT INTO `cmseasy_b_area` VALUES('1270','芮城县','275');--
INSERT INTO `cmseasy_b_area` VALUES('1271','河津市','275');--
INSERT INTO `cmseasy_b_area` VALUES('1272','临猗县','275');--
INSERT INTO `cmseasy_b_area` VALUES('1273','闻喜县','275');--
INSERT INTO `cmseasy_b_area` VALUES('1274','新绛县','275');--
INSERT INTO `cmseasy_b_area` VALUES('1275','垣曲县','275');--
INSERT INTO `cmseasy_b_area` VALUES('1276','平陆\r\n县','275');--
INSERT INTO `cmseasy_b_area` VALUES('1277','永济市','275');--
INSERT INTO `cmseasy_b_area` VALUES('1278','忻府区','276');--
INSERT INTO `cmseasy_b_area` VALUES('1279','五台县','276');--
INSERT INTO `cmseasy_b_area` VALUES('1280','繁峙县','276');--
INSERT INTO `cmseasy_b_area` VALUES('1281','静乐县','276');--
INSERT INTO `cmseasy_b_area` VALUES('1282','五寨县','276');--
INSERT INTO `cmseasy_b_area` VALUES('1283','河曲县','276');--
INSERT INTO `cmseasy_b_area` VALUES('1284','偏关县','276');--
INSERT INTO `cmseasy_b_area` VALUES('1285','原平市','276');--
INSERT INTO `cmseasy_b_area` VALUES('1286','定襄县','276');--
INSERT INTO `cmseasy_b_area` VALUES('1287','代县','276');--
INSERT INTO `cmseasy_b_area` VALUES('1288','宁武县','276');--
INSERT INTO `cmseasy_b_area` VALUES('1289','神池县','276');--
INSERT INTO `cmseasy_b_area` VALUES('1290','岢岚县','276');--
INSERT INTO `cmseasy_b_area` VALUES('1291','保德县','276');--
INSERT INTO `cmseasy_b_area` VALUES('1292','尧都区','277');--
INSERT INTO `cmseasy_b_area` VALUES('1293','翼城县','277');--
INSERT INTO `cmseasy_b_area` VALUES('1294','洪洞县','277');--
INSERT INTO `cmseasy_b_area` VALUES('1295','安泽县','277');--
INSERT INTO `cmseasy_b_area` VALUES('1296','吉县','277');--
INSERT INTO `cmseasy_b_area` VALUES('1297','大宁县','277');--
INSERT INTO `cmseasy_b_area` VALUES('1298','永和县','277');--
INSERT INTO `cmseasy_b_area` VALUES('1299','汾西县','277');--
INSERT INTO `cmseasy_b_area` VALUES('1300','霍州市','277');--
INSERT INTO `cmseasy_b_area` VALUES('1301','曲沃县','277');--
INSERT INTO `cmseasy_b_area` VALUES('1302','襄汾县','277');--
INSERT INTO `cmseasy_b_area` VALUES('1303','古县','277');--
INSERT INTO `cmseasy_b_area` VALUES('1304','浮山县乡宁县','277');--
INSERT INTO `cmseasy_b_area` VALUES('1305','隰县','277');--
INSERT INTO `cmseasy_b_area` VALUES('1306','蒲县','277');--
INSERT INTO `cmseasy_b_area` VALUES('1307','侯马市','277');--
INSERT INTO `cmseasy_b_area` VALUES('1308','离石区','278');--
INSERT INTO `cmseasy_b_area` VALUES('1309','交城县','278');--
INSERT INTO `cmseasy_b_area` VALUES('1310','临县','278');--
INSERT INTO `cmseasy_b_area` VALUES('1311','石楼县','278');--
INSERT INTO `cmseasy_b_area` VALUES('1312','方山县','278');--
INSERT INTO `cmseasy_b_area` VALUES('1313','交口县','278');--
INSERT INTO `cmseasy_b_area` VALUES('1314','汾阳市','278');--
INSERT INTO `cmseasy_b_area` VALUES('1315','文水县','278');--
INSERT INTO `cmseasy_b_area` VALUES('1316','兴县','278');--
INSERT INTO `cmseasy_b_area` VALUES('1317','柳林县','278');--
INSERT INTO `cmseasy_b_area` VALUES('1318','岚县','278');--
INSERT INTO `cmseasy_b_area` VALUES('1319','中阳县','278');--
INSERT INTO `cmseasy_b_area` VALUES('1320','孝义市','278');--
INSERT INTO `cmseasy_b_area` VALUES('1321','驿城区','294');--
INSERT INTO `cmseasy_b_area` VALUES('1322','上蔡县','294');--
INSERT INTO `cmseasy_b_area` VALUES('1323','正阳县','294');--
INSERT INTO `cmseasy_b_area` VALUES('1324','泌阳县','294');--
INSERT INTO `cmseasy_b_area` VALUES('1325','遂平县','294');--
INSERT INTO `cmseasy_b_area` VALUES('1326','新蔡县','294');--
INSERT INTO `cmseasy_b_area` VALUES('1327','西平县','294');--
INSERT INTO `cmseasy_b_area` VALUES('1328','平舆县','294');--
INSERT INTO `cmseasy_b_area` VALUES('1329','确山县','294');--
INSERT INTO `cmseasy_b_area` VALUES('1330','汝南县','294');--
INSERT INTO `cmseasy_b_area` VALUES('1331','川汇区','293');--
INSERT INTO `cmseasy_b_area` VALUES('1332','西华县','293');--
INSERT INTO `cmseasy_b_area` VALUES('1333','沈丘县','293');--
INSERT INTO `cmseasy_b_area` VALUES('1334','淮阳县','293');--
INSERT INTO `cmseasy_b_area` VALUES('1335','鹿邑县','293');--
INSERT INTO `cmseasy_b_area` VALUES('1336','项城市','293');--
INSERT INTO `cmseasy_b_area` VALUES('1337','扶沟县','293');--
INSERT INTO `cmseasy_b_area` VALUES('1338','商水县','293');--
INSERT INTO `cmseasy_b_area` VALUES('1339','郸城县','293');--
INSERT INTO `cmseasy_b_area` VALUES('1340','太康县','293');--
INSERT INTO `cmseasy_b_area` VALUES('1341','师河区','292');--
INSERT INTO `cmseasy_b_area` VALUES('1342','罗山县','292');--
INSERT INTO `cmseasy_b_area` VALUES('1343','新县','292');--
INSERT INTO `cmseasy_b_area` VALUES('1344','固始县','292');--
INSERT INTO `cmseasy_b_area` VALUES('1345','淮滨县','292');--
INSERT INTO `cmseasy_b_area` VALUES('1346','息县','292');--
INSERT INTO `cmseasy_b_area` VALUES('1347','平桥区','292');--
INSERT INTO `cmseasy_b_area` VALUES('1348','光山县','292');--
INSERT INTO `cmseasy_b_area` VALUES('1349','商城县','292');--
INSERT INTO `cmseasy_b_area` VALUES('1350','潢川县','292');--
INSERT INTO `cmseasy_b_area` VALUES('1351','梁园区','291');--
INSERT INTO `cmseasy_b_area` VALUES('1352','民权县','291');--
INSERT INTO `cmseasy_b_area` VALUES('1353','宁陵县','291');--
INSERT INTO `cmseasy_b_area` VALUES('1354','虞城县','291');--
INSERT INTO `cmseasy_b_area` VALUES('1355','永城市','291');--
INSERT INTO `cmseasy_b_area` VALUES('1356','睢阳区','291');--
INSERT INTO `cmseasy_b_area` VALUES('1357','睢县','291');--
INSERT INTO `cmseasy_b_area` VALUES('1358','柘城县','291');--
INSERT INTO `cmseasy_b_area` VALUES('1359','夏邑县','291');--
INSERT INTO `cmseasy_b_area` VALUES('1360','宛城区','290');--
INSERT INTO `cmseasy_b_area` VALUES('1361','南召县','290');--
INSERT INTO `cmseasy_b_area` VALUES('1362','西峡县','290');--
INSERT INTO `cmseasy_b_area` VALUES('1363','内乡县','290');--
INSERT INTO `cmseasy_b_area` VALUES('1364','社旗县','290');--
INSERT INTO `cmseasy_b_area` VALUES('1365','新野县','290');--
INSERT INTO `cmseasy_b_area` VALUES('1366','邓州市','290');--
INSERT INTO `cmseasy_b_area` VALUES('1367','卧龙区','290');--
INSERT INTO `cmseasy_b_area` VALUES('1368','方城县','290');--
INSERT INTO `cmseasy_b_area` VALUES('1369','镇平县','290');--
INSERT INTO `cmseasy_b_area` VALUES('1370','淅川县','290');--
INSERT INTO `cmseasy_b_area` VALUES('1371','唐河县','290');--
INSERT INTO `cmseasy_b_area` VALUES('1372','桐柏县','290');--
INSERT INTO `cmseasy_b_area` VALUES('1373','湖滨区','289');--
INSERT INTO `cmseasy_b_area` VALUES('1374','陕县','289');--
INSERT INTO `cmseasy_b_area` VALUES('1375','义马市','289');--
INSERT INTO `cmseasy_b_area` VALUES('1376','灵宝市','289');--
INSERT INTO `cmseasy_b_area` VALUES('1377','渑池县','289');--
INSERT INTO `cmseasy_b_area` VALUES('1378','卢氏县','289');--
INSERT INTO `cmseasy_b_area` VALUES('1379','源汇区','288');--
INSERT INTO `cmseasy_b_area` VALUES('1380','召陵区','288');--
INSERT INTO `cmseasy_b_area` VALUES('1381','临颍县','288');--
INSERT INTO `cmseasy_b_area` VALUES('1382','郾城区','288');--
INSERT INTO `cmseasy_b_area` VALUES('1383','舞阳县','288');--
INSERT INTO `cmseasy_b_area` VALUES('1384','魏都区','287');--
INSERT INTO `cmseasy_b_area` VALUES('1385','鄢陵县','287');--
INSERT INTO `cmseasy_b_area` VALUES('1386','禹州市','287');--
INSERT INTO `cmseasy_b_area` VALUES('1387','长葛市','287');--
INSERT INTO `cmseasy_b_area` VALUES('1388','许昌县','287');--
INSERT INTO `cmseasy_b_area` VALUES('1389','襄城县','287');--
INSERT INTO `cmseasy_b_area` VALUES('1390','清丰县','286');--
INSERT INTO `cmseasy_b_area` VALUES('1391','范县','286');--
INSERT INTO `cmseasy_b_area` VALUES('1392','濮阳县','286');--
INSERT INTO `cmseasy_b_area` VALUES('1393','南乐县','286');--
INSERT INTO `cmseasy_b_area` VALUES('1394','台前县','286');--
INSERT INTO `cmseasy_b_area` VALUES('1395','文峰区','285');--
INSERT INTO `cmseasy_b_area` VALUES('1396','殷都区','285');--
INSERT INTO `cmseasy_b_area` VALUES('1397','安阳县','285');--
INSERT INTO `cmseasy_b_area` VALUES('1398','滑县','285');--
INSERT INTO `cmseasy_b_area` VALUES('1399','北关区','285');--
INSERT INTO `cmseasy_b_area` VALUES('1400','龙安区','285');--
INSERT INTO `cmseasy_b_area` VALUES('1401','汤阴县','285');--
INSERT INTO `cmseasy_b_area` VALUES('1402','内黄县','285');--
INSERT INTO `cmseasy_b_area` VALUES('1403','红旗区','284');--
INSERT INTO `cmseasy_b_area` VALUES('1404','获嘉县','284');--
INSERT INTO `cmseasy_b_area` VALUES('1405','延津县','284');--
INSERT INTO `cmseasy_b_area` VALUES('1406','长垣县','284');--
INSERT INTO `cmseasy_b_area` VALUES('1407','红旗区','284');--
INSERT INTO `cmseasy_b_area` VALUES('1408','获嘉县','284');--
INSERT INTO `cmseasy_b_area` VALUES('1409','延津县','284');--
INSERT INTO `cmseasy_b_area` VALUES('1410','长垣县','284');--
INSERT INTO `cmseasy_b_area` VALUES('1411','鹤山区','283');--
INSERT INTO `cmseasy_b_area` VALUES('1412','淇滨区','283');--
INSERT INTO `cmseasy_b_area` VALUES('1413','淇县','283');--
INSERT INTO `cmseasy_b_area` VALUES('1414','山城区','283');--
INSERT INTO `cmseasy_b_area` VALUES('1415','浚县','283');--
INSERT INTO `cmseasy_b_area` VALUES('1416','解放区','282');--
INSERT INTO `cmseasy_b_area` VALUES('1417','马村区','282');--
INSERT INTO `cmseasy_b_area` VALUES('1418','修武县','282');--
INSERT INTO `cmseasy_b_area` VALUES('1419','武陟县','282');--
INSERT INTO `cmseasy_b_area` VALUES('1420','济源市','282');--
INSERT INTO `cmseasy_b_area` VALUES('1421','孟州市','282');--
INSERT INTO `cmseasy_b_area` VALUES('1422','中站区','282');--
INSERT INTO `cmseasy_b_area` VALUES('1423','山阳区','282');--
INSERT INTO `cmseasy_b_area` VALUES('1424','博爱县','282');--
INSERT INTO `cmseasy_b_area` VALUES('1425','温县','282');--
INSERT INTO `cmseasy_b_area` VALUES('1426','沁阳市','282');--
INSERT INTO `cmseasy_b_area` VALUES('1427','新华区','281');--
INSERT INTO `cmseasy_b_area` VALUES('1428','石龙区','281');--
INSERT INTO `cmseasy_b_area` VALUES('1429','宝丰县','281');--
INSERT INTO `cmseasy_b_area` VALUES('1430','鲁山县','281');--
INSERT INTO `cmseasy_b_area` VALUES('1431','舞钢市','281');--
INSERT INTO `cmseasy_b_area` VALUES('1432','汝州市','281');--
INSERT INTO `cmseasy_b_area` VALUES('1433','卫东区','281');--
INSERT INTO `cmseasy_b_area` VALUES('1434','湛河区','281');--
INSERT INTO `cmseasy_b_area` VALUES('1435','叶县','281');--
INSERT INTO `cmseasy_b_area` VALUES('1436','郏县','281');--
INSERT INTO `cmseasy_b_area` VALUES('1437','林州市','281');--
INSERT INTO `cmseasy_b_area` VALUES('1438','洛阳市','97');--
INSERT INTO `cmseasy_b_area` VALUES('1439','老城区','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1440','廛河回族区','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1441','吉利区','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1442','孟津县','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1443','栾川县','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1444','汝阳县','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1445','洛宁县','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1446','偃师市','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1447','西工区','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1448','涧西区','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1449','洛龙\r\n区','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1450','新安县','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1451','嵩县','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1452','宜阳县','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1453','伊川县','1438');--
INSERT INTO `cmseasy_b_area` VALUES('1454','龙亭区','280');--
INSERT INTO `cmseasy_b_area` VALUES('1455','鼓楼区','280');--
INSERT INTO `cmseasy_b_area` VALUES('1456','郊区','280');--
INSERT INTO `cmseasy_b_area` VALUES('1457','通许县','280');--
INSERT INTO `cmseasy_b_area` VALUES('1458','开封县','280');--
INSERT INTO `cmseasy_b_area` VALUES('1459','兰考县','280');--
INSERT INTO `cmseasy_b_area` VALUES('1460','顺河回族区','280');--
INSERT INTO `cmseasy_b_area` VALUES('1461','南关区','280');--
INSERT INTO `cmseasy_b_area` VALUES('1462','杞县','280');--
INSERT INTO `cmseasy_b_area` VALUES('1463','尉氏县','280');--
INSERT INTO `cmseasy_b_area` VALUES('1464','中原区','279');--
INSERT INTO `cmseasy_b_area` VALUES('1465','管城回族区','279');--
INSERT INTO `cmseasy_b_area` VALUES('1466','上街区','279');--
INSERT INTO `cmseasy_b_area` VALUES('1467','中牟县','279');--
INSERT INTO `cmseasy_b_area` VALUES('1468','荥阳市','279');--
INSERT INTO `cmseasy_b_area` VALUES('1469','新郑市','279');--
INSERT INTO `cmseasy_b_area` VALUES('1470','登封市','279');--
INSERT INTO `cmseasy_b_area` VALUES('1471','二七区','279');--
INSERT INTO `cmseasy_b_area` VALUES('1472','金水区','279');--
INSERT INTO `cmseasy_b_area` VALUES('1473','邙山区','279');--
INSERT INTO `cmseasy_b_area` VALUES('1474','巩义\r\n市','279');--
INSERT INTO `cmseasy_b_area` VALUES('1475','新密市','279');--
INSERT INTO `cmseasy_b_area` VALUES('1476','历下区','295');--
INSERT INTO `cmseasy_b_area` VALUES('1477','槐荫区','295');--
INSERT INTO `cmseasy_b_area` VALUES('1478','历城区','295');--
INSERT INTO `cmseasy_b_area` VALUES('1479','平阴县','295');--
INSERT INTO `cmseasy_b_area` VALUES('1480','商河县','295');--
INSERT INTO `cmseasy_b_area` VALUES('1481','章丘市','295');--
INSERT INTO `cmseasy_b_area` VALUES('1482','市中区','295');--
INSERT INTO `cmseasy_b_area` VALUES('1483','天桥区','295');--
INSERT INTO `cmseasy_b_area` VALUES('1484','长清区','295');--
INSERT INTO `cmseasy_b_area` VALUES('1485','济阳县','295');--
INSERT INTO `cmseasy_b_area` VALUES('1486','市南区','296');--
INSERT INTO `cmseasy_b_area` VALUES('1487','四方区','296');--
INSERT INTO `cmseasy_b_area` VALUES('1488','崂山区','296');--
INSERT INTO `cmseasy_b_area` VALUES('1489','城阳区','296');--
INSERT INTO `cmseasy_b_area` VALUES('1490','即墨市','296');--
INSERT INTO `cmseasy_b_area` VALUES('1491','胶南市','296');--
INSERT INTO `cmseasy_b_area` VALUES('1492','莱西市','296');--
INSERT INTO `cmseasy_b_area` VALUES('1493','市北区','296');--
INSERT INTO `cmseasy_b_area` VALUES('1494','黄岛区','296');--
INSERT INTO `cmseasy_b_area` VALUES('1495','李沧区','296');--
INSERT INTO `cmseasy_b_area` VALUES('1496','胶州市','296');--
INSERT INTO `cmseasy_b_area` VALUES('1497','平度市','296');--
INSERT INTO `cmseasy_b_area` VALUES('1498','淄川区','297');--
INSERT INTO `cmseasy_b_area` VALUES('1499','博山区','297');--
INSERT INTO `cmseasy_b_area` VALUES('1500','周村区','297');--
INSERT INTO `cmseasy_b_area` VALUES('1501','高青县','297');--
INSERT INTO `cmseasy_b_area` VALUES('1502','沂源县','297');--
INSERT INTO `cmseasy_b_area` VALUES('1503','张店区','297');--
INSERT INTO `cmseasy_b_area` VALUES('1504','临淄区','297');--
INSERT INTO `cmseasy_b_area` VALUES('1505','桓台县','297');--
INSERT INTO `cmseasy_b_area` VALUES('1506','市中区','298');--
INSERT INTO `cmseasy_b_area` VALUES('1507','峄城区','298');--
INSERT INTO `cmseasy_b_area` VALUES('1508','山亭区','298');--
INSERT INTO `cmseasy_b_area` VALUES('1509','滕州市','298');--
INSERT INTO `cmseasy_b_area` VALUES('1510','薛城区','298');--
INSERT INTO `cmseasy_b_area` VALUES('1511','台儿庄区','298');--
INSERT INTO `cmseasy_b_area` VALUES('1512','东营区','299');--
INSERT INTO `cmseasy_b_area` VALUES('1513','垦利县','299');--
INSERT INTO `cmseasy_b_area` VALUES('1514','广饶县','299');--
INSERT INTO `cmseasy_b_area` VALUES('1515','河口区','299');--
INSERT INTO `cmseasy_b_area` VALUES('1516','利津县','299');--
INSERT INTO `cmseasy_b_area` VALUES('1517','潍城区','300');--
INSERT INTO `cmseasy_b_area` VALUES('1518','坊子区','300');--
INSERT INTO `cmseasy_b_area` VALUES('1519','临朐县','300');--
INSERT INTO `cmseasy_b_area` VALUES('1520','青州市','300');--
INSERT INTO `cmseasy_b_area` VALUES('1521','寿光市','300');--
INSERT INTO `cmseasy_b_area` VALUES('1522','高密市','300');--
INSERT INTO `cmseasy_b_area` VALUES('1523','昌邑市','300');--
INSERT INTO `cmseasy_b_area` VALUES('1524','寒亭区','300');--
INSERT INTO `cmseasy_b_area` VALUES('1525','奎文区','300');--
INSERT INTO `cmseasy_b_area` VALUES('1526','昌乐县','300');--
INSERT INTO `cmseasy_b_area` VALUES('1527','诸城市','300');--
INSERT INTO `cmseasy_b_area` VALUES('1528','安丘市','300');--
INSERT INTO `cmseasy_b_area` VALUES('1529','芝罘区','301');--
INSERT INTO `cmseasy_b_area` VALUES('1530','牟平区','301');--
INSERT INTO `cmseasy_b_area` VALUES('1531','长岛县','301');--
INSERT INTO `cmseasy_b_area` VALUES('1532','莱阳市','301');--
INSERT INTO `cmseasy_b_area` VALUES('1533','蓬莱市','301');--
INSERT INTO `cmseasy_b_area` VALUES('1534','栖霞市','301');--
INSERT INTO `cmseasy_b_area` VALUES('1535','海阳市','301');--
INSERT INTO `cmseasy_b_area` VALUES('1536','福山区','301');--
INSERT INTO `cmseasy_b_area` VALUES('1537','莱山区','301');--
INSERT INTO `cmseasy_b_area` VALUES('1538','龙口市','301');--
INSERT INTO `cmseasy_b_area` VALUES('1539','莱州市','301');--
INSERT INTO `cmseasy_b_area` VALUES('1540','招远市','301');--
INSERT INTO `cmseasy_b_area` VALUES('1541','环翠区','302');--
INSERT INTO `cmseasy_b_area` VALUES('1542','荣成市','302');--
INSERT INTO `cmseasy_b_area` VALUES('1543','乳山市','302');--
INSERT INTO `cmseasy_b_area` VALUES('1544','文登市','302');--
INSERT INTO `cmseasy_b_area` VALUES('1545','市中区','303');--
INSERT INTO `cmseasy_b_area` VALUES('1546','微山县','303');--
INSERT INTO `cmseasy_b_area` VALUES('1547','金乡县','303');--
INSERT INTO `cmseasy_b_area` VALUES('1548','汶上县','303');--
INSERT INTO `cmseasy_b_area` VALUES('1549','梁山县','303');--
INSERT INTO `cmseasy_b_area` VALUES('1550','兖州市','303');--
INSERT INTO `cmseasy_b_area` VALUES('1551','邹城市','303');--
INSERT INTO `cmseasy_b_area` VALUES('1552','任城区','303');--
INSERT INTO `cmseasy_b_area` VALUES('1553','鱼台县','303');--
INSERT INTO `cmseasy_b_area` VALUES('1554','嘉祥县','303');--
INSERT INTO `cmseasy_b_area` VALUES('1555','泗水县','303');--
INSERT INTO `cmseasy_b_area` VALUES('1556','曲阜市','303');--
INSERT INTO `cmseasy_b_area` VALUES('1557','泰山区','304');--
INSERT INTO `cmseasy_b_area` VALUES('1558','宁阳县','304');--
INSERT INTO `cmseasy_b_area` VALUES('1559','新泰市','304');--
INSERT INTO `cmseasy_b_area` VALUES('1560','肥城市','304');--
INSERT INTO `cmseasy_b_area` VALUES('1561','岱岳区','304');--
INSERT INTO `cmseasy_b_area` VALUES('1562','东平县','304');--
INSERT INTO `cmseasy_b_area` VALUES('1563','东港区','305');--
INSERT INTO `cmseasy_b_area` VALUES('1564','五莲县','305');--
INSERT INTO `cmseasy_b_area` VALUES('1565','莒县','305');--
INSERT INTO `cmseasy_b_area` VALUES('1566','岚山区','305');--
INSERT INTO `cmseasy_b_area` VALUES('1567','莱城区','306');--
INSERT INTO `cmseasy_b_area` VALUES('1568','钢城区','306');--
INSERT INTO `cmseasy_b_area` VALUES('1569','兰山区','307');--
INSERT INTO `cmseasy_b_area` VALUES('1570','河东区','307');--
INSERT INTO `cmseasy_b_area` VALUES('1571','郯城县','307');--
INSERT INTO `cmseasy_b_area` VALUES('1572','苍山县','307');--
INSERT INTO `cmseasy_b_area` VALUES('1573','平邑县','307');--
INSERT INTO `cmseasy_b_area` VALUES('1574','蒙阴县','307');--
INSERT INTO `cmseasy_b_area` VALUES('1575','临沭县','307');--
INSERT INTO `cmseasy_b_area` VALUES('1576','罗庄区','307');--
INSERT INTO `cmseasy_b_area` VALUES('1577','沂南县','307');--
INSERT INTO `cmseasy_b_area` VALUES('1578','沂水县','307');--
INSERT INTO `cmseasy_b_area` VALUES('1579','费县','307');--
INSERT INTO `cmseasy_b_area` VALUES('1580','莒南县','307');--
INSERT INTO `cmseasy_b_area` VALUES('1581','德城区','308');--
INSERT INTO `cmseasy_b_area` VALUES('1582','宁津县','308');--
INSERT INTO `cmseasy_b_area` VALUES('1583','临邑县','308');--
INSERT INTO `cmseasy_b_area` VALUES('1584','平原县','308');--
INSERT INTO `cmseasy_b_area` VALUES('1585','武城县','308');--
INSERT INTO `cmseasy_b_area` VALUES('1586','禹城市','308');--
INSERT INTO `cmseasy_b_area` VALUES('1587','陵县','308');--
INSERT INTO `cmseasy_b_area` VALUES('1588','庆云县','308');--
INSERT INTO `cmseasy_b_area` VALUES('1589','齐河县','308');--
INSERT INTO `cmseasy_b_area` VALUES('1590','夏津县','308');--
INSERT INTO `cmseasy_b_area` VALUES('1591','乐陵市','308');--
INSERT INTO `cmseasy_b_area` VALUES('1592','东昌府区','309');--
INSERT INTO `cmseasy_b_area` VALUES('1593','莘县','309');--
INSERT INTO `cmseasy_b_area` VALUES('1594','东阿县','309');--
INSERT INTO `cmseasy_b_area` VALUES('1595','高唐县','309');--
INSERT INTO `cmseasy_b_area` VALUES('1596','临清市','309');--
INSERT INTO `cmseasy_b_area` VALUES('1597','阳谷县','309');--
INSERT INTO `cmseasy_b_area` VALUES('1598','茌平县','309');--
INSERT INTO `cmseasy_b_area` VALUES('1599','冠县','309');--
INSERT INTO `cmseasy_b_area` VALUES('1600','滨城区','310');--
INSERT INTO `cmseasy_b_area` VALUES('1601','阳信县','310');--
INSERT INTO `cmseasy_b_area` VALUES('1602','沾化县','310');--
INSERT INTO `cmseasy_b_area` VALUES('1603','邹平县','310');--
INSERT INTO `cmseasy_b_area` VALUES('1604','惠民县','310');--
INSERT INTO `cmseasy_b_area` VALUES('1605','无棣县','310');--
INSERT INTO `cmseasy_b_area` VALUES('1606','博兴县','310');--
INSERT INTO `cmseasy_b_area` VALUES('1607','牡丹区','311');--
INSERT INTO `cmseasy_b_area` VALUES('1608','单县','311');--
INSERT INTO `cmseasy_b_area` VALUES('1609','巨野县','311');--
INSERT INTO `cmseasy_b_area` VALUES('1610','东明县','311');--
INSERT INTO `cmseasy_b_area` VALUES('1611','曹县','311');--
INSERT INTO `cmseasy_b_area` VALUES('1612','成武县','311');--
INSERT INTO `cmseasy_b_area` VALUES('1613','郓城县','311');--
INSERT INTO `cmseasy_b_area` VALUES('1614','鄄城县','311');--
INSERT INTO `cmseasy_b_area` VALUES('1615','定陶县','311');--
INSERT INTO `cmseasy_b_area` VALUES('1616','玄武区','312');--
INSERT INTO `cmseasy_b_area` VALUES('1617','秦淮区','312');--
INSERT INTO `cmseasy_b_area` VALUES('1618','鼓楼区','312');--
INSERT INTO `cmseasy_b_area` VALUES('1619','浦口区','312');--
INSERT INTO `cmseasy_b_area` VALUES('1620','雨花台区','312');--
INSERT INTO `cmseasy_b_area` VALUES('1621','六合区','312');--
INSERT INTO `cmseasy_b_area` VALUES('1622','高淳县','312');--
INSERT INTO `cmseasy_b_area` VALUES('1623','白下区','312');--
INSERT INTO `cmseasy_b_area` VALUES('1624','建邺区','312');--
INSERT INTO `cmseasy_b_area` VALUES('1625','下关区','312');--
INSERT INTO `cmseasy_b_area` VALUES('1626','栖霞区','312');--
INSERT INTO `cmseasy_b_area` VALUES('1627','江宁区','312');--
INSERT INTO `cmseasy_b_area` VALUES('1628','溧水县','312');--
INSERT INTO `cmseasy_b_area` VALUES('1629','鼓楼区','313');--
INSERT INTO `cmseasy_b_area` VALUES('1630','九里区','313');--
INSERT INTO `cmseasy_b_area` VALUES('1631','泉山区','313');--
INSERT INTO `cmseasy_b_area` VALUES('1632','沛县','313');--
INSERT INTO `cmseasy_b_area` VALUES('1633','睢宁县','313');--
INSERT INTO `cmseasy_b_area` VALUES('1634','邳州市','313');--
INSERT INTO `cmseasy_b_area` VALUES('1635','云龙区','313');--
INSERT INTO `cmseasy_b_area` VALUES('1636','贾汪区','313');--
INSERT INTO `cmseasy_b_area` VALUES('1637','丰县','313');--
INSERT INTO `cmseasy_b_area` VALUES('1638','铜山县','313');--
INSERT INTO `cmseasy_b_area` VALUES('1639','新沂市','313');--
INSERT INTO `cmseasy_b_area` VALUES('1640','连云区','314');--
INSERT INTO `cmseasy_b_area` VALUES('1641','海州区','314');--
INSERT INTO `cmseasy_b_area` VALUES('1642','东海县','314');--
INSERT INTO `cmseasy_b_area` VALUES('1643','灌南县','314');--
INSERT INTO `cmseasy_b_area` VALUES('1644','新浦区','314');--
INSERT INTO `cmseasy_b_area` VALUES('1645','赣榆县','314');--
INSERT INTO `cmseasy_b_area` VALUES('1646','灌云县','314');--
INSERT INTO `cmseasy_b_area` VALUES('1647','清河区','315');--
INSERT INTO `cmseasy_b_area` VALUES('1648','淮阴区','315');--
INSERT INTO `cmseasy_b_area` VALUES('1649','涟水县','315');--
INSERT INTO `cmseasy_b_area` VALUES('1650','盱眙县','315');--
INSERT INTO `cmseasy_b_area` VALUES('1651','金湖县','315');--
INSERT INTO `cmseasy_b_area` VALUES('1652','楚州区','315');--
INSERT INTO `cmseasy_b_area` VALUES('1653','清浦区','315');--
INSERT INTO `cmseasy_b_area` VALUES('1654','洪泽县','315');--
INSERT INTO `cmseasy_b_area` VALUES('1655','宿城区','316');--
INSERT INTO `cmseasy_b_area` VALUES('1656','沭阳县','316');--
INSERT INTO `cmseasy_b_area` VALUES('1657','泗洪县','316');--
INSERT INTO `cmseasy_b_area` VALUES('1658','宿豫区','316');--
INSERT INTO `cmseasy_b_area` VALUES('1659','泗阳县','316');--
INSERT INTO `cmseasy_b_area` VALUES('1660','盐都区','317');--
INSERT INTO `cmseasy_b_area` VALUES('1661','滨海县','317');--
INSERT INTO `cmseasy_b_area` VALUES('1662','射阳县','317');--
INSERT INTO `cmseasy_b_area` VALUES('1663','东台市','317');--
INSERT INTO `cmseasy_b_area` VALUES('1664','大丰市','317');--
INSERT INTO `cmseasy_b_area` VALUES('1665','响水县','317');--
INSERT INTO `cmseasy_b_area` VALUES('1666','阜宁县','317');--
INSERT INTO `cmseasy_b_area` VALUES('1667','建湖县','317');--
INSERT INTO `cmseasy_b_area` VALUES('1668','广陵区','318');--
INSERT INTO `cmseasy_b_area` VALUES('1669','宝应县','318');--
INSERT INTO `cmseasy_b_area` VALUES('1670','高邮市','318');--
INSERT INTO `cmseasy_b_area` VALUES('1671','江都市','318');--
INSERT INTO `cmseasy_b_area` VALUES('1672','邗江区','318');--
INSERT INTO `cmseasy_b_area` VALUES('1673','仪征市','318');--
INSERT INTO `cmseasy_b_area` VALUES('1674','海陵区','319');--
INSERT INTO `cmseasy_b_area` VALUES('1675','姜堰市','319');--
INSERT INTO `cmseasy_b_area` VALUES('1676','高港区','319');--
INSERT INTO `cmseasy_b_area` VALUES('1677','兴化市','319');--
INSERT INTO `cmseasy_b_area` VALUES('1678','泰兴市','319');--
INSERT INTO `cmseasy_b_area` VALUES('1679','靖江市','319');--
INSERT INTO `cmseasy_b_area` VALUES('1680','海门市','320');--
INSERT INTO `cmseasy_b_area` VALUES('1681','崇川区','320');--
INSERT INTO `cmseasy_b_area` VALUES('1682','海安县','320');--
INSERT INTO `cmseasy_b_area` VALUES('1683','启东市','320');--
INSERT INTO `cmseasy_b_area` VALUES('1684','通州市','320');--
INSERT INTO `cmseasy_b_area` VALUES('1685','港闸区','320');--
INSERT INTO `cmseasy_b_area` VALUES('1686','如东县','320');--
INSERT INTO `cmseasy_b_area` VALUES('1687','如皋市','320');--
INSERT INTO `cmseasy_b_area` VALUES('1688','京口区','321');--
INSERT INTO `cmseasy_b_area` VALUES('1689','丹徒区','321');--
INSERT INTO `cmseasy_b_area` VALUES('1690','扬中市','321');--
INSERT INTO `cmseasy_b_area` VALUES('1691','句容市','321');--
INSERT INTO `cmseasy_b_area` VALUES('1692','润州区','321');--
INSERT INTO `cmseasy_b_area` VALUES('1693','丹阳市','321');--
INSERT INTO `cmseasy_b_area` VALUES('1694','天宁区','322');--
INSERT INTO `cmseasy_b_area` VALUES('1695','戚墅堰区','322');--
INSERT INTO `cmseasy_b_area` VALUES('1696','溧阳市','322');--
INSERT INTO `cmseasy_b_area` VALUES('1697','金坛市','322');--
INSERT INTO `cmseasy_b_area` VALUES('1698','钟楼区','322');--
INSERT INTO `cmseasy_b_area` VALUES('1699','武进区','322');--
INSERT INTO `cmseasy_b_area` VALUES('1700','崇安区','323');--
INSERT INTO `cmseasy_b_area` VALUES('1701','北塘区','323');--
INSERT INTO `cmseasy_b_area` VALUES('1702','惠山区','323');--
INSERT INTO `cmseasy_b_area` VALUES('1703','宜兴市','323');--
INSERT INTO `cmseasy_b_area` VALUES('1704','南长区','323');--
INSERT INTO `cmseasy_b_area` VALUES('1705','锡山区','323');--
INSERT INTO `cmseasy_b_area` VALUES('1706','江阴市','323');--
INSERT INTO `cmseasy_b_area` VALUES('1707','沧浪区','324');--
INSERT INTO `cmseasy_b_area` VALUES('1708','金阊区','324');--
INSERT INTO `cmseasy_b_area` VALUES('1709','吴中区','324');--
INSERT INTO `cmseasy_b_area` VALUES('1710','常熟市','324');--
INSERT INTO `cmseasy_b_area` VALUES('1711','昆山市','324');--
INSERT INTO `cmseasy_b_area` VALUES('1712','太仓市','324');--
INSERT INTO `cmseasy_b_area` VALUES('1713','平江区','324');--
INSERT INTO `cmseasy_b_area` VALUES('1714','虎丘区','324');--
INSERT INTO `cmseasy_b_area` VALUES('1715','相城区','324');--
INSERT INTO `cmseasy_b_area` VALUES('1716','张家港市','324');--
INSERT INTO `cmseasy_b_area` VALUES('1717','吴江市','324');--
INSERT INTO `cmseasy_b_area` VALUES('1718','瑶海区','325');--
INSERT INTO `cmseasy_b_area` VALUES('1719','庐阳区','325');--
INSERT INTO `cmseasy_b_area` VALUES('1720','蜀山区','325');--
INSERT INTO `cmseasy_b_area` VALUES('1721','包河区','325');--
INSERT INTO `cmseasy_b_area` VALUES('1722','长丰县','325');--
INSERT INTO `cmseasy_b_area` VALUES('1723','肥东县','325');--
INSERT INTO `cmseasy_b_area` VALUES('1724','肥西县','325');--
INSERT INTO `cmseasy_b_area` VALUES('1725','镜湖区','326');--
INSERT INTO `cmseasy_b_area` VALUES('1726','新芜区','326');--
INSERT INTO `cmseasy_b_area` VALUES('1727','芜湖县','326');--
INSERT INTO `cmseasy_b_area` VALUES('1728','南陵县','326');--
INSERT INTO `cmseasy_b_area` VALUES('1729','马塘区','326');--
INSERT INTO `cmseasy_b_area` VALUES('1730','鸠江区','326');--
INSERT INTO `cmseasy_b_area` VALUES('1731','繁昌县','326');--
INSERT INTO `cmseasy_b_area` VALUES('1732','龙子湖区','327');--
INSERT INTO `cmseasy_b_area` VALUES('1733','禹会区','327');--
INSERT INTO `cmseasy_b_area` VALUES('1734','怀远县','327');--
INSERT INTO `cmseasy_b_area` VALUES('1735','固镇县','327');--
INSERT INTO `cmseasy_b_area` VALUES('1736','蚌山区','327');--
INSERT INTO `cmseasy_b_area` VALUES('1737','淮上区','327');--
INSERT INTO `cmseasy_b_area` VALUES('1738','五河县','327');--
INSERT INTO `cmseasy_b_area` VALUES('1739','大通区','328');--
INSERT INTO `cmseasy_b_area` VALUES('1740','谢家集区','328');--
INSERT INTO `cmseasy_b_area` VALUES('1741','潘集区','328');--
INSERT INTO `cmseasy_b_area` VALUES('1742','凤台县','328');--
INSERT INTO `cmseasy_b_area` VALUES('1743','田家庵区','328');--
INSERT INTO `cmseasy_b_area` VALUES('1744','八公山区','328');--
INSERT INTO `cmseasy_b_area` VALUES('1745','金家庄区','329');--
INSERT INTO `cmseasy_b_area` VALUES('1746','雨山区','329');--
INSERT INTO `cmseasy_b_area` VALUES('1747','当涂县','329');--
INSERT INTO `cmseasy_b_area` VALUES('1748','花山区','329');--
INSERT INTO `cmseasy_b_area` VALUES('1749','杜集区','330');--
INSERT INTO `cmseasy_b_area` VALUES('1750','烈山区','330');--
INSERT INTO `cmseasy_b_area` VALUES('1751','濉溪县','330');--
INSERT INTO `cmseasy_b_area` VALUES('1752','相山区','330');--
INSERT INTO `cmseasy_b_area` VALUES('1753','铜官山区','331');--
INSERT INTO `cmseasy_b_area` VALUES('1754','郊区','331');--
INSERT INTO `cmseasy_b_area` VALUES('1755','铜陵县','331');--
INSERT INTO `cmseasy_b_area` VALUES('1756','狮子山区','331');--
INSERT INTO `cmseasy_b_area` VALUES('1757','迎江区','332');--
INSERT INTO `cmseasy_b_area` VALUES('1758','郊区','332');--
INSERT INTO `cmseasy_b_area` VALUES('1759','枞阳县','332');--
INSERT INTO `cmseasy_b_area` VALUES('1760','太湖县','332');--
INSERT INTO `cmseasy_b_area` VALUES('1761','望江县','332');--
INSERT INTO `cmseasy_b_area` VALUES('1762','桐城市','332');--
INSERT INTO `cmseasy_b_area` VALUES('1763','大观区','332');--
INSERT INTO `cmseasy_b_area` VALUES('1764','怀宁县','332');--
INSERT INTO `cmseasy_b_area` VALUES('1765','潜山县','332');--
INSERT INTO `cmseasy_b_area` VALUES('1766','宿松县','332');--
INSERT INTO `cmseasy_b_area` VALUES('1767','岳西县','332');--
INSERT INTO `cmseasy_b_area` VALUES('1768','屯溪区','333');--
INSERT INTO `cmseasy_b_area` VALUES('1769','徽州区','333');--
INSERT INTO `cmseasy_b_area` VALUES('1770','休宁县','333');--
INSERT INTO `cmseasy_b_area` VALUES('1771','祁门县','333');--
INSERT INTO `cmseasy_b_area` VALUES('1772','黄山区','333');--
INSERT INTO `cmseasy_b_area` VALUES('1773','歙县','333');--
INSERT INTO `cmseasy_b_area` VALUES('1774','黟县','333');--
INSERT INTO `cmseasy_b_area` VALUES('1775','琅琊区','334');--
INSERT INTO `cmseasy_b_area` VALUES('1776','来安县','334');--
INSERT INTO `cmseasy_b_area` VALUES('1777','定远县','334');--
INSERT INTO `cmseasy_b_area` VALUES('1778','天长市','334');--
INSERT INTO `cmseasy_b_area` VALUES('1779','明光市','334');--
INSERT INTO `cmseasy_b_area` VALUES('1780','南谯区','334');--
INSERT INTO `cmseasy_b_area` VALUES('1781','全椒县','334');--
INSERT INTO `cmseasy_b_area` VALUES('1782','凤阳县','334');--
INSERT INTO `cmseasy_b_area` VALUES('1783','颍州区','335');--
INSERT INTO `cmseasy_b_area` VALUES('1784','颍泉区','335');--
INSERT INTO `cmseasy_b_area` VALUES('1785','太和县','335');--
INSERT INTO `cmseasy_b_area` VALUES('1786','颍上县','335');--
INSERT INTO `cmseasy_b_area` VALUES('1787','界首市','335');--
INSERT INTO `cmseasy_b_area` VALUES('1788','颍东区','335');--
INSERT INTO `cmseasy_b_area` VALUES('1789','临泉县','335');--
INSERT INTO `cmseasy_b_area` VALUES('1790','阜南县','335');--
INSERT INTO `cmseasy_b_area` VALUES('1791','墉桥区','336');--
INSERT INTO `cmseasy_b_area` VALUES('1792','萧县','336');--
INSERT INTO `cmseasy_b_area` VALUES('1793','泗县','336');--
INSERT INTO `cmseasy_b_area` VALUES('1794','砀山县','336');--
INSERT INTO `cmseasy_b_area` VALUES('1795','灵璧县','336');--
INSERT INTO `cmseasy_b_area` VALUES('1796','居巢区','337');--
INSERT INTO `cmseasy_b_area` VALUES('1797','无为县','337');--
INSERT INTO `cmseasy_b_area` VALUES('1798','和县','337');--
INSERT INTO `cmseasy_b_area` VALUES('1799','庐江县','337');--
INSERT INTO `cmseasy_b_area` VALUES('1800','含山县','337');--
INSERT INTO `cmseasy_b_area` VALUES('1801','金安区','338');--
INSERT INTO `cmseasy_b_area` VALUES('1802','寿县','338');--
INSERT INTO `cmseasy_b_area` VALUES('1803','舒城县','338');--
INSERT INTO `cmseasy_b_area` VALUES('1804','裕安区','338');--
INSERT INTO `cmseasy_b_area` VALUES('1805','霍邱县','338');--
INSERT INTO `cmseasy_b_area` VALUES('1806','金寨县','338');--
INSERT INTO `cmseasy_b_area` VALUES('1807','谯城区','339');--
INSERT INTO `cmseasy_b_area` VALUES('1808','蒙城县','339');--
INSERT INTO `cmseasy_b_area` VALUES('1809','利辛县','339');--
INSERT INTO `cmseasy_b_area` VALUES('1810','涡阳县','339');--
INSERT INTO `cmseasy_b_area` VALUES('1811','贵池区','340');--
INSERT INTO `cmseasy_b_area` VALUES('1812','石台县','340');--
INSERT INTO `cmseasy_b_area` VALUES('1813','青阳县','340');--
INSERT INTO `cmseasy_b_area` VALUES('1814','东至县','340');--
INSERT INTO `cmseasy_b_area` VALUES('1815','宣州区','341');--
INSERT INTO `cmseasy_b_area` VALUES('1816','广德县','341');--
INSERT INTO `cmseasy_b_area` VALUES('1817','绩溪县','341');--
INSERT INTO `cmseasy_b_area` VALUES('1818','宁国市','341');--
INSERT INTO `cmseasy_b_area` VALUES('1819','郎溪县','341');--
INSERT INTO `cmseasy_b_area` VALUES('1820','泾县','341');--
INSERT INTO `cmseasy_b_area` VALUES('1821','旌德县','341');--
INSERT INTO `cmseasy_b_area` VALUES('1822','东湖区','342');--
INSERT INTO `cmseasy_b_area` VALUES('1823','青云谱区','342');--
INSERT INTO `cmseasy_b_area` VALUES('1824','南昌县','342');--
INSERT INTO `cmseasy_b_area` VALUES('1825','安义县','342');--
INSERT INTO `cmseasy_b_area` VALUES('1826','进贤县','342');--
INSERT INTO `cmseasy_b_area` VALUES('1827','西湖区','342');--
INSERT INTO `cmseasy_b_area` VALUES('1828','湾里区','342');--
INSERT INTO `cmseasy_b_area` VALUES('1829','新建县','342');--
INSERT INTO `cmseasy_b_area` VALUES('1830','昌江区','343');--
INSERT INTO `cmseasy_b_area` VALUES('1831','浮梁县','343');--
INSERT INTO `cmseasy_b_area` VALUES('1832','乐平市','343');--
INSERT INTO `cmseasy_b_area` VALUES('1833','珠山区','343');--
INSERT INTO `cmseasy_b_area` VALUES('1834','安源区','344');--
INSERT INTO `cmseasy_b_area` VALUES('1835','莲花县','344');--
INSERT INTO `cmseasy_b_area` VALUES('1836','芦溪县','344');--
INSERT INTO `cmseasy_b_area` VALUES('1837','湘东区','344');--
INSERT INTO `cmseasy_b_area` VALUES('1838','上栗县','344');--
INSERT INTO `cmseasy_b_area` VALUES('1839','庐山区','345');--
INSERT INTO `cmseasy_b_area` VALUES('1840','九江县','345');--
INSERT INTO `cmseasy_b_area` VALUES('1841','修水县','345');--
INSERT INTO `cmseasy_b_area` VALUES('1842','德安县','345');--
INSERT INTO `cmseasy_b_area` VALUES('1843','都昌县','345');--
INSERT INTO `cmseasy_b_area` VALUES('1844','彭泽县','345');--
INSERT INTO `cmseasy_b_area` VALUES('1845','瑞昌市','345');--
INSERT INTO `cmseasy_b_area` VALUES('1846','浔阳区','345');--
INSERT INTO `cmseasy_b_area` VALUES('1847','武宁县','345');--
INSERT INTO `cmseasy_b_area` VALUES('1848','永修县','345');--
INSERT INTO `cmseasy_b_area` VALUES('1849','星子县','345');--
INSERT INTO `cmseasy_b_area` VALUES('1850','湖口县','345');--
INSERT INTO `cmseasy_b_area` VALUES('1851','渝水区','346');--
INSERT INTO `cmseasy_b_area` VALUES('1852','分宜县','346');--
INSERT INTO `cmseasy_b_area` VALUES('1853','月湖区','347');--
INSERT INTO `cmseasy_b_area` VALUES('1854','贵溪市','347');--
INSERT INTO `cmseasy_b_area` VALUES('1855','余江县','347');--
INSERT INTO `cmseasy_b_area` VALUES('1856','章贡区','348');--
INSERT INTO `cmseasy_b_area` VALUES('1857','信丰县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1858','上犹县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1859','安远县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1860','定南县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1861','宁都县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1862','兴国县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1863','寻乌县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1864','瑞金市','348');--
INSERT INTO `cmseasy_b_area` VALUES('1865','南康市','348');--
INSERT INTO `cmseasy_b_area` VALUES('1866','赣县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1867','大余县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1868','崇义县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1869','龙南县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1870','全南县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1871','于都县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1872','会昌县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1873','石城县','348');--
INSERT INTO `cmseasy_b_area` VALUES('1874','吉州区','349');--
INSERT INTO `cmseasy_b_area` VALUES('1875','吉安县','349');--
INSERT INTO `cmseasy_b_area` VALUES('1876','峡江县','349');--
INSERT INTO `cmseasy_b_area` VALUES('1877','永丰县','349');--
INSERT INTO `cmseasy_b_area` VALUES('1878','遂川县','349');--
INSERT INTO `cmseasy_b_area` VALUES('1879','安福县','349');--
INSERT INTO `cmseasy_b_area` VALUES('1880','井冈山市','349');--
INSERT INTO `cmseasy_b_area` VALUES('1881','青原区','349');--
INSERT INTO `cmseasy_b_area` VALUES('1882','吉水县','349');--
INSERT INTO `cmseasy_b_area` VALUES('1883','新干县','349');--
INSERT INTO `cmseasy_b_area` VALUES('1884','泰和县','349');--
INSERT INTO `cmseasy_b_area` VALUES('1885','万安县','349');--
INSERT INTO `cmseasy_b_area` VALUES('1886','永新县','349');--
INSERT INTO `cmseasy_b_area` VALUES('1887','袁州区','350');--
INSERT INTO `cmseasy_b_area` VALUES('1888','万载县','350');--
INSERT INTO `cmseasy_b_area` VALUES('1889','宜丰县','350');--
INSERT INTO `cmseasy_b_area` VALUES('1890','铜鼓县','350');--
INSERT INTO `cmseasy_b_area` VALUES('1891','樟树市','350');--
INSERT INTO `cmseasy_b_area` VALUES('1892','高安市','350');--
INSERT INTO `cmseasy_b_area` VALUES('1893','奉新县','350');--
INSERT INTO `cmseasy_b_area` VALUES('1894','上高县','350');--
INSERT INTO `cmseasy_b_area` VALUES('1895','靖安县','350');--
INSERT INTO `cmseasy_b_area` VALUES('1896','丰城市','350');--
INSERT INTO `cmseasy_b_area` VALUES('1897','临川区','351');--
INSERT INTO `cmseasy_b_area` VALUES('1898','黎川县','351');--
INSERT INTO `cmseasy_b_area` VALUES('1899','崇仁县','351');--
INSERT INTO `cmseasy_b_area` VALUES('1900','宜黄县','351');--
INSERT INTO `cmseasy_b_area` VALUES('1901','资溪县','351');--
INSERT INTO `cmseasy_b_area` VALUES('1902','广昌县','351');--
INSERT INTO `cmseasy_b_area` VALUES('1903','南城县','351');--
INSERT INTO `cmseasy_b_area` VALUES('1904','南丰县','351');--
INSERT INTO `cmseasy_b_area` VALUES('1905','乐安县','351');--
INSERT INTO `cmseasy_b_area` VALUES('1906','金溪县','351');--
INSERT INTO `cmseasy_b_area` VALUES('1907','东乡县','351');--
INSERT INTO `cmseasy_b_area` VALUES('1908','信州区','352');--
INSERT INTO `cmseasy_b_area` VALUES('1909','广丰县','352');--
INSERT INTO `cmseasy_b_area` VALUES('1910','铅山县','352');--
INSERT INTO `cmseasy_b_area` VALUES('1911','弋阳县','352');--
INSERT INTO `cmseasy_b_area` VALUES('1912','鄱阳县','352');--
INSERT INTO `cmseasy_b_area` VALUES('1913','婺源县','352');--
INSERT INTO `cmseasy_b_area` VALUES('1914','德兴市','352');--
INSERT INTO `cmseasy_b_area` VALUES('1915','上饶县','352');--
INSERT INTO `cmseasy_b_area` VALUES('1916','玉山县','352');--
INSERT INTO `cmseasy_b_area` VALUES('1917','横峰县','352');--
INSERT INTO `cmseasy_b_area` VALUES('1918','余干县','352');--
INSERT INTO `cmseasy_b_area` VALUES('1919','万年县','352');--
INSERT INTO `cmseasy_b_area` VALUES('1920','上城区','353');--
INSERT INTO `cmseasy_b_area` VALUES('1921','江干区','353');--
INSERT INTO `cmseasy_b_area` VALUES('1922','西湖区','353');--
INSERT INTO `cmseasy_b_area` VALUES('1923','萧山区','353');--
INSERT INTO `cmseasy_b_area` VALUES('1924','桐庐县','353');--
INSERT INTO `cmseasy_b_area` VALUES('1925','建德市','353');--
INSERT INTO `cmseasy_b_area` VALUES('1926','临安市','353');--
INSERT INTO `cmseasy_b_area` VALUES('1927','下城区','353');--
INSERT INTO `cmseasy_b_area` VALUES('1928','拱墅区','353');--
INSERT INTO `cmseasy_b_area` VALUES('1929','滨江区','353');--
INSERT INTO `cmseasy_b_area` VALUES('1930','余杭区','353');--
INSERT INTO `cmseasy_b_area` VALUES('1931','淳安县','353');--
INSERT INTO `cmseasy_b_area` VALUES('1932','富阳市','353');--
INSERT INTO `cmseasy_b_area` VALUES('1933','海曙区','354');--
INSERT INTO `cmseasy_b_area` VALUES('1934','江北区','354');--
INSERT INTO `cmseasy_b_area` VALUES('1935','镇海区','354');--
INSERT INTO `cmseasy_b_area` VALUES('1936','象山县','354');--
INSERT INTO `cmseasy_b_area` VALUES('1937','余姚市','354');--
INSERT INTO `cmseasy_b_area` VALUES('1938','奉化市','354');--
INSERT INTO `cmseasy_b_area` VALUES('1939','江东区','354');--
INSERT INTO `cmseasy_b_area` VALUES('1940','北仑区','354');--
INSERT INTO `cmseasy_b_area` VALUES('1941','鄞州区','354');--
INSERT INTO `cmseasy_b_area` VALUES('1942','宁海县','354');--
INSERT INTO `cmseasy_b_area` VALUES('1943','慈溪市','354');--
INSERT INTO `cmseasy_b_area` VALUES('1944','鹿城区','355');--
INSERT INTO `cmseasy_b_area` VALUES('1945','瓯海区','355');--
INSERT INTO `cmseasy_b_area` VALUES('1946','永嘉县','355');--
INSERT INTO `cmseasy_b_area` VALUES('1947','苍南县','355');--
INSERT INTO `cmseasy_b_area` VALUES('1948','泰顺县','355');--
INSERT INTO `cmseasy_b_area` VALUES('1949','乐清市','355');--
INSERT INTO `cmseasy_b_area` VALUES('1950','龙湾区','355');--
INSERT INTO `cmseasy_b_area` VALUES('1951','洞头县','355');--
INSERT INTO `cmseasy_b_area` VALUES('1952','平阳县','355');--
INSERT INTO `cmseasy_b_area` VALUES('1953','文成县','355');--
INSERT INTO `cmseasy_b_area` VALUES('1954','瑞安市','355');--
INSERT INTO `cmseasy_b_area` VALUES('1955','秀城区','356');--
INSERT INTO `cmseasy_b_area` VALUES('1956','海盐县','356');--
INSERT INTO `cmseasy_b_area` VALUES('1957','桐乡市','356');--
INSERT INTO `cmseasy_b_area` VALUES('1958','平湖市','356');--
INSERT INTO `cmseasy_b_area` VALUES('1959','嘉善县','356');--
INSERT INTO `cmseasy_b_area` VALUES('1960','海宁市','356');--
INSERT INTO `cmseasy_b_area` VALUES('1961','吴兴区','357');--
INSERT INTO `cmseasy_b_area` VALUES('1962','德清县','357');--
INSERT INTO `cmseasy_b_area` VALUES('1963','安吉县','357');--
INSERT INTO `cmseasy_b_area` VALUES('1964','南浔区','357');--
INSERT INTO `cmseasy_b_area` VALUES('1965','长兴县','357');--
INSERT INTO `cmseasy_b_area` VALUES('1966','越城区','358');--
INSERT INTO `cmseasy_b_area` VALUES('1967','嵊州市','358');--
INSERT INTO `cmseasy_b_area` VALUES('1968','绍兴县','358');--
INSERT INTO `cmseasy_b_area` VALUES('1969','新昌县','358');--
INSERT INTO `cmseasy_b_area` VALUES('1970','上虞市','358');--
INSERT INTO `cmseasy_b_area` VALUES('1971','诸暨市','358');--
INSERT INTO `cmseasy_b_area` VALUES('1972','婺城区','359');--
INSERT INTO `cmseasy_b_area` VALUES('1973','武义县','359');--
INSERT INTO `cmseasy_b_area` VALUES('1974','磐安县','359');--
INSERT INTO `cmseasy_b_area` VALUES('1975','义乌市','359');--
INSERT INTO `cmseasy_b_area` VALUES('1976','永康市','359');--
INSERT INTO `cmseasy_b_area` VALUES('1977','金东区','359');--
INSERT INTO `cmseasy_b_area` VALUES('1978','浦江县','359');--
INSERT INTO `cmseasy_b_area` VALUES('1979','兰溪市','359');--
INSERT INTO `cmseasy_b_area` VALUES('1980','东阳市','359');--
INSERT INTO `cmseasy_b_area` VALUES('1981','柯城区','360');--
INSERT INTO `cmseasy_b_area` VALUES('1982','常山县','360');--
INSERT INTO `cmseasy_b_area` VALUES('1983','龙游县','360');--
INSERT INTO `cmseasy_b_area` VALUES('1984','江山市','360');--
INSERT INTO `cmseasy_b_area` VALUES('1985','衢江区','360');--
INSERT INTO `cmseasy_b_area` VALUES('1986','开化县','360');--
INSERT INTO `cmseasy_b_area` VALUES('1987','定海区','361');--
INSERT INTO `cmseasy_b_area` VALUES('1988','岱山县','361');--
INSERT INTO `cmseasy_b_area` VALUES('1989','嵊泗县','361');--
INSERT INTO `cmseasy_b_area` VALUES('1990','普陀区','361');--
INSERT INTO `cmseasy_b_area` VALUES('1991','椒江区','362');--
INSERT INTO `cmseasy_b_area` VALUES('1992','路桥区','362');--
INSERT INTO `cmseasy_b_area` VALUES('1993','三门县','362');--
INSERT INTO `cmseasy_b_area` VALUES('1994','仙居县','362');--
INSERT INTO `cmseasy_b_area` VALUES('1995','临海市','362');--
INSERT INTO `cmseasy_b_area` VALUES('1996','黄岩区','362');--
INSERT INTO `cmseasy_b_area` VALUES('1997','玉环县','362');--
INSERT INTO `cmseasy_b_area` VALUES('1998','天台县','362');--
INSERT INTO `cmseasy_b_area` VALUES('1999','温岭市','362');--
INSERT INTO `cmseasy_b_area` VALUES('2000','莲都区','363');--
INSERT INTO `cmseasy_b_area` VALUES('2001','缙云县','363');--
INSERT INTO `cmseasy_b_area` VALUES('2002','松阳县','363');--
INSERT INTO `cmseasy_b_area` VALUES('2003','庆元县','363');--
INSERT INTO `cmseasy_b_area` VALUES('2004','龙泉市','363');--
INSERT INTO `cmseasy_b_area` VALUES('2005','青田县','363');--
INSERT INTO `cmseasy_b_area` VALUES('2006','遂昌县','363');--
INSERT INTO `cmseasy_b_area` VALUES('2007','云和县','363');--
INSERT INTO `cmseasy_b_area` VALUES('2008','景宁畲族自治县','363');--
INSERT INTO `cmseasy_b_area` VALUES('2009','鼓楼区','364');--
INSERT INTO `cmseasy_b_area` VALUES('2010','仓山区','364');--
INSERT INTO `cmseasy_b_area` VALUES('2011','晋安区','364');--
INSERT INTO `cmseasy_b_area` VALUES('2012','连江县','364');--
INSERT INTO `cmseasy_b_area` VALUES('2013','闽清县','364');--
INSERT INTO `cmseasy_b_area` VALUES('2014','平潭县','364');--
INSERT INTO `cmseasy_b_area` VALUES('2015','长乐市','364');--
INSERT INTO `cmseasy_b_area` VALUES('2016','台江区','364');--
INSERT INTO `cmseasy_b_area` VALUES('2017','马尾区','364');--
INSERT INTO `cmseasy_b_area` VALUES('2018','闽侯县','364');--
INSERT INTO `cmseasy_b_area` VALUES('2019','罗源县','364');--
INSERT INTO `cmseasy_b_area` VALUES('2020','永泰县','364');--
INSERT INTO `cmseasy_b_area` VALUES('2021','福清市','364');--
INSERT INTO `cmseasy_b_area` VALUES('2022','思明区','365');--
INSERT INTO `cmseasy_b_area` VALUES('2023','湖里区','365');--
INSERT INTO `cmseasy_b_area` VALUES('2024','同安区','365');--
INSERT INTO `cmseasy_b_area` VALUES('2025','翔安区','365');--
INSERT INTO `cmseasy_b_area` VALUES('2026','海沧区','365');--
INSERT INTO `cmseasy_b_area` VALUES('2027','集美区','365');--
INSERT INTO `cmseasy_b_area` VALUES('2028','梅列区','366');--
INSERT INTO `cmseasy_b_area` VALUES('2029','明溪县','366');--
INSERT INTO `cmseasy_b_area` VALUES('2030','宁化县','366');--
INSERT INTO `cmseasy_b_area` VALUES('2031','尤溪县','366');--
INSERT INTO `cmseasy_b_area` VALUES('2032','将乐县','366');--
INSERT INTO `cmseasy_b_area` VALUES('2033','建宁县','366');--
INSERT INTO `cmseasy_b_area` VALUES('2034','永安市','366');--
INSERT INTO `cmseasy_b_area` VALUES('2035','三元区','366');--
INSERT INTO `cmseasy_b_area` VALUES('2036','清流县','366');--
INSERT INTO `cmseasy_b_area` VALUES('2037','大田县','366');--
INSERT INTO `cmseasy_b_area` VALUES('2038','沙县','366');--
INSERT INTO `cmseasy_b_area` VALUES('2039','泰宁县','366');--
INSERT INTO `cmseasy_b_area` VALUES('2040','城厢区','367');--
INSERT INTO `cmseasy_b_area` VALUES('2041','荔城区','367');--
INSERT INTO `cmseasy_b_area` VALUES('2042','仙游县','367');--
INSERT INTO `cmseasy_b_area` VALUES('2043','涵江区','367');--
INSERT INTO `cmseasy_b_area` VALUES('2044','秀屿区','367');--
INSERT INTO `cmseasy_b_area` VALUES('2045','鲤城区','368');--
INSERT INTO `cmseasy_b_area` VALUES('2046','洛江区','368');--
INSERT INTO `cmseasy_b_area` VALUES('2047','惠安县','368');--
INSERT INTO `cmseasy_b_area` VALUES('2048','永春县','368');--
INSERT INTO `cmseasy_b_area` VALUES('2049','金门县','368');--
INSERT INTO `cmseasy_b_area` VALUES('2050','晋江市','368');--
INSERT INTO `cmseasy_b_area` VALUES('2051','南安市','368');--
INSERT INTO `cmseasy_b_area` VALUES('2052','丰泽区','368');--
INSERT INTO `cmseasy_b_area` VALUES('2053','泉港区','368');--
INSERT INTO `cmseasy_b_area` VALUES('2054','安溪县','368');--
INSERT INTO `cmseasy_b_area` VALUES('2055','德化县','368');--
INSERT INTO `cmseasy_b_area` VALUES('2056','石狮市','368');--
INSERT INTO `cmseasy_b_area` VALUES('2057','芗城区','369');--
INSERT INTO `cmseasy_b_area` VALUES('2058','云霄县','369');--
INSERT INTO `cmseasy_b_area` VALUES('2059','诏安县','369');--
INSERT INTO `cmseasy_b_area` VALUES('2060','东山县','369');--
INSERT INTO `cmseasy_b_area` VALUES('2061','平和县','369');--
INSERT INTO `cmseasy_b_area` VALUES('2062','龙海市','369');--
INSERT INTO `cmseasy_b_area` VALUES('2063','龙文区','369');--
INSERT INTO `cmseasy_b_area` VALUES('2064','漳浦县','369');--
INSERT INTO `cmseasy_b_area` VALUES('2065','长泰县','369');--
INSERT INTO `cmseasy_b_area` VALUES('2066','南靖县','369');--
INSERT INTO `cmseasy_b_area` VALUES('2067','华安县','369');--
INSERT INTO `cmseasy_b_area` VALUES('2068','延平区','370');--
INSERT INTO `cmseasy_b_area` VALUES('2069','浦城县','370');--
INSERT INTO `cmseasy_b_area` VALUES('2070','松溪县','370');--
INSERT INTO `cmseasy_b_area` VALUES('2071','邵武市','370');--
INSERT INTO `cmseasy_b_area` VALUES('2072','建瓯市','370');--
INSERT INTO `cmseasy_b_area` VALUES('2073','建阳市','370');--
INSERT INTO `cmseasy_b_area` VALUES('2074','顺昌县','370');--
INSERT INTO `cmseasy_b_area` VALUES('2075','光泽县','370');--
INSERT INTO `cmseasy_b_area` VALUES('2076','政和县','370');--
INSERT INTO `cmseasy_b_area` VALUES('2077','武夷山市','370');--
INSERT INTO `cmseasy_b_area` VALUES('2078','新罗区','371');--
INSERT INTO `cmseasy_b_area` VALUES('2079','永定县','371');--
INSERT INTO `cmseasy_b_area` VALUES('2080','武平县','371');--
INSERT INTO `cmseasy_b_area` VALUES('2081','漳平市','371');--
INSERT INTO `cmseasy_b_area` VALUES('2082','长汀县','371');--
INSERT INTO `cmseasy_b_area` VALUES('2083','上杭县','371');--
INSERT INTO `cmseasy_b_area` VALUES('2084','连城县','371');--
INSERT INTO `cmseasy_b_area` VALUES('2085','蕉城区','372');--
INSERT INTO `cmseasy_b_area` VALUES('2086','古田县','372');--
INSERT INTO `cmseasy_b_area` VALUES('2087','寿宁县','372');--
INSERT INTO `cmseasy_b_area` VALUES('2088','柘荣县','372');--
INSERT INTO `cmseasy_b_area` VALUES('2089','福鼎市','372');--
INSERT INTO `cmseasy_b_area` VALUES('2090','霞浦县','372');--
INSERT INTO `cmseasy_b_area` VALUES('2091','屏南县','372');--
INSERT INTO `cmseasy_b_area` VALUES('2092','周宁县','372');--
INSERT INTO `cmseasy_b_area` VALUES('2093','福安市','372');--
INSERT INTO `cmseasy_b_area` VALUES('2094','东山区','373');--
INSERT INTO `cmseasy_b_area` VALUES('2095','越秀区','373');--
INSERT INTO `cmseasy_b_area` VALUES('2096','天河区','373');--
INSERT INTO `cmseasy_b_area` VALUES('2097','白云区','373');--
INSERT INTO `cmseasy_b_area` VALUES('2098','番禺区','373');--
INSERT INTO `cmseasy_b_area` VALUES('2099','增城市','373');--
INSERT INTO `cmseasy_b_area` VALUES('2100','从化市','373');--
INSERT INTO `cmseasy_b_area` VALUES('2101','荔湾区','373');--
INSERT INTO `cmseasy_b_area` VALUES('2102','海珠区','373');--
INSERT INTO `cmseasy_b_area` VALUES('2103','芳村区','373');--
INSERT INTO `cmseasy_b_area` VALUES('2104','黄埔区','373');--
INSERT INTO `cmseasy_b_area` VALUES('2105','花都区','373');--
INSERT INTO `cmseasy_b_area` VALUES('2106','罗湖区','374');--
INSERT INTO `cmseasy_b_area` VALUES('2107','福田区','374');--
INSERT INTO `cmseasy_b_area` VALUES('2108','南山区','374');--
INSERT INTO `cmseasy_b_area` VALUES('2109','宝安区','374');--
INSERT INTO `cmseasy_b_area` VALUES('2110','龙岗区','374');--
INSERT INTO `cmseasy_b_area` VALUES('2111','盐田区','374');--
INSERT INTO `cmseasy_b_area` VALUES('2112','香洲区','375');--
INSERT INTO `cmseasy_b_area` VALUES('2113','拱北区','375');--
INSERT INTO `cmseasy_b_area` VALUES('2114','前山区','375');--
INSERT INTO `cmseasy_b_area` VALUES('2115','金湾区','375');--
INSERT INTO `cmseasy_b_area` VALUES('2116','斗门区','375');--
INSERT INTO `cmseasy_b_area` VALUES('2117','龙湖区','376');--
INSERT INTO `cmseasy_b_area` VALUES('2118','濠江区','376');--
INSERT INTO `cmseasy_b_area` VALUES('2119','潮南区','376');--
INSERT INTO `cmseasy_b_area` VALUES('2120','澄海区','376');--
INSERT INTO `cmseasy_b_area` VALUES('2121','金平区','376');--
INSERT INTO `cmseasy_b_area` VALUES('2122','潮阳区','376');--
INSERT INTO `cmseasy_b_area` VALUES('2123','南澳县','376');--
INSERT INTO `cmseasy_b_area` VALUES('2124','武江区','377');--
INSERT INTO `cmseasy_b_area` VALUES('2125','曲江区','377');--
INSERT INTO `cmseasy_b_area` VALUES('2126','仁化县','377');--
INSERT INTO `cmseasy_b_area` VALUES('2127','乳源瑶族自治县','377');--
INSERT INTO `cmseasy_b_area` VALUES('2128','乐昌市','377');--
INSERT INTO `cmseasy_b_area` VALUES('2129','南雄市','377');--
INSERT INTO `cmseasy_b_area` VALUES('2130','浈江区','377');--
INSERT INTO `cmseasy_b_area` VALUES('2131','始兴县','377');--
INSERT INTO `cmseasy_b_area` VALUES('2132','翁源县','377');--
INSERT INTO `cmseasy_b_area` VALUES('2133','新丰县','377');--
INSERT INTO `cmseasy_b_area` VALUES('2134','惠城区','378');--
INSERT INTO `cmseasy_b_area` VALUES('2135','博罗县','378');--
INSERT INTO `cmseasy_b_area` VALUES('2136','龙门县','378');--
INSERT INTO `cmseasy_b_area` VALUES('2137','惠阳区','378');--
INSERT INTO `cmseasy_b_area` VALUES('2138','惠东县','378');--
INSERT INTO `cmseasy_b_area` VALUES('2139','东源县','379');--
INSERT INTO `cmseasy_b_area` VALUES('2140','源城区','379');--
INSERT INTO `cmseasy_b_area` VALUES('2141','龙川县','379');--
INSERT INTO `cmseasy_b_area` VALUES('2142','和平县','379');--
INSERT INTO `cmseasy_b_area` VALUES('2143','紫金县','379');--
INSERT INTO `cmseasy_b_area` VALUES('2144','连平县','379');--
INSERT INTO `cmseasy_b_area` VALUES('2145','梅江区','380');--
INSERT INTO `cmseasy_b_area` VALUES('2146','大埔县','380');--
INSERT INTO `cmseasy_b_area` VALUES('2147','五华县','380');--
INSERT INTO `cmseasy_b_area` VALUES('2148','蕉岭县','380');--
INSERT INTO `cmseasy_b_area` VALUES('2149','兴宁市','380');--
INSERT INTO `cmseasy_b_area` VALUES('2150','梅县','380');--
INSERT INTO `cmseasy_b_area` VALUES('2151','丰顺县','380');--
INSERT INTO `cmseasy_b_area` VALUES('2152','平远县','380');--
INSERT INTO `cmseasy_b_area` VALUES('2153','城区','381');--
INSERT INTO `cmseasy_b_area` VALUES('2154','陆河县','381');--
INSERT INTO `cmseasy_b_area` VALUES('2155','陆丰市','381');--
INSERT INTO `cmseasy_b_area` VALUES('2156','海丰县','381');--
INSERT INTO `cmseasy_b_area` VALUES('2157','蓬江区','384');--
INSERT INTO `cmseasy_b_area` VALUES('2158','恩平市','384');--
INSERT INTO `cmseasy_b_area` VALUES('2159','江海区','384');--
INSERT INTO `cmseasy_b_area` VALUES('2160','新会区','384');--
INSERT INTO `cmseasy_b_area` VALUES('2161','开平市','384');--
INSERT INTO `cmseasy_b_area` VALUES('2162','台山市','384');--
INSERT INTO `cmseasy_b_area` VALUES('2163','鹤山市','384');--
INSERT INTO `cmseasy_b_area` VALUES('2164','禅城区','385');--
INSERT INTO `cmseasy_b_area` VALUES('2165','顺德区','385');--
INSERT INTO `cmseasy_b_area` VALUES('2166','高明区','385');--
INSERT INTO `cmseasy_b_area` VALUES('2167','南海区','385');--
INSERT INTO `cmseasy_b_area` VALUES('2168','三水区','385');--
INSERT INTO `cmseasy_b_area` VALUES('2169','江城区','386');--
INSERT INTO `cmseasy_b_area` VALUES('2170','阳东县','386');--
INSERT INTO `cmseasy_b_area` VALUES('2171','阳春市','386');--
INSERT INTO `cmseasy_b_area` VALUES('2172','阳西县','386');--
INSERT INTO `cmseasy_b_area` VALUES('2173','赤坎区','387');--
INSERT INTO `cmseasy_b_area` VALUES('2174','坡头区','387');--
INSERT INTO `cmseasy_b_area` VALUES('2175','遂溪县','387');--
INSERT INTO `cmseasy_b_area` VALUES('2176','廉江市','387');--
INSERT INTO `cmseasy_b_area` VALUES('2177','吴川市','387');--
INSERT INTO `cmseasy_b_area` VALUES('2178','霞山区','387');--
INSERT INTO `cmseasy_b_area` VALUES('2179','麻章区','387');--
INSERT INTO `cmseasy_b_area` VALUES('2180','徐闻县','387');--
INSERT INTO `cmseasy_b_area` VALUES('2181','雷州市','387');--
INSERT INTO `cmseasy_b_area` VALUES('2182','茂南区','388');--
INSERT INTO `cmseasy_b_area` VALUES('2183','电白县','388');--
INSERT INTO `cmseasy_b_area` VALUES('2184','化州市','388');--
INSERT INTO `cmseasy_b_area` VALUES('2185','信宜市','388');--
INSERT INTO `cmseasy_b_area` VALUES('2186','茂港区','388');--
INSERT INTO `cmseasy_b_area` VALUES('2187','高州市','388');--
INSERT INTO `cmseasy_b_area` VALUES('2188','端州区','389');--
INSERT INTO `cmseasy_b_area` VALUES('2189','广宁县','389');--
INSERT INTO `cmseasy_b_area` VALUES('2190','封开县','389');--
INSERT INTO `cmseasy_b_area` VALUES('2191','高要市','389');--
INSERT INTO `cmseasy_b_area` VALUES('2192','四会市','389');--
INSERT INTO `cmseasy_b_area` VALUES('2193','鼎湖区','389');--
INSERT INTO `cmseasy_b_area` VALUES('2194','怀集县','389');--
INSERT INTO `cmseasy_b_area` VALUES('2195','德庆县','389');--
INSERT INTO `cmseasy_b_area` VALUES('2196','清城区','390');--
INSERT INTO `cmseasy_b_area` VALUES('2197','阳山县','390');--
INSERT INTO `cmseasy_b_area` VALUES('2198','连南瑶族自治县','390');--
INSERT INTO `cmseasy_b_area` VALUES('2199','英德市','390');--
INSERT INTO `cmseasy_b_area` VALUES('2200','连州市','390');--
INSERT INTO `cmseasy_b_area` VALUES('2201','佛冈县','390');--
INSERT INTO `cmseasy_b_area` VALUES('2202','连山壮族瑶族自治县','390');--
INSERT INTO `cmseasy_b_area` VALUES('2203','清新县','390');--
INSERT INTO `cmseasy_b_area` VALUES('2204','湘桥区','391');--
INSERT INTO `cmseasy_b_area` VALUES('2205','饶平县','391');--
INSERT INTO `cmseasy_b_area` VALUES('2206','潮安县','391');--
INSERT INTO `cmseasy_b_area` VALUES('2207','榕城区','392');--
INSERT INTO `cmseasy_b_area` VALUES('2208','揭西县','392');--
INSERT INTO `cmseasy_b_area` VALUES('2209','普宁市','392');--
INSERT INTO `cmseasy_b_area` VALUES('2210','揭东县','392');--
INSERT INTO `cmseasy_b_area` VALUES('2211','惠来县','392');--
INSERT INTO `cmseasy_b_area` VALUES('2212','云城区','393');--
INSERT INTO `cmseasy_b_area` VALUES('2213','郁南县','393');--
INSERT INTO `cmseasy_b_area` VALUES('2214','罗定市','393');--
INSERT INTO `cmseasy_b_area` VALUES('2215','新兴县','393');--
INSERT INTO `cmseasy_b_area` VALUES('2216','云安县','393');--
INSERT INTO `cmseasy_b_area` VALUES('2217','秀英区','394');--
INSERT INTO `cmseasy_b_area` VALUES('2218','琼山区','394');--
INSERT INTO `cmseasy_b_area` VALUES('2219','美兰区','394');--
INSERT INTO `cmseasy_b_area` VALUES('2220','龙华区','394');--
INSERT INTO `cmseasy_b_area` VALUES('2221','五指山市','396');--
INSERT INTO `cmseasy_b_area` VALUES('2222','儋州市','396');--
INSERT INTO `cmseasy_b_area` VALUES('2223','万宁市','396');--
INSERT INTO `cmseasy_b_area` VALUES('2224','定安县','396');--
INSERT INTO `cmseasy_b_area` VALUES('2225','澄迈县','396');--
INSERT INTO `cmseasy_b_area` VALUES('2226','白沙黎族自治县','396');--
INSERT INTO `cmseasy_b_area` VALUES('2227','乐东黎族自治县','396');--
INSERT INTO `cmseasy_b_area` VALUES('2228','保亭黎族苗族自\r\n治县','396');--
INSERT INTO `cmseasy_b_area` VALUES('2229','西沙群岛','396');--
INSERT INTO `cmseasy_b_area` VALUES('2230','中沙群岛的岛礁及其海域','396');--
INSERT INTO `cmseasy_b_area` VALUES('2231','琼海市','396');--
INSERT INTO `cmseasy_b_area` VALUES('2232','文昌市','396');--
INSERT INTO `cmseasy_b_area` VALUES('2233','东方市','396');--
INSERT INTO `cmseasy_b_area` VALUES('2234','屯昌县','396');--
INSERT INTO `cmseasy_b_area` VALUES('2235','临高县','396');--
INSERT INTO `cmseasy_b_area` VALUES('2236','昌江黎族自治县','396');--
INSERT INTO `cmseasy_b_area` VALUES('2237','陵水黎族自治县','396');--
INSERT INTO `cmseasy_b_area` VALUES('2238','琼中黎族苗族自治县','396');--
INSERT INTO `cmseasy_b_area` VALUES('2239','南沙群岛','396');--
INSERT INTO `cmseasy_b_area` VALUES('2240','南明区','397');--
INSERT INTO `cmseasy_b_area` VALUES('2241','花溪区','397');--
INSERT INTO `cmseasy_b_area` VALUES('2242','白云区','397');--
INSERT INTO `cmseasy_b_area` VALUES('2243','开阳县','397');--
INSERT INTO `cmseasy_b_area` VALUES('2244','修文县','397');--
INSERT INTO `cmseasy_b_area` VALUES('2245','清镇市','397');--
INSERT INTO `cmseasy_b_area` VALUES('2246','云岩区','397');--
INSERT INTO `cmseasy_b_area` VALUES('2247','乌当区','397');--
INSERT INTO `cmseasy_b_area` VALUES('2248','小河区','397');--
INSERT INTO `cmseasy_b_area` VALUES('2249','息烽县','397');--
INSERT INTO `cmseasy_b_area` VALUES('2250','钟山区','398');--
INSERT INTO `cmseasy_b_area` VALUES('2251','水城县','398');--
INSERT INTO `cmseasy_b_area` VALUES('2252','盘县','398');--
INSERT INTO `cmseasy_b_area` VALUES('2253','六枝特区','398');--
INSERT INTO `cmseasy_b_area` VALUES('2254','红花岗区','399');--
INSERT INTO `cmseasy_b_area` VALUES('2255','遵义县','399');--
INSERT INTO `cmseasy_b_area` VALUES('2256','绥阳县','399');--
INSERT INTO `cmseasy_b_area` VALUES('2257','道真仡佬族苗族自治县','399');--
INSERT INTO `cmseasy_b_area` VALUES('2258','凤冈县','399');--
INSERT INTO `cmseasy_b_area` VALUES('2259','余庆县','399');--
INSERT INTO `cmseasy_b_area` VALUES('2260','赤水市','399');--
INSERT INTO `cmseasy_b_area` VALUES('2261','仁怀市','399');--
INSERT INTO `cmseasy_b_area` VALUES('2262','汇川区','399');--
INSERT INTO `cmseasy_b_area` VALUES('2263','桐梓县','399');--
INSERT INTO `cmseasy_b_area` VALUES('2264','正安县','399');--
INSERT INTO `cmseasy_b_area` VALUES('2265','务川仡佬族苗族自治县','399');--
INSERT INTO `cmseasy_b_area` VALUES('2266','湄潭县','399');--
INSERT INTO `cmseasy_b_area` VALUES('2267','习水县','399');--
INSERT INTO `cmseasy_b_area` VALUES('2268','西秀区','400');--
INSERT INTO `cmseasy_b_area` VALUES('2269','普定县','400');--
INSERT INTO `cmseasy_b_area` VALUES('2270','关岭布依族苗族自治县','400');--
INSERT INTO `cmseasy_b_area` VALUES('2271','紫云苗族布依族自治县','400');--
INSERT INTO `cmseasy_b_area` VALUES('2272','平坝县','400');--
INSERT INTO `cmseasy_b_area` VALUES('2273','镇宁布依族苗族自治县','400');--
INSERT INTO `cmseasy_b_area` VALUES('2274','铜仁市','401');--
INSERT INTO `cmseasy_b_area` VALUES('2275','玉屏侗族自治县','401');--
INSERT INTO `cmseasy_b_area` VALUES('2276','思南县','401');--
INSERT INTO `cmseasy_b_area` VALUES('2277','德江县','401');--
INSERT INTO `cmseasy_b_area` VALUES('2278','松桃苗族自治县','401');--
INSERT INTO `cmseasy_b_area` VALUES('2279','万山特区','401');--
INSERT INTO `cmseasy_b_area` VALUES('2280','江口县','401');--
INSERT INTO `cmseasy_b_area` VALUES('2281','石阡县','401');--
INSERT INTO `cmseasy_b_area` VALUES('2282','印江土家族苗族自治县','401');--
INSERT INTO `cmseasy_b_area` VALUES('2283','沿河土家族自治县','401');--
INSERT INTO `cmseasy_b_area` VALUES('2284','毕节市','402');--
INSERT INTO `cmseasy_b_area` VALUES('2285','黔西县','402');--
INSERT INTO `cmseasy_b_area` VALUES('2286','织金县','402');--
INSERT INTO `cmseasy_b_area` VALUES('2287','威宁彝族回族苗族自治县','402');--
INSERT INTO `cmseasy_b_area` VALUES('2288','赫章县','402');--
INSERT INTO `cmseasy_b_area` VALUES('2289','大方县','402');--
INSERT INTO `cmseasy_b_area` VALUES('2290','金沙县','402');--
INSERT INTO `cmseasy_b_area` VALUES('2291','纳雍县','402');--
INSERT INTO `cmseasy_b_area` VALUES('2292','安龙县','403');--
INSERT INTO `cmseasy_b_area` VALUES('2293','兴义市','403');--
INSERT INTO `cmseasy_b_area` VALUES('2294','普安县','403');--
INSERT INTO `cmseasy_b_area` VALUES('2295','贞丰县','403');--
INSERT INTO `cmseasy_b_area` VALUES('2296','册亨县','403');--
INSERT INTO `cmseasy_b_area` VALUES('2297','兴仁县','403');--
INSERT INTO `cmseasy_b_area` VALUES('2298','晴隆县','403');--
INSERT INTO `cmseasy_b_area` VALUES('2299','望谟县','403');--
INSERT INTO `cmseasy_b_area` VALUES('2300','凯里市','404');--
INSERT INTO `cmseasy_b_area` VALUES('2301','施秉县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2302','镇远县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2303','天柱县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2304','剑河县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2305','黎平县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2306','从江县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2307','麻江县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2308','丹寨县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2309','黄平县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2310','三穗县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2311','岑巩县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2312','锦屏县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2313','台江县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2314','榕江县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2315','雷山县','404');--
INSERT INTO `cmseasy_b_area` VALUES('2316','都匀市','405');--
INSERT INTO `cmseasy_b_area` VALUES('2317','荔波县','405');--
INSERT INTO `cmseasy_b_area` VALUES('2318','瓮安县','405');--
INSERT INTO `cmseasy_b_area` VALUES('2319','平塘县','405');--
INSERT INTO `cmseasy_b_area` VALUES('2320','长顺县','405');--
INSERT INTO `cmseasy_b_area` VALUES('2321','惠水县','405');--
INSERT INTO `cmseasy_b_area` VALUES('2322','三都水族自治县','405');--
INSERT INTO `cmseasy_b_area` VALUES('2323','福泉市','405');--
INSERT INTO `cmseasy_b_area` VALUES('2324','贵定县','405');--
INSERT INTO `cmseasy_b_area` VALUES('2325','独山县','405');--
INSERT INTO `cmseasy_b_area` VALUES('2326','罗甸县','405');--
INSERT INTO `cmseasy_b_area` VALUES('2327','龙里县','405');--
INSERT INTO `cmseasy_b_area` VALUES('2328','五华区','406');--
INSERT INTO `cmseasy_b_area` VALUES('2329','官渡区','406');--
INSERT INTO `cmseasy_b_area` VALUES('2330','东川区','406');--
INSERT INTO `cmseasy_b_area` VALUES('2331','晋宁县','406');--
INSERT INTO `cmseasy_b_area` VALUES('2332','宜良县','406');--
INSERT INTO `cmseasy_b_area` VALUES('2333','嵩明县','406');--
INSERT INTO `cmseasy_b_area` VALUES('2334','寻甸回族彝族自治县','406');--
INSERT INTO `cmseasy_b_area` VALUES('2335','盘龙区','406');--
INSERT INTO `cmseasy_b_area` VALUES('2336','西山区','406');--
INSERT INTO `cmseasy_b_area` VALUES('2337','呈贡县','406');--
INSERT INTO `cmseasy_b_area` VALUES('2338','富民县','406');--
INSERT INTO `cmseasy_b_area` VALUES('2339','石林彝族自治县','406');--
INSERT INTO `cmseasy_b_area` VALUES('2340','禄劝彝族苗族自治县','406');--
INSERT INTO `cmseasy_b_area` VALUES('2341','安宁市','406');--
INSERT INTO `cmseasy_b_area` VALUES('2342','麒麟区','407');--
INSERT INTO `cmseasy_b_area` VALUES('2343','陆良县','407');--
INSERT INTO `cmseasy_b_area` VALUES('2344','罗平县','407');--
INSERT INTO `cmseasy_b_area` VALUES('2345','会泽县','407');--
INSERT INTO `cmseasy_b_area` VALUES('2346','马龙县','407');--
INSERT INTO `cmseasy_b_area` VALUES('2347','师宗县','407');--
INSERT INTO `cmseasy_b_area` VALUES('2348','富源县','407');--
INSERT INTO `cmseasy_b_area` VALUES('2349','沾益县','407');--
INSERT INTO `cmseasy_b_area` VALUES('2350','宣威市','407');--
INSERT INTO `cmseasy_b_area` VALUES('2351','红塔区','408');--
INSERT INTO `cmseasy_b_area` VALUES('2352','澄江县','408');--
INSERT INTO `cmseasy_b_area` VALUES('2353','华宁县','408');--
INSERT INTO `cmseasy_b_area` VALUES('2354','峨山彝族自治县','408');--
INSERT INTO `cmseasy_b_area` VALUES('2355','元江哈尼族彝族傣族自治县','408');--
INSERT INTO `cmseasy_b_area` VALUES('2356','江川县','408');--
INSERT INTO `cmseasy_b_area` VALUES('2357','通海县','408');--
INSERT INTO `cmseasy_b_area` VALUES('2358','易门县','408');--
INSERT INTO `cmseasy_b_area` VALUES('2359','新平彝族傣族自治县','408');--
INSERT INTO `cmseasy_b_area` VALUES('2360','隆阳区','409');--
INSERT INTO `cmseasy_b_area` VALUES('2361','腾冲县','409');--
INSERT INTO `cmseasy_b_area` VALUES('2362','昌宁县','409');--
INSERT INTO `cmseasy_b_area` VALUES('2363','施甸县','409');--
INSERT INTO `cmseasy_b_area` VALUES('2364','龙陵县','409');--
INSERT INTO `cmseasy_b_area` VALUES('2365','昭阳区','410');--
INSERT INTO `cmseasy_b_area` VALUES('2366','巧家县','410');--
INSERT INTO `cmseasy_b_area` VALUES('2367','大关县','410');--
INSERT INTO `cmseasy_b_area` VALUES('2368','绥江县','410');--
INSERT INTO `cmseasy_b_area` VALUES('2369','彝良县','410');--
INSERT INTO `cmseasy_b_area` VALUES('2370','水富县','410');--
INSERT INTO `cmseasy_b_area` VALUES('2371','鲁甸县','410');--
INSERT INTO `cmseasy_b_area` VALUES('2372','盐津县','410');--
INSERT INTO `cmseasy_b_area` VALUES('2373','永善县','410');--
INSERT INTO `cmseasy_b_area` VALUES('2374','镇雄县','410');--
INSERT INTO `cmseasy_b_area` VALUES('2375','威信县','410');--
INSERT INTO `cmseasy_b_area` VALUES('2376','翠云区','411');--
INSERT INTO `cmseasy_b_area` VALUES('2377','墨江哈尼族自治县','411');--
INSERT INTO `cmseasy_b_area` VALUES('2378','景谷傣族彝族自治县','411');--
INSERT INTO `cmseasy_b_area` VALUES('2379','江城哈尼族彝族自治县','411');--
INSERT INTO `cmseasy_b_area` VALUES('2380','澜沧拉祜族自治县','411');--
INSERT INTO `cmseasy_b_area` VALUES('2381','西盟佤族自治县','411');--
INSERT INTO `cmseasy_b_area` VALUES('2382','普洱哈尼族彝族自治县','411');--
INSERT INTO `cmseasy_b_area` VALUES('2383','景东彝族自治县','411');--
INSERT INTO `cmseasy_b_area` VALUES('2384','镇沅彝族哈尼族拉祜族自治县','411');--
INSERT INTO `cmseasy_b_area` VALUES('2385','孟连傣族拉祜族佤族自治县','411');--
INSERT INTO `cmseasy_b_area` VALUES('2386','临翔区','412');--
INSERT INTO `cmseasy_b_area` VALUES('2387','云县','412');--
INSERT INTO `cmseasy_b_area` VALUES('2388','镇康县','412');--
INSERT INTO `cmseasy_b_area` VALUES('2389','耿马傣族佤族自治县','412');--
INSERT INTO `cmseasy_b_area` VALUES('2390','沧源佤族自治县','412');--
INSERT INTO `cmseasy_b_area` VALUES('2391','凤庆县','412');--
INSERT INTO `cmseasy_b_area` VALUES('2392','永德县','412');--
INSERT INTO `cmseasy_b_area` VALUES('2393','双江拉祜族佤族布朗族傣族自治县','412');--
INSERT INTO `cmseasy_b_area` VALUES('2394','宁蒗彝族自治县','413');--
INSERT INTO `cmseasy_b_area` VALUES('2395','古城区','413');--
INSERT INTO `cmseasy_b_area` VALUES('2396','永胜县','413');--
INSERT INTO `cmseasy_b_area` VALUES('2397','玉龙纳西族自治县','413');--
INSERT INTO `cmseasy_b_area` VALUES('2398','华坪县','413');--
INSERT INTO `cmseasy_b_area` VALUES('2399','富宁县','414');--
INSERT INTO `cmseasy_b_area` VALUES('2400','文山县','414');--
INSERT INTO `cmseasy_b_area` VALUES('2401','西畴县','414');--
INSERT INTO `cmseasy_b_area` VALUES('2402','马关县','414');--
INSERT INTO `cmseasy_b_area` VALUES('2403','广南县','414');--
INSERT INTO `cmseasy_b_area` VALUES('2404','砚山县','414');--
INSERT INTO `cmseasy_b_area` VALUES('2405','麻栗坡县','414');--
INSERT INTO `cmseasy_b_area` VALUES('2406','丘北县','414');--
INSERT INTO `cmseasy_b_area` VALUES('2407','个旧市','415');--
INSERT INTO `cmseasy_b_area` VALUES('2408','蒙自县','415');--
INSERT INTO `cmseasy_b_area` VALUES('2409','建水县','415');--
INSERT INTO `cmseasy_b_area` VALUES('2410','弥勒县','415');--
INSERT INTO `cmseasy_b_area` VALUES('2411','元阳县','415');--
INSERT INTO `cmseasy_b_area` VALUES('2412','金平苗族瑶族傣族自治县','415');--
INSERT INTO `cmseasy_b_area` VALUES('2413','河口瑶族自治县','415');--
INSERT INTO `cmseasy_b_area` VALUES('2414','开远市','415');--
INSERT INTO `cmseasy_b_area` VALUES('2415','屏边苗族自治县','415');--
INSERT INTO `cmseasy_b_area` VALUES('2416','石屏县','415');--
INSERT INTO `cmseasy_b_area` VALUES('2417','泸西县','415');--
INSERT INTO `cmseasy_b_area` VALUES('2418','红河县','415');--
INSERT INTO `cmseasy_b_area` VALUES('2419','绿春县','415');--
INSERT INTO `cmseasy_b_area` VALUES('2420','景洪市','416');--
INSERT INTO `cmseasy_b_area` VALUES('2421','勐腊县','416');--
INSERT INTO `cmseasy_b_area` VALUES('2422','勐海县','416');--
INSERT INTO `cmseasy_b_area` VALUES('2423','楚雄市','417');--
INSERT INTO `cmseasy_b_area` VALUES('2424','牟定县','417');--
INSERT INTO `cmseasy_b_area` VALUES('2425','姚安县','417');--
INSERT INTO `cmseasy_b_area` VALUES('2426','永仁县','417');--
INSERT INTO `cmseasy_b_area` VALUES('2427','武定县','417');--
INSERT INTO `cmseasy_b_area` VALUES('2428','禄丰县','417');--
INSERT INTO `cmseasy_b_area` VALUES('2429','双柏县','417');--
INSERT INTO `cmseasy_b_area` VALUES('2430','南华县','417');--
INSERT INTO `cmseasy_b_area` VALUES('2431','大姚县','417');--
INSERT INTO `cmseasy_b_area` VALUES('2432','元谋县','417');--
INSERT INTO `cmseasy_b_area` VALUES('2433','大理市','418');--
INSERT INTO `cmseasy_b_area` VALUES('2434','祥云县','418');--
INSERT INTO `cmseasy_b_area` VALUES('2435','弥渡县','418');--
INSERT INTO `cmseasy_b_area` VALUES('2436','巍山彝族回族自治县','418');--
INSERT INTO `cmseasy_b_area` VALUES('2437','云龙县','418');--
INSERT INTO `cmseasy_b_area` VALUES('2438','剑川县','418');--
INSERT INTO `cmseasy_b_area` VALUES('2439','鹤庆县','418');--
INSERT INTO `cmseasy_b_area` VALUES('2440','漾濞彝族自治县','418');--
INSERT INTO `cmseasy_b_area` VALUES('2441','宾川县','418');--
INSERT INTO `cmseasy_b_area` VALUES('2442','南涧彝族自治县','418');--
INSERT INTO `cmseasy_b_area` VALUES('2443','永平县','418');--
INSERT INTO `cmseasy_b_area` VALUES('2444','洱源县','418');--
INSERT INTO `cmseasy_b_area` VALUES('2445','瑞丽市','419');--
INSERT INTO `cmseasy_b_area` VALUES('2446','梁河县','419');--
INSERT INTO `cmseasy_b_area` VALUES('2447','陇川县','419');--
INSERT INTO `cmseasy_b_area` VALUES('2448','潞西市','419');--
INSERT INTO `cmseasy_b_area` VALUES('2449','盈江县','419');--
INSERT INTO `cmseasy_b_area` VALUES('2450','泸水县','420');--
INSERT INTO `cmseasy_b_area` VALUES('2451','贡山独龙族怒族自治县','420');--
INSERT INTO `cmseasy_b_area` VALUES('2452','维西傈僳族自治县','420');--
INSERT INTO `cmseasy_b_area` VALUES('2453','福贡县','420');--
INSERT INTO `cmseasy_b_area` VALUES('2454','兰坪白族普米族自治县','420');--
INSERT INTO `cmseasy_b_area` VALUES('2455','香格里拉县','421');--
INSERT INTO `cmseasy_b_area` VALUES('2456','德钦县','421');--
INSERT INTO `cmseasy_b_area` VALUES('2457','锦江区','422');--
INSERT INTO `cmseasy_b_area` VALUES('2458','金牛区','422');--
INSERT INTO `cmseasy_b_area` VALUES('2459','成华区','422');--
INSERT INTO `cmseasy_b_area` VALUES('2460','青白江区','422');--
INSERT INTO `cmseasy_b_area` VALUES('2461','金堂县','422');--
INSERT INTO `cmseasy_b_area` VALUES('2462','温江县','422');--
INSERT INTO `cmseasy_b_area` VALUES('2463','大邑县','422');--
INSERT INTO `cmseasy_b_area` VALUES('2464','新津县','422');--
INSERT INTO `cmseasy_b_area` VALUES('2465','彭州市','422');--
INSERT INTO `cmseasy_b_area` VALUES('2466','崇州市','422');--
INSERT INTO `cmseasy_b_area` VALUES('2467','青羊区','422');--
INSERT INTO `cmseasy_b_area` VALUES('2468','武侯区','422');--
INSERT INTO `cmseasy_b_area` VALUES('2469','龙泉驿区','422');--
INSERT INTO `cmseasy_b_area` VALUES('2470','新都区','422');--
INSERT INTO `cmseasy_b_area` VALUES('2471','双流县','422');--
INSERT INTO `cmseasy_b_area` VALUES('2472','郫县','422');--
INSERT INTO `cmseasy_b_area` VALUES('2473','蒲江县','422');--
INSERT INTO `cmseasy_b_area` VALUES('2474','都江堰市','422');--
INSERT INTO `cmseasy_b_area` VALUES('2475','邛崃市','422');--
INSERT INTO `cmseasy_b_area` VALUES('2476','自流井区','423');--
INSERT INTO `cmseasy_b_area` VALUES('2477','大安区','423');--
INSERT INTO `cmseasy_b_area` VALUES('2478','荣县','423');--
INSERT INTO `cmseasy_b_area` VALUES('2479','富顺县','423');--
INSERT INTO `cmseasy_b_area` VALUES('2480','贡井区','423');--
INSERT INTO `cmseasy_b_area` VALUES('2481','沿滩区','423');--
INSERT INTO `cmseasy_b_area` VALUES('2482','东区','424');--
INSERT INTO `cmseasy_b_area` VALUES('2483','仁和区','424');--
INSERT INTO `cmseasy_b_area` VALUES('2484','盐边县','424');--
INSERT INTO `cmseasy_b_area` VALUES('2485','西区','424');--
INSERT INTO `cmseasy_b_area` VALUES('2486','米易县','424');--
INSERT INTO `cmseasy_b_area` VALUES('2487','江阳区','425');--
INSERT INTO `cmseasy_b_area` VALUES('2488','龙马潭区','425');--
INSERT INTO `cmseasy_b_area` VALUES('2489','合江县','425');--
INSERT INTO `cmseasy_b_area` VALUES('2490','古蔺县','425');--
INSERT INTO `cmseasy_b_area` VALUES('2491','纳溪区','425');--
INSERT INTO `cmseasy_b_area` VALUES('2492','泸县','425');--
INSERT INTO `cmseasy_b_area` VALUES('2493','叙永县','425');--
INSERT INTO `cmseasy_b_area` VALUES('2494','旌阳区','426');--
INSERT INTO `cmseasy_b_area` VALUES('2495','罗江县','426');--
INSERT INTO `cmseasy_b_area` VALUES('2496','什邡市','426');--
INSERT INTO `cmseasy_b_area` VALUES('2497','绵竹市','426');--
INSERT INTO `cmseasy_b_area` VALUES('2498','中江县','426');--
INSERT INTO `cmseasy_b_area` VALUES('2499','广汉市','426');--
INSERT INTO `cmseasy_b_area` VALUES('2500','涪城区','427');--
INSERT INTO `cmseasy_b_area` VALUES('2501','三台县','427');--
INSERT INTO `cmseasy_b_area` VALUES('2502','江油市','427');--
INSERT INTO `cmseasy_b_area` VALUES('2503','游仙区','427');--
INSERT INTO `cmseasy_b_area` VALUES('2504','盐亭县','427');--
INSERT INTO `cmseasy_b_area` VALUES('2505','安县','427');--
INSERT INTO `cmseasy_b_area` VALUES('2506','平武县','427');--
INSERT INTO `cmseasy_b_area` VALUES('2507','梓潼县','427');--
INSERT INTO `cmseasy_b_area` VALUES('2508','市中区','428');--
INSERT INTO `cmseasy_b_area` VALUES('2509','朝天区','428');--
INSERT INTO `cmseasy_b_area` VALUES('2510','青川县','428');--
INSERT INTO `cmseasy_b_area` VALUES('2511','苍溪县','428');--
INSERT INTO `cmseasy_b_area` VALUES('2512','元坝区','428');--
INSERT INTO `cmseasy_b_area` VALUES('2513','旺苍县','428');--
INSERT INTO `cmseasy_b_area` VALUES('2514','剑阁县','428');--
INSERT INTO `cmseasy_b_area` VALUES('2515','船山区','429');--
INSERT INTO `cmseasy_b_area` VALUES('2516','蓬溪县','429');--
INSERT INTO `cmseasy_b_area` VALUES('2517','大英县','429');--
INSERT INTO `cmseasy_b_area` VALUES('2518','安居区','429');--
INSERT INTO `cmseasy_b_area` VALUES('2519','射洪县','429');--
INSERT INTO `cmseasy_b_area` VALUES('2520','市中区','430');--
INSERT INTO `cmseasy_b_area` VALUES('2521','威远县','430');--
INSERT INTO `cmseasy_b_area` VALUES('2522','隆昌县','430');--
INSERT INTO `cmseasy_b_area` VALUES('2523','东兴区','430');--
INSERT INTO `cmseasy_b_area` VALUES('2524','资中县','430');--
INSERT INTO `cmseasy_b_area` VALUES('2525','市中区','431');--
INSERT INTO `cmseasy_b_area` VALUES('2526','五通桥区','431');--
INSERT INTO `cmseasy_b_area` VALUES('2527','犍为县','431');--
INSERT INTO `cmseasy_b_area` VALUES('2528','夹江县','431');--
INSERT INTO `cmseasy_b_area` VALUES('2529','峨边彝族自治县','431');--
INSERT INTO `cmseasy_b_area` VALUES('2530','峨眉山市','431');--
INSERT INTO `cmseasy_b_area` VALUES('2531','沙湾区','431');--
INSERT INTO `cmseasy_b_area` VALUES('2532','金口河区','431');--
INSERT INTO `cmseasy_b_area` VALUES('2533','井研县','431');--
INSERT INTO `cmseasy_b_area` VALUES('2534','沐川县','431');--
INSERT INTO `cmseasy_b_area` VALUES('2535','马边彝族自治县','431');--
INSERT INTO `cmseasy_b_area` VALUES('2536','顺庆区','432');--
INSERT INTO `cmseasy_b_area` VALUES('2537','嘉陵区','432');--
INSERT INTO `cmseasy_b_area` VALUES('2538','营山县','432');--
INSERT INTO `cmseasy_b_area` VALUES('2539','仪陇县','432');--
INSERT INTO `cmseasy_b_area` VALUES('2540','阆中市','432');--
INSERT INTO `cmseasy_b_area` VALUES('2541','高坪区','432');--
INSERT INTO `cmseasy_b_area` VALUES('2542','南部县','432');--
INSERT INTO `cmseasy_b_area` VALUES('2543','蓬安县','432');--
INSERT INTO `cmseasy_b_area` VALUES('2544','西充县','432');--
INSERT INTO `cmseasy_b_area` VALUES('2545','屏山县','433');--
INSERT INTO `cmseasy_b_area` VALUES('2546','翠屏区','433');--
INSERT INTO `cmseasy_b_area` VALUES('2547','南溪县','433');--
INSERT INTO `cmseasy_b_area` VALUES('2548','长宁县','433');--
INSERT INTO `cmseasy_b_area` VALUES('2549','珙县','433');--
INSERT INTO `cmseasy_b_area` VALUES('2550','兴文县','433');--
INSERT INTO `cmseasy_b_area` VALUES('2551','宜宾县','433');--
INSERT INTO `cmseasy_b_area` VALUES('2552','江安县','433');--
INSERT INTO `cmseasy_b_area` VALUES('2553','高县','433');--
INSERT INTO `cmseasy_b_area` VALUES('2554','筠连县','433');--
INSERT INTO `cmseasy_b_area` VALUES('2555','广安区','434');--
INSERT INTO `cmseasy_b_area` VALUES('2556','武胜县','434');--
INSERT INTO `cmseasy_b_area` VALUES('2557','华莹市','434');--
INSERT INTO `cmseasy_b_area` VALUES('2558','岳池县','434');--
INSERT INTO `cmseasy_b_area` VALUES('2559','邻水县','434');--
INSERT INTO `cmseasy_b_area` VALUES('2560','通川区','435');--
INSERT INTO `cmseasy_b_area` VALUES('2561','宣汉县','435');--
INSERT INTO `cmseasy_b_area` VALUES('2562','大竹县','435');--
INSERT INTO `cmseasy_b_area` VALUES('2563','万源市','435');--
INSERT INTO `cmseasy_b_area` VALUES('2564','达县','435');--
INSERT INTO `cmseasy_b_area` VALUES('2565','开江县','435');--
INSERT INTO `cmseasy_b_area` VALUES('2566','渠县','435');--
INSERT INTO `cmseasy_b_area` VALUES('2567','东坡区','436');--
INSERT INTO `cmseasy_b_area` VALUES('2568','彭山县','436');--
INSERT INTO `cmseasy_b_area` VALUES('2569','丹棱县','436');--
INSERT INTO `cmseasy_b_area` VALUES('2570','青神县','436');--
INSERT INTO `cmseasy_b_area` VALUES('2571','仁寿县','436');--
INSERT INTO `cmseasy_b_area` VALUES('2572','洪雅县','436');--
INSERT INTO `cmseasy_b_area` VALUES('2573','雨城区','437');--
INSERT INTO `cmseasy_b_area` VALUES('2574','荥经县','437');--
INSERT INTO `cmseasy_b_area` VALUES('2575','石棉县','437');--
INSERT INTO `cmseasy_b_area` VALUES('2576','芦山县','437');--
INSERT INTO `cmseasy_b_area` VALUES('2577','宝兴县','437');--
INSERT INTO `cmseasy_b_area` VALUES('2578','名山县','437');--
INSERT INTO `cmseasy_b_area` VALUES('2579','汉源县','437');--
INSERT INTO `cmseasy_b_area` VALUES('2580','天全县','437');--
INSERT INTO `cmseasy_b_area` VALUES('2581','巴州区','438');--
INSERT INTO `cmseasy_b_area` VALUES('2582','南江县','438');--
INSERT INTO `cmseasy_b_area` VALUES('2583','平昌县','438');--
INSERT INTO `cmseasy_b_area` VALUES('2584','通江县','438');--
INSERT INTO `cmseasy_b_area` VALUES('2585','雁江区','439');--
INSERT INTO `cmseasy_b_area` VALUES('2586','乐至县','439');--
INSERT INTO `cmseasy_b_area` VALUES('2587','简阳市','439');--
INSERT INTO `cmseasy_b_area` VALUES('2588','安岳县','439');--
INSERT INTO `cmseasy_b_area` VALUES('2589','汶川县','440');--
INSERT INTO `cmseasy_b_area` VALUES('2590','茂县','440');--
INSERT INTO `cmseasy_b_area` VALUES('2591','九寨沟县','440');--
INSERT INTO `cmseasy_b_area` VALUES('2592','小金县','440');--
INSERT INTO `cmseasy_b_area` VALUES('2593','马尔康县','440');--
INSERT INTO `cmseasy_b_area` VALUES('2594','阿坝县','440');--
INSERT INTO `cmseasy_b_area` VALUES('2595','红原县','440');--
INSERT INTO `cmseasy_b_area` VALUES('2596','理县','440');--
INSERT INTO `cmseasy_b_area` VALUES('2597','松潘县','440');--
INSERT INTO `cmseasy_b_area` VALUES('2598','金川县','440');--
INSERT INTO `cmseasy_b_area` VALUES('2599','黑水县','440');--
INSERT INTO `cmseasy_b_area` VALUES('2600','壤塘县','440');--
INSERT INTO `cmseasy_b_area` VALUES('2601','若尔盖县','440');--
INSERT INTO `cmseasy_b_area` VALUES('2602','康定县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2603','丹巴县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2604','雅江县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2605','炉霍县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2606','新龙县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2607','白玉县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2608','色达县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2609','巴塘县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2610','得荣县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2611','稻城县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2612','泸定县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2613','九龙县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2614','道孚县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2615','甘孜县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2616','德格县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2617','石渠县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2618','理塘县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2619','乡城县','441');--
INSERT INTO `cmseasy_b_area` VALUES('2620','西昌市','442');--
INSERT INTO `cmseasy_b_area` VALUES('2621','盐源县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2622','会理县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2623','宁南县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2624','布拖县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2625','昭觉县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2626','冕宁县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2627','甘洛县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2628','雷波县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2629','木里藏族自治县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2630','德昌县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2631','会东县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2632','普格县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2633','金阳县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2634','喜德县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2635','越西县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2636','美姑县','442');--
INSERT INTO `cmseasy_b_area` VALUES('2637','江岸区','457');--
INSERT INTO `cmseasy_b_area` VALUES('2638','乔口区','457');--
INSERT INTO `cmseasy_b_area` VALUES('2639','武昌区','457');--
INSERT INTO `cmseasy_b_area` VALUES('2640','洪山区','457');--
INSERT INTO `cmseasy_b_area` VALUES('2641','汉南区','457');--
INSERT INTO `cmseasy_b_area` VALUES('2642','江夏区','457');--
INSERT INTO `cmseasy_b_area` VALUES('2643','新洲区','457');--
INSERT INTO `cmseasy_b_area` VALUES('2644','江汉区','457');--
INSERT INTO `cmseasy_b_area` VALUES('2645','汉阳区','457');--
INSERT INTO `cmseasy_b_area` VALUES('2646','青山区','457');--
INSERT INTO `cmseasy_b_area` VALUES('2647','东西湖区','457');--
INSERT INTO `cmseasy_b_area` VALUES('2648','蔡甸区','457');--
INSERT INTO `cmseasy_b_area` VALUES('2649','黄陂区','457');--
INSERT INTO `cmseasy_b_area` VALUES('2650','黄石港区','458');--
INSERT INTO `cmseasy_b_area` VALUES('2651','铁山区','458');--
INSERT INTO `cmseasy_b_area` VALUES('2652','大冶市','458');--
INSERT INTO `cmseasy_b_area` VALUES('2653','下陆区','458');--
INSERT INTO `cmseasy_b_area` VALUES('2654','阳新县','458');--
INSERT INTO `cmseasy_b_area` VALUES('2655','襄城区','459');--
INSERT INTO `cmseasy_b_area` VALUES('2656','襄阳区','459');--
INSERT INTO `cmseasy_b_area` VALUES('2657','谷城县','459');--
INSERT INTO `cmseasy_b_area` VALUES('2658','老河口市','459');--
INSERT INTO `cmseasy_b_area` VALUES('2659','宜城市','459');--
INSERT INTO `cmseasy_b_area` VALUES('2660','樊城区','459');--
INSERT INTO `cmseasy_b_area` VALUES('2661','南漳县','459');--
INSERT INTO `cmseasy_b_area` VALUES('2662','保康县','459');--
INSERT INTO `cmseasy_b_area` VALUES('2663','枣阳市','459');--
INSERT INTO `cmseasy_b_area` VALUES('2664','茅箭区','460');--
INSERT INTO `cmseasy_b_area` VALUES('2665','郧县','460');--
INSERT INTO `cmseasy_b_area` VALUES('2666','竹山县','460');--
INSERT INTO `cmseasy_b_area` VALUES('2667','房县','460');--
INSERT INTO `cmseasy_b_area` VALUES('2668','丹江口市','460');--
INSERT INTO `cmseasy_b_area` VALUES('2669','张湾区','460');--
INSERT INTO `cmseasy_b_area` VALUES('2670','郧西县','460');--
INSERT INTO `cmseasy_b_area` VALUES('2671','竹溪县','460');--
INSERT INTO `cmseasy_b_area` VALUES('2672','沙市区','461');--
INSERT INTO `cmseasy_b_area` VALUES('2673','公安县','461');--
INSERT INTO `cmseasy_b_area` VALUES('2674','江陵县','461');--
INSERT INTO `cmseasy_b_area` VALUES('2675','洪湖市','461');--
INSERT INTO `cmseasy_b_area` VALUES('2676','松滋市','461');--
INSERT INTO `cmseasy_b_area` VALUES('2677','荆州区','461');--
INSERT INTO `cmseasy_b_area` VALUES('2678','监利县','461');--
INSERT INTO `cmseasy_b_area` VALUES('2679','石首市','461');--
INSERT INTO `cmseasy_b_area` VALUES('2680','西陵区','462');--
INSERT INTO `cmseasy_b_area` VALUES('2681','点军区','462');--
INSERT INTO `cmseasy_b_area` VALUES('2682','夷陵区','462');--
INSERT INTO `cmseasy_b_area` VALUES('2683','兴山县','462');--
INSERT INTO `cmseasy_b_area` VALUES('2684','长阳土家族自治县','462');--
INSERT INTO `cmseasy_b_area` VALUES('2685','宜都市','462');--
INSERT INTO `cmseasy_b_area` VALUES('2686','枝江市','462');--
INSERT INTO `cmseasy_b_area` VALUES('2687','伍家岗区','462');--
INSERT INTO `cmseasy_b_area` VALUES('2688','虎亭区','462');--
INSERT INTO `cmseasy_b_area` VALUES('2689','远安县','462');--
INSERT INTO `cmseasy_b_area` VALUES('2690','秭归县','462');--
INSERT INTO `cmseasy_b_area` VALUES('2691','五峰土家族自治县','462');--
INSERT INTO `cmseasy_b_area` VALUES('2692','当阳市','462');--
INSERT INTO `cmseasy_b_area` VALUES('2693','东宝区','463');--
INSERT INTO `cmseasy_b_area` VALUES('2694','京山县','463');--
INSERT INTO `cmseasy_b_area` VALUES('2695','钟祥市','463');--
INSERT INTO `cmseasy_b_area` VALUES('2696','掇刀区','463');--
INSERT INTO `cmseasy_b_area` VALUES('2697','沙洋县','463');--
INSERT INTO `cmseasy_b_area` VALUES('2698','梁子湖区','464');--
INSERT INTO `cmseasy_b_area` VALUES('2699','鄂城区','464');--
INSERT INTO `cmseasy_b_area` VALUES('2700','华容区','464');--
INSERT INTO `cmseasy_b_area` VALUES('2701','孝南区','465');--
INSERT INTO `cmseasy_b_area` VALUES('2702','大悟县','465');--
INSERT INTO `cmseasy_b_area` VALUES('2703','应城市','465');--
INSERT INTO `cmseasy_b_area` VALUES('2704','汉川市','465');--
INSERT INTO `cmseasy_b_area` VALUES('2705','孝昌县','465');--
INSERT INTO `cmseasy_b_area` VALUES('2706','云梦县','465');--
INSERT INTO `cmseasy_b_area` VALUES('2707','安陆市','465');--
INSERT INTO `cmseasy_b_area` VALUES('2708','黄州区','466');--
INSERT INTO `cmseasy_b_area` VALUES('2709','红安县','466');--
INSERT INTO `cmseasy_b_area` VALUES('2710','英山县','466');--
INSERT INTO `cmseasy_b_area` VALUES('2711','蕲春县','466');--
INSERT INTO `cmseasy_b_area` VALUES('2712','麻城市','466');--
INSERT INTO `cmseasy_b_area` VALUES('2713','武穴市','466');--
INSERT INTO `cmseasy_b_area` VALUES('2714','团风县','466');--
INSERT INTO `cmseasy_b_area` VALUES('2715','罗田县','466');--
INSERT INTO `cmseasy_b_area` VALUES('2716','浠水县','466');--
INSERT INTO `cmseasy_b_area` VALUES('2717','黄梅县','466');--
INSERT INTO `cmseasy_b_area` VALUES('2718','咸安区','467');--
INSERT INTO `cmseasy_b_area` VALUES('2719','通城县','467');--
INSERT INTO `cmseasy_b_area` VALUES('2720','通山县','467');--
INSERT INTO `cmseasy_b_area` VALUES('2721','赤壁市','467');--
INSERT INTO `cmseasy_b_area` VALUES('2722','嘉鱼县','467');--
INSERT INTO `cmseasy_b_area` VALUES('2723','崇阳县','467');--
INSERT INTO `cmseasy_b_area` VALUES('2724','曾都区','468');--
INSERT INTO `cmseasy_b_area` VALUES('2725','广水市','468');--
INSERT INTO `cmseasy_b_area` VALUES('2726','恩施市','469');--
INSERT INTO `cmseasy_b_area` VALUES('2727','建始县','469');--
INSERT INTO `cmseasy_b_area` VALUES('2728','鹤峰县','469');--
INSERT INTO `cmseasy_b_area` VALUES('2729','利川市','469');--
INSERT INTO `cmseasy_b_area` VALUES('2730','巴东县','469');--
INSERT INTO `cmseasy_b_area` VALUES('2731','宣恩县','469');--
INSERT INTO `cmseasy_b_area` VALUES('2732','来凤县','469');--
INSERT INTO `cmseasy_b_area` VALUES('2733','咸丰县','469');--
INSERT INTO `cmseasy_b_area` VALUES('2734','仙桃市','470');--
INSERT INTO `cmseasy_b_area` VALUES('2735','天门市','470');--
INSERT INTO `cmseasy_b_area` VALUES('2736','潜江市','470');--
INSERT INTO `cmseasy_b_area` VALUES('2737','神农架林区','470');--
INSERT INTO `cmseasy_b_area` VALUES('2738','新城区','471');--
INSERT INTO `cmseasy_b_area` VALUES('2739','莲湖区','471');--
INSERT INTO `cmseasy_b_area` VALUES('2740','未央区','471');--
INSERT INTO `cmseasy_b_area` VALUES('2741','阎良区','471');--
INSERT INTO `cmseasy_b_area` VALUES('2742','长安区','471');--
INSERT INTO `cmseasy_b_area` VALUES('2743','周至县','471');--
INSERT INTO `cmseasy_b_area` VALUES('2744','高陵县','471');--
INSERT INTO `cmseasy_b_area` VALUES('2745','碑林区','471');--
INSERT INTO `cmseasy_b_area` VALUES('2746','灞桥区','471');--
INSERT INTO `cmseasy_b_area` VALUES('2747','雁塔区','471');--
INSERT INTO `cmseasy_b_area` VALUES('2748','临潼区','471');--
INSERT INTO `cmseasy_b_area` VALUES('2749','蓝田县','471');--
INSERT INTO `cmseasy_b_area` VALUES('2750','户县','471');--
INSERT INTO `cmseasy_b_area` VALUES('2751','耀州区','472');--
INSERT INTO `cmseasy_b_area` VALUES('2752','宜君县','472');--
INSERT INTO `cmseasy_b_area` VALUES('2753','渭滨区','473');--
INSERT INTO `cmseasy_b_area` VALUES('2754','陈仓区','473');--
INSERT INTO `cmseasy_b_area` VALUES('2755','岐山县','473');--
INSERT INTO `cmseasy_b_area` VALUES('2756','眉县','473');--
INSERT INTO `cmseasy_b_area` VALUES('2757','千阳县','473');--
INSERT INTO `cmseasy_b_area` VALUES('2758','凤县','473');--
INSERT INTO `cmseasy_b_area` VALUES('2759','太白县','473');--
INSERT INTO `cmseasy_b_area` VALUES('2760','金台区','473');--
INSERT INTO `cmseasy_b_area` VALUES('2761','凤翔县','473');--
INSERT INTO `cmseasy_b_area` VALUES('2762','扶风县','473');--
INSERT INTO `cmseasy_b_area` VALUES('2763','陇县','473');--
INSERT INTO `cmseasy_b_area` VALUES('2764','麟游县','473');--
INSERT INTO `cmseasy_b_area` VALUES('2765','秦都区','474');--
INSERT INTO `cmseasy_b_area` VALUES('2766','渭城区','474');--
INSERT INTO `cmseasy_b_area` VALUES('2767','泾阳县','474');--
INSERT INTO `cmseasy_b_area` VALUES('2768','礼泉县','474');--
INSERT INTO `cmseasy_b_area` VALUES('2769','彬县','474');--
INSERT INTO `cmseasy_b_area` VALUES('2770','旬邑县','474');--
INSERT INTO `cmseasy_b_area` VALUES('2771','武功县','474');--
INSERT INTO `cmseasy_b_area` VALUES('2772','兴平市','474');--
INSERT INTO `cmseasy_b_area` VALUES('2773','杨陵区','474');--
INSERT INTO `cmseasy_b_area` VALUES('2774','三原县','474');--
INSERT INTO `cmseasy_b_area` VALUES('2775','乾县','474');--
INSERT INTO `cmseasy_b_area` VALUES('2776','永寿\r\n\r\n县','474');--
INSERT INTO `cmseasy_b_area` VALUES('2777','长武县','474');--
INSERT INTO `cmseasy_b_area` VALUES('2778','淳化县','474');--
INSERT INTO `cmseasy_b_area` VALUES('2779','临渭区','475');--
INSERT INTO `cmseasy_b_area` VALUES('2780','潼关县','475');--
INSERT INTO `cmseasy_b_area` VALUES('2781','合阳县','475');--
INSERT INTO `cmseasy_b_area` VALUES('2782','华阴市','475');--
INSERT INTO `cmseasy_b_area` VALUES('2783','华县','475');--
INSERT INTO `cmseasy_b_area` VALUES('2784','大荔县','475');--
INSERT INTO `cmseasy_b_area` VALUES('2785','澄城县','475');--
INSERT INTO `cmseasy_b_area` VALUES('2786','蒲城县','475');--
INSERT INTO `cmseasy_b_area` VALUES('2787','富平县','475');--
INSERT INTO `cmseasy_b_area` VALUES('2788','白水县','475');--
INSERT INTO `cmseasy_b_area` VALUES('2789','韩城市','475');--
INSERT INTO `cmseasy_b_area` VALUES('2790','宝塔区','476');--
INSERT INTO `cmseasy_b_area` VALUES('2791','延川县','476');--
INSERT INTO `cmseasy_b_area` VALUES('2792','安塞县','476');--
INSERT INTO `cmseasy_b_area` VALUES('2793','吴旗县','476');--
INSERT INTO `cmseasy_b_area` VALUES('2794','富县','476');--
INSERT INTO `cmseasy_b_area` VALUES('2795','宜川县','476');--
INSERT INTO `cmseasy_b_area` VALUES('2796','黄陵县','476');--
INSERT INTO `cmseasy_b_area` VALUES('2797','延长县','476');--
INSERT INTO `cmseasy_b_area` VALUES('2798','子长县','476');--
INSERT INTO `cmseasy_b_area` VALUES('2799','志丹县','476');--
INSERT INTO `cmseasy_b_area` VALUES('2800','甘泉县','476');--
INSERT INTO `cmseasy_b_area` VALUES('2801','洛川县','476');--
INSERT INTO `cmseasy_b_area` VALUES('2802','黄龙县','476');--
INSERT INTO `cmseasy_b_area` VALUES('2803','汉台区','477');--
INSERT INTO `cmseasy_b_area` VALUES('2804','城固县','477');--
INSERT INTO `cmseasy_b_area` VALUES('2805','西乡县','477');--
INSERT INTO `cmseasy_b_area` VALUES('2806','宁强县','477');--
INSERT INTO `cmseasy_b_area` VALUES('2807','镇巴县','477');--
INSERT INTO `cmseasy_b_area` VALUES('2808','佛坪县','477');--
INSERT INTO `cmseasy_b_area` VALUES('2809','南郑县','477');--
INSERT INTO `cmseasy_b_area` VALUES('2810','洋县','477');--
INSERT INTO `cmseasy_b_area` VALUES('2811','勉县','477');--
INSERT INTO `cmseasy_b_area` VALUES('2812','略阳县','477');--
INSERT INTO `cmseasy_b_area` VALUES('2813','留坝县','477');--
INSERT INTO `cmseasy_b_area` VALUES('2814','榆阳区','478');--
INSERT INTO `cmseasy_b_area` VALUES('2815','横山县','478');--
INSERT INTO `cmseasy_b_area` VALUES('2816','定边县','478');--
INSERT INTO `cmseasy_b_area` VALUES('2817','米脂县','478');--
INSERT INTO `cmseasy_b_area` VALUES('2818','吴堡县子洲县','478');--
INSERT INTO `cmseasy_b_area` VALUES('2819','府谷县','478');--
INSERT INTO `cmseasy_b_area` VALUES('2820','靖边县','478');--
INSERT INTO `cmseasy_b_area` VALUES('2821','绥德县','478');--
INSERT INTO `cmseasy_b_area` VALUES('2822','佳县','478');--
INSERT INTO `cmseasy_b_area` VALUES('2823','清涧县','478');--
INSERT INTO `cmseasy_b_area` VALUES('2824','汉滨区','479');--
INSERT INTO `cmseasy_b_area` VALUES('2825','石泉县','479');--
INSERT INTO `cmseasy_b_area` VALUES('2826','紫阳县','479');--
INSERT INTO `cmseasy_b_area` VALUES('2827','平利县','479');--
INSERT INTO `cmseasy_b_area` VALUES('2828','旬阳县','479');--
INSERT INTO `cmseasy_b_area` VALUES('2829','白河县','479');--
INSERT INTO `cmseasy_b_area` VALUES('2830','汉阴县','479');--
INSERT INTO `cmseasy_b_area` VALUES('2831','宁陕县','479');--
INSERT INTO `cmseasy_b_area` VALUES('2832','岚皋县','479');--
INSERT INTO `cmseasy_b_area` VALUES('2833','镇坪县','479');--
INSERT INTO `cmseasy_b_area` VALUES('2834','商州区','480');--
INSERT INTO `cmseasy_b_area` VALUES('2835','丹凤县','480');--
INSERT INTO `cmseasy_b_area` VALUES('2836','山阳县','480');--
INSERT INTO `cmseasy_b_area` VALUES('2837','柞水县','480');--
INSERT INTO `cmseasy_b_area` VALUES('2838','神木县','480');--
INSERT INTO `cmseasy_b_area` VALUES('2839','洛南县','480');--
INSERT INTO `cmseasy_b_area` VALUES('2840','商南县','480');--
INSERT INTO `cmseasy_b_area` VALUES('2841','镇安县','480');--
INSERT INTO `cmseasy_b_area` VALUES('2842','城关区','481');--
INSERT INTO `cmseasy_b_area` VALUES('2843','西固区','481');--
INSERT INTO `cmseasy_b_area` VALUES('2844','红古区','481');--
INSERT INTO `cmseasy_b_area` VALUES('2845','皋兰县','481');--
INSERT INTO `cmseasy_b_area` VALUES('2846','榆中县','481');--
INSERT INTO `cmseasy_b_area` VALUES('2847','七里河区','481');--
INSERT INTO `cmseasy_b_area` VALUES('2848','安宁区','481');--
INSERT INTO `cmseasy_b_area` VALUES('2849','永登县','481');--
INSERT INTO `cmseasy_b_area` VALUES('2850','金川区','482');--
INSERT INTO `cmseasy_b_area` VALUES('2851','永昌县','482');--
INSERT INTO `cmseasy_b_area` VALUES('2852','白银区','483');--
INSERT INTO `cmseasy_b_area` VALUES('2853','靖远县','483');--
INSERT INTO `cmseasy_b_area` VALUES('2854','景泰县','483');--
INSERT INTO `cmseasy_b_area` VALUES('2855','平川区','483');--
INSERT INTO `cmseasy_b_area` VALUES('2856','会宁县','483');--
INSERT INTO `cmseasy_b_area` VALUES('2857','秦州区','484');--
INSERT INTO `cmseasy_b_area` VALUES('2858','清水县','484');--
INSERT INTO `cmseasy_b_area` VALUES('2859','甘谷县','484');--
INSERT INTO `cmseasy_b_area` VALUES('2860','麦积区','484');--
INSERT INTO `cmseasy_b_area` VALUES('2861','秦安县','484');--
INSERT INTO `cmseasy_b_area` VALUES('2862','武山县','484');--
INSERT INTO `cmseasy_b_area` VALUES('2863','凉州区','486');--
INSERT INTO `cmseasy_b_area` VALUES('2864','古浪县','486');--
INSERT INTO `cmseasy_b_area` VALUES('2865','天祝藏族自治县','486');--
INSERT INTO `cmseasy_b_area` VALUES('2866','民勤县','486');--
INSERT INTO `cmseasy_b_area` VALUES('2867','甘州区','487');--
INSERT INTO `cmseasy_b_area` VALUES('2868','民乐县','487');--
INSERT INTO `cmseasy_b_area` VALUES('2869','高台县','487');--
INSERT INTO `cmseasy_b_area` VALUES('2870','山丹县','487');--
INSERT INTO `cmseasy_b_area` VALUES('2871','肃南裕固族自治县','487');--
INSERT INTO `cmseasy_b_area` VALUES('2872','临泽县','487');--
INSERT INTO `cmseasy_b_area` VALUES('2873','崆峒区','488');--
INSERT INTO `cmseasy_b_area` VALUES('2874','灵台县','488');--
INSERT INTO `cmseasy_b_area` VALUES('2875','华亭县','488');--
INSERT INTO `cmseasy_b_area` VALUES('2876','静宁县','488');--
INSERT INTO `cmseasy_b_area` VALUES('2877','泾川县','488');--
INSERT INTO `cmseasy_b_area` VALUES('2878','崇信县','488');--
INSERT INTO `cmseasy_b_area` VALUES('2879','庄浪县','488');--
INSERT INTO `cmseasy_b_area` VALUES('2880','肃州区','489');--
INSERT INTO `cmseasy_b_area` VALUES('2881','安西县','489');--
INSERT INTO `cmseasy_b_area` VALUES('2882','阿克塞哈萨克族自治县','489');--
INSERT INTO `cmseasy_b_area` VALUES('2883','敦煌市','489');--
INSERT INTO `cmseasy_b_area` VALUES('2884','金塔县','489');--
INSERT INTO `cmseasy_b_area` VALUES('2885','肃北蒙古族自治县','489');--
INSERT INTO `cmseasy_b_area` VALUES('2886','玉门市','489');--
INSERT INTO `cmseasy_b_area` VALUES('2887','西峰区','490');--
INSERT INTO `cmseasy_b_area` VALUES('2888','环县','490');--
INSERT INTO `cmseasy_b_area` VALUES('2889','合水县','490');--
INSERT INTO `cmseasy_b_area` VALUES('2890','宁县','490');--
INSERT INTO `cmseasy_b_area` VALUES('2891','镇原县','490');--
INSERT INTO `cmseasy_b_area` VALUES('2892','庆阳县','490');--
INSERT INTO `cmseasy_b_area` VALUES('2893','华池县','490');--
INSERT INTO `cmseasy_b_area` VALUES('2894','正宁县','490');--
INSERT INTO `cmseasy_b_area` VALUES('2895','安定区','491');--
INSERT INTO `cmseasy_b_area` VALUES('2896','陇西县','491');--
INSERT INTO `cmseasy_b_area` VALUES('2897','临洮县','491');--
INSERT INTO `cmseasy_b_area` VALUES('2898','岷县','491');--
INSERT INTO `cmseasy_b_area` VALUES('2899','通渭县','491');--
INSERT INTO `cmseasy_b_area` VALUES('2900','渭源县','491');--
INSERT INTO `cmseasy_b_area` VALUES('2901','漳县','491');--
INSERT INTO `cmseasy_b_area` VALUES('2902','武都区','492');--
INSERT INTO `cmseasy_b_area` VALUES('2903','文县','492');--
INSERT INTO `cmseasy_b_area` VALUES('2904','康县','492');--
INSERT INTO `cmseasy_b_area` VALUES('2905','礼县','492');--
INSERT INTO `cmseasy_b_area` VALUES('2906','两当县','492');--
INSERT INTO `cmseasy_b_area` VALUES('2907','成县','492');--
INSERT INTO `cmseasy_b_area` VALUES('2908','宕昌县','492');--
INSERT INTO `cmseasy_b_area` VALUES('2909','西和县','492');--
INSERT INTO `cmseasy_b_area` VALUES('2910','徽县','492');--
INSERT INTO `cmseasy_b_area` VALUES('2911','合作市','493');--
INSERT INTO `cmseasy_b_area` VALUES('2912','卓尼县','493');--
INSERT INTO `cmseasy_b_area` VALUES('2913','迭部县','493');--
INSERT INTO `cmseasy_b_area` VALUES('2914','夏河县','493');--
INSERT INTO `cmseasy_b_area` VALUES('2915','碌曲县','493');--
INSERT INTO `cmseasy_b_area` VALUES('2916','临潭县','493');--
INSERT INTO `cmseasy_b_area` VALUES('2917','舟曲县','493');--
INSERT INTO `cmseasy_b_area` VALUES('2918','玛曲县','493');--
INSERT INTO `cmseasy_b_area` VALUES('2919','临夏市','494');--
INSERT INTO `cmseasy_b_area` VALUES('2920','康乐县','494');--
INSERT INTO `cmseasy_b_area` VALUES('2921','广河县','494');--
INSERT INTO `cmseasy_b_area` VALUES('2922','东乡族自治县','494');--
INSERT INTO `cmseasy_b_area` VALUES('2923','积石山保安族东','494');--
INSERT INTO `cmseasy_b_area` VALUES('2924','乡族撒拉族自治县','494');--
INSERT INTO `cmseasy_b_area` VALUES('2925','临夏县','494');--
INSERT INTO `cmseasy_b_area` VALUES('2926','永靖县','494');--
INSERT INTO `cmseasy_b_area` VALUES('2927','和政县','494');--
INSERT INTO `cmseasy_b_area` VALUES('2928','城东区','495');--
INSERT INTO `cmseasy_b_area` VALUES('2929','城西区','495');--
INSERT INTO `cmseasy_b_area` VALUES('2930','大通回族土族自治县','495');--
INSERT INTO `cmseasy_b_area` VALUES('2931','湟源县','495');--
INSERT INTO `cmseasy_b_area` VALUES('2932','城中区','495');--
INSERT INTO `cmseasy_b_area` VALUES('2933','城北区','495');--
INSERT INTO `cmseasy_b_area` VALUES('2934','湟中县','495');--
INSERT INTO `cmseasy_b_area` VALUES('2935','平安县','496');--
INSERT INTO `cmseasy_b_area` VALUES('2936','乐都县','496');--
INSERT INTO `cmseasy_b_area` VALUES('2937','化隆回族自治县','496');--
INSERT INTO `cmseasy_b_area` VALUES('2938','循化撒拉族自治县','496');--
INSERT INTO `cmseasy_b_area` VALUES('2939','民和回族土族自治县','496');--
INSERT INTO `cmseasy_b_area` VALUES('2940','互助土族自治县','496');--
INSERT INTO `cmseasy_b_area` VALUES('2941','门源回族自治县','497');--
INSERT INTO `cmseasy_b_area` VALUES('2942','海晏县','497');--
INSERT INTO `cmseasy_b_area` VALUES('2943','刚察县','497');--
INSERT INTO `cmseasy_b_area` VALUES('2944','祁连县','497');--
INSERT INTO `cmseasy_b_area` VALUES('2945','同仁县','498');--
INSERT INTO `cmseasy_b_area` VALUES('2946','泽库县','498');--
INSERT INTO `cmseasy_b_area` VALUES('2947','河南蒙古族自治县','498');--
INSERT INTO `cmseasy_b_area` VALUES('2948','尖扎县','498');--
INSERT INTO `cmseasy_b_area` VALUES('2949','共和县','499');--
INSERT INTO `cmseasy_b_area` VALUES('2950','贵德县','499');--
INSERT INTO `cmseasy_b_area` VALUES('2951','贵南县','499');--
INSERT INTO `cmseasy_b_area` VALUES('2952','同德县','499');--
INSERT INTO `cmseasy_b_area` VALUES('2953','兴海县','499');--
INSERT INTO `cmseasy_b_area` VALUES('2954','玛沁县','500');--
INSERT INTO `cmseasy_b_area` VALUES('2955','甘德县','500');--
INSERT INTO `cmseasy_b_area` VALUES('2956','久治县','500');--
INSERT INTO `cmseasy_b_area` VALUES('2957','班玛县','500');--
INSERT INTO `cmseasy_b_area` VALUES('2958','达日县','500');--
INSERT INTO `cmseasy_b_area` VALUES('2959','玛多县','500');--
INSERT INTO `cmseasy_b_area` VALUES('2960','玉树县','501');--
INSERT INTO `cmseasy_b_area` VALUES('2961','称多县','501');--
INSERT INTO `cmseasy_b_area` VALUES('2962','囊谦县','501');--
INSERT INTO `cmseasy_b_area` VALUES('2963','曲麻莱县','501');--
INSERT INTO `cmseasy_b_area` VALUES('2964','杂多县','501');--
INSERT INTO `cmseasy_b_area` VALUES('2965','治多县','501');--
INSERT INTO `cmseasy_b_area` VALUES('2966','格尔木市','502');--
INSERT INTO `cmseasy_b_area` VALUES('2967','乌兰县','502');--
INSERT INTO `cmseasy_b_area` VALUES('2968','天峻县','502');--
INSERT INTO `cmseasy_b_area` VALUES('2969','德令哈市','502');--
INSERT INTO `cmseasy_b_area` VALUES('2970','都兰县','502');--
INSERT INTO `cmseasy_b_area` VALUES('2971','新城区','503');--
INSERT INTO `cmseasy_b_area` VALUES('2972','玉泉区','503');--
INSERT INTO `cmseasy_b_area` VALUES('2973','托克托县','503');--
INSERT INTO `cmseasy_b_area` VALUES('2974','清水河县','503');--
INSERT INTO `cmseasy_b_area` VALUES('2975','武川县','503');--
INSERT INTO `cmseasy_b_area` VALUES('2976','回民区','503');--
INSERT INTO `cmseasy_b_area` VALUES('2977','土默特左旗','503');--
INSERT INTO `cmseasy_b_area` VALUES('2978','和林格尔县','503');--
INSERT INTO `cmseasy_b_area` VALUES('2979','东河区','504');--
INSERT INTO `cmseasy_b_area` VALUES('2980','青山区','504');--
INSERT INTO `cmseasy_b_area` VALUES('2981','土默特右旗','504');--
INSERT INTO `cmseasy_b_area` VALUES('2982','达尔罕茂明安联合旗','504');--
INSERT INTO `cmseasy_b_area` VALUES('2983','昆都伦区','504');--
INSERT INTO `cmseasy_b_area` VALUES('2984','白云矿区','504');--
INSERT INTO `cmseasy_b_area` VALUES('2985','固阳县','504');--
INSERT INTO `cmseasy_b_area` VALUES('2986','海勃湾区','505');--
INSERT INTO `cmseasy_b_area` VALUES('2987','乌达区','505');--
INSERT INTO `cmseasy_b_area` VALUES('2988','红山区','506');--
INSERT INTO `cmseasy_b_area` VALUES('2989','松山区','506');--
INSERT INTO `cmseasy_b_area` VALUES('2990','巴林左旗','506');--
INSERT INTO `cmseasy_b_area` VALUES('2991','林西县','506');--
INSERT INTO `cmseasy_b_area` VALUES('2992','翁牛特旗','506');--
INSERT INTO `cmseasy_b_area` VALUES('2993','宁城县','506');--
INSERT INTO `cmseasy_b_area` VALUES('2994','海南区','506');--
INSERT INTO `cmseasy_b_area` VALUES('2995','元宝山区','506');--
INSERT INTO `cmseasy_b_area` VALUES('2996','阿鲁科尔沁旗','506');--
INSERT INTO `cmseasy_b_area` VALUES('2997','巴林右旗','506');--
INSERT INTO `cmseasy_b_area` VALUES('2998','克什克腾旗','506');--
INSERT INTO `cmseasy_b_area` VALUES('2999','喀喇沁旗','506');--
INSERT INTO `cmseasy_b_area` VALUES('3000','敖汉旗','506');--
INSERT INTO `cmseasy_b_area` VALUES('3001','科尔沁区','507');--
INSERT INTO `cmseasy_b_area` VALUES('3002','科尔沁左翼后旗','507');--
INSERT INTO `cmseasy_b_area` VALUES('3003','库伦旗','507');--
INSERT INTO `cmseasy_b_area` VALUES('3004','扎鲁特旗','507');--
INSERT INTO `cmseasy_b_area` VALUES('3005','霍林郭勒市','507');--
INSERT INTO `cmseasy_b_area` VALUES('3006','科尔沁左翼中旗','507');--
INSERT INTO `cmseasy_b_area` VALUES('3007','开鲁县','507');--
INSERT INTO `cmseasy_b_area` VALUES('3008','奈曼旗','507');--
INSERT INTO `cmseasy_b_area` VALUES('3009','东胜区','508');--
INSERT INTO `cmseasy_b_area` VALUES('3010','准格尔旗','508');--
INSERT INTO `cmseasy_b_area` VALUES('3011','鄂托克旗','508');--
INSERT INTO `cmseasy_b_area` VALUES('3012','乌审旗','508');--
INSERT INTO `cmseasy_b_area` VALUES('3013','伊金霍洛旗','508');--
INSERT INTO `cmseasy_b_area` VALUES('3014','达拉特旗','508');--
INSERT INTO `cmseasy_b_area` VALUES('3015','鄂托克前旗','508');--
INSERT INTO `cmseasy_b_area` VALUES('3016','杭锦旗','508');--
INSERT INTO `cmseasy_b_area` VALUES('3017','海拉尔区','509');--
INSERT INTO `cmseasy_b_area` VALUES('3018','莫力达瓦达斡尔族自治旗','509');--
INSERT INTO `cmseasy_b_area` VALUES('3019','鄂温克族自治旗','509');--
INSERT INTO `cmseasy_b_area` VALUES('3020','新巴尔虎左旗','509');--
INSERT INTO `cmseasy_b_area` VALUES('3021','满洲里市','509');--
INSERT INTO `cmseasy_b_area` VALUES('3022','扎兰屯市','509');--
INSERT INTO `cmseasy_b_area` VALUES('3023','根河市','509');--
INSERT INTO `cmseasy_b_area` VALUES('3024','阿荣旗','509');--
INSERT INTO `cmseasy_b_area` VALUES('3025','鄂伦春自治旗','509');--
INSERT INTO `cmseasy_b_area` VALUES('3026','陈巴尔虎旗','509');--
INSERT INTO `cmseasy_b_area` VALUES('3027','新巴尔虎右旗','509');--
INSERT INTO `cmseasy_b_area` VALUES('3028','牙克石市','509');--
INSERT INTO `cmseasy_b_area` VALUES('3029','额尔古纳市','509');--
INSERT INTO `cmseasy_b_area` VALUES('3030','集宁区','510');--
INSERT INTO `cmseasy_b_area` VALUES('3031','化德县','510');--
INSERT INTO `cmseasy_b_area` VALUES('3032','兴和县','510');--
INSERT INTO `cmseasy_b_area` VALUES('3033','察哈尔右翼前旗','510');--
INSERT INTO `cmseasy_b_area` VALUES('3034','察哈尔右翼后旗','510');--
INSERT INTO `cmseasy_b_area` VALUES('3035','丰镇市','510');--
INSERT INTO `cmseasy_b_area` VALUES('3036','卓资县','510');--
INSERT INTO `cmseasy_b_area` VALUES('3037','商都县','510');--
INSERT INTO `cmseasy_b_area` VALUES('3038','凉城县','510');--
INSERT INTO `cmseasy_b_area` VALUES('3039','察哈尔右翼中旗','510');--
INSERT INTO `cmseasy_b_area` VALUES('3040','四子王旗','510');--
INSERT INTO `cmseasy_b_area` VALUES('3041','二连浩特市','511');--
INSERT INTO `cmseasy_b_area` VALUES('3042','阿巴嘎旗','511');--
INSERT INTO `cmseasy_b_area` VALUES('3043','苏尼特右旗','511');--
INSERT INTO `cmseasy_b_area` VALUES('3044','西乌珠穆沁旗','511');--
INSERT INTO `cmseasy_b_area` VALUES('3045','镶黄旗','511');--
INSERT INTO `cmseasy_b_area` VALUES('3046','正蓝旗','511');--
INSERT INTO `cmseasy_b_area` VALUES('3047','多伦县','511');--
INSERT INTO `cmseasy_b_area` VALUES('3048','锡林浩特市','511');--
INSERT INTO `cmseasy_b_area` VALUES('3049','苏尼特左旗','511');--
INSERT INTO `cmseasy_b_area` VALUES('3050','东乌珠穆沁旗','511');--
INSERT INTO `cmseasy_b_area` VALUES('3051','太仆寺旗','511');--
INSERT INTO `cmseasy_b_area` VALUES('3052','正镶白旗','511');--
INSERT INTO `cmseasy_b_area` VALUES('3053','临河区','512');--
INSERT INTO `cmseasy_b_area` VALUES('3054','磴口县','512');--
INSERT INTO `cmseasy_b_area` VALUES('3055','乌拉特中旗','512');--
INSERT INTO `cmseasy_b_area` VALUES('3056','杭锦后旗','512');--
INSERT INTO `cmseasy_b_area` VALUES('3057','五原县','512');--
INSERT INTO `cmseasy_b_area` VALUES('3058','乌拉特前旗','512');--
INSERT INTO `cmseasy_b_area` VALUES('3059','乌拉特后旗','512');--
INSERT INTO `cmseasy_b_area` VALUES('3060','阿拉善左旗','513');--
INSERT INTO `cmseasy_b_area` VALUES('3061','额济纳旗','513');--
INSERT INTO `cmseasy_b_area` VALUES('3062','阿拉善右旗','513');--
INSERT INTO `cmseasy_b_area` VALUES('3063','乌兰浩特市','514');--
INSERT INTO `cmseasy_b_area` VALUES('3064','科尔沁右翼前旗','514');--
INSERT INTO `cmseasy_b_area` VALUES('3065','扎赉特旗','514');--
INSERT INTO `cmseasy_b_area` VALUES('3066','突泉县','514');--
INSERT INTO `cmseasy_b_area` VALUES('3067','阿尔山市','514');--
INSERT INTO `cmseasy_b_area` VALUES('3068','科尔沁右翼中旗','514');--
INSERT INTO `cmseasy_b_area` VALUES('3069','城关区','515');--
INSERT INTO `cmseasy_b_area` VALUES('3070','当雄县','515');--
INSERT INTO `cmseasy_b_area` VALUES('3071','曲水县','515');--
INSERT INTO `cmseasy_b_area` VALUES('3072','墨竹工卡县','515');--
INSERT INTO `cmseasy_b_area` VALUES('3073','达孜县','515');--
INSERT INTO `cmseasy_b_area` VALUES('3074','林周县','515');--
INSERT INTO `cmseasy_b_area` VALUES('3075','尼木县','515');--
INSERT INTO `cmseasy_b_area` VALUES('3076','堆龙德庆县','515');--
INSERT INTO `cmseasy_b_area` VALUES('3077','那曲县','516');--
INSERT INTO `cmseasy_b_area` VALUES('3078','比如县','516');--
INSERT INTO `cmseasy_b_area` VALUES('3079','安多县','516');--
INSERT INTO `cmseasy_b_area` VALUES('3080','索县','516');--
INSERT INTO `cmseasy_b_area` VALUES('3081','巴青县','516');--
INSERT INTO `cmseasy_b_area` VALUES('3082','尼玛县','516');--
INSERT INTO `cmseasy_b_area` VALUES('3083','嘉黎县','516');--
INSERT INTO `cmseasy_b_area` VALUES('3084','聂荣县','516');--
INSERT INTO `cmseasy_b_area` VALUES('3085','申扎县','516');--
INSERT INTO `cmseasy_b_area` VALUES('3086','班戈县','516');--
INSERT INTO `cmseasy_b_area` VALUES('3087','昌都县','517');--
INSERT INTO `cmseasy_b_area` VALUES('3088','贡觉县','517');--
INSERT INTO `cmseasy_b_area` VALUES('3089','丁青县','517');--
INSERT INTO `cmseasy_b_area` VALUES('3090','八宿县','517');--
INSERT INTO `cmseasy_b_area` VALUES('3091','芒康县','517');--
INSERT INTO `cmseasy_b_area` VALUES('3092','边坝县','517');--
INSERT INTO `cmseasy_b_area` VALUES('3093','江达县','517');--
INSERT INTO `cmseasy_b_area` VALUES('3094','类乌齐县','517');--
INSERT INTO `cmseasy_b_area` VALUES('3095','察雅县','517');--
INSERT INTO `cmseasy_b_area` VALUES('3096','左贡县','517');--
INSERT INTO `cmseasy_b_area` VALUES('3097','洛隆县','517');--
INSERT INTO `cmseasy_b_area` VALUES('3098','乃东县','518');--
INSERT INTO `cmseasy_b_area` VALUES('3099','贡嘎县','518');--
INSERT INTO `cmseasy_b_area` VALUES('3100','琼结县','518');--
INSERT INTO `cmseasy_b_area` VALUES('3101','措美县','518');--
INSERT INTO `cmseasy_b_area` VALUES('3102','加查县','518');--
INSERT INTO `cmseasy_b_area` VALUES('3103','错那县','518');--
INSERT INTO `cmseasy_b_area` VALUES('3104','浪卡子县','518');--
INSERT INTO `cmseasy_b_area` VALUES('3105','扎囊县','518');--
INSERT INTO `cmseasy_b_area` VALUES('3106','桑日县','518');--
INSERT INTO `cmseasy_b_area` VALUES('3107','曲松县','518');--
INSERT INTO `cmseasy_b_area` VALUES('3108','洛扎县','518');--
INSERT INTO `cmseasy_b_area` VALUES('3109','隆子县','518');--
INSERT INTO `cmseasy_b_area` VALUES('3110','日喀则市','519');--
INSERT INTO `cmseasy_b_area` VALUES('3111','江孜县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3112','萨迦县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3113','昂仁县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3114','白朗县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3115','康马县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3116','仲巴县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3117','吉隆县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3118','萨嘎县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3119','岗巴县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3120','南木林县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3121','定日县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3122','拉孜县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3123','谢通门县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3124','仁布县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3125','定结县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3126','亚东县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3127','聂拉木县','519');--
INSERT INTO `cmseasy_b_area` VALUES('3128','普兰县','520');--
INSERT INTO `cmseasy_b_area` VALUES('3129','噶尔县','520');--
INSERT INTO `cmseasy_b_area` VALUES('3130','革吉县','520');--
INSERT INTO `cmseasy_b_area` VALUES('3131','措勤县','520');--
INSERT INTO `cmseasy_b_area` VALUES('3132','札达县','520');--
INSERT INTO `cmseasy_b_area` VALUES('3133','日土县','520');--
INSERT INTO `cmseasy_b_area` VALUES('3134','改则县','520');--
INSERT INTO `cmseasy_b_area` VALUES('3135','林芝县','521');--
INSERT INTO `cmseasy_b_area` VALUES('3136','米林县','521');--
INSERT INTO `cmseasy_b_area` VALUES('3137','波密县','521');--
INSERT INTO `cmseasy_b_area` VALUES('3138','朗县','521');--
INSERT INTO `cmseasy_b_area` VALUES('3139','工布江达县','521');--
INSERT INTO `cmseasy_b_area` VALUES('3140','墨脱县','521');--
INSERT INTO `cmseasy_b_area` VALUES('3141','察隅县','521');--
INSERT INTO `cmseasy_b_area` VALUES('3142','天山区','522');--
INSERT INTO `cmseasy_b_area` VALUES('3143','新市区','522');--
INSERT INTO `cmseasy_b_area` VALUES('3144','头屯河区','522');--
INSERT INTO `cmseasy_b_area` VALUES('3145','东山区','522');--
INSERT INTO `cmseasy_b_area` VALUES('3146','沙依巴克区','522');--
INSERT INTO `cmseasy_b_area` VALUES('3147','水磨沟区','522');--
INSERT INTO `cmseasy_b_area` VALUES('3148','独山子区','523');--
INSERT INTO `cmseasy_b_area` VALUES('3149','白碱滩区','523');--
INSERT INTO `cmseasy_b_area` VALUES('3150','乌尔禾区','523');--
INSERT INTO `cmseasy_b_area` VALUES('3151','克拉玛依区','523');--
INSERT INTO `cmseasy_b_area` VALUES('3152','吐鲁番市','524');--
INSERT INTO `cmseasy_b_area` VALUES('3153','托克逊县','524');--
INSERT INTO `cmseasy_b_area` VALUES('3154','鄯善县','524');--
INSERT INTO `cmseasy_b_area` VALUES('3155','哈密市','525');--
INSERT INTO `cmseasy_b_area` VALUES('3156','伊吾县','525');--
INSERT INTO `cmseasy_b_area` VALUES('3157','巴里坤哈萨克自治县','525');--
INSERT INTO `cmseasy_b_area` VALUES('3158','和田市','526');--
INSERT INTO `cmseasy_b_area` VALUES('3159','墨玉县','526');--
INSERT INTO `cmseasy_b_area` VALUES('3160','洛浦县','526');--
INSERT INTO `cmseasy_b_area` VALUES('3161','于田县','526');--
INSERT INTO `cmseasy_b_area` VALUES('3162','民丰县','526');--
INSERT INTO `cmseasy_b_area` VALUES('3163','和田县','526');--
INSERT INTO `cmseasy_b_area` VALUES('3164','皮山县','526');--
INSERT INTO `cmseasy_b_area` VALUES('3165','策勒县','526');--
INSERT INTO `cmseasy_b_area` VALUES('3166','阿克苏市','527');--
INSERT INTO `cmseasy_b_area` VALUES('3167','库车县','527');--
INSERT INTO `cmseasy_b_area` VALUES('3168','新和县','527');--
INSERT INTO `cmseasy_b_area` VALUES('3169','乌什县','527');--
INSERT INTO `cmseasy_b_area` VALUES('3170','温宿县','527');--
INSERT INTO `cmseasy_b_area` VALUES('3171','沙雅县','527');--
INSERT INTO `cmseasy_b_area` VALUES('3172','拜城县','527');--
INSERT INTO `cmseasy_b_area` VALUES('3173','阿瓦提县','527');--
INSERT INTO `cmseasy_b_area` VALUES('3174','喀什市','528');--
INSERT INTO `cmseasy_b_area` VALUES('3175','疏勒县','528');--
INSERT INTO `cmseasy_b_area` VALUES('3176','泽普县','528');--
INSERT INTO `cmseasy_b_area` VALUES('3177','叶城县','528');--
INSERT INTO `cmseasy_b_area` VALUES('3178','岳普湖县','528');--
INSERT INTO `cmseasy_b_area` VALUES('3179','塔什库尔干塔吉克自治县','528');--
INSERT INTO `cmseasy_b_area` VALUES('3180','巴楚县','528');--
INSERT INTO `cmseasy_b_area` VALUES('3181','疏附县','528');--
INSERT INTO `cmseasy_b_area` VALUES('3182','英吉沙县','528');--
INSERT INTO `cmseasy_b_area` VALUES('3183','莎车县','528');--
INSERT INTO `cmseasy_b_area` VALUES('3184','麦盖提县','528');--
INSERT INTO `cmseasy_b_area` VALUES('3185','伽师县','528');--
INSERT INTO `cmseasy_b_area` VALUES('3186','阿图什市','529');--
INSERT INTO `cmseasy_b_area` VALUES('3187','阿合奇县','529');--
INSERT INTO `cmseasy_b_area` VALUES('3188','乌恰县','529');--
INSERT INTO `cmseasy_b_area` VALUES('3189','阿克陶县','529');--
INSERT INTO `cmseasy_b_area` VALUES('3190','库尔勒市','530');--
INSERT INTO `cmseasy_b_area` VALUES('3191','尉犁县','530');--
INSERT INTO `cmseasy_b_area` VALUES('3192','且末县','530');--
INSERT INTO `cmseasy_b_area` VALUES('3193','和静县','530');--
INSERT INTO `cmseasy_b_area` VALUES('3194','博湖县','530');--
INSERT INTO `cmseasy_b_area` VALUES('3195','轮台县','530');--
INSERT INTO `cmseasy_b_area` VALUES('3196','若羌县','530');--
INSERT INTO `cmseasy_b_area` VALUES('3197','焉耆回族自治县','530');--
INSERT INTO `cmseasy_b_area` VALUES('3198','和硕县','530');--
INSERT INTO `cmseasy_b_area` VALUES('3199','昌吉市','531');--
INSERT INTO `cmseasy_b_area` VALUES('3200','米泉市','531');--
INSERT INTO `cmseasy_b_area` VALUES('3201','玛纳斯县','531');--
INSERT INTO `cmseasy_b_area` VALUES('3202','吉木萨尔县','531');--
INSERT INTO `cmseasy_b_area` VALUES('3203','木垒哈萨克自治县','531');--
INSERT INTO `cmseasy_b_area` VALUES('3204','阜康市','531');--
INSERT INTO `cmseasy_b_area` VALUES('3205','呼图壁县','531');--
INSERT INTO `cmseasy_b_area` VALUES('3206','奇台县','531');--
INSERT INTO `cmseasy_b_area` VALUES('3207','博乐市','532');--
INSERT INTO `cmseasy_b_area` VALUES('3208','温泉县','532');--
INSERT INTO `cmseasy_b_area` VALUES('3209','精河县','532');--
INSERT INTO `cmseasy_b_area` VALUES('3210','伊宁市','533');--
INSERT INTO `cmseasy_b_area` VALUES('3211','伊宁县','533');--
INSERT INTO `cmseasy_b_area` VALUES('3212','霍城县','533');--
INSERT INTO `cmseasy_b_area` VALUES('3213','新源县','533');--
INSERT INTO `cmseasy_b_area` VALUES('3214','尼勒克县','533');--
INSERT INTO `cmseasy_b_area` VALUES('3215','特克斯县','533');--
INSERT INTO `cmseasy_b_area` VALUES('3216','奎屯市','533');--
INSERT INTO `cmseasy_b_area` VALUES('3217','察布查尔锡伯自治县','533');--
INSERT INTO `cmseasy_b_area` VALUES('3218','巩留县','533');--
INSERT INTO `cmseasy_b_area` VALUES('3219','昭苏县','533');--
INSERT INTO `cmseasy_b_area` VALUES('3220','塔城市','534');--
INSERT INTO `cmseasy_b_area` VALUES('3221','额敏县','534');--
INSERT INTO `cmseasy_b_area` VALUES('3222','托里县','534');--
INSERT INTO `cmseasy_b_area` VALUES('3223','和布克赛尔蒙古自治县','534');--
INSERT INTO `cmseasy_b_area` VALUES('3224','乌苏市','534');--
INSERT INTO `cmseasy_b_area` VALUES('3225','沙湾县','534');--
INSERT INTO `cmseasy_b_area` VALUES('3226','裕民县','534');--
INSERT INTO `cmseasy_b_area` VALUES('3227','阿勒泰市','535');--
INSERT INTO `cmseasy_b_area` VALUES('3228','吉木乃县','535');--
INSERT INTO `cmseasy_b_area` VALUES('3229','布尔津县','535');--
INSERT INTO `cmseasy_b_area` VALUES('3230','富蕴县','535');--
INSERT INTO `cmseasy_b_area` VALUES('3231','哈巴河县','535');--
INSERT INTO `cmseasy_b_area` VALUES('3232','福海县','535');--
INSERT INTO `cmseasy_b_area` VALUES('3233','青河县','535');--
INSERT INTO `cmseasy_b_area` VALUES('3234','石河子市','536');--
INSERT INTO `cmseasy_b_area` VALUES('3235','阿拉尔市','536');--
INSERT INTO `cmseasy_b_area` VALUES('3236','图木舒克市','536');--
INSERT INTO `cmseasy_b_area` VALUES('3237','五家渠市','536');--
INSERT INTO `cmseasy_b_area` VALUES('3238','兴宁区','537');--
INSERT INTO `cmseasy_b_area` VALUES('3239','江南区','537');--
INSERT INTO `cmseasy_b_area` VALUES('3240','良庆区','537');--
INSERT INTO `cmseasy_b_area` VALUES('3241','武鸣县','537');--
INSERT INTO `cmseasy_b_area` VALUES('3242','马山县','537');--
INSERT INTO `cmseasy_b_area` VALUES('3243','宾阳县','537');--
INSERT INTO `cmseasy_b_area` VALUES('3244','横县','537');--
INSERT INTO `cmseasy_b_area` VALUES('3245','青秀区','537');--
INSERT INTO `cmseasy_b_area` VALUES('3246','西乡塘区','537');--
INSERT INTO `cmseasy_b_area` VALUES('3247','邕宁区','537');--
INSERT INTO `cmseasy_b_area` VALUES('3248','隆安县','537');--
INSERT INTO `cmseasy_b_area` VALUES('3249','上林县','537');--
INSERT INTO `cmseasy_b_area` VALUES('3250','城中区','538');--
INSERT INTO `cmseasy_b_area` VALUES('3251','柳南区','538');--
INSERT INTO `cmseasy_b_area` VALUES('3252','柳江县','538');--
INSERT INTO `cmseasy_b_area` VALUES('3253','鹿寨县','538');--
INSERT INTO `cmseasy_b_area` VALUES('3254','融水苗族自治县','538');--
INSERT INTO `cmseasy_b_area` VALUES('3255','三江侗族自治县','538');--
INSERT INTO `cmseasy_b_area` VALUES('3256','鱼峰区','538');--
INSERT INTO `cmseasy_b_area` VALUES('3257','柳北区','538');--
INSERT INTO `cmseasy_b_area` VALUES('3258','柳城县','538');--
INSERT INTO `cmseasy_b_area` VALUES('3259','融安县','538');--
INSERT INTO `cmseasy_b_area` VALUES('3260','秀峰区','539');--
INSERT INTO `cmseasy_b_area` VALUES('3261','象山区','539');--
INSERT INTO `cmseasy_b_area` VALUES('3262','雁山区','539');--
INSERT INTO `cmseasy_b_area` VALUES('3263','临桂县','539');--
INSERT INTO `cmseasy_b_area` VALUES('3264','全州县','539');--
INSERT INTO `cmseasy_b_area` VALUES('3265','永福县','539');--
INSERT INTO `cmseasy_b_area` VALUES('3266','龙胜各族自治县','539');--
INSERT INTO `cmseasy_b_area` VALUES('3267','平乐县恭城瑶族自治县','539');--
INSERT INTO `cmseasy_b_area` VALUES('3268','叠彩区','539');--
INSERT INTO `cmseasy_b_area` VALUES('3269','七星区','539');--
INSERT INTO `cmseasy_b_area` VALUES('3270','阳朔县','539');--
INSERT INTO `cmseasy_b_area` VALUES('3271','灵川县','539');--
INSERT INTO `cmseasy_b_area` VALUES('3272','兴安县','539');--
INSERT INTO `cmseasy_b_area` VALUES('3273','灌阳县','539');--
INSERT INTO `cmseasy_b_area` VALUES('3274','资源县','539');--
INSERT INTO `cmseasy_b_area` VALUES('3275','荔蒲县','539');--
INSERT INTO `cmseasy_b_area` VALUES('3276','万秀区','540');--
INSERT INTO `cmseasy_b_area` VALUES('3277','长洲区','540');--
INSERT INTO `cmseasy_b_area` VALUES('3278','藤县','540');--
INSERT INTO `cmseasy_b_area` VALUES('3279','岑溪市','540');--
INSERT INTO `cmseasy_b_area` VALUES('3280','蝶山区','540');--
INSERT INTO `cmseasy_b_area` VALUES('3281','苍梧县','540');--
INSERT INTO `cmseasy_b_area` VALUES('3282','蒙山县','540');--
INSERT INTO `cmseasy_b_area` VALUES('3283','海城区','541');--
INSERT INTO `cmseasy_b_area` VALUES('3284','铁山港区','541');--
INSERT INTO `cmseasy_b_area` VALUES('3285','合浦县','541');--
INSERT INTO `cmseasy_b_area` VALUES('3286','银海区','541');--
INSERT INTO `cmseasy_b_area` VALUES('3287','港口区','542');--
INSERT INTO `cmseasy_b_area` VALUES('3288','上思县','542');--
INSERT INTO `cmseasy_b_area` VALUES('3289','东兴市','542');--
INSERT INTO `cmseasy_b_area` VALUES('3290','防城区','542');--
INSERT INTO `cmseasy_b_area` VALUES('3291','钦南区','543');--
INSERT INTO `cmseasy_b_area` VALUES('3292','灵山县','543');--
INSERT INTO `cmseasy_b_area` VALUES('3293','浦北县','543');--
INSERT INTO `cmseasy_b_area` VALUES('3294','钦北区','543');--
INSERT INTO `cmseasy_b_area` VALUES('3295','港北区','544');--
INSERT INTO `cmseasy_b_area` VALUES('3296','覃塘区','544');--
INSERT INTO `cmseasy_b_area` VALUES('3297','桂平市','544');--
INSERT INTO `cmseasy_b_area` VALUES('3298','港南区','544');--
INSERT INTO `cmseasy_b_area` VALUES('3299','平南县','544');--
INSERT INTO `cmseasy_b_area` VALUES('3300','玉州区','545');--
INSERT INTO `cmseasy_b_area` VALUES('3301','陆川县','545');--
INSERT INTO `cmseasy_b_area` VALUES('3302','兴业县','545');--
INSERT INTO `cmseasy_b_area` VALUES('3303','北流市','545');--
INSERT INTO `cmseasy_b_area` VALUES('3304','容县','545');--
INSERT INTO `cmseasy_b_area` VALUES('3305','博白县','545');--
INSERT INTO `cmseasy_b_area` VALUES('3306','右江区','546');--
INSERT INTO `cmseasy_b_area` VALUES('3307','田东县','546');--
INSERT INTO `cmseasy_b_area` VALUES('3308','德保县','546');--
INSERT INTO `cmseasy_b_area` VALUES('3309','那坡县','546');--
INSERT INTO `cmseasy_b_area` VALUES('3310','乐业县','546');--
INSERT INTO `cmseasy_b_area` VALUES('3311','西林县','546');--
INSERT INTO `cmseasy_b_area` VALUES('3312','隆林各族自治县','546');--
INSERT INTO `cmseasy_b_area` VALUES('3313','田阳县','546');--
INSERT INTO `cmseasy_b_area` VALUES('3314','平果县','546');--
INSERT INTO `cmseasy_b_area` VALUES('3315','靖西县','546');--
INSERT INTO `cmseasy_b_area` VALUES('3316','凌云县','546');--
INSERT INTO `cmseasy_b_area` VALUES('3317','田林县','546');--
INSERT INTO `cmseasy_b_area` VALUES('3318','八步区','547');--
INSERT INTO `cmseasy_b_area` VALUES('3319','钟山县','547');--
INSERT INTO `cmseasy_b_area` VALUES('3320','富川瑶族自治县','547');--
INSERT INTO `cmseasy_b_area` VALUES('3321','昭平县','547');--
INSERT INTO `cmseasy_b_area` VALUES('3322','金城江区','548');--
INSERT INTO `cmseasy_b_area` VALUES('3323','天峨县','548');--
INSERT INTO `cmseasy_b_area` VALUES('3324','东兰县','548');--
INSERT INTO `cmseasy_b_area` VALUES('3325','环江毛南族自治县','548');--
INSERT INTO `cmseasy_b_area` VALUES('3326','都安瑶族自治县','548');--
INSERT INTO `cmseasy_b_area` VALUES('3327','宜州市','548');--
INSERT INTO `cmseasy_b_area` VALUES('3328','南丹县','548');--
INSERT INTO `cmseasy_b_area` VALUES('3329','凤山县','548');--
INSERT INTO `cmseasy_b_area` VALUES('3330','罗城\r\n仫佬族自治县','548');--
INSERT INTO `cmseasy_b_area` VALUES('3331','巴马瑶族自治县','548');--
INSERT INTO `cmseasy_b_area` VALUES('3332','大化瑶族自治县','548');--
INSERT INTO `cmseasy_b_area` VALUES('3333','兴宾区','549');--
INSERT INTO `cmseasy_b_area` VALUES('3334','象州县','549');--
INSERT INTO `cmseasy_b_area` VALUES('3335','金秀瑶族自治县','549');--
INSERT INTO `cmseasy_b_area` VALUES('3336','合山市','549');--
INSERT INTO `cmseasy_b_area` VALUES('3337','忻城县','549');--
INSERT INTO `cmseasy_b_area` VALUES('3338','武宣县','549');--
INSERT INTO `cmseasy_b_area` VALUES('3339','江洲区','550');--
INSERT INTO `cmseasy_b_area` VALUES('3340','宁明县','550');--
INSERT INTO `cmseasy_b_area` VALUES('3341','大新县','550');--
INSERT INTO `cmseasy_b_area` VALUES('3342','凭祥市','550');--
INSERT INTO `cmseasy_b_area` VALUES('3343','扶绥县','550');--
INSERT INTO `cmseasy_b_area` VALUES('3344','龙州县','550');--
INSERT INTO `cmseasy_b_area` VALUES('3345','天等县','550');--
INSERT INTO `cmseasy_b_area` VALUES('3346','西城区','551');--
INSERT INTO `cmseasy_b_area` VALUES('3347','东城区','551');--
INSERT INTO `cmseasy_b_area` VALUES('3348','新 城','551');--
INSERT INTO `cmseasy_b_area` VALUES('3349','新市区','551');--
INSERT INTO `cmseasy_b_area` VALUES('3350','永宁县城','551');--
INSERT INTO `cmseasy_b_area` VALUES('3351','贺兰县城','551');--
INSERT INTO `cmseasy_b_area` VALUES('3352','大武口区','552');--
INSERT INTO `cmseasy_b_area` VALUES('3353','石嘴山区','552');--
INSERT INTO `cmseasy_b_area` VALUES('3354','石炭井区','552');--
INSERT INTO `cmseasy_b_area` VALUES('3355','平罗县城','552');--
INSERT INTO `cmseasy_b_area` VALUES('3356','陶乐县城','552');--
INSERT INTO `cmseasy_b_area` VALUES('3357','惠农县城','552');--
INSERT INTO `cmseasy_b_area` VALUES('3358','中宁县城','553');--
INSERT INTO `cmseasy_b_area` VALUES('3359','同心县城','553');--
INSERT INTO `cmseasy_b_area` VALUES('3360','灵武县城','553');--
INSERT INTO `cmseasy_b_area` VALUES('3361','盐池县城','553');--
INSERT INTO `cmseasy_b_area` VALUES('3362','青铜峡市（小坝）','553');--
INSERT INTO `cmseasy_b_area` VALUES('3363','青铜峡镇','553');--
INSERT INTO `cmseasy_b_area` VALUES('3364','中卫县城','553');--
INSERT INTO `cmseasy_b_area` VALUES('3365','海原县城','554');--
INSERT INTO `cmseasy_b_area` VALUES('3366','西吉县城','554');--
INSERT INTO `cmseasy_b_area` VALUES('3367','隆德县城','554');--
INSERT INTO `cmseasy_b_area` VALUES('3368','泾源县城','554');--
INSERT INTO `cmseasy_b_area` VALUES('3369','彭阳县城','554');--
INSERT INTO `cmseasy_b_area` VALUES('3372','高新区','443');--

INSERT INTO `cmseasy_b_category` VALUES('1','0','关于我们','','10','/upload/images/201304/1000guanyu.jpg','','','','<p>易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。</p>\r\n<p>&nbsp;</p>\r\n<p>九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。</p>\r\n<p>&nbsp;</p>\r\n<p>易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。</p>','about','archive/list_page.html','archive/list_page.html','0','0','archive/list_page.html','archive/list_page.html','0','','','','article','1','0','0','1','1','0','','','','','','0','0','1','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('2','0','新闻栏目','','20','/upload/images/201304/2000xinwen.jpg','','','','<p>&nbsp;CmsEasy易通免费企业网站系统自带国内企业CMS首创的推广链模块，通过推广链接让客户和生意自己找上门！这点是CmsEasy易通免费企业网站系统独有的优势和长处，在这里推荐各位企业建站用户体验下。如果有很好的客服服务系统，比你网站上写QQ号，电话等，好处更加明显，而且专业性也体现的更为强烈。现在网上也有很多客服系统，但是很多都是比较老款式的，样子难看，而且实用功能不强，易通CMS自带客服服务系统。</p>','news','archive/list.html','archive/list.html','archive/show.html','0','archive/list.html','archive/list.html','archive/show.html','','','','article','1','0','0','1','1','0','','','','','','0','0','1','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('3','0','产品中心','','30','/upload/images/201304/3000chanpin.jpg','','','','<p>&nbsp;易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。</p>','products','archive/list_pic.html','archive/list_pic.html','archive/show_products.html','0','archive/list_pic.html','archive/list_pic.html','archive/show_products.html','','','','article','1','0','0','1','1','0','','','','','','0','0','1','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('4','0','营销网络','','40','/upload/images/201304/4000wangluoyingxiao.jpg','','','','<p style=\"text-align: center\"><img alt=\"\" width=\"516\" height=\"267\" src=\"/upload/archive/image/1007182312368551207nx9paa1i8k0.jpg\" /></p>\r\n<p style=\"text-align: center\">&nbsp;</p>\r\n<p>易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。</p>\r\n<p style=\"text-align: left\">公司地址：四平红嘴大学科技园</p>\r\n<p style=\"text-align: left\">联系电话：0434-5226595</p>\r\n<p style=\"text-align: left\">办公传真：0434-5226595</p>','marketing','archive/list_page.html','archive/list_page.html','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('5','0','联系我们','','50','/upload/images/201304/5000lianxiwomen.jpg','','','','<p>如果你想拥有一份自由有趣的工作，如果你对界面设计拥有一份热情和动力，那么请与我们联系。在这里你能发现一群志同道合的年轻人，并为了实践理想而努力！</p><p>我们的团队为自己的理想奋斗，我们互补性强，分工明确，目标一致，我们艰苦奋斗，坚持不辍！因为我们坚信，一个好的理念和一个优秀的团队势必会成就一个远大的理想！<br/>&nbsp;</p><p>联系我们：<br/>售前咨询客服QQ-01：<br/>售前咨询客服QQ-02：<br/>客户售前咨询热线：<br/>客户售后服务热线：<br/>客服信箱：</p><p>&nbsp;</p><p>&nbsp;</p>','contact','archive/list_ditu.html','archive/list_page.html','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('6','0','文档下载','','60','/upload/images/201304/6000wendangxiazai.jpg','','','','<p>&nbsp;易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。</p>\r\n<p>九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。</p>\r\n<p>&nbsp;</p>','download','archive/list_down.html','archive/list_down.html','archive/show_down.html','0','archive/list_down.html','archive/list_down.html','archive/show_down.html','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('7','0','职位招聘','','70','/upload/images/201304/7000zhiweizhaopin.jpg','','','','<p>&nbsp;易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。</p>\r\n<p>九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。</p>\r\n<p>&nbsp;</p>','Recruitment','archive/list_job.html','archive/list_job.html','archive/show_job.html','0','archive/list_job.html','archive/list_job.html','archive/show_job.html','','','','article','1','0','0','1','1','0','','','','','','0','0','1','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('8','3','新品上市','','31','/upload/images/201304/3100chanpin.jpg','','','','<p>所谓&ldquo;核心&rdquo;是人体的中间环节，就是肩关节以下、髋关节以上包括骨盆在内的区域，是由腰、骨盆、髋关节形成的一个整体，包含29块肌肉。核心肌肉群担负着稳定重心、传导力量等</p>','Sub_Column1','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('12','3','好评作品','','33','/upload/images/201304/3300chanpin.jpg','','','','<p>&nbsp;肌细胞的形状细长，呈纤维状，故肌细胞通常称为肌纤维。中医理论中，肌肉指身体肌肉组织和皮下脂肪组织的总称。脾主肌肉，肌肉的营养从脾的运化水谷精微而得。肌肉:解剖结构名。故肌肉丰满与否</p>','Sub_Column3','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('10','3','优秀作品','','32','/upload/images/201304/3200chanpin.jpg','','','','<div>心肺适能，也可以称为心肺耐力，是指个人的肺脏与心脏，从空气中携带氧气，并将氧气输送到组织细胞加以使用的能力。因此心肺适能可以说是个人的心脏、肺脏、血管、与组织细胞有氧能力的指标。提升心肺适能的重要性心肺适能较佳，可以使我们运动持续较久、且不至于很快疲倦，也可以使我们平日工作时间更久，更有效率。</div>\r\n<div>　　以健康的角度来看，拥有良好的心肺适能可以避免各种心血管疾病，因此心肺适能可说是健康体能的重要因素，也是体适能运动的重点。</div>','Sub_Column2','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('11','9','iPhone','','0','','','','','','iPhone','archive/list_pic.html','archive/list_pic.html','archive/show_products.html','0','','','','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('13','2','行业新闻','','21','/upload/images/201304/2100qiyexinwen.jpg','','','','<p>&nbsp;WAP的诞生同时亦为商务缔造无穷商机。商户便可透过WA P技术接通庞大的手机用户市场，拓展无限的业务空间。CmsEasy易通免费企业网站系统推出了手机浏览功能，方便了企业在移动互联网上争夺自己的一片战场，为自己在移动互联网上的营销，您可以通过WAP手机浏览网站功能让您的客户无论身在何处，都可以轻松便捷的访问您的网站。</p>','Enterprise_News','archive/list_text.html','archive/list_text.html','0','0','archive/list_text.html','archive/list_text.html','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('14','2','企业新闻','','22','/upload/images/201304/2200xinwendongtai.jpg','','','','<p>&nbsp;网站建设入门难点就在模板制作和设置，CmsEasy易通免费企业网站系统为建站用户提供了中文标签设置，您在后台简单的鼠标设置下标签内容，网站前台内容就随之变化，用户操作使用极为方便，而且简单易懂。</p>\r\n<div>&nbsp;</div>','News_Information','archive/list_text_pic.html','archive/list_text_pic.html','0','0','archive/list_text_pic.html','archive/list_text_pic.html','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('15','2','新闻动态','','23','/upload/images/201304/2300hangyexinwen.jpg','','','','<p>&nbsp;对于营销型企业网站，最重要的是和客户的及时沟通以及回访，CmsEasy易通免费企业网站系统这点做的非常完美，从订单到客户留言，到web直接咨询都可以给您和您的客户带来极为方便的沟通方式。客户可以选择web对话、短信、留言一系列方式进行沟通。</p>','Industry_News','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('16','1','企业文化','','11','/upload/images/201304/1100wenhua.jpg','','','','<div>\r\n<div>CmsEasy是一款基于 PHP+Mysql 架构的网站内容管理系统，也是一个 PHP 开发平台。 采用模块化方式开发，功能易用便于扩展，可面向大中型站点提供重量级网站建设解决方案。2年来，凭借 团队长期积累的丰富的Web开发及数据库经验和勇于创新追求完美的设计理念，使得 CmsEasy v1.0 得到了众多网站的认可，并且越来越多地被应用到大中型商业网站。</div>\r\n<div style=\"color: rgb(102, 102, 102);-- font-family: tahoma, Helvetica, arial, 宋体, sans-serif; font-size: 14px; line-height: 28px;\">&nbsp;</div>\r\n</div>','Culture','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('17','1','企业荣誉','','12','/upload/images/201304/1200rongyu.jpg','','','','<p>九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。</p>','qiyerongyu','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('18','0','成功案例','','80','/upload/images/201304/8000chenggong.jpg','','','','<div>感谢您选择 CmsEasy 产品。希望我们的努力能为您提供一个高效快速和强大的企业建站解决方案。&nbsp;</div><div>&nbsp;</div><div>&nbsp;&nbsp;</div><div>CmsEasy 英文全称为 CmsEasy，中文全称为 易通CMS系统软件，以下简称 CmsEasy 。&nbsp;&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div><div>九州易通(四平)科技有限公司为 CmsEasy 产品的开发商，依法独立拥有 CmsEasy 产品著作权（中国国家版权局著作权登记号 2009SR031147）。</div><div>&nbsp;</div><div>九州易通(四平)科技有限公司网址为 http://www.pown.net，</div><div>&nbsp;</div><div>CmsEasy 官方网站网址为 http://www.cmseasy.cn，&nbsp;</div><div>&nbsp;</div><div>CmsEasy 官方讨论区网址为 http://www.cmseasy.org。&nbsp;&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div><div>CmsEasy 著作权已在中华人民共和国国家版权局注册，著作权受到法律和国际公约保护。使用者：无论个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用 CmsEasy 软件。&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div><div>本授权协议适用且仅适用于 CmsEasy 3.x.x 版本，九州易通(四平)科技有限公司拥有对本授权协议的最终解释权。&nbsp;</div>','case','archive/list_pic.html','archive/list_pic.html','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('19','0','我们的团队','','90','/upload/images/201304/9000hezuo.jpg','','','','<p>&nbsp;　　商务合作的资格编辑从事商务合作的企业或者人必须有一定的资格，合作双方必须签订正式的合作意向，或者签订合同，必须为此次商务合作做好充分的准备，并为此负法律责任。</p>\r\n<div>　　商务合作的意义编辑商务合作加强企业间的信息交流，促进企业飞速发展。</div>\r\n<div>　　商务合作的职能编辑合作拓展的工作方向从大的方向来讲，社会行业分为制造业，零售业，服务业，农业。从互联网领域来讲又分为传统互联网和移动互联网，细分下去还有门户，搜索引擎，网络服务，网游，视频网站，电商，互联网基础服务，远程教育等。在行业认识上其实很多新人都有个误区，认为过度包装能够增强自信，提高达成合作的可能。事实上无论行业大小都有自己的优势和价值，无需妄自菲薄，也没必要自我吹嘘。</div>','he-zuo-huo-ban','archive/list.html','archive/list.html','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('23','22','售前咨询','','0','','','','','<p>&nbsp;易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。</p>','shou-qian-zi-xun','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('24','22','送货流程','','0','','','','','<p>&nbsp;九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。</p>','song-huo-liu-cheng','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('25','22','安装服务','','0','','','','','<p>&nbsp;CMSEasy根据当前广为流行的敏捷开发方式，实现了基于ROR模型框架，能够快速高效的完成各种应用的开发和扩展。</p>\r\n<p>&nbsp;</p>','an-zhuang-fu-wu','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('26','22','售后服务','','0','','','','','<p>&nbsp;CmsEasy易通免费企业网站系统自带国内企业CMS首创的推广链模块，通过推广链接让客户和生意自己找上门！这点是CmsEasy易通免费企业网站系统独有的优势和长处，在这里推荐各位企业建站用户体验下。</p>\r\n<div>&nbsp;</div>','shou-hou-fu-wu','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('27','0','我们的优势','','0','/upload/images/201605/14633789228436.jpg','','','','<p>&nbsp;易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。</p><p>九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。</p><p>易通企业网站系统是九州易通科技开发的中国首套免费提供模板的营销型企业网站管理系统，系统前台生成html、完全符合SEO、同时有在线客服、潜在客户跟踪、便捷的企业网站管理、搜索引擎推广等功能。</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>九州易通科技开发的核心产品易通企业网站系统(CmsEasy3.0)是充分按照SEO最佳标准来开发，营销实用性非常强企业建站系统。灵活的静态化控制，可以自定义字段，自定义模板，自定义表单，自定义URL，交叉绑定分类，地区，专题等多元化定制大大增加了企业网站的各种需求空间。强大的模板自定义可以轻松打造出个性的栏目封面，文章列表，图片列表，下载列表，分类列表，地区列表等等。</p><p>&nbsp;</p>','wo-men-de-you-shi','archive/list_page.html','archive/list_page.html','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('28','27','企业实力优势','','0','/upload/images/201511/14470619486543.jpg','','','','<p>&nbsp;我们倡导金牌服务，倡导以营销结果为导向的网站建设服务，我们从来不介入价格战，因为我们相信：品质创造价值。截止2009年8月，超过500家企业选择了远航科技，这使我们拥有稳定的业绩和利润，让我们可以更专注的为客户提供优质服务。毕竟，在大量网络公司纷纷倒闭的今天，远航科技能持续屹立并稳步发展是对客户最基本的保障，也是对客户、对员工、对股东最负责的态度。</p>','qi-ye-shi-li-you-shi','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('29','27',' 硬件设施优势','','0','/upload/images/201511/14470619642677.jpg','','','','<p>&nbsp;定期对服务器硬件进行升级换代，服务器全部采用Intel Xeon 5420（四核 2.5G）服务器，SAS 1.5万转硬盘，及高达4GB的ECC内存，我们在景安的四线服务器投入已经超2台，在天津上架1台双线服务器，在保定电信投入了一台，而且我们选用都骨干核心机房，其40G的出口带宽和本土化优势，让我们的绝大多数客户受益，尽管我们为此多付出了3-5倍的成本。</p>','_-ying-jian-she-shi-you-shi','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('30','27','运营经验优势','','0','/upload/images/201511/14470619771532.jpg','','','','<p>&nbsp;主要运营人员从2004年开始介入网站建设领域，无论是在狂热的年代、还是在寒冷的冬天，我们都没有放弃自己的理想。如何利用互联网络为企业创造实实在在的效益，一直是天度的价值核心。事实证明，我们的持续研究和运营经验为客户创造了更多效益，而我们一直坚持以营销结果为导向，为您创造有效益的营销型网站和网络系统；而远航科技的成功经验，将使客户离成功的距离更近！</p>','yun-ying-jing-yan-you-shi','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('31','27','技术人才优势','','0','/upload/images/201511/1447061992309.jpg','','','','<p>&nbsp;技术的优势归结到底还是人才的优势，当然对人才的培养和管理也显得尤为重要。远航科技对技术性人才的要求几近苛刻，因为进入远航科技的技术人员将经历严格的层层考核，只有1%左右的佼佼者才能进入远航科技。他们都有着丰富的从业经验和深厚的技术功底，甚至有些原来就是网络公司的创业者，即使在进入远航科技后，他们也还将面临定期培训和定期考核，这让我们能保持在技术的最前沿，所以您得到的将是最优秀的技术及服务团队。</p>','ji-shu-ren-cai-you-shi','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('32','27','开发模式优势','','0','/upload/images/201511/14470620062402.jpg','','','','<p>&nbsp;我们采用前台全部自动生成或定时生成HTM静态页面(本程序为远航科技自行开发设计,并正在积极申请软件著作权)，我们采用DIV+CSS的开发模式，严格按照W3C国际标准进行开发。所有网站功能都可以定制，我们承诺不嵌套任何他人的程序，凡是远航科技设计与制作的网站都是我们自己的技术人员独立开发完成的，所有客户只有在我们公司授权的情况下方可使用。我们结合网站搜索引擎优化和营销，以用户体验UE为核心，强调网站整体VI视觉形象和网站表现力，以获得来访用户的信赖和更高评价。品质创造价值，基于这种模式的网站开发，不但可以为您带来更多的客户，还能将这些访问者在线转换为客户效益。</p>','kai-fa-mo-shi-you-shi','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--
INSERT INTO `cmseasy_b_category` VALUES('33','27','良性循环优势','','0','/upload/images/201511/14470620192291.jpg','','','','<p>&nbsp;我们一直相信良性和恶性两种循环的存在，当一个企业在迫于生存压力、不断压缩服务成本、着眼眼前利益的时候，他将损失更多的客户，这是众多网络公司纷纷倒闭的主要原因，这是一种恶性循环，毕竟服务商倒闭的直接受害者将是客户。远航科技一直以来坚持提供优质服务，我们也从不介入价格战，即使在最艰难的时候，我们也认真的做好每个细节，这使我们赢得了更多的客户，而且持续、合理的利润让我们可以一直坚持这点，这就是一个良性循环。</p>','liang-xing-xun-huan-you-shi','0','0','0','0','0','0','0','','','','article','1','0','0','1','1','0','','','','','','0','0','0','1','0','');--

INSERT INTO `cmseasy_b_special` VALUES('1','2周年纪念，感恩大促销活动！','/upload/images/201304/special01.jpg','<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: rgb(255, 0, 0);-- \"><strong>让您的产品，在互联网上普通盖地！</strong></span></p>\r\n<p><span style=\"color: rgb(0, 0, 255);-- \">想让更多的客户找到您吗？</span></p>\r\n<p><strong>易通企业网站系统独创企业推广链联盟系统</strong></p>\r\n<p>通过推广链接，让客户和生意自己找上门！</p>\r\n<p>为您的企业营销助力，伴您轻松成功！</p>\r\n<p>易通企业网站系统让您客源不断、生意兴隆！</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>活动一：年授权仅需100元！</p>\r\n<p>活动二：年费授权+1GB空间仅需200元！</p>\r\n<p>活动三：年费版授权+COM域名+1GB空间仅需258元！</p>\r\n<p>活动四：终身版授权+COM域名+1GB空间仅需358元！</p>\r\n<p>活动五：服务版授权+COM域名+1GB空间仅需558元！</p>\r\n<p>增值服务：单独增加一年咨询服务仅需200元！</p>\r\n<p>所有CmsEasy均免费附赠企业客服程序！</p>\r\n<p>赠送空间为国内1GB或香港500MB！</p>\r\n<p>&nbsp;</p>','','0','0','0','0','0');--
INSERT INTO `cmseasy_b_special` VALUES('2','庆典六周年，全场低至200元','','<ul style=\"padding: 0px; color: rgb(85, 85, 85);-- font-family: 微软雅黑; font-size: 12.48px; line-height: 18.72px; white-space: normal;\" class=\" list-paddingleft-2\"><li><p>值此纪念公司成立六周年之际，九州易通科技有限公司为答谢广大用户的支持，特此推出本年度最大型的优惠盛宴。</p></li><li><p>本次活动将集结易通企业系统的各个类别的商品，包括商业授权、商业模板、企业主机等大类。</p></li><li><p>三百余套精美企业<a href=\"http://www.cmseasy.cnhttp//www.cmseasy.cn/business_templates/\" target=\"_blank\" style=\"text-decoration: none; color: rgb(85, 85, 85);--\">网站模板</a>供您选择，每套售价仅<strong style=\"color: red; font-size: 20px;\">200元</strong>人民币！！!</p></li><div class=\"blank50\" style=\"clear: both; height: 50px; overflow: hidden;\"></div><li><p><strong>郑重宣布：</strong></p></li><div class=\"blank20\" style=\"clear: both; height: 20px; overflow: hidden;\"></div><li><p>所有CmsEasy系统均免费附赠企业推广模块！</p></li><li><p>所有CmsEasy系统均免费附赠企业WEB客服程序！</p></li><li><p>所有CmsEasy系统均免费附赠支付宝，财付通，贝宝支付模块！</p></li><li><p>所有CmsEasy系统均免费附赠微信公共号推送模块！</p></li><li><p>所有CmsEasy系统均免费升级微信支付，快钱支付模块！</p></li></ul><p><br/></p>','special/show.html','0','0','0','0','0');--
INSERT INTO `cmseasy_b_special` VALUES('3','五周年庆感恩促销优惠活动进行中','','<p>值此纪念公司成立5周年之际，九州易通科技有限公司为答谢广大用户的支持，特此推出本年度最大型的网购盛宴，本次活动将集结易通企业系统的各个类别的商品，包括商业授权、商业模板、企业主机等大类。</p><p>&nbsp;</p><p>郑重宣布所有CmsEasy系统均免费附赠企业WEB客服程序！</p><p>建站套餐：</p><p>终身版授权+一套商业模板+1GB空间仅需600元！</p><p>终身版授权+一套商业模板+COM域名+1GB空间仅需655元！</p><p>终身版授权+一套商业模板+1GB空间+人工客服咨询仅需1500元！</p><p>终身版版+COM域名+1GB空间+一套商业模板+人工客服咨询仅需1555元！</p><p>&nbsp;</p><p>客户须知：</p><p>&nbsp;</p><p>空间为国内双线和香港免备案任选。</p><p>海外空间，无须备案。不必象在工信部等待冗长的人工开设备案审核.</p><p>注意：禁止放置色情、政治、赌博、小说、淘宝客或含采集功能等</p><p>套餐中的空间赠送一年，第二年续费只需200元</p><p>套餐中的费用不含发票，如需开具发票，需加8%税点和15元快递费。</p><p><br/></p>','special/show.html','0','0','0','0','0');--

INSERT INTO `cmseasy_b_tag` VALUES('1','tag测试1');--

INSERT INTO `cmseasy_ballot` VALUES('1','网站为什么要改版？','checkbox','3','0');--


INSERT INTO `cmseasy_bbs_category` VALUES('1','0','1','默认栏目','','','0','0');--

INSERT INTO `cmseasy_bbs_label` VALUES('1','0','普通');--
INSERT INTO `cmseasy_bbs_label` VALUES('2','0','求助');--
INSERT INTO `cmseasy_bbs_label` VALUES('3','0','询问');--

INSERT INTO `cmseasy_bbs_reply` VALUES('1','1','0','0','','0','<p>第一条回复！</p>','1324031541','0','0','127.0.0.1');--
INSERT INTO `cmseasy_bbs_reply` VALUES('2','1','0','1','','0','第二条回复','1324031609','0','0','127.0.0.1');--




INSERT INTO `cmseasy_event` VALUES('2','1','admin','127.0.0.1','1413012026','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('3','1','admin','127.0.0.1','1413012046','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('4','1','admin','127.0.0.1','1413012855','删除栏目','成功 id=9');--
INSERT INTO `cmseasy_event` VALUES('5','1','admin','127.0.0.1','1413013097','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('6','1','admin','127.0.0.1','1413013168','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('7','1','admin','127.0.0.1','1413013230','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('8','1','admin','127.0.0.1','1413013269','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('9','1','admin','127.0.0.1','1413013286','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('10','1','admin','127.0.0.1','1413013504','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('11','1','admin','127.0.0.1','1413013569','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('12','1','admin','127.0.0.1','1413013598','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('13','1','admin','127.0.0.1','1413013618','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('14','1','admin','127.0.0.1','1413013654','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('15','1','admin','127.0.0.1','1413013674','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('16','1','admin','127.0.0.1','1413013693','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('17','1','admin','127.0.0.1','1413013722','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('18','1','admin','127.0.0.1','1413013746','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('19','1','admin','127.0.0.1','1413013752','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('20','1','admin','127.0.0.1','1413013757','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('21','1','admin','127.0.0.1','1413013767','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('22','1','admin','127.0.0.1','1413013773','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('23','1','admin','127.0.0.1','1413013778','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('24','1','admin','127.0.0.1','1413013783','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('25','1','admin','127.0.0.1','1413013806','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('26','1','admin','127.0.0.1','1413013813','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('27','1','admin','127.0.0.1','1413013820','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('28','1','admin','127.0.0.1','1413013833','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('29','1','admin','127.0.0.1','1413013841','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('30','1','admin','127.0.0.1','1413013850','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('31','1','admin','127.0.0.1','1413013859','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('32','1','admin','127.0.0.1','1413013908','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('33','1','admin','127.0.0.1','1413013948','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('34','1','admin','127.0.0.1','1413013957','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('35','1','admin','127.0.0.1','1413013960','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('36','1','admin','127.0.0.1','1413013971','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('37','1','admin','127.0.0.1','1413014011','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('38','1','admin','127.0.0.1','1413014018','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('39','1','admin','127.0.0.1','1413014735','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('40','1','admin','127.0.0.1','1413014752','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('41','1','admin','127.0.0.1','1413014759','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('42','1','admin','127.0.0.1','1413014856','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('43','1','admin','127.0.0.1','1413015066','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('44','1','admin','127.0.0.1','1413015184','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('45','1','admin','127.0.0.1','1413015220','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('46','1','admin','127.0.0.1','1413015320','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('47','1','admin','127.0.0.1','1413015422','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('48','1','admin','127.0.0.1','1413015515','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('49','1','admin','127.0.0.1','1413015578','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('50','1','admin','127.0.0.1','1413015658','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('51','1','admin','127.0.0.1','1413015707','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('52','1','admin','127.0.0.1','1413015778','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('53','1','admin','127.0.0.1','1413015998','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('54','1','admin','127.0.0.1','1413016082','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('55','1','admin','127.0.0.1','1413016108','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('56','1','admin','127.0.0.1','1413016134','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('57','1','admin','127.0.0.1','1413016138','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('58','1','admin','127.0.0.1','1413016165','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('59','1','admin','127.0.0.1','1413016188','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('60','1','admin','127.0.0.1','1413016211','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('61','1','admin','127.0.0.1','1413016302','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('62','1','admin','127.0.0.1','1413016346','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('63','1','admin','127.0.0.1','1413016409','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('64','1','admin','127.0.0.1','1413016459','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('65','1','admin','127.0.0.1','1413016498','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('66','1','admin','127.0.0.1','1413016616','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('67','1','admin','127.0.0.1','1413016661','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('68','1','admin','127.0.0.1','1413016669','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('69','1','admin','127.0.0.1','1413016739','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('70','1','admin','127.0.0.1','1413016782','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('71','1','admin','127.0.0.1','1413016800','删除内容','成功 id=43');--
INSERT INTO `cmseasy_event` VALUES('72','1','admin','127.0.0.1','1413016846','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('73','1','admin','127.0.0.1','1413016907','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('74','1','admin','127.0.0.1','1413016972','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('75','1','admin','127.0.0.1','1413016999','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('76','1','admin','127.0.0.1','1413017018','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('77','1','admin','127.0.0.1','1413017029','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('78','1','admin','127.0.0.1','1413017179','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('79','1','admin','127.0.0.1','1413017200','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('80','1','admin','127.0.0.1','1413017331','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('81','1','admin','127.0.0.1','1413017371','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('82','1','admin','127.0.0.1','1413017560','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('83','1','admin','127.0.0.1','1413017625','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('84','1','admin','127.0.0.1','1413017694','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('85','1','admin','127.0.0.1','1413017752','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('86','1','admin','127.0.0.1','1413017814','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('87','1','admin','127.0.0.1','1413017846','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('88','1','admin','127.0.0.1','1413017922','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('89','1','admin','127.0.0.1','1413017993','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('90','1','admin','127.0.0.1','1413018024','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('91','1','admin','127.0.0.1','1413018118','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('92','1','admin','127.0.0.1','1413018162','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('93','1','admin','127.0.0.1','1413018195','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('94','1','admin','127.0.0.1','1413018273','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('95','1','admin','127.0.0.1','1413018335','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('96','1','admin','127.0.0.1','1413018372','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('97','1','admin','127.0.0.1','1413018417','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('98','1','admin','127.0.0.1','1413018461','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('99','1','admin','127.0.0.1','1413018470','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('100','1','admin','127.0.0.1','1413018582','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('101','1','admin','127.0.0.1','1413018603','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('102','1','admin','127.0.0.1','1413018637','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('103','1','admin','127.0.0.1','1413019121','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('104','1','admin','127.0.0.1','1413019154','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('105','1','admin','127.0.0.1','1413019179','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('106','1','admin','127.0.0.1','1413019217','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('107','1','admin','127.0.0.1','1413023442','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('108','1','admin','127.0.0.1','1413023521','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('109','1','admin','127.0.0.1','1413023537','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('110','1','admin','127.0.0.1','1413025005','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('111','1','admin','127.0.0.1','1413025124','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('112','1','admin','127.0.0.1','1413025161','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('113','1','admin','127.0.0.1','1413025206','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('114','1','admin','127.0.0.1','1413025257','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('115','1','admin','127.0.0.1','1413025319','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('116','1','admin','127.0.0.1','1413025357','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('117','1','admin','127.0.0.1','1413025400','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('118','1','admin','127.0.0.1','1413025451','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('119','1','admin','127.0.0.1','1413025511','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('120','1','admin','127.0.0.1','1413025547','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('121','1','admin','127.0.0.1','1413025590','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('122','1','admin','127.0.0.1','1413025651','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('123','1','admin','127.0.0.1','1413025684','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('124','1','admin','127.0.0.1','1413026694','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('125','1','admin','127.0.0.1','1413026724','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('126','1','admin','127.0.0.1','1413026752','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('127','1','admin','127.0.0.1','1413026781','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('128','1','admin','127.0.0.1','1413026832','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('129','1','admin','127.0.0.1','1413026903','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('130','1','admin','127.0.0.1','1413026955','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('131','1','admin','127.0.0.1','1413026982','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('132','1','admin','127.0.0.1','1413027000','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('133','1','admin','127.0.0.1','1413027033','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('134','1','admin','127.0.0.1','1413027063','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('135','1','admin','127.0.0.1','1413027094','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('136','1','admin','127.0.0.1','1413027123','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('137','1','admin','127.0.0.1','1413027155','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('138','1','admin','127.0.0.1','1413027191','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('139','1','admin','127.0.0.1','1413027222','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('140','1','admin','127.0.0.1','1413027240','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('141','1','admin','127.0.0.1','1413027255','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('142','1','admin','127.0.0.1','1413027490','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('143','1','admin','127.0.0.1','1413027501','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('144','1','admin','127.0.0.1','1413027737','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('145','1','admin','127.0.0.1','1413027761','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('146','1','admin','127.0.0.1','1413027785','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('147','1','admin','127.0.0.1','1413027793','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('148','1','admin','127.0.0.1','1413028222','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('149','1','admin','127.0.0.1','1413028265','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('150','1','admin','127.0.0.1','1413028283','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('151','1','admin','127.0.0.1','1413028339','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('152','1','admin','127.0.0.1','1413028357','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('153','1','admin','127.0.0.1','1431503238','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('154','1','admin','127.0.0.1','1431503250','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('155','1','admin','127.0.0.1','1431503259','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('156','1','admin','127.0.0.1','1438323657','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('157','1','admin','127.0.0.1','1438323668','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('158','1','admin','127.0.0.1','1438323678','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('159','1','admin','127.0.0.1','1438323699','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('160','1','admin','127.0.0.1','1438323719','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('161','1','admin','127.0.0.1','1438323729','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('162','1','admin','127.0.0.1','1438324038','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('163','1','admin','127.0.0.1','1438324335','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('164','1','admin','127.0.0.1','1438324662','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('165','1','admin','127.0.0.1','1438324758','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('166','1','admin','127.0.0.1','1438324872','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('167','1','admin','127.0.0.1','1438324931','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('168','1','admin','127.0.0.1','1438324950','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('169','1','admin','127.0.0.1','1438324974','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('170','1','admin','127.0.0.1','1438325135','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('171','1','admin','127.0.0.1','1438325785','添加语言包','成功');--
INSERT INTO `cmseasy_event` VALUES('172','1','admin','127.0.0.1','1438325802','添加语言包','成功');--
INSERT INTO `cmseasy_event` VALUES('173','1','admin','127.0.0.1','1438328730','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('174','1','admin','127.0.0.1','1438328758','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('175','1','admin','127.0.0.1','1438328770','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('176','1','admin','127.0.0.1','1438328879','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('177','1','admin','127.0.0.1','1438328922','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('178','1','admin','127.0.0.1','1438329007','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('179','1','admin','127.0.0.1','1438329035','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('180','1','admin','127.0.0.1','1438330153','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('181','1','admin','127.0.0.1','1438330164','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('182','1','admin','127.0.0.1','1438330202','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('183','1','admin','127.0.0.1','1438330222','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('184','1','admin','127.0.0.1','1438330355','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('185','1','admin','127.0.0.1','1438330409','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('186','1','admin','127.0.0.1','1438331048','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('187','1','admin','127.0.0.1','1438333038','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('188','1','admin','127.0.0.1','1438333053','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('189','1','admin','127.0.0.1','1438333066','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('190','1','admin','127.0.0.1','1438333075','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('191','1','admin','127.0.0.1','1439537570','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('192','1','admin','127.0.0.1','1439537731','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('193','1','admin','127.0.0.1','1439537751','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('194','1','admin','127.0.0.1','1439537778','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('195','1','admin','127.0.0.1','1439537785','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('196','1','admin','127.0.0.1','1439537853','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('197','1','admin','127.0.0.1','1439537873','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('198','1','admin','127.0.0.1','1439537883','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('199','1','admin','127.0.0.1','1439537917','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('200','1','admin','127.0.0.1','1439538445','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('201','1','admin','127.0.0.1','1439538458','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('202','1','admin','127.0.0.1','1439541345','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('203','1','admin','127.0.0.1','1439780892','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('204','1','admin','127.0.0.1','1439780892','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('205','1','admin','127.0.0.1','1439780899','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('206','1','admin','127.0.0.1','1439782853','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('207','1','admin','127.0.0.1','1439782863','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('208','1','admin','127.0.0.1','1439782869','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('209','1','admin','127.0.0.1','1439782877','删除栏目','成功 id=20');--
INSERT INTO `cmseasy_event` VALUES('210','1','admin','127.0.0.1','1439789196','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('211','1','admin','127.0.0.1','1439789359','删除templatetag','成功 id=23');--
INSERT INTO `cmseasy_event` VALUES('212','1','admin','127.0.0.1','1439789361','删除templatetag','成功 id=16');--
INSERT INTO `cmseasy_event` VALUES('213','1','admin','127.0.0.1','1439789367','删除templatetag','成功 id=25');--
INSERT INTO `cmseasy_event` VALUES('214','1','admin','127.0.0.1','1439789375','删除templatetag','成功 id=24');--
INSERT INTO `cmseasy_event` VALUES('215','1','admin','127.0.0.1','1439789380','删除templatetag','成功 id=26');--
INSERT INTO `cmseasy_event` VALUES('216','1','admin','127.0.0.1','1439789396','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('217','1','admin','127.0.0.1','1439789484','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('218','1','admin','127.0.0.1','1439789558','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('219','1','admin','127.0.0.1','1439789986','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('220','1','admin','127.0.0.1','1439790187','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('221','1','admin','127.0.0.1','1439790395','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('222','1','admin','127.0.0.1','1439790511','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('223','1','admin','127.0.0.1','1439790582','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('224','1','admin','127.0.0.1','1439793968','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('225','1','admin','127.0.0.1','1439793992','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('226','1','admin','127.0.0.1','1439875100','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('227','1','admin','127.0.0.1','1439875107','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('228','1','admin','127.0.0.1','1439875313','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('229','1','admin','127.0.0.1','1439875315','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('230','1','admin','127.0.0.1','1439876552','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('231','1','admin','127.0.0.1','1439877105','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('232','1','admin','127.0.0.1','1439877286','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('233','1','admin','127.0.0.1','1439877329','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('234','1','admin','127.0.0.1','1439877392','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('235','1','admin','127.0.0.1','1439877429','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('236','1','admin','127.0.0.1','1439877527','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('237','1','admin','127.0.0.1','1439877572','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('238','1','admin','127.0.0.1','1439877716','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('239','1','admin','127.0.0.1','1439877863','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('240','1','admin','127.0.0.1','1439880729','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('241','1','admin','127.0.0.1','1439880745','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('242','1','admin','127.0.0.1','1439880778','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('243','1','admin','127.0.0.1','1439880808','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('244','1','admin','127.0.0.1','1439880822','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('245','1','admin','127.0.0.1','1439880863','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('246','1','admin','127.0.0.1','1439880891','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('247','1','admin','127.0.0.1','1439880930','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('248','1','admin','127.0.0.1','1439881681','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('249','1','admin','127.0.0.1','1439881865','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('250','1','admin','127.0.0.1','1439882033','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('251','1','admin','127.0.0.1','1439882057','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('252','1','admin','127.0.0.1','1443074016','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('253','1','admin','127.0.0.1','1443074027','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('254','1','admin','127.0.0.1','1443074035','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('255','1','admin','127.0.0.1','1443074068','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('256','1','admin','127.0.0.1','1443074083','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('257','1','admin','127.0.0.1','1443074104','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('258','1','admin','127.0.0.1','1443074120','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('259','1','admin','127.0.0.1','1443074133','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('260','1','admin','127.0.0.1','1443074205','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('261','1','admin','127.0.0.1','1443074227','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('262','1','admin','127.0.0.1','1443074246','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('263','1','admin','127.0.0.1','1443074274','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('264','1','admin','127.0.0.1','1443074294','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('265','1','admin','127.0.0.1','1443074332','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('266','1','admin','127.0.0.1','1443074345','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('267','1','admin','127.0.0.1','1443074359','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('268','1','admin','127.0.0.1','1443074371','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('269','1','admin','127.0.0.1','1443074462','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('270','1','admin','127.0.0.1','1443074818','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('271','1','admin','127.0.0.1','1443074847','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('272','1','admin','127.0.0.1','1443074854','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('273','1','admin','127.0.0.1','1443074962','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('274','1','admin','127.0.0.1','1443074996','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('275','1','admin','127.0.0.1','1443075005','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('276','1','admin','127.0.0.1','1443075025','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('277','1','admin','127.0.0.1','1443075036','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('278','1','admin','127.0.0.1','1443075050','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('279','1','admin','127.0.0.1','1443075073','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('280','1','admin','127.0.0.1','1443075394','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('281','1','admin','127.0.0.1','1443075410','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('282','1','admin','127.0.0.1','1443075522','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('283','1','admin','127.0.0.1','1443075563','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('284','1','admin','127.0.0.1','1443075594','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('285','1','admin','127.0.0.1','1443075632','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('286','1','admin','127.0.0.1','1443075646','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('287','1','admin','127.0.0.1','1443075725','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('288','1','admin','127.0.0.1','1443075902','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('289','1','admin','127.0.0.1','1443075916','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('290','1','admin','127.0.0.1','1443075931','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('291','1','admin','127.0.0.1','1443075943','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('292','1','admin','127.0.0.1','1443075956','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('293','1','admin','127.0.0.1','1443075966','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('294','1','admin','127.0.0.1','1443076026','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('295','1','admin','127.0.0.1','1443076042','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('296','1','admin','127.0.0.1','1443076050','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('297','1','admin','127.0.0.1','1443076088','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('298','1','admin','127.0.0.1','1443076106','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('299','1','admin','127.0.0.1','1443076124','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('300','1','admin','127.0.0.1','1443076146','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('301','1','admin','127.0.0.1','1443076176','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('302','1','admin','127.0.0.1','1443076313','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('303','1','admin','127.0.0.1','1443076325','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('304','1','admin','127.0.0.1','1443076335','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('305','1','admin','127.0.0.1','1443076344','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('306','1','admin','127.0.0.1','1443076355','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('307','1','admin','127.0.0.1','1443076370','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('308','1','admin','127.0.0.1','1443076381','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('309','1','admin','127.0.0.1','1443076391','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('310','1','admin','127.0.0.1','1443076403','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('311','1','admin','127.0.0.1','1443076417','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('312','1','admin','127.0.0.1','1443076428','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('313','1','admin','127.0.0.1','1443076439','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('314','1','admin','127.0.0.1','1443076451','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('315','1','admin','127.0.0.1','1443076462','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('316','1','admin','127.0.0.1','1443076486','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('317','1','admin','127.0.0.1','1443076500','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('318','1','admin','127.0.0.1','1443076512','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('319','1','admin','127.0.0.1','1443076528','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('320','1','admin','127.0.0.1','1443076596','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('321','1','admin','127.0.0.1','1443076609','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('322','1','admin','127.0.0.1','1443076621','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('323','1','admin','127.0.0.1','1443076635','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('324','1','admin','127.0.0.1','1443076648','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('325','1','admin','127.0.0.1','1443076673','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('326','1','admin','127.0.0.1','1443076681','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('327','1','admin','127.0.0.1','1443076700','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('328','1','admin','127.0.0.1','1443076717','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('329','1','admin','127.0.0.1','1443076812','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('330','1','admin','127.0.0.1','1443076826','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('331','1','admin','127.0.0.1','1443076848','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('332','1','admin','127.0.0.1','1443076873','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('333','1','admin','127.0.0.1','1443076893','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('334','1','admin','127.0.0.1','1443076909','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('335','1','admin','127.0.0.1','1443076926','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('336','1','admin','127.0.0.1','1443076943','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('337','1','admin','127.0.0.1','1443076998','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('338','1','admin','127.0.0.1','1443077023','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('339','1','admin','127.0.0.1','1443077039','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('340','1','admin','127.0.0.1','1443077052','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('341','1','admin','127.0.0.1','1443077071','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('342','1','admin','127.0.0.1','1443077088','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('343','1','admin','127.0.0.1','1443077118','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('344','1','admin','127.0.0.1','1443077400','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('345','1','admin','127.0.0.1','1443077429','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('346','1','admin','127.0.0.1','1443077466','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('347','1','admin','127.0.0.1','1443077560','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('348','1','admin','127.0.0.1','1443077799','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('349','1','admin','127.0.0.1','1443077848','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('350','1','admin','127.0.0.1','1443077973','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('351','1','admin','127.0.0.1','1443077999','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('352','1','admin','127.0.0.1','1443078008','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('353','1','admin','127.0.0.1','1443078025','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('354','1','admin','127.0.0.1','1443078046','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('355','1','admin','127.0.0.1','1443078063','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('356','1','admin','127.0.0.1','1443078080','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('357','1','admin','127.0.0.1','1443078193','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('358','1','admin','127.0.0.1','1443078210','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('359','1','admin','127.0.0.1','1443078225','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('360','1','admin','127.0.0.1','1443078246','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('361','1','admin','127.0.0.1','1443078262','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('362','1','admin','127.0.0.1','1443078278','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('363','1','admin','127.0.0.1','1443078295','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('364','1','admin','127.0.0.1','1443078311','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('365','1','admin','127.0.0.1','1443078439','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('366','1','admin','127.0.0.1','1443078490','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('367','1','admin','127.0.0.1','1443078538','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('368','1','admin','127.0.0.1','1443078588','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('369','1','admin','127.0.0.1','1443078600','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('370','1','admin','127.0.0.1','1443078616','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('371','1','admin','127.0.0.1','1443078633','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('372','1','admin','127.0.0.1','1443078648','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('373','1','admin','127.0.0.1','1443078665','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('374','1','admin','127.0.0.1','1443078679','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('375','1','admin','127.0.0.1','1443078689','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('376','1','admin','127.0.0.1','1443078698','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('377','1','admin','127.0.0.1','1443078837','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('378','1','admin','127.0.0.1','1443078838','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('379','1','admin','127.0.0.1','1443078846','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('380','1','admin','127.0.0.1','1443078855','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('381','1','admin','127.0.0.1','1443079055','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('382','1','admin','127.0.0.1','1443079102','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('383','1','admin','127.0.0.1','1443079190','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('384','1','admin','127.0.0.1','1443079219','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('385','1','admin','127.0.0.1','1443079229','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('386','1','admin','127.0.0.1','1443079273','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('387','1','admin','127.0.0.1','1443079309','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('388','1','admin','127.0.0.1','1443079466','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('389','1','admin','127.0.0.1','1443079486','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('390','1','admin','127.0.0.1','1443079588','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('391','1','admin','127.0.0.1','1443079650','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('392','1','admin','127.0.0.1','1443079855','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('393','1','admin','127.0.0.1','1443079875','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('394','1','admin','127.0.0.1','1443079895','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('395','1','admin','127.0.0.1','1443079903','删除内容','成功 id=102');--
INSERT INTO `cmseasy_event` VALUES('396','1','admin','127.0.0.1','1443079907','删除内容','成功 id=102');--
INSERT INTO `cmseasy_event` VALUES('397','1','admin','127.0.0.1','1443079917','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('398','1','admin','127.0.0.1','1443079961','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('399','1','admin','127.0.0.1','1443080056','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('400','1','admin','127.0.0.1','1443080074','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('401','1','admin','127.0.0.1','1443080084','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('402','1','admin','127.0.0.1','1443080095','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('403','1','admin','127.0.0.1','1443080114','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('404','1','admin','127.0.0.1','1443080138','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('405','1','admin','127.0.0.1','1443080156','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('406','1','admin','127.0.0.1','1443080173','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('407','1','admin','127.0.0.1','1443080190','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('408','1','admin','127.0.0.1','1443080207','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('409','1','admin','127.0.0.1','1443080225','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('410','1','admin','127.0.0.1','1443080241','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('411','1','admin','127.0.0.1','1443080258','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('412','1','admin','127.0.0.1','1443080782','添加公告','成功');--
INSERT INTO `cmseasy_event` VALUES('413','1','admin','127.0.0.1','1443080872','添加公告','成功');--
INSERT INTO `cmseasy_event` VALUES('414','1','admin','127.0.0.1','1443081261','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('415','1','admin','127.0.0.1','1443081322','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('416','1','admin','127.0.0.1','1443081408','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('417','1','admin','127.0.0.1','1443081475','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('418','1','admin','127.0.0.1','1443081491','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('419','1','admin','127.0.0.1','1443081507','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('420','1','admin','127.0.0.1','1443081535','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('421','1','admin','127.0.0.1','1443081549','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('422','1','admin','127.0.0.1','1443081564','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('423','1','admin','127.0.0.1','1443081576','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('424','1','admin','127.0.0.1','1443081594','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('425','1','admin','127.0.0.1','1443081612','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('426','1','admin','127.0.0.1','1443081628','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('427','1','admin','127.0.0.1','1443081643','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('428','1','admin','127.0.0.1','1443081664','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('429','1','admin','127.0.0.1','1443081680','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('430','1','admin','127.0.0.1','1443081697','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('431','1','admin','127.0.0.1','1443081764','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('432','1','admin','127.0.0.1','1443081847','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('433','1','admin','127.0.0.1','1443081869','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('434','1','admin','127.0.0.1','1443081883','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('435','1','admin','127.0.0.1','1443081892','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('436','1','admin','127.0.0.1','1443081902','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('437','1','admin','127.0.0.1','1443081947','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('438','1','admin','127.0.0.1','1443081952','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('439','1','admin','127.0.0.1','1443081957','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('440','1','admin','127.0.0.1','1443082009','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('441','1','admin','127.0.0.1','1443082096','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('442','1','admin','127.0.0.1','1443082285','修改专题','成功');--
INSERT INTO `cmseasy_event` VALUES('443','1','admin','127.0.0.1','1443082309','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('444','1','admin','127.0.0.1','1443082324','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('445','1','admin','127.0.0.1','1443082339','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('446','1','admin','127.0.0.1','1443157941','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('447','1','admin','127.0.0.1','1443157941','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('448','1','admin','127.0.0.1','1443158892','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('449','1','admin','127.0.0.1','1443158964','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('450','1','admin','127.0.0.1','1443159160','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('451','1','admin','127.0.0.1','1443159381','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('452','1','admin','127.0.0.1','1443159402','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('453','1','admin','127.0.0.1','1443159432','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('454','1','admin','127.0.0.1','1443159443','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('455','1','admin','127.0.0.1','1443159454','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('456','1','admin','127.0.0.1','1443159467','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('457','1','admin','127.0.0.1','1443159477','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('458','1','admin','127.0.0.1','1443159495','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('459','1','admin','127.0.0.1','1443159507','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('460','1','admin','127.0.0.1','1443159518','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('461','1','admin','127.0.0.1','1443159529','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('462','1','admin','127.0.0.1','1443159545','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('463','1','admin','127.0.0.1','1443159556','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('464','1','admin','127.0.0.1','1443159573','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('465','1','admin','127.0.0.1','1443159585','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('466','1','admin','127.0.0.1','1443159596','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('467','1','admin','127.0.0.1','1443159606','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('468','1','admin','127.0.0.1','1443159616','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('469','1','admin','127.0.0.1','1443159629','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('470','1','admin','127.0.0.1','1443159643','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('471','1','admin','127.0.0.1','1443159654','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('472','1','admin','127.0.0.1','1443159667','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('473','1','admin','127.0.0.1','1443159680','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('474','1','admin','127.0.0.1','1443161920','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('475','1','admin','127.0.0.1','1443161938','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('476','1','admin','127.0.0.1','1443274549','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('477','1','admin','127.0.0.1','1443274549','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('478','1','admin','127.0.0.1','1443274558','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('479','1','admin','127.0.0.1','1443277512','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('480','1','admin','127.0.0.1','1443278007','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('481','1','admin','127.0.0.1','1443278016','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('482','1','admin','127.0.0.1','1443278089','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('483','1','admin','127.0.0.1','1443278158','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('484','1','admin','127.0.0.1','1443278162','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('485','1','admin','127.0.0.1','1443278947','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('486','1','admin','127.0.0.1','1443281228','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('487','1','admin','127.0.0.1','1443281252','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('488','1','admin','127.0.0.1','1443281260','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('489','1','admin','127.0.0.1','1443281267','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('490','1','admin','127.0.0.1','1443281457','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('491','1','admin','127.0.0.1','1443281586','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('492','1','admin','127.0.0.1','1443281672','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('493','1','admin','127.0.0.1','1443281980','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('494','1','admin','127.0.0.1','1443282157','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('495','1','admin','127.0.0.1','1443282211','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('496','1','admin','127.0.0.1','1443282499','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('497','1','admin','127.0.0.1','1443282622','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('498','1','admin','127.0.0.1','1443282646','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('499','1','admin','127.0.0.1','1443282858','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('500','1','admin','127.0.0.1','1443283204','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('501','1','admin','127.0.0.1','1443283293','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('502','1','admin','127.0.0.1','1443283375','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('503','1','admin','127.0.0.1','1443283410','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('504','1','admin','127.0.0.1','1443283437','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('505','1','admin','127.0.0.1','1443284203','添加语言包','成功');--
INSERT INTO `cmseasy_event` VALUES('506','1','admin','127.0.0.1','1443284216','添加语言包','成功');--
INSERT INTO `cmseasy_event` VALUES('507','1','admin','127.0.0.1','1443284244','添加语言包','成功');--
INSERT INTO `cmseasy_event` VALUES('508','1','admin','127.0.0.1','1443284256','添加语言包','成功');--
INSERT INTO `cmseasy_event` VALUES('509','1','admin','127.0.0.1','1443284267','修改语言包','成功');--
INSERT INTO `cmseasy_event` VALUES('510','1','admin','127.0.0.1','1443284277','添加语言包','成功');--
INSERT INTO `cmseasy_event` VALUES('511','1','admin','127.0.0.1','1443284288','添加语言包','成功');--
INSERT INTO `cmseasy_event` VALUES('512','1','admin','127.0.0.1','1443286382','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('513','1','admin','127.0.0.1','1443286415','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('514','1','admin','127.0.0.1','1443286436','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('515','1','admin','127.0.0.1','1443286832','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('516','1','admin','127.0.0.1','1443288077','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('517','1','admin','127.0.0.1','1443288093','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('518','1','admin','127.0.0.1','1443288193','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('519','1','admin','127.0.0.1','1443288223','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('520','1','admin','127.0.0.1','1443288235','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('521','1','admin','127.0.0.1','1443288249','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('522','1','admin','127.0.0.1','1443288389','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('523','1','admin','127.0.0.1','1443288402','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('524','1','admin','127.0.0.1','1443288418','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('525','1','admin','127.0.0.1','1443288433','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('526','1','admin','127.0.0.1','1443288452','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('527','1','admin','127.0.0.1','1443288465','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('528','1','admin','127.0.0.1','1443288478','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('529','1','admin','127.0.0.1','1443288491','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('530','1','admin','127.0.0.1','1443288504','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('531','1','admin','127.0.0.1','1443288515','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('532','1','admin','127.0.0.1','1443288530','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('533','1','admin','127.0.0.1','1443288546','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('534','1','admin','127.0.0.1','1443288558','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('535','1','admin','127.0.0.1','1443288572','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('536','1','admin','127.0.0.1','1443288585','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('537','1','admin','127.0.0.1','1443288596','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('538','1','admin','127.0.0.1','1443288608','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('539','1','admin','127.0.0.1','1443288618','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('540','1','admin','127.0.0.1','1443288632','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('541','1','admin','127.0.0.1','1443289619','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('542','1','admin','127.0.0.1','1443290087','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('543','1','admin','127.0.0.1','1444026666','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('544','1','admin','127.0.0.1','1444026697','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('545','1','admin','127.0.0.1','1444026739','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('546','1','admin','127.0.0.1','1444026992','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('547','1','admin','127.0.0.1','1444027036','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('548','1','admin','127.0.0.1','1444027203','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('549','1','admin','127.0.0.1','1444027256','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('550','1','admin','127.0.0.1','1444027334','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('551','1','admin','127.0.0.1','1444027345','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('552','1','admin','127.0.0.1','1444027355','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('553','1','admin','127.0.0.1','1444027400','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('554','1','admin','127.0.0.1','1444027602','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('555','1','admin','127.0.0.1','1444027621','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('556','1','admin','127.0.0.1','1444027651','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('557','1','admin','127.0.0.1','1444027660','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('558','1','admin','127.0.0.1','1444027677','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('559','1','admin','127.0.0.1','1444027727','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('560','1','admin','127.0.0.1','1444027798','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('561','1','admin','127.0.0.1','1444028060','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('562','1','admin','127.0.0.1','1444028838','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('563','1','admin','127.0.0.1','1444034277','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('564','1','admin','127.0.0.1','1444107927','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('565','1','admin','127.0.0.1','1444107941','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('566','1','admin','127.0.0.1','1444108447','添加语言包','成功');--
INSERT INTO `cmseasy_event` VALUES('567','1','admin','127.0.0.1','1444108499','修改语言包','成功');--
INSERT INTO `cmseasy_event` VALUES('568','1','admin','127.0.0.1','1444108517','添加语言包','成功');--
INSERT INTO `cmseasy_event` VALUES('569','1','admin','127.0.0.1','1444111353','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('570','1','admin','127.0.0.1','1444111364','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('571','1','admin','127.0.0.1','1444111377','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('572','1','admin','127.0.0.1','1444111610','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('573','1','admin','127.0.0.1','1444111628','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('574','1','admin','127.0.0.1','1444111650','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('575','1','admin','127.0.0.1','1444111665','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('576','1','admin','127.0.0.1','1444111926','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('577','1','admin','127.0.0.1','1444112218','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('578','1','admin','127.0.0.1','1444112422','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('579','1','admin','127.0.0.1','1444112503','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('580','1','admin','127.0.0.1','1444112619','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('581','1','admin','127.0.0.1','1444112698','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('582','1','admin','127.0.0.1','1444112723','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('583','1','admin','127.0.0.1','1444112885','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('584','1','admin','127.0.0.1','1444112921','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('585','1','admin','127.0.0.1','1444113073','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('586','1','admin','127.0.0.1','1444113212','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('587','1','admin','127.0.0.1','1444113565','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('588','1','admin','127.0.0.1','1444113623','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('589','1','admin','127.0.0.1','1444113655','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('590','1','admin','127.0.0.1','1444113663','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('591','1','admin','127.0.0.1','1444115392','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('592','1','admin','127.0.0.1','1444115398','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('593','1','admin','127.0.0.1','1444115446','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('594','1','admin','127.0.0.1','1444118781','删除栏目','成功 id=21');--
INSERT INTO `cmseasy_event` VALUES('595','1','admin','127.0.0.1','1444118794','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('596','1','admin','127.0.0.1','1444118812','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('597','1','admin','127.0.0.1','1444118841','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('598','1','admin','127.0.0.1','1444118998','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('599','1','admin','127.0.0.1','1444119058','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('600','1','admin','127.0.0.1','1444119069','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('601','1','admin','127.0.0.1','1444119085','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('602','1','admin','127.0.0.1','1444119097','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('603','1','admin','127.0.0.1','1444119107','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('604','1','admin','127.0.0.1','1444119118','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('605','1','admin','127.0.0.1','1444119128','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('606','1','admin','127.0.0.1','1444119139','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('607','1','admin','127.0.0.1','1444119154','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('608','1','admin','127.0.0.1','1444119167','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('609','1','admin','127.0.0.1','1444119184','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('610','1','admin','127.0.0.1','1444119196','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('611','1','admin','127.0.0.1','1444119208','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('612','1','admin','127.0.0.1','1444119224','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('613','1','admin','127.0.0.1','1444119233','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('614','1','admin','127.0.0.1','1444119245','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('615','1','admin','127.0.0.1','1444119262','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('616','1','admin','127.0.0.1','1444119272','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('617','1','admin','127.0.0.1','1444119285','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('618','1','admin','127.0.0.1','1444119299','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('619','1','admin','127.0.0.1','1444119313','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('620','1','admin','127.0.0.1','1444119326','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('621','1','admin','127.0.0.1','1444119338','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('622','1','admin','127.0.0.1','1444119350','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('623','1','admin','127.0.0.1','1444119890','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('624','1','admin','127.0.0.1','1444119904','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('625','1','admin','127.0.0.1','1444120718','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('626','1','admin','127.0.0.1','1444120756','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('627','1','admin','127.0.0.1','1444121172','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('628','1','admin','127.0.0.1','1444121196','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('629','1','admin','127.0.0.1','1444121209','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('630','1','admin','127.0.0.1','1444121220','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('631','1','admin','127.0.0.1','1444272946','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('632','1','admin','127.0.0.1','1444272955','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('633','1','admin','127.0.0.1','1444276939','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('634','1','admin','127.0.0.1','1444276947','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('635','1','admin','127.0.0.1','1444281720','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('636','1','admin','127.0.0.1','1444281737','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('637','1','admin','127.0.0.1','1444282697','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('638','1','admin','127.0.0.1','1444283236','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('639','1','admin','127.0.0.1','1444283890','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('640','1','admin','127.0.0.1','1444284026','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('641','1','admin','127.0.0.1','1444284517','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('642','1','admin','127.0.0.1','1444284569','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('643','1','admin','127.0.0.1','1444284600','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('644','1','admin','127.0.0.1','1444284618','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('645','1','admin','127.0.0.1','1444284682','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('646','1','admin','127.0.0.1','1444284766','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('647','1','admin','127.0.0.1','1444284872','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('648','1','admin','127.0.0.1','1444284880','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('649','1','admin','127.0.0.1','1444284980','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('650','1','admin','127.0.0.1','1444285150','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('651','1','admin','127.0.0.1','1444288164','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('652','1','admin','127.0.0.1','1444288193','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('653','1','admin','127.0.0.1','1444290914','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('654','1','admin','127.0.0.1','1444290932','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('655','1','admin','127.0.0.1','1444290940','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('656','1','admin','127.0.0.1','1444290952','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('657','1','admin','127.0.0.1','1444290963','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('658','1','admin','127.0.0.1','1444290974','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('659','1','admin','127.0.0.1','1444290985','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('660','1','admin','127.0.0.1','1444290998','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('661','1','admin','127.0.0.1','1444291135','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('662','1','admin','127.0.0.1','1444291145','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('663','1','admin','127.0.0.1','1444291157','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('664','1','admin','127.0.0.1','1444291170','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('665','1','admin','127.0.0.1','1444291182','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('666','1','admin','127.0.0.1','1444291193','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('667','1','admin','127.0.0.1','1444291206','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('668','1','admin','127.0.0.1','1444291220','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('669','1','admin','127.0.0.1','1444291241','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('670','1','admin','127.0.0.1','1444291250','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('671','1','admin','127.0.0.1','1444291260','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('672','1','admin','127.0.0.1','1444291273','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('673','1','admin','127.0.0.1','1444291285','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('674','1','admin','127.0.0.1','1444291294','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('675','1','admin','127.0.0.1','1444291306','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('676','1','admin','127.0.0.1','1444291316','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('677','1','admin','127.0.0.1','1444294184','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('678','1','admin','127.0.0.1','1444294233','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('679','1','admin','127.0.0.1','1444294469','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('680','1','admin','127.0.0.1','1444294945','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('681','1','admin','127.0.0.1','1444295021','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('682','1','admin','127.0.0.1','1444295033','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('683','1','admin','127.0.0.1','1444295046','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('684','1','admin','127.0.0.1','1444295060','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('685','1','admin','127.0.0.1','1444295072','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('686','1','admin','127.0.0.1','1444295084','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('687','1','admin','127.0.0.1','1444919693','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('688','1','admin','127.0.0.1','1444919713','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('689','1','admin','127.0.0.1','1444920170','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('690','1','admin','127.0.0.1','1444920205','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('691','1','admin','127.0.0.1','1444920231','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('692','1','admin','127.0.0.1','1444920238','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('693','1','admin','127.0.0.1','1444920244','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('694','1','admin','127.0.0.1','1444920250','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('695','1','admin','127.0.0.1','1444920256','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('696','1','admin','127.0.0.1','1444920261','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('697','1','admin','127.0.0.1','1444920268','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('698','1','admin','127.0.0.1','1444920274','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('699','1','admin','127.0.0.1','1444920281','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('700','1','admin','127.0.0.1','1444920288','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('701','1','admin','127.0.0.1','1444920296','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('702','1','admin','127.0.0.1','1444920301','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('703','1','admin','127.0.0.1','1445060314','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('704','1','admin','127.0.0.1','1445060330','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('705','1','admin','127.0.0.1','1445060342','删除templatetag','成功 id=5,8,9,19,22');--
INSERT INTO `cmseasy_event` VALUES('706','1','admin','127.0.0.1','1445060362','删除templatetag','成功 id=1,2,3,4,6,7,10,11,12,13,18,20,21');--
INSERT INTO `cmseasy_event` VALUES('707','1','admin','127.0.0.1','1445061207','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('708','1','admin','127.0.0.1','1445061245','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('709','1','admin','127.0.0.1','1445061255','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('710','1','admin','127.0.0.1','1445061284','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('711','1','admin','127.0.0.1','1445061294','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('712','1','admin','127.0.0.1','1445061850','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('713','1','admin','127.0.0.1','1445061956','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('714','1','admin','127.0.0.1','1445062146','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('715','1','admin','127.0.0.1','1445062186','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('716','1','admin','127.0.0.1','1445062263','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('717','1','admin','127.0.0.1','1445062280','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('718','1','admin','127.0.0.1','1445062349','添加内容','成功');--
INSERT INTO `cmseasy_event` VALUES('719','1','admin','127.0.0.1','1445062400','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('720','1','admin','127.0.0.1','1445063131','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('721','1','admin','127.0.0.1','1445063176','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('722','1','admin','127.0.0.1','1445063537','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('723','1','admin','127.0.0.1','1445063904','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('724','1','admin','127.0.0.1','1445063910','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('725','1','admin','127.0.0.1','1445063921','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('726','1','admin','127.0.0.1','1445063935','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('727','1','admin','127.0.0.1','1445063942','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('728','1','admin','127.0.0.1','1445063948','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('729','1','admin','127.0.0.1','1445063962','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('730','1','admin','127.0.0.1','1445063968','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('731','1','admin','127.0.0.1','1445063974','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('732','1','admin','127.0.0.1','1445063981','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('733','1','admin','127.0.0.1','1445063987','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('734','1','admin','127.0.0.1','1445063993','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('735','1','admin','127.0.0.1','1445064013','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('736','1','admin','127.0.0.1','1445064474','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('737','1','admin','127.0.0.1','1445064498','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('738','1','admin','127.0.0.1','1445064715','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('739','1','admin','127.0.0.1','1445064922','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('740','1','admin','127.0.0.1','1445064997','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('741','1','admin','127.0.0.1','1445065513','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('742','1','admin','127.0.0.1','1445065851','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('743','1','admin','127.0.0.1','1445065867','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('744','1','admin','127.0.0.1','1445066068','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('745','1','admin','127.0.0.1','1445066240','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('746','1','admin','127.0.0.1','1445066285','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('747','1','admin','127.0.0.1','1445067866','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('748','1','admin','127.0.0.1','1445067886','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('749','1','admin','127.0.0.1','1445067897','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('750','1','admin','127.0.0.1','1445068314','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('751','1','admin','127.0.0.1','1445069066','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('752','1','admin','127.0.0.1','1445069092','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('753','1','admin','127.0.0.1','1445074664','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('754','1','admin','127.0.0.1','1445090432','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('755','1','admin','127.0.0.1','1445238389','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('756','1','admin','127.0.0.1','1445238397','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('757','1','admin','127.0.0.1','1445239342','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('758','1','admin','127.0.0.1','1445239353','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('759','1','admin','127.0.0.1','1445318693','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('760','1','admin','127.0.0.1','1445320258','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('761','1','admin','127.0.0.1','1445320279','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('762','1','admin','127.0.0.1','1445320373','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('763','1','admin','127.0.0.1','1445320383','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('764','1','admin','127.0.0.1','1445320405','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('765','1','admin','127.0.0.1','1445320772','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('766','1','admin','127.0.0.1','1445320782','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('767','1','admin','127.0.0.1','1445320797','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('768','1','admin','127.0.0.1','1445320811','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('769','1','admin','127.0.0.1','1445320834','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('770','1','admin','127.0.0.1','1445321045','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('771','1','admin','127.0.0.1','1445321051','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('772','1','admin','127.0.0.1','1445321057','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('773','1','admin','127.0.0.1','1445321063','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('774','1','admin','127.0.0.1','1445321075','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('775','1','admin','127.0.0.1','1445321112','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('776','1','admin','127.0.0.1','1445321120','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('777','1','admin','127.0.0.1','1445321130','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('778','1','admin','127.0.0.1','1445321345','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('779','1','admin','127.0.0.1','1445321511','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('780','1','admin','127.0.0.1','1445322080','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('781','1','admin','127.0.0.1','1445322177','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('782','1','admin','127.0.0.1','1445322585','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('783','1','admin','127.0.0.1','1445322598','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('784','1','admin','127.0.0.1','1445322610','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('785','1','admin','127.0.0.1','1445326586','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('786','1','admin','127.0.0.1','1445328284','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('787','1','admin','127.0.0.1','1445328317','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('788','1','admin','127.0.0.1','1445328328','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('789','1','admin','127.0.0.1','1445328337','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('790','1','admin','127.0.0.1','1445328348','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('791','1','admin','127.0.0.1','1445328359','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('792','1','admin','127.0.0.1','1445328377','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('793','1','admin','127.0.0.1','1445328386','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('794','1','admin','127.0.0.1','1445328405','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('795','1','admin','127.0.0.1','1445328420','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('796','1','admin','127.0.0.1','1445328440','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('797','1','admin','127.0.0.1','1445328454','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('798','1','admin','127.0.0.1','1445328465','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('799','1','admin','127.0.0.1','1445328480','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('800','1','admin','127.0.0.1','1445328490','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('801','1','admin','127.0.0.1','1445328504','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('802','1','admin','127.0.0.1','1445328512','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('803','1','admin','127.0.0.1','1445328520','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('804','1','admin','127.0.0.1','1445328527','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('805','1','admin','127.0.0.1','1445328537','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('806','1','admin','127.0.0.1','1445328570','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('807','1','admin','127.0.0.1','1445328956','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('808','1','admin','127.0.0.1','1445328963','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('809','1','admin','127.0.0.1','1445328972','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('810','1','admin','127.0.0.1','1445328999','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('811','1','admin','127.0.0.1','1445329013','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('812','1','admin','127.0.0.1','1445329030','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('813','1','admin','127.0.0.1','1445329309','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('814','1','admin','127.0.0.1','1445329816','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('815','1','admin','127.0.0.1','1445330116','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('816','1','admin','127.0.0.1','1445330149','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('817','1','admin','127.0.0.1','1445330265','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('818','1','admin','127.0.0.1','1445330313','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('819','1','admin','127.0.0.1','1445405869','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('820','1','admin','127.0.0.1','1445405893','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('821','1','admin','127.0.0.1','1445410099','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('822','1','admin','127.0.0.1','1445411653','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('823','1','admin','127.0.0.1','1445412142','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('824','1','admin','127.0.0.1','1445412232','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('825','1','admin','127.0.0.1','1445412578','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('826','1','admin','127.0.0.1','1445414152','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('827','1','admin','127.0.0.1','1445414165','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('828','1','admin','127.0.0.1','1445414177','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('829','1','admin','127.0.0.1','1445414275','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('830','1','admin','127.0.0.1','1445414295','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('831','1','admin','127.0.0.1','1445414304','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('832','1','admin','127.0.0.1','1445414309','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('833','1','admin','127.0.0.1','1445414315','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('834','1','admin','127.0.0.1','1445414322','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('835','1','admin','127.0.0.1','1445414330','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('836','1','admin','127.0.0.1','1445414337','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('837','1','admin','127.0.0.1','1445414344','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('838','1','admin','127.0.0.1','1445414350','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('839','1','admin','127.0.0.1','1445414356','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('840','1','admin','127.0.0.1','1445414362','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('841','1','admin','127.0.0.1','1445414368','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('842','1','admin','127.0.0.1','1445414432','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('843','1','admin','127.0.0.1','1445414555','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('844','1','admin','127.0.0.1','1445414603','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('845','1','admin','127.0.0.1','1445414672','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('846','1','admin','127.0.0.1','1445414692','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('847','1','admin','127.0.0.1','1445414839','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('848','1','admin','127.0.0.1','1445415284','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('849','1','admin','127.0.0.1','1445415364','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('850','1','admin','127.0.0.1','1445415954','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('851','1','admin','127.0.0.1','1445416098','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('852','1','admin','127.0.0.1','1445416119','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('853','1','admin','127.0.0.1','1445416435','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('854','1','admin','127.0.0.1','1445423174','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('855','1','admin','127.0.0.1','1445423185','删除栏目','成功 id=22');--
INSERT INTO `cmseasy_event` VALUES('856','1','admin','127.0.0.1','1445423205','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('857','1','admin','127.0.0.1','1445671764','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('858','1','admin','127.0.0.1','1445671892','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('859','1','admin','127.0.0.1','1445671975','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('860','1','admin','127.0.0.1','1445672016','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('861','1','admin','127.0.0.1','1445672025','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('862','1','admin','127.0.0.1','1445672034','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('863','1','admin','127.0.0.1','1445672048','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('864','1','admin','127.0.0.1','1445672056','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('865','1','admin','127.0.0.1','1445672720','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('866','1','admin','127.0.0.1','1445672773','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('867','1','admin','127.0.0.1','1445673148','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('868','1','admin','127.0.0.1','1445673350','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('869','1','admin','127.0.0.1','1445673450','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('870','1','admin','127.0.0.1','1445673460','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('871','1','admin','127.0.0.1','1445673475','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('872','1','admin','127.0.0.1','1445673502','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('873','1','admin','127.0.0.1','1445673532','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('874','1','admin','127.0.0.1','1445676595','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('875','1','admin','127.0.0.1','1445676606','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('876','1','admin','127.0.0.1','1445676614','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('877','1','admin','127.0.0.1','1445676619','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('878','1','admin','127.0.0.1','1445676650','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('879','1','admin','127.0.0.1','1445676670','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('880','1','admin','127.0.0.1','1445676981','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('881','1','admin','127.0.0.1','1445677041','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('882','1','admin','127.0.0.1','1445677081','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('883','1','admin','127.0.0.1','1445677096','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('884','1','admin','127.0.0.1','1445677106','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('885','1','admin','127.0.0.1','1445677115','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('886','1','admin','127.0.0.1','1445677124','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('887','1','admin','127.0.0.1','1445677134','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('888','1','admin','127.0.0.1','1445677145','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('889','1','admin','127.0.0.1','1445677180','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('890','1','admin','127.0.0.1','1445677191','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('891','1','admin','127.0.0.1','1445677200','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('892','1','admin','127.0.0.1','1445677209','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('893','1','admin','127.0.0.1','1445677219','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('894','1','admin','127.0.0.1','1445677236','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('895','1','admin','127.0.0.1','1445677245','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('896','1','admin','127.0.0.1','1445677265','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('897','1','admin','127.0.0.1','1445677273','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('898','1','admin','127.0.0.1','1445677282','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('899','1','admin','127.0.0.1','1445677291','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('900','1','admin','127.0.0.1','1445677300','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('901','1','admin','127.0.0.1','1445677312','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('902','1','admin','127.0.0.1','1445677326','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('903','1','admin','127.0.0.1','1445677345','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('904','1','admin','127.0.0.1','1445677357','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('905','1','admin','127.0.0.1','1445677366','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('906','1','admin','127.0.0.1','1446279762','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('907','1','admin','127.0.0.1','1446279772','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('908','1','admin','127.0.0.1','1446280968','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('909','1','admin','127.0.0.1','1446282360','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('910','1','admin','127.0.0.1','1446282446','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('911','1','admin','127.0.0.1','1446282467','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('912','1','admin','127.0.0.1','1446282481','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('913','1','admin','127.0.0.1','1446282545','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('914','1','admin','127.0.0.1','1446282558','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('915','1','admin','127.0.0.1','1446282572','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('916','1','admin','127.0.0.1','1446282591','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('917','1','admin','127.0.0.1','1446282605','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('918','1','admin','127.0.0.1','1446282617','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('919','1','admin','127.0.0.1','1446282636','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('920','1','admin','127.0.0.1','1446282649','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('921','1','admin','127.0.0.1','1446282662','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('922','1','admin','127.0.0.1','1446282680','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('923','1','admin','127.0.0.1','1446282691','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('924','1','admin','127.0.0.1','1446282707','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('925','1','admin','127.0.0.1','1446282723','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('926','1','admin','127.0.0.1','1446282745','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('927','1','admin','127.0.0.1','1446282756','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('928','1','admin','127.0.0.1','1446282767','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('929','1','admin','127.0.0.1','1446282778','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('930','1','admin','127.0.0.1','1446282795','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('931','1','admin','127.0.0.1','1446282806','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('932','1','admin','127.0.0.1','1446282821','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('933','1','admin','127.0.0.1','1446282836','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('934','1','admin','127.0.0.1','1446282850','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('935','1','admin','127.0.0.1','1446282865','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('936','1','admin','127.0.0.1','1446282877','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('937','1','admin','127.0.0.1','1446282890','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('938','1','admin','127.0.0.1','1446529385','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('939','1','admin','127.0.0.1','1446530968','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('940','1','admin','127.0.0.1','1446531370','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('941','1','admin','127.0.0.1','1446532564','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('942','1','admin','127.0.0.1','1446532887','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('943','1','admin','127.0.0.1','1446533114','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('944','1','admin','127.0.0.1','1446533255','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('945','1','admin','127.0.0.1','1446533354','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('946','1','admin','127.0.0.1','1446533444','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('947','1','admin','127.0.0.1','1446533515','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('948','1','admin','127.0.0.1','1446533744','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('949','1','admin','127.0.0.1','1446533758','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('950','1','admin','127.0.0.1','1446533767','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('951','1','admin','127.0.0.1','1446533777','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('952','1','admin','127.0.0.1','1446533786','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('953','1','admin','127.0.0.1','1446533796','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('954','1','admin','127.0.0.1','1446533806','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('955','1','admin','127.0.0.1','1446533819','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('956','1','admin','127.0.0.1','1446533828','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('957','1','admin','127.0.0.1','1446533837','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('958','1','admin','127.0.0.1','1446533846','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('959','1','admin','127.0.0.1','1446533857','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('960','1','admin','127.0.0.1','1446533964','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('961','1','admin','127.0.0.1','1446534024','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('962','1','admin','127.0.0.1','1446534035','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('963','1','admin','127.0.0.1','1446534046','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('964','1','admin','127.0.0.1','1446534056','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('965','1','admin','127.0.0.1','1446534146','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('966','1','admin','127.0.0.1','1446534346','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('967','1','admin','127.0.0.1','1446534418','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('968','1','admin','127.0.0.1','1446534521','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('969','1','admin','127.0.0.1','1446534643','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('970','1','admin','127.0.0.1','1446534659','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('971','1','admin','127.0.0.1','1446534750','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('972','1','admin','127.0.0.1','1446538780','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('973','1','admin','127.0.0.1','1446538837','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('974','1','admin','127.0.0.1','1446538847','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('975','1','admin','127.0.0.1','1446538856','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('976','1','admin','127.0.0.1','1446539028','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('977','1','admin','127.0.0.1','1446539047','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('978','1','admin','127.0.0.1','1446539071','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('979','1','admin','127.0.0.1','1446539081','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('980','1','admin','127.0.0.1','1446539098','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('981','1','admin','127.0.0.1','1446539110','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('982','1','admin','127.0.0.1','1446539131','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('983','1','admin','127.0.0.1','1446539145','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('984','1','admin','127.0.0.1','1446539157','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('985','1','admin','127.0.0.1','1446539169','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('986','1','admin','127.0.0.1','1446539189','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('987','1','admin','127.0.0.1','1446539200','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('988','1','admin','127.0.0.1','1446539218','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('989','1','admin','127.0.0.1','1446539233','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('990','1','admin','127.0.0.1','1446539251','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('991','1','admin','127.0.0.1','1446539264','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('992','1','admin','127.0.0.1','1446539280','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('993','1','admin','127.0.0.1','1446539306','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('994','1','admin','127.0.0.1','1446539319','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('995','1','admin','127.0.0.1','1446539335','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('996','1','admin','127.0.0.1','1446539348','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('997','1','admin','127.0.0.1','1446539364','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('998','1','admin','127.0.0.1','1446539383','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('999','1','admin','127.0.0.1','1446539403','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1000','1','admin','127.0.0.1','1446539418','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1001','1','admin','127.0.0.1','1446539752','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1002','1','admin','127.0.0.1','1446543319','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1003','1','admin','127.0.0.1','1446543319','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1004','1','admin','127.0.0.1','1446626735','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1005','1','admin','127.0.0.1','1446626744','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1006','1','admin','127.0.0.1','1446626813','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1007','1','admin','127.0.0.1','1446704490','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1008','1','admin','127.0.0.1','1446704501','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1009','1','admin','127.0.0.1','1446704742','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1010','1','admin','127.0.0.1','1446704778','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1011','1','admin','127.0.0.1','1446704799','删除templatetag','成功 id=23');--
INSERT INTO `cmseasy_event` VALUES('1012','1','admin','127.0.0.1','1446705070','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1013','1','admin','127.0.0.1','1446705807','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1014','1','admin','127.0.0.1','1446706174','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1015','1','admin','127.0.0.1','1446706203','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1016','1','admin','127.0.0.1','1446706224','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1017','1','admin','127.0.0.1','1446706241','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1018','1','admin','127.0.0.1','1446706270','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1019','1','admin','127.0.0.1','1446706286','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1020','1','admin','127.0.0.1','1446706304','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1021','1','admin','127.0.0.1','1446706419','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1022','1','admin','127.0.0.1','1446706524','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1023','1','admin','127.0.0.1','1446706539','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1024','1','admin','127.0.0.1','1446706549','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1025','1','admin','127.0.0.1','1446706595','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1026','1','admin','127.0.0.1','1446706623','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1027','1','admin','127.0.0.1','1446706636','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1028','1','admin','127.0.0.1','1446706788','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1029','1','admin','127.0.0.1','1446706900','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1030','1','admin','127.0.0.1','1446706971','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1031','1','admin','127.0.0.1','1446707244','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1032','1','admin','127.0.0.1','1446707476','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1033','1','admin','127.0.0.1','1446707540','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1034','1','admin','127.0.0.1','1446707579','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1035','1','admin','127.0.0.1','1446707626','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1036','1','admin','127.0.0.1','1446707852','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1037','1','admin','127.0.0.1','1446707920','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1038','1','admin','127.0.0.1','1446708012','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1039','1','admin','127.0.0.1','1446708857','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1040','1','admin','127.0.0.1','1446709191','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1041','1','admin','127.0.0.1','1446709838','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1042','1','admin','127.0.0.1','1446711326','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1043','1','admin','127.0.0.1','1446711372','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1044','1','admin','127.0.0.1','1446711523','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1045','1','admin','127.0.0.1','1446711565','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1046','1','admin','127.0.0.1','1446711583','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1047','1','admin','127.0.0.1','1446711593','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1048','1','admin','127.0.0.1','1446711603','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1049','1','admin','127.0.0.1','1446711616','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1050','1','admin','127.0.0.1','1446711630','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1051','1','admin','127.0.0.1','1446711640','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1052','1','admin','127.0.0.1','1446711718','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1053','1','admin','127.0.0.1','1446711729','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1054','1','admin','127.0.0.1','1446711742','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1055','1','admin','127.0.0.1','1446712696','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1056','1','admin','127.0.0.1','1446712697','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1057','1','admin','127.0.0.1','1446712723','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1058','1','admin','127.0.0.1','1446712736','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1059','1','admin','127.0.0.1','1446712749','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1060','1','admin','127.0.0.1','1446712759','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1061','1','admin','127.0.0.1','1446712774','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1062','1','admin','127.0.0.1','1446712801','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1063','1','admin','127.0.0.1','1446712816','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1064','1','admin','127.0.0.1','1446712826','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1065','1','admin','127.0.0.1','1446712838','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1066','1','admin','127.0.0.1','1446712855','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1067','1','admin','127.0.0.1','1446712871','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1068','1','admin','127.0.0.1','1446712885','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1069','1','admin','127.0.0.1','1446796284','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1070','1','admin','127.0.0.1','1446796463','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1071','1','admin','127.0.0.1','1446796743','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1072','1','admin','127.0.0.1','1446797061','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1073','1','admin','127.0.0.1','1446797088','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1074','1','admin','127.0.0.1','1446797144','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1075','1','admin','127.0.0.1','1446797151','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1076','1','admin','127.0.0.1','1446797551','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1077','1','admin','127.0.0.1','1446797566','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1078','1','admin','127.0.0.1','1446797578','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1079','1','admin','127.0.0.1','1446797761','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1080','1','admin','127.0.0.1','1446797787','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1081','1','admin','127.0.0.1','1446797798','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1082','1','admin','127.0.0.1','1446797809','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1083','1','admin','127.0.0.1','1446797859','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1084','1','admin','127.0.0.1','1446797884','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1085','1','admin','127.0.0.1','1446797988','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1086','1','admin','127.0.0.1','1446797999','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1087','1','admin','127.0.0.1','1446798117','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1088','1','admin','127.0.0.1','1446798184','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1089','1','admin','127.0.0.1','1446798308','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1090','1','admin','127.0.0.1','1446799641','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1091','1','admin','127.0.0.1','1446799737','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1092','1','admin','127.0.0.1','1446799759','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1093','1','admin','127.0.0.1','1446799767','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1094','1','admin','127.0.0.1','1446799778','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1095','1','admin','127.0.0.1','1446799921','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1096','1','admin','127.0.0.1','1446799934','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1097','1','admin','127.0.0.1','1446799944','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1098','1','admin','127.0.0.1','1446799953','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1099','1','admin','127.0.0.1','1446800952','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1100','1','admin','127.0.0.1','1446801020','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1101','1','admin','127.0.0.1','1446801058','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1102','1','admin','127.0.0.1','1446801072','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1103','1','admin','127.0.0.1','1446801083','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1104','1','admin','127.0.0.1','1446801096','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1105','1','admin','127.0.0.1','1446801109','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1106','1','admin','127.0.0.1','1446801150','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1107','1','admin','127.0.0.1','1446801161','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1108','1','admin','127.0.0.1','1446801208','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1109','1','admin','127.0.0.1','1446801219','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1110','1','admin','127.0.0.1','1446801228','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1111','1','admin','127.0.0.1','1446801238','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1112','1','admin','127.0.0.1','1446801247','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1113','1','admin','127.0.0.1','1446801265','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1114','1','admin','127.0.0.1','1446801277','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1115','1','admin','127.0.0.1','1446801301','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1116','1','admin','127.0.0.1','1446801314','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1117','1','admin','127.0.0.1','1446801328','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1118','1','admin','127.0.0.1','1447057616','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1119','1','admin','127.0.0.1','1447057616','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1120','1','admin','127.0.0.1','1447057657','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1121','1','admin','127.0.0.1','1447057711','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1122','1','admin','127.0.0.1','1447057757','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1123','1','admin','127.0.0.1','1447057797','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1124','1','admin','127.0.0.1','1447058928','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1125','1','admin','127.0.0.1','1447059046','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1126','1','admin','127.0.0.1','1447059093','修改templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1127','1','admin','127.0.0.1','1447059141','修改templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1128','1','admin','127.0.0.1','1447059168','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1129','1','admin','127.0.0.1','1447060498','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1130','1','admin','127.0.0.1','1447060555','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1131','1','admin','127.0.0.1','1447060565','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1132','1','admin','127.0.0.1','1447060645','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1133','1','admin','127.0.0.1','1447060680','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1134','1','admin','127.0.0.1','1447061305','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1135','1','admin','127.0.0.1','1447061341','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1136','1','admin','127.0.0.1','1447061510','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1137','1','admin','127.0.0.1','1447061561','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1138','1','admin','127.0.0.1','1447061599','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1139','1','admin','127.0.0.1','1447061693','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1140','1','admin','127.0.0.1','1447061705','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1141','1','admin','127.0.0.1','1447061714','添加templatetagwap','成功');--
INSERT INTO `cmseasy_event` VALUES('1142','1','admin','127.0.0.1','1447061950','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1143','1','admin','127.0.0.1','1447061965','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1144','1','admin','127.0.0.1','1447061978','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1145','1','admin','127.0.0.1','1447061993','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1146','1','admin','127.0.0.1','1447062007','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1147','1','admin','127.0.0.1','1447062020','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1148','1','admin','127.0.0.1','1447062954','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1149','1','admin','127.0.0.1','1447063108','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1150','1','admin','127.0.0.1','1447063286','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1151','1','admin','127.0.0.1','1447063298','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1152','1','admin','127.0.0.1','1447063308','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1153','1','admin','127.0.0.1','1447063319','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1154','1','admin','127.0.0.1','1447063331','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1155','1','admin','127.0.0.1','1447063342','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1156','1','admin','127.0.0.1','1447063354','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1157','1','admin','127.0.0.1','1447063380','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1158','1','admin','127.0.0.1','1447063395','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1159','1','admin','127.0.0.1','1447063414','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1160','1','admin','127.0.0.1','1447063428','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1161','1','admin','127.0.0.1','1447063440','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1162','1','admin','127.0.0.1','1447063453','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1163','1','admin','127.0.0.1','1447063471','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1164','1','admin','127.0.0.1','1447063488','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1165','1','admin','127.0.0.1','1447063519','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1166','1','admin','127.0.0.1','1447063528','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1167','1','admin','127.0.0.1','1447063537','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1168','1','admin','127.0.0.1','1447063549','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1169','1','admin','127.0.0.1','1447063568','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1170','1','admin','127.0.0.1','1447063579','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1171','1','admin','127.0.0.1','1447063592','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1172','1','admin','127.0.0.1','1447063605','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1173','1','admin','127.0.0.1','1447067200','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1174','1','admin','127.0.0.1','1447223015','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1175','1','admin','127.0.0.1','1447223025','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1176','1','admin','127.0.0.1','1447223435','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1177','1','admin','127.0.0.1','1447223452','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1178','1','admin','127.0.0.1','1447223463','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1179','1','admin','127.0.0.1','1447224137','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1180','1','admin','127.0.0.1','1447225272','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1181','1','admin','127.0.0.1','1447225290','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1182','1','admin','127.0.0.1','1447225302','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1183','1','admin','127.0.0.1','1447225529','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1184','1','admin','127.0.0.1','1447225551','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1185','1','admin','127.0.0.1','1447225566','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1186','1','admin','127.0.0.1','1447225582','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1187','1','admin','127.0.0.1','1447226032','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1188','1','admin','127.0.0.1','1447226209','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1189','1','admin','127.0.0.1','1447227430','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1190','1','admin','127.0.0.1','1447227453','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1191','1','admin','127.0.0.1','1447227520','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1192','1','admin','127.0.0.1','1447227528','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1193','1','admin','127.0.0.1','1447227539','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1194','1','admin','127.0.0.1','1447227549','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1195','1','admin','127.0.0.1','1447227823','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1196','1','admin','127.0.0.1','1447227842','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1197','1','admin','127.0.0.1','1447227858','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1198','1','admin','127.0.0.1','1447228902','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1199','1','admin','127.0.0.1','1447230525','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1200','1','admin','127.0.0.1','1447235014','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1201','1','admin','127.0.0.1','1447316197','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1202','1','admin','127.0.0.1','1447316206','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1203','1','admin','127.0.0.1','1447316617','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1204','1','admin','127.0.0.1','1447316630','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1205','1','admin','127.0.0.1','1447318118','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1206','1','admin','127.0.0.1','1447318154','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1207','1','admin','127.0.0.1','1447318237','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1208','1','admin','127.0.0.1','1447318279','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1209','1','admin','127.0.0.1','1447318420','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1210','1','admin','127.0.0.1','1447318833','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1211','1','admin','127.0.0.1','1447318930','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1212','1','admin','127.0.0.1','1447319760','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1213','1','admin','127.0.0.1','1447319805','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1214','1','admin','127.0.0.1','1447319827','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1215','1','admin','127.0.0.1','1447320271','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1216','1','admin','127.0.0.1','1447320473','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1217','1','admin','127.0.0.1','1447320593','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1218','1','admin','127.0.0.1','1447320616','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1219','1','admin','127.0.0.1','1447320828','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1220','1','admin','127.0.0.1','1447320835','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1221','1','admin','127.0.0.1','1447320882','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1222','1','admin','127.0.0.1','1447320898','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1223','1','admin','127.0.0.1','1447321009','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1224','1','admin','127.0.0.1','1447321018','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1225','1','admin','127.0.0.1','1447329052','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1226','1','admin','127.0.0.1','1447329113','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1227','1','admin','127.0.0.1','1447329353','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1228','1','admin','127.0.0.1','1447329469','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1229','1','admin','127.0.0.1','1447329574','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1230','1','admin','127.0.0.1','1447329688','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1231','1','admin','127.0.0.1','1447329700','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1232','1','admin','127.0.0.1','1447329712','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1233','1','admin','127.0.0.1','1447329723','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1234','1','admin','127.0.0.1','1447329738','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1235','1','admin','127.0.0.1','1447329750','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1236','1','admin','127.0.0.1','1447329761','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1237','1','admin','127.0.0.1','1447329779','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1238','1','admin','127.0.0.1','1447329789','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1239','1','admin','127.0.0.1','1447329800','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1240','1','admin','127.0.0.1','1447329815','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1241','1','admin','127.0.0.1','1447329826','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1242','1','admin','127.0.0.1','1447329839','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1243','1','admin','127.0.0.1','1447330095','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1244','1','admin','127.0.0.1','1447330108','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1245','1','admin','127.0.0.1','1447330119','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1246','1','admin','127.0.0.1','1447330130','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1247','1','admin','127.0.0.1','1447330140','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1248','1','admin','127.0.0.1','1447330153','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1249','1','admin','127.0.0.1','1447330164','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1250','1','admin','127.0.0.1','1447330175','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1251','1','admin','127.0.0.1','1447330205','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1252','1','admin','127.0.0.1','1448348082','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1253','1','admin','127.0.0.1','1448349700','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1254','1','admin','127.0.0.1','1448349753','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1255','1','admin','127.0.0.1','1448350815','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1256','1','admin','127.0.0.1','1448350845','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1257','1','admin','127.0.0.1','1448350962','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1258','1','admin','127.0.0.1','1448351198','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1259','1','admin','127.0.0.1','1448351227','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1260','1','admin','127.0.0.1','1448351750','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1261','1','admin','127.0.0.1','1448352033','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1262','1','admin','127.0.0.1','1448352222','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1263','1','admin','127.0.0.1','1448352570','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1264','1','admin','127.0.0.1','1448353136','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1265','1','admin','127.0.0.1','1448353149','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1266','1','admin','127.0.0.1','1448353162','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1267','1','admin','127.0.0.1','1448353177','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1268','1','admin','127.0.0.1','1448353312','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1269','1','admin','127.0.0.1','1448353316','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1270','1','admin','127.0.0.1','1448353332','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1271','1','admin','127.0.0.1','1448354268','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1272','1','admin','127.0.0.1','1448354283','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1273','1','admin','127.0.0.1','1448354345','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1274','1','admin','127.0.0.1','1448356945','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1275','1','admin','127.0.0.1','1448357012','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1276','1','admin','127.0.0.1','1448357044','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1277','1','admin','127.0.0.1','1448357085','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1278','1','admin','127.0.0.1','1448357098','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1279','1','admin','127.0.0.1','1448357619','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1280','1','admin','127.0.0.1','1448357665','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1281','1','admin','127.0.0.1','1448357675','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1282','1','admin','127.0.0.1','1448357702','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1283','1','admin','127.0.0.1','1448357715','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1284','1','admin','127.0.0.1','1448357728','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1285','1','admin','127.0.0.1','1448357739','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1286','1','admin','127.0.0.1','1448357750','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1287','1','admin','127.0.0.1','1448358103','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1288','1','admin','127.0.0.1','1448358117','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1289','1','admin','127.0.0.1','1448358129','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1290','1','admin','127.0.0.1','1448358140','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1291','1','admin','127.0.0.1','1448358153','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1292','1','admin','127.0.0.1','1448358174','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1293','1','admin','127.0.0.1','1448358187','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1294','1','admin','127.0.0.1','1448358215','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1295','1','admin','127.0.0.1','1448358226','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1296','1','admin','127.0.0.1','1448358240','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1297','1','admin','127.0.0.1','1448358249','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1298','1','admin','127.0.0.1','1448358262','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1299','1','admin','127.0.0.1','1448358275','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1300','1','admin','127.0.0.1','1448358287','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1301','1','admin','127.0.0.1','1448358301','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1302','1','admin','127.0.0.1','1448367489','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1303','1','admin','127.0.0.1','1448431825','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1304','1','admin','127.0.0.1','1448433408','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1305','1','admin','127.0.0.1','1448433417','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1306','1','admin','127.0.0.1','1448443137','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1307','1','admin','127.0.0.1','1448443357','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1308','1','admin','127.0.0.1','1448443379','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1309','1','admin','127.0.0.1','1448443384','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1310','1','admin','127.0.0.1','1448450388','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1311','1','admin','127.0.0.1','1448450406','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1312','1','admin','127.0.0.1','1448450548','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1313','1','admin','127.0.0.1','1448450570','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1314','1','admin','127.0.0.1','1448450685','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1315','1','admin','127.0.0.1','1448450757','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1316','1','admin','127.0.0.1','1448450770','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1317','1','admin','127.0.0.1','1448450784','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1318','1','admin','127.0.0.1','1448450913','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1319','1','admin','127.0.0.1','1448450990','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1320','1','admin','127.0.0.1','1448451142','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1321','1','admin','127.0.0.1','1448451152','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1322','1','admin','127.0.0.1','1448451164','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1323','1','admin','127.0.0.1','1448451753','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1324','1','admin','127.0.0.1','1448451762','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1325','1','admin','127.0.0.1','1448451772','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1326','1','admin','127.0.0.1','1448622699','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1327','1','admin','127.0.0.1','1448624460','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1328','1','admin','127.0.0.1','1448624529','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1329','1','admin','127.0.0.1','1448624555','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1330','1','admin','127.0.0.1','1448624565','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1331','1','admin','127.0.0.1','1448624579','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1332','1','admin','127.0.0.1','1448624590','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1333','1','admin','127.0.0.1','1448624606','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1334','1','admin','127.0.0.1','1448624624','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1335','1','admin','127.0.0.1','1448624634','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1336','1','admin','127.0.0.1','1448624651','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1337','1','admin','127.0.0.1','1448624669','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1338','1','admin','127.0.0.1','1448624681','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1339','1','admin','127.0.0.1','1448624694','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1340','1','admin','127.0.0.1','1448624706','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1341','1','admin','127.0.0.1','1448624720','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1342','1','admin','127.0.0.1','1448624731','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1343','1','admin','127.0.0.1','1448624761','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1344','1','admin','127.0.0.1','1448624792','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1345','1','admin','127.0.0.1','1448624805','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1346','1','admin','127.0.0.1','1448624816','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1347','1','admin','127.0.0.1','1448624829','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1348','1','admin','127.0.0.1','1448624843','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1349','1','admin','127.0.0.1','1448624856','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1350','1','admin','127.0.0.1','1448624866','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1351','1','admin','127.0.0.1','1448624886','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1352','1','admin','127.0.0.1','1449130368','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1353','1','admin','127.0.0.1','1449131565','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1354','1','admin','127.0.0.1','1449131669','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1355','1','admin','127.0.0.1','1449131683','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1356','1','admin','127.0.0.1','1449132743','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1357','1','admin','127.0.0.1','1449132759','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1358','1','admin','127.0.0.1','1449132858','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1359','1','admin','127.0.0.1','1449132936','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1360','1','admin','127.0.0.1','1449133068','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1361','1','admin','127.0.0.1','1449133189','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1362','1','admin','127.0.0.1','1449133537','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1363','1','admin','127.0.0.1','1449133653','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1364','1','admin','127.0.0.1','1449133660','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1365','1','admin','127.0.0.1','1449133670','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1366','1','admin','127.0.0.1','1449133679','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1367','1','admin','127.0.0.1','1449133688','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1368','1','admin','127.0.0.1','1449133698','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1369','1','admin','127.0.0.1','1449133952','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1370','1','admin','127.0.0.1','1449134084','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1371','1','admin','127.0.0.1','1449134115','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1372','1','admin','127.0.0.1','1449134415','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1373','1','admin','127.0.0.1','1449134434','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1374','1','admin','127.0.0.1','1449134730','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1375','1','admin','127.0.0.1','1449134779','添加templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1376','1','admin','127.0.0.1','1449136062','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1377','1','admin','127.0.0.1','1449137260','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1378','1','admin','127.0.0.1','1449137273','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1379','1','admin','127.0.0.1','1449137381','修改templatetag','成功');--
INSERT INTO `cmseasy_event` VALUES('1380','1','admin','127.0.0.1','1449137513','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1381','1','admin','127.0.0.1','1449137531','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1382','1','admin','127.0.0.1','1449137881','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1383','1','admin','127.0.0.1','1450340019','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1384','1','admin','127.0.0.1','1450340142','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1385','1','admin','127.0.0.1','1450340145','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1386','1','admin','127.0.0.1','1450340866','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1387','1','admin','127.0.0.1','1450340876','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1388','1','admin','127.0.0.1','1450340886','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1389','1','admin','127.0.0.1','1450340896','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1390','1','admin','127.0.0.1','1450340960','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1391','1','admin','127.0.0.1','1450340970','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1392','1','admin','127.0.0.1','1450340984','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1393','1','admin','127.0.0.1','1450340992','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1394','1','admin','127.0.0.1','1450345632','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1395','1','admin','127.0.0.1','1450345657','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1396','1','admin','127.0.0.1','1450345662','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1397','1','admin','127.0.0.1','1450347388','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1398','1','admin','127.0.0.1','1450347621','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1399','1','admin','127.0.0.1','1450347739','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1400','1','admin','127.0.0.1','1450347849','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1401','1','admin','127.0.0.1','1450347909','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1402','1','admin','127.0.0.1','1450347916','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1403','1','admin','127.0.0.1','1450347924','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1404','1','admin','127.0.0.1','1450347932','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1405','1','admin','127.0.0.1','1450348150','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1406','1','admin','127.0.0.1','1450348254','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1407','1','admin','127.0.0.1','1450348275','修改模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1408','1','admin','127.0.0.1','1450348658','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1409','1','admin','127.0.0.1','1450348688','修改模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1410','1','admin','127.0.0.1','1450351964','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1411','1','admin','127.0.0.1','1450351976','修改模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1412','1','admin','127.0.0.1','1450351980','修改模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1413','1','admin','127.0.0.1','1450351987','修改模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1414','1','admin','127.0.0.1','1450352118','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1415','1','admin','127.0.0.1','1450352396','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1416','1','admin','127.0.0.1','1450352752','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1417','1','admin','127.0.0.1','1450353025','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1418','1','admin','127.0.0.1','1450354600','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1419','1','admin','127.0.0.1','1450354616','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1420','1','admin','127.0.0.1','1450354958','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1421','1','admin','127.0.0.1','1450355355','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1422','1','admin','127.0.0.1','1450355453','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1423','1','admin','127.0.0.1','1450355500','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1424','1','admin','127.0.0.1','1450355516','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1425','1','admin','127.0.0.1','1450355534','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1426','1','admin','127.0.0.1','1450355546','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1427','1','admin','127.0.0.1','1450355556','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1428','1','admin','127.0.0.1','1450355589','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1429','1','admin','127.0.0.1','1450355604','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1430','1','admin','127.0.0.1','1450355619','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1431','1','admin','127.0.0.1','1450355647','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1432','1','admin','127.0.0.1','1450355657','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1433','1','admin','127.0.0.1','1450355672','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1434','1','admin','127.0.0.1','1450355697','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1435','1','admin','127.0.0.1','1450355708','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1436','1','admin','127.0.0.1','1450355719','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1437','1','admin','127.0.0.1','1450355738','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1438','1','admin','127.0.0.1','1450355754','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1439','1','admin','127.0.0.1','1450355765','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1440','1','admin','127.0.0.1','1450355779','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1441','1','admin','127.0.0.1','1450355796','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1442','1','admin','127.0.0.1','1450355808','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1443','1','admin','127.0.0.1','1450355825','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1444','1','admin','127.0.0.1','1450356296','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1445','1','admin','127.0.0.1','1450423761','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1446','1','admin','127.0.0.1','1450423769','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1447','1','admin','127.0.0.1','1450426867','删除模板标签','成功 id=5');--
INSERT INTO `cmseasy_event` VALUES('1448','1','admin','127.0.0.1','1450426872','删除模板标签','成功 id=8');--
INSERT INTO `cmseasy_event` VALUES('1449','1','admin','127.0.0.1','1450426879','删除模板标签','成功 id=9');--
INSERT INTO `cmseasy_event` VALUES('1450','1','admin','127.0.0.1','1450426883','删除模板标签','成功 id=17');--
INSERT INTO `cmseasy_event` VALUES('1451','1','admin','127.0.0.1','1450426886','删除模板标签','成功 id=19');--
INSERT INTO `cmseasy_event` VALUES('1452','1','admin','127.0.0.1','1450426890','删除模板标签','成功 id=1');--
INSERT INTO `cmseasy_event` VALUES('1453','1','admin','127.0.0.1','1450426893','删除模板标签','成功 id=2');--
INSERT INTO `cmseasy_event` VALUES('1454','1','admin','127.0.0.1','1450426896','删除模板标签','成功 id=3');--
INSERT INTO `cmseasy_event` VALUES('1455','1','admin','127.0.0.1','1450426899','删除模板标签','成功 id=4');--
INSERT INTO `cmseasy_event` VALUES('1456','1','admin','127.0.0.1','1450426904','删除模板标签','成功 id=6');--
INSERT INTO `cmseasy_event` VALUES('1457','1','admin','127.0.0.1','1450426907','删除模板标签','成功 id=7');--
INSERT INTO `cmseasy_event` VALUES('1458','1','admin','127.0.0.1','1450426911','删除模板标签','成功 id=10');--
INSERT INTO `cmseasy_event` VALUES('1459','1','admin','127.0.0.1','1450426924','删除模板标签','成功 id=11,12,13,18,20');--
INSERT INTO `cmseasy_event` VALUES('1460','1','admin','127.0.0.1','1450427920','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1461','1','admin','127.0.0.1','1450427939','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1462','1','admin','127.0.0.1','1450428019','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1463','1','admin','127.0.0.1','1450428062','删除模板标签','成功 id=23');--
INSERT INTO `cmseasy_event` VALUES('1464','1','admin','127.0.0.1','1450428355','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1465','1','admin','127.0.0.1','1450428578','修改模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1466','1','admin','127.0.0.1','1450428607','修改模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1467','1','admin','127.0.0.1','1450428808','修改模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1468','1','admin','127.0.0.1','1450428968','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1469','1','admin','127.0.0.1','1450429063','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1470','1','admin','127.0.0.1','1450429072','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1471','1','admin','127.0.0.1','1450429080','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1472','1','admin','127.0.0.1','1450429088','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1473','1','admin','127.0.0.1','1450429382','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1474','1','admin','127.0.0.1','1450429678','修改模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1475','1','admin','127.0.0.1','1450429730','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1476','1','admin','127.0.0.1','1450429831','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1477','1','admin','127.0.0.1','1450429904','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1478','1','admin','127.0.0.1','1450430066','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1479','1','admin','127.0.0.1','1450430526','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1480','1','admin','127.0.0.1','1450430633','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1481','1','admin','127.0.0.1','1450433026','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1482','1','admin','127.0.0.1','1450433031','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1483','1','admin','127.0.0.1','1450433060','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1484','1','admin','127.0.0.1','1450434178','修改模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1485','1','admin','127.0.0.1','1450434286','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1486','1','admin','127.0.0.1','1450434429','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1487','1','admin','127.0.0.1','1450434603','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1488','1','admin','127.0.0.1','1450434697','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1489','1','admin','127.0.0.1','1450434707','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1490','1','admin','127.0.0.1','1450434715','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1491','1','admin','127.0.0.1','1450434730','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1492','1','admin','127.0.0.1','1450434739','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1493','1','admin','127.0.0.1','1450434747','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1494','1','admin','127.0.0.1','1450434758','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1495','1','admin','127.0.0.1','1450434768','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1496','1','admin','127.0.0.1','1450434788','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1497','1','admin','127.0.0.1','1450434796','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1498','1','admin','127.0.0.1','1450434805','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1499','1','admin','127.0.0.1','1450434821','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1500','1','admin','127.0.0.1','1450434832','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1501','1','admin','127.0.0.1','1450434842','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1502','1','admin','127.0.0.1','1450434851','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1503','1','admin','127.0.0.1','1450434880','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1504','1','admin','127.0.0.1','1450434910','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1505','1','admin','127.0.0.1','1450434919','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1506','1','admin','127.0.0.1','1450434929','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1507','1','admin','127.0.0.1','1450434938','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1508','1','admin','127.0.0.1','1450434952','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1509','1','admin','127.0.0.1','1450434962','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1510','1','admin','127.0.0.1','1450434973','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1511','1','admin','127.0.0.1','1450434984','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1512','1','admin','127.0.0.1','1450439445','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1513','1','admin','127.0.0.1','1450680295','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1514','1','admin','127.0.0.1','1450680312','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1515','1','admin','127.0.0.1','1450680352','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1516','1','admin','127.0.0.1','1450680461','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1517','1','admin','127.0.0.1','1450680465','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1518','1','admin','127.0.0.1','1450681341','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1519','1','admin','127.0.0.1','1450682632','删除模板标签','成功 id=1,2,3,4,6,7,10,11,12,13,18,20');--
INSERT INTO `cmseasy_event` VALUES('1520','1','admin','127.0.0.1','1450682649','删除模板标签','成功 id=5,8,9,17,19');--
INSERT INTO `cmseasy_event` VALUES('1521','1','admin','127.0.0.1','1450682666','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1522','1','admin','127.0.0.1','1450683014','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1523','1','admin','127.0.0.1','1450683081','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1524','1','admin','127.0.0.1','1450683151','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1525','1','admin','127.0.0.1','1450684070','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1526','1','admin','127.0.0.1','1450684168','添加专题','成功');--
INSERT INTO `cmseasy_event` VALUES('1527','1','admin','127.0.0.1','1450684281','添加专题','成功');--
INSERT INTO `cmseasy_event` VALUES('1528','1','admin','127.0.0.1','1450684672','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1529','1','admin','127.0.0.1','1450684886','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1530','1','admin','127.0.0.1','1450684893','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1531','1','admin','127.0.0.1','1450684907','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1532','1','admin','127.0.0.1','1450684917','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1533','1','admin','127.0.0.1','1450685040','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1534','1','admin','127.0.0.1','1450685052','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1535','1','admin','127.0.0.1','1450685176','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1536','1','admin','127.0.0.1','1450685237','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1537','1','admin','127.0.0.1','1450685417','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1538','1','admin','127.0.0.1','1450685639','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1539','1','admin','127.0.0.1','1450686530','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1540','1','admin','127.0.0.1','1450687478','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1541','1','admin','127.0.0.1','1450687594','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1542','1','admin','127.0.0.1','1450687935','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1543','1','admin','127.0.0.1','1450687980','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1544','1','admin','127.0.0.1','1450688302','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1545','1','admin','127.0.0.1','1450688311','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1546','1','admin','127.0.0.1','1450688321','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1547','1','admin','127.0.0.1','1450688338','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1548','1','admin','127.0.0.1','1450688350','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1549','1','admin','127.0.0.1','1450688361','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1550','1','admin','127.0.0.1','1450688371','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1551','1','admin','127.0.0.1','1450688385','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1552','1','admin','127.0.0.1','1450688395','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1553','1','admin','127.0.0.1','1450688405','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1554','1','admin','127.0.0.1','1450688418','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1555','1','admin','127.0.0.1','1450688429','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1556','1','admin','127.0.0.1','1450688439','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1557','1','admin','127.0.0.1','1450688449','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1558','1','admin','127.0.0.1','1450688466','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1559','1','admin','127.0.0.1','1450688484','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1560','1','admin','127.0.0.1','1450688494','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1561','1','admin','127.0.0.1','1450688505','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1562','1','admin','127.0.0.1','1450688517','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1563','1','admin','127.0.0.1','1450688528','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1564','1','admin','127.0.0.1','1450688544','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1565','1','admin','127.0.0.1','1450688560','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1566','1','admin','127.0.0.1','1463378598','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1567','1','admin','127.0.0.1','1463378632','修改网站配置','成功');--
INSERT INTO `cmseasy_event` VALUES('1568','1','admin','127.0.0.1','1463378657','删除模板标签','成功 id=1,2,3,4,6,7,10,11,12,13,18,20');--
INSERT INTO `cmseasy_event` VALUES('1569','1','admin','127.0.0.1','1463378666','删除模板标签','成功 id=5,8,9,19');--
INSERT INTO `cmseasy_event` VALUES('1570','1','admin','127.0.0.1','1463378692','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1571','1','admin','127.0.0.1','1463378928','修改栏目','成功');--
INSERT INTO `cmseasy_event` VALUES('1572','1','admin','127.0.0.1','1463378945','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1573','1','admin','127.0.0.1','1463379127','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1574','1','admin','127.0.0.1','1463379399','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1575','1','admin','127.0.0.1','1463379824','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1576','1','admin','127.0.0.1','1463380035','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1577','1','admin','127.0.0.1','1463380153','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1578','1','admin','127.0.0.1','1463380279','修改模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1579','1','admin','127.0.0.1','1463381948','后台登录','成功');--
INSERT INTO `cmseasy_event` VALUES('1580','1','admin','127.0.0.1','1463382002','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1581','1','admin','127.0.0.1','1463382102','添加模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1582','1','admin','127.0.0.1','1463384339','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1583','1','admin','127.0.0.1','1463384350','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1584','1','admin','127.0.0.1','1463384358','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1585','1','admin','127.0.0.1','1463384367','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1586','1','admin','127.0.0.1','1463384376','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1587','1','admin','127.0.0.1','1463384386','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1588','1','admin','127.0.0.1','1463384395','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1589','1','admin','127.0.0.1','1463384408','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1590','1','admin','127.0.0.1','1463384508','修改内容','成功');--
INSERT INTO `cmseasy_event` VALUES('1591','1','admin','127.0.0.1','1463384880','修改模板标签','成功');--
INSERT INTO `cmseasy_event` VALUES('1592','1','admin','127.0.0.1','1463387561','后台登录','成功');--

INSERT INTO `cmseasy_friendlink` VALUES('1','2','0','易通免费企业CMS','0','http://www.cmseasy.cn','http://www.cmseasy.cn/logo.gif','','0','cmseasy','2009-11-12 13:14:37','0','1');--
INSERT INTO `cmseasy_friendlink` VALUES('2','1','0','CmsEasy论坛','0','http://www.cmseasy.org','','','0','cmseasy','2009-11-12 13:15:00','2','1');--
INSERT INTO `cmseasy_friendlink` VALUES('3','1','0','九州易通科技有限公司','0','http://www.cmseasy.net','','','0','cmseasy','2009-11-12 13:28:53','2','1');--




INSERT INTO `cmseasy_my_a` VALUES('1','0','','0','2011-11-12 11:33:59','0','1','0','127.0.0.1','a');--
INSERT INTO `cmseasy_my_a` VALUES('2','0','','0','2011-11-12 11:34:35','0','1','0','127.0.0.1','a');--
INSERT INTO `cmseasy_my_a` VALUES('3','0','','0','2011-11-12 11:36:12','0','1','0','127.0.0.1','a');--
INSERT INTO `cmseasy_my_a` VALUES('4','0','','0','2011-11-12 11:36:37','0','1','0','127.0.0.1','aa');--
INSERT INTO `cmseasy_my_a` VALUES('5','0','','0','2011-11-12 12:33:47','0','1','0','127.0.0.1','a');--
INSERT INTO `cmseasy_my_a` VALUES('6','0','','0','2011-11-12 12:34:32','0','1','0','127.0.0.1','a');--


INSERT INTO `cmseasy_my_dinggou` VALUES('1','18','','0','2015-05-06 11:52:10','0','1','0','113.116.97.202','fadf','20000','1','1');--
INSERT INTO `cmseasy_my_dinggou` VALUES('2','18','','0','2015-05-06 11:52:48','0','1','0','113.116.97.202','dfa','fdsa','1','1');--
INSERT INTO `cmseasy_my_dinggou` VALUES('3','18','','0','2015-05-06 11:52:58','0','1','0','113.116.97.202','dfasdf','dasf','1','');--
INSERT INTO `cmseasy_my_dinggou` VALUES('4','18','','0','2015-05-06 11:53:09','0','1','0','113.116.97.202','dfadsf','afdas','1','1');--
INSERT INTO `cmseasy_my_dinggou` VALUES('5','18','','0','2015-05-06 11:53:44','0','1','0','113.116.97.202','','','1','');--
INSERT INTO `cmseasy_my_dinggou` VALUES('6','15','','0','2015-05-06 11:55:39','0','1','0','111.26.188.159','123','12','2','1');--
INSERT INTO `cmseasy_my_dinggou` VALUES('7','18','','0','2015-05-06 11:56:45','0','1','0','113.116.97.202','','','1','1');--
INSERT INTO `cmseasy_my_dinggou` VALUES('8','15','','0','2015-05-06 12:21:06','0','1','0','113.116.97.202','Enter your inquiry details such as product name,color,size,MOQ,FOB,etc.','Please enter a number.','1','');--
INSERT INTO `cmseasy_my_dinggou` VALUES('9','15','','0','2015-05-06 12:21:09','0','1','0','111.26.188.159','1','1','1','1');--
INSERT INTO `cmseasy_my_dinggou` VALUES('10','15','','0','2015-05-06 12:21:14','0','1','0','113.116.97.202','Enter your inquiry details such as product name,color,size,MOQ,FOB,etc.','Please enter a number.','1','1');--
INSERT INTO `cmseasy_my_dinggou` VALUES('11','11','','0','2015-05-06 12:21:57','0','1','0','111.26.188.159','Enter your inquiry details such as product name,color,size,MOQ,FOB,etc.','Please enter a number.','1','');--
INSERT INTO `cmseasy_my_dinggou` VALUES('12','15','','0','2015-05-06 12:22:30','0','1','0','111.26.188.159','Enter your inquiry details such as product name,color,size,MOQ,FOB,etc.','Please enter a number.','1','');--
INSERT INTO `cmseasy_my_dinggou` VALUES('13','24','','0','2015-05-06 12:34:32','0','1','0','111.26.188.159','Enter your inquiry details such as product name,color,size,MOQ,FOB,etc.','Please enter a number.','1','');--
INSERT INTO `cmseasy_my_dinggou` VALUES('14','24','','0','2015-05-06 12:34:56','0','1','0','111.26.188.159','Enter your inquiry details such as product name,color,size,MOQ,FOB,etc.','Please enter a number.','1','');--
INSERT INTO `cmseasy_my_dinggou` VALUES('15','16','','0','2015-05-06 12:45:21','0','1','0','113.116.97.202','Enter your inquiry details such as product name,color,size,MOQ,FOB,etc.','Please enter a number.','1','');--





INSERT INTO `cmseasy_my_kuaisuliuyan` VALUES('1','0','','0','2014-04-23 20:46:48','0','1','0','36.48.159.41','1','2','3','4','5');--
INSERT INTO `cmseasy_my_kuaisuliuyan` VALUES('2','0','','0','2014-04-23 20:49:38','0','1','0','36.48.159.41','1','2','3','4','5');--
INSERT INTO `cmseasy_my_kuaisuliuyan` VALUES('3','0','','0','2014-04-23 20:56:03','0','1','0','36.48.159.41','1','2','3','4','5');--
INSERT INTO `cmseasy_my_kuaisuliuyan` VALUES('4','0','','0','2014-04-23 21:01:11','0','1','0','36.48.159.41','','','sfgs','sfg','');--
INSERT INTO `cmseasy_my_kuaisuliuyan` VALUES('5','0','','0','2014-04-23 21:04:02','0','1','0','36.48.159.41','2','2','3','4','5');--
INSERT INTO `cmseasy_my_kuaisuliuyan` VALUES('6','0','','0','2014-04-23 21:07:29','0','1','0','61.171.11.134','基本面','茜甘','asdfs@22.cn','021-2322','safasa');--
INSERT INTO `cmseasy_my_kuaisuliuyan` VALUES('7','0','','0','2014-06-25 00:44:22','0','1','0','180.157.54.73','','','','','');--
INSERT INTO `cmseasy_my_kuaisuliuyan` VALUES('8','0','','0','2014-06-25 00:45:12','0','1','0','180.157.54.73','','','','','');--
INSERT INTO `cmseasy_my_kuaisuliuyan` VALUES('9','0','','0','2014-06-30 16:35:04','0','1','0','116.226.78.225','王先生','火速','admin@feter.cn','13482881534','测试留言');--









INSERT INTO `cmseasy_my_yingpin` VALUES('1','0','','0','2011-11-11 16:11:04','0','1','0','127.0.0.1','a','1','a','a','a','a','a','1','a','a','0000-00-00 00:00:00','a','1','','a','a','a','a','a','a','a','a','a');--
INSERT INTO `cmseasy_my_yingpin` VALUES('2','0','','0','2011-11-11 16:11:13','0','1','0','127.0.0.1','a','1','a','a','a','a','a','1','a','a','0000-00-00 00:00:00','a','1','3','a','a','a','a','a','a','a','a','a');--
INSERT INTO `cmseasy_my_yingpin` VALUES('3','0','','0','2011-11-11 16:11:49','0','1','0','127.0.0.1','a','1','a','a','a','a','a','1','a','a','0000-00-00 00:00:00','a','1','3','a','a','a','a','a','a','a','a','a');--
INSERT INTO `cmseasy_my_yingpin` VALUES('4','0','','0','2011-11-11 16:12:12','0','1','0','127.0.0.1','a','1','a','a','a','a','a','1','a','a','0000-00-00 00:00:00','a','1','3','a','a','a','a','a','a','a','a','a');--
INSERT INTO `cmseasy_my_yingpin` VALUES('5','0','','0','2011-11-11 16:12:41','0','1','0','127.0.0.1','a','1','a','a','a','a','a','1','a','a','0000-00-00 00:00:00','a','1','1','a','a','a','a','a','a','a','a','a');--
INSERT INTO `cmseasy_my_yingpin` VALUES('6','0','','0','2011-11-11 16:13:47','0','1','0','127.0.0.1','a','1','a','a','a','a','a','1','a','a','2011-11-11 00:00:00','a','1','1','a','a','a','a','a','a','a','a','a');--
INSERT INTO `cmseasy_my_yingpin` VALUES('7','0','','0','2011-11-11 16:15:05','0','1','0','127.0.0.1','a','1','a','a','a','a','a','1','a','a','2011-11-11 00:00:00','a','1','1','a','a','a','a','a','a','a','a','a');--
INSERT INTO `cmseasy_my_yingpin` VALUES('8','0','','0','2011-11-12 11:33:07','0','1','0','127.0.0.1','a','1','a','a','a','a','a','1','a','a','0000-00-00 00:00:00','a','1','1','a','a','a','a','a','a','a','a','a');--








INSERT INTO `cmseasy_operators` VALUES('1','admin','21232f297a57a5a743894a0e4a801fc3','CmsEasyLive','CElive','admin@cmseasy.cn','0','0','0');--

INSERT INTO `cmseasy_option` VALUES('1','1','增强用户体验','1','0');--
INSERT INTO `cmseasy_option` VALUES('2','1','结构更加合理','1','0');--
INSERT INTO `cmseasy_option` VALUES('3','1','新产品新思路的融入','1','0');--
INSERT INTO `cmseasy_option` VALUES('4','1','解觉存在的BUG','0','0');--
INSERT INTO `cmseasy_option` VALUES('5','1','增加网民新鲜感','0','0');--






INSERT INTO `cmseasy_sessionox` VALUES('u5nip9i0tf4nc9hokv7uflmlq2','1450689524','127.0.0.1','gtserver|i:1;verify|N;roles|a:174:{s:6:\"config\";s:1:\"1\";s:10:\"sitesystem\";s:1:\"1\";s:6:\"system\";s:1:\"1\";s:8:\"language\";s:1:\"1\";s:15:\"setting_archive\";s:1:\"1\";s:3:\"sms\";s:1:\"1\";s:7:\"website\";s:1:\"1\";s:12:\"website_list\";s:1:\"1\";s:11:\"website_add\";s:1:\"1\";s:12:\"website_edit\";s:1:\"1\";s:11:\"website_del\";s:1:\"1\";s:7:\"content\";s:1:\"1\";s:8:\"category\";s:1:\"1\";s:13:\"category_list\";s:1:\"1\";s:12:\"category_add\";s:1:\"1\";s:13:\"category_edit\";s:1:\"1\";s:12:\"category_del\";s:1:\"1\";s:17:\"category_htmlrule\";s:1:\"1\";s:7:\"archive\";s:1:\"1\";s:12:\"archive_list\";s:1:\"1\";s:11:\"archive_add\";s:1:\"1\";s:12:\"archive_edit\";s:1:\"1\";s:11:\"archive_del\";s:1:\"1\";s:13:\"archive_check\";s:1:\"1\";s:15:\"archive_setting\";s:1:\"1\";s:17:\"archive_hotsearch\";s:1:\"1\";s:13:\"archive_image\";s:1:\"1\";s:5:\"mtype\";s:1:\"1\";s:9:\"type_list\";s:1:\"1\";s:8:\"type_add\";s:1:\"1\";s:9:\"type_edit\";s:1:\"1\";s:8:\"type_del\";s:1:\"1\";s:7:\"special\";s:1:\"1\";s:12:\"special_list\";s:1:\"1\";s:11:\"special_add\";s:1:\"1\";s:12:\"special_edit\";s:1:\"1\";s:11:\"special_del\";s:1:\"1\";s:4:\"user\";s:1:\"1\";s:11:\"user_manage\";s:1:\"1\";s:9:\"user_list\";s:1:\"1\";s:8:\"user_add\";s:1:\"1\";s:9:\"user_edit\";s:1:\"1\";s:8:\"user_del\";s:1:\"1\";s:11:\"user_ologin\";s:1:\"1\";s:10:\"user_group\";s:1:\"1\";s:14:\"usergroup_list\";s:1:\"1\";s:13:\"usergroup_add\";s:1:\"1\";s:14:\"usergroup_edit\";s:1:\"1\";s:13:\"usergroup_del\";s:1:\"1\";s:10:\"user_union\";s:1:\"1\";s:10:\"union_user\";s:1:\"1\";s:9:\"union_pay\";s:1:\"1\";s:11:\"union_visit\";s:1:\"1\";s:13:\"union_reguser\";s:1:\"1\";s:12:\"union_config\";s:1:\"1\";s:5:\"cache\";s:1:\"1\";s:12:\"cache_manage\";s:1:\"1\";s:13:\"cache_content\";s:1:\"1\";s:14:\"cache_category\";s:1:\"1\";s:11:\"cache_index\";s:1:\"1\";s:10:\"cache_type\";s:1:\"1\";s:13:\"cache_special\";s:1:\"1\";s:10:\"cache_area\";s:1:\"1\";s:9:\"cache_tag\";s:1:\"1\";s:11:\"cache_baidu\";s:1:\"1\";s:12:\"cache_google\";s:1:\"1\";s:12:\"cache_update\";s:1:\"1\";s:5:\"order\";s:1:\"1\";s:12:\"order_manage\";s:1:\"1\";s:10:\"order_list\";s:1:\"1\";s:9:\"order_del\";s:1:\"1\";s:10:\"order_edit\";s:1:\"1\";s:9:\"order_pay\";s:1:\"1\";s:15:\"order_logistics\";s:1:\"1\";s:4:\"func\";s:1:\"1\";s:12:\"func_announc\";s:1:\"1\";s:17:\"func_announc_list\";s:1:\"1\";s:16:\"func_announc_add\";s:1:\"1\";s:17:\"func_announc_edit\";s:1:\"1\";s:16:\"func_announc_del\";s:1:\"1\";s:9:\"func_book\";s:1:\"1\";s:14:\"func_book_list\";s:1:\"1\";s:15:\"func_book_reply\";s:1:\"1\";s:13:\"func_book_del\";s:1:\"1\";s:16:\"func_book_pllist\";s:1:\"1\";s:16:\"func_book_pledit\";s:1:\"1\";s:15:\"func_book_pldel\";s:1:\"1\";s:11:\"func_ballot\";s:1:\"1\";s:16:\"func_ballot_list\";s:1:\"1\";s:15:\"func_ballot_add\";s:1:\"1\";s:16:\"func_ballot_edit\";s:1:\"1\";s:15:\"func_ballot_del\";s:1:\"1\";s:9:\"func_data\";s:1:\"1\";s:15:\"func_data_baker\";s:1:\"1\";s:17:\"func_data_restore\";s:1:\"1\";s:16:\"func_data_phpweb\";s:1:\"1\";s:17:\"func_data_replace\";s:1:\"1\";s:19:\"func_data_adminlogs\";s:1:\"1\";s:14:\"func_data_safe\";s:1:\"1\";s:8:\"template\";s:1:\"1\";s:15:\"template_manage\";s:1:\"1\";s:12:\"template_set\";s:1:\"1\";s:13:\"template_note\";s:1:\"1\";s:13:\"template_edit\";s:1:\"1\";s:15:\"templatetag_add\";s:1:\"1\";s:23:\"templatetag_add_content\";s:1:\"1\";s:24:\"templatetag_add_category\";s:1:\"1\";s:22:\"templatetag_add_define\";s:1:\"1\";s:16:\"templatetag_list\";s:1:\"1\";s:25:\"templatetag_list_function\";s:1:\"1\";s:23:\"templatetag_list_system\";s:1:\"1\";s:24:\"templatetag_list_content\";s:1:\"1\";s:25:\"templatetag_list_category\";s:1:\"1\";s:23:\"templatetag_list_define\";s:1:\"1\";s:3:\"seo\";s:1:\"1\";s:10:\"seo_status\";s:1:\"1\";s:17:\"seo_status_spider\";s:1:\"1\";s:15:\"seo_status_cnzz\";s:1:\"1\";s:12:\"seo_linkword\";s:1:\"1\";s:17:\"seo_linkword_list\";s:1:\"1\";s:16:\"seo_linkword_add\";s:1:\"1\";s:17:\"seo_linkword_edit\";s:1:\"1\";s:16:\"seo_linkword_del\";s:1:\"1\";s:14:\"seo_friendlink\";s:1:\"1\";s:19:\"seo_friendlink_list\";s:1:\"1\";s:18:\"seo_friendlink_add\";s:1:\"1\";s:19:\"seo_friendlink_edit\";s:1:\"1\";s:18:\"seo_friendlink_del\";s:1:\"1\";s:22:\"seo_friendlink_setting\";s:1:\"1\";s:8:\"seo_mail\";s:1:\"1\";s:17:\"seo_mail_usersend\";s:1:\"1\";s:13:\"seo_mail_send\";s:1:\"1\";s:21:\"seo_mail_subscription\";s:1:\"1\";s:7:\"defined\";s:1:\"1\";s:13:\"defined_field\";s:1:\"1\";s:21:\"defined_field_content\";s:1:\"1\";s:25:\"defined_field_content_add\";s:1:\"1\";s:26:\"defined_field_content_edit\";s:1:\"1\";s:25:\"defined_field_content_del\";s:1:\"1\";s:18:\"defined_field_user\";s:1:\"1\";s:22:\"defined_field_user_add\";s:1:\"1\";s:23:\"defined_field_user_edit\";s:1:\"1\";s:22:\"defined_field_user_del\";s:1:\"1\";s:12:\"defined_form\";s:1:\"1\";s:17:\"defined_form_list\";s:1:\"1\";s:16:\"defined_form_add\";s:1:\"1\";s:17:\"defined_form_edit\";s:1:\"1\";s:16:\"defined_form_del\";s:1:\"1\";s:6:\"celive\";s:1:\"1\";s:13:\"celive_system\";s:1:\"1\";s:14:\"celive_enlarge\";s:1:\"1\";s:17:\"celive_systeminfo\";s:1:\"1\";s:18:\"celive_departments\";s:1:\"1\";s:16:\"celive_operators\";s:1:\"1\";s:14:\"celive_assigns\";s:1:\"1\";s:13:\"celive_center\";s:1:\"1\";s:14:\"celive_monitor\";s:1:\"1\";s:15:\"celive_chatlist\";s:1:\"1\";s:11:\"celive_book\";s:1:\"1\";s:11:\"celive_user\";s:1:\"1\";s:11:\"celive_edit\";s:1:\"1\";s:11:\"celive_code\";s:1:\"1\";s:3:\"bbs\";s:1:\"1\";s:12:\"bbs_category\";s:1:\"1\";s:17:\"bbs_category_list\";s:13:\"category_list\";s:16:\"bbs_category_add\";s:12:\"category_add\";s:17:\"bbs_category_edit\";s:13:\"category_edit\";s:16:\"bbs_category_del\";s:12:\"category_del\";s:11:\"bbs_archive\";s:1:\"1\";s:16:\"bbs_archive_list\";s:1:\"1\";s:16:\"bbs_archive_edit\";s:1:\"1\";s:15:\"bbs_archive_del\";s:1:\"1\";s:17:\"bbs_archive_check\";s:1:\"1\";s:18:\"bbs_archive_batdel\";s:1:\"1\";}username|s:5:\"admin\";cel_username|s:5:\"admin\";cel_password|s:32:\"21232f297a57a5a743894a0e4a801fc3\";cel_operatorid|s:1:\"1\";cel_activeid|i:118;cel_departmentid|i:0;cel_sound|s:1:\"1\";act|s:5:\"baker\";modname|s:6:\"功能\";table|s:12:\"announcement\";actname|s:15:\"备份数据库\";mod|s:4:\"func\";');--


INSERT INTO `cmseasy_settings` VALUES('1','','table-archive','a:1:{s:5:\"attr1\";s:97:\"(0)无\r\n(1)推荐位一\r\n(2)推荐位二\r\n(3)推荐位三\r\n(4)推荐位四\r\n(5)推荐位五\";}','array (\n  \'attr1\' => \'(0)无\r\n(1)推荐位一\r\n(2)推荐位二\r\n(3)推荐位三\r\n(4)推荐位四\r\n(5)推荐位五\',\n)');--
INSERT INTO `cmseasy_settings` VALUES('60','','table-fieldset','a:4:{s:7:\"archive\";a:13:{s:7:\"my_size\";a:9:{s:4:\"name\";s:7:\"my_size\";s:5:\"cname\";s:12:\"文档大小\";s:4:\"tips\";s:0:\"\";s:5:\"catid\";s:1:\"6\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:15:\"my_zhaopinbumen\";a:9:{s:4:\"name\";s:15:\"my_zhaopinbumen\";s:5:\"cname\";s:12:\"招聘部门\";s:4:\"tips\";s:0:\"\";s:5:\"catid\";s:1:\"7\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:10:\"my_jobtype\";a:9:{s:4:\"name\";s:10:\"my_jobtype\";s:5:\"cname\";s:12:\"职位类型\";s:4:\"tips\";s:0:\"\";s:5:\"catid\";s:1:\"7\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";i:10;s:10:\"selecttype\";s:6:\"select\";s:6:\"select\";s:20:\"(1)全职\r\n(2)兼职\";s:8:\"filetype\";N;}s:11:\"my_jobtitle\";a:9:{s:4:\"name\";s:11:\"my_jobtitle\";s:5:\"cname\";s:12:\"职称要求\";s:4:\"tips\";s:0:\"\";s:5:\"catid\";s:1:\"7\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:12:\"my_jobnumber\";a:9:{s:4:\"name\";s:12:\"my_jobnumber\";s:5:\"cname\";s:12:\"招聘人数\";s:4:\"tips\";s:0:\"\";s:5:\"catid\";s:1:\"7\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:12:\"my_jobgender\";a:9:{s:4:\"name\";s:12:\"my_jobgender\";s:5:\"cname\";s:12:\"性别要求\";s:4:\"tips\";s:0:\"\";s:5:\"catid\";s:1:\"7\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";i:10;s:10:\"selecttype\";s:5:\"radio\";s:6:\"select\";s:25:\"(1)男\r\n(2)女\r\n(3)不限\";s:8:\"filetype\";N;}s:10:\"my_jobwork\";a:9:{s:4:\"name\";s:10:\"my_jobwork\";s:5:\"cname\";s:18:\"工作经验要求\";s:4:\"tips\";s:0:\"\";s:5:\"catid\";s:1:\"7\";s:4:\"type\";s:4:\"text\";s:3:\"len\";i:0;s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:14:\"my_jobacademic\";a:9:{s:4:\"name\";s:14:\"my_jobacademic\";s:5:\"cname\";s:12:\"学历要求\";s:4:\"tips\";s:0:\"\";s:5:\"catid\";s:1:\"7\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";i:10;s:10:\"selecttype\";s:6:\"select\";s:6:\"select\";s:86:\"(1)初中以上\r\n(2)高中以上\r\n(3)专科以上\r\n(4)大专以上\r\n(5)研究生以上\";s:8:\"filetype\";N;}s:9:\"my_jobage\";a:9:{s:4:\"name\";s:9:\"my_jobage\";s:5:\"cname\";s:12:\"年龄要求\";s:4:\"tips\";s:0:\"\";s:5:\"catid\";s:1:\"7\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:15:\"my_jobworkareas\";a:9:{s:4:\"name\";s:15:\"my_jobworkareas\";s:5:\"cname\";s:12:\"工作地区\";s:4:\"tips\";s:0:\"\";s:5:\"catid\";s:1:\"7\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:18:\"my_jobrequirements\";a:9:{s:4:\"name\";s:18:\"my_jobrequirements\";s:5:\"cname\";s:15:\"要求与待遇\";s:4:\"tips\";s:0:\"\";s:5:\"catid\";s:1:\"7\";s:4:\"type\";s:4:\"text\";s:3:\"len\";i:0;s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:14:\"my_contactname\";a:9:{s:4:\"name\";s:14:\"my_contactname\";s:5:\"cname\";s:15:\"联系人姓名\";s:4:\"tips\";s:0:\"\";s:5:\"catid\";s:1:\"7\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:17:\"my_tonghangbijiao\";a:9:{s:4:\"name\";s:17:\"my_tonghangbijiao\";s:5:\"cname\";s:12:\"同行比较\";s:4:\"tips\";s:0:\"\";s:5:\"catid\";s:2:\"20\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}}s:10:\"my_yingpin\";a:24:{s:6:\"myform\";a:3:{s:5:\"cname\";s:6:\"应聘\";s:4:\"name\";s:10:\"my_yingpin\";s:8:\"template\";s:18:\"myform/myform.html\";}s:11:\"my_xingming\";a:10:{s:4:\"name\";s:11:\"my_xingming\";s:5:\"cname\";s:6:\"姓名\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;s:8:\"issearch\";i:0;s:9:\"isnotnull\";i:0;}s:10:\"my_xingbie\";a:10:{s:4:\"name\";s:10:\"my_xingbie\";s:5:\"cname\";s:6:\"性别\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";i:10;s:10:\"selecttype\";s:6:\"select\";s:6:\"select\";s:14:\"(1)男\r\n(2)女\";s:8:\"filetype\";N;s:8:\"issearch\";i:0;s:9:\"isnotnull\";i:0;}s:12:\"my_nianliang\";a:10:{s:4:\"name\";s:12:\"my_nianliang\";s:5:\"cname\";s:6:\"年龄\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;s:8:\"issearch\";i:0;s:9:\"isnotnull\";i:0;}s:8:\"my_minzu\";a:10:{s:4:\"name\";s:8:\"my_minzu\";s:5:\"cname\";s:6:\"民族\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;s:8:\"issearch\";i:0;s:9:\"isnotnull\";i:0;}s:10:\"my_shengao\";a:10:{s:4:\"name\";s:10:\"my_shengao\";s:5:\"cname\";s:6:\"身高\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;s:8:\"issearch\";i:0;s:9:\"isnotnull\";i:0;}s:15:\"my_shenfenzheng\";a:8:{s:4:\"name\";s:15:\"my_shenfenzheng\";s:5:\"cname\";s:12:\"身份证号\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:9:\"my_jiguan\";a:10:{s:4:\"name\";s:9:\"my_jiguan\";s:5:\"cname\";s:6:\"籍贯\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;s:8:\"issearch\";i:0;s:9:\"isnotnull\";i:0;}s:8:\"my_xueli\";a:10:{s:4:\"name\";s:8:\"my_xueli\";s:5:\"cname\";s:6:\"学历\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";i:10;s:10:\"selecttype\";s:6:\"select\";s:6:\"select\";s:62:\"(1)初中\r\n(2)高中\r\n(3)专科\r\n(4)大专\r\n(5)研究生以上\";s:8:\"filetype\";N;s:8:\"issearch\";i:0;s:9:\"isnotnull\";i:0;}s:14:\"my_zanzhudizhi\";a:8:{s:4:\"name\";s:14:\"my_zanzhudizhi\";s:5:\"cname\";s:12:\"暂住地址\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:10:\"my_zhuanye\";a:10:{s:4:\"name\";s:10:\"my_zhuanye\";s:5:\"cname\";s:6:\"专业\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;s:8:\"issearch\";i:0;s:9:\"isnotnull\";i:0;}s:14:\"my_biyeshijian\";a:8:{s:4:\"name\";s:14:\"my_biyeshijian\";s:5:\"cname\";s:12:\"毕业时间\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:8:\"datetime\";s:3:\"len\";i:0;s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:15:\"my_biyeyuanxiao\";a:8:{s:4:\"name\";s:15:\"my_biyeyuanxiao\";s:5:\"cname\";s:12:\"毕业院校\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:13:\"my_waiyujibie\";a:8:{s:4:\"name\";s:13:\"my_waiyujibie\";s:5:\"cname\";s:12:\"外语水平\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";i:10;s:10:\"selecttype\";s:6:\"select\";s:6:\"select\";s:69:\"(1)三级\r\n(2)四级\r\n(3)六级\r\n(4)专业四级\r\n(5)专业八级\r\n\r\n\";s:8:\"filetype\";N;}s:11:\"my_jisuanji\";a:10:{s:4:\"name\";s:11:\"my_jisuanji\";s:5:\"cname\";s:15:\"计算机能力\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";i:10;s:10:\"selecttype\";s:6:\"select\";s:6:\"select\";s:52:\"(1)差\r\n(2)一般\r\n(3)良好\r\n(4)很好\r\n(5)精通  \";s:8:\"filetype\";N;s:8:\"issearch\";i:0;s:9:\"isnotnull\";i:0;}s:17:\"my_zhuanyetechang\";a:8:{s:4:\"name\";s:17:\"my_zhuanyetechang\";s:5:\"cname\";s:12:\"专业特长\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:11:\"my_zhicheng\";a:10:{s:4:\"name\";s:11:\"my_zhicheng\";s:5:\"cname\";s:6:\"职称\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;s:8:\"issearch\";i:0;s:9:\"isnotnull\";i:0;}s:8:\"my_daiyu\";a:8:{s:4:\"name\";s:8:\"my_daiyu\";s:5:\"cname\";s:12:\"待遇要求\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:3:\"len\";i:0;s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:16:\"my_lianxidianhua\";a:8:{s:4:\"name\";s:16:\"my_lianxidianhua\";s:5:\"cname\";s:12:\"联系电话\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:9:\"my_shouji\";a:10:{s:4:\"name\";s:9:\"my_shouji\";s:5:\"cname\";s:6:\"手机\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;s:8:\"issearch\";i:0;s:9:\"isnotnull\";i:0;}s:8:\"my_email\";a:8:{s:4:\"name\";s:8:\"my_email\";s:5:\"cname\";s:12:\"电子邮箱\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:14:\"my_xuexijingli\";a:8:{s:4:\"name\";s:14:\"my_xuexijingli\";s:5:\"cname\";s:12:\"学习经历\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:3:\"len\";i:0;s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:16:\"my_gongzuojingli\";a:8:{s:4:\"name\";s:16:\"my_gongzuojingli\";s:5:\"cname\";s:12:\"工作经历\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:3:\"len\";i:0;s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:14:\"my_gerenjianli\";a:8:{s:4:\"name\";s:14:\"my_gerenjianli\";s:5:\"cname\";s:12:\"个人简历\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:3:\"len\";i:0;s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}}s:4:\"my_a\";a:2:{s:6:\"myform\";a:3:{s:5:\"cname\";s:2:\"aa\";s:4:\"name\";s:4:\"my_a\";s:8:\"template\";s:18:\"myform/myform.html\";}s:6:\"my_aaa\";a:8:{s:4:\"name\";s:6:\"my_aaa\";s:5:\"cname\";s:1:\"a\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}}s:9:\"my_liuyan\";a:5:{s:6:\"myform\";a:3:{s:5:\"cname\";s:6:\"留言\";s:4:\"name\";s:9:\"my_liuyan\";s:8:\"template\";s:19:\"myform/myform2.html\";}s:11:\"my_xingming\";a:10:{s:4:\"name\";s:11:\"my_xingming\";s:5:\"cname\";s:12:\"您的姓名\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;s:8:\"issearch\";i:0;s:9:\"isnotnull\";i:0;}s:14:\"my_shoujihaoma\";a:8:{s:4:\"name\";s:14:\"my_shoujihaoma\";s:5:\"cname\";s:12:\"手机号码\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:3:\"int\";s:3:\"len\";i:11;s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:16:\"my_youxiangdizhi\";a:8:{s:4:\"name\";s:16:\"my_youxiangdizhi\";s:5:\"cname\";s:12:\"邮箱地址\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:3:\"len\";s:3:\"100\";s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}s:16:\"my_liuyanneirong\";a:8:{s:4:\"name\";s:16:\"my_liuyanneirong\";s:5:\"cname\";s:12:\"留言内容\";s:4:\"tips\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:3:\"len\";i:0;s:10:\"selecttype\";s:1:\"0\";s:6:\"select\";s:0:\"\";s:8:\"filetype\";N;}}}','array (\n  \'archive\' => \n  array (\n    \'my_size\' => \n    array (\n      \'name\' => \'my_size\',\n      \'cname\' => \'文档大小\',\n      \'tips\' => \'\',\n      \'catid\' => \'6\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_zhaopinbumen\' => \n    array (\n      \'name\' => \'my_zhaopinbumen\',\n      \'cname\' => \'招聘部门\',\n      \'tips\' => \'\',\n      \'catid\' => \'7\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_jobtype\' => \n    array (\n      \'name\' => \'my_jobtype\',\n      \'cname\' => \'职位类型\',\n      \'tips\' => \'\',\n      \'catid\' => \'7\',\n      \'type\' => \'varchar\',\n      \'len\' => 10,\n      \'selecttype\' => \'select\',\n      \'select\' => \'(1)全职\r\n(2)兼职\',\n      \'filetype\' => NULL,\n    ),\n    \'my_jobtitle\' => \n    array (\n      \'name\' => \'my_jobtitle\',\n      \'cname\' => \'职称要求\',\n      \'tips\' => \'\',\n      \'catid\' => \'7\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_jobnumber\' => \n    array (\n      \'name\' => \'my_jobnumber\',\n      \'cname\' => \'招聘人数\',\n      \'tips\' => \'\',\n      \'catid\' => \'7\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_jobgender\' => \n    array (\n      \'name\' => \'my_jobgender\',\n      \'cname\' => \'性别要求\',\n      \'tips\' => \'\',\n      \'catid\' => \'7\',\n      \'type\' => \'varchar\',\n      \'len\' => 10,\n      \'selecttype\' => \'radio\',\n      \'select\' => \'(1)男\r\n(2)女\r\n(3)不限\',\n      \'filetype\' => NULL,\n    ),\n    \'my_jobwork\' => \n    array (\n      \'name\' => \'my_jobwork\',\n      \'cname\' => \'工作经验要求\',\n      \'tips\' => \'\',\n      \'catid\' => \'7\',\n      \'type\' => \'text\',\n      \'len\' => 0,\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_jobacademic\' => \n    array (\n      \'name\' => \'my_jobacademic\',\n      \'cname\' => \'学历要求\',\n      \'tips\' => \'\',\n      \'catid\' => \'7\',\n      \'type\' => \'varchar\',\n      \'len\' => 10,\n      \'selecttype\' => \'select\',\n      \'select\' => \'(1)初中以上\r\n(2)高中以上\r\n(3)专科以上\r\n(4)大专以上\r\n(5)研究生以上\',\n      \'filetype\' => NULL,\n    ),\n    \'my_jobage\' => \n    array (\n      \'name\' => \'my_jobage\',\n      \'cname\' => \'年龄要求\',\n      \'tips\' => \'\',\n      \'catid\' => \'7\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_jobworkareas\' => \n    array (\n      \'name\' => \'my_jobworkareas\',\n      \'cname\' => \'工作地区\',\n      \'tips\' => \'\',\n      \'catid\' => \'7\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_jobrequirements\' => \n    array (\n      \'name\' => \'my_jobrequirements\',\n      \'cname\' => \'要求与待遇\',\n      \'tips\' => \'\',\n      \'catid\' => \'7\',\n      \'type\' => \'text\',\n      \'len\' => 0,\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_contactname\' => \n    array (\n      \'name\' => \'my_contactname\',\n      \'cname\' => \'联系人姓名\',\n      \'tips\' => \'\',\n      \'catid\' => \'7\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_tonghangbijiao\' => \n    array (\n      \'name\' => \'my_tonghangbijiao\',\n      \'cname\' => \'同行比较\',\n      \'tips\' => \'\',\n      \'catid\' => \'20\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n  ),\n  \'my_yingpin\' => \n  array (\n    \'myform\' => \n    array (\n      \'cname\' => \'应聘\',\n      \'name\' => \'my_yingpin\',\n      \'template\' => \'myform/myform.html\',\n    ),\n    \'my_xingming\' => \n    array (\n      \'name\' => \'my_xingming\',\n      \'cname\' => \'姓名\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n      \'issearch\' => 0,\n      \'isnotnull\' => 0,\n    ),\n    \'my_xingbie\' => \n    array (\n      \'name\' => \'my_xingbie\',\n      \'cname\' => \'性别\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => 10,\n      \'selecttype\' => \'select\',\n      \'select\' => \'(1)男\r\n(2)女\',\n      \'filetype\' => NULL,\n      \'issearch\' => 0,\n      \'isnotnull\' => 0,\n    ),\n    \'my_nianliang\' => \n    array (\n      \'name\' => \'my_nianliang\',\n      \'cname\' => \'年龄\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n      \'issearch\' => 0,\n      \'isnotnull\' => 0,\n    ),\n    \'my_minzu\' => \n    array (\n      \'name\' => \'my_minzu\',\n      \'cname\' => \'民族\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n      \'issearch\' => 0,\n      \'isnotnull\' => 0,\n    ),\n    \'my_shengao\' => \n    array (\n      \'name\' => \'my_shengao\',\n      \'cname\' => \'身高\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n      \'issearch\' => 0,\n      \'isnotnull\' => 0,\n    ),\n    \'my_shenfenzheng\' => \n    array (\n      \'name\' => \'my_shenfenzheng\',\n      \'cname\' => \'身份证号\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_jiguan\' => \n    array (\n      \'name\' => \'my_jiguan\',\n      \'cname\' => \'籍贯\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n      \'issearch\' => 0,\n      \'isnotnull\' => 0,\n    ),\n    \'my_xueli\' => \n    array (\n      \'name\' => \'my_xueli\',\n      \'cname\' => \'学历\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => 10,\n      \'selecttype\' => \'select\',\n      \'select\' => \'(1)初中\r\n(2)高中\r\n(3)专科\r\n(4)大专\r\n(5)研究生以上\',\n      \'filetype\' => NULL,\n      \'issearch\' => 0,\n      \'isnotnull\' => 0,\n    ),\n    \'my_zanzhudizhi\' => \n    array (\n      \'name\' => \'my_zanzhudizhi\',\n      \'cname\' => \'暂住地址\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_zhuanye\' => \n    array (\n      \'name\' => \'my_zhuanye\',\n      \'cname\' => \'专业\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n      \'issearch\' => 0,\n      \'isnotnull\' => 0,\n    ),\n    \'my_biyeshijian\' => \n    array (\n      \'name\' => \'my_biyeshijian\',\n      \'cname\' => \'毕业时间\',\n      \'tips\' => \'\',\n      \'type\' => \'datetime\',\n      \'len\' => 0,\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_biyeyuanxiao\' => \n    array (\n      \'name\' => \'my_biyeyuanxiao\',\n      \'cname\' => \'毕业院校\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_waiyujibie\' => \n    array (\n      \'name\' => \'my_waiyujibie\',\n      \'cname\' => \'外语水平\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => 10,\n      \'selecttype\' => \'select\',\n      \'select\' => \'(1)三级\r\n(2)四级\r\n(3)六级\r\n(4)专业四级\r\n(5)专业八级\r\n\r\n\',\n      \'filetype\' => NULL,\n    ),\n    \'my_jisuanji\' => \n    array (\n      \'name\' => \'my_jisuanji\',\n      \'cname\' => \'计算机能力\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => 10,\n      \'selecttype\' => \'select\',\n      \'select\' => \'(1)差\r\n(2)一般\r\n(3)良好\r\n(4)很好\r\n(5)精通  \',\n      \'filetype\' => NULL,\n      \'issearch\' => 0,\n      \'isnotnull\' => 0,\n    ),\n    \'my_zhuanyetechang\' => \n    array (\n      \'name\' => \'my_zhuanyetechang\',\n      \'cname\' => \'专业特长\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_zhicheng\' => \n    array (\n      \'name\' => \'my_zhicheng\',\n      \'cname\' => \'职称\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n      \'issearch\' => 0,\n      \'isnotnull\' => 0,\n    ),\n    \'my_daiyu\' => \n    array (\n      \'name\' => \'my_daiyu\',\n      \'cname\' => \'待遇要求\',\n      \'tips\' => \'\',\n      \'type\' => \'text\',\n      \'len\' => 0,\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_lianxidianhua\' => \n    array (\n      \'name\' => \'my_lianxidianhua\',\n      \'cname\' => \'联系电话\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_shouji\' => \n    array (\n      \'name\' => \'my_shouji\',\n      \'cname\' => \'手机\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n      \'issearch\' => 0,\n      \'isnotnull\' => 0,\n    ),\n    \'my_email\' => \n    array (\n      \'name\' => \'my_email\',\n      \'cname\' => \'电子邮箱\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_xuexijingli\' => \n    array (\n      \'name\' => \'my_xuexijingli\',\n      \'cname\' => \'学习经历\',\n      \'tips\' => \'\',\n      \'type\' => \'text\',\n      \'len\' => 0,\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_gongzuojingli\' => \n    array (\n      \'name\' => \'my_gongzuojingli\',\n      \'cname\' => \'工作经历\',\n      \'tips\' => \'\',\n      \'type\' => \'text\',\n      \'len\' => 0,\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_gerenjianli\' => \n    array (\n      \'name\' => \'my_gerenjianli\',\n      \'cname\' => \'个人简历\',\n      \'tips\' => \'\',\n      \'type\' => \'text\',\n      \'len\' => 0,\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n  ),\n  \'my_a\' => \n  array (\n    \'myform\' => \n    array (\n      \'cname\' => \'aa\',\n      \'name\' => \'my_a\',\n      \'template\' => \'myform/myform.html\',\n    ),\n    \'my_aaa\' => \n    array (\n      \'name\' => \'my_aaa\',\n      \'cname\' => \'a\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n  ),\n  \'my_liuyan\' => \n  array (\n    \'myform\' => \n    array (\n      \'cname\' => \'留言\',\n      \'name\' => \'my_liuyan\',\n      \'template\' => \'myform/myform2.html\',\n    ),\n    \'my_xingming\' => \n    array (\n      \'name\' => \'my_xingming\',\n      \'cname\' => \'您的姓名\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n      \'issearch\' => 0,\n      \'isnotnull\' => 0,\n    ),\n    \'my_shoujihaoma\' => \n    array (\n      \'name\' => \'my_shoujihaoma\',\n      \'cname\' => \'手机号码\',\n      \'tips\' => \'\',\n      \'type\' => \'int\',\n      \'len\' => 11,\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_youxiangdizhi\' => \n    array (\n      \'name\' => \'my_youxiangdizhi\',\n      \'cname\' => \'邮箱地址\',\n      \'tips\' => \'\',\n      \'type\' => \'varchar\',\n      \'len\' => \'100\',\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n    \'my_liuyanneirong\' => \n    array (\n      \'name\' => \'my_liuyanneirong\',\n      \'cname\' => \'留言内容\',\n      \'tips\' => \'\',\n      \'type\' => \'text\',\n      \'len\' => 0,\n      \'selecttype\' => \'0\',\n      \'select\' => \'\',\n      \'filetype\' => NULL,\n    ),\n  ),\n)');--
INSERT INTO `cmseasy_settings` VALUES('61','','table-hottag','','');--


INSERT INTO `cmseasy_templatetag` VALUES('1','根目录','all','','{$base_url}','','','system','');--
INSERT INTO `cmseasy_templatetag` VALUES('2','Skin目录','all','','{$skin_url}','','','system','');--
INSERT INTO `cmseasy_templatetag` VALUES('3','网站当前位置','article','','<a href=\"{$base_url}/\">{get(\'sitename\')}</a> >>\r\n{loop position($catid) $t}\r\n<a href=\"{$t.url}\">{$t[\'name\']} </a>>\r\n{/loop}','$catid=','参数: $catid','system','');--
INSERT INTO `cmseasy_templatetag` VALUES('4','栏目列表','all','','{loop categories($catid) $cat}\r\n<a href=\"{$cat[url]}\">{$cat[catname]}</a>\r\n{/loop}','$catid=','参数: $catid','system','');--
INSERT INTO `cmseasy_templatetag` VALUES('5','首页链接','all','','<a href=\"{$base_url}/\">首页</a>','','','system','');--
INSERT INTO `cmseasy_templatetag` VALUES('6','取得下级栏目','all','','categories($catid)','','参数: $catid\r\n取得一级栏目： categories()\r\n取得ID为8的栏目的下级栏目: categories(8)\r\n取得当前栏目的下级栏目: categories($catid)','function','');--
INSERT INTO `cmseasy_templatetag` VALUES('7','取得栏目url','all','','caturl($catid)','','参数: $catid\r\n取得栏目url','function','');--
INSERT INTO `cmseasy_templatetag` VALUES('8','栏目链接','all','','<a href=\"{caturl($catid)}\">{catname($catid)}</a>','$catid=','参数: $catid','system','');--
INSERT INTO `cmseasy_templatetag` VALUES('9','导航栏','all','','<ul style=\"width:980px\">\r\n{loop categories() $t}\r\n	<li style=\"float:left;display:inline;width:120px\">\r\n	<a href=\"{$t[url]}\" {if isset($topid) && $topid==$t[catid]}class=\"current\"{/if}>{$t[catname]}</a>\r\n	<!--loop一级目录-->\r\n	{loop categories($t) $t1}\r\n		<ul style=\"float:left;display:inline;width:100px\">\r\n		<a href=\"{$t1[url]}\" {if isset($catid) && $typeid==$t1[catid]}class=\"current\"{/if}>{$t1[catname]}</a>\r\n		<!--loop二级目录...-->\r\n		{loop categories($t1) $t2}\r\n			<ul style=\"float:left;display:inline;width:80px\"><a href=\"{$t2[url]}\" {if isset($catid) && $catid==$t2[catid]}class=\"current\"{/if}>{$t2[catname]}</a>\r\n			<!--loop三级目录...-->\r\n			{loop categories($t2) $t3}\r\n				<ul style=\"float:left;display:inline;width:60px\"><a href=\"{$t3[url]}\" {if isset($catid) && $catid==$t3[catid]}class=\"current\"{/if}>{$t3[catname]}</a></ul>\r\n			{/loop}\r\n			</ul>\r\n		{/loop}\r\n		</ul>\r\n	{/loop}\r\n	</li>\r\n{/loop}\r\n</ul>\r\n','','导航栏示范','system','');--
INSERT INTO `cmseasy_templatetag` VALUES('10','用户信息','','','{if isset($user) && is_array($user)}\r\n欢迎你， {$user.username}!<br>\r\n<a href=\"{url(\'user/logout\')}\">退出</a>\r\n | <a href=\"{url(\'user\')}\" target=\"_blank\">会员中心</a>\r\n{if $user[\'username\']==\'admin\'}\r\n | <a href=\"{$base_url}/admin\" target=\"_blank\">后台管理</a>\r\n{/if}\r\n<?php }else{ ?>\r\n\r\n<form id=\"login_form\"   name=\"loginform\" method=\"post\"  action=\"{url(\'user/login\')}\" onsubmit=\"return checkform();--\">\r\n用户名：<input type=\'text\' id=\"username\"  name=\"username\" size=\"16\"/><br>\r\n密  码：<input type=\'password\' id=\"password\"  name=\"password\" size=\"17\"/><br>\r\n验证码：<input type=\'text\' id=\"verify\"  name=\"verify\" size=\"4\"/>\r\n{verify()}<br>\r\n有效期: <select name=\"expire\">\r\n<option value=\"<?php echo 3600; ?>\">一小时</option>\r\n<option value=\"<?php echo 3600*24; ?>\">一天</option>\r\n<option value=\"<?php echo 3600*24*7; ?>\">一星期</option>\r\n<option value=\"<?php echo 3600*24*30; ?>\">一个月</option>\r\n<option value=\"<?php echo 3600*24*365; ?>\">一年</option>\r\n</select><br>\r\n<input type=\'submit\' name=\"submit\" value=\"登陆\" style=\"margin-left:30px\"/>\r\n<input type=\'button\' name=\"register\" value=\"注册\" onclick=\"javascript:location.href=\'{url(\'user/register\')}\'\"  style=\"margin-left:10px\">\r\n</form>\r\n{/if}','','一般用JS调用','system','');--
INSERT INTO `cmseasy_templatetag` VALUES('11','ICP备案号','','','{get(\'site_icp\')}','','','define','');--
INSERT INTO `cmseasy_templatetag` VALUES('12','首页关键词','','','{get(\'site_keyword\')}','','','define','');--
INSERT INTO `cmseasy_templatetag` VALUES('13','首页网页描述','','','{get(\'site_description\')}','','','define','');--
INSERT INTO `cmseasy_templatetag` VALUES('14','版权所有','','','{get(\'site_right\')}','','','define','');--
INSERT INTO `cmseasy_templatetag` VALUES('15','调用模板','all','','template($tpl)','','在当前模板中调用其他模板。变量值基于模板根目录。\r\n\r\n例子：\r\n\r\n{template(\'mypage/about.html\')}','function','');--
INSERT INTO `cmseasy_templatetag` VALUES('16','公司简介','','','CmsEasy是一款基于 PHP+Mysql 架构的网站内容管理系统，也是一个 PHP 开发平台。 采用模块化方式开发，功能易用便于扩展，可面向大中型站点提供重量级网站建设解决方案。2年来，凭借 团队长期积累的丰富的Web开发及数据库经验和勇于创新追求完美的设计理念，使得 CmsEasy v1.0 得到了众多网站的认可，并且越来越多地被应用到大中型商业网站。','','','define','');--
INSERT INTO `cmseasy_templatetag` VALUES('17','公告列表','announ','','{loop announ($num) $an}\r\n <a href=\"{$an[url]}\"> {$an[title]} </a> ({$an[adddate]}) \r\n{/loop}','','','system','');--

INSERT INTO `cmseasy_type` VALUES('1','0','高端商品','','0','','','','','','gaoduan','0','0','','','','','article','1','0','0','1','1','0','','','','','','0','0');--
INSERT INTO `cmseasy_type` VALUES('2','0','促销商品','','0','','','','','','cuxiao','0','0','','','','','article','1','0','0','1','1','0','','','','','','0','0');--




INSERT INTO `cmseasy_webscan360` VALUES('175','log_verify','{\"infocode\":\"300\",\"msg\":\"white!\",\"httpcode\":\"200\"}','','','0');--
INSERT INTO `cmseasy_webscan360` VALUES('176','log_verify','{\"infocode\":\"300\",\"msg\":\"white!\",\"httpcode\":\"200\"}','','','0');--
INSERT INTO `cmseasy_webscan360` VALUES('177','log_verify','{\"infocode\":\"300\",\"msg\":\"white!\",\"httpcode\":\"200\"}','','','0');--


DROP TABLE IF EXISTS `cmseasy_invite`;--
CREATE TABLE `cmseasy_invite` (
  `inviteid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `invitecode` varchar(255) DEFAULT NULL,
  `ctuid` int(11) unsigned DEFAULT NULL,
  `ctname` varchar(255) DEFAULT NULL,
  `reguid` int(11) DEFAULT NULL,
  `cttime` datetime DEFAULT NULL,
  `regtime` datetime DEFAULT NULL,
  `isuse` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`inviteid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;--

DROP TABLE IF EXISTS `cmseasy_zanlog`;--
CREATE TABLE `cmseasy_zanlog` (
  `zlid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(11) unsigned DEFAULT NULL,
  `cid` int(11) unsigned DEFAULT NULL,
  `uid` int(11) unsigned DEFAULT NULL,
  `addtime` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`zlid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;--



ALTER TABLE  `cmseasy_archive` ADD  `iscomment` tinyint( 1 ) NULL DEFAULT  '1';--
ALTER TABLE  `cmseasy_b_category` ADD  `subtitle` varchar(255) NULL DEFAULT  '' AFTER  `catname`;--
ALTER TABLE  `cmseasy_archive` ADD  `subtitle` varchar(255) NULL DEFAULT  '' AFTER  `title`;--

ALTER TABLE  `cmseasy_a_comment` ADD  `telphone` varchar( 50 ) NULL DEFAULT  '' AFTER  `content`;--
ALTER TABLE  `cmseasy_a_comment` ADD  `zannum` int( 11 ) NULL DEFAULT  '0' AFTER  `telphone`;--
ALTER TABLE  `cmseasy_a_comment` ADD  `rid` int( 11 ) NULL DEFAULT  '0' AFTER  `zannum`;--


ALTER TABLE  cmseasy_type ADD  subtitle varchar(255) NULL DEFAULT  '' AFTER  typename;--
ALTER TABLE  cmseasy_b_special ADD  subtitle varchar(255) NULL DEFAULT  '' AFTER  title;--

SET FOREIGN_KEY_CHECKS=0;--
ALTER TABLE `cmseasy_p_orders` ADD COLUMN `s_status`  tinyint(1) NOT NULL DEFAULT '0';--
ALTER TABLE `cmseasy_p_orders` ADD COLUMN `trade_no`  varchar(255) NOT NULL DEFAULT '';--
SET FOREIGN_KEY_CHECKS=1;--



ALTER TABLE  cmseasy_type ADD  subtitle varchar(255) NULL DEFAULT  '' AFTER  typename;--
ALTER TABLE  cmseasy_b_special ADD  subtitle varchar(255) NULL DEFAULT  '' AFTER  title;--


SET FOREIGN_KEY_CHECKS=0;--
DROP TABLE IF EXISTS cmseasy_activity;--
DROP TABLE IF EXISTS cmseasy_assigns;--
DROP TABLE IF EXISTS cmseasy_b_area;--
DROP TABLE IF EXISTS cmseasy_bbs_archive;--
DROP TABLE IF EXISTS cmseasy_bbs_category;--
DROP TABLE IF EXISTS cmseasy_bbs_label;--
DROP TABLE IF EXISTS cmseasy_bbs_reply;--
DROP TABLE IF EXISTS cmseasy_chat;--
DROP TABLE IF EXISTS cmseasy_departments;--
DROP TABLE IF EXISTS cmseasy_detail;--
DROP TABLE IF EXISTS cmseasy_operators;--
DROP TABLE IF EXISTS cmseasy_sessions;--
SET FOREIGN_KEY_CHECKS=1;--





