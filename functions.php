<?php
/* * Zenon Theme Functions
    * @versions 1
*/
if (!isset($content_width) ) 
{ $content_width = 645 ;}

function aye_setup() {
    load_theme_textdomain ( 'aye!', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-formats', array('aside') );
    add_theme_support( 'html5', array( 'search-form' ) );
};
add_action( 'after_setup_theme', 'aye_setup' );
add_action( 'init', 'register_my_menus' );

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
        
