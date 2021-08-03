<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-04 02:18:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-04 02:22:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-04 06:35:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-04 07:15:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-04 07:47:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-04 09:53:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-04 10:48:49 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-11-04 11:37:04 --> 404 Page Not Found: Env/index
ERROR - 2020-11-04 11:43:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-11-04 12:19:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-04 12:21:43 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-11-04 12:21:43 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-11-04 20:52:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-04 22:43:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-04 22:43:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-11-04 23:26:37 --> 404 Page Not Found: Robotstxt/index
