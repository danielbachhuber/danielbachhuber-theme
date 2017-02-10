<?php get_header(); ?>

	<div class="site-content">

		<?php if ( have_posts() ) : ?>

			<div class="row">
				<div class="columns medium-8 medium-centered">

				<?php while( have_posts() ) : the_post(); ?>

					<article <?php post_class(); ?>>

						<header class="page-header">
							<h1><?php the_title(); ?><?php edit_post_link( ' <small><i class="fa fa-pencil"></i></small>' ); ?></h1>
						</header>

						<?php echo DB::get_template_part( 'index/entry-meta' ); ?>

						<div class="entry-content">
							<?php the_content(); ?>
							<?php if ( get_comments_number() ) {
								comments_template();
							} ?>
						</div>

					</article>

				<?php endwhile; ?>

				</div>

			</div>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
