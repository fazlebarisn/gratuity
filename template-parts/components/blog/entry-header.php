<?php
/** 
* COntent header template file
* @package gratuity
*/

$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );

if( $has_post_thumbnail ){
  ?>
  <div class="entry-img">
    <a href="<?php echo esc_url( get_permalink() ); ?>">
    <!-- <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid"> -->
      <?php
      the_post_custom_thumbnail(
        $the_post_id,
        'full',
        [
          'sizes' => '(max-width: 356px) 356px, 237px',
          'class' => 'img-fluid'
        ]
      );
      ?>
    </a>
  </div>
  <?php
}
?>

<h2 class="entry-title">
  <a href="<?php echo esc_url( get_permalink() ) ?>"><?php echo get_the_title(); ?></a>
</h2>