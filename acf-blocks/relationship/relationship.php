<div class="relationship-wrapper">
    <?php $home_query = new WP_Query('post_type=post');
    while($home_query->have_posts()) : $home_query->the_post(); ?>
        <a
            class="post-link"
            href="<?php the_permalink(); ?>"
            data-id="<?php the_ID(); ?>"
            data-title="<?php the_title(); ?>"
            data-slug="<?php global $post; echo $post->post_name; ?>"
        >
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 666.7 533.3" style="enable-background:new 0 0 666.7 533.3;" xml:space="preserve">
            <style type="text/css">
                .st0{fill:#FFA000;}
                .st1{fill:#FFCA28;}
            </style>
            <g id="back">
                <path class="st0" d="M600,66.7H300L240.8,7.4C236,2.7,229.6,0,222.8,0H66.7C30,0,0,30,0,66.7V200h666.7v-66.7
                    C666.7,96.7,636.7,66.7,600,66.7z"/>
            </g>
            <g id="front">
                <path class="st1" d="M600,66.7H66.7C30,66.7,0,96.7,0,133.3v333.3c0,36.7,30,66.7,66.7,66.7H600c36.7,0,66.7-30,66.7-66.7V133.3
                    C666.7,96.7,636.7,66.7,600,66.7L600,66.7z"/>
            </g>
            </svg>
            <span>
                <?php echo $post->post_name; ?>
            </span>
        </a>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>
<div id="project-container"></div>