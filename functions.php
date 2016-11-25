<?php
//Custom Footer Widgets

	register_sidebar(array(
        'name' => esc_attr__( 'Footer Widget 1', 'converio'),
        'id' => 'footer-widget-area-1',
        'description' => esc_attr__( 'The footer widget area', 'converio'),
        'before_widget' => '<section class="widget cfooter-widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));


	register_sidebar(array(
        'name' => esc_attr__( 'Footer Widget 2', 'converio'),
        'id' => 'footer-widget-area-2',
        'description' => esc_attr__( 'The footer widget area', 'converio'),
        'before_widget' => '<section class="widget cfooter-widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
	
	register_sidebar(array(
        'name' => esc_attr__( 'Footer Widget 3', 'converio'),
        'id' => 'footer-widget-area-3',
        'description' => esc_attr__( 'The footer widget area', 'converio'),
        'before_widget' => '<section class="widget cfooter-widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
	
	register_sidebar(array(
        'name' => esc_attr__( 'Footer Widget 4', 'converio'),
        'id' => 'footer-widget-area-4',
        'description' => esc_attr__( 'The footer widget area', 'converio'),
        'before_widget' => '<section class="widget cfooter-widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
?>