<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-11 05:37:03 --> 404 Page Not Found: Git/HEAD
ERROR - 2021-05-11 09:56:04 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-05-11 09:58:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-11 10:35:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-11 12:01:23 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-05-11 12:01:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-05-11 14:21:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-11 14:54:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-11 14:58:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-11 15:35:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-11 15:41:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-11 15:57:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-11 16:02:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-11 16:17:34 --> 404 Page Not Found: Old-indexphp/index
ERROR - 2021-05-11 16:28:37 --> 404 Page Not Found: Old-indexphp/index
ERROR - 2021-05-11 17:31:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-11 18:16:37 --> 404 Page Not Found: Wp-json/wp
ERROR - 2021-05-11 18:16:37 --> 404 Page Not Found: Feed/index
ERROR - 2021-05-11 18:51:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-11 20:11:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-11 21:45:40 --> 404 Page Not Found: Images/index
