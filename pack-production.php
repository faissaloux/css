<?php
    /**
     * Template Name: pack-production
     */
    define( 'HOME_DIR', get_template_directory(). '/templates/home');
    global $theme_setting;
    global $assets_version;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'includes/head.php'; ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/app.css?v='.$assets_version;?>">
</head>
<a href="javascript:;" id="button" style="background-color: <?php echo $theme_setting['top-arrow-color'] ?>"></a>


<body>
    <div id="my-page">
        <?php require_once 'includes/nav.php' ?>
        <div class="packs-complets-page">
            <div class="container d-flex justify-content-center">
               <div class="row">
                    <div class="col-md-4 pack">
                        <a href="/category/location/packs-complets/red" class="pack-complet-link">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/partners/1.jpg">
                        </a>
                    </div>
                    <div class="col-md-4 pack">
                        <a href="/category/location/packs-complets/sony" class="pack-complet-link">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/partners/sony.png">
                        </a>
                    </div>
                    <div class="col-md-4 pack">
                        <a href="/category/location/packs-complets/canon" class="pack-complet-link">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/partners/2.png">
                        </a>
                    </div>
               </div>
            </div>
        </div>
        <?php require_once 'includes/footer.php'; ?>
        <?php require_once 'includes/scripts.php'; ?>
    </div>
</body>

</html>