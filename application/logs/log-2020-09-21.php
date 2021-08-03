<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-21 01:09:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-21 01:09:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-09-21 02:54:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-21 04:12:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-21 09:42:21 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2020-09-21 09:43:13 --> 404 Page Not Found: Wp/index
ERROR - 2020-09-21 09:44:13 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2020-09-21 09:45:03 --> 404 Page Not Found: Wordpress/index
ERROR - 2020-09-21 09:45:55 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2020-09-21 09:47:43 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2020-09-21 09:49:16 --> 404 Page Not Found: Wp/index
ERROR - 2020-09-21 09:50:02 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2020-09-21 09:50:23 --> 404 Page Not Found: Wordpress/index
ERROR - 2020-09-21 09:50:42 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2020-09-21 14:01:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-21 15:01:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-21 20:22:37 --> 404 Page Not Found: Robotstxt/index
