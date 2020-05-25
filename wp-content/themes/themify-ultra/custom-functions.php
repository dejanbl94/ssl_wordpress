<?php
function load_js_assets() {
   // if( is_page( ID ) ) {
        wp_enqueue_script('customjs', get_template_directory_uri(), '/js/test.js', array(), '1.0.0.');
   // } 
}

add_action('wp_enqueue_scripts', 'load_js_assets');
?>