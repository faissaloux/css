<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Brands Metabox Options               -
// -----------------------------------------
$options[]    = array(
  'id'        => 'brand_settings',
  'title'     => 'brand settings',
  'post_type' => 'brands_cpt',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_3',
      'fields' => array(

        array(
          'title'     => 'choisir le logo de brand',
          'id'        => 'brand',
          'type'      => 'image',
        ),

        array(
          'id'            => 'brand_lien',
          'type'          => 'text',
          'title'         => 'lien de brand',
          'attributes'    => array(
            'placeholder' => 'le lien du brand'
          )
        ),

      ),
    ),

  ),
);






$options[]    = array(
  'id'        => 'pack_settings',
  'title'     => 'pack elements',
  'post_type' => 'pack_cpt',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_3',
      'fields' => array(
        array(
          'title'     => "sub title",
          'id'        => 'sub_title_pack',
          'type'      => 'text',
        ),

       

      ),
    ),

  ),
);



$options[]    = array(
  'id'        => 'product_settings',
  'title'     => 'gallery de produit',
  'post_type' => 'products_cpt',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_3',
      'fields' => array(

        array(
          'title'     => 'choisir les images de gallery',
          'id'        => 'gallery_product',
          'type'      => 'gallery',
        ),

       

      ),
    ),

  ),
);




CSFramework_Metabox::instance( $options );
