<?php    
/*
 * Plugin Name: Shortcodes by UnitedThemes 
 * Version: 2.4
 * Plugin URI: http://www.unitedthemes.com/
 * Description: Plugin for a nice list of shortcodes
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


define('UT_SHORTCODES_DIR', plugin_dir_path(__FILE__));
define('UT_SHORTCODES_URL', plugin_dir_url(__FILE__));
define('UT_SHORTCODES_VERSION', '2.4');

/* helper function to detect already installed plugin */
if ( !function_exists( 'ut_is_plugin_active' ) ) {
	
	function ut_is_plugin_active( $plugin ) {
		
        if( is_multisite() && array_key_exists( $plugin , get_site_option('active_sitewide_plugins', array() ) ) ) {
                        
            return array_key_exists( $plugin , get_site_option('active_sitewide_plugins', array() ) );
            
        } elseif( is_multisite() && in_array( $plugin, (array) get_option( 'active_plugins', array() ) ) ) {
                        
            return in_array( $plugin, (array) get_option( 'active_plugins', array() ) );
            
        } else {
            
            return in_array( $plugin, (array) get_option( 'active_plugins', array() ) );
            
        }   
        
	}
	
}

/*
|--------------------------------------------------------------------------
| required files
|--------------------------------------------------------------------------
*/ 
require_once( UT_SHORTCODES_DIR . '/admin/ut.mce.loader.php' );
require_once( UT_SHORTCODES_DIR . '/inc/ut-image-resize.php' );
require_once( UT_SHORTCODES_DIR . '/inc/ut-ajax-player.php' );
require_once( UT_SHORTCODES_DIR . '/ut.shortcode.functions.php' );

/*
|--------------------------------------------------------------------------
| Activation, Deactivation and Uninstall Functions
|--------------------------------------------------------------------------
*/ 
register_activation_hook( __FILE__ , 'ut_shortcodes_activation');
register_deactivation_hook( __FILE__ , 'ut_shortcodes_deactivation');


function ut_shortcodes_activation() {
    
    //actions to perform once on plugin activation    
    add_option('ut_shortcodes_options');
	add_option('ut_twitter_feed');
    
    //register uninstaller
    register_uninstall_hook(__FILE__, 'ut_shortcodes_uninstall');
    
}

function ut_shortcodes_deactivation() {
    
    // actions to perform once on plugin deactivation
        
}

function ut_shortcodes_uninstall(){
    
    //actions to perform once on plugin uninstall
    delete_option('ut_shortcodes_options');
	delete_option('ut_twitter_feed');
	
}


/*
 * load needed javascript
 */
