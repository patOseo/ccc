<?php

function wpdc_add_custom_gutenberg_color_palette() {
	add_theme_support(
		'editor-color-palette',
		[
			[
				'name'  => esc_html__( 'Red', 'wpdc' ),
				'slug'  => 'red',
				'color' => '#f03e3f',
			],
			[
				'name'  => esc_html__( 'Blue', 'wpdc' ),
				'slug'  => 'blue',
				'color' => '#233361',
			],
			[
				'name'  => esc_html__( 'Light Gray', 'wpdc' ),
				'slug'  => 'light-gray',
				'color' => '#dedede',
			],
			[
				'name'  => esc_html__( 'Dark Gray', 'wpdc' ),
				'slug'  => 'dark-gray',
				'color' => '#333333',
			],

		]
	);
}
add_action( 'after_setup_theme', 'wpdc_add_custom_gutenberg_color_palette' );