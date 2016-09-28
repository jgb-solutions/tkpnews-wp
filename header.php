<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div id="main" data-role="page">

	<div data-add-back-btn="true" data-back-btn-text="Tounen" data-role="header" data-theme="b" class="ui-header jqm-header" role="banner">
		<h1 class="ui-title" role="heading" aria-level="1">
				<a href="<?php echo home_url(); ?>" data-transition="pop">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'title' ); ?>" />
				</a>
		</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content clearfix main">
