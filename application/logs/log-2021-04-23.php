<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-23 01:21:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-04-23 10:27:11 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-04-23 10:28:28 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-04-23 12:13:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-23 14:29:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-23 15:15:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-23 15:40:37 --> 404 Page Not Found: Plugins/elfinder
ERROR - 2021-04-23 17:09:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-23 18:03:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-23 20:58:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-23 23:54:41 --> 404 Page Not Found: Robotstxt/index
