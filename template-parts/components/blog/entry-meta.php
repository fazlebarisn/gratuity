<?php
/** 
* Content meta template file
* @package gratuity
*/
?>

<div class="entry-meta">
  <ul>
    <?php 
    gratuity_posted_by();
    gratuity_post_on();
    gratuity_post_comment();
    ?>
  </ul>
</div>