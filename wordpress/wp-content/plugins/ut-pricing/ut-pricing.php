<?php
/*
 * Plugin Name: Pricing Tables by United Themes
 * Version: 2.0
 * Plugin URI: http://www.unitedthemes.com 
 * Description: Plugin for creating nice pricing tables
 * Author: UnitedThemes
 * Author URI: http://www.unitedthemes.com 
 * Requires at least: 3.0
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

define('UT_PRICING_DIR', plugin_dir_path(__FILE__));
define('UT_PRICING_URL', plugin_dir_url(__FILE__));
define('UT_PRICING_ASSETS_URL' , UT_PRICING_URL . 'assets');
define('UT_PRICING_VERSION', '2.0');


/*
|--------------------------------------------------------------------------
| load main style
|--------------------------------------------------------------------------
*/

if( !function_exists('ut_table_enqueuestyles') ) :

	function ut_table_enqueuestyles() {
		
		$ut_table = file_exists( get_stylesheet_directory() . '/css/ut.table.style.css' ) ? get_stylesheet_directory_uri() . '/css/ut.table.style.css' : UT_PRICING_ASSETS_URL . '/css/ut.table.style.css';
				
		if( !is_admin() ) {
			
			wp_enqueue_style( 'ut-fontawesome', UT_PRICING_URL . 'assets/css/font-awesome.css' );			
			wp_enqueue_style( 'ut-responsive-grid', UT_PRICING_URL . 'assets/css/ut-responsive-grid.css' );
			wp_enqueue_style( 'ut-table' , $ut_table );			
			
		}
		
	}
	
	add_action('get_header', 'ut_table_enqueuestyles');

endif;



/*
|--------------------------------------------------------------------------
| Include plugin class files
|--------------------------------------------------------------------------
*/

/* settings */
require_once( 'classes/class-table-template.php' );

/* post types */
require_once( 'classes/post-types/class-table-manager.php' );

/* shortcode */
require_once( 'classes/class-ut-table-shortcode.php' ); 

/*
|--------------------------------------------------------------------------
| Instantiate necessary classes
|--------------------------------------------------------------------------
*/

global $plugin_obj;
$plugin_obj = new UT_Table_Template( __FILE__ );
$plugin_post_type_obj = new UT_Table_Manager( __FILE__ );