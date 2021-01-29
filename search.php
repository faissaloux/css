<?php
    /**
     * Template Name: search
     */
    define( 'HOME_DIR', get_template_directory(). '/templates/home');
    global $theme_setting;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('includes/head.php') ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/app.css">
</head>
<a href="javascript:;" id="button" style="background-color: <?php echo $theme_setting['top-arrow-color'] ?>"></a>

<body>
    <?php require_once 'includes/nav.php' ?>
    <div class="container">
        <div class="search-result-page py-5">
            <h2>SEARCH RESULTS FOR: <span><?php echo '\''.strtoupper($_GET['q']).'\''; ?></span></h2>
            <div class="row">
                <?php if( !isset(($search_result[0]['error']))): ?>
                    <?php foreach($search_result[0] as $result): ?>
                        <div class="col-md-3 col-sm-12" style="margin-bottom: 40px;">
                            <div class="img-container">
                                <a href="<?php echo $result['link']; ?>">
                                    <img src="<?php echo $result['image']; ?>"/>
                                </a>
                            </div>
                            <div class="title">
                                <p><?php echo $result['title']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-4">
                        <div class="error">
                            <p><?php echo $search_result[0]['error']; ?></p>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
    <?php require_once 'includes/footer.php'; ?>
    <?php require_once 'includes/scripts.php'; ?>
</body>

</html>