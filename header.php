<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package drunk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="loader">
    <img src="<?php echo get_template_directory_uri(); ?>/img/loader.gif" alt="loader"/>
</div>
<div class="sidenav" id="sidenav" style="display:none;">
    <?php get_template_part("sidenav");?>
</div>
<div id="drunkmain" class="">
    <div id="page" class="hfeed site ">
        <div class="banner bannerbg wow fadeIn" id="mainbanner">
            <div class="banner-overlay"></div>
            <div class="container" id="header">
                <div class="row">
                    <div class="col-md-12">
                        <div class="resp wow fadeInDown">
                            <a href="#sidenav" id="sidemenu">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <!-- #site-navigation -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <a class="skip-link screen-reader-text"
                           href="#content"><?php _e('Skip to content', 'drunk'); ?></a>

                        <header id="masthead" class="site-header" role="banner">
                            <div class="site-branding wow bounceInDown">
                                <h1 class="site-title">
                                    <a href="<?php echo esc_url(home_url('/')); ?>"
                                       rel="home"><?php bloginfo('name'); ?></a>
                                </h1>

                                <h2 class="site-description wow bounceInDown"><?php bloginfo('description'); ?></h2>
                            </div>
                            <!-- .site-branding -->
                        </header>
                        <!-- #masthead -->
                    </div>
                </div>
            </div>
        </div>
        <!--    <div class="miniquote">-->
        <!--        <div class="container">-->
        <!--            <div class="row">-->
        <!--                <div class="col-md-1"></div>-->
        <!--                <div class="col-md-10">-->
        <!--                    <p>Whenever you find yourself on the side of the majority, it is time to pause and reflect</p>-->
        <!--                    <p class="author"> Mark Twain</p>-->
        <!--                </div>-->
        <!--                <div class="col-md-1"></div>-->
        <!---->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->


        <div id="content" class="site-content">
