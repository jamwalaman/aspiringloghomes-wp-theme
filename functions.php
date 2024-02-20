<?php

add_action('wp_enqueue_scripts', 'alh_enqueue_styles');

function alh_enqueue_styles() {
	wp_enqueue_style('alh-style',get_stylesheet_uri());
}

function asl_footer_menu() {
	register_nav_menu('footer-menu',__( 'ASL Footer Menu' ));
}
add_action( 'init', 'asl_footer_menu' );

class Custom_ASL_Nav_Menu extends Walker_Nav_Menu {
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
