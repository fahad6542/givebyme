<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-18 06:30:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-12-18 08:05:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-12-18 09:39:25 --> 404 Page Not Found: StripeSub/index
ERROR - 2019-12-18 11:46:38 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2019-12-18 16:34:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-12-18 18:59:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-12-18 19:08:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2019-12-18 20:34:05 --> 404 Page Not Found: StripePost/index
ERROR - 2019-12-18 23:37:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
