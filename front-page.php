<?php get_header(); ?>
<section>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
		<?php the_content(); // контент ?>
	</article>
<?php endwhile; // конец цикла ?>
</section>
<?php get_footer(); ?>