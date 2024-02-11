<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$args = array(
	'taxonomy' => 'product_cat',
	'include'    => array(43, 31, 30, 26, 25, 20, 27, 17, 29, 21, 19, 28, 22),
	'orderby' => 'include'
);
$terms = get_terms($args);

get_header();
?>

<main class="home">
	<section class="first-screen">
		<div class="container">
			<div class="first-screen__content">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/first-screen.jpg" alt="#" />
				<h1 class="first-screen__title">
					Изготовление и ремонт РВД
				</h1>
			</div>
		</div>
	</section>

	<section class="h-catalog">
		<div class="container">
			<h2 class="h-catalog__title">Каталог продукции</h2>

			<div class="h-catalog__content">
				<div class="row g-5">
					<?php $firstTerm = true; ?>
					<?php $columns = array('12', '6', '6', '4', '4', '4', '6', '6', '4', '4', '4', '6', '6'); ?>
					<?php $termIndex = 0; ?>

					<?php foreach ($terms as $term) : ?>
						<div class="col-md-<?= $columns[$termIndex]; ?>">
							<?php $termIndex++; ?>

							<section class="h-catalog__item">
								<!-- <?= woocommerce_subcategory_thumbnail($term); ?> -->
								<h3 class="h-catalog__item-title">
									<a href="<?= esc_url(get_term_link($term)); ?>"><?= $term->name; ?></a>
								</h3>

								<?php
								$query = new WP_Query(array(
									"post_type"      => "product",
									"post_status"    => "publish",
									"posts_per_page" => -1,
									"tax_query"     => array(
										array(
											"taxonomy"  => "product_cat",
											"field"     => "id",
											"terms"     => $term->term_id
										)
									)
								));
								?>

								<?php if ($term->term_id == 43 || $term->term_id == 31 || $term->term_id == 30 || $term->term_id == 17) : ?>
									<ul class="h-catalog__item-list">
										<?php if ($firstTerm) : ?>
											<?php $postIndex = 0 ?>

											<?php while ($query->have_posts()) : ?>
												<?php $query->the_post(); ?>
												<?php $postIndex++; ?>

												<?php if ($postIndex == 1 || $postIndex == 5 || $postIndex == 9) echo '<li>'; ?>

												<a href="<?= get_permalink($post); ?>">
													<?= the_title(); ?>
												</a>

												<?php if ($postIndex == 4 || $postIndex == 8 || $postIndex == 12) echo '</li>'; ?>
											<?php endwhile; ?>
										<?php else : ?>
											<li>
												<?php while ($query->have_posts()) : ?>
													<?php $query->the_post(); ?>

													<a href="<?= get_permalink($post); ?>">
														<?= the_title(); ?>
													</a>
												<?php endwhile; ?>
											</li>
										<?php endif; ?>
									</ul>

									<?php wp_reset_postdata(); ?>
								<?php endif; ?>
							</section>
						</div>

						<?php $firstTerm = false; ?>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>

	<section class="steps">
		<div class="container">
			<h2 class="steps__title">
				Три шага до получения товара
			</h2>

			<div class="steps__content">
				<div class="row g-3">
					<div class="col-md-4">
						<section class="steps__item">
							<div class="steps__item-text">
								<h3>
									Три шага до получения товара
								</h3>
								<p>
									Выбираете товар из ассортимента
									нашего магазина или онлайн
									каталога
								</p>
							</div>

							<div class="steps__item-img">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/steps-1.png" alt="#" />
							</div>
						</section>
					</div>

					<div class="col-md-4">
						<section class="steps__item">
							<div class="steps__item-text">
								<h4>Заявка</h4>
								<p>
									Оставляете заявку менеджеру по
									телефону. Вам подскажут цену и
									наличие
								</p>
							</div>

							<div class="steps__item-img">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/steps-2.png" alt="#" />
							</div>
						</section>
					</div>

					<div class="col-md-4">
						<section class="steps__item">
							<div class="steps__item-text">
								<h4>Самовывоз с нашего склада</h4>
								<p>
									Менеджер сообщит когда товар
									будет готов к выдаче и Вы
									сможете забрать его со склада
									магазина, предварительно
									согласовав время и условия
									самовывоза
								</p>
							</div>

							<div class="steps__item-img">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/steps-3.png" alt="#" />
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="h-about">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="h-about__item">
						<h2 class="h-about__title">О компании</h2>

						<p>
							Магазин “Снабженец” работает с 2010
							года, изготавливаем рукава высокого
							давления и производим ремонт рукавов
							РВД, в нашем магазине вы найдете большой
							выбор резинотехнических изделий,
							инструмента, силиконовых рукавов и
							патрубков. Снабжаем различные фирмы и
							заводы нашего города.
						</p>

						<p>
							<b>Снабжаем фирмы и заводы города
								Кирова</b>
						</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="h-about__item">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/h-about.jpg" alt="#" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="form">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="form__img">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/form.png" alt="#" />
					</div>
				</div>

				<div class="col-md-10">
					<form action="/" method="POST">
						<h2 class="form__title">
							Если у вас есть вопросы или нужна помощь
							в подборе товара, оставьте заявку и мы
							дадим подробную консультацию
						</h2>

						<fieldset>
							<div class="form__group">
								<label for="name">Ваше имя</label>
								<input type="text" name="name" id="name" />
							</div>
							<div class="form__group">
								<label for="phone">Ваш телефон</label>
								<input type="text" name="phone" id="phone" />
							</div>
						</fieldset>

						<textarea name="comment" rows="2" placeholder="Комментарий (по желанию)"></textarea>

						<input type="submit" value="Отправить заявку" />

						<fieldset class="form__privacy">
							<input type="radio" name="privacy" />
							<span>
								Я соглашаюсь на обработку
								персональных данных и принимаю
								условия<br />политики обработки
								персональных данных.
							</span>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
