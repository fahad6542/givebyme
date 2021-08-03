<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-29 02:04:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-29 02:20:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-07-29 04:08:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-29 06:21:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-29 07:59:32 --> 404 Page Not Found: Env/index
ERROR - 2021-07-29 08:59:13 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-07-29 09:46:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-29 10:24:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-07-29 10:55:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-29 11:28:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-29 12:14:03 --> 404 Page Not Found: Env/index
ERROR - 2021-07-29 12:14:03 --> 404 Page Not Found: Vendor/.env
ERROR - 2021-07-29 12:14:03 --> 404 Page Not Found: Storage/.env
ERROR - 2021-07-29 12:14:03 --> 404 Page Not Found: Public/.env
ERROR - 2021-07-29 13:53:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-29 14:53:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-29 14:54:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-29 14:54:32 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2021-07-29 14:54:37 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2021-07-29 16:12:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-29 16:13:00 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-07-29 17:46:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-29 18:35:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-29 18:35:30 --> 404 Page Not Found: StripePost/index
ERROR - 2021-07-29 19:37:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-29 23:46:52 --> 404 Page Not Found: Robotstxt/index
