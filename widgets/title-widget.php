<?php

class title_widget extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array(
                'class'         => 'title_widget',
                'description'   => 'title_widget'
            );
        parent::__construct('title_widget', 'Title', $widget_ops);
    }
    
    public function form($instance)
    {
        if ( isset( $instance[ 'title' ] ) )
            $title = $instance[ 'title' ];
        else
            $title = 'Default Title';

        if ( isset( $instance[ 'size' ] ) )
            $size = $instance[ 'size' ];
        else
            $size = '20';
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo 'Title'; ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'size' ); ?>"><?php echo 'Size'; ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'size' ); ?>" name="<?php echo $this->get_field_name( 'size' ); ?>" type="number" value="<?php echo esc_attr( $size ); ?>" />
        </p>
        <?php

    }
    
    public function widget($args, $instance)
    {
        ?>
            <div class="container">
                <p style="font-size: <?php echo $instance['size'].'px'; ?>;text-align: left;"><?php echo $instance['title']; ?></p>
            </div>
        <?php

    }
}