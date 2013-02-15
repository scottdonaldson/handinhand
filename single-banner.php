<?php 
/*
Template Name: Main Page
*/
get_header(); ?>

<div class="row">
    <section class="twelve columns">
        <?php get_template_part('banner'); ?>
    </section>
</div>    

<div class="row">
    <section class= "donate twelve columns gradiented">
    	<div class="six columns">
           	<h3>Donate Now<span style="float:right;">&raquo;</span></h3>
            <p>Every dollar brings books to communities who have none.</p>
        </div>
        <div class="six columns join">
        	<h3>Join Us!<span style="float:right;">&raquo;</span></h3>
                
            <div class="join-form">    
                <p>Join our mailing list to get updates on the latest news.</p>
                <input type="email" name="join" value="Your Email Address" />
                <button type="submit" name="join" value="&gt;">&gt;</button>
                <div class="ss-form-container">
					<form action="https://docs.google.com/spreadsheet/formResponse?formkey=dEJ1Y0FLMHAxUE51RW9pcTdEbUZGd0E6MQ&amp;embedded=true&amp;ifq" method="POST" id="ss-form">

                    <div class="errorbox-good">

                       	<input type="text" name="entry.0.single" value="" class="ss-q-short" id="entry_0">


                        <input type="hidden" name="pageNumber" value="0">
                        <input type="hidden" name="backupCache" value="">
						<input type="submit" name="submit" value="Submit">

                    </div>
                </form>
                </div>
			</div>
            </div>    
        </div>
    </section>
</div>

<?php get_footer(); ?>