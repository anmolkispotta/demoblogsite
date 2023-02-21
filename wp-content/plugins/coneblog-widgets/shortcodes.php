<?php
/**
 * Shortcodes class.
 *
 * @category   Class
 * @package    ConeBlogWidgets
 * @subpackage WordPress
 */
namespace ConeBlogWidgets;

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
class Shortcodes {
    /**
	 * Instance
	 *
	 * @since 1.0.0
	 * @access private
	 * @static
	 *
	 * @var Plugin The single instance of the class.
	 */
	private static $instance = null;
    /**
	 * Activae widgets & builders
	 */
	private $builder_elementor;
	private $builder_wordpress;
	private $widget_grid;
	private $widget_list;
	private $widget_carousel;
	private $widget_classic;
	private $widget_slider;
	private $author_box;
    /**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}
    /**
     * Shortcode Files
     * 
     * Load shortcode files.
     * 
     * @since 1.1.0
     * @access public
     * @return List of shortcode files to be loaded on 'init' hook.
     */
    public function load_shortcode_files(){

        // Load the shortcode file.
        require_once 'widgets/shortcodes/posts-grid.php';
		require_once 'widgets/shortcodes/posts-list.php';
		require_once 'widgets/shortcodes/posts-carousel.php';
		require_once 'widgets/shortcodes/posts-classic.php';
		require_once 'widgets/shortcodes/posts-slider.php';
		require_once 'widgets/shortcodes/author-box.php';
    }

	/**
	 * Load shortcode based on active widgets
	 *
	 */
    public function add_shortcodes(){

        // Include shortcode files
        $this->load_shortcode_files();
        
		// Get page builders status;
		$this->builder_elementor = get_option( 'coneblog_builders_elementor' );
		$this->builder_wordpress = get_option( 'coneblog_builders_wordpress' );

        // Get widget status
		$this->widget_grid = get_option( 'coneblog_widgets_posts_grid' );
		$this->widget_list = get_option( 'coneblog_widgets_posts_list' );
		$this->widget_carousel = get_option( 'coneblog_widgets_posts_carousel' );
		$this->widget_classic = get_option( 'coneblog_widgets_posts_classic' );
		$this->widget_slider = get_option( 'coneblog_widgets_posts_slider' );
		$this->author_box = get_option( 'coneblog_widgets_author_box' );

        // Add shortcode if widget is active
        if($this->widget_grid == "on") {
            add_shortcode( 'CONEBLOG_GRID', 'coneblog_shortcode_grid' );
        }
        if($this->widget_list == "on") {
            add_shortcode( 'CONEBLOG_LIST', 'coneblog_shortcode_list' );
        }
		if($this->widget_carousel == "on") {
            add_shortcode( 'CONEBLOG_CAROUSEL', 'coneblog_shortcode_carousel' );
        }
		if($this->widget_classic == "on") {
            add_shortcode( 'CONEBLOG_CLASSIC', 'coneblog_shortcode_classic' );
        }
		if($this->widget_slider == "on") {
            add_shortcode( 'CONEBLOG_SLIDER', 'coneblog_shortcode_slider' );
        }
		/* if($this->author_box == "on") {
            add_shortcode( 'CONEBLOG_AUTHOR', 'coneblog_shortcode_author_box' );
        } */
    }
	/**
	 * Load scripts and styles for active widgets
	 *
	 */
	public function load_widget_scripts(){
		if($this->builder_wordpress == "on" && $this->builder_elementor != "on"){
			wp_enqueue_script('jquery');
			wp_enqueue_style( 'coneblog-font-icons', CONEBLOG_ASSETS_PATH. 'css/fontello.css', [], '1.0.0' );
			wp_enqueue_style( 'coneblog-shortcodes-css', plugins_url( '/assets/css/shortcode-widgets.css', CONEBLOG_WIDGETS ), array(), '1.0.0' );
			wp_enqueue_script( 'coneblog-posts-carousel', plugins_url( '/assets/owl/carousel.min.js', __FILE__ ), array(), '2.3.4', false );
			wp_enqueue_style( 'coneblog-posts-carousel-owl-style', plugins_url( '/assets/owl/assets/owl.carousel.min.css', CONEBLOG_WIDGETS ), array(), '2.3.4' );
			wp_enqueue_style( 'coneblog-posts-carousel-theme', plugins_url( '/assets/owl/assets/owl.theme.default.min.css', CONEBLOG_WIDGETS ), array(), '2.3.4' );
			//wp_enqueue_style( 'coneblog-animate-css', plugins_url( '/assets/css/animate.min.css', CONEBLOG_WIDGETS ), array(), '4.1.1' );
		}
	}
    /**
	 * Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function __construct() {
		
		// load the shortcodes.
		add_action( 'init', array( $this, 'add_shortcodes' ) );

		// load scripts 
		add_action('wp_enqueue_scripts', array($this, 'load_widget_scripts'));

	}
}
// Instantiate the Widgets class.
Shortcodes::instance();