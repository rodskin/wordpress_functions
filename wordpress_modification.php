<?php

/**
* FICHIER POUR AJOUTER des modifications au comportement de Wordpress
*/

// desactivation des commentaires
add_filter('comments_open', 'wpc_comments_closed', 10, 2);
function wpc_comments_closed( $open, $post_id ) {
    return false;
}

// pour virer les liens WP inutiles en haut à gauche
function edit_admin_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo'); // Logo
    $wp_admin_bar->remove_menu('about'); // A propos de WordPress
    $wp_admin_bar->remove_menu('wporg'); // WordPress.org
    $wp_admin_bar->remove_menu('documentation'); // Documentation
    $wp_admin_bar->remove_menu('support-forums');  // Forum de support
    $wp_admin_bar->remove_menu('feedback'); // Remarque
    $wp_admin_bar->remove_menu('view-site'); // Aller voir le site
}
add_action('wp_before_admin_bar_render', 'edit_admin_bar');

// virer la generation de numero de version
function remove_version_generator() {
    return '';
}
add_filter('the_generator', 'remove_version_generator');

function removeVersionCallback($matches) {
    return "ver=" . md5(print_r($matches, true) . "");
}
function removeVersion($url) {
    return preg_replace_callback("/ver=[^&]*/", removeVersionCallback, $url);
}
add_filter('style_loader_src', 'removeVersion');
add_filter('script_loader_src', 'removeVersion');
