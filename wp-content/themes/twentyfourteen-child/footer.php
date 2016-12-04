<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div class="content-block" id="footer">
				<div class="container">
					<div class="row">
							
							<div class="col-sm-4 blog-post">
								<h2 class="footer-block">Ask a Question</h2>

                                <?php if ( function_exists( 'ccf_output_form' ) ) {
                                    ccf_output_form( 135 );
                                } ?>
<!--
								<form action="contact-form.php" id="contactForm" method="post" name="contactform" class="" role="form">
									<div class="form-group">
								    	<input type="text" class="form-control form-control-white" id="name" name="name" placeholder="Your Name" required>
								  	</div>
								    <div class="form-group">
								    	<input type="email" class="form-control form-control-white" id="email" name="email" placeholder="Enter email" required>
								    </div>
								    <div class="form-group">
								    	<textarea class="form-control form-control-white" id="message" name="massage" placeholder="Write Something" required></textarea>
								    </div>
								    <div id="contactFormResponse"></div>
								    <div class="form-group">
								    	<input id="cfsubmit" type="submit" class="text-center btn btn-o-white" value="Send">
								  	</div>
								</form>
-->
							</div>
							<div class="col-sm-4 blog-post">

							</div>
							<div class="col-sm-4 blog-post">
								
								<h2 class="footer-block">Contact Details</h2>
								<ul>
									<li class="address-sub"><i class="fa fa-map-marker"></i>Office Address</li>
										<p>
											Melbourne, Australia. 
										</p>
									<li class="address-sub"><i class="fa fa-envelope-o"></i>Email Address</li>
										<p>
                                            <a href="mailto:info@ielts21century.com.au">info@ielts21century.com.au</a>
										</p>


								</ul>
<!--
								<div class="social">
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-pinterest-p"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-skype"></i></a>
								</div>
-->
								
							</div>
						</div>
				</div>
			</div>
			<div class="content-block footer-bottom" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">&copy; Copyright IELTS 21st Century 2016</div>
						<div class="col-xs-6 text-right">Developed by <a href="http://talenttree.com.au/" target="_blank">Talent Tree</a></div>
					</div>
				</div>
			</div><!-- #footer -->

		</div><!--/#wrapper-->



        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.actual/1.0.18/jquery.actual.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.js"></script>
		<script src="/wp-content/themes/twentyfourteen-child/js/contact.js"></script>
		<script src="/wp-content/themes/twentyfourteen-child/js/script.js"></script>
		<script src="/wp-content/themes/twentyfourteen-child/js/smoothscroll.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($){

		  	$(window).scroll(function() {
		  		

				if ($(window).scrollTop() > 100 ){
		    
		 		$('.top-header').addClass('shows');
		    
		  		} else {
		    
		   	 	$('.top-header').removeClass('shows');
		    
		 		};   	
			});

		  });

		jQuery('.scroll').on('click', function(e){		
				e.preventDefault()
		    
		  jQuery('html, body').animate({
		      scrollTop : jQuery(this.hash).offset().top
		    }, 1500);
		});


		</script>
<?php wp_footer(); ?>

	</body>
</html>
        
