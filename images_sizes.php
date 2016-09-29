<?php

/**
* FICHIER POUR AJOUTER des tailles d'images différentes
*/

if (function_exists('add_image_size')) {
    // à répéter pour plus de tailles d'images
    $width = '200';
    $height = '100';
    add_image_size('slug_taille_image', $width, $height, true);
}
