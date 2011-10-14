<?php
/**
 * rtPanel Child Custom Hooks
 *
 * @package rtPanel
 */

/**
 * List of default hooks used by rtPanel ( Can be removed using this function )
 * 
 * @since rtPanelChild 1.0
 */
function rtp_remove_parent_hooks() {
    //remove_action( 'rtp_hook_after_header','rtp_default_nav_menu' );
    //remove_action( 'rtp_hook_post_meta_top','rtp_default_post_meta' ); // Post Meta Top
    //remove_action( 'rtp_hook_post_meta_bottom','rtp_default_post_meta' ); // Post Meta Bottom
    //remove_action( 'rtp_hook_end_post_meta_top', 'rtp_edit_link' );
    //remove_filter( 'rtp_readmore', 'rtp_readmore_braces' );
    //remove_filter( 'the_excerpt', 'rtp_no_ellipsis' );
    //remove_filter( 'gallery_style', 'rtp_remove_gallery_css' );
    //remove_filter( 'excerpt_length', 'rtp_new_excerpt_length' );
    //remove_filter( 'the_content', 'rt_nofollow' );
    //remove_filter( 'the_excerpt', 'rt_nofollow' );
    //remove_filter( 'get_search_form', 'rtp_custom_search_form' );
}
add_action( 'init', 'rtp_remove_parent_hooks' );

/*
 * List of other default rtpanel hooks that can be used
 */
//add_filter( 'rtp_nav_menu_depth', create_function( '', 'return 2;' ) );
//add_filter( 'rtp_header_image_width', create_function( '', 'return 940;' ) );
//add_filter( 'rtp_header_image_height', create_function( '', 'return 100;' ) );
//add_filter( 'rtp_default_image_path', create_function( '', 'return "' . RTP_CHILD_IMG . '/default.png";' ) );

 /**
  * Add any custom scripts using this function.
  * 
  * @since rtPanelChild 1.0
  */
function rtp_add_scripts() {
    //wp_enqueue_script( 'rtp-custom-script', RTP_CHILD_JS . '/js/rtp-custom-script.js' );
    
    /* Uncomment the following lines if using the jQuery Cycle Plugin for the slider */
    //wp_enqueue_script( 'jquery-cycle', RTP_CHILD_JS . '/jquery.cycle.js', array( 'jquery' ), '', true );
    //wp_enqueue_script( 'rtp-cycle-slideshow', RTP_CHILD_JS . '/rtp-cycle-slideshow.js', array( 'jquery', 'jquery-cycle' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'rtp_add_scripts' );

 /**
  * Add any custom styles using this function.
  * 
  * @since rtPanelChild 1.0
  */
function rtp_add_styles() {
    //wp_enqueue_style( 'rtp-custom-style', RTP_CHILD_CSS . '/custom-style.css' );
}
add_action( 'wp_print_styles', 'rtp_add_styles' );

 /**
  * Remove rtPanel Default Sidebars using this function.
  * 
  * @since rtPanelChild 1.0
  */
function rtp_remove_parent_sidebar(){
    //unregister_sidebar( 'sidebar-widgets' );
    //unregister_sidebar( 'footer-widgets' );
}
add_action( 'widgets_init', 'rtp_remove_parent_sidebar', 11 );