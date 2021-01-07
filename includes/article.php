<?php global $theme_setting; ?>

<!-- Footer -->
<section class="article">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="single-post-title"><?php echo the_title(); ?></h1>
                <img src="<?php echo get_the_post_thumbnail_url();?>" class="__img-rounded img-fluid mt-3" alt="">
                <div class="__desc-post my-3 single-post-content">
                    <p><?php echo the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
