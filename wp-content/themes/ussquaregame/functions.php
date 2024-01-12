<?php 

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1568, 9999 );

register_nav_menus(
    array(
        'primary' => esc_html__( 'Primary menu', 'livegood' ),
        'footer'  => esc_html__( 'Secondary menu', 'livegood' ),
    )
);

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support(
    'html5',
    array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets',
    )
);

/*
 * Add support for core custom logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 */
$logo_width  = 300;
$logo_height = 100;

add_theme_support(
    'custom-logo',
    array(
        // 'height'               => $logo_height,
        // 'width'                => $logo_width,
        'flex-width'           => true,
        'flex-height'          => true,
        'unlink-homepage-logo' => true,
    )
);

// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

// Add support for Block Styles.
add_theme_support( 'wp-block-styles' );


function add_nav_link_class($atts, $item, $args) {
    if ($args->theme_location == 'primary') {
        $atts['class'] = 'nav-link'; // Add the class to the 'a' tag
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_nav_link_class', 10, 3);


function theme_support_logo() {
    add_theme_support('custom-logo', array(
        // 'height'      => 100, // Set the height of your logo
        // 'width'       => 100, // Set the width of your logo
        'flex-height' => true,
    ));
}
add_action('after_setup_theme', 'theme_support_logo');

?>