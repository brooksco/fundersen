<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" /> -->

	<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body>

	<div class="grid">
		<div class="unit-spacing">
			<div class="grid__item one-fifth palm-one-whole color-one">

				<!-- Sidebar -->
				<?php get_sidebar(); ?>
				<!-- End Sidebar -->

			</div><div class="grid__item four-fifths palm-one-whole color-three">

			<div id="main">