<?php
/*
* Customizer Sections & Fields config for kirki.
*/
Kirki::add_config( 'coneblog_widgets_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/**
 * Main Panel
 */
Kirki::add_panel( 'coneblog_widgets', array(
    'priority'    => 10,
    'title'       => esc_html__( 'CB Widgets', 'coneblog-widgets' ),
    'description' => esc_html__( 'Manage Widgets Styling and Layout', 'coneblog-widgets' ),
    'icon'  => 'dashicons-schedule',
) );

/**
 * Sub Sections
 */

// Posts Grid Sections
Kirki::add_section( 'coneblog_widget_grid', array(
    'title'          => esc_html__( 'Posts Grid', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'panel'          => 'coneblog_widgets',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_grid_layout', array(
    'title'          => esc_html__( 'Layout', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_grid',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_grid_typography', array(
    'title'          => esc_html__( 'Typography', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_grid',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_grid_colors', array(
    'title'          => esc_html__( 'Colors', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_grid',
    'priority'       => 160,
) );

// Posts List Sections
Kirki::add_section( 'coneblog_widget_list', array(
    'title'          => esc_html__( 'Posts List', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'panel'          => 'coneblog_widgets',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_list_layout', array(
    'title'          => esc_html__( 'Layout', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_list',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_list_typography', array(
    'title'          => esc_html__( 'Typography', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_list',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_list_colors', array(
    'title'          => esc_html__( 'Colors', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_list',
    'priority'       => 160,
) );

// Classic Posts Sections
Kirki::add_section( 'coneblog_widget_classic', array(
    'title'          => esc_html__( 'Classic Posts', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'panel'          => 'coneblog_widgets',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_classic_layout', array(
    'title'          => esc_html__( 'Layout', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_classic',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_classic_typography', array(
    'title'          => esc_html__( 'Typography', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_classic',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_classic_colors', array(
    'title'          => esc_html__( 'Colors', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_classic',
    'priority'       => 160,
) );

// Posts Carousel Sections
Kirki::add_section( 'coneblog_widget_carousel', array(
    'title'          => esc_html__( 'Carousel', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'panel'          => 'coneblog_widgets',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_carousel_layout', array(
    'title'          => esc_html__( 'Layout', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_carousel',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_carousel_typography', array(
    'title'          => esc_html__( 'Typography', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_carousel',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_carousel_colors', array(
    'title'          => esc_html__( 'Colors', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_carousel',
    'priority'       => 160,
) );

// Posts Slider Sections
Kirki::add_section( 'coneblog_widget_slider', array(
    'title'          => esc_html__( 'Slider', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'panel'          => 'coneblog_widgets',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_slider_layout', array(
    'title'          => esc_html__( 'Layout', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_slider',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_slider_typography', array(
    'title'          => esc_html__( 'Typography', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_slider',
    'priority'       => 160,
) );
Kirki::add_section( 'coneblog_widget_slider_colors', array(
    'title'          => esc_html__( 'Colors', 'coneblog-widgets' ),
    'description'    => esc_html__( '', 'coneblog-widgets' ),
    'section'          => 'coneblog_widget_slider',
    'priority'       => 160,
) );

// Customizer Fields for Posts Grid Widget
require 'customizer/grid.php';

// Customizer Fields for Posts List Widget
require 'customizer/list.php';

// Customizer Fields for Classic Posts Widget
require 'customizer/classic.php';

// Customizer Fields for Carousel Widget
require 'customizer/carousel.php';

// Customizer Fields for Slider Widget
require 'customizer/slider.php';