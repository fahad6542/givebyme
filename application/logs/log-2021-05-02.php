<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-02 00:20:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-02 01:20:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-02 02:30:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-02 04:40:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-02 06:12:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-05-02 10:27:09 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-05-02 10:28:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-02 10:49:35 --> 404 Page Not Found: Env/index
ERROR - 2021-05-02 11:21:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-02 16:06:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-02 17:53:34 --> 404 Page Not Found: Admin/jquery-file-upload
ERROR - 2021-05-02 18:24:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-05-02 20:07:54 --> 404 Page Not Found: Env/index
ERROR - 2021-05-02 22:45:09 --> 404 Page Not Found: Robotstxt/index
