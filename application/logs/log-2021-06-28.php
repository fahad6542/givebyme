<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-06-28 00:06:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-28 01:01:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-28 07:25:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-28 08:19:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-06-28 10:50:35 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-06-28 11:29:13 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2021-06-28 12:34:29 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2021-06-28 13:03:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-28 13:18:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-28 13:45:09 --> 404 Page Not Found: Env/index
ERROR - 2021-06-28 13:45:09 --> 404 Page Not Found: Env/index
ERROR - 2021-06-28 15:16:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-28 15:33:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-28 16:46:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-28 21:55:42 --> 404 Page Not Found: Env/index
ERROR - 2021-06-28 23:15:10 --> 404 Page Not Found: Robotstxt/index
