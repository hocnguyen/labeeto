CREATE TABLE  `labeeto`.`education` (
`id` INT( 11 ) NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 255 ) NULL
) ENGINE = INNODB;
// test


CREATE TABLE  `labeeto`.`religion` (
`id` INT( 11 ) NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 255 ) NULL
) ENGINE = INNODB


CREATE TABLE  `labeeto`.`ethnicity` (
`id` INT( 11 ) NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 255 ) NULL
) ENGINE = INNODB

ALTER TABLE  `users` ADD  `children` INT( 11 ) NOT NULL DEFAULT  '0' AFTER  `goal`;
ALTER TABLE  `users` ADD  `diet` VARCHAR( 255 ) NOT NULL AFTER  `goal`;
ALTER TABLE  `users` ADD  `about` TEXT NOT NULL AFTER  `goal`;
ALTER TABLE  `users` ADD  `gym` VARCHAR( 255 ) NOT NULL AFTER  `goal`;
ALTER TABLE  `users` ADD  `training` INT( 11 ) NOT NULL DEFAULT  '0' AFTER  `goal`;

INSERT INTO `education` (`id`, `name`) VALUES
(1, 'High School'),
(2, 'Some College'),
(3, '2 Year College'),
(4, 'College'),
(5, 'Masters'),
(6, 'MFA'),
(7, 'Law School'),
(8, 'Medical School'),
(9, 'Business School'),
(10, 'PhD');

INSERT INTO `ethnicity` (`id`, `name`) VALUES
(1, 'Asian'),
(2, 'Black'),
(3, 'Indian'),
(4, 'Hispanic/Latin'),
(5, 'Middle Eastern'),
(6, 'Native American'),
(7, 'Pacific Islander'),
(8, 'White'),
(9, 'Other');


INSERT INTO `religion` (`id`, `name`) VALUES
(1, 'Agnostic'),
(2, 'Atheist'),
(3, 'Christian'),
(4, 'Catholic'),
(5, 'Buddhist'),
(6, 'Hindu'),
(7, 'Jewish'),
(8, 'Muslim'),
(9, 'Spiritual without affiliation');


CREATE TABLE IF NOT EXISTS `children` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `name`) VALUES
(1, 'Have ''em and they live with me'),
(2, 'Have ''em and they dont live with me'),
(3, 'Want ''em now'),
(4, 'Want ''em someday'),
(5, 'Not for me');

ALTER TABLE  `users` ADD  `age` VARCHAR( 255 ) NOT NULL AFTER  `smoke`
