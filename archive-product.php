<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}


$args = array(
	'taxonomy' => 'product_cat'
);
$terms = get_terms($args);

get_header();
?>

<main class="catalog">
	<div class="container">
		<h1 class="catalog__title">Каталог</h1>

		<div class="catalog__list">
			<div class="row g-5">
				<?php foreach ($terms as $term) : ?>
					<?php $thumb_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true); ?>

					<div class="col-md-4 col-sm-6">
						<section class="catalog__item">
							<div class="catalog__item-img">
								<img src="<?= get_permalink($thumb_id); ?>" alt="<?= $term->name; ?>" />
							</div>

							<h3 class="catalog__item-title">
								<a href="<?= esc_url(get_term_link($term)); ?>"><?= $term->name; ?></a>
							</h3>

							<?php
							$query = new WP_Query(array(
								"post_type"      => "product",
								"post_status"    => "publish",
								"posts_per_page" => -1,
								"order" => 'ASC',
								"tax_query"     => array(
									array(
										"taxonomy"  => "product_cat",
										"field"     => "id",
										"terms"     => $term->term_id
									)
								)
							));
							?>

							<ul class="catalog__item-list">
								<?php while ($query->have_posts()) : ?>
									<?php $query->the_post(); ?>

									<li>
										<a href="<?= get_permalink($post); ?>">
											<?= the_title(); ?>
										</a>
									</li>
								<?php endwhile; ?>
							</ul>
						</section>
					</div>
				<?php endforeach ?>
			</div>
		</div>

		<div class="catalog__info">
			<p>
				Добро пожаловать в наш магазин товаров РВД,
				резинотехнических изделий, автохимии и
				автоаксессуаров в Кирове!
			</p>
			<p>
				Мы предлагаем широкий ассортимент товаров для
				автомобилистов и не только. У нас вы найдете:
			</p>

			<ul>
				<li>
					- РВД (ручные и машинные) различных диаметров и
					длин, для всех типов транспортных средств.
				</li>
				<li>
					- Резинотехнические изделия: уплотнительные
					кольца, прокладки, резиновые шланги, ремни и
					многое другое.
				</li>
				<li>
					- Автохимия: масла, жидкости для тормозной
					системы, охлаждающие жидкости, антифризы, смазки
					и другие товары для обслуживания автомобиля.
				</li>
				<li>- Автоаксессуары и многое другое.</li>
			</ul>

			<p>
				В нашем магазине вы найдете товары от ведущих
				производителей по доступным ценам. Мы гарантируем
				высокое качество продукции.
			</p>
			<p>
				Если у вас возникли вопросы по выбору товара или
				оформлению заказа, наши специалисты всегда готовы
				помочь вам. Мы ценим каждого клиента и стремимся
				сделать покупки у нас максимально комфортными и
				выгодными.
			</p>
			<p>
				Посетите наш магазин и убедитесь сами в качестве
				наших товаров и сервисе!
			</p>
		</div>
	</div>
</main>

<?php
get_footer();
