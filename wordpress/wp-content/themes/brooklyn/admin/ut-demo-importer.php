<?php

/*
 * Custom Importer
 * by www.unitedthemes.com
  */

defined( 'ABSPATH' ) or die( 'You cannot access this script directly' );

/*
|--------------------------------------------------------------------------
| Demo Importer Menu Item
|--------------------------------------------------------------------------
*/
add_action('admin_menu', 'ut_demo_importer_menu');

if ( !function_exists( 'ut_demo_importer_menu' ) ) {
	
	function ut_demo_importer_menu() {
	
		add_submenu_page( 'themes.php' , 'Demo Importer' , 'Demo Importer' , 'manage_options' , 'ut_view_updater' , 'ut_view_updater' );
	
	}
	
}


/*
|--------------------------------------------------------------------------
| Demo Importer Styles
|--------------------------------------------------------------------------
*/
if ( !function_exists( 'ut_importer_admin_add_scripts' ) ) {

	function ut_importer_admin_add_scripts() {
			
		wp_enqueue_style('ut-importer', THEME_WEB_ROOT . '/admin/assets/css/ut-importer.css');
		wp_enqueue_script( 'ut-importer', THEME_WEB_ROOT . '/admin/assets/js/ut-importer.js' );
					
	}
	
}

if ( isset($_GET['page']) && $_GET['page'] == 'ut_view_updater' ) {	
	add_action( 'admin_enqueue_scripts', 'ut_importer_admin_add_scripts' );
}


/*
|--------------------------------------------------------------------------
| Check if wp-content is writeable for demo images
|--------------------------------------------------------------------------
*/
if ( !function_exists( 'ut_is_writable' ) ) {
	
	function ut_is_writable( $path ) {
	
		if ( $path{strlen($path)-1}=='/' ) {
			return ut_is_writable($path.uniqid(mt_rand()).'.tmp');
		}
		
		if (file_exists($path)) {
			if (!($f = @fopen($path, 'r+')))
				return false;
			fclose($f);
			return true;
		}
		
		if (!($f = @fopen($path, 'w')))
			return false;
		fclose($f);
		unlink($path);
		return true;
		
	}
	
}


/*
|--------------------------------------------------------------------------
| Demo Importer Interface
|--------------------------------------------------------------------------
*/

