<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-18 00:39:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-18 00:39:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-18 00:39:38 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2020-12-18 01:10:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-18 02:03:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-18 03:53:59 --> 404 Page Not Found: Wp-admin/install.php
ERROR - 2020-12-18 05:58:59 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2020-12-18 07:33:50 --> 404 Page Not Found: Env/index
ERROR - 2020-12-18 08:41:55 --> 404 Page Not Found: Humanstxt/index
ERROR - 2020-12-18 08:41:55 --> 404 Page Not Found: Adstxt/index
ERROR - 2020-12-18 15:23:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-18 16:26:54 --> 404 Page Not Found: Campaign/detail
ERROR - 2020-12-18 16:42:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-18 16:56:02 --> 404 Page Not Found: Campaign/detail
ERROR - 2020-12-18 17:00:19 --> Query error: MySQL server has gone away - Invalid query: SELECT p.pid,p.title,p.images,p.projectValue,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type,
(p.projectValue-IFNULL(donation.tDonation,0)) AS remainingAmount,( (IFNULL(donation.tDonation,0)/p.projectValue)*100 ) AS PercentageCompleted
FROM `projects` AS p LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid INNER JOIN user ON p.added_by = user.uid
WHERE p.status=1 AND ( (IFNULL(donation.tDonation,0)/p.projectValue)*100 )<100
ORDER BY ( (IFNULL(donation.tDonation,0)/p.projectValue)*100 ) 
LIMIT 12
ERROR - 2020-12-18 17:00:19 --> Query error: MySQL server has gone away - Invalid query: SELECT * FROM `industries` WHERE iid=32
ERROR - 2020-12-18 17:00:19 --> Query error: MySQL server has gone away - Invalid query: SELECT * FROM `industries` WHERE iid=27
ERROR - 2020-12-18 17:00:19 --> Query error: MySQL server has gone away - Invalid query: SELECT p.pid,p.title,p.images,p.projectValue,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type,
(p.projectValue-IFNULL(donation.tDonation,0)) AS remainingAmount,( (IFNULL(donation.tDonation,0)/p.projectValue)*100 ) AS PercentageCompleted
FROM `projects` AS p LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid INNER JOIN user ON p.added_by = user.uid
WHERE p.status=1 AND ( (IFNULL(donation.tDonation,0)/p.projectValue)*100 )<100
ORDER BY ( (IFNULL(donation.tDonation,0)/p.projectValue)*100 ) DESC
LIMIT 12
ERROR - 2020-12-18 21:38:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-18 22:17:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-12-18 23:18:39 --> 404 Page Not Found: App_Master/Telerik.Web.UI.DialogHandler.aspx
ERROR - 2020-12-18 23:18:40 --> 404 Page Not Found: DesktopModules/TelerikWebUI
ERROR - 2020-12-18 23:18:41 --> 404 Page Not Found: Providers/HtmlEditorProviders
ERROR - 2020-12-18 23:18:41 --> 404 Page Not Found: DesktopModules/Admin
ERROR - 2020-12-18 23:18:42 --> 404 Page Not Found: DesktopModules/dnnWerk.RadEditorProvider
ERROR - 2020-12-18 23:18:42 --> 404 Page Not Found: Common/admin
ERROR - 2020-12-18 23:18:43 --> 404 Page Not Found: TelerikWebUIDialogHandleraspx/index
ERROR - 2020-12-18 23:18:43 --> 404 Page Not Found: Components/General
ERROR - 2020-12-18 23:18:44 --> 404 Page Not Found: _controls/responsive
ERROR - 2020-12-18 23:18:44 --> 404 Page Not Found: DesktopModules/Admin
