<?php

/*
 * Portfolio Management by United Themes
 * http://www.unitedthemes.com/
 */
 
/*
|--------------------------------------------------------------------------
| Gallery Portfolio Post
|--------------------------------------------------------------------------
*/
if( !function_exists('ut_portfolio_flex_slider') ) {

    function ut_portfolio_flex_slider( $postID , $singular = false , $image_style = "ut-square" , $ut_page_hero_type = '' ) {
        
        /* switch option key */
        switch ($ut_page_hero_type) {
        
            case 'slider':
            $optionkey = 'ut_page_hero_slider';
            break;
            
            case 'transition':
            $optionkey = 'ut_page_hero_fancy_slider';
            break;
            
            case 'tabs':
            $optionkey = 'ut_page_hero_tabs';
            break;
            
            default:  
            $optionkey = '';  
        
        }  
        
        $ut_background_slider_slides = get_post_meta($postID , $optionkey , true);                                                                
        
        if( empty($ut_page_hero_type) || empty($ut_background_slider_slides) ) :
            
            /* get all necessary image ID's from content gallery */
            $ut_gallery_images = ut_portfolio_extract_gallery_images_ids($postID);
            
            /* start output */
            if ( !empty( $ut_gallery_images ) && is_array( $ut_gallery_images )  ) : 
                    
            $script = "<script type='text/javascript'>
            /* <![CDATA[ */
            
            (function($){
                
                'use strict';
        
                $(window).load(function(){
                    
                    $('#portfolio-gallery-slider-$postID').flexslider({
                        
                        animation: 'fade',
                        controlNav: false,
                        animationLoop: true,
                        slideshow: false,
                        smoothHeight: true,
                        startAt: 0
                                            
                    });
                    
                });
            
            })(jQuery);
            
            /* ]]> */
            </script>";
            
            $slider ='<div class="ut-portfolio-gallery-slider flexslider" id="portfolio-gallery-slider-' . $postID . '">';
                $slider .='<ul class="slides">';
                    
                    foreach ( $ut_gallery_images as $ID => $imagedata ) : 
                
                        if( isset( $imagedata->guid ) && !empty($imagedata->guid) ) {
                                    
                            $image = $imagedata->guid; // fallback to older wp versions
                            
                        } else {
                            
                            $image = wp_get_attachment_image_src($imagedata , 'single-post-thumbnail');					
                            
                        }
                
                        if( !empty($image[0]) ) : 
                            
                            $slider .='<li>';
                                
                                /* output for single pages */
                                if( !$singular ) {
                                    
                                    $slider .='<img width="'.$image[1].'" height="'.$image[2].'" src="" class="ut-load-me ' . $image_style . '" alt="' . get_the_title( $postID ) . '" data-original="' . $image[0] . '" />';
                                    
                                } else {
                                    
                                    $slider .='<img src="' . $image[0] . '" class="ut-load-me ' . $image_style . '" alt="' . get_the_title( $postID ) . '" />';
                                    
                                }
                                                            
                            $slider .='</li>';
                            
                        endif;
                                        
                  endforeach;
        
                $slider .='</ul>';
            $slider .='</div>';
            
            if( $singular ) {
                $slider = ut_compress_java($script) . $slider;
            }
            
            return $slider;
            
            endif; 
        
        endif;
		
        if( !empty($ut_page_hero_type) && !empty($ut_background_slider_slides) && is_array($ut_background_slider_slides) ) {
            
                $script = "<script type='text/javascript'>
                /* <![CDATA[ */
                
                (function($){
                    
                    'use strict';
            
                    $(window).load(function(){
                        
                        $('#portfolio-gallery-slider-$postID').flexslider({
                            
                            animation: 'fade',
                            controlNav: false,
                            animationLoop: true,
                            slideshow: false,
                            smoothHeight: true,
                            startAt: 0
                                                
                        });
                        
                    });
                
                })(jQuery);
                
                /* ]]> */
                </script>";
                
                $slider ='<div class="ut-portfolio-gallery-slider flexslider" id="portfolio-gallery-slider-' . $postID . '">';
                    $slider .='<ul class="slides">';
                    
                        foreach ($ut_background_slider_slides as $slide) :
                                                                                    
                            $slider .='<li>';
                                
                                if( !$singular ) {
                                    
                                    $image = array("1920","1080"); 
                                    
                                    if( function_exists('ut_get_image_id') ) {
                                        $imageID = ut_get_image_id($slide['image']);
                                        $image   = wp_get_attachment_image_src($imageID , 'single-post-thumbnail');
                                    }
                                    
                                    $slider .='<img width="'.$image[1].'" height="'.$image[2].'" src="" class="ut-load-me ' . $image_style . '" alt="' . get_the_title( $postID ) . '" data-original="' . $slide['image'] . '" />';
                                    
                                } else {
                                    
                                    $slider .='<img src="' . $slide['image'] . '" class="ut-load-me ' . $image_style . '" alt="' . get_the_title( $postID ) . '" />';
                                    
                                }
                            
                            $slider .='</li>';
                    
                        endforeach;
                    
                    $slider .='</ul>';
                $slider .='</div>';                
                        
            if( $singular ) {
                $slider = ut_compress_java($script) . $slider;
            }
            
            return $slider;
              
        }
        
    }
}


