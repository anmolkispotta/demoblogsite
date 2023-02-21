<?php
/**
 *  Customizer Fields for Carousel Widget
 */
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'custom',
	'settings'    => 'coneblog_widget_slider_dummy_setting',
	'section'     => 'coneblog_widget_slider',
		'default'         => '<h3 style="margin:50px 0 0 0; font-size: 0px">' . __( 'Control Posts Cariusel Styling as you like', 'coneblog-widgets' ) . '</h3>',
	'priority'    => 10,
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'radio-buttonset',
	'settings'    => 'cb_widget_slider_text_alignment',
	'label'       => esc_html__( 'Conetnt Alignment', 'kirki' ),
	'section'     => 'coneblog_widget_slider_layout',
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
                '.coneblog-posts-slider .coneblog-slider .item .item-meta',
            ),
            'property' => 'text-align'
        ),
    ),
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'slider',
	'settings'    => 'cb_slider_arrows_border_radius',
	'label'       => esc_html__( 'Navigation Arrows Border Radius (px)', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_slider_layout',
	'default'     => 5,
    'transport'   => 'auto',
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
	],
    'output' => array(
        array(
            'element'  => array('.coneblog-slider .owl-prev', '.coneblog-slider .owl-next'),
            'property' => 'border-radius',
            'units'    => 'px'
        ),
    ),
] );

Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'typography',
	'settings'    => 'cb_slider_sm_typography_post_title',
	'label'       => esc_html__( 'Post Title (Compact Slider)', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_slider_typography',
	'default'     => [
		'font-family'    => 'Poppins',
		'variant'        => '700',
		'font-size'      => '24px',
		'line-height'    => '1.3',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => array(
                '.coneblog-posts-slider .coneblog-slider .item .item-meta h3'
            ),
		],
	],
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'typography',
	'settings'    => 'cb_slider_lg_typography_post_title',
	'label'       => esc_html__( 'Post Title (Full Width Slider)', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_slider_typography',
	'default'     => [
		'font-family'    => 'Poppins',
		'variant'        => '700',
		'font-size'      => '40px',
		'line-height'    => '1.3',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => array(
                '.coneblog-posts-slider.layout-2 .coneblog-slider .item .item-meta h3'
            ),
		],
	],
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'typography',
	'settings'    => 'cb_slider_typography_post_excerpt',
	'label'       => esc_html__( 'Post Excerpt', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_slider_typography',
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
			'element' =>'.coneblog-slider .item .extra-meta .post-desc',
		],
	],
] );

Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_slider_post_title_color',
    'label'       => __( 'Post Title', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_slider_colors',
    'default'     => '#333333',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-posts-carousel .coneblog-slider .item .item-meta h3 a',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_slider_post_excerpt_color',
    'label'       => __( 'Post Excerpt', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_slider_colors',
    'default'     => '#555555',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-slider .item .extra-meta .post-desc',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_slider_term_icon_color',
    'label'       => __( 'Term Icon', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_slider_colors',
    'default'     => '#FFFFFF',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-slider .item .grid-post-term span.term-icon',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_slider_term_icon_bg_color',
    'label'       => __( 'Term Icon Background', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_slider_colors',
    'default'     => '#000000',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-slider .item .grid-post-term span.term-icon',
            'property' => 'background-color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_slider_term_label_color',
    'label'       => __( 'Term Name', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_slider_colors',
    'default'     => '#000000',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-slider .item .grid-post-term span.term-name',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_slider_term_label_bg_color',
    'label'       => __( 'Term Name Background', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_slider_colors',
    'default'     => '#f6ce2b',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-slider .item .grid-post-term span.term-name',
            'property' => 'background-color'
        ),
    ),
) );

Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'radio-buttonset',
	'settings'    => 'cb_widget_slider_icon_color_toggle',
	'label'       => esc_html__( 'Nav Arrow Icons Color', 'kirki' ),
	'section'     => 'coneblog_widget_slider_colors',
	'default'     => 'normal',
	'priority'    => 10,
	'choices'     => [
		'normal'   => esc_html__( 'Normal', 'coneblog-widgets' ),
		'hover' => esc_html__( 'Hover', 'coneblog-widgets' ),
	],
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array(
                '.coneblog-posts-slider .coneblog-slider .item .item-meta',
            ),
            'property' => 'text-align'
        ),
    ),
] );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_slider_nav_arrow_icon',
    'label'       => __( '', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_slider_colors',
    'default'     => '#FFFFFF',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array('.coneblog-slider .owl-prev', '.coneblog-slider .owl-next'),
            'property' => 'color',
            'suffix'  => '!important'
        ),
    ),
    'active_callback' => [
        [
            'setting'  => 'cb_widget_slider_icon_color_toggle',
            'operator' => '==',
            'value'    => 'normal',
        ]
    ],
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_slider_nav_arrow_icon_hover',
    'label'       => __( '', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_slider_colors',
    'default'     => '#000000',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array('.coneblog-slider .owl-prev:hover', '.coneblog-slider .owl-next:hover'),
            'property' => 'color',
            'suffix'  => '!important'
        ),
    ),
    'active_callback' => [
        [
            'setting'  => 'cb_widget_slider_icon_color_toggle',
            'operator' => '==',
            'value'    => 'hover',
        ]
    ],
) );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'radio-buttonset',
	'settings'    => 'cb_widget_slider_icon_bg_toggle',
	'label'       => esc_html__( 'Nav Arrow Icons Background', 'kirki' ),
	'section'     => 'coneblog_widget_slider_colors',
	'default'     => 'normal',
	'priority'    => 10,
	'choices'     => [
		'normal'   => esc_html__( 'Normal', 'coneblog-widgets' ),
		'hover' => esc_html__( 'Hover', 'coneblog-widgets' ),
	],
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array(
                '.coneblog-posts-slider .coneblog-slider .item .item-meta',
            ),
            'property' => 'text-align'
        ),
    ),
] );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_slider_nav_arrow_icon_bg',
    'label'       => __( '', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_slider_colors',
    'default'     => '#000000',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array('.coneblog-slider .owl-prev', '.coneblog-slider .owl-next'),
            'property' => 'background',
            'suffix'  => '!important'
        ),
    ),
    'active_callback' => [
        [
            'setting'  => 'cb_widget_slider_icon_bg_toggle',
            'operator' => '==',
            'value'    => 'normal',
        ]
    ],
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_slider_nav_arrow_icon_bg_hover',
    'label'       => __( '', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_slider_colors',
    'default'     => '#f6ce2b',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array('.coneblog-slider .owl-prev:hover', '.coneblog-slider .owl-next:hover'),
            'property' => 'background',
            'suffix'  => '!important'
        ),
    ),
    'active_callback' => [
        [
            'setting'  => 'cb_widget_slider_icon_bg_toggle',
            'operator' => '==',
            'value'    => 'hover',
        ]
    ],
) );

Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'radio-buttonset',
	'settings'    => 'cb_widget_slider_nav_dots_toggle',
	'label'       => esc_html__( 'Nav Dots Color', 'kirki' ),
	'section'     => 'coneblog_widget_slider_colors',
	'default'     => 'normal',
	'priority'    => 10,
	'choices'     => [
		'normal'   => esc_html__( 'Normal', 'coneblog-widgets' ),
		'hover' => esc_html__( 'Hover', 'coneblog-widgets' ),
	],
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array(
                '.coneblog-posts-slider .coneblog-slider .item .item-meta',
            ),
            'property' => 'text-align'
        ),
    ),
] );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_slider_nav_dot_normal',
    'label'       => __( '', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_slider_colors',
    'default'     => '#cccccc',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array('.coneblog-slider .owl-dots .owl-dot'),
            'property' => 'background-color',
            'suffix'  => '!important'
        ),
    ),
    'active_callback' => [
        [
            'setting'  => 'cb_widget_slider_nav_dots_toggle',
            'operator' => '==',
            'value'    => 'normal',
        ]
    ],
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_slider_nav_dot_hover',
    'label'       => __( '', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_slider_colors',
    'default'     => '#f6ce2b',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array('.coneblog-slider .owl-dots .owl-dot:hover', '.coneblog-slider .owl-dots .owl-dot.active'),
            'property' => 'background-color',
            'suffix'  => '!important'
        ),
    ),
    'active_callback' => [
        [
            'setting'  => 'cb_widget_slider_nav_dots_toggle',
            'operator' => '==',
            'value'    => 'hover',
        ]
    ],
) );