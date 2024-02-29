<?php

add_action('wp_enqueue_scripts', 'alh_enqueue_styles');

function alh_enqueue_styles() {
	wp_enqueue_style('alh-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_script('alh-js', get_stylesheet_directory_uri().'/alh-script.js', array(), '1.1.3', true);
}

function alh_menus() {
	register_nav_menus(array(
        'footer-menu' => _('ALH Footer Menu'),
        'header-menu' => _('ALH Header Menu')
    ));
}
add_action( 'init', 'alh_menus' );

class Custom_ALH_Nav_Menu extends Walker_Nav_Menu {
	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $output .= "<li>";
        if ( ! empty( $item->classes ) && in_array( 'menu-item-has-children', $item->classes ) ) {
            // Menu item has children, do not output a link
            $output .= $item->title;
        } else {
            // Menu item doesn't have children, output a link
            $output .= "<a href='" . $item->url . "'>" . $item->title . "</a>";
        }
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>";
    }
}

class ALH_Header_Nav_Menu extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $output .= "<li>";
        if ( ! empty( $item->classes ) && in_array( 'menu-item-has-children', $item->classes ) ) {
            // Menu item has children, output a button with onclick attribute
            $output .= "<button onclick='dropdownBtn()'>" . $item->title . "</button>";
            $output .= "<i class='fa-solid fa-caret-down'></i>";
        } else {
            $output .= "<a href='" . $item->url . "'>" . $item->title . "</a>";
        }
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>";
    }

}
