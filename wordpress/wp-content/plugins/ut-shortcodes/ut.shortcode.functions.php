<?php

/*
 * CSS3 Animation Effects
 */

if( !function_exists('ut_recognized_animation_effects') ) :

	function ut_recognized_animation_effects() {
	 
	  return apply_filters( 'ut_recognized_animation_effects', array(
		'flash'             => 'Flash',
		'bounce'            => 'Bounce',
		'shake'             => 'Shake',
		'tada'              => 'Tada',
		'swing'             => 'Swing',
		'wobble'            => 'Wobble',
		'wiggle'            => 'Wiggle',
		'pulse'             => 'Pulse',
		'slideInUp'         => 'Slide In Up',
		'slideInLeft'       => 'Slide In Left',
		'slideInRight'      => 'Slide In Right',
		'slideInDown'       => 'Slide In Down',
		'flip'              => 'Flip',
		'flipInX'           => 'Flip In X',
		'flipInY'           => 'Flip In Y',
		'fadeIn'            => 'Fade In',
		'fadeInUp'          => 'Fade In Up',
		'fadeInDown'        => 'Fade In Down',
		'fadeInLeft'        => 'Fade In Left',
		'fadeInRight'       => 'Fade In Right',
		'fadeInUpBig'       => 'Fade In Up Big',
		'fadeInDownBig'     => 'Fade In Down Big',
		'fadeInLeftBig'     => 'Fade In Left Big',
		'fadeInRightBig'    => 'Fade In Right Big',
		'bounceIn'          => 'Bounce In',
		'bounceInDown'      => 'Bounce In Down',
		'bounceInUp'        => 'Bounce In Up',
		'bounceInLeft'      => 'Bounce In Left',
		'bounceInRight'     => 'Bounce In Right',
		'rotateIn'          => 'Rotate In',
		'rotateInDownLeft'  => 'Rotate In Down Left',
		'rotateInDownRight' => 'Rotate In Down Right',
		'rotateInUpLeft'    => 'Rotate In Up Left',
		'rotateInUpRight'   => 'Rotate In Up Right',
		'lightSpeedIn'      => 'LightSpeed In',
		'hinge'             => 'Hinge',
		'rollIn'            => 'Roll In'
	  ));
	  
	}

endif;

/*
 * HEX to RGB
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
 * Custom "get"_comments_popup_link
 */
if( !function_exists('ut_get_comments_popup_link') ) {
	
	function ut_get_comments_popup_link( $zero = false, $one = false, $more = false, $css_class = '', $none = false ) {
		
		global $wpcommentspopupfile, $wpcommentsjavascript;
	 
		$id = get_the_ID();
	 
		if ( false === $zero ) $zero = __( 'No Comments' , 'ut_shortcodes' );
		if ( false === $one ) $one = __( '1 Comment' , 'ut_shortcodes' );
		if ( false === $more ) $more = __( '% Comments' , 'ut_shortcodes' );
		if ( false === $none ) $none = __( 'Comments Off' , 'ut_shortcodes' );
	 
		$number = get_comments_number( $id );
	 
		$str = '';
	 
		if ( 0 == $number && !comments_open() && !pings_open() ) {
			$str = '<span' . ((!empty($css_class)) ? ' class="' . esc_attr( $css_class ) . '"' : '') . '>' . $none . '</span>';
			return $str;
		}
	 
		if ( post_password_required() ) {
			$str = __('Enter your password to view comments.' , 'ut_shortcodes' );
			return $str;
		}
	 
		$str = '<a href="';
		if ( $wpcommentsjavascript ) {
			if ( empty( $wpcommentspopupfile ) )
				$home = home_url();
			else
				$home = get_option('siteurl');
			$str .= $home . '/' . $wpcommentspopupfile . '?comments_popup=' . $id;
			$str .= '" onclick="wpopen(this.href); return false"';
		} else { // if comments_popup_script() is not in the template, display simple comment link
			if ( 0 == $number )
				$str .= get_permalink() . '#respond';
			else
				$str .= get_comments_link();
			$str .= '"';
		}
	 
		if ( !empty( $css_class ) ) {
			$str .= ' class="'.$css_class.'" ';
		}
		$title = the_title_attribute( array('echo' => 0 ) );
	 
		$str .= apply_filters( 'comments_popup_link_attributes', '' );
	 
		$str .= ' title="' . esc_attr( sprintf( __('Comment on %s'), $title ) ) . '">';
		$str .= ut_get_comments_number_str( $zero, $one, $more );
		$str .= '</a>';
		 
		return $str;
	}
}

if( !function_exists('ut_get_comments_number_str') ) {
	
	function ut_get_comments_number_str( $zero = false, $one = false, $more = false, $deprecated = '' ) {
		if ( !empty( $deprecated ) )
			_deprecated_argument( __FUNCTION__, '1.3' );
	 
		$number = get_comments_number();
	 
		if ( $number > 1 )
			$output = str_replace('%', number_format_i18n($number), ( false === $more ) ? __('% Comments') : $more);
		elseif ( $number == 0 )
			$output = ( false === $zero ) ? __('No Comments') : $zero;
		else // must be one
			$output = ( false === $one ) ? __('1 Comment') : $one;
	 
		return apply_filters('comments_number', $output, $number);
	}
	
}

/*
 * Fix Shortcodes
 */
 
if( !function_exists('ut_fix_shortcodes') ) {
    
    function ut_fix_shortcodes($content){   
	
		
        $block = join("|",array( "ut_animate_image" , "ut_button" , "ut_icon" , "ut_alert" , "ut_one_sixth" , "ut_one_sixth_last" , "ut_one_fifth" , "ut_one_fifth_last" , "ut_one_fourth" , "ut_one_fourth_last" , "ut_one_third" , "ut_one_third_last" , "ut_one_half" , "ut_one_half_last" , "ut_two_thirds" ,
								 "ut_two_thirds_last" , "ut_three_fourth" , "ut_three_fourth_last" , "ut_probar" , "ut_highlight" , "ut_tabgroup" , "ut_tab" , "ut_togglegroup" , "ut_toggle" , "ut_rotate_words" , "ut_fw_section" , "ut_showcase" , "ut_service_box" , "ut_quote_rotator" , 
								 "ut_quote" , "ut_quote_rotator_alt" , "ut_quote_alt" , "ut_service_column" , "ut_service_column_vertical" , "ut_count_up" , "ut_parallax_quote" , "ut_social" , "ut_social_media", "ut_client_group" , "ut_client" , "ut_single_quote" , "ut_highlight_section" , 'ut_video_testimonial', 'ut_video_testimonials',
                                 "video" ));
         
        $rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
        $rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
         
        return $rep;

    }
    
    add_filter('the_content', 'ut_fix_shortcodes');
        
}


/*
 * Button
 */
 
if( !function_exists('ut_create_button') ) { 
    
    function ut_create_button( $atts, $content = null ) {
        
        extract( shortcode_atts( array (
            'link'      =>  '#',
            'color'     =>  '',
            'class'     =>  '',
			'size'		=>  'small',
            'target'    =>  '_self',
			'shape'		=>  ''
        ), $atts));    
        
        $button = '';
        
        $button .= '<a target="'.$target.'" class="ut-btn '.$class.' '.$color.' '.$size.' '.$shape.'" href="'.$link.'">';
        $button .= $content;
        $button .= '</a>';
            
        return $button;
        
    }
    
    add_shortcode('ut_button', 'ut_create_button');
	    
}


/*
 * Icons
 */

if( !function_exists('ut_create_icon') ) { 
 
	function ut_create_icon($atts, $content = null) {
				
		extract(shortcode_atts(array(
			 
			 'icon' 	=> 'fa-off',
			 'size'     => 'fa-4',
			 'color'    => '',
			 'bgcolor'  => '#CCC',
			 'border'	=> 'none',
			 'spin'		=> '',
			 'rotate'	=> '',
			 'link'		=> '',
			 'target'	=> 'self',
			 'align'    => 'alignnone',
			 'class'	=> ''	
			 
		), $atts));

			$finalicon = NULL;
			$iconclass = NULL;
			
			if( $border == 'none' ) {
				
				/* default icon */
				$classes    = array('icon' , 'size' , 'spin', 'rotate', 'class');
	
				$style = (!empty($color)) ? 'style="color:'.$color.'"' : '';
				
				$span_open  = '<span class="'.$align.' ut-custom-icon">';
				$span_close = '</span>';
				
				foreach($atts as $key => $att) {
					
					if( !empty($att) && in_array($key, $classes) )
					$iconclass .= $att.' ';
					
				}
				
				if(!empty($link)) {
					
					$finalicon .= $span_open .'<a class="ut-custom-icon-link" target="_'.$target.'" href="'.$link.'"><i class="fa '.trim($iconclass).'" '.$style.'></i></a>'. $span_close;
					
				} else {
					
					$finalicon .= $span_open .'<i class="fa '.trim($iconclass).'" '.$style.'></i>'. $span_close;
					
				}
				
			} else {
			
				
				/* stacked icon */
				$classes    = array('icon' , 'spin', 'rotate', 'class');
				$style 		= (!empty($color)) ? 'style="color:'.$color.'"' : '';
				
				foreach($atts as $key => $att) {
					
					if( !empty($att) && in_array($key, $classes) )
					$iconclass .= $att.' ';
					
				}
				
				/* start output */
				$finalicon .= '<span class="fa-stack ut-custom-icon '.$size.' '.$align.'">';
					
					if(!empty($link)) { $finalicon .= '<a target="_'.$target.'" href="'.$link.'">'; }
												
						$finalicon .= '<i class="fa fa-' . $border . ' fa-stack-2x" style="color:' . $bgcolor . '"></i>';
						$finalicon .= '<i class="fa '.trim($iconclass).' fa-stack-1x" ' . $style . '></i>';
						
					if(!empty($link)) { $finalicon .= '</a>'; }
				
				$finalicon .= '</span>';
			
			}
					
		
		return $finalicon;
		
	}
	add_shortcode('ut_icon', 'ut_create_icon');

}

/*
 * Spacer
 */
 
if( !function_exists('ut_create_spacer') ) {  

	function ut_create_spacer( $atts ) {
		
		extract(shortcode_atts(array(			
            	'class'  => '',
				'margin_bottom' => '',
				'margin_top' => ''		
            ), $atts));
            
            /* create style */
            $style = 'style="';
            
            if(!empty($margin_bottom)) {
                $margin_bottom = is_numeric($margin_bottom) ? $margin_bottom .'px' : $margin_bottom ; 
                $style .= 'margin-bottom: '.$margin_bottom.';';
            }
            
            if(!empty($margin_top)) {
                $margin_top = is_numeric($margin_top) ? $margin_top .'px' : $margin_top ; 
                $style .= 'margin-top: '.$margin_top.';';
            }
            
            $style .= '"';            
            
			return '<div class="ut-spacer '.$class.'" '.$style.'></div>';
			
	}
	
	add_shortcode('ut_spacer', 'ut_create_spacer');
	
}

/*
 * Alerts
 */
 
