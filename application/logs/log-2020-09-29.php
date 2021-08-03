<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-29 01:40:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-29 03:10:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-29 03:36:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-29 05:56:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-29 11:38:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-29 12:13:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-29 16:00:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-29 18:43:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-29 20:41:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-09-29 22:47:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-29 23:08:47 --> 404 Page Not Found: Campaign/detail
