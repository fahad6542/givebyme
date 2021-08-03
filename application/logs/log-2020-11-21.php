<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-21 01:52:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-21 04:30:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-21 07:03:38 --> 404 Page Not Found: Env/index
ERROR - 2020-11-21 07:03:40 --> 404 Page Not Found: Env/index
ERROR - 2020-11-21 07:13:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-21 08:42:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-21 11:10:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-21 11:10:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-21 11:31:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-21 16:10:41 --> 404 Page Not Found: Campaign/detail
ERROR - 2020-11-21 16:11:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-11-21 16:56:15 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-11-21 16:56:37 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-11-21 16:56:43 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-11-21 16:56:50 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-11-21 16:56:53 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-11-21 16:57:28 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-11-21 16:57:35 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-11-21 16:58:18 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-11-21 16:58:30 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-11-21 18:37:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-21 20:21:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-21 20:28:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-21 20:46:09 --> 404 Page Not Found: Robotstxt/index
