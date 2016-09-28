<?php get_header(); ?>
	<div <?php post_class('left'); ?>>
		<?php if ( have_posts() ) : ?>

		<?php	while ( have_posts() ) : the_post(); ?>

			<!-- the post -->
			<h2 class="textCenter">
				<?php the_title(); ?> <br />
				<?php $viewCount = get_post_meta( get_the_id(), 'viewCount', true ); ?>
				<small>Ekri pa Staff <a href="https://twitter.com/tkpnews" target="_blank">#TKPNews</a> | <?php the_date('d/m/Y (h:i a)'); ?> |
					<a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>">
						<?php echo get_the_category()[0]->name ?></a> |
					<span class="viewCount" data-id="<?php the_id(); ?>">
						<?php echo $viewCount ? $viewCount . ' Views' : ''; ?>
					</span>
				</small>
			</h2>

				<?php include 'singleShare.php'; ?>

				<div class="featured-image"><?php the_post_thumbnail('medium'); ?></div>

				<article><?php the_content(); ?></article>

				<?php include 'single_tags.php'; ?>

				<?php include 'singleShare.php'; ?>

			<?php endwhile; else: endif; ?>

			<?php include 'related-post.php'; ?>
			<?php include 'tkpn_comments.php'; ?>
	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>