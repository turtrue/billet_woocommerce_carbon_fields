<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main class="about">
	<section class="first-screen">
		<div class="container">
			<div class="first-screen__content">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/contacts.jpg" alt="#" />
				<h1 class="first-screen__title">Контакты</h1>
			</div>
		</div>
	</section>

	<section class="department">
		<div class="container">
			<h2 class="department__title">Отдел продаж</h2>

			<div class="department__content">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-5">
						<ul class="department__nav">
							<li>
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/phone.png" alt="#" />
								<a href="tel:+78332703579">+7(833)270-35-79</a>
							</li>
							<li>
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/phone.png" alt="#" />
								<a href="tel:+78332268351">+7(833)226-83-51</a>
							</li>
							<li>
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mail.png" alt="#" />
								<a href="mailto:kirovrti@mail.ru">kirovrti@mail.ru</a>
							</li>
						</ul>
					</div>

					<div class="col-lg-9 col-md-8 col-sm-7">
						<ul class="department__address">
							<li>
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/map.png" alt="#" />
								<address>
									Российская Федерация 610035, г.
									Киров, ул. Базовая, 4, оф.100
								</address>
							</li>
							<li>
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/calendar.png" alt="#" />Пн-пт  8:30 до 16:30
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="map">
		<div class="container">
			<h2 class="map__title">Как нас найти</h2>

			<div class="map__content">
				<div class="map__frame">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/map-1.jpg" alt="#" />
				</div>

				<div class="map__frame">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/map-2.jpg" alt="#" />
				</div>
			</div>
		</div>
	</section>

	<section class="requisites">
		<div class="container">
			<h2 class="requisites__title">Реквизиты</h2>

			<div class="requisites__content">
				<div class="row g-5">
					<div class="col-md-6">
						<ul class="requisites__list">
							<li>ООО «АЛЬФА СНАБ»</li>
							<li>
								610035, г. Киров, ул. Базовая, 4,
								оф.100
							</li>
							<li>
								Генеральный директор: Копанев
								Дмитрий Николаевич
							</li>
							<li>ОГРН: 1174350010097</li>
							<li>ИНН/КПП: 4345467918 /434501001</li>
							<li>ОКПО: 16114964</li>
							<li>ПЛАТЕЖНЫЕ РЕКВИЗИТЫ</li>
							<li>Р/сч: 40702810700310177285</li>
							<li>
								Банк: ПАО «НОРВИК БАНК» г.Москва
							</li>
							<li>Корр.сч.: 30101810745374525845</li>
							<li>БИК: 044525845</li>
						</ul>
					</div>

					<div class="col-md-6">
						<a class="requisites__btn" href="#" download>
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/file.png" alt="#" />
							Скачать бланк реквизитов
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
