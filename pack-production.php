<?php
    /*
        Template Name: pack-production
    */

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
    <?php require_once('includes/nav.php') ?>
    
    <?php if ( is_active_sidebar( 'header-widget' ) ) : ?>
            <?php dynamic_sidebar( 'header-widget' ); ?>
    <?php endif; ?>
    <!-- Main Content -->
    <main class="main-content">
        <div class="section-pack section bg-gray" style="padding-top:55px;">
            <div class="section-title container">
                <h2>
                    Packs RED HELIUM 8K S35
                </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="/packs/5">
                            <div class="p-5" style="width: 100%; display: inline-block;">
                                <div class="card border hover-shadow-6">
                                    <div class="card-body px-5 small_box_done">
                                        <div class="row">
                                            <div class="col-auto mr-auto">
                                                <h6><strong>pack 1
                                                        <!--?php echo $i ?--></strong></h6>
                                            </div>
                                            <div class="col-auto">
                                            </div>
                                        </div>
                                        <p>
                                            Pack OPTIMAL 1 RED HELIUM 8K S35
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="/packs/6">
                            <div class="p-5" style="width: 100%; display: inline-block;">
                                <div class="card border hover-shadow-6">
                                    <div class="card-body px-5 small_box_done">
                                        <div class="row">
                                            <div class="col-auto mr-auto">
                                                <h6><strong>pack 2
                                                        <!--?php echo $i ?--></strong></h6>
                                            </div>

                                            <div class="col-auto">

                                            </div>
                                        </div>

                                        <p>

                                            Pack OPTIMAL 2 RED HELIUM 8K S35

                                        </p>


                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-6">
                        <a href="/packs/7">
                            <div class="p-5" style="width: 100%; display: inline-block;">
                                <div class="card border hover-shadow-6">
                                    <div class="card-body px-5 small_box_done">
                                        <div class="row">
                                            <div class="col-auto mr-auto">
                                                <h6><strong>pack 3
                                                        <!--?php echo $i ?--></strong></h6>
                                            </div>

                                            <div class="col-auto">

                                            </div>
                                        </div>

                                        <p>
                                            Pack MEDIAN 1 RED HELIUM 8K S35
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-6">
                        <a href="/packs/8">
                            <div class="p-5" style="width: 100%; display: inline-block;">
                                <div class="card border hover-shadow-6">
                                    <div class="card-body px-5 small_box_done">
                                        <div class="row">
                                            <div class="col-auto mr-auto">
                                                <h6><strong>pack 4
                                                        <!--?php echo $i ?--></strong></h6>
                                            </div>

                                            <div class="col-auto">

                                            </div>
                                        </div>

                                        <p>
                                            Pack MEDIAN 2 RED HELIUM 8K S35
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>

        <div class="section-pack section bg-gray">
            <div class="section-title container">
                <h2>
                    Packs RED GEMINI 5K S35
                </h2>
            </div>
            <div class="container">
                <div class="row">


                    <div class="col-md-6">
                        <a href="/packs/9">
                            <div class="p-5" style="width: 100%; display: inline-block;">
                                <div class="card border hover-shadow-6">
                                    <div class="card-body px-5 small_box_done">
                                        <div class="row">
                                            <div class="col-auto mr-auto">
                                                <h6><strong>pack 1
                                                        <!--?php echo $i ?--></strong></h6>
                                            </div>

                                            <div class="col-auto">

                                            </div>
                                        </div>

                                        <p>

                                            Pack OPTIMAL 1 RED GEMINI 5K S35

                                        </p>


                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-6">
                        <a href="/packs/10">
                            <div class="p-5" style="width: 100%; display: inline-block;">
                                <div class="card border hover-shadow-6">
                                    <div class="card-body px-5 small_box_done">
                                        <div class="row">
                                            <div class="col-auto mr-auto">
                                                <h6><strong>pack 2
                                                        <!--?php echo $i ?--></strong></h6>
                                            </div>

                                            <div class="col-auto">

                                            </div>
                                        </div>

                                        <p>


                                            Pack OPTIMAL 2 RED GEMINI 5K S35


                                        </p>


                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-6">
                        <a href="/packs/11">
                            <div class="p-5" style="width: 100%; display: inline-block;">
                                <div class="card border hover-shadow-6">
                                    <div class="card-body px-5 small_box_done">
                                        <div class="row">
                                            <div class="col-auto mr-auto">
                                                <h6><strong>pack 3
                                                        <!--?php echo $i ?--></strong></h6>
                                            </div>

                                            <div class="col-auto">

                                            </div>
                                        </div>

                                        <p>


                                            Pack MEDIAN 1 RED GEMINI 5K S35


                                        </p>


                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-6">
                        <a href="/packs/12">
                            <div class="p-5" style="width: 100%; display: inline-block;">
                                <div class="card border hover-shadow-6">
                                    <div class="card-body px-5 small_box_done">
                                        <div class="row">
                                            <div class="col-auto mr-auto">
                                                <h6><strong>pack 4
                                                        <!--?php echo $i ?--></strong></h6>
                                            </div>

                                            <div class="col-auto">

                                            </div>
                                        </div>

                                        <p>

                                            Pack MEDIAN 2 RED GEMINI 5K S35

                                        </p>


                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
        <div class="section-pack section bg-gray">
            <div class="section-title container">
                <h2>
                    Pack RED Multi Cameras
                </h2>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <a href="/packs/13">
                            <div class="p-5" style="width: 100%; display: inline-block;">
                                <div class="card border hover-shadow-6">
                                    <div class="card-body px-5 small_box_done">
                                        <div class="row">
                                            <div class="col-auto mr-auto">
                                                <h6><strong>pack multi <?php echo $i ?></strong></h6>
                                            </div>

                                            <div class="col-auto">

                                            </div>
                                        </div>

                                        <p>

                                            Pack MULTICAM RED HELIUM 8K S35 / RED GEMINI 5K S35

                                        </p>


                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <?php if ( $the_query->have_posts() ) : ?>
    <div class="section-pack section bg-gray">
        <div class="container">
            <div class="row">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-md-6">
                <a href="/packs/8">
                    <div class="p-5" style="width: 100%; display: inline-block;">
                        <div class="card border hover-shadow-6">
                            <div class="card-body small_box_done_1 p-0"
                                style="background: url(<?php echo get_the_post_thumbnail_url();?>)">
                                <div class="overflow">
                                    <div class="row">
                                        <div class="col-auto mr-auto">
                                            <h6><strong><?php the_title(); ?></strong></h6>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                    <div class="d-flex px-4" style="background-color: #1a1918db; color: #FFF; width: fit-content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
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

    <?php require_once('includes/footer.php') ?>
    <?php require_once('includes/scripts.php') ?>
</body>

</html>