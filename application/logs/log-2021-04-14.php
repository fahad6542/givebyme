<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-14 01:13:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-14 02:23:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-14 04:39:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-14 05:19:09 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-04-14 05:52:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-14 09:07:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-14 09:07:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-14 09:07:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-14 10:26:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-14 10:26:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-14 12:02:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-14 13:33:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-14 14:35:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-14 21:29:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-04-14 22:43:04 --> 404 Page Not Found: Robotstxt/index
