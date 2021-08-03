<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-12 00:34:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-12 05:01:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-11-12 07:07:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-12 07:15:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-12 10:51:27 --> 404 Page Not Found: Env/index
ERROR - 2020-11-12 12:36:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-12 13:06:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-12 13:48:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-12 13:50:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-12 13:50:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-12 14:22:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-12 18:41:34 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-11-12 19:44:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-12 19:44:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-11-12 20:01:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-12 22:31:43 --> 404 Page Not Found: Robotstxt/index
