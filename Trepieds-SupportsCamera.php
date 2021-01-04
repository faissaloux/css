<?php
/*
    Template Name: Trepieds-SupportsCamera
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('includes/head.php') ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/optiques/app.css">
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

    <div class="coverHeaderWrapper">

        <img src="<?php echo get_template_directory_uri();?>/assets/images/cover/coversupportscamera-trepieds.jpg" class='cover_img coverHeaderImg' />
        <h1 class='under_cover'>Support Caméra / Trépieds</h1>
    </div>


    <!-- Main Content -->
    <main class="main-content">

        <div class="row secondRow">
            <div class="col-md-6">
                <a href="/category/26">
                    <div class="boxImageCamera"><img src="<?php echo get_template_directory_uri();?>/assets/images/materials/SupportsCamera.jpg?v=1" />
                        <div class="ghakteb">Supports Caméra</div>


                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="/category/27">


                    <div class="boxImageCamera">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/PhoneVersion/Trepieds-Suppots Camera/Trepieds-PhoneVersion.jpg"
                            class="d-lg-none d-md-none d-sm-none" />

                        <img src="<?php echo get_template_directory_uri();?>/assets/images/materials/Trepieds.jpg?v=1" class="d-xs-none" />

                        <div class="ghakteb">Trépieds</div>

                    </div>
                </a>
            </div>

        </div>


    </main>


    <?php require_once('includes/footer.php') ?>
    <?php require_once('includes/scripts.php') ?>
</body>

</html>

</html>