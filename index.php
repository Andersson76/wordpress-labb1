<?php
    
    echo get_option("blogname");

get_header();

if(have_posts()){
while ( have_posts() ) {
    the_post();
    //the_title();
    get_template_part('article');
    //the_content();
    the_excerpt();
    the_post_thumbnail('produkt_storlek');
}
}

get_footer();


?>


<?php

    $text_var = "Det här är en övning";

    echo $text_var;

    $text_var_filtrera = apply_filters('ett_filter', $text_var);

    echo $text_var_filtrera;

?>



