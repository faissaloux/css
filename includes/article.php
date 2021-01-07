<?php global $theme_setting; ?>

<!-- Footer -->
<section class="article">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="single-post-title text-left"><?php echo the_title(); ?></h1>
                <div class="single-post-img-cont">
                    <img src="<?php echo get_the_post_thumbnail_url();?>" class="mt-3">
                </div>
                <div class="__desc-post my-3 single-post-content">
                    <p><?php echo the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
