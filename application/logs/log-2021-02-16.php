<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-02-16 01:47:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-16 03:56:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-16 04:04:58 --> 404 Page Not Found: Env/index
ERROR - 2021-02-16 04:05:58 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2021-02-16 04:44:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-16 04:45:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-16 05:50:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-16 06:04:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-16 08:09:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-16 09:18:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-16 13:26:42 --> 404 Page Not Found: Wp-includes/js
ERROR - 2021-02-16 17:45:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-16 17:55:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-16 18:48:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-16 18:48:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-02-16 19:55:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-16 20:06:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-16 22:31:33 --> 404 Page Not Found: Robotstxt/index
