<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-20 02:52:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-20 02:54:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-20 02:54:49 --> 404 Page Not Found: Js/plugins
ERROR - 2020-09-20 02:54:49 --> 404 Page Not Found: Js/plugins
ERROR - 2020-09-20 02:54:49 --> 404 Page Not Found: Js/plugins
ERROR - 2020-09-20 02:54:50 --> 404 Page Not Found: Js/plugins
ERROR - 2020-09-20 02:54:50 --> 404 Page Not Found: Js/plugins
ERROR - 2020-09-20 02:54:50 --> 404 Page Not Found: Js/plugins
ERROR - 2020-09-20 02:54:50 --> 404 Page Not Found: Js/plugins
ERROR - 2020-09-20 02:54:51 --> 404 Page Not Found: Js/plugins
ERROR - 2020-09-20 02:54:51 --> 404 Page Not Found: Js/plugins
ERROR - 2020-09-20 02:54:51 --> 404 Page Not Found: Js/plugins
ERROR - 2020-09-20 02:54:54 --> 404 Page Not Found: Js/settings.js
ERROR - 2020-09-20 02:54:56 --> 404 Page Not Found: File/index
ERROR - 2020-09-20 02:54:58 --> 404 Page Not Found: Campaign/detail
ERROR - 2020-09-20 02:55:11 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-09-20 02:55:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-09-20 04:04:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-20 11:20:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-20 11:36:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-20 11:36:56 --> 404 Page Not Found: Humanstxt/index
ERROR - 2020-09-20 11:36:56 --> 404 Page Not Found: Adstxt/index
ERROR - 2020-09-20 11:49:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-20 13:58:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-20 16:57:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-20 19:57:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-20 21:09:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-20 21:43:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-20 22:01:11 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-09-20 22:21:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-20 22:44:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-20 23:35:56 --> 404 Page Not Found: Wp-content/plugins
