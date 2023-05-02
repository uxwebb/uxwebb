<div id="overlay"></div>
<header>
    <div class="alignwide">
        <a href="/" class="logo">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/uxwebb-logo.svg" alt="ux webb logo">
        </a>
        <nav id="main-nav">
            <?php wp_nav_menu( array( 'menu' => 'Sidhuvud meny' ) ); ?>
            <button class="toggle">
                <div class="line-wrapper">
                    <div class="line top"></div>
                    <div class="line bottom"></div>
                </div>
                <span>MENY</span>
            </button>
        </nav>
    </div>
</header>
