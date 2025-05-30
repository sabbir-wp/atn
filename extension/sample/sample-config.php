<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: https://devs.redux.io/
 *
 * Redux Framework option for php code and config code, not a  repeater use ,use a
 * 
 * 
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'redux_demo';  // YOU MUST CHANGE THIS.  DO NOT USE 'redux_demo' IN YOUR PROJECT!!!

// Uncomment to disable demo mode.
/* Redux::disable_demo(); */  // phpcs:ignore Squiz.PHP.CommentedOutCode

$dir = __DIR__ . DIRECTORY_SEPARATOR;

/*
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 */

// Background Patterns Reader.
$sample_patterns_path = Redux_Core::$dir . '../sample/patterns/';
$sample_patterns_url  = Redux_Core::$url . '../sample/patterns/';
$sample_patterns      = array();

if ( is_dir( $sample_patterns_path ) ) {
	$sample_patterns_dir = opendir( $sample_patterns_path );

	if ( $sample_patterns_dir ) {

		// phpcs:ignore Generic.CodeAnalysis.AssignmentInCondition.FoundInWhileCondition
		while ( false !== ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) ) {
			if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
				$name              = explode( '.', $sample_patterns_file );
				$name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
				$sample_patterns[] = array(
					'alt' => $name,
					'img' => $sample_patterns_url . $sample_patterns_file,
				);
			}
		}
	}
}

// Used to except HTML tags in description arguments where esc_html would remove.
$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
	'code'   => array(),
);

/*
 * ---> BEGIN ARGUMENTS
 */

/**
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://devs.redux.io/core/arguments/
 */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

// TYPICAL → Change these values as you need/desire.
$args = array(
	// This is where your data is stored in the database and also becomes your global variable name.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'menu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	// The text to appear in the admin menu.
	'menu_title'                => esc_html__( 'Saas Options', 'your-textdomain-here' ),

	// The text to appear on the page title.
	'page_title'                => esc_html__( 'Saas Options', 'your-textdomain-here' ),

	// Disable to create your own Google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => true,

	// Icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Sets a different name for your global variable other than the opt_name.
	'global_variable'           => $opt_name,

	// Show the time the page took to load, etc. (forced on while on localhost or when WP_DEBUG is enabled).
	'dev_mode'                  => false,

	// Enable basic customizer support.
	'customizer'                => true,

	// Allow the panel to open expanded.
	'open_expanded'             => false,

	// Disable the save warning when a user changes a field.
	'disable_save_warn'         => false,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => 90,

	// For a full list of options, visit: https://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
	'page_slug'                 => $opt_name,

	// On load save the defaults to DB before user clicks save.
	'save_defaults'             => true,

	// Display the default value next to each field when not set to the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default.
	'default_mark'              => '*',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => true,

	// The time transients will expire when the 'database' arg is set.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => true,

	// Allows dynamic CSS to be generated for customizer and google fonts,
	// but stops the dynamic CSS from going to the page head.
	'output_tag'                => true,

	// Disable the footer credit of Redux. Please leave if you can help it.
	'footer_credit'             => '',

	// If you prefer not to use the CDN for ACE Editor.
	// You may download the Redux Vendor Support plugin to run locally or embed it in your code.
	'use_cdn'                   => true,

	// Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
	'admin_theme'               => 'wp',

	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus'           => true,

	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display.
	'font_display'              => 'swap',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'red',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),

	// FUTURE → Not in use yet, but reserved or partially implemented.
	// Use at your own risk.
	// Possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',
	'network_admin'             => true,
	'search'                    => true,
);








// ADMIN BAR LINKS → Set up custom links in the admin bar menu as external items.
// PLEASE CHANGE THESE SETTINGS IN YOUR THEME BEFORE RELEASING YOUR PRODUCT!!
// If these are left unchanged, they will not display in your panel!
$args['admin_bar_links'][] = array(
	'id'    => 'redux-docs',
	'href'  => '//devs.redux.io/',
	'title' => __( 'Documentation', 'your-textdomain-here' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-support',
	'href'  => '//github.com/ReduxFramework/redux-framework/issues',
	'title' => __( 'Support', 'your-textdomain-here' ),
);

// SOCIAL ICONS → Set up custom links in the footer for quick links in your panel footer icons.
// PLEASE CHANGE THESE SETTINGS IN YOUR THEME BEFORE RELEASING YOUR PRODUCT!!
// If these are left unchanged, they will not display in your panel!
$args['share_icons'][] = array(
	'url'   => '//',
	'title' => 'Visit us on GitHub',
	'icon'  => 'el el-github',
);
$args['share_icons'][] = array(
	'url'   => '//',
	'title' => 'Like us on Facebook',
	'icon'  => 'el el-facebook',
);
$args['share_icons'][] = array(
	'url'   => '//',
	'title' => 'Follow us on Twitter',
	'icon'  => 'el el-twitter',
);
$args['share_icons'][] = array(
	'url'   => '//',
	'title' => 'Find us on LinkedIn',
	'icon'  => 'el el-linkedin',
);

// Panel Intro text → before the form.
if ( ! isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}

	// translators:  Panel opt_name.
	$args['intro_text'] = '<p>' . sprintf( esc_html__( 'Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: $%1$s', 'your-textdomain-here' ), '<strong>' . $v . '</strong>' ) . '<p>';
} else {
	$args['intro_text'] = '<p>' . esc_html__( 'This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.', 'your-textdomain-here' ) . '</p>';
}

// Add content after the form.
$args['footer_text'] = '<p>' . esc_html__( 'This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.', 'your-textdomain-here' ) . '</p>';

Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */
$help_tabs = array(
	array(
		'id'      => 'redux-help-tab-1',
		'title'   => esc_html__( 'Theme Information 1', 'your-textdomain-here' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
	),
	array(
		'id'      => 'redux-help-tab-2',
		'title'   => esc_html__( 'Theme Information 2', 'your-textdomain-here' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
	),
);
Redux::set_help_tab( $opt_name, $help_tabs );

// Set the help sidebar.
$content = '<p>' . esc_html__( 'This is the sidebar content, HTML is allowed.', 'your-textdomain-here' ) . '</p>';

Redux::set_help_sidebar( $opt_name, $content );

/*
 * <--- END HELP TABS
 */

/*
 * ---> START SECTIONS
 */

// Redux Framework option for  Hero Header Start 



if ( !class_exists( 'Redux' ) ) {
    return;
}

// Replace $opt_name with your Redux option name
Redux::set_section( $opt_name, array(
    'title'  => __( 'Banner Section', 'your-text-domain' ),
    'id'     => 'banner_section',
    'desc'   => __( 'Configure the Banner Section.', 'your-text-domain' ),
    'icon'   => 'el el-picture',
    'fields' => array(
        array(
            'id'       => 'banner_img',
            'type'     => 'media',
            'title'    => __( 'Banner Background Image', 'your-text-domain' ),
            'desc'     => __( 'Upload or select the background image for the banner.', 'your-text-domain' ),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/default-banner.jpg'
            ),
        ),
        array(
            'id'      => 'banner_sub_heading',
            'type'    => 'text',
            'title'   => __( 'Banner Subheading', 'your-text-domain' ),
            'default' => __( 'Family Wealth Consultants', 'your-text-domain' ),
        ),
        array(
            'id'      => 'banner_main_heading',
            'type'    => 'text',
            'title'   => __( 'Banner Main Heading', 'your-text-domain' ),
            'default' => __( 'Growth Odyssey Sharing Journeys, Inspiring Growth', 'your-text-domain' ),
        ),
        array(
            'id'      => 'banner_description',
            'type'    => 'textarea',
            'title'   => __( 'Banner Description', 'your-text-domain' ),
            'default' => __( 'Secure your family’s future with structured plans for asset distribution, trust management, and succession planning', 'your-text-domain' ),
        ),
        array(
            'id'      => 'banner_cta_link',
            'type'    => 'text',
            'title'   => __( 'CTA Link', 'your-text-domain' ),
            'default' => __( '#', 'your-text-domain' ),
        ),
        array(
            'id'      => 'banner_cta_text',
            'type'    => 'text',
            'title'   => __( 'CTA Button Text', 'your-text-domain' ),
            'default' => __( 'Let’s Get Started', 'your-text-domain' ),
        ),
    ),
) );






if ( !class_exists( 'Redux' ) ) {
    return;
}

// Replace $opt_name with your Redux option name
Redux::set_section( $opt_name, array(
    'title'  => __( 'About Us Section', 'your-text-domain' ),
    'id'     => 'about_us_section',
    'desc'   => __( 'Configure the About Us Section.', 'your-text-domain' ),
    'icon'   => 'el el-user',
    'fields' => array(
        array(
            'id'       => 'about_us_bg_image',
            'type'     => 'media',
            'title'    => __( 'Background Image', 'your-text-domain' ),
            'desc'     => __( 'Upload or select the background image for the About Us section.', 'your-text-domain' ),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/default-about-bg.svg'
            ),
        ),
        array(
            'id'       => 'about_us_heading',
            'type'     => 'text',
            'title'    => __( 'Section Heading', 'your-text-domain' ),
            'default'  => __( 'About Us', 'your-text-domain' ),
        ),
        array(
            'id'      => 'about_us_paragraph_1',
            'type'    => 'textarea',
            'title'   => __( 'First Paragraph', 'your-text-domain' ),
            'default' => __( 'ATN was founded by our CEO Aaron Richards (M.S) in 2022. But his search for passive income started long before that.', 'your-text-domain' ),
        ),
        array(
            'id'      => 'about_us_paragraph_2',
            'type'    => 'textarea',
            'title'   => __( 'Second Paragraph', 'your-text-domain' ),
            'default' => __( 'Aaron’s main motivation for making passive income was twofold: to retire his wife Brooke so she could take care of their two kids...', 'your-text-domain' ),
        ),
        array(
            'id'       => 'about_us_image',
            'type'     => 'media',
            'title'    => __( 'Section Image', 'your-text-domain' ),
            'default'  => array(
                'url' => get_template_directory_uri() . '/img/about-section-img.png'
            ),
        ),
        array(
            'id'      => 'about_us_button_text',
            'type'    => 'text',
            'title'   => __( 'Button Text', 'your-text-domain' ),
            'default' => __( 'More Details', 'your-text-domain' ),
        ),
        array(
            'id'      => 'about_us_button_link',
            'type'    => 'text',
            'title'   => __( 'Button Link', 'your-text-domain' ),
            'default' => __( '#', 'your-text-domain' ),
        ),
    ),
) );







