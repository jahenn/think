<?php

/*
 * Portfolio Management by United Themes
 * http://www.unitedthemes.com/
 */
		
if ( ! defined( 'ABSPATH' ) ) exit;

class UT_Portfolio_Manager {
	
    private $dir;
	private $file;
	private $assets_dir;
	private $assets_url;
	private $token;

	public function __construct( $file ) {
		
        $this->dir = dirname( $file );
		$this->file = $file;
		$this->assets_dir = trailingslashit( $this->dir ) . 'assets';
		$this->assets_url = esc_url( trailingslashit( plugins_url( '/assets/', $file ) ) );
		$this->token = 'portfolio-manager';

		// Regsiter post type
		add_action( 'init' , array( &$this , 'register_post_type' ) );

		if ( is_admin() ) {

			// Handle custom fields for post
			add_action( 'admin_menu', array( &$this, 'meta_box_setup' ), 20 );
			add_action( 'save_post', array( &$this, 'meta_box_save' ) );	

			// Modify text in main title text box
			add_filter( 'enter_title_here', array( &$this, 'enter_title_here' ) );

			// Display custom update messages for posts edits
			add_filter( 'post_updated_messages', array( &$this, 'updated_messages' ) );

			// Handle post columns
			add_filter( 'manage_edit-' . $this->token . '_columns', array( &$this, 'register_custom_column_headings' ), 10, 1 );
			add_action( 'manage_posts_custom_column' , array( &$this, 'register_custom_columns' ), 10, 2 );
						
			// add a few custom styles for post page
			add_action('admin_print_styles-post.php', array( &$this, 'register_settings_styles' ) );
            add_action('admin_print_styles-post-new.php', array( &$this, 'register_settings_styles' ) );  
			
		}

	}	
	
	public function register_settings_styles() {
		
        global $post, $post_ID;        
        
        if( get_post_type($post_ID) == $this->token ) {
        
		/* core style files */
		wp_enqueue_style('wp-color-picker');
		
		/* core script files */
		wp_enqueue_script('jquery-ui');
		wp_enqueue_script('jquery-ui-widget');
		wp_enqueue_script('jquery-ui-mouse');
		wp_enqueue_script('jquery-ui-sortable');
		  
		/* custom css files */
		wp_enqueue_style('ut-manager-styles', $this->assets_url . 'css/admin/ut.portfolio.manager.css');
		
		/* custom js files */
        wp_enqueue_script('ut-manager-scripts', $this->assets_url . 'js/admin/ut.portfolio.manager.js' , array( 'wp-color-picker' ) );
        
        }
	
	}
	
	public function register_post_type() {
 
		$labels = array(
			'name' => _x( 'Showcase', 'post type general name' , 'ut_portfolio_lang' ),
			'singular_name' => _x( 'Showcase', 'post type singular name' , 'ut_portfolio_lang' ),
			'add_new' => _x( 'Add New UT Showcase', $this->token , 'ut_portfolio_lang' ),
			'add_new_item' => sprintf( __( 'Add New %s' , 'ut_portfolio_lang' ), __( 'UT Showcase' , 'ut_portfolio_lang' ) ),
			'edit_item' => sprintf( __( 'Edit %s' , 'ut_portfolio_lang' ), __( 'Showcase' , 'ut_portfolio_lang' ) ),
			'new_item' => sprintf( __( 'New %s' , 'ut_portfolio_lang' ), __( 'Showcase' , 'ut_portfolio_lang' ) ),
			'all_items' => __( 'Showcase' , 'ut_portfolio_lang' ),
			'view_item' => sprintf( __( 'View %s' , 'ut_portfolio_lang' ), __( 'Showcase' , 'ut_portfolio_lang' ) ),
			'search_items' => sprintf( __( 'Search %a' , 'ut_portfolio_lang' ), __( 'Showcases' , 'ut_portfolio_lang' ) ),
			'not_found' =>  sprintf( __( 'No %s Found' , 'ut_portfolio_lang' ), __( 'Showcases' , 'ut_portfolio_lang' ) ),
			'not_found_in_trash' => sprintf( __( 'No %s Found In Trash' , 'ut_portfolio_lang' ), __( 'Posts' , 'ut_portfolio_lang' ) ),
			'parent_item_colon' => '',
			'menu_name' => __( 'Showcase' , 'ut_portfolio_lang' )
		);
		
		$args = array(
			'labels' => $labels,
			'public' => false,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'show_in_menu' => 'edit.php?post_type=portfolio',
			'show_in_nav_menus' => true,
			'query_var' => false,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'supports' => array( 'title' ),
		);

		register_post_type( $this->token, $args );
	}

	
    public function register_custom_column_headings( $defaults ) {
		
		$new_columns = array(
			'showcase-shortcode' => __( 'Shortcode' , 'ut_portfolio_lang' )
		);
		
		$last_item = '';

		if ( isset( $defaults['date'] ) ) { unset( $defaults['date'] ); }

		if ( count( $defaults ) > 2 ) { 
			$last_item = array_slice( $defaults, -1 );

			array_pop( $defaults );
		}
		$defaults = array_merge( $defaults, $new_columns );
		
		if ( $last_item != '' ) {
			foreach ( $last_item as $k => $v ) {
				$defaults[$k] = $v;
				break;
			}
		}

		return $defaults;
	}

