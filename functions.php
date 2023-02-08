<?php



function load_css()
{


      wp_register_style('bootstrap', get_template_directory_uri() . '/css/css/bootstrap.min.css',
        array(),    //array with dependencies
        false,      //version 1.0 or 2.0
        'all');     //media="..."
        wp_enqueue_style('bootstrap');
    
      
      wp_register_style('stylesheet', get_template_directory_uri() . '/style.css',
        array(),false, 'all');
        wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_css');



function load_js()
{

  wp_register_script('bootstrap_js', get_template_directory_uri() . '/css/js/bootstrap.min.js',
  'jquery', false, true);
  wp_enqueue_script('bootstrap_js');                     

}
add_action('wp_enqueue_scripts', 'load_js');