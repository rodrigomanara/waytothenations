<?php


defined('ABSPATH') or die('No script kiddies please!');

function wd_theme_name_style() {

    $array = array();
    $array[] = get_template_directory_uri() . '/bower_components/materialize/dist/css/materialize.min.css';
    $array[] = "https://fonts.googleapis.com/icon?family=Material+Icons";
    for ($i = 0; $i < count($array); $i++) {
        wp_register_style('css_' . $i, $array[$i], array(), '1.0', 'all');
        wp_enqueue_style('css_' . $i);
    }
}

add_action('wp_enqueue_scripts', 'wd_theme_name_style');

function wd_theme_name_scripts() {
    $array = array();
    
    $array[] = "https://code.jquery.com/jquery-3.1.1.min.js";
    $array[] = get_template_directory_uri() . '/bower_components/materialize/dist/js/materialize.min.js';
    for ($i = 0; $i < count($array); $i++) {
        wp_register_script('js_' . $i, $array[$i], array(), '1.0', true);
        wp_enqueue_script('js_' . $i);
    }
}

add_action('wp_enqueue_scripts', 'wd_theme_name_scripts');
 