<?php

/**
 * head内の不要なタグを削除
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_shortlink_wp_head');

/**
 * head内のtitleタグを出力
 */
function setup_theme() {
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'setup_theme' );

function remove_tagline($title) {
  if ( isset($title['tagline']) ) {
    unset( $title['tagline'] );
  }
  return $title;
}
add_filter( 'document_title_parts', 'remove_tagline' );

function custom_title_separator($sep) {
  $sep = '|';
  return $sep;
}
add_filter( 'document_title_separator', 'custom_title_separator' );

/**
 * 固定ページやカスタム投稿でビジュアルエディタを利用できないようにする
 */
function disable_visual_editor_in_page() {
	global $typenow;
	$disabledPostType = array("page", "info");
	if (in_array($typenow, $disabledPostType)) add_filter('user_can_richedit', 'disable_visual_editor_filter');
}
function disable_visual_editor_filter() {
	return false;
}
add_action('load-post.php', 'disable_visual_editor_in_page');
add_action('load-post-new.php', 'disable_visual_editor_in_page');

/**
 * サイトのURLを出力するショートコード
 */
function shortcode_url() {
    return site_url();
}
add_shortcode('url', 'shortcode_url');

/**
 * テーマのURLを出力するショートコード
 */
function shortcode_templateurl() {
    return get_template_directory_uri();
}
add_shortcode('template_url', 'shortcode_templateurl');
