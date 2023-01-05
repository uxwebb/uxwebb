<?php get_header(); ?>
    <main>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php //get_template_part( 'template-parts/content', 'page-content' ); ?>
                <article>
                    <!-- <h1><?php the_title(); ?></h1> -->
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>