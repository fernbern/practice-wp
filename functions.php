<?php
function add_theme_scripts() {
   
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
   
    //wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
   
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

  if ( ! function_exists( 'fernando_setup' ) ) :

    function fernando_setup() {

        load_theme_textdomain( 'fernando', get_template_directory() . '/languages' );
        add_image_size( 'small', 220, 180 ); // 220 pixels wide by 180 pixels tall, soft proportional
        add_image_size( 'mediumSize', 375, 375 ); // 220 pixels wide by 180 pixels tall
        add_image_size( 'box', 400, 400 ); // 220 pixels wide by 180 pixels tall

        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

        register_nav_menus( array(
            'primary-menu'   => __( 'Primary Menu', 'fernando' ),
            'secondary-menu' => __('Secondary Menu', 'fernando' ),
            'social-menu' => __('Secondary Menu', 'fernando' )
        ) );
        
    }
    endif; // fernando_setup
    add_action( 'after_setup_theme', 'fernando_setup' );
    function wpdocs_custom_excerpt_length( $length ) {
        return 8;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
    
 ?>