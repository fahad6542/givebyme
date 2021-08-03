<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-16 01:05:16 --> 404 Page Not Found: CONTACT-US/index
ERROR - 2021-03-16 03:51:28 --> 404 Page Not Found: Public/admin
ERROR - 2021-03-16 03:51:28 --> 404 Page Not Found: Assets/admin
ERROR - 2021-03-16 03:51:29 --> 404 Page Not Found: Admin/js
ERROR - 2021-03-16 03:51:47 --> 404 Page Not Found: Plugins/file-uploader
ERROR - 2021-03-16 03:51:49 --> 404 Page Not Found: Assets/backend
ERROR - 2021-03-16 04:05:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-16 06:50:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-03-16 10:14:17 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-03-16 10:19:20 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-03-16 11:11:16 --> 404 Page Not Found: Docphp/index
ERROR - 2021-03-16 11:11:20 --> 404 Page Not Found: Docphp/index
ERROR - 2021-03-16 14:28:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-16 18:24:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-16 19:18:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-16 20:40:02 --> 404 Page Not Found: CONTACT-US/index
ERROR - 2021-03-16 21:25:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-16 22:20:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-16 23:35:22 --> 404 Page Not Found: Robotstxt/index
