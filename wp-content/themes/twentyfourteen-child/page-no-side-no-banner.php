<?php
/**
 * Template Name: No Sidebar and Banner  Page
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
    <div class="<?php echo get_post_meta($post->ID, 'page-class', true); ?>">
        <header class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-md-1 col-lg-3 col-xs-5 col-sm-1 header-logoo">
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
							    </div><!-- /navbar-collapse -->
						  	</div><!-- / .container-fluid -->
						</nav>
					</div>
				</div>
			</div>
		</header>

		<div id="wrapper">
            <div id="" class="content-sec">
                <div class="container">
                    <header class="block-heading cleafix">
                            <div class="title-page">
                                <?php if( get_post_meta($post->ID, 'page-title', true) ) { ?>
                                    <h1 class="main-header"><?php echo get_post_meta($post->ID, 'page-title', true); ?></h1><br>
                                <?php } ?>
                                <!-- <p class="sub-header">Course details</p> -->
                            </div>
                        </header>
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
        </div>
    </div>
<?php
get_footer();
