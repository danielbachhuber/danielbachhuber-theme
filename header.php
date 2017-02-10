<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

<?php wp_head(); ?>

<?php echo DB::get_template_part( 'json-ld' ); ?>

</head>

<body <?php body_class(); ?>>

	<header class="site-header">
		<div class="row">
			<div class="columns medium-8 medium-centered">
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">Daniel Bachhuber</a> <span class="social"><a href="https://twitter.com/danielbachhuber"><i class="fa fa-twitter"></i></a> <a href="https://github.com/danielbachhuber"><i class="fa fa-github"></i></a></span>
				<div class="site-description">Proud husband and father of two &bull; <a href="https://handbuilt.co">Hand Built</a> &bull; <a href="https://wp-cli.org/">WP-CLI</a></div>
			</div>
		</div>
	</header>