// Redux Framework option for What We Offer Our Approach



if ( !class_exists( 'Redux' ) ) {
    return;
}

Redux::set_section( $opt_name, array(
    'title'  => __( 'Our Approach', 'your-text-domain' ),
    'id'     => 'our-approach-section',
    'desc'   => __( 'Configure the content of the "Our Approach" section.', 'your-text-domain' ),
    'icon'   => 'el el-list-alt',
    'fields' => array(
        array(
            'id'      => 'our_approach_title',
            'type'    => 'text',
            'title'   => __( 'Section Title', 'your-text-domain' ),
            'default' => __( 'Our Approach', 'your-text-domain' ),
        ),
        array(
            'id'      => 'our_approach_description',
            'type'    => 'textarea',
            'title'   => __( 'Section Description', 'your-text-domain' ),
            'default' => __( 'We begin with a conversation to understand your financial goals, current situation, and future aspirations.', 'your-text-domain' ),
        ),
        array(
            'id'      => 'our_approach_slides',
            'type'    => 'slides',
            'title'   => __( 'Approach Slides', 'your-text-domain' ),
            'subtitle'=> __( 'Manage each approach item here.', 'your-text-domain' ),
            'placeholder' => array(
                'title'       => __( 'Approach Title', 'your-text-domain' ),
                'description' => __( 'Approach Description', 'your-text-domain' ),
                'url'         => __( 'More Details Link', 'your-text-domain' ),
            ),
        ),
    ),
) );









// Redux Framework option for What We Offer
if ( !class_exists( 'Redux' ) ) {
    return;
}

Redux::set_section( $opt_name, array(
    'title'  => __( 'What We Offer', 'your-text-domain' ),
    'id'     => 'what-we-offer-section',
    'desc'   => __( 'Configure the content of the "What We Offer" section.', 'your-text-domain' ),
    'icon'   => 'el el-list-alt',
    'fields' => array(
        array(
            'id'      => 'what_we_offer_title',
            'type'    => 'text',
            'title'   => __( 'Section Title', 'your-text-domain' ),
            'default' => __( 'What We Offer', 'your-text-domain' ),
        ),
        array(
            'id'      => 'what_we_offer_description',
            'type'    => 'textarea',
            'title'   => __( 'Section Description', 'your-text-domain' ),
            'default' => __( 'We begin with a conversation to understand your financial goals, current situation, and future aspirations. This step helps us tailor our services to your unique needs.', 'your-text-domain' ),
        ),
        array(
            'id'      => 'what_we_offer_slides',
            'type'    => 'slides',
            'title'   => __( 'Offer Slides', 'your-text-domain' ),
            'subtitle'=> __( 'Manage each offer slide here.', 'your-text-domain' ),
            'placeholder' => array(
                'title'       => __( 'Offer Title', 'your-text-domain' ),
                'description' => __( 'Offer Description', 'your-text-domain' ),
                'url'         => __( 'More Details Link', 'your-text-domain' ),
            ),
        ),
        array(
            'id'      => 'what_we_offer_view_all_link',
            'type'    => 'text',
            'title'   => __( 'View All Button Link', 'your-text-domain' ),
            'default' => __( 'https://atn.linkbuilderpros.com/our-services/', 'your-text-domain' ),
        ),
    ),
) );



//  Initialize Redux Framework for Case Studies


Redux::set_section( $opt_name, array(
    'title'  => 'Video Slides',
    'id'     => 'video_slides_section',
    'desc'   => 'Manage video slides with thumbnails',
    'icon'   => 'el el-film',
    'fields' => array(
        array(
            'id'       => 'casestudies_us_bg_image',
            'type'     => 'media',
            'title'    => __( 'Background Image', 'your-text-domain' ),
            'desc'     => __( 'Upload or select the background image for the Case Studies section.', 'your-text-domain' ),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/default-about-bg.svg'
            ),
        ),
        array(
            'id'       => 'casestudies_us_heading',
            'type'     => 'text',
            'title'    => __( 'Section Heading', 'your-text-domain' ),
            'default'  => __( 'Case Studies', 'your-text-domain' ),
        ),
        array(
            'id'      => 'casestudies_paragraph_1',
            'type'    => 'textarea',
            'title'   => __( 'First Paragraph', 'your-text-domain' ),
            'default' => __( 'ATN was founded by our CEO Aaron Richards (M.S) in 2022. But his search for passive income started long before that.', 'your-text-domain' ),
        ),
        array(
            'id'       => 'video_slides',
            'type'     => 'slides',
            'title'    => 'Video Slides',
            'subtitle' => 'Add video thumbnails and URLs',
            'placeholder' => array(
                'title'       => 'Enter video title',
                'description' => 'Enter description',
                'url'         => 'Enter video URL',
            ),
            'default' => array(
                array(
                    'title'       => 'Sample Video 1',
                    'description' => 'Description of video 1',
                    'url'         => 'https://atn.linkbuilderpros.com/wp-content/uploads/2024/04/FUNNEL-_52000-IN-90-DAYS_-Jordans-Testimonial.mp4',
                    'video'       => get_template_directory_uri() . '/assets/images/video-thumbnail-1.jpg'
                ),
                array(
                    'title'       => 'Sample Video 2',
                    'description' => 'Description of video 2',
                    'url'         => 'https://atn.linkbuilderpros.com/wp-content/uploads/2024/04/sample-video-2.mp4',
                    'video'       => get_template_directory_uri() . '/assets/images/video-thumbnail-2.jpg'
                ),
            ),
        ),
    )
));







// Redux::set_section($opt_name, array(
//     'title'      => 'Client Reviews Slider',
//     'id'         => 'clients_review_slider_section',
//     'icon'       => 'el el-photo',
//     'fields'     => array(
//         array(
//             'id'       => 'clients_reviews',
//             'type'     => 'slides',
//             'title'    => 'Client Reviews',
//             'subtitle' => 'Manage the client reviews for the slider.',
//             'desc'     => 'Add client reviews, their ratings, and images.',
//             'placeholder' => array(
//                 'title'       => 'Client Name',
//                 'description' => 'Enter the review text',
//                 'url'         => 'Client image URL',
//             ),
//         ),
//         array(
//             'id'       => 'client_ratings',
//             'type'     => 'multi_text',
//             'title'    => 'Client Ratings',
//             'subtitle' => 'Add ratings for clients.',
//             'desc'     => 'Use this field to manage client ratings.',
//         ),
//     ),
// ));






// Redux::set_section($opt_name, array(
//     'title'      => 'Client Reviews Slider',
//     'id'         => 'clients_review_slider_section',
//     'icon'       => 'el el-photo',
//     'fields'     => array(
//         array(
//             'id'       => 'clients_reviews',
//             'type'     => 'slides',
//             'title'    => __( 'Clients Reviews', 'your-text-domain' ),
//             'subtitle' => __( 'Manage client reviews for the slider.', 'your-text-domain' ),
//             'placeholder' => array(
//                 'title'       => __( 'Client Name', 'your-text-domain' ),
//                 'description' => __( 'Client Review Text', 'your-text-domain' ),
//                 'url'         => __( 'Client Image URL', 'your-text-domain' ),
//             ),
//         ),
        
//     ),
// ));







Redux::set_section($opt_name, array(
    'title'  => __('Client Reviews', 'your-theme-textdomain'),
    'id'     => 'clients_reviews_section',
    'fields' => array(
        array(
            'id'       => 'clients_reviews',
            'type'     => 'slides',
            'title'    => __('Client Reviews', 'your-theme-textdomain'),
            'subtitle' => __('Add multiple client reviews.', 'your-theme-textdomain'),
            'placeholder' => array(
                'title'       => 'Client Name', // Client Name
                'description' => 'Client Comment', // Client Comment
                'url'       => 'Client Image URL', // Client Image URL
            ),
        ),
        array(
            'id'       => 'client_ratings',
            'type'     => 'multi_text',
            'title'    => __('Client Ratings', 'your-theme-textdomain'),
            'subtitle' => __('Enter ratings (1-5) for each client.', 'your-theme-textdomain'),
            'validate' => 'numeric', // Ensure numeric input
            'desc'     => __('Add ratings for clients between 1 and 5.', 'your-theme-textdomain'),
        ),
    ),
));












// Redux::set_section($opt_name, array(
//     'title'  => 'Video Slides',
//     'id'     => 'video_slides_section',
//     'desc'   => 'Manage video slides with thumbnails',
//     'icon'   => 'el el-film',
//     'fields' => array(    array(
//         'id'       => 'casestudies_us_bg_image',
//         'type'     => 'media',
//         'title'    => __( 'Background Image', 'your-text-domain' ),
//         'desc'     => __( 'Upload or select the background image for the Case Studies section.', 'your-text-domain' ),
//         'default'  => array(
//             'url' => get_template_directory_uri() . '/assets/images/default-about-bg.svg'
//         ),
//     ),
//     array(
//         'id'       => 'casestudies_us_heading',
//         'type'     => 'text',
//         'title'    => __( 'Section Heading', 'your-text-domain' ),
//         'default'  => __( 'Case Studies', 'your-text-domain' ),
//     ),
//     array(
//         'id'      => 'casestudies_paragraph_1',
//         'type'    => 'textarea',
//         'title'   => __( 'First Paragraph', 'your-text-domain' ),
//         'default' => __( 'ATN was founded by our CEO Aaron Richards (M.S) in 2022. But his search for passive income started long before that.', 'your-text-domain' ),
//     ),
//         array(
//             'id'       => 'video_slides',
//             'type'     => 'slides',
//             'title'    => 'Video Slides',
//             'subtitle' => 'Add video thumbnails and URLs',
//             'placeholder' => array(
//                 'title'       => 'Enter video title',
//                 'description' => 'Enter description',
//                 'media '         => 'Enter video URL',
//             ),
//         ),
//     )
// ));














