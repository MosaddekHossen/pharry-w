<?php

/**
 * Essential theme supports
 * */
function theme_setup()
{
    /** automatic feed link*/
    add_theme_support('automatic-feed-links');

    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support('post-thumbnails');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');

    /** custom background **/
    $bg_defaults = array(
        'default-image'          => '',
        'default-preset'         => 'default',
        'default-size'           => 'cover',
        'default-repeat'         => 'no-repeat',
        'default-attachment'     => 'scroll',
    );
    add_theme_support('custom-background', $bg_defaults);

    /** custom header **/
    $header_defaults = array(
        'default-image'          => '',
        'width'                  => 300,
        'height'                 => 60,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
    );
    add_theme_support('custom-header', $header_defaults);

    /** custom log **/
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}
add_action('after_setup_theme', 'theme_setup');

function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all' );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), 1.1, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );