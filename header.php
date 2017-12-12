<?php
	if (defined( 'FW' )){
		$kdv_main_adress = fw_get_db_settings_option('kdv_main_adress');
		$kdv_header_mail = fw_get_db_settings_option('kdv_header_mail');
		$kdv_header_phone = fw_get_db_settings_option('kdv_header_phone');
		$kdv_slogan_clock = fw_get_db_settings_option('kdv_slogan_clock');
		$kdv_header_back_tell = fw_get_db_settings_option('kdv_header_back_tell');
		$kdv_logo_header = fw_get_db_settings_option('kdv_logo_header');
	}else{
		$kdv_main_adress = 'г. Железнодорожный ул. Гагарина';
		$kdv_header_mail = 'test@test.ru';
		$kdv_header_phone = '+7 (926) 156-78-91';
		$kdv_slogan_clock = 'Пн - Пт: 10:00 - 17:00';
		$kdv_header_back_tell = 1;
		$kdv_logo_header = '';
	}
?>
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
<body <?php body_class(); ?> id="fromTop">
	<header id="header" class="header-skin-transparent">
    	<div id="topbar-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="topbar-left">
							<ul class="list-inline">
								<?php if($kdv_main_adress){ ?>
								<li>
									<span class="topbar-label">
										<i class="fa  fa-home"></i>
									</span>
									<span class="topbar-hightlight"><?php echo $kdv_main_adress; ?></span>
								</li>
								<?php }if($kdv_header_mail){ ?>
								<li>
									<span class="topbar-label">
										<i class="fa fa-envelope-o"></i>
									</span>
									<span class="topbar-hightlight"><?php echo $kdv_header_mail; ?></span>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 hidden-xs">
						<div class="topbar-right text-right">
							<?php
								$args = array('theme_location' => 'follow_me', 'container'=> 'div', 'menu_class' => 'list-inline', 'menu_id' => 'primary-menu', 'container_class' => 'st-social');
								wp_nav_menu($args);
							?>
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
							<a class="st-logo" href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
								<img class="logo-standart" src="<?php echo $kdv_logo_header['url']; ?>" alt="<?php bloginfo( 'name' ); ?>">
							</a>
							</div>
							<div class="header-right">
								<div class="header-top">
									<div class="header-left-info">
										<ul class="list-inline">
											<?php if($kdv_header_phone){ ?>
											<li>
												<span class="header-label">
													<i class="fa fa-phone"></i>
												</span>
												<span class="header-hightlight">
													<small>Наш телефон</small>
													<strong><?php echo $kdv_header_phone; ?></strong>
												</span>
											</li>
											<?php } if($kdv_slogan_clock){ ?>
											<li>
												<span class="header-label">
													<i class="fa  fa-clock-o"></i>
												</span>
												<span class="header-hightlight">
													<small>Время работы</small>
													<strong><?php echo $kdv_slogan_clock; ?></strong>
												</span>
											</li>
											<?php } ?>
										</ul>
									</div>
									<?php if($kdv_header_back_tell == 1){ ?>
									<div class="header-right-info">
										<a class="header-button" href="#">Обратный звонок</a>
									</div>
									<?php } ?>
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


