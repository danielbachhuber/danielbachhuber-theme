<article <?php post_class(); ?>>

	<header class="entry-header">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</header>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>

	<?php echo DB::get_template_part( 'content/entry-meta' ); ?>

</article>
