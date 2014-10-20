CREATE TABLE IF NOT EXISTS `vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `achievements_id` int(11) NOT NULL,
  `up_vote` int(11) NOT NULL DEFAULT '0',
  `down_vote` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `ip` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `settings` (`title`, `description`, `category`, `type`, `settingkey`, `default_value`, `value`, `extra`, `php`) 
VALUES('Time Penalty (%)',NULL,'4','text','time_penalty','10','10',NULL,NULL);

