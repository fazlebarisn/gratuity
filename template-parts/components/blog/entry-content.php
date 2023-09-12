<?php
/** 
* Blog content  template file
* @package gratuity
*/
?>

<div class="entry-content">
  <?php 
    gratuity_the_excerpt();
    echo gratuity_excerpt_more();
  ?>
</div>