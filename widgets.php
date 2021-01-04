<?php

add_action('widgets_init', function(){
    register_widget('logo_widget');
    register_widget('page_header_widget');
    register_widget('products_listing_widget');
    register_widget('divider_widget');
});

require_once 'widgets/logo-widget.php';
require_once 'widgets/page-header-widget.php';
require_once 'widgets/products-listing-widget.php';
require_once 'widgets/divider-widget.php';