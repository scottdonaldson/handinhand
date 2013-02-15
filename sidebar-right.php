<section class="donate show-on-phones noprint">
    	<div>
           	<h3>Donate Now<span style="float:right;">&raquo;</span></h3>
            <p>Every dollar brings books to communities who have none.</p>
        </div>
        <div class="join">
        	<h3>Join Us!<span style="float:right;">&raquo;</span></h3>
                
            <div class="join-form">    
                <p>Join our mailing list to get updates on the latest news.</p>
                <div class="ss-form-container">
					<form action="https://docs.google.com/spreadsheet/formResponse?formkey=dEJ1Y0FLMHAxUE51RW9pcTdEbUZGd0E6MQ&amp;embedded=true&amp;ifq" method="POST" id="ss-form" target="_blank">

                    <div class="errorbox-good">

                       	<input type="text" name="entry.0.single" value="Your Email" class="ss-q-short" id="entry_0">

                        <input type="hidden" name="pageNumber" value="0">
                        <input type="hidden" name="backupCache" value="">
						<input type="submit" name="submit" value="Submit" target="_blank">

                    </div>
                	</form>
                </div>
            </div>    
        </div>
</section>

<div class="hide-on-phones noprint">
        
        <?php 
		if (!is_home()) {
			  $image1 = get_post_custom_values('hh_image1');
			  $image2 = get_post_custom_values('hh_image2');
			  $image3 = get_post_custom_values('hh_image3');
			  $image4 = get_post_custom_values('hh_image4');
			  $image5 = get_post_custom_values('hh_image5');
			  $image6 = get_post_custom_values('hh_image6');
			  $image7 = get_post_custom_values('hh_image7');
			  $image8 = get_post_custom_values('hh_image8');
		
		if ($image1) { ?>
        	<img src="<?php foreach ( $image1 as $key => $value ) { echo $value; } ?>" />
        <?php } if ($image2) { ?>
        	<img src="<?php foreach ( $image2 as $key => $value ) { echo $value; } ?>" />
        <?php } 
		if ($image3) { ?>
        	<img src="<?php foreach ( $image3 as $key => $value ) { echo $value; } ?>" />
        <?php } 
		if ($image4) { ?>
        	<img src="<?php foreach ( $image4 as $key => $value ) { echo $value; } ?>" />
        <?php } 
		if ($image5) { ?>
        	<img src="<?php foreach ( $image5 as $key => $value ) { echo $value; } ?>" />
        <?php } 
		if ($image6) { ?>
        	<img src="<?php foreach ( $image6 as $key => $value ) { echo $value; } ?>" />
        <?php } 
		if ($image7) { ?>
        	<img src="<?php foreach ( $image7 as $key => $value ) { echo $value; } ?>" />
        <?php } 
		if ($image8) { ?>
        	<img src="<?php foreach ( $image8 as $key => $value ) { echo $value; } ?>" />
        <?php } 
		
		} else { ?>
        
        <img src="http://www.handinhandforliteracy.org/wt/wp-content/themes/handinhand/images/right1.png" />
        <img src="http://www.handinhandforliteracy.org/wt/wp-content/themes/handinhand/images/right2.png" />
        <img src="http://www.handinhandforliteracy.org/wt/wp-content/themes/handinhand/images/right3.png" />
        
		<?php } ?>
 
</div>