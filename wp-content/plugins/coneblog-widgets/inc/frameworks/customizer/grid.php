<?php
/**
 *  Customizer Fields fore Posts Grid Widget
 */
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'custom',
	'settings'    => 'coneblog_widget_grid_layout_heading',
	'section'     => 'coneblog_widget_grid',
		'default'         => '<h3 style="margin:50px 0 0 0; font-size: 0px">' . __( 'Control Grid Styling as you like', 'coneblog-widgets' ) . '</h3>',
	'priority'    => 10,
] );
/* Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'select',
	'settings'    => 'coneblog_widget_grid_widget_layout',
	'label'       => esc_html__( 'Overlay Layout', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_grid_layout',
	'default'     => '1',
	'placeholder' => esc_html__( 'Select', 'coneblog-widgets' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'1' => esc_html__( 'Layout 1', 'coneblog-widgets' ),
		'2' => esc_html__( 'Layout 2', 'coneblog-widgets' ),
		'3' => esc_html__( 'Layout 3', 'coneblog-widgets' ),
        '4' => esc_html__( 'Layout 4', 'coneblog-widgets' ),
		'5' => esc_html__( 'Layout 5', 'coneblog-widgets' ),
		'6' => esc_html__( 'Layout 6', 'coneblog-widgets' ),
	],
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'switch',
	'settings'    => 'coneblog_widget_grid_show_term',
	'label'       => esc_html__( 'Post Term', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_grid_layout',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'kirki' ),
		'off' => esc_html__( 'Hide', 'kirki' ),
	],
] ); */
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'radio-buttonset',
	'settings'    => 'coneblog_widget_grid_alignment',
	'label'       => esc_html__( 'Conetnt Alignment', 'kirki' ),
	'section'     => 'coneblog_widget_grid_layout',
	'default'     => 'left',
	'priority'    => 10,
	'choices'     => [
		'left'   => esc_html__( 'Left', 'coneblog-widgets' ),
		'center' => esc_html__( 'Center', 'coneblog-widgets' ),
		'right'  => esc_html__( 'Right', 'coneblog-widgets' ),
	],
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-grid-posts .featured-grid-item .featured-meta-inner',
            'property' => 'text-align'
        ),
    ),
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'slider',
	'settings'    => 'cb_grid_items_height',
	'label'       => esc_html__( 'Grid Items Height', 'coneblog-widgets' ),
    'description'       => esc_html__( 'Only works in some grid layouts', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_grid_layout',
	'default'     => 250,
	'choices'     => [
		'min'  => 0,
		'max'  => 1000,
		'step' => 5,
	],
    'transport'   => 'auto',
    'output' => array(
        array(
            'element'  => array(
                '.coneblog-grid-posts .featured-grid-layout-5 .featured-grid-item',
                '.coneblog-grid-posts .featured-grid-layout-6 .featured-grid-item'
            ),
            'property' => 'height',
            'units'    => 'px'
        ),
    ),
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'slider',
	'settings'    => 'cb_grid_overlay_opacity',
	'label'       => esc_html__( 'Overlay Opacity', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_grid_layout',
	'default'     => 0.7,
    'transport'   => 'auto',
	'choices'     => [
		'min'  => 0,
		'max'  => 1,
		'step' => .1,
	],
    'output' => array(
        array(
            'element'  => array('.coneblog-grid-posts .featured-grid-item .overlay'),
            'property' => 'opacity'
        ),
    ),
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'slider',
	'settings'    => 'cb_grid_overlay_hover_opacity',
	'label'       => esc_html__( 'Overlay Opacity (Hover)', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_grid_layout',
	'default'     => 0.5,
    'transport'   => 'auto',
	'choices'     => [
		'min'  => 0,
		'max'  => 1,
		'step' => .1,
	],
    'output' => array(
        array(
            'element'  => array('.coneblog-grid-posts .featured-grid-item:hover .overlay'),
            'property' => 'opacity'
        ),
    ),
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'slider',
	'settings'    => 'cb_grid_items_gap',
	'label'       => esc_html__( 'Grid Items Gap', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_grid_layout',
	'default'     => 5,
    'transport'   => 'auto',
	'choices'     => [
		'min'  => 0,
		'max'  => 50,
		'step' => 5,
	],
    'output' => array(
        array(
            'element'  => array('.coneblog-grid-posts .featured-grid-item'),
            'property' => 'padding',
            'units'    => 'px'
        ),
    ),
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'typography',
	'settings'    => 'cb_grid_typography_small',
	'label'       => esc_html__( 'Small Grid Title', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_grid_typography',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'font-size'      => '20px',
		'line-height'    => '1.3',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => array(
                '.coneblog-grid-posts .featured-grid-item .featured-meta h3 a',
            ),
		],
	],
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'typography',
	'settings'    => 'cb_grid_typography_large',
	'label'       => esc_html__( 'Large Grid Title', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_grid_typography',
	'default'     => [
		'font-family'    => 'Poppins',
		'variant'        => '700',
		'font-size'      => '36px',
		'line-height'    => '1.3',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => array(
                '.coneblog-grid-posts .featured-grid-layout-1 .featured-grid-item.grid-item-1 .featured-meta h3 a',
                '.coneblog-grid-posts .featured-grid-layout-2 .featured-grid-item.grid-item-1 .featured-meta h3 a',
                '.coneblog-grid-posts .featured-grid-layout-4 .featured-grid-item.grid-item-1 .featured-meta h3 a'
            ),
		],
	],
] );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_grid_post_title_color',
    'label'       => __( 'Post Title', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_grid_colors',
    'default'     => '#FFFFFF',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array(
                '.coneblog-grid-posts .featured-grid-item .featured-meta h3 a',
                '.coneblog-grid-posts .featured-grid-layout-1 .featured-grid-item.grid-item-1 .featured-meta h3 a',
                '.coneblog-grid-posts .featured-grid-layout-2 .featured-grid-item.grid-item-1 .featured-meta h3 a',
                '.coneblog-grid-posts .featured-grid-layout-4 .featured-grid-item.grid-item-1 .featured-meta h3 a'
            ),
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_grid_post_meta_color',
    'label'       => __( 'Post Meta', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_grid_colors',
    'default'     => '#DDDDDD',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array(
                '.coneblog-grid-posts .featured-grid-item .featured-meta-inner > span',
                '.coneblog-grid-posts .featured-grid-item .featured-meta-inner > span a',
                '.coneblog-grid-posts .featured-grid-item .featured-meta-inner .post-meta.post-comments i',
            ),
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_grid_term_icon_color',
    'label'       => __( 'Term Icon', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_grid_colors',
    'default'     => '#FFFFFF',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-grid-posts .featured-grid-item .grid-post-term span.term-icon',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_grid_term_icon_bg_color',
    'label'       => __( 'Term Icon Background', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_grid_colors',
    'default'     => '#000000',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-grid-posts .featured-grid-item .grid-post-term span.term-icon',
            'property' => 'background-color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_grid_term_label_color',
    'label'       => __( 'Term Name', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_grid_colors',
    'default'     => '#000000',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-grid-posts .featured-grid-item .grid-post-term span.term-name',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_grid_term_label_bg_color',
    'label'       => __( 'Term Name Background', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_grid_colors',
    'default'     => '#f6ce2b',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-grid-posts .featured-grid-item .grid-post-term span.term-name',
            'property' => 'background-color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_grid_overlay_color',
    'label'       => __( 'Overlay Color', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_grid_colors',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => array('.coneblog-grid-posts .featured-grid-item .overlay'),
            'property' => 'background'
        ),
    ),
) );