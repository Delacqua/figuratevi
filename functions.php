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


function registrar_news() {
	$descricao = 'Figuratevi News';
	$singular = 'New';
	$plural = 'News';

	$labels = array(
		'name' => $plural,
		'singular_name' => $singular,
		'view_item' => 'Ver ' . $singular,
		'edit_item' => 'Editar ' . $singular,
		'new_item' => 'Novo ' . $singular,
		'add_new_item' => 'Adicionar novo ' . $singular
	);

	$supports = array(
		'title',
		'editor',
	);

	$args = array(
		'labels' => $labels,
		'description' => $descricao,
		'public' => true,
		'menu_icon' => 'dashicons-media-text',
		'supports' => $supports
	);


	register_post_type( 'news', $args);	
}

add_action('init', 'registrar_news');