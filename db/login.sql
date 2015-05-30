CREATE TABLE IF NOT EXISTS `login` (
`account_id` int(11) unsigned NOT NULL auto_increment,
  `userid` varchar(23) NOT NULL default '',
  `user_pass` varchar(32) NOT NULL default '',
  `languagem` enum('pt-br','en-us','es-us') NOT NULL default 'pt-br',
   `group_id` tinyint(3) NOT NULL default '0',
    `state` int(11) unsigned NOT NULL default '0',
	`email` varchar(39) NOT NULL default '',
	`lastlogin` datetime NOT NULL default '0000-00-00 00:00:00',
	`last_ip` varchar(100) NOT NULL default '',
	 `vip` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`account_id`),
  KEY `name` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2000000; 