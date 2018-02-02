<?php

add_filter('gettext', 'dynamicallyTranslate', 10, 3);
function dynamicallyTranslate($translation, $phraseToTranslate, $domain)
{
    return "French for {$phraseToTranslate}";
}

add_action('wp_enqueue_scripts', 'enqueueMyThemeStyles', PHP_INT_MAX);
function enqueueMyThemeStyles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css' );
}
