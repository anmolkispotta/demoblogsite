<?php 
/**
 * Shortcode for Posts Grid
 * 
 * @since 1.1.0
 * @author WP Cone
 * @copyright 2021 WPCone.com
 */
use ConeBlogWidgets\Classes\Helper;
function coneblog_shortcode_grid($atts) {

	// Default Attribute Values
	$atts = shortcode_atts( array(
        'layout' => 1,
        'overlay' => 1,
		'show_term' => true,
		'show_meta' => true,
		'full_grid_link' => true,
		'post_type' => 'post',
		'category' => 0,
		'limit' => 5,
		'offset' => 0,

    ), $atts, 'CONEBLOG_GRID' );

	$get_overlay_color = get_theme_mod('cb_grid_overlay_color', '#000000');
	$overlay_color = Helper::coneblog_hex2rgba(''.$get_overlay_color.'', 1);
	$gradient_overlay = "";
	if($atts['overlay'] == 2) {
		$gradient_overlay = ' style="background: linear-gradient(0deg, '.$overlay_color.' 0%, '.$overlay_color.' 50%, rgba(255,255,255,0) 100%);"';
	}
	// Set WP_Query arguments.
	$args = array(
		'post_type' => ''.$atts['post_type'].'',
		'post_status' => 'publish',
		'cat'	=> $atts['category'],
		'posts_per_page' => $atts['limit'],
		'offset' => $atts['offset'],
	);

	$posts = new \WP_Query($args);
	$i = 1;
	if(!is_admin()):
	ob_start();
	?>
	<div class="coneblog coneblog-grid-posts fetured-grid-container">
			<div class="featured-layout-row row ml-0 mr-0">
					<div class="featured-grid-layout-<?php echo esc_attr($atts['layout']) ?>">
							<?php
							if($posts->have_posts()) {
								while($posts->have_posts()):
									$posts->the_post();
									if(has_post_thumbnail()):
										$thumb_uri = get_the_post_thumbnail_url(get_the_ID(), 'coneblog-grid-thumb');
									else:
										$thumb_uri = CONEBLOG_ASSETS_PATH. 'img/thumb-medium.png';
									endif;
									?>
									<div class="featured-grid-item grid-item-<?php echo $i ?><?php Helper::coneblog_small_grid_class(esc_attr($atts['layout']), $i) ?>">
										<div class="grid-item-inner" style="background-image:url(<?php echo esc_url($thumb_uri) ?>)">
											<?php
											if ( 'true' == $atts['full_grid_link'] ) { ?>
											<a href="<?php echo get_the_permalink() ?>" class="grid-link"></a>
											<?php } ?>
											<?php
											if ( '1' == $atts['overlay'] ) { ?>
											<div class="overlay"></div>
											<?php } ?>
											<div class="featured-meta<?php echo ($atts['overlay'] == '2' ? ' meta-overlay' : '')   ?>">
												<div class="featured-meta-inner"<?php  echo esc_attr($gradient_overlay) ?>>
													<?php
													if ( 'true' == $atts['show_term'] ) {
														Helper::coneblog_post_term_box();
													}
													?>
													<h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3>
													<?php
													if ( 'true' == $atts['show_meta'] ) { ?>
														<span class="grid-meta-info d-block">
															<?php Helper::coneblog_posted_on() ?>
															<?php Helper::coneblog_entry_comments() ?>
														</span>
													<?php } ?>
												</div>
												
											</div>
										</div>
									</div>
								<?php
								$i++;
								endwhile;
							}
							\wp_reset_postdata();
							?>
					</div>
				
			</div>
		</div>
	<?php
	endif;
	return ob_get_clean();
}
