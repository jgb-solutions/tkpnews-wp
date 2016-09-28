<?php

add_action( 'wp_ajax_tkpn_search', 'tkpn_search' );
add_action( 'wp_ajax_nopriv_tkpn_search', 'tkpn_search' );
add_action( 'wp_ajax_nopriv_tkpnViewCount', 'tkpnViewCount' );
add_action( 'wp_ajax_tkpnViewCount', 'tkpnViewCount' );

function tkpn_search()
{
	global $wpdb; // this is how you get access to the database

	$query = $_POST['query'];

	$args = array(
		's' => $query,
		'posts_per_page' => -1
	);

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) : ?>

		<ul data-role="listview">

			<?php while( $query->have_posts() ) : $query->the_post(); ?>

			<li>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('jm-thumb'); ?>
					<?php the_title(); ?>
				</a>
			</li>

			<?php endwhile; ?>

		</ul>

		<?php else: ?>

		<p>Nou pa jwenn pou sa w chèche a</p>

	<?php endif; die(); // this is required to return a proper result
}

function tkpnViewCount() {

	$id = $_POST['tkpnID'];

	$view = (int) get_post_meta( $id, 'viewCount', true );
	update_post_meta( $id, 'viewCount', $view + 1 );
		$newView = (int) get_post_meta( $id, 'viewCount', true );
	echo $newView;
	die();
}