<?php

// Add styles to editor
$path = home_url().parse_url( get_stylesheet_directory_uri(), PHP_URL_PATH );
$editor_styles_folder = 'assets/css';
add_theme_support('editor-styles');
add_editor_style($path . '/'.$editor_styles_folder .'/editorstyles.css');

// Enque styles
function uxwebb_styles() {
    wp_enqueue_script('jquery');
    wp_enqueue_style('uxwebb_style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('uxwebb_styles', get_template_directory_uri() . '/assets/css/styles.css' );
}
add_action( 'wp_enqueue_scripts', 'uxwebb_styles' );

function uxwebb_scripts() {
    wp_enqueue_script('uxwebb_scripts_three', get_template_directory_uri() . '/assets/js/three.r134.min.js', );
    wp_enqueue_script('uxwebb_scripts_vanta', get_template_directory_uri() . '/assets/js/vanta.fog.min.js', );
    wp_enqueue_script('uxwebb_scripts_hamburger', get_template_directory_uri() . '/assets/js/hamburger.js', );
    wp_enqueue_script('uxwebb_scripts_anime', get_template_directory_uri() . '/assets/js/anime.min.js', );
    wp_enqueue_script('uxwebb_scripts_splt', get_template_directory_uri() . '/assets/js/splt.min.js', );
    wp_enqueue_script('uxwebb_scripts', get_template_directory_uri() . '/assets/js/scripts.js', );
}
add_action('wp_footer', 'uxwebb_scripts');


// Add editor js
function be_gutenberg_scripts() {
    wp_enqueue_script( 'be-editor', get_stylesheet_directory_uri() . '/assets/js/editor.js', );
}
add_action( 'enqueue_block_editor_assets', 'be_gutenberg_scripts' );


/*============================================================================== */
# Patterns

register_block_pattern_category('uxwebb', array(
  'label' => __('UXWebb', 'uxwebb')
));

/*============================================================================== */
/*============================================================================== */


// add_theme_support( 'align-wide' );

// add_theme_support( 'post-thumbnails' );

/*==============================================================================
# Custom ACF Blocks
==============================================================================*/
add_action( 'init', 'register_acf_blocks' );

function register_acf_blocks() {
    register_block_type( 
      __DIR__ . '/acf-blocks/relationship',
      array (
        'supports' => array(
          'align' => true
        ),
      ),
    );
    register_block_type( 
      __DIR__ . '/acf-blocks/hero',
      array (
        'supports' => array(
          'align' => true
        ),
      ),
    );
}

// AJAX
function my_load_ajax_content () {

  $args = array(
    'p' => $_POST['post_id'],
    'post_type' => 'post'
  );

  $post_query = new WP_Query( $args );
  while( $post_query->have_posts() ) : $post_query->the_post(); ?>
    <div class="post-container">
        <?php the_content(); ?>
    </div>
  <?php endwhile;
  wp_die();
}

add_action ( 'wp_ajax_nopriv_load-content', 'my_load_ajax_content' );
add_action ( 'wp_ajax_load-content', 'my_load_ajax_content' );