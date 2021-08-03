<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-14 01:03:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-14 01:40:13 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2020-08-14 01:40:14 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2020-08-14 01:40:14 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2020-08-14 01:40:15 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2020-08-14 01:40:15 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2020-08-14 08:52:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-08-14 09:26:16 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-08-14 10:05:18 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-08-14 12:07:53 --> 404 Page Not Found: Wp-admin/install.php
ERROR - 2020-08-14 13:44:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-14 17:33:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-14 18:28:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-14 21:08:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-14 21:08:04 --> 404 Page Not Found: Well-known/assetlinks.json
