<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage quinn
 */

get_header(); ?>


		<div>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content' ); ?>

			<?php endwhile; ?>

		</div>


<?php get_footer(); ?>