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

// require Helper class
require_once 'helpers/Helper.php';

// wordpress theme Setup
require_once THEME_DIR. '/core/setup.php';

// Functions
require_once THEME_DIR. '/core/functions.php';


// Assets To Load JS and Css files
// require_once THEME_DIR. '/core/assets.php';

// Load MetaBoxs
//require_once THEME_DIR. '/core/metabox.php';

// Load Shortcodes
//require_once THEME_DIR. '/core/shortcodes.php';

// Load security
require_once THEME_DIR. '/core/security.php';

// Load widgets 
// require_once THEME_DIR. '/core/widgets.php';

// Arabic Fonts 
//require_once THEME_DIR. '/core/arab-font.php';    

// AJAX
require_once THEME_DIR. '/core/ajax.php';

require_once THEME_DIR .'/widgets.php';

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


// HTML Compressor 
require_once THEME_DIR. '/core/html-compressor.php';

require_once THEME_DIR. '/core/menu-walker.php';


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

$assets_version = mt_rand();

function theme_register_styles() {
    global $assets_version;
    
    wp_enqueue_style( 'page-style',                     THEME_URL . '/assets/css/page.min.css?v='                               . $assets_version);
    wp_enqueue_style( 'style-style',                    THEME_URL . '/assets/css/style.css?v='                                  . $assets_version);
    wp_enqueue_style( 'caestus-style',                  THEME_URL . '/assets/css/caestus.css?v='                                . $assets_version);
    wp_enqueue_style( 'bootstrap-datepicker3-style',    THEME_URL . '/assets/css/lib/bootstrap-datepicker3.min.css?v='          . $assets_version);
    wp_enqueue_style( 'lightgallery-style',             THEME_URL . '/assets/css/lib/lightgallery.css?v='                       . $assets_version);
    wp_enqueue_style( 'slicknav-min-style',             THEME_URL . '/assets/css/slicknav.min.css?v='                           . $assets_version);
    wp_enqueue_style( 'slicknav-style',                 THEME_URL . '/assets/css/slicknav.css?v='                               . $assets_version);
    wp_enqueue_style( 'owl-carousel-style',             THEME_URL . '/assets/owlcarousel/assets/owl.carousel.min.css?v='        . $assets_version);
    wp_enqueue_style( 'owl-theme-default-style',        THEME_URL . '/assets/owlcarousel/assets/owl.theme.default.min.css?v='   . $assets_version);
    wp_enqueue_style( 'mmenu-style',                    THEME_URL . '/assets/css/mmenu.css?v='                                  . $assets_version);
}

