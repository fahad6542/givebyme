<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-06 00:53:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 00:53:40 --> 404 Page Not Found: Humanstxt/index
ERROR - 2021-05-06 00:53:40 --> 404 Page Not Found: Adstxt/index
ERROR - 2021-05-06 02:42:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 06:30:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 06:52:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 06:53:37 --> 404 Page Not Found: StripeSub/index
ERROR - 2021-05-06 07:04:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-05-06 08:10:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 08:54:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 10:28:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 13:49:42 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2021-05-06 13:49:42 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2021-05-06 13:49:42 --> 404 Page Not Found: Wp-admin/index
ERROR - 2021-05-06 13:49:42 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-05-06 14:05:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 14:09:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 14:24:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 15:12:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 15:26:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 15:31:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 15:56:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 17:02:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-06 18:59:54 --> 404 Page Not Found: Plugins/jqueryupload
ERROR - 2021-05-06 23:45:42 --> 404 Page Not Found: Env/index
ERROR - 2021-05-06 23:45:58 --> 404 Page Not Found: Vendor/phpunit
