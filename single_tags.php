<!-- Display Tag -->
<?php	if ( $tags = get_the_tags() ): ?>

 <div>

 		<?php foreach ( $tags as $tag ): ?>

 		<a class="ui-btn ui-btn-inline ui-icon-tag ui-btn-icon-left" href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>

 		<?php endforeach ?>

 </div>

<?php endif; ?>