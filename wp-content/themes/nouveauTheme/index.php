<?php get_header(); ?>
<?php query_posts( 'cat=7' );?>
<div id="corpsBody">
<section id="imgNav">
	<h1 class="hidden">Illustration</h1>
	<div id="cap" class="imgElement"></div>
	<div id="pen" class="imgElement"></div>
	<a title="Web" id="laptop" class="imgElement" href="<?php bloginfo('wpurl'); ?>/?page_id=49/#Web"></a>
	<a title="News" id="agenda" class="imgElement" href="<?php bloginfo('wpurl'); ?>/?page_id=51"></a>
	<a title="Print" id="folders" class="imgElement" href="<?php bloginfo('wpurl'); ?>/?page_id=49/#Print"></a>
	<a title="Contact" id="phone" class="imgElement" href="<?php bloginfo('wpurl'); ?>/?page_id=79"></a>
	<a title="Print" id="drawing" class="imgElement" href="<?php bloginfo('wpurl'); ?>/?page_id=49#Print"></a>
</section>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
				<section class="accueil">
					<h1 class="hidden">Texte de présentation</h1>
					<article>
					<header>
						<h2><?php the_title(); ?></h2>
					</header>
						<div><?php the_content(); ?>
						</div>
					</article>
				</section>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/script/preload.js"></script>
</body>

</html>
