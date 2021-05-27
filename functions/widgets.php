<?php

function register_additional_childtheme_sidebars() {
	register_sidebar(
		array(
			'name'          => __( 'Footer First', 'understrap' ),
			'id'            => 'footerfirst',
			'description'   => __( 'Full sized footer widget with dynamic grid', 'understrap' ),
			'before_widget' => '<div id="%1$s" class="footer-widget">',
			'after_widget'  => '</div><!-- .footer-widget -->',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => __( 'Footer Second', 'understrap' ),
			'id'            => 'footersecond',
			'description'   => __( 'Full sized footer widget with dynamic grid', 'understrap' ),
			'before_widget' => '<div id="%1$s" class="footer-widget">',
			'after_widget'  => '</div><!-- .footer-widget -->',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Third', 'understrap' ),
			'id'            => 'footerthird',
			'description'   => __( 'Full sized footer widget with dynamic grid', 'understrap' ),
			'before_widget' => '<div id="%1$s" class="footer-widget">',
			'after_widget'  => '</div><!-- .footer-widget -->',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}

add_action( 'init', 'register_additional_childtheme_sidebars' );