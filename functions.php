<?php
/**
 * 
 * Autoload modules
 */

// Composer autoloader
if (is_readable( dirname(__DIR__) . '/pace-starter-theme/vendor/autoload.php')) {
    require_once dirname(__DIR__) . '/pace-starter-theme/vendor/autoload.php';
}



add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );

// Registering a custom menu location
function register_my_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('after_setup_theme', 'register_my_menu');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings', // Change this to your desired page title
        'menu_title'    => 'Theme Settings', // Change this to your desired menu title
        'menu_slug'     => 'theme-settings', // Change this to a unique slug
        'capability'    => 'manage_options', // Set the required capability to access this page
        'position'      => 30, // Change this to set the menu position
        'icon_url'      => 'dashicons-admin-settings', // Change this to a Dashicons icon
        'redirect'      => false // Set to false to prevent automatic redirect after saving
    ));
}
function enqueue_my_styles() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/dist/css/main.css', array(), '1.0', 'all');
    // wp_enqueue_style('font-style', get_template_directory_uri() . '/dist/css/font.css', array(), '1.0', 'all');
    // wp_enqueue_script('main-script', get_template_directory_uri() . '/dist/js/main.js', array(), '1.0', true);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');

}

add_action('wp_enqueue_scripts', 'enqueue_my_styles');



require_once __DIR__ . '/vendor/autoload.php';

use StoutLogic\AcfBuilder\FieldsBuilder;

require_once get_template_directory() . '/templates/US_Options.php';
require_once get_template_directory() . '/templates/US_Home.php';
require_once get_template_directory() . '/templates/US_Contact.php';
require_once get_template_directory() . '/templates/US_Projects.php';
require_once get_template_directory() . '/templates/US_Team.php';


final class UF_Init
{
    private static function init(): array
    {
       return [
        US_Projects::class,
	    US_Options::class,
        US_Home::class,
        US_Contact::class,
        US_Team::class,
       ];
    }

    public static function register() : void
    {
        foreach (self::init() as $class)
        {
            new $class();
        }
    }
}




UF_Init::register();


add_theme_support('post-thumbnails');


add_theme_support( 'post-thumbnails' );