// Redux::set_section($opt_name, array(
//     'title'  => __('Client Reviews', 'your-theme-textdomain'),
//     'id'     => 'clients_reviews_section',
//     'fields' => array(
//         array(
//             'id'       => 'clients_reviews',
//             'type'     => 'slides',
//             'title'    => __('Client Reviews', 'your-theme-textdomain'),
//             'subtitle' => __('Add multiple client reviews easily.', 'your-theme-textdomain'),
//             'show'     => array(
//                 'title'       => true, // Client name
//                 'description' => true, // Client comment
//                 'url'         => true, // Image URL
//             ),
//             'default'  => array(
//                 array(
//                     'title'       => 'Jordan',
//                     'description' => '25% a Quarter, I mean, where else are you going to get that?',
//                     'url'         => 'path/to/default-image.jpg',
//                 ),
//                 array(
//                     'title'       => 'John',
//                     'description' => 'On a scale of 1-10, I’m gonna give ATN a number 10.',
//                     'url'         => 'path/to/default-image.jpg',
//                 ),
//             ),
//         ),
//         // Separate rating slider field for each client
//         array(
//             'id'       => 'clients_reviews_ratings',
//             'type'     => 'slider',
//             'title'    => __('Client Ratings', 'your-theme-textdomain'),
//             'subtitle' => __('Add ratings for each client review.', 'your-theme-textdomain'),
//             'show'     => array(
//                 'title' => true, // Client name matching the title above
//                 'description' => false,
//                 'url' => false,
//             ),
//             'default'  => array(
//                 array(
//                     'title'  => 'Jordan',
//                     'rating' => 4.5,
//                 ),
//                 array(
//                     'title'  => 'John',
//                     'rating' => 5.0,
//                 ),
//             ),
//         ),
//     ),
// ));



// Redux::set_section($opt_name, array(
//     'title'  => __('Client Reviews', 'your-theme-textdomain'),
//     'id'     => 'clients_reviews_section',
//     'fields' => array(
//         array(
//             'id'       => 'clients_reviews',
//             'type'     => 'slides',
//             'title'    => __('Client Reviews', 'your-theme-textdomain'),
//             'subtitle' => __('Add multiple client reviews.', 'your-theme-textdomain'),
//             'show'     => array(
//                 'title'       => true,  // Client Name
//                 'description' => true,  // Client Comment
//                 'url'       => true,  // Client Image URL
//             ),
//             'default'  => array(
//                 array(
//                     'title'       => 'Jordan',
//                     'description' => '25% a Quarter, I mean, where else are you going to get that?',
//                     'url'       => 'path/to/default-image.jpg',
//                 ),
//                 array(
//                     'title'       => 'John',
//                     'description' => 'On a scale of 1-10, I’m gonna give ATN a number 10.',
//                     'url'       => 'path/to/default-image.jpg',
//                 ),
//             ),
//         ),
//     ),
// ));






Redux::set_section($opt_name, array(
    'title'  => __('About Us Section', 'your-theme-textdomain'),
    'id'     => 'about_us_section',
    'fields' => array(
        array(
            'id'       => 'about_us_background_image',
            'type'     => 'media',
            'title'    => __('Background Image', 'your-theme-textdomain'),
            'subtitle' => __('Upload the background image for the About Us section.', 'your-theme-textdomain'),
            'default'  => '',
        ),
        array(
            'id'       => 'about_us_title',
            'type'     => 'text',
            'title'    => __('Section Title', 'your-theme-textdomain'),
            'subtitle' => __('Enter the title for the About Us section.', 'your-theme-textdomain'),
            'default'  => 'Who is Aaron Richards?',
        ),
        array(
            'id'       => 'about_us_content',
            'type'     => 'textarea',
            'title'    => __('Section Content', 'your-theme-textdomain'),
            'subtitle' => __('Enter the content for the About Us section.', 'your-theme-textdomain'),
            'default'  => 'ATN was founded by our CEO Aaron Richards (M.S) in 2022...',
        ),
        array(
            'id'       => 'about_us_client_count',
            'type'     => 'text',
            'title'    => __('Client Count', 'your-theme-textdomain'),
            'subtitle' => __('Enter the number of happy clients.', 'your-theme-textdomain'),
            'default'  => '250+',
        ),
        array(
            'id'       => 'about_us_client_image',
            'type'     => 'media',
            'title'    => __('Client Image', 'your-theme-textdomain'),
            'subtitle' => __('Upload an image for the client section.', 'your-theme-textdomain'),
            'default'  => '',
        ),
    ),
));






if ( class_exists( 'Redux' ) ) {
    Redux::set_section( $opt_name, array(
        'title'  => __( 'FAQ Section', 'text-domain' ),
        'id'     => 'faq-section',
        'icon'   => 'el el-question-sign',
        'fields' => array(
            array(
                'id'       => 'faq_question_1',
                'type'     => 'text',
                'title'    => __( 'FAQ Question 1', 'text-domain' ),
                'default'  => __( 'No question provided.', 'text-domain' ),
            ),
            array(
                'id'       => 'faq_answer_1',
                'type'     => 'editor',
                'title'    => __( 'FAQ Answer 1', 'text-domain' ),
                'default'  => __( 'No answer provided.', 'text-domain' ),
            ),
            array(
                'id'       => 'faq_question_2',
                'type'     => 'text',
                'title'    => __( 'FAQ Question 2', 'text-domain' ),
                'default'  => __( 'No question provided.', 'text-domain' ),
            ),
            array(
                'id'       => 'faq_answer_2',
                'type'     => 'editor',
                'title'    => __( 'FAQ Answer 2', 'text-domain' ),
                'default'  => __( 'No answer provided.', 'text-domain' ),
            ),
            array(
                'id'       => 'faq_question_3',
                'type'     => 'text',
                'title'    => __( 'FAQ Question 3', 'text-domain' ),
                'default'  => __( 'No question provided.', 'text-domain' ),
            ),
            array(
                'id'       => 'faq_answer_3',
                'type'     => 'editor',
                'title'    => __( 'FAQ Answer 3', 'text-domain' ),
                'default'  => __( 'No answer provided.', 'text-domain' ),
            ),
            array(
                'id'       => 'faq_image',
                'type'     => 'media',
                'title'    => __( 'FAQ Image', 'text-domain' ),
                'default'  => array(
                    'url' => 'img/about-1.png', // Default image path
                ),
            ),
        ),
    ));
}







if ( class_exists( 'Redux' ) ) {
    Redux::set_section( $opt_name, array(
        'title'  => __( 'Best Client Section', 'text-domain' ),
        'id'     => 'best-client-section',
        'icon'   => 'el el-user',
        'fields' => array(  array(
            'id'       => 'bc_background_image',
            'type'     => 'media',
            'title'    => __('Background Image', 'your-theme-textdomain'),
            'subtitle' => __('Upload the background image for the  section.', 'your-theme-textdomain'),
            'default'  => '',
        ),
            array(
                'id'       => 'bc_section_title',
                'type'     => 'text',
                'title'    => __( 'Section Title', 'text-domain' ),
                'default'  => __( 'Watch Our Client Interviews Down Below', 'text-domain' ),
            ),
            array(
                'id'       => 'bc_section_description',
                'type'     => 'textarea',
                'title'    => __( 'Section Description', 'text-domain' ),
                'default'  => __( 'Define your short-term and long-term financial goals. Whether it’s saving for retirement, buying a house, or funding your children’s education.', 'text-domain' ),
            ),
            array(
                'id'       => 'bc_video_link',
                'type'     => 'url',
                'title'    => __('Video Link', 'text-domain'),
                'default'  => 'https://atn.linkbuilderpros.com/wp-content/uploads/2024/04/FUNNEL-_52000-IN-90-DAYS_-Jordans-Testimonial.mp4',
            ),
            array(
                'id'       => 'bc_image',
                'type'     => 'media',
                'title'    => __('Section Image', 'text-domain'),
                'default'  => array(
                    'url' => 'img/ourbestclient.png',
                ),
            ),
            array(
                'id'       => 'bc_button_link',
                'type'     => 'text',
                'title'    => __( 'Button Link', 'text-domain' ),
                'default'  => 'https://lyo3enoazb6.typeform.com/to/kKGOpHmb?typeform=&amp;typeform-source=atnunlimited.co',
            ),

            
        ),




    ));
}










Redux::set_section($opt_name, array(
    'title'  => 'Slider Section',
    'id'     => 'slider_section',
    'desc'   => 'Add slides to your homepage slider.',
    'icon'   => 'el el-photo',
    'fields' => array(
        array(
            'id'       => 'slider_background',
            'type'     => 'media',
            'title'    => 'Slider Background Image',
            'default'  => '',
            'url'      => true,
        ),
        array(
            'id'       => 'slider_title',
            'type'     => 'text',
            'title'    => 'Slider Title',
            'default'  => '$10k+ A Month Case Studies',
        ),
        array(
            'id'       => 'slider_button_text',
            'type'     => 'text',
            'title'    => 'Button Text',
            'default'  => 'Schedule A Call',
        ),
        array(
            'id'       => 'slider_button_link',
            'type'     => 'text',
            'title'    => 'Button Link',
            'default'  => 'https://lyo3enoazb6.typeform.com/to/kKGOpHmb?typeform=&amp;typeform-source=atnunlimited.co',
        ),
        array(
            'id'       => 'best_clients_slides',
            'type'     => 'slides',
            'title'    => __('Client Slides', 'your-text-domain'),
            'subtitle' => __('Add slides for the client slider.', 'your-text-domain'),
            'desc'     => __('Each slide can include an image, title, and video URL.', 'your-text-domain'),
            'placeholder' => array(
                'title'       => __('Slide Title', 'your-text-domain'),
                'description' => __('Video Duration (e.g., 27:08 Min)', 'your-text-domain'),
                'url'         => __('Video URL', 'your-text-domain'),
            ),
        ),
    ),
));




