<?php

add_theme_support( 'custom-header' );

// Theme the TinyMCE editor
// You should create custom-editor-style.css in your theme folder
add_editor_style('css/editor.css');


// Enable thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(200, 200, true); // Normal post thumbnails

// Custom CSS for the login page
// Create wp-login.css in your theme folder
function wpfme_loginCSS() {
	echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'css/login.css"/>';
}
add_action('login_head', 'wpfme_loginCSS');


// Customise the footer in admin area
function wpfme_footer_admin () {
	echo 'Theme designed and developed by <a href="http://www.meshfresh.org" target="_blank">MESH Design + Development</a>.';
}
add_filter('admin_footer_text', 'wpfme_footer_admin');


// Add custom menus
register_nav_menus( array(
	'main-nav' => __( 'Primary Navigation'),
	'footer-nav' => __( 'Footer Navigation')
) );


// Call Googles HTML5 Shim, but only for users on old versions of IE
function wpfme_IEhtml5_shim () {
	global $is_IE;
	if ($is_IE)
	echo '<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->';
}
add_action('wp_head', 'wpfme_IEhtml5_shim');


// Disable the theme / plugin text editor in Admin
define('DISALLOW_FILE_EDIT', true);

//Custom post type
function register_topics() {
  $labels = array(
    'name'               => 'Topics',
    'singular_name'      => 'Topic',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Topic',
    'edit_item'          => 'Edit Topic',
    'new_item'           => 'New Topic',
    'all_items'          => 'All Topics',
    'view_item'          => 'View Topic',
    'search_items'       => 'Search topics',
    'not_found'          => 'No topics found',
    'not_found_in_trash' => 'No topics found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Topics'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'topic' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );

  register_post_type( 'topic', $args );
}
add_action( 'init', 'register_topics' );


?>
