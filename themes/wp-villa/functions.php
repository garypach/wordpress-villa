<?php

if (!function_exists('wpvilla_load_scripts')) :

    /**
     * Enqueue styles.
     *
     *
     * @return void
     */
    function wpvilla_load_scripts()
    {
        // Register theme stylesheet.
        $theme_version = wp_get_theme()->get('Version');

        $version_string = is_string($theme_version) ? $theme_version : false;
        wp_register_style(
            'wpvilla-style',
            get_template_directory_uri() . '/style.css',
            array(),
        );

        // Enqueue theme stylesheet.
        wp_enqueue_style('wpvilla-style');

        wp_enqueue_style(
            'bootstrap',
            get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css'
        );
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/bootstrap.min.js', array('jquery'), '5.3.0');

        wp_enqueue_style(
            'google-fonts',
            'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap',
            array(),
            null
        );
        wp_enqueue_script(
            'customJS',
            get_template_directory_uri() . '/js/custom.js',
            array('jquery'),
            '1.0',
        );
    }

endif;

add_action('wp_enqueue_scripts', 'wpvilla_load_scripts');

register_nav_menus(array(
    'wp_villa_main_menu' => "Main Menu",
    'wp_villa_footer_menu' => "Footer Menu"
));

function wpvilla_ajust_queries($query)
{
    if (!is_admin() and is_post_type_archive('property') and $query->is_main_query()) {
        $query->set('posts_per_page', '6');
    }
}
add_action('pre_get_posts', 'wpvilla_ajust_queries');
