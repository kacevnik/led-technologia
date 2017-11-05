<?php get_header(); ?>
<section>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
		<?php the_content(); // контент ?>
	</article>
<?php endwhile; // конец цикла ?>
</section>
<section class="section " style="padding:60px 0;">
    <div class="container">
		<div class="row row-tb-15">
			<div class="col-xs-12">    
				<div class="row mb-10 pb-5">
    				<div class="col-md-12 col-xs-center t-center mb-30">
        				<h2 class="section-title mb-20 font-22 t-uppercase">Последние новости</h2>
        				<div class="line"></div>
    				</div>
				</div>
			</div>
		</div>
		<div class="row row-tb-15">
			<div class="col-xs-12">
    			<div class="row row-tb-10 pt-0 blog-area blog-grid row-md-cell">
					<div class="col-md-6 entry-details prl-0 mb-15 blog-item-for-height">
						<figure class="entry-img embed-responsive embed-responsive-16by9 col-absolute-cell"  style="background-image: url(http://themes.kapp.rw/grandpoza/wp-content/uploads/2017/09/news_01.jpg); background-size: cover;">
        				</figure>
        				<div class="entry-content">
            				<span class="is-block mb-15">
                				<span class="mr-10">
                    				<i class="fa fa-clock-o mr-5"></i>Сеньтябрь 11, 2017                
                    			</span>
                				<span>
                    				<i class="fa fa-comment-o mr-5"></i> 0 Комментарии                
                    			</span>
            				</span>
            				<h2 class="entry-title h3 mb-10">
                				<a href="">Превосходство LED технологий в освещении не желых помещений</a>
            				</h2>
        				</div>
    				</div>
    				<!--news item -->
					<div class="col-md-6 entry-list pt-md-0">
                		<div class="row row-rl-5 entry-list-item mb-20">
							<div class="col-xs-5">
                				<figure class="entry-img">
                    				<img src="http://themes.kapp.rw/grandpoza/wp-content/uploads/2017/09/house_orange-400x300.jpg" alt="">
                				</figure>
            				</div>
            				<div class="col-xs-7">
                				<div class="entry-content">
                    				<h2 class="entry-title-item mb-10">
                        				<a href="">Превосходство LED технологий в освещении не желых помещений</a>
                    				</h2>
                    				<span class="entry-info color-dark is-block mb-15 hidden-xs">
                        				<span class="mr-10">
                            				<i class="fa fa-clock-o mr-5"></i>Сеньтябрь 11, 2017
                            			</span>
                        				<span>
                            				<i class="fa fa-comment-o mr-5"></i>  0 Комментарии                        
                            			</span>
                    				</span>
                    				<p class="color-mid mb-0 hidden-xs">
                        			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in lorem sed ...                    
                        			</p>
                				</div>
            				</div>
        				</div>
					</div>
					<!--end news item -->    				
					<!--news item -->
					<div class="col-md-6 entry-list pt-md-0">
                		<div class="row row-rl-5 entry-list-item mb-20">
							<div class="col-xs-5">
                				<figure class="entry-img">
                    				<img src="http://themes.kapp.rw/grandpoza/wp-content/uploads/2017/09/house-400x300.jpg" alt="">
                				</figure>
            				</div>
            				<div class="col-xs-7">
                				<div class="entry-content">
                    				<h2 class="entry-title-item mb-10">
                        				<a href="">Превосходство LED технологий в освещении не желых помещений</a>
                    				</h2>
                    				<span class="entry-info color-dark is-block mb-15 hidden-xs">
                        				<span class="mr-10">
                            				<i class="fa fa-clock-o mr-5"></i>Сеньтябрь 11, 2017
                            			</span>
                        				<span>
                            				<i class="fa fa-comment-o mr-5"></i>  0 Комментарии                        
                            			</span>
                    				</span>
                    				<p class="color-mid mb-0 hidden-xs">
                        			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in lorem sed ...                    
                        			</p>
                				</div>
            				</div>
        				</div>
					</div>
					<!--end news item -->    				
					<!--news item -->
					<div class="col-md-6 entry-list pt-md-0">
                		<div class="row row-rl-5 entry-list-item mb-20">
							<div class="col-xs-5">
                				<figure class="entry-img">
                    				<img src="http://themes.kapp.rw/grandpoza/wp-content/uploads/2017/09/fact_bg-400x300.jpg" alt="">
                				</figure>
            				</div>
            				<div class="col-xs-7">
                				<div class="entry-content">
                    				<h2 class="entry-title-item mb-10">
                        				<a href="">Превосходство LED технологий в освещении не желых помещений</a>
                    				</h2>
                    				<span class="entry-info color-dark is-block mb-15 hidden-xs">
                        				<span class="mr-10">
                            				<i class="fa fa-clock-o mr-5"></i>Сеньтябрь 11, 2017
                            			</span>
                        				<span>
                            				<i class="fa fa-comment-o mr-5"></i>  0 Комментарии                        
                            			</span>
                    				</span>
                    				<p class="color-mid mb-0 hidden-xs">
                        			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in lorem sed ...                    
                        			</p>
                				</div>
            				</div>
        				</div>
					</div>
					<!--end news item -->
    			</div>
				<div class="mt-40 t-center">
    				<a href="" class="header-button">
        				Все новости        
        				<i class="fa fa-long-arrow-right ml-10"></i>
    				</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="offer">
	<div class="container">
		<h2>Наши приимущества</h2>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<p><i></i></p>
				<p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
		</div>		
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>