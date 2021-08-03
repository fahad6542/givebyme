<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-08 00:37:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-04-08 06:53:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-08 07:37:53 --> 404 Page Not Found: Public/assets
ERROR - 2021-04-08 08:19:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-08 09:59:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-08 10:08:02 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-04-08 11:25:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-08 13:22:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-08 13:22:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-08 13:23:21 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-04-08 17:49:12 --> 404 Page Not Found: Plugins/plupload
