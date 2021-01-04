<?php
/*
    Template Name: Apropos
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('includes/head.php') ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/apropos/app.css">
</head>
<a href="" id="button"></a>

<body>
    <?php require_once('includes/nav.php') ?>
    <div class="container lmkklflq">
        <div class="row">
            <div class="col-md-8 kkksjksjsq" style=''>
                <h1 class='text-center'>
                    <?php echo get_the_title(); ?>
                </h1>
                <p>
                    <?php echo get_the_content(); ?>
                </p>
            </div>
        </div>
        <div class="row map-container">
            <div style="width: 100%">
                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=R%C3%A9sidence%20Yasmine%20%20Agadir%20,%20Maroc+(Caestus)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
    </div>
    <?php require_once('includes/footer.php') ?>
    <?php require_once('includes/scripts.php') ?>
</body>

</html>