	public function register_custom_columns( $column_name, $id ) {
		
		global $post, $post_ID;		
                
		switch ( $column_name ) {

			case 'showcase-shortcode':
				echo '[ut_showcase id="' . $post->ID . '"]';
			break;

			default:
			break;
		}

	}

	public function updated_messages( $messages ) {
	  
      global $post, $post_ID;

	  $messages[$this->token] = array(
	    0 => '', // Unused. Messages start at index 1.
	    1 => sprintf( __( 'Post updated. %sView post%s.' , 'ut_portfolio_lang' ), '<a href="' . esc_url( get_permalink( $post_ID ) ) . '">', '</a>' ),
	    2 => __( 'Custom field updated.' , 'ut_portfolio_lang' ),
	    3 => __( 'Custom field deleted.' , 'ut_portfolio_lang' ),
	    4 => __( 'Post updated.' , 'ut_portfolio_lang' ),
		
	    /* translators: %s: date and time of the revision */
	    5 => isset($_GET['revision']) ? sprintf( __( 'Post restored to revision from %s.' , 'ut_portfolio_lang' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
	    6 => sprintf( __( 'Post published. %sView post%s.' , 'ut_portfolio_lang' ), '<a href="' . esc_url( get_permalink( $post_ID ) ) . '">', '</a>' ),
	    7 => __( 'Post saved.' , 'ut_portfolio_lang' ),
	    8 => sprintf( __( 'Post submitted. %sPreview post%s.' , 'ut_portfolio_lang' ), '<a target="_blank" href="' . esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) . '">', '</a>' ),
	    9 => sprintf( __( 'Post scheduled for: %1$s. %2$sPreview post%3$s.' , 'ut_portfolio_lang' ), '<strong>' . date_i18n( __( 'M j, Y @ G:i' , 'ut_portfolio_lang' ), strtotime( $post->post_date ) ) . '</strong>', '<a target="_blank" href="' . esc_url( get_permalink( $post_ID ) ) . '">', '</a>' ),
	    10 => sprintf( __( 'Post draft updated. %sPreview post%s.' , 'ut_portfolio_lang' ), '<a target="_blank" href="' . esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) . '">', '</a>' ),
	  );

	  return $messages;
	}

	public function meta_box_setup() {		
		add_meta_box( 'ut-portfolio-manager', __( 'United Themes - Portfolio Showcase Settings' , 'ut_portfolio_lang' ) . ' v' . UT_PORTFOLIO_VERSION , array( &$this, 'meta_box_content' ), $this->token, 'normal', 'high' );
		add_meta_box( 'ut-portfolio-manager-info', __( 'Usage' , 'ut_portfolio_lang' ), array( &$this, 'meta_box_content_info' ), $this->token, 'side', 'high' );
	}
	
	public function checked_array( $current , $haystack ) {
								
		if( is_array($haystack) && isset($haystack[$current]) ) {
			$current = $haystack = 1;
			return checked( $haystack, $current , false );
		}

		
		
	}
    
    public function selected_array( $current , $key , $haystack ) {
												
		if( is_array($haystack) && isset($haystack[$key]) && $haystack[$key] == $current) {
			$current = $haystack = 1;
			return selected( $haystack, $current , false );
		}
		
	}
    
    public function validate_value( $value , $key , $default = '' ) {
								
        if( isset($value[$key]) ) {
        
            return esc_attr($value[$key]);
        
        } else {
        
            return $default;
        
        }
		
	}
	
	public function order_tax_categories( $taxonomies , $sortarray ) {
	
		$ordered = array();
		$counter = 1;
		
		if( is_array( $sortarray ) ) {
		
			foreach( $sortarray as $sortkey => $sortvalue) {
				
				foreach( $taxonomies as $taxkey => $taxvalue ) {
					
					if( $sortkey == $taxonomies[$taxkey]['term_id'] ) {
						
						$ordered[$counter] = $taxonomies[$taxkey];
						unset( $taxonomies[$taxkey] );
						
					} 
					
				}
				
				$counter ++;
				
			}
			
			return array_merge( $ordered , $taxonomies);
		
		} else {
		
			return $taxonomies;
		
		}
		
	}
	
	public function searchForId($id, $array) {
	   foreach ($array as $key => $val) {
		   if ($val['term_id'] === $id) {
			   return $key;
		   }
	   }
	   return null;
	}
	
