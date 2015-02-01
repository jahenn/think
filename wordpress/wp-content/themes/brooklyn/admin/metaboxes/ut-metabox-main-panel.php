<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class UT_Meta_Panel {

    private $dir;
	private $file;
	private $assets_dir;
	private $assets_url;
    private $token;
    
    public function __construct( $file ) {
        
        $this->dir = dirname( $file );
		$this->file = $file;        
        $this->assets_dir = THEME_DOCUMENT_ROOT . '/admin/assets';
		$this->assets_url = THEME_WEB_ROOT . '/admin/assets';
        $this->token = 'page';
        
        if ( is_admin() ) {
            
            add_action( 'admin_menu', array( &$this, 'meta_box_setup' ), 20 );
			//add_action( 'save_post', array( &$this, 'meta_box_save' ) );
            
            add_action( 'admin_print_styles-post.php', array( &$this, 'register_settings_styles' ) );
            add_action( 'admin_print_styles-post-new.php', array( &$this, 'register_settings_styles' ) );
                        
        }
    
    }    
    
    public function register_settings_styles() {
        
        global $post_ID;
        
        /* custom css files */
		wp_enqueue_style('ut-metapanel-styles', $this->assets_url . '/css/ut.metapanel.css');
        
        /* custom js files */
        wp_enqueue_script('ut-metapanel-scripts', $this->assets_url . '/js/ut.metapanel.js' );
        
        $popup_vars = array( 'pop_url' => THEME_WEB_ROOT . '/admin/' );
		
        if( get_post_type($post_ID) == 'portfolio' ) {
            $popup_vars['post_type'] = get_post_type($post_ID);
        }
        
        wp_localize_script( 'ut-metapanel-scripts', 'ut_meta_panel_vars', $popup_vars );
    
    }
    
    public function meta_box_setup() {		
		add_meta_box( 'ut-metapanel' , __( 'United Themes - Page and Section Settings' , 'unitedthemes' ), array( &$this, 'meta_box_content' ), $this->token, 'normal', 'high' );
        add_meta_box( 'ut-metapanel' , __( 'United Themes - Portfolio Settings' , 'unitedthemes' ), array( &$this, 'meta_box_content' ), 'portfolio', 'normal', 'high' );
	}
    
    public function meta_box_content() {
		
		global $post_id; ?>
        
        
        <div id="ut-option-switch-wrap">
            
            <div id="ut-option-switch"></div>
            
        </div>
        
        
        <div id="ut-panel-tabs">
        
            <ul>
                
                <li class="ut-hero-type"><a href="#ut-hero-type"><?php _e('Hero Type' , 'unitedthemes'); ?></a></li>
                <li class="ut-hero-settings"><a href="#ut-hero-settings"><?php _e('Hero Caption' , 'unitedthemes'); ?></a></li>
                <li class="ut-hero-styling"><a href="#ut-hero-styling"><?php _e('Hero Styling' , 'unitedthemes'); ?></a></li>                
                <li class="ut-page-header-settings"><a href="#ut-page-header-settings"><?php _e('Header Settings' , 'unitedthemes'); ?></a></li>
                <li class="ut-color-settings"><a href="#ut-color-settings"><?php _e('Color Settings' , 'unitedthemes'); ?></a></li>
                
                <?php if(get_post_type($post_ID) == 'page') : ?>
                
                <li class="ut-section-settings"><a href="#ut-section-settings"><?php _e('Section Settings' , 'unitedthemes'); ?></a></li>
                <li class="ut-section-parallax-settings"><a href="#ut-section-parallax-settings"><?php _e('Section Parallax Settings' , 'unitedthemes'); ?></a></li>
                <li class="ut-section-video-settings"><a href="#ut-section-video-settings"><?php _e('Section Video Settings' , 'unitedthemes'); ?></a></li>
                <li class="ut-section-overlay-settings"><a href="#ut-section-overlay-settings"><?php _e('Section Overlay Settings' , 'unitedthemes'); ?></a></li>
                <li class="ut-manage-team"><a href="#ut-manage-team"><?php _e('Manage Team' , 'unitedthemes'); ?></a></li>
                
                <?php endif; ?>
                                
                <?php if(get_post_type($post_ID) == 'portfolio') : ?>
                
                <li class="ut-portfolio-details"><a href="#ut-portfolio-details"><?php _e('Portfolio Details' , 'unitedthemes'); ?></a></li>
                <li class="ut-portfolio-format"><a href="#ut-portfolio-format"><?php _e('Portfolio Format' , 'unitedthemes'); ?></a></li>
                
                <?php endif; ?>                
                
                <li class="ut-contact-section"><a href="#ut-contact-section"><?php _e('Contact Section' , 'unitedthemes'); ?></a></li>
                
            </ul>
            
            <div id="ut-hero-type"></div>            
            <div id="ut-hero-settings"></div>            
            <div id="ut-hero-styling"></div>            
            <div id="ut-page-header-settings"></div>            
            <div id="ut-color-settings"></div>
            
            <?php if(get_post_type($post_ID) == 'page') : ?>
            
            <div id="ut-section-settings"></div>
            <div id="ut-section-parallax-settings"></div>
            <div id="ut-section-video-settings"></div>
            <div id="ut-section-overlay-settings"></div>            
            <div id="ut-manage-team">                
                
                <div class="format-settings ut-settings-heading">
                    <div class="format-setting type-textblock wide-desc ">
                        <div class="description"><h2><span>Team /</span> Management</h2> 
                            <span class="ut-manage-team-info"><?php _e('In order to be able to manage your team members, please switch the template to "Team Template".' , 'unitedthemes'); ?></span>
                        </div>
                   </div>
                </div>

            </div>
            
            <?php endif; ?>
            
            <?php if(get_post_type($post_ID) == 'portfolio') : ?>
            
            <div id="ut-portfolio-details"></div>
            <div id="ut-portfolio-format">
                
                <div class="format-settings ut-settings-heading">
                    <div class="format-setting type-textblock wide-desc">
                        <div class="description"><h2><span>Portfolio Post /</span> Format</h2> 
                        <?php _e('With Version 2.6 "Portfolio Post Formats" have been removed. Starting with this Version "Portfolio Post Formats" are defined by the chosen "Hero Type". The following Hero Types are similar to:','unitedthemes'); ?></div>
                    </div>
                </div>
                
                <div class="format-settings">
                    <div class="format-setting-label">
                        <h3 class="label"><?php _e('Standard Format','unitedthemes'); ?></h3>
                    </div>
                    <div class="format-setting type-textblock wide-desc">
                        <div class="format-setting-inner">
                            
                            <ul style="margin:0px 0px 15px 15px; list-style:disc;">
                                <li><?php _e('Single Background Image','unitedthemes'); ?></li>
                                <li><?php _e('Animated Single Background Image','unitedthemes'); ?></li>
                                <li><?php _e('Split Hero','unitedthemes'); ?></li>
                                <li><?php _e('Custom Shortcode','unitedthemes'); ?></li>
                                <li><?php _e('Dynamic Hero','unitedthemes'); ?></li>
                            </ul>                            
                            
                        </div>
                    </div>
                    <div class="format-setting-label">
                        <h3 class="label"><?php _e('Gallery Format','unitedthemes'); ?></h3>
                    </div>
                    <div class="format-setting type-textblock wide-desc">
                        <div class="format-setting-inner">
                            
                            <ul style="margin:0px 0px 15px 15px; list-style:disc;">
                                <li><?php _e('Background Image Slider','unitedthemes'); ?></li> 
                                <li><?php _e('Fancy Image Slider','unitedthemes'); ?></li> 
                                <li><?php _e('Tablet Slider','unitedthemes'); ?></li>  
                            </ul>                            
                            
                        </div>
                    </div>
                    <div class="format-setting-label">
                        <h3 class="label"><?php _e('Video Format','unitedthemes'); ?></h3>
                    </div>
                    <div class="format-setting type-textblock wide-desc">
                        <div class="format-setting-inner">
                            
                            <ul style="margin:0px 0px 15px 15px; list-style:disc;">
                                <li><?php _e('Video Header','unitedthemes'); ?></li> 
                            </ul>
                            
                        </div>
                    </div>
                </div>                    
            
            </div>            
            
            <?php endif; ?>
            
            <div id="ut-contact-section"></div>
            
        </div>
        
        <?php if( function_exists('ut_recognized_icons') ) : ?>
            
            <div class="ut-modal-option-tree">
                <div class="ut-modal-box-option-tree ut-admin">
                    
                    <div class="ut-modal-option-tree-header">
                        <div class="inner">
                            <h2><?php _e( 'Choose Icon' , 'unitedthemes' ); ?></h2>
                        </div>
                    </div>
                    
                    <div class="ut-modal-option-tree-body">
                        <div class="inner">
                            <ul class="ut-glyphicons">
                            
                            <?php foreach( ut_recognized_icons() as $key => $icon) {
                                                    
                                $icondisplay = ($icon == 'icon-noicon') ? 'no icon' : '<i class="fa '.$icon.'"></i>';
                                
                                echo '<li><span data-icon="'.$icon.'" class="ut-icon-option-tree">'.$icondisplay.'</span></li>';
                            
                            } ?>
                            
                            </ul>
                        </div>
                    </div>
                    
                    <div class="ut-modal-option-tree-footer">
                        <div class="inner">
                            <a href="#" class="close-ut-modal-option-tree"><?php _e( 'Close' , 'unitedthemes' ); ?></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        <?php endif;
       
        
    }
     
    public function meta_box_save( $post_id ) {
		
		global $post, $messages;
		
		// Verify nonce
		if ( ( get_post_type() != $this->token ) || isset( $_POST[ $this->token . '_nonce'] ) && ! wp_verify_nonce( $_POST[ $this->token . '_nonce'], plugin_basename( $this->dir ) ) ) {  
			return $post_id;  
		}

		// Verify user permissions
		if ( ! current_user_can( 'edit_post', $post_id ) ) { 
			return $post_id;
		}
		
		// Handle custom fields
		$field_data = $this->get_custom_fields_settings();
		$fields = array_keys( $field_data );
		
		foreach ( $fields as $f ) {
			
			if( isset( $_POST[$f] ) && !is_array($_POST[$f]) ) {
				${$f} = strip_tags( trim( $_POST[$f] ) );
			}
			
			if( isset( $_POST[$f] ) && is_array($_POST[$f]) ) {
				/* WordPress will serialize the data later on */
				${$f} = $_POST[$f];
			}
			
			// Escape the URLs.
			if ( 'url' == $field_data[$f]['type'] ) {
				${$f} = esc_url( ${$f} );
			}
			
			if ( empty( ${$f} ) ) { 
				delete_post_meta( $post_id , $f , get_post_meta( $post_id , $f , true ) );
			} else {
				update_post_meta( $post_id , $f , ${$f} );
			}
		}

	}
    

}

$ut_meta_panel_obj = new UT_Meta_Panel( __FILE__ );

?>