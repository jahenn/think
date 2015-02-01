<?php 

/*
 * Portfolio Management by United Themes
 * http://www.unitedthemes.com/
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class ut_portfolio_shortcode {
	
	static $add_showcase_script;
	static $add_masonry_script;
    static $add_gallery_script;
	static $token;
	static $cache;
	
	/* init */
	static function init() {
		
		add_shortcode( 'ut_showcase' , array(__CLASS__, 'handle_shortcode') );		
		
	}
	
	/* start shortcode */
	static function handle_shortcode( $atts ) {
		
		extract( shortcode_atts( array( "id" => '' ) , $atts) );
		
		/* no id has been set , nothing more to do here */
		if( empty($id) ) return;
		
		/* set token */
		self::$token = $id;
		
		/* set cache */
		self::$cache = ( get_option('portfolio_cache_mode') == 'on' ) ? '&amp;c=1' : '';
		
        /* get portfolio type */
		$ut_portfolio_type = get_post_meta( self::$token , 'ut_portfolio_type' , true );
		
        /*
        |--------------------------------------------------------------------------
        | Showcase Gallery
        |--------------------------------------------------------------------------
        */
		if( $ut_portfolio_type == 'ut_showcase' ) {
			
			self::$add_showcase_script = true;
			add_action( 'wp_footer' , array(__CLASS__, 'enqueue_showcase_scripts') );
			
			/* create showcase gallery */
			return self::create_showcase_gallery();
            
		}
        
        /*
        |--------------------------------------------------------------------------
        | Portfolio Carousel
        |--------------------------------------------------------------------------
        */
		if( $ut_portfolio_type == 'ut_carousel' ) {
			
			self::$add_showcase_script = true;
			add_action( 'wp_footer' , array(__CLASS__, 'enqueue_showcase_scripts') );
			
			/* create showcase gallery */
			return self::create_portfolio_carousel();
            
		}
		
        /*
        |--------------------------------------------------------------------------
        | Grid / Masonry Gallery
        |--------------------------------------------------------------------------
        */
		if( $ut_portfolio_type == 'ut_masonry' ) {
			
			self::$add_masonry_script = true;
			add_action( 'wp_footer' , array(__CLASS__, 'enqueue_masonry_scripts') );
			
			/* create masonry gallery */
			return self::create_masonry_gallery();
            
		}
        
        /*
        |--------------------------------------------------------------------------
        | Portfolio Filterable Gallery
        |--------------------------------------------------------------------------
        */
        if( $ut_portfolio_type == 'ut_gallery' ) {
			
			self::$add_gallery_script = true;
			add_action( 'wp_footer' , array(__CLASS__, 'enqueue_gallery_scripts') );
			
			/* create masonry gallery */
			return self::create_portfolio_gallery();
            
		}
				

	}
	
	/*
    |--------------------------------------------------------------------------
    | Create hidden slide / popup gallery for all gallery types
    |--------------------------------------------------------------------------
    */
	static function create_hidden_popup_portfolio( $portfolio_args = array() , $image_style = "" ) {
		
		/* no query args - we leave here */
		if(empty($portfolio_args)) {
			return;
		}
		
		/* create hidden portfolio */		
		$hidden_portfolio  = '<div id="ut-loader-' . self::$token . '" class="ut-portfolio-detail-loader"><i class="fa fa-refresh fa-spin"></i></div>';
		$hidden_portfolio .= '<div id="ut-portfolio-details-wrap-' . self::$token . '" class="ut-portfolio-details-wrap clearfix">';
			
			$hidden_portfolio .= '<div id="ut-portfolio-details-' . self::$token . '" class="inner ut-portfolio-details">';
			
			/*
			|--------------------------------------------------------------------------
			| Portfolio Navigation
			|--------------------------------------------------------------------------
			*/
			$hidden_portfolio .= '<div class="ut-portfolio-details-navigation">';
				$hidden_portfolio .= '<a class="prev-portfolio-details" data-wrap="' . self::$token . '" href="#"></a>';
				$hidden_portfolio .= '<a class="close-portfolio-details" data-wrap="' . self::$token . '" href="#"></a>';
				$hidden_portfolio .= '<a class="next-portfolio-details" data-wrap="' . self::$token . '" href="#"></a>';
			$hidden_portfolio .= '</div>';
			
			
			/* start query */
			$portfolio_query = new WP_Query( $portfolio_args );	
			
			/* loop trough portfolio items */
			if ($portfolio_query->have_posts()) : while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
				
				global $more; 
				
				/* needed variables */
				$more = $portfolio_details = $optionkey = NULL;
				$post_format = get_post_format();
                
                /* hero type setting - new with 2.6 */
                $ut_page_hero_type = get_post_meta($portfolio_query->post->ID , 'ut_page_hero_type' , true);
				
                if( !empty($ut_page_hero_type) ) {
                    
                    if($ut_page_hero_type == 'image' || $ut_page_hero_type == 'animatedimage' || $ut_page_hero_type == 'splithero' || $ut_page_hero_type == 'custom' || $ut_page_hero_type == 'dynamic') {
                        $post_format = '';
                    }
                    
                    if($ut_page_hero_type == 'slider' || $ut_page_hero_type == 'transition' || $ut_page_hero_type == 'tabs') {
                        $post_format = 'gallery';
                    }
                    
                    if($ut_page_hero_type == 'video') {
                        $post_format = 'video';
                        $ut_page_video_source = get_post_meta($portfolio_query->post->ID, 'ut_page_video_source' , true);
                    }
                    
                    /* switch option key */
                    switch ($ut_page_hero_type) {
                    
                        case 'animatedimage':
                        $optionkey = 'ut_page_hero_animated_image';
                        break;
                        
                        default:  
                        $optionkey = 'ut_page_hero_image';  
                    
                    }                  
                
                }                
                                
				/* meta data*/
				$ut_portfolio_details = get_post_meta( $portfolio_query->post->ID , 'ut_portfolio_details', true );
				
				/* grab up the featured image url */
				$fullsize = $thumbnail = $portfolio_detail_image = wp_get_attachment_url( get_post_thumbnail_id( $portfolio_query->post->ID ) );				
				
                /* check if there is a detail image available */
                $portfolio_detail_image_data = get_post_meta( $portfolio_query->post->ID , $optionkey , true );                
                
                if( is_array($portfolio_detail_image_data) && !empty($portfolio_detail_image_data['background-image']) ) {
                        
                    $portfolio_detail_image = $portfolio_detail_image_data['background-image'];
                    
                } elseif( !is_array($portfolio_detail_image_data) && !empty($portfolio_detail_image_data) ) {
                    
                    $portfolio_detail_image = $portfolio_detail_image_data;
                    
                }
                
                /* check if portfolio leads to internal page or external page - so we don't need to show the details anymore */
                if( get_post_meta( $portfolio_query->post->ID , 'ut_portfolio_link_type' , true ) == 'internal' || get_post_meta( $portfolio_query->post->ID , 'ut_portfolio_link_type' , true ) == 'external' ) {
                    continue;
                }
                
				/* create hidden content div first */
				$hidden_portfolio .= '<div id="ut-portfolio-detail-' . $portfolio_query->post->ID . '" class="animated ut-portfolio-detail clearfix" data-post="' . $portfolio_query->post->ID . '" data-format="' . $post_format . '">';
										
					/* portfolio details */
					if( is_array( $ut_portfolio_details ) && !empty( $ut_portfolio_details ) && ( count($ut_portfolio_details) > 1 ) ) {
						
						$portfolio_details .= '<ul class="ut-portfolio-list clearfix">';
						
							foreach( $ut_portfolio_details as $key => $detail ) {
								
                                if( !empty($detail['title']) && !empty($detail['value']) ) {   
								    $portfolio_details .= '<li><strong>' . $detail['title'] . ': </strong>' . $detail['value'] . '</li>';
                                }
                                
							}
						
						$portfolio_details .= '</ul>';
						
					}
					
					/* start markup */
					$hidden_portfolio .= '<div class="grid-80 prefix-10 mobile-grid-100 tablet-grid-80 tablet-prefix-10 ut-portfolio-media">';
                        
						if( ! post_password_required() ) {
							                                                        
                            /* fallback to old system prioer to 2.6 */
                            if( empty( $ut_page_hero_type ) ) {
                                
                                /*
                                |--------------------------------------------------------------------------
                                | Standard Post Format
                                |--------------------------------------------------------------------------
                                */
                                if( empty( $post_format ) ) {
    
                                    /* featured image */
                                    $hidden_portfolio .= '<img class="ut-portfolio-image ut-load-me ' . $image_style . '" alt="' . get_the_title() . '" data-original="' . $portfolio_detail_image . '">';								
    
                                }							
                                
                                /*
                                |--------------------------------------------------------------------------
                                | Video Post Format 
                                |--------------------------------------------------------------------------
                                */
                                if( $post_format == 'video' ) {
                                                                    
                                    /* add video to hidden portfolio detail*/
                                    $hidden_portfolio .= '<div id="ut-video-call-'.$portfolio_query->post->ID.'" class="ut-video-call"></div>';								
                                                                    
                                }							
                                
                                /*
                                |--------------------------------------------------------------------------
                                | Gallery Post Format 
                                |--------------------------------------------------------------------------
                                */
                                if( $post_format == 'gallery' ) {
                                
                                    $hidden_portfolio .= ut_portfolio_flex_slider( $portfolio_query->post->ID , false , $image_style );								
                                    
                                }
                            
                            
                            /* new markup for 2.6 */
                            } else {
                                
                                if($ut_page_hero_type == 'image' || $ut_page_hero_type == 'animatedimage' || $ut_page_hero_type == 'splithero' || $ut_page_hero_type == 'custom' || $ut_page_hero_type == 'dynamic') {
                                    
                                    /* featured image */
                                    $hidden_portfolio .= '<img class="ut-portfolio-image ut-load-me ' . $image_style . '" alt="' . get_the_title() . '" data-original="' . $portfolio_detail_image . '">';                                    
                                
                                }
                                
                                if($ut_page_hero_type == 'slider' || $ut_page_hero_type == 'transition' || $ut_page_hero_type == 'tabs') {
                                    
                                    /* create flex slider list */
                                    $hidden_portfolio .= ut_portfolio_flex_slider( $portfolio_query->post->ID , false , $image_style, $ut_page_hero_type );
                                
                                }
                                
                                if($ut_page_hero_type == 'video') {
                                    
                                    /* create video placeholder div - ut-ajax call media will fill it with content on request */
                                    $hidden_portfolio .= '<div id="ut-video-call-'.$portfolio_query->post->ID.'" class="ut-video-call"></div>';	
                                
                                }
                                                            
                            }
							
						} else {
						
							$hidden_portfolio .= '<div class="ut-password-protected">' . __('Password Protected Portfolio' , 'ut_portfolio_lang') . '</div>';
							$the_content = get_the_password_form();
							
						}
					
					$hidden_portfolio .= '</div>';
					
					$hidden_portfolio .= '<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-70 tablet-prefix-15 entry-content clearfix">';
						
					$hidden_portfolio .= '</div>';					
					
				$hidden_portfolio .= '</div>';
				
			/* end loop */
			endwhile; endif;
			
			/* reset query */
			wp_reset_postdata();
			
			$hidden_portfolio .= '</div>';
			
		$hidden_portfolio .= '</div>';
		
		$hidden_portfolio .= '<div class="clear"></div>';
		
		return $hidden_portfolio;
		
	}
	
    /*
    |--------------------------------------------------------------------------
    | Showcase Gallery
    |--------------------------------------------------------------------------
    */
	static function create_showcase_gallery() {
		
		global $paged;
				
		/* settings */
		$portfolio_categories = get_post_meta( self::$token , 'ut_portfolio_categories' );
        
		/* global portfolio settings */
        $portfolio_settings = get_post_meta( self::$token , 'ut_portfolio_settings' );
        $portfolio_settings = $portfolio_settings[0];
		
        /* showcase options */
        $showcase_options = get_post_meta( self::$token , 'ut_showcase_options' );
        $showcase_options = $showcase_options[0];
        
		/* fallback if no meta has been set */
		$portfolio_per_page   = !empty($portfolio_settings['posts_per_page']) ? $portfolio_settings['posts_per_page'] : 4 ;
		$portfolio_categories = !empty($portfolio_categories) ? $portfolio_categories : array();
						
        /* portfolio query terms */
		$portfolio_terms = array();
		if( is_array($portfolio_categories[0])  && !empty($portfolio_categories[0]) ) {

			foreach( $portfolio_categories[0] as $key => $value) {                
                array_push($portfolio_terms , $key);
			}
			
		}
		
        /* query args */
        $portfolio_args = array(
            
            'post_type'      => 'portfolio',
            'posts_per_page' => $portfolio_per_page,
            'paged'          => $paged,
            'tax_query'      => array( array(
                    'taxonomy' => 'portfolio-category',
                    'terms'    => $portfolio_terms,
                    'field'    => 'term_id'  
            ) )
            
        
        );
        
        /* start query */
        $portfolio_query = new WP_Query( $portfolio_args );
		        
        /* needed javascript */
		$showcase = self::generate_showcase_script( $showcase_options );		
		
        /* start showcase */
		$showcase .= '<div class="ut-portfolio-wrap ' . $portfolio_settings["optional_class"] . '" data-textcolor="' . $portfolio_settings["text_color"] . '" data-opacity="' . $portfolio_settings["hover_opacity"] . '" data-hovercolor="' . ut_hex_to_rgb($portfolio_settings["hover_color"]) . '">';
		
		$showcase .= '<div id="slider_' . self::$token . '" class="flexslider ut-showcase">';
		$showcase .= '<ul class="slides">';				
		
        /* create thumbnail navigation */
        if( isset($showcase_options['display_thumbnail_navigation'] ) ) {
            $showcase_navigation  = '<div id="carousel_' . self::$token . '" class="flexslider ut-showcase-navigation">';
            $showcase_navigation .= '<ul class="slides">';
        }
        				
					/* loop trough portfolio items */
					if ($portfolio_query->have_posts() ) : while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
												
						if ( has_post_thumbnail() && ! post_password_required() ) {		
            
							$fullsize   = wp_get_attachment_url( get_post_thumbnail_id( $portfolio_query->post->ID ) );
						
							$showcase .= '<li>';
								$showcase .= '<img alt="' . get_the_title() . '" src="' . $fullsize . '" />';
							$showcase .= '</li>';
							
							/* create showcase navigation items */
							if( isset($showcase_options['display_thumbnail_navigation'] ) ) {
								
								$thumbnail = ut_resize( $fullsize , 210 , 140 , true , true , true );
								
									$showcase_navigation .= '<li class="ut-hover">';
										
										$showcase_navigation .= '<a href="#">';
										
										$showcase_navigation .= '<figure>';
											$showcase_navigation .= '<img src="' . $thumbnail . '" />';
										$showcase_navigation .= '</figure>';
										
										$showcase_navigation .= '<div class="ut-hover-layer">';
											
											$showcase_navigation .= '<div class="ut-portfolio-info">';
                                                
                                                $showcase_navigation .= '<div class="ut-portfolio-info-c">';
											
                                                    $showcase_navigation .= '<h3>' . get_the_title() . '</h3>';											
                                                    $portfolio_cats = wp_get_object_terms( $portfolio_query->post->ID , 'portfolio-category' );
                                                    $showcase_navigation .= '<span>' . ut_generate_cat_list( $portfolio_cats ) . '</span>';
										    
                                            $showcase_navigation .= '</div>';
                                            	
										$showcase_navigation .= '</div>';
										
									$showcase_navigation .= '</div>';
									
									$showcase_navigation .= '</a>';
									
								$showcase_navigation .= '</li>';                           
								
							}
						
						} else {
							
							
										
						}                       
						
					endwhile; endif;
				
				/* reset query */
				 wp_reset_postdata();
	    
        /* end showcase navigation */
        if( isset($showcase_options['display_thumbnail_navigation'] ) ) {
            $showcase_navigation .= '</ul>';
            $showcase_navigation .= '</div>';
        }
        
        /* end showcase */		
		$showcase .= '</ul>';
		$showcase .= '</div>';
		        
        /* return final showcase */
        if( isset($showcase_options['display_thumbnail_navigation'] ) ) {
            return $showcase . $showcase_navigation . '</div>';
        } else {
            return $showcase . '</div>';
        }
        
	}
	
	static function generate_showcase_script( $showcase_options ) {
		
		/* settings */
		$container = self::$token;
		$thumbnail_navigation = '';
		$sync = '';
		
		/* showcase navigation script */
		if( isset( $showcase_options['display_thumbnail_navigation'] ) ) :
			
			$thumbnail_navigation = "
			$('#carousel_$container').flexslider({
            	animation: 'slide',
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 210,
                itemMargin: 5,
                asNavFor: '#slider_$container'
            });";
			
			// sync for slider function
			$sync = "sync: '#carousel_$container'";

		endif;
		/* end showcase navigation */ 
        
                
        /* showcase options */
        $animation      = !empty($showcase_options['animation']) ? $showcase_options['animation'] : 'slide';
        $slideshowSpeed = !empty($showcase_options['slideshowSpeed']) ? $showcase_options['slideshowSpeed'] : '7000'; 
        $animationSpeed = !empty($showcase_options['animationSpeed']) ? $showcase_options['animationSpeed'] : '600'; 
        $directionNav   = !empty($showcase_options['directionNav']) ? 'true' : 'false';
        $smoothHeight   = !empty($showcase_options['smoothHeight']) ? 'true' : 'false';
        
        /* main showcase script */
        $script = "
		<script type='text/javascript'>
		/* <![CDATA[ */ 
        
			(function($){
			
				$(window).load(function(){
				
					$thumbnail_navigation
				
					$('#slider_$container').flexslider({
						
						animation: '$animation',
                    	controlNav: false,
                    	animationLoop: false,
                    	slideshow: true,
                        slideshowSpeed: $slideshowSpeed,
						animationSpeed: $animationSpeed,
                        directionNav: $directionNav,
                        smoothHeight: $smoothHeight,
                        
                        $sync
						
					});
					
				});
			
			})(jQuery);
		
		/* ]]> */ 
		</script>";
		/* end main showcase script */       
               
		
        /* output javascript */
		return ut_compress_java($script);
		
	}
	
    /*
    |--------------------------------------------------------------------------
    | Portfolio Carousel
    |--------------------------------------------------------------------------
    */
    static function create_portfolio_carousel() { 
        				
		/* settings */
		$portfolio_categories = get_post_meta( self::$token , 'ut_portfolio_categories' );
        
		/* global portfolio settings */
        $portfolio_settings = get_post_meta( self::$token , 'ut_portfolio_settings' );
        $portfolio_settings = $portfolio_settings[0];
		
		/* showcase options */
        $carousel_options = get_post_meta( self::$token , 'ut_carousel_options' );
        $carousel_options = $carousel_options[0];
        
		/* detail style */
		$detailstyle = !empty($portfolio_settings['detail_style']) ? $portfolio_settings['detail_style'] : 'slideup';
		        
		/* fallback if no meta has been set */
		$portfolio_per_page   = !empty($portfolio_settings['posts_per_page']) ? $portfolio_settings['posts_per_page'] : 4 ;		
		$portfolio_categories = !empty($portfolio_categories) ? $portfolio_categories : array();
						
        /* portfolio query terms */
		$portfolio_terms = array();
		if( is_array($portfolio_categories[0])  && !empty($portfolio_categories[0]) ) {

			foreach( $portfolio_categories[0] as $key => $value) {                
                array_push($portfolio_terms , $key);
			}
			
		}
		        
		/* query args */
        $portfolio_args = array(
            
            'post_type'      => 'portfolio',
            'posts_per_page' => $portfolio_per_page,
            'tax_query'      => array( array(
                    'taxonomy' => 'portfolio-category',
                    'terms'    => $portfolio_terms,
                    'field'    => 'term_id'  
            ) )
            
        
        );
        
        /* start query */
        $portfolio_query = new WP_Query( $portfolio_args );
		        
        /* needed javascript */
		$carousel = self::generate_carousel_script( $carousel_options );        	
		
		/* gallery style */
		$gallery_style = !empty($carousel_options['style']) ? $carousel_options['style'] : 'style_one';
		$gallery_style_class = NULL;
		
		switch ( $gallery_style ) {
			
			case 'style_one':
				$gallery_style_class = 'portfolio-style-one';
			break;
				
			case 'style_two':
				$gallery_style_class = 'portfolio-style-two';
			break;

		}
		
		/* create hidden gallery */
		if( $detailstyle == 'slideup' ) {
			$carousel .= self::create_hidden_popup_portfolio( $portfolio_args , $portfolio_settings['image_style'] );
		}
		
        /* create carousel */
        $carousel .= '<div id="carousel_' . self::$token . '" class="ut-portfolio-wrap flexslider ut-carousel '.$gallery_style_class.'" data-textcolor="' . $portfolio_settings["text_color"] . '" data-opacity="' . $portfolio_settings["hover_opacity"] . '" data-hovercolor="' . ut_hex_to_rgb($portfolio_settings["hover_color"]) . '">';
        $carousel .= '<ul class="slides">';
        				
            /* loop trough portfolio items */
            if ($portfolio_query->have_posts()) : while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                                
                if ( has_post_thumbnail() && ! post_password_required() ) {		
    
                    $fullsize = $thumbnail = $portfolio_detail_image = wp_get_attachment_url( get_post_thumbnail_id( $portfolio_query->post->ID ) );
                    $caption = get_post( get_post_thumbnail_id( $portfolio_query->post->ID ) )->post_excerpt;					
                    
                    /* hero type setting - new with 2.6 */
                    $ut_page_hero_type = get_post_meta($portfolio_query->post->ID , 'ut_page_hero_type' , true);
                    
                    if( !empty($ut_page_hero_type) ) {
                        
                        if($ut_page_hero_type == 'image' || $ut_page_hero_type == 'animatedimage' || $ut_page_hero_type == 'splithero' || $ut_page_hero_type == 'custom' || $ut_page_hero_type == 'dynamic') {
                            $post_format = '';
                        }
                        
                        if($ut_page_hero_type == 'slider' || $ut_page_hero_type == 'transition' || $ut_page_hero_type == 'tabs') {
                            $post_format = 'gallery';
                        }
                        
                        if($ut_page_hero_type == 'video') {
                            $post_format = 'video';
                            $ut_page_video_source = get_post_meta($portfolio_query->post->ID, 'ut_page_video_source' , true);
                        }
                        
                        /* switch option key */
                        switch ($ut_page_hero_type) {
                        
                            case 'animatedimage':
                            $optionkey = 'ut_page_hero_animated_image';
                            break;
                            
                            default:  
                            $optionkey = 'ut_page_hero_image';  
                        
                        }                  
                    
                    } /* end ut_page_hero_type */
                    
                    /* check if there is a detail image available */
                    $portfolio_detail_image_data = get_post_meta( $portfolio_query->post->ID , $optionkey , true );                
                    
                    if( is_array($portfolio_detail_image_data) && !empty($portfolio_detail_image_data['background-image']) ) {
                            
                        $portfolio_detail_image = $portfolio_detail_image_data['background-image'];
                        
                    } elseif( !is_array($portfolio_detail_image_data) && !empty($portfolio_detail_image_data) ) {
                        
                        $portfolio_detail_image = $portfolio_detail_image_data;
                        
                    }                  
                                            
					/* cropping dimensions */
					$width  = !empty($carousel_options['crop_size_x']) ? $carousel_options['crop_size_x'] : '600';
					$height = !empty($carousel_options['crop_size_y']) ? $carousel_options['crop_size_y'] : '400';
					
					$thumbnail  =  ut_resize( $fullsize , $width , $height , true , true , true );
                    
					/* link settings */
					$ut_portfolio_link_type = get_post_meta( $portfolio_query->post->ID , 'ut_portfolio_link_type' , true);
                    $external = FALSE;
                    $target = '_blank';
                    
                    /* theme meta boxes are storing strings */
                    if( !is_array($ut_portfolio_link_type) ) {
                        $temp_array = array();                    
                        $temp_array['target'] = $ut_portfolio_link_type;
                        $ut_portfolio_link_type = $temp_array;
                        $temp_array = null;
                    } 
                    
                    if( !empty($ut_portfolio_link_type['target']) && $ut_portfolio_link_type['target'] == 'external' ) {
                       
                       /* get link user haas to set */ 
                       $external = get_post_meta( $portfolio_query->post->ID , 'ut_external_link' , true);
                        
                    } elseif( !empty($ut_portfolio_link_type['target']) && $ut_portfolio_link_type['target'] == 'internal' ) {
                       
                       /* get permalink to single portfolio */
                       $external = get_permalink( $portfolio_query->post->ID );
                       $target = '_self';
                       
                    }
                                        
					if( $gallery_style == 'style_one' ) {    
						                        
						$carousel  .= '<li class="ut-carousel-item ut-hover">';
							
							$title= str_ireplace('"', '', trim(get_the_title()));
							
								/* link markup for detail slideup */
								if( $detailstyle == 'slideup' ) {
									
									/* has external link */
									if($external) {
									
										$carousel .= '<a class="' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
									
									} else {
									
										$carousel  .= '<a class="ut-portfolio-link ' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" data-wrap="' . self::$token . '" data-post="' . $portfolio_query->post->ID . '" href="#">';
									
									}
									
								}
								
								/* link markup for image popup */
								if( $detailstyle == 'popup' ) {
									
									$popuplink = NULL;
                                    
									/* image post or audio post */
									if( empty( $post_format ) || $post_format == 'audio' ) {
										
										/* has external link */
										if($external) {
										
											$carousel .= '<a class="' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
										
										} else {
										
											$carousel  .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'. $portfolio_detail_image .'">';
										
										}
										
									}
									
									/* video post */
									if( $post_format == 'video' ) {
										
                                        /* has external link */
										if($external) {
										
											$carousel .= '<a class="' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
										
										} else {                                           
                                            
                                           /* get the content */
                                           if(!empty($ut_page_hero_type) && $ut_page_hero_type == 'video') { 
                                                
                                                /* youtube video */
                                                if(isset($ut_page_video_source) && $ut_page_video_source == 'youtube') {
                                                    $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video', true);                                            
                                                }
                                                
                                                /* selfhosted video - not supported by prettyphoto */
                                                if(isset($ut_page_video_source) && $ut_page_video_source == 'selfhosted') {
                                                    $popuplink = $fullsize;                                            
                                                }
                                                
                                                /* custom video */
                                                if(isset($ut_page_video_source) && $ut_page_video_source == 'custom') {                                                
                                                    $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video_custom', true);
                                                }                                            
                                                
                                                /* content is still empty - let's assign the regular content */
                                                if(empty($content)) {
                                                    $content = get_the_content();
                                                }
                                                
                                            } else {                                            
                                                $content = get_the_content();                                            
                                            }
                                            
                                            /* try to catch video url */
                                            $popuplink = !empty($popuplink) ? $popuplink : ut_get_portfolio_format_video_content($content);
                                            $carousel .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'.$popuplink.'">';
                                            
                                        }
                                        
									}
									
									/* gallery post */
									if( $post_format == 'gallery' ) {
										
                                        /* has external link */
										if($external) {
										
											$carousel .= '<a class="' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
										
										} else {
                                        
										    $carousel .= ut_portfolio_popup_gallery( $portfolio_query->post->ID , self::$token , $ut_page_hero_type );
										    $carousel .= '<a class="ut-portfolio-popup-'.$portfolio_query->post->ID.' '. $portfolio_settings['image_style'] . '" title="' . $title . '" href="' . $portfolio_detail_image . '">';									
									    
                                        }
                                        
									}								
									
								}
								
								$carousel .= '<figure>';
									$carousel .= '<img alt="' . get_the_title() . '" src="' . $thumbnail . '" />';
								$carousel .= '</figure>';
								
								$carousel .= '<div class="ut-hover-layer">';
									$carousel .= '<div class="ut-portfolio-info">';
									    $carousel .= '<div class="ut-portfolio-info-c">';                                        
                                        	
                                            /* Portfolio Slogan */										
                                            $carousel .= '<h2 class="portfolio-title">' . get_the_title() . '</h2>';
                                            
                                            $portfolio_cats = wp_get_object_terms( $portfolio_query->post->ID , 'portfolio-category' );
                                            $carousel .= '<span>' . ut_generate_cat_list( $portfolio_cats ) . '</span>';
                                            
										$carousel .= '</div>';
									$carousel .= '</div>';
								$carousel  .= '</div>';
								
							$carousel  .= '</a>';						
							
						$carousel  .= '</li>';
					
					}
					
					if( $gallery_style == 'style_two' ) {    
						
						$carousel  .= '<li class="ut-carousel-item ut-hover">';
							
							$title= str_ireplace('"', '', trim(get_the_title()));
							
								/* link markup for detail slideup */
								if( $detailstyle == 'slideup' ) {
									
									/* has external link */
									if($external) {
									
										$carousel .= '<a class="' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
									
									} else {
									
										$carousel  .= '<a class="ut-portfolio-link ' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" data-wrap="' . self::$token . '" data-post="' . $portfolio_query->post->ID . '" href="#">';
									
									}
									
								}
								
								/* link markup for image popup */
								if( $detailstyle == 'popup' ) {
									
									$popuplink = NULL;
									
									/* image post or audio post */
									if( empty( $post_format ) || $post_format == 'audio' ) {
										
										/* has external link */
										if($external) {
										
											$carousel .= '<a class="' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
										
										} else {										
										
											$carousel  .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'. $portfolio_detail_image .'">';
											
										}
										
									}
									
									/* video post */
									if( $post_format == 'video' ) {
										
                                        /* has external link */
										if($external) {
										
											$carousel .= '<a class="' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
										
										} else {
                                                                                        
                                            /* get the content */
                                           if(!empty($ut_page_hero_type) && $ut_page_hero_type == 'video') { 
                                                
                                                /* youtube video */
                                                if(isset($ut_page_video_source) && $ut_page_video_source == 'youtube') {
                                                    $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video', true);                                            
                                                }
                                                
                                                /* selfhosted video - not supported by prettyphoto */
                                                if(isset($ut_page_video_source) && $ut_page_video_source == 'selfhosted') {
                                                    $popuplink = $fullsize;                                            
                                                }
                                                
                                                /* custom video */
                                                if(isset($ut_page_video_source) && $ut_page_video_source == 'custom') {                                                
                                                    $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video_custom', true);
                                                }                                            
                                                
                                                /* content is still empty - let's assign the regular content */
                                                if(empty($content)) {
                                                    $content = get_the_content();
                                                }
                                                
                                            } else {                                            
                                                $content = get_the_content();                                            
                                            }
                                            
                                            /* try to catch video url */
                                            $popuplink = !empty($popuplink) ? $popuplink : ut_get_portfolio_format_video_content($content);
                                            $carousel  .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'  .$popuplink . '">';
										
                                        }
                                        
									}
									
									/* gallery post */
									if( $post_format == 'gallery' ) {
										
                                        /* has external link */
										if($external) {
										
											$carousel .= '<a class="' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
										
										} else {
                                        
										    $carousel .= ut_portfolio_popup_gallery( $portfolio_query->post->ID , self::$token , $ut_page_hero_type );
										    $carousel .= '<a class="ut-portfolio-popup-'.$portfolio_query->post->ID.' '. $portfolio_settings['image_style'] . '" title="' . $title . '" href="' . $portfolio_detail_image . '">';									
									    
                                        }
                                        
									}								
									
								}
								
								$carousel .= '<figure>';
									$carousel .= '<img alt="' . get_the_title() . '" src="' . $thumbnail . '" />';
								$carousel .= '</figure>';
								
								$carousel .= '<div class="ut-hover-layer">';
									$carousel .= '<div class="ut-portfolio-info">';
                                        $carousel .= '<div class="ut-portfolio-info-c">';
										
                                            if( $post_format == 'video' ) {
                                                $carousel .= '<i class="fa fa-film fa-lg"></i>';
                                            }
                                            
                                            if( $post_format == 'audio' ) {
                                                $carousel .= '<i class="fa fa-headphones fa-lg"></i>';
                                            }
        
                                            if(  $post_format == 'gallery' ) {
                                                $carousel .= '<i class="fa fa-camera-retro fa-lg"></i>';
                                            }
                                            
                                            if( empty($post_format) ) {
                                                $carousel .= '<i class="fa fa-picture-o fa-lg"></i>';
                                            }
                                            
                                            /* Portfolio Slogan */
                                            $portfolio_cats = wp_get_object_terms( $portfolio_query->post->ID , 'portfolio-category' );
                                            $carousel .= '<span>' . ut_generate_cat_list( $portfolio_cats ) . '</span>';
                                            
									    $carousel .= '</div>';	
									$carousel .= '</div>';
								$carousel  .= '</div>';
								
							$carousel  .= '</a>';
							
							$carousel .= '<div>';
								
									/* link markup for detail slideup */
									if( $detailstyle == 'slideup' ) {
										$carousel  .= '<a class="ut-portfolio-link ' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" data-wrap="' . self::$token . '" data-post="' . $portfolio_query->post->ID . '" href="#">';
									}
									
									/* link markup for image popup */
									if( $detailstyle == 'popup' ) {
										
										$popuplink = NULL;
										
										/* image post or audio post */
										if( empty( $post_format ) || $post_format == 'audio' ) {
											$carousel  .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'. $portfolio_detail_image .'">';
										}
										
										/* video post */
										if( $post_format == 'video' ) {
											
                                            /* get the content */
                                            if(!empty($ut_page_hero_type) && $ut_page_hero_type == 'video') { 
                                                
                                                /* youtube video */
                                                if(isset($ut_page_video_source) && $ut_page_video_source == 'youtube') {
                                                    $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video', true);                                            
                                                }
                                                
                                                /* selfhosted video - not supported by prettyphoto */
                                                if(isset($ut_page_video_source) && $ut_page_video_source == 'selfhosted') {
                                                    $popuplink = $fullsize;                                            
                                                }
                                                
                                                /* custom video */
                                                if(isset($ut_page_video_source) && $ut_page_video_source == 'custom') {                                                
                                                    $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video_custom', true);
                                                }                                            
                                                
                                                /* content is still empty - let's assign the regular content */
                                                if(empty($content)) {
                                                    $content = get_the_content();
                                                }
                                                
                                            } else {
                                                $content = get_the_content();                                            
                                            }
                                            
                                            /* try to catch video url */
                                            $popuplink = !empty($popuplink) ? $popuplink : ut_get_portfolio_format_video_content($content);											
											$carousel  .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'.$popuplink.'">';
											
										}
										
										/* gallery post */
										if( $post_format == 'gallery' ) {
											
											$carousel .= ut_portfolio_popup_gallery( $portfolio_query->post->ID , self::$token , $ut_page_hero_type );
											$carousel .= '<a class="ut-portfolio-popup-'.$portfolio_query->post->ID.' '. $portfolio_settings['image_style'] . '" title="' . $title . '" href="' . $portfolio_detail_image . '">';									
										
										}								
										
									}
								
									$carousel .= '<h2 class="portfolio-title">' . $title . '</h2>';
								
								$carousel  .= '</a>';
								
							$carousel .= '</div>';
							
						$carousel  .= '</li>';
					
					}
					
                }                     
                
            endwhile; endif;
				
        /* reset query */
        wp_reset_postdata();
	    
        /* end showcase navigation */
        $carousel .= '</ul>';
        $carousel .= '</div>';
                
        /* return final carousel */
        return $carousel;

    
    }
    
    static function generate_carousel_script( $carousel_options ) {
		
		/* settings */
		$container = self::$token;
        $columns   = !empty($carousel_options['columns']) ? $carousel_options['columns'] : 4;
        
        /* script */
        $script = "
		<script type='text/javascript'>
		/* <![CDATA[ */ 
        
			(function($){
			
				$(window).load(function(){
				    
                    var \$container = $('#carousel_$container');
                    
					if( $(window).width() <= 767) {
						columns = 2;
					} else {
						columns = $columns;
					}
					                    
                    function getGridSize() {
                        return \$container.width() / columns
                    }
                    					                                                                
					$('#carousel_$container').flexslider({
                        animation: 'slide',
                        controlNav: false,
                        animationLoop: false,
                        slideshow: false,
                        itemWidth: getGridSize(),
                        itemMargin: 0,
						touch: true
                    });
					
				});
				
				$(window).smartresize(function(){
					
					$('#carousel_$container').flexslider(0);
											
				});
				
			})(jQuery);
		
		/* ]]> */ 
		</script>";
		/* end carousel script */ 
		
        /* return javascript */
		return ut_compress_java($script);
		
	}
    
    
    /*
    |--------------------------------------------------------------------------
    | Grid / Masonry Gallery
    |--------------------------------------------------------------------------
    */
	static function create_masonry_gallery() {
		
		global $paged;
		
		/* settings */
		$portfolio_categories = get_post_meta( self::$token , 'ut_portfolio_categories' );
		
		/* global portfolio settings */
        $portfolio_settings = get_post_meta( self::$token , 'ut_portfolio_settings' );
        $portfolio_settings = $portfolio_settings[0];
		
		/* detail style */
		$detailstyle = !empty($portfolio_settings['detail_style']) ? $portfolio_settings['detail_style'] : 'slideup';
		
        /* masonry options */
        $masonry_options = get_post_meta( self::$token , 'ut_masonry_options' );
        $masonry_options = $masonry_options[0];
        
		/* fallback if no meta has been set */
		$portfolio_per_page   = !empty($portfolio_settings['posts_per_page']) ? $portfolio_settings['posts_per_page'] : 4 ;
		$portfolio_categories = !empty($portfolio_categories) ? $portfolio_categories : array();
				
		/* portfolio query terms */
		$portfolio_terms = array();
		if( is_array($portfolio_categories[0])  && !empty($portfolio_categories[0]) ) {

			foreach( $portfolio_categories[0] as $key => $value) {                
                array_push($portfolio_terms , $key);
			}
			
		}
		
        /* query args */
        $portfolio_args = array(
            
            'post_type'      => 'portfolio',
            'posts_per_page' => $portfolio_per_page,
            'paged'          => $paged,
            'tax_query'      => array( array(
                    'taxonomy' => 'portfolio-category',
                    'terms'    => $portfolio_terms,
                    'field'    => 'term_id'  
            ) )
            
        
        );
        
        /* start query */
        $portfolio_query = new WP_Query( $portfolio_args );		
		
		/* needed javascript */
		$masonry  = self::generate_masonry_script( $masonry_options );
        
		/* create hidden gallery */
		if( $detailstyle == 'slideup' ) {
			$masonry .= self::create_hidden_popup_portfolio( $portfolio_args , $portfolio_settings['image_style'] );
		}
		
        /* portfolio wrapper */		
		$masonry .= '<div id="ut_masonry_' . self::$token . '" class="ut-portfolio-wrap" data-textcolor="' . $portfolio_settings["text_color"] .'" data-opacity="' . $portfolio_settings["hover_opacity"] . '" data-hovercolor="' . ut_hex_to_rgb($portfolio_settings["hover_color"]) . '">';
			
			/* loop trough portfolio items */
			if ($portfolio_query->have_posts()) : while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
				
				$fullsize = $thumbnail = $portfolio_detail_image = wp_get_attachment_url( get_post_thumbnail_id( $portfolio_query->post->ID ) );
				$caption = get_post( get_post_thumbnail_id( $portfolio_query->post->ID ) )->post_excerpt;
				
				/* image dimensions */
				$imageinfo = wp_get_attachment_image_src( get_post_thumbnail_id( $portfolio_query->post->ID ) , 'full' );
				$width  = $imageinfo[1];
				$height = $imageinfo[2];
				
                /* hero type setting - new with 2.6 */
                $ut_page_hero_type = get_post_meta($portfolio_query->post->ID , 'ut_page_hero_type' , true);
                
                if( !empty($ut_page_hero_type) ) {
                    
                    if($ut_page_hero_type == 'image' || $ut_page_hero_type == 'animatedimage' || $ut_page_hero_type == 'splithero' || $ut_page_hero_type == 'custom' || $ut_page_hero_type == 'dynamic') {
                        $post_format = '';
                    }
                    
                    if($ut_page_hero_type == 'slider' || $ut_page_hero_type == 'transition' || $ut_page_hero_type == 'tabs') {
                        $post_format = 'gallery';
                    }
                    
                    if($ut_page_hero_type == 'video') {
                        $post_format = 'video';
                        $ut_page_video_source = get_post_meta($portfolio_query->post->ID, 'ut_page_video_source' , true);  
                    }
                    
                    /* switch option key */
                    switch ($ut_page_hero_type) {
                    
                        case 'animatedimage':
                        $optionkey = 'ut_page_hero_animated_image';
                        break;
                        
                        default:  
                        $optionkey = 'ut_page_hero_image';  
                    
                    }                  
                
                } /* end ut_page_hero_type */
                
                                    			
                /* check if there is a detail image available */
                $portfolio_detail_image_data = get_post_meta( $portfolio_query->post->ID , $optionkey , true );                
                
                if( is_array($portfolio_detail_image_data) && !empty($portfolio_detail_image_data['background-image']) ) {
                        
                    $portfolio_detail_image = $portfolio_detail_image_data['background-image'];
                    
                } elseif( !is_array($portfolio_detail_image_data) && !empty($portfolio_detail_image_data) ) {
                    
                    $portfolio_detail_image = $portfolio_detail_image_data;
                    
                }               
                	
				/* cropping dimensions */
				$width  = !empty($masonry_options['crop_size_x']) ? $masonry_options['crop_size_x'] : '600';
				$height = !empty($masonry_options['crop_size_y']) ? $masonry_options['crop_size_y'] : '400';
				
				$thumbnail  =  ut_resize( $fullsize , $width , $height , true , true , true );
				
				/* link settings */
                $ut_portfolio_link_type = get_post_meta( $portfolio_query->post->ID , 'ut_portfolio_link_type' , true);
                $external = FALSE;
                $target = '_blank';
                
                /* theme meta boxes are storing strings */
                if( !is_array($ut_portfolio_link_type) ) {
                    $temp_array = array();                    
                    $temp_array['target'] = $ut_portfolio_link_type;
                    $ut_portfolio_link_type = $temp_array;
                    $temp_array = null;
                } 
                
                if( !empty($ut_portfolio_link_type['target']) && $ut_portfolio_link_type['target'] == 'external' ) {
                   
                   /* get link user haas to set */ 
                   $external = get_post_meta( $portfolio_query->post->ID , 'ut_external_link' , true);
                    
                } elseif( !empty($ut_portfolio_link_type['target']) && $ut_portfolio_link_type['target'] == 'internal' ) {
                   
                   /* get permalink to single portfolio */
                   $external = get_permalink( $portfolio_query->post->ID );
                   $target = '_self';
                   
                }
                	
				/* create single content item */				
				$masonry .= '<div class="ut-masonry ut-hover">';
					
						$title= str_ireplace('"', '', trim(get_the_title()));
						
						/* link markup for detail slideup */
						if( $detailstyle == 'slideup' ) {
							
							/* has external link */
							if($external) {
							
								$masonry .= '<a class="' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
							
							} else {
								
								$masonry .= '<a class="ut-portfolio-link ' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" data-wrap="' . self::$token . '" data-post="' . $portfolio_query->post->ID . '" href="#">';
							
							}
							
							
						}
						
						/* link markup for image popup */
						if( $detailstyle == 'popup' ) {
							
							$popuplink = NULL;
							
							/* image post or audio post */
							if( empty( $post_format ) || $post_format == 'audio' ) {
								
								/* has external link */
								if($external) {
								
									$masonry .= '<a class="' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
								
								} else {
								
									$masonry  .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'. $portfolio_detail_image .'">';
								
								}
																
							}
							
							/* video post */
							if( $post_format == 'video' ) {
								
                                /* has external link */
								if($external) {
								
									$masonry .= '<a class="' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
								
								} else {
                                
                                    /* get the content */
                                    if(!empty($ut_page_hero_type) && $ut_page_hero_type == 'video') { 
                                        
                                        /* youtube video */
                                        if(isset($ut_page_video_source) && $ut_page_video_source == 'youtube') {
                                            $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video', true);                                            
                                        }
                                        
                                        /* selfhosted video - not supported by prettyphoto */
                                        if(isset($ut_page_video_source) && $ut_page_video_source == 'selfhosted') {
                                            $popuplink = $fullsize;                                            
                                        }
                                        
                                        /* custom video */
                                        if(isset($ut_page_video_source) && $ut_page_video_source == 'custom') {                                                
                                            $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video_custom', true);
                                        }                                            
                                        
                                        /* content is still empty - let's assign the regular content */
                                        if(empty($content)) {
                                            $content = get_the_content();
                                        }
                                        
                                    } else {                                            
                                        $content = get_the_content();                                            
                                    }
                                    
                                    /* try to catch video url */
                                    $popuplink = !empty($popuplink) ? $popuplink : ut_get_portfolio_format_video_content($content);                                    
                                    $masonry  .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'.$popuplink.'">';
                                
                                }
								
							}
							
							/* gallery post */
							if( $post_format == 'gallery' ) {
								
                                /* has external link */
								if($external) {
								
									$masonry .= '<a class="' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
								
								} else {
                                
								    $masonry .= ut_portfolio_popup_gallery( $portfolio_query->post->ID , self::$token , $ut_page_hero_type );
								    $masonry .= '<a class="ut-portfolio-popup-'.$portfolio_query->post->ID.' '. $portfolio_settings['image_style'] . '" title="' . $title . '" href="' . $portfolio_detail_image . '">';									
                                
                                }
							
							}								
							
						}
					
						if ( has_post_thumbnail() && ! post_password_required() ) :		
							
							$masonry .= '<figure>';
								$masonry .= '<img alt="' . get_the_title() . '" width="'.$width.'" height="'.$height.'" src="' . UT_PORTFOLIO_URL . 'i/?w='.$width.'&amp;h='.$height.self::$cache.'" class="portfolio-lazy"  data-original="' . $fullsize . '" />';
							$masonry .= '</figure>';
							
						else :
							
							$masonry .= '<div class="ut-password-protected">' . __('Password Protected Portfolio' , 'ut_portfolio_lang') . '</div>';
										
						endif;
						
						$masonry .= '<div class="ut-hover-layer">';
							$masonry .= '<div class="ut-portfolio-info">';
                                $masonry .= '<div class="ut-portfolio-info-c">';
								
                                    /* Portfolio Title and Categories */
                                    $masonry .= '<h2 class="portfolio-title">' . get_the_title() . '</h2>';								
                                    
                                    /* get all portfolio-categories for this item */
                                    $portfolio_cats = wp_get_object_terms( $portfolio_query->post->ID , 'portfolio-category' );
                                    $masonry .= '<span>' . ut_generate_cat_list( $portfolio_cats ) . '</span>';
								
							    $masonry .= '</div>';	
							$masonry .= '</div>';
						$masonry .= '</div>';
				
					$masonry .= '</a>';				
				$masonry .= '</div>';
				
			endwhile; endif;
		
		$masonry .= '</div><!-- end ut_masonry_' . self::$token . '-->';
				
		/* reset query */
		wp_reset_postdata();
		
		return  $masonry;
		
	}
	
	static function generate_masonry_script( $masonry_options ) {
		
        /* settings */
		$container = self::$token;
		$columns = !empty($masonry_options['columns']) ? $masonry_options['columns'] : 5;
		$tcolumns = !empty($masonry_options['tcolumns']) ? $masonry_options['tcolumns'] : 3;
		$mcolumns = !empty($masonry_options['mcolumns']) ? $masonry_options['mcolumns'] : 2;
        $height = !empty($masonry_options['crop_size_y']) ? $masonry_options['crop_size_y'] : '400';
		
		$script = "
		
		<script type='text/javascript'>
		
		/* <![CDATA[ */ 
        
        	(function($){ 
				
				$(document).ready(function() {
				
                	$('#ut_masonry_$container').utmasonry({ columns : $columns , tcolumns: $tcolumns , mcolumns : $mcolumns , itemClass : 'ut-grid-item' , unitHeight : $height });
                    
				}); 
			
			})(jQuery);    
        
        /* ]]> */ 
		
		</script>";
		
		return ut_compress_java($script);
		
	}
	
    /*
    |--------------------------------------------------------------------------
    | Portfolio Filterable Gallery
    |--------------------------------------------------------------------------
    */
    static function create_portfolio_gallery() {
		
		global $paged , $wp_query;
        
        /* pagination */		
        if  ( empty($paged) ) {
                if ( !empty( $_GET['paged'] ) ) {
                        $paged = $_GET['paged'];
                } elseif ( !empty($wp->matched_query) && $args = wp_parse_args($wp->matched_query) ) {
                        if ( !empty( $args['paged'] ) ) {
                                $paged = $args['paged'];
                        }
                }
                if ( !empty($paged) )
                        $wp_query->set('paged', $paged);
        }           
                
		$temp = $wp_query;
        $wp_query = $term = null;
		
		/* settings */
		$portfolio_categories = get_post_meta( self::$token , 'ut_portfolio_categories' );
		$term = '';
		
		/* global portfolio settings */
        $portfolio_settings = get_post_meta( self::$token , 'ut_portfolio_settings' );
        $portfolio_settings = $portfolio_settings[0];
				
        /* gallery options */
        $gallery_options = get_post_meta( self::$token , 'ut_gallery_options' );
        $gallery_options = $gallery_options[0];
        
		/* detail style */
		$detailstyle = !empty($portfolio_settings['detail_style']) ? $portfolio_settings['detail_style'] : 'slideup';
		
		/* columnset */
		$columnset = !empty($gallery_options['columns']) ? $gallery_options['columns'] : 4;
		$gutter = !empty($gallery_options['gutter']) ? 'gutter' : '';
		
		/* image style */
		$image_style_class = $portfolio_settings['image_style'];
		
		/* variables for last row item */
		switch ($columnset) {
			case 2:
				$z = 0;
				$counter = 1;
				break;
			case 3:
				$z = 4;
				$counter = 2;
				break;
			case 4:
				$z = 5;
				$counter = 3;
				break;
		}
		
		/* fallback if no meta has been set */
		$portfolio_per_page   = !empty($portfolio_settings['posts_per_page']) ? $portfolio_settings['posts_per_page'] : 4 ;
		$portfolio_categories = !empty($portfolio_categories) ? $portfolio_categories : array();
		
		/* portfolio query terms */
		$portfolio_terms = array();
		if( is_array($portfolio_categories[0])  && !empty($portfolio_categories[0]) ) {

			foreach( $portfolio_categories[0] as $key => $value) {                
                array_push($portfolio_terms , $key);
			}
			
			$portfolio_terms_query = $portfolio_terms;
			
		}
		
		
		/* only change term if browser is browsing this portfolio */
		if( ( !empty( $_GET['portfolioID'] ) && $_GET['portfolioID'] == self::$token ) ) :
		
			if( $gallery_options['filter_type'] == 'static' && !empty($_GET['termID']) ) {
				
				/* sanitize term */
				$term = absint( $_GET['termID'] );
				
				/* reset terms */
				$portfolio_terms_query = array();
				array_push($portfolio_terms_query , $term);
			
			}
			
		endif;
		
		
		/* user is not browsing this portfolio , so we reset the pagination */
		if( ( !empty( $_GET['portfolioID'] ) && $_GET['portfolioID'] != self::$token ) ) :
			
			$paged = 0;
		
		endif;
		
				
        /* query args */
        $portfolio_args = array(
            
            'post_type'      => 'portfolio',
            'posts_per_page' => $portfolio_per_page,
            'paged'          => $paged,
            'tax_query'      => array( array(
                    'taxonomy' => 'portfolio-category',
                    'terms'    => $portfolio_terms_query,
                    'field'    => 'term_id'  
            ) )
            
        
        );
        
        /* start query */
        $portfolio_query = $wp_query = new WP_Query( $portfolio_args );
        
        /* portfolio filter */                
        if( !empty($gallery_options['filter']) ) :
        		
        $filter  = '<div class="ut-portfolio-menu-wrap"><ul id="ut-portfolio-menu-' . self::$token . '" class="ut-portfolio-menu '.(!empty($gallery_options['filter_style']) ? $gallery_options['filter_style'] : 'style_one').'">';
            
            /* reset button */
			$reset = !empty($gallery_options['reset_text']) ? $gallery_options['reset_text'] : __('All' , 'ut_portfolio_lang');
			
            if( $gallery_options['filter_type'] == 'static' ) {
				
				$selected = (empty($term)) ? 'class="selected"' : '';
				$filter .= '<li><a href="?portfolioID='.self::$token.'#ut-portfolio-items-' . self::$token . '" data-filter="*" ' . $selected . '>' . $reset . '</a></li>';
			
			} else {
			
				$filter .= '<li><a href="#" data-filter="*" class="selected">' . $reset . '</a></li>';
				
			}
            
            /* get taxonomies */
            $taxonomies = get_terms('portfolio-category');
			$taxonomiesarray =  json_decode(json_encode($taxonomies), true);
					    
            if( is_array($portfolio_terms) && is_array($taxonomies) ) {
                
                foreach ($portfolio_terms as $single_term ) {
										
                    $key = self::search_tax_key( $single_term , $taxonomiesarray );
										                    
					if( $gallery_options['filter_type'] == 'static' && isset($key) ) {
						
						$selected = ( $taxonomies[$key]->term_id == $term ) ? 'class="selected"' : '';
						
						$filter .= '<li><a ' . $selected . ' href="?termID=' . $taxonomies[$key]->term_id . '&amp;portfolioID='.self::$token.'#ut-portfolio-items-' . self::$token . '" data-filter=".'.$taxonomies[$key]->slug.'-filt">'.$taxonomies[$key]->name.'</a></li>';
						
					} else {
						
                        if( isset($taxonomies[$key]->slug) ) {
						    $filter .= '<li><a href="#" data-filter=".'.$taxonomies[$key]->slug.'-filt">'.$taxonomies[$key]->name.'</a></li>';
                        }
                        
					}
					
					
                }
            
			}      
        
        $filter .= '</ul></div>';
        
        endif;
        
        /* needed javascript */
		$gallery = self::generate_gallery_script( $gallery_options , $counter );
        
		/* create hidden gallery */
		if( $detailstyle == 'slideup' ) {
			$gallery .= self::create_hidden_popup_portfolio( $portfolio_args , $portfolio_settings['image_style'] );
		}		
		
        /* output portfolio wrap */
        $gallery .= '<div id="ut-portfolio-wrap" class="ut-portfolio-wrap" data-textcolor="' . $portfolio_settings["text_color"] .'" data-opacity="' . $portfolio_settings["hover_opacity"] . '" data-hovercolor="' . ut_hex_to_rgb($portfolio_settings["hover_color"]) . '">';
		$gallery .= '<a class="ut-portfolio-offset-anchor" style="top:-120px;" id="ut-portfolio-items-' . self::$token . '-anchor"></a>';
		
        /* add filter */
        if( isset($gallery_options['filter']) ) {
            $gallery .= $filter;
        }
        
        /* output portfolio container */
        $gallery .= '<div id="ut-portfolio-items-' . self::$token . '" class="ut-portfolio-item-container">';
        	
            /* loop trough portfolio items */
			if ($portfolio_query->have_posts()) : while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                				
                /* needed variables */
                $projecttype = '';
                $title = str_ireplace('"', '', trim(get_the_title()));
                $post_format = get_post_format();
				
                /* link settings */
                $ut_portfolio_link_type = get_post_meta( $portfolio_query->post->ID , 'ut_portfolio_link_type' , true);
                $external = false;
                $target = '_blank';
                
                /* theme meta boxes are storing strings */
                if( !is_array($ut_portfolio_link_type) ) {
                    $temp_array = array();                    
                    $temp_array['target'] = $ut_portfolio_link_type;
                    $ut_portfolio_link_type = $temp_array;
                    $temp_array = null;
                }     
                                
                if( !empty($ut_portfolio_link_type['target']) && $ut_portfolio_link_type['target'] == 'external' ) {
                   
                   /* get link user haas to set */ 
                   $external = get_post_meta( $portfolio_query->post->ID , 'ut_external_link' , true);
                    
                } elseif( !empty($ut_portfolio_link_type['target']) && $ut_portfolio_link_type['target'] == 'internal' ) {
                   
                   /* get permalink to single portfolio */
                   $external = get_permalink( $portfolio_query->post->ID );
                   $target = '_self';
                   
                }
                
				/* itemposition */
				$itemposition = '';
				if($columnset !=3) { 
					if($columnset == 2) { (($z%2)==0) ? $itemposition = '' : $itemposition = 'last'; }
					if($columnset == 4) { (($z%4)==0) ? $itemposition = 'last' : $itemposition = ''; }
				} else { 
					if(($z%3) == 0) { $itemposition = 'last'; $z = 3; } 
				} 
				
                /* get all portfolio-categories for this item ( needed for filter ) */
                $portfolio_cats = wp_get_object_terms( $portfolio_query->post->ID , 'portfolio-category' );
                
                /* set filter attributes */               
                if( is_array($portfolio_cats) ) {
                    foreach($portfolio_cats as $single_cat) {
                        $projecttype .=  $single_cat->slug."-filt ";
                    }
                }
                
				/* gallery style */
				$gallery_style = !empty($gallery_options['style']) ? $gallery_options['style'] : 'style_one';
				
				/* portfolio featured image */
				$fullsize = $thumbnail = $portfolio_detail_image = wp_get_attachment_url( get_post_thumbnail_id($portfolio_query->post->ID) );
				$caption = get_post( get_post_thumbnail_id( $portfolio_query->post->ID ) )->post_excerpt;
				
                /* hero type setting - new with 2.6 */
                $ut_page_hero_type = get_post_meta($portfolio_query->post->ID , 'ut_page_hero_type' , true);
                
                if( !empty($ut_page_hero_type) ) {
                    
                    if($ut_page_hero_type == 'image' || $ut_page_hero_type == 'animatedimage' || $ut_page_hero_type == 'splithero' || $ut_page_hero_type == 'custom' || $ut_page_hero_type == 'dynamic') {
                        $post_format = '';
                    }
                    
                    if($ut_page_hero_type == 'slider' || $ut_page_hero_type == 'transition' || $ut_page_hero_type == 'tabs') {
                        $post_format = 'gallery';
                    }
                    
                    if($ut_page_hero_type == 'video') {
                        $post_format = 'video';
                        $ut_page_video_source = get_post_meta($portfolio_query->post->ID, 'ut_page_video_source' , true);
                    }
                    
                    /* switch option key */
                    switch ($ut_page_hero_type) {
                    
                        case 'animatedimage':
                        $optionkey = 'ut_page_hero_animated_image';
                        break;
                        
                        default:  
                        $optionkey = 'ut_page_hero_image';  
                    
                    }                  
                
                } /* end ut_page_hero_type */
                
                                
                /* check if there is a detail image available */
                $portfolio_detail_image_data = get_post_meta( $portfolio_query->post->ID , $optionkey , true );                
                
                if( is_array($portfolio_detail_image_data) && !empty($portfolio_detail_image_data['background-image']) ) {
                        
                    $portfolio_detail_image = $portfolio_detail_image_data['background-image'];
                    
                } elseif( !is_array($portfolio_detail_image_data) && !empty($portfolio_detail_image_data) ) {
                    
                    $portfolio_detail_image = $portfolio_detail_image_data;
                    
                }
                					
				/* cropping dimensions */
				$width  = !empty($gallery_options['crop_size_x']) ? $gallery_options['crop_size_x'] : '600';
				$height = !empty($gallery_options['crop_size_y']) ? $gallery_options['crop_size_y'] : '400';
				
				$thumbnail  =  ut_resize( $fullsize , $width , $height , true , true , true );
				
				/* style one images with title */
				if( $gallery_style == 'style_one') {
				    
					/* create single portfolio item */
					$gallery .= '<article class="' . $projecttype . ' ' . $itemposition . ' ut-masonry ' . $gutter . ' portfolio-style-one">';
						
						$gallery .= '<div class="ut-portfolio-item ut-hover">';
												
							/* link markup for slideup details */
							if( $detailstyle == 'slideup' ) {							
								
								/* has external link */
								if(!empty($external)) {
								    
									$gallery .= '<a class="' . $image_style_class . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
								
								} else {
								
									$gallery .= '<a class="ut-portfolio-link ' . $image_style_class . '" rel="bookmark" title="' . $title . '" data-wrap="' . self::$token . '" data-post="' . $portfolio_query->post->ID . '" href="#ut-portfolio-details-wrap-' . self::$token . '">';
								
								}
								
							}
							
							/* link markup for image popup */
							if( $detailstyle == 'popup' ) {
								
								$popuplink = NULL;
																
								/* image post or audio post */
								if( empty( $post_format ) || $post_format == 'audio' ) {

									/* has external link */ 
									if( !empty($external) ) {
										 
										$gallery .= '<a class="' . $image_style_class . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
										
									} else {
										
										$gallery  .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'. $portfolio_detail_image .'">';
										
									}
									
								}
								
								/* video post */
								if( $post_format == 'video' ) {
									
                                    /* has external link */ 
									if( !empty($external) ) {
										 
										$gallery .= '<a class="' . $image_style_class . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
										
									} else {                                    
                                    
                                       /* get the content */
                                       if(!empty($ut_page_hero_type) && $ut_page_hero_type == 'video') { 
                                            
                                            /* youtube video */
                                            if(isset($ut_page_video_source) && $ut_page_video_source == 'youtube') {
                                                $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video', true);                                            
                                            }
                                            
                                            /* selfhosted video - not supported by prettyphoto */
                                            if(isset($ut_page_video_source) && $ut_page_video_source == 'selfhosted') {
                                                $popuplink = $fullsize;                                            
                                            }
                                            
                                            /* custom video */
                                            if(isset($ut_page_video_source) && $ut_page_video_source == 'custom') {                                                
                                                $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video_custom', true);
                                            }                                            
                                            
                                            /* content is still empty - let's assign the regular content */
                                            if(empty($content)) {
                                                $content = get_the_content();
                                            }
                                            
                                        } else {                                            
                                            $content = get_the_content();                                            
                                        }
                                        
                                        /* try to catch video url */
                                        $popuplink = !empty($popuplink) ? $popuplink : ut_get_portfolio_format_video_content($content);
                                        $gallery .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'.$popuplink.'">';
                                        
                                    }
                                    
								}
								
								/* gallery post */
								if( $post_format == 'gallery' ) {
									
                                    /* has external link */ 
									if( !empty($external) ) {
										 
										$gallery .= '<a class="' . $image_style_class . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
										
									} else {
                                    
									    $gallery .= ut_portfolio_popup_gallery( $portfolio_query->post->ID , self::$token , $ut_page_hero_type );
									    $gallery .= '<a class="ut-portfolio-popup-'.$portfolio_query->post->ID.' ' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'. $portfolio_detail_image .'">';									
								    
                                    }
                                    
								}								
								
							}							
							
							if ( has_post_thumbnail() && ! post_password_required() ) :		
						
								$gallery .= '<figure><img alt="' . get_the_title() . '" width="'.$width.'" height="'.$height.'" src="' . UT_PORTFOLIO_URL . 'i/?w='.$width.'&amp;h='.$height.self::$cache.'" class="portfolio-lazy"  data-original="' . $thumbnail . '" /></figure>';
																
							elseif( post_password_required() ) :
								
								$gallery .= '<div class="ut-password-protected">' . __('Password Protected Portfolio' , 'ut_portfolio_lang') . '</div>';
							
							endif;
								
								$gallery .= '<div class="ut-hover-layer">';
									$gallery .= '<div class="ut-portfolio-info">';
                                        $gallery .= '<div class="ut-portfolio-info-c">';
							
                                            /* item title */
                                            $gallery .= '<h2 class="portfolio-title">' . $title . '</h2>';								
                                            $gallery .= '<span>' . ut_generate_cat_list( $portfolio_cats ) . '</span>';
									    
                                        $gallery .= '</div>';
									$gallery .= '</div>';
								$gallery .= '</div>';								
							
							$gallery .= '</a>';
															
						$gallery .= '</div>';
					
					$gallery .= '</article>';		

				}
				
				
				/* style two only images */
				if( $gallery_style == 'style_two') {					
					
					/* create single portfolio item */
					$gallery .= '<article class="' . $projecttype . ' ' . $itemposition . ' ut-masonry ' . $gutter . ' portfolio-style-two">';
						
						$gallery .= '<div class="ut-portfolio-item ut-hover">';
							
							/* link markup for slideup details */
							if( $detailstyle == 'slideup' ) {							
								
								/* has external link */
								if($external) {
								
									$gallery .= '<a class="' . $image_style_class . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
								
								} else {
								
									$gallery .= '<a class="ut-portfolio-link ' . $image_style_class . '" rel="bookmark" title="' . $title . '" data-wrap="' . self::$token . '" data-post="' . $portfolio_query->post->ID . '" href="#ut-portfolio-details-wrap-' . self::$token . '">';
								
								}
								
							}
							
							/* link markup for image popup */
							if( $detailstyle == 'popup' ) {
								
								$popuplink = NULL;
								
								/* image post or audio post */
								if( empty( $post_format ) || $post_format == 'audio' ) {

									/* has external link */
									if($external) {
									
										$gallery .= '<a class="' . $image_style_class . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
									
									} else {
									
										$gallery  .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'. $portfolio_detail_image .'">';
									
									}
									
								}
								
								/* video post */
								if( $post_format == 'video' ) {
									
                                    /* has external link */ 
									if( !empty($external) ) {
										 
										$gallery .= '<a class="' . $image_style_class . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
										
									} else {
                                    
                                       /* get the content */
                                       if(!empty($ut_page_hero_type) && $ut_page_hero_type == 'video') { 
                                            
                                            /* youtube video */
                                            if(isset($ut_page_video_source) && $ut_page_video_source == 'youtube') {
                                                $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video', true);                                            
                                            }
                                            
                                            /* selfhosted video - not supported by prettyphoto */
                                            if(isset($ut_page_video_source) && $ut_page_video_source == 'selfhosted') {
                                                $popuplink = $fullsize;                                            
                                            }
                                            
                                            /* custom video */
                                            if(isset($ut_page_video_source) && $ut_page_video_source == 'custom') {                                                
                                                $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video_custom', true);
                                            }                                            
                                            
                                            /* content is still empty - let's assign the regular content */
                                            if(empty($content)) {
                                                $content = get_the_content();
                                            }
                                            
                                        } else {                                            
                                            $content = get_the_content();                                            
                                        }
                                        
                                        /* try to catch video url */
                                        $popuplink = !empty($popuplink) ? $popuplink : ut_get_portfolio_format_video_content($content);
                                        $gallery  .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'.$popuplink.'">';
									
                                    }
                                    
								}
								
								/* gallery post */
								if( $post_format == 'gallery' ) {
									
                                    /* has external link */
									if($external) {
									
										$gallery .= '<a class="' . $image_style_class . '" rel="bookmark" title="' . $title . '" href="'.$external.'" target="'.$target.'">';
									
									} else {
                                    
									    $gallery .= ut_portfolio_popup_gallery( $portfolio_query->post->ID , self::$token , $ut_page_hero_type );
									    $gallery .= '<a class="ut-portfolio-popup-'.$portfolio_query->post->ID.' ' . $portfolio_settings['image_style'] . '" title="' . $title . '" href="#">';									
								    
                                    }
                                    
								}								
								
							}
							
							if ( has_post_thumbnail() && ! post_password_required() ) :		
						
								$gallery .= '<figure><img alt="' . get_the_title() . '" width="'.$width.'" height="'.$height.'" src="' . UT_PORTFOLIO_URL . 'i/?w='.$width.'&amp;h='.$height.self::$cache.'" class="portfolio-lazy"  data-original="' . $thumbnail . '" /></figure>';
																
							elseif( post_password_required() ) :
								
								$gallery .= '<div class="ut-password-protected">' . __('Password Protected Portfolio' , 'ut_portfolio_lang') . '</div>';
							
							endif;
							
								$gallery .= '<div class="ut-hover-layer">';
									$gallery .= '<div class="ut-portfolio-info">';
                                        $gallery .= '<div class="ut-portfolio-info-c">';
							
                                            if( $post_format == 'video' ) {
                                                $gallery .= '<i class="fa fa-film fa-lg"></i>';
                                            }
                                            
                                            if( $post_format == 'audio' ) {
                                                $gallery .= '<i class="fa fa-headphones fa-lg"></i>';
                                            }
        
                                            if(  $post_format == 'gallery' ) {
                                                $gallery .= '<i class="fa fa-camera-retro fa-lg"></i>';
                                            }
                                            
                                            if( empty($post_format) ) {
                                                $gallery .= '<i class="fa fa-picture-o fa-lg"></i>';
                                            }									
                                        
                                            $gallery .= '<span>' . ut_generate_cat_list( $portfolio_cats ) . '</span>';
									
                                        $gallery .= '</div>';
									$gallery .= '</div>';
								$gallery .= '</div>';
							
							$gallery .= '</a>';
								
							$gallery .= '<div>';
																
								/* link markup for slideup details */
								if( $detailstyle == 'slideup' ) {							
									$gallery .= '<a class="ut-portfolio-link ' . $portfolio_settings['image_style'] . '" rel="bookmark" title="' . $title . '" data-wrap="' . self::$token . '" data-post="' . $portfolio_query->post->ID . '" href="#ut-portfolio-details-wrap-' . self::$token . '">';
								}
								
								/* link markup for image popup */
								if( $detailstyle == 'popup' ) {
									
									$popuplink = NULL;
									
									/* image post or audio post */
									if( empty( $post_format ) || $post_format == 'audio' ) {
										$gallery  .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'. $portfolio_detail_image .'">';
									}
									
									/* video post */
									if( $post_format == 'video' ) {
										
									    /* get the content */
                                        if(!empty($ut_page_hero_type) && $ut_page_hero_type == 'video') { 
                                            
                                            /* youtube video */
                                            if(isset($ut_page_video_source) && $ut_page_video_source == 'youtube') {
                                                $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video', true);                                            
                                            }
                                            
                                            /* selfhosted video - not supported by prettyphoto */
                                            if(isset($ut_page_video_source) && $ut_page_video_source == 'selfhosted') {
                                                $popuplink = $fullsize;                                            
                                            }
                                            
                                            /* custom video */
                                            if(isset($ut_page_video_source) && $ut_page_video_source == 'custom') {                                                
                                                $content = get_post_meta($portfolio_query->post->ID , 'ut_page_video_custom', true);
                                            }                                            
                                            
                                            /* content is still empty - let's assign the regular content */
                                            if(empty($content)) {
                                                $content = get_the_content();
                                            }
                                            
                                        } else {                                            
                                            $content = get_the_content();                                            
                                        }
                                        
                                        /* try to catch video url */
                                        $popuplink = !empty($popuplink) ? $popuplink : ut_get_portfolio_format_video_content($content);
										$gallery  .= '<a data-rel="utPortfolio" class="' . $portfolio_settings['image_style'] . '" title="' . $caption . '" href="'.$popuplink.'">';
										
									}
									
									/* gallery post */
									if( $post_format == 'gallery' ) {
										
										$gallery .= '<a class="ut-portfolio-popup-'.$portfolio_query->post->ID.' ' . $portfolio_settings['image_style'] . '" title="' . $title . '" href="#">';										
									
									}								
									
								}	
								
								/* item title */
								$gallery .= '<h2 class="portfolio-title">' . $title . '</h2>';
								$gallery .= '</a>';
								
								
							$gallery .= '</div>';
											
						$gallery .= '</div>';
					
					$gallery .= '</article>';  
				
				}
            
            $z++; endwhile; endif;
            
        /* end portfolio container */
        $gallery .= '</div>';
		
		/* portfolio pagination */
		if( $portfolio_query->max_num_pages > 1 ){
									
			$gallery .= '<nav class="ut-portfolio-pagination clearfix '.(!empty($gallery_options['filter_style']) ? $gallery_options['filter_style'] : 'style_one').'">';
			
			if ( $paged > 1 ) { 
        		$gallery .= '<a href="?paged=' . ($paged -1) .'&amp;portfolioID='.self::$token.'&amp;termID='.$term.'#ut-portfolio-items-' . self::$token . '-anchor"><i class="fa fa-angle-double-left"></i></a>';
			}
			
			for( $i=1 ;$i<=$portfolio_query->max_num_pages; $i++ ){
				
				$selected = ($paged == $i || ( empty($paged) && $i == 1 ) ) ? 'selected' : '';
				$gallery .= '<a href="?paged=' . $i . '&amp;portfolioID='.self::$token.'&amp;termID='.$term.'#ut-portfolio-items-' . self::$token . '-anchor" class="' . $selected . '">' . $i . '</a>';

            }
			
			if($paged < $portfolio_query->max_num_pages){
                $paged_next = $paged == 0 ? $paged + 1 : $paged;
                $gallery .= '<a href="?paged=' . ($paged_next + 1) . '&amp;portfolioID='.self::$token.'&amp;termID='.$term.'#ut-portfolio-items-' . self::$token . '-anchor"><i class="fa fa-angle-double-right"></i></a>';
            } 
			
			$gallery .= '</nav>';
		
		}

				
        /* end portfolio wrap */
        $gallery .= '</div>';
        
        /* reset query */
		 wp_reset_postdata();
		
		/* restore wp_query */
		$wp_query = null; $wp_query = $temp;
		
        /* return final gallery */
        return $gallery;

    
    }
        
    static function generate_gallery_script( $gallery_options , $counter = 3 ) {
        
		$gutter = !empty($gallery_options['gutter']) ? 'on' : '';
				        
        $script = '
        <script type="text/javascript">
        /* <![CDATA[ */
        (function($) {
			    
            $(document).ready(function($){
 
                "use strict";
                
                var $win = $(window),
                    $container = $("#ut-portfolio-items-' . self::$token . '"),
					columns = ' . $gallery_options['columns'] . ',
					gutter = "' . $gutter . '",
					gutterwidth = "",
					$sortedItems = "";                
				
				function ut_call_isotope( update ) {
					
					if( $(window).width() > 1024) {
						columns = ' . $gallery_options['columns'] . ';
					} 
					
					if( $(window).width() <= 1024) {
						columns = 3;
					} 
					
					if( $(window).width() <= 767) {
						columns = 2;
					} 				
										
					if( gutter === "on" ) {
						$container.children().width( Math.floor($container.width() / columns - ( 20  * ( columns - 1 ) / columns ))).addClass("show");
						gutterwidth = 20;
					} else {
						$container.children().width( Math.floor($container.width() / columns )).addClass("show");
						gutterwidth = 0;
					}
															
					/* IsoTope
					================================================== */                                    
					$container.isotope({
					  
					  	itemSelector : ".ut-masonry",
					  	animationEngine : "best-available",
					  	resizable: false,
					  	layoutMode: "fitRows",
					  	masonry: { columnWidth: $container.width() / columns - gutterwidth },
						itemPositionDataEnabled: true,
						onLayout: function (elems, instance) {
														
                            // trigger scroll for lazy load
                            $win.trigger("scroll");
                            
							$container.addClass("animated");
							elems.addClass("animated");
							
						}
						
					}).isotope("reLayout"); 				
				
				}
				
				
				function ut_update_isotope_grid() {
					
					if( $sortedItems ) {
					
						$container.find(".last").removeClass("last");
						var i = columns - 1;		  
						
						$.each($sortedItems, function(key, value) {
							if($(this).hasClass("isotope-hidden")) {
								i++;
							}
							if(((key-i)/ columns)==0) {
								$(this).addClass("last");
								i = columns+i;
							}
						});
						
						$container.isotope("reLayout",function(){
                           $.waypoints("refresh");
                        });
					
					}
					
				}
				
				$(window).smartresize(function(){
												
					/* update isotope */
					ut_call_isotope();
					
					/* update isotope grid */
					ut_update_isotope_grid();
							
				}); 
				
                $(window).load(function() {
            		
					/* create isotope */
					ut_call_isotope();
					
					/* store sorted items */
					$sortedItems = $container.data("isotope").$filteredAtoms;
					
					/* update isotope grid */
					ut_update_isotope_grid();';
									
					
				/* additonal call for ajax filter */
				if( $gallery_options['filter_type'] == 'ajax' ) :
				
				$script .= '
				
                    /* IsoTope Filtering
                    ================================================== */               
                    $("#ut-portfolio-menu-' . self::$token . ' a").each(function( index ) {
                            
                            var searchforclass = $(this).attr("data-filter");
                            if( !$(searchforclass).length  ) {
                                // hide filter if we do not have any children to filter
                                $(this).hide();
                            }
                            
                    });				
                    
                    $("#ut-portfolio-menu-' . self::$token . ' a").click(function(){
                      
                        var selector = $(this).attr("data-filter");
                        $container.isotope({ filter: selector });
                        
						/* update isotope grid */
                        ut_update_isotope_grid();
                      
                        if ( !$(this).hasClass("selected") ) {
                            $(this).parents("#ut-portfolio-menu-' . self::$token . '").find(".selected").removeClass("selected");
                            $(this).addClass("selected");
                        }          
                      	                        
                        return false;
                      
                    }); ';
				
				endif;
				       
            $script .= ' });  
        
            });
			
        }(jQuery));
		    
        /* ]]> */
        </script>        
        ';
        
        return ut_compress_java($script);
    
    }
    
    static function search_tax_key( $id, $array ) {
		        
        foreach ($array as $key => $val) {

           if($val['term_id'] == $id) {
               return $key;
           }
           
        }
        
        return null;
            
    }
    	  
	static function enqueue_showcase_scripts() {
		
		if ( ! self::$add_showcase_script )  {
            return;
        }
		
		/* needed js */
		wp_enqueue_script('ut-flexslider-js' , UT_PORTFOLIO_URL . 'assets/js/plugins/flexslider/jquery.flexslider-min.js');
		
		wp_enqueue_script('ut-effect' , UT_PORTFOLIO_URL . 'assets/js/ut.effects.js');
		wp_localize_script('ut-effect', 'utPortfolio' , array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
		
		/* needed css */
		wp_enqueue_style('ut-flexslider' , UT_PORTFOLIO_URL . 'assets/css/plugins/flexslider/flexslider.css');
		
	}
	
	static function enqueue_masonry_scripts() {
		
		if ( ! self::$add_masonry_script )  {
            return;
        }
		
		/* needed js */
		wp_enqueue_script('ut-perfectmasonry-js' , UT_PORTFOLIO_URL . 'assets/js/jquery.isotope.perfectmasonry.min.js' , array());
		wp_enqueue_script('ut-masonry-js' 		 , UT_PORTFOLIO_URL . 'assets/js/jquery.utmasonry.js' , array(), '1.8');
		
		wp_enqueue_script('ut-effect' , UT_PORTFOLIO_URL . 'assets/js/ut.effects.js');
		wp_localize_script('ut-effect', 'utPortfolio' , array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));	
	
	}
    
    static function enqueue_gallery_scripts() {
		
		if ( ! self::$add_gallery_script )  {
            return;
        }
		
		/* needed js */
		wp_enqueue_script('ut-perfectmasonry-js' , UT_PORTFOLIO_URL . 'assets/js/jquery.isotope.perfectmasonry.min.js' , array());
		wp_enqueue_script('ut-masonry-js' 		 , UT_PORTFOLIO_URL . 'assets/js/jquery.utmasonry.js' , array(), '1.8');
		
		wp_enqueue_script('ut-effect' , UT_PORTFOLIO_URL . 'assets/js/ut.effects.js');
		wp_localize_script('ut-effect', 'utPortfolio' , array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
		
			
	}
	
	
}

ut_portfolio_shortcode::init(); ?>