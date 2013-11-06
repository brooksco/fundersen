<script src="js/jquery.js"></script>
<script>
	$(function(){
		$(".commercial").hover(function() {
			 $(this).off();

			$(this).css("display", "table");
			$(this).find(".commercial-text").css({
				"display" : "table-cell",
				"background-color" : "rgba(255, 255, 255, .85)"
			}).hide().fadeIn(400);

		},


		// After hover over
		function() {

			// $(this).css("display", "block");
			
			$(this).find(".commercial-text").fadeOut(400, function() {

				$(this).css("display", "none");
				$(this).parent().css("display", "block");

			});
		});
	});



// $( "#book" ).fadeIn( "slow", function() {
    // Animation complete
  // });


</script>

<div class="content">

	<div id="susanwiggs" class="commercial">

		<p class="commercial-text">

			Working with Susan Wiggs and her publisher, Harlequin Books, I produced a
			collection of promotional videos for her series The Lakeshore Chronicles. The
			series has sold 5 million copies worldwide.

		</p>

		<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/susan-logo-2.png" /> -->

		<!-- <h2>Susan Wiggs</h2> -->

		

	</div>

	<div id="worldfilm" class="commercial">

		<p class="commercial-text">

			On assignment from Intellect Books, I produced images of set locations for
			feature films shot in and around Prague, Czech Republic.

		</p>

		<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/prague-logo-2.png" /> -->

		<!-- <h2>World Film Locations</h2> -->

	</div>

	<div id="swift" class="commercial">

		<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/swift-logo.png" /> -->

		<!-- <h2>Swift Industries</h2> -->

		<p class="commercial-text">

			Swift Industries is a company built on awesome values and quality
			craftsmanship. Teaming up with a fellow freelancer, we produced videos that
			introduce potential customers to Swift as a brand and their unique process.

		</p>

	</div>

</div>