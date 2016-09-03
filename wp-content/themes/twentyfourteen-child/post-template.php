<?php
/**
 * WP Post Template: Student Post Template
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
<script>
    
    jQuery( document ).ready(function() {
        document.styleSheets[16].disabled = true;
//        jQuery("#footer").hide();
//        jQuery(".content-block.footer-bottom").hide()
    });
</script>
<link rel='stylesheet' id='twentyfourteen-style-css'  href='http://ielts21century.com.au/wp-content/themes/twentyfourteen-child/student.css?ver=4.4.2' type='text/css' media='all' />
<body class="skin-blue admin">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="http://ielts21century.com.au/students-portal/" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Students Portal
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <!-- Notifications: style can be found in dropdown.less -->

                        <!-- Tasks: style can be found in dropdown.less -->
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu open">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <!-- <img src="img/avatar3.png" class="img-circle" alt="User Image" /> -->
                                    <p>
                                        Jane Doe - Student
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="http://ielts21century.com.au/account" class="btn btn-default btn-flat">Account</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="http://ielts21century.com.au/wp-login.php?action=logout&redirect_to=http%3A%2F%2Fielts21century.com.au%2Flogin-3%2F&_wpnonce=83994c13d8" class="btn btn-default btn-flat">Logout </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <?php wp_nav_menu( array( 'menu' => 'MemberMenu',  'container' => '', 'menu_class' => 'sidebar-menu','menu-item' => 'treeview', 'page_item_has_children' => 'treeview-menu' ) ); ?>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    
                    <h1>
                        <h1 class="main-header"><?php echo get_post_meta($post->ID, 'page-title', true); ?></h1>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                        <?php
                        /*
                        Template Name: Page only no html
                        */
                         ?>

                         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                <?php the_content("__('[...]')
                        "); ?>

                        <?php endwhile; endif; ?>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div> <!-- ./wrapper -->
    
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
            <!-- Bootstrap WYSIHTML5 -->
        <script src="http://ielts21century.com.au/wp-content/themes/twentyfourteen-child/js/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="http://ielts21century.com.au/wp-content/themes/twentyfourteen-child/js/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="http://ielts21century.com.au/wp-content/themes/twentyfourteen-child/js/app.js" type="text/javascript"></script>
        


<?php
get_footer();
