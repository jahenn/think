<?php
/*
|--------------------------------------------------------------------------
| Admin Init
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'ut_admin_init' ) ) :

    function ut_admin_init() {
        	
		/*
		* Section Manager
		*/
		
		add_action('admin_print_styles-post.php', 'load_ut_section_manager_styles'); 
		add_action('admin_print_styles-post-new.php', 'load_ut_section_manager_styles');
		
		add_action('admin_print_scripts-appearance_page_ot-theme-options', 'load_ut_option_tree_styles'); 

		
    }

endif;


/*
|--------------------------------------------------------------------------
| Needed JS for Option Tree to make it more interactive
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'load_ut_option_tree_styles' ) ) :

	function load_ut_option_tree_styles() {
	
		wp_register_script('ut-option-tree-js', THEME_WEB_ROOT .'/admin/assets/js/ut-option-effects.js', array('jquery'));
		wp_enqueue_script('ut-option-tree-js');
		
		$popup_vars = array( 'pop_url' => THEME_WEB_ROOT . '/admin/' );
		wp_localize_script( 'ut-option-tree-js', 'ut_font_popup', $popup_vars );		
		
	}

endif;


/*
|--------------------------------------------------------------------------
| Needed CSS and JS
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'load_ut_section_manager_styles' ) ) :

	function load_ut_section_manager_styles() {
		
		wp_enqueue_style('ut-section-font'	 , THEME_WEB_ROOT . '/css/ut-fontface.css');
		wp_enqueue_style('ut-section-manager', THEME_WEB_ROOT . '/admin/assets/css/ut-section-manager.css');		
				
		wp_register_script('ut-section-manager-js', THEME_WEB_ROOT .'/admin/assets/js/ut-section-manager.js', array('jquery'));
		wp_enqueue_script( 'ut-section-manager-js' );
		
		
	}

endif;


/*
|--------------------------------------------------------------------------
| Add Action for Admin Init
|--------------------------------------------------------------------------
*/
if( is_admin() ){
    add_action('admin_init' , 'ut_admin_init');
	
} 


/*
|--------------------------------------------------------------------------
| Highlight Widgets
|--------------------------------------------------------------------------
*/

if ( ! function_exists( 'ut_custom_widget_style' ) ) :

    function ut_custom_widget_style() {
    
    echo '<style type="text/css">
                div.widget[id*="_ut_video"] .widget-title,
                div.widget[id*="_lw_ut_twitter"] .widget-title,
                div.widget[id*="_ut_flickr"] .widget-title {
                    color: #77be32 !important;
                }
            </style>';
    }
    
    add_action('admin_print_styles-widgets.php', 'ut_custom_widget_style');

endif;

/*
|--------------------------------------------------------------------------
| Inject Portfolio Metapanel
|--------------------------------------------------------------------------
*/

if ( ! function_exists( 'ut_inject_metapanel' ) ) :

    function ut_inject_metapanel( $option = '' ) {
        
        if( empty($option) ) {
            return false;
        }	
            
		$option_exceptions = array(
            'ut_page_hero_image', 
            'ut_page_hero_slider',
            'ut_page_hero_fancy_slider'    
        );

		
    }

endif;

/*
|--------------------------------------------------------------------------
| Enhanced Gallery Settings
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'ut_create_gallery_options' ) ) :

    function ut_create_gallery_options() {
        
        $goption = '<script type="text/html" id="tmpl-ut-gallery-setting">';
            
            $goption .= '<div class="clear"></div>';
            $goption .= '<h3>Lightbox Option</h3>';
            
            $goption .= '<label class="setting">';
      
              $goption .= '<span>'.__('Lightbox' , 'unitedthemes').'</span>';
              
              $goption .= '<select data-setting="ut_gallery_lightbox">';
                $goption .= '<option value="off">'.__('Off' , 'unitedthemes').'</option>';       
                $goption .= '<option value="on">'.__('On' , 'unitedthemes').'</option>';
              $goption .= '</select>';
              
              $goption .= '<p>'.__('Please make sure you are linking to the "Media File" when turning this option "on". See "Link to" Option above!' , 'unitedthemes').'</p>';
              
            $goption .= '</label>';
            
            $goption .= '<div class="clear"></div>';
            $goption .= '<h3>Image Border</h3>';
            
            $goption .= '<label class="setting">';
                
                $goption .= '<span>'.__('Image Border' , 'unitedthemes').'</span>';
                  
                $goption .= '<select data-setting="ut_image_border">';
                    $goption .= '<option value="off">'.__('Off' , 'unitedthemes').'</option>';
                    $goption .= '<option value="on">'.__('On' , 'unitedthemes').'</option>';
                $goption .= '</select>';
            
            $goption .= '</label>';
            
            $goption .= '<label class="setting">';
                
                $goption .= '<span>'.__('Radius' , 'unitedthemes').'</span>';                  
                $goption .= '<input type="text" data-setting="ut_image_border_radius">';
                $goption .= '<div class="clear"></div>';	    
                $goption .= '<p>'.__('Please insert a value in pixel: e.g. "3px".' , 'unitedthemes').'</p>';
                
            $goption .= '</label>';
            
        $goption .= '</script>';
        
        
        $goption .= '<script type="text/javascript">';            
            
            $goption .= "jQuery(document).ready(function(){

              _.extend(wp.media.gallery.defaults, {
                ut_gallery_lightbox: 'off',
                ut_image_border: 'off',
                ut_image_border_radius: '0'
              });
        
              wp.media.view.Settings.Gallery = wp.media.view.Settings.Gallery.extend({
                template: function(view){
                  return wp.media.template('gallery-settings')(view)
                       + wp.media.template('ut-gallery-setting')(view);
                }
              });
        
            });";
        
        $goption .= '</script>';
        
        echo $goption;
    
    }
        
    add_action('print_media_templates','ut_create_gallery_options');

endif; ?>