<?php

add_filter('stylesheet_directory_uri', 'my_convert_url');
function my_convert_url($url) {
    global $sitepress;
    return $sitepress->convert_url($url);
}
