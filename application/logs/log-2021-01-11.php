<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-11 00:32:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-11 00:32:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-11 05:23:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-11 05:23:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-01-11 06:39:56 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2021-01-11 08:07:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-11 08:54:31 --> 404 Page Not Found: Misc/print.css
ERROR - 2021-01-11 08:54:31 --> 404 Page Not Found: Misc/print.css
ERROR - 2021-01-11 10:43:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-11 11:49:49 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-01-11 12:32:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-11 14:15:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-11 14:29:02 --> 404 Page Not Found: Env/index
ERROR - 2021-01-11 15:05:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-11 15:45:30 --> 404 Page Not Found: Themes/README.txt
ERROR - 2021-01-11 15:45:30 --> 404 Page Not Found: Themes/README.txt
ERROR - 2021-01-11 15:46:03 --> 404 Page Not Found: Env/index
ERROR - 2021-01-11 16:20:45 --> 404 Page Not Found: Wp-infophp/index
ERROR - 2021-01-11 16:33:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-01-11 19:12:11 --> 404 Page Not Found: Robotstxt/index