if( !function_exists('ut_create_alert') ) {  

	function ut_create_alert( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
				'class'  => '',
				'color'  => 'white',
				'effect' => ''
			), $atts));
			
			/* animation effect */
			$dataeffect = $animated = NULL;
			if( !empty( $effect ) ) {
	
				$dataeffect = 'data-effect="'.$effect.'"';
				$animated  	= 'ut-animate-element animated';
				
			}
			
			return '<div '.$dataeffect.' class="ut-alert '.$color.' '.$class.' '.$animated.'">' . do_shortcode($content) . '</div>';
			
	}
	
	add_shortcode('ut_alert', 'ut_create_alert');
	
}


/*
 * Image Animation
 */

if( !function_exists('ut_animate_image') ) {  

	function ut_animate_image( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
				'align'			=> 'left',
				'class' 		=> '',
				'image'			=> '',
				'alt'			=> '',
				'margin_top'	=> '',
				'margin_bottom'	=> '',
				'effect' 		=> 'fadeIn'
			), $atts));
		
		if( empty($image) ) {
			return __( 'No Image Selected' , 'ut_shortcodes' );
		}
		
		$extrastyle = NULL;
		
		if( !empty($margin_top) ) {
			$extrastyle .= 'margin-top:'.$margin_top.'px; ';
		}
				
		if( !empty($margin_bottom) ) {
			$extrastyle .= 'margin-bottom:'.$margin_bottom.'px; ';
		}
				
		$out = '<div style="text-align:' . $align . '; '.$extrastyle.'">';
			$out .= '<img alt="' . $alt . '" class="ut-animate-image animated '. $class .'"  data-effecttype="image" data-effect="' . $effect . '" src="'. $image .'" />';
		$out .= '</div>';
				
		return $out;
		
		
	}
	
	add_shortcode('ut_animate_image', 'ut_animate_image');
	
}


/*
 * One Sixth Grid
 */

if( !function_exists('ut_one_sixth') ) { 
 
	function ut_one_sixth( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-one-sixth '.$class.' '.$animated.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ut_one_sixth', 'ut_one_sixth');

}

