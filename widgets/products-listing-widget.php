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
        $title = $instance['title'];
        echo $args['before widget'];
        if ( ! empty ( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];
        if ( ! empty ( $subtitle ) )
        echo $args['before_title'] . $subtitle . $args['after_title'];
        echo 'Custom widget';
        echo $args['after_widget'];

    }
}