<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-12 04:04:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-12 04:17:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-12 07:17:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-12 10:07:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-12 13:00:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-12 14:02:49 --> 404 Page Not Found: Wp-infophp/index
ERROR - 2020-12-12 14:06:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-12 15:59:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-12 17:06:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-12-12 17:26:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-12 20:00:49 --> 404 Page Not Found: Wp-includes/css
ERROR - 2020-12-12 20:00:56 --> 404 Page Not Found: Wp-includes/fonts
ERROR - 2020-12-12 20:15:25 --> 404 Page Not Found: Wp-includes/css
ERROR - 2020-12-12 20:15:35 --> 404 Page Not Found: Wp-includes/fonts
ERROR - 2020-12-12 20:26:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-12 20:26:18 --> 404 Page Not Found: Humanstxt/index
ERROR - 2020-12-12 20:26:18 --> 404 Page Not Found: Adstxt/index
ERROR - 2020-12-12 22:10:04 --> 404 Page Not Found: Robotstxt/index
