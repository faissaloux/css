<section class="les_partenaies " style="display: none">
    <div class="owl-carousel" data-dots="false" data-autoplay="true" data-slides-to-show="12">
        <?php foreach($brands as $brand): ?>
            <a href="<?php echo $brans['url']; ?>">
                <img src="<?php echo $brand['image']; ?>"/>
            </a>
        <?php endforeach; ?>
    </div>
</section>



<section class="brands-section">
    <div class="owl-carousel">
        <?php foreach($brands as $brand): ?>
            <div class="brand-item">
                <a href="<?php echo $brans['url']; ?>">
                    <img src="<?php echo $brand['image']; ?>"/>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>