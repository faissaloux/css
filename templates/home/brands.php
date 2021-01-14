<section class="les_partenaies ">
    <div class="owl-carousel" data-dots="false" data-autoplay="true" data-slides-to-show="12">
        <?php foreach($brands as $brand): ?>
            <a href="<?php echo $brans['url']; ?>">
                <img src="<?php echo $brand['image']; ?>"/>
            </a>
        <?php endforeach; ?>
    </div>
</section>