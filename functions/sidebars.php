<?php

/******** Register Sidbar **********************************/
$args = array(
	'name'          => ( 'Primary Sidebar Widget'),
	'id'            => 'boot_sidebar',
	'description'   => 'Primary Sidebar.',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgetTitle tkpn-title alignCenter">',
	'after_title'   => '</h3>'
);

register_sidebar($args);

$args = array(
  'name'          =>  'Secondary Sidebar Blog',
  'id'            =>  'boot_sidebar_blog',
  'description'   =>  'Sidebar for the blog homepage',
  'class'         =>  '',
  'before_widget' =>  '<div id="%1$s" class="widget %2$s col-sm-12">',
  'after_widget'  =>  '</div>',
  'before_title'  =>  '<h3 class="widgetTitle alignCenter">',
  'after_title'   =>  '</h3'
);
register_sidebar( $args );