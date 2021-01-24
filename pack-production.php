<?php
    /*
        Template Name: pack-production
    */
    global $theme_setting;
    $args = array( 'post_type' => 'pack_cpt', 'posts_per_page' => 10 );
    $the_query = new WP_Query( $args ); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('includes/head.php') ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/optiques/app.css">
</head>
<a href="" id="button"></a>

<body>
    <div id="my-page">
        <?php require_once('includes/nav.php'); ?>
        <div class="hero-container" style="height: <?php echo $theme_setting['packs-header-picture-height'].'px' ?>; margin-top: 80px; overflow: hidden; position: relative;">
            <img src="<?php print_r($theme_setting['packs-header-picture']['url']); ?>"" style="height: 100%; width: 100%; object-fit: cover;" class='hero-image' />
            <h1 class='hero-text'>Packs Production</h1>
        </div>
        <!-- Main Content -->
        <main class="main-content">
        <?php print_r($packsCategories); ?>
            <?php foreach ($packsCategories as $category): ?>
                <?php
                    query_posts( array(
                        'post_type' => 'pack_cpt',
                        'tax_query' => array( 
                            array( 
                                'taxonomy'  => 'pack_categories',
                                'field'     => 'slug',
                                'terms'     => $category->slug
                            ) 
                        ) 
                    ));
                ?>
                <?php if (have_posts()) : ?>
                    <div class="section-pack section bg-gray" style="padding-top:55px;">
                        <div class="section-title container">
                            <h2><?php echo $category->name; ?></h2>
                        </div>
                        <div class="container">
                            <div class="row">
                                <?php while (have_posts()) : the_post(); ?>
                                    <div class="col-md-6">
                                        <a href="<?php echo get_permalink(); ?>">
                                            <div class="p-5" style="width: 100%; display: inline-block;">
                                                <div class="card border hover-shadow-6">
                                                    <div class="card-body px-5 small_box_done">
                                                        <div class="row">
                                                            <div class="col-auto mr-auto">
                                                                <h6><strong><?php the_title(); ?></strong></h6>
                                                            </div>
                                                            <div class="col-auto">
                                                            </div>
                                                        </div>
                                                        <p><?php the_content(); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </main>

        <?php require_once('includes/footer.php') ?>
        <?php require_once('includes/scripts.php') ?>
    </div>
</body>

</html>