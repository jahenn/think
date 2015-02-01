<?php
/*
 * Plugin Name: Portfolio Management by United Themes
 * Version: 3.0
 * Plugin URI: http://www.unitedthemes.com/
 * Description: Easily present your works to the crowd
 * Author: UnitedThemes 
 * Author URI: http://www.unitedthemes.com/
 * Requires at least: 3.4
 * Tested up to: 3.8
 * 
 * @package WordPress
 * @author United Themes
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;


/*
|--------------------------------------------------------------------------
| Basic Constants 
|--------------------------------------------------------------------------
*/

define( 'UT_PORTFOLIO_DIR' , plugin_dir_path(__FILE__));
define( 'UT_PORTFOLIO_URL' , plugin_dir_url(__FILE__));
define( 'UT_PORTFOLIO_ASSETS_URL' , UT_PORTFOLIO_URL . 'assets/');
define( 'UT_PORTFOLIO_VERSION' , '3.0');

/* custom portfolio slug for single pages */
$ut_portfolio_slug = get_option('portfolio_slug_setting');
$ut_portfolio_slug = ( !empty($ut_portfolio_slug) ) ? $ut_portfolio_slug : 'portfolio-item';
define( 'UT_PORTFOLIO_ITEM' , $ut_portfolio_slug );

/*
|--------------------------------------------------------------------------
| FILTERS
|--------------------------------------------------------------------------
*/

add_filter( 'template_include', 'ut_template_chooser');


/*
|--------------------------------------------------------------------------
| load main style
|--------------------------------------------------------------------------
*/

if( !function_exists('ut_portfolio_enqueuestyles') ) :

	function ut_portfolio_enqueuestyles() {
		
		$ut_portfolio = file_exists( get_stylesheet_directory() . '/css/ut.portfolio.style.css' ) ? get_stylesheet_directory_uri() . '/css/ut.portfolio.style.css' : UT_PORTFOLIO_ASSETS_URL . '/css/ut.portfolio.style.css';
				
		if( !is_admin() ) {
			
			wp_enqueue_style( 'ut-portfolio' , $ut_portfolio , array('ut-flexslider') );
			wp_enqueue_style( 'ut-prettyphoto',	UT_PORTFOLIO_URL . 'assets/css/plugins/prettyphoto/prettyPhoto.css' );
			
		}
		
	}
	
	add_action('get_header', 'ut_portfolio_enqueuestyles');

endif;

if( !function_exists('ut_portfolio_enqueuescripts') ) :

	function ut_portfolio_enqueuescripts() {
		
		if( !is_admin() ) {
			
			wp_enqueue_script('ut-prettyphoto'  , UT_PORTFOLIO_URL . 'assets/js/plugins/prettyphoto/jquery.prettyPhoto.min.js', array('jquery'), '3.1.5' , true );
			wp_enqueue_script('ut-scrollTo'		, UT_PORTFOLIO_URL . 'assets/js/jquery.scrollTo.min.js', array('jquery'), '1.4.6' , true );
			wp_enqueue_script('ut-isotope-js' 	, UT_PORTFOLIO_URL . 'assets/js/jquery.isotope.min.js' , array('jquery'), '1.8' , false);
			wp_enqueue_script('ut-lazyload-js' 	, UT_PORTFOLIO_URL . 'assets/js/jquery.lazy.load.js' , array('jquery'), '1.9.1' , false);
			
		}
		
	}
	add_action('wp_enqueue_scripts', 'ut_portfolio_enqueuescripts');

endif;

/*
|--------------------------------------------------------------------------
| Include plugin class files
|--------------------------------------------------------------------------
*/

/* portfolio functions */
require_once( 'ut-portfolio-functions.php' );

/* image resizer */
require_once( 'inc/ut-image-resize.php' );

/* ajax call */
require_once( 'inc/ut-ajax-call-media.php' );
require_once( 'inc/ut-ajax-call-content.php' );

/* base settings */
require_once( 'classes/class-ut-portfolio-template.php' );

/* portfolio settings */
require_once( 'classes/class-ut-portfolio-settings.php' );

/* post types */
require_once( 'classes/post-types/class-portfolio.php' );
require_once( 'classes/post-types/class-portfolio-manager.php' );

/* shortcode */
require_once( 'classes/class-ut-portfolio-shortcode.php' ); 

/*
|--------------------------------------------------------------------------
| Instantiate necessary classes
|--------------------------------------------------------------------------
*/

global $ut_portfolio_obj;

$ut_portfolio_obj = new UT_Portfolio_Template( __FILE__ );
$ut_portfolio_type_obj = new UT_Portfolio( __FILE__ );
$ut_portfolio_manager_obj = new UT_Portfolio_Manager( __FILE__ );
$ut_portfolio_settings_obj = new UT_Portfolio_Settings( __FILE__ );

/*
|--------------------------------------------------------------------------
| Returns template file
|--------------------------------------------------------------------------
*/

if ( ! function_exists( 'ut_template_chooser' ) ) :

	function ut_template_chooser($template) {
		
		global $post;
		
		if( is_object( $post ) ) {
			$post_id = get_the_ID();
		} else {
			return $template;
		}
		
		// For all other CPT
		if( get_post_type( $post_id ) != 'portfolio' ) {
			return $template;
		}
		
		// Else use custom template
		if ( is_single() ) {
			return ut_get_template_hierarchy('single-portfolio');
		}
	
	}

endif;


/*
|--------------------------------------------------------------------------
| Get the custom template if is set
|--------------------------------------------------------------------------
*/
function ut_get_template_hierarchy( $template ) {

    // Get the template slug
    $template_slug = rtrim($template, '.php');
    $template      = $template_slug . '.php';
    
    // Check if a custom template exists in the theme folder, if not, load the plugin template file
    if ( $theme_file = locate_template(array($template)) ) {
    	$file = $theme_file;
    }
    else {
    	$file = UT_PORTFOLIO_DIR . '/templates/' . $template;
    }
    
    return apply_filters( 'ut_repl_template_'.$template, $file);
}



/*
|--------------------------------------------------------------------------
| Correct Menu Highlighter
|--------------------------------------------------------------------------
*/
if ( !function_exists( 'ut_current_type_nav_class' ) ) {
	
    function ut_current_type_nav_class($css_class, $item) {
		
		$post_type = get_query_var('post_type');
		
		if ( get_post_type() == 'portfolio' ) {
			$css_class = array_filter($css_class, "ut_sortmenucss");		
		}
		
		if ($item->attr_title != '' && $item->attr_title == $post_type) {   	
			array_push( $css_class, 'current_page_parent' );
		};
		
		return $css_class; 
	}
    
    add_filter('nav_menu_css_class', 'ut_current_type_nav_class', 10, 2);
        
}

if ( !function_exists( 'ut_sortmenucss' ) ) {
	
    function ut_sortmenucss($css_class) {
		
		$current_value = "current_page_parent";
		return ($css_class != $current_value);
		
	}
    
} ?>