if( !function_exists('ut_one_sixth_last') ) { 
 
	function ut_one_sixth_last( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-one-sixth ut-column-last '.$class.' '.$animated.'">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ut_one_sixth_last', 'ut_one_sixth_last');

}

/*
 * One Fifth Grid
 */

if( !function_exists('ut_one_fifth') ) { 
 
	function ut_one_fifth( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-one-fifth '.$class.' '.$animated.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ut_one_fifth', 'ut_one_fifth');

}

if( !function_exists('ut_one_fifth_last') ) { 
 
	function ut_one_fifth_last( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-one-fifth ut-column-last '.$class.' '.$animated.'">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
    
	add_shortcode('ut_one_fifth_last', 'ut_one_fifth_last');

}


/*
 * One Fourth Grid
 */

if( !function_exists('ut_one_fourth') ) { 
 
	function ut_one_fourth( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-one-fourth '.$class.' '.$animated.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ut_one_fourth', 'ut_one_fourth');

}

if( !function_exists('ut_one_fourth_last') ) { 
 
	function ut_one_fourth_last( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-one-fourth ut-column-last '.$class.' '.$animated.'">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ut_one_fourth_last', 'ut_one_fourth_last');

}

/*
 * One Third Grid
 */

if( !function_exists('ut_one_third') ) { 
 
	function ut_one_third( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-one-third '.$class.' '.$animated.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ut_one_third', 'ut_one_third');

}

if( !function_exists('ut_one_third_last') ) { 
 
	function ut_one_third_last( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-one-third ut-column-last '.$class.' '.$animated.'">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ut_one_third_last', 'ut_one_third_last');

}

/*
 * One Half Grid
 */

if( !function_exists('ut_one_half') ) { 
 
	function ut_one_half( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-one-half '.$class.' '.$animated.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ut_one_half', 'ut_one_half');

}

if( !function_exists('ut_one_half_last') ) { 
 
	function ut_one_half_last( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-one-half ut-column-last '.$class.' '.$animated.'">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ut_one_half_last', 'ut_one_half_last');

}


/*
 * Two Thirds Grid
 */

if( !function_exists('ut_two_thirds') ) { 
 
	function ut_two_thirds( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-two-thirds '.$class.' '.$animated.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ut_two_thirds', 'ut_two_thirds');

}

if( !function_exists('ut_two_thirds_last') ) { 
 
	function ut_two_thirds_last( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-two-thirds ut-column-last '.$class.' '.$animated.'">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ut_two_thirds_last', 'ut_two_thirds_last');

}

/*
 * Three Fourth Grid
 */

if( !function_exists('ut_three_fourths') ) { 
 
	function ut_three_fourths( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-three-fourths '.$class.' '.$animated.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('ut_three_fourths', 'ut_three_fourths');

}

if( !function_exists('ut_three_fourths_last') ) { 
 
	function ut_three_fourths_last( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'effect'	=> ''
		), $atts));
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		return '<div '.$dataeffect.' class="ut-three-fourths ut-column-last '.$class.' '.$animated.'">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('ut_three_fourths_last', 'ut_three_fourths_last');

}


/*
 * Progress Bar
 */

if( !function_exists('ut_probar') ) { 

	function ut_probar( $atts, $content = null ) {
		
	   extract(shortcode_atts(array(
				
				'class'     => '',
				'color'		=> '',
				'info'      => '',
				'width'     => '50'
	
			), $atts));
			
			// strip % if user has entered it
			$width = str_replace('%' , '' , $width);
			
			// optional color
			$color = !empty($color) ? 'style="background:'.$color.';"' : '';
			
			$skillbar = '<div class="ut-skill '.$class.'">';
				
				if( !empty( $info ) ) {
					$skillbar .= '<span class="ut-skill-name">' . $info . '</span>';
				}
				
				$skillbar .= '<div class="ut-skill-bar">';
					$skillbar .= '<div class="ut-skill-overlay ut-skill-active" data-effecttype="skillbar" data-width="'.$width.'" '.$color.'>';
						$skillbar .= '<span class="ut-skill-percent">'.$width.'%</span>';			
					$skillbar .= '</div>';
				$skillbar .= '</div>';
				
			$skillbar .= '</div>';
					
			return $skillbar;
	
	}
	add_shortcode('ut_probar', 'ut_probar');

}


/*
 * Highlights
 */ 

if( !function_exists('ut_highlight') ) { 
 
	function ut_highlight($atts, $content = null) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'color'	=> '',
			 'bgcolor'	=> ''
		), $atts));
		
		$extraStyle = 'style="';
		
		if( !empty($color) ) {
			$extraStyle .= 'color: ' . $color . ' ;';
		}
		
		if( !empty($bgcolor) ) {
			$extraStyle .= 'background: ' . $bgcolor . ' ;';
		}
		
		$extraStyle .= '"';
		
		
		return '<span ' . $extraStyle . ' class="ut-highlight '.$class.'">'.do_shortcode($content).'</span>';
	}
	add_shortcode('ut_highlight', 'ut_highlight');
}

/*
 * Tabs
 */ 

if( !function_exists('ut_tabgroup') ) {

	function ut_tabgroup( $atts, $content ){
			
			extract(shortcode_atts(array(
				'width'		=> '',
				'last'		=> 'false',
				'class' 	=> ''
			), $atts));	
			
			$grid = array(  'third'  => 'ut-one-third',
							'fourth' => 'ut-one-fourth',
					   		'half'	 => 'ut-one-half' );
		
			$last = $last == 'true' ? 'ut-column-last' : '';
			$return = '';
			
			/* fallback */
			$gridwidth = !empty($grid[$width]) ? $grid[$width] : '';
			
			
			$GLOBALS['tab_count'] = 0;
			$GLOBALS['tabs'] = array();
			
			do_shortcode( $content );		
		
			if( is_array( $GLOBALS['tabs'] ) ){
				
				$tabcount = 1;
				
				foreach( $GLOBALS['tabs'] as $tab ){
					
					$active = ($tabcount == 1) ? 'class="active"' : '';
					$tabs[]     = '<li '.$active.'><a href="#'.$tab['id'].'Tab" data-toggle="tab">'.$tab['title'].'</a></li>';
					
					$active = ($tabcount == 1) ? 'active' : '';
					$panes[]    = '<div class="tab-pane '.$active.' '.$tab['class'].' clearfix" id="'.$tab['id'].'Tab">'.do_shortcode($tab['content']).'</div>';
					
					$tabcount++;
					
				}
				
				if( !empty($width) || !empty($class) ) {
					$return .= '<div class="' . $gridwidth . ' ' . $class . ' ' . $last . '">';
				}
				
				$return .= "\n".'<!-- the tabs --><ul class="ut-nav-tabs clearfix">'.implode( "\n", $tabs ).'</ul>'."\n".'<!-- tab "panes" --><div class="ut-tab-content entry-content clearfix">'.implode( "\n", $panes ).'</div>'."\n";
				
				if( !empty($width) ) {
					$return .= '</div>';
				}
				
				
			}
		
		return $return;
	
	}
	add_shortcode( 'ut_tabgroup', 'ut_tabgroup' );

}

if( !function_exists('ut_tab') ) {

	function ut_tab( $atts, $content ){
		
		extract(shortcode_atts(array(
			'title' => '%d',
			'id' => '%d',
			'class' => ''
		), $atts));
		
				
		$x = $GLOBALS['tab_count'];
		$GLOBALS['tabs'][$x] = array(
			'title' => sprintf( $title, $GLOBALS['tab_count'] ),
			'content' =>  $content,
			'id' =>  $id,        
			'class' => $class );
		
		$GLOBALS['tab_count']++;
	}
	add_shortcode( 'ut_tab', 'ut_tab' );
}

/*
 * Quote Rotator
 */ 

if( !function_exists('ut_quote_rotator') ) {

	function ut_quote_rotator( $atts, $content ){
			
		extract(shortcode_atts(array(
			'width'		=> '',
			'last'		=> 'false',
			'speed'		=> '9000',
			'autoplay'	=> 'on',
			'randomize'	=> 'off',
			'class' 	=> ''
		), $atts));		
		
		$grid = array( 'third'  	=> 'ut-one-third',
					   'fourth' 	=> 'ut-one-fourth',
					   'half'		=> 'ut-one-half',
					   'fullwdith' 	=> '');
		
		$last = $last == 'true' ? 'ut-column-last' : '';
		
		/* fallback */
		$gridwidth = !empty($grid[$width]) ? $grid[$width] : '';
				
		/* set unique ID for this rotator */
		$id = uniqid("utquote_");
		
		/* autoplay */
		$autoplay = ($autoplay == 'off') ? 'slideshow: false,' : NULL; 
		
		/* randomize */
		$randomize = ($randomize == 'on') ? 'randomize: true,' : NULL; 
		
		$script = '
		<script type="text/javascript">
		/* <![CDATA[ */
		
		(function($){

			$(document).ready(function(){
				
				$("#avatarSlider_' . $id . '").flexslider({
					animation: "fade",
					'.$autoplay.'
					directionNav:false,
					controlNav:false,
					smoothHeight: true,
					animationLoop:true,
					slideshowSpeed: '.$speed.',		
					slideToStart: 0,
					prevText: "",
    				nextText: ""   
				});
				
				$("#quoteSlider_' . $id . '").flexslider({
					animation: "slide",
					'.$autoplay.'
					'.$randomize.'
					directionNav:true,
					controlNav:false,		
					smoothHeight: true,
					animationLoop:true,
					sync: "#avatarSlider_' . $id . '",
					slideshowSpeed: '.$speed.',			
					slideToStart: 0,
					prevText: "",
    				nextText: ""   
				});
		
			});

		})(jQuery);
		
		 /* ]]> */	
		</script>';
		
		$quote_rotator  = '<div class="ut-testimonials ' . $gridwidth . ' ' . $last . '">';
			$quote_rotator .= '<div class="ut-rotate-avatar flexslider" id="avatarSlider_' . $id . '">';	
				$quote_rotator .= '<ul class="slides">';
					$quote_rotator .= do_shortcode( $content );
				$quote_rotator .= '</ul>';			
			$quote_rotator .= '</div>';	
		
			$quote_rotator  .= '<div class="ut-rotate-quote" id="quoteSlider_' . $id . '">';	
				$quote_rotator .= '<ul class="slides">';
					$quote_rotator .= do_shortcode( $content );
				$quote_rotator .= '</ul>';
			$quote_rotator .= '</div>';
		$quote_rotator .= '</div>';
		
		return $script . $quote_rotator;
			
	}
	
	add_shortcode( 'ut_quote_rotator', 'ut_quote_rotator' );

}

if( !function_exists('ut_quote') ) {

	function ut_quote( $atts, $content ){
		
		extract(shortcode_atts(array(
			'author' => '',
			'avatar' => ''
		), $atts));
		
		if( !empty($avatar) ) {		
			$avatar = ut_resize( $avatar , '200' , '200', true , true , true );
		}
		
		$quote = '<li>';
			
			if( !empty($avatar) ) {
				$quote .= '<img alt="' . $author . '" class="ut-quote-avatar" src="' . $avatar . '" />';
			}
			
			if( !empty($content) ) {
				$quote .= '<h3 class="ut-quote-comment">' . do_shortcode( $content ) . '</h3>';
			}
			
			if( !empty($author) ) {
				$quote .= '<span class="ut-quote-name">' . $author . '</span>';
			}
			
		$quote .= '</li>';
		
		return $quote;		
		
	}
	
	add_shortcode( 'ut_quote', 'ut_quote' );
	
}

/*
 * Quote Rotator Alt ( without Avatar )
 */ 

if( !function_exists('ut_quote_rotator_alt') ) {

	function ut_quote_rotator_alt( $atts, $content ){
			
		extract(shortcode_atts(array(
			'width'		=> '',
			'last'		=> 'false',
			'speed'		=> '9000',
			'autoplay'	=> 'on',
			'randomize'	=> 'off',
			'class' 	=> ''
		), $atts));		
		
		$grid = array( 'third'  	=> 'ut-one-third',
					   'fourth' 	=> 'ut-one-fourth',
					   'half'		=> 'ut-one-half',
					   'fullwdith' 	=> '');
		
		$last = $last == 'true' ? 'ut-column-last' : '';
		
		/* fallback */
		$gridwidth = !empty($grid[$width]) ? $grid[$width] : '';
		
		/* autoplay */
		$autoplay = ($autoplay == 'off') ? 'slideshow: false,' : NULL;
		
		/* randomize */
		$randomize = ($randomize == 'on') ? 'randomize: true,' : NULL; 
		
		/* set unique ID for this rotator */
		$id = uniqid("utquote_");
		
		$script = '
		<script type="text/javascript">
		/* <![CDATA[ */
		
		(function($){

			$(document).ready(function(){
								
				$("#quoteSlider_' . $id . '").flexslider({
					useCSS: false,  
					animation: "slide",
					'.$autoplay.'
					'.$randomize.'
					directionNav:true,
					controlNav:false,		
					smoothHeight: true,
					animationLoop:true,
					slideshowSpeed: '.$speed.',
    				prevText: "",
    				nextText: ""   
				});
		
			});

		})(jQuery);
		
		 /* ]]> */	
		</script>';
		
		$quote_rotator  = '<div class="ut-testimonials ' . $gridwidth . ' ' . $last . '">';	
			$quote_rotator  .= '<div class="ut-rotate-quote-alt flexslider" id="quoteSlider_' . $id . '">';	
				$quote_rotator .= '<ul class="slides">';
					$quote_rotator .= do_shortcode( $content );
				$quote_rotator .= '</ul>';
			$quote_rotator .= '</div>';
		$quote_rotator .= '</div>';
		
		return $script . $quote_rotator;
			
	}
	
	add_shortcode( 'ut_quote_rotator_alt', 'ut_quote_rotator_alt' );

}

if( !function_exists('ut_quote_alt') ) {

	function ut_quote_alt( $atts, $content ){
		
		extract(shortcode_atts(array(
			'author' => ''
		), $atts));
		
		$quote = '<li><i class="ut-rq-icon fa fa-quote-right"></i><h2 class="ut-quote-comment">' . do_shortcode( $content ) . '</h2><span class="ut-quote-name">' . $author . '</span></li>';
		
		return $quote;		
		
	}
	
	add_shortcode( 'ut_quote_alt', 'ut_quote_alt' );
	
}

/*
 * Video Testimonials
 */

$GLOBALS['ut_video_testimonial_total_count'] = NULL;
$GLOBALS['ut_video_testimonial_count'] = NULL; 
  
if( !function_exists('ut_video_testimonials') ) {

	function ut_video_testimonials( $atts, $content ){
    
        extract(shortcode_atts(array(
                'class' => ''
        ), $atts));
        
        global $ut_video_testimonial_total_count , $ut_video_testimonial_count; 
        
        $ut_video_testimonial_total_count = substr_count($content, '[/ut_video_testimonial]');
        $ut_video_testimonial_count = 0;
        
        $testimonials = NULL;
        
        $testimonials.= '<div class="ut-video-testimonial-wrapper grid-100 tablet-grid-100 mobile-grid-100 grid-parent ' . $class . '">';
            
            $testimonials.= do_shortcode( $content );
            
        $testimonials.= '</div>';
        
        return $testimonials;
        
    }    
    
    add_shortcode( 'ut_video_testimonials', 'ut_video_testimonials' );
	
}

if( !function_exists('ut_video_testimonial') ) {

	function ut_video_testimonial( $atts, $content ){
        
        extract(shortcode_atts(array(
                'author'    => '',
                'company'   => '',
                'box'       => 'off',
                'poster'    => '',
                'width'     => '800',
                'height'    => '450',
                'style'     => 'dark',
                'class'     => ''
        ), $atts));
        
        $grid = array(  1 => '100',
						2 => '50',
						3 => '33'					
				);
        
        global $ut_video_testimonial_total_count , $ut_video_testimonial_count; 
        
        /* fallback if there is no global value */
        $ut_video_testimonial_total_count = empty($ut_video_testimonial_total_count) ? 3 : $ut_video_testimonial_total_count;
        
        $grid_items = ( $ut_video_testimonial_total_count >= 3 ) ? 3 : $ut_video_testimonial_total_count;
                
        $testimonial = NULL;
        
        $style = ( $box == 'on' ) ? 'ut-video-box-' . $style : '';
        
        $testimonial.= '<div class="grid-'.$grid[$grid_items].' tablet-grid-'.$grid[$grid_items].' mobile-grid-100">';
            
            $testimonial.= '<div class="ut-video-testimonial ' . ( ($box == 'on') ? 'ut-video-testimonial-boxed' : '' ) . ' ' . $style . '">';
                
                $testimonial .= '<a class="ut-load-vtestimonial" href="#?custom=true&amp;width='.$width.'&amp;height='.$height.'">';
                    
                    if( !empty($poster) ) {
                        $testimonial .= '<img alt="'.( !empty($author) ? $author : __('Video Testimonial','ut_shortcodes') ).'" src="'.$poster.'" />';
                    }
                    
                    /* remove html tags, we need plain URL's */
                    $content = strip_tags($content);                    
                    $testimonial .= '<div style="display:none;">'.trim($content).'</div>';
                    
                $testimonial .= '</a>';
                                
                if( !empty($author) ) {
                    $testimonial.= '<h3>' . $author . '</h3>';
                }
                
                if( !empty($company) ) {
                    $testimonial.= '<span>' . $company . '</span>';
                }                
                
            $testimonial.= '</div>';
            
        $testimonial.= '</div>';
        
        /* global counter */
        $ut_video_testimonial_count++;
        
        /* if counter has reached the maximum of 3 per row , decrease the total counter */
        if( $ut_video_testimonial_count ==  3 && $ut_video_testimonial_total_count > 3) {
            $ut_video_testimonial_total_count = $ut_video_testimonial_total_count - $ut_video_testimonial_count;
            $ut_video_testimonial_count = 0;
        } 	
        
        return $testimonial;
        
    }
    
    add_shortcode( 'ut_video_testimonial', 'ut_video_testimonial' );
    
}


/*
 * Social Media List
 */ 
 
$GLOBALS['ut_social_total_count'] = NULL;
$GLOBALS['ut_social_count'] = NULL;

if( !function_exists('ut_social_media') ) {

	function ut_social_media( $atts, $content ){
			
		extract(shortcode_atts(array(
			'class' => ''
		), $atts));		
		
		global $ut_social_total_count, $ut_social_count;
		
		$ut_social_total_count = substr_count($content, '[/ut_social]');
		$ut_social_count = 0;
		
		$social  = '<ul class="ut-social-network ' . $class . '">';
			$social .= do_shortcode( $content );
		$social .= '</ul>';
		
		return $social;
			
	}
	
	add_shortcode( 'ut_social_media', 'ut_social_media' );

}

if( !function_exists('ut_social') ) {

	function ut_social( $atts, $content ){
		
		extract(shortcode_atts(array(
			'title'		=> '',
			'url' 		=> '#',
			'icon'		=> 'fa-facebook',
			'target'	=> '_blank',
			'avatar' 	=> '',
			'class'		=> ''			
		), $atts));		
		
		$grid = array(  1 => '100',
						2 => '25',
						3 => '33',
						4 => '25',
						5 => '20' );
		
		global $ut_social_total_count, $ut_social_count;
		
		$prefix = NULL;
		$suffix = NULL;		
						
		//fallback if there is no global value
		$ut_social_total_count = empty($ut_social_total_count) ? 5 : $ut_social_total_count;
				
		// special case if we only have 2 items
		if( $ut_social_total_count == 2 && $ut_social_count == 0 ) {
			$prefix = "prefix-25 tablet-prefix-25";
		}
		
		if( $ut_social_total_count == 2 && $ut_social_count == 1 ) {
			$suffix = "suffix-25 tablet-suffix-25";
		}		
		
		$grid_items = ( $ut_social_total_count >= 5 ) ? 5 : $ut_social_total_count;
				
		$profile  = '<li class="grid-'.$grid[$grid_items].' tablet-grid-'.$grid[$grid_items].' mobile-grid-100 ' . $class . ' '.$prefix.' '.$suffix.'">';
			$profile .= '<a target="'.$target.'" href="' . $url . '" class="ut-social-link">';
            	$profile .= '<span class="ut-social-icon"><i class="fa ' . $icon . ' fa-4x"></i></span>';
            	
				if( !empty($title) ) {
					$profile .= '<h3 class="ut-social-title">' . $title . '</h3>';
				}
				
				if( !empty($content) ) {
					$profile .= '<span class="ut-social-info">' . do_shortcode( $content ) . '</span>';
				}
				
			$profile .= '</a>';
        $profile .= '</li>';
		
		/* global counter */
		$ut_social_count++;		
		
		/* if counter has reached the maximum of 5 per row , decrease the total counter */
		if( $ut_social_count ==  5 && $ut_social_total_count > 5) {
			$ut_social_total_count = $ut_social_total_count - $ut_social_count;
			$ut_social_count = 1;
		}
					
		return $profile;		
		
	}
	
	add_shortcode( 'ut_social', 'ut_social' );
	
}


/*
 * Client Group 
 */ 
 
$GLOBALS['ut_client_total_count'] = NULL;
$GLOBALS['ut_client_count'] = NULL;
$GLOBALS['ut_client_carousel'] = FALSE;

if( !function_exists('ut_client_group') ) {

	function ut_client_group( $atts, $content ){
			
		extract(shortcode_atts(array(
			'class'     => '',
            'carousel'  => 'off'
		), $atts));		
		
		global $ut_client_total_count, $ut_client_count, $ut_client_carousel;
		
		$ut_client_total_count = substr_count($content, '[/ut_client]');
		$ut_client_count = 0;
		$social = NULL;
        
        $id = uniqid("utcc_");
        
        if( !empty( $carousel ) && $carousel == 'on' ) {
           
           $ut_client_carousel = TRUE;
           
           $social .= '
           <script type="text/javascript">
			    
                (function($){
                                        
                    $(document).ready(function(){
                
			            $( "#'.$id.'" ).elastislide();
                    
                    });
                        
                })(jQuery);
			
		  </script>'; 
          
          $social  .= '<ul id="'.$id.'" class="ut-brands ' . $class . ' elastislide-list">';
			  $social .= do_shortcode( $content );
		  $social .= '</ul>';          
          
        } else {
            
          $social  .= '<div class="ut-brands ' . $class . '">';
			  $social .= do_shortcode( $content );
		  $social .= '</div>';        
        
        }
        
		return $social;
		
        $ut_client_carousel = FALSE;
        	
	}
	
	add_shortcode( 'ut_client_group', 'ut_client_group' );

}

if( !function_exists('ut_client') ) {

	function ut_client( $atts, $content ){
		
		extract(shortcode_atts(array(
			'name'		=> '',
			'logo'		=> '',
			'url' 		=> '',
            'target'    => '_blank',
			'class'		=> ''		
		), $atts));		
		
		$grid = array(  1 => '100',
						2 => '50',
						3 => '33',
						4 => '25',
						5 => '20' );
		
		global $ut_client_total_count, $ut_client_count, $ut_client_carousel;
        
        if( $ut_client_carousel ) {
            
            $client  = '<li class="' . $class . '">';
            
                if( !empty($url) ) {
                    $client .= '<a target="' . $target . '" href="' . $url . '">';
                }
                
                $client .= '<img alt="' . $name  . '" src="' . $logo . '">';
                
                if( !empty($url) ) {	
                    $client .= '</a>';
                }            
            
            $client .= '</li>'; 
            
        } else {            
            
            //fallback if there is no global value
            $ut_client_total_count = empty($ut_client_total_count) ? 5 : $ut_client_total_count;
            
            $grid_items = ( $ut_client_total_count >= 5 ) ? 5 : $ut_client_total_count;
                    
            $client  = '<div class="grid-'.$grid[$grid_items].' tablet-grid-'.$grid[$grid_items].' mobile-grid-50 ' . $class . '">';
                
                if( !empty($url) ) {
                    $client .= '<a target="' . $target . '" href="' . $url . '">';
                }
                    $client .= '<img alt="' . $name  . '" src="' . $logo . '">';
                
                if( !empty($url) ) {	
                    $client .= '</a>';
                }
                
            $client .= '</div>';
            
            /* global counter */
            $ut_client_count++;		
                        
            /* if counter has reached the maximum of 5 per row , decrease the total counter */
            if( $ut_client_count ==  5 && $ut_client_total_count > 5) {
                $ut_client_total_count = $ut_client_total_count - $ut_client_count;
                $ut_client_count = 0;
            }        
          
        }
		
        return $client;		
		
	}
	
	add_shortcode( 'ut_client', 'ut_client' );
	
}

/*
 * Toggles
 */ 
 
if( !function_exists('ut_togglegroup') ) {
	
	$togglegroupcount = 0;
	
	function ut_togglegroup( $atts, $content ){
		
		global $togglegroupcount;
		
		extract(shortcode_atts(array(
				'width'		=> '',
				'last'		=> 'false',
				'class'     => ''
		), $atts));
		
		$grid = array( 'third'  => 'ut-one-third',
					   'fourth' => 'ut-one-fourth',
					   'half'	=> 'ut-one-half');
		
		$last = $last == 'true' ? 'ut-column-last' : '';
		$return = '';
		
		/* fallback */
		$gridwidth = !empty($grid[$width]) ? $grid[$width] : '';		
		
		$togglegroupcount++;
		
		if( !empty($width) || !empty($class) ) {
			$return .= '<div class="' . $gridwidth . ' ' . $class . ' ' . $last . '">';
		}
		   
		$return .= '<div id="ut-accordion-parent-'.$togglegroupcount.'" class="ut-accordion"><div class="ut-accordion-group">'.do_shortcode($content).'</div></div>';
		
		if( !empty($width) || !empty($class) ) {
			$return .= '</div>';
		}
		
		
		return $return;
	
	}
	add_shortcode( 'ut_togglegroup', 'ut_togglegroup' );
}

if( !function_exists('ut_toggle') ) {

	$togglecount = 0;

	function ut_toggle( $atts, $content = null ) {
		
		global $togglecount , $togglegroupcount;    
			
		extract(shortcode_atts(array(
			 'title' 	=> '',
			 'state' 	=> 'closed',
			 'class'    => ''
		), $atts));
		
		$output = '';
		
		$hstate = ($state == 'closed') ? 'collapsed' : ''; 
		$state  = ($state == 'closed') ? 'collapse' : 'collapse in'; 
		$active = ($state == 'collapse') ? '' : 'active'; 
		
		$output .= '<div class="ut-accordion-heading '.$class.'">';
			$output .= '<a data-parent="#ut-accordion-parent-'.$togglegroupcount.'" class="accordion-toggle '.$hstate.' '.$active.'" data-toggle="collapse" data-target="#accordion' .$togglecount. '">';
				$output .= $title;
			$output .= '</a>';
		$output .= '</div>';
		$output .= '<div id="accordion' .$togglecount. '" class="ut-accordion-body '.$state.'">';
			$output .= '<div class="ut-accordion-inner entry-content clearfix">';
				$output .= do_shortcode($content);
			$output .= '</div>';
		$output .= '</div>';
		
		$togglecount++;
		
		return $output;
		
	}
	add_shortcode('ut_toggle', 'ut_toggle');
}

/*
 * Blockquotes
 */ 

if( !function_exists('ut_blockquote_left') ) { 

	function ut_blockquote_left($atts, $content = null) {
		
		extract(shortcode_atts(array(
			 'class'    => ''
		), $atts));		
		
		return '<div class="ut-blockquote-left '.$class.'"><blockquote><p>'.do_shortcode($content).'</p></blockquote></div>';
	}
	add_shortcode('ut_blockquote_left', 'ut_blockquote_left');
}



if( !function_exists('ut_blockquote_right') ) { 

	function ut_blockquote_right($atts, $content = null) {
		
		extract(shortcode_atts(array(
			 'class'    => ''
		), $atts));	
		
		return '<div class="ut-blockquote-right '.$class.'"><blockquote><p>'.do_shortcode($content).'</p></blockquote></div>';
	}
	add_shortcode('ut_blockquote_right', 'ut_blockquote_right');
}

/*
 * Title Divider
 */ 
 
if( !function_exists('ut_title_divider') ) { 

	function ut_title_divider($atts, $content = null) {
		
		extract(shortcode_atts(array(
             'margin_top'	=> '',
			 'class'    	=> ''
		), $atts));
		
		$style = ( !empty($margin_top) ) ? 'style="margin-top:' . $margin_top . 'px;"' : ''; 
		
		return '<h6 class="ut-title-divider ' . $class . '" ' . $style . '><span>'.do_shortcode($content).'</span></h6>';
		
	}
	
	add_shortcode('ut_title_divider', 'ut_title_divider');
	
}

/*
 * Word Rotator
 */ 
 
$GLOBALS['ut_wr_count'] = 1;
if( !function_exists('ut_word_rotator') ) { 

	function ut_word_rotator($atts, $content = null) {
		
        extract(shortcode_atts(array(
			 'timer'    => 2000 ,
             'class'    => ''
		), $atts));
        
        
        $x = $GLOBALS['ut_wr_count'];
        
        /* split up words */
        $words = explode( ',' , $content );
        
        /* final rotator word variable*/
        $rotator_words = '';
        
        /* loop through word array and concatinate final string*/
        foreach( $words as $key => $word ) {
            
            $rotator_words .= '\'' . trim($word) . '\',';
            
        }
        
        /* cut of last comma */ 
        $rotator_words = substr($rotator_words,0,-1);
        
        /* needed javascript */
        $script = '
        <script type="text/javascript">
        /* <![CDATA[ */
        
        (function($){
        
            "use strict";
            
            var ut_word_rotator = function() {
                
                var ut_rotator_words = [
                   ' . $rotator_words . '
                ] ,
                counter = 0;                
                
                setInterval(function() {
                $("#ut_word_rotator_' . $x . '").fadeOut(function(){
                        $(this).html(ut_rotator_words[counter=(counter+1)%ut_rotator_words.length]).fadeIn();
                    });
                }, ' . $timer . ');
            }
            
            ut_word_rotator();
            
        })(jQuery);
        
        /* ]]> */
        </script>';
        
        $span = '<span id="ut_word_rotator_' . $x . '" class="' . $class . ' ut-word-rotator">' . $words[0] . '</span>';
        
        $GLOBALS['ut_wr_count']++;
        
        return $script . $span;
        
        
	}
	add_shortcode('ut_rotate_words', 'ut_word_rotator');
}


/*
 * Service Column
 */ 

if( !function_exists('ut_service_column') ) { 
 
	function ut_service_column($atts, $content = null) {
			
		extract(shortcode_atts(array(
		
			 'icon' 			=> '',
			 'align'			=> '',
			 'shape'			=> 'normal',
			 'color'			=> '#FFF',
			 'background'		=> '',
			 'headline' 		=> '',
			 'width' 	    	=> '',
			 'margin_bottom'	=> '',
			 'effect'			=> '',
			 'last'				=> 'false',
			 'class'			=> ''
		
		), $atts));
		
		$grid = array( 'third'  => 'ut-one-third',
					   'fourth' => 'ut-one-fourth',
					   'half'	=> 'ut-one-half',
					   'full'	=> '');	
		
		$last = ( $last == 'true' ) ? 'ut-column-last' : '';
		
		$talign = ( $align == 'right' ) ? 'style="text-align:right;"' : '';
		$align = ( $align == 'right' ) ? 'ut-si-right' : '';
		
		/* fallback */
		$gridwidth = !empty($grid[$width]) ? $grid[$width] : 'clearfix';
		
		/* margin bottom*/
		$margin_bottom = !empty($margin_bottom) ? 'style="margin-bottom:'.$margin_bottom.'px"' : '';
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		$column = '<div '.$dataeffect.' class="' . $gridwidth . ' ' . $class . ' ' . $last . ' '.$animated.'" '.$margin_bottom.'>';
        	
			if(!empty($icon) && $shape == 'round') {
			
				$column .= '<figure class="ut-service-icon fa-stack fa-lg '.$align.'" style="line-height:60px;">';
					$column .= '<i class="fa fa-circle fa-stack-2x" style="color: ' . $background . '"></i><i style="color: ' . $color . '" class="fa fa-stack-1x ' . $icon . '"></i>';
				$column .= '</figure>';
            
			} elseif( !empty($icon) ) {
				
				$column .= '<figure class="ut-service-icon '.$align.'">';
					$column .= '<i style="color: ' . $color . '" class="fa ' . $icon . '"></i>';
				$column .= '</figure>';
				
			}
			    
            $column .= '<div class="ut-service-column" '.$talign.'>';
            	
				if( !empty($headline) ) {
					$column .= '<h3>' . do_shortcode($headline) . '</h3>';
				}
				
				$column .= '<p>' . do_shortcode($content) . '</p>';
				
            $column .= '</div>';
			
       $column .= '</div>';
	   
	   return $column;
				
	}
		
	add_shortcode('ut_service_column', 'ut_service_column');
	
}


/*
 * Service Column Vertical
 */ 

if( !function_exists('ut_service_column_vertical') ) { 
 
	function ut_service_column_vertical($atts, $content = null) {
		
		extract(shortcode_atts(array(
		
			 'icon' 			=> '',
			 'shape'			=> 'normal',
			 'color'			=> '#FFF',
			 'background'		=> '',
			 'headline' 		=> '',
			 'width' 	    	=> 'third',
			 'margin_bottom'	=> '',
			 'effect'			=> '',
			 'last'				=> 'false',
			 'class'			=> ''
		
		), $atts));
		
		$grid = array( 'third'  => 'ut-one-third',
					   'fourth' => 'ut-one-fourth',
					   'half'	=> 'ut-one-half',
					   'full'	=> '');	
		
		$last = $last == 'true' ? 'ut-column-last' : '';
		
		/* fallback */
		$gridwidth = !empty($grid[$width]) ? $grid[$width] : 'clearfix';
		
		/* margin bottom*/
		$margin_bottom = !empty($margin_bottom) ? 'style="margin-bottom:'.$margin_bottom.'px"' : '';
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		$column = '<div class="' . $gridwidth . ' ' . $class . ' ' . $last . ' ut-vertical-style" '.$margin_bottom.'>';
        	
			if(!empty($icon) && $shape == 'round') {
			
				$column .= '<figure '.$dataeffect.' class="ut-service-icon fa-stack fa-lg '.$animated.'" style="line-height:60px;">';
					$column .= '<i class="fa fa-circle fa-stack-2x" style="color: ' . $background . '"></i><i style="color: ' . $color . '" class="fa fa-stack-1x ' . $icon . '"></i>';
				$column .= '</figure>';
            
			} elseif( !empty($icon) ) {
				
				$column .= '<figure '.$dataeffect.' class="ut-service-icon '.$animated.'" style="text-align:center;">';
					$column .= '<i style="color: ' . $color . '" class="fa ' . $icon . '"></i>';
				$column .= '</figure>';
				
			}
			    
            $column .= '<div class="ut-service-column ut-vertical">';
            	
				if( !empty($headline) ) {
					$column .= '<h3>' . $headline . '</h3>';
				}
				
				$column .= '<p>' . do_shortcode($content) . '</p>';
				
            $column .= '</div>';
			
       $column .= '</div>';
	   
	   return $column;
				
	}
		
	add_shortcode('ut_service_column_vertical', 'ut_service_column_vertical');
	
}


/*
 * Icon Box
 */ 

if( !function_exists('ut_service_box') ) { 
 
	function ut_service_box($atts, $content = null) {
		
		extract(shortcode_atts(array(
		
			 'icon' 		=> '',
			 'color'		=> '#FFF',
			 'background'	=> '',
			 'opacity'		=> '0.8',
			 'headline' 	=> '',
			 'width' 	    => 'third',
			 'effect'		=> '',
			 'last'			=> 'false',
			 'class'		=> ''
		
		), $atts));
		
		$grid = array( 'third'  => 'ut-one-third',
					   'fourth' => 'ut-one-fourth',
					   'half'	=> 'ut-one-half');
		
		$last = $last == 'true' ? 'ut-column-last' : '';
		
		/* fallback */
		$gridwidth = !empty($grid[$width]) ? $grid[$width] : '';
		$arrow = !empty($background) ? 'style="border-left: 10px solid rgba('. ut_hex_to_rgb($background) .',' . $opacity . ');"' : '';
		$background = !empty($background) ? 'background: rgba('. ut_hex_to_rgb($background) .',' . $opacity . ');' : '';
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		$box  = '<div class="' . $gridwidth . ' ' . $class . ' ' . $last . ' clearfix">';
			
			$box .= '<div '.$dataeffect.' class="ut-icon-box '.$animated.'">';
            	$box .= '<div class="ut-arrow-right" ' . $arrow . '></div>';
				$box .= '<i style="color: ' . $color . ';' . $background . '" class="fa ' . $icon . ' fa-4x ut-service-box-icon"></i>';
            $box .= '</div>';
			
            $box .= '<div class="ut-info">';
            	$box .= '<h3>' . $headline . '</h3>';
				$box .= '<p>' . do_shortcode($content) . '</p>';
            $box .= '</div>';
			
		$box .= '</div>';
		
		return $box;
		
	}
	
	add_shortcode('ut_service_box', 'ut_service_box');
	
} 

/*
 * Service Box
 */ 

if( !function_exists('ut_service_icon_box') ) { 
 
	function ut_service_icon_box($atts, $content = null) {
		
		extract(shortcode_atts(array(
		
			 'icon' 		=> '',
			 'color'		=> '#CCC',
			 'hovercolor' 	=> '#3CC6AB',
			 'url' 			=> '#',
			 'link' 		=> '#',
			 'headline' 	=> '',
			 'width' 	    => 'third',
			 'effect'		=> '',
			 'last'			=> '',
			 'target'		=> '_self',
			 'class'		=> ''
		
		), $atts));
		
		if( empty($url) ) {
			$url = $link;
		}
		
		$grid = array( 'third'  => 'ut-one-third',
					   'fourth' => 'ut-one-fourth',
					   'half'	=> 'ut-one-half');
		
		$last = $last == 'true' ? 'ut-column-last' : '';
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		$id = uniqid("utbx_");
				
		$box  = '<style type="text/css" scoped> #' . $id . ' { background:' . $color . '; } #' . $id . ':hover { background: ' . $hovercolor . '; } #' . $id . ':after { box-shadow: 0 0 0 4px ' . $hovercolor . '; } </style>';
		
		$box .= '<div class="ut-service-icon-box ' . $grid[$width] . ' '.$last.'">';
			
			$box .= '<div class="ut-highlight-icon-wrap ut-highlight-icon-effect">';		
				$box .=	'<a id="' . $id . '" data-id="' . $id . '" data-hovercolor="' . $hovercolor . '"  '.$dataeffect.' class="ut-highlight-icon fa ' . $icon . ' '.$animated.'" href="' . $url . '" target="'.$target.'"></a>';
			$box .= '</div>';
			
			$box .= '<div class="ut-service-icon-box-content">';
				
				if( !empty( $headline ) ) {
					$box .= '<h3>' . $headline . '</h3>';
				}
				
				$box .= '<p>' . do_shortcode($content) . '</p>';
							
			$box .= '</div>';
								
		$box .= '</div>';
		
		return $box;
		
	}
	
	add_shortcode('ut_service_icon_box', 'ut_service_icon_box');
	
} 


/*
 * Count Up
 */ 

if( !function_exists('ut_count_up') ) { 
 
	function ut_count_up($atts, $content = null) {
		
		extract(shortcode_atts(array(
			
			 'color'		=> '',
			 'desccolor'    => '',
			 'to' 			=> '1250',
			 'background'	=> '',
			 'opacity'		=> '0.8',
			 'width' 	    => '',
			 'icon'			=> '',
			 'last'			=> 'false',
			 'class'		=> ''
		
		), $atts));
		
		$grid = array( 'third'  => 'ut-one-third',
					   'fourth' => 'ut-one-fourth',
					   'half'	=> 'ut-one-half');
		
		$last = $last == 'true' ? 'ut-column-last' : '';
		
		/* fallback */
		$gridwidth = !empty($grid[$width]) ? $grid[$width] : '';
		$background = !empty($background) ? 'style="background: rgba('. ut_hex_to_rgb($background) .',' . $opacity . ');"' : '';
		$color	= !empty($color) ? 'style="color: ' . $color . '"' : '';
		$desccolor = !empty($desccolor) ? 'style="color: ' . $desccolor . '"' : '';
		
		$box  = '<div class="' . $gridwidth . ' ' . $class . ' ' . $last . '">';
			$box .= '<div data-effecttype="counter" class="ut-counter-box ut-counter" data-counter="' . $to . '" ' . $background . '>';
				
				if( !empty($icon) ) {
					$box .= '<i class="fa ' . $icon . ' fa-4x" ' . $color . '></i>';
				}
				
				$box .= '<span class="ut-count" ' . $color . '>' . $to . '</span>';
				$box .= '<h3 class="ut-counter-details" ' . $desccolor . '>' . do_shortcode($content) . '</h3>';
			$box .= '</div>';
		$box .= '</div>';
		
		return $box;
		
	}
	
	add_shortcode('ut_count_up', 'ut_count_up');
	
} 


/*
 * Fancy Link
 */ 
if( !function_exists('ut_fancy_link') ) { 
 
	function ut_fancy_link($atts, $content = null) {
	
		extract(shortcode_atts(array(
			 
			 'url'			=> '#',
			 'class'		=> ''
		
		), $atts));
		
		$link = '<span class="cta-btn cl-effect-18 ' . $class . '"><a class="cl-effect-18" href="' . $url . '">' . do_shortcode($content) . '</a></span>';
				
		return $link;
	
	}

	add_shortcode('ut_fancy_link', 'ut_fancy_link');
	
}

/*
 * Dropcaps
 */ 

if( !function_exists('ut_dropcap') ) { 

	function ut_dropcap($atts, $content = null) {
		
		extract(shortcode_atts(array(
			 'class' 	=> '',
			 'style'	=> 'one'
		), $atts)); 
		
		return '<span class="ut-dropcap-'.$style.' '.$class.'">'.do_shortcode($content).'</span>';
	}
	
	add_shortcode('ut_dropcap', 'ut_dropcap');
	
}

/*
 * Vimeo
 */ 

if( !function_exists('ut_video_vimeo') ) {
	
	function ut_video_vimeo($atts, $content = null) {
		
		extract(shortcode_atts(array(
			 
			 'url'			=> '',
			 'id'			=> '',
			 'class'		=> ''
		
		), $atts));
		
		if( !empty($url) && (int)$url ) {
			$id = $url;
		}
		
		if( !(int)$id ) {
			
			return __( 'Please insert only a valid video ID' , 'ut_shortcodes' );
			
		} else {
			
			return str_replace('&','&amp;','<div class="ut-video ' . $class . '"><iframe height="315" width="560" src="http://player.vimeo.com/video/'.trim($id).'" webkitAllowFullScreen mozallowfullscreen allowFullScreen frameborder="0"></iframe></div>');
			
		}
		
	}
	
	add_shortcode('ut_video_vimeo', 'ut_video_vimeo');
	
}


/*
 * Youtube
 */ 

if( !function_exists('ut_video_youtube') ) {

	function ut_video_youtube($atts, $content = null) {
	   
	   extract(shortcode_atts(array(
			 
			 'url'			=> '',
			 'id'			=> '',
			 'class'		=> ''
		
		), $atts));
	   
	   if( !empty($url) ) {
			$id = $url;
		}
		
		return str_replace('&','&amp;','<div class="ut-video ' . $class . '"><iframe height="315" width="560" src="http://www.youtube.com/embed/'.trim($id).'?wmode=transparent&vq=hd720" wmode="Opaque" allowfullscreen="" frameborder="0"></iframe></div>');
		
	}
	
	add_shortcode('ut_video_youtube', 'ut_video_youtube');

}

/*
 * clear
 */ 

if( !function_exists('ut_clear') ) {

	function ut_clear() {
	   
	   return '<div class="clear"></div>';
	   
	}
	
	add_shortcode('ut_clear', 'ut_clear');

}

/*
 * Parallax Quote
 */ 

if( !function_exists( 'ut_parallax_quote' ) ) {

	function ut_parallax_quote($atts, $content = null) {
	   
	   extract(shortcode_atts(array(
			 
			 'cite'			=> '',
			 'class'		=> ''
		
		), $atts));
		
		
		$blockquote  = '<div class="ut-parallax-quote"><h2 class="ut-parallax-quote-title ' . $class . '"><i class="fa fa-quote-left"></i>';
			
			$blockquote .=  do_shortcode($content);
		
		$blockquote .= '<i class="fa fa-quote-right"></i></h2>';
			
		if( !empty($cite) ) {
			$blockquote .= '<span class="ut-parallax-quote-name">' . $cite . '</span>';
		}
		
        $blockquote.= '</div>';
        
		return $blockquote;
	   
	}
	
	add_shortcode('ut_parallax_quote', 'ut_parallax_quote');

}



/*
 * Tweet Rotator , only available if ut witter plugin has been installed
 */ 
if( ut_is_plugin_active('ut-twitter/ut.twitter.php') ) {

	if( !function_exists( 'ut_twitter_rotator' ) ) {

		function ut_twitter_rotator($atts, $content = null) {
			
			extract(shortcode_atts(array(
				
				 'avatar'		=> 'off',
				 'width'		=> '',
				 'count'		=> '3',
				 'speed'		=> '9000',
				 'class'		=> '',
				 'last'			=> 'false',
				 ''				=> ''
		
			), $atts));
			
			/* grid settings */
			$grid = array( 	'third'  		=> 'ut-one-third',
					   		'fourth' 		=> 'ut-one-fourth',
					   		'half'			=> 'ut-one-half',
					   		'fullwdith' 	=> '');
		
			$last = $last == 'true' ? 'ut-column-last' : '';
			
			/* fallback */
			$gridwidth = !empty($grid[$width]) ? $grid[$width] : '';
			
			
			$twitter_options = ( is_array( get_option('ut_twitter_options') ) ) ? get_option('ut_twitter_options') : array();
			
			/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
			$settings = array(
				'oauth_access_token' => $twitter_options['oauth_access_token'],
				'oauth_access_token_secret' => $twitter_options['oauth_access_token_secret'],
				'consumer_key' => $twitter_options['consumer_key'],
				'consumer_secret' => $twitter_options['consumer_secret']
			);
			
			if( empty($twitter_options['oauth_access_token']) || empty($twitter_options['oauth_access_token_secret']) || empty($twitter_options['consumer_key']) || empty($twitter_options['consumer_secret']) ) {
		
				return '<div class="ut-alert themecolor">' . __( 'Please make sure you have entered all necessary Twitter API Keys under Dashboard -> Settings -> Twitter' , 'ut_shortcodes') . '</div>';
		
			} else {
				
				/* config */
				$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
				$getfield = '?count='.$count;
				$requestMethod = 'GET';
				
				$twitter = new TwitterAPIExchange($settings);
        		$tweets = $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest();
        		$tweets = json_decode( $tweets );
				
				/* create twitter feed option */
				if( !get_option('ut_twitter_feed') ) {
					add_option('ut_twitter_feed');
				}				
				
				/* update feeds */
				if( !empty( $tweets ) && !isset( $tweets->errors[0]->code ) ) {
					update_option('ut_twitter_feed' , $tweets);
				}
				
				/* we have an error - let's use the cached feeds */
				if( empty( $tweets ) || isset( $tweets->errors[0]->code ) ) {
					$tweets = get_option( 'ut_twitter_feed' );
				}			
				
				if( empty($tweets) ) {
					
					return '<div class="ut-alert themecolor">'.__('An Error has occured, no Twitter Feeds are available','ut_shortcodes').'</div>';
					
				} else {
												
					/* set unique ID for this rotator */
					$id = uniqid("ut_tweet_");
					
					/* output for slider without avatar */
					if( $avatar == 'off' ) { 
						
						$script = '
						<script type="text/javascript">
						/* <![CDATA[ */
						
						(function($){
				
							$(document).ready(function(){
												
								$("#' . $id . '").flexslider({
									useCSS: false,  
									animation: "fade",
									directionNav:true,
									controlNav:false,		
									smoothHeight: false,
									animationLoop:true,
									slideshow: false,
									slideshowSpeed: '.$speed.',
									prevText: "",
									nextText: ""   
								});
						
							});
				
						})(jQuery);
						
						 /* ]]> */	
						</script>';
						
							
						$quote_rotator  = '<div class="ut-testimonials ut-twitter-rotator ' . $gridwidth . ' ' . $last . '">';	
							$quote_rotator  .= '<div class="ut-rotate-quote-alt flexslider" id="' . $id . '">';	
								$quote_rotator .= '<ul class="slides">';
									
									foreach($tweets as $tweet) :
										
										$tweetdate = new DateTime($tweet->created_at);
										$tweetdate = strtotime($tweetdate->format('Y-m-d H:i:s'));
										$currentdate = strtotime(date('Y-m-d H:i:s'));  
										$days = ut_twitter_time_ago($tweetdate , $currentdate);
										
										$quote_rotator .= '<li><i class="ut-rq-icon-tw fa fa-twitter fa-3x"></i><h2>' . ut_twitterify($tweet->text) . '</h2><span class="ut-quote-name">' . $tweet->user->name . __(' about ' , 'ut_shortcodes') . $days . '</span></li>';
									
									endforeach;
																	
								$quote_rotator .= '</ul>';
							$quote_rotator .= '</div>';
						$quote_rotator .= '</div>';
						
						return $script . $quote_rotator;
					
					}
				
					/* output for slider with avatar */
					if( $avatar == 'on' ) { 
						
						$script = '
						<script type="text/javascript">
						/* <![CDATA[ */
						
						(function($){
				
							$(document).ready(function(){
								
								$("#avatarSlider_' . $id . '").flexslider({
									animation: "fade",
									directionNav:false,
									controlNav:false,
									smoothHeight: true,
									animationLoop:true,
									slideshow: false,
									slideshowSpeed: 3000,		
									slideToStart: 0,
									prevText: "",
									nextText: ""   
								});
								
								$("#quoteSlider_' . $id . '").flexslider({
									animation: "slide",
									directionNav:true,
									controlNav:false,
									slideshow: false,	
									smoothHeight: true,
									animationLoop:true,
									sync: "#avatarSlider_' . $id . '",
									slideshowSpeed: 3000,			
									slideToStart: 0,
									prevText: "",
									nextText: ""   
								});
						
							});
				
						})(jQuery);
						
						 /* ]]> */	
						</script>';
						
						$quote_rotator  = '<div class="ut-testimonials ut-twitter-rotator ' . $gridwidth . ' ' . $last . '">';
							$quote_rotator .= '<div class="ut-rotate-twitter-avatar flexslider" id="avatarSlider_' . $id . '">';	
								$quote_rotator .= '<ul class="slides">';
									
									foreach($tweets as $tweet) :
									
										$avatar = preg_replace('/_normal/' , '' , $tweet->user->profile_image_url );
										$quote_rotator .= '<li><img alt="' . $tweet->user->name . '" class="ut-twitter-avatar" src="' . $avatar . '" /></li>';
									
									endforeach;
									
								$quote_rotator .= '</ul>';			
							$quote_rotator .= '</div>';	
						
							$quote_rotator  .= '<div class="ut-rotate-quote" id="quoteSlider_' . $id . '">';	
								$quote_rotator .= '<ul class="slides">';
									
									foreach($tweets as $tweet) :
										
										$tweetdate = new DateTime($tweet->created_at);
										$tweetdate = strtotime($tweetdate->format('Y-m-d H:i:s'));
										$currentdate = strtotime(date('Y-m-d H:i:s'));  
										$days = ut_twitter_time_ago($tweetdate , $currentdate);										
										
										$quote_rotator .= '<li><h3 class="ut-quote-comment">' . ut_twitterify($tweet->text) . '</h3><span class="ut-quote-name">' . $tweet->user->name . __(' about ' , 'ut_shortcodes') . $days . '</span></li>';
									
									endforeach;								
									
								$quote_rotator .= '</ul>';
							$quote_rotator .= '</div>';
						$quote_rotator .= '</div>';
						
						return $script . $quote_rotator;
					
					}
			
				}
				
			}

		}
		
		add_shortcode('ut_twitter_rotator', 'ut_twitter_rotator');
		
	}
	
}



/*
 * List Icons ( Helper Shortcode )
 */ 
if( !function_exists('ut_list_icons') ) { 
 
	function ut_list_icons($content = null) {
		
		$output = '<div class="ut-icon-list">';
		$counter = 1;
			
		foreach( ut_recognized_icons() as $icon ) {
			
			$last = '';
			$clear = '';
			
			if( $counter == 5 ) { $last = 'ut-column-last'; $clear = '<div class="clear"></div>'; } 

			$output .= '<div class="ut-one-fifth ' . $last . '">
							<p>
								<i class="fa '.$icon.' icon-list-item" style="margin-right:5px;"></i> '.$icon.'
							</p>
						</div>' . $clear;
			
			if( $counter == 5 ) { $counter = 1; } else { $counter++; }	
						
				  
		}
		
		$output .= '</div>';	
			
		return $output;
		
	}
	add_shortcode('ut_list_icons', 'ut_list_icons');

}

/*
 * Blog
 */
 
if( !function_exists('ut_create_blog') ) {  

	function ut_create_blog( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
				'numberposts' 	=> '3',
				'excerpt'	  	=> '',
				'cat'			=> '',
				'category_name'	=> '',
				'class'		  	=> '',
				'buttontext'  	=> __('Read More' , 'ut_shortcodes'),
				'order' 	  	=> 'DESC'
			), $atts));
		
		
		$args = array(
		
			'post_type'      => 'post',
			'cat'			 => $cat,
			'category_name'	 => $category_name,
			'posts_per_page' => $numberposts,

		);
		
		/* blog output */
		$blog = '<div class="ut-bs-wrap">';
		
			/* initiate query */
			$blog_query = new WP_Query( $args );
			
			/* start loop */
			if ($blog_query->have_posts() ) : while ($blog_query->have_posts()) : $blog_query->the_post();
				
				/* post format */
				$post_format = get_post_format();
				
				/* start single blog entry */
				$blog .= '<div class="grid-33 tablet-grid-33 mobile-grid-100"><article id="post-'.$blog_query->post->ID.'" class="' . implode( " " ,get_post_class( "clearfix" ) ) . '">'; 
				
				/* entry header ( ho headline for quotes ) */
				if( $post_format != 'quote' ) {	
					
					$blog .= '<!-- entry-header --><header class="entry-header">';
					
						$blog .= '<h3 class="entry-title"><a href="' . get_permalink() . '" rel="bookmark" title="' . sprintf(__("Permanent Link to %s", "ut_shortcodes"), get_the_title() ) . '">' . get_the_title() . '</a></h3>';
						
					$blog .= '</header>';
					
				}
				
				/* entry meta */
				$blog .= '<div class="entry-meta">';
	
					$blog .= '<span class="ut-sticky"><i class="fa fa-thumb-tack"></i>' . __("Sticky Post", "ut_shortcodes") . '</span>';
					//$blog .= '<span class="author-links"><i class="fa fa-user"></i>' . __("By", "ut_shortcodes") . ' ' . get_author_posts_link() . '</span>';
					$blog .= '<span class="date-format"><i class="fa fa-clock-o"></i>' . __("On", "ut_shortcodes") . ' <span>' . get_the_time( get_option("date_format") ) . '</span></span>';
					
					if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : 
					
						$blog .= '<span class="comments-link"><i class="fa fa-comments-o"></i>' . __("With", "ut_shortcodes") . ' ' . ut_get_comments_popup_link( __("No Comments", "ut_shortcodes"), __("1 Comment", "ut_shortcodes"), __("% Comments", "ut_shortcodes") ) . '</span>';
					
					endif;
					
				$blog .= '</div>';
								
				/* post thumbnail */
				if ( has_post_thumbnail() && ! post_password_required() ) {	
				
					$postthumbnail = wp_get_attachment_url( get_post_thumbnail_id( $blog_query->post->ID ) );
					
					$blog .= '<div class="entry-thumbnail">';
						
						$blog .= '<a title="' . sprintf(__('Permanent Link to %s', 'ut_shortcodes'), get_the_title()) . '" href="' . get_permalink() . '">';
							
							//$blog .= '<img alt="' . get_the_title() . '" class="wp-post-image" src="' . $postthumbnail . '">';
							$blog .= get_the_post_thumbnail($blog_query->post->ID , "medium");
							
						$blog .= '</a>';
						
					$blog .= '</div>';
					
				}	
				
				/* post format gallery */
				if( $post_format == 'gallery' && function_exists("ut_flex_slider") ) {
					
					$blog .= ut_flex_slider( $blog_query->post->ID , true );
					
					if( !empty($excerpt) && (int)$excerpt ) {
						
						$the_content = ut_get_excerpt_by_id( $blog_query->post->ID , $excerpt );
						
					} else {
						
						/* default content without gallery shortcode */
						$the_content = get_the_content( '<span class="more-link">' . __( 'Read more', 'ut_shortcodes' ) . '<i class="fa fa-chevron-circle-right"></i></span>' );
						$the_content = preg_replace( '/(.?)\[(gallery)\b(.*?)(?:(\/))?\](?:(.+?)\[\/\2\])?(.?)/s', '$1$6', $the_content ); 
						$the_content = apply_filters( 'the_content' , $the_content );
						
					}
					
					
				} elseif ( $post_format == 'gallery' && !function_exists("ut_flex_slider") ) {
					
					/* default content with wordPress gallery shortcode */
					if( !empty($excerpt) && (int)$excerpt ) {
						
						$the_content = ut_get_excerpt_by_id( $blog_query->post->ID , $excerpt );
						
					} else {
						
						$the_content = get_the_content( '<span class="more-link">' . __( 'Read more', 'ut_shortcodes' ) . '<i class="fa fa-chevron-circle-right"></i></span>' );
						$the_content = apply_filters( 'the_content' , $the_content );	
						
					}
				
				} else {
					
					/* content for all other post formats */
					if( !empty($excerpt) && (int)$excerpt ) {
						
						$the_content = ut_get_excerpt_by_id( $blog_query->post->ID , $excerpt );
						
					} else {
						
						$the_content = get_the_content( '<span class="more-link">' . __( 'Read more', 'ut_shortcodes' ) . '<i class="fa fa-chevron-circle-right"></i></span>' );
						$the_content = apply_filters( 'the_content' , $the_content );
							
					}
				
				}
				
				/* post content */
				$blog .= '<!-- entry-content --><div class="entry-content clearfix">';
					
					/* add content which has been defined above */
					$blog .= $the_content;
				
				$blog .= '</div><!-- close entry-content -->';
								
				/* end single blog entry */
				$blog .= '</article></div><!-- close post -->';
			
			/* loop finished */
			endwhile; endif;		
			
			/* Restore original Post Data */
			wp_reset_postdata();
		
		$blog .= '<div class="clear"></div>';
		
		/* create link to blog */
		$blog_id = get_option('page_for_posts');		
		$blog .= '<div class="ut-bs-holder"><a class="ut-bs-btn" href="' . get_permalink( $blog_id ) . '">' . $buttontext . '</a></div>';
		
		
		$blog .= '</div>';
		
		return $blog; 	

	}
	
	add_shortcode('ut_blog', 'ut_create_blog');
	
}

