<?php
/** 
* Nav menu template
* @package gratuity
*/

use GRATUITY\Inc\Menu;

// Get Menus class instance
$menu_class = Menu::get_instance();

// Call get_menu_id methord from Menus claas to get menu id
$header_menu_id = $menu_class->get_menu_id('gratuity-header-menu');

/**
 *  wp_get_nav_menu_items function will return all menu information 
 *  @author Fazle Bari <fazlebarisn@gmail.com>
 *  @since 1.0.1
 */
$header_menus = wp_get_nav_menu_items( $header_menu_id );

?>
<nav id="navbar" class="navbar order-last order-lg-0">
    <?php
        if( !empty( $header_menus ) && is_array( $header_menus )){
          ?>
            <ul>
              <?php
                foreach( $header_menus as $menu_item ){

                  if( ! $menu_item->menu_item_parent){

                    $child_menu_items = $menu_class->get_child_menu_items( $header_menus , $menu_item->ID );
                    $has_children = !empty( $child_menu_items ) && is_array( $child_menu_items );

                    if( ! $has_children ){
                      ?>
                        <li>
                          <a class="nav-link scrollto" aria-current="page" href="<?php echo esc_url( $menu_item->url ); ?>"><?php echo esc_html( $menu_item->title ); ?></a>
                        </li>
                      <?php
                    }else{
                      ?>
                        <li class="dropdown">
                          <a href="<?php echo esc_url( $menu_item->url ); ?>">
                            <span><?php echo esc_html( $menu_item->title ); ?></span><i class="bi bi-chevron-down"></i>
                          </a>
                          <ul>
                            <?php
                              foreach( $child_menu_items as $child_menu_item){
                                ?>
                                  <li><a href="<?php echo esc_url( $child_menu_item->url ); ?>"><?php echo esc_html( $child_menu_item->title ); ?></a></li>
                                <?php
                              }
                            ?>
                          </ul>
                        </li>
                      <?php
                    }
                  }

                }
              ?>
            </ul>
          <?php
        }
      ?>

    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->