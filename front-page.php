<?php get_header(); ?>

<div class="left">
	<?php
	$args = array(
		'orderby' => 'name',
		'order' => 'ASC'
		);

	$categories = get_categories($args);

	foreach( $categories as $category )
	{
		$args = array(
			'cat' 						=> $category->term_id,
			'posts_per_page' 	=> 5
		);

		$query = new WP_Query( $args );

		if ( $query->have_posts() ) : ?>

		<ul data-role="listview" data-inset="true" data-counttheme="b" data-divider-theme="b">

			<li data-role="list-divider">
				<a class="tkpn-cat-title" href="<?php echo get_category_link( $category->term_id ); ?>">
					<h2><?php echo ucwords($category->name); ?></h2>
				</a>
			</li>

			<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<li>
					<a href="<?php the_permalink(); ?>">

						<?php the_post_thumbnail('jm-thumb'); ?>

						<h3>
							<?php the_title(); ?>
							<span class="ui-li-count">
								<?php comments_number(0, 1, '%'); ?>
							</span>
						</h3>

						<article><?php the_excerpt(); ?></article>

					</a>
				</li>

			<?php endwhile; ?>

		</ul>
		<!-- post navigation -->
		<?php
		else:
			include 'else.php';
		endif;
		wp_reset_postdata();
	}
	?>
	</div>
	<?php get_sidebar(); ?>

	<?php get_footer(); ?>