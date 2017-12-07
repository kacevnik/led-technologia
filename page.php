<?php get_header(); ?>
<?php
	if (defined( 'FW' )){
		$kdv_post_background = fw_get_db_post_option(42, 'kdv_page_bg_img');
	}
?>
<section>
	<div class="post_header" style="background: url('<?php echo $kdv_post_background['url']; ?>');">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-8 post_body">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
					<?php the_post_thumbnail( 'full'); ?>
					<?php the_content(); // контент ?>
				</article>
			<?php endwhile; // конец цикла ?>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-4 page-sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>