/*
 * Single Testimonial
 */

if( !function_exists('ut_single_quote') ) { 
 
	function ut_single_quote( $atts, $content = null ) {
		
		extract(shortcode_atts(array(
			 'author' 		 => '',
			 'company'		 => '',
			 'avatar'		 => '',
			 'title'		 => '',
			 'width'		 => '',
             'date'          => '',
             'rating'        => '',
			 'last'			 => 'false',
			 'margin_bottom' => '',
			 'class' 		 => '',
			 'effect'		 => ''
		), $atts));
		
		/* width */
		$grid = array(  'third'  => 'ut-one-third',
						'fourth' => 'ut-one-fourth',
						'half'	 => 'ut-one-half' );
		
		$last = $last == 'true' ? 'ut-column-last' : '';
		
        /* ratings */
        $ratings = array(
            'one'   => '<li class="ut-rated"><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li>',
            'two'   => '<li class="ut-rated"><i class="fa fa-star"></i></li><li class="ut-rated"><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li>',
            'three' => '<li class="ut-rated"><i class="fa fa-star"></i></li><li class="ut-rated"><i class="fa fa-star"></i></li><li class="ut-rated"><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li>',
            'four'  => '<li class="ut-rated"><i class="fa fa-star"></i></li><li class="ut-rated"><i class="fa fa-star"></i></li><li class="ut-rated"><i class="fa fa-star"></i></li><li class="ut-rated"><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li>',
            'five'  => '<li class="ut-rated"><i class="fa fa-star"></i></li><li class="ut-rated"><i class="fa fa-star"></i></li><li class="ut-rated"><i class="fa fa-star"></i></li><li class="ut-rated"><i class="fa fa-star"></i></li><li class="ut-rated"><i class="fa fa-star"></i></li>'        
        );
        
        
		/* fallback */
		$gridwidth = !empty($grid[$width]) ? $grid[$width] : '';
		
		/* animation effect */
		$dataeffect = $animated = NULL;
		if( !empty( $effect ) ) {

			$dataeffect = 'data-effect="'.$effect.'"';
			$animated  	= 'ut-animate-element animated';
			
		}
		
		if( !empty($margin_bottom) ) {
			$margin_bottom = 'style="margin-bottom:'.$margin_bottom.'px;"';
		}
		
		$testimonial = '<div class="'.$gridwidth.' '.$class.' '.$last.'" '.$margin_bottom.'>';		
			
			if( !empty($avatar) ) {
				
				$avatar = ut_resize( $avatar , '80' , '80', true , true , true );				
				$testimonial .= '<figure '.$dataeffect.' class="ut-st-avatar '.$animated.'"><img alt="'.$author.'" src="'.$avatar.'" /></figure>';
				
			}
			
			$testimonial .= '<div class="ut-st">';
				
                if( !empty($title) || !empty($date) ) {
                
                    $testimonial .= '<header class="ut-st-header">';
                    
                    if( !empty($title) ) {
                        $testimonial .= '<h3 class="ut-st-title">' . $title . '</h3>';
                    }
                    
                    if( !empty($date) ) {
                        $testimonial .= '<span class="ut-st-date">' . $date . '</span>';
                    }
                    
                    $testimonial .= '</header>';
                
                }
                
				$testimonial .= '<p>' . do_shortcode($content) . '</p>';
				
                if( !empty($rating) && isset($ratings[$rating]) ) {
                    $testimonial .= '<div class="ut-st-rating"><ul>' . $ratings[$rating] . '</ul></div>';
                }
                
				if( !empty($author) ) {
					$testimonial .= '<strong class="ut-st-name">' . $author . '</strong>';
				}
			 	
				if( !empty($company) ) {
					$testimonial .= '<span class="ut-st-subtitle">'.$company.'</span>';
				}
                
				
			$testimonial .= '</div>';
		$testimonial .= '</div>';
		
		return $testimonial;
		
	}
	
	add_shortcode('ut_single_quote', 'ut_single_quote');

}


