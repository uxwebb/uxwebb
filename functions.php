<?php
// // if ( !function_exists('uxwebb_theme_support') ) :
// //     function uxwebb_theme_support() {
// //         add_theme_support('wp-block-styles');
// //         add_editor_style('style.css');
// //     }
// // endif;
// // add_action( 'after_setup_theme', 'uxwebb_theme_support' );

// // Add styles to editor
// $path = home_url().parse_url( get_stylesheet_directory_uri(), PHP_URL_PATH );
// $editor_styles_folder = 'assets/css';
// add_theme_support('editor-styles');
// add_editor_style($path . '/'.$editor_styles_folder .'/editorstyles.css');

// // Enque styles
// function uxwebb_styles() {
//     wp_enqueue_script('jquery');
//     wp_enqueue_style('uxwebb_style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
//     wp_enqueue_style('uxwebb_styles', get_template_directory_uri() . '/assets/css/styles.css' );
// }
// add_action( 'wp_enqueue_scripts', 'uxwebb_styles' );

// function uxwebb_scripts(){
//     wp_enqueue_script('uxwebb_scripts', get_template_directory_uri() . '/assets/js/scripts.js', );
//     wp_enqueue_script('uxwebb_scripts_hamburger', get_template_directory_uri() . '/assets/js/hamburger.js', );
// }
// add_action('wp_footer', 'uxwebb_scripts');


// // Add editor js
// function be_gutenberg_scripts() {
//     wp_enqueue_script( 'be-editor', get_stylesheet_directory_uri() . '/assets/js/editor.js', array( 'wp-blocks', 'wp-dom' ), filemtime( get_stylesheet_directory() . '/assets/js/editor.js' ), true );
// }
// add_action( 'enqueue_block_editor_assets', 'be_gutenberg_scripts' );

// add_theme_support( 'align-wide' );

// add_theme_support( 'post-thumbnails' );

// /*==============================================================================
// # Custom ACF Blocks
// ==============================================================================*/
// add_action( 'init', 'register_acf_blocks' );

// function register_acf_blocks() {
//     register_block_type( 
//       __DIR__ . '/acf-blocks/relationship',
//       array (
//         'supports' => array(
//           'align' => true
//         ),
//       ),
//     );
//     register_block_type( 
//       __DIR__ . '/acf-blocks/hero',
//       array (
//         'supports' => array(
//           'align' => true
//         ),
//       ),
//     );
// }