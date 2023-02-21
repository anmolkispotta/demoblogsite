<?php 
/**
 * Shortcode for Posts Slider
 * 
 * @since 1.1.0
 * @author WP Cone
 * @copyright 2021 WPCone.com
 */
use ConeBlogWidgets\Classes\Helper;
function coneblog_shortcode_slider($atts) {

	// Default Attribute Values
	$atts = shortcode_atts( array(
        'layout' => 1,
        'overlay' => 1,
        'full_slide_link' => true,
        'height_1' => 450,
        'height_2' => 300,
		'show_title' => true,
		'show_meta' => true,
		'show_term' => true,
        'show_excerpt' => false,
		'post_type' => 'post',
		'category' => 0,
		'limit' => 5,
		'offset' => 0,
        'is_rtl' => false,
        'cb_autoplay' => true,
        'cb_autoplay_speed' => 3000,
        'cb_loop' => true,
        'lazy_load' => true,
        'dot_nav' => false,
        'arrow_nav' => true,

    ), $atts, 'CONEBLOG_SLIDER' );

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
	 <div class="coneblog coneblog-posts-slider-container layout-<?php echo esc_attr($atts['layout']) ?>">
        <div class="coneblog-posts-slider layout-<?php echo esc_attr($atts['layout']) ?>">
            <div class="coneblog-slider owl-carousel">
                <?php
                $list_posts = new \WP_Query($args);
                if($list_posts->have_posts()) {
                    while($list_posts->have_posts()):
                        $list_posts->the_post();
                        if(has_post_thumbnail()):
                            if($atts['layout'] == '1') {
                                $thumb_uri = get_the_post_thumbnail_url(get_the_ID(), 'coneblog-carousel-thumb');
                            } else {
                                $thumb_uri = get_the_post_thumbnail_url(get_the_ID(), 'coneblog-slider-wide');
                            }
                            
                        else:
                            $thumb_uri = CONEBLOG_ASSETS_PATH. 'img/thumb-carousel.png';
                        endif;
                ?>
                    <div class="item" style="background-image: url('<?php echo esc_url($thumb_uri) ?>'); height:<?php echo ( esc_attr($atts['layout'] == 1 ? $atts['height_1'].'px' : $atts['height_2'].'px') ) ?>">
                        <?php
                            if ( 'true' == $atts['full_slide_link'] ) { ?>
                            <a href="<?php the_permalink() ?>" class="grid-link"></a>
                        <?php } ?>
                        <?php
                            if ( '1' == $atts['overlay'] ) { ?>
                            <div class="overlay"></div>
                        <?php } ?>
                        <div class="item-meta <?php echo ($atts['overlay'] == '2' ? ' meta-overlay' : '')   ?>">
                            <?php
                                if ( 'true' == $atts['show_term'] ) {
                                    Helper::coneblog_post_term_box();
                                }
                            ?>
                            <?php
                                if ( 'true' == $atts['show_title'] ) { ?>
                                    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <?php } ?>
                            
                            <div class="extra-meta">
                                <?php
                                    if ( 'true' == $atts['show_meta'] ) { ?>
                                    <div class="meta-info">
                                        <?php Helper::coneblog_posted_by() ?> <?php Helper::coneblog_posted_on() ?> <?php Helper::coneblog_entry_comments() ?>
                                    </div>
                                <?php } ?>
                                <?php
                                if ( 'true' == $atts['show_excerpt'] ) { ?>
                                    <p class="post-desc"><?php echo Helper::coneblog_list_excerpt(15); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                }
                    \wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($){
            $(".coneblog-slider").owlCarousel({
                items: 1,
                loop: <?php echo ( esc_attr($atts['cb_loop'] == 'true' ? 'true' : 'false') ) ?>,
                nav: <?php echo ( esc_attr($atts['arrow_nav'] == 'true' ? 'true' : 'false') ) ?>,
                dots: <?php echo ( esc_attr($atts['dot_nav'] == 'true' ? 'true' : 'false') ) ?>,
                rtl: <?php echo ( esc_attr($atts['is_rtl'] == 'true' ? 'true' : 'false') ) ?>,
                navText: ['<i class="icon-left"></i>', '<i class="icon-right"></i>'],
                lazyLoad: <?php echo ( esc_attr($atts['lazy_load'] == 'true' ? 'true' : 'false') ) ?>,
                autoplay: <?php echo ( esc_attr($atts['cb_autoplay'] == 'true' ? 'true' : 'false') ) ?>,
                autoplayTimeout: <?php echo( esc_attr($atts['cb_autoplay_speed']) ) ?>,
                autoplayHoverPause: 'true',
                slideBy: 1,
            });
        });
    </script>
	<?php
	endif;
	return ob_get_clean();
}
