<?php
/**
 * Template Name: Home Design Page
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header(); ?>

<body class="home">
		<header class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-md-1 col-lg-3 col-xs-5 col-sm-1 header-logo">
						<br>
						<a href="http://ielts21century.com.au/"> 
							<div class="logo">IELTS <span class="logo-head">ONLINE</span></div>
						</a>
					</div>

					<div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-1 col-sm-11 col-xs-7">
						<nav class="navbar navbar-default">
						  	<div class="container-fluid nav-bar">
						    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">
							      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								        <span class="sr-only">Toggle navigation</span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
							      	</button>
							    </div>

						    	<!-- Collect the nav links, forms, and other content for toggling -->
							    <div class="collapse navbar-collapse navbar-def" id="bs-example-navbar-collapse-1">
							         <a class="sr-only skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
                                    <?php wp_nav_menu( array(  'container' => '', 'menu_class' => 'nav navbar-nav ','current_page_parent' => 'dropdown', 'page_item_has_children' => 'dropdown-menu' ) ); ?>
<!--
							      	<ul class="nav navbar-nav navbar-right">
							        	<li>
											<a href="#wrapper">Home</a>
										</li>
										<li>
											<a href="#services">About</a>
										</li>
										<li>
											<a href="#about">Courses</a>
										</li>
										<li>
											<a href="#blog">Testimonial</a>
										</li>
										<li>
											<a href="#footer">Contact</a>
										</li>
										<li>
											<a href="login">Enroll</a>
										</li>
							      	</ul>
-->
							    </div><!-- /navbar-collapse -->
						  	</div><!-- / .container-fluid -->
						</nav>
					</div>
				</div>
			</div>
		</header>

		<div id="wrapper">
			

            <div id="header" class="content-block <?php echo get_post_meta($post->ID, 'page-name', true); ?>">
                            <!-- <section class="top clearfix">
                                <div class="pull-left">
                                    <h1><a class="logo" href="index.html">Avada <span class="logo-head">Plus</span></a></h1>
                                </div>
                                <! <div class="pull-right">
                                    <a class="toggleDrawer" href="#"><i class="fa fa-bars fa-2x"></i></a>
                                </div> 
                            </section>-->
                            <section class="center">
                                <div class="slogan">
                                    <h1><?php echo get_post_meta($post->ID, 'page-header', true); ?></h1>
                                </div>
                                <div class="secondary-slogan">
                                    <?php echo get_post_meta($post->ID, 'page-desc', true); ?>
                                </div>
                            </section>
                        </div><!-- header -->

            <!-- About us -->
            <div id="about" class="about-us">
                <div class="container about-sec">
                    <header class="block-heading cleafix">
                            <div class="title-page">
                                <p class="main-header">Our Courses</p><br>
                                <!-- <p class="sub-header">Course details</p> -->
                            </div>
                        </header>
                    <div class="divide50"></div>
                    <?php
                    /*
                    Template Name: Page only no html
                    */
                     ?>

                     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <?php the_content("__('[...]')
                    "); ?>

                    <?php endwhile; endif; ?>

	            </div>
	        </div>
	        <!-- /About us -->


			<div class="content-block parallax" id="services">
				<div class="container services-sec">
					<div class="title-page">
						<h2>About US</h2>
					    <!-- <p class="sub-header">A little about what we do</p> -->
					</div>
					<section class="block-body">
						<div class="row">
							<div class="col-md-6">
								<div class="service visible-on">
									<img src="/wp-content/themes/twentyfourteen-child/img/bike_water1-1000x600.jpg"><br>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service">
									<article>
      <p>IELTS 21Century is a specially designed online training program to help you to improve your English IELTS skills and prepare you for IELTS exam.</p>
       <p>We have developed tests to bring your English to the next level and be able to do IELTS test successfully.</p>
      <p>International knowledge and experience of teaching English in different countries (Australia, UK, South East Asia, China, Eastern Europe) has been combined together in preparation of the tests.</p>     
      <ul>
        <li>24/7 online access</li>
        <li>Tips, tools and additional resources </li>
        <li>Future academic skills training</li>
      </ul>
   </article>
								</div>
							</div>

						</div>
					</section>
				</div>
			</div><!-- #services -->
<script>
     jQuery(".aboutus-item br").remove();
</script>
                    <?php
get_footer();
