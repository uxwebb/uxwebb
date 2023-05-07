<?php
$featured_posts = get_field('relationship');
if( $featured_posts ): ?>
    <div class="relationship-wrapper alignwide">
        <?php foreach( $featured_posts as $featured_post ):
            //var_dump($featured_post);
            $permalink = get_permalink( $featured_post->ID );
            $title = get_the_title( $featured_post->ID );
            $date = get_the_date('F j, Y');
            $post_thumbnail = get_the_post_thumbnail( $featured_post->ID );
            $custom_field = get_field( 'field_name', $featured_post->ID );
            ?>
            <a href="<?php echo esc_url( $permalink ); ?>" class="relation-item">
                <div class="relation-item-inner">
                    <span class="entry-date"><?php echo $date; ?></span>
                    <h4><?php echo esc_html( $title ); ?></h4>
                    <!-- <span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span> -->
                </div>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>