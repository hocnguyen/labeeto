ALTER TABLE  `users` ADD  `relations_look` VARCHAR( 255 ) NOT NULL DEFAULT  'Casual' AFTER  `is_online`;
ALTER TABLE  `users` ADD  `gender_look` TINYINT( 1 ) NOT NULL DEFAULT  '1' AFTER  `relations_look`;
ALTER TABLE `verify_profile` ADD `is_approval` INT( 1 ) NOT NULL DEFAULT '0' AFTER `date`