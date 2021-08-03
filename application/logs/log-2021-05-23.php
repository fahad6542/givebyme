<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-23 04:00:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-23 04:39:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-05-23 06:01:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-23 07:01:21 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-05-23 09:06:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-23 09:10:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-23 10:17:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-23 10:17:26 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-23 10:18:39 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-23 12:41:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-23 12:41:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-23 12:45:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-23 20:41:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-23 23:10:34 --> 404 Page Not Found: Server-status/index
