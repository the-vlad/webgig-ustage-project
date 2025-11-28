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
require_once get_template_directory() . '/templates/US_EntertainerForm.php';
require_once get_template_directory() . '/templates/US_CustomerForm.php';
require_once get_template_directory() . '/templates/US_Login.php';
require_once get_template_directory() . '/templates/US_Reset.php';


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
        US_EntertainerForm::class,
        US_CustomerForm::class,
        US_Login::class,
        US_Reset::class,


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


add_action('init', function() {
    register_nav_menus([
        'footer_menu_1' => __('Footer Menu 1'),
        'footer_menu_2' => __('Footer Menu 2'),
    ]);
});


function load_jquery_fix() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'load_jquery_fix');


/**
 * Replace Ultimate Member "Forgot your password?" text with "Reset Password"
 * - Covers UM label filter (best-effort)
 * - Also covers gettext / ngettext translation sources
 */

add_filter( 'um_get_label_value', 'vc_replace_um_forgot_label', 20, 2 );
function vc_replace_um_forgot_label( $value, $key ) {
    // If we can match by key (some UM installs use a key)
    if ( ! empty( $key ) && in_array( $key, array( 'forgot_password', 'lost_password', 'forgot_your_password' ), true ) ) {
        return 'Reset Password';
    }

    // Fallback: match exact string
    if ( trim( $value ) === 'Forgot your password?' ) {
        return 'Reset Password';
    }

    return $value;
}

// gettext fallback (catches strings loaded via translations)
add_filter( 'gettext', 'vc_replace_um_forgot_gettext', 20, 3 );
function vc_replace_um_forgot_gettext( $translated_text, $text, $domain ) {
    // Match exact original string (not translated)
    if ( $text === 'Forgot your password?' ) {
        return 'Reset Password';
    }
    return $translated_text;
}

// ngettext fallback for pluralized variants (rare for this phrase)
add_filter( 'ngettext', 'vc_replace_um_forgot_ngettext', 20, 4 );
function vc_replace_um_forgot_ngettext( $translated, $single, $plural, $number ) {
    if ( $single === 'Forgot your password?' || $plural === 'Forgot your password?' ) {
        return 'Reset Password';
    }
    return $translated;
}




add_filter('gettext_ultimate-member', 'um_021522_change_reset_password_labels', 10, 3);
function um_021522_change_reset_password_labels($translation, $text, $domain) {
    if ('To reset your password, please enter your email address or username below.' == $text) {
        $translation = 'Email Address';
    } 
    return $translation;
}

/**
 * Redirect logged-in users away from registration pages
 */
add_action( 'template_redirect', function() {

    if ( is_user_logged_in() ) {

        $restricted_slugs = [
            'customer-registration',
            'entertainer-registration',
        ];

        if ( is_page( $restricted_slugs ) ) {
            wp_redirect( home_url( '/account' ) );
            exit;
        }
    }
});
