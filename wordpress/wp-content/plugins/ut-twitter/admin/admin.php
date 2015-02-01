<?php

/*
 * Twitter by United Themes
 * http://www.unitedthemes.com/
 */

/* twitter admin css */
if( !function_exists('ut_twitter_register_settings_styles') ) :

    function ut_twitter_register_settings_styles() {
        
        if( ( isset($_GET['page'])  && $_GET['page'] == 'ut-twitter' ) && is_admin() ) {
        
            wp_enqueue_style('ut-twitter-manager-styles',  UT_TWITTER_URL . 'admin/css/ut.twitter.manager.css');
        
        }
        
    }
    
    add_action('admin_init', 'ut_twitter_register_settings_styles');

endif;


/* import twitter settings page */
if( !function_exists('ut_twitter_admin') ) :

    function ut_twitter_admin() {
         include('ut_import_admin.php');
    }
    
endif;

/* hook admin menu */
if( !function_exists('ut_twitter_admin_actions') ) :

    function ut_twitter_admin_actions() {  
    
        $hook = add_menu_page("UT Twitter", "UT Twitter", 'edit_pages', "ut-twitter", "ut_twitter_admin" ,'' , 9 );
        $hook = add_options_page("UT Twitter", "UT Twitter", 'edit_pages', "ut-twitter", "ut_twitter_admin");
        
    }  
    
    add_action('admin_menu', 'ut_twitter_admin_actions');
    
endif;

/* register options */
if( !function_exists('register_ut_twitter_options') ) :

    function register_ut_twitter_options() {
        
        register_setting( 'ut_twitter_options_group', 'ut_twitter_options'); 
        
    } 
    
    add_action('admin_init', 'register_ut_twitter_options' );
    
endif;

/* add icon to menu */
if ( ! function_exists( 'ut_add_twitter_menu_icon' ) ) :

    function ut_add_twitter_menu_icon(){ ?>
     
    <style type="text/css">
    
    #toplevel_page_ut-twitter div.wp-menu-image:before {
        content: '\f301' !important;
    }

    </style>
     
    <?php }
    
    add_action( 'admin_head', 'ut_add_twitter_menu_icon' );

endif; ?>