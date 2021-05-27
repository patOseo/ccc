<?php

// Enqueue block CSS for the editor
function custom_blocks_editor_scripts() {
	// Enqueue block editor styles
    wp_enqueue_style(
        'custom-blocks-editor-css',
        get_stylesheet_directory_uri() . '/css/custom-blocks.css',
        [ 'wp-edit-blocks' ]
    );
}


// Create custom Gutenberg block category for ACF Blocks
function acf_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'acf-blocks',
				'title' => __( 'Custom Blocks', 'acf-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'acf_block_category', 1, 2);


// Hook the enqueue functions into the editor
add_action( 'enqueue_block_editor_assets', 'custom_blocks_editor_scripts' );


function acf_custom_blocks() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register call-to-action block
		acf_register_block(array(
			'name'				=> 'call-to-action',
			'title'				=> __('CTA Button'),
			'description'		=> __('A custom block for call-to-action'),
			'mode'				=> 'edit',
			'render_template'	=> 'global-templates/blocks/block-cta.php',
			'category'			=> 'acf-blocks',
			'icon'				=> 'slides',
			'keywords'			=> array( 'call to action', 'button' ),
		));

		// accordion block
		acf_register_block(array(
			'name'				=> 'accordion',
			'title'				=> __('Accordion'),
			'description'		=> __('A custom block to display a FAQ-style accordion.'),
			'mode'				=> 'edit',
			'render_template'	=> 'global-templates/blocks/block-accordion.php',
			'category'			=> 'acf-blocks',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'faq', 'accordion' ),
		));

		// register card block
		acf_register_block(array(
			'name'				=> 'card',
			'title'				=> __('Card'),
			'description'		=> __('A custom block for content card.'),
			'render_template'	=> 'global-templates/blocks/block-card.php',
			'category'			=> 'acf-blocks',
			'icon'				=> 'tablet',
			'keywords'			=> array( 'card', 'box' ),
		));

		// blogs block
		acf_register_block(array(
			'name'				=> 'blogs',
			'title'				=> __('Blog'),
			'description'		=> __('A custom block for displaying blog posts.'),
			'render_template'	=> 'global-templates/blocks/block-blog.php',
			'category'			=> 'acf-blocks',
			'icon'				=> 'text-page',
			'keywords'			=> array( 'blog', 'posts' ),
		));

		// areas served block
		acf_register_block(array(
			'name'				=> 'areas-served',
			'title'				=> __('Areas Served'),
			'description'		=> __('A custom block to display areas served.'),
			'mode'				=> 'preview',
			'render_template'	=> 'global-templates/blocks/block-areas-served.php',
			'category'			=> 'acf-blocks',
			'icon'				=> 'admin-site',
			'keywords'			=> array( 'locations', 'areas' ),
		));

		// testimonial block
		acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial'),
			'description'		=> __('A custom block to display a single testimonial.'),
			'mode'				=> 'edit',
			'render_template'	=> 'global-templates/blocks/block-testimonial.php',
			'category'			=> 'acf-blocks',
			'icon'				=> 'format-quote',
			'keywords'			=> array( 'testimonial', 'quote' ),
		));
	}
}

add_action('acf/init', 'acf_custom_blocks');