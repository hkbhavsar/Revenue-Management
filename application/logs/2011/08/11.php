<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-11 02:31:24 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: auth/.lib/css/img/orange/logo-login.png ~ SYSPATH\classes\kohana\request.php [ 676 ]
2011-08-11 02:31:42 --- ERROR: Database_Exception [ 1 ]: Can't create/write to file 'C:\Windows\TEMP\#sql_6b8_0.MYD' (Errcode: 17) [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 179 ]
2011-08-11 02:31:48 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: auth/.lib/css/img/orange/logo-login.png ~ SYSPATH\classes\kohana\request.php [ 676 ]
2011-08-11 02:31:58 --- ERROR: Database_Exception [ 1 ]: Can't create/write to file 'C:\Windows\TEMP\#sql_6b8_0.MYD' (Errcode: 17) [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 179 ]
2011-08-11 02:32:34 --- ERROR: Database_Exception [ 1 ]: Can't create/write to file 'C:\Windows\TEMP\#sql_6b8_0.MYD' (Errcode: 17) [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 179 ]
2011-08-11 02:32:51 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: auth/.lib/css/img/orange/logo-login.png ~ SYSPATH\classes\kohana\request.php [ 676 ]
2011-08-11 02:34:42 --- ERROR: Database_Exception [ 1146 ]: Table 'joelf_vemma.email_campaigns' doesn't exist [ SHOW FULL COLUMNS FROM `email_campaigns` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 179 ]
2011-08-11 03:15:07 --- ERROR: Database_Exception [ 1146 ]: Table 'joelf_vemma.trainings' doesn't exist [ SHOW FULL COLUMNS FROM `trainings` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 179 ]
2011-08-11 03:16:33 --- ERROR: ErrorException [ 1 ]: Call to a member function get_newprospects() on a non-object ~ APPPATH\classes\controller\training.php [ 45 ]
2011-08-11 04:57:59 --- ERROR: ReflectionException [ 0 ]: Method action_viewdetail does not exist ~ SYSPATH\classes\kohana\request.php [ 1196 ]
2011-08-11 06:04:29 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Viewdetail::action_detailview() ~ APPPATH\classes\controller\viewdetail.php [ 46 ]
2011-08-11 07:07:32 --- ERROR: Database_Exception [ 1146 ]: Table 'joelf_vemma.users u' doesn't exist [ SELECT `users`.*, `user_address`.* FROM `users u` LEFT JOIN `user_address` ON (`users`.`id` = `user_address`.`id`) WHERE `users`.`id` = '26' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 179 ]
2011-08-11 07:13:53 --- ERROR: Database_Exception [ 1146 ]: Table 'joelf_vemma.users 1' doesn't exist [ SELECT `users`.*, `user_address`.* FROM `users 1` LEFT JOIN `user_address` ON (`users`.`id` = `user_address`.`id`) WHERE `users`.`id` = '27' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 179 ]
2011-08-11 07:14:54 --- ERROR: Database_Exception [ 1146 ]: Table 'joelf_vemma.users 1' doesn't exist [ SELECT `users`.*, `user_address`.* FROM `users 1` LEFT JOIN `user_address` ON (`users`.`id` = `user_address`.`user_id`) WHERE `users`.`id` = '27' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 179 ]
2011-08-11 07:21:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LEFT JOIN `country` ON (`users`.`id` = `user_address`.`user_id` AND `user_addr' at line 1 [ SELECT `users`.*, `user_address`.*, `country`.* FROM `users` LEFT JOIN `user_address` ON () LEFT JOIN `country` ON (`users`.`id` = `user_address`.`user_id` AND `user_address`.`countrycode` = `country`.`country_id`) WHERE `users`.`id` = '27' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 179 ]
2011-08-11 23:15:38 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: auth/.lib/css/img/orange/logo-login.png ~ SYSPATH\classes\kohana\request.php [ 676 ]
2011-08-11 23:18:08 --- ERROR: ReflectionException [ 0 ]: Method action_27 does not exist ~ SYSPATH\classes\kohana\request.php [ 1196 ]
2011-08-11 23:18:18 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Viewdetail::action_detailview() ~ APPPATH\classes\controller\viewdetail.php [ 46 ]
2011-08-11 23:35:02 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: prospects/viewdetail/detailview/18 ~ SYSPATH\classes\kohana\request.php [ 676 ]
2011-08-11 23:51:42 --- ERROR: Database_Exception [ 1146 ]: Table 'joelf_vemma.users as 1' doesn't exist [ SELECT `users`.*, `user_address`.*, `country`.* FROM `users as 1` LEFT JOIN `user_address` ON (`users`.`id` = `user_address`.`user_id`) LEFT JOIN `country` ON (`user_address`.`countrycode` = `country`.`country_id`) WHERE `users`.`id` = '25' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 179 ]