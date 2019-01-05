<?php

/**
 * Plugin Name:Header Footer Code Adder
 * Plugin URI: 
 * Description: Add code to your website header and footer instantly.
 * Author: Harsh Kukreti
 * Author URI: 
 * Contributors: Harsh Kukreti
 * Version: 1.0 
 * Text Domain: Header Footer Code Adder
 * Domain Path: /languages
 * License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

//<--------------------------------Main File used to define constants and including fileLoader.php---------------------------------------------->


 //Exit if directly accessed (for security)
 if(!function_exists('add_action')){
    echo "You are not allowed to use this plugin directly";
    exit();
}

//<-------Defining Constants--------->

// 1. HFCA version constt
define('HFCA_VERSION',1.0);

// 2. HFCA src constt
define('HFCA_SRC_PATH',plugin_dir_url(__FILE__));

// 3. HFCA path constt
define('HFCA_ABS_PATH',plugin_dir_path(__FILE__));

//<--------------End------------------>


//Files Loader
require_once(HFCA_ABS_PATH.'loader.php');