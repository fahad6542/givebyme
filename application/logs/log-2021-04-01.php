<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-01 00:53:35 --> 404 Page Not Found: _ignition/execute-solution
ERROR - 2021-04-01 00:53:36 --> 404 Page Not Found: Env/index
ERROR - 2021-04-01 00:53:36 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2021-04-01 07:04:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-01 07:46:32 --> 404 Page Not Found: Theme/assets
ERROR - 2021-04-01 10:04:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-01 10:07:23 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-04-01 10:22:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-01 12:34:38 --> 404 Page Not Found: Campaign/detail
ERROR - 2021-04-01 12:36:02 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2021-04-01 19:58:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-01 19:58:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-01 20:01:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-01 20:15:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-04-01 23:39:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-01 23:39:50 --> 404 Page Not Found: Asset-manifestjson/index
ERROR - 2021-04-01 23:51:53 --> 404 Page Not Found: Robotstxt/index
