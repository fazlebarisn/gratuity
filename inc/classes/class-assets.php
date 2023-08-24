<?php
/** 
* Header template file
* @package gratuity
*/

namespace GRATUITY\Inc;

use GRATUITY\Inc\Traits\Singleton;

class Assets{

	use Singleton;

	protected function __construct() {
		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		// actions hooks
		add_action( 'wp_enqueue_scripts' , [ $this, 'registerStyles' ] );
		add_action( 'wp_enqueue_scripts' , [ $this, 'registerScripts' ] );
	}

	public function registerStyles(){
		// Register Syle
		wp_register_style('bootstrap', GRATUITY_ASSETS_DIR_URI . '/vendor/bootstrap/css/bootstrap.min.css', [], false, 'all');
		// wp_register_style( 'slick', HADUDU_LIB_DIR_URI . '/css/slick.css', [], false, 'all' );
		// wp_register_style( 'slick-theme', HADUDU_LIB_DIR_URI . '/css/slick-theme.css', ['slick'], false, 'all' );
		wp_register_style( 'main', GRATUITY_ASSETS_DIR_URI . '/css/style.css', ['bootstrap'], filemtime( GRATUITY_CSS_DIR_PATH . '/main.css' ), 'all' );

		// Enqueue Style
		wp_enqueue_style('bootstrap');
		// wp_enqueue_style('slick');
		// wp_enqueue_style('slick-theme');
		wp_enqueue_style( 'main' );

	}

	public function registerScripts(){
		// Register Scripts
		// wp_register_script( 'slick', HADUDU_LIB_DIR_URI . '/js/slick.min.js', ['jquery'], false, true );
		wp_register_script( 'main', GRATUITY_ASSETS_DIR_URI . '/js/main.js', ['jquery'], filemtime( GRATUITY_JS_DIR_PATH . '/main.js'), true );
		// wp_register_script( 'bootstrap', HADUDU_LIB_DIR_URI . '/js/bootstrap.min.js', ['jquery'], false, true );

		// // Enqueue Script
		// wp_enqueue_script('slick');
		// wp_enqueue_script('bootstrap');
		wp_enqueue_script('main');

	}

}