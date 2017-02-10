<?php get_header(); ?>

	<div class="site-content">

		<?php if ( have_posts() ) : ?>

			<div class="row">
				<div class="columns medium-8 medium-centered">

				<?php while( have_posts() ) {
					the_post();
					if ( in_array( get_post_format(), array( 'status', 'quote', 'aside' ), true ) ) {
						echo DB::get_template_part( 'content/short' );
					} else {
						echo DB::get_template_part( 'content/full' );
					}
					if ( get_comments_number() ) {
						comments_template();
					}
				} ?>

				</div>

			</div>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