// Redux::set_section($opt_name, array(
//     'title'      => __('Our Best Clients Slider', 'your-text-domain'),
//     'id'         => 'our_best_clients_slider',
//     'fields'     => array(
//         array(
//             'id'       => 'best_clients_slides',
//             'type'     => 'slides',
//             'title'    => __('Client Slides', 'your-text-domain'),
//             'subtitle' => __('Add slides for the client slider.', 'your-text-domain'),
//             'desc'     => __('Each slide can include an image, title, and video URL.', 'your-text-domain'),
//             'placeholder' => array(
//                 'title'       => __('Slide Title', 'your-text-domain'),
//                 'description' => __('Video Duration (e.g., 27:08 Min)', 'your-text-domain'),
//                 'url'         => __('Video URL', 'your-text-domain'),
//             ),
//         ),
//     ),
// ));


// Redux::set_section($opt_name, array(
//     'title'      => __('Video Upload Section', 'your-text-domain'),
//     'id'         => 'video_upload_section',
//     'fields'     => array(
//         array(
//             'id'       => 'video_upload_field',
//             'type'     => 'media',
//             'url'      => true,
//             'title'    => __('Upload a Video', 'your-text-domain'),
//             'desc'     => __('Upload or select a video file from the Media Library.', 'your-text-domain'),
//             'subtitle' => __('Video upload field.', 'your-text-domain'),
//             'preview'  => true,
//             'default'  => array(
//                 'url' => '',
//             ),
//             'library_filter' => array('mp4', 'mov', 'avi'), // Optional: Restrict to specific video formats
//         ),
//     ),
// ));




Redux::set_section($opt_name, array(
    'title'  => 'Client Video Testimonials',
    'id'     => 'client_videos_section',
    'desc'   => 'Add video testimonials from clients.',
    'icon'   => 'el el-film',
    'fields' => array(
        array(
            'id'       => 'client_videos',
            'type'     => 'slides',
            'title'    => __('Client Videos', 'your-text-domain'),
            'subtitle' => __('Upload client video testimonials.', 'your-text-domain'),
            'desc'     => __('Each slide can include a video URL and poster image.', 'your-text-domain'),
            'placeholder' => array(
                'title'       => __('Video Title', 'your-text-domain'),
                'description' => __('Video Description', 'your-text-domain'),
                'url'         => __('Video URL (MP4 format)', 'your-text-domain'),
            ),
        ),
    ),
));



Redux::set_section($opt_name, array(
    'title'  => 'FAQs with Videos',
    'id'     => 'faq_video_section',
    'desc'   => 'Add FAQ items with videos.',
    'icon'   => 'el el-question-sign',
    'fields' => array(
        array(
            'id'       => 'faq_video_items',
            'type'     => 'slides',
            'title'    => __('FAQ Items', 'your-text-domain'),
            'subtitle' => __('Add FAQs with video support.', 'your-text-domain'),
            'desc'     => __('Each slide represents a FAQ item.', 'your-text-domain'),
            'placeholder' => array(
                'title'       => __('Question', 'your-text-domain'),
                'description' => __('Answer', 'your-text-domain'),
                'url'         => __('Video URL', 'your-text-domain'),
            ),
        ),
    ),
));





Redux::set_section( $opt_name, array(
    'title'      => 'Call to Action',
    'id'         => 'cta_section',
    'desc'       => 'Manage the call to action section for your site.',
    'icon'       => 'el el-bullhorn',
    'fields'     => array(
        array(
            'id'       => 'cta_bg_image',
            'type'     => 'media',
            'title'    => __('Background Image', 'your-theme-textdomain'),
            'desc'     => __('Upload the background image for the CTA section.', 'your-theme-textdomain'),
            'default'  => array(
                'url' => 'https://atn.linkbuilderpros.com/wp-content/uploads/2024/05/ezgif.com-jpg-to-webp-converter.webp'
            ),
        ),
        array(
            'id'       => 'cta_heading',
            'type'     => 'text',
            'title'    => __('Heading', 'your-theme-textdomain'),
            'default'  => __('Start Making Passive Income Now', 'your-theme-textdomain'),
        ),
        array(
            'id'       => 'cta_button_link',
            'type'     => 'text',
            'title'    => __('Button Link', 'your-theme-textdomain'),
            'default'  => 'https://lyo3enoazb6.typeform.com/to/kKGOpHmb?typeform=&amp;typeform-source=atnunlimited.co',
        ),
    )
));







// if ( !class_exists( 'Redux' ) ) {
//     return;
// }

// Redux::set_section( $opt_name, array(
//     'title'  => __( 'Case Studies Section', 'your-text-domain' ),
//     'id'     => 'case_studies_section',
//     'desc'   => __( 'Configure the Case Studies carousel.', 'your-text-domain' ),
//     'icon'   => 'el el-film',
//     'fields' => array(
//         array(
//             'id'       => 'case_studies_slides',
//             'type'     => 'slides',
//             'title'    => __( 'Case Studies Slides', 'your-text-domain' ),
//             'subtitle' => __( 'Add, edit, or remove slides for the Case Studies section.', 'your-text-domain' ),
//             'placeholder' => array(
//                 'title'       => __( 'Video Title', 'your-text-domain' ),
//                 'description' => __( 'Short description or testimonial.', 'your-text-domain' ),
//                 'url'         => __( 'Thumbnail URL or external video link', 'your-text-domain' ),
//             ),
//             'show' => array(
//                 'title'       => true,
//                 'description' => true,
//                 'url'         => true,
//             ),
//             'default'  => array(
//                 array(
//                     'title'       => 'Case Study 1',
//                     'description' => 'Brief description of the first case study.',
//                     'url'         => 'https://example.com/video-thumbnail1.png',
//                 ),
//                 array(
//                     'title'       => 'Case Study 2',
//                     'description' => 'Brief description of the second case study.',
//                     'url'         => 'https://example.com/video-thumbnail2.png',
//                 ),
//             ),
//         ),
//     ),
// ) );











// Redux Framework option for Features Start

// if ( ! class_exists( 'Redux' ) ) 
//     return;


//  {
//     Redux::set_section( $opt_name, array(
//         'title'  => __( 'feature Section', 'text-domain' ),
//         'id'     => 'feature-section',
//         'icon'   => 'el el-briefcase',
//         'fields' => array(
//             array(
//                 'id'       => 'feature_items',
//                 'type'     => 'slides',
//                 'title'    => __( 'feature Items', 'text-domain' ),
//                 'subtitle' => __( 'Add, edit, or remove services.', 'text-domain' ),
//                 'placeholder' => array(
//                     'title'       => __( 'feature Title', 'text-domain' ),
//                     'description' => __( 'feature Description', 'text-domain' ),
//                     'url'         => __( 'Read More Link', 'text-domain' ),
//                 ),
//             ),
//         ),
//     ));
// }



// if ( ! class_exists( 'Redux' ) ) 
//     return;

// $opt_name = 'redux_demo'; // Make sure this is the same as in get_option()

// Redux::set_section( $opt_name, array(
//     'title'  => __( 'Feature Section', 'text-domain' ),
//     'id'     => 'feature-section',
//     'icon'   => 'el el-briefcase',
//     'fields' => array(
//         array(
//             'id'       => 'feature_items',
//             'type'     => 'slides',
//             'title'    => __( 'Feature Items', 'text-domain' ),
//             'subtitle' => __( 'Add, edit, or remove features.', 'text-domain' ),
//             'fields' => array(
//                 array(
//                     'id'       => 'feature_image',
//                     'type'     => 'media',
//                     'title'    => __( 'Feature Image', 'text-domain' ),
//                     'desc'     => __( 'Upload an image for the feature.', 'text-domain' ),
//                     'default'  => '',
//                 ),
//                 array(
//                     'id'       => 'feature_title',
//                     'type'     => 'text',
//                     'title'    => __( 'Feature Title', 'text-domain' ),
//                     'desc'     => __( 'Enter the title for this feature.', 'text-domain' ),
//                     'default'  => '',
//                 ),
//                 array(
//                     'id'       => 'feature_description',
//                     'type'     => 'textarea',
//                     'title'    => __( 'Feature Description', 'text-domain' ),
//                     'desc'     => __( 'Enter the description for this feature.', 'text-domain' ),
//                     'default'  => '',
//                 ),
//                 array(
//                     'id'       => 'feature_url',
//                     'type'     => 'text',
//                     'title'    => __( 'Feature URL', 'text-domain' ),
//                     'desc'     => __( 'Enter the URL for this feature.', 'text-domain' ),
//                     'default'  => '',
//                 ),
//             ),
//         ),
//     ),
// ));






// if ( ! class_exists( 'Redux' ) ) {
//     return;
// }

// $opt_name = 'redux_demo'; // Ensure this matches your Redux configuration

// Redux::set_section( $opt_name, array(
//     'title'  => __( 'Feature Section', 'text-domain' ),
//     'id'     => 'feature_section_2',
//     'icon'   => 'el el-picture',
//     'fields' => array(
//         array(
//             'id'       => 'feature_image',
//             'type'     => 'media',
//             'title'    => __( 'Feature Image', 'text-domain' ),
//             'desc'     => __( 'Upload or select an image for the feature section.', 'text-domain' ),
//             'default'  => '',
//         ),
//         array(
//             'id'       => 'feature_heading',
//             'type'     => 'text',
//             'title'    => __( 'Feature Heading', 'text-domain' ),
//             'default'  => 'Push Your Visitors Into Happy Customers',
//         ),
//         array(
//             'id'       => 'feature_subheading',
//             'type'     => 'text',
//             'title'    => __( 'Feature Subheading', 'text-domain' ),
//             'default'  => 'Features',
//         ),
//         array(
//             'id'       => 'feature_description',
//             'type'     => 'textarea',
//             'title'    => __( 'Feature Description', 'text-domain' ),
//             'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit...',
//         ),
//         // Missing comma added here
//         array(
//             'id'       => 'item_number1',
//             'type'     => 'text',
//             'title'    => __( 'Number', 'text-domain' ),
//             'desc'     => __( 'Enter the number.', 'text-domain' ),
//             'validate' => 'numeric',
//             'default'  => '100',
//         ),
//         array(
//             'id'       => 'item_text1',
//             'type'     => 'text',
//             'title'    => __( 'Text', 'text-domain' ),
//             'desc'     => __( 'Enter the text.', 'text-domain' ),
//             'default'  => 'Sample Text',
//         ),

