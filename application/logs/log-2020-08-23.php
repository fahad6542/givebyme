<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-23 02:34:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-23 03:04:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-23 03:29:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-23 07:49:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-23 08:48:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-23 10:48:09 --> 404 Page Not Found: Administrator/index.php
ERROR - 2020-08-23 10:52:32 --> 404 Page Not Found: Administrator/index.php
ERROR - 2020-08-23 13:12:25 --> 404 Page Not Found: Wp-json/index
ERROR - 2020-08-23 13:12:31 --> 404 Page Not Found: Blog/wp-json
ERROR - 2020-08-23 14:46:48 --> 404 Page Not Found: Env/index
ERROR - 2020-08-23 14:46:48 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2020-08-23 15:54:59 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2020-08-23 17:08:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-23 17:41:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-08-23 18:50:37 --> 404 Page Not Found: Wp-content/class.php
