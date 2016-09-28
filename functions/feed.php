<?php

function add_my_rss_node()
{
    global $post;

    if (has_post_thumbnail( $post->ID) ):
        $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
         $url = $thumbnail[0];
        echo "<image>{$url}</image>";
    endif;
}

add_action('rss2_item', 'add_my_rss_node');