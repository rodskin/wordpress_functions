<?php

/**
* FICHIER POUR AJOUTER ses custom posts
*/

add_action('init', 'create_post_type');
function create_post_type() {
    register_post_type(
        'slug_du_custom_post',
        array(
            'labels' => array(
                'name' => __('Titre du custom post'),
                'singular_name' => __('Titre du custom post')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'slug_du_custom_post'),
            'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
            'taxonomies' => array('category'),
        )
    );
    // à répéter pour plusieurs custom posts
}
