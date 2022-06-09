<?php
// SIDEBARS AND WIDGETIZED AREAS
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'jointswp'),
		'description' => __('The first (primary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'jointswp'),
		'description' => __('The offcanvas sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	// Top Bar  widget area, located in the top. Empty by default.
	register_sidebar( array(
			'name' => __( 'Top Bar ', 'jointswp' ),
			'id' => 'top-bar',
			'description' => __( 'Top Bar Info', 'jointswp' ),
			'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</div>',

	) );
	// First footer widget area, located in the footer. Empty by default.
	register_sidebar( array(
			'name' => __( 'First Footer Widget Area', 'jointswp' ),
			'id' => 'footer-widget-1',
			'description' => __( 'The first footer widget area', 'jointswp' ),
			'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
	) );
	// Second footer widget area, located in the footer. Empty by default.
	register_sidebar( array(
			'name' => __( 'Second Footer Widget Area', 'jointswp' ),
			'id' => 'footer-widget-2',
			'description' => __( 'The second footer widget area', 'jointswp' ),
			'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
	) );

	// Third footer widget area, located in the footer. Empty by default.
	register_sidebar( array(
			'name' => __( 'Third Footer Widget Area', 'jointswp' ),
			'id' => 'footer-widget-3',
			'description' => __( 'The third footer widget area', 'jointswp' ),
			'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
	) );

	// Fourth footer widget area, located in the footer. Empty by default.
	register_sidebar( array(
			'name' => __( 'Fourth Footer Widget Area', 'jointswp' ),
			'id' => 'footer-widget-4',
			'description' => __( 'The fourth footer widget area', 'jointswp' ),
			'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
	) );



	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointswp'),
		'description' => __('The second (secondary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/



} // don't remove this bracket!
