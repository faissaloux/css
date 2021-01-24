<?php global $theme_setting;

    $category = get_terms( array(
        'taxonomy'  => 'category', 
        'order'     => 'DESC',
        'name'      => single_cat_title( '', false )
    )); 
?>

<section class="category-items">
    <div class="container">
        <div class="category-title text-center">
            <h2><?php echo single_cat_title( '', false ); ?></h2>
        </div>
        <div class="row secondRow">
            <?php foreach ($category as $cat):?>
                <?php
                    $args = array(
                        'post_type'        => 'products_cpt',
                        'category'         => $cat->term_id,
                        'post_status'      => 'publish',
                        'suppress_filters' => true 
                    );
                    $cat_posts = get_posts($args); 
                ?>
                <?php foreach ($cat_posts as $post):
                    $postID = $post->ID;    
                ?>
                    <div class="col-md-4 col-xl-3 col-lg-3 ">
                        <div class="product-3 mb-3">
                            <div class="product-media">
                                <a href="<?php echo get_permalink($postID); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url($postID); ?>" alt="product">
                                </a>
                            </div>
                            <div class="product-detail d-flex flex-column justify-content-between">
                                <div class="product-title">
                                    <h6>
                                        <a href="<?php echo get_permalink($postID); ?>"><?php echo get_the_title($postID); ?></a>
                                    </h6>
                                </div>
                                <a  href="javascript:;"
                                    data-category="<?php echo $category->name; ?>"
                                    class="btn caestus_add_to_cart"
                                    data-image="<?php echo get_the_post_thumbnail_url($postID); ?>"
                                    data-name="<?php echo get_the_title($postID); ?>" 
                                    data-id="<?php echo $postID; ?>"
                                    style="background-color: #dc3d3d; color: #FFF"
                                >
                                    AJOUTER AU DEVIS
                            </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
