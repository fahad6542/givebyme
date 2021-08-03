<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-23 00:45:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 02:25:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 03:06:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 07:31:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 07:37:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 08:02:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 08:02:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 08:16:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 08:16:21 --> 404 Page Not Found: Formrequire-validation/index
ERROR - 2021-07-23 08:18:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 08:18:07 --> 404 Page Not Found: Diverror/index
ERROR - 2021-07-23 08:18:34 --> 404 Page Not Found: Formrequire-validation/index
ERROR - 2021-07-23 08:18:50 --> 404 Page Not Found: Diverror/index
ERROR - 2021-07-23 09:16:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 09:16:19 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-07-23 10:16:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 10:34:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 10:34:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-07-23 11:51:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 11:51:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-07-23 15:25:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 16:04:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 16:07:54 --> Severity: Notice --> Undefined index: HTTP_REFERER /home/q13bdz216ifm/public_html/givebyme.com/application/controllers/User.php 105
ERROR - 2021-07-23 16:28:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 17:45:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 20:12:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 22:22:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 22:23:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 23:13:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-07-23 23:24:17 --> 404 Page Not Found: Robotstxt/index
