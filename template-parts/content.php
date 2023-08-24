<?php
/** 
* Header template file
* @package gratuity
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?> >
    <?php
        get_template_part( 'template-parts/components/blog/entry-header' );
        get_template_part( 'template-parts/components/blog/entry-meta' );
        get_template_part( 'template-parts/components/blog/entry-content' );
    ?>
</article>
