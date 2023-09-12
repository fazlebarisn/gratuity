<?php

/** 
 * Header template file
 * @package gratuity
 */
?>
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">
        <?php 
            $homepage = get_home_url();
            $blog_page_id = get_option('page_for_posts');
            $blog_page_url = get_permalink($blog_page_id);
            if(is_home() ):
        ?>
            <ol>
                <li><a href="<?php echo esc_url($homepage); ?>"><?php echo esc_html(__('Home', 'gratuity')); ?></a></li>
                <li><a href="<?php echo esc_url($blog_page_url); ?>"><?php echo esc_html(__('Blog', 'gratuity')); ?></a></li>
            </ol>
            <h2>Blog</h2>
        <?php elseif( is_single() ) : ?>
            <ol>
                <li><a href="<?php echo esc_url($homepage); ?>"><?php echo esc_html(__('Home', 'gratuity')); ?></a></li>
                <li><a href="<?php echo esc_url($blog_page_url); ?>"><?php echo esc_html(__('Blog', 'gratuity')); ?></a></li>
                <li><?php echo esc_html( get_the_title() ); ?></li>
            </ol>
            <h2>Blog</h2>
            <?php else : ?>
        <?php endif; ?>
    </div>
</section><!-- End Breadcrumbs -->

<?php dd( is_single(), is_page()) ?>