//         array(
//             'id'       => 'item_number2',
//             'type'     => 'text',
//             'title'    => __( 'Number', 'text-domain' ),
//             'desc'     => __( 'Enter the number.', 'text-domain' ),
//             'validate' => 'numeric',
//             'default'  => '100',
//         ),
//         array(
//             'id'       => 'item_text2',
//             'type'     => 'text',
//             'title'    => __( 'Text', 'text-domain' ),
//             'desc'     => __( 'Enter the text.', 'text-domain' ),
//             'default'  => 'Sample Text',
//         ),
//         array(
//             'id'       => 'feature_button_text',
//             'type'     => 'text',
//             'title'    => __( 'Button Text', 'text-domain' ),
//             'default'  => 'Read More',
//         ),
//         array(
//             'id'       => 'feature_button_url',
//             'type'     => 'text',
//             'title'    => __( 'Button URL', 'text-domain' ),
//             'default'  => '#',
//         ),
//     ),
// ) );






               







// if ( ! class_exists( 'Redux' ) ) return;

// Redux::set_section( $opt_name, array(
//     'title'  => __( 'Feature Section', 'text-domain' ),
//     'id'     => 'feature-section',
//     'icon'   => 'el el-briefcase', // You can change the icon to something relevant to features
//     'fields' => array(
//         array(
//             'id'       => 'feature_items',
//             'type'     => 'slides',
//             'title'    => __( 'Feature Items', 'text-domain' ),
//             'subtitle' => __( 'Add, edit, or remove features.', 'text-domain' ),
//             'placeholder' => array(
//                 'title'       => __( 'Feature Title', 'text-domain' ),
//                 'description' => __( 'Feature Description', 'text-domain' ),
//                 'url'         => __( 'Read More Link', 'text-domain' ),
//             ),
//             'fields' => array(
//                 array(
//                     'id'       => 'feature_image',
//                     'type'     => 'media',
//                     'title'    => __( 'Feature Image', 'text-domain' ),
//                     'desc'     => __( 'Upload the image for this feature.', 'text-domain' ),
//                     'default'  => '',
//                 ),
//                 array(
//                     'id'       => 'feature_title',
//                     'type'     => 'text',
//                     'title'    => __( 'Feature Title', 'text-domain' ),
//                     'desc'     => __( 'Enter the title for this feature.', 'text-domain' ),
//                     'default'  => '',
//                 ),
//                 array(
//                     'id'       => 'feature_description',
//                     'type'     => 'textarea',
//                     'title'    => __( 'Feature Description', 'text-domain' ),
//                     'desc'     => __( 'Enter the description for this feature.', 'text-domain' ),
//                     'default'  => '',
//                 ),
//                 array(
//                     'id'       => 'feature_url',
//                     'type'     => 'text',
//                     'title'    => __( 'Feature URL', 'text-domain' ),
//                     'desc'     => __( 'Enter the URL for more information about this feature.', 'text-domain' ),
//                     'default'  => '',
//                 ),
//             ),
//         ),
//     ),
// ));


// if ( ! class_exists( 'Redux' ) ) 
//     return;

// $opt_name = 'redux_demo'; // Make sure this is the same name as used in get_option()

// Redux::set_section( $opt_name, array(
//     'title'  => __( 'Feature Section', 'text-domain' ),
//     'id'     => 'feature-section',
//     'icon'   => 'el el-briefcase',
//     'fields' => array(
//         array(
//             'id'       => 'feature_items',
//             'type'     => 'slides',
//             'title'    => __( 'Feature Items', 'text-domain' ),
//             'subtitle' => __( 'Add, edit, or remove features.', 'text-domain' ),
//             'placeholder' => array(
//                 'title'       => __( 'Feature Title', 'text-domain' ),
//                 'description' => __( 'Feature Description', 'text-domain' ), 
//                 'url'         => __( 'Read More Link', 'text-domain' ),
//             ),
//             'fields' => array(
//                 array(
//                     'id'       => 'feature_image',
//                     'type'     => 'media',
//                     'title'    => __( 'Feature Image', 'text-domain' ),
//                     'desc'     => __( 'Upload an image for the feature.', 'text-domain' ),
//                     'default'  => '',
//                 ),
//                 array(
//                     'id'       => 'feature_title',
//                     'type'     => 'text',
//                     'title'    => __( 'Feature Title', 'text-domain' ),
//                     'desc'     => __( 'Enter the title for this feature.', 'text-domain' ),
//                     'default'  => '',
//                 ),
//                 array(
//                     'id'       => 'feature_description',
//                     'type'     => 'textarea',
//                     'title'    => __( 'Feature Description', 'text-domain' ),
//                     'desc'     => __( 'Enter the description for this feature.', 'text-domain' ),
//                     'default'  => '',
//                 ),
//                 array(
//                     'id'       => 'feature_url',
//                     'type'     => 'text',
//                     'title'    => __( 'Feature URL', 'text-domain' ),
//                     'desc'     => __( 'Enter the URL for this feature.', 'text-domain' ),
//                     'default'  => '',
//                 ),
//             ),
//         ),
//     ),
// ));









// Redux::set_section($opt_name, [
//     'title'  => 'Our Features Section',
//     'id'     => 'our_features_section',
//     'desc'   => 'Settings for the Our Features Section',
//     'fields' => [
//         // Section Title and Description
//         [
//             'id'       => 'features_section_title',
//             'type'     => 'text',
//             'title'    => 'Section Title',
//             'default'  => 'Our Feature',
//         ],
//         [
//             'id'       => 'features_section_heading',
//             'type'     => 'text',
//             'title'    => 'Section Heading',
//             'default'  => 'Important Features For Email Marketing',
//         ],
//         [
//             'id'       => 'features_section_description',
//             'type'     => 'textarea',
//             'title'    => 'Section Description',
//             'default'  => 'Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores vitae quia vero quod incidunt culpa corporis, porro doloribus.',
//         ],

//         // Individual Feature 1
//         [
//             'id'       => 'feature_1_icon',
//             'type'     => 'text',
//             'title'    => 'Feature 1 Icon (FontAwesome)',
//             'default'  => 'fas fa-envelope',
//         ],
//         [
//             'id'       => 'feature_1_title',
//             'type'     => 'text',
//             'title'    => 'Feature 1 Title',
//             'default'  => 'Email Marketing',
//         ],
//         [
//             'id'       => 'feature_1_description',
//             'type'     => 'textarea',
//             'title'    => 'Feature 1 Description',
//             'default'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
//         ],
//         [
//             'id'       => 'feature_1_link',
//             'type'     => 'text',
//             'title'    => 'Feature 1 Link',
//             'default'  => '#',
//         ],

//         // Repeat this block for other features (Feature 2, 3, etc.)
//         [
//             'id'       => 'feature_2_icon',
//             'type'     => 'text',
//             'title'    => 'Feature 2 Icon (FontAwesome)',
//             'default'  => 'fas fa-mail-bulk',
//         ],
//         [
//             'id'       => 'feature_2_title',
//             'type'     => 'text',
//             'title'    => 'Feature 2 Title',
//             'default'  => 'Email Builder',
//         ],
//         [
//             'id'       => 'feature_2_description',
//             'type'     => 'textarea',
//             'title'    => 'Feature 2 Description',
//             'default'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
//         ],
//         [
//             'id'       => 'feature_2_link',
//             'type'     => 'text',
//             'title'    => 'Feature 2 Link',
//             'default'  => '#',
//         ],
        
//         // Add more features as needed (Feature 3, 4, etc.)
//     ],
// ]);

// if ( ! class_exists( 'Redux' ) ) {
//     return;
// }

// Register a new Redux Framework option for slides
// Redux::set_section( $opt_name, array(
//     'title'            => 'Slides Settings',
//     'id'               => 'slides_settings',
//     'desc'             => 'Manage slides for features section.',
//     'icon'             => 'fas fa-sliders-h',
//     'fields'           => array(
//         array(
//             'id'        => 'slide_items',
//             'type'      => 'repeater',
//             'title'     => 'Slides',
//             'subtitle'  => 'Add slides for features.',
//             'fields'    => array(
//                 array(
//                     'id'        => 'slide_icon',
//                     'type'      => 'text',
//                     'title'     => 'Icon Class',
//                     'default'   => 'fas fa-envelope',
//                     'desc'      => 'FontAwesome icon class for the slide.',
//                 ),
//                 array(
//                     'id'        => 'slide_title',
//                     'type'      => 'text',
//                     'title'     => 'Slide Title',
//                     'default'   => 'Email Marketing',
//                 ),
//                 array(
//                     'id'        => 'slide_description',
//                     'type'      => 'textarea',
//                     'title'     => 'Slide Description',
//                     'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//                 ),
//             ),
//             'title_field' => '{{{ slide_title }}}',
//         ),
//     ),
// ) );



// if ( ! class_exists( 'Redux' ) ) {
//     return;
// }




// Register a new Redux Framework option for slides


// Redux::set_section( $opt_name, array(
//     'title'            => 'Slides Settings',
//     'id'               => 'slides_settings',
//     'desc'             => 'Manage slides for features section.',
//     'icon'             => 'fas fa-sliders-h',
//     'fields'           => array(
//         array(
//             'id'        => 'slide_items',
//             'type'      => 'repeater',
//             'title'     => 'Slides',
//             'subtitle'  => 'Add slides for features.',
//             'fields'    => array(
//                 array(
//                     'id'        => 'slide_icon',
//                     'type'      => 'media',  // Changed from 'text' to 'media'
//                     'title'     => 'Slide Icon Image',
//                     'desc'      => 'Upload an image for the slide icon.',
//                     'default'   => '',  // No default image
//                     'url'       => true,  // Allows outputting image URL
//                 ),
//                 array(
//                     'id'        => 'slide_title',
//                     'type'      => 'text',
//                     'title'     => 'Slide Title',
//                     'default'   => 'Email Marketing',
//                 ),
//                 array(
//                     'id'        => 'slide_description',
//                     'type'      => 'textarea',
//                     'title'     => 'Slide Description',
//                     'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//                 ),
//             ),
//             'title_field' => '{{{ slide_title }}}',
//         ),
//     ),
// ) );


