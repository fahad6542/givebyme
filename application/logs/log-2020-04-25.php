<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-25 03:53:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-25 04:27:30 --> 404 Page Not Found: Test/license.txt
ERROR - 2020-04-25 07:00:06 --> 404 Page Not Found: Campaign/detail
ERROR - 2020-04-25 07:00:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-04-25 07:17:34 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-04-25 07:17:38 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-04-25 07:17:44 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-04-25 07:17:49 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-04-25 07:17:53 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-04-25 07:18:01 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-04-25 07:18:13 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-04-25 07:18:28 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-04-25 07:18:47 --> 404 Page Not Found: Assets/user-dashboard
ERROR - 2020-04-25 11:46:47 --> 404 Page Not Found: Tmp/license.txt
ERROR - 2020-04-25 12:25:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-25 12:25:06 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2020-04-25 13:12:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-25 13:12:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-25 13:12:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-25 15:03:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-25 15:44:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-25 16:36:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-25 19:16:58 --> 404 Page Not Found: Temp/index
