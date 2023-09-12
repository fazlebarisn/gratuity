<?php
/** 
* Sitebar template file
* @package gratuity
*/
?>

<div class="col-lg-4">

<div class="sidebar">

  <h3 class="sidebar-title"><?php esc_html( __('Search', 'gratuity') ); ?></h3>
    <?php get_search_form(); ?>

  <h3 class="sidebar-title"><?php esc_html( __('Categories', 'gratuity') ); ?></h3>

    <?php
        $args = array(
            'title_li' => '',      // Remove the "Categories" title
            'show_count' => true,  // Display the count of posts in each category
            'orderby' => 'name',   // Order categories by name
            'order' => 'ASC',      // Sort categories in ascending order
        );
        $args = apply_filters('gratuity_cat_args', $args);
    ?>
  <div class="sidebar-item categories">
    <ul>
        <?php wp_list_categories($args); ?>
    </ul>
  </div><!-- End sidebar categories-->


  <h3 class="sidebar-title"><?php esc_html( __('Recent Posts', 'gratuity') ); ?> </h3>
  <div class="sidebar-item recent-posts">
    <?php
        $args = [
            'post_status'   => 'publish',
            'numberposts'   => 5,
        ];

        $recent_post = wp_get_recent_posts( $args );

        if( $recent_post ):
            foreach( $recent_post as $post ) :
    ?> 
                <div class="post-item clearfix">
                    <!-- <img src="assets/img/blog/blog-recent-1.jpg" alt=""> -->
                    <?php echo get_the_post_thumbnail($post['ID'], [80,80]); ?>
                    <h4><a href="<?php echo esc_url( get_permalink($post['ID']) ); ?>"><?php echo esc_html( $post['post_title'] ); ?></a></h4>
                    <time datetime="2020-01-01"><?php gratuity_post_on(); ?></time>
                </div>
    <?php
            endforeach;
        endif; 
    ?>
  </div><!-- End sidebar recent posts-->

  <h3 class="sidebar-title">Tags</h3>
  <div class="sidebar-item tags">

    <ul>
        <?php
            $tag_args = [
                'number'    => 5,
            ];

            $tags = get_tags();

            foreach( $tags as $tag ){
                echo '<li><a href="'.esc_url( get_tag_link($tag->term_id) ).'">'. ucfirst($tag->name).'</a></li>';
            }
        ?>

    </ul>
  </div><!-- End sidebar tags-->

</div><!-- End sidebar -->

</div><!-- End blog sidebar -->