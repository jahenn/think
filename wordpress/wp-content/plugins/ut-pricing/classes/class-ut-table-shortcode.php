<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class ut_table_shortcode {

	static $token;
	static $add_pricing_markup;
	
	/* init */
	static function init() {
		
		add_shortcode( 'ut_pricing' , array(__CLASS__, 'handle_shortcode') );		
		
	}
	
	static function handle_shortcode( $atts ) {
		
		extract( shortcode_atts( array( "id" => '' ) , $atts) );
		
		/* no id has been set , nothing more to do here */
		if( empty($id) ) return;
		
		/* set token */
		self::$token = $id;		
		
		/* initiate shortcode markup */
		self::$add_pricing_markup = true;
		return self::create_pricing_table();
	
	}
	
	static function create_pricing_table() {
		
        /* table style */		
        $table_style = get_post_meta( self::$token , 'ut_table_style' , true );
        $table_style = !empty($table_style['style']) ? $table_style['style'] : 'ut-pt-wrap-style-1';
                
		/* table content */
		$table_data = get_post_meta( self::$token , 'ut_table_data' );
		$table_data = $table_data[0];
		
		/* count active columns */
		$active_cols = NULL;
		
		foreach( $table_data as $column ) {
			
			if( !empty($column['activate_column'])  && $column['activate_column'] == 'on') {
				
				$active_cols++;
				
			}
			
		}
		
		/* grid array */
		$grid = array(
			1 => '',
			2 => 'grid-50 tablet-grid-50 mobile-grid-100',
			3 => 'grid-33 tablet-grid-33 mobile-grid-100',
			4 => 'grid-25 tablet-grid-50 mobile-grid-100'		
		);
		
		/* start table*/
		$table = '<div class="ut-pt-wrap ' . $table_style . '">';
		
		/* create table columns */
		foreach( $table_data as $column ) {
			
			if( !empty($column['activate_column'])  && $column['activate_column'] == 'on') {
				
				$table .= '<div class="'.$grid[$active_cols].'">';
											
						/* featured table */
						if( !empty($column['featured_column']) && $column['featured_column'] == 'on' ) :
							
							$featured = !empty($column['featured_headline']) ? $column['featured_headline'] : __('Most Popular' , 'ut_table_lang');
							
							$table .= '<div class="ut-pricing-table ut-pt-featured-table">';
								$table .= '<div class="ut-pt-featured"><i class="fa fa-star"></i><span class="ut-pt-mp">'.$featured.'</span></div>';
						
						else :
						
							$table .= '<div class="ut-pricing-table">';
						
						endif;
						
						/* table header */
						if( !empty($column['headline']) || !empty($column['subheadline']) ) :
							
							$table .= '<header class="ut-pt-header ut-level-one">';
								
								if( !empty($column['headline']) ) :
									
									$table .= '<h2 class="ut-pt-title">'.$column['headline'].'</h2>';
								
								endif;
								
								if( !empty($column['subheadline']) ) :
								
									$table .= '<span class="ut-pt-title-slogan">'.$column['subheadline'].'</span>';
								
								endif;
							
							$table .= '</header>';
							
						endif;
						
						/* custom header */
						if( !empty($column['header']) ) :
							
                            $embed_code = $video_embed = NULL;
                            
                            /* check for embeds */
                            if( empty($embed_code) ) {
            
                                $video_embed = wp_oembed_get( trim($column['header']) );
                                if( !empty($video_embed) ) {
                                    $embed_code = '<div class="ut-video">' . $video_embed . '</div>';            
                                }
                                
                            }
                            
                            /* no embed let's try to apply a shortcode */
                            if( empty( $embed_code ) ) {
                                
                                $embed_code = do_shortcode($column['header']);
                            
                            }
                            
                            $table .= $embed_code;
						
						endif;
						
						/* table features */
						if( !empty($column['features']) && is_array($column['features']) ) :
							
							$table .= '<div class="ut-pt-info">';
								
								$table .= '<ul class="fa-ul">';
									
									foreach( $column['features'] as $feature ) {
										
										$table .= '<li><i class="fa-li fa fa-check"></i>'.$feature['title'].'</li>';
										
									}
									
								$table .= '</ul>';
								
							$table .= '</div>';
						
						endif;
						
						/* table footer */
						if( !empty($column['price']) || !empty($column['button_text']) ) :

							$table .= '<footer class="ut-pt-pricing">';
								
								if( !empty($column['price']) ) :
									
									$currency = !empty($column['currency']) ? $column['currency'] : '$' ;
									
									$table .= '<span class="ut-pt-price"><sup>'.$currency.'</sup>'.$column['price'].'</span>';
								
								endif;
								
								if( !empty($column['period']) ) :
								
									$table .= '<span class="ut-pt-price-slogan">'.$column['period'].'</span>';
								
								endif;
								
								if( !empty($column['button_text']) ) :
									
									$link = !empty($column['button_link']) ? $column['button_link'] : '#';
									$target = !empty($column['button_target']) ? $column['button_target'] : '_self';
									$button_style =  ( !empty($column['featured_column']) && $column['featured_column'] == 'on' ) ? 'theme-btn' : 'ut-pt-btn';
																
									$table .= '<a class="ut-btn '.$button_style.' small round" target="'.$target.'" href="'.$link.'">'.$column['button_text'].'</a>';
								
								endif;
								
								
							$table .= '</footer>';
						
						endif;
					
					$table .= '</div>';
				
				$table .= '</div>';
				
			}
		
		}
		
		$table .= '<div class="clear"></div>';
		$table .= '</div>';	
		
		return $table;		
	
	}

}

ut_table_shortcode::init();

?>