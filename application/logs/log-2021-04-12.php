<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-12 02:00:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-12 02:00:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-04-12 03:15:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-12 03:15:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-04-12 03:40:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-12 05:07:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-12 06:25:33 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-04-12 07:50:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-12 08:15:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-12 10:07:23 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-04-12 11:47:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-12 12:56:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-12 13:02:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-12 18:24:01 --> 404 Page Not Found: Admin/assets
ERROR - 2021-04-12 18:24:01 --> 404 Page Not Found: Public/assets
ERROR - 2021-04-12 19:15:27 --> 404 Page Not Found: Env/index
ERROR - 2021-04-12 19:15:27 --> 404 Page Not Found: Env/index
ERROR - 2021-04-12 22:20:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-12 23:46:44 --> 404 Page Not Found: Robotstxt/index
