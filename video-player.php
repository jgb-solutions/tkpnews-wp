<?php

/* Video Player */
/*
$attr = array (
	'src'			=> 'http://localhost/wp/data/video/spotlight_640_360.mp4', 		// mp4, m4v, webm, ogv, wmv, flv,
	'poster'	=> '',		// myimage.jpg/png/gif,
	'loop'		=> '', 		// on, off,
	'autoplay'=> '', 		// on,off',
	'preload'	=> 'metadata', 		// metadata, none, auto
	'width'		=> '640', 		// the width of the video player - 640px
	'height'	=> '360'			// the height of the video player - 360px
);

echo wp_video_shortcode( $attr );
YouTube Link = //www.youtube.com/embed/524Tf0dNRNw
*/

$youtubeID = get_post_meta( get_the_ID(), 'youtube_id', true );
if ( strlen($youtubeID) == 11 ):
	echo '<div class="video-container"><iframe src="//www.youtube.com/embed/' . $youtubeID . '" height="390" width="640" allowfullscreen="" frameborder="0"></iframe></div>';
else:
	echo 'Baz, ou wè sa mwen t\'ap di w la. Ou pa rantre 11 karaktè ID Videyo YouTube la yo.'.
				'Kounya videyo w la pa monte, degaje w remete li ankò ak bon ID a.';
endif;