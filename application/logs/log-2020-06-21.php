<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-21 01:54:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-06-21 01:54:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-06-21 05:54:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-06-21 07:10:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-06-21 12:58:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-06-21 12:58:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-06-21 22:30:48 --> 404 Page Not Found: Robotstxt/index
