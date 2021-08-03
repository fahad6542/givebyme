<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-01 06:00:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-01 07:53:00 --> 404 Page Not Found: Env/index
ERROR - 2020-10-01 10:46:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-01 11:57:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-01 13:10:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-10-01 15:33:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-01 16:49:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-01 20:16:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-01 20:42:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-01 20:42:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-01 21:52:12 --> 404 Page Not Found: Robotstxt/index
