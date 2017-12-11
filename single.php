<?php get_header(); ?>
<?php
	if (defined( 'FW' )){
		$kdv_post_background = fw_get_db_post_option(get_the_ID(), 'kdv_post_img');
		$kdv_on_settings_product = fw_get_db_post_option(get_the_ID(), 'kdv_on_settings_product');
		$kdv_on_sitebar_product = fw_get_db_post_option(get_the_ID(), 'kdv_on_sitebar_product');
		$kdv_sub_title_product = fw_get_db_post_option(get_the_ID(), 'kdv_sub_title_product');
		$add_img_product = fw_get_db_post_option(get_the_ID(), 'add_img_product');
	}

	if($kdv_on_settings_product == 0){
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
<?php }else{  ?>
<section>
	<div class="post_header" style="background: url('<?php echo $kdv_post_background['url']; ?>');">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="<?php if($kdv_on_sitebar_product == 1){ ?>col-xs-12 col-sm-9 col-md-8<?php }else{ ?>post_product<?php } ?> post_body">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
				<h2><?php the_title(); ?></h2>
				<?php if($kdv_sub_title_product){ ?><div class="post_product_sub_title"><?php echo $kdv_sub_title_product; ?></div><?php } ?>
				<div class="col-md-5">
					<div class="post_product_img">
						<?php echo $add_img_product[0]['kdv_img']['url']; ?>
					</div>
				</div>
				<div class="col-md-7">
					
				</div>
				</article>
				<?php endwhile; // конец цикла ?>
			</div>
			<?php if($kdv_on_sitebar_product == 1){ ?>
			<div class="col-xs-12 col-sm-3 col-md-4 page-sidebar">
				<?php get_sidebar(); ?>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php } get_footer(); ?>