if ( !function_exists( 'ut_view_updater' ) ) {
	
	function ut_view_updater() { ?>
		
		<div id="ut-importer" class="wrap">
		
			<div class="icon32" id="icon-options-general"><br></div>
            <h2><?php _e( 'Theme Demo Importer' , 'unitedthemes' ); ?></h2>
            
			<?php 
			
			/*
			|--------------------------------------------------------------------------
			| Notifications
			|--------------------------------------------------------------------------
			*/
			if( file_exists( ABSPATH . 'wp-content/uploads/' ) ) {
				
				/* wp-content upload folder not writeable  */ 
				if( !ut_is_writable( ABSPATH . 'wp-content/uploads/' ) ) :
				
					echo '<div class="error"><p>';
						
						echo '<strong>' .__('Your upload folder is not writeable! The importer won\'t be able to import the placeholder images. Please check the folder permissions for', 'unitedthemes').'</strong><br />';
						echo ABSPATH . 'wp-content/uploads/';
						
					echo '</p></div>';
					
				endif;
				
			
			} else {
			
				/* wp-content folder not writeable  */ 
				if( !ut_is_writable( ABSPATH . 'wp-content/' ) ) :
					
					echo '<div class="error"><p>';
					
						echo '<strong>' .__('Your wp-content folder is not writeable! The importer won\'t be able to import the placeholder images. Please check the folder permissions for', 'unitedthemes').'</strong><br />';
						echo ABSPATH . 'wp-content/';
					
					echo '</p></div>';
					
				endif;
			
			}
			
			/* some plugins need to be installed before the importer can be executed */ 
			if( !ut_is_plugin_active('ut-portfolio/ut-portfolio.php') ) :
				
				echo '<div class="error"><p>'.__('Portfolio Management by UnitedThemes Plugin is not active, please activate it before importing the demo content.', 'unitedthemes').'</p></div>';
				
			endif;
			
			if( !ut_is_plugin_active('ut-pricing/ut-pricing.php') ) :
				
				echo '<div class="error"><p>'.__('Pricing Table Management by UnitedThemes Plugin is not active, please activate it before importing the demo content.', 'unitedthemes').'</p></div>';
				
			endif;
			
			
			/* importer has been used before */
			if( get_option('ut_import_loaded') == 'active' ) :
				
				echo '<div class="error"><p>'.__('You already have imported the demo content before. Running this operation twice will result in double content!', 'unitedthemes').'</p></div>';
			
			endif;
			
			/* import was successful */
			if( isset($_GET['ut-import']) && $_GET['ut-import'] == 'success' ) : 
				
				echo '<div class="updated"><p>'.__('Import was successful, have fun!', 'unitedthemes').'</p></div>';
			
			endif; 
			
			?>
            
            <form id="ut-importer-form" method="POST" action="?page=ut_view_updater" class="form-horizontal">
            
            <div class="xml">
                <input type="radio" id="demo_one" name="ut_demo_file" value="demo_one" checked class="ut-choose-demo-radio">
                <label class="ut-choose-demo-img" for="demo_one">
                    <img src="<?php echo THEME_WEB_ROOT; ?>/admin/assets/images/importer/brooklyn-demo1.jpg" />                    
                </label>
                <h3 class="xml-name">Brooklyn Demo 1</h3>
                <div class="xml-actions">
                	<a target="_blank" href="http://themeforest.unitedthemes.com/wpversions/brooklyn/basic" class="button button-primary"><?php _e('Preview' , 'unitedthemes'); ?></a>
                </div>
            </div>
            
            <div class="xml">
                <input type="radio" id="demo_two" name="ut_demo_file" value="demo_two" class="ut-choose-demo-radio">
                <label class="ut-choose-demo-img" for="demo_two">
                    <img src="<?php echo THEME_WEB_ROOT; ?>/admin/assets/images/importer/brooklyn-demo2.jpg" />                    
                </label>
                <h3 class="xml-name">Brooklyn Demo 2a (dark skin)</h3>
               	<div class="xml-actions">
                	<a target="_blank" href="http://themeforest.unitedthemes.com/wpversions/brooklyn/extended" class="button button-primary"><?php _e('Preview' , 'unitedthemes'); ?></a>
                </div>
            </div>
            
            <div class="xml">
                <input type="radio" id="demo_two_b" name="ut_demo_file" value="demo_two_b" class="ut-choose-demo-radio">
                <label class="ut-choose-demo-img" for="demo_two_b">
                    <img src="<?php echo THEME_WEB_ROOT; ?>/admin/assets/images/importer/brooklyn-demo2b.jpg" />                    
                </label>
                <h3 class="xml-name">Brooklyn Demo 2b (light skin)</h3>
               	<div class="xml-actions">
                	<a target="_blank" href="http://themeforest.unitedthemes.com/wpversions/brooklyn/extended/?skin=light" class="button button-primary"><?php _e('Preview' , 'unitedthemes'); ?></a>
                </div>
            </div>
            
            <div class="xml">
                <input type="radio" id="demo_three" name="ut_demo_file" value="demo_three" class="ut-choose-demo-radio">
                <label class="ut-choose-demo-img" for="demo_three">
                    <img src="<?php echo THEME_WEB_ROOT; ?>/admin/assets/images/importer/brooklyn-demo3.jpg" />                    
                </label>
                <h3 class="xml-name">Brooklyn Demo 3</h3>
                <div class="xml-actions">
                	<a target="_blank" href="http://themeforest.unitedthemes.com/wpversions/brooklyn/elegant" class="button button-primary"><?php _e('Preview' , 'unitedthemes'); ?></a>
                </div>
            </div>
            
            <div class="xml">
                <input type="radio" id="demo_four" name="ut_demo_file" value="demo_four" class="ut-choose-demo-radio">
                <label class="ut-choose-demo-img" for="demo_four">
                   <img src="<?php echo THEME_WEB_ROOT; ?>/admin/assets/images/importer/brooklyn-demo4.jpg" />                   
                </label>
                 <h3 class="xml-name">Brooklyn Demo 4</h3>
                 <div class="xml-actions">
                 	<a target="_blank" href="http://themeforest.unitedthemes.com/wpversions/brooklyn/business" class="button button-primary"><?php _e('Preview' , 'unitedthemes'); ?></a>
                 </div>
            </div>
            
            <div class="xml">
                <input type="radio" id="demo_five" name="ut_demo_file" value="demo_five" class="ut-choose-demo-radio">
                <label class="ut-choose-demo-img" for="demo_five">
                    <img src="<?php echo THEME_WEB_ROOT; ?>/admin/assets/images/importer/brooklyn-demo5.jpg" />                    
                </label>
                <h3 class="xml-name">Brooklyn Demo 5</h3>
                <div class="xml-actions">
                	<a target="_blank" href="http://themeforest.unitedthemes.com/wpversions/brooklyn/demo5" class="button button-primary"><?php _e('Preview' , 'unitedthemes'); ?></a>
                </div>
            </div>
            
            <div class="xml">
                <input type="radio" id="demo_six" name="ut_demo_file" value="demo_six" class="ut-choose-demo-radio">
                <label class="ut-choose-demo-img" for="demo_six">
                    <img src="<?php echo THEME_WEB_ROOT; ?>/admin/assets/images/importer/brooklyn-demo6.jpg" />                    
                </label>
                <h3 class="xml-name">Brooklyn Demo 6</h3>
                <div class="xml-actions">
                	<a target="_blank" href="http://themeforest.unitedthemes.com/wpversions/brooklyn/demo6" class="button button-primary"><?php _e('Preview' , 'unitedthemes'); ?></a>
                </div>
            </div>                    
            
            <div class="xml">
                <input type="radio" id="demo_seven" name="ut_demo_file" value="demo_seven" class="ut-choose-demo-radio">
                <label class="ut-choose-demo-img" for="demo_seven">
                    <img src="<?php echo THEME_WEB_ROOT; ?>/admin/assets/images/importer/brooklyn-demo7.jpg" />                    
                </label>
                <h3 class="xml-name">Brooklyn Demo 7</h3>
                <div class="xml-actions">
                	<a target="_blank" href="http://themeforest.unitedthemes.com/wpversions/brooklyn/demo7" class="button button-primary"><?php _e('Preview' , 'unitedthemes'); ?></a>
                </div>
            </div>
            
            <div class="xml">
                <input type="radio" id="demo_eight" name="ut_demo_file" value="demo_eight" class="ut-choose-demo-radio">
                <label class="ut-choose-demo-img" for="demo_eight">
                    <img src="<?php echo THEME_WEB_ROOT; ?>/admin/assets/images/importer/brooklyn-demo8.jpg" />                    
                </label>
                <h3 class="xml-name">Brooklyn Demo 8a (New Landing Page)</h3>
                <div class="xml-actions">
                	<a target="_blank" href="http://themeforest.unitedthemes.com/wpversions/brooklyn/landing" class="button button-primary"><?php _e('Preview' , 'unitedthemes'); ?></a>
                </div>
            </div>            
            
            <div class="xml">
                <input type="radio" id="demo_eight_b" name="ut_demo_file" value="demo_eight_b" class="ut-choose-demo-radio">
                <label class="ut-choose-demo-img" for="demo_eight_b">
                    <img src="<?php echo THEME_WEB_ROOT; ?>/admin/assets/images/importer/brooklyn-demo8b.jpg" />                    
                </label>
                <h3 class="xml-name">Brooklyn Demo 8b (Old Landing Page)</h3>
                <div class="xml-actions">
                    <?php _e('Not available anymore' , 'unitedthemes'); ?></a>
                </div>
            </div>
            
            <div class="xml">
                <input type="radio" id="demo_nine" name="ut_demo_file" value="demo_nine" class="ut-choose-demo-radio">
                <label class="ut-choose-demo-img" for="demo_nine">
                    <img src="<?php echo THEME_WEB_ROOT; ?>/admin/assets/images/importer/brooklyn-demo9.jpg" />                    
                </label>
                <h3 class="xml-name">Brooklyn Demo 9</h3>
                <div class="xml-actions">
                	<a target="_blank" href="http://themeforest.unitedthemes.com/wpversions/brooklyn/demo9" class="button button-primary"><?php _e('Preview' , 'unitedthemes'); ?></a>
                </div>
            </div>
            
            <div class="xml">
                <input type="radio" id="demo_ten" name="ut_demo_file" value="demo_ten" class="ut-choose-demo-radio">
                <label class="ut-choose-demo-img" for="demo_ten">
                    <img src="<?php echo THEME_WEB_ROOT; ?>/admin/assets/images/importer/brooklyn-demo10.jpg" />                    
                </label>
                <h3 class="xml-name">Brooklyn Demo 10</h3>
                <div class="xml-actions">
                	<a target="_blank" href="http://themeforest.unitedthemes.com/wpversions/brooklyn/demo10" class="button button-primary"><?php _e('Preview' , 'unitedthemes'); ?></a>
                </div>
            </div> 
            
            <div class="xml">
                <input type="radio" id="demo_eleven" name="ut_demo_file" value="demo_eleven" class="ut-choose-demo-radio">
                <label class="ut-choose-demo-img" for="demo_eleven">
                    <img src="<?php echo THEME_WEB_ROOT; ?>/admin/assets/images/importer/brooklyn-demo11.jpg" />                    
                </label>
                <h3 class="xml-name">Brooklyn Demo 11</h3>
                <div class="xml-actions">
                	<a target="_blank" href="http://themeforest.unitedthemes.com/wpversions/brooklyn/demo11" class="button button-primary"><?php _e('Preview' , 'unitedthemes'); ?></a>
                </div>
            </div>
            
            <div class="clear"></div>
            
            <div class="ut-import-options">
            
            <table class="form-table">
            	<tbody>
                    
                    <tr valign="top">
                    	
                        <th scope="row">
							<?php _e( 'Import Revolution Sliders?' , 'unitedthemes' ); ?>
                        </th>
                      	
                        <td>
                            <input type="checkbox" value="yes" id="ut-import-revslider" name="ut-import-revslider">
                        </td>                       
                    
                    </tr> 
                    
                    <tr valign="top">
                    	
                        <th scope="row">
							<?php _e( 'Import Theme Options?' , 'unitedthemes' ); ?>
                        </th>
                      	
                        <td>
                            <input type="checkbox" value="yes" id="ut-import-options" name="ut-import-options">
                        </td>                       
                    
                    </tr> 
                    
                    <tr valign="top">
                    	
                        <th scope="row">
							<?php _e('Important Notes:' , 'unitedthemes'); ?>
                        </th>
                      	
                        <td>
                            <ol>
                                <li><?php _e('We recommend to run this importer on a clean WordPress installation.' , 'unitedthemes'); ?></li>
                                <li><?php _e('To reset your installation we can recommend this plugin here:' , 'unitedthemes'); ?> <a href="http://wordpress.org/plugins/wordpress-database-reset/">Wordpress Database Reset</a></li>
                                <li><?php _e('The Demo Importer will not import the images we have used in our live demos, due to copyright / license reasons' , 'unitedthemes'); ?></li>
                                <li><?php _e('Do not run the importer multiple times one after another, it will result in double content.' , 'unitedthemes'); ?></li>
                            </ol>
                        </td>                       
                    
                    </tr>  
                                        
            	</tbody>
            </table>
            
            </div>
            
            <div class="clear"></div>
            
            <div class="ut-import-bar">
                
                <input type="hidden" name="ut_import_demo_content" value="true" />
                <input type="submit" value="<?php _e( 'Import' , 'unitedthemes' ); ?>" class="button button-primary" id="submit" name="submit">
                
            </div>
            
            </form>
		
		</div>
		
	<?php }
	
}

