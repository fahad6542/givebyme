<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-17 01:54:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 05:32:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 10:14:39 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-04-17 11:26:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 11:31:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 11:59:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 12:02:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 12:10:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 12:10:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 12:17:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 12:21:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 12:25:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 12:25:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 12:30:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 12:32:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 12:37:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-04-17 12:37:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 12:41:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 12:43:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 12:47:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 14:47:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 15:34:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 20:42:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-17 21:01:48 --> 404 Page Not Found: Statics/js
ERROR - 2021-04-17 22:53:21 --> 404 Page Not Found: Robotstxt/index
