<?php
/**
 * Description Bussiness logic for tfront-end to grab content out of the database
 *
 * @package Blog intro
 * @since 1.0.0
 * @author Yuriy Kovalenko
 */
namespace BlogIntro;
add_action('genesis_before_loop',__NAMESPACE__ . '\render_content');
/*
 * Render out(display) the content for the Posts page
 */
function render_content(){

    //get the ID
    $posts_page_id = get_option('page_for_posts');

    //tell Wordpress get the post object
    $post_object = get_post($posts_page_id);

    //post_content
    echo $post_object->post_content;

}