// if ( ! class_exists( 'Redux' ) ) {
//     return;
// }

// $opt_name = "redux_demo";

// // Add a new section for managing slides
// Redux::set_section( $opt_name, array(
//     'title'  => __( 'Slides Section', 'your-textdomain' ),
//     'id'     => 'slides_section',
//     'desc'   => __( 'Manage the slides for the "Important Features For Email Marketing" section.', 'your-textdomain' ),
//     'icon'   => 'el el-slides',
//     'fields' => array(
//         array(
//             'id'        => 'slides',
//             'type'      => 'sortable',
//             'title'     => __( 'Slides', 'your-textdomain' ),
//             'desc'      => __( 'Drag and drop to arrange the slides.', 'your-textdomain' ),
//             'default'   => array(
//                 array(
//                     'image'      => '',
//                     'title'      => 'Email Marketing',
//                     'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
//                     'link'       => '#'
//                 ),
//                 array(
//                     'image'      => '',
//                     'title'      => 'Email Builder',
//                     'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
//                     'link'       => '#'
//                 ),
//                 array(
//                     'image'      => '',
//                     'title'      => 'Customer Builder',
//                     'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
//                     'link'       => '#'
//                 ),
//             ),
//             'mode'      => 'text', // or 'image' if you want image mode
//             'label'     => __( 'Slide Details', 'your-textdomain' ),
//         ),
//     ),
// ) );







// Redux Framework option for Service Section




// Redux configuration services



// if ( ! class_exists( 'Redux' ) ) 
//     return;


//  {
//     Redux::set_section( $opt_name, array(
//         'title'  => __( 'Service Section', 'text-domain' ),
//         'id'     => 'service-section',
//         'icon'   => 'el el-briefcase',
//         'fields' => array(
//             array(
//                 'id'       => 'service_items',
//                 'type'     => 'slides',
//                 'title'    => __( 'Service Items', 'text-domain' ),
//                 'subtitle' => __( 'Add, edit, or remove services.', 'text-domain' ),
//                 'placeholder' => array(
//                     'title'       => __( 'Service Title', 'text-domain' ),
//                     'description' => __( 'Service Description', 'text-domain' ),
//                     'url'         => __( 'Read More Link', 'text-domain' ),
//                 ),
//             ),
//         ),
//     ));
// }






// Testimonial Section Configuration

// if ( ! class_exists( 'Redux' ) ) {
//     return;
// }


// Redux::set_section( $opt_name, array(
//     'title'      => __( 'Testimonial Section', 'your-textdomain' ),
//     'id'         => 'testimonial_section',
//     'desc'       => __( 'Configure the testimonial section.', 'your-textdomain' ),
//     'subsection' => true,
//     'fields'     => array(
//         array(
//             'id'       => 'testimonial_title',
//             'type'     => 'text',
//             'title'    => __( 'Section Title', 'your-textdomain' ),
//             'default'  => __( 'What Our Client Say About Us', 'your-textdomain' ),
//             'desc'     => __( 'The title of the testimonial section.', 'your-textdomain' ),
//         ),
//         array(
//             'id'       => 'testimonial_subtitle',
//             'type'     => 'text',
//             'title'    => __( 'Section Subtitle', 'your-textdomain' ),
//             'default'  => __( 'Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime...', 'your-textdomain' ),
//             'desc'     => __( 'The subtitle text for the testimonial section.', 'your-textdomain' ),
//         ),
//         array(
//             'id'       => 'testimonial_items',
//             'type'     => 'sortable',
//             'title'    => __( 'Testimonial Items', 'your-textdomain' ),
//             'desc'     => __( 'Add testimonials to display.', 'your-textdomain' ),
//             'default'  => array(
//                 array(
//                     'image'   => 'path_to_image/testimonial-img-1.jpg',
//                     'name'    => 'John Abraham',
//                     'location' => 'New York, USA',
//                     'testimonial' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
//                     'rating'  => 5,
//                 ),
//                 array(
//                     'image'   => 'path_to_image/testimonial-img-2.jpg',
//                     'name'    => 'Jane Doe',
//                     'location' => 'Los Angeles, USA',
//                     'testimonial' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
//                     'rating'  => 4,
//                 ),
//                 array(
//                     'image'   => 'path_to_image/testimonial-img-3.jpg',
//                     'name'    => 'Michael Smith',
//                     'location' => 'London, UK',
//                     'testimonial' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
//                     'rating'  => 5,
//                 ),
//             ),
//             'preview' => true,
//             'mode'    => 'list',
//         ),
//     ),
// ) );







// Subsection for Logo Settings under Media Uploads

 

// Redux::set_section(
//     $opt_name,
//     array(
//         'title'      => __('Logo Settings', 'your-text-domain'),
//         'id'         => 'logo-settings',
//         'desc'       => __('Configure the header and footer logos.', 'your-text-domain'),
//         'subsection' => true, // Defines this section as a child of the 'media' section
//         'fields'     => array(
//             array(
//                 'id'       => 'header_logo',
//                 'type'     => 'media',
//                 'url'      => true,
//                 'title'    => __('Header Logo', 'your-text-domain'),
//                 'compiler' => 'true',
//                 'desc'     => __('Upload or select the header logo.', 'your-text-domain'),
//                 'subtitle' => __('This logo will appear in the header.', 'your-text-domain'),
//                 'default'  => array(
//                     'url' => 'https://example.com/path-to-your-default-header-logo.png'
//                 ),
//             ),
//             array(
//                 'id'       => 'footer_logo',
//                 'type'     => 'media',
//                 'url'      => true,
//                 'title'    => __('Footer Logo', 'your-text-domain'),
//                 'compiler' => 'true',
//                 'desc'     => __('Upload or select the footer logo.', 'your-text-domain'),
//                 'subtitle' => __('This logo will appear in the footer.', 'your-text-domain'),
//                 'default'  => array(
//                     'url' => 'https://example.com/path-to-your-default-footer-logo.png'
//                 ),
//             ),
//         )
//     )
// );






// Redux Framework Configuration (Adding Contact Section Options)


Redux::set_section( 
    $opt_name,
    array(
        'title'      => __('Contact Options', 'your-text-domain'),
        'id'         => 'contact-options',
        'fields'     => array(
            array(
                'id'       => 'contact_title',
                'type'     => 'text',
                'title'    => __('Contact Title', 'your-text-domain'),
                'default'  => 'Get In Touch With Us',
            ),
            array(
                'id'       => 'contact_description',
                'type'     => 'textarea',
                'title'    => __('Contact Description', 'your-text-domain'),
                'default'  => 'Dolor sit amet consectetur, adipisicing elit...',
            ),
            array(
                'id'       => 'contact_address',
                'type'     => 'text',
                'title'    => __('Address', 'your-text-domain'),
                'default'  => '123 ranking Street, New York, USA',
            ),
            array(
                'id'       => 'contact_phone',
                'type'     => 'text',
                'title'    => __('Phone Number', 'your-text-domain'),
                'default'  => '+012 345 67890',
            ),
            array(
                'id'       => 'contact_email',
                'type'     => 'text',
                'title'    => __('Email Address', 'your-text-domain'),
                'default'  => 'info@example.com',
            ),
            array(
                'id'       => 'contact_social_links',
                'type'     => 'repeater',
                'title'    => __('Social Links', 'your-text-domain'),
                'fields'   => array(
                    array(
                        'id'       => 'social_icon',
                        'type'     => 'select',
                        'title'    => __('Social Icon', 'your-text-domain'),
                        'options'  => array(
                            'facebook'  => 'Facebook',
                            'twitter'   => 'Twitter',
                            'instagram' => 'Instagram',
                            'linkedin'  => 'LinkedIn',
                        ),
                    ),
                    array(
                        'id'       => 'social_url',
                        'type'     => 'text',
                        'title'    => __('Social URL', 'your-text-domain'),
                        'default'  => '#',
                    ),
                ),
            ),
            array(
                'id'       => 'contact_map_embed',
                'type'     => 'textarea',
                'title'    => __('Google Maps Embed Code', 'your-text-domain'),
                'default'  => '<iframe class="rounded w-100" style="height: 500px;" src="https://www.google.com/maps/embed?..."></iframe>',
            ),
        ),
    )
);





// Redux::set_section( $opt_name, array(
//     'title'      => __( 'Contact Section', 'redux-framework-demo' ),
//     'id'         => 'contact_section',
//     'desc'       => __( 'This is the section for the contact information.', 'redux-framework-demo' ),
//     'icon'       => 'el el-phone',
//     'fields'     => array(
//         // Working Hours
//         array(
//             'id'       => 'working_hours_text',
//             'type'     => 'textarea',
//             'title'    => __( 'Working Hours', 'redux-framework-demo' ),
//             'default'  => '9am – 5pm PST, Monday – Friday',
//             'desc'     => __( 'Enter the working hours here.', 'redux-framework-demo' ),
//         ),
//         // Phone Number
//         array(
//             'id'       => 'phone_number',
//             'type'     => 'text',
//             'title'    => __( 'Phone Number', 'redux-framework-demo' ),
//             'default'  => '+1 (800) 123-4567',
//             'desc'     => __( 'Enter your phone number here.', 'redux-framework-demo' ),
//         ),
//         // Note
//         array(
//             'id'       => 'note_text',
//             'type'     => 'textarea',
//             'title'    => __( 'Note', 'redux-framework-demo' ),
//             'default'  => '(Note: press releases are sent outside of business hours as well, but must be scheduled in advance)',
//             'desc'     => __( 'Enter a note or message about your working hours here.', 'redux-framework-demo' ),
//         ),
//     ),
// ) );




















// Redux Configuration for FAQ Section

