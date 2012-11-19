<?php get_header(); ?>
<?php query_posts( 'cat=7' );?>
<div id="corps" class="portfolio">
	<section id="slideShow">
		<?php include('slide.php'); ?>
	</section>
<div id="portfolio">
<?php  $work_types=get_terms('techniques');
				foreach($work_types as $work_type):?>
				<section id="$work_type->name" class="pannel">
				<?php $cat = $work_type->name; ?>
				<a name="<?php echo $cat; ?>"><?php echo $cat; ?></a>
				</section>
				<section class="galery">
					<?php
					$args = array( 'post_type' => 'works', 'techniques' => $cat);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php $url=get_post_custom_values('url');?>
					<article>
						<a href="<?php echo $url[0];?>"><?php the_post_thumbnail(); ?></a>
						<p class="titre"><?php the_title(); ?></p>
						<p class="description"><?php the_content(); ?></p>
						<p class="date">ajouté le <?php echo get_the_date(); ?></p>  
					</article>
				<?php endwhile; ?>
				</section>
			<?php endforeach; ?>
			</section>
</div>
<script src="<?php bloginfo('stylesheet_directory');?>/script/lightbox.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/script/jquery.js"></script>
<?php get_footer(); ?>
<!-- <?php echo get_post_custom_values($url);?> -->