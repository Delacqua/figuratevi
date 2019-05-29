<?php


class ConfigAdmin {

	private static function componenti() {
		add_theme_support( 'post-thumbnails' );
		add_filter( 'use_default_gallery_style', '__return_false' );
	}

	private static function nuovoMenu() {
		register_nav_menus(
			array(
			  'menuIndex' => __( 'Menu Index' ),
			  'menuInterno' => __( 'Menu Interno' )
			)
		);
	}
	
	private static function removeMenu() {
		remove_menu_page('edit.php'); //post
		remove_menu_page( 'edit-comments.php' );//Comments
		remove_menu_page( 'tools.php' ); //Tools
	}

	private static function removeMenuEditor() {
		$roles = wp_get_current_user()->roles;
		 
		if( !in_array('editor',$roles)){
			return;
		}
		remove_menu_page( 'themes.php' ); //Appearance
		remove_menu_page( 'plugins.php' ); //Plugins
		remove_menu_page( 'edit.php?post_type=page' ); //Pages
		remove_menu_page( 'options-general.php' ); //Settings
	}


	public static function loadInit() {
		self::componenti();
		self::nuovoMenu();
		self::registrar_news();
	}

	public static function loadAdmin() {
		self::removeMenu();
		self::removeMenuEditor();
	}

	public static function loadWidget() {
		
	}

	public static function registrar_news() {
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
	//		'show_in_rest' => true,
		);


		register_post_type( 'news', $args);	
	}

	
}