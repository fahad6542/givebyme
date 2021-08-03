<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-28 01:44:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-10-28 03:53:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-28 06:05:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-28 06:34:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-28 07:45:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-28 15:29:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-28 19:18:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-28 20:01:27 --> 404 Page Not Found: Robotstxt/index
