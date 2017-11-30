<?php

function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( 'all_pages_css', get_template_directory_uri() . '/css/all-pages.css');
}
add_action('wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

    global $wp_scripts;

    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/js/popper/popper.min.js', '', '', true );
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery.min.js', '', '', true );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery', 'bootstrap_js'), '', true );


}
add_action( 'wp_enqueue_scripts', 'theme_js' );

//add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'menus' );

function register_theme_menus() {
    register_nav_menus(
        array(
            'header-menu'   =>__( 'Header Menu' )
        )
    );

}
add_action( 'init', 'register_theme_menus' );

function create_widget($name, $id, $description) {

    register_sidebar(array(
        'name' => __( $name ),
        'id'    => $id,
        'description' => __( $description ),
        'before_widget' => '<div class="widget">',
        'after_widget' =>'</div>',
        'before_title' => '<hr class="divider"> <h2 class="text-center text-lg text-uppercase my-0">',
        'after_title' => '</h2> <hr class="divider">'
    ));

}
create_widget( 'Front Page Top', 'front-top', 'Displays above on the homepage' );
create_widget( 'Front Page Bottom', 'front-bottom', 'Displays below on the homepage' );

create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar');

?>