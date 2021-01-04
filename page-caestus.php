<?php

/*
    Template Name: caestus
*/

$sidebar = '';
function template_widgetsInit() {
    global $post;
    global $sidebar;
    $sidebar = "wpse-{$post->ID}-aside";

    register_sidebar( array(
        'name' => $post->post_title ,
        'id' => "wpse-{$post->ID}-aside",
    ) );
}
template_widgetsInit();

?>




<?php if ( is_active_sidebar( $sidebar ) ) : ?>
                        <?php dynamic_sidebar( $sidebar ); ?>
                        <?php endif; ?>





<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
kqsjkqsjkfqjsjfsqkjfqkjfqkj

    <?php require_once('includes/footer.php') ?>
    <?php require_once('includes/scripts.php') ?>
</body>

</html>