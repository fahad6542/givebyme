<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-09 00:24:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-09 00:29:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-09 03:51:14 --> 404 Page Not Found: Assets/mobile
ERROR - 2021-05-09 03:51:14 --> 404 Page Not Found: Admin/assets
ERROR - 2021-05-09 05:42:34 --> 404 Page Not Found: Assets/fileupload
ERROR - 2021-05-09 06:10:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-09 06:27:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-09 08:53:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-09 08:53:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-09 10:18:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-09 10:18:16 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-09 11:14:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-09 14:09:31 --> 404 Page Not Found: Public/assets
ERROR - 2021-05-09 17:44:12 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-05-09 17:44:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-05-09 20:44:34 --> 404 Page Not Found: Robotstxt/index
