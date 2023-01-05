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
<header>
    <div class="wrapper">
        <div class="alignwide">
            <a href="/" class="logo"><?php echo get_bloginfo(); ?></a>
            <!-- <a class="logo-byn" href="/">
                <img src="<?php bloginfo('template_url'); ?>/images/BYN.webp" alt="byn logo">
            </a> -->

            <nav class="main-navigation">
                <div class="burger-wrapper">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <?php wp_nav_menu(); ?>
            </nav>
        </div>
    </div>
</header>