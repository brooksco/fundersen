<?php get_header(); ?>



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

// the_content();

	include 'pages/about.php'; 

} ?>



<?php get_footer(); ?>