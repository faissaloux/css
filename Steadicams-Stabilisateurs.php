<?php
/*
    Template Name: Steadicams-Stabilisateurs
*/

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

    <div class="coverHeaderWrapper">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/cover/cover-stabilisateur-steadicams.jpg" class='cover_img coverHeaderImg' />
        <h1 class='under_cover'>Steadicams / Stabilisateurs</h1>
    </div>
    <!-- Main Content -->
    <main class="main-content">

        <div class="row secondRow">
            <div class="col-md-6">
                <a href="/category/25">
                    <div class="boxImageCamera">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/PhoneVersion/Steadicams-Stabilisateurs/Steadicams-PhoneVersion.jpg"
                            class="d-lg-none d-md-none d-sm-none" />
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/materials/Steadicams.jpg?v=1" class="d-xs-none" />
                        <div class="ghakteb">Steadicams</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="/category/24">
                    <div class="boxImageCamera">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/PhoneVersion/Steadicams-Stabilisateurs/Stabilisateurs-PhoneVersion.jpg"
                            class="d-lg-none d-md-none d-sm-none" />
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/materials/Stabilisateurs.jpg?v=1" class="d-xs-none" />
                        <div class="ghakteb">Stabilisateurs</div>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <?php require_once('includes/footer.php') ?>
    <?php require_once('includes/scripts.php') ?>
</body>

</html>