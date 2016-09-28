<?php

function paginate() {

    global $wp_query, $wp_rewrite;

    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

    $pagination = array(

        'base' => @add_query_arg('page','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'show_all' => false,
        'type' => 'array',
        'prev_text'  => __('« Avan'),
        'next_text'  => __('Apre »'),

    );

    if ( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

    if ( !empty($wp_query->query_vars['s']) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

    $paginate =  paginate_links( $pagination );

    if ( is_array( $paginate ) ) {

        echo '<div data-role="navbar"><ul>';

        foreach ( $paginate as $page ) {

            $page = str_replace('span', 'a', $page );
            $page = str_replace('/span', '/a', $page );

            echo "<li>$page</li>";

        }

        echo '</ul></div>';
    }
}