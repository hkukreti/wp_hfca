<?php


//form function used to check token
function hfca_instructions(){  
	
	//getting current user info
    $current_user = wp_get_current_user();

    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
        <br>
    <div class="container" style="font-family: 'Courier New', sans-serif;">
    	<div class="header m-b-3">
        	<h1 class="text-left" style="color:#0AE026;  font-weight: bold;font-size:450%;">
      		HEADER FOOTER <strong class="text-danger">CODE </strong>ADDER
      		</h1>
      		<br><br>
    	</div>

    	<div>
    		<label style="color:#000000;  font-weight: bold;font-size:250%;">USER INFORMATION:</label>
    	</div>
    	<div class="row">
    		<div class="col-lg-12">
    			<label style="color:#928B8C;  font-weight: bold;font-size:150%;">Username:<?php echo $current_user->user_login; ?></label>
    		</div>
    		<br>
    		<div class="col-lg-12">
    			<label style="color:#928B8C;  font-weight: bold;font-size:150%;">User email:<?php echo $current_user->user_email; ?></label>
    			<br>
    		</div>
    		<div class="col-lg-12">
    			<label style="color:#928B8C;  font-weight: bold;font-size:150%;">User first name:<?php echo $current_user->user_firstname; ?></label>
    			<br>
    		</div>
    		<div class="col-lg-12">
    			<label style="color:#928B8C;  font-weight: bold;font-size:150%;">User last name:<?php echo $current_user->user_lastname; ?></label>
    			<br>
    		</div>
    		<div class="col-lg-12">
    			<label style="color:#928B8C;  font-weight: bold;font-size:150%;">User display name:<?php echo $current_user->display_name; ?></label>
    			<br>
    		</div>
    		<div class="col-lg-12">
    			<label style="color:#928B8C;  font-weight: bold;font-size:150%;">User ID:<?php echo $current_user->ID; ?></label>
    			<br>
    		</div>
    	</div>
    	<br><br>
    	<div class="row m-t-2">
    		<label style="color:#0E8875;  font-weight: bold;font-size:150%;">Add your code in Header/Footer sub-menu pages and save it, So that it can reflect on your website</label>
    	</div>
    </div>

    <?php 
 
}