function theme_register_scripts() {
    global $assets_version;

    wp_enqueue_script( 'page-script',                   THEME_URL . '/assets/js/page.min.js?v='                                 . $assets_version, array(), false, true);
    wp_enqueue_script( 'script-script',                 THEME_URL . '/assets/js/script.js?v='                                   . $assets_version, array(), false, true);
    wp_enqueue_script( 'bootstrap-datepicker-script',   THEME_URL . '/assets/js/lib/bootstrap-datepicker.min.js?v='             . $assets_version, array(), false, true);
    wp_enqueue_script( 'bootstrap-datepicker-fr-script',THEME_URL . '/assets/js/lib/bootstrap-datepicker.fr.min.js?v='          . $assets_version, array(), false, true);
    wp_enqueue_script( 'lightgallery-script',           THEME_URL . '/assets/js/lib/lightgallery.min.js?v='                     . $assets_version, array(), false, true);
    wp_enqueue_script( 'mousewheel-script',             THEME_URL . '/assets/js/lib/jquery.mousewheel.min.js?v='                . $assets_version, array(), false, true);
    wp_enqueue_script( 'thumbnail-script',              THEME_URL . '/assets/js/lib/lg-thumbnail.js?v='                         . $assets_version, array(), false, true);
    wp_enqueue_script( 'fullscreen-script',             THEME_URL . '/assets/js/lib/lg-fullscreen.js?v='                        . $assets_version, array(), false, true);
    wp_enqueue_script( 'slicknav-script',               THEME_URL . '/assets/js/jquery.slicknav.min.js?v='                      . $assets_version, array(), false, true);
    wp_enqueue_script( 'owl-carousel-script',           THEME_URL . '/assets/owlcarousel/owl.carousel.min.js?v='                . $assets_version, array(), false, true);
    wp_enqueue_script( 'app-script',                    THEME_URL . '/assets/js/app.js?v='                                      . $assets_version, array(), false, true);
    wp_enqueue_script( 'caestus-script',                THEME_URL . '/assets/js/caestus.js?v='                                  . $assets_version, false, true );
    wp_enqueue_script( 'mmenu-script',                  THEME_URL . '/assets/js/mmenu.js?v='                                    . $assets_version, array(), false, true);
    wp_localize_script( 'ajax-script', 'varjs', array( 'caestus_ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
function admin_register_scripts(){
    global $assets_version;
    wp_enqueue_script( 'lightgallery-script',           THEME_URL . '/assets/js/admin.js?v='                                    . $assets_version, array(), false, false);
}

add_action('admin_head', 'my_custom_fonts');
function my_custom_fonts() {
  echo '<style>
   li#toplevel_page_cs-framework {
        display: none;
    }

div#widget-6_divider_widget-__i__ .widget-top ,
div#widget-8_page_header_widget-__i__ .widget-top ,
div#widget-12_packs_production_listing_widget-__i__ .widget-top ,
div#widget-15_products_listing_widget-__i__ .widget-top ,
div#widget-14_product_logo_widget-__i__ .widget-top ,
#widget-22_title_widget-__i__ .widget-top 
,
#widget-14_product_logo_widget-__i__ .widget-top {
    background: #2196F3;
    color: white !important;
}
  </style>';
}


add_action( 'wp_ajax_add_to_cart',                      'add_to_cart_php' );
add_action( 'wp_ajax_nopriv_add_to_cart',               'add_to_cart_php' );


add_action( 'wp_ajax_remove_from_cart',                 'remove_from_cart_php' );
add_action( 'wp_ajax_nopriv_remove_from_cart',          'remove_from_cart_php' );

add_action( 'wp_ajax_make_order',                       'make_order_php' );
add_action( 'wp_ajax_nopriv_make_order',                'make_order_php' );

add_action( 'wp_ajax_product_quantity',                 'product_quantity_php' );
add_action( 'wp_ajax_nopriv_product_quantity',          'product_quantity_php' );

add_action( 'wp_ajax_count_orders',                     'count_orders_php' );
add_action( 'wp_ajax_nopriv_count_orders',              'count_orders_php' );

add_action( 'wp_ajax_search_product',                   'search_product_php' );
add_action( 'wp_ajax_nopriv_search_product',            'search_product_php' );


function add_to_cart_php(){
    $id         = $_POST['id'];
    $image      = $_POST['image'];
    $title      = $_POST['name'];
    $category   = $_POST['category'];
    $quantity   = !empty($_SESSION['cart_caestus'][$category][$id]) ? $_SESSION['cart_caestus'][$category][$id]['quantity']+1:1;
    wp_send_json_success(caestus_add_to_cart($id,$image,$title,$quantity,$category));
    die();
}

function remove_from_cart_php(){
    $id         = $_POST['id'];
    $category   = $_POST['category'];
    wp_send_json_success(caestus_remove_item($id,$category));
    die();
}

function make_order_php(){
    $_POST['products'] = caestus_cart_items();
    sv($_POST);
    die();
}

function product_quantity_php(){
    $id         = $_POST['id'];
    $quantity   = $_POST['quantity'];
    $category   = $_POST['category'];
    wp_send_json_success(caestus_update_item($id,$category,$quantity));
    die();
}

function count_orders_php(){
    wp_send_json_success(caestus_cart_count());
    die();
}

function search_product_php(){
    echo ajax_products_search($_POST['q'], 'json');
    die();
}

add_action('wp_enqueue_scripts', 'theme_register_styles');
add_action('wp_enqueue_scripts', 'theme_register_scripts');
add_action('admin_enqueue_scripts', 'admin_register_scripts');
 
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'movies' ) );
    return $query;
}

add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

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
    $gallery = wp_is_mobile()   ?  Helper::getGallery($theme_setting,'slider-mobile')
                                :  Helper::getGallery($theme_setting,'slider');
    return $gallery;
}

function the_logo()
{
    global $theme_setting;
    return $theme_setting['logo-url']['url'];
}

$brands     = brands();

$args = array(
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'suppress_filters' => true 
);
$blogPosts = get_posts( $args ); 

$categories = get_terms( array(
    'taxonomy'  => 'category', 
    'order'     => 'DESC'
));

$packsCategories = get_terms( array(
    'taxonomy'  => 'pack_categories', 
    'order'     => 'DESC'
));

$optiques = get_terms( array(
    'taxonomy'  => 'category', 
    'order'     => 'DESC',
    'name'      => 'Optiques'
)); 

if(isset($_GET['q'])){
    $search_result = ajax_products_search($_GET['q']);
}

$cart_items     = caestus_cart_items();
$categries      = products_categories();
$brands         = brands();
$accessories    = accessories();
$prestations    = prestations();

/*
    $brands     = brands();
    $search     = ajax_products_search('jjjjj','json');
    $menu       = top_header_menu_bootstrap4();
    $cart_items = caestus_cart_items();
    $products   = caestus_products();
    $categries  = products_categories();

    caestus_add_to_cart($id,$image,$title,$quantity,$category);
    caestus_remove_item($id,$category);
    caestus_update_item($id,$category,$quantity);
    caestus_cart_count();

    $product_by_category = caestus_products($cat_id);
*/

