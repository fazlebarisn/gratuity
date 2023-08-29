<?php

/** 
 * Comments template file
 * @package gratuity
 */

if (post_password_required()) {
    return;
}

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="blog-comments">

    <?php if (have_comments()) : ?>
        <h4 class="comments-count">
            <?php
            printf(
                _nx(
                    'One Comment on "%2$s"',
                    '%1$s Comments on "%2$s"',
                    get_comments_number(),
                    'comments title',
                    'gratuity'
                ),
                number_format_i18n(get_comments_number()),
                '<span>' . get_the_title() . '</span>'
            );
            ?>
        </h4>

        <div class="comment">
            <?php
            wp_list_comments(array(
                'style'       => 'div',
                'short_ping'  => true,
                'avatar_size' => 74,
            ));
            ?>
        </div><!-- .comment-list -->

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="navigation comment-navigation" role="navigation">

                <h1 class="screen-reader-text section-heading"><?php _e('Comment navigation', 'twentythirteen'); ?></h1>
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'twentythirteen')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'twentythirteen')); ?></div>
            </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation 
        ?>

        <?php if (!comments_open() && get_comments_number()) : ?>
            <p class="no-comments"><?php _e('Comments are closed.', 'twentythirteen'); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() 
    ?>

    <?php comment_form(); ?>

</div><!-- #comments -->







<div class="blog-comments">

    <h4 class="comments-count">8 Comments</h4>


    <div id="comment-2" class="comment">
        <div class="d-flex">
            <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
            <div>
                <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                <time datetime="2020-01-01">01 Jan, 2020</time>
                <p>
                    Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                </p>
            </div>
        </div>

        <div id="comment-reply-1" class="comment comment-reply">
            <div class="d-flex">
                <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                <div>
                    <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                        Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                        Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                        Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                    </p>
                </div>
            </div>

            <div id="comment-reply-2" class="comment comment-reply">
                <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                    <div>
                        <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan, 2020</time>
                        <p>
                            Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                        </p>
                    </div>
                </div>

            </div><!-- End comment reply #2-->

        </div><!-- End comment reply #1-->

    </div><!-- End comment #2-->


    <div class="reply-form">
        <h4>Leave a Reply</h4>
        <p>Your email address will not be published. Required fields are marked * </p>
        <form action="">
            <div class="row">
                <div class="col-md-6 form-group">
                    <input name="name" type="text" class="form-control" placeholder="Your Name*">
                </div>
                <div class="col-md-6 form-group">
                    <input name="email" type="text" class="form-control" placeholder="Your Email*">
                </div>
            </div>
            <div class="row">
                <div class="col form-group">
                    <input name="website" type="text" class="form-control" placeholder="Your Website">
                </div>
            </div>
            <div class="row">
                <div class="col form-group">
                    <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Post Comment</button>

        </form>

    </div>

</div><!-- End blog comments -->