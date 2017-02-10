<?php get_header(); ?>

	<div class="site-content">

		<?php if ( have_posts() ) : ?>

			<div class="row">
				<div class="columns medium-8 medium-centered">

				<?php if ( is_tag() ) : ?>
					<header class="page-header">
						<h1><?php echo sprintf( 'Tagged: %s', get_queried_object()->name ); ?></h1>
					</header>
				<?php endif; ?>

				<?php while( have_posts() ) {
					the_post();
					if ( in_array( get_post_format(), array( 'status', 'quote', 'aside' ), true ) ) {
						echo DB::get_template_part( 'index/full' );
					} else {
						echo DB::get_template_part( 'index/excerpt' );
					}
				} ?>

				<?php echo DB::get_template_part( 'pagination' ); ?>

				</div>

			</div>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
