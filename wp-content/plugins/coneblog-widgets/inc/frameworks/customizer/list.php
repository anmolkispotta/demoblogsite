<?php
/**
 *  Customizer Fields fore Posts List Widget
 */
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'custom',
	'settings'    => 'coneblog_widget_list_dummy_setting',
	'section'     => 'coneblog_widget_list',
		'default'         => '<h3 style="margin:50px 0 0 0; font-size: 0px">' . __( 'Control Posts List Styling as you like', 'coneblog-widgets' ) . '</h3>',
	'priority'    => 10,
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'radio-buttonset',
	'settings'    => 'cb_widget_list_text_alignment',
	'label'       => esc_html__( 'Conetnt Alignment', 'kirki' ),
	'section'     => 'coneblog_widget_list_layout',
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
            'element' => array(
                '.coneblog-posts-list .item-meta',
                '.coneblog-posts-list .item-meta .post-title'
            ),
            'property' => 'text-align'
        ),
    ),
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'typography',
	'settings'    => 'cb_list_typography_head',
	'label'       => esc_html__( 'Widget Head', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_list_typography',
	'default'     => [
		'font-family'    => 'Poppins',
		'variant'        => '700',
		'font-size'      => '20px',
		'line-height'    => '1.3',
		'letter-spacing' => '0',
		'text-transform' => 'uppercase',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' =>'.coneblog-posts-list-container .coneblog-widget-head h3',
		],
	],
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'typography',
	'settings'    => 'cb_list_typography_post_title',
	'label'       => esc_html__( 'Post Title', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_list_typography',
	'default'     => [
		'font-family'    => 'Poppins',
		'variant'        => '700',
		'font-size'      => '18px',
		'line-height'    => '1.3',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' =>'.coneblog-posts-list .item-meta .post-title a',
		],
	],
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'typography',
	'settings'    => 'cb_list_typography_post_excerpt',
	'label'       => esc_html__( 'Post Excerpt', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_list_typography',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '12px',
		'line-height'    => '1.3',
		'text-transform' => 'none',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' =>'.coneblog-posts-list .item-meta .post-desc',
		],
	],
] );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_list_post_widget_head_color',
    'label'       => __( 'Widget Heading', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_list_colors',
    'default'     => '#222222',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-posts-list-container .coneblog-widget-head h3',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_list_post_widget_head_bg_color',
    'label'       => __( 'Widget Heading (Background)', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_list_colors',
    'default'     => '#f6ce2b',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-posts-list-container .coneblog-widget-head h3',
            'property' => 'background-color'
        ),
        array(
            'element' => '.coneblog-posts-list-container .coneblog-widget-head',
            'property' => 'border-color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_list_post_title_color',
    'label'       => __( 'Post Title', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_list_colors',
    'default'     => '#333333',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-posts-list .item-meta .post-title a',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_list_post_excerpt_color',
    'label'       => __( 'Post Excerpt', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_list_colors',
    'default'     => '#555555',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-posts-list .item-meta .post-desc',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_list_term_icon_color',
    'label'       => __( 'Term Icon', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_list_colors',
    'default'     => '#FFFFFF',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-posts-list .list-item .grid-post-term span.term-icon',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_list_term_icon_bg_color',
    'label'       => __( 'Term Icon Background', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_list_colors',
    'default'     => '#000000',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-posts-list .list-item .grid-post-term span.term-icon',
            'property' => 'background-color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_list_term_label_color',
    'label'       => __( 'Term Name', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_list_colors',
    'default'     => '#000000',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-posts-list .list-item .grid-post-term span.term-name',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_list_term_label_bg_color',
    'label'       => __( 'Term Name Background', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_list_colors',
    'default'     => '#f6ce2b',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-posts-list .list-item .grid-post-term span.term-name',
            'property' => 'background-color'
        ),
    ),
) );