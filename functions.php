<?php

 /**
 * @author soulaimane takiddine <takiddine.job@gmail.com>
 * @copyright 2018 soulaimane takiddine
 * @website  <www.takiddine.com>
 **/

if(!defined('ABSPATH')) {
    exit;
}

if ( !defined( 'THEME_DIR' ) ) {
    define( 'THEME_DIR', get_template_directory() );
}

if ( !defined( 'THEME_URL' ) ) {
    define( 'THEME_URL', get_template_directory_uri() );
}

/*
*   INITIALIZE FILES DIRECTORY
*/
$css                = THEME_URL . '/core/assets/css/';
$js                 = THEME_URL . '/core/assets/js/';
$images             = THEME_URL . '/core/assets/images/';
$iransansFont       = THEME_URL . '/core/assets/arfont/iransans/font.css';

// require Helper class
require_once 'helpers/Helper.php';

// wordpress theme Setup
require_once THEME_DIR. '/core/setup.php';

// Functions
require_once THEME_DIR. '/core/functions.php';

// Assets To Load JS and Css files
// require_once THEME_DIR. '/core/assets.php';

// Load MetaBoxs
require_once THEME_DIR. '/core/metabox.php';

// Load Shortcodes
require_once THEME_DIR. '/core/shortcodes.php';

// Load security
require_once THEME_DIR. '/core/security.php';

// Load widgets 
require_once THEME_DIR. '/core/widgets.php';

// Arabic Fonts 
require_once THEME_DIR. '/core/arab-font.php';    

// AJAX
require_once THEME_DIR. '/core/ajax.php';

require_once get_template_directory() .'/widgets.php';

/*
*   Redux Framework : theme Settings
*   For More Help : https://docs.reduxframework.com
*/
include_once THEME_DIR . '/core/theme-options/ReduxCore/framework.php';
require_once THEME_DIR.  '/core/theme-options/config.php';


/*
*   Codestar Framework : theme Settings
*   For More Help : http://codestarframework.com/documentation 
*/
require_once THEME_DIR .'/core/codestar/cs-framework.php';



// Bootstrap Nav Walker 
require_once THEME_DIR. '/core/class-wp-bootstrap-navwalker.php';

require_once THEME_DIR . '/core/redux-metaboxes/metaboxes_api.php';

// HTML Compressor 
require_once THEME_DIR. '/core/html-compressor.php';

// portfolio
//require_once THEME_DIR. '/core/gallery_folio/plugin.php';
//require_once THEME_DIR. '/core/gallery_video/plugin.php';

/*
 To do , if the Theme is not activated , stop all the down stop to apear , the only thing will apear is activation page
* now i have the extension of metabox , so every thing is fucked , yay baby
*/
//require_once THEME_DIR. '/core/libraries/init.php';


// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );



/**
 * Disable jQuery Migrate in WordPress.
 *
 * @author Guy Dumais.
 * @link https://en.guydumais.digital/disable-jquery-migrate-in-wordpress/
 */
add_filter( 'wp_default_scripts', $af = static function( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }    
}, PHP_INT_MAX );
unset( $af );



// Disable CSS RTL 
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}





add_action( 'init', function() {

    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}, PHP_INT_MAX - 1 );






/**
 * Add iFrame to allowed wp_kses_post tags
 *
 * @param string $tags Allowed tags, attributes, and/or entities.
 * @param string $context Context to judge allowed tags by. Allowed values are 'post',
 *
 * @return mixed
 */
function custom_wpkses_post_tags( $tags, $context ) {
	if ( 'post' === $context ) {
		$tags['iframe'] = array(
			'src'             => true,
			'height'          => true,
			'width'           => true,
			'frameborder'     => true,
			'allowfullscreen' => true,
		);
	}
	return $tags;
}
add_filter( 'wp_kses_allowed_html', 'custom_wpkses_post_tags', 10, 2 );


// [woocommerce_cart] – shows the cart page
// [woocommerce_checkout] – shows the checkout page
// [woocommerce_my_account] – shows the user account page
// [woocommerce_order_tracking] – shows the order tracking form 


//Disable the plugin and theme editor
define( 'DISALLOW_FILE_EDIT', true );

// REMOVE THE WORDPRESS VERSION NUMBER
remove_action('wp_head', 'wp_generator');

// Implement Cookie with HTTPOnly and Secure flag in WordPress
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);


