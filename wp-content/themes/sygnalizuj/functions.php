<?php
/**
 * Sygnalizuj functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sygnalizuj
 */

if ( ! function_exists( 'sygnalizuj_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sygnalizuj_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Sygnalizuj, use a find and replace
		 * to change 'sygnalizuj' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sygnalizuj', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_image_size( 'blogmini', 700);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Top menu', 'sygnalizuj' ),
			'menu-2' => esc_html__( 'Footer menu 1', 'sygnalizuj' ),
			'menu-3' => esc_html__( 'Footer menu 2', 'sygnalizuj' ),
			'menu-4' => esc_html__( 'Footer menu 3', 'sygnalizuj' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'sygnalizuj_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'sygnalizuj_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sygnalizuj_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'sygnalizuj_content_width', 640 );
}
add_action( 'after_setup_theme', 'sygnalizuj_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sygnalizuj_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar1', 'sygnalizuj' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sygnalizuj' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="h5-responsive font-weight-bold mt-3 mb-2">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer1', 'sygnalizuj' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Footer column 1.', 'sygnalizuj' ),
		'before_widget' => '<div id="%1$s" class="footer-info %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="h5-responsive font-weight-bold mt-3 mb-4">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer2', 'sygnalizuj' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Footer column 2.', 'sygnalizuj' ),
		'before_widget' => '<div id="%1$s" class="footer-info %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="h5-responsive font-weight-bold mt-3 mb-4">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer3', 'sygnalizuj' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Footer column 3.', 'sygnalizuj' ),
		'before_widget' => '<div id="%1$s" class="footer-info %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="h5-responsive font-weight-bold mt-3 mb-4">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'FooterBottom', 'sygnalizuj' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Footer bottom.', 'sygnalizuj' ),
		'before_widget' => '<div id="%1$s" class="footer-info %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="h5-responsive font-weight-bold mt-3 mb-4">',
		'after_title'   => '</h5>',
	) );


}
add_action( 'widgets_init', 'sygnalizuj_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sygnalizuj_scripts() {
		wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB+custom', get_template_directory_uri() . '/css/mdb.min.css' );
        // wp_enqueue_style( '_s Style', get_template_directory_uri() . '/style.css' );
        // wp_enqueue_style( 'Custom Style', get_template_directory_uri() . '/css/style.min.css' );
        
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '3.3.1', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true );

	// wp_enqueue_style( 'sygnalizuj-style', get_stylesheet_uri() );

	// wp_enqueue_script( 'sygnalizuj-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sygnalizuj-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sygnalizuj_scripts' );

//Customize post nav
function sygnalizuj_get_the_post_navigation( $args = array() ) {
    $args = wp_parse_args( $args, array(
        'prev_text'          => 'Poprzedni wpis: %title',
        'next_text'          => 'Następny wpis: %title',
        'in_same_term'       => false,
        'excluded_terms'     => '',
        'taxonomy'           => 'category',
        'screen_reader_text' => __( 'Zobacz także' ),
    ) );
 
    $navigation = '';
 
    $previous = get_previous_post_link(
        '<div class="nav-previous">%link</div>',
        $args['prev_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );
 
    $next = get_next_post_link(
        '<div class="nav-next">%link</div>',
        $args['next_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );
 
    // Only add markup if there's somewhere to navigate to.
    if ( $previous || $next ) {
        $navigation = _navigation_markup( $previous . $next, 'post-navigation', $args['screen_reader_text'] );
    }
 
    return $navigation;
}

function tn_custom_excerpt_length( $length ) {
return 35;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}