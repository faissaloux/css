<?php
/*
    Template Name: accessoires
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
        <img src="<?php echo get_template_directory_uri();?>/assets/images/cover/cover_accessoires.jpg" class='slmsqfqsqs coverHeaderImg' />
        <h1 class='under_cover'>Accessoires</h1>
    </div>
    <!-- Main Content -->
    <main class="main-content">
        <div class="row secondRow">

            <?php foreach($accessories as $accessory): ?>
                <?php if( !empty( $accessory['image'] ) ): ?>
                    <div class="col-md-3">
                        <a href="<?php echo $accessory['url']; ?>">
                            <div class="boxImageCamera">
                                <img src="<?php echo $accessory['image']; ?>" />
                                <div class="ghakteb"><?php echo $accessory['title']; ?></div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </main>
    
    <?php require_once('includes/footer.php') ?>
    <?php require_once('includes/scripts.php') ?>
</body>

</html>