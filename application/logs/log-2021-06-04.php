<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-06-04 01:13:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-04 09:03:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-04 09:47:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-04 10:18:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-06-04 10:42:33 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-06-04 10:47:17 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-06-04 11:03:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-04 12:07:18 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-06-04 12:07:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-06-04 13:03:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-04 15:20:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-04 15:20:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-04 15:57:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-04 16:47:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-04 18:47:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-04 19:26:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-04 20:07:31 --> 404 Page Not Found: Robotstxt/index
