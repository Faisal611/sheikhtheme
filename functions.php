<?php
if (! function_exists('after_setup_theme')) {
    add_action('after_setup_theme','sheikh_theme_setup');
	function sheikh_theme_setup () {
		flush_rewrite_rules();
		load_theme_textdomain('sheikh_theme',get_template_directory().'/lang');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support( 'automatic-feed-links' );
		add_theme_support('html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script','style', 'navigation-widgets',
		));
		add_theme_support('post-formats',array(
			'aside','image','video', 'quote','link','gallery','status','audio','chat',
		));

	/*------- register menu ------*/
		register_nav_menus(array(
			'main-menu' => __('Main Menu'),
		));

		function default_main_menu() {
			echo '<ul class="nav navbar-nav main-menu">';
			echo '<li><a href="' . home_url() . '" class="transition">HOME</a></li>';
			echo '</ul>';
		}

	}
}