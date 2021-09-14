<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medicalbilling
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-94043858-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <div class="page-overlay">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'medicalbilling' ); ?></a>
            <div id="request_form_slider">
                <div id="request_form_slider_top">
                    <a id="request_form_toggle">
                        <img src="<?php echo get_template_directory_uri() ?>/images/request_info_toggle.png" />
                    </a>
                    <h4>Send a Message</h4>
                </div> 
                <div id="request_form_slider_bottom">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Contact Form Slider") ) : ?>
                    <?php endif;?>
                </div>
            </div>
	<header id="masthead" class="site-header" role="banner">
            <nav class="upper-nav navbar">
                <div class="container">
                    <div class="site-branding">
                        <a href="<?php echo home_url() ?>">
                            <img src="<?php echo get_template_directory_uri() ?>/images/LOGO-pdf-Horizontal_darkblue_md.png" />
                        </a>   
                        <div class="navbar secondary" style="font-size: .8em;">
                            <?php 
                                wp_nav_menu( array( 
                                    'theme_location' => 'menu-2', 
                                    'menu_id' => 'secondary-menu', 
                                    'container' => false, 
                                    'menu_class' =>'nav navbar-nav' )
                                ); 
                            ?>
                        </div>
                    </div><!-- .site-branding -->
                    <div id="contact-us">
                        <h4>Contact Us Today!</h4>
                        <p>
                            <a href="mailto:info@medibillservices.com"><span class="glyphicon glyphicon-envelope"></span> info@medibillservices.com</a>
                            <br/><a href="tel:5152373974;ext=208"><span class="glyphicon glyphicon-phone-alt"></span>  515-237-3974 ext.208</a>
                        </p>
                        
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-default">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <?php 
                        wp_nav_menu( array( 
                            'theme_location' => 'menu-1', 
                            'menu_id' => 'primary-menu', 
                            'container' => false, 
                            'menu_class' =>'nav navbar-nav' ) 
                        ); 
                    ?>
                </div><!--/.nav-collapse -->
              </div>
            </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
