<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-24 01:43:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-24 04:19:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-24 06:33:04 --> 404 Page Not Found: Admin/assets
ERROR - 2021-05-24 09:09:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-24 09:13:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-24 10:16:59 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-24 10:17:47 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-24 10:18:26 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-24 11:29:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-24 11:33:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-24 12:55:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-24 13:19:27 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-05-24 13:19:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-05-24 17:17:35 --> 404 Page Not Found: Plugins/uploadify
ERROR - 2021-05-24 17:47:23 --> 404 Page Not Found: Wp-content/db-cache.php
ERROR - 2021-05-24 20:13:24 --> 404 Page Not Found: Robotstxt/index
