<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-02-10 03:16:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-10 04:21:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-10 04:21:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-10 08:10:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-10 09:45:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-10 10:44:00 --> 404 Page Not Found: Wp-includes/css
ERROR - 2021-02-10 10:44:11 --> 404 Page Not Found: Wp-includes/fonts
ERROR - 2021-02-10 11:04:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-10 12:07:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-10 13:14:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-10 13:14:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-10 13:14:44 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2021-02-10 13:39:23 --> 404 Page Not Found: Wp/index
ERROR - 2021-02-10 13:39:23 --> 404 Page Not Found: Blog/index
ERROR - 2021-02-10 13:39:24 --> 404 Page Not Found: Wordpress/index
ERROR - 2021-02-10 13:39:24 --> 404 Page Not Found: Site/index
ERROR - 2021-02-10 13:39:25 --> 404 Page Not Found: Cms/index
ERROR - 2021-02-10 13:39:25 --> 404 Page Not Found: Web/index
ERROR - 2021-02-10 13:39:26 --> 404 Page Not Found: News/index
ERROR - 2021-02-10 13:39:26 --> 404 Page Not Found: Home/index
ERROR - 2021-02-10 13:39:27 --> 404 Page Not Found: New/index
ERROR - 2021-02-10 22:06:34 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-02-10 22:06:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
