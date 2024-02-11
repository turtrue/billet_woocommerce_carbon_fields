<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();

// get_pr($post);
?>

<main class="category">
	<div class="container">

		<div class="category__content">
			<?php get_sidebar(); ?>

			<h1 class="category__title"><?php the_title(); ?></h1>
		</div>
	</div>
</main>

<?php

get_footer();
