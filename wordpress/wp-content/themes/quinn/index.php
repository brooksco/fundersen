<?php get_header(); ?>


<!-- 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
 -->


<!-- temporary for development -->

<?php if ( is_page('Reel') ) {

include 'pages/reel.php'; 

} ?>

<?php if ( is_page('Personal') ) {

include 'pages/personal.php'; 

} ?>

<?php if ( is_page('Commercial') ) {

include 'pages/commercial.php'; 

} ?>

<?php if ( is_page('Published') ) {

include 'pages/published.php'; 

} ?>

<?php if ( is_page('About') ) {

the_content();

} ?>



<?php get_footer(); ?>