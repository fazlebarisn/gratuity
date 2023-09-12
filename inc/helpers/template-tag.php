<?php
/** 
* Menu class file
* @package gratuity
*/

/**
 * get post thumbnail
 */
function get_the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attributes = [] ){

    $custom_thumbnail = '';

    if( null === $post_id ){
        $post_id = get_the_ID();
    }

    if( has_post_thumbnail( $post_id ) ){

        $default_attributes = [
            'loading' => 'lazy'
        ];

        $attributes = array_merge( $additional_attributes , $default_attributes );

        $custom_thumbnail = wp_get_attachment_image(
            get_post_thumbnail_id(),
            $size,
            false,
            $attributes
        );
    }

    return $custom_thumbnail;
}

/**
 * Display the thumbnail
 */
function the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attributes = [] ){
    echo get_the_post_custom_thumbnail( $post_id, $size, $additional_attributes );
}

/**
 *  post publish date function
 */
function gratuity_post_on(){
    $time_string = '<time class="entry-date publish updated" datetime="%1$s">%2$s</time>';

    /**
     * check if the post publish date and modify date not same
     * second <time> tag only for seo. We will hide second time section by css
     * <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
     */
    if( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ){
        $time_string = '<time class="entry-date publish" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    // second two parameter only for if the post publish date and modify date not same
    $time_string = sprintf(
        $time_string,
        esc_attr( get_the_date(DATE_W3C) ),
        esc_attr( get_the_date() ),
        esc_attr( get_the_modified_date(DATE_W3C) ),
        esc_attr( get_the_modified_date() )
    );

    // inject the $time_string 
    $post_on = sprintf(
        esc_html_x( '%s', 'post date', 'gratuity'),
        '<a href="'.esc_url(get_the_permalink()).'" rel="bookmark">' .$time_string.'</a>'
    );

    echo '<li class="d-flex align-items-center"><i class="bi bi-clock"></i>'. $post_on.'</li>';
}

/**
 * To display post author name 
 * 
 */
function gratuity_posted_by(){
    $byline = sprintf(
        esc_html_x( '%s', 'post author', 'gratuity' ),
        '<a href="'. esc_url( get_author_posts_url( get_the_author_meta('ID')) ) .'">' . esc_html( get_the_author() ) . '</a>'
    );
    echo '<li class="d-flex align-items-center"><i class="bi bi-person"></i>' .$byline . '</li>';
}

function gratuity_post_comment(){
    $comment_number = get_comments_number();

    if( 0 == $comment_number ){
        $comment_number = __('No Comment', 'gratuity');
    }elseif( 1 == $comment_number ){
        $comment_number = $comment_number . __(' Comment', 'gratuity');
    }else{
        $comment_number = $comment_number . __(' Comments', 'gratuity');
    }

    $display_comment = sprintf(
        esc_html_x( '%s', 'post comments', 'gratuity'),
        '<a href="'.esc_url(get_the_permalink()).'" rel="bookmark">' .$comment_number.'</a>'
    );
    echo '<li class="d-flex align-items-center"><i class="bi bi-chat-dots">'.$display_comment.'</i>';
}

/**
 * To display excerpt
 */
function gratuity_the_excerpt( $trim_character_count = 0 ){

    if( ! has_excerpt() || 0 === $trim_character_count ){
        the_excerpt();
        return;
    }

    $excerpt = wp_strip_all_tags( get_the_excerpt() );
    $excerpt = substr( $excerpt, 0, $trim_character_count );
    $excerpt = substr( $excerpt, 0, strrpos( $excerpt, ' ') );

    echo $excerpt . '[...]';
}

/**
 * Read more button
 */
function gratuity_excerpt_more( $more = '' ){
    if( ! is_single() ){
        $more = sprintf(
            '<div class="read-more"><a href="%1$s">%2$s</a></div>',
            get_permalink( get_the_ID() ),
            __('Read More', 'hadudu'),
        );
    }
    return $more;
}

/**
 * For pagination
 * Not as template, need to work leater
 */
function gratuity_pagination(){

    $allowed_tags = [
        'span' => [
            'class' => []
        ],
        'a' => [
            'class' => [],
            'href'  => []
        ]
    ];

    $args = [
        'before_page_number' => '<span class="btn border border-secondary mr-2 mb-2">',
        'after_page_number' => '</span>',
        'prev_next'         => false,
    ];
    
    printf('<nav class="hadudu-pagination clearfix">%s</nav>', wp_kses( paginate_links($args), $allowed_tags ));
}


/** 
 * Template original markup
 *
<div class="blog-pagination">
<ul class="justify-content-center">
  <li><a href="#">1</a></li>
  <li class="active"><a href="#">2</a></li>
  <li><a href="#">3</a></li>
</ul>
</div>
*/