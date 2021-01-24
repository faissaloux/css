<?php
    global $theme_setting;
?>

<!-- Navbar -->
<nav class="navbar nav-custom navbar-expand-md" style="background-color: <?php echo $theme_setting['header-background'] ?>;">

    <div class="container">
        <a href="#my-menu" class="show-mobile show-menu col-3"><i class="fas fa-bars"></i></a>
        <a class="navbar-brand col-sm-2 col-md-2 px-0" href="<?php echo get_home_url() ?>"><img src="<?php echo the_logo(); ?>" alt=""></a>	
        
        <!-- <div class="collapse navbar-collapse col col-lg-6" id="navbarSupportedContent">
            <?php ##top_header_menu_bootstrap4(); ?>
        </div> -->
        
        <section class="col-lg-6 navbar-mobile monstriat">
            <nav class="nav nav-navbar mx-auto">
                <li class="nav-item">
                    <a class="nav-link ksksks" href="/#materialSection"> Location <span class="arrow"></span></a>
                    <ul class="nav">
                        <li class="nav-item">
                        <a class="nav-link" href="/pack-production">Packs Production</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/cameralist">Caméras  <span class="arrow"></span>  </a>
                        <nav class="nav">
                            <a class="nav-link" href="/red"> RED  </a>
                        </nav>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/optiques">Optiques <span class="arrow"></span> </a>
                        <nav class="nav">
                            <a class="nav-link" href="/optiques#sigma"> SIGMA  </a>
                            <a class="nav-link" href="/optiques#canoon"> CANON   </a>
                        </nav>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/Steadicams-Stabilisateurs">Steadicams / Stabilisateurs <span class="arrow"></span></a>
                        <nav class="nav">
                            <a class="nav-link" href="/category/25"> Steadicams  </a>
                            <a class="nav-link" href="/category/24">Stabilisateurs   </a>
                        </nav>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/Trepieds-SupportsCamera">Supports Caméras / Trépieds<span class="arrow"></span></a>
                        <nav class="nav">
                            <a class="nav-link" href="/category/26"> Supports Caméra   </a>
                            <a class="nav-link" href="/category/27"> Trépieds   </a>
                        </nav>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/accessoires">Accessoires <span class="arrow"></span></a>
                        <nav class="nav">
                            <a class="nav-link" href="/category/14"> Accessoires RED </a>
                            <a class="nav-link" href="/category/13"> Accessoires Camera </a>
                            <a class="nav-link" href="/category/19"> Moniteurs Enregistreurs </a>
                            <a class="nav-link" href="/category/17"> Follow Focus </a>
                            <a class="nav-link" href="/category/15"> Alimentation Et Batteries  </a>
                            <a class="nav-link" href="/category/18"> Media Cartes Mémoires </a>
                            <a class="nav-link" href="/category/16">Filtres</a>
                            <a class="nav-link" href="/category/20">Roulante ADICAM MAX  </a>
                        </nav>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link ksksks" href="https://caestus.ma//services"> <span>Prestation</span> <span class="arrow"></span>   </a>
                    <ul class="nav">
                        <a class="nav-link" href="/prestation/8">Opérateur Steadicam</a>
                        <a class="nav-link" href="/prestation/7">Opérateur Dji Ronin 2</a>
                        <a class="nav-link" href="/prestation/6">Techniciens</a>
                        <a class="nav-link" href="/prestation/5">Transport</a>
                    </ul>
                </li>
                <li class="nav-item"> <a class="nav-link ksksks" href="https://caestus.ma//a-propos"> <span>À propos</span>  </a> </li>
            </nav>
        </section>

        <div class="col-4 col-md-3 col-lg-3 text-right lbotonat d-flex justify-content-end align-items-center">
            <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ox-dialog ox-slideout ox-slideout-top active ox-slideout-active" tabindex="-1" role="dialog" aria-describedby="ui-id-1" style="display: none;">
            <div class="block block-content block-content-slideout ui-dialog-content ui-widget-content ox-modal-content" data-move-mobile="search.slideout" data-move-sticky="search.slideout" style="display: block;" data-role="OXmodal" id="ui-id-1">
		<div class="header__search-wrapper ox-move-item ox-move-item-search.slideout">
			<div class="ox-overlay-close-btn"><span></span></div>
            <form class="form minisearch" id="search_mini_form" action="/search" method="get">
                <div class="field search">
                    <div class="control">
                        <div class="flashing-cursor"></div>
                        <input id="search" type="text" name="q" value="" class="input-text js-input-focus searchMobile" maxlength="128" role="combobox" aria-haspopup="false" aria-autocomplete="both" autocomplete="off" aria-expanded="false">
                        <div class="label animated-text--masked" for="search" data-role="minisearch-label">
                            <div class="wrap">
                                <span class="inner">Search</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="actions">
                    <button title="Go" class="action search searchMobile" aria-label="Search">
                        <span class="search-icon-wrapper"><svg data-name="search-icon-small 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15"><rect x="11.73223" y="10.52513" width="2" height="4.41421" transform="translate(-5.27386 12.73223) rotate(-45)"></rect><path d="M7,0a7,7,0,1,0,7,7A7,7,0,0,0,7,0ZM7,12a5,5,0,1,1,5-5A5,5,0,0,1,7,12Z"></path></svg></span><span>GO</span>
                    </button>
                </div>
            </form>
		</div></div></div>
            <a class="btn btn-xs down-search" href='javascript:;' data-toggle="offcanvas"
                data-target="#offcanvas-search">
                <span class="ti-search"></span></a>
            <div class="carter">
                <a class="btn btn-xs" id="cart" style="background-color: <?php echo $theme_setting['header-cart-background'] ?>" href="<?php echo get_home_url().'/cart'; ?>">
                    <span id="products-in-cart">0</span>
                    <span class="icon-document"></span>
                </a>
            </div>
            <a class="btn btn-xs show-desktop" href="https://goo.gl/maps/1zkbzfxZeiAUGqCX9">
                <span class="ti-location-pin"></span>
            </a>
        </div>
    </div>
</nav>		
            
<div id="my-header" class="show-mobile">
    <nav id="my-menu">
        <a class="btn btn-xs" href="https://goo.gl/maps/1zkbzfxZeiAUGqCX9">
            <span class="ti-location-pin"></span>
        </a>
        <?php echo get_mobile_menu($menus); ?>
    </nav>
</div>


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