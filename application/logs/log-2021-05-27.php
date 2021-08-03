<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-27 01:26:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-05-27 04:29:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-27 06:28:13 --> 404 Page Not Found: Wp-admin/admin-ajax.php
ERROR - 2021-05-27 08:53:44 --> 404 Page Not Found: Env/index
ERROR - 2021-05-27 10:10:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-27 10:13:16 --> 404 Page Not Found: Loginasp/index
ERROR - 2021-05-27 10:13:26 --> 404 Page Not Found: Loginaspx/index
ERROR - 2021-05-27 10:13:40 --> 404 Page Not Found: Logincfm/index
ERROR - 2021-05-27 10:13:58 --> 404 Page Not Found: Logincgi/index
ERROR - 2021-05-27 10:13:59 --> 404 Page Not Found: Loginhtm/index
ERROR - 2021-05-27 10:14:01 --> 404 Page Not Found: Loginhtml/index
ERROR - 2021-05-27 10:14:22 --> 404 Page Not Found: Loginphp/index
ERROR - 2021-05-27 10:14:46 --> 404 Page Not Found: Adm/admin.php
ERROR - 2021-05-27 10:45:26 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-27 10:49:54 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-27 15:52:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-27 15:52:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-27 19:27:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-27 19:55:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-27 22:30:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-27 23:18:47 --> 404 Page Not Found: Robotstxt/index
