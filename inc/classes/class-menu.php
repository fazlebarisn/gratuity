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
		add_action( 'init' , [ $this, 'registerMenus' ] );
	}

	public function registerMenus(){
        // Register Menus
        register_nav_menus(
            [
              'gratuity-header-menu' => esc_html__( 'Header Menu', 'gratuity' ),
              'gratuity-footer-menu' => esc_html__( 'Footer Menu', 'gratuity' )
            ]
          );

    }
    
    // Get menu id 
    public function get_menu_id( $location ){
        // get all the locations
        $locations = get_nav_menu_locations();

        // if no menu created, retuen. I should display a message to create a menu later
        if( empty($locations) ) return;

        // get object id by location
        $menu_id = $locations[$location];

        return ! empty( $menu_id ) ? $menu_id : '' ;
    }

    /**
     *  We will recive the full menu and parent id
     *  loop throw and check if any menu has parent is.
     *  if any menu have parent id then push that in to a arrry
     */
    public function get_child_menu_items( $menu_array , $parent_id ){
        
        $child_menu = [];

        if( !empty ( $menu_array ) && is_array( $menu_array )){
            foreach( $menu_array as $menu ){
                if( intval( $menu->menu_item_parent) === $parent_id ){
                    array_push( $child_menu, $menu );
                }
            }
        }

        return $child_menu;
    }

}