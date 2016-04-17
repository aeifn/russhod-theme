<?php

function twentysixteen_child_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar4', 'twentysixteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'twentysixteen_child_widgets_init' );


?>
