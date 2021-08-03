<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-18 00:31:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-18 02:49:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-18 03:22:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-18 03:22:28 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2021-05-18 03:22:41 --> 404 Page Not Found: Adstxt/index
ERROR - 2021-05-18 03:33:24 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-05-18 03:33:24 --> 404 Page Not Found: Admin/assets
ERROR - 2021-05-18 03:33:34 --> 404 Page Not Found: Assets/global
ERROR - 2021-05-18 03:33:36 --> 404 Page Not Found: Public/assets
ERROR - 2021-05-18 03:33:36 --> 404 Page Not Found: Public/assets
ERROR - 2021-05-18 05:05:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-18 08:38:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-18 08:43:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-18 09:56:49 --> 404 Page Not Found: Assets/admin
ERROR - 2021-05-18 09:56:49 --> 404 Page Not Found: Admin/assets
ERROR - 2021-05-18 09:56:49 --> 404 Page Not Found: Public/admin
ERROR - 2021-05-18 09:56:50 --> 404 Page Not Found: Assets/backend
ERROR - 2021-05-18 09:56:51 --> 404 Page Not Found: Plugins/uploadify
ERROR - 2021-05-18 10:10:21 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-18 10:14:43 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-18 13:55:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-18 14:50:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-18 16:25:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-18 17:41:22 --> 404 Page Not Found: Assets/elfinder
ERROR - 2021-05-18 19:32:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-05-18 21:15:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-18 21:20:34 --> 404 Page Not Found: Robotstxt/index