function ut_shortcodes_enqueuescripts() {
    
    $ut_theme_active = (get_option('ut_theme_active') == 'active') ? true : false; 
    
    /* base files */
    if( !is_admin() ) {
		
        wp_enqueue_script( 'modernizr' 		    , UT_SHORTCODES_URL . 'js/plugins/modernizr/modernizr.min.js', array('jquery') , '2.6.2' );
		wp_enqueue_script( 'ut-flexslider-js'   , UT_SHORTCODES_URL . 'js/plugins/flexslider/jquery.flexslider-min.js' , array('jquery'));
        wp_enqueue_script( 'ut-elastislider-js' , UT_SHORTCODES_URL . 'js/plugins/elastislider/jquery.elastislide.js' , array('jquery' , 'modernizr'));
		wp_enqueue_script( 'ut-tabs-toggles'    , UT_SHORTCODES_URL . 'js/tabs.collapse.min.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'ut-visible-plugin'  , UT_SHORTCODES_URL . 'js/jquery.visible.min.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'ut-appear'          , UT_SHORTCODES_URL . 'js/jquery.appear.js', array('jquery'), '1.0', true );
        wp_enqueue_script( 'ut-fitvid'	        , UT_SHORTCODES_URL . 'js/jquery.fitvids.js', array('jquery'), '1.0.3' , true );
	    wp_enqueue_script( 'ut-sc-plugin'       , UT_SHORTCODES_URL . 'js/ut.scplugin.js', array('jquery'), '1.0', true );
        wp_localize_script('ut-sc-plugin', 'utShortcode' , array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
        
    }
    
}
add_action('wp_enqueue_scripts', 'ut_shortcodes_enqueuescripts');



/*
 * load needed styles
 */
function ut_shortcodes_enqueuestyles() {
    	
    if( !is_admin() ) {

		wp_enqueue_style( 'ut-responsive-grid' , UT_SHORTCODES_URL . 'css/ut-responsive-grid.css' );
		wp_enqueue_style( 'ut-fontawesome', UT_SHORTCODES_URL . 'css/font-awesome.css' );
        wp_enqueue_style( 'ut-animate', UT_SHORTCODES_URL . 'css/ut.animate.css' );
		
        /* elastislider */
        $ut_elastislide = file_exists( get_stylesheet_directory() . '/css/ut.elastislide.css' ) ? get_stylesheet_directory_uri() . '/css/ut.elastislide.css' : UT_SHORTCODES_URL . 'css/ut.elastislide.css';
        wp_enqueue_style( 'ut-elastislide', $ut_elastislide );
        
        /* fancyrotator */
        $ut_fancyrotator = file_exists( get_stylesheet_directory() . '/css/ut.fancyrotator.css' ) ? get_stylesheet_directory_uri() . '/css/ut.fancyrotator.css' : UT_SHORTCODES_URL . 'css/ut.fancyrotator.css';
        wp_enqueue_style( 'ut-fancyrotator', $ut_fancyrotator );
        
		/* main shortcode css */
		$ut_shortcodes = file_exists( get_stylesheet_directory() . '/css/ut.shortcode.css' ) ? get_stylesheet_directory_uri() . '/css/ut.shortcode.css' : UT_SHORTCODES_URL . 'css/ut.shortcode.css';
		wp_enqueue_style( 'ut-shortcodes' , $ut_shortcodes );				
		
    }
    
}
add_action('get_header', 'ut_shortcodes_enqueuestyles');


/*
 * editor panel
 */
function ut_shortcodes_init(){
        
    if( is_admin() ) {
       
    }
	
	load_plugin_textdomain( 'ut_shortcodes', false, dirname(plugin_basename(__FILE__)).'/lang/' );
    
}
ut_shortcodes_init();

/*
 * Font Awesome Icons
 */

if ( !function_exists( 'ut_load_mce_styles' ) ) {

	function ut_load_mce_styles() {
	
		wp_enqueue_style('ut-mceskin', UT_SHORTCODES_URL . 'admin/css/ut.mceskin.css');		
		
	}

}

/*
 * Admin Init
 */

if ( !function_exists( 'ut_sc_admin_init' ) && is_admin() ) { 

	function ut_sc_admin_init(){
		
		/*
		* Skin
		*/
		add_action('admin_print_styles-post.php', 'ut_load_mce_styles'); 
		add_action('admin_print_styles-post-new.php', 'ut_load_mce_styles');
		
		add_action('admin_print_scripts-post.php', 'ut_load_mce_styles');
		add_action('admin_print_scripts-post-new.php', 'ut_load_mce_styles');
			
	}
	
	add_action('admin_menu' , 'ut_sc_admin_init');
	
}


/*
 * Font Awesome Icons
 */
 
if ( !function_exists( 'ut_recognized_icons' ) ) {

    function ut_recognized_icons() {
        
        # pattern
        $pattern = '/\.(fa-(?:\w+(?:-)?)+):before\s+{\s*content:\s*"(.+)";\s+}/';
        
        # file to load
        $subject = file_get_contents( UT_SHORTCODES_DIR .'/css/font-awesome.css' );
        
        preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER);
        
        $icons = array();
        
        if( isset($matches) && is_array($matches) ) {
            foreach($matches as $match){
                $icons[] = $match[1];
            }
        }
        
        return apply_filters( 'ut_recognized_icons', $icons );
        
    } 

}

