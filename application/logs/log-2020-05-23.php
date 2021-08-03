<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-23 00:16:39 --> 404 Page Not Found: Phpmyadmin/index
ERROR - 2020-05-23 00:41:27 --> 404 Page Not Found: TelerikWebUIWebResourceaxd/index
ERROR - 2020-05-23 04:48:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-05-23 08:54:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-05-23 09:52:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-05-23 09:52:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-05-23 10:34:54 --> 404 Page Not Found: Adminer/index.php
ERROR - 2020-05-23 13:51:41 --> 404 Page Not Found: Phpmyadmin/index
ERROR - 2020-05-23 22:28:30 --> 404 Page Not Found: Robotstxt/index