	public function meta_box_content() {
		
		global $post_id;
		
		$fields = get_post_custom( $post_id );				
		$field_data = $this->get_custom_fields_settings();
		
		$html = '';
		
		$html .= '<input type="hidden" name="' . $this->token . '_nonce" id="' . $this->token . '_nonce" value="' . wp_create_nonce( plugin_basename( $this->dir ) ) . '" />';
		
		if ( 0 < count( $field_data ) ) {
			
            $html .= '<table class="form-table">' . "\n";
			$html .= '<tbody>' . "\n";
			$html .= '<tr valign="top"><td class="clearfix">' . "\n";
            
			foreach ( $field_data as $k => $v ) {
				
				$data = $v['default'];
								
				if ( isset( $fields[$k] ) && isset( $fields[$k][0] ) ) {
					$data = $fields[$k][0];
				}
				
                if( $v['type'] == 'showcase_info' ) {
                    
                    $html .= '<div class="ut-admin-info-box">';
                    
                        $html .= '<span class="ut-section-title">' . $v['name'] . '</span>';
                        $html .= '<div class="ut-section-panel">';
                            $html .= '<textarea wrap="off" readonly="readonly" class="ut-shortcode-code">[ut_showcase id="' . $post_id . '"]</textarea>';
                            $html .= $v['description'];
                        $html .= '</div>';
                    
                    $html .= '</div>';
                    
                    $html .= '<div class="clear"></div>';                    
                    $html .= '<div id="ut-admin-big-box-wrap">';
                
                } elseif( $v['type'] == 'taxonomy' ) {
					
					$taxonomies = get_terms( 'portfolio-category' , array( 'hide_empty' => false ) );
					$taxonomies = json_decode(json_encode($taxonomies), true);
					
					$html .= '<h2 class="ut-section-title">' . $v['name'] . '</h2>';					
					$html .= '<div class="ut-section-panel ut-sortable-tax">';
					
					$html .= '<ul id="ut-sortable-tax">';
										
					/* loop through taxonomy */
					if( is_array( $taxonomies ) && !empty( $taxonomies ) ) {
								
						$data = maybe_unserialize( $data );
						$taxonomies = $this->order_tax_categories( $taxonomies , $data );
												
						foreach ($taxonomies as $key => $item){
							
							$html .= '<li>';
								$html .= '<span class="ut-handle"><i class="fa fa-arrows-v"></i></span>';
								$html .= '<div class="ut-checkbox-single"><input name="' . esc_attr( $k ) . '[' . $taxonomies[$key]['term_id'] . ']" type="checkbox" id="' . esc_attr( $k ) . '_' . $key . '" ' . $this->checked_array( $taxonomies[$key]['term_id'] , $data ) . ' /> <label for="' . esc_attr( $k ) . '_' . $key . '"><span>' . $taxonomies[$key]['name'] . '</span></label></div>';								
								$html .= '<div class="clear"></div>';
							$html .= '</li>';							
						
						}
					 
					} else { 
						
						echo '<div class="alert">'.__( 'No Portfolio Categories created yet!', 'ut_portfolio_lang' ).'</div>'; 
					
					}
					
					$html .= '</ul>';
					$html .= '<span class="description">' . $v['description'] . '</span>';
					$html .= '</div>' . "\n";
					
				} elseif( $v['type'] == 'showcase_options' ) {
					
                    $data = maybe_unserialize( $data );
                    
                    $html .= '<section class="ut-option-section" id="' . esc_attr( $k ) . '">';
                    $html .= '<h2 class="ut-section-title">' . $v['name'] . '</h2>';
					$html .= '<div class="ut-section-panel">';					
					
                    /* start wp table */
                    $html .= '<table class="form-table"><tbody>';
                                        
                    /* transition effect */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Animation Effect' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><select name="' . esc_attr( $k ) . '[animation]" id="' . esc_attr( $k ) . '_animation">';
                            $html .= '<option value="fade" ' . $this->selected_array( 'fade' , 'animation' , $data ) . '>' . __('Fade' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="slide" ' . $this->selected_array( 'slide' , 'animation' , $data ) . '>' . __('Slide' , 'ut_portfolio_lang') . '</option>';
                        $html .= '</select>';
                        $html .= '<p class="description">' . __('Select your animation type.' , 'ut_portfolio_lang') . '</p>';
                    $html .= '</tr>';
                                                            
                    /* thumbnail navigation */
					$html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Thumbnail Navigation' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><div class="ut-checkbox"><input name="' . esc_attr( $k ) . '[display_thumbnail_navigation]" type="checkbox" id="' . esc_attr( $k ) . '_thumbnail_navigation" ' . $this->checked_array( 'display_thumbnail_navigation' , $data ) . ' /> <label for="' . esc_attr( $k ) . '_thumbnail_navigation"></label></div>';
					    $html .= '<p class="description">' . __('Show / hide thumbnail navigation beneath slider.' , 'ut_portfolio_lang') . '</p></td>';
					$html .= '</tr>';                    
                    
                    /* directionNav */
					$html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Slider Navigation' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><div class="ut-checkbox"><input name="' . esc_attr( $k ) . '[directionNav]" type="checkbox" id="' . esc_attr( $k ) . '_directionNav" ' . $this->checked_array( 'directionNav' , $data ) . ' /> <label for="' . esc_attr( $k ) . '_directionNav"></label></div>';
					    $html .= '<p class="description">' . __('Create navigation for paging control of each slide?.' , 'ut_portfolio_lang') . '</p></td>';
                    $html .= '</tr>';
                    
                    /* smoothHeight */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Smooth Height' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><div class="ut-checkbox"><input name="' . esc_attr( $k ) . '[smoothHeight]" type="checkbox" id="' . esc_attr( $k ) . '_smoothHeight" ' . $this->checked_array( 'smoothHeight' , $data ) . ' /> <label for="' . esc_attr( $k ) . '_smoothHeight"></label></div>';
					    $html .= '<p class="description">' . __('Allow height of the slider to animate smoothly in horizontal mode.' , 'ut_portfolio_lang') . '</p></td>';
					$html .= '</tr>';
                    
                    /* slideshowSpeed */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Slideshow Speed' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><input type="text" value="' . $this->validate_value( $data , 'slideshowSpeed' ) . '" class="regular-text" name="' . esc_attr( $k ) . '[slideshowSpeed]" id="' . esc_attr( $k ) . '_slideshowSpeed" /> <label for="' . esc_attr( $k ) . '_slideshowSpeed"></label>';
					    $html .= '<p class="description">' . __('Set the speed of the slideshow cycling, in milliseconds. (default : 7000) ' , 'ut_portfolio_lang') . '</p></td>';
                    $html .= '</tr>';
                    
                    /* animationSpeed */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Animation Speed' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><input type="text" value="' . $this->validate_value( $data , 'animationSpeed' ) . '" class="regular-text" name="' . esc_attr( $k ) . '[animationSpeed]" id="' . esc_attr( $k ) . '_animationSpeed" /> <label for="' . esc_attr( $k ) . '_animationSpeed"></label>';
					    $html .= '<p class="description">' . __('Set the speed of the slideshow cycling, in milliseconds. (default : 600)' , 'ut_portfolio_lang') . '</p></td>';
                    $html .= '</tr>';
                    
                    /* end wp table */
                    $html .= '</tbody></table>';
                    
                    /* end panel & section */ 
                    $html .= '</div></section>' . "\n";
					
                } elseif( $v['type'] == 'carousel_options' ) {
                    
                    $data = maybe_unserialize( $data );                    
                                            
                    $html .= '<section class="ut-option-section" id="' . esc_attr( $k ) . '">';
                    $html .= '<h2 class="ut-section-title">' . $v['name'] . '</h2>';
					$html .= '<div class="ut-section-panel">';					
					
                    /* start wp table */
                    $html .= '<table class="form-table"><tbody>';
                    
                    /* column set */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Overall Column Layout' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><input type="text" maxlength="1" value="' . $this->validate_value( $data , 'columns' ) . '" class="regular-text" name="' . esc_attr( $k ) . '[columns]" id="' . esc_attr( $k ) . '_columns" /> <label for="' . esc_attr( $k ) . '_columns"></label>';
					    $html .= '<p class="description">' . __('Images in a row (max value 9).' , 'ut_portfolio_lang') . '</p></td>';
                    $html .= '</tr>';                    
                    
					/* style */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Portfolio Visual Style' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><select name="' . esc_attr( $k ) . '[style]" id="' . esc_attr( $k ) . '_style">';
                            $html .= '<option value="style_one" ' . $this->selected_array( 'style_one' , 'style' , $data ) . '>' . __('Style 1 ( only images )' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="style_two" ' . $this->selected_array( 'style_two' , 'style' , $data ) . '>' . __('Style 2 ( images with title ) ' , 'ut_portfolio_lang') . '</option>';
                        $html .= '</select>';
                        $html .= '<p class="description">' . __('Select your desired portfolio style.' , 'ut_portfolio_lang') . '</p></td>';
                    $html .= '</tr>';
					
                    /* image cropping */
					$html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Image Cropping' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td>';
                        
                        $html .= '<div id="ut_cropping_settings_carousel" class="ut-cropping-size">';    
                        $html .= '<label for="' . esc_attr( $k ) . '_crop_size_x">' . __('Width' , 'ut_portfolio_lang') . '</label>';
                        $html .= '<input type="text" value="' . $this->validate_value( $data , 'crop_size_x' ) . '" class="small-text code" name="' . esc_attr( $k ) . '[crop_size_x]" id="' . esc_attr( $k ) . '_crop_size_x" />';
                        $html .= '<label for="' . esc_attr( $k ) . '_crop_size_y">' . __('Height' , 'ut_portfolio_lang') . '</label>';
                        $html .= '<input type="text" value="' . $this->validate_value( $data , 'crop_size_y' ) . '" class="small-text code" name="' . esc_attr( $k ) . '[crop_size_y]" id="' . esc_attr( $k ) . '_crop_size_y" />';
                        $html .= '</div>';
                        
                        $html .= '<p class="description">' . __('Default: 600x400' , 'ut_portfolio_lang') . '</p></td>';                        
                        
					$html .= '</tr>';
                    
                    /* end wp table */
                    $html .= '</tbody></table>';
                    
                    /* end panel & section */ 
                    $html .= '</div></section>' . "\n";                    
                
                } elseif( $v['type'] == 'masonry_options' ) {
                    
                    $data = maybe_unserialize( $data );
                    
                    $html .= '<section class="ut-option-section" id="' . esc_attr( $k ) . '">';
                    $html .= '<h2 class="ut-section-title">' . $v['name'] . '</h2>';
					$html .= '<div class="ut-section-panel">';					
					
                    /* start wp table */
                    $html .= '<table class="form-table"><tbody>';
                    
                    /* column set */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Desktop Columns' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><input type="text" maxlength="1" value="' . $this->validate_value( $data , 'columns' ) . '" class="regular-text" name="' . esc_attr( $k ) . '[columns]" id="' . esc_attr( $k ) . '_columns" /> <label for="' . esc_attr( $k ) . '_columns"></label>';
					    $html .= '<p class="description">' . __('Images in a row (max value 9).' , 'ut_portfolio_lang') . '</p></td>';
                    $html .= '</tr>';
					
                    /* tablet columns */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Tablet Columns' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><select name="' . esc_attr( $k ) . '[tcolumns]" id="' . esc_attr( $k ) . '_tcolumns">';
                            $html .= '<option value="2" ' . $this->selected_array( '2' , 'tcolumns' , $data ) . '>' . __('2 Columns' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="3" ' . $this->selected_array( '3' , 'tcolumns' , $data ) . '>' . __('3 Columns' , 'ut_portfolio_lang') . '</option>';
                        $html .= '</select>';
                        $html .= '<p class="description">' . __('Select your desired tablet column layout.' , 'ut_portfolio_lang') . '</p>';
                    $html .= '</tr>';
					
                    /* mobile columns */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Mobile Columns' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><select name="' . esc_attr( $k ) . '[mcolumns]" id="' . esc_attr( $k ) . '_mcolumns">';
                            $html .= '<option value="1" ' . $this->selected_array( '1' , 'mcolumns' , $data ) . '>' . __('1 Column' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="2" ' . $this->selected_array( '2' , 'mcolumns' , $data ) . '>' . __('2 Columns' , 'ut_portfolio_lang') . '</option>';
                        $html .= '</select>';
                        $html .= '<p class="description">' . __('Select your desired mobile column layout.' , 'ut_portfolio_lang') . '</p>';
                    $html .= '</tr>';
                    
                     /* image cropping */
					$html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Image Cropping' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td>';
                        
                        $html .= '<div id="ut_cropping_settings" class="ut-cropping-size">';    
                        $html .= '<label for="' . esc_attr( $k ) . '_crop_size_x">' . __('Width' , 'ut_portfolio_lang') . '</label>';
                        $html .= '<input type="text" value="' . $this->validate_value( $data , 'crop_size_x' ) . '" class="small-text code" name="' . esc_attr( $k ) . '[crop_size_x]" id="' . esc_attr( $k ) . '_crop_size_x" />';
                        $html .= '<label for="' . esc_attr( $k ) . '_crop_size_y">' . __('Height' , 'ut_portfolio_lang') . '</label>';
                        $html .= '<input type="text" value="' . $this->validate_value( $data , 'crop_size_y' ) . '" class="small-text code" name="' . esc_attr( $k ) . '[crop_size_y]" id="' . esc_attr( $k ) . '_crop_size_y" />';
                        $html .= '</div>';
                        
                        $html .= '<p class="description">' . __('Default: 600x400' , 'ut_portfolio_lang') . '</p></td>';                        
                        
					$html .= '</tr>';
                    
                    /* end wp table */
                    $html .= '</tbody></table>';
                    
                    /* end panel & section */ 
                    $html .= '</div></section>' . "\n";                    
                
                } elseif( $v['type'] == 'gallery_options' ) {
                    
                    $data = maybe_unserialize( $data );
                    
                    $html .= '<section class="ut-option-section" id="' . esc_attr( $k ) . '">';
                    $html .= '<h2 class="ut-section-title">' . $v['name'] . '</h2>';
					$html .= '<div class="ut-section-panel">';					
					
                    /* start wp table */
                    $html .= '<table class="form-table"><tbody>';                    
                    
                    /* columns */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Overall Column Layout' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><select name="' . esc_attr( $k ) . '[columns]" id="' . esc_attr( $k ) . '_columns">';
                            $html .= '<option value="2" ' . $this->selected_array( '2' , 'columns' , $data ) . '>' . __('2 Columns' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="3" ' . $this->selected_array( '3' , 'columns' , $data ) . '>' . __('3 Columns' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="4" ' . $this->selected_array( '4' , 'columns' , $data ) . '>' . __('4 Columns' , 'ut_portfolio_lang') . '</option>';
                        $html .= '</select>';
                        $html .= '<p class="description">' . __('Select your desired overall column layout.' , 'ut_portfolio_lang') . '</p>';
                    $html .= '</tr>';
					
                    /* show hide filter */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Gallery Filter' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><div class="ut-checkbox"><input name="' . esc_attr( $k ) . '[filter]" type="checkbox" id="' . esc_attr( $k ) . '_filter" ' . $this->checked_array( 'filter' , $data ) . ' /> <label for="' . esc_attr( $k ) . '_filter"></label></div>';
					    $html .= '<p class="description">' . __('Show or hide the filter above the gallery.' , 'ut_portfolio_lang') . '</p></td>';
					$html .= '</tr>';
					
					/* filter type */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Gallery Filter Type' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><select name="' . esc_attr( $k ) . '[filter_type]" id="' . esc_attr( $k ) . '_filter_type">';
                            $html .= '<option value="ajax" ' . $this->selected_array( 'ajax' , 'filter_type' , $data ) . '>' . __('Ajax Filter' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="static" ' . $this->selected_array( 'static' , 'filter_type' , $data ) . '>' . __('Static Filter' , 'ut_portfolio_lang') . '</option>';
                        $html .= '</select>';
                        $html .= '<p class="description">' . __('Select your desired gallery filter type.' , 'ut_portfolio_lang') . '</p>';
                    $html .= '</tr>';
					
					/* filter style */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Gallery Filter Style' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><select name="' . esc_attr( $k ) . '[filter_style]" id="' . esc_attr( $k ) . '_filter_style">';
                            $html .= '<option value="style_one" ' . $this->selected_array( 'style_one' , 'filter_style' , $data ) . '>' . __('Style One (light)' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="style_two" ' . $this->selected_array( 'style_two' , 'filter_style' , $data ) . '>' . __('Style Two (themecolor)' , 'ut_portfolio_lang') . '</option>';
							$html .= '<option value="style_three" ' . $this->selected_array( 'style_three' , 'filter_style' , $data ) . '>' . __('Style Three (dark)' , 'ut_portfolio_lang') . '</option>';
                        $html .= '</select>';
                        $html .= '<p class="description">' . __('Select your desired gallery filter style.' , 'ut_portfolio_lang') . '</p>';
                    $html .= '</tr>';
                    
                    /* reset */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Gallery Filter Reset' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><input type="text" value="' . $this->validate_value( $data , 'reset_text' ) . '" class="regular-text" name="' . esc_attr( $k ) . '[reset_text]" id="' . esc_attr( $k ) . '_reset_text" /> <label for="' . esc_attr( $k ) . '_reset_text"></label>';
					    $html .= '<p class="description">' . __('Text for gallery filter reset (default: All).' , 'ut_portfolio_lang') . '</p></td>';
                    $html .= '</tr>';
                    
					/* style */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Portfolio Visual Style' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><select name="' . esc_attr( $k ) . '[style]" id="' . esc_attr( $k ) . '_style">';
                            $html .= '<option value="style_one" ' . $this->selected_array( 'style_one' , 'style' , $data ) . '>' . __('Style 1 ( only images )' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="style_two" ' . $this->selected_array( 'style_two' , 'style' , $data ) . '>' . __('Style 2 ( images with title ) ' , 'ut_portfolio_lang') . '</option>';
                        $html .= '</select>';
                        $html .= '<p class="description">' . __('Select your desired portfolio style.' , 'ut_portfolio_lang') . '</p>';
                    $html .= '</tr>';
					
					/* gutter */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Gutter' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><div class="ut-checkbox"><input name="' . esc_attr( $k ) . '[gutter]" type="checkbox" id="' . esc_attr( $k ) . '_gutter" ' . $this->checked_array( 'gutter' , $data ) . ' /> <label for="' . esc_attr( $k ) . '_gutter"></label></div>';
					    $html .= '<p class="description">' . __('Adds a small gutter between the portfolio images.' , 'ut_portfolio_lang') . '</p></td>';
					$html .= '</tr>';
                    
					 /* image cropping */
					$html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Image Cropping' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td>';
                        
                        $html .= '<div id="ut_cropping_settings_gallery" class="ut-cropping-size">';    
                        $html .= '<label for="' . esc_attr( $k ) . '_crop_size_x">' . __('Width' , 'ut_portfolio_lang') . '</label>';
                        $html .= '<input type="text" value="' . $this->validate_value( $data , 'crop_size_x' ) . '" class="small-text code" name="' . esc_attr( $k ) . '[crop_size_x]" id="' . esc_attr( $k ) . '_crop_size_x" />';
                        $html .= '<label for="' . esc_attr( $k ) . '_crop_size_y">' . __('Height' , 'ut_portfolio_lang') . '</label>';
                        $html .= '<input type="text" value="' . $this->validate_value( $data , 'crop_size_y' ) . '" class="small-text code" name="' . esc_attr( $k ) . '[crop_size_y]" id="' . esc_attr( $k ) . '_crop_size_y" />';
                        $html .= '</div>';
                        
                        $html .= '<p class="description">' . __('Default: 600x400' , 'ut_portfolio_lang') . '</p></td>';                        
                        
					$html .= '</tr>';
					
                    
                    
                    /* end wp table */
                    $html .= '</tbody></table>';
                    
                    /* end panel & section */ 
                    $html .= '</div></section>' . "\n";
                    
                        
				} elseif( $v['type'] == 'portfolio_settings' ) {
					
					$data = maybe_unserialize( $data );
					
                    $html .= '<h2 id="ut_no_type_options" class="ut-option-section ut-section-title" style="border-bottom:none;">'. __('No Portfolio Showcase Type selected. Please select one above!' , 'ut_portfolio_lang') .'</h2>';
                    
                    
                    $html .= '<section id="' . esc_attr( $k ) . '" style="padding-top:20px; border-top: 1px solid #EEEEEE;">';
                    $html .= '<h2 class="ut-section-title">' . $v['name'] . '</h2>';
                    $html .= '<div class="ut-section-panel">';
                    
					/* start wp table */
                    $html .= '<table class="form-table"><tbody>'; 
					
					/* text color */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Portfolio Title Color' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><input value="' . $this->validate_value( $data , 'text_color' ) . '" class="color-picker-hex wp-color-picker ut_color_picker" name="' . esc_attr( $k ) . '[text_color]" id="' . esc_attr( $k ) . '_text_color" /> <label for="' . esc_attr( $k ) . '_text_color"></label>';
					    $html .= '<p class="description">' . __('Portfolio title color for overlay box.' , 'ut_portfolio_lang') . '</p></td>';
                    $html .= '</tr>';
					
					/* hover color */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Portfolio Hover Color' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><input value="' . $this->validate_value( $data , 'hover_color' ) . '" class="color-picker-hex wp-color-picker ut_color_picker" name="' . esc_attr( $k ) . '[hover_color]" id="' . esc_attr( $k ) . '_hover_color" /> <label for="' . esc_attr( $k ) . '_hover_color"></label>';
					    $html .= '<p class="description">' . __('Portfolio hover color for overlay box.' , 'ut_portfolio_lang') . '</p></td>';
                    $html .= '</tr>';
					
					/* hover opacity */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Portfolio Hover Color Opacity' , 'ut_portfolio_lang') . '</th>';
					    $html .= '<td><div class="ut-range-slider-group ut-jquery-ui">';
						$html .= '<div data-state="' . $this->validate_value( $data , 'hover_opacity' , "0.8" ) . '" class="ut-opacity-slider"></div>';
						$html .= '<span class="ut-opacity-value">' . $this->validate_value( $data , 'hover_opacity' , "0.8" ) . '</span>';
						$html .= '<input value="' . $this->validate_value( $data , 'hover_opacity' , "0.8" ) . '" class="regular-text ut-hidden-slider-input" name="' . esc_attr( $k ) . '[hover_opacity]" id="' . esc_attr( $k ) . '_hover_opacity" />';
						$html .= '</div></td>';
                    $html .= '</tr>';
					
					/* image style */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Portfolio Image Style' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><select name="' . esc_attr( $k ) . '[image_style]" id="' . esc_attr( $k ) . '_image_style">';
                            $html .= '<option value="ut-square" ' . $this->selected_array( 'ut-square' , 'image_style' , $data ) . '>' . __('Square' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="ut-rounded" ' . $this->selected_array( 'ut-rounded' , 'image_style' , $data ) . '>' . __('Rounded' , 'ut_portfolio_lang') . '</option>';
                        $html .= '</select>';
                        $html .= '<p class="description">' . __('Choose between squared or rounded image styles.' , 'ut_portfolio_lang') . '</p>';
                    $html .= '</tr>';
					
					/* popup style */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Portfolio Detail Style' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><select name="' . esc_attr( $k ) . '[detail_style]" id="' . esc_attr( $k ) . '_detail_style">';
                            $html .= '<option value="popup" ' . $this->selected_array( 'popup' , 'detail_style' , $data ) . '>' . __('Popup (Lightbox)' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="slideup" ' . $this->selected_array( 'slideup' , 'detail_style' , $data ) . '>' . __('Slideup' , 'ut_portfolio_lang') . '</option>';
                        $html .= '</select>';
                        $html .= '<p class="description">' . __('Select your portfolio detail style.' , 'ut_portfolio_lang') . '</p>';
                    $html .= '</tr>';  
					
					/* posts per page */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Portfolios per Page' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><input type="text" value="' . $this->validate_value( $data , 'posts_per_page' ) . '" class="regular-text" name="' . esc_attr( $k ) . '[posts_per_page]" id="' . esc_attr( $k ) . '_posts_per_page" /> <label for="' . esc_attr( $k ) . '_posts_per_page"></label>';
					    $html .= '<p class="description">' . __('Portfolio images per page (insert -1 for unlimted posts).' , 'ut_portfolio_lang') . '</p></td>';
                    $html .= '</tr>';
					
					/* optional class */
                    $html .= '<tr valign="top">';
                        $html .= '<th scope="row">' . __('Optional Class' , 'ut_portfolio_lang') . '</th>';
                        $html .= '<td><input type="text" value="' . $this->validate_value( $data , 'optional_class' ) . '" class="regular-text" name="' . esc_attr( $k ) . '[optional_class]" id="' . esc_attr( $k ) . '_optional_class" /> <label for="' . esc_attr( $k ) . '_optional_class"></label>';
					    $html .= '<p class="description">' . __('Add an individual class to this portfolio.' , 'ut_portfolio_lang') . '</p></td>';
                    $html .= '</tr>';
					
					/* end wp table */
                    $html .= '</tbody></table>';
					
                    /* end panel & section */
                    $html .= '</div></section>' . "\n";
					
				} elseif( $v['type'] == 'portfolio_type' ) {
					
                    $html .= '<div class="ut-admin-info-box">';
                    
                        $html .= '<span class="ut-section-title">' . $v['name'] . '</span>';
                        $html .= '<div class="ut-section-panel">';
                        
                        $html .= '<select name="' . esc_attr( $k ) . '" id="' . esc_attr( $k ) . '">';
                            $html .= '<option value="ut_no_type">' . __('Choose Portfolio Type' , 'ut_portfolio_lang') . '</option>';
                            //$html .= '<option value="ut_showcase" ' . selected('ut_showcase' , $data , false) . '>' . __('Showcase Slider' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="ut_masonry" ' . selected('ut_masonry' , $data , false) . '>' . __('Grid Gallery' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="ut_gallery" ' . selected('ut_gallery' , $data , false) . '>' . __('Filterable Portfolio Gallery' , 'ut_portfolio_lang') . '</option>';
                            $html .= '<option value="ut_carousel" ' . selected('ut_carousel' , $data , false) . '>' . __('Portfolio Carousel' , 'ut_portfolio_lang') . '</option>';
                        $html .= '</select>';
                        
                        $html .= $v['description'];
                        
                        /* end panel & section */
                        $html .= '</div>' . "\n";
                        
                    $html .= '</div>' . "\n";                    
					
				} elseif( $v['type'] == 'checkbox' ) {
					
					$html .= '<h2 class="ut-section-title">' . $v['name'] . '</h2>';
					$html .= '<div class="ut-section-panel">';					
					
					$html .= '<div class="ut-checkbox"><input name="' . esc_attr( $k ) . '" type="checkbox" id="' . esc_attr( $k ) . '" ' . checked( 'on' , $data , false ) . ' /> <label for="' . esc_attr( $k ) . '"></label></div>';
					$html .= '<span class="description">' . $v['description'] . '</span>';
					
					$html .= '</div>' . "\n";
					
				} else {
					
					$html .= '<h2 class="ut-section-title">' . $v['name'] . '</h2>';
					$html .= '<div class="ut-section-panel">';
					$html .= '<label for="' . esc_attr( $k ) . '">' . $v['name'] . '</label><input name="' . esc_attr( $k ) . '" type="text" id="' . esc_attr( $k ) . '" class="regular-text" value="' . esc_attr( $data ) . '" />' . "\n";
					$html .= '<p class="description">' . $v['description'] . '</p>' . "\n";
					$html .= '</div>' . "\n";
					
				}

			}
            
            $html .= '</div>';
            
            $html .= '</td>' . "\n";
            $html .= '</tr>' . "\n";
            $html .= '</tbody>' . "\n";
			$html .= '</table>' . "\n";

		}
		
		echo $html;	
	}
	
	public function meta_box_content_info() {
		
		global $post_id;
		
		$info  = '<p><strong>' . __('United Themes - Portfolio Showcase Shortcode' , 'ut_portfolio_lang') . '</strong></p>';
		$info .= '<textarea wrap="off" readonly="readonly" class="ut-shortcode-code">[ut_showcase id="' . $post_id . '"]</textarea>';
		
		echo $info;
	
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

	public function enter_title_here( $title ) {
		if ( get_post_type() == $this->token ) {
			$title = __( 'Enter the post title here' , 'ut_portfolio_lang' );
		}
		return $title;
	}

	public function get_custom_fields_settings() {

		$fields = array();
		
		$fields['ut_portfolio_type'] = array(
		    'name' => __( 'United Themes - Portfolio Showcase Type' , 'ut_portfolio_lang' ),
		    'description' => __( 'Choose between 3 types of portfolio layouts.' , 'ut_portfolio_lang' ),
		    'type' => 'portfolio_type',
		    'default' => '',
		    'section' => 'plugin-data'
		);
        
        $fields['ut_showcase_usage'] = array(
		    'name' => __( 'United Themes - Portfolio Showcase Shortcode' , 'ut_portfolio_lang' ),
		    'description' => __( 'Simply copy this United Themes - Portfolio Showcase Shortcode and <br />place it inside the text editor of the section / page you like to display <br />the showcase in. ' , 'ut_portfolio_lang' ),
		    'type' => 'showcase_info',
		    'default' => '',
		    'section' => 'plugin-data'
		);
        
		$fields['ut_portfolio_categories'] = array(
		    'name' => __( 'Choose Portfolio Categories' , 'ut_portfolio_lang' ),
		    'description' => __( 'Only display portfolio images of these categories. Use the dark arrow to change the order of the categories, this will change the order of the ajax filter categories on the front page.' , 'ut_portfolio_lang' ),
		    'type' => 'taxonomy',
		    'default' => '',
		    'section' => 'plugin-data'
		);
		
        $fields['ut_showcase_options'] = array(
		    'name' => __( 'Showcase Options' , 'ut_portfolio_lang' ),
		    'description' => '',
		    'type' => 'showcase_options',
		    'default' => '',
		    'section' => 'plugin-data'
		);
        
        $fields['ut_carousel_options'] = array(
		    'name' => __( 'Portfolio Carousel Options' , 'ut_portfolio_lang' ),
		    'description' => '',
		    'type' => 'carousel_options',
		    'default' => '',
		    'section' => 'plugin-data'
		);
		
		$fields['ut_masonry_options'] = array(
		    'name' => __( 'Grid Gallery Options' , 'ut_portfolio_lang' ),
		    'description' => '',
		    'type' => 'masonry_options',
		    'default' => '',
		    'section' => 'plugin-data'
		);
		
		$fields['ut_gallery_options'] = array(
		    'name' => __( 'Filterable Portfolio Gallery Options' , 'ut_portfolio_lang' ),
		    'description' => '',
		    'type' => 'gallery_options',
		    'default' => '',
		    'section' => 'plugin-data'
		);		
		
        $fields['ut_portfolio_settings'] = array(
		    'name' => __( 'Portfolio General Settings' , 'ut_portfolio_lang' ),
		    'description' => '',
		    'type' => 'portfolio_settings',
		    'default' => '',
		    'section' => 'plugin-data'
		);
        
		return $fields;
		
	}
	
}