<?php global $theme_setting; ?>

<!-- Navbar -->
<nav class="navbar nav-custom navbar-expand-md" style="background-color: <?php echo $theme_setting['header-background'] ?>; position: block;">

    <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url() ?>" target="_blank"><img src="<?php echo the_logo(); ?>" alt=""></a>	
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse col-lg-6" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto py-4 py-md-0">
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Location</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Packs</a>
                        <a class="dropdown-item" href="#">Caméras</a>
                        <a class="dropdown-item" href="#">Optiques</a>
                        <a class="dropdown-item" href="#">Steadicams / Stabilisateurs</a>
                        <a class="dropdown-item" href="#">Supports Caméras / Trépieds</a>
                        <a class="dropdown-item" href="#">Accessoires</a>
                    </div>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo get_home_url().'/services'; ?>" role="button" aria-haspopup="true" aria-expanded="false">Prestation</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Opérateur Steadicam</a>
                        <a class="dropdown-item" href="#">Opérateur Dji Ronin 2</a>
                        <a class="dropdown-item" href="#">Techniciens</a>
                        <a class="dropdown-item" href="#">Transport</a>
                    </div>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="<?php echo get_home_url().'/a-propos'; ?>">À PROPOS</a>
                </li>
            </ul>
        </div>

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