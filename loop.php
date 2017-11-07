	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
		<div class="image">
			<?php if ( has_post_thumbnail() ) the_post_thumbnail('full'); // выводим миниатюру поста, если есть ?>
			<span class="meta">
				<?php the_time('F j, Y'); ?>
			</span>
		</div>
		<div class="content_item">
			<header>
				<h4>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h4>
			</header>
			<div class="content"><?php the_excerpt(); ?></div>
			<footer>
				<a href="<?php the_permalink(); ?>" class="header-button">Подробнее ...</a>
			</footer>
		</div>
	</article>