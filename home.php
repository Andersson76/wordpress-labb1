<?php 

get_header();

if(have_posts()){
while ( have_posts() ) {
    the_post();
    //the_title();
    get_template_part('article');
    the_content();

}
}


get_footer();



?>