<?php

class products_listing_widget extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array(
                'class'         => 'products_listing_widget',
                'description'   => 'products_listing_widget'
            );
        parent::__construct('products_listing_widget', 'Products listing', $widget_ops);
    }
    
    public function form($instance)
    {
        if ( isset( $instance[ 'category' ] ) )
            $category = $instance[ 'category' ];
        else
            $category = 'Default Category';

        if ( isset( $instance[ 'number' ] ) )
            $number = $instance[ 'number' ];
        else
            $number = 'Default Number';
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php echo 'Products category'; ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>">
                <option  value="<?php echo esc_attr( $category ); ?>">cat</option>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php echo 'Number'; ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
        <?php

    }
    
    public function widget($args, $instance)
    {
        ?>
            <div class="products">
                <div class="col-md-4 col-xl-3 col-lg-3 ">
                    <div class="product-3 mb-3">
                    <div class="product-media">
                        <a href="/product/106/">
                            <img src="https://caestus.ma/uploads/media/2iiSY9HTtiGk4Y0QBhbK.jpg" alt="product">
                        </a>
                    </div>
                <div class="product-detail">
                    <h6><a href="/product/106/">Sigma Cine Prime - 14mm T2 FF monture PL</a>
                    </h6>
                    <a href="javascript:;" data-category="Optiques" class="btn add-To-Cart-Big smalladdtocart" data-image="https://caestus.ma/uploads/media/2iiSY9HTtiGk4Y0QBhbK.jpg" id="addToCartBtn" data-name="Sigma Cine Prime - 14mm T2 FF monture PL" data-id="106">
                        AJOUTER AU DEVIS
                        </a>
                </div>
                </div>
            </div>
            </div>
        <?php
    }
}