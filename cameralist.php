<?php
/*
    Template Name: cameralist
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('includes/head.php') ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/cameralist/app.css">
</head>
<a href="" id="button"></a>

<body>
    <?php require_once('includes/nav.php') ?>

    <div class="coverHeaderWrapper">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/COVER_CAMERA_NEW_2.jpg" class='slmsqfqsqs coverHeaderImg' />
        <h1 class='under_cover'>Caméras</h1>
    </div>


    <!-- Main Content -->
    <main class="main-content" style='margin-top:75px;'>
        <section class="section">
            <div class="container">


                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <a href="<?php echo get_home_url().'/red'; ?>" class='kdkdkjsfkqsdmkj'>
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/partners/1.jpg" alt="">

                            </a>
                        </div>


                        <div class="col-md-4">
                        </div>

                        <div class="col-md-4">
                            <a href="javascript:;" class='kdkdkjsfkqsdmkj'>
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/LOGO-ARRI.jpg" alt="">
                                <h4 style='color:red;
    margin-bottom:0 !important;
        position: absolute;
    right: 0;
    left: 0;
    font-size: 16px;
'>Disponible prochainement</h4>
                            </a>
                        </div>


                    </div>
                </div>


            </div>
            </div>


        </section>
    </main>


    <?php require_once('includes/footer.php') ?>
    <?php require_once('includes/scripts.php') ?>
</body>

</html>