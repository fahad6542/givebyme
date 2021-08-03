<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-12 00:26:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-12 01:11:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-12 02:54:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-12 03:30:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-12 03:30:02 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2021-01-12 04:23:37 --> 404 Page Not Found: Sites/all
ERROR - 2021-01-12 04:23:37 --> 404 Page Not Found: Sites/all
ERROR - 2021-01-12 04:37:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-01-12 06:41:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-12 08:41:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-12 10:45:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-12 12:11:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-12 13:51:15 --> 404 Page Not Found: Env/index
ERROR - 2021-01-12 14:07:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-12 15:23:53 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2021-01-12 19:47:37 --> 404 Page Not Found: Robotstxt/index
