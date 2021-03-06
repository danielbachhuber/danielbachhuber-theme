	<footer class="site-footer">

		<div class="row">
			<div class="columns text-center">
				<div class="made-by">
					<small>Made in <img alt="Tualatin, Oregon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/oregon.svg' ); ?>" /> &bull; <a href="https://tinyletter.com/danielbachhuber"><i class="fa fa-newspaper-o"></i> TinyLetter</a> &bull; <a href="https://github.com/danielbachhuber"><i class="fa fa-github"></i> Github</a> &bull; <a href="https://twitter.com/danielbachhuber"><i class="fa fa-twitter"></i> Twitter</a>
				</div>
			</div>
		</div>

	</footer>

	<?php wp_footer(); ?>

	<?php if ( 'danielbachhuber.com' === parse_url( home_url(), PHP_URL_HOST )
		&& ! current_user_can( 'manage_options' ) ) : ?>
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-81214353-1', 'auto');
		ga('send', 'pageview');

		</script>
	<?php endif; ?>

</body>
</html>
