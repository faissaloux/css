<?php global $theme_setting; ?>

<section>

    <div class="">
        <!-- Main Content -->
        <main class="main-content" id='materialSection'>
            <div class="row qkj">
                <div class="col-md-61">
                    <a href="<?php echo get_home_url().$theme_setting['image1-url']; ?>">
                        <div class="boxImageCamera">
                            <img src="<?php print_r($theme_setting['image1']['url']); ?>"
                                class="d-md-none  images-img d-lg-none d-sm-none phoneonly" />

                            <img class="images-img" src="<?php print_r($theme_setting['image1']['url']); ?>" />
                            <div class="ghakteb"><?php echo $theme_setting['image1-title']; ?></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-61">
                    <a href="<?php echo get_home_url().$theme_setting['image2-url']; ?>">
                        <div class="boxImageCamera">
                            <img src="<?php print_r($theme_setting['image2']['url']); ?>"
                                class=" d-md-none images-img d-lg-none d-sm-none phoneonly" />
                            <img class="images-img" src="<?php print_r($theme_setting['image2']['url']); ?>" />
                            <div class="ghakteb"><?php echo $theme_setting['image2-title']; ?></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-31">
                    <a href="<?php echo get_home_url().$theme_setting['image3-url']; ?>">
                        <div class="boxImageCamera"><img class="images-img" src="<?php print_r($theme_setting['image3']['url']); ?>" />
                            <div class="ghakteb"><?php echo $theme_setting['image3-title']; ?></div>
                        </div>
                    </a>
                </div>

                <div class="col-md-31">
                    <a href="<?php echo get_home_url().$theme_setting['image4-url']; ?>">
                        <div class="boxImageCamera"><img class="images-img" src="<?php print_r($theme_setting['image4']['url']); ?>" />
                            <div class="ghakteb"><?php echo $theme_setting['image4-title']; ?></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-31">
                    <a href="<?php echo get_home_url().$theme_setting['image5-url']; ?>">
                        <div class="boxImageCamera"><img class="images-img" src="<?php print_r($theme_setting['image5']['url']); ?>" />
                            <div class="ghakteb"><?php echo $theme_setting['image5-title']; ?></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-31">
                    <a href="<?php echo get_home_url().$theme_setting['image6-url']; ?>">
                        <div class="boxImageCamera"><img class="images-img" src="<?php print_r($theme_setting['image6']['url']); ?>" />
                            <div class="ghakteb"><?php echo $theme_setting['image6-title']; ?></div>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>
</section>