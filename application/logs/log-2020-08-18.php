<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-18 02:41:13 --> 404 Page Not Found: M/wp-login.php
ERROR - 2020-08-18 03:13:23 --> 404 Page Not Found: Wp-content/class.php
ERROR - 2020-08-18 03:47:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-08-18 03:56:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-18 07:27:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-18 07:29:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-18 11:27:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-18 11:27:59 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2020-08-18 16:42:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-18 17:11:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-18 18:37:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-18 23:32:51 --> 404 Page Not Found: Robotstxt/index
