<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-26 02:00:40 --> 404 Page Not Found: Public/assets
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-26 02:00:40 --> 404 Page Not Found: Plugins/elfinder
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-26 02:00:40 --> 404 Page Not Found: Asset/plugins
ERROR - 2021-04-26 03:42:37 --> 404 Page Not Found: Env/index
ERROR - 2021-04-26 03:42:45 --> 404 Page Not Found: Env/index
ERROR - 2021-04-26 06:53:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-26 08:18:42 --> 404 Page Not Found: Assets/admin
ERROR - 2021-04-26 08:18:42 --> 404 Page Not Found: Admin/elfinder
ERROR - 2021-04-26 08:18:42 --> 404 Page Not Found: Assets/backend
ERROR - 2021-04-26 08:47:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-26 09:57:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-26 10:45:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'add' at line 5 - Invalid query: SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type 
FROM `projects` AS p 
LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid
INNER JOIN user ON p.added_by = user.uid
 WHERE p.status=1 AND p.pid = add 
ERROR - 2021-04-26 12:09:16 --> 404 Page Not Found: Env/index
ERROR - 2021-04-26 16:31:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-26 16:36:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-26 17:40:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-26 18:43:02 --> 404 Page Not Found: Admin/jQuery-File-Upload
ERROR - 2021-04-26 19:04:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-04-26 19:42:04 --> 404 Page Not Found: Robotstxt/index
