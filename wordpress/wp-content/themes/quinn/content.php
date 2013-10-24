<?php
/**
 * The default template for displaying content/blog view
 *
 * @package WordPress
 * @subpackage quinn
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
	<header class="post-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<h2 class="post-time"><?php the_time( get_option( 'date_format' ) ); ?></h2>

		<?php if ( is_single() ) : ?>
		<h1 class="post-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>

	</header>



	<?php the_content(); ?>


<!-- 	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div>
		<?php endif; ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer> -->





</article><!-- #post -->
