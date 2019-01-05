<?php


//form function used to check token
function hfca_footer_adder_settings(){  
    $Settings = hfca_settings_code_text();
    
    //checking header text
    $FCode = stripslashes(empty($_POST['hfca_ftext']) ? $Settings['hfca_footer_text'] : $_POST['hfca_ftext']) ;
    
    //updating the footer code in db    
    $Settings['hfca_footer_text']= $FCode;
    update_option('hfca_settings_codes', $Settings);
    // echo $Settings['hfca_footer_text'];

    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
        <br>
    <div class="container" style="font-family: 'Courier New', sans-serif;">
    	<div class="header m-b-3">
        	<h1 class="text-left" style="color:#0AE026;  font-weight: bold;font-size:450%;">
      		HEADER FOOTER <strong class="text-danger">CODE </strong>ADDER
      		</h1>
            <br>
            <h3 class="text-center text-danger" style=" font-weight: bold;font-size:350%;">FOOTER SECTION:</h3>
      		<br><br>
    	</div>

    	<div class="row">
            <div class="col-md-12">
            <form action="#" method="post" enctype="multipart/form-data">
                <label style="color:#000000;  font-weight: bold;font-size:250%;">ADD YOUR FOOTER CODE HERE:</label>
                <textarea class="form-control rounded-0" name="hfca_ftext" rows="10" placeholder="Paste Your Footer Code Here......"><?php echo stripslashes($Settings['hfca_footer_text']) ?></textarea>
                <br>
                <input type="submit" class="btn btn-primary text-center">
            </form>
            </div>
            
    	</div>
    	
    </div>

    <?php 

    $Settings['hfca_footer_text']= $FCode;
    update_option('hfca_settings_codes', $Settings);
    
}

//function for linking footer code in footer of website 
function link_hfca_footer_code(){
    
    //getting footer code from database
    $hfca_footer_code = hfca_settings_code_text();

    $hfca_footer_code_link = $hfca_footer_code['hfca_footer_text'];
  
    echo  $hfca_footer_code_link;

}

//link footer code in footer of website
add_action('wp_footer', 'link_hfca_footer_code');


