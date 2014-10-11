CREATE TABLE `lock_ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
