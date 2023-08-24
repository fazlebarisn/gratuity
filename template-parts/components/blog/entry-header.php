<?php
/** 
* COntent header template file
* @package gratuity
*/
?>

<div class="entry-img">
  <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
</div>

<h2 class="entry-title">
  <a href="<?php echo esc_url( get_the_permalink() ) ?>"><?php echo get_the_title(); ?></a>
</h2>