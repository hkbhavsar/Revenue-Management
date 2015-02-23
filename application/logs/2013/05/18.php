<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-05-18 03:14:39 --- ERROR: Database_Exception [ 1048 ]: Column 'lead_id' cannot be null [ INSERT INTO `tbl_lead_submit` (`ping_response`, `post_response`, `lead_id`, `client_id`, `lead_types`, `c_date`) VALUES ('Fail', 'Fail', NULL, 40, 'Auto', NULL) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 179 ]