<?php get_header(); ?>

<div id="corps">
     <section class="gauche news">
        <h2>News des travaux</h2>
        <?php $args = array( 'post_type' => 'news', 'news_type' => 'Travaux');
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <article>
                <header>
                    <h3><?php the_title(); ?></h3>
                </header>
                 <?php the_content(); ?>
                 <footer>
                     <p>ajouté le <?php echo get_the_date(); ?></p>
                 </footer>
             </article>
        <?php endwhile; ?>
    </section>
    <section class="droite news">
        <h2>News du monde</h2>
        <?php $args = array( 'post_type' => 'news', 'news_type' => 'Like');
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <article>
                <header>
                    <h3><?php the_title(); ?></h3>
                </header>
                 <?php the_content(); ?>
                 <footer>
                     <p>ajouté le <?php echo get_the_date(); ?></p>
                 </footer>
             </article>
        <?php endwhile; ?>
    </section>
</div>

<?php get_footer(); ?>
</div>
</body>

</html>