/*
 * Highlight Section
 */

if( !function_exists('ut_highlight_section') ) { 
 
	function ut_highlight_section( $atts, $content = null ) {
        
        extract(shortcode_atts(array(
			 'image'            => '',
             'imagetype'        => 'portrait',
             'alt'              => '',
             'imageeffect'      => '',
             'leftboxeffect'    => '',
             'rightboxeffect'   => '',
             'margin_bottom'    => '',
             'class' 		    => ''
		), $atts));
        
        $highlight = NULL;
        
        /* margin bottom*/
		$margin_bottom = !empty($margin_bottom) ? 'style="margin-bottom:'.$margin_bottom.'px"' : '';
        
        /* highlight wrapper */
        $highlight .= '<div class="ut-highlight-section-wrap clearfix" ' . $margin_bottom . '>';        
        
        /* animation effect */
        $dataeffect = $animated = NULL;
        if( !empty( $leftboxeffect ) ) {

            $dataeffect = 'data-effect="'.$leftboxeffect.'"';
            $animated  	= 'ut-animate-element animated';
            
        }
        
        /* left service columns */
        $highlight .= '<div ' . $dataeffect . ' class="grid-33 tablet-grid-33 mobile-grid-100 ut-highlight-section-right ' . $animated . '">';
            
            preg_match_all( '/' . get_shortcode_regex() . '/s', $content , $left_service_boxes );
                                    
            if (is_array($left_service_boxes[2]) && !empty($left_service_boxes[2]) ) {               
                
                foreach( $left_service_boxes[2] as $key => $box) {
                    
                    if( $box == 'ut_highlight_left' && !empty( $left_service_boxes[0][$key] ) ) {                    
                        $highlight .= do_shortcode( $left_service_boxes[0][$key] );
                    }
               
                }                
            
            }
            
        $highlight .= '</div><!-- grid-33 -->';
        
        
        /* image output */
        $image_class = ( $imagetype == 'portrait' ) ? 'ut-portrait' : 'ut-landscape';
                
        $highlight .= '<div class="grid-33 tablet-grid-33 mobile-grid-100">';
            $highlight .= '<div class="ut-highlight-section-image ' . $image_class . '">';

                if( !empty($image) ) {
                    
                    /* animation effect */
                    $dataeffect = $animated = NULL;
                    if( !empty( $imageeffect ) ) {
            
                        $dataeffect = 'data-effect="'.$imageeffect.'"';
                        $animated  	= 'ut-animate-element animated';
                        
                    }
                        
                    $highlight .= '<img '.$dataeffect.' class="'.$animated.'" alt="' . $alt . '" src="' . $image . '">';
                
                }
        
             $highlight .= '</div>';
        $highlight .= '</div><!-- grid-33 -->';
        
        
        /* animation effect */
        $dataeffect = $animated = NULL;
        if( !empty( $rightboxeffect ) ) {

            $dataeffect = 'data-effect="'.$rightboxeffect.'"';
            $animated  	= 'ut-animate-element animated';
            
        }
        
        /* right service columns */
        $highlight .= '<div ' . $dataeffect . ' class="grid-33 tablet-grid-33 mobile-grid-100 ' . $animated . '">';
            
            preg_match_all( '/' . get_shortcode_regex() . '/s', $content , $right_service_boxes );
                                    
            if (is_array($right_service_boxes[2]) && !empty($right_service_boxes[2]) ) {               
                
                foreach( $right_service_boxes[2] as $key => $box) {
                    
                    if( $box == 'ut_highlight_right' && !empty( $right_service_boxes[0][$key] ) ) {                    
                        $highlight .= do_shortcode( $right_service_boxes[0][$key] );
                    }
               
                }                
            
            }
            
        $highlight .= '</div><!-- grid-33 -->';
        
        /* end wrap */
        $highlight .= '</div><!-- ut-highlight-section-wrap -->';  
          
        return $highlight;
        
    }
    
    add_shortcode('ut_highlight_section', 'ut_highlight_section');

}


