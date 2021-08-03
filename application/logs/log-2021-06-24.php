<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-06-24 00:03:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-24 00:23:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-24 02:36:49 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-06-24 02:36:49 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-06-24 03:50:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-24 04:46:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-24 05:00:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-24 07:08:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-24 10:12:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-24 10:22:47 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-06-24 10:33:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-24 10:44:36 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-06-24 13:10:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-24 18:10:42 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2021-06-24 18:10:43 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2021-06-24 18:10:43 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2021-06-24 18:10:43 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2021-06-24 18:10:43 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2021-06-24 18:10:43 --> 404 Page Not Found: Site/wp-includes
ERROR - 2021-06-24 18:10:43 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2021-06-24 19:17:28 --> 404 Page Not Found: Wp-includes/index
ERROR - 2021-06-24 19:33:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-24 19:39:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-06-24 20:31:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-06-24 20:46:44 --> 404 Page Not Found: Robotstxt/index
