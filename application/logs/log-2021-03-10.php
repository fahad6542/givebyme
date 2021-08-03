<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-10 00:14:46 --> 404 Page Not Found: CONTACT-US/index
ERROR - 2021-03-10 03:26:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-10 05:05:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-10 05:07:06 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-03-10 05:09:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-03-10 07:19:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-10 07:19:05 --> 404 Page Not Found: StripeSub/index
ERROR - 2021-03-10 07:24:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-10 09:12:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-10 10:05:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-10 11:06:06 --> 404 Page Not Found: CONTACT-US/index
ERROR - 2021-03-10 19:08:56 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-03-10 19:51:53 --> 404 Page Not Found: Robotstxt/index
