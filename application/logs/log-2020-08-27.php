<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-27 00:40:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-27 00:40:58 --> 404 Page Not Found: Humanstxt/index
ERROR - 2020-08-27 00:40:59 --> 404 Page Not Found: Adstxt/index
ERROR - 2020-08-27 02:46:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-08-27 07:46:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-27 07:46:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-27 08:10:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-27 14:07:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-27 16:05:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-27 16:15:36 --> 404 Page Not Found: Wp-admin/admin-ajax.php
ERROR - 2020-08-27 16:15:39 --> 404 Page Not Found: Wp-configphp1/index
ERROR - 2020-08-27 16:15:44 --> 404 Page Not Found: Wp-configphpswp/index
ERROR - 2020-08-27 16:15:47 --> 404 Page Not Found: Wp-configphpdisabled/index
ERROR - 2020-08-27 16:15:49 --> 404 Page Not Found: Wp-configbak/index
ERROR - 2020-08-27 16:15:51 --> 404 Page Not Found: Wp-configphpnew/index
ERROR - 2020-08-27 16:15:57 --> 404 Page Not Found: Wp-configphpold/index
ERROR - 2020-08-27 16:15:59 --> 404 Page Not Found: Wp-configphpbak/index
ERROR - 2020-08-27 16:16:12 --> 404 Page Not Found: Wp-configphpbackup/index
ERROR - 2020-08-27 16:16:15 --> 404 Page Not Found: Wp-configphpsave/index
ERROR - 2020-08-27 16:16:17 --> 404 Page Not Found: Wp-configphp~/index
ERROR - 2020-08-27 16:16:22 --> 404 Page Not Found: Wp-configphp_/index
ERROR - 2020-08-27 16:16:29 --> 404 Page Not Found: Wp-configphporig/index
ERROR - 2020-08-27 16:16:32 --> 404 Page Not Found: Wp-configphp_orig/index
ERROR - 2020-08-27 16:16:35 --> 404 Page Not Found: Wp-configphporiginal/index
ERROR - 2020-08-27 16:16:37 --> 404 Page Not Found: Wp-configphp_original/index
ERROR - 2020-08-27 16:16:38 --> 404 Page Not Found: Wp-configphp-original/index
ERROR - 2020-08-27 16:16:43 --> 404 Page Not Found: Wp-configphporiginal/index
ERROR - 2020-08-27 16:16:45 --> 404 Page Not Found: Wp-configgood/index
ERROR - 2020-08-27 16:16:47 --> 404 Page Not Found: Wp-config_good/index
ERROR - 2020-08-27 16:16:59 --> 404 Page Not Found: Wp-config-good/index
ERROR - 2020-08-27 17:39:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-27 17:49:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-27 19:25:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-27 21:40:28 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-08-27 21:52:44 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2020-08-27 22:35:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-08-27 23:43:23 --> 404 Page Not Found: Robotstxt/index
