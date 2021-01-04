<!-- جلب الهيدر -->
<?php  get_header();  ?>


<?php 
	$brands = System::brands();
	foreach ($brands as $brand) : 
	$options = System::brand_options($brand->ID);
	$image   = System::get_brand_image($options['brand']);
	$link    = $options['brand_lien'];
?>


<?php 
	endforeach;
	unset($brands,$options,$image,$link,$brand);
?>





<?php 
	$sliders = System::sliders();
	foreach ($sliders as $slider) : 
	$options = System::slider_options($slider->ID);
	$image   = System::get_brand_image($options['slide']);
?>



<?php 
	endforeach;
	unset($sliders,$options,$image,$slider);
?>









<!-- جلب اعدادات القالب من ريداكس فريمورك -->
<?php global $theme_setting;  ?>

<!-- جلب محتوى الهيدر -->
<?php get_main_header(); ?>  

<!-- المقالة -->
<?php if ( have_posts() ) { while ( have_posts() ) { the_post();  ?>

<!-- صورة الموضوع -->
<?php the_post_thumbnail(get_the_ID(),'large'); ?> 

<!-- العنوان -->
<?php the_title(); ?>

<!-- رابط الموضوع -->
<?php  the_permalink();  ?>

<!-- المحتوى -->
<?php the_content(); ?>

<!-- التاريخ -->
<?php the_time('F j, Y'); ?>

<!-- الكاتب-->
<?php the_author(); ?>

<!-- الرابط للكاتب -->
<?php the_author_posts_link(); ?>

<!-- صورة الكاتب -->
<?php echo get_avatar(get_the_author_email(), 60, "","avatar",array("class"=>"img-responsive img-circle"));?>

<!-- نبذة صغيرة من المقالة -->
<?php echo wp_trim_words( get_the_content(), 15, '...' ); ?>

<!-- عدد التعليقات -->
<?php comments_number(); ?>


<?php  }   }   ?>
<!--// المقالة -->

<!-- ترقيم الصفحات -->
<?php theme_pagination($wp_query->max_num_pages); ?>
<!--// ترقيم الصفحات -->

<?php wp_reset_postdata(); ?>

<!-- جلب محتوى السايدبار -->
<?php if ( is_active_sidebar( 'home_sidebar' ) ) : ?>
<?php dynamic_sidebar( 'home_sidebar' ); ?>
<?php endif; ?>
<!--// جلب محتوى السايدبار -->


<!-- جلب محتوى الفوتر -->
<?php get_main_footer(); ?>

<!-- جلب الفوتر -->
<?php get_footer(); ?>