/*
|--------------------------------------------------------------------------
| Popup Gallery Portfolio Post
|--------------------------------------------------------------------------
*/
if( !function_exists('ut_portfolio_popup_gallery') ) {

    function ut_portfolio_popup_gallery( $postID , $token , $ut_page_hero_type = '' ) {
        
        /* switch option key */
        switch ($ut_page_hero_type) {
        
            case 'slider':
            $optionkey = 'ut_page_hero_slider';
            break;
            
            case 'transition':
            $optionkey = 'ut_page_hero_fancy_slider';
            break;
            
            case 'tabs':
            $optionkey = 'ut_page_hero_tabs';
            break;
            
            default:  
            $optionkey = '';  
        
        }  
        
        $ut_background_slider_slides = get_post_meta($postID , $optionkey , true);
                
        if( empty($ut_page_hero_type) || empty($ut_background_slider_slides) ) :                
                                                                    
            /* get all necessary image ID's */
            $ut_gallery_images = ut_portfolio_extract_gallery_images_ids($postID);
            
            /* start output */
            if ( !empty( $ut_gallery_images ) && is_array( $ut_gallery_images )  ) : 
            
            /* needed vars */
            $api_images = NULL;
            $api_titles = NULL;
            $api_descriptions = NULL;
            
            /* javascript */
            $script = '
            
            api_images_'.$postID.' = [];
            api_titles_'.$postID.' = [];
            api_descriptions_'.$postID.' = []
            $.prettyPhoto.open(api_images,api_titles,api_descriptions);
            
            ';
            
            $counter = 1;				
            foreach ( $ut_gallery_images as $ID => $imagedata ) : 
                    
                    if( isset( $imagedata->guid ) && !empty($imagedata->guid) ) {
                                
                        $image = $imagedata->guid; // fallback to older wp versions
                        
                    } else {
                        
                        $image = wp_get_attachment_image_src($imagedata , 'single-post-thumbnail');
                        $image = $image[0];
                        
                    }
            
                    if( !empty($image[0]) ) : 
                                                    
                        $api_images .= "'".$image."'";
                                                
                    endif;
                                    
                    $api_titles .= "'".addslashes(get_the_title( $imagedata ))."'";
                    $api_descriptions .= "'".addslashes(get_post($imagedata)->post_excerpt)."'";				
                    
                    if($counter != count($ut_gallery_images) ) { $api_images .= ','; $api_titles .= ','; $api_descriptions .= ','; }
                    
            $counter++;
            endforeach;
            
            
            $script = "<script type='text/javascript'>
            /* <![CDATA[ */
            
            (function($){
                
                'use strict';
                
                $(document).ready(function(){
                    
                    var api_images_".$postID." = [ ".$api_images." ],
                        api_titles_".$postID." = [ ".$api_titles." ],
                        api_descriptions_".$postID." = [ ".$api_descriptions." ]
                    
                    
                    $('.ut-portfolio-popup-".$postID."').click(function(event){
                        
                        $.prettyPhoto.open(api_images_".$postID.",api_titles_".$postID.",api_descriptions_".$postID.");
                            
                        event.preventDefault();
                
                    });
                                    
                });
                        
            })(jQuery);
            
            /* ]]> */
            </script>";				
            
            return $script;
            
            endif;
            
		endif;
        
        if( !empty($ut_page_hero_type) && !empty($ut_background_slider_slides) && is_array($ut_background_slider_slides) ) {
        
            /* needed vars */
            $api_images = NULL;
            $api_titles = NULL;
            $api_descriptions = NULL;
            
            /* javascript */
            $script = '
            
            api_images_'.$postID.' = [];
            api_titles_'.$postID.' = [];
            api_descriptions_'.$postID.' = []
            $.prettyPhoto.open(api_images,api_titles,api_descriptions);
            
            ';
            
            $counter = 1;
            foreach ($ut_background_slider_slides as $key => $slide) :                
                                
                if( !empty($slide['image']) ) : 
                                                    
                    $api_images .= "'".$slide['image']."'";
                                            
                endif;
                                
                $api_titles .= "'".addslashes($slide['description'])."'";
                $api_descriptions .= "'".addslashes($slide['catchphrase'])."'";				
                
                if($counter != count($ut_background_slider_slides) ) { $api_images .= ','; $api_titles .= ','; $api_descriptions .= ','; }
                
                
            $counter++;
            endforeach;
            
            $script = "<script type='text/javascript'>
            /* <![CDATA[ */
            
            (function($){
                
                'use strict';
                
                $(document).ready(function(){
                    
                    var api_images_".$postID." = [ ".$api_images." ],
                        api_titles_".$postID." = [ ".$api_titles." ],
                        api_descriptions_".$postID." = [ ".$api_descriptions." ]
                    
                    
                    $('.ut-portfolio-popup-".$postID."').click(function(event){
                        
                        $.prettyPhoto.open(api_images_".$postID.",api_titles_".$postID.",api_descriptions_".$postID.");
                            
                        event.preventDefault();
                
                    });
                                    
                });
                        
            })(jQuery);
            
            /* ]]> */
            </script>";				
            
            return $script;
            
        
        }
		
    }
}


