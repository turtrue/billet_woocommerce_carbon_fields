<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main class="category">
	<div class="container">
		<h1 class="category__title"><?php single_term_title(); ?></h1>

		<div class="category__content">
			<?php get_sidebar(); ?>

			<div class="category__products">
				<div class="row g-5">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<div class="col-md-4 col-sm-6">
								<section class="category__product">
									<img src="<?= get_the_post_thumbnail_url($post); ?>" alt="<?php the_title(); ?>" />

									<h3 class="category__product-title">
										<a href="<?= get_permalink($post); ?>"><?php the_title(); ?></a>
									</h3>
								</section>
							</div>
						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>

				<div class="category__info">
					<p>
						Резинотехнические изделия - это изделия,
						изготовленные из резины или резиноподобных
						материалов. Они используются в различных
						отраслях промышленности, таких как
						автомобильная, медицинская, строительная,
						электротехническая и другие.
						Резинотехнические изделия могут быть
						представлены в виде уплотнительных колец,
						прокладок, ремней, шлангов, рукавов,
						диафрагм и т.д. Они обладают высокой
						устойчивостью к износу, агрессивным средам,
						высоким и низким температурам, а также
						хорошими амортизационными свойствами.
						Резинотехнические изделия широко применяются
						в производстве автомобилей, медицинском
						оборудовании, гидравлических системах,
						электрооборудовании и других областях.
					</p>
				</div>

				<div class="category__faq">
					<div class="dropdown">
						<div class="dropdown__toggle">
							Какие виды резинотехнических изделий
							существуют и для каких целей они
							используются?
							<button class="dropdown__toggle-btn"></button>
						</div>

						<div class="dropdown__body">
							<p>
								Lorem ipsum dolor sit amet
								consectetur adipisicing elit.
								Reprehenderit sed est molestias
								nostrum. Harum perferendis neque
								inventore molestias quam, quisquam
								repudiandae nostrum magni nulla
								dolores, praesentium totam saepe,
								voluptatibus nihil.
							</p>
						</div>
					</div>

					<div class="dropdown">
						<div class="dropdown__toggle">
							В каких отраслях промышленности и сферах
							деятельности применяются
							резинотехнические изделия?
							<button class="dropdown__toggle-btn"></button>
						</div>

						<div class="dropdown__body">
							<p>
								Lorem ipsum dolor sit amet
								consectetur adipisicing elit.
								Reprehenderit sed est molestias
								nostrum. Harum perferendis neque
								inventore molestias quam, quisquam
								repudiandae nostrum magni nulla
								dolores, praesentium totam saepe,
								voluptatibus nihil.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php

get_footer();
