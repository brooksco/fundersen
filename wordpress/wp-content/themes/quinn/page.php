<?php get_header(); ?>


<?php if ( is_page('Reel') ) : ?>

	<script>
		$(document).ready(function() {

			// Fix for black background to be full height of page
			enquire.register("screen and (min-width: 600px)", {
			    match : function() {
			        $(document.body).css("height", "100%");
			        $('html').css("height", "100%")
			        $(".unit-spacing, .grid, .grid__item, #main").css("height", "100%");
			        $("#byline").hide();
			    },  
			    unmatch : function() {
			       $(document.body).css("height", "auto");
			        $('html').css("height", "auto")
			        $(".unit-spacing, .grid, .grid__item, #main").css("height", "auto");
			        $("#byline").show();
			    }
			});

		});

	</script>

<?php endif; ?>

<?php if ( is_page('Personal') ) : ?>

	<style>

	#byline {
		display: none;
	}

	@media (max-width: 600px) {
		#byline {
			display: block;
		}
	}

	</style>

<?php endif; ?>


<?php if ( is_page('Work') ) : ?>

<?php include 'pages/commercial.php'; ?>

<?php endif; ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); ?>

	<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>