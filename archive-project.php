<?php get_header(); ?>
    <main id="archive-projects">
        <div class="wrapper">
            <div class="alignwide">
                <div class="filter-wrapper">
                    <div class="button-group filter-button-group">
                        <button class="is-checked" data-filter="*">Visa alla</button>
                        <?php
                            $terms = get_terms( array(
                                'taxonomy' => 'project',
                                'hide_empty' => false,
                            ) );
                            foreach( $terms as $term ) { ?>
                                <button data-filter=".<?php echo $term->slug; ?>">
                                    <?php echo $term->name; ?>
                                </button>
                            <?php }
                        ?>
                    </div>
                </div>
                <div class="loop-wrapper">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>    
                            <?php
                                $post_date = get_the_date( 'l F j, Y' );
                            ?>
                            <a href="<?php the_permalink(); ?>" class="loop-item <?php foreach ( get_the_terms( get_the_ID(), 'project' ) as $tax ) { ?><?php echo $tax->slug; ?> <?php } ?>" href="<?php the_permalink(); ?>">
                                <div class="meta-wrapper">
                                    <h6><?php echo $post_date; ?></h6>
                                    <h4><?php the_title(); ?></h4>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div> 
    </main>
<?php get_footer(); ?>