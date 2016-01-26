<div id="sidebar">

<!-- <a id="name-link" href="<?php echo site_url(); ?>">
	<h2 id="name">
		Quinn<br>Gundersen
	</h2>
</a> -->

<a id="logo" href="<?php echo site_url(); ?>"> 
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_800.png">
</a>

	<nav id="outer-navbar" class="nav nav--stacked">
		<?php wp_list_pages(array('title_li' => '', 'exclude' => '')); ?>
	</nav>

	<nav id="social-navbar" class="nav nav--stacked">

		<!-- <li><a href="#">YouTube</a></li>
		<li><a href="#">Vimeo</a></li> -->
		<li><a href="http://instagram.com/fundersen">Instagram</a></li>
		<!-- <li><a href="#">Twitter</a></li> -->

	</nav>

</div>