// if ( class_exists( 'Redux' ) ) {
//     Redux::set_section( $opt_name, array(
//         'title'  => __( 'FAQ Section', 'text-domain' ),
//         'id'     => 'faq-section',
//         'icon'   => 'el el-question-sign',
//         'fields' => array(
//             array(
//                 'id'       => 'faq_items',
//                 'type'     => 'repeater',
//                 'title'    => __( 'FAQ Items', 'text-domain' ),
//                 'subtitle' => __( 'Add, edit, or remove FAQ items.', 'text-domain' ),
//                 'fields'   => array(
//                     array(
//                         'id'    => 'question',
//                         'type'  => 'text',
//                         'title' => __( 'Question', 'text-domain' ),
//                     ),
//                     array(
//                         'id'    => 'answer',
//                         'type'  => 'editor',
//                         'title' => __( 'Answer', 'text-domain' ),
//                     ),
//                 ),
//             ),
//         ),
//     ));
// }








// if ( class_exists( 'Redux' ) ) {
//     Redux::set_section( $opt_name, array(
//         'title'  => __( 'FAQ Section', 'text-domain' ),
//         'id'     => 'faq-section',
//         'icon'   => 'el el-question-sign',
//         'fields' => array(
//             array(
//                 'id'       => 'faq_question_1',
//                 'type'     => 'text',
//                 'title'    => __( 'FAQ Question 1', 'text-domain' ),
//                 'default'  => __( 'No question provided.', 'text-domain' ),
//             ),
//             array(
//                 'id'       => 'faq_answer_1',
//                 'type'     => 'editor',
//                 'title'    => __( 'FAQ Answer 1', 'text-domain' ),
//                 'default'  => __( 'No answer provided.', 'text-domain' ),
//             ),
//             array(
//                 'id'       => 'faq_question_2',
//                 'type'     => 'text',
//                 'title'    => __( 'FAQ Question 2', 'text-domain' ),
//                 'default'  => __( 'No question provided.', 'text-domain' ),
//             ),
//             array(
//                 'id'       => 'faq_answer_2',
//                 'type'     => 'editor',
//                 'title'    => __( 'FAQ Answer 2', 'text-domain' ),
//                 'default'  => __( 'No answer provided.', 'text-domain' ),
//             ),
//             array(
//                 'id'       => 'faq_question_3',
//                 'type'     => 'text',
//                 'title'    => __( 'FAQ Question 3', 'text-domain' ),
//                 'default'  => __( 'No question provided.', 'text-domain' ),
//             ),
//             array(
//                 'id'       => 'faq_answer_3',
//                 'type'     => 'editor',
//                 'title'    => __( 'FAQ Answer 3', 'text-domain' ),
//                 'default'  => __( 'No answer provided.', 'text-domain' ),
//             ),
//             array(
//                 'id'       => 'faq_image',
//                 'type'     => 'media',
//                 'title'    => __( 'FAQ Image', 'text-domain' ),
//                 'default'  => array(
//                     'url' => 'img/about-1.png', // Default image path
//                 ),
//             ),
//         ),
//     ));
// }












// Redux Framework options for Pricing Section


// if ( ! class_exists( 'Redux' ) ) {
//     return;
// }

// Redux::set_section( $opt_name, array(
//     'title'  => esc_html__( 'Pricing Plans', 'your-textdomain' ),
//     'id'     => 'pricing_plans',
//     'desc'   => esc_html__( 'Configure the pricing plans for your website.', 'your-textdomain' ),
//     'icon'   => 'el el-money',
//     'fields' => array(
//         array(
//             'id'      => 'basic_price',
//             'type'    => 'text',
//             'title'   => esc_html__( 'Basic Plan Price', 'your-textdomain' ),
//             'default' => '$00/mo',
//         ),
//         array(
//             'id'      => 'basic_plan_features', // Corrected ID
//             'type'    => 'textarea',
//             'title'   => esc_html__( 'Basic Plan Features', 'your-textdomain' ),
//             'default' => 'Limited Access Library, Customer Support, Pre-built Email Templates, Reporting & Analytics, Forms & Landing Pages',
//         ),
//         array(
//             'id'      => 'basic_button_text',
//             'type'    => 'text',
//             'title'   => esc_html__( 'Basic Plan Button Text', 'your-textdomain' ),
//             'default' => 'Get Started',
//         ),
//         array(
//             'id'      => 'standard_price',
//             'type'    => 'text',
//             'title'   => esc_html__( 'Standard Plan Price', 'your-textdomain' ),
//             'default' => '$23/mo',
//         ),
//         array(
//             'id'      => 'standard_plan_features', // Corrected ID
//             'type'    => 'textarea',
//             'title'   => esc_html__( 'Standard Plan Features', 'your-textdomain' ),
//             'default' => 'Limited Access Library, Customer Support, Pre-built Email Templates, Reporting & Analytics, Forms & Landing Pages',
//         ),
//         array(
//             'id'      => 'standard_button_text',
//             'type'    => 'text',
//             'title'   => esc_html__( 'Standard Plan Button Text', 'your-textdomain' ),
//             'default' => 'Get Started',
//         ),
//         array(
//             'id'      => 'premium_price',
//             'type'    => 'text',
//             'title'   => esc_html__( 'Premium Plan Price', 'your-textdomain' ),
//             'default' => '$49/mo',
//         ),
//         array(
//             'id'      => 'premium_plan_features', // Corrected ID
//             'type'    => 'textarea',
//             'title'   => esc_html__( 'Premium Plan Features', 'your-textdomain' ),
//             'default' => 'Limited Access Library, Customer Support, Pre-built Email Templates, Reporting & Analytics, Forms & Landing Pages',
//         ),
//         array(
//             'id'      => 'premium_button_text',
//             'type'    => 'text',
//             'title'   => esc_html__( 'Premium Plan Button Text', 'your-textdomain' ),
//             'default' => 'Get Started',
//         ),
//     ),
// ) );








 // Redux Framework Slides

// Redux::set_section( $opt_name, array(
//     'title'      => __( 'Testimonial Section', 'your-textdomain' ),
//     'id'         => 'testimonial_section',
//     'icon'       => 'el el-th-list',
//     'fields'     => array(
//         array(
//             'id'       => 'testimonial_title',
//             'type'     => 'text',
//             'title'    => __( 'Section Title', 'your-textdomain' ),
//             'default'  => __( 'Testimonial', 'your-textdomain' ),
//         ),
//         array(
//             'id'       => 'testimonial_heading',
//             'type'     => 'text',
//             'title'    => __( 'Heading', 'your-textdomain' ),
//             'default'  => __( 'What Our Client Say About Us', 'your-textdomain' ),
//         ),
//         array(
//             'id'       => 'testimonial_description',
//             'type'     => 'textarea',
//             'title'    => __( 'Description', 'your-textdomain' ),
//             'default'  => __( 'Dolor sit amet consectetur, adipisicing elit...', 'your-textdomain' ),
//         ),
//         array(
//             'id'       => 'testimonials',
//             'type'     => 'repeater',
//             'title'    => __( 'Testimonials', 'your-textdomain' ),
//             'fields'   => array(
//                 array(
//                     'id'    => 'testimonial_name',
//                     'type'  => 'text',
//                     'title' => __( 'Name', 'your-textdomain' ),
//                 ),
//                 array(
//                     'id'    => 'testimonial_location',
//                     'type'  => 'text',
//                     'title' => __( 'Location', 'your-textdomain' ),
//                 ),
//                 array(
//                     'id'    => 'testimonial_image',
//                     'type'  => 'media',
//                     'title' => __( 'Image', 'your-textdomain' ),
//                 ),
//                 array(
//                     'id'    => 'testimonial_content',
//                     'type'  => 'textarea',
//                     'title' => __( 'Testimonial Content', 'your-textdomain' ),
//                 ),
//                 array(
//                     'id'    => 'testimonial_rating',
//                     'type'  => 'slider',
//                     'title' => __( 'Rating', 'your-textdomain' ),
//                     'default' => 5,
//                     'min'     => 1,
//                     'max'     => 5,
//                     'step'    => 1,
//                 ),
//             ),
//         ),
//     ),
// ) );

// Redux::set_section($opt_name, array(
//     'title'  => __('Testimonial Section', 'your-text-domain'),
//     'id'     => 'testimonial-section',
//     'desc'   => __('Customize the Testimonial Section.', 'your-text-domain'),
//     'icon'   => 'el el-comment-alt',
//     'fields' => array(
//         array(
//             'id'          => 'testimonial_items',
//             'type'        => 'tabbed',
//             'title'       => __('Testimonials', 'your-text-domain'),
//             'subtitle'    => __('Add testimonials from clients.', 'your-text-domain'),
//             'default'     => array( // Define a valid default structure for the `tabbed` field
//                 array(
//                     'testimonial_image'   => array('url' => ''), // Default empty image
//                     'testimonial_name'    => 'John Doe',         // Default name
//                     'testimonial_location'=> 'New York, USA',    // Default location
//                     'testimonial_content' => 'This is a sample testimonial content.', // Default content
//                     'testimonial_rating'  => 5,                  // Default rating
//                 ),
//             ),
//             'fields'      => array(
//                 array(
//                     'id'       => 'testimonial_image',
//                     'type'     => 'media',
//                     'title'    => __('Client Image', 'your-text-domain'),
//                     'default'  => array('url' => ''), // Default empty image
//                 ),
//                 array(
//                     'id'       => 'testimonial_name',
//                     'type'     => 'text',
//                     'title'    => __('Client Name', 'your-text-domain'),
//                     'default'  => 'John Doe',
//                 ),
//                 array(
//                     'id'       => 'testimonial_location',
//                     'type'     => 'text',
//                     'title'    => __('Client Location', 'your-text-domain'),
//                     'default'  => 'New York, USA',
//                 ),
//                 array(
//                     'id'       => 'testimonial_content',
//                     'type'     => 'textarea',
//                     'title'    => __('Testimonial Content', 'your-text-domain'),
//                     'default'  => 'This is a sample testimonial content.',
//                 ),
//                 array(
//                     'id'       => 'testimonial_rating',
//                     'type'     => 'slider',
//                     'title'    => __('Rating', 'your-text-domain'),
//                     'default'  => 5,
//                     'min'      => 1,
//                     'max'      => 5,
//                     'step'     => 1,
//                 ),
//             ),
//         ),
//     ),
// ));

