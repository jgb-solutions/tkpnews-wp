<?php get_header(); ?>
	<div class="left">
		<?php if ( have_posts() ) : ?>

			<ul data-role="listview" data-inset="true">

				<?php while ( have_posts() ) : the_post();

						switch ( get_post_type() ) {
							case 'post':
								$post_type = 'Atik';
								break;

							case 'trak':
								$post_type = 'Mizik';
								break;

							case 'klip':
								$post_type = 'Videyo';
								break;

							default:
								$post_type = 'Paj';
								break;
						}
				?>

					<li>
						<a href="<?php the_permalink(); ?>">

							<?php the_post_thumbnail('thumb'); ?>

							<h2><?php echo $post_type . ': ' . get_the_title(); ?></h2>

							<article><?php the_excerpt(); ?></article>

						</a>
					</li>

				<?php endwhile; ?>

			</ul>

		<?php else:
			include 'else.php';

		endif; ?>
	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>