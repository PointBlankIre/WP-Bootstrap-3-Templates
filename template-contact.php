<?php
/*
Template Name: Contact page
*/
?>
<?php get_header(); ?>
<!-- auctions list template-contact.php -->

<!-- -->
<div class="row">
  <div class="col-md-5">

 
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php $titlestr = explode(',',get_the_title()); ?>
		<h1><?php the_title(); ?> </h1>
		
		<?php //the_post_thumbnail('post-thumbnail', array( 'class'	=> "img-responsive")); ?>



			<?php the_content(); ?>

	 
		 
		      		 
		     
    		 <div id="result"></div>
      			 
                    
      					<fieldset id="contact_form">
						
						
						    <label for="name"><span>Name</span> </label>
						    <input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control" />
						   
						    
						    <label for="email"><span>Email Address</span> </label>
						    <input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control" />
						   
						    
						   <label for="phone"><span>Phone</span>  </label>
						    <input type="text" name="phone" id="phone" placeholder="Phone Number" class="form-control" />
						  
						    
						    <label for="message"><span>Message</span> </label>
						    <textarea name="message" id="message" placeholder="Enter Your Message" class="form-control"></textarea>
						   
						    
						   
						    <button class="submit_btn btn btn-default" id="submit_btn">Submit</button>
						   
						</fieldset>
                
	
      	
        
	 
	 

		 
	
	  	
	  	

	  

		<?php // comments_template(); ?>

		 

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>
   <div class="col-md-7">
             <div class="map-frame">
                    <iframe src="http://mapsengine.google.com/map/view?mid=zZt0lMBYWWmc.k_ouHS2dQgNs" ></iframe>  
            </div> 
</div>
</div>

<?php get_footer(); ?>
<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery("#submit_btn").click(function() { 
        //get input field values
       
        var user_name       = jQuery('input[name=name]').val(); 
        var user_email      = jQuery('input[name=email]').val();
        //var user_phone      = jQuery('input[name=phone]').val();
        var user_message    = jQuery('textarea[name=message]').val();
        var user_subject    = "Enquiry";
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            jQuery('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            jQuery('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
       /* if(user_phone=="") {    
            jQuery('input[name=phone]').css('border-color','red'); 
            proceed = false;
        } */
        if(user_message=="") {  
            jQuery('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email,  'userMessage':user_message,
         					'userSubject':user_subject};
            
            //Ajax post data to server
            jQuery.post('<?php bloginfo('url'); ?>/contact_me.php', post_data, function(response){  
                
                //load json data from server and output message     
                if(response.type == 'error')
                {
                    output = '<div class="error">'+response.text+'</div>';
                }else{
                
                    output = '<div class="success">'+response.text+'</div>';
                    
                    //reset values in all input fields
                    jQuery('#contact_form input').val(''); 
                    jQuery('#contact_form textarea').val(''); 
                    jQuery("#collapseOne").collapse('hide');
                    jQuery("#contact_form").fadeOut('slow');
                }
                
                jQuery("#result").hide().html(output).slideDown();


            }, 'json');
            
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    jQuery("#contact_form input, #contact_form textarea").keyup(function() { 
        jQuery("#contact_form input, #contact_form textarea").css('border-color',''); 
        jQuery("#result").slideUp();

    });

	if (jQuery('.carousel-inner div').length < 3 ) 
	{ 
    	jQuery('.carousel-control').hide();
	}
    
    
});
</script>
