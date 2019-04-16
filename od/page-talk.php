<?php //get_header();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Outsourcedesigning</title>
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/main.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/tabs.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/toggle.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/colorbox.css" type="text/css" rel="stylesheet" />
    <!-- Start Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/template_css/boot-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <!-- End Bootstrap -->
  </head>
  <body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col logo-img-container">
                <?php 
                       $custom_logo_id = get_theme_mod( 'custom_logo' );
                       $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="">
                <div class="sub-menu-lgo-container">
                    <div class="row">
                        <div class="col-md-6 col">
                            <label>web desgin services</label>
                            <div class="sub-menu-logo">
                                <?php wp_nav_menu(array('theme_location' => 'web-des'));?>
                            </div>
                        </div>
                        <div class="col-md-6 col">
                            <label>social media services</label>
                            <div class="sub-menu-logo">
                                <?php wp_nav_menu(array('theme_location' => 'sm-ser'));?>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6 col">
                            <label>Web Development services</label>
                            <div class="sub-menu-logo">
                                <?php wp_nav_menu(array('theme_location' => 'web-dev-ser'));?>
                            </div>
                        </div>
                        <div class="col-md-6 col">
                            <label>digital marketing services</label>
                            <div class="sub-menu-logo">
                                <?php wp_nav_menu(array('theme_location' => 'digital-ser'));?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col main-menu_header dis-flex">
                <?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu' ) ); ?>
            </div>
            <div class="col-md-2 col dis-flex header_button">
                <a href="#"><?php echo get_option('header_button_text');?></a>
            </div>
        </div>
    </div>
</header>
 <!--contact us-->
 <div class="contact-section" id="contact-section">
    <div class="container">
      
      <div class="row-fluid">
      <div class="page-header" id="conatct-header">
        	<h2>Contact Us</h2>
            <h3>LET’S GET <span>DIGITAL</span> – WE ARE READY TO ROLL</h3>
        	<p>With an ardor for precision drives our creative approach. We develop a clear picture of our customer’s needs bases on our creative decision and our experience, talent, and commitment to provide quality branding and visibility. Whether your business is a new or established one, we provide reasonable, accurate and expected results from cost to timing – surpassing them at every step.</p>
      	</div>
      
      <div class="lighbox-form" id="lightbox-form">
                <div class="lighbox-form-inner">
                <form>
                
                <div class="span4">
                <input type="text" value="Name:" class="inputfield" />
                <input type="text" value="Company:" class="inputfield" />
                </div>
                <div class="span4">
                <input type="text" value="Email:" class="inputfield" />
                <input type="file" class="file-div" />
                </div>
                <div class="span4">
                <input type="text" value="Phone:" class="inputfield" />
                <select><option>Cetegories</option></select>
                </div>
                <div class="span10"><textarea></textarea></div>
                <div class="span2"><input type="submit" class="btn-01" value="Send" /></div>
                </form>
                <div class="clearfix"></div>
                </div>
                
        </div>	
        
      </div>
    </div>
 </div>

<div class="contact-map"><img src="<?php bloginfo('template_url'); ?> /template_css/template_images/images/map-img1.jpg" alt=""></div>

<div class="contactus-bottom">
	
	<div id="contact">
        <h4>info@outsourcedesigning.com</h4>
        <h4>sales@outsourcedesigning.com</h4>
        <h4>support@outsourcedesigning.com</h4>
    </div>
    <div id="links-tabs">
        	<a href="#."><img alt="" src="<?php bloginfo('template_url'); ?> /template_css/template_images/images/social-links/fb_icon.png"></a>
            <a href="#."><img alt="" src="<?php bloginfo('template_url'); ?> /template_css/template_images/images/social-links/twittwr_icon.png"></a>
            <a href="#."><img alt="" src="<?php bloginfo('template_url'); ?> /template_css/template_images/images/social-links/youtube_icon.png"></a>
            <a href="#."><img alt="" src="<?php bloginfo('template_url'); ?> /template_css/template_images/images/social-links/lindin_icon.png"></a>
            <a href="#."><img alt="" src="<?php bloginfo('template_url'); ?> /template_css/template_images/images/social-links/pinterest_icon.png"></a>
            <a href="#."><img alt="" src="<?php bloginfo('template_url'); ?> /template_css/template_images/images/social-links/gplus_icon.png"></a>
            <a href="#."><img alt="" src="<?php bloginfo('template_url'); ?> /template_css/template_images/images/social-links/b_icon.png"></a>
     </div>
</div>
 <!-- End: MAIN CONTENT -->
<!-- full services -->
<?php get_template_part( 'full_services', 'page' ); ?>
 <div class="container section_recent_work_homepage">
  <div class="container-fluid">
    <?php get_template_part( 'workss', 'page' ); ?>
  </div>
</div>
<!-- section article -->
<?php get_template_part( 'article', 'page' ); ?>

 
 <!-- Start: FOOTER -->
   
    <!-- End: FOOTER -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?> /template_css/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?> /template_css/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?> /template_css/js/jquery.easytabs.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready( function() {
      $('#tab-container').easytabs();
    });
    </script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?> /template_css/js/toggle.js"></script>
	

    
    
  </body>
</html>
