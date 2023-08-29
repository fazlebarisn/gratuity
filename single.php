<?php
/** 
* Menu class file
* @package gratuity
*/

get_header();
?>
<section id="blog" class="blog">
<div class="container" data-aos="fade-up">

  <div class="row">

    <div class="col-lg-8 entries">
        <?php 
            if( have_posts() ) : 
              while( have_posts() ) : the_post();
              // dd(get_the_author_meta('description'));
                get_template_part( 'template-parts/content' );
              endwhile;
            endif; 
        ?>

      <div class="blog-author d-flex align-items-center">
        <!-- <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt=""> -->
       <?php 
        echo get_avatar( 
          get_the_author_meta('user_email'), 
          '120',
           '',
           'Author Image', 
           ['class' => 'rounded-circle float-left']
        );
       ?>
        <div>
          <h4><?php echo esc_html(get_the_author());?></h4>
          <div class="social-links">
            <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
            <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
          </div>
          <p>
            <?php echo esc_html( get_the_author_meta('description') ); ?>
          </p>
        </div>
      </div><!-- End blog author bio -->

      <?php comments_template(); ?>

    </div><!-- End blog entries list -->

    <?php get_sidebar(); ?>

  </div>

</div>
</section><!-- End Blog Single Section -->

<?php get_footer(); ?>