if( !function_exists('ut_highlight_section_box') ) { 
 
	function ut_highlight_section_box( $atts, $content = null ) {
    
        extract(shortcode_atts(array(
             'title'        => '',
             'icon'         => '',
             'color'        => '',
             'class' 		=> ''
		), $atts));
        
        $ut_highlight_section_box = NULL;           
        
        /* set unique ID for this rotator */
		$id = uniqid("uthsbox_");
        
        if( !empty($color) ) {
            
            $ut_highlight_section_box .= '<style type="text/css" scoped>';
                $ut_highlight_section_box .= '#'.$id.'.ut-highlight-section-box:hover h3 { color: '.$color.'; }';
                $ut_highlight_section_box .= '#'.$id.' .ut-highlight-section-icon { border-color: '.$color.'; color: '.$color.'; }';
            $ut_highlight_section_box .= '</style>';
        
        } elseif( empty($color) ) {
        
            $accentcolor = get_option('ut_accentcolor' , '#F1C40F');
            
            $ut_highlight_section_box .= '<style type="text/css" scoped>
                #'.$id.'.ut-highlight-section-box:hover h3 { color: '.$accentcolor.'; }
                #'.$id.' .ut-highlight-section-icon { border-color: '.$accentcolor.'; color: '.$accentcolor.'; }                
            </style>';
        
        }
        
        $ut_highlight_section_box .= '<div id="'.$id.'" class="ut-highlight-section-box">';
            
            if( !empty($icon) ) {
                $ut_highlight_section_box .= '<div class="ut-highlight-section-icon hide-on-tablet"><i class="fa ' . $icon . '"></i></div>';
            }
            
            $ut_highlight_section_box .= '<div class="ut-highlight-section-content">';
                
                if( !empty($title) ) {
                    $ut_highlight_section_box .= '<h3>' . $title . '</h3>';
                }
                
                $ut_highlight_section_box .= do_shortcode( wpautop($content) );
                
            $ut_highlight_section_box .= '</div>';
            
        $ut_highlight_section_box .= '</div>';
        
        return $ut_highlight_section_box;
        
    }
    
    add_shortcode('ut_highlight_left', 'ut_highlight_section_box');
    add_shortcode('ut_highlight_right', 'ut_highlight_section_box');    
    
}


