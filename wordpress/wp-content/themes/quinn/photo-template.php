<?php
/*
Template Name: Horizontal Photos
*/
?>

<?php get_header(); ?>

		<div class="sideways content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); ?>

			<?php endwhile; ?>
			<?php endif; ?>
		</div>

<?php get_footer(); ?>