<?php 
/**
 * Shortcode for Posts Carousel
 * 
 * @since 1.1.0
 * @author WP Cone
 * @copyright 2021 WPCone.com
 */
use ConeBlogWidgets\Classes\Helper;
function coneblog_shortcode_carousel($atts) {

	// Default Attribute Values
	$atts = shortcode_atts( array(
        'layout' => 1,
        'overlay' => 1,
        'full_item_link' => true,
		'show_title' => true,
		'show_meta' => true,
		'show_term' => true,
        'show_excerpt' => true,
		'post_type' => 'post',
		'category' => 0,
		'limit' => 5,
		'offset' => 0,
        'items' => 4,
        'slide_by' => 1,
        'is_rtl' => false,
        'cb_autoplay' => true,
        'cb_autoplay_speed' => 3000,
        'items_margin' => 10,
        'cb_loop' => true,
        'lazy_load' => true,
        'dot_nav' => false,
        'centered' => false

    ), $atts, 'CONEBLOG_CAROUSEL' );

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
	<div class="coneblog coneblog-posts-carousel-container">
        <div class="coneblog-posts-carousel layout-<?php echo esc_attr($atts['layout']) ?>">
            <div class="coneblog-carousel owl-carousel">
                <?php
                $list_posts = new \WP_Query($args);
                if($list_posts->have_posts()) {
                    while($list_posts->have_posts()):
                        $list_posts->the_post();
                        if(has_post_thumbnail()):
                            $thumb_uri = get_the_post_thumbnail_url(get_the_ID(), 'coneblog-carousel-thumb');
                        else:
                            $thumb_uri = CONEBLOG_ASSETS_PATH. 'img/thumb-carousel.png';
                        endif;
                ?>
                <?php
                if ( 1 == $atts['layout'] ) {
                    ?>
                        <div class="item" style="background-image: url('<?php echo esc_url($thumb_uri) ?>') ">
                            <?php
                                if ( 'true' == $atts['full_item_link'] ) { ?>
                                <a href="<?php the_permalink() ?>" class="grid-link"></a>
                            <?php } ?>
                            <?php
                                if ( '1' == $atts['overlay'] ) { ?>
                                <div class="overlay"></div>
                            <?php } ?>
                            <div class="item-meta <?php echo ( esc_attr($atts['overlay'] == '2' ? ' meta-overlay' : '') )   ?>">
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
                } else {
                    ?>
                    <div class="item">
                        <div class="item-thumb">
                            <a href="<?php the_permalink() ?>">
                                <?php
                                    if(has_post_thumbnail()):
                                        the_post_thumbnail('coneblog-carousel-thumb-small');
                                    else:
                                        echo '<img src="'.CONEBLOG_ASSETS_PATH.'img/thumb-carousel-2.png">';
                                    endif;
                                ?>
                            </a>
                            <?php
                                if ( 'true' == $atts['show_term'] ) {
                                    Helper::coneblog_post_term_box();
                                }
                            ?>
                        </div>
                        <div class="item-meta">
                            <?php if ( 'true' == $atts['show_meta'] ) { ?>
                            <div class="extra-meta-small">
                                <div class="meta-info">
                                    <?php Helper::coneblog_posted_by(); Helper::coneblog_posted_on(); Helper::coneblog_entry_comments(); ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ( 'true' == $atts['show_title'] ) { ?>
                                <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <?php } ?>
                            <div class="extra-meta">
                                <?php if ( 'true' == $atts['show_excerpt'] ) { ?>
                                    <p class="post-desc"><?php echo Helper::coneblog_list_excerpt(15); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                endwhile;
                }
                    \wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($){
            var width = jQuery(window).width();
            if(width > 768) {
            $(".coneblog-carousel").owlCarousel({
                items: <?php echo esc_attr($atts['items']); ?>,
                margin: <?php echo esc_attr($atts['items_margin']); ?>,
                loop: <?php echo ( esc_attr($atts['cb_loop'] == true ? 'true' : 'false') ) ?>,
                nav: true,
                dots: <?php echo ( esc_attr($atts['dot_nav'] == true ? 'true' : 'false') ) ?>,
                center: <?php echo ( esc_attr($atts['centered'] == true ? 'true' : 'false') ) ?>,
                rtl: <?php echo ( esc_attr($atts['is_rtl'] == true ? 'true' : 'false') ) ?>,
                navText: ['<i class="icon-left"></i>', '<i class="icon-right"></i>'],
                lazyLoad: <?php echo ( esc_attr($atts['lazy_load'] == true ? 'true' : 'false') ) ?>,
                autoplay: <?php echo ( esc_attr($atts['cb_autoplay'] == true ? 'true' : 'false') ) ?>,
                autoplayTimeout: <?php echo esc_attr($atts['cb_autoplay_speed']); ?>,
                autoplayHoverPause: true,
                slideBy: <?php echo esc_attr($atts['slide_by']); ?>
                
            });
            } else {
                $(".coneblog-carousel").owlCarousel({
                    items: 1,
                    margin: <?php echo esc_attr($atts['items_margin']) ?>,
                    loop: <?php echo ( esc_attr($atts['cb_loop'] == true ? 'true' : 'false') ) ?>,
                    nav: true,
                    dots: <?php echo ( esc_attr($atts['dot_nav'] == true ? 'true' : 'false') ) ?>,
                    center: <?php echo ( esc_attr($atts['centered'] == true ? 'true' : 'false') ) ?>,
                    rtl: <?php echo ( esc_attr($atts['is_rtl'] == true ? 'true' : 'false') ) ?>,
                    navText: ['<i class="icon-left"></i>', '<i class="icon-right"></i>'],
                    lazyLoad: <?php echo ( esc_attr($atts['lazy_load'] == true ? 'true' : 'false') ) ?>,
                    autoplay: <?php echo ( esc_attr($atts['cb_autoplay'] == true ? 'true' : 'false') ) ?>,
                    autoplayTimeout: <?php echo esc_attr($atts['cb_autoplay_speed']) ?>,
                    autoplayHoverPause: true,
                    slideBy: 1
                    
                });
            }
        });
    </script>
	<?php
	endif;
	return ob_get_clean();
}
