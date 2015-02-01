<?php

/* 
Plugin Name: Shortcodes by UnitedThemes 
Plugin URI: http://www.unitedthemes.com 
Description: Plugin for a nice list of shortcodes
Author: UnitedThemes 
Version: 1.0 
Author URI: http://www.unitedthemes.com 
License: GNU General Public License version 3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

#-----------------------------------------------------------------
# Register TinyMCE Extensions
#-----------------------------------------------------------------
if ( ! function_exists( 'ut_tinymce' ) ) {

    function ut_tinymce() {        
        
        if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
            return;
        }
        
        if ( get_user_option('rich_editing') == 'true' ) {
            
            add_filter( 'mce_external_plugins', 'ut_add_js_plugin' );
            add_filter( 'mce_buttons', 'register_ut_tinymce_buttons' );
            
        }               
     
    }
    
    add_action('init', 'ut_tinymce');
    
}

#-----------------------------------------------------------------
# Custom TinyMCE JavaScript
#-----------------------------------------------------------------
if ( ! function_exists( 'ut_add_js_plugin' ) ) {
    
    function ut_add_js_plugin( $plugin_array ) {
       $plugin_array['ut_buttons'] = UT_SHORTCODES_URL . 'admin/js/ut.tinymce.js';
       return $plugin_array;
    }

}


#-----------------------------------------------------------------
# Create Buttons
#-----------------------------------------------------------------
if ( ! function_exists( 'register_ut_tinymce_buttons' ) ) {
    
    function register_ut_tinymce_buttons( $buttons ) {
        array_push( $buttons, "ut_scgenerator" , "ut_icons" , "ut_buttons" );
        return $buttons; 
    }
    
}
?>