<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); echo '';  wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php
    if ( is_page( 'jonkopings-halkbana' ) ) {
        get_template_part( './headers/header__jonkopinghalkbana' );
    
    } elseif ( is_page( 'wetterpool' ) ) {
        get_template_part( './headers/header__wetterpool' );
    
    } elseif ( is_page( 'gula-hunden' ) ) {
        get_template_part( './headers/header__gulahunden' );

    } else {
        get_template_part( './headers/header__default' );
    }
?>