<?php



class logo_widget extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array(
                'class'         => 'logo_widget',
                'description'   => 'logo widget'
            );
        parent::__construct('logo_widget', 'Logo de la page', $widget_ops);
    }
    
    public function form($instance)
    {
        if ( isset( $instance[ 'title' ] ) )
            $title = $instance[ 'title' ];
        else
            $title = 'Logo de la page';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo 'Title'; ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('logo'); ?>">Logo</label><br />
            <img class="logo_image" src="<?php if(!empty($instance['logo'])){echo $instance['logo'];} ?>" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" />
            <input type="text" class="widefat logo_url" name="<?php echo $this->get_field_name('logo'); ?>" id="<?php echo $this->get_field_id('logo'); ?>" value="<?php echo $instance['logo']; ?>">
            <input type="button" value="<?php echo 'Upload Image'; ?>" class="button logo_upload" id="logo_uploader"/>
        </p>
        <?php

    }
    
    public function widget($args, $instance)
    {
        ?>
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                <img class="logo-dark" src="<?php echo esc_url($instance['logo']); ?>" alt="logo">
            </a>
        <?php
        echo $args['after_widget'];

    }
}