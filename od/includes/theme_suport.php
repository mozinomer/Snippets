<?php
// registering the nav menu

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'logo-menu' => __( 'Logo Menu' ),
      'web-des' => __( 'Web Designing Services' ),
      'sm-ser' => __( 'Social Meida Services' ),
      'web-dev-ser' => __( 'Web Development Services' ),
      'digital-ser' => __( 'Digital Marketing Services' ),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );


// relating th stylesheet 


function styleaddding_function()
{
    wp_enqueue_style('style',get_stylesheet_uri());

}
add_action('wp_enqueue_scripts','styleaddding_function');


add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

