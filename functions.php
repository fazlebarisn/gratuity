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