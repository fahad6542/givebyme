<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-07 00:04:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-07 00:05:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-07 00:05:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-07 00:05:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-07 00:18:31 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2020-11-07 01:07:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-07 02:47:57 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-11-07 03:03:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-07 04:00:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-07 06:04:28 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-11-07 07:58:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-07 07:59:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-11-07 10:10:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-07 10:46:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-07 11:25:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-07 12:19:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-07 20:49:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-07 21:57:19 --> 404 Page Not Found: Robotstxt/index
