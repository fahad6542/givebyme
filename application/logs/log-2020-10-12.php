<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-12 00:58:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 02:27:49 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-10-12 04:43:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 04:44:13 --> 404 Page Not Found: StripeSub/index
ERROR - 2020-10-12 06:10:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 06:16:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 11:17:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 11:27:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-10-12 11:48:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 12:49:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 13:47:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 13:47:46 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2020-10-12 14:21:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 14:41:11 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2020-10-12 15:29:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 15:49:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 17:24:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 17:24:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 19:32:11 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2020-10-12 19:41:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 19:56:10 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2020-10-12 20:44:10 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2020-10-12 21:07:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 21:44:37 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2020-10-12 22:08:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-12 22:33:53 --> 404 Page Not Found: Robotstxt/index
