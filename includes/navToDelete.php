<?php
    global $theme_setting;
?>

<!-- Navbar -->
<nav class="navbar nav-custom navbar-expand-md" style="background-color: <?php echo $theme_setting['header-background'] ?>;">

    <div class="container">
        <a href="#my-menu" class="show-mobile show-menu col-3"><i class="fas fa-bars"></i></a>
        
        <div class="collapse navbar-collapse col col-lg-6" id="navbarSupportedContent">
            <?php top_header_menu_bootstrap4(); ?>
        </div>

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
            <a  class="btn btn-xs show-desktop" href="https://goo.gl/maps/1zkbzfxZeiAUGqCX9">
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
        <?php echo $html; ?>
    </nav>
</div>
