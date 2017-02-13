<article <?php post_class(); ?>>

	<?php
		ob_start();
		echo '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
		echo PHP_EOL . PHP_EOL;
		the_excerpt();
		$bits = ob_get_clean();
		$bits = str_replace( array( '<p>', '</p>' ), '', $bits );
		$bits = trim( $bits );
	?>

	<div class="entry-content">
		/**<br>
		<?php foreach( explode( PHP_EOL, $bits ) as $bit ) {
			echo '&nbsp;* ' . $bit . '<br>';
		} ?>
		&nbsp;*/
	</div>

</article>
