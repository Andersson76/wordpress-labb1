<?php

get_header();

?>

<?php
if(have_posts()){
    while ( have_posts() ) {
        the_post();
        the_title();
        //get_template_part('article');
        the_content();
        the_excerpt();
        the_post_thumbnail('produkt_storlek');
    }
    }
/*
    $text_var = "Det här är en övning";

    echo $text_var;

    $text_var_filtrera = apply_filters('ett_filter', $text_var);

    echo $text_var_filtrera;
*/
get_footer(); ?>






