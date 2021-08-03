<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-25 03:02:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-02-25 06:24:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-02-25 17:50:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-02-25 17:50:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-02-25 20:23:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-02-25 21:52:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-02-25 22:10:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
