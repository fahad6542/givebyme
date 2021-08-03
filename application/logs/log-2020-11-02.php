<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-02 00:09:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-02 00:35:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-02 00:44:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-02 02:03:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-02 02:21:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-02 02:23:06 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-11-02 02:23:27 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-11-02 02:23:37 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2020-11-02 02:33:40 --> 404 Page Not Found: Env/index
ERROR - 2020-11-02 02:33:40 --> 404 Page Not Found: Env/index
ERROR - 2020-11-02 02:33:41 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2020-11-02 03:11:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-02 11:48:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2020-11-02 15:29:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-02 17:46:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-02 17:57:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-11-02 18:54:28 --> 404 Page Not Found: Robotstxt/index
