<?php 

    // Add styles
    function oas_scriptsstyles() {
        $scriptfolder = 'dist';
        $path = home_url().parse_url( get_stylesheet_directory_uri(), PHP_URL_PATH );
        
        // CSS
        wp_enqueue_style ( 'oas_styles', $path . '/'.$scriptfolder .'/styles.css', array(), '' );
        wp_enqueue_style ( 'oas_styles_fonts', $path . '/'.$scriptfolder .'/fonts.css', array(), '' );
        
        // JS
        wp_enqueue_script('jquery');
        wp_enqueue_script ( 'oas_scripts_lenis', $path . '/'.$scriptfolder .'/lenis.min.js',array('jquery'), true);
        wp_enqueue_script ( 'oas_scripts', $path . '/'.$scriptfolder .'/scripts.js',array('jquery'), true);
        wp_enqueue_script ( 'oas_scripts_scrollfade', $path . '/'.$scriptfolder .'/scrollfade.js',array('jquery'), true);
        wp_enqueue_script ( 'oas_scripts_alpine', $path . '/'.$scriptfolder .'/alpine.js',array('jquery'), 'defer', true);
        wp_enqueue_script ( 'isotope_scripts', $path . '/'.$scriptfolder .'/isotope.min.js',array('jquery'), true);
        wp_localize_script('oas_scripts', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));
    }
    add_action('wp_enqueue_scripts', 'oas_scriptsstyles');
        
    add_action( 'enqueue_block_editor_assets', function() {
        $font_path = home_url().parse_url( get_stylesheet_directory_uri(), PHP_URL_PATH );
        wp_enqueue_style( 'editor-font', 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;700&display=swap' );
        wp_enqueue_style( 'editor_font_css', $font_path . '/dist/fonts.css' );
    } );

    // Add editor js
    function be_gutenberg_scripts() {
        wp_enqueue_script( 'be-editor', get_stylesheet_directory_uri() . '/dist/editor.js', array( 'wp-blocks', 'wp-dom' ), ( get_stylesheet_directory() . '/dist/editor.js' ), true );
    }
    add_action( 'enqueue_block_editor_assets', 'be_gutenberg_scripts' );

    // Editor Styles
    $scriptfolder = 'dist';
    $path = home_url().parse_url( get_stylesheet_directory_uri(), PHP_URL_PATH );
    add_theme_support('editor-styles');
    add_editor_style($path . '/'.$scriptfolder .'/gutenberg.css');

    /**
     * Gutenberg align widths
     */
    add_theme_support( 'align-wide' );

    /**
     * Support post thumbnail
     */
    add_theme_support( 'post-thumbnails' );
    
    /**
     * Add custom color palettes
     */
    // Editor Color Palette
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => __( 'Gul', 'Gula Hund' ),
            'slug'  => 'yellow',
            'color'	=> '#FFE87E',
        ),
        array(
            'name'  => __( 'Lila', 'Gula Hund' ),
            'slug'  => 'purple',
            'color'	=> '#3434B3',
        )
    ));

    // Post types
    //// 1 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function prefix_create_custom_post_type() {
        $labels = array(
            'name'          => 'Projekt', // Plural name
            'singular_name' => 'Projekt'   // Singular name
        );
        $supports = array(
            'title',        // Post title
            'editor',       // Post content
            'excerpt',      // Allows short description
            'author',       // Allows showing and choosing author
            'thumbnail',    // Allows feature images
            'comments',     // Enables comments
            'trackbacks',   // Supports trackbacks
            'revisions',    // Shows autosaved version of the posts
            'custom-fields' // Supports by custom fields
        );
        $args = array(
            'labels'              => $labels,
            'description'         => 'Posttyp för mina projekt', // Description
            'supports'            => $supports,
            // 'taxonomies'          => array( 'category', 'post_tag' ), // Allowed taxonomies
            'hierarchical'        => true, // Allows hierarchical categorization, if set to false, the Custom Post Type will behave like Post, else it will behave like Page
            "rewrite"             => array( "slug" => "projekt", "with_front" => true ),
            'public'              => true,  // Makes the post type public
            'show_ui'             => true,  // Displays an interface for this post type
            'show_in_menu'        => true,  // Displays in the Admin Menu (the left panel)
            'show_in_rest'        => true,  // Displays in REST API
            'show_in_nav_menus'   => true,  // Displays in Appearance -> Menus
            'show_in_admin_bar'   => true,  // Displays in the black admin bar
            'menu_position'       => 5,     // The position number in the left menu
            'menu_icon'           => true,  // The URL for the icon used for this post type
            'can_export'          => true,  // Allows content export using Tools -> Export
            'has_archive'         => true,  // Enables post type archive (by month, date, or year)
            'exclude_from_search' => false, // Excludes posts of this type in the front-end search result page if set to true, include them if set to false
            'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
            'capability_type'     => 'post' // Allows read, edit, delete like “Post”
        );
        register_post_type('project', $args); //Create a post type with the slug is ‘product’ and arguments in $args.
    }
    add_action('init', 'prefix_create_custom_post_type');

    function custom_taxonomies() {
        // Projekt
        register_taxonomy(
            'project',
            'project',
            array(
                'hierarchical' => true,
                'show_in_rest' => true,
                'show_admin_column' => true,
                'label' => 'Projekt kategori',
                'query_var' => true
            )
        );
    }
    add_action( 'init', 'custom_taxonomies');