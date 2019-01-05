<?php

/**
 * 
 * file contain admin notice message when plugin activates
 * 
 * FUNCTIONS:-
 * 1)	hfca_admin_notice()
 * 
 */


//Exit if directly accessed (for security)
if(!function_exists('add_action')){
    echo "You are not allowed to use this plugin directly";
    exit();
}

//plugin admin notice function 
 function hfca_admin_notice(){
 
    // Admin notice on plugin activation
	if ( get_transient( 'hfca_activation_admin_notice' ) ) {

		echo '<div class="updated notice is-dismissible"><p>' . sprintf( __( '<strong>Header Footer Code Addder Plugin</strong> Successfully installed.'.' Please
		<a href="%s"> click here </a> for Code Addition <strong>in Header and Footer </strong> of your Website', 'HFCA_Adder' ), admin_url( 'admin.php?page=HFCA_Adder' ) ) . '</p></div>';
		
		// Delete transient
		delete_transient( 'hfca_activation_admin_notice' );
	}
 }