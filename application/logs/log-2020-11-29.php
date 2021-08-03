<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-29 00:19:49 --> 404 Page Not Found: Env/index
ERROR - 2020-11-29 00:22:25 --> 404 Page Not Found: Env/index
ERROR - 2020-11-29 00:57:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-29 00:57:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-29 02:38:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-29 02:38:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-29 02:38:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-29 03:00:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-29 03:40:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-29 04:04:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-29 05:42:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-29 07:01:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-29 08:04:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-29 08:29:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-29 11:32:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-11-29 13:43:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-11-29 22:35:13 --> 404 Page Not Found: Robotstxt/index
