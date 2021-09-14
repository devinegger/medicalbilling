<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medicalbilling
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <div class="container">
                <div class="row">
                    <p id="footer-tagline">You practice medicine... we'll do the rest.</p>
                </div>
                <div class="row flex flex-center">
                    <img src="<?php echo get_template_directory_uri() ?>/images/30_yrs_graphic_sm.png" />
                    <!--<div class="col-md-4 flex-bottom" style="text-align:left;">
                        
                        <a href="#">Facebook</a></br>
                        <a href="#">YouTube</a>
                        
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo get_template_directory_uri() ?>/images/30_yrs_graphic_sm.png" />
                    </div>
                    <div class="col-md-4 flex-bottom" style="text-align:right;">
                        
                        <a href="#">Company Blog</a></br>
                        <a href="#">Subscribe</a>
                        
                    </div>
                    -->
                </div>
                <div id="footer-nav" class="row">
                    <div class="navbar navbar-center bg-clear">
                        <?php 
                            wp_nav_menu( array( 
                                'theme_location' => 'menu-2', 
                                'menu_id' => 'footer-menu', 
                                'container' => false, 
                                'menu_class' =>'nav navbar-nav' ) 
                            ); 
                        ?>
                    </div><!--/.nav-collapse -->
                </div>
                <div class="row">
                    <div class="site-info">
			<div class="col-md-6 col-sm-4 flex flex-left">
                            <p>&copy;2017 Medical Billing Services.</p>
                        </div>
                        <div class="col-md-6 col-sm-8 flex flex-right">
                            <p>Dreamscape Development | Strange Design + Technology</p>
                        </div>
                    </div><!-- .site-info -->
                </div>
            </div>
	</footer><!-- #colophon -->
    </div><!-- .page-overlay -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
