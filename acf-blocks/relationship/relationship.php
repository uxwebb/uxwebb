<div class="relationship-wrapper">
    
        <?php
        $featured_posts = get_field('relationship');
        if( $featured_posts ): ?>
            <ul>
            <?php foreach( $featured_posts as $featured_post ): 
                $permalink = get_permalink( $featured_post->ID );
                $title = get_the_title( $featured_post->ID );
                $content = get_post_field('post_content', $featured_post->ID);
                $post_thumbnail = get_the_post_thumbnail( $featured_post->ID );
                ?>
                <li>
                    <?php echo $post_thumbnail; ?>
                    <div class="meta-wrapper">
                        <h4><?php echo esc_html( $title ); ?></h4>
                        <?php echo $content; ?>
                    </div>
                </li>
            <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    
</div>