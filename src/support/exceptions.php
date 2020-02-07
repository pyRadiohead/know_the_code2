<?php
/**
 * Description Exception handler
 * @package  BlogIntro
 * @author Yuriy Kovalenko
 *
 */
namespace BlogIntro;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

add_action('init', __NAMESPACE__ . '\load_whoops',1);

function load_whoops(){
    $whoops = new Run();
    $error_page = new PrettyPageHandler();
    $error_page ->setEditor('sublime');
    $whoops->pushHandler($error_page);
    $whoops->register();
}

