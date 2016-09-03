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
                                    <?php wp_nav_menu( array(  'container' => '', 'menu_class' => 'nav navbar-nav navbar-right','current_page_parent' => 'dropdown', 'page_item_has_children' => 'dropdown-menu' ) ); ?>
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

                        <div class="content-block" id="blog">
                            <div class="container blog-sec">
                                <header class="block-heading cleafix">
                                    <a href="testimonal" class="btn btn-o btn-lg pull-right">View All</a>
                                    <div class="title-page">
                                        <p class="main-header">Testimonial</p>
                                        <!-- <p class="sub-header">Keep up with the latest happenings.</p> -->
                                    </div>
                                </header>
                                <section class="block-body">
                                    <div class="row">
                                        <div class="col-sm-4 blog-post">
                                            <img src="/wp-content/themes/twentyfourteen-child/img/01_200x200.png">
                                            <a href="#"><h2>Great</h2></a>
                                            <div class="date">3 Nov, 2014</div>
                                            <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>
                                            <a href="">Read More</a>
                                        </div>
                                        <div class="col-sm-4 blog-post">
                                            <img src="/wp-content/themes/twentyfourteen-child/img/02_200x200.png">
                                            <a href="#"><h2>Good</h2></a>
                                            <div class="date">3 Nov, 2014</div>
                                            <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>
                                            <a href="">Read More</a>
                                        </div>
                                        <div class="col-sm-4 blog-post">
                                            <img src="/wp-content/themes/twentyfourteen-child/img/03_200x200.png">
                                            <a href="#"><h2>Excellent</h2></a>
                                            <div class="date">3 Nov, 2014</div>
                                            <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>
                                            <a href="">Read More</a>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div><!-- #blog -->

<?php
get_footer();
