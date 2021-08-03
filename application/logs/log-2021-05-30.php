<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-30 01:11:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 02:00:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 02:02:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 06:08:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 06:40:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 06:40:31 --> 404 Page Not Found: Humanstxt/index
ERROR - 2021-05-30 06:40:32 --> 404 Page Not Found: Adstxt/index
ERROR - 2021-05-30 06:47:55 --> 404 Page Not Found: Fmphp/index
ERROR - 2021-05-30 07:31:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 09:26:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 11:47:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 12:07:03 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-05-30 12:07:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-05-30 12:08:34 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-30 12:14:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 13:44:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 13:45:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 14:16:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 15:24:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-30 16:42:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 16:49:59 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-30 19:19:30 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-30 21:23:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-30 22:25:41 --> 404 Page Not Found: Robotstxt/index
