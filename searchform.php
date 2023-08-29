<?php
/** 
* Search form template file
* @package gratuity
*/
?>

<div class="sidebar-item search-form">
    <form role="search" method="get" action="<?php echo esc_url( home_url('/') ); ?>">
      <input 
        type="search"
        value="<?php the_search_query(); ?>"
        name="s"
        aria-label="search"
        placeholder="<?php echo esc_attr_x('Search', 'placeholder', 'gratuity'); ?>">
      <button type="submit"><i class="bi bi-search"></i><?php echo esc_attr_x('Search', 'search', 'gratuity') ?></button>
    </form>
</div><!-- End sidebar search formn-->