/*
|--------------------------------------------------------------------------
| Video Portfolio Post
|--------------------------------------------------------------------------
*/

if( !function_exists('ut_get_portfolio_format_video_content') ) {

    function ut_get_portfolio_format_video_content( $content ) {
        
        /* needed variables */
        $videofound = false;        
		$value = ut_portfolio_url_grabber( $content );
		
        /* check for vimeo */
        $value = ut_check_for_vimeo($value);           
                        
        if( !empty( $value ) ) {
            
            /* set video found */
            $videofound = true;
            
        }
                
        /* we have a meta value , lets check its syntax and return it */
        if( $videofound ) {
        
            if ( is_numeric( $value ) ) {
                
                $video = wp_get_attachment_url( $value );
                return do_shortcode( sprintf( '[video src="%s"]', $video ) );
                
            } elseif ( preg_match( '/' . get_shortcode_regex() . '/s', $value ) ) {

                return do_shortcode( $value );
                
            } else {
                
                return $value;
                
            }
        }
    }
}


if(!function_exists('ut_portfolio_url_grabber')) {
 
    function ut_portfolio_url_grabber( $string ) {
    
        $imageurl = !empty( $string ) ? preg_match_all('@((https?://)?([-\w]+\.[-\w\.]+)+\w(:\d+)?(/([-\w/_\.]*(\?\S+)?)?)*)@', $string , $match) : '';
        return isset($match[0][0]) ? ut_portfolio_add_http($match[0][0]) : '';
    
    }
    
}

if(!function_exists('ut_portfolio_add_http')) {

	function ut_portfolio_add_http($url) {
		
		if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
			$url = "http://" . $url;
		}
		return esc_url_raw($url);
	}
	
}

if(!function_exists('ut_check_for_vimeo')) {

	function ut_check_for_vimeo($url) {
		            
        if( preg_match("/(https?:\/\/)?(www\.)?(player\.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?\.*/", trim($url) , $matches) ){
                                                
            if( !empty($matches[5]) ) {
                
                return 'http://vimeo.com/' . $matches[5];
                              
            } else {
                
                return $url;
                
            }
                    
        } else {
                        
            return $url;
            
        }
		
	}
	
}

