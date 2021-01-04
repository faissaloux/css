<?php
    define( 'HOME_DIR', get_template_directory(). '/templates/home');
    global $theme_setting;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('includes/head.php') ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/app.css">
</head>
<a href="" id="button" style="background-color: <?php echo $theme_setting['top-arrow-color'] ?>"></a>

<body>
    <?php require_once('includes/nav.php') ?>

    <div class="search-section phonesearchSection">
        <div class="row align-items-center h-100">
            <div class="col-md-12 mx-auto text-center">
            </div>
            <div class="col-md-5 mx-auto text-center">
                <div class="overflowSearchPHoneHeader" style='display:none;'></div>
                <div class="searchPhoneHeader">
                    <input type="text" placeholder='Recherche' class='searchDyali HeaderPhoneSearch' />
                    <ul class="list-group searchPhoneHeaderResutls" style='display:none;'>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php require_once HOME_DIR . '/slider.php'; ?>
    <?php require_once HOME_DIR . '/brands.php'; ?>
    <?php require_once HOME_DIR . '/images.php'; ?>
    <?php require_once 'includes/footer.php'; ?>
    <?php require_once 'includes/scripts.php'; ?>
</body>

</html>