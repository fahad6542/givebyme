<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-03 01:34:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-03 05:58:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-08-03 06:07:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-03 13:31:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-03 13:31:29 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2020-08-03 14:16:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-03 14:44:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-03 15:54:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-03 20:24:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-03 21:16:48 --> 404 Page Not Found: Robotstxt/index
