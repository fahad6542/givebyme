<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-17 03:43:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-17 05:36:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-17 08:05:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2019-10-17 17:53:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-17 18:14:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-17 18:14:05 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2019-10-17 18:14:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-10-17 23:33:24 --> 404 Page Not Found: Robotstxt/index
