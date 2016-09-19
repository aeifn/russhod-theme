<?php

function twentysixteen_child_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right-sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-right',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div id="left-sidebar"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

}


function anothersidebar(){
    get_template_part('sidebar','right');
}

function credits(){
?>
<span>Вебмастеринг, дизайн, хостинг &mdash; <a href="http://mne.vra4a.ru/~egor/">Егор Кузьмичёв</a>.<br />
Разработка изначального графического макета сайта &mdash; неизвестный художник.<br /><br /></span>
<?php
}

add_action( 'widgets_init', 'twentysixteen_child_widgets_init' );

add_action( 'get_sidebar', 'anothersidebar' );
add_action( 'twentysixteen_credits', 'credits' );

?>
