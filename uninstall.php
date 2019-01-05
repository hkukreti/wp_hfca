<?php

/**
 * Automatically call when user click on delete plugin
 * 
 * File used for deleting stored settings
 
 *  
 */


//Exit if directly accessed (for security)
if(!function_exists('add_action')){
    echo "You are not allowed to use this plugin directly";
    exit();
}


//delete hfca_settings from options
delete_option( 'hfca_settings_codes' );

