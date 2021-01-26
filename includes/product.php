<?php
   global $theme_setting;
?>

<section class="product">
   <div class="container">
        <h2 class="text-center big-t-title">
            <?php the_title(); ?>
        </h2>
      <div class="row">
         <div class="col-md-4">
            <div class="slider-dots-fill-primary text-center lkslkls slick-initialized slick-slider" id="lightgallery">
               <div class="slick-list draggable">
                  <div class="slick-track" style="opacity: 1; width: 380px;">
                    <div    class="slick-slide slick-current slick-active"
                            data-slick-index="0"
                            aria-hidden="false"
                            style="width: 380px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"
                    >
                        <div>
                            <a href="<?php echo get_the_post_thumbnail_url(); ?>" style="width: 100%; display: inline-block;" tabindex="0">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                            </a>
                        </div>
                    </div>
                  </div>
               </div>
            </div>
            <ul class="list-of-products-img" id="underlightgallery">
            
            <?php foreach(system::product_gallery(get_the_ID()) as $image): ?>
               <a href="<?php echo $image; ?>" class="kj"> <img src="<?php echo $image; ?>"></a>
            <?php endforeach; ?>
            </ul>
            <style>
               .product-3 {
               height: 400px !important;
               }
               a.product-media {
               height: 260px !important;
               overflow: hidden;
               display: inline-block;
               }
               ul.list-of-products-img {
               list-style: none;
               margin-top: 30px;
               }
               ul.list-of-products-img a {
               width: 75px;
               margin-left: 3px;
               height: 75px;
               border: 1px solid black;
               float: left;
               }
               ul.list-of-products-img a img {
               width: 100%;
               }
               .slick-slide img {
               height: 340px;
               }
            </style>
         </div>
         <div class="col-md-1 khabittiniiiii">
         </div>
         <div class="col-md-6">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active mr-4 show" data-toggle="tab" href="#tab-home-1">Description</a>
               </li>
            </ul>
            <div class="tab-content p-4">
               <div class="tab-pane fade active show" id="tab-home-1">
                  <?php the_content(); ?>
               </div>
            </div>
            <div class="bigsection">
               <div class="container">
                  <div class="row text-center">
                    <a  href="javascript:;"
                        data-category="<?php echo get_the_category()[0]->name; ?>"
                        class="btn caestus_add_to_cart" data-image="<?php echo get_the_post_thumbnail_url(); ?>"
                        data-name="<?php the_title(); ?>" 
                        data-id="<?php echo get_the_ID(); ?>"
                        style="background-color: red; color: #FFF"
                    >
                        AJOUTER AU DEVIS
                    </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="d-flex flex-column suggestions">
         <div class="row">
            <h3>Suggestions</h3>

            <?php
               $args = array('cat' => get_the_category()[0]->cat_ID, 'post_type' => 'products_cpt', 'posts_per_page' => 4);
               query_posts($args);
            ?>

         </div>
         <div class="row">
            <?php if (have_posts()) :  ?>   
               <?php while (have_posts()) : the_post(); ?>
                  <div class="col-md-4 col-xl-3 col-lg-3 products-item">
                     <div class="product-3 mb-3">
                        <div class="product-media">
                           <a href="<?php echo the_permalink(); ?>">
                                 <img src="<?php echo the_post_thumbnail_url(); ?>" alt="product">
                           </a>
                        </div>
                        <div class="product-detail d-flex flex-column justify-content-between">
                           <div class="product-title">
                                 <h6>
                                    <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                                 </h6>
                           </div>
                           <a  href="javascript:;"
                                 data-category="<?php echo get_the_category()[0]->name; ?>"
                                 class="btn caestus_add_to_cart"
                                 data-image="<?php echo the_post_thumbnail_url(); ?>"
                                 data-name="<?php the_title(); ?>" 
                                 data-id="<?php echo the_ID(); ?>"
                                 style="background-color: red; color: #FFF"
                           >
                                 AJOUTER AU DEVIS
                        </a>
                        </div>
                     </div>
                  </div>
               <?php endwhile; ?>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>
