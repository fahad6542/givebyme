<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-25 02:38:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-25 02:38:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-25 06:34:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-25 11:06:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-25 11:14:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-25 12:10:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-25 12:10:56 --> 404 Page Not Found: Campaign/detail
ERROR - 2019-10-25 14:54:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-25 14:54:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-25 15:29:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-25 17:18:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-25 17:18:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2019-10-25 17:27:37 --> 404 Page Not Found: Robotstxt/index
