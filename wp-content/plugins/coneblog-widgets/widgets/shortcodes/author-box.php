<?php 
/**
 * Shortcode for Author Box
 * 
 * @since 1.3.0
 * @author WP Cone
 * @copyright 2021 WPCone.com
 */
use ConeBlogWidgets\Classes\Helper;
function coneblog_shortcode_author_box($atts) {

	// Default Attribute Values
	$atts = shortcode_atts( array(
        'author' => 1,
        'layout' => 1,
        'box_shadow' => true,
		'avatar' => true,
		'title' => true,
		'bio' => true,
        'social_links' => true,
		'articles' => true,
        'articles_limit' => 3,
		'title' => 'Founder & CEO',
		'business_name' => 'Company',
		'business_url' => 'https://example.com',
        'fb_url' => '',
        'tw_url' => '',
        'insta_url' => '',
        'in_url' => '',
        'pin_url' => '',
        'reddit_url' => '',
        'yt_url' => '',
        'behance_url' => '',

    ), $atts, 'CONEBLOG_AUTHOR' );

    // Get the Author Meta
    $author_bio = nl2br(get_the_author_meta('description', $atts['author']));
    $author_name = get_the_author_meta('display_name', $atts['author']);
    $avatar = get_avatar($atts['author'], 128);

	// Set WP_Query arguments.
	$args = array(
		'post_status' => 'publish',
		'posts_per_page' => $atts['articles_limit'],
		'author' => $atts['author'],
	);

	$posts = new \WP_Query($args);
	$i = 1;
	if(!is_admin()):
	ob_start();
	?>
	<div class="coneblog-author-box-container layout-<?php echo esc_attr($atts['layout']) ?>">
				
        <?php
            if($atts['layout'] == 1) {
                include 'templates/author_box/layout-1.php';
            }
            elseif($atts['layout'] == 2) {
                include 'templates/author_box/layout-2.php';
            }
        ?>
        
    </div>
	<?php
	endif;
	return ob_get_clean();
}
