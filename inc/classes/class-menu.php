<?php
/** 
* Menu class file
* @package gratuity
*/

namespace GRATUITY\Inc;

use GRATUITY\Inc\Traits\Singleton;

class Menu{

	use Singleton;

	protected function __construct() {
		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		// actions hooks
		add_action( 'wp_enqueue_scripts' , [ $this, 'registerStyles' ] );
	}

	public function registerStyles(){

	}

}