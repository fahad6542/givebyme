<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-13 04:45:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-01-13 06:40:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-01-13 06:47:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-01-13 06:48:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-01-13 08:31:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-01-13 09:57:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-01-13 17:39:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-01-13 17:39:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-01-13 20:25:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-01-13 20:37:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-01-13 21:30:04 --> 404 Page Not Found: Robotstxt/index