require_once __DIR__ . '/core/cmb2/init.php';


add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'test_metabox',
        'title'         => __( 'Test Metabox', 'cmb2' ),
        'object_types'  => array( 'products_cpt', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );

       // Email text field
    $cmb->add_field( array(
         'name'    => 'fiche technique',
        'desc'    => 'fiche technique description',
        'id'      => 'fiche_technique',
        'type'    => 'wysiwyg',
        'object_types'  => array( 'products_cpt', ), // Post type

        'options' => array(
            'wpautop' => true, // use wpautop?
            'media_buttons' => true, // show insert/upload button(s)
            'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
            'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
    ) ));


}

function theme_register_styles() {
    wp_enqueue_style( 'page-style',                         get_template_directory_uri() . '/assets/css/page.min.css');
    wp_enqueue_style( 'style-style',                        get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'caestus-style',                      get_template_directory_uri() . '/assets/css/caestus.css');
    wp_enqueue_style( 'bootstrap-datepicker3-style',        get_template_directory_uri() . '/assets/css/lib/bootstrap-datepicker3.min.css');
    wp_enqueue_style( 'lightgallery-style',                 get_template_directory_uri() . '/assets/css/lib/lightgallery.css');
    wp_enqueue_style( 'slicknav-min-style',                 get_template_directory_uri() . '/assets/css/slicknav.min.css');
    wp_enqueue_style( 'slicknav-style',                     get_template_directory_uri() . '/assets/css/slicknav.css');

    wp_enqueue_style( 'owl-carousel-style',                 get_template_directory_uri() . '/assets/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style( 'owl-theme-default-style',            get_template_directory_uri() . '/assets/owlcarousel/assets/owl.theme.default.min.css');
}

function theme_register_scripts() {
    wp_enqueue_script( 'page-script',                       get_template_directory_uri() . '/assets/js/page.min.js', array(), false, true);
    wp_enqueue_script( 'script-script',                     get_template_directory_uri() . '/assets/js/script.js', array(), false, true);
    wp_enqueue_script( 'bootstrap-datepicker-script',       get_template_directory_uri() . '/assets/js/lib/bootstrap-datepicker.min.js', array(), false, true);
    wp_enqueue_script( 'bootstrap-datepicker-fr-script',    get_template_directory_uri() . '/assets/js/lib/bootstrap-datepicker.fr.min.js', array(), false, true);
    wp_enqueue_script( 'lightgallery-script',               get_template_directory_uri() . '/assets/js/lib/lightgallery.min.js', array(), false, true);
    wp_enqueue_script( 'mousewheel-script',                 get_template_directory_uri() . '/assets/js/lib/jquery.mousewheel.min.js', array(), false, true);
    wp_enqueue_script( 'thumbnail-script',                  get_template_directory_uri() . '/assets/js/lib/lg-thumbnail.js', array(), false, true);
    wp_enqueue_script( 'fullscreen-script',                 get_template_directory_uri() . '/assets/js/lib/lg-fullscreen.js', array(), false, true);
    wp_enqueue_script( 'slicknav-script',                   get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array(), false, true);
    wp_enqueue_script( 'owl-carousel-script',               get_template_directory_uri() . '/assets/owlcarousel/owl.carousel.min.js', array(), false, true);
    wp_enqueue_script( 'app-script',                        get_template_directory_uri() . '/assets/js/app.js', array(), false, true);
}
function admin_register_scripts(){
    wp_enqueue_script( 'lightgallery-script',               get_template_directory_uri() . '/assets/js/admin.js', array(), false, false);
}

add_action('wp_enqueue_scripts', 'theme_register_styles');
add_action('wp_enqueue_scripts', 'theme_register_scripts');
add_action('admin_enqueue_scripts', 'admin_register_scripts');


function nav_bar()
{
    register_sidebar(array(
        'name'  => 'Navbar',
        'id'    => 'nav-bar'
    ));
}

add_action('widgets_init', 'nav_bar');

/** */

function header_widget()
{
    register_sidebar(array(
        'name'  => 'header widget',
        'id'    => 'header-widget'
    ));
}

add_action('widgets_init', 'header_widget');

function the_slider(){
    global $theme_setting;
    $gallery = Helper::getGallery($theme_setting,'slider');
    return $gallery;
}

function the_logo()
{
    global $theme_setting;
    return $theme_setting['logo-url']['url'];
}