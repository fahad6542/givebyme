<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-09 00:07:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-09 03:17:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-09 03:52:11 --> 404 Page Not Found: Storage/.env
ERROR - 2020-10-09 03:52:11 --> 404 Page Not Found: Storage/index
ERROR - 2020-10-09 04:44:48 --> 404 Page Not Found: Laravel/.env
ERROR - 2020-10-09 04:44:48 --> 404 Page Not Found: Laravel/index
ERROR - 2020-10-09 04:44:49 --> 404 Page Not Found: Env/index
ERROR - 2020-10-09 06:07:32 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-10-09 06:53:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-09 06:53:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-09 06:53:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-09 06:54:29 --> 404 Page Not Found: Campaign/detail
ERROR - 2020-10-09 07:44:21 --> 404 Page Not Found: Campaign/detail
ERROR - 2020-10-09 08:04:00 --> 404 Page Not Found: Tests/.env
ERROR - 2020-10-09 09:03:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-09 09:03:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-10-09 13:30:22 --> 404 Page Not Found: Bootstrap/.env
ERROR - 2020-10-09 13:30:22 --> 404 Page Not Found: Bootstrap/index
ERROR - 2020-10-09 13:50:06 --> 404 Page Not Found: App/.env
ERROR - 2020-10-09 13:50:07 --> 404 Page Not Found: App/index
ERROR - 2020-10-09 15:05:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-09 15:05:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-09 16:21:18 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-10-09 17:42:48 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-10-09 18:00:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-09 18:58:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-09 20:01:08 --> 404 Page Not Found: Wp-configphp_old/index
ERROR - 2020-10-09 20:01:08 --> 404 Page Not Found: Wp-configphp_Old/index
ERROR - 2020-10-09 20:01:09 --> 404 Page Not Found: Wp-configphpnew/index
ERROR - 2020-10-09 20:01:10 --> 404 Page Not Found: Wp-configphpold/index
ERROR - 2020-10-09 20:01:10 --> 404 Page Not Found: Wp-configphp_new/index
ERROR - 2020-10-09 20:01:11 --> 404 Page Not Found: Wp-configbak/index
ERROR - 2020-10-09 20:01:11 --> 404 Page Not Found: Wp-configphpbak/index
ERROR - 2020-10-09 20:01:12 --> 404 Page Not Found: Wp-configphp_bak/index
ERROR - 2020-10-09 20:01:13 --> 404 Page Not Found: Wp-configphp-bak/index
ERROR - 2020-10-09 20:18:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-09 20:44:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-09 22:02:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-10-09 23:14:36 --> 404 Page Not Found: Robotstxt/index
