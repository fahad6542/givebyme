<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-05 00:49:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-05 00:49:30 --> 404 Page Not Found: Asset-manifestjson/index
ERROR - 2020-12-05 01:22:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-05 03:05:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-05 06:04:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-05 06:20:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-05 06:22:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-05 09:19:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-05 10:32:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-05 13:45:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-05 14:21:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-05 16:23:37 --> 404 Page Not Found: Wp-admin/install.php
ERROR - 2020-12-05 17:37:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-05 18:05:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-12-05 18:52:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-05 21:16:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-05 22:53:36 --> 404 Page Not Found: Robotstxt/index
