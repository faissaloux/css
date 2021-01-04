<?php global $theme_setting; ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg  navbar-dark" style="background-color: <?php echo $theme_setting['header-background'] ?>" data-navbar="static">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 col-lg-3 navbar-left">
                <button class="" id='menuphoneopen' type="button">☰</button>
                <a class="navbar-brand" href="<?php echo get_home_url() ?>">
                    <img class="logo-dark" src="<?php echo the_logo(); ?>" alt="logo">
                    <img class="logo-light" src="<?php echo the_logo(); ?>" alt="logo">
                </a>
            </div>
            <section class="col-lg-6 navbar-mobile monstriat">
                <nav class="nav nav-navbar mx-auto">
                    <li class="nav-item">
                        <a class="nav-link ksksks" href="/#materialSection"> Location <span
                                class="arrow"></span></a>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/pack-production">Packs Production</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cameralist">Caméras <span class="arrow"></span> </a>
                                <nav class="nav">
                                    <a class="nav-link" href="/red"> RED </a>
                                </nav>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/optiques">Optiques <span class="arrow"></span> </a>
                                <nav class="nav">
                                    <a class="nav-link" href="/optiques#sigma"> SIGMA </a>
                                    <a class="nav-link" href="/optiques#canoon"> CANON </a>
                                </nav>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Steadicams-Stabilisateurs">Steadicams / Stabilisateurs
                                    <span class="arrow"></span></a>
                                <nav class="nav">
                                    <a class="nav-link" href="/category/25"> Steadicams </a>
                                    <a class="nav-link" href="/category/24">Stabilisateurs </a>
                                </nav>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Trepieds-SupportsCamera">Supports Caméras / Trépieds<span
                                        class="arrow"></span></a>
                                <nav class="nav">

                                    <a class="nav-link" href="/category/26"> Supports Caméra </a>
                                    <a class="nav-link" href="/category/27"> Trépieds </a>
                                </nav>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/accessoires">Accessoires <span class="arrow"></span></a>
                                <nav class="nav">
                                    <a class="nav-link" href="/category/14"> Accessoires RED </a>
                                    <a class="nav-link" href="/category/13"> Accessoires Camera </a>
                                    <a class="nav-link" href="/category/19"> Moniteurs Enregistreurs </a>
                                    <a class="nav-link" href="/category/17"> Follow Focus </a>
                                    <a class="nav-link" href="/category/15"> Alimentation Et Batteries </a>
                                    <a class="nav-link" href="/category/18"> Media Cartes Mémoires </a>
                                    <a class="nav-link" href="/category/16">Filtres</a>
                                    <a class="nav-link" href="/category/20">Roulante ADICAM MAX </a>
                                </nav>
                            </li>
                        </ul>
                    </li>
                    </a>
                    <li class="nav-item">
                        <a class="nav-link ksksks" href="<?php echo get_home_url().'/services'; ?>"> <span>Prestation</span>
                            <span class="arrow"></span> </a>
                        <ul class="nav">
                            <a class="nav-link" href="/prestation/8">Opérateur Steadicam</a>
                            <a class="nav-link" href="/prestation/7">Opérateur Dji Ronin 2</a>
                            <a class="nav-link" href="/prestation/6">Techniciens</a>
                            <a class="nav-link" href="/prestation/5">Transport</a>
                    </li>
                    </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link ksksks" href="<?php echo get_home_url().'/a-propos'; ?>">
                            <span>À propos</span> </a></li>
            </section>
            <div class="col-4 col-lg-3 text-right lbotonat">
                <div class="search-For-Top-Header">
                    <input type="text" class='searchStuf' style='display:none;' placeholder="Recherche">
                    <ul class='mlsqfkkfmkmlklm' style='display:none;'>
                        <li class='no-reuslt'>Aucun Resultat</li>
                    </ul>
                </div>
                <a class="btn btn-xs ssfsqzgzagez" href='javascript:;' data-toggle="offcanvas"
                    data-target="#offcanvas-search">
                    <span class="ti-search"></span></a>
                <div class="carter"><a class="btn btn-xs" id="cart" style="background-color: <?php echo $theme_setting['header-cart-background'] ?>" href="<?php echo get_home_url().'/cart'; ?>"> 0 <span
                            class="icon-document"></span></a>
                </div>
                <a class="btn btn-xs" href="https://goo.gl/maps/1zkbzfxZeiAUGqCX9"> <span
                        class="ti-location-pin"></span></a>
            </div>
        </div>
    </div>
</nav>


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