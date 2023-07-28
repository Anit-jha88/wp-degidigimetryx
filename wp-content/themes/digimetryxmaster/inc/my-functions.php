<?php
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);


function custom_scripts() {

    $cssArray = array(
        "css-bootstrap.min.css",
        "css-animate.min.css",
        "css-flaticon.css",
        "css-fontawesome.min.css",
        "css-meanmenu.css",
        "css-magnific-popup.min.css",
        "css-nice-select.min.css",
        "css-swiper.min.css",
        "css-owl.carousel.min.css",
        "css-style.css",
        "css-responsive.css",
    );

    foreach($cssArray as $x => $val) {
     wp_enqueue_style( 'css-'.$x, get_template_directory_uri().'/css/'.$val, false, NULL, 'all' );
    }

    $javascriptArray = array(
        "js-jquery.min.js",
        "js-popper.min.js",
        "js-bootstrap.min.js",
        "js-jquery.meanmenu.js",
        "js-jquery.appear.min.js",
        "js-jquery.waypoints.min.js",
        "js-jquery.counterup.min.js",
        "js-owl.carousel.min.js",
        "js-jquery.magnific-popup.min.js",
        "js-jquery.nice-select.min.js",
        "js-isotope.pkgd.min.js",
        "js-swiper.min.js" ,
        "js-wow.min.js",
        "js-main.js"

    );

	foreach($javascriptArray as $x => $val) {
     wp_enqueue_script( 'js-script-'.$x, get_template_directory_uri().'/js/'.$val, '', '', true );
    }

}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );


// function wpb_demo_shortcode() {
// $message = get_template_directory_uri();
// return $message;
// }
// add_shortcode('baseurl', 'wpb_demo_shortcode');

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

}
//base url
function urlFunction()
{
    echo get_template_directory_uri().'/images';
}
//permalink
// add_action( 'init', 'custom_page_rules' );
// function custom_page_rules() {
//     global $wp_rewrite;
//     $wp_rewrite->page_structure = $wp_rewrite->root . '%pagename%.html';
// }

function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'primary') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $atts, $item, $args ) {
    $class = 'nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}


// echo str_replace('sub-menu', 'dropdown-menu', wp_nav_menu( array(
//     'echo' => false,
//     'theme_location' => 'primary',
//     'items_wrap' => '<ul class="dropdown-menu">%3$s</ul>'
//   ) )
// );

function new_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);
    return $menu;
}

add_filter('wp_nav_menu','new_submenu_class');
?>

