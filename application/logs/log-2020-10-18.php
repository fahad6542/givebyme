<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-18 01:07:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-18 01:07:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-10-18 03:28:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-18 05:11:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-18 05:41:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-18 06:40:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-18 07:03:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-18 07:35:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-18 16:12:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-18 16:56:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-18 17:46:54 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-10-18 18:10:50 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-10-18 18:45:25 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-10-18 18:45:31 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-10-18 19:21:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-18 20:22:32 --> 404 Page Not Found: Robotstxt/index
