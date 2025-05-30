<?php
/**
 * atn functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package atn
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function atn_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on atn, use a find and replace
		* to change 'atn' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'atn', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'Primary' => esc_html__( 'Primary', 'atn' ),
			'footer' => __( 'footer Menu', 'atn' ),
		)
	);


	
	
	
	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'atn_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'atn_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function atn_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'atn_content_width', 640 );
}
add_action( 'after_setup_theme', 'atn_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function atn_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'atn' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'atn' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'atn_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function atn_scripts() {
	wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), '1.0.0'); // Default theme style

    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts-space-grotesk', 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap', array(), null);
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), null);
    

    
    // Enqueue Local CSS Files
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.0');
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '3.0.0');
    wp_enqueue_style('splide-css', get_template_directory_uri() . '/assets/css/splide.min.css', array(), '4.0.0');
	wp_enqueue_style('style.min-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0.0'); 
	wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0'); 
    wp_enqueue_style('template-css', get_template_directory_uri() . '/style.css', array(), '1.0.0');




 // Enqueue jQuery (WordPress includes it by default)
 wp_enqueue_script('jquery');

    
  
 // Enqueue External JavaScript Libraries
 wp_enqueue_script('bootstrap-js-cdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), '4.5.2', true);
 wp_enqueue_script('wow-js-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js', array(), '0.1.12', true);
    
    // Enqueue Local JavaScript Files
	wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/jquery-3.6.1.min.js', array(), '1.1.3', true);
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.1.3', true);
    wp_enqueue_script('splide-js', get_template_directory_uri() . '/assets/js/splide.min.js', array(), '1.0.0', true);
    wp_enqueue_script('splide-extension-video-js', get_template_directory_uri() . '/assets/js/splide-extension-video.js', array('splide-js'), '1.0.0', true);
    wp_enqueue_script('customizer-js', get_template_directory_uri() . '/assets/js/customizer.js', array(), '1.0.0', true);
    wp_enqueue_script('index-js', get_template_directory_uri() . '/assets/js/index.js', array(), '1.0.0', true); 
	wp_enqueue_script('indexs-js', get_template_directory_uri() . '/assets/js/indexs.js', array(), '1.0.0', true);// Correct name usage
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('navigation-js', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true);
	wp_enqueue_script('index-js', get_template_directory_uri() . '/assets/js/index.js', array(), '1.0.0', true);
	wp_enqueue_script('E-v1js-js', get_template_directory_uri() . '/assets/js/E-v1.js', array(), '1.0.0', true);




    
    // Comment Reply Script for Single Posts
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'atn_scripts');




add_theme_support('post-thumbnails');
add_theme_support('responsive-embeds');
add_theme_support('editor-styles');
add_theme_support('html5', array('style', 'script'));
add_theme_support('automatic-feed-links');




// Function to calculate reading time
function reading_time() {
    // Get the content of the post
    $content = get_post_field( 'post_content', get_the_ID() );
    
    // Remove shortcodes, HTML tags, etc. to get the plain text
    $content = strip_tags( strip_shortcodes( $content ) );
    
    // Calculate the word count
    $word_count = str_word_count( $content );
    
    // Assuming an average reading speed of 200 words per minute
    $reading_time = ceil( $word_count / 200 );
    
    // Return the reading time
    return $reading_time . ' min';
}


// register_nav_menus( array(
//     // 'primary' => __( 'Primary Menu', 'atn' ),
	

// ) );


// function theme_register_menus() {
// 	register_nav_menus(array(
// 		'primary' => __( 'Primary Menu' ),
// 	));
// }
// add_action( 'init', 'theme_register_menus' );




// if ( class_exists( 'ReduxFramework' ) ) {
//     // Redux Framework is installed and active
//     echo 'Redux Framework is available.';
// } else {
//     // Redux Framework is not installed or not active
//     echo 'Redux Framework is not available.';
// }



// Hook into admin notices to display recommendations
add_action( 'admin_notices', 'check_recommended_plugins' );

function check_recommended_plugins() {
    // Plugin to check (e.g., Redux Framework)
    $plugin_name = 'Redux Framework';
    $plugin_path = '/extension/redux-framework/redux-framework.php'; // Plugin directory and main file

    // Check if the plugin is active
    if ( ! is_plugin_active( $plugin_path ) ) {
        // Display admin notice if not active
        echo '<div class="notice notice-warning is-dismissible">';
        echo '<p>';
        echo sprintf(
            __( 'The %s plugin is recommended for this theme. Please <a href="%s">install and activate</a> it for full functionality.', 'my-theme' ),
            esc_html( $plugin_name ),
            esc_url( admin_url( 'plugin-install.php?s=redux-framework&tab=search&type=term' ) )
        );
        echo '</p>';
        echo '</div>';
    }
}






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




require get_template_directory() . '/extension/sample/sample-config.php';
require get_template_directory() . '/extension/redux-core/framework.php';
require get_template_directory() . '/extension/sample/extension/my_extension/class-redux-extension-my-extension.php';
// require get_template_directory() . '/plugins/redux-framework/redux-core/inc/extensions/tabbed/tabbed/class-redux-tabbed.php ';




require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/plugin.php';


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

