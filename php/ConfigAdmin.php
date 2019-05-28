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


	public static function loadInit() {
		self::componenti();
		self::nuovoMenu();
	}

	public static function loadAdmin() {
		self::removeMenu();
	}

	public static function loadWidget() {
		
	}

	
}