
CREATE TABLE IF NOT EXISTS `favorite_user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `favorite_id` INT(11) NOT NULL,
  `created` DATETIME DEFAULT NULL,
  `updated` DATETIME DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;