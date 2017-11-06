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

<section id="offer" data-stellar-background-ratio="0.1" style="background: url('http://led.joomlamix.ru/wp-content/uploads/2017/11/slider01.jpg');">
	<div class="bg_offer">
		<div class="container">
			<h2>Наши приимущества</h2>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 header">
					<p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 item">
					<a class="icon" href="">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<h6>Лучшие на рынке</h6>
					</a>
					<p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</p>				
				</div>
				<div class="col-md-4 item">
					<a class="icon" href="">
						<i class="fa fa-tachometer" aria-hidden="true"></i>
						<h6>Скорость работы</h6>
					</a>
					<p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</p>
				</div>
				<div class="col-md-4 item">
					<a class="icon" href="">
						<i class="fa fa-gift" aria-hidden="true"></i>
						<h6>Бонусы</h6>
					</a>
					<p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</p>
				</div>
			</div>		
			<div class="row">
				<div class="col-md-4 item">
					<a class="icon" href="">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h6>Проффесиональная команда</h6>
					</a>
					<p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</p>
				</div>
				<div class="col-md-4 item">
					<a class="icon" href="">
						<i class="fa fa-money" aria-hidden="true"></i>
						<h6>Конкурентные цены</h6>
					</a>
					<p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</p>
				</div>
				<div class="col-md-4 item">
					<a class="icon" href="">
						<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
						<h6>Производство</h6>
					</a>
					<p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="slider_logo">
	<div class="container">
		<div class="row">
			<div id="slider" class="owl-carousel">
				<div class="item"><img src="http://wpindustry.rashedamins.com/wp-content/uploads/2017/08/client-1-1-150x77.png" alt=""></div>
				<div class="item"><img src="http://wpindustry.rashedamins.com/wp-content/uploads/2017/08/logo-1.png" alt=""></div>
				<div class="item"><img src="http://wpindustry.rashedamins.com/wp-content/uploads/2017/08/client-2-1-150x77.png" alt=""></div>
				<div class="item"><img src="http://wpindustry.rashedamins.com/wp-content/uploads/2017/08/logo-2.png" alt=""></div>
				<div class="item"><img src="http://wpindustry.rashedamins.com/wp-content/uploads/2017/08/logo-1.png" alt=""></div>
				<div class="item"><img src="http://wpindustry.rashedamins.com/wp-content/uploads/2017/08/client-2.png" alt=""></div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>