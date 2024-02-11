<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$args = array(
	'taxonomy' => 'product_cat'
);
$terms = get_terms($args);
?>

<aside class="sidebar">
	<?php $firstTerm = true; ?>

	<?php foreach ($terms as $term) : ?>
		<div class="dropdown">
			<div class="dropdown__toggle">
				<a href="<?= esc_url(get_term_link($term)); ?>"><?= $term->name; ?></a>
				<button class="dropdown__toggle-btn <?= $firstTerm ? 'open' : '';  ?>"></button>
			</div>

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

			<nav class="dropdown__body <?= $firstTerm ? 'open' : '';  ?>">
				<ul>
					<?php while ($query->have_posts()) : ?>
						<?php $query->the_post(); ?>

						<li>
							<a href="<?= get_permalink($post); ?>">
								<?= the_title(); ?>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			</nav>
		</div>

		<?php $firstTerm = false; ?>
	<?php endforeach ?>
</aside>