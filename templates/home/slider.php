<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        <?php $i = 0; foreach(the_slider() as $slider){
            ?>
                <div class="carousel-item <?php if($i==0): echo 'active'; endif  ?>">
                    <img class="d-block w-100 d-lg-none d-md-none d-sm-none"
                        src="<?php echo $slider;?>">
                    <img class="d-block w-100 d-xs-none" src="<?php echo $slider;?>">
                </div>
            <?php
            $i++;
        } ?>
    </div>
</div>
<div class="search-section dnone-xs">
    <div class="row align-items-center h-100">
        <div class="col-md-12 mx-auto text-center">
        </div>
        <div class="col-md-5 mx-auto text-center">
            <form class="rounded ">
                <div class="row">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-search mt-1"></i></span>
                            </div>
                            <input id='searchInput' name='kerkesni' type="text" class="form-control"
                                placeholder="Recherche">
                        </div>
                        <div id='ajaxSearch' class="search" style='display: none;'>
                            <div class="search-loading">
                                <div class="loadingcopong" style='display:none;'>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/Loading/loading.gif" /> Chargement ...
                                </div>
                            </div>
                            <div class="search-result">
                                <div class="no-reuslt" style='display:none;'></div>
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <a href="#" class="d-flex">
                                            <div class="image-cont mr-4">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NormalVersion/Acceuil/Accueil-Cameras.jpg">
                                            </div>
                                            <div class="text-cont">
                                                <p>dejfkljf  fdrejf</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a href="#" class="d-flex">
                                            <div class="image-cont mr-4">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NormalVersion/Acceuil/Accueil-Cameras.jpg">
                                            </div>
                                            <div class="text-cont">
                                                <p>dejfkljf  fdrejf</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a href="#" class="d-flex">
                                            <div class="image-cont mr-4">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NormalVersion/Acceuil/Accueil-Packproduction.jpg">
                                            </div>
                                            <div class="text-cont">
                                                <p>dejfkljf  fdrefeferfefj  feferef</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a href="#" class="d-flex">
                                            <div class="image-cont mr-4">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NormalVersion/Acceuil/Accueil-Cameras.jpg">
                                            </div>
                                            <div class="text-cont">
                                                <p>dejfkljf  refefrefref ferrferffdrejf</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a href="#" class="d-flex">
                                            <div class="image-cont mr-4">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NormalVersion/Acceuil/Accueil-Packproduction.jpg">
                                            </div>
                                            <div class="text-cont">
                                                <p>dejfkljf  fdrejfrefeferferferfef</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto ">
                    <button style='display:none;' class="btn btn-lg btn-primary searchBtn" type="submit"><span
                            class="ti-search"></span></button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>