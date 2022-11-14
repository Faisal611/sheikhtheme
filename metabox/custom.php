<?php
add_action('cmb2_admin_init','banner_slider_metabox');
	function banner_slider_metabox() {
		$banner_slider = new_cmb2_box(array(
			'id'            => 'banner_slider_metabox',
			'title'         => __( 'Test Metabox', 'sheikh_theme' ),
			'object_types'  => array( 'banner-slider' ), // Post type
		));

		$banner_slider->add_field(array(
			'name' => __('Video Link','sheikh_theme'),
			'id'    => '__video_link__',
			'type'  => 'text_url'
		));

		$banner_slider->add_field(array(
			'name' => __('Button Text','sheikh_theme'),
			'id'    => '__btn_text__',
			'type'  => 'text'
		));

		$banner_slider->add_field(array(
			'name' => __('Button Link','sheikh_theme'),
			'id'    => '__btn_link__',
			'type'  => 'text_url'
		));
	}