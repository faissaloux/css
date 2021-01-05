<?php

class products_listing_widget extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array(
                'class'         => 'products_listing_widget',
                'description'   => 'products_listing_widget',
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

            $categories  = products_categories();
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php echo 'Products category'; ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>">
                <?php foreach($categories as $category): ?>
                    <option  value="<?php echo $category['term_id']; ?>"><?php echo $category['name']; ?></option>
                <?php endforeach; ?>
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
        $cat_id = $instance['category'];
        $limit = $instance['number'];
        $number = 0;

        $products  = caestus_products($cat_id);

        ?>
         <div class="container products-container">
            <div class="products row">
                    <?php foreach($products as $product):?>
                        <div class="col-md-4 col-xl-3 col-lg-3 ">
                                <div class="product-3 mb-3">
                                    <div class="product-media">
                                        <a href="<?php echo $product['link']; ?>">
                                            <img src="<?php echo esc_url($product['image']); ?>" alt="product">
                                        </a>
                                    </div>
                                    <div class="product-detail">
                                        <h6><a href="<?php echo $product['link']; ?>"><?php echo $product['title']; ?></a>
                                        </h6>
                                        <a href="javascript:;" data-category="<?php echo $product['category']; ?>" class="btn" data-image="<?php echo $product['image']; ?>" data-name="<?php echo $product['title']; ?>" data-id="<?php echo $product['id']; ?>"
                                            style="background-color: #dc3d3d; color: #FFF">
                                            AJOUTER AU DEVIS
                                            </a>
                                    </div>
                                </div>
                        </div>
                        <?php $number++; ?>
                        <?php if($number == $limit) break; ?>
                    <?php endforeach; ?>
            </div>
         </div>
        <?php
    }
}