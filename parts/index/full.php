<article <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<?php echo DB::get_template_part( 'index/entry-meta' ); ?>

</article>
