<?php



//Exit if directly accessed (for security)
 if(!function_exists('add_action')){
    echo "You are not allowed to use this plugin directly";
    exit();
}

//Activation hook:- call automatically when plugin activated
//https://codex.wordpress.org/Function_Reference/register_activation_hook
register_activation_hook(HFCA_ABS_PATH.'header-footer.php','activate_hfca_plugin');


//Activate function:- this function register in activation_hook
function activate_hfca_plugin(){
    //function exists in admin_notice.php
    set_transient('hfca_activation_admin_notice',true,5);
} 



/**Add admin notice funtion to admin_notice hook
 *Used to show notice when plugin is activated
 */
add_action('admin_notices','hfca_admin_notice');


//Deactivation hook:- call automatically when plugin deactivated
//https://codex.wordpress.org/Function_Reference/register_deactivation_hook
register_deactivation_hook(HFCA_ABS_PATH.'header-footer.php','deactivate_hfca_plugin');


//Deactivate function:-  this function register in deactivation_hook
function deactivate_hfca_plugin(){

    //nothing now

}


function hfca_add_menu_pages(){

    /**Menu main page
    * https://codex.wordpress.org/Roles_and_Capabilities#manage_options
    */
    
    //Token Menu page 
    add_menu_page(__('Header-Footer Adder','HFCA'),__('Header-Footer Code Adder','HFCA'),'manage_options','HFCA_Adder','hfca_instructions',HFCA_SRC_PATH.'/admin/images/hfca_icon.png');   


    //Header sub-menu page
    add_submenu_page('HFCA_Adder',__('Header-Footer Adder','HFCA'),__('Header Adder','HFCA'),'manage_options','header_adder','hfca_header_adder_settings');
    
    //Footer sub-menu page
    add_submenu_page('HFCA_Adder',__('Header-Footer Adder','HFCA'),__('Footer Adder','HFCA'),'manage_options','footer_adder','hfca_footer_adder_settings');

    
}

//add hfca_add_menu_pages() function to admin menu hook 
add_action('admin_menu','hfca_add_menu_pages');


//function to store and return token flag
function hfca_settings_code_text(){

    $defaults = array(  'hfca_header_text'=>'',
                        'hfca_footer_text'=>'',
    );
    $hfca_text_code_settings = get_option('hfca_settings_codes',$defaults);

    return $hfca_text_code_settings;
}