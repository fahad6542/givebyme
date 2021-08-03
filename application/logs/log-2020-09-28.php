<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-28 00:00:18 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2020-09-28 00:00:26 --> 404 Page Not Found: Blogs/wp-includes
ERROR - 2020-09-28 01:02:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-28 02:48:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-28 03:12:09 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-09-28 03:42:14 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-09-28 07:16:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-28 08:33:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-28 09:49:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-28 10:15:31 --> 404 Page Not Found: Wp-admin/admin-ajax.php
ERROR - 2020-09-28 10:15:32 --> 404 Page Not Found: Env/index
ERROR - 2020-09-28 10:15:33 --> 404 Page Not Found: Api/.env
ERROR - 2020-09-28 10:15:34 --> 404 Page Not Found: Laravel/.env
ERROR - 2020-09-28 10:15:34 --> 404 Page Not Found: Test/.env
ERROR - 2020-09-28 10:15:37 --> 404 Page Not Found: Admin/.env
ERROR - 2020-09-28 10:15:37 --> 404 Page Not Found: Vendor/.env
ERROR - 2020-09-28 10:15:38 --> 404 Page Not Found: Sites/.env
ERROR - 2020-09-28 10:15:39 --> 404 Page Not Found: Blog/.env
ERROR - 2020-09-28 10:15:40 --> 404 Page Not Found: System/.env
ERROR - 2020-09-28 10:15:42 --> 404 Page Not Found: Public/.env
ERROR - 2020-09-28 10:15:43 --> 404 Page Not Found: Shop/.env
ERROR - 2020-09-28 10:41:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-28 13:06:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-28 13:21:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-28 14:59:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-28 17:37:05 --> 404 Page Not Found: Campaign/detail
ERROR - 2020-09-28 21:35:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-09-28 22:55:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
