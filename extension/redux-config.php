<?php
if ( ! class_exists( 'Redux' ) ) {
    return;
}

// Define Redux option name
$opt_name = 'my_theme_options';

// Set up arguments for Redux
Redux::set_args( $opt_name, array(
    'opt_name'            => $opt_name,
    'display_name'        => 'My Theme Options',
    'display_version'     => '1.0.0',
    'menu_title'          => 'Theme Options',
    'page_title'          => 'Theme Options',
    'menu_type'           => 'menu', // Can be "submenu"
    'allow_sub_menu'      => true,
    'menu_icon'           => 'dashicons-admin-generic', // Menu icon
    'admin_bar'           => true,
    'admin_bar_icon'      => 'dashicons-admin-generic',
    'customizer'          => true,
    'global_variable'     => 'my_theme',
    'dev_mode'            => true,
    'update_notice'       => true,
    'page_priority'       => 61,
    'page_permissions'    => 'manage_options',
    'save_defaults'       => true,
    'show_import_export'  => true,
) );

// Section 1: General Settings
Redux::set_section( $opt_name, array(
    'title'  => __( 'General Settings', 'my-theme' ),
    'id'     => 'general',
    'desc'   => __( 'Basic theme settings.', 'my-theme' ),
    'icon'   => 'el el-home',
    'fields' => array(
        array(
            'id'       => 'site_logo',
            'type'     => 'media',
            'title'    => __( 'Site Logo', 'my-theme' ),
            'subtitle' => __( 'Upload the site logo.', 'my-theme' ),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png',
            ),
        ),
        array(
            'id'       => 'footer_text',
            'type'     => 'text',
            'title'    => __( 'Footer Text', 'my-theme' ),
            'default'  => __( '© 2024 My Theme. All rights reserved.', 'my-theme' ),
        ),
    ),
) );

// Section 2: Header Settings
Redux::set_section( $opt_name, array(
    'title'  => __( 'Header Settings', 'my-theme' ),
    'id'     => 'header',
    'desc'   => __( 'Configure the header settings.', 'my-theme' ),
    'icon'   => 'el el-credit-card',
    'fields' => array(
        array(
            'id'       => 'header_background',
            'type'     => 'color',
            'title'    => __( 'Header Background Color', 'my-theme' ),
            'default'  => '#ffffff',
        ),
        array(
            'id'       => 'header_menu_position',
            'type'     => 'select',
            'title'    => __( 'Menu Position', 'my-theme' ),
            'options'  => array(
                'left'   => __( 'Left', 'my-theme' ),
                'center' => __( 'Center', 'my-theme' ),
                'right'  => __( 'Right', 'my-theme' ),
            ),
            'default'  => 'center',
        ),
    ),
) );

// Section 3: Footer Settings
Redux::set_section( $opt_name, array(
    'title'  => __( 'Footer Settings', 'my-theme' ),
    'id'     => 'footer',
    'desc'   => __( 'Configure the footer settings.', 'my-theme' ),
    'icon'   => 'el el-th-large',
    'fields' => array(
        array(
            'id'       => 'footer_background',
            'type'     => 'color',
            'title'    => __( 'Footer Background Color', 'my-theme' ),
            'default'  => '#000000',
        ),
        array(
            'id'       => 'footer_copyright',
            'type'     => 'textarea',
            'title'    => __( 'Copyright Text', 'my-theme' ),
            'default'  => __( '© 2024 My Theme. All rights reserved.', 'my-theme' ),
        ),
    ),
) );
