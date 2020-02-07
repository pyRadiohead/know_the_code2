<?php
/**
 * Description Enable Editor feature
 *
 * @package ${NAMESPACE}
 * @since 1.0.0
 * @author Yuriy Kovalenko
 */
namespace BlogIntro;
//ddd(get_option('page_for_posts'));

add_action('edit_form_after_title', __NAMESPACE__ . '\enable_page_for_post_editor');
/**
 * Description
 *
 * @param \WP_post $post Current post object
 *
 * @return void
 * @since 1.0.0
 *
 */
function enable_page_for_post_editor($post){
	if (get_option('page_for_posts') == $post->ID)
	{
		add_post_type_support('page','editor');

	}
}