// Redux::set_section($opt_name, array(
//     'title'  => __('Testimonial Section', 'your-text-domain'),
//     'id'     => 'testimonial_section',
//     'fields' => array(
//         array(
//             'id'       => 'testimonial_items',
//             'type'     => 'slides', // You can also use 'repeater' for more control
//             'title'    => __('Testimonial Items', 'your-text-domain'),
//             'subtitle' => __('Add testimonials to display in the slider.', 'your-text-domain'),
//             'placeholder' => array(
//                 'title'       => __('Client Name', 'your-text-domain'),
//                 'description' => __('Testimonial Content', 'your-text-domain'),
//                 'url'         => __('Client Location', 'your-text-domain'),
//             ),
//             // Add 'rating' to the slide fields
//             'show' => array(
//                 'title'       => true,
//                 'description' => true,
//                 'url'         => true,
//                 'image'       => true,
//                 'rating'      => true, // Dynamic rating field
//             ),
//         ),
//     ),
// ));



// Redux::set_section($opt_name, [
//     'title'  => 'Testimonials',
//     'id'     => 'testimonials_section',
//     'desc'   => 'Settings for the testimonial section',
//     'fields' => [
//         [
//             'id'       => 'testimonials_title',
//             'type'     => 'text',
//             'title'    => 'Section Title',
//             'default'  => 'What Our Client Say About Us',
//         ],
//         [
//             'id'       => 'testimonials_description',
//             'type'     => 'textarea',
//             'title'    => 'Section Description',
//             'default'  => 'Dolor sit amet consectetur, adipisicing elit...',
//         ],
//         [
//             'id'       => 'testimonials_items',
//             'type'     => 'multi_text',
//             'title'    => 'Testimonial Items',
//             'desc'     => 'Add testimonial data as JSON objects. Format: {"name":"John Doe","location":"New York, USA","image":"img.jpg","text":"Testimonial text","stars":5}',
//         ],
//     ],
// ]);





//  Redux Framework Footer Configuration












Redux::set_section( $opt_name, array(
    'title'  => 'Footer Settings',
    'id'     => 'footer-settings',
    'desc'   => 'Configure the footer section for your website.',
    'icon'   => 'el el-website',
    'fields' => array(
        array(
            'id'       => 'footer_logo',
            'type'     => 'media',
            'title'    => 'Footer Logo',
            'subtitle' => 'Upload the logo for the footer.',
            'desc'     => 'Choose a logo image to be displayed in the footer.',
            'default'  => array( 'url' => '' ),
        ),
        array(
            'id'       => 'footer_text',
            'type'     => 'textarea',
            'title'    => 'Footer Text',
            'subtitle' => 'Add text for the footer.',
            'desc'     => 'Enter the description or information you want to display in the footer.',
            'default'  => 'We are not registered investment advisors, brokers, accountants, insurance agents.',
        ),
      
        array(
            'id'       => 'footer_address',
            'type'     => 'textarea',
            'title'    => 'Footer Address',
            'subtitle' => 'Enter the address for the footer.',
            'desc'     => 'This address will be displayed under the Contact section.',
            'default'  => '1603 Capitol Ave Suite 41- C1053 Cheyenne WY 82001',
        ),
        array(
            'id'       => 'footer_email',
            'type'     => 'text',
            'title'    => 'Footer Email',
            'subtitle' => 'Enter the email address for the footer.',
            'desc'     => 'This email will be displayed under the Contact section.',
            'default'  => 'support@atnunlimited.com',
        ),
        
        array(
            'id'       => 'footer_newsletter',
            'type'     => 'text',
            'title'    => 'Newsletter Signup Text',
            'subtitle' => 'Enter text for the newsletter section.',
            'desc'     => 'Text that invites users to join the newsletter.',
            'default'  => 'Join Our Newsletter',
        ),
    ),
) );
























// -> START Extensions.

/**
 * Metaboxes
 */
require_once Redux_Core::$dir . '../sample/metaboxes.php';

/**
 * Raw README
 */
if ( file_exists( $dir . '/../README.md' ) ) {
	$section = array(
		'icon'   => 'el el-list-alt',
		'title'  => esc_html__( 'Documentation', 'your-textdomain-here' ),
		'fields' => array(
			array(
				'id'           => 'opt-raw-documentation',
				'type'         => 'raw',
				'markdown'     => true,
				'content_path' => __DIR__ . '/../README.md', // FULL PATH, not relative, please.
			),
		),
	);

	Redux::set_section( $opt_name, $section );
}

Redux::set_section(
	$opt_name,
	array(
		'icon'            => 'el el-list-alt',
		'title'           => esc_html__( 'Customizer Only', 'your-textdomain-here' ),
		'desc'            => '<p class="description">' . esc_html__( 'This Section should be visible only in Customizer', 'your-textdomain-here' ) . '</p>',
		'customizer_only' => true,
		'fields'          => array(
			array(
				'id'              => 'opt-customizer-only',
				'type'            => 'select',
				'title'           => esc_html__( 'Customizer Only Option', 'your-textdomain-here' ),
				'subtitle'        => esc_html__( 'The subtitle is NOT visible in customizer', 'your-textdomain-here' ),
				'desc'            => esc_html__( 'The field desc is NOT visible in customizer.', 'your-textdomain-here' ),
				'customizer_only' => true,
				'options'         => array(
					'1' => esc_html__( 'Opt 1', 'your-textdomain-here' ),
					'2' => esc_html__( 'Opt 2', 'your-textdomain-here' ),
					'3' => esc_html__( 'Opt 3', 'your-textdomain-here' ),
				),
				'default'         => '2',
			),
		),
	)
);







/*
 * <--- END SECTIONS
 */

/*
 * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR OTHER CONFIGS MAY OVERRIDE YOUR CODE.
 */

/*
 * --> Action hook examples.
 */

// Function to test the compiler hook and demo CSS output.
// Above 10 is a priority, but 2 is necessary to include the dynamically generated CSS to be sent to the function.
// add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);
//
// Change the arguments after they've been declared, but before the panel is created.
// add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );
//
// Change the default value of a field after it's been set, but before it's been used.
// add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );
//
// Dynamically add a section.
// It can be also used to modify sections/fields.
// add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');
// .
if ( ! function_exists( 'compiler_action' ) ) {
	/**
	 * This is a test function that will let you see when the compiler hook occurs.
	 * It only runs if a field's value has changed and compiler => true is set.
	 *
	 * @param array  $options        Options values.
	 * @param string $css            Compiler selector CSS values  compiler => array( CSS SELECTORS ).
	 * @param array  $changed_values Any values that have changed since last save.
	 */
	function compiler_action( array $options, string $css, array $changed_values ) {
		echo '<h1>The compiler hook has run!</h1>';
		echo '<pre>';
		// phpcs:ignore WordPress.PHP.DevelopmentFunctions
		print_r( $changed_values ); // Values that have changed since the last save.
		// echo '<br/>';
		// print_r($options); //Option values.
		// echo '<br/>';
		// print_r($css); // Compiler selector CSS values compiler => array( CSS SELECTORS ).
		echo '</pre>';
	}
}

if ( ! function_exists( 'redux_validate_callback_function' ) ) {
	/**
	 * Custom function for the callback validation referenced above
	 *
	 * @param array $field          Field array.
	 * @param mixed $value          New value.
	 * @param mixed $existing_value Existing value.
	 *
	 * @return array
	 */
	function redux_validate_callback_function( array $field, $value, $existing_value ): array {
		$error   = false;
		$warning = false;

		// Do your validation.
		if ( 1 === (int) $value ) {
			$error = true;
			$value = $existing_value;
		} elseif ( 2 === (int) $value ) {
			$warning = true;
			$value   = $existing_value;
		}

		$return['value'] = $value;

		if ( true === $error ) {
			$field['msg']    = 'your custom error message';
			$return['error'] = $field;
		}

		if ( true === $warning ) {
			$field['msg']      = 'your custom warning message';
			$return['warning'] = $field;
		}

		return $return;
	}
}


if ( ! function_exists( 'dynamic_section' ) ) {
	/**
	 * Custom function for filtering the section array.
	 * Good for child themes to override or add to the sections.
	 * Simply include this function in the child themes functions.php file.
	 * NOTE: the defined constants for URLs and directories will NOT be available at this point in a child theme,
	 * so you must use get_template_directory_uri() if you want to use any of the built-in icons.
	 *
	 * @param array $sections Section array.
	 *
	 * @return array
	 */
	function dynamic_section( array $sections ): array {
		$sections[] = array(
			'title'  => esc_html__( 'Section via hook', 'your-textdomain-here' ),
			'desc'   => '<p class="description">' . esc_html__( 'This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.', 'your-textdomain-here' ) . '</p>',
			'icon'   => 'el el-paper-clip',

			// Leave this as a blank section, no options just some intro text set above.
			'fields' => array(),
		);

		return $sections;
	}
}

if ( ! function_exists( 'change_arguments' ) ) {
	/**
	 * Filter hook for filtering the args.
	 * Good for child themes to override or add to the args array.
	 * It can also be used in other functions.
	 *
	 * @param array $args Global arguments array.
	 *
	 * @return array
	 */
	function change_arguments( array $args ): array {
		$args['dev_mode'] = true;

		return $args;
	}
}

if ( ! function_exists( 'change_defaults' ) ) {
	/**
	 * Filter hook for filtering the default value of any given field. Very useful in development mode.
	 *
	 * @param array $defaults Default value array.
	 *
	 * @return array
	 */
	function change_defaults( array $defaults ): array {
		$defaults['str_replace'] = esc_html__( 'Testing filter hook!', 'your-textdomain-here' );

		return $defaults;
	}
}

if ( ! function_exists( 'redux_custom_sanitize' ) ) {
	/**
	 * Function to be used if the field sanitizes argument.
	 * Return value MUST be formatted or cleaned text to display.
	 *
	 * @param string $value Value to evaluate or clean.  Required.
	 *
	 * @return string
	 */
	function redux_custom_sanitize( string $value ): string {
		$return = '';

		foreach ( explode( ' ', $value ) as $w ) {
			foreach ( str_split( $w ) as $k => $v ) {
				if ( ( $k + 1 ) % 2 !== 0 && ctype_alpha( $v ) ) {
					$return .= mb_strtoupper( $v );
				} else {
					$return .= $v;
				}
			}

			$return .= ' ';
		}

		return $return;
	}
}

