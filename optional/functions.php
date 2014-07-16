<?php

register_nav_menu( 'primary', __( 'Primary Menu', 'basic-theme-example' ) );


function basic_theme_example_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'basic-theme-example' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'basic-theme-example' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'basic_theme_example_widgets_init' );