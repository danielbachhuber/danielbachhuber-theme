<article <?php post_class(); ?>>

	<header class="entry-header">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<?php echo DB::get_template_part( 'content/entry-meta' ); ?>

</article>
