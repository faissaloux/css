<?php
/*
    Template Name: Transport
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('includes/head.php') ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/transport.css">

</head>
<a href="" id="button"></a>

<body>
    <?php require_once('includes/nav.php') ?>
    
    <main class="main-content productpage">
        <h2 class='text-center big-t-title'>
            Transport
        </h2>
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class='slider-dots-fill-primary text-center lkslkls' id="lightgallery">
                            <a href="http://caestus.ma/uploads/media/veyZKOtAcGS3mttuCh6u.jpg"><img
                                    src="http://caestus.ma/uploads/media/veyZKOtAcGS3mttuCh6u.jpg"></a>
                        </div>
                        <ul class="list-of-products-img" id='underlightgallery'>
                            <a href="http://caestus.ma/uploads/media/veyZKOtAcGS3mttuCh6u.jpg" class='kj'> <img
                                    src="http://caestus.ma/uploads/media/veyZKOtAcGS3mttuCh6u.jpg"></a>
                        </ul>
                    </div>
                    <div class="col-md-1 khabittiniiiii">
                    </div>
                    <div class="col-md-6">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active description-tab" data-toggle="tab" href="#tab-home-1">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content p-4">
                            <div class="tab-pane fade show active" id="tab-home-1">
                                <p>
                                <p>Caestus Studios met à votre disposition des solutions de transports adaptées a vos
                                    besoins.</p>.</p>
                            </div>
                            <div class="tab-pane fade" id="tab-profile-1">
                                <p>.</p>
                            </div>
                        </div>
                        <div class="bigsection">
                            <div class="container">
                                <div class="row text-center">
                                    <a href='javascript:;' class=" btn add-To-Cart-Big" data-category="prestation"
                                        data-image='http://caestus.ma/uploads/media/veyZKOtAcGS3mttuCh6u.jpg'
                                        id='addToCartBtn' data-name='Transport' data-id='5'>
                                        AJOUTER AU DEVIS
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-8">
                <div class="row">
                </div>
            </div>
        </section>
        </div>
    </main>
    <?php require_once('includes/footer.php') ?>
    <?php require_once('includes/scripts.php') ?>
</body>

</html>