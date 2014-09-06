-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2014 at 01:53 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `labeeto`
--
CREATE DATABASE IF NOT EXISTS `labeeto` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `labeeto`;

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('add_post', '0', 'return 3==$params[''value''];', 'N;'),
('add_post', '16813', 'return 3==$params[''value''];', 'N;'),
('add_post', '16816', 'return 3==$params[''value''];', 'N;'),
('admin', '0', '', 'N;'),
('admin', '1', NULL, 'N;'),
('admin', '118', NULL, 'N;'),
('admin', '16814', '', 'N;'),
('admin', '16819', NULL, 'N;'),
('admin', '2', NULL, 'N;'),
('admin', '92', NULL, 'N;'),
('guest', '100', NULL, 'N;'),
('guest', '115', NULL, 'N;'),
('guest', '140', NULL, 'N;'),
('guest', '58', NULL, 'N;'),
('guest', '71', NULL, 'N;'),
('guest', '72', NULL, 'N;'),
('guest', '79', NULL, 'N;'),
('guest', '84', NULL, 'N;'),
('guest', '90', NULL, 'N;'),
('manage_posts', '0', '', 'N;'),
('manage_posts', '16813', '', 'N;'),
('member', '16824', NULL, 'N;'),
('mod', '2', NULL, 'N;'),
('moderators', '0', '', 'N;'),
('moderators', '16813', '', 'N;'),
('moderators', '5', '', 'N;'),
('quest', '1', NULL, 'N;'),
('user', '0', '', 'N;'),
('user', '102', NULL, 'N;'),
('user', '105', NULL, 'N;'),
('user', '106', NULL, 'N;'),
('user', '108', NULL, 'N;'),
('user', '109', NULL, 'N;'),
('user', '113', NULL, 'N;'),
('user', '119', NULL, 'N;'),
('user', '120', NULL, 'N;'),
('user', '121', NULL, 'N;'),
('user', '122', NULL, 'N;'),
('user', '125', NULL, 'N;'),
('user', '128', NULL, 'N;'),
('user', '147', NULL, 'N;'),
('user', '148', NULL, 'N;'),
('user', '149', NULL, 'N;'),
('user', '15', NULL, 'N;'),
('User', '16', NULL, 'N;'),
('user', '16813', '', 'N;'),
('User', '17', NULL, 'N;'),
('user', '19', NULL, 'N;'),
('user', '2', NULL, 'N;'),
('user', '21', NULL, 'N;'),
('user', '22', NULL, 'N;'),
('user', '23', NULL, 'N;'),
('user', '24', NULL, 'N;'),
('user', '25', NULL, 'N;'),
('user', '26', NULL, 'N;'),
('user', '27', NULL, 'N;'),
('user', '28', NULL, 'N;'),
('User', '29', NULL, 'N;'),
('user', '3', NULL, 'N;'),
('user', '30', NULL, 'N;'),
('user', '31', NULL, 'N;'),
('user', '34', NULL, 'N;'),
('user', '35', NULL, 'N;'),
('user', '4', NULL, 'N;'),
('user', '5', NULL, 'N;'),
('user', '57', NULL, 'N;'),
('user', '58', NULL, 'N;'),
('user', '59', NULL, 'N;'),
('user', '61', NULL, 'N;'),
('user', '65', NULL, 'N;'),
('user', '67', NULL, 'N;'),
('user', '68', NULL, 'N;'),
('user', '69', NULL, 'N;'),
('user', '7', NULL, 'N;'),
('user', '74', NULL, 'N;'),
('user', '8', NULL, 'N;'),
('user', '80', NULL, 'N;'),
('user', '81', NULL, 'N;'),
('user', '82', NULL, 'N;'),
('user', '85', NULL, 'N;'),
('user', '86', NULL, 'N;'),
('user', '87', NULL, 'N;'),
('user', '89', NULL, 'N;'),
('user', '91', NULL, 'N;'),
('user', '92', NULL, 'N;'),
('user', '94', NULL, 'N;'),
('user', '95', NULL, 'N;'),
('user', '97', NULL, 'N;'),
('user', '98', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin', 2, 'System Administrator', '', 'N;'),
('editor', 2, 'Site Editor', '', 'N;'),
('guest', 2, 'Site Guest', '', 'N;'),
('member', 2, 'Site Member', 'return !Yii::app()->user->isGuest;', 'N;'),
('op_acp_access', 0, 'Admin: Enter The Admin Control Panel', '', 'N;'),
('op_blog_addcats', 0, 'Blog: Add Categories', '', 'N;'),
('op_blog_addposts', 0, 'Blog: Add Posts', '', 'N;'),
('op_blog_comments', 0, 'Blog: Manage Comments', '', 'N;'),
('op_blog_deletecats', 0, 'Blog: Delete Categories', '', 'N;'),
('op_blog_deletecomments', 0, 'Blog: Delete Comments', '', 'N;'),
('op_blog_deleteposts', 0, 'Blog: Delete Posts', '', 'N;'),
('op_blog_editcats', 0, 'Blog: Edit Categories', '', 'N;'),
('op_blog_editposts', 0, 'Blog: Edit Posts', '', 'N;'),
('op_blog_manage', 0, 'Blog: Manage Posts', '', 'N;'),
('op_blog_managecats', 0, 'Blog: Manage Categories', '', 'N;'),
('op_custompages_addpages', 0, 'Custom Pages: Add New Pages', '', 'N;'),
('op_custompages_deletepages', 0, 'Custom Pages: Delete Pages', '', 'N;'),
('op_custompages_editpages', 0, 'Custom Pages: Edit Pages', '', 'N;'),
('op_custompages_managepages', 0, 'Custom Pages: Manage Pages', '', 'N;'),
('op_doc_add_comments', 0, 'Documentations: Add Comments', '', 'N;'),
('op_doc_delete_comments', 0, 'Documentations: Delete Comments', '', 'N;'),
('op_doc_edit_docs', 0, 'Documentations: Edit Topics', '', 'N;'),
('op_doc_manage_comments', 0, 'Documentations: Manage Comments', '', 'N;'),
('op_extensions_addcats', 0, 'Extensions: Add Categories', '', 'N;'),
('op_extensions_addposts', 0, 'Extensions: Add Extensions', '', 'N;'),
('op_extensions_comments', 0, 'Extensions: Manage Comments', '', 'N;'),
('op_extensions_deletecats', 0, 'Extensions: Delete Categories', '', 'N;'),
('op_extensions_deletecomments', 0, 'Extensions: Delete Comments', '', 'N;'),
('op_extensions_deleteposts', 0, 'Extensions: Delete Extension', '', 'N;'),
('op_extensions_editcats', 0, 'Extensions: Edit Categories', '', 'N;'),
('op_extensions_editposts', 0, 'Extensions: Edit Extensions', '', 'N;'),
('op_extensions_manage', 0, 'Extensions: Manage Posts', '', 'N;'),
('op_extensions_managecats', 0, 'Extensions: Manage Categories', '', 'N;'),
('op_forum_posts', 0, 'Forum: Manage Forum Posts', '', 'N;'),
('op_forum_post_posts', 0, 'Forum: Post New Posts', '', 'N;'),
('op_forum_post_topics', 0, 'Forum: Post New Topics', '', 'N;'),
('op_forum_topics', 0, 'Forum: Manage Forum Topics', '', 'N;'),
('op_lang_copy_strings', 0, 'Languages: Copy Source Language Strings', '', 'N;'),
('op_lang_translate', 0, 'Languages: Translate Strings', '', 'N;'),
('op_roles_add_auth', 0, 'Roles: Add Auth Items', '', 'N;'),
('op_roles_add_authchild', 0, 'Roles: Add Auth Items Childs', '', 'N;'),
('op_roles_delete_auth', 0, 'Roles: Delete Auth Items', '', 'N;'),
('op_roles_edit_auth', 0, 'Roles: Edit Auth Items', '', 'N;'),
('op_settings_add_settings', 0, 'Settings: Add New Settings', '', 'N;'),
('op_settings_add_settings_groups', 0, 'Settings: Add Setting Groups', '', 'N;'),
('op_settings_delete_settings', 0, 'Settings: Delete Settings', '', 'N;'),
('op_settings_delete_settings_groups', 0, 'Settings: Delete Setting Groups', '', 'N;'),
('op_settings_edit_settings', 0, 'Settings: Edit Settings', '', 'N;'),
('op_settings_edit_settings_groups', 0, 'Settings: Edit Setting Groups', '', 'N;'),
('op_settings_revert_settings', 0, 'Settings: Revert Settings', '', 'N;'),
('op_settings_update_settings', 0, 'Settings: Update Settings', '', 'N;'),
('op_settings_view_settings', 0, 'Settings: View Settings', '', 'N;'),
('op_tutorials_addcats', 0, 'Tutorials: Add Categories', '', 'N;'),
('op_tutorials_addtutorials', 0, 'Tutorials: Add Tutorials', '', 'N;'),
('op_tutorials_comments', 0, 'Tutorials: Manage Comments', '', 'N;'),
('op_tutorials_deletecats', 0, 'Tutorials: Delete Categories', '', 'N;'),
('op_tutorials_deletecomments', 0, 'Tutorials: Delete Comments', '', 'N;'),
('op_tutorials_deletetutorials', 0, 'Tutorials: Delete Tutorials', '', 'N;'),
('op_tutorials_editcats', 0, 'Tutorials: Edit Categories', '', 'N;'),
('op_tutorials_edittutorials', 0, 'Tutorials: Edit Tutorials', '', 'N;'),
('op_tutorials_manage', 0, 'Tutorials: Manage Tutorials', '', 'N;'),
('op_tutorials_managecats', 0, 'Tutorials: Manage Categories', '', 'N;'),
('op_users_add_users', 0, 'Users: Add New Users', '', 'N;'),
('op_users_bulk_users', 0, 'Users: Perform Bulk Operations On Users', '', 'N;'),
('op_users_comment', 0, 'Users: Add Comments to profiles', '', 'N;'),
('op_users_delete_users', 0, 'Users: Delete Users', '', 'N;'),
('op_users_edit_users', 0, 'Users: Edit Users', '', 'N;'),
('op_users_manage_comments', 0, 'Users: Manage Comments', '', 'N;'),
('task_blog', 1, 'Task Manage Blog', '', 'N;'),
('task_custompages', 1, 'Task Manage Custom Pages', '', 'N;'),
('task_documentations', 1, 'Task Manage Documentations', '', 'N;'),
('task_extensions', 1, 'Task Manage Extensions', '', 'N;'),
('task_forum', 1, 'Task: Manage Forum', '', 'N;'),
('task_languages', 1, 'Task Manage System Languages', '', 'N;'),
('task_members', 1, 'Task Manage Users', '', 'N;'),
('task_roles', 1, 'Task Manage User Roles', '', 'N;'),
('task_settings', 1, 'Task Manage System Setting', '', 'N;'),
('task_tutorials', 1, 'Task Manage Tutorials', '', 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('manage_posts', 'add_post'),
('admin', 'editor'),
('admin', 'guest'),
('member', 'guest'),
('moderators', 'manage_posts'),
('admin', 'member'),
('editor', 'member'),
('admin', 'op_acp_access'),
('admin', 'op_blog_addcats'),
('task_blog', 'op_blog_addcats'),
('admin', 'op_blog_addposts'),
('member', 'op_blog_addposts'),
('task_blog', 'op_blog_addposts'),
('admin', 'op_blog_comments'),
('task_blog', 'op_blog_comments'),
('admin', 'op_blog_deletecats'),
('task_blog', 'op_blog_deletecats'),
('admin', 'op_blog_deletecomments'),
('task_blog', 'op_blog_deletecomments'),
('admin', 'op_blog_deleteposts'),
('task_blog', 'op_blog_deleteposts'),
('admin', 'op_blog_editcats'),
('task_blog', 'op_blog_editcats'),
('admin', 'op_blog_editposts'),
('task_blog', 'op_blog_editposts'),
('admin', 'op_blog_manage'),
('task_blog', 'op_blog_manage'),
('admin', 'op_blog_managecats'),
('task_blog', 'op_blog_managecats'),
('admin', 'op_custompages_addpages'),
('task_custompages', 'op_custompages_addpages'),
('admin', 'op_custompages_deletepages'),
('task_custompages', 'op_custompages_deletepages'),
('admin', 'op_custompages_editpages'),
('task_custompages', 'op_custompages_editpages'),
('admin', 'op_custompages_managepages'),
('task_custompages', 'op_custompages_managepages'),
('admin', 'op_doc_add_comments'),
('editor', 'op_doc_add_comments'),
('member', 'op_doc_add_comments'),
('task_documentations', 'op_doc_add_comments'),
('admin', 'op_doc_delete_comments'),
('task_documentations', 'op_doc_delete_comments'),
('admin', 'op_doc_edit_docs'),
('task_documentations', 'op_doc_edit_docs'),
('admin', 'op_doc_manage_comments'),
('editor', 'op_doc_manage_comments'),
('task_documentations', 'op_doc_manage_comments'),
('admin', 'op_extensions_addcats'),
('task_extensions', 'op_extensions_addcats'),
('admin', 'op_extensions_addposts'),
('member', 'op_extensions_addposts'),
('task_extensions', 'op_extensions_addposts'),
('admin', 'op_extensions_comments'),
('task_extensions', 'op_extensions_comments'),
('admin', 'op_extensions_deletecats'),
('task_extensions', 'op_extensions_deletecats'),
('admin', 'op_extensions_deletecomments'),
('task_extensions', 'op_extensions_deletecomments'),
('admin', 'op_extensions_deleteposts'),
('task_extensions', 'op_extensions_deleteposts'),
('admin', 'op_extensions_editcats'),
('task_extensions', 'op_extensions_editcats'),
('admin', 'op_extensions_editposts'),
('task_extensions', 'op_extensions_editposts'),
('admin', 'op_extensions_manage'),
('task_extensions', 'op_extensions_manage'),
('admin', 'op_extensions_managecats'),
('task_extensions', 'op_extensions_managecats'),
('admin', 'op_forum_posts'),
('task_forum', 'op_forum_posts'),
('admin', 'op_forum_post_posts'),
('member', 'op_forum_post_posts'),
('task_forum', 'op_forum_post_posts'),
('admin', 'op_forum_post_topics'),
('member', 'op_forum_post_topics'),
('task_forum', 'op_forum_post_topics'),
('admin', 'op_forum_topics'),
('task_forum', 'op_forum_topics'),
('admin', 'op_lang_copy_strings'),
('task_languages', 'op_lang_copy_strings'),
('admin', 'op_lang_translate'),
('task_languages', 'op_lang_translate'),
('admin', 'op_roles_add_auth'),
('task_roles', 'op_roles_add_auth'),
('admin', 'op_roles_add_authchild'),
('task_roles', 'op_roles_add_authchild'),
('admin', 'op_roles_delete_auth'),
('task_roles', 'op_roles_delete_auth'),
('admin', 'op_roles_edit_auth'),
('task_roles', 'op_roles_edit_auth'),
('admin', 'op_settings_add_settings'),
('task_settings', 'op_settings_add_settings'),
('admin', 'op_settings_add_settings_groups'),
('task_settings', 'op_settings_add_settings_groups'),
('admin', 'op_settings_delete_settings'),
('task_settings', 'op_settings_delete_settings'),
('admin', 'op_settings_delete_settings_groups'),
('task_settings', 'op_settings_delete_settings_groups'),
('admin', 'op_settings_edit_settings'),
('task_settings', 'op_settings_edit_settings'),
('admin', 'op_settings_edit_settings_groups'),
('task_settings', 'op_settings_edit_settings_groups'),
('admin', 'op_settings_revert_settings'),
('task_settings', 'op_settings_revert_settings'),
('admin', 'op_settings_update_settings'),
('task_settings', 'op_settings_update_settings'),
('admin', 'op_settings_view_settings'),
('task_settings', 'op_settings_view_settings'),
('admin', 'op_tutorials_addcats'),
('task_tutorials', 'op_tutorials_addcats'),
('admin', 'op_tutorials_addtutorials'),
('member', 'op_tutorials_addtutorials'),
('task_tutorials', 'op_tutorials_addtutorials'),
('admin', 'op_tutorials_comments'),
('task_tutorials', 'op_tutorials_comments'),
('admin', 'op_tutorials_deletecats'),
('task_tutorials', 'op_tutorials_deletecats'),
('admin', 'op_tutorials_deletecomments'),
('task_tutorials', 'op_tutorials_deletecomments'),
('admin', 'op_tutorials_deletetutorials'),
('task_tutorials', 'op_tutorials_deletetutorials'),
('admin', 'op_tutorials_editcats'),
('task_tutorials', 'op_tutorials_editcats'),
('admin', 'op_tutorials_edittutorials'),
('task_tutorials', 'op_tutorials_edittutorials'),
('admin', 'op_tutorials_manage'),
('task_tutorials', 'op_tutorials_manage'),
('admin', 'op_tutorials_managecats'),
('task_tutorials', 'op_tutorials_managecats'),
('admin', 'op_users_add_users'),
('task_members', 'op_users_add_users'),
('admin', 'op_users_bulk_users'),
('task_members', 'op_users_bulk_users'),
('admin', 'op_users_comment'),
('member', 'op_users_comment'),
('task_members', 'op_users_comment'),
('admin', 'op_users_delete_users'),
('task_members', 'op_users_delete_users'),
('admin', 'op_users_edit_users'),
('task_members', 'op_users_edit_users'),
('admin', 'op_users_manage_comments'),
('task_members', 'op_users_manage_comments'),
('admin', 'task_blog'),
('admin', 'task_custompages'),
('admin', 'task_documentations'),
('admin', 'task_extensions'),
('admin', 'task_forum'),
('admin', 'task_languages'),
('admin', 'task_members'),
('admin', 'task_roles'),
('admin', 'task_settings'),
('admin', 'task_tutorials');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE IF NOT EXISTS `email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(512) DEFAULT NULL,
  `alias` varchar(512) DEFAULT NULL,
  `language` varchar(3) DEFAULT NULL,
  `email_subject` varchar(512) DEFAULT NULL,
  `email_content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `name`, `alias`, `language`, `email_subject`, `email_content`) VALUES
(1, 'Reset password', 'reset-password', 'en', 'Password Reset Completed', 'Dear {username},<br><br>\r\n									We have reseted your password successfully.<br><br>\r\n									You new password is: <b>{password}</b><br>'),
(2, 'Passwort zurücksetzen', 'reset-password', 'de', 'Passwort erfolgreich zurückgesetzt', 'Sehr geehrte(r) Herr/Frau {username},<br><br>Wir haben Ihr Passwort erfolgreich zurückgesetzt.<br><br>\r\n									Ihr neues Passwort ist: <b>{password}</b><br>'),
(3, 'Register Member', 'register-member', 'en', 'Member Registration Successfull ', '"Dear {username},<br><br>You''ve created an account on {homelink}.<br><br> \r\n											Please click the link below in order to confirm your email address and active your account.<br><br>\r\n											The activation link is:<br><br>\r\n											----------------------<br>\r\n											{link}<br>\r\n											----------------------<br>"'),
(4, 'Contact Us', 'contact-us', 'en', 'New Contact Us Form Submitted', 'Id: {id}<br>\r\n													By: {name}<br>\r\n													Email: {email}<br>\r\n													Subject: {subject}<br>\r\n													========================<br>\r\n													{msg}<br>\r\n													========================<br><br>\r\n													Regards, the {team} Team.'),
(5, 'Forum Mail', 'forum-mail', 'en', 'New post in a topic you are subscribed', 'Dear {user}, <br><br>A new post was made by ''{author}'' in the topic ''{topic}'' you are subscribed to. To visit the topic please click the following link<br><br>{link}<br><br>\r\n                                                                          <small>To unsubscribe from receiving updates for this topic please click the following link {unlink}</small>.<br><br>\r\n                                                                          Regards, The {name} Team.'),
(6, 'Forum Mail', 'forum-mail', 'de', 'Es gibt einen neuen Beitrag im Thema, was Sie abonniert haben', 'Sehr geehrte Herr/Frau {user}, <br><br>ein neuer Beitrag im Thema ''{topic}'' was Sie abonniert haben, wird angelegt. Klicken Sie auf folgendes Link zum diesen Thema <br><br>{link}<br><br>\r\n                                                                          <small>Wenn Sie aus den Updates von diesem Thema austragen möchten, klicken Sie auf folgendes Link\r\n{unlink}</small>.<br><br>\r\n                                                                          Herzliche Grüße\r\n{name}'),
(7, 'Kontaktieren Sie uns', 'contact-us', 'de', 'Neues Template für Kontakt uns anlegen', 'Id: {id}<br>\r\n													Von: {name}<br>\r\n													E-Mail: {email}<br>\r\n													Betreff: {subject}<br>\r\n													========================<br>\r\n													{msg}<br>\r\n													========================<br><br>\r\n													Herzliche Grüße, {team} Team.'),
(8, 'Angemeldeter User', 'register-member', 'de', 'Anmelden: Glaubwürdigkeitsprüfung', '"Sehr geehrte/r {username},<br><br>Sie haben diese E-Mail erhalten, um Ihre Mitgliedschaft bei Onecentdeal zu vervollständigen.<br><br>{homelink}.<br><br> \r\n											Klicken Sie auf den unterstehenden Link, treten Sie auf Onecentdeal ein und entdecken Sie, wie Sie sich 2,00 Euro für Ihre kostenlosen Gebote schencken können.<br><br>\r\n											----------------------<br>\r\n											{link}<br>\r\n											----------------------<br><br>Wir machen dies zur Überprüfung der Authentizität Ihrer E-Mail-Adresse und um Missbrauch zu vermeiden, damit Ihre Privatsphäre und Ihre Daten so sicher wie möglich behandelt werden.<br><br>Vielen Dank für Ihr Vertrauen!<br>Onecentdeal<br><br>"'),
(25, 'Invite App', 'invite-app', 'de', 'Invite App {app_name}', '"Hallo {username},<br><br>\n{link}');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` varchar(2) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`) VALUES
('de', 'German'),
('en', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `lookup`
--

CREATE TABLE IF NOT EXISTS `lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) CHARACTER SET utf8 NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lookup`
--

INSERT INTO `lookup` (`id`, `name`, `code`, `type`, `position`) VALUES
(1, 'Register', 1, 'StatusApp', 1),
(2, 'Approved', 2, 'StatusApp', 2),
(3, 'Wait on Approval', 3, 'StatusApp', 3);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(16) NOT NULL DEFAULT '',
  `translation` text,
  PRIMARY KEY (`id`,`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=137 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `language`, `translation`) VALUES
(3, 'de', 'Benutzer'),
(4, 'de', 'Einstellen'),
(5, 'de', 'Benutzer'),
(7, 'de', 'Vorname'),
(8, 'de', 'Nachname'),
(9, 'de', 'Email'),
(10, 'de', 'Passwort'),
(11, 'de', 'Passwort wiederholen'),
(12, 'de', 'Rolle'),
(13, 'de', 'Altes Passwort'),
(14, 'de', 'Neues Passwort'),
(15, 'de', 'Neues Passwort wiederholen'),
(16, 'de', 'Sind Sie sicher, dass Sie diesen Artikel löschen möchten? \\ NDiese Aktion kann nicht rückgängig gemacht werden!'),
(17, 'de', 'OK! Aktion wurde abgebrochen'),
(18, 'de', 'Apps'),
(19, 'de', 'Registrierungen'),
(20, 'de', 'Code-Beispiele '),
(21, 'de', 'Newsletter'),
(22, 'de', 'Startseite'),
(23, 'de', 'Hallo'),
(24, 'de', 'Mein Profil'),
(25, 'de', 'Abmelden'),
(28, 'de', 'Registrieren'),
(29, 'de', 'Anmelden'),
(30, 'de', 'Passwort vergessen?'),
(31, 'de', 'Bitte melden Sie sich an, um den Zugriff auf die App zu erhalten.'),
(32, 'de', 'Email'),
(33, 'de', 'Passwort'),
(34, 'de', 'Jetzt anmelden'),
(35, 'de', 'Vielen Dank. Sie sind jetzt eingeloggt.'),
(36, 'de', 'Sprachen'),
(37, 'de', 'Sprache'),
(38, 'de', 'Sprache Titel'),
(39, 'de', 'Ausgangssprache'),
(41, 'de', 'Optionen'),
(42, 'de', 'Quelle kann nicht übersetzt werden.'),
(43, 'de', 'Nicht Ausgangssprache'),
(44, 'de', 'Übersetzen Sie diese Sprache'),
(45, 'de', 'Übersetzen Sie nur die Streicher, die nicht übersetzt wurden .'),
(46, 'de', 'Kopieren Sie fehlende Sprachenstreicher von der Quelle in dieser Sprache'),
(47, 'de', 'Kopieren abgeschlossen! Insgesamt {number} fehlenden Streicher kopierten.'),
(48, 'de', 'Erfolg!'),
(49, 'de', 'Übersetzen'),
(50, 'de', 'Sprachenstreicher '),
(51, 'de', 'Originalstreicher'),
(52, 'de', 'Übersetzen'),
(53, 'de', 'Suchen'),
(55, 'de', 'Sortiert nach String ID'),
(56, 'de', 'Sortiert nach Übersetzung'),
(57, 'de', 'Löschen'),
(58, 'de', 'Kommen Übersetzung auf Original zurück'),
(59, 'de', 'Zusenden'),
(61, 'de', 'Streicher aktualisierte.'),
(62, 'de', 'Sie sind jetzt abgemeldet.'),
(64, 'de', 'Jetzt anmelden'),
(65, 'de', 'Vorschaubilder'),
(66, 'de', 'Name'),
(67, 'de', 'Beschreibungen'),
(68, 'de', 'Bilder'),
(69, 'de', 'Profil einstellen'),
(70, 'de', 'Profil'),
(71, 'de', 'Passwort verändern'),
(72, 'de', 'Um die App-Übersicht >>>'),
(73, 'de', 'Registrierung bestätigen'),
(74, 'de', 'Vielen Dank für die Registrierung auf der App.'),
(75, 'de', 'Nach der Bestätigung von Ihrem Konto werden Sie eine Information per E-Mail über die Freischaltung erhalten.'),
(76, 'de', 'App-Benutzer'),
(77, 'de', 'App-Übersicht'),
(78, 'de', 'Meine Apps'),
(79, 'de', 'Status'),
(80, 'de', 'Code'),
(81, 'de', 'Genehmigt'),
(82, 'de', 'Warten auf Genehmigung'),
(83, 'de', 'Ihr Passwort zurücksetzen'),
(84, 'de', 'Geben Sie hier eine E-Mail. Sie werden ein zurückgesetztes Passwort per E-Mail erhalten.'),
(85, 'de', 'Zusenden'),
(86, 'de', ' Keine E-Mail finden. Bitte überprüfen Sie noch einmal!'),
(87, 'de', 'Warnung!'),
(88, 'de', 'Sehr geehrte{username},<br /><br />\r\n    									Wir haben das Passwort erfolgreich zurückgesetzt.<br /><br />\r\n    									Ihr neues Passwort ist: <b>{password}</b><br />'),
(89, 'de', '<br /><br />----------------<br />Mit freundlichen Grüßen,<br />Das{team} Team.<br />'),
(90, 'de', 'Passwort zurücksetzen wurde abgeschlossen '),
(91, 'de', 'Vielen Dank. Ihr Passwort wurde zurückgesetzt. Bitte überprüfen Sie Ihre E-Mail für Ihr neues generiertes Passwort.'),
(92, 'de', 'Registrieren Sie App'),
(93, 'de', '"Sehr geehrte{username},<br><br>Sie haben ein Konto auf{homelink}erstellt.<br><br> \r\n											Bitte klicken Sie auf den Link unten, um Ihre E-Mail-Adresse zu bestätigen und um Ihr Konto zu aktivieren.<br><br>\r\n											Der Aktivierungslink ist:<br><br>\r\n											----------------------<br>\r\n											{link}<br>\r\n											----------------------<br>"'),
(94, 'de', 'Fehler'),
(95, 'de', 'Entschuldigung, aber die Seite, die Sie suchen, wurde nicht gefunden.'),
(96, 'de', 'File:'),
(97, 'de', 'Type:'),
(98, 'de', 'Sie haben diese App registriert'),
(100, 'de', 'Sie haben Ihr Konto erfolgreich activieren. Bitte loggen Sie ein, um zu starten!'),
(101, 'de', 'Sorry, Sie sind nicht berechtigt, den Admin-Bereich zu gelangen.'),
(102, 'de', 'Keine Streicher gefunden.'),
(104, 'de', 'Beispielcode'),
(105, 'de', 'iOS'),
(106, 'de', 'Code herunterladen'),
(107, 'de', 'Beschreibung'),
(108, 'de', 'App Demo iOS'),
(109, 'de', 'Android'),
(110, 'de', 'App Demo Android'),
(111, 'de', 'App'),
(112, 'de', 'App-Name'),
(113, 'de', 'Vorname'),
(114, 'de', 'Nachname'),
(115, 'de', 'Löschen'),
(116, 'de', 'Sie können nicht selbst löschen!'),
(117, 'de', 'Sind Sie sicher, dass Sie in diesem Benutzer verborgen werden?'),
(118, 'de', 'Registrierungen aktualisieren\r\n'),
(119, 'de', 'Zurück'),
(120, 'de', 'Speichern'),
(121, 'de', 'App-Benutzer einladen '),
(122, 'de', 'Einladen '),
(123, 'de', 'Einladen erfolgreich!'),
(124, 'de', 'Aktualisieren'),
(125, 'de', 'Entschuldigung, aber das Passwort passt nicht zu einer der unseren Aufzeichnungen. '),
(126, 'de', 'Diese Benutzer {email} wurde blockiert, bitte nehmen Sie den Kontakt mit Admin auf, um weitere Informationen zu wissen.'),
(127, 'de', 'Change password successful'),
(128, 'de', 'Sorry, But the account is blocked.'),
(130, 'de', 'Admin'),
(131, 'de', 'ID'),
(132, 'de', '# Strings'),
(133, 'de', 'ID'),
(135, 'de', 'Verbergen'),
(136, 'de', 'Sind Sie sicher, dass Sie auf dieser App verbogen werden?');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(125) NOT NULL DEFAULT '',
  `joined` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `joined` (`joined`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(125) NOT NULL DEFAULT '',
  `description` text,
  `category` int(10) NOT NULL DEFAULT '0',
  `type` char(30) NOT NULL DEFAULT 'text',
  `settingkey` varchar(125) NOT NULL DEFAULT '',
  `default_value` text,
  `value` text,
  `extra` text,
  `php` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settingkey` (`settingkey`),
  KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `category`, `type`, `settingkey`, `default_value`, `value`, `extra`, `php`) VALUES
(13, 'Site Name', 'This is the default application (site) title', 2, 'text', 'applicationName', 'My Site', '', '', ''),
(14, 'Default Role ', 'Choose the default group for new users registered.', 0, 'dropdown', 'default_group', 'user', 'admin', '#show_roles#', ''),
(15, 'Incoming Email Address', 'Enter the incoming email address', 2, 'text', 'emailin', 'info@userapp.toasternet-online.de', 'info@userapp.toasternet-online.de', '', ''),
(16, 'Out Going Email Address', 'Enter the out going email address.', 2, 'text', 'emailout', 'info@userapp.toasternet-online.de', 'info@userapp.toasternet-online.de', '', ''),
(17, 'Subject Topics', 'Enter the subject topics. One per line.', 3, 'textarea', 'contactustopics', 'Support\r\nAffiliate\r\nBug Report\r\nDocumentation Bug Report\r\nBusiness Offers\r\nQuestions\r\nOther... ', 'Support\r\nEarning\r\nInvoice\r\nAffiliate\r\nDownload\r\nBug Report\r\nBusiness Offers\r\nQuestions\r\nOther... ', '', ''),
(18, 'Email the submitted forms?', 'Do you wish to email the submitted forms to the support email address of the system?', 0, 'yesno', 'contactusemail', '1', '0', '', ''),
(19, 'Latest News Category', 'Choose the category to grab the latest news from', 0, 'dropdown', 'latestnewscat', '0', '1', '#show_blogcats#', ''),
(22, 'Hot Auction <font style="color:red"> : Bid quote litle than</font>', NULL, 4, 'text', 'auction_hot', '10', '15', NULL, NULL),
(23, 'Auction end now <font style="color:red">: Bid quote = 0,Countdown time litle than</font>', 'In seconds', 4, 'text', 'auction_endnow', '3600', '3600', NULL, NULL),
(28, 'Auction end today<font style="color:red"> : Bid quote =0, Countdown time more than </font>', 'In seconds', 4, 'text', 'auction_endtoday', '3600', '3600', NULL, NULL),
(30, 'VAT tax (%)', NULL, 4, 'text', 'vat_tax', '19', '19', NULL, NULL),
(31, 'Basic auction loop days', NULL, 4, 'text', 'basic_auction_days', '7', '7', NULL, NULL),
(32, 'Bonus 1st place', NULL, 4, 'text', 'bonus_1st_place', '10', '20', NULL, NULL),
(33, 'Tokbox api key', NULL, 4, 'text', 'tokbox_api_key', '44310242', '44453862', NULL, NULL),
(34, 'Tokbox api secret', NULL, 4, 'text', 'tokbox_api_secret', 'bb46057d2721b44f0f20cb99453515f0fc223069', '6ecc7e565c6d4355963bbf70df65519263b260f9', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sourcemessage`
--

CREATE TABLE IF NOT EXISTS `sourcemessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(32) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=143 ;

--
-- Dumping data for table `sourcemessage`
--

INSERT INTO `sourcemessage` (`id`, `category`, `message`) VALUES
(3, 'global', 'Users'),
(4, 'global', 'Create'),
(5, 'global', 'User'),
(7, 'global', 'Firstname'),
(8, 'global', 'Lastname'),
(9, 'global', 'Email'),
(10, 'global', 'Password'),
(11, 'global', 'Password Repetition'),
(12, 'global', 'Role'),
(13, 'global', 'Old Password'),
(14, 'global', 'New Password'),
(15, 'global', 'New Password Repetition'),
(16, 'adminglobal', 'Are you sure you want to delete this item?\\nThis action cannot be undone!'),
(17, 'adminglobal', 'OK! Action Cancled.'),
(18, 'global', 'Apps'),
(19, 'global', 'Registrations'),
(20, 'global', 'Code Samples'),
(21, 'global', 'Newsletter'),
(22, 'global', 'Home'),
(23, 'global', 'Hello'),
(24, 'global', 'My Profile'),
(25, 'global', 'Logout'),
(28, 'global', 'Register'),
(29, 'global', 'Login'),
(30, 'global', 'Password forgotten?'),
(31, 'global', 'Please sign in to get the access to the app'),
(32, 'members', 'Email'),
(33, 'members', 'Password'),
(34, 'global', 'Login now'),
(35, 'global', 'Thanks. You are now logged in.'),
(36, 'adminlang', 'Languages'),
(37, 'adminlang', 'Language Key'),
(38, 'adminlang', 'Language Title'),
(39, 'adminlang', 'Source Language'),
(41, 'adminlang', 'Options'),
(42, 'adminlang', 'Source cannot be translated'),
(43, 'adminlang', 'Not Source Language'),
(44, 'adminlang', 'Translate this language'),
(45, 'adminlang', 'Translate only the strings that were not translated yet.'),
(46, 'adminlang', 'Copy missing language strings from source into this language'),
(47, 'adminlang', 'Copy completed! Total of {number} missing strings copied.'),
(48, 'global', 'Success!'),
(49, 'adminlang', 'Translate'),
(50, 'adminlang', 'Language Strings'),
(51, 'adminlang', 'Original String'),
(52, 'adminlang', 'Translation'),
(53, 'global', 'Search'),
(55, 'adminlang', 'Sort by string id'),
(56, 'adminlang', 'Sort by translation'),
(57, 'adminlang', 'Delete'),
(58, 'adminlang', 'Revert translation to original'),
(59, 'adminlang', 'Submit'),
(61, 'adminlang', 'Strings Updated.'),
(62, 'global', 'You are now logged out.'),
(64, 'global', 'Register now'),
(65, 'global', 'Thumbnails'),
(66, 'global', 'Name'),
(67, 'global', 'Descriptions'),
(68, 'global', 'Images'),
(69, 'global', 'Create Profile'),
(70, 'global', 'Profile'),
(71, 'global', 'Change password'),
(72, 'global', 'To The App Overview >>>'),
(73, 'global', 'Registration confirmation'),
(74, 'global', 'Thank you very much for the registration to the app.'),
(75, 'global', 'After the confirmation of your account you will receive an information by email about the activation.'),
(76, 'global', 'App Users'),
(77, 'global', 'App Overview'),
(78, 'global', 'My Apps'),
(79, 'global', 'Status'),
(80, 'global', 'Code'),
(81, 'global', 'Approved'),
(82, 'global', 'Wait on Approval'),
(83, 'global', 'Reset your password'),
(84, 'global', 'Enter you email here. You will receive a reset password via email.'),
(85, 'global', 'Submit'),
(86, 'login', 'Not found this email. Please check again!'),
(87, 'global', 'Warning!'),
(88, 'global', 'Dear {username},<br /><br />\n    									We have reseted your password successfully.<br /><br />\n    									You new password is: <b>{password}</b><br />'),
(89, 'global', '<br /><br />----------------<br />Regards,<br />The {team} Team.<br />'),
(90, 'global', 'Password Reset Completed'),
(91, 'global', 'Thank You. Your password was reset. Please check your email for you new generated password.'),
(92, 'global', 'Register app'),
(93, 'global', '"Dear {username},<br><br>You''ve created an account on {homelink}.<br><br> \r\n											Please click the link below in order to confirm your email address and active your account.<br><br>\r\n											The activation link is:<br><br>\r\n											----------------------<br>\r\n											{link}<br>\r\n											----------------------<br>"'),
(94, 'global', 'Error'),
(95, 'error', 'Sorry, But the page you were looking for was not found.'),
(96, 'admindebug', 'File:'),
(97, 'admindebug', 'Type:'),
(98, 'global', 'You Registered this app'),
(100, 'login', 'You have actived your account succesful. Please login to start!'),
(101, 'global', 'Sorry, You are not allowed to enter the admin section.'),
(102, 'adminlang', 'No strings found.'),
(104, 'global', 'Sample Code'),
(105, 'global', 'iOS'),
(106, 'global', 'Download Code'),
(107, 'global', 'Description'),
(108, 'global', 'App Demo iOS'),
(109, 'global', 'Android'),
(110, 'global', 'App Demo Android'),
(111, 'global', 'App'),
(112, 'global', 'App Name'),
(113, 'global', 'First Name'),
(114, 'global', 'Last Name'),
(115, 'global', 'Delete'),
(116, 'global', 'You cant delete yourself!'),
(117, 'global', 'Are you sure hidden in this user ?'),
(118, 'global', 'Update Registrations'),
(119, 'global', 'Back'),
(120, 'global', 'Save'),
(121, 'global', 'Invite User App'),
(122, 'global', 'Invite'),
(123, 'global', 'Invite Successful!'),
(124, 'global', 'Update'),
(125, 'members', 'Sorry, But the password did not match the one in our records.'),
(126, 'login', 'This user {email} was block, Please contact with admin to know more info'),
(127, 'login', 'Change password successful'),
(128, 'members', 'Sorry, But the account is blocked.'),
(130, 'global', 'Admin'),
(131, 'adminlang', 'ID'),
(132, 'adminlang', '# Strings'),
(133, 'global', 'ID'),
(135, 'global', 'Hide'),
(136, 'global', 'Are you sure hidden in this app ?'),
(138, 'global', ''),
(139, 'adminglobal', 'Error'),
(140, 'global', 'Create Registrations'),
(141, 'login', 'Please check your email to active account before login !'),
(142, 'members', 'Sorry, But we can''t find a member with those login information.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(155) NOT NULL DEFAULT '',
  `gender` tinyint(1) DEFAULT NULL,
  `career` varchar(100) DEFAULT NULL,
  `email` varchar(155) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `joined` int(10) DEFAULT '0',
  `role` char(30) DEFAULT 'user',
  `ehtnicity` char(30) DEFAULT '',
  `fname` varchar(40) DEFAULT '',
  `lname` varchar(40) DEFAULT '',
  `birthday` date DEFAULT NULL,
  `photo` varchar(155) DEFAULT '',
  `address` varchar(155) DEFAULT '',
  `education` varchar(40) DEFAULT '',
  `religion` char(40) DEFAULT '',
  `height` varchar(100) DEFAULT NULL,
  `excercise` varchar(255) DEFAULT NULL,
  `passion` varchar(255) DEFAULT NULL,
  `goal` varchar(255) DEFAULT NULL,
  `smoke` varchar(100) DEFAULT NULL,
  `relations` varchar(255) DEFAULT NULL,
  `zipcode` varchar(5) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longtitude` varchar(50) DEFAULT NULL,
  `drink` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `last_logged` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `gender`, `career`, `email`, `password`, `joined`, `role`, `ehtnicity`, `fname`, `lname`, `birthday`, `photo`, `address`, `education`, `religion`, `height`, `excercise`, `passion`, `goal`, `smoke`, `relations`, `zipcode`, `latitude`, `longtitude`, `drink`, `status`, `last_logged`) VALUES
(1, 'hocnv', 0, 'xsadadsad', 'hehe@yopmail.com', '6116afedcb0bc31083935c1c262ff4c9', 0, 'user', 'Pre-Fill', '123', '1234', '0000-00-00', '', 'sdasdsad', 'Pre-Fill', 'Pre-Fill', '3.5', 'Pre-Fill', 'Pre-Fill', 'Pre-Fill', 'Pre-Fill', NULL, NULL, NULL, NULL, 'Pre-Fill', 0, NULL),
(14, 'hocnv12', 0, 'Developer', 'hehe12@yopmail.com', 'e4d56ab2a0f203d110aa4cafb370738a', 0, 'user', 'Pre-Fill', '', '', '1990-02-19', '', 'Petaluma, California 94999, Hoa Kỳ', 'Pre-Fill', 'No', '6.4', '60', '10', '10', '60', 'Single', '94999', '38.2719304', '-122.662005', '60', 0, NULL),
(15, 'hocnv123', 0, 'Developer', 'hehe123@yopmail.com', '8843028fefce50a6de50acdf064ded27', 0, 'user', 'Pre-Fill', '', '', '1978-01-17', '', '58999, Ả Rập Saudi', 'Pre-Fill', 'No', '6.1', '60', '10', '10', '60', 'Single', '58999', '25.2473673', '42.1473903', '60', 0, NULL),
(28, 'testtest', 0, 'Developer', 'test@yopmail.com', '8843028fefce50a6de50acdf064ded27', 0, 'user', 'Pre-Fill', '', '', '1970-01-01', '', '1234 Luxemburg City, Luxembourg', 'Pre-Fill', 'No', '6.3', '60', '10', '10', '60', 'Single', '1234', '49.595617', '6.140838', '60', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `language` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`id`, `title`, `alias`, `content`, `language`) VALUES
(2, 'onecentdeal.de', 'onecentdeal', '<ul>\n	<li>\n		<a href="/">Home</a></li>\n	<li>\n		<a href="/how-it-works">How it works</a></li>\n	<li>\n		<a href="/auctions/allEnded">Ended auction</a></li>\n	<li>\n		<a href="/helps">Help</a></li>\n</ul>\n', 'en'),
(3, 'Basic Autions', 'basic-auction', '<ul>\n            <li><a href="/auctions/active/basic">All active Auction</a></li>\n            <li><a href="/auctions/ended/basic">Ended Auction</a></li>\n            <li><a href="/auctions/upcoming/basic">Upcoming Auction</a></li>\n            <li><a href="/votes/voting/basic">Voting</a></li>\n            <li><a href="/how-it-works">How it works</a></li>\n        </ul>', 'en'),
(4, 'Low-price Auctions', 'low-price-auction', '<ul>\n            <li><a href="/auctions/active/lowprice">All active Auction</a></li>\n            <li><a href="/auctions/ended/lowprice">Ended Auction</a></li>\n            <li><a href="/auctions/upcoming/lowprice">Upcoming Auction</a></li>\n            <li><a href="/votes/voting/lowprice">Voting</a></li>\n       \n        </ul>', 'en'),
(5, 'Informationen', 'information', '<ul>\r\n	<li>[page]terms-of-service[/page]</li>\r\n	<li>[page]faq[/page]</li>\r\n	<li>[page]privacy-policy[/page]</li>\r\n	<li>[page]partners[/page]</li>\r\n	<li>[page]imprint[/page]</li>\r\n	<li>[page]about-us[/page]</li>\r\n</ul>\r\n', 'en'),
(6, 'onecentdeal.de', 'onecentdeal', '<ul>\n	<li>\n		<a href="/">Startseite</a></li>\n	<li>\n		<a href="/how-it-works">So funktioniert es</a></li>\n	<li>\n		<a href="/auctions/allEnded">Beendete Auktionen</a></li>\n	<li>\n		<a href="/helps">Hilfe</a></li>\n</ul>\n', 'de'),
(9, 'Information', 'information', '<ul>\r\n	<li>[page]terms-of-service[/page]</li>\r\n	<li>[page]faq[/page]</li>\r\n	<li>[page]privacy-policy[/page]</li>\r\n	<li>[page]partners[/page]</li>\r\n	<li>[page]imprint[/page]</li>\r\n	<li>[page]about-us[/page]</li>\r\n</ul>\r\n', 'de'),
(10, 'Gründungauktion', 'basic-auction', '<ul>\n            <li><a href="/auctions/active/basic">Alle aktiven Auktionen</a></li>\n            <li><a href="/auctions/ended/basic">Beendete Auktionen</a></li>\n            <li><a href="/auctions/upcoming/basic">Zukünftige Auktionen</a></li>\n            <li><a href="/votes/voting/basic">Voting</a></li>\n            <li><a href="/how-it-works">So funktioniert es</a></li>\n        </ul>', 'de'),
(13, 'Tiefpreis-Auktion', 'low-price-auction', '<ul>\n            <li><a href="/auctions/active/lowprice">Alle aktiven Auktionen</a></li>\n            <li><a href="/auctions/ended/lowprice">Beendete Auktionen</a></li>\n            <li><a href="/auctions/upcoming/lowprice">Zukünftige Auktionen</a></li>\n            <li><a href="/votes/voting/lowprice">Voting</a></li>\n           \n        </ul>', 'de'),
(14, 'abc', 'abc', 'abc', 'en');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
