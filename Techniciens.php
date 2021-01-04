<?php
/*
    Template Name: Techniciens
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('includes/head.php') ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/technicien.css">
</head>
<a href="" id="button"></a>

<body>
    <?php require_once('includes/nav.php') ?>


    <div class="container">

    </div>
    <!--end container -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">La duree du travail</h4>
                </div>
                <div class="modal-body">
                    <form id='addtocartForm' action='/ajax1/' Method='POST'>
                        <div class="form-group">
                            <input name="from" type="text" readonly='true' class="datePicker form-control"
                                placeholder="From" required="">
                        </div>
                        <div class="form-group">
                            <input name="to" type="tel" readonly='true' class="datePicker form-control"
                                placeholder="To" />
                        </div>

                        <input type="hidden" name="name" id='CartproductName'>
                        <input type="hidden" name="id" id='CartproductID'>
                        <input type="hidden" name="image" id='CartproductImage'>

                        <button type="submit" class="btn btn-danger btn-block primary-bg">
                            <span class="submitConf">ajouter au panier</span>
                            <span class="submitLoad" style="display: none">يرجى الإنتظار...</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <main class="main-content productpage">
        <h2 class='text-center big-t-title'>
            Technicien Caestus
        </h2>
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class='slider-dots-fill-primary text-center lkslkls' id="lightgallery">
                            <a href="http://caestus.ma/uploads/media/svXenAFzDj8uTD5gJLpN.jpg"><img
                                    src="http://caestus.ma/uploads/media/svXenAFzDj8uTD5gJLpN.jpg"></a>
                        </div>
                        <ul class="list-of-products-img" id='underlightgallery'>
                            <a href="http://caestus.ma/uploads/media/svXenAFzDj8uTD5gJLpN.jpg" class='kj'> <img
                                    src="http://caestus.ma/uploads/media/svXenAFzDj8uTD5gJLpN.jpg"></a>
                        </ul>
                    </div>
                    <div class="col-md-1 khabittiniiiii">
                    </div>
                    <div class="col-md-6">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-home-1">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content p-4">
                            <div class="tab-pane fade show active" id="tab-home-1">
                                <p>
                                <p>Caestus Studios met à votre disposition un technicien professionnel qui vous
                                    accompagne
                                    et vous conseille sur votre lieu de tournage.</p>.</p>
                            </div>
                            <div class="tab-pane fade" id="tab-profile-1">
                                <p>.</p>
                            </div>
                        </div>
                        <div class="bigsection">
                            <div class="container">
                                <div class="row text-center">
                                    <a href='javascript:;' class=" btn add-To-Cart-Big" data-category="prestation"
                                        data-image='http://caestus.ma/uploads/media/svXenAFzDj8uTD5gJLpN.jpg'
                                        id='addToCartBtn' data-name='Technicien Caestus' data-id='6'>
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