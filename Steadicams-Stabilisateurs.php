<?php
/*
    Template Name: Steadicams-Stabilisateurs
*/
    global $theme_setting;
    $firstCategoryClass = empty($theme_setting['stab-stead-second-category-image']['url'])
                            ?  'col-md-12' : 'col-md-6';
    $secondCategoryClass = empty($theme_setting['stab-stead-first-category-image']['url'])
                            ?  'col-md-12' : 'col-md-6';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('includes/head.php') ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/Trepieds-SupportsCamera/app.css">
</head>
<a href="" id="button"></a>

<body>
    <?php require_once('includes/nav.php') ?>

    <?php if( !empty( $theme_setting['stab-stead-header-image']['url'] ) ): ?>
        <div class="coverHeaderWrapper">
            <img src="<?php echo $theme_setting['stab-stead-header-image']['url']; ?>" class='cover_img coverHeaderImg' />
            <h1 class='under_cover'><?php echo $theme_setting['stab-stead-header-text']; ?></h1>
        </div>
    <?php endif; ?>
    <!-- Main Content -->
    <main class="main-content">

        <div class="row secondRow">
            <?php if( !empty($theme_setting['stab-stead-first-category-image']['url']) ): ?>
                <div class="<?php echo $firstCategoryClass; ?>">
                    <a href="<?php echo $theme_setting['stab-stead-first-category-link']; ?>">
                        <div class="boxImageCamera">
                            <img src="<?php echo $theme_setting['stab-stead-first-category-image']['url']; ?>"
                                class="d-lg-none d-md-none d-sm-none" />
                            <img src="<?php echo $theme_setting['stab-stead-first-category-image']['url']; ?>" class="d-xs-none" />
                            <div class="ghakteb"><?php echo $theme_setting['stab-stead-first-category-title']; ?></div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
            <?php if( !empty($theme_setting['stab-stead-second-category-image']['url']) ): ?>
                <div class="<?php echo $secondCategoryClass; ?>">
                    <a href="<?php echo $theme_setting['stab-stead-second-category-link']; ?>">
                        <div class="boxImageCamera">
                            <img src="<?php echo $theme_setting['stab-stead-second-category-image']['url']; ?>"
                                class="d-lg-none d-md-none d-sm-none" />
                            <img src="<?php echo $theme_setting['stab-stead-second-category-image']['url']; ?>" class="d-xs-none" />
                            <div class="ghakteb"><?php echo $theme_setting['stab-stead-second-category-title']; ?></div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </main>
    <?php require_once('includes/footer.php') ?>
    <?php require_once('includes/scripts.php') ?>
</body>

</html>