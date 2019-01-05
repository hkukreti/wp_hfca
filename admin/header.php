<?php


//form function used to insert code in header
function hfca_header_adder_settings(){  

    $Settings = hfca_settings_code_text();
    //checking header text
    $HCode = stripslashes(empty($_POST['hfca_htext']) ? $Settings['hfca_header_text'] : $_POST['hfca_htext']) ;
    // $HCode = stripslashes($_POST['hfca_htext']) ;
    
    //updating the header code in db
    $Settings['hfca_header_text'] = $HCode;
    update_option('hfca_settings_codes', $Settings);
    // echo $Settings['hfca_header_text'];

    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
        <br>
    <div class="container" style="font-family: 'Courier New', sans-serif;">
    	<div class="header m-b-3">
        	<h1 class="text-left" style="color:#0AE026;  font-weight: bold;font-size:450%;">
      		HEADER FOOTER <strong class="text-danger">CODE </strong>ADDER
      		</h1>
            <br>
            <h3 class="text-center text-danger" style=" font-weight: bold;font-size:350%;">HEADER SECTION:</h3>
      		<br><br>
    	</div>

    	<div class="row">
            <div class="col-md-12">
            <form action="#" method="post" enctype="multipart/form-data">
                <label style="color:#000000;  font-weight: bold;font-size:250%;">ADD YOUR HEADER CODE HERE:</label>
                <textarea class="form-control rounded-0" name="hfca_htext" rows="10" placeholder="Paste Your Header Code Here......"><?php echo stripslashes($Settings['hfca_header_text']) ?></textarea>
                <br>
                <input type="submit" class="btn btn-primary text-center">
            </form>
            </div>
            
    	</div>
    	
    </div>

    <?php 
    

    
}


//function for linking sw.js in header of website 
function link_hfca_header_code(){
    
    //getting header code from database
    $hfca_head_code = hfca_settings_code_text();
    
    $hfca_head_code_link = $hfca_head_code['hfca_header_text'];
  
    echo  $hfca_head_code_link;

        
}

//link manifest.js in header of website
add_action('wp_head', 'link_hfca_header_code');