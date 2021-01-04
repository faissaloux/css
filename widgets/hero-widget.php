<?php

class hero_widget extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array(
                'class'         => 'hero_widget',
                'description'   => 'Hero widget'
            );
        parent::__construct('hero_widget', 'Hero', $widget_ops);
    }
    
    public function form($instance)
    {
        if ( isset( $instance[ 'title' ] ) )
            $title = $instance[ 'title' ];
        else
            $title = 'Hero image';

        if ( isset( $instance[ 'height' ] ) )
            $height = $instance[ 'height' ];
        else
            $height = 400;

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo 'Title'; ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'height' ); ?>"><?php echo 'Height'; ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'height' ); ?>" name="<?php echo $this->get_field_name( 'height' ); ?>" type="number" value="<?php echo esc_attr( $height ); ?>" />
        </p>
        <p class="hero-image-container">
            <label for="<?php echo $this->get_field_id('hero_image'); ?>">Hero image</label><br />
            <img class="hero_image" src="<?php if(!empty($instance['hero_image'])){echo $instance['hero_image'];} ?>" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" />
            <input type="text" class="widefat hero_image_url" name="<?php echo $this->get_field_name('hero_image'); ?>" id="<?php echo $this->get_field_id('hero_image'); ?>" value="<?php echo $instance['hero_image']; ?>">
            <input type="button" value="<?php echo 'Upload Image'; ?>" class="button hero_image_upload" id="hero_image_uploader"/>
        </p>
        <?php

    }
    
    public function widget($args, $instance)
    {
        ?>
        <div class="carousel-item active">
            <img class="d-block w-100 d-lg-none d-md-none d-sm-none"
                src="<?php echo esc_url($instance['header_image']); ?>">
            <img class="d-block w-100 d-xs-none" src="<?php echo esc_url($instance['header_image']); ?>">
        </div>
        <?php

    }
}