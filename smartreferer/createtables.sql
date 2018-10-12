# phpMyAdmin SQL Dump
# version 2.5.5-pl1
# http://www.phpmyadmin.net
#
# Host: localhost
# Generation Time: Jul 06, 2004 at 03:30 PM
# Server version: 4.0.17
# PHP Version: 4.3.4
# 
# $Id: createtables.sql,v 1.3 2004/07/20 11:58:12 jfenin Exp $
# --------------------------------------------------------

#
# Table structure for table `sr_browser`
#

CREATE TABLE `sr_browser` (
  `MD5HASH` varchar(32) NOT NULL default '',
  `BROWSER` varchar(100) NOT NULL default '',
  `OS` varchar(40) default NULL,
  UNIQUE KEY `MD5HASH` (`MD5HASH`)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `sr_referer`
#

CREATE TABLE `sr_referer` (
  `URL` varchar(250) default NULL,
  `LASTACCESS` datetime NOT NULL default '0000-00-00 00:00:00',
  `ACCESSCOUNT` int(11) default NULL,
  `DISPLAY` char(1) default 'Y',
  UNIQUE KEY `URL` (`URL`)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `sr_useragent`
#

CREATE TABLE `sr_useragent` (
  `MD5HASH` varchar(32) NOT NULL default '',
  `LASTACCESS` datetime default NULL,
  `ACCESSCOUNT` int(11) default NULL,
  UNIQUE KEY `MD5HASH` (`MD5HASH`)
) TYPE=MyISAM;


