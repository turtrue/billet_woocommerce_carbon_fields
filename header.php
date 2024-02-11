<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<base href="/">

	<title><?= wp_get_document_title(); ?></title>
	<meta name="description" content="Снабженец" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicon.png" />
	<!-- <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/preview.jpg" /> -->

	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<div>
			<header class="header">
				<div class="container">
					<div class="header__content">
						<div class="header__logo">
							<a href="/">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-1.jpg" alt="#" />
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-2.jpg" alt="#" />
							</a>
						</div>

						<address class="header__address">
							<div>г. Киров, ул. Базовая, 4, оф.100</div>
							<a href="#">схема проезда</a>
						</address>

						<div class="header__schedule">
							Пн-пт: 8:30-16:30

							<ul class="header__soc">
								<li>
									<a href="#">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/vk.png" alt="#" />
									</a>
								</li>
							</ul>
						</div>

						<ul class="header__phones">
							<li>
								<a href="tel:+78332703579">+7(833)270-35-79</a>
							</li>
							<li>
								<a href="tel:+78332268351">+7(833)226-83-51</a>
							</li>
						</ul>

						<button id="burger-btn" class="burger-btn">
							&#9776;
						</button>
					</div>
				</div>

				<nav class="nav">
					<div class="nav__top">
						<div class="container">
							<ul>
								<li><a href="<?= get_page_link(7);  ?>">Каталог</a></li>
								<li><a href="<?= get_page_link(280);  ?>">О компании</a></li>
								<li><a href="<?= get_page_link(280);  ?>">Контакты</a></li>
							</ul>
						</div>
					</div>

					<div class="nav__bottom">
						<div class="container">
							<ul>
								<li>
									<a href="#">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nav-1.png" alt="#" />
										Изделия из резины и силикона
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nav-2.png" alt="#" />
										АТИ и полимерные материалы
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nav-6.png" alt="#" />
										Соендинения и хомуты
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nav-5.png" alt="#" />
										Метизы
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nav-3.png" alt="#" />
										Инструменты и расходные материалы
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nav-4.png" alt="#" />
										Автоаксессуары и автохимия
									</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</header>

			<nav id="nav-m" class="nav-m">
				<div class="container">
					<ul class="nav-m__menu-list">
						<li><a href="#">Каталог</a></li>
						<li><a href="#">О компании</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>

					<address class="nav-m__address">
						<div>г. Киров, ул. Базовая, 4, оф.100</div>
						<a href="#">схема проезда</a>
					</address>

					<div class="nav-m__schedule">
						Пн-пт: 8:30-16:30

						<ul class="nav-m__soc">
							<li>
								<a href="#">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/vk.png" alt="#" />
								</a>
							</li>
						</ul>
					</div>

					<ul class="nav-m__phones">
						<li>
							<a href="tel:+78332703579">+7(833)270-35-79</a>
						</li>
						<li>
							<a href="tel:+78332268351">+7(833)226-83-51</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>