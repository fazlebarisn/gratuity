<?php
/** 
* Main template file
* @package gratuity
*/
?>

<?php get_header(); ?>

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8 entries">
          <?php 
            if( have_posts() ) : 
              while( have_posts() ) : the_post();
              get_template_part( 'template-parts/content' );
              endwhile;
            endif; 
            gratuity_pagination(); 
            ?>

          </div><!-- End blog entries list -->

          <?php get_sidebar(); ?>

        </div>

      </div>
    </section><!-- End Blog Section -->


<?php get_footer(); ?>


