<?php get_header(); ?>

	<div class="left">
		<?php if ( have_posts() ) : ?>

			<ul data-role="listview" data-inset="true" data-counttheme="b">

				<?php while ( have_posts() ) : the_post(); ?>

					<li>
						<a href="<?php the_permalink(); ?>">

							<?php the_post_thumbnail('jm-thumb'); ?>

							<h2>
								<?php the_title(); ?>
								<span class="ui-li-count">
									<?php comments_number(0, 1, '%'); ?>
								</span>
							</h2>

							<article><?php the_excerpt(); ?></article>

						</a>
					</li>

				<?php endwhile; ?>

			</ul>

			<!-- post navigation -->
			<?php
				else:
					include 'else.php';
		endif; ?>

<?php paginate(); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>