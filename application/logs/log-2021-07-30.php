<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-30 03:31:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-30 06:00:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-30 06:27:28 --> 404 Page Not Found: Wp-includes/index
ERROR - 2021-07-30 10:03:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-30 10:30:42 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-07-30 12:06:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-30 18:30:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-30 19:35:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-30 19:49:41 --> 404 Page Not Found: Stylephp/index
ERROR - 2021-07-30 19:49:53 --> 404 Page Not Found: Modulessphp/index
ERROR - 2021-07-30 19:50:10 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2021-07-30 19:50:22 --> 404 Page Not Found: Adminphp/index
ERROR - 2021-07-30 19:50:58 --> 404 Page Not Found: Boomphp/index
ERROR - 2021-07-30 19:51:10 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2021-07-30 19:51:20 --> 404 Page Not Found: Wp-content/db_cache.php
ERROR - 2021-07-30 19:51:35 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2021-07-30 19:51:50 --> 404 Page Not Found: Xmlrpphp/index
ERROR - 2021-07-30 19:52:03 --> 404 Page Not Found: Wpindexphp/index
ERROR - 2021-07-30 19:52:16 --> 404 Page Not Found: Larvaphp/index
ERROR - 2021-07-30 19:52:28 --> 404 Page Not Found: Th3_err0rphp/index
ERROR - 2021-07-30 19:52:42 --> 404 Page Not Found: Alfindexphp/index
ERROR - 2021-07-30 19:52:54 --> 404 Page Not Found: Alfaphp/index
ERROR - 2021-07-30 19:53:09 --> 404 Page Not Found: Wp-bookingphp/index
ERROR - 2021-07-30 19:53:22 --> 404 Page Not Found: Cindexphp/index
ERROR - 2021-07-30 19:53:39 --> 404 Page Not Found: Wp-content/wp-1ogin_bak.php
ERROR - 2021-07-30 19:53:58 --> 404 Page Not Found: Wp-1ogin_bakphp/index
ERROR - 2021-07-30 19:54:17 --> 404 Page Not Found: Wp-includes/fonts
ERROR - 2021-07-30 19:54:38 --> 404 Page Not Found: Wp-includes/css
ERROR - 2021-07-30 19:54:54 --> 404 Page Not Found: Old-indexphp/index
ERROR - 2021-07-30 19:55:10 --> 404 Page Not Found: Configbakphp/index
ERROR - 2021-07-30 19:55:29 --> 404 Page Not Found: Wp-admin/config.bak.php
ERROR - 2021-07-30 19:55:45 --> 404 Page Not Found: Wp-content/config.bak.php
ERROR - 2021-07-30 19:55:56 --> 404 Page Not Found: Wp-includes/config.bak.php
ERROR - 2021-07-30 19:56:13 --> 404 Page Not Found: Wp-content/themes
ERROR - 2021-07-30 19:56:27 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2021-07-30 19:56:54 --> 404 Page Not Found: Wp-includes/css
ERROR - 2021-07-30 19:57:09 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2021-07-30 19:57:24 --> 404 Page Not Found: Wp-includes/wpconfig.bak.php
ERROR - 2021-07-30 19:57:37 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2021-07-30 19:57:52 --> 404 Page Not Found: Hadersphp/index
ERROR - 2021-07-30 19:58:06 --> 404 Page Not Found: Wp-content/wp-old-index.php
ERROR - 2021-07-30 19:58:21 --> 404 Page Not Found: Legionphp/index
ERROR - 2021-07-30 19:58:38 --> 404 Page Not Found: Wp-content/mu-plugins
ERROR - 2021-07-30 19:58:51 --> 404 Page Not Found: Wp-includes/lfx.php
ERROR - 2021-07-30 19:59:06 --> 404 Page Not Found: Wp-includes/small.php
ERROR - 2021-07-30 19:59:20 --> 404 Page Not Found: Upphp/index
ERROR - 2021-07-30 19:59:32 --> 404 Page Not Found: Uploadphp/index
ERROR - 2021-07-30 19:59:44 --> 404 Page Not Found: Configphp/index
ERROR - 2021-07-30 19:59:57 --> 404 Page Not Found: Testphp/index
ERROR - 2021-07-30 20:00:11 --> 404 Page Not Found: Wp-content/langar.php
ERROR - 2021-07-30 20:00:25 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2021-07-30 20:00:43 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2021-07-30 20:00:56 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2021-07-30 21:04:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-30 21:04:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-07-30 21:24:29 --> 404 Page Not Found: Robotstxt/index
