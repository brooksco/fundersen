<script src="js/jquery.js"></script>
<script>
	$(function(){
		$("#personal").wrapInner("<table cellspacing='30'><tr>");
		$("#personal-image").wrap("<td>");
	});
</script>


<div id="personal" class="content">

	<div class="personal-image">

		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/breadcat.jpg" />

		<p>Breadcat.</p>

	</div>

	<div class="personal-image">

		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/odin.jpg" />

		<p>Odin.</p>

	</div>

	<div class="personal-image">

		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rainier.jpg" />

		<p>Rainier, Seattle.</p>

	</div>

	

</div>
