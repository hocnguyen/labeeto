CREATE TABLE IF NOT EXISTS `achievement_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `achievement_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `ip` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;