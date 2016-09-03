<?php
/**
 * Template Name: NoSidebar Page
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

<body <?php body_class(); ?>>
		<header class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-md-1 col-lg-3 col-xs-5 col-sm-1 header-logo">
						<br>
						<a href="http://ielts21century.com.au"> 
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
											<a href="#wrapper"><i class="fa fa-home"></i> Home</a>
										</li>
										<li>
											<a href="#services"><i class="fa fa-bookmark"></i> About</a>
										</li>
										<li>
											<a href="#about"><i class="fa fa-bookmark"></i> Courses</a>
										</li>
										<li>
											<a href="#blog"><i class="fa fa-tasks"></i> Testimonial</a>
										</li>
										<li>
											<a href="#footer"><i class="fa fa-thumbs-up"></i> Contact</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-thumbs-up"></i> Login</a>
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

		<div id="wrapper" class="<?php echo get_post_meta($post->ID, 'page-class', true); ?>">

            <div id="header" class="content-block ">
				<section class="center">
					<div class="slogan">
						<h1><?php echo get_post_meta($post->ID, 'page-header', true); ?></h1>
					</div>
					<div class="secondary-slogan">
						<?php echo get_post_meta($post->ID, 'page-desc', true); ?>
					</div>
				</section>
			</div><!-- header -->
            <div id="" class="content-sec">
                <div class="container">
                        <header class="block-heading cleafix">
                            <div class="title-page">
                                <p class="main-header"><?php echo get_post_meta($post->ID, 'section-title', true); ?></p>
                            </div>
                        </header>
                        <div class="cleafix"></div>
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


<?php
get_footer();
