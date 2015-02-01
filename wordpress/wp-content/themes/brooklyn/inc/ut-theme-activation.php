<?php

/*
 * Theme Activation and Plugin Check
 * by www.unitedthemes.com
 */



#-----------------------------------------------------------------
# Required Classes
#-----------------------------------------------------------------
include_once( THEME_DOCUMENT_ROOT . '/inc/lib/ut-plugin-activation-class.php' );
include_once( THEME_DOCUMENT_ROOT . '/admin/ut-layout-loader.php' );

/**
 * @desc registers a theme activation hook
 * @param string $code : Code of the theme. In this case the base folder name
 * @param callback $function : Function to call when theme gets activated.
 */

if ( ! function_exists( 'wp_register_theme_activation_hook' ) ) :

    function wp_register_theme_activation_hook($code, $function) {
        
        $optionKey="theme_is_activated_" . $code;
        if(!get_option($optionKey)) {
            call_user_func($function);
            update_option($optionKey , 1);
        }
        
    }

endif;

/**
 * @desc registers deactivation hook
 * @param string $code : Code of the theme. This must match the value you provided in wp_register_theme_activation_hook function as $code
 * @param callback $function : Function to call when theme gets deactivated.
 */
 
if ( ! function_exists( 'wp_register_theme_deactivation_hook' ) ) : 

    function wp_register_theme_deactivation_hook($code, $function) {
        
        /* store function in code specific global */
        $GLOBALS[ 'wp_register_theme_deactivation_hook_function' . $code] = $function;
    
        /* create a runtime function which will delete the option set while activation of this theme and will call deactivation function provided in $function */
        $fn=create_function('$theme', ' call_user_func($GLOBALS["wp_register_theme_deactivation_hook_function' . $code . '"]); delete_option("theme_is_activated_' . $code. '");');
    
        add_action( 'switch_theme' , $fn );
        
    }

endif;

#-----------------------------------------------------------------
# Theme Activation
#-----------------------------------------------------------------
if ( ! function_exists( 'ut_theme_activate' ) ) :
	
    function ut_theme_activate() {
	
		/* create active flag for plugins */
		add_option('ut_theme_active');
		
		/* create flag so that the option only gets loaded on first installation */
		add_option('ut_layout_loaded');
		
		/* create a starter layout for this theme */
		if( get_option('ut_layout_loaded') != 'active') {
			do_action('ut_load_layout');
		}
		
		/* insert a value for the created active state */
		update_option('ut_theme_active', 'active');
        
        /* disbale comments on theme activation */
        update_option('default_comment_status', 'closed');
		
     
	}
    
	wp_register_theme_activation_hook( 'brooklyn' , 'ut_theme_activate' );
    
endif;


#-----------------------------------------------------------------
# Theme Deactivation
#-----------------------------------------------------------------
if ( ! function_exists( 'ut_theme_deactivate' ) ) :

    function ut_theme_deactivate() {
        
        update_option('ut_theme_active', 'inactive');
        
    }
    
    wp_register_theme_deactivation_hook( 'brooklyn' , 'ut_theme_deactivate');
    
endif;

#-----------------------------------------------------------------
# plugin requirements and recommendations
#-----------------------------------------------------------------
add_action( 'tgmpa_register', 'ut_register_required_plugins' );

if ( ! function_exists( 'ut_register_required_plugins' ) ) : 

    function ut_register_required_plugins() {
    
        $plugins = array(
        				
            array(
                'name'      			=> 'Contact Form 7',
                'slug'      			=> 'contact-form-7',
                'required'  			=> false,
				'version' 				=> '3.9.3', 
            ),

			array(
                'name'      			=> 'Easy Theme and Plugin Upgrades',
                'slug'      			=> 'easy-theme-and-plugin-upgrades',
                'required'  			=> false,
				'version' 				=> '1.0.3', 
            ),
			
			array(
                'name'      			=> 'Leaflet Maps Marker (Google Maps, OpenStreetMap, Bing Maps)',
                'slug'      			=> 'leaflet-maps-marker',
                'required'  			=> false,
				'version' 				=> '3.8.8', 
            ),
			
			array(
				'name'     				=> 'Revolution Slider',
				'slug'     				=> 'revslider',
				'source'   				=> get_template_directory_uri() . '/inc/lib/files/revslider.zip', 
				'required' 				=> true, 
				'version' 				=> '4.6.0', 
			),
						
		    array(
				'name'     				=> 'Twitter by UnitedThemes',
				'slug'     				=> 'ut-twitter',
				'source'   				=> get_template_directory_uri() . '/inc/lib/files/ut-twitter.zip', 
				'required' 				=> true, 
				'version' 				=> '3.0', 
			),
			
			array(
				'name'     				=> 'Shortcodes by UnitedThemes',
				'slug'     				=> 'ut-shortcodes',
				'source'   				=> get_template_directory_uri() . '/inc/lib/files/ut-shortcodes.zip', 
				'required' 				=> true, 
				'version' 				=> '2.4', 
			),
			
			array(
				'name'     				=> 'Portfolio Management by UnitedThemes',
				'slug'     				=> 'ut-portfolio',
				'source'   				=> get_template_directory_uri() . '/inc/lib/files/ut-portfolio.zip', 
				'required' 				=> true, 
				'version' 				=> '3.0', 
			),
			
			array(
				'name'     				=> 'Pricing Tables by United Themes',
				'slug'     				=> 'ut-pricing',
				'source'   				=> get_template_directory_uri() . '/inc/lib/files/ut-pricing.zip', 
				'required' 				=> true, 
				'version' 				=> '2.0', 
			)
        
        );
         
        $config = array(
            
            'default_path' 		=> '',                         	/* Default absolute path to pre-packaged plugins */
            'menu'         		=> 'install-required-plugins', 	/* Menu slug */
            'has_notices'      	=> true,                       	/* Show admin notices or not */
            'is_automatic'    	=> true,					   	/* Automatically activate plugins after installation or not */
           
        );
    
        tgmpa( $plugins, $config );
    
    }

endif; ?>