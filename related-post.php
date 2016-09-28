<?php

$category = get_the_category();
$cat = $category[0]->slug;

$query = new WP_Query(
	array(
		'category_name'   => $cat,
		'posts_per_page'  => 3,
		'orderby'         => 'rand',
		'post__not_in'    => array( $post->ID )
	)
);

if ($query->have_posts()) : ?>

<div data-role="collapsible" data-collapsed="false" data-theme="b">
<h4>Atik an Relasyon</h4>

<ul data-role="listview">

<?php while ( $query->have_posts() ) : $query->the_post(); ?>

  <li>
    <a href="<?php the_permalink(); ?>">

      <?php the_post_thumbnail('thumb'); ?>

      <?php the_title(); ?>

    </a>
  </li>

<?php endwhile; ?>

</ul>
</div>

<?php endif; ?>

<?php wp_reset_postdata(); ?>
