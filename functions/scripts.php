<?php

$jq = '//code.jquery.com/jquery-1.11.2.min.js';

$test_jq = @fopen( $jq, 'r' );

if ( $test_jq !== false ) {

  add_action( 'wp_enqueue_scripts', 'load_ext_jq' ); // initiate the function
  function load_ext_jq()
  {
    global $jq;
    wp_deregister_script( 'jquery' ); // deregisters the default WordPress jQuery
    wp_register_script( 'jquery', $jq ); // register the external file
    wp_enqueue_script( 'jquery' ); // enqueue the external file
    wp_enqueue_script( 'migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js');
  }

  add_action( 'wp_enqueue_scripts', 'tkpn_ext_scripts' );
} else {
    add_action( 'wp_enqueue_scripts', 'load_loc_jq' ); // initiate the function

    function load_loc_jq()
    {
      wp_enqueue_script( 'jquery' );
    }

    add_action( 'wp_enqueue_scripts', 'tkpn_loc_scripts' );
}

// load the theme's scripts
function tkpn_ext_scripts()
{
  wp_enqueue_style(
    'tkpn_jqm_css',
    '//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css',
    false,
    '1.4.5',
    'all'
  );
  wp_enqueue_style( 'tkpnFontAwesome',
    '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
    false,
    '4.3.0',
    'all'
  );
  tkpn_cust_css();
	wp_enqueue_script(
    'tkpn_jqm_js',
		'//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js',
		array( 'jquery' ),
		false,
    false
  );
}

function tkpn_loc_scripts()
{
  wp_enqueue_style(
    'tkpn_jqm_css',
    get_template_directory_uri() . '/css/jquery.mobile-1.4.3.min.css',
    false,
    '1.4.5',
    'all'
  );

  tkpn_cust_css();
  wp_enqueue_script(
    'tkpn_jqm_js',
    get_template_directory_uri() . '/js/jquery.mobile-1.4.3.min.js',
    array( 'jquery' ),
    false,
    false
  );
}

function tkpn_cust_js_f()
{
  wp_enqueue_script('tkpn_cust_js', get_template_directory_uri() . '/js/custom.js' );
  wp_enqueue_script('tkpn_dq_js', get_template_directory_uri() . '/js/disqus.js' );

  $ajaxArgs = array( 'ajaxUrl' => admin_url( 'admin-ajax.php' ) );
  wp_localize_script( 'tkpn_cust_js', 'tkpnAjax', $ajaxArgs );
}

add_action('wp_enqueue_scripts', 'tkpn_cust_js_f');

function tkpn_cust_css()
{
  wp_enqueue_style(
    'tkpn_cust_css',
    get_template_directory_uri() . '/css/custom.css'
  );
}