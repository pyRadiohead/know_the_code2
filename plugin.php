<?php
/**
 * Plugin Name:       Blog Intro
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Yuriy Kovalenko
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
namespace BlogIntro;
if ( ! defined('ABSPATH')){
    exit ('Cheating');
}

require_once (__DIR__. '/assets/vendor/autoload.php');
add_action('init', __NAMESPACE__ . '\launch');
function launch(){
	//load_whoops();

}




//func_num_args();
//d('yahooo');