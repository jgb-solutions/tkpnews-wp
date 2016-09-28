<?php get_header(); ?>
	<div class="left">
		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

					<?php the_post_thumbnail(); ?>

					<h2><?php the_title(); ?></h2>

					<article><?php the_content(); ?></article>

		<?php endwhile; ?>

		<?php else:
			include 'else.php';

		endif; ?>
	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>