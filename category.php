<?php get_header(); ?>
<?php
	if (defined( 'FW' )){
		$kdv_term_background = fw_get_db_term_option(get_query_var('cat'), 'category', 'kdv_category_bg_img');
	}
?>

<section class="blog_header" style="background: url('<?php echo $kdv_term_background['url']; ?>');">
	<div class="container">
		<h1><?php single_cat_title(); // название категории ?></h1>
	</div>
</section>
<section>
	<div class="container">
		<div class="col-xs-12 col-sm-9 col-md-8 blog-classic">
			<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
				<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
			<?php endwhile; // конец цикла
			else: echo '<h2>Нет записей.</h2>'; endif; // если записей нет, напишим "простите" ?>	 
			<?php pagination(); // пагинация, функция нах-ся в function.php ?>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-4 page-sidebar">
			<?php get_sidebar(); ?>	
		</div>
	</div>
</section>
<?php get_footer(); ?>