<?php
/**
 * Add the top level menu page.
 */
function coneblog_options_page() {
    add_menu_page(
        'ConeBlog Widgets',
        'ConeBlog',
        'manage_options',
        'coneblog',
        'coneblog_options_page_html',
        CONEBLOG_ASSETS_PATH. 'img/cb-dashicon.png',
        30
    );
}
add_action( 'admin_menu', 'coneblog_options_page' );

/**
 * Add sub-menu page.
 */
function coneblog_options_page_builders() {
    add_submenu_page(
        'coneblog',
        'ConeBlog Builders',
        'Builders',
        'manage_options',
        'coneblog',
        'coneblog_options_page_html' );
}
add_action('admin_menu', 'coneblog_options_page_builders');
function coneblog_options_page_widgets() {
    add_submenu_page(
        'coneblog',
        'ConeBlog Widgets',
        'Widgets',
        'manage_options',
        'cb-widgets',
        'coneblog_options_page_html' );
}
add_action('admin_menu', 'coneblog_options_page_widgets');

function coneblog_options_page_tools() {
    add_submenu_page(
        'coneblog',
        'ConeBlog Tools',
        'Tools',
        'manage_options',
        'cb-tools',
        'coneblog_options_page_html' );
}
add_action('admin_menu', 'coneblog_options_page_tools');

function coneblog_options_page_support() {
    add_submenu_page(
        'coneblog',
        'ConeBlog Support',
        'Support',
        'manage_options',
        'cb-support',
        'coneblog_options_page_html' );
}
add_action('admin_menu', 'coneblog_options_page_support');