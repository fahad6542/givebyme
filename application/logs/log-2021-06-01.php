<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-06-01 00:21:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-01 03:38:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-01 05:46:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-06-01 06:00:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-01 06:20:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-01 06:28:35 --> 404 Page Not Found: Wp-admin/admin-ajax.php
ERROR - 2021-06-01 06:45:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-01 10:10:02 --> 404 Page Not Found: Assets/index
ERROR - 2021-06-01 10:10:02 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2021-06-01 10:10:03 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2021-06-01 10:10:03 --> 404 Page Not Found: Assets/home
ERROR - 2021-06-01 10:10:03 --> 404 Page Not Found: Assets/home
ERROR - 2021-06-01 10:10:03 --> 404 Page Not Found: Assets/home
ERROR - 2021-06-01 10:10:03 --> 404 Page Not Found: Assets/home
ERROR - 2021-06-01 10:10:04 --> 404 Page Not Found: Assets/uploads
ERROR - 2021-06-01 10:10:04 --> 404 Page Not Found: Assets/uploads
ERROR - 2021-06-01 11:36:20 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-06-01 11:37:02 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-06-01 11:38:51 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-06-01 13:20:20 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-06-01 13:20:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-06-01 15:39:47 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-06-01 15:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
