<?php

class Config {

	private static function loadStyles() {
		wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', array());
	}

	private static function loadJavascript() {
		//wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ());
	}

	public static function loadScripts() {
		self::loadStyles();
		self::loadJavascript();
	} 

	public static function loadShortcodes() {
	    
	} 
}