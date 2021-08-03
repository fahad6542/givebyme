<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-16 00:36:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 01:33:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 02:18:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 03:01:17 --> 404 Page Not Found: Adminer-364php/index
ERROR - 2020-09-16 03:48:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 04:08:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 05:02:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 05:35:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 07:00:09 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-09-16 07:10:23 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-09-16 07:31:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-09-16 08:30:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 08:30:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 13:25:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 13:29:56 --> 404 Page Not Found: Wp/wp-content
ERROR - 2020-09-16 13:30:38 --> 404 Page Not Found: Blog/wp-content
ERROR - 2020-09-16 13:58:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 13:58:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 15:29:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 19:42:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 19:42:50 --> 404 Page Not Found: StripePost/index
ERROR - 2020-09-16 22:05:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 22:09:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 22:13:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-16 23:56:04 --> 404 Page Not Found: Robotstxt/index
