<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-14 01:07:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-14 01:07:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-07-14 02:25:23 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-07-14 02:25:23 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-07-14 04:12:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-14 06:34:36 --> 404 Page Not Found: Env/index
ERROR - 2021-07-14 06:34:40 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2021-07-14 06:42:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-14 06:42:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-14 07:24:06 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2021-07-14 09:37:14 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-07-14 10:14:34 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-07-14 10:40:07 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-07-14 10:54:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-14 13:15:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-14 14:55:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-14 15:32:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-14 17:54:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-14 18:21:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-14 18:25:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-14 19:54:08 --> 404 Page Not Found: Wp-content/plugins
