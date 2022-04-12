<?php

/*

plugin name: Martins Plugin

*/


//säkerhet


//aktivering


add_action('init', 'registrera_bok');

function registrera_bok() {

    $bok_args = [
        'public' => true,
        'label' => 'Böcker',
        'show_in_rest' => true
    ];

    register_post_type('bok', $bok_args);

}



?>