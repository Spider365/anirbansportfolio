<?php

/**
 * Get Flatsome option
 *
 * @deprecated in favor of get_theme_mod()
 *
 * @return string
 */
function flatsome_option($option) {
	// Get options
	return get_theme_mod( $option, flatsome_defaults($option) );
}

if(!function_exists('flatsome_dummy_image')) {
  function flatsome_dummy_image() {
    return get_template_directory_uri().'/assets/img/missing.jpg';
  }
}

/* Check WooCommerce Version */
if( ! function_exists('fl_woocommerce_version_check') ){
	function fl_woocommerce_version_check( $version = '2.6' ) {
    if( version_compare( WC()->version, $version, ">=" ) ) {
      return true;
    }
	  return false;
	}
}

/* Get Site URL shortcode */
if( ! function_exists( 'flatsome_site_path' ) ) {
  function flatsome_site_path(){
    return site_url();
  }
}
add_shortcode('site_url', 'flatsome_site_path');
add_shortcode('site_url_secure', 'flatsome_site_path');


/* Get Year */
if( ! function_exists( 'flatsome_show_current_year' ) ) {
  function flatsome_show_current_year(){
      return date('Y');
  }
}
add_shortcode('ux_current_year', 'flatsome_show_current_year');

function flatsome_get_post_type_items($post_type, $args_extended=array()) {
  global $post;
  $old_post = $post;
  $return = false;

  $args = array(
    'post_type'=>$post_type
    , 'post_status'=>'publish'
    , 'showposts'=>-1
    , 'order'=>'ASC'
    , 'orderby'=>'title'
  );

  if ($args && count($args_extended)) {
    $args = array_merge($args, $args_extended);
  }

  query_posts($args);

  if (have_posts()) {
    global $post;
    $return = array();

    while (have_posts()) {
      the_post();
      $return[get_the_ID()] = $post;
    }
  }

  wp_reset_query();
  $post = $old_post;

  return $return;
}

function flatsome_is_request( $type ) {
  switch ( $type ) {
    case 'admin' :
      return is_admin();
    case 'ajax' :
      return defined( 'DOING_AJAX' );
    case 'frontend' :
      return ( ! is_admin() || defined( 'DOING_AJAX' ) ) && ! defined( 'DOING_CRON' );
  }
}

function flatsome_api_url() {
  $api_url = 'https://flatsome-api.netlify.com';

  if ( defined( 'FLATSOME_API_URL' ) && FLATSOME_API_URL ) {
    $api_url = FLATSOME_API_URL;
  }

  return $api_url;
}

function flatsome_facebook_accounts() {
  $theme_mod = get_theme_mod( 'facebook_accounts', array() );

  return array_filter( $theme_mod, function ( $account ) {
    return ! empty( $account );
  } );
}

// Get block id by ID or slug.
function flatsome_get_block_id( $post_id ) {
  global $wpdb;

  if ( empty ( $post_id ) ) {
    return null;
  }

  // Get post ID if using post_name as id attribute.
  if ( ! is_numeric( $post_id ) ) {
    $post_id = $wpdb->get_var(
      $wpdb->prepare(
        "SELECT ID FROM $wpdb->posts WHERE post_type = 'blocks' AND post_name = %s",
        $post_id
      )
    );
  }

  // Polylang support.
  if ( function_exists( 'pll_get_post' ) ) {
    if ( $lang_id = pll_get_post( $post_id ) ) {
      $post_id = $lang_id;
    }
  }

  // WPML Support.
  if ( function_exists( 'icl_object_id' ) ) {
    if ( $lang_id = icl_object_id( $post_id, 'blocks', false, ICL_LANGUAGE_CODE ) ) {
      $post_id = $lang_id;
    }
  }

  return $post_id;
}

/**
 * Calls a shortcode function by its tag name.
 *
 * @param string $tag     The shortcode of the function to be called.
 * @param array  $atts    The attributes to pass to the shortcode function (optional).
 * @param array  $content The content of the shortcode (optional).
 *
 * @return bool|string If a shortcode tag doesn't exist => false, if exists => the result of the shortcode.
 */
function flatsome_apply_shortcode( $tag, $atts = array(), $content = null ) {

	global $shortcode_tags;

	if ( ! isset( $shortcode_tags[ $tag ] ) ) return false;

	return call_user_func( $shortcode_tags[ $tag ], $atts, $content, $tag );
}
