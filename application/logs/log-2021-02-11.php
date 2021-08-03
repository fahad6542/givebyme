<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-02-11 00:47:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-11 00:50:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-11 03:43:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-11 05:54:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-11 08:07:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-11 09:07:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-11 10:19:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-11 11:45:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-11 12:47:39 --> 404 Page Not Found: Wp/index
ERROR - 2021-02-11 12:47:39 --> 404 Page Not Found: Blog/index
ERROR - 2021-02-11 12:47:40 --> 404 Page Not Found: Wordpress/index
ERROR - 2021-02-11 12:47:40 --> 404 Page Not Found: Site/index
ERROR - 2021-02-11 12:47:40 --> 404 Page Not Found: Cms/index
ERROR - 2021-02-11 12:47:41 --> 404 Page Not Found: Web/index
ERROR - 2021-02-11 12:47:41 --> 404 Page Not Found: News/index
ERROR - 2021-02-11 12:47:42 --> 404 Page Not Found: Home/index
ERROR - 2021-02-11 12:47:42 --> 404 Page Not Found: New/index
ERROR - 2021-02-11 13:06:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-11 13:06:56 --> 404 Page Not Found: StripePost/index
ERROR - 2021-02-11 13:53:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-11 14:07:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-11 15:28:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-11 16:01:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-11 18:52:35 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-02-11 18:52:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-02-11 21:33:35 --> 404 Page Not Found: Env/index
