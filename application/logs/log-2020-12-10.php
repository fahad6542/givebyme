<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-10 01:29:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 01:42:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 01:42:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-12-10 03:22:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 04:39:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 04:52:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 06:07:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 06:17:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 06:17:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 11:26:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 12:31:27 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2020-12-10 13:28:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 13:34:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 15:48:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 17:43:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 22:38:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 22:38:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-10 22:38:15 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2020-12-10 23:17:04 --> 404 Page Not Found: Robotstxt/index
