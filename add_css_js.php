<?php
/**
* FICHIER POUR AJOUTER ses css et js
*/

function theme_enqueue_scripts_and_styles () {
    // JAVASCRIPTS
    // wp_enqueue_script('slug', 'adresse_fichier_js', array('jquery'));


    // Enqueue styles A LAISSERR EN DERNIER
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css'); // recup du style du theme parent
    // Décommenter si on utilise une feuille de styles pour le responsive
    // wp_enqueue_style('responsive-style', get_stylesheet_directory_uri() . '/css/responsive.css', '4', 'all');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts_and_styles');

function theme_enqueue_print_style () {
    // ici la feuille de style pour le print car elle doit être utilisée EN DERNIER
    wp_enqueue_style('print-style', get_stylesheet_directory_uri() . '/css/print.css', '4', 'print');
}
// Décommenter si on utilise une feuille de styles pour l'impression
// add_action('wp_enqueue_scripts', 'theme_enqueue_print_style', 11);
