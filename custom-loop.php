<?php

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) : ?>

		<ul data-role="listview" data-inset="true">

		<?php	while ( $query->have_posts() ) : $query->the_post(); ?>

		<li>

			<a href="<?php the_permalink(); ?>" data-transition="flip">
				<?php the_post_thumbnail('thumb'); ?>
				<h2><?php the_title(); ?></h2>
				<article><?php the_excerpt(); ?></article>
			</a>
		</li>

		<?php endwhile; ?>

		</ul>

	<div class="alignleft"><?php previous_posts_link('&laquo; Previous') ?></div>
  <div class="alignright"><?php next_posts_link('More &raquo;') ?></div>


		<?php else:
			include 'else.php';

	endif;

wp_reset_postdata();