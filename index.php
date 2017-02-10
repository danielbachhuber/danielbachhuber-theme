<?php get_header(); ?>

	<div class="site-content">

		<?php if ( have_posts() ) : ?>

			<div class="row">
				<div class="columns medium-8 medium-centered">

				<?php while( have_posts() ) {
					the_post();
					$index_entry = DB::get_template_part( 'index/' . get_post_format() );
					if ( ! $index_entry ) {
						$index_entry = DB::get_template_part( 'index/standard' );
					}
					echo $index_entry;
				} ?>

				<?php echo DB::get_template_part( 'pagination' ); ?>

				</div>

			</div>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
