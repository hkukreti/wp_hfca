<?php

/**
 * 
 * File used to load all other plugin files
 * 
 */


//Exit if directly accessed (for security)
 if(!function_exists('add_action')){
    echo "You are not allowed to use this plugin directly";
    exit();
}

//<-------------FORM FOLDER----------------->

//Load setup file in admin folder
require_once(HFCA_ABS_PATH.'admin/setup.php');

//Load setup file in admin folder
require_once(HFCA_ABS_PATH.'admin/hfca_interface.php');

//Load setup file in admin folder
require_once(HFCA_ABS_PATH.'admin/header.php');

//Load setup file in admin folder
require_once(HFCA_ABS_PATH.'admin/footer.php');

//load admin notice message file
require_once(HFCA_ABS_PATH.'notices/notice_admin.php');