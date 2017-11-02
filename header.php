<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('/'); ?></title>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="header" class="header-skin-transparent">
    	<div id="topbar-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="topbar-left">
							<ul class="list-inline">
								<li>
									<span class="topbar-label">
										<i class="fa  fa-home"></i>
									</span>
									<span class="topbar-hightlight">Москва Гагарина 308</span>
								</li>
								<li>
									<span class="topbar-label">
										<i class="fa fa-envelope-o"></i>
									</span>
									<span class="topbar-hightlight">info@ledtechno.ru</span>
								</li>			
							</ul>
						</div>			
					</div>
					<div class="col-md-4 col-sm-4 hidden-xs">			
						<div class="topbar-right text-right">
							<div class="st-social">
								<ul class="list-inline">
									<li>
										<a class="fa fa-facebook" href="#" title="Facebook" target="_blank"></a>
									</li>
									<li>
										<a class="fa fa-twitter" href="#" title="Twitter" target="_blank"></a>
									</li>
									<li>
										<a class="fa fa-linkedin" href="#" title="LinkedIn" target="_blank"></a>
									</li>
								</ul>
							</div>			
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div id="header-wrapper" class="header-stick">	
			<div class="container">
				<div class="row">			
					<div class="col-md-12">				
						<div class="header-container">			
							<div class="header-logo">
							<a class="st-logo" href="" title="">
								<img class="logo-standart" src="http://themes.slicetheme.com/skypress/wp-content/themes/skypress/assets/images/logo-transparent.png" alt="">
							</a>					
							</div>
							<div class="header-right">
								<div class="header-top">
									<div class="header-left-info">
										<ul class="list-inline">
											<li>
												<span class="header-label">
													<i class="fa fa-phone"></i>
												</span>
												<span class="header-hightlight">
													<small>Наш телефон</small>
													<strong> 8 (495) 935-81-15</strong>
												</span>
											</li>
											<li>
												<span class="header-label">
													<i class="fa  fa-clock-o"></i>
												</span>
												<span class="header-hightlight">
													<small>Время работы</small>
													<strong>Пн - Пт: 10:00 - 17:00</strong>
												</span>
											</li>								
										</ul>
									</div>
									<div class="header-right-info">
										<a class="header-button" href="#">Обратный звонок</a>							
									</div>
								</div>						
								<div class="header-bottom">
									<nav id="primary-nav">
										<div class="menu-primary-menu-container">
										<?php
											$args = array('theme_location' => 'top', 'container'=> 'div', 'menu_class' => 'primary-menu list-inline', 'menu_id' => 'primary-menu', 'container_class' => 'menu-primary-menu-container');
											wp_nav_menu($args);
										?>
										</div>							
									</nav>					
									<div class="header-right-inner">
										<div class="header-search">
											<div class="st-searchform">
												<div class="search-form">
													<form action="" method="get">
														<input type="text" name="s" id="s" placeholder="Поиск...">
													</form>
												</div>
											</div>
											<div class="search-icon">
												<i class="fa fa-search"></i>
											</div>
										</div>							
									</div>						
								</div>					
							</div>					
						</div>				
					</div>		
				</div>
			</div>	
		</div>
	</header>


