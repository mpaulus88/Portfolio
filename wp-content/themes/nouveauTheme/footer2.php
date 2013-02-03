		<footer id="main-footer">
				<section id="footer-art">
					<h1 class="hidden">footer</h1>
					<?php
					$args = array( 'post_type' => 'foot', 'order'=>'ASC');
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<article>
					<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
				</section> 
				<section id="ressoc">
					<h4>REJOIGNEZ MOI SUR</h4>
					<?php
						$args = array( 'post_type' => 'ressoc', 'order'=>'ASC'); ?>
						<ul>
						<?php	
						$loop = new WP_Query( $args ); 
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<?php $url=get_post_custom_values('url');?>
					<li>
						<a href="<?php echo $url[0];?>"><?php the_title(); ?></a>
						<?php the_post_thumbnail('post-thumbnail',array('class'=>'ressoc')); ?>
					</li>
				<?php endwhile; ?>
				</ul>
				</section>
				<p id="copyright">&copy; 20011-2012 Martin Paulus. All Rights Reserved</p>
			</footer>
