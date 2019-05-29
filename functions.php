<?php

include_once 'php/autoload.php';

// Wordpress ------

function loadInit() {
    ConfigAdmin::loadInit();
    Config::loadShortcodes();
}

add_action( 'init', 'loadInit' );

function loadAdmin()  {
    ConfigAdmin::loadAdmin();
} 

add_action('admin_menu', 'loadAdmin');

function loadWidget() {
    ConfigAdmin::loadWidget();
}

add_action( 'widgets_init', 'loadWidget' );


// Theme Functions -------

function loadConfig() {
    Config::loadScripts();
}

add_action( 'wp_enqueue_scripts', 'loadConfig');
