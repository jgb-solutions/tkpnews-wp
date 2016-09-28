	</div><!-- /content -->

	<div data-role="footer" data-theme="b" data-position="fixed">

		<div data-role="navbar">
			<ul>
				<li><a href="#tkpn-menu" data-icon="bars">Meni</a></li>
				<li><a href="#tkpn-search" data-icon="search" id="tkpn-search-a">Rechèch</a></li>
				<li><a href="#popupCloseRight" data-rel="popup" data-position-to="window" data-transitiion="slidedown" data-icon="info">Enfo</a></li>

			</ul>
		</div>

		<!-- <h4>&copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?></h4> -->
	</div><!-- /footer -->

	<div data-role="panel" id="tkpn-menu" data-display="overlay" data-theme="b">
		<ul data-role="listview">
    <li data-icon="home"><a href="<?php echo home_url('/'); ?>">Paj Akèy</a></li>

		<?php

		$defaults = array(
			'theme_location' 	=> 'primary',
			'menu'            => 'primary',
			'container'       => false,
			'items_wrap'      => '%3$s'
		);

		wp_nav_menu( $defaults );

		?>

		</ul>
	</div><!-- /panel -->
	<div data-role="panel" id="tkpn-info" data-display="overlay" data-theme="b" data-position="right">
		<div class="tkpn-info"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'title' ); ?>" />
			<p>Hey, I'm just a paragraph with some info about this site.</p>
		</div>
	</div><!-- /panel -->
	<div data-role="panel" id="tkpn-search" data-display="overlay" data-theme="b" data-position="right">
		<form method="get" action="<?php echo home_url('/'); ?>">
			<label for="search">
				<input type="search" name="s" id="search" placeholder="Chèche..." value="">
			</label>
		</form>
		<div id="search-results">
		</div>
	</div><!-- /panel -->

<div data-role="popup" id="popupCloseRight" class="ui-content" data-theme="b" data-overlay-theme="b" style="max-width:400px;">
    <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
	<div class="tkpn-info textCenter">
		<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'title' ); ?>" />
		<p class="copyright"><?php echo get_bloginfo('name') . ', © ' . date('Y'); ?></p>
	</div>
</div>


</div><!-- /page -->


<?php wp_footer(); ?>

</body>
</html>