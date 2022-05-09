<?php

define("TDU" , get_template_directory_uri() );



function ecommerce_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme' , 'ecommerce_setup');


//
function ecommerce_script(){
    wp_enqueue_style('bootstrap' , TDU . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('owl-carousel' , TDU . '/assets/owlcarousel/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-default' , TDU . '/assets/owlcarousel/owl.theme.default.min.css');
    wp_enqueue_style('ecommerce-style' , TDU . '/assets/css/style.css');
    wp_enqueue_style('ecommerce-responsive' , TDU . '/assets/css/responsive.css');

    wp_enqueue_script('owl-carousel' , TDU . '/assets/owlcarousel/owl.carousel.min.js' , array('jquery') , 1 , true);
    wp_enqueue_script('popper' , TDU . '/assets/js/popper.min.js' , array('jquery') , 1 , true);
    wp_enqueue_script('bootstrap' , TDU . '/assets/js/bootstrap.min.js' , array('jquery') , 1 , true);
    wp_enqueue_script('countdown' , TDU . '/assets/js/jquery.countdown.min.js' , array('jquery') , 1 , true);
    wp_enqueue_script('ecommerce-main' , TDU . '/assets/js/main.js' , array('jquery') , 1 , true);

}
add_action('wp_enqueue_scripts','ecommerce_script');














