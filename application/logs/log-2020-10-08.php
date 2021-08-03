<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-08 00:19:25 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2020-10-08 01:11:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-08 04:02:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-08 04:16:56 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2020-10-08 04:58:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-08 05:25:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-08 06:47:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-08 08:09:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-08 12:26:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-10-08 12:45:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-08 15:58:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-08 16:23:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-08 17:56:01 --> 404 Page Not Found: Config/.env
ERROR - 2020-10-08 17:56:01 --> 404 Page Not Found: Config/index
ERROR - 2020-10-08 19:44:17 --> 404 Page Not Found: Env/index
ERROR - 2020-10-08 19:48:07 --> 404 Page Not Found: Dev/.env
ERROR - 2020-10-08 19:48:07 --> 404 Page Not Found: Dev/index
ERROR - 2020-10-08 20:19:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-08 22:41:34 --> 404 Page Not Found: Resources/.env
ERROR - 2020-10-08 22:41:34 --> 404 Page Not Found: Resources/index
