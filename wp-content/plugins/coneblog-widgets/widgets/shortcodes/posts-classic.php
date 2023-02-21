<?php 
/**
 * Shortcode for Classic Posts
 * 
 * @since 1.1.0
 * @author WP Cone
 * @copyright 2021 WPCone.com
 */
use ConeBlogWidgets\Classes\Helper;
function coneblog_shortcode_classic($atts) {

	// Default Attribute Values
	$atts = shortcode_atts( array(
        'layout' => 1,
        'heading' => true,
		'heading_text' => 'Posts List',
		'show_term' => true,
		'show_meta' => true,
        'show_excerpt' => true,
		'post_type' => 'post',
		'category' => 0,
		'limit' => 4,
		'offset' => 0,

    ), $atts, 'CONEBLOG_CLASSIC' );

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
	<div class="coneblog coneblog-posts-classic-container">
        <?php
            if ( true == $atts['heading'] ) { ?>
        <div class="coneblog-widget-head">
            <h3><?php echo esc_textarea($atts['heading_text']) ?></h3>
        </div>
        <?php } ?>
        <div class="coneblog-posts-classic layout-<?php echo esc_textarea($atts['layout']) ?>">
            <?php
            $list_posts = new \WP_Query($args);
            if($list_posts->have_posts()) {
                while($list_posts->have_posts()):
                    $list_posts->the_post();
            ?>
            <?php if($i == 1): ?>
                <div class="list-item item-1">
                    <div class="item-thumb">
                        <a href="<?php the_permalink() ?>">
                            <?php
                                if(has_post_thumbnail()):
                                    the_post_thumbnail('coneblog-classic-thumb-large');
                                else:
                                    echo '<img src="'.CONEBLOG_ASSETS_PATH.'img/thumb-medium.png">';
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
                        <h4 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                        <?php
                        if ( 'true' == $atts['show_meta'] ) { ?>
                            <span class="list-meta-info d-block">
                                <?php Helper::coneblog_posted_by() ?> <?php Helper::coneblog_posted_on() ?> <?php Helper::coneblog_entry_comments() ?>
                            </span>
                        <?php } ?>
                        <?php
                        if ( 'true' == $atts['show_excerpt'] ) { ?>
                            <p class="post-desc"><?php echo Helper::coneblog_list_excerpt(25); ?></p>
                        <?php } ?>
                        
                    </div>
                </div>
            <?php else: ?>
                <div class="list-item">
                    <div class="item-thumb">
                        <a href="<?php the_permalink() ?>">
                            <?php
                                if(has_post_thumbnail()):
                                    the_post_thumbnail('coneblog-classic-thumb');
                                else:
                                    echo '<img src="'.CONEBLOG_ASSETS_PATH.'img/thumb-classic.png">';
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
                        <h4 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                        <?php
                        if ( 'true' == $atts['show_meta'] ) { ?>
                            <span class="list-meta-info d-block">
                                <?php Helper::coneblog_posted_by() ?> <?php Helper::coneblog_posted_on() ?> <?php Helper::coneblog_entry_comments() ?>
                            </span>
                        <?php } ?>
                        <?php
                        if ( 'true' == $atts['show_excerpt'] ) { ?>
                            <p class="post-desc"><?php echo Helper::coneblog_list_excerpt(15); ?></p>
                        <?php } ?>
                        
                    </div>
                </div>
            <?php endif; ?>
            <?php $i++; endwhile;  }
                \wp_reset_postdata();
            ?>
        </div>
        
    </div>
	<?php
	endif;
	return ob_get_clean();
}
