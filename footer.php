<?php
    if ( is_page( 'jonkopings-halkbana' ) ) {
        get_template_part( './footers/footer__jonkopinghalkbana' );
    
    } elseif ( is_page( 'wetterpool' ) ) {
        get_template_part( './footers/footer__wetterpool' );
    
    } elseif ( is_page( 'gula-hunden' ) ) {
        get_template_part( './footers/footer__gulahunden' );

    } else {
        //get_template_part( './footers/footer__default' );
    }
?>
<?php wp_footer(); ?>