/*
* Gets the excerpt of a specific post ID or object
* @param - $post - object/int - the ID or object of the post to get the excerpt of
* @param - $length - int - the length of the excerpt in words
* @param - $tags - string - the allowed HTML tags. These will not be stripped out
*/

if ( !function_exists( 'ut_get_excerpt_by_id' ) ) {
	
	function ut_get_excerpt_by_id($post, $length = 10, $tags = '<a><em><strong>') {
		
		if( $post ) {
			
			$post = get_post($post);
			
		} elseif(!is_object($post)) {
			
			return false;
			
		}
	 	
		if( has_excerpt($post->ID) ) {
			
			$the_excerpt = $post->post_excerpt;
			$the_excerpt = apply_filters('the_content', $the_excerpt);
            $the_excerpt .= '<p><a class="more-link" href="' . get_permalink($post->ID) . '"><span class="more-link">'.__('Read More' , 'ut_shortcodes').'<i class="fa fa-chevron-circle-right"></i></span></a></p>';
            return $the_excerpt;
			
		} else {
			
			$the_excerpt = $post->post_content;
			
		}
	 	
		$the_excerpt = strip_shortcodes(strip_tags($the_excerpt), $tags);
		$the_excerpt = preg_split('/\s+/', $the_excerpt, $length + 1);
		$excerpt_waste = array_pop($the_excerpt);
		$the_excerpt = implode(" ",$the_excerpt);
		
		if( isset($the_excerpt) && !empty($the_excerpt) ) {
			
			$the_excerpt  = '<p>'.$the_excerpt.'</p>';
			$the_excerpt .= '<p><a class="more-link" href="' . get_permalink($post->ID) . '"><span class="more-link">'.__('Read More' , 'ut_shortcodes').'<i class="fa fa-chevron-circle-right"></i></span></a></p>';
			
		} else {
			
			$the_excerpt = '<p><a class="more-link" href="' . get_permalink($post->ID) . '"><span class="more-link">'.__('Read More' , 'ut_shortcodes').'<i class="fa fa-chevron-circle-right"></i></span></a></p>';
		}

		return $the_excerpt;
		
	}
	
}

