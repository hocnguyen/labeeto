CREATE TABLE `verify_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `code` varchar(10)) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci

ALTER TABLE `users`     ADD COLUMN `verifyPhoto` INT(0) NULL AFTER `updated`;