<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="site-header">
		<div class="row">
			<div class="columns">
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">Daniel Bachhuber</a> <span class="social"><a href="https://twitter.com/runcommand"><i class="fa fa-twitter"></i></a> <a href="https://github.com/danielbachhuber"><i class="fa fa-github"></i></a></span>
			</div>
		</div>
	</header>

