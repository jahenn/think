<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class UT_Table_Manager {
	
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
		$this->token = 'ut-table-manager';
               
		// Regsiter post type
		add_action( 'init' , array( $this, 'register_post_type' ) ); 
        
		if ( is_admin() ) {

			// Handle custom fields for post
			add_action( 'admin_menu', array( $this, 'meta_box_setup' ), 20 );
			add_action( 'save_post', array( $this, 'meta_box_save' ) );

			// Modify text in main title text box
			add_filter( 'enter_title_here', array( $this, 'enter_title_here' ) );

			// Display custom update messages for posts edits
			add_filter( 'post_updated_messages', array( $this, 'updated_messages' ) );

			// Handle post columns
			add_filter( 'manage_edit-' . $this->token . '_columns', array( $this, 'register_custom_column_headings' ), 10, 1 );
			add_action( 'manage_posts_custom_column', array( $this, 'register_custom_columns' ), 10, 2 );
			
			// add a few custom styles for post page
			add_action('admin_print_styles-post.php', array( &$this, 'register_settings_styles' ) );
            add_action('admin_print_styles-post-new.php', array( &$this, 'register_settings_styles' ) ); 
			
            // menu icon
            add_action( 'admin_head', array( &$this, 'add_menu_icon' ) );
            
		}

	}
	
    public function add_menu_icon() {
    
        echo '<style type="text/css"> #adminmenu .menu-icon-'.$this->token.' div.wp-menu-image:before { content: "\f163"; } </style>';
    
    }
	
	public function register_settings_styles() {
		
        global $post, $post_ID;        
        
        if( get_post_type($post_ID) == $this->token ) {
        
		/* core style files */
		wp_enqueue_style('wp-color-picker');
		
		/* core script files */
		wp_enqueue_script('jquery-ui');
		wp_enqueue_script('jquery-ui-tabs');
		wp_enqueue_script('jquery-ui-widget');
		wp_enqueue_script('jquery-ui-mouse ');
		
		/* custom css files */
		wp_enqueue_style('ut-table-manager-styles', $this->assets_url . 'admin/css/ut.table.manager.css');
		
		/* custom js files */
        wp_enqueue_script('ut-table-manager-scripts', $this->assets_url . 'admin/js/ut.table.manager.js' , array( 'wp-color-picker' ) );
	    
        }
        
	}
	
	/**
	 * Register new post type
	 * @return void
	 */
	public function register_post_type() {

		$labels = array(
			'name' => _x( 'United Themes - Pricing Table Manager', 'post type general name' , 'ut_table_lang' ),
			'singular_name' => _x( 'United Themes - Pricing Table Manager', 'post type singular name' , 'ut_table_lang' ),
			'add_new' => _x( 'Add UT Pricing Table', $this->token , 'ut_table_lang' ),
			'add_new_item' => sprintf( __( 'Add %s' , 'ut_table_lang' ), __( 'UT Pricing Table' , 'ut_table_lang' ) ),
			'edit_item' => sprintf( __( 'Edit %s' , 'ut_table_lang' ), __( 'Table' , 'ut_table_lang' ) ),
			'new_item' => sprintf( __( 'New %s' , 'ut_table_lang' ), __( 'Table' , 'ut_table_lang' ) ),
			'all_items' => sprintf( __( 'All %s' , 'ut_table_lang' ), __( 'UT Pricing Tables' , 'ut_table_lang' ) ),
			'view_item' => sprintf( __( 'View %s' , 'ut_table_lang' ), __( 'Tables' , 'ut_table_lang' ) ),
			'search_items' => sprintf( __( 'Search %a' , 'ut_table_lang' ), __( 'Tables' , 'ut_table_lang' ) ),
			'not_found' =>  sprintf( __( 'No %s Found' , 'ut_table_lang' ), __( 'Tables' , 'ut_table_lang' ) ),
			'not_found_in_trash' => sprintf( __( 'No %s Found In Trash' , 'ut_table_lang' ), __( 'Posts' , 'ut_table_lang' ) ),
			'parent_item_colon' => '',
			'menu_name' => __( 'UT Pricing Tables' , 'ut_table_lang' )
		);

		$args = array(
			'labels' => $labels,
			'public' => false,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'query_var' => false,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'supports' => array( 'title' ),
			'menu_position' => 5,
			'menu_icon' => ''
		);

		register_post_type( $this->token, $args );
	}
	
    /**
     * Regsiter column headings for post type
     * @param  array $defaults Default columns
     * @return array           Modified columns
     */
    public function register_custom_column_headings( $defaults ) {
		$new_columns = array(
			'pricing-shortcode' => __( 'Shortcode' , 'ut_table_lang' )
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

	/**
	 * Load data for post type columns
	 * @param  string  $column_name Name of column
	 * @param  integer $id          Post ID
	 * @return void
	 */
	public function register_custom_columns( $column_name, $id ) {
		
		global $post, $post_ID;
		
		switch ( $column_name ) {

			case 'pricing-shortcode':
				echo '[ut_pricing id="' . $post->ID . '"]';
			break;

			default:
			break;
		}

	}

	/**
	 * Set up admin messages for post type
	 * @param  array $messages Default message
	 * @return array           Modified messages
	 */
	public function updated_messages( $messages ) {
	  global $post, $post_ID;

	  $messages[$this->token] = array(
	    0 => '', // Unused. Messages start at index 1.
	    1 => sprintf( __( 'Post updated. %sView post%s.' , 'ut_table_lang' ), '<a href="' . esc_url( get_permalink( $post_ID ) ) . '">', '</a>' ),
	    2 => __( 'Custom field updated.' , 'ut_table_lang' ),
	    3 => __( 'Custom field deleted.' , 'ut_table_lang' ),
	    4 => __( 'Post updated.' , 'ut_table_lang' ),
	    /* translators: %s: date and time of the revision */
	    5 => isset($_GET['revision']) ? sprintf( __( 'Post restored to revision from %s.' , 'ut_table_lang' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
	    6 => sprintf( __( 'Post published. %sView post%s.' , 'ut_table_lang' ), '<a href="' . esc_url( get_permalink( $post_ID ) ) . '">', '</a>' ),
	    7 => __( 'Post saved.' , 'ut_table_lang' ),
	    8 => sprintf( __( 'Post submitted. %sPreview post%s.' , 'ut_table_lang' ), '<a target="_blank" href="' . esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) . '">', '</a>' ),
	    9 => sprintf( __( 'Post scheduled for: %1$s. %2$sPreview post%3$s.' , 'ut_table_lang' ), '<strong>' . date_i18n( __( 'M j, Y @ G:i' , 'ut_table_lang' ), strtotime( $post->post_date ) ) . '</strong>', '<a target="_blank" href="' . esc_url( get_permalink( $post_ID ) ) . '">', '</a>' ),
	    10 => sprintf( __( 'Post draft updated. %sPreview post%s.' , 'ut_table_lang' ), '<a target="_blank" href="' . esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) . '">', '</a>' ),
	  );

	  return $messages;
	}

	/**
	 * Add meta box to post type
	 * @return void
	 */
	public function meta_box_setup() {
		add_meta_box( 'ut-table-manager', __( 'United Themes - Pricing Table Settings' , 'ut_table_lang' ) . ' v' . UT_PRICING_VERSION, array( &$this, 'meta_box_content' ), $this->token, 'normal', 'high' );
		add_meta_box( 'ut-table-manager-info', __( 'Usage' , 'ut_table_lang' ), array( &$this, 'meta_box_content_info' ), $this->token, 'side', 'high' );
	}

	public function checked_array( $current , $haystack , $offset = false ) {
		
		if( $offset && isset( $haystack[$offset] ) ) {
			
			$haystack = $haystack[$offset];
			
			if( !is_array($haystack) )					
			return checked( $haystack, $current , false );
			
		}
								
		if( is_array($haystack) && isset($haystack[$current]) ) {
			
			$current = $haystack = 1;
			return checked( $haystack, $current , false );
			
		}

				
	}
    
    public function selected_array( $key , $current , $haystack , $offset = false ) {
		
		if( $offset && isset( $haystack[$offset][$key] ) ) {
			
			$haystack = $haystack[$offset][$key];
			
			if( !is_array($haystack) )
			return selected( $haystack, $current , false );
			
		}
												
		if( is_array($haystack) && isset($haystack[$key]) && $haystack[$key] == $current) {
			
			$current = $haystack = 1;
			return selected( $haystack, $current , false );
			
		}

	}
	
	public function validate_value( $value , $key , $offset = false, $default = '' ) {
		
		if( $offset && isset($value[$offset][$key]) ) {
		
			return esc_attr($value[$offset][$key]);
		
		} elseif( isset($value[$key]) ) {
        
            return esc_attr($value[$key]);
        
        } else {
        
            return $default;
        
        }
		
	}
	
	public function meta_box_content() {
		
		global $post_id;
		
		$fields = get_post_custom( $post_id );
		$field_data = $this->get_custom_fields_settings();

		$html = NULL;

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
                                
                if( $v['type'] == 'select' ) {
                        
                        $html .= '<div class="ut-admin-info-box">';
                        
                            $html .= '<span class="ut-section-title">' . $v['name'] . '</span>';
                            
                            /* data available */
                            $data = maybe_unserialize( $data );
                            
                            $html .= '<div class="ut-section-panel">';
                            $html .= '<select name="' . esc_attr( $k ) . '[style]" id="' . esc_attr( $k ) . '_style">';
                                
                                $html .= '<option value="ut-pt-wrap-style-1" ' . $this->selected_array( 'style' , 'ut-pt-wrap-style-1' , $data , false ) . '>'  . __('Style One' , 'ut_table_lang') . '</option>';
                                $html .= '<option value="ut-pt-wrap-style-2" ' . $this->selected_array( 'style' , 'ut-pt-wrap-style-2' , $data , false ) . '>'  . __('Style Two' , 'ut_table_lang') . '</option>';
    
                            $html .= '</select>';  
                            $html .= __('Choose between 2 nice table layout styles (default : Style One).' , 'ut_table_lang');                      
                            $html .= '</div>' . "\n";
                        
                        $html .= '</div>' . "\n";
                        
                        $html .= '<div class="ut-admin-info-box">';
                        
                            $html .= '<span class="ut-section-title">' . __('United Themes - Pricing Table Shortcode' , 'ut_table_lang') . '</span>';                        
                            
                            $html .= '<div class="ut-section-panel">';
                            
                                $html .= '<textarea readonly class="ut-shortcode-code">[ut_pricing id="' . $post_id . '"]</textarea>';
                                $html .= __('Simply copy this United Themes - Pricing Table Shortcode and place <br /> it inside the text editor of the section / page you like to display the <br />pricing table in. ' , 'ut_table_lang');
                                                  
                            $html .= '</div>' . "\n";
                        
                        $html .= '</div>' . "\n"; 
                        
                        $html .= '<div class="clear"></div>';                       
                
                } elseif( $v['type'] == 'ut_table_data' ) {
					
                    $data = maybe_unserialize( $data );
					
					$html .= '<div id="ut-table-tabs" class="ut-table-tabs">';
						
						$html .= '<ul class="ut-table-tabs-nav">';
							
							$html .= '<li><a href="#table-column-1">Column 1</a></li>';
							$html .= '<li><a href="#table-column-2">Column 2</a></li>';
							$html .= '<li><a href="#table-column-3">Column 3</a></li>';
							$html .= '<li><a href="#table-column-4">Column 4</a></li>';
							
						$html .= '</ul>';
						
						/* column 1 */
						$html .= '<div id="table-column-1">';					
								
								$html .= '<table class="form-table">' . "\n";
								$html .= '<tbody>' . "\n";
								
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row"><h2>Column One</h2></th>';
									$html .= '<td></td>';
									
								$html .= '</tr>';								
								
								/* column 1 status */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Activate' , 'ut_table_lang') . '</th>';
									$html .= '<td><div class="ut-checkbox"><input name="' . esc_attr( $k ) . '[1][activate_column]" type="checkbox" id="' . esc_attr( $k ) . '_activate_column_1" ' . $this->checked_array( 'activate_column' , $data, 1 ) . ' /> <label for="' . esc_attr( $k ) . '_activate_column_1"></label></div></td>';
									
								$html .= '</tr>';
								
								/* column 1 featured */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Featured' , 'ut_table_lang') . '</th>';
									$html .= '<td><div class="ut-checkbox"><input name="' . esc_attr( $k ) . '[1][featured_column]" type="checkbox" id="' . esc_attr( $k ) . '_featured_column_1" ' . $this->checked_array( 'featured_column' , $data, 1 ) . ' /> <label for="' . esc_attr( $k ) . '_featured_column_1"></label></div></td>';
									
								$html .= '</tr>';
								
								/* column 1 featured headline */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Featured Headline' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'featured_headline' , 1 ) . '" name="' . esc_attr( $k ) . '[1][featured_headline]" id="' . esc_attr( $k ) . '_featured_headline_1" /> <label for="' . esc_attr( $k ) . '_featured_headline_1"></label>';
									$html .= '<p>' . __('Only available for Pricing Table Style One.' , 'ut_table_lang') . '</p>';
                                    
								$html .= '</tr>';
								
								/* column 1 custom header */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Custom Header' , 'ut_table_lang') . '</th>';
									$html .= '<td><textarea class="large-text code" rows="7" name="' . esc_attr( $k ) . '[1][header]" id="' . esc_attr( $k ) . '_header_1" />' . $this->validate_value( $data , 'header' , 1 ) . '</textarea> <label for="' . esc_attr( $k ) . '_header_1"></label>';
								
								$html .= '</tr>';		
								
								/* column 1 headline */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Headline' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'headline' , 1 ) . '" name="' . esc_attr( $k ) . '[1][headline]" id="' . esc_attr( $k ) . '_headline_1" /> <label for="' . esc_attr( $k ) . '_headline_1"></label>';
									
								$html .= '</tr>';
								
								/* column 1 subheadline */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Subheadline' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'subheadline' , 1 ) . '" name="' . esc_attr( $k ) . '[1][subheadline]" id="' . esc_attr( $k ) . '_subheadline_1" /> <label for="' . esc_attr( $k ) . '_subheadline_1"></label>';
									
								$html .= '</tr>';
								
								/* column 1 price */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Price' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'price' , 1 ) . '" name="' . esc_attr( $k ) . '[1][price]" id="' . esc_attr( $k ) . '_price_1" /> <label for="' . esc_attr( $k ) . '_price_1"></label>';
									
								$html .= '</tr>';
								
								/* column 1 currency */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Currency' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'currency' , 1 ) . '" name="' . esc_attr( $k ) . '[1][currency]" id="' . esc_attr( $k ) . '_currency_1" /> <label for="' . esc_attr( $k ) . '_currency_1"></label>';
									
								$html .= '</tr>';
								
								/* column 1 period */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Period' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'period' , 1 ) . '" name="' . esc_attr( $k ) . '[1][period]" id="' . esc_attr( $k ) . '_period_1" /> <label for="' . esc_attr( $k ) . '_period_1"></label>';
									
								$html .= '</tr>';
								
								/* column 1 features */
								$html .= '<tr valign="top">';
									
									$c = $features = NULL;
									
									if( isset($data[1]['features']) && is_array($data[1]['features']) ) {
											
										if ( count( $data[1]['features'] ) > 0 ) {
											
											foreach( $data[1]['features'] as $key => $dataset ) {
												
												$features .= '<p><input type="text" class="regular-text" name="' . esc_attr( $k ) . '[1][features]['.$key.'][title]" value="' . $dataset['title'] . '" /><span class="ut-admin-remove remove-feature">' . __('X' , 'ut_table_lang') . '</span></p>';
												$c = $key;
												
											}
											
										}
										
									}
									
									$html .= '<th scope="row">';
										$html .= __( 'Manage Rows' , 'ut_table_lang' ) . '<br /><br />';
										$html .= '<span data-column="1" data-featuregroup="' . esc_attr( $k ) . '" data-featurecount="'.$c.'" class="add-feature ut-admin-add">' . __('Add Row' , 'ut_table_lang') . '</span>';
									$html .= '</th>';

																	
									$html .= '<td>';
										
										$html .= '<div class="ut-admin-features" id="ut-repeat-' . esc_attr( $k ) . '-1">';
										
											$html .= $features;
											
										$html .= '</div>';
										
									$html .= '</td>';
									
									$html .= '</tr>';
									
									
									/* column 1 button text */
									$html .= '<tr valign="top">';
										
										$html .= '<th scope="row">' . __('Button Text' , 'ut_table_lang') . '</th>';										
										$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'button_text' , 1 ) . '" name="' . esc_attr( $k ) . '[1][button_text]" id="' . esc_attr( $k ) . '_button_text_1" /> <label for="' . esc_attr( $k ) . '_button_text_1"></label>';
										
									$html .= '</tr>';
									
									/* column 1 button link */
									$html .= '<tr valign="top">';
										
										$html .= '<th scope="row">' . __('Button Link' , 'ut_table_lang') . '</th>';										
										$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'button_link' , 1 ) . '" name="' . esc_attr( $k ) . '[1][button_link]" id="' . esc_attr( $k ) . '_button_link_1" /> <label for="' . esc_attr( $k ) . '_button_link_1"></label>';
										
									$html .= '</tr>';
                                    
									/* column 1 button target */
									$html .= '<tr valign="top">';
										$html .= '<th scope="row">' . __('Button Target' , 'ut_table_lang') . '</th>';
										
										$html .= '<td><select name="' . esc_attr( $k ) . '[1][button_target]" id="' . esc_attr( $k ) . '_button_target">';
											$html .= '<option value="_self" ' . $this->selected_array( 'button_target' , '_self' , $data , 1 ) . '>' . __('_self' , 'ut_table_lang') . '</option>';
											$html .= '<option value="_blank" ' . $this->selected_array( 'button_target' , '_blank' , $data , 1 ) . '>' . __('_blank' , 'ut_table_lang') . '</option>';
										$html .= '</select></td>';
										
									$html .= '</tr>';
									
									$html .= '</tbody>' . "\n";
									$html .= '</table>' . "\n";
									
						$html .= '</div>';
					
						
						/* column 2 */
						$html .= '<div id="table-column-2">';					
								
								$html .= '<table class="form-table">' . "\n";
								$html .= '<tbody>' . "\n";
								
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row"><h2>Column Two</h2></th>';
									$html .= '<td></td>';
									
								$html .= '</tr>';
								
								/* column 2 status */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Activate' , 'ut_table_lang') . '</th>';
									$html .= '<td><div class="ut-checkbox"><input name="' . esc_attr( $k ) . '[2][activate_column]" type="checkbox" id="' . esc_attr( $k ) . '_activate_column_2" ' . $this->checked_array( 'activate_column' , $data, 2 ) . ' /> <label for="' . esc_attr( $k ) . '_activate_column_2"></label></div></td>';
									
								$html .= '</tr>';
								
								/* column 2 featured */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Featured' , 'ut_table_lang') . '</th>';
									$html .= '<td><div class="ut-checkbox"><input name="' . esc_attr( $k ) . '[2][featured_column]" type="checkbox" id="' . esc_attr( $k ) . '_featured_column_2" ' . $this->checked_array( 'featured_column' , $data, 2 ) . ' /> <label for="' . esc_attr( $k ) . '_featured_column_2"></label></div></td>';
									
								$html .= '</tr>';
								
								/* column 2 featured headline */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Featured Headline' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'featured_headline' , 2 ) . '" name="' . esc_attr( $k ) . '[2][featured_headline]" id="' . esc_attr( $k ) . '_featured_headline_2" /> <label for="' . esc_attr( $k ) . '_featured_headline_2"></label>';
									$html .= '<p>' . __('Only available for Pricing Table Style One.' , 'ut_table_lang') . '</p>';
                                    
								$html .= '</tr>';
								
								/* column 2 custom header */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Custom Header' , 'ut_table_lang') . '</th>';
									$html .= '<td><textarea class="large-text code" rows="7" name="' . esc_attr( $k ) . '[2][header]" id="' . esc_attr( $k ) . '_header_2" />' . $this->validate_value( $data , 'header' , 2 ) . '</textarea> <label for="' . esc_attr( $k ) . '_header_2"></label>';
								
								$html .= '</tr>';		
								
								/* column 2 headline */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Headline' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'headline' , 2 ) . '" name="' . esc_attr( $k ) . '[2][headline]" id="' . esc_attr( $k ) . '_headline_2" /> <label for="' . esc_attr( $k ) . '_headline_2"></label>';
									
								$html .= '</tr>';
								
								/* column 2 subheadline */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Subheadline' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'subheadline' , 2 ) . '" name="' . esc_attr( $k ) . '[2][subheadline]" id="' . esc_attr( $k ) . '_subheadline_2" /> <label for="' . esc_attr( $k ) . '_subheadline_2"></label>';
									
								$html .= '</tr>';
								
								/* column 2 price */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Price' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'price' , 2 ) . '" name="' . esc_attr( $k ) . '[2][price]" id="' . esc_attr( $k ) . '_price_2" /> <label for="' . esc_attr( $k ) . '_price_2"></label>';
									
								$html .= '</tr>';
								
								/* column 2 currency */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Currency' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'currency' , 2 ) . '" name="' . esc_attr( $k ) . '[2][currency]" id="' . esc_attr( $k ) . '_currency_2" /> <label for="' . esc_attr( $k ) . '_currency_2"></label>';
									
								$html .= '</tr>';
								
								/* column 2 period */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Period' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'period' , 2 ) . '" name="' . esc_attr( $k ) . '[2][period]" id="' . esc_attr( $k ) . '_period_2" /> <label for="' . esc_attr( $k ) . '_period_2"></label>';
									
								$html .= '</tr>';
								
								/* column 2 features */
								$html .= '<tr valign="top">';
									
									$c = $features = NULL;
									
									if( isset($data[2]['features']) && is_array($data[2]['features']) ) {
											
										if ( count( $data[2]['features'] ) > 0 ) {
											
											foreach( $data[2]['features'] as $key => $dataset ) {
												
												$features .= '<p><input type="text" class="regular-text" name="' . esc_attr( $k ) . '[2][features]['.$key.'][title]" value="' . $dataset['title'] . '" /><span class="ut-admin-remove remove-feature">' . __('X' , 'ut_table_lang') . '</span></p>';
												$c = $key;
												
											}
											
										}
										
									}
									
									$html .= '<th scope="row">';
										$html .= __( 'Manage Rows' , 'ut_table_lang' ) . '<br /><br />';
										$html .= '<span data-column="2" data-featuregroup="' . esc_attr( $k ) . '" data-featurecount="'.$c.'" class="add-feature ut-admin-add">' . __('Add Row' , 'ut_table_lang') . '</span>';
									$html .= '</th>';

																	
									$html .= '<td>';
										
										$html .= '<div class="ut-admin-features" id="ut-repeat-' . esc_attr( $k ) . '-2">';
										
											$html .= $features;
											
										$html .= '</div>';
										
									$html .= '</td>';
									
									$html .= '</tr>';
								
								/* column 2 button text */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Button Text' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'button_text' , 2 ) . '" name="' . esc_attr( $k ) . '[2][button_text]" id="' . esc_attr( $k ) . '_button_text_2" /> <label for="' . esc_attr( $k ) . '_button_text_2"></label>';
									
								$html .= '</tr>';
								
								/* column 2 button link */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Button Link' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'button_link' , 2 ) . '" name="' . esc_attr( $k ) . '[2][button_link]" id="' . esc_attr( $k ) . '_button_link_2" /> <label for="' . esc_attr( $k ) . '_button_link_2"></label>';
									
								$html .= '</tr>';
								
								/* column 2 button target */
								$html .= '<tr valign="top">';
									$html .= '<th scope="row">' . __('Button Target' , 'ut_table_lang') . '</th>';
									
									$html .= '<td><select name="' . esc_attr( $k ) . '[2][button_target]" id="' . esc_attr( $k ) . '_button_target">';
										$html .= '<option value="_self" ' . $this->selected_array( 'button_target' , '_self' , $data , 2 ) . '>' . __('_self' , 'ut_table_lang') . '</option>';
										$html .= '<option value="_blank" ' . $this->selected_array( 'button_target' , '_blank' , $data , 2 ) . '>' . __('_blank' , 'ut_table_lang') . '</option>';
									$html .= '</select></td>';
									
								$html .= '</tr>';
											
								$html .= '</tbody>' . "\n";
								$html .= '</table>' . "\n";
					
						$html .= '</div>';
						
						/* column 3 */
						$html .= '<div id="table-column-3">';					
								
								$html .= '<table class="form-table">' . "\n";
								$html .= '<tbody>' . "\n";
								
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row"><h2>Column Three</h2></th>';
									$html .= '<td></td>';
									
								$html .= '</tr>';
								
								/* column 3 status */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Activate' , 'ut_table_lang') . '</th>';
									$html .= '<td><div class="ut-checkbox"><input name="' . esc_attr( $k ) . '[3][activate_column]" type="checkbox" id="' . esc_attr( $k ) . '_activate_column_3" ' . $this->checked_array( 'activate_column' , $data, 3 ) . ' /> <label for="' . esc_attr( $k ) . '_activate_column_3"></label></div></td>';
									
								$html .= '</tr>';
								
								/* column 3 featured */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Featured' , 'ut_table_lang') . '</th>';
									$html .= '<td><div class="ut-checkbox"><input name="' . esc_attr( $k ) . '[3][featured_column]" type="checkbox" id="' . esc_attr( $k ) . '_featured_column_3" ' . $this->checked_array( 'featured_column' , $data, 3 ) . ' /> <label for="' . esc_attr( $k ) . '_featured_column_3"></label></div></td>';
									
								$html .= '</tr>';
								
								/* column 3 featured headline */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Featured Headline' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'featured_headline' , 3 ) . '" name="' . esc_attr( $k ) . '[3][featured_headline]" id="' . esc_attr( $k ) . '_featured_headline_3" /> <label for="' . esc_attr( $k ) . '_featured_headline_3"></label>';
									$html .= '<p>' . __('Only available for Pricing Table Style One.' , 'ut_table_lang') . '</p>';
                                    
								$html .= '</tr>';	
															
								/* column 3 custom header */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Custom Header' , 'ut_table_lang') . '</th>';
									$html .= '<td><textarea class="large-text code" rows="7" name="' . esc_attr( $k ) . '[3][header]" id="' . esc_attr( $k ) . '_header_3" />' . $this->validate_value( $data , 'header' , 3 ) . '</textarea> <label for="' . esc_attr( $k ) . '_header_3"></label>';
								
								$html .= '</tr>';		
								
								/* column 3 headline */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Headline' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'headline' , 3 ) . '" name="' . esc_attr( $k ) . '[3][headline]" id="' . esc_attr( $k ) . '_headline_3" /> <label for="' . esc_attr( $k ) . '_headline_3"></label>';
									
								$html .= '</tr>';
								
								/* column 3 subheadline */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Subheadline' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'subheadline' , 3 ) . '" name="' . esc_attr( $k ) . '[3][subheadline]" id="' . esc_attr( $k ) . '_subheadline_3" /> <label for="' . esc_attr( $k ) . '_subheadline_3"></label>';
									
								$html .= '</tr>';
								
								/* column 3 price */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Price' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'price' , 3 ) . '" name="' . esc_attr( $k ) . '[3][price]" id="' . esc_attr( $k ) . '_price_3" /> <label for="' . esc_attr( $k ) . '_price_3"></label>';
									
								$html .= '</tr>';
								
								/* column 3 currency */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Currency' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'currency' , 3 ) . '" name="' . esc_attr( $k ) . '[3][currency]" id="' . esc_attr( $k ) . '_currency_3" /> <label for="' . esc_attr( $k ) . '_currency_3"></label>';
									
								$html .= '</tr>';
								
								/* column 3 period */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Period' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'period' , 3 ) . '" name="' . esc_attr( $k ) . '[3][period]" id="' . esc_attr( $k ) . '_period_3" /> <label for="' . esc_attr( $k ) . '_period_3"></label>';
									
								$html .= '</tr>';
								
								/* column 3 features */
								$html .= '<tr valign="top">';
									
									$c = $features = NULL;
																		
									if( isset($data[3]['features']) && is_array($data[3]['features']) ) {
											
										if ( count( $data[3]['features'] ) > 0 ) {
											
											foreach( $data[3]['features'] as $key => $dataset ) {
												
												$features .= '<p><input type="text" class="regular-text" name="' . esc_attr( $k ) . '[3][features]['.$key.'][title]" value="' . $dataset['title'] . '" /><span class="ut-admin-remove remove-feature">' . __('X' , 'ut_table_lang') . '</span></p>';
												$c = $key;
												
											}
											
										}
										
									}
									
									$html .= '<th scope="row">';
										$html .= __( 'Manage Rows' , 'ut_table_lang' ) . '<br /><br />';
										$html .= '<span data-column="3" data-featuregroup="' . esc_attr( $k ) . '" data-featurecount="'.$c.'" class="add-feature ut-admin-add">' . __('Add Row' , 'ut_table_lang') . '</span>';
									$html .= '</th>';

																	
									$html .= '<td>';
										
										$html .= '<div class="ut-admin-features" id="ut-repeat-' . esc_attr( $k ) . '-3">';
										
											$html .= $features;
											
										$html .= '</div>';
										
									$html .= '</td>';
									
									$html .= '</tr>';
								
								/* column 3 button text */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Button Text' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'button_text' , 3 ) . '" name="' . esc_attr( $k ) . '[3][button_text]" id="' . esc_attr( $k ) . '_button_text_3" /> <label for="' . esc_attr( $k ) . '_button_text_3"></label>';
									
								$html .= '</tr>';
								
								/* column 3 button link */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Button Link' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'button_link' , 3 ) . '" name="' . esc_attr( $k ) . '[3][button_link]" id="' . esc_attr( $k ) . '_button_link_3" /> <label for="' . esc_attr( $k ) . '_button_link_3"></label>';
									
								$html .= '</tr>';
								
								/* column 3 button target */
								$html .= '<tr valign="top">';
									$html .= '<th scope="row">' . __('Button Target' , 'ut_table_lang') . '</th>';
									
									$html .= '<td><select name="' . esc_attr( $k ) . '[3][button_target]" id="' . esc_attr( $k ) . '_button_target">';
										$html .= '<option value="_self" ' . $this->selected_array( 'button_target' , '_self' , $data , 3 ) . '>' . __('_self' , 'ut_table_lang') . '</option>';
										$html .= '<option value="_blank" ' . $this->selected_array( 'button_target' , '_blank' , $data , 3 ) . '>' . __('_blank' , 'ut_table_lang') . '</option>';
									$html .= '</select></td>';
									
								$html .= '</tr>';
											
								$html .= '</tbody>' . "\n";
								$html .= '</table>' . "\n";
					
						$html .= '</div>';
						
						/* column 4 */
						$html .= '<div id="table-column-4">';					
								
								$html .= '<table class="form-table">' . "\n";
								$html .= '<tbody>' . "\n";
								
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row"><h2>Column Four</h2></th>';
									$html .= '<td></td>';
									
								$html .= '</tr>';
								
								/* column 4 status */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Activate' , 'ut_table_lang') . '</th>';
									$html .= '<td><div class="ut-checkbox"><input name="' . esc_attr( $k ) . '[4][activate_column]" type="checkbox" id="' . esc_attr( $k ) . '_activate_column_4" ' . $this->checked_array( 'activate_column' , $data, 4 ) . ' /> <label for="' . esc_attr( $k ) . '_activate_column_4"></label></div></td>';
									
								$html .= '</tr>';
								
								/* column 4 featured */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Featured' , 'ut_table_lang') . '</th>';
									$html .= '<td><div class="ut-checkbox"><input name="' . esc_attr( $k ) . '[4][featured_column]" type="checkbox" id="' . esc_attr( $k ) . '_featured_column_4" ' . $this->checked_array( 'featured_column' , $data, 4 ) . ' /> <label for="' . esc_attr( $k ) . '_featured_column_4"></label></div></td>';
									
								$html .= '</tr>';
								
								/* column 4 featured headline */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Featured Headline' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'featured_headline' , 4 ) . '" name="' . esc_attr( $k ) . '[4][featured_headline]" id="' . esc_attr( $k ) . '_featured_headline_4" /> <label for="' . esc_attr( $k ) . '_featured_headline_4"></label>';
									$html .= '<p>' . __('Only available for Pricing Table Style One.' , 'ut_table_lang') . '</p>';
                                    
								$html .= '</tr>';
								
								/* column 4 custom header */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Custom Header' , 'ut_table_lang') . '</th>';
									$html .= '<td><textarea class="large-text code" rows="7" name="' . esc_attr( $k ) . '[4][header]" id="' . esc_attr( $k ) . '_header_4" />' . $this->validate_value( $data , 'header' , 4 ) . '</textarea> <label for="' . esc_attr( $k ) . '_header_4"></label>';
								
								$html .= '</tr>';		
								
								/* column 4 headline */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Headline' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'headline' , 4 ) . '" name="' . esc_attr( $k ) . '[4][headline]" id="' . esc_attr( $k ) . '_headline_4" /> <label for="' . esc_attr( $k ) . '_headline_4"></label>';
									
								$html .= '</tr>';
								
								/* column 4 subheadline */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Subheadline' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'subheadline' , 4 ) . '" name="' . esc_attr( $k ) . '[4][subheadline]" id="' . esc_attr( $k ) . '_subheadline_4" /> <label for="' . esc_attr( $k ) . '_subheadline_4"></label>';
									
								$html .= '</tr>';
								
								/* column 4 price */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Price' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'price' , 4 ) . '" name="' . esc_attr( $k ) . '[4][price]" id="' . esc_attr( $k ) . '_price_4" /> <label for="' . esc_attr( $k ) . '_price_4"></label>';
									
								$html .= '</tr>';
								
								/* column 4 currency */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Currency' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'currency' , 4 ) . '" name="' . esc_attr( $k ) . '[4][currency]" id="' . esc_attr( $k ) . '_currency_4" /> <label for="' . esc_attr( $k ) . '_currency_4"></label>';
									
								$html .= '</tr>';
								
								/* column 4 period */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Period' , 'ut_table_lang') . '</th>';
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'period' , 4 ) . '" name="' . esc_attr( $k ) . '[4][period]" id="' . esc_attr( $k ) . '_period_4" /> <label for="' . esc_attr( $k ) . '_period_4"></label>';
									
								$html .= '</tr>';
								
								/* column 4 features */
								$html .= '<tr valign="top">';
									
									$c = $features = NULL;
																		
									if( isset( $data[4]['features']) && is_array( $data[4]['features'] ) ) {
											
										if ( count( $data[4]['features'] ) > 0 ) {
											
											foreach( $data[4]['features'] as $key => $dataset ) {
												
												$features .= '<p><input type="text" class="regular-text" name="' . esc_attr( $k ) . '[4][features]['.$key.'][title]" value="' . $dataset['title'] . '" /><span class="ut-admin-remove remove-feature">' . __('X' , 'ut_table_lang') . '</span></p>';
												$c = $key;
												
											}
											
										}
										
									}
									
									$html .= '<th scope="row">';
										$html .= __( 'Manage Rows' , 'ut_table_lang' ) . '<br /><br />';
										$html .= '<span data-column="4" data-featuregroup="' . esc_attr( $k ) . '" data-featurecount="'.$c.'" class="add-feature ut-admin-add">' . __('Add Row' , 'ut_table_lang') . '</span>';
									$html .= '</th>';

																	
									$html .= '<td>';
										
										$html .= '<div class="ut-admin-features" id="ut-repeat-' . esc_attr( $k ) . '-4">';
										
											$html .= $features;
											
										$html .= '</div>';
										
									$html .= '</td>';
									
									$html .= '</tr>';
								
								/* column 4 button text */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Button Text' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'button_text' , 4 ) . '" name="' . esc_attr( $k ) . '[4][button_text]" id="' . esc_attr( $k ) . '_button_text_4" /> <label for="' . esc_attr( $k ) . '_button_text_4"></label>';
									
								$html .= '</tr>';
								
								/* column 4 button link */
								$html .= '<tr valign="top">';
									
									$html .= '<th scope="row">' . __('Button Link' , 'ut_table_lang') . '</th>';									
									$html .= '<td><input type="text" class="regular-text" value="' . $this->validate_value( $data , 'button_link' , 4 ) . '" name="' . esc_attr( $k ) . '[4][button_link]" id="' . esc_attr( $k ) . '_button_link_4" /> <label for="' . esc_attr( $k ) . '_button_link_4"></label>';
									
								$html .= '</tr>';
								
								/* column 4 button target */
								$html .= '<tr valign="top">';
									$html .= '<th scope="row">' . __('Button Target' , 'ut_table_lang') . '</th>';
									
									$html .= '<td><select name="' . esc_attr( $k ) . '[4][button_target]" id="' . esc_attr( $k ) . '_button_target">';
										$html .= '<option value="_self" ' . $this->selected_array( 'button_target' , '_self' , $data , 4 ) . '>' . __('_self' , 'ut_table_lang') . '</option>';
										$html .= '<option value="_blank" ' . $this->selected_array( 'button_target' , '_blank' , $data , 4 ) . '>' . __('_blank' , 'ut_table_lang') . '</option>';
									$html .= '</select></td>';
									
								$html .= '</tr>';
											
								$html .= '</tbody>' . "\n";
								$html .= '</table>' . "\n";
					
						$html .= '</div>';
						
					$html .= '</div>';	
					
				} else {
					
					$html .= '<span class="ut-section-title">' . $v['name'] . '</span>';
					$html .= '<div class="ut-section-panel">';
					$html .= '<label for="' . esc_attr( $k ) . '">' . $v['name'] . '</label><input name="' . esc_attr( $k ) . '" type="text" id="' . esc_attr( $k ) . '" class="regular-text" value="' . esc_attr( $data ) . '" />' . "\n";
					$html .= '<p class="description">' . $v['description'] . '</p>' . "\n";
					$html .= '</div>' . "\n";
					
				}

			}
            
            $html .= '<div class="ut-admin-info-box" style="margin-top:40px; margin-bottom:0px;">';
            
            $html .= '<span class="ut-section-title">' . __('United Themes - Pricing Table Shortcode' , 'ut_table_lang') . '</span>';                        
            
                $html .= '<div class="ut-section-panel">';
                
                    $html .= '<textarea readonly class="ut-shortcode-code">[ut_pricing id="' . $post_id . '"]</textarea>';
                    $html .= __('Simply copy this United Themes - Pricing Table Shortcode and place <br /> it inside the text editor of the section / page you like to display the <br />pricing table in.' , 'ut_table_lang');
                                      
                $html .= '</div>' . "\n";
            
            $html .= '</div>' . "\n";
            
            
            
			$html .= '</tbody>' . "\n";
			$html .= '</table>' . "\n";
		}

		echo $html;
	}
	
	
	public function meta_box_content_info() {
		
		global $post_id;
		
		$info  = '<p><strong>' . __('United Themes - Pricing Table Shortcode' , 'ut_table_lang') . '</strong></p>';
		$info .= '<textarea readonly class="ut-shortcode-code">[ut_pricing id="' . $post_id . '"]</textarea>';
		
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
			$title = __( 'Enter the post title here' , 'ut_table_lang' );
		}
		return $title;
	}

	public function get_custom_fields_settings() {
		
		$fields = array();
        
        $fields['ut_table_style'] = array(
		    'name' => __( 'United Themes - Pricing Table Style' , 'ut_table_lang' ),
		    'description' => '',
		    'type' => 'select',
		    'default' => '',
		    'section' => 'plugin-data'
		);        

		$fields['ut_table_data'] = array(
		    'name' => __( 'Pricing Table Options' , 'ut_table_lang' ),
		    'description' => '',
		    'type' => 'ut_table_data',
		    'default' => '',
		    'section' => 'plugin-data'
		);
        
		return $fields;
		
	}

}