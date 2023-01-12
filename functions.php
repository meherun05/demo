<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/assests/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assests/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo');
add_theme_support( 'post-thumbnails');

register_nav_menus([
    'PM'=>'primary'
]);

register_sidebar([
    'name'=>'BD logo',
    'id'=>'ltr',
    'before_widget'=>'',
    'after_widget'=>""
    
]);
register_sidebar([
    'name'=>'Title bar',
    'id'=>'titlebar',
    'before_widget'=>'',
    'after_widget'=>""
    
]);
register_sidebar([
    'name'=>'hero card',
    'id'=>'card1',
    'before_widget'=>'',
    'after_widget'=>""
    
]);