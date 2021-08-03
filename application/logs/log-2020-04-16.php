<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-16 00:51:46 --> 404 Page Not Found: Tmp/license.txt
ERROR - 2020-04-16 01:58:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-16 01:58:00 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2020-04-16 01:58:13 --> 404 Page Not Found: Adstxt/index
ERROR - 2020-04-16 02:59:58 --> 404 Page Not Found: Temp/index
ERROR - 2020-04-16 07:15:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-16 07:34:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-16 07:38:26 --> 404 Page Not Found: Site/license.txt
ERROR - 2020-04-16 08:23:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-16 10:09:34 --> 404 Page Not Found: New1/license.txt
ERROR - 2020-04-16 11:50:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-16 12:05:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-16 12:49:49 --> 404 Page Not Found: Old/license.txt
ERROR - 2020-04-16 15:41:24 --> 404 Page Not Found: New/license.txt
ERROR - 2020-04-16 18:32:13 --> 404 Page Not Found: 1/license.txt
ERROR - 2020-04-16 20:42:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-04-16 21:23:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-04-16 22:51:59 --> 404 Page Not Found: Wp-loginphp/index
