<?php


function runAll() {
    wp_enqueue_style('get_template_directory_uri()'. 'css/style.css', array(), '1.0');
}
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

add_image_size('produkt-storlek', 250, 250, true);

add_action('after_setup_theme', 'registrera_menu');


function registrera_menu() {
    register_nav_menu('huvudmeny', 'Huvud meny');
    register_nav_menu('socialmenu', 'Sociala menyer');
}

    register_sidebar(
    [
        'name' => 'widget 1',
        'id' => 'widget1',
        'description' => 'Första widget'
    ]
    );
    

    add_action('wp_head', 'min_funktion', 90);
    add_action('wp_footer', 'min_funktion', 90);

function min_funktion() {
    echo "min funktion";
}

add_action('wp_enqueue_scripts', 'runAll');

 function mina_scripts() {
     wp_register_script('temastil', 'get_template_directory_uri()' . 'css/style.css');
     wp_enqueue_script('temastil');
 }

 //filter kod

 add_filter('the_content', 'byt_bokstav_funktion');

 function byt_bokstav_funktion( $texten ) {

    $text = str_replace('t', '5', $texten);

    return $text;

 }

?>