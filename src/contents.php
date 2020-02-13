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

    if ( ! is_home()){
        return;
    }

    $posts_page = get_posts_page();

     if (!posts_page){
         return;
     }
    echo $posts_page->post_content;


}

/**
 * Description: Get Posts page
 *
 * @return |\WP_Post|null
 * @since 1.0.0
 *
 */
function get_posts_page(){

    $posts_page_id = get_option('page_for_posts');
    return get_post($posts_page_id);

}
function prepare_content_for_rendering(){
    
}