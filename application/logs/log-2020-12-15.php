<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-15 00:51:00 --> 404 Page Not Found: Wp-admin/maint
ERROR - 2020-12-15 03:17:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-15 03:27:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-15 03:45:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-15 04:34:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-15 05:05:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-15 05:05:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-15 05:05:31 --> 404 Page Not Found: Atomxml/index
ERROR - 2020-12-15 06:53:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-12-15 09:08:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-15 09:14:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-15 12:11:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-15 21:35:36 --> 404 Page Not Found: Env/index
ERROR - 2020-12-15 21:35:36 --> 404 Page Not Found: Env/index
ERROR - 2020-12-15 22:47:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-15 22:47:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-15 22:47:19 --> 404 Page Not Found: Atomxml/index
ERROR - 2020-12-15 23:03:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-15 23:31:43 --> 404 Page Not Found: Sitemapsxml/index
