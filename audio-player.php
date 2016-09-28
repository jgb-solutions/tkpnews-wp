<?php

/* Audio player */

$mp3 = get_post_meta(get_the_ID(), 'name', true) ? site_url('/data/a/t/') . get_post_meta(get_the_ID(), 'name', true) . '.mp3' : get_post_meta( get_the_ID(), 'wpcf-audio', true );

$attr = array(
	'src'      => $mp3,
	'loop'     => '',
	// 'autoplay' => 'on',
	// 'preload' => 'auto'
);

echo wp_audio_shortcode( $attr );
?>
<script>
	$(function() {
		$('audio,video').mediaelementplayer();
	});
</script>