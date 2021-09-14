<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package medicalbilling
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    <div id="billingCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <ol class="carousel-indicators">
                            <li data-target="#billingCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#billingCarousel" data-slide-to="1"></li>
                            <li data-target="#billingCarousel" data-slide-to="2"></li>
                            <li data-target="#billingCarousel" data-slide-to="3"></li>
                            <li data-target="#billingCarousel" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active" id="sllide1">
                                <div class="carousel-content">
                                    <h3>Value you can <strong><i>count</i></strong> on!</h3>
                                    <ul>
                                        <li>Reduced administrative work saves you <strong><i>time</i></strong> and <strong><i>money</i></strong>.</li>
                                        <li>Low fees!  <strong>Pay as little as 3%!</strong></li>
                                        <li>We provide results:  95% of claims are paid the <strong>first time!</strong></li>
                                    </ul>
                                </div>
                                <img class="d-block img-fluid" src="<?php echo get_template_directory_uri() ?>/images/doctorelapelcloseup_1080.jpg" alt="First slide">
                            </div>
                            <div class="item" id="sllide2">
                                <div class="carousel-content">
                                    <h3>Maximized Efficiency!</h3>
                                    <ul>
                                        <li>All claims submitted <strong>within 24 hours</strong></li>
                                        <li><strong><i>SureCollect</i></strong> Claims Management System</li>
                                        <li>Rigorous denial management strategy</li>
                                        <li>Enhanced coding accuracy</li>
                                        <li><strong>Expert insurance credentialing</strong></li>
                                    </ul>
                                </div>
                                <img class="d-block img-fluid" src="<?php echo get_template_directory_uri() ?>/images/dr arms crossed_1080.jpg" alt="Second slide">
                            </div>
                            <div class="item" id="sllide3">
                                <div class="carousel-content">
                                    <h3>High Performance Technology</h3>
                                    <ul>
                                        <li>Intensive claim follow up: <strong>100% follow up.</strong></li>
                                        <li>EHR and appointment scheduling software</li>
                                        <li><strong>Easy &amp; secure</strong> access to patient billing data</li>
                                        <li><strong>Continuous technological innovation</strong></li>
                                    </ul>
                                </div>
                                <img class="d-block img-fluid" src="<?php echo get_template_directory_uri() ?>/images/prescriptions_1080.jpg" alt="Third slide">
                            </div>
                            <div class="item" id="sllide4">
                                <div class="carousel-content">
                                    <h3>Expertise <strong><i>you</i></strong> can <strong><i>trust</i></strong>!</h3>
                                    <ul>
                                        <li><strong>Quick &amp; skillful</strong> service implementation</li>
                                        <li>ICD-10 Coding <strong><i>Experts!</i></strong></li>
                                        <li><srtong>100% Legal Compliance</strong></li>
                                        <li><strong><i>Highly trained</i></strong> billing and coding staff</li>
                                    </ul>
                                </div>
                                <img class="d-block img-fluid" src="<?php echo get_template_directory_uri() ?>/images/dsm_skyline_1080.jpg" alt="Fourth slide">
                            </div>
                            <div class="item" id="sllide5">
                                <div class="carousel-content">
                                    <h3><strong>Experienced</strong> Corporate Partnerships</h3>
                                    <ul>
                                        <li><a href="http://www.cpumms.com" target="_blank">CPU Medical Management Systems
                                            <img class="slider-logo" src="<?php echo get_template_directory_uri() ?>/images/cpu-logo-alt-sm.jpg"/></a></li>
                                        <li><a href="http://www.imagineteam.com" target="_blank"><strong>Imagine</strong>Software
                                            <img class="slider-logo" src="<?php echo get_template_directory_uri() ?>/images/imaginesoftware-logo.png"/></a></li>
                                        <li><a href="https://www.webpt.com/" target="_blank">Web PT
                                            <img class="slider-logo" src="<?php echo get_template_directory_uri() ?>/images/logo-webpt-white.png"/></a></li>
                                        <li><a href="http://www.hbma.org/" target="_blank">HBMA
                                            <img class="slider-logo" src="<?php echo get_template_directory_uri() ?>/images/hbma-logo.jpg"/></a></li>
                                        <li><a href="https://www.iowamedical.org" target="_blank">Iowa Medical Society
                                            <img class="slider-logo" src="<?php echo get_template_directory_uri() ?>/images/IMS.jpg" /></a></li>
                                    </ul>
                                </div>
                                <img class="d-block img-fluid" src="<?php echo get_template_directory_uri() ?>/images/doctor-1080.jpg" alt="Fifth slide">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#billingCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#billingCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h1>Welcome to 
                                <br/>Medical Billing Services</h1>
                                <p style='font-size: 1.3em;'>Medical Billing Services is a full service billing company providing services to a wide range of medical specialties. We employ only experienced billing professionals. </p>  
                                <p style='font-size: 1.3em;'>By relying on our highly trained medical billing staff, you can maximize your practice's efficiency, and dramatically lower its expenses.</p>
                                <hr/>
                                <p style='font-size: 1.3em;'>For nearly 30 years, we’ve built our business around our ability to provide the highest level of customer service and satisfaction to our clients.  This is achieved through the top-notch workforce we’ve been able to attract and retain in our company.</p>
                                <p style='font-size: 1.3em;'>We fit our services to your needs, and offer highly customized training to get your practice on track quickly.  Our team is unbeatable, and an industry leader in medical billing.</p>
                                <hr/>
                                <div style="width: 90%; margin: 0 auto;">
                                    <h3>Sign up for our newsletter!</h3>
                                    <?php echo do_shortcode('[contact-form-7 id="182" title="Newsletter Signup"]') ?>
                                    </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img class="img-fluid" style="padding: 20px;" src="<?php echo get_template_directory_uri() ?>/images/blood-pressure.png">
                                <h4>Medical Billing</h4>
                                <p>At Medical Billing Services, our revenue cycle management process relies on the implementation of our proprietary Sure-Collect Claims Management System.  For more than a decade, this unique system has proven to improve cash flow and maximize payments for our clients.</p>
                                <hr/>
                                <h4>Credentialing</h4>
                                <p>Our professional credentialing staff has many years of experience.  They know the filing requirements and have the relationships with the right people to get the job done quickly and efficiently.</p>
                                <hr/>
                                <h4>Compliance</h4>
                                <p>At Medical Billing Services, compliance matters are implemented and closely monitored throughout the company.  Whether it’s Billing Compliance or HIPAA Compliance, our strict compliance to all laws and billing regulations attest to our high ethical standards, ongoing customer satisfaction and position as a leader in medical billing.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="callout">
                                    <span>"Partnering with Medical Billing Services was exactly what we needed.  I'm free to practice medicine again."</span>
                                    <br/><br/>
                                    <span>"We have been relying on Medical Billing Services for over seven years.  They have provided excellent service and have helped us implement our E&M compliance program.  I strongly recommend their services."</span>
                                </p>
                            </div>
                        </div>

                     </div> <!-- /container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
