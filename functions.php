<?php

add_action('wp_enqueue_scripts', 'alh_enqueue_styles');

function alh_enqueue_styles() {
	wp_enqueue_style('alh-style',get_stylesheet_uri());
}
