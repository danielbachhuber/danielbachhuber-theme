<article <?php post_class(); ?>>

	<header class="page-header">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php edit_post_link( ' <small><i class="fa fa-pencil"></i></small>' ); ?></h3>
	</header>

	<div class="page-content">
		<?php the_excerpt(); ?>
	</div>

</article>
