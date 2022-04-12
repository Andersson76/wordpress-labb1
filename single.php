<?php

get_header();

?>

<?php

while ( have_posts() ) {
    the_post();

    get_template_part('article');
    //the_title();
    
    the_content();

    get_the_post_thumbnail(); 
}

    $text_var = "Det här är en övning";

    echo $text_var;

    $text_var_filtrera = apply_filters('ett_filter', $text_var);

    echo $text_var_filtrera;

get_footer(); ?>






