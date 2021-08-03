<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-21 00:41:12 --> 404 Page Not Found: Configbakphp/index
ERROR - 2021-03-21 03:44:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-21 06:14:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-21 06:56:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-21 08:19:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-21 08:48:33 --> 404 Page Not Found: Env/index
ERROR - 2021-03-21 10:12:07 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-03-21 10:19:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-03-21 15:54:46 --> 404 Page Not Found: Front-assets/plugins
ERROR - 2021-03-21 15:54:46 --> 404 Page Not Found: Front-assets/jquery-file-upload
ERROR - 2021-03-21 16:49:03 --> 404 Page Not Found: Http:/givebyme.com
ERROR - 2021-03-21 21:19:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-03-21 22:45:55 --> 404 Page Not Found: Robotstxt/index
