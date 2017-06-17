<?php
/* * Zenon Theme Functions
    * @versions 1
*/
if (!isset($content_width) ) 
{ $content_width = 645 ;}

function zenon_setup() {
    load_theme_textdomain ( 'zenon!', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-formats', array('aside') );
    add_theme_support( 'html5', array( 'search-form' ) );
    add_theme_support( 'post-thumbnails' ); 
};

function create_custom_post() {
    $labels = array(
    'name'               => _x( 'Members', 'post type general name' ),
    'singular_name'      => _x( 'Member', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'member' ),
    'add_new_item'       => __( 'Add New Member' ),
    'edit_item'          => __( 'Edit Member' ),
    'new_item'           => __( 'New Member' ),
    'all_items'          => __( 'All Members' ),
    'view_item'          => __( 'View Member' ),
    'search_items'       => __( 'Search Members' ),
    'not_found'          => __( 'No Members found' ),
    'not_found_in_trash' => __( 'No Members found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Members',
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our Members and Member specific data',
    'rewrite'       => array( 'slug' => 'members', 'with_front' => false ),
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt'),
    'has_archive'   => true
  );
  register_post_type('members', $args ); 
}

add_action( 'after_setup_theme', 'zenon_setup' );
add_action( 'init', 'register_my_menus' );
add_action( 'init', 'create_custom_post' );

function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'secondary-menu' => __( 'Secondary Menu' ),
			'tertiary-menu' => __( 'Tertiary Menu' )
		)
	);
};

function recent_posts($atts,$content = null) {
    extract(shortcode_atts(array(
      'posts' => 1,
   ), $atts));
    query_posts(array('orderby' => 'date',
                      'order' => 'DESC', 'showposts' => $posts ));
        while (have_posts()) : the_post() ;
        $rstr= '<span id="stcode"><br>Do not Miss our Recent Post : <br><a
        href="'.get_permalink().'">'.get_the_title().'</a><br> <br></span>'.$content;
        endwhile;
    wp_reset_query();
    return $rstr;
};
        
