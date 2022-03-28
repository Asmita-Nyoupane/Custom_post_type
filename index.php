<?php
/**
 * Plugin Name: Greeting Template
 * Plugin URL:https://wordpress.org/plugins/
 * Description : Simple greeting card which show your website more attractive
 * Version: 1.0
 * Author:Asmita Nyoupane
 * Author URL :https://www.facebook.com/ashmita.neupane.104
 */
add_action('init', 'my_custom_post_type');

    function my_custom_post_type()
{
    register_post_type('Greeting', $args= array(
        'label' => 'Greeting Template',
        'public' => true,
        'menu_icon' => 'dashicons-editor-ul',
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'name' => 'Greeting Template',
        'description' => 'This is our custom post type'
));
}

?>
