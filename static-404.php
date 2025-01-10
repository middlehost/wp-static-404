<?php
/**
 * Plugin Name: Static 404
 * Description: Returns a static 404 response for non-existent URLs.
 * Version: 1.0
 * Author: Middlehost
 * Author URI: https://middlehost.com
 */

add_action('template_redirect', 'static_404_response');

function static_404_response() {
    if (is_404()) {
        wp_die('Page not found.', 'Not Found', array('response' => 404));
    }
}
