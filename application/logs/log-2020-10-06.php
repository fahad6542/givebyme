<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-06 02:10:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-06 03:56:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-06 06:11:38 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2020-10-06 08:29:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-06 08:29:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-06 08:32:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-06 08:44:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-06 09:04:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-10-06 09:52:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-06 11:09:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-06 11:45:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-06 12:04:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-06 13:23:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-06 14:01:40 --> 404 Page Not Found: Campaign/detail
ERROR - 2020-10-06 14:39:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-06 17:27:17 --> 404 Page Not Found: Campaign/detail
ERROR - 2020-10-06 21:53:06 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2020-10-06 23:32:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-06 23:32:53 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2020-10-06 23:33:07 --> 404 Page Not Found: Adstxt/index
