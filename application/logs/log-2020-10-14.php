<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-14 00:33:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-14 01:06:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-14 01:19:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-14 02:31:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-14 07:20:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-14 08:57:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-14 08:57:22 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2020-10-14 11:14:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-14 11:31:46 --> 404 Page Not Found: Nettemicro/index
ERROR - 2020-10-14 11:31:56 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-10-14 11:32:11 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-10-14 11:32:20 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-10-14 11:32:33 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-10-14 11:32:46 --> 404 Page Not Found: Nettemicro/index
ERROR - 2020-10-14 18:01:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-14 19:23:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-14 22:39:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-14 22:39:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