/*
 * Helper Shortcode : Displays available atrributes for a shortcode
 */

if( !function_exists('ut_show_atts') ) { 
 
	function ut_show_atts( $atts, $content = null ) {

		extract(shortcode_atts(array(
			 'shortcode' => '',
		), $atts));
		
		include( UT_SHORTCODES_DIR . '/admin/ut.sc.definitions.php');
		
		if( empty($shortcode) ) {
			return false;
		} 
		
		global $ut_shortcodes;
		
		$return = NULL;
		
		if( !empty($ut_shortcodes[$shortcode]['attr']) && is_array($ut_shortcodes[$shortcode]['attr']) ) {
			
			$return = '<table>';
			
			$return .= '<tr>';
				$return .= '<td><h6>Attribute</h6></td>';
				$return .= '<td><h6>Values</h6></td>';
			$return .= '<tr>';
			
			foreach( $ut_shortcodes[$shortcode]['attr'] as $attr => $values ) {
				
				$return .= '<tr>';
					
					$return .= '<td>' . $attr . '</td>';
					
					/* possible attribute values */
					if( !empty($values['values']) ) {
						$return .= '<td>' . __('value :' , 'ut_shortcodes') . implode(' or ' , $values['values']) . '</td>';
					}
					
					/* hex color */
					if( isset( $values['type'] ) && $values['type'] == 'colorpicker' ) {
						$return .= '<td>' . __('value : color hex' , 'ut_shortcodes') . '</td>';
					}
					
					/* font awesome icon */
					if( isset( $values['type'] ) && $values['type'] == 'icon' ) {
						$return .= '<td>' . __('value : iconname' , 'ut_shortcodes') . ' <a href="http://faq.unitedthemes.com/brooklyn/icon-usage/available-icons/" target="_blank">' . __('list of icons names' , 'ut_shortcodes') . ' </a></td>';
					}
					
					/* class info */
					if( $attr == 'class') {
						$return .= '<td>' . __('optional CSS class or classes' , 'ut_shortcodes') . '</td>';	
					}
					
					if( isset( $values['type'] ) && $values['type'] == 'input' && $attr != 'class' ) {
						$return .= '<td>' . __('value: custom value' , 'ut_shortcodes') . '</td>';	
					}
					
					/* available effects */
					if( isset( $values['type'] ) && $values['type'] == 'effect' ) {
						$return .= '<td>' . __('value : effectname' , 'ut_shortcodes') . ' <a href="http://faq.unitedthemes.com/brooklyn/available-animation-effects/" target="_blank">' . __('list of effect names' , 'ut_shortcodes') . ' </a></td>';
					}
					
				$return .= '</tr>';
				
			}
			
			$return .= '</table>';
		
		}
		
		return $return;
		
	}
	
	add_shortcode('ut_show_atts', 'ut_show_atts');

}
?>