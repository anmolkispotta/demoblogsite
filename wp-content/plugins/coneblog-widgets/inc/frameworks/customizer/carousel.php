<?php
/**
 *  Customizer Fields for Carousel Widget
 */
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'custom',
	'settings'    => 'coneblog_widget_carousel_dummy_setting',
	'section'     => 'coneblog_widget_carousel',
		'default'         => '<h3 style="margin:50px 0 0 0; font-size: 0px">' . __( 'Control Posts Cariusel Styling as you like', 'coneblog-widgets' ) . '</h3>',
	'priority'    => 10,
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'radio-buttonset',
	'settings'    => 'cb_widget_carousel_text_alignment',
	'label'       => esc_html__( 'Conetnt Alignment', 'kirki' ),
	'section'     => 'coneblog_widget_carousel_layout',
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
                '.coneblog-posts-carousel.layout-1 .coneblog-carousel .item .item-meta',
                '.coneblog-posts-carousel .coneblog-carousel .item .item-meta'
            ),
            'property' => 'text-align'
        ),
    ),
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'slider',
	'settings'    => 'cb_carousel_arrows_border_radius',
	'label'       => esc_html__( 'Navigation Arrows Border Radius (px)', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_carousel_layout',
	'default'     => 5,
    'transport'   => 'auto',
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
	],
    'output' => array(
        array(
            'element'  => array('.coneblog-carousel .owl-prev', '.coneblog-carousel .owl-next'),
            'property' => 'border-radius',
            'units'    => 'px'
        ),
    ),
] );

Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'typography',
	'settings'    => 'cb_carousel_typography_post_title',
	'label'       => esc_html__( 'Post Title', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_carousel_typography',
	'default'     => [
		'font-family'    => 'Poppins',
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
                '.coneblog-posts-carousel.layout-1 .coneblog-carousel .item .item-meta h3',
                '.coneblog-posts-carousel.layout-2 .coneblog-carousel .item .item-meta h3'
            ),
		],
	],
] );
Kirki::add_field( 'coneblog_widgets_config', [
	'type'        => 'typography',
	'settings'    => 'cb_carousel_typography_post_excerpt',
	'label'       => esc_html__( 'Post Excerpt', 'coneblog-widgets' ),
	'section'     => 'coneblog_widget_carousel_typography',
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
			'element' =>'.coneblog-carousel .item .extra-meta .post-desc',
		],
	],
] );

Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_carousel_post_title_color',
    'label'       => __( 'Post Title', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_carousel_colors',
    'default'     => '#333333',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-posts-carousel .coneblog-carousel .item .item-meta h3 a',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_carousel_post_excerpt_color',
    'label'       => __( 'Post Excerpt', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_carousel_colors',
    'default'     => '#555555',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-carousel .item .extra-meta .post-desc',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_carousel_term_icon_color',
    'label'       => __( 'Term Icon', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_carousel_colors',
    'default'     => '#FFFFFF',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-carousel .item .grid-post-term span.term-icon',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_carousel_term_icon_bg_color',
    'label'       => __( 'Term Icon Background', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_carousel_colors',
    'default'     => '#000000',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-carousel .item .grid-post-term span.term-icon',
            'property' => 'background-color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_carousel_term_label_color',
    'label'       => __( 'Term Name', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_carousel_colors',
    'default'     => '#000000',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-carousel .item .grid-post-term span.term-name',
            'property' => 'color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_carousel_term_label_bg_color',
    'label'       => __( 'Term Name Background', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_carousel_colors',
    'default'     => '#f6ce2b',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => '.coneblog-carousel .item .grid-post-term span.term-name',
            'property' => 'background-color'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_carousel_nav_arrow_icon',
    'label'       => __( 'Nav Arrow Icon Color', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_carousel_colors',
    'default'     => '#FFFFFF',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array('.coneblog-carousel .owl-prev', '.coneblog-carousel .owl-next'),
            'property' => 'color',
            'suffix'  => '!important'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_carousel_nav_arrow_icon_hover',
    'label'       => __( 'Nav Arrow Icon Color (Hover)', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_carousel_colors',
    'default'     => '#000000',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array('.coneblog-carousel .owl-prev:hover', '.coneblog-carousel .owl-next:hover'),
            'property' => 'color',
            'suffix'  => '!important'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_carousel_nav_arrow_icon_bg',
    'label'       => __( 'Nav Arrow Icon Background', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_carousel_colors',
    'default'     => '#000000',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array('.coneblog-carousel .owl-prev', '.coneblog-carousel .owl-next'),
            'property' => 'background',
            'suffix'  => '!important'
        ),
    ),
) );
Kirki::add_field( 'coneblog_widgets_config', array(
    'type'        => 'color',
    'settings'    => 'cb_carousel_nav_arrow_icon_bg_hover',
    'label'       => __( 'Nav Arrow Icon Background (Hover)', 'coneblog-widgets' ),
    'description' => esc_html__( '', 'coneblog-widgets' ),
    'section'     => 'coneblog_widget_carousel_colors',
    'default'     => '#f6ce2b',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element' => array('.coneblog-carousel .owl-prev:hover', '.coneblog-carousel .owl-next:hover'),
            'property' => 'background',
            'suffix'  => '!important'
        ),
    ),
) );