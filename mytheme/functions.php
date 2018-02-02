<?php

if (isset($_COOKIE['USER_LANG'])) {
    define('USER_LANG', $_COOKIE['USER_LANG']);
} else {
    define('USER_LANG', 'en');
}

add_filter('gettext', 'dynamicallyTranslate', 10, 3);
function dynamicallyTranslate($translation, $phraseToTranslate, $domain)
{
    if ('fr' === USER_LANG) {
        return "French for {$phraseToTranslate}";
    } else {
    return "English for {$phraseToTranslate}";
    }
}

add_action('wp_enqueue_scripts', 'enqueueMyThemeStyles', PHP_INT_MAX);
function enqueueMyThemeStyles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css' );
}
