<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-08 00:40:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-08 03:02:36 --> 404 Page Not Found: Public/assets
ERROR - 2021-05-08 03:02:36 --> 404 Page Not Found: Public/assets
ERROR - 2021-05-08 03:02:36 --> 404 Page Not Found: Public/assets
ERROR - 2021-05-08 03:02:36 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-05-08 03:02:36 --> 404 Page Not Found: Assets/global
ERROR - 2021-05-08 04:29:41 --> 404 Page Not Found: Dede/login.php
ERROR - 2021-05-08 04:38:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-08 06:56:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-08 08:11:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-08 08:53:56 --> 404 Page Not Found: Admin/assets
ERROR - 2021-05-08 08:53:56 --> 404 Page Not Found: Admin/assets
ERROR - 2021-05-08 08:53:56 --> 404 Page Not Found: Admin/assets
ERROR - 2021-05-08 08:53:56 --> 404 Page Not Found: Public/admin
ERROR - 2021-05-08 08:53:56 --> 404 Page Not Found: Plugins/fileupload
ERROR - 2021-05-08 09:06:05 --> 404 Page Not Found: Env/index
ERROR - 2021-05-08 09:12:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-08 15:12:54 --> 404 Page Not Found: Admin/fileupload
ERROR - 2021-05-08 15:12:54 --> 404 Page Not Found: Assets/backend
ERROR - 2021-05-08 15:12:54 --> 404 Page Not Found: Assets/admin
ERROR - 2021-05-08 15:12:55 --> 404 Page Not Found: Theme/assets
ERROR - 2021-05-08 15:13:00 --> 404 Page Not Found: Theme/assets
ERROR - 2021-05-08 15:13:02 --> 404 Page Not Found: Theme/assets
ERROR - 2021-05-08 17:05:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-08 17:05:55 --> 404 Page Not Found: StripeSub/index
ERROR - 2021-05-08 17:05:59 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2021-05-08 19:10:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-05-08 19:16:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-08 19:50:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-08 20:10:21 --> 404 Page Not Found: Robotstxt/index
