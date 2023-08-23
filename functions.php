<?php
/** 
* main function file
* @package gratuity
*/

if( !function_exists('dd') ){
	function dd( $val, $bool = false ){
		echo "<pre>";
			if($bool){
				var_dump($val);
				wp_die();
			}else{
				var_dump($val);
			}
		echo "</pre>";
	}
}

if ( ! defined( 'GRATUITY_DIR_PATH' ) ) {
	define( 'GRATUITY_DIR_PATH', untrailingslashit( get_template_directory() ) );
}
if ( ! defined( 'GRATUITY_ASSETS_DIR_URI' ) ) {
	define( 'GRATUITY_ASSETS_DIR_URI', untrailingslashit( get_template_directory_uri() ) . '/assets' );
}

if ( ! defined( 'HADUDU_BUILD_URI' ) ) {
	define( 'HADUDU_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'HADUDU_BUILD_JS_URI' ) ) {
	define( 'HADUDU_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'HADUDU_BUILD_JS_DIR_PATH' ) ) {
	define( 'HADUDU_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'HADUDU_BUILD_PATH' ) ) {
	define( 'HADUDU_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'HADUDU_BUILD_IMG_URI' ) ) {
	define( 'HADUDU_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'HADUDU_BUILD_CSS_URI' ) ) {
	define( 'HADUDU_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'GRATUITY_CSS_DIR_PATH' ) ) {
	define( 'GRATUITY_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/css' );
}

require_once GRATUITY_DIR_PATH . '/inc/helpers/autoloader.php';
// require_once GRATUITY_DIR_PATH . '/inc/helpers/template-tag.php';

function gratuity_get_theme_instance() {
	\GRATUITY\Inc\GRATUITY::get_instance();
}

gratuity_get_theme_instance();