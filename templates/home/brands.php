<section class="les_partenaies " style="display: none">
    <div class="owl-carousel" data-dots="false" data-autoplay="true" data-slides-to-show="12">
        <?php foreach($brands as $brand): ?>
            <a href="<?php echo $brand['url']; ?>">
                <img src="<?php echo $brand['image']; ?>"/>
            </a>
        <?php endforeach; ?>
    </div>
</section>



<section class="brands-section d-flex justify-content-center align-items-center">
    <div class="col-10">
        <div class="d-flex justify-content-between">
            <?php foreach($brands as $brand): ?>
                <div class="brand-item">
                    <a href="<?php echo $brand['url']; ?>">
                        <img src="<?php echo $brand['image']; ?>" style="object-fit: contain;"/>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>