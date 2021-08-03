<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-10 01:39:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-10 05:02:54 --> 404 Page Not Found: Env/index
ERROR - 2021-07-10 05:02:55 --> 404 Page Not Found: Wp-content/index
ERROR - 2021-07-10 07:30:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-10 08:09:23 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-07-10 08:31:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-07-10 08:50:13 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-07-10 09:05:39 --> 404 Page Not Found: Env/index
ERROR - 2021-07-10 09:05:51 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2021-07-10 09:11:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-07-10 12:20:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-10 18:51:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-10 20:55:28 --> 404 Page Not Found: Env/index
ERROR - 2021-07-10 20:55:30 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2021-07-10 21:05:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-10 21:26:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-10 22:28:10 --> 404 Page Not Found: Robotstxt/index
