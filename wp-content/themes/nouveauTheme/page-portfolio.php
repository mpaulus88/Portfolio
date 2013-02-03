<?php get_header(); ?>
<?php query_posts( 'cat=7' );?>
<div id="corps" class="portfolio">
	<section id="slideShow">
		<h1 class="hidden">Slideshow</h1>
		<?php include('slide.php'); ?>
	</section>
<div id="portfolio">
<?php  $work_types=get_terms('techniques');
				foreach($work_types as $work_type):?>
				<?php $cat = $work_type->name; ?>
				<section id="s<?php echo $cat; ?>" class="pannel">
					<a id="<?php echo $cat; ?>">
					<h1><?php echo $cat; ?></h1></a>
				</section>
				<section class="galery">
					<h1 class="hidden">Galerie</h1>
					<?php
					$args = array( 'post_type' => 'works', 'techniques' => $cat);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php $url=get_post_custom_values('url');?>
						<?php $type=get_post_custom_values('type');?>
					<article class="<?php echo $cat;?> <?php echo $type[0]; ?>">
						<a href="<?php echo $url[0];?>"><?php the_post_thumbnail(); ?></a>
						<h1><?php the_title(); ?></h1>
						<p class="description"><?php the_content(); ?></p>
						<p class="date">ajouté le <?php echo get_the_date(); ?></p>  
					</article>
				<?php endwhile; ?>
				</section>
			<?php endforeach; ?>
</div>

<?php get_footer(); ?>
<!-- <?php echo get_post_custom_values($url);?> -->
		</div>
		<script src="<?php bloginfo('stylesheet_directory');?>/script/jquery.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/script/lightbox.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/script/slide.js"></script>
	</body>

</html>