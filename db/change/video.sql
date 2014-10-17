CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_public` int(1) DEFAULT NULL,
  `is_approval` int(1) NOT NULL DEFAULT '0',
  `user_id` int(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;