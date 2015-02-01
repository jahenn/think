<?php

/*
 * Portfolio Management by United Themes
 * http://www.unitedthemes.com/
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class UT_Portfolio_Settings {
	
    private $dir;
	private $file;
	private $assets_dir;
	private $assets_url;

	public function __construct( $file ) {
		
        $this->dir = dirname( $file );
		$this->file = $file;
		$this->assets_dir = trailingslashit( $this->dir ) . 'assets';
		$this->assets_url = esc_url( trailingslashit( plugins_url( '/assets/', $file ) ) );

		// Register plugin settings
		add_action( 'admin_init' , array( &$this , 'register_settings' ) );

		// Add settings page to menu
		add_action( 'admin_menu' , array( &$this , 'add_menu_item' ) );

		// Add settings link to plugins page
		add_filter( 'plugin_action_links_' . plugin_basename( $this->file ) , array( &$this , 'add_settings_link' ) );
	}
	
	public function add_menu_item() {
		add_options_page( 'Portfolio Settings' , 'Portfolio Settings' , 'manage_options' , 'portfolio_settings' ,  array( &$this , 'settings_page' ) );
	}

	public function add_settings_link( $links ) {
		$settings_link = '<a href="options-general.php?page=portfolio_settings">Settings</a>';
  		array_push( $links, $settings_link );
  		return $links;
	}

	public function register_settings() {
		
		// Add settings section
		add_settings_section( 'main_settings' , __( 'Modify portfolio settings' , 'ut_portfolio_lang' ) , array( &$this , 'main_settings' ) , 'portfolio_settings' );
		
		// Add settings fields
		add_settings_field( 'portfolio_cache_mode' , __( 'Activate Cache:' , 'ut_portfolio_lang' ) , array( &$this , 'portfolio_cache_mode' )  , 'portfolio_settings' , 'main_settings' );
		add_settings_field( 'portfolio_slug_setting' , __( 'Portfolio Slug:' , 'ut_portfolio_lang' ) , array( &$this , 'portfolio_slug_setting' )  , 'portfolio_settings' , 'main_settings' );
        add_settings_field( 'portfolio_social_setting' , __( 'Portfolio Social:' , 'ut_portfolio_lang' ) , array( &$this , 'portfolio_social_setting' )  , 'portfolio_settings' , 'main_settings' );
		
		// Register settings fields
		register_setting( 'portfolio_settings' , 'portfolio_cache_mode' , array( &$this , 'validate_field' ) );
		register_setting( 'portfolio_settings' , 'portfolio_slug_setting' , array( &$this , 'validate_field' ) );
        register_setting( 'portfolio_settings' , 'portfolio_social_setting' , array( &$this , 'validate_field' ) );
		
		
	}

	public function main_settings() { echo '<p>' . __( 'Global Settings.' , 'ut_portfolio_lang' ) . '</p>'; }

	public function portfolio_cache_mode() {

		$option = get_option('portfolio_cache_mode');

		$data = '';
		if( $option && strlen( $option ) > 0 && $option != '' ) {
			$data = $option;
		}
		
		echo '<select class="postform" name="portfolio_cache_mode">';
			echo '<option value="off" ' . selected( 'off' , $data , false ) . '>' . __('off' , 'ut_portfolio_lang') . '</option>';
			echo '<option value="on" ' . selected( 'on' , $data , false ) . '>' . __('on' , 'ut_portfolio_lang') . '</option>';			
		echo '</select>';
		
		echo '<p>' . __( 'Create a cache for the generated image placeholders. Please make sure that wp-content/plugins/ut-portfolio/i/cache is writeable' , 'ut_portfolio_lang' );

		
	}
	
	public function portfolio_slug_setting() {
	
		$option = get_option('portfolio_slug_setting');
		
        $data = '';
		if( $option && strlen( $option ) > 0 && $option != '' ) {
			$data = $option;
		}
                
        echo '<input type="text" class="regular-text" name="portfolio_slug_setting" value="' . $data . '">';    
		echo '<p>' . __( 'Default: "portfolio-item". Please do not forget to update your permalink structure after changing this value.' , 'ut_portfolio_lang' );
		
	}
	
    public function portfolio_social_setting() {
        
        $option = get_option('portfolio_social_setting');
        
        $data = '';
		if( $option && strlen( $option ) > 0 && $option != '' ) {
			$data = $option;
		}
        
        echo '<select class="postform" name="portfolio_social_setting">';
			echo '<option value="off" ' . selected( 'off' , $data , false ) . '>' . __('off' , 'ut_portfolio_lang') . '</option>';
			echo '<option value="on" ' . selected( 'on' , $data , false ) . '>' . __('on' , 'ut_portfolio_lang') . '</option>';			
		echo '</select>';
		
		echo '<p>' . __( 'Shows social share buttons on all your portfolio single pages.' , 'ut_portfolio_lang' );
        
    }
    
    public function portfolio_social_share_buttons() {
        
        $option = get_option('portfolio_social_share_buttons');
        
        $data = '';
		if( $option && strlen( $option ) > 0 && $option != '' ) {
			$data = $option;
		}
        
        echo '';
        echo '';
        echo '';
        echo '';
        
    
    }
    
	
	public function validate_field( $slug ) {
		if( $slug && strlen( $slug ) > 0 && $slug != '' ) {
			$slug = urlencode( strtolower( str_replace( ' ' , '-' , $slug ) ) );
		}
		return $slug;
	}

	public function settings_page() {

		echo '<div class="wrap">
				<div class="icon32" id="icon-options-general"><br/></div>
				<h2>' . __('Portfolio Settings' , 'ut_portfolio_lang') . '</h2>
				<form method="post" action="options.php" enctype="multipart/form-data">';

				settings_fields( 'portfolio_settings' );
				do_settings_sections( 'portfolio_settings' );

			  echo '<p class="submit">
						<input name="Submit" type="submit" class="button-primary" value="' . esc_attr( __( 'Save Settings' , 'ut_portfolio_lang' ) ) . '" />
					</p>
				</form>
			  </div>';
	}
	
}