<?php



class product_logo_widget extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array(
                'class'         => 'product_logo_widget',
                'description'   => 'product logo widget'
            );
        parent::__construct('product_logo_widget', 'Product logo', $widget_ops);
    }
    
    public function form($instance)
    {
        ?>
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
            <div class="container">
                <img class="logo-dark" src="<?php echo esc_url($instance['logo']); ?>" alt="logo">
            </div>
        <?php

    }
}