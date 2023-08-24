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
		wp_register_style('bootstrap', GRATUITY_ASSETS_DIR_URI . '/css/bootstrap.min.css', [], false, 'all');
		wp_register_style('bootstrap-icons', GRATUITY_ASSETS_DIR_URI . '/css/bootstrap-icons.css', [], false, 'all');
		wp_register_style('boxicons', GRATUITY_ASSETS_DIR_URI . '/css/boxicons.min.css', [], false, 'all');
		wp_register_style('glightbox', GRATUITY_ASSETS_DIR_URI . '/css/glightbox.min.css', [], false, 'all');
		wp_register_style('remixicon', GRATUITY_ASSETS_DIR_URI . '/css/remixicon.css', [], false, 'all');
		wp_register_style('swiper-bundle', GRATUITY_ASSETS_DIR_URI . '/css/swiper-bundle.min.css', [], false, 'all');
		wp_register_style('aos', GRATUITY_ASSETS_DIR_URI . '/css/aos.css', [], false, 'all');
		wp_register_style( 'main', GRATUITY_ASSETS_DIR_URI . '/css/main.css', ['bootstrap'], filemtime( GRATUITY_CSS_DIR_PATH . '/main.css' ), 'all' );

		// Enqueue Style
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('bootstrap-icons');
		wp_enqueue_style('glightbox');
		wp_enqueue_style('remixicon');
		wp_enqueue_style('swiper-bundle');
		wp_enqueue_style('boxicons');
		wp_enqueue_style('aos');
		wp_enqueue_style( 'main' );

	}

	public function registerScripts(){
		// Register Scripts
		wp_register_script( 'aos', GRATUITY_ASSETS_DIR_URI . '/js/aos.js', [], filemtime( GRATUITY_JS_DIR_PATH . '/main.js'), true );
		wp_register_script( 'bootstrap-bundle', GRATUITY_ASSETS_DIR_URI . '/js/bootstrap.bundle.min.js', [], filemtime( GRATUITY_JS_DIR_PATH . '/main.js'), true );
		wp_register_script( 'glightbox', GRATUITY_ASSETS_DIR_URI . '/js/glightbox.min.js', [], filemtime( GRATUITY_JS_DIR_PATH . '/main.js'), true );
		wp_register_script( 'isotope', GRATUITY_ASSETS_DIR_URI . '/js/isotope.pkgd.min.js', [], filemtime( GRATUITY_JS_DIR_PATH . '/main.js'), true );
		wp_register_script( 'purecounter', GRATUITY_ASSETS_DIR_URI . '/js/purecounter_vanilla.js', [], filemtime( GRATUITY_JS_DIR_PATH . '/main.js'), true );
		wp_register_script( 'swiper-bundle', GRATUITY_ASSETS_DIR_URI . '/js/swiper-bundle.min.js', [], filemtime( GRATUITY_JS_DIR_PATH . '/main.js'), true );
		wp_register_script( 'validate', GRATUITY_ASSETS_DIR_URI . '/js/validate.js', [], filemtime( GRATUITY_JS_DIR_PATH . '/main.js'), true );
		wp_register_script( 'main', GRATUITY_ASSETS_DIR_URI . '/js/main.js', ['jquery'], filemtime( GRATUITY_JS_DIR_PATH . '/main.js'), true );
		
		// // Enqueue Script
		wp_enqueue_script('aos');
		wp_enqueue_script('bootstrap-bundle');
		wp_enqueue_script('glightbox');
		wp_enqueue_script('isotope');
		wp_enqueue_script('purecounter');
		wp_enqueue_script('swiper-bundle');
		wp_enqueue_script('validate');
		wp_enqueue_script('main');

	}

}