/*
|--------------------------------------------------------------------------
| Helper Function : Extract Attachment ID's from gallery shortcode
|--------------------------------------------------------------------------
*/
if ( !function_exists( 'ut_portfolio_extract_gallery_images_ids' ) ) {
    
    function ut_portfolio_extract_gallery_images_ids($postID = '') {
        
        if( empty($postID) ) {
            return false;    
        }
        
        $the_content = get_page($postID);
        $pattern = get_shortcode_regex();
        
        preg_match( "/$pattern/s", $the_content->post_content, $match );
        
        if( isset( $match[2] ) && ( "gallery" == $match[2] ) ) {
            
            $atts = $match[3];
            $atts = shortcode_parse_atts( $match[3] );
            $ut_gallery_images = isset( $atts['ids'] ) ? explode( ',', $atts['ids'] ) : get_children( 'post_type=attachment&post_mime_type=image&post_parent=' . $post->ID .'&order=ASC&orderby=menu_order ID' );
            
            $the_content = NULL;
            
            return $ut_gallery_images;
            
        }         
    
    }

}


/*
|--------------------------------------------------------------------------
| Hex to RGB Changer
|--------------------------------------------------------------------------
*/
if( !function_exists('ut_hex_to_rgb') ) :

	function ut_hex_to_rgb($hex) {
				
		$hex = preg_replace("/#/", "", $hex);
		$color = array();
	 
		if(strlen($hex) == 3) {
			$color['r'] = hexdec(substr($hex, 0, 1) . $r);
			$color['g'] = hexdec(substr($hex, 1, 1) . $g);
			$color['b'] = hexdec(substr($hex, 2, 1) . $b);
		}
		else if(strlen($hex) == 6) {
			$color['r'] = hexdec(substr($hex, 0, 2));
			$color['g'] = hexdec(substr($hex, 2, 2));
			$color['b'] = hexdec(substr($hex, 4, 2));
		}
		
		$color = implode(',', $color);
		
		return $color;
	}

endif;


/*
|--------------------------------------------------------------------------
| Custom JS Minifier
|--------------------------------------------------------------------------
*/

if ( !function_exists( 'ut_compress_java' ) ) {

	function ut_compress_java($buffer) {
		
		/* remove comments */
		$buffer = preg_replace("/((?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:\/\/.*))/", "", $buffer);
		/* remove tabs, spaces, newlines, etc. */
		$buffer = str_replace(array("\r\n","\r","\t","\n",'  ','    ','     '), '', $buffer);
		/* remove other spaces before/after ) */
		$buffer = preg_replace(array('(( )+\))','(\)( )+)'), ')', $buffer);
	
		return $buffer;
		
	}
	
}


/*
|--------------------------------------------------------------------------
| Generate Category List - Into Class
|--------------------------------------------------------------------------
*/
if( !function_exists('ut_generate_cat_list') ) :

	function ut_generate_cat_list( $categories , $separator = "," ) {
		
		if(!is_array($categories)) {
			return;
		}
		
		$return = '';
		$cats = count( $categories );
		$counter = 1;
		
		foreach( $categories as $category ) {
			
			$return .= $category->name;
			
			if( $counter < $cats) {
				$return .= $separator.' ';
			}
			
			$counter++;
			
		}
		
		return $return;
		
	}

endif;


/*
|--------------------------------------------------------------------------
| Add WMode
|--------------------------------------------------------------------------
*/
if( !function_exists('ut_add_video_wmode_transparent') ) :
	
		function ut_add_video_wmode_transparent( $html, $url, $attr ) {
			
		if ( strpos( $html, "<embed src=" ) !== false ) { 
			
			return str_replace('</param><embed', '</param><param name="wmode" value="opaque"></param><embed wmode="opaque" ', $html); 
		
		} elseif ( strpos ( $html, 'feature=oembed' ) !== false ) { 
			
			return str_replace( 'feature=oembed', 'feature=oembed&wmode=opaque', $html ); 
		
		} else { 
			
			return $html; 
		
		}
	}
	
	add_filter( 'oembed_result', 'ut_add_video_wmode_transparent', 10, 3);

endif;