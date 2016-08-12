<?php get_header(); ?>

	<div class="site-content">

		<div class="row">
			<div class="columns medium-8 medium-centered">
			
				<article>
					<header class="page-header">
						<h2>Hi, I'm Daniel Bachhuber.</h2>
					</header>
					
					<div class="page-content">
						
						<p>Proud husband and father of two, Principal at <a href="https://handbuilt.co">Hand Built</a>, founder of <a href="https://runcommand.io">runcommand</a> and <a href="https://toothpress.com">ToothPress</a>, maintainer of <a href="https://wp-cli.org/">WP-CLI</a>, and a prolific open source contributor.</p>

						<p><strong>Looking for technology leadership you can trust?</strong></p>
						
						<p>My roots are WordPress and publishing, and I have experience with pretty much everything related to web development: React, Node, Vagrant, Nginx, PHP, Python, Redis, Memcached, SCSS, SAML, YAML, devops, testing infrastructure, code review, product definition, etc. I'm uniquely qualified to match technologies to business needs.</p>
						
						<p><strong>Want to connect?</strong></p>
						
						<p>I'm on <i class="fa fa-twitter"></i> <a href="https://twitter.com/danielbachhuber">Twitter</a>, <i class="fa fa-github"></i> <a href="https://github.com/danielbachhuber">Github</a> and <i class="fa fa-linkedin"></i> <a href="https://www.linkedin.com/in/danielbachhuber">LinkedIn</a>. You can also email me at <a href="mailto:daniel@handbuilt.co">daniel@handbuilt.co</a></p>
						
						<p><strong>Curious as to what I've been up to?</strong></p>
						
						<?php
							$feed_items = fetch_feed( 'https://handbuilt.co/feed/' );
							$feed_items = is_wp_error( $feed_items ) ? array() : $feed_items->get_items( 0, 3 );
						?>
						<p>Check out the <a href="https://handbuilt.co/blog/">Hand Built blog</a> for profressional updates<?php echo $feed_items ? ':' : '.'; ?></p>

						<?php if ( ! empty( $feed_items ) ) : ?>
							<ul>
								<?php foreach( $feed_items as $feed_item ) :
									error_log( var_export( json_encode( $feed_item ), true ) );
								?>
									<li><a href="<?php echo esc_url( $feed_item->get_permalink() ); ?>"><?php echo $feed_item->get_title(); ?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
						
						<?php
							$feed_items = fetch_feed( 'https://danielbachhuber.com/feed/' );
							$feed_items = is_wp_error( $feed_items ) ? array() : $feed_items->get_items( 0, 3 );
						?>
						
						<p>Or, follow <a href="<?php echo home_url( 'blog/' ); ?>">my personal blog</a> for family adventures<?php echo $feed_items ? ':' : '.'; ?></p>
						
						<?php if ( ! empty( $feed_items ) ) : ?>
							<ul>
								<?php foreach( $feed_items as $feed_item ) :
									error_log( var_export( json_encode( $feed_item ), true ) );
								?>
									<li><a href="<?php echo esc_url( $feed_item->get_permalink() ); ?>"><?php echo $feed_item->get_title(); ?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
						
						<p>Thanks for taking the time to stop by.</p>
						

					</div>
					
				</article>


			</div>

		</div>

	</div>

<?php get_footer(); ?>