/*
|--------------------------------------------------------------------------
| Demo Importer
|--------------------------------------------------------------------------
*/
add_action( 'admin_init', 'ut_demo_importer' );

if ( !function_exists( 'ut_demo_importer' ) ) {

	function ut_demo_importer() {
		
		global $wpdb;
		
		/* add option flag to wordpress */
		add_option('ut_import_loaded');
		
		/* security array for valid filenames */
		$ut_recognized_file_names = apply_filters( 'ut_recognized_file_names', array( 
		  'demo_one', 'demo_two' , 'demo_two_b' , 'demo_three', 'demo_four', 'demo_five', 'demo_six' , 'demo_seven' , 'demo_eight' , 'demo_eight_b' , 'demo_nine', 'demo_ten', 'demo_eleven'
		));
			
		if ( current_user_can( 'manage_options' ) && isset( $_POST['ut_import_demo_content'] ) && !empty( $_POST['ut_demo_file'] ) ) {

			if ( !defined('WP_LOAD_IMPORTERS') ) define('WP_LOAD_IMPORTERS', true);
			
			if ( ! class_exists( 'WP_Importer' ) ) {
				$class_wp_importer = ABSPATH . 'wp-admin/includes/class-wp-importer.php';
				if ( file_exists( $class_wp_importer ) ) {
					include $class_wp_importer;
				}
			}

			if ( ! class_exists('UT_WP_Import') ) { 
				$class_wp_import = THEME_DOCUMENT_ROOT . '/admin/includes/plugins/importer/wordpress-importer.php';
				if ( file_exists( $class_wp_import ) ) {
					include $class_wp_import;
				}
			}	
			
			if ( class_exists( 'WP_Importer' ) && class_exists( 'UT_WP_Import' ) ) {
				
				/*
				|--------------------------------------------------------------------------
				| Import choosen XML
				|--------------------------------------------------------------------------
				*/
				
				$importer = new UT_WP_Import();
				
				$demo_file = sanitize_file_name($_POST['ut_demo_file']);
				$theme_xml = THEME_DOCUMENT_ROOT . '/admin/assets/xml/' . $demo_file . '.xml.gz';
								
				if ( file_exists( $class_wp_importer ) && in_array( $demo_file , $ut_recognized_file_names) ) {
										
					$importer->fetch_attachments = true;
					ob_start();
					$importer->import($theme_xml);
					ob_end_clean();					
					
				} else {
					
					wp_redirect( admin_url( 'themes.php?page=ut_view_updater&utimport=failed' ) );
					
				}
				
				/*
				|--------------------------------------------------------------------------
				| Set Primary Navigation
				|--------------------------------------------------------------------------
				*/
												
				$locations = get_theme_mod( 'nav_menu_locations' ); 
				$menus = wp_get_nav_menus(); 
				
				if( is_array($menus) ) {
					foreach($menus as $menu) { // assign menus to theme locations
						
                        $main = ( $demo_file == 'demo_eight' || $demo_file == 'demo_eight_b' ) ? 'Menu 1' : 'Main';
                                                
                        if( $menu->name == $main ) {
							$locations['primary'] = $menu->term_id;
						}
                        
					}
				}
				
				set_theme_mod( 'nav_menu_locations', $locations );
				
				/*
				|--------------------------------------------------------------------------
				| Set Reading Options
				|--------------------------------------------------------------------------
				*/
				
				$homepage 	= get_page_by_title( 'Front Page' );
				$posts_page = get_page_by_title( 'Blog' );
				
                if( $demo_file == 'demo_eight' || $demo_file == 'demo_eight_b' ) {
                    $homepage 	= get_page_by_title( 'Frontpage' );
                }
                
				if( isset($homepage->ID) && isset($posts_page->ID) ) {
					update_option('show_on_front', 'page');
					update_option('page_on_front',  $homepage->ID); // Front Page
					update_option('page_for_posts', $posts_page->ID); // Blog Page
				}
				
				/*
				|--------------------------------------------------------------------------
				| Update Theme Options
				|--------------------------------------------------------------------------
				*/
				if( isset( $_POST['ut-import-options'] ) && $_POST['ut-import-options'] == 'yes' ) :
					
					/* run layout loader */
					ut_load_layout_into_ot( $demo_file . '.txt' );
					
				endif;
				
				/*
				|--------------------------------------------------------------------------
				| Revolution Slider Import
				|--------------------------------------------------------------------------
				*/
				if( isset( $_POST['ut-import-revslider'] ) && $_POST['ut-import-revslider'] == 'yes' ) :
				
					if( class_exists('UniteFunctionsRev') ) { 
						
						$rev_directory = THEME_DOCUMENT_ROOT . '/admin/assets/optionsdata/revslider/'; 
						$rev_files = array();
						
						foreach( glob( $rev_directory . '*.txt' ) as $filename ) {
							$filename = basename($filename);
							$rev_files[] = THEME_WEB_ROOT . '/admin/assets/optionsdata/revslider/' . $filename ;
						}
												
						foreach( $rev_files as $rev_file ) {
							
							$get_file = wp_remote_get( $rev_file );
							$arrSlider = unserialize( $get_file['body'] );
		
							$sliderParams = $arrSlider["params"];
		
							if(isset($sliderParams["background_image"])) {
								$sliderParams["background_image"] = UniteFunctionsWPRev::getImageUrlFromPath($sliderParams["background_image"]);
							}
		
							$json_params = json_encode($sliderParams);
		
							$arrInsert = array();
							$arrInsert["params"] = $json_params;
							$arrInsert["title"] = UniteFunctionsRev::getVal($sliderParams, "title","Slider1");
							$arrInsert["alias"] = UniteFunctionsRev::getVal($sliderParams, "alias","slider1");
		
							$wpdb->insert(GlobalsRevSlider::$table_sliders, $arrInsert);
							$sliderID = mysql_insert_id();
		
							//create all slides
							$arrSlides = $arrSlider["slides"];
							foreach($arrSlides as $slide){
								
								$params = $slide["params"];
								$layers = $slide["layers"];
								
								//convert params images:
								if(isset($params["image"])) {
									$params["image"] = UniteFunctionsWPRev::getImageUrlFromPath($params["image"]);
								}
								
								//convert layers images:
								foreach($layers as $key=>$layer){					
									if(isset($layer["image_url"])){
										$layer["image_url"] = UniteFunctionsWPRev::getImageUrlFromPath($layer["image_url"]);
										$layers[$key] = $layer;
									}
								}
								
								//create new slide
								$arrCreate = array();
								$arrCreate["slider_id"] = $sliderID;
								$arrCreate["slide_order"] = $slide["slide_order"];				
								$arrCreate["layers"] = json_encode($layers);
								$arrCreate["params"] = json_encode($params);
		
								$wpdb->insert(GlobalsRevSlider::$table_slides,$arrCreate);				
							}
						}
					}
				
				endif;
				
				/*
				|--------------------------------------------------------------------------
				| Set Default Logo for Navigation
				|--------------------------------------------------------------------------
				*/
				$logo_to_demo = array(
					'demo_one'	    => 'brooklyn-logo-dark.png', 
					'demo_two'      => 'brooklyn-logo-light.png',
                    'demo_two_b'    => 'brooklyn-logo-light.png',  
					'demo_three'    => 'brooklyn-logo-dark.png', 
					'demo_four'	    => 'brooklyn-logo-light.png', 
					'demo_five'	    => 'brooklyn-logo-light.png',
					'demo_six'	    => 'brooklyn-logo-light.png',
					'demo_seven'    => 'brooklyn-logo-dark.png',
					'demo_eight'    => 'brooklyn-logo-dark.png',
                    'demo_eight_b'  => 'brooklyn-logo-dark.png',
                    'demo_nine'     => 'brooklyn-logo-light.png',
                    'demo_ten'      => 'brooklyn-logo-dark.png',
                    'demo_eleven'   => 'brooklyn-logo-light.png',
				);
				
				$default_logo = THEME_WEB_ROOT . '/images/default/' . $logo_to_demo[$demo_file];
				set_theme_mod( 'ut_site_logo' , $default_logo );
				
                if($demo_file == 'demo_eleven') {
                    
                    $logo_alt_to_demo = array(
                        'demo_eleven'   => 'brooklyn-logo-dark.png'
                    );
                    
                    $default_alt_logo = THEME_WEB_ROOT . '/images/default/' . $logo_alt_to_demo[$demo_file];
                    set_theme_mod( 'ut_site_logo_alt' , $default_alt_logo );
                    
                }
				/*
				|--------------------------------------------------------------------------
				| Set Default Theme Color
				|--------------------------------------------------------------------------
				*/
				$color_to_demo = array(
					'demo_one'	    => '#F1C40F', 
					'demo_two'      => '#FF6E00',
                    'demo_two_b'    => '#FF6E00', 
					'demo_three'    => '#1ABC9C', 
					'demo_four'	    => '#FF6E00', 
					'demo_five'	    => '#EB005D',
					'demo_six'	    => '#FDA527',
					'demo_seven'    => '#FDA527',
					'demo_eight'    => '#F2333A',
                    'demo_eight_b'  => '#D94118',
                    'demo_nine'     => '#FDA527',
                    'demo_ten'      => '#FDA527',
                    'demo_eleven'   => '#008ED6'
				);
				update_option('ut_accentcolor', $color_to_demo[$demo_file]);				
				
				/*
				|--------------------------------------------------------------------------
				| set default categories for portfolio showcase
				|--------------------------------------------------------------------------
				*/
				$showcase_to_demo = array(
					'demo_one'	    => array('Grid Gallery'), 
					'demo_two'      => array('Grid Gallery'),
                    'demo_two_b'    => array('Grid Gallery'),  
					'demo_three'    => array('Grid Gallery'), 
					'demo_four'	    => array('Grid Gallery'), 
					'demo_five'	    => array('Grid Gallery' , 'Portfolio Carousel'),
					'demo_six'	    => array('Grid Gallery'),
					'demo_seven'    => array('Grid Gallery'),
					'demo_eight'    => array('Grid Gallery'),
                    'demo_eight_b'  => array('Grid Gallery'),
                    'demo_nine'     => array('Grid Gallery' , 'Our Studio'),
                    'demo_ten'      => array('Grid Gallery'),
                    'demo_eleven'   => array('Grid Gallery'),
				);
				
				/* fetch all used taxonomies first */
				$taxonomies = get_terms( 'portfolio-category' , array( 'hide_empty' => true ) );
				$portfolio_taxonomies = array();
				
				/* built array */
				foreach($taxonomies as $taxonomy ) {
					
					$portfolio_taxonomies[$taxonomy->term_id] = 'on';
									
				}
				
				/* update showcase */
				if( isset($showcase_to_demo[$demo_file]) ) {			
					foreach( $showcase_to_demo[$demo_file] as $showcase ) {
												
						$showcase = get_page_by_title( $showcase , 'OBJECT' , 'portfolio-manager' );
						update_post_meta($showcase->ID , 'ut_portfolio_categories' , $portfolio_taxonomies);
						
					}	
				}
								
				/*
				|--------------------------------------------------------------------------
				| Update Import Flag
				|--------------------------------------------------------------------------
				*/
				update_option('ut_import_loaded', 'active');
				
				/*
				|--------------------------------------------------------------------------
				| Redirect User
				|--------------------------------------------------------------------------
				*/
				wp_redirect( admin_url( 'themes.php?page=ut_view_updater&utimport=success' ) );
								
				
			}
		
		}
		
	}

} ?>