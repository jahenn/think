<?php

add_action( 'admin_init', 'ut_metabox_hero_settings' );

function ut_metabox_hero_settings() {
  
  $ut_metabox_hero_settings = array(
    'id'          => 'ut_metabox_hero_settings',
    'title'       => 'Hero Settings',
    'desc'        => '',
    'pages'       => array( 'page' , 'portfolio' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
        
    	/*
	    |--------------------------------------------------------------------------
	    | Hero Type
	    |--------------------------------------------------------------------------
	    */
        
        array(
            'id'          	=> 'ut-hero-settings',
            'metapanel'     => 'ut-hero-type',
            'label'       	=> 'Hero Type',
            'type'        	=> 'textblock',
            'desc'        	=> '<h2><span>Hero /</span> Type</h2> Changes inside this tab are only are affecting single pages.',
            'section_class'	=> 'ut-settings-heading',        
            'class'       	=> ''
        ),
        
        array(
            'id'          => 'ut_page_type',
            'label'       => '',
            'desc'		  => 'If you plan to use this page as section on the front page , please make switch to "Use Page as Section" and if you are using this page as a regular page please switch to "Use Page as Regular Page". This option will not automatically add this page to the front page, this is something which needs to be managed under "Appearance" > "Menus". This option just makes sure, that only page or section relevant options are displaying. ',
            'type'        => 'radio_group_button',
            'choices'     => array(
              array(
                'label'       => 'Use Page as Section',
                'for'         => array(''),
                'value'       => 'section'
              ),
              array(
                'label'       => 'Use Page as Regular Page',
                'for'         => array(''),
                'value'       => 'page'
              )
            ),
            'std'         	=> 'section',
            'rows'        	=> '',
            'class'       	=> '',
            'section_class' => ''
        ),
        
        array(
            'id'          => 'ut_activate_page_hero',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Activate Hero',
            'type'        => 'radio_group_button',
            'desc'        => '',
            'choices'     => array(
              array(
                'label'       => 'On',
                'for'         => array(),
                'value'       => 'on'
              ),
              array(
                'label'       => 'Off',
                'for'         => array(),
                'value'       => 'off'
              )
            ),
            'std'         	=> 'off',
            'rows'        	=> '',
            'class'       	=> '',
            'section_class' => ''
        ),
        
        array(
            'id'          => 'ut_page_hero_type',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Choose Hero Type',
            'type'        => 'select_group',
            'toplevel'    => true,
            'desc'		  => 'Choose between 9 different types.',
            'choices'     => array( 
              
                array(
                    'value'       => 'image',
                    'for'         => array( 
                                    'ut_page_hero_image',
                                    'ut_page_hero_parallax',
                                    'ut_page_hero_rain_effect',
                                    'ut_page_hero_rain_sound',
                                    'ut_page_hero_style',
                                    'ut_portfolio_hero_style',
                                    'ut_page_hero_font_style',
                                    'ut_page_hero_font_size',
                                    'ut_page_hero_align',
                                    'ut_portfolio_caption_align',
                                    'ut_page_hero_overlay',
                                    'ut_page_hero_overlay_color',
                                    'ut_page_hero_overlay_color_opacity',
                                    'ut_page_hero_overlay_pattern',
                                    'ut_page_hero_overlay_pattern_style',
                                    'ut_page_main_hero_button_style',
                                    'ut_page_second_button_style'
                    ),
                    'label'       => 'Single Background Image'
                ),
                
                array(
                    'value'       => 'animatedimage',
                    'for'         => array(
                                    'ut_page_hero_animated_image',
                                    'ut_page_hero_style',
                                    'ut_portfolio_hero_style',
                                    'ut_page_hero_font_style',
                                    'ut_page_hero_font_size',
                                    'ut_page_hero_align',
                                    'ut_portfolio_caption_align',
                                    'ut_page_hero_overlay',
                                    'ut_page_hero_overlay_color',
                                    'ut_page_hero_overlay_color_opacity',
                                    'ut_page_hero_overlay_pattern',
                                    'ut_page_hero_overlay_pattern_style',
                                    'ut_page_main_hero_button_style',
                                    'ut_page_second_button_style'                                    
                    ),
                    'label'       => 'Animated Single Background Image'
                ),
                
                array(
                    'value'       => 'splithero',
                    'for'         => array( 
                                    'ut_page_hero_image',
                                    'ut_page_hero_parallax',
                                    'ut_page_hero_rain_effect',
                                    'ut_page_hero_rain_sound',
                                    'ut_page_hero_split_content_type',
                                    'ut_page_hero_split_image',
                                    'ut_page_hero_split_image_max_width',
                                    'ut_page_hero_split_image_effect',
                                    'ut_page_hero_split_video',
                                    'ut_page_hero_split_video_box',
                                    'ut_page_hero_split_video_box_style',
                                    'ut_page_hero_style',
                                    'ut_portfolio_hero_style',
                                    'ut_page_hero_font_style',
                                    'ut_page_hero_font_size',
                                    'ut_page_hero_align',
                                    'ut_portfolio_caption_align',
                                    'ut_page_hero_overlay',
                                    'ut_page_hero_overlay_color',
                                    'ut_page_hero_overlay_color_opacity',
                                    'ut_page_hero_overlay_pattern',
                                    'ut_page_hero_overlay_pattern_style',
                                    'ut_page_main_hero_button_style',
                                    'ut_page_second_button_style'                                    
                    ),
                    'label'       => 'Split Hero'
                ),
                
                array(
                    'value'       => 'slider',
                    'for'         => array( 
                                    'ut_page_hero_slider',
                                    'ut_page_hero_slider_animation_speed',
                                    'ut_page_hero_slider_slideshow_speed',
                                    'ut_page_hero_font_size',
                                    'ut_page_hero_overlay',
                                    'ut_page_hero_overlay_color',
                                    'ut_page_hero_overlay_color_opacity',
                                    'ut_page_hero_overlay_pattern',
                                    'ut_page_hero_overlay_pattern_style',
                                    'ut_page_main_hero_button_style'
                    ),
                    'label'       => 'Background Image Slider'
                ),
              
                array(
                    'value'       => 'transition',
                    'for'         => array(
                                    'ut_page_hero_fancy_slider',
                                    'ut_page_hero_fancy_slider_effect',
                                    'ut_page_hero_fancy_slider_height',
                                    'ut_page_main_hero_button_style'
                    ),
                    'label'       => 'Fancy Image Slider'
                ),
                
                array(
                    'value'       => 'tabs',
                    'for'         => array(
                                    'ut_page_hero_image',
                                    'ut_page_hero_parallax',
                                    'ut_page_hero_tabs_headline',
                                    'ut_page_hero_tabs_headline_style',
                                    'ut_page_hero_tabs',
                                    'ut_page_hero_style',
                                    'ut_portfolio_hero_style',
                                    'ut_page_hero_font_style',
                                    'ut_page_hero_font_size',
                                    'ut_page_hero_align',
                                    'ut_portfolio_caption_align',
                                    'ut_page_hero_overlay',
                                    'ut_page_hero_overlay_color',
                                    'ut_page_hero_overlay_color_opacity',
                                    'ut_page_hero_overlay_pattern',
                                    'ut_page_hero_overlay_pattern_style',
                                    'ut_page_main_hero_button_style',
                                    'ut_page_second_button_style'                                    
                    ),
                    'label'       => 'Tablet Slider'
                ),
                
                array(
                    'value'       => 'video',
                    'for'         => array(
                                    'ut_page_hero_style',
                                    'ut_page_video_volume',
                                    'ut_page_video_mute_button',
                                    'ut_page_video_sound',
                                    'ut_page_video_poster',
                                    'ut_page_video_webm',
                                    'ut_page_video_ogg',
                                    'ut_page_video_mp4',
                                    'ut_page_video',
                                    'ut_page_video_custom',
                                    'ut_page_video_source',
                                    'ut_page_hero_style',
                                    'ut_portfolio_hero_style',
                                    'ut_page_hero_font_style',
                                    'ut_page_hero_font_size',
                                    'ut_page_hero_align',
                                    'ut_portfolio_caption_align',
                                    'ut_page_hero_overlay',
                                    'ut_page_hero_overlay_color',
                                    'ut_page_hero_overlay_color_opacity',
                                    'ut_page_hero_overlay_pattern',
                                    'ut_page_hero_overlay_pattern_style',
                                    'ut_page_main_hero_button_style',
                                    'ut_page_second_button_style'                                    
                                    
                    ),
                    'label'       => 'Video'
                ),
                
                array(
                    'value'       => 'custom',
                    'for'         => array('ut_page_hero_custom_shortcode'),
                    'label'       => 'Custom Shortcode (e.g. Slider Shortcode)'
                ),
                
                array(
                    'value'       => 'dynamic',
                    'for'         => array('ut_page_hero_dynamic_content'),
                    'label'       => 'Dynamic Hero (dynamic height)'
                )
                
            ), /* end choices */
            
        ),
        
        /*
        | Image Tab Slider
        */
        
        array(
          'id'          => 'ut_page_hero_tabs_headline',
          'metapanel'   => 'ut-hero-type',
          'label'       => 'Tablet Headline',
          'desc'        => 'This headline will be displayed above the tablet navigation.',
          'type'        => 'text',
        ),
        
        array(
          'id'          => 'ut_page_hero_tabs_headline_style',
          'metapanel'   => 'ut-hero-type',
          'label'       => 'Tablet Headline Font Style',
          'desc'		=> 'Choose a font style for Tablet Headline. Choose "Default" if you like to use the global styling from the Theme Options Panel.',
          'type'        => 'select',
          'std'		    => 'global',
          'choices'     => array( 
            array(
              'value'       => 'global',
              'label'       => 'Default'
            ),
            array(
              'value'       => 'extralight',
              'label'       => 'Extra Light'
            ),
            array(
              'value'       => 'light',
              'label'       => 'Light'
            ),
            array(
              'value'       => 'regular',
              'label'       => 'Regular'
            ),
            array(
              'value'       => 'medium',
              'label'       => 'Medium'
            ),
            array(
              'value'       => 'semibold',
              'label'       => 'Semi Bold'
            ),
            array(
              'value'       => 'bold',
              'label'       => 'Bold'
            )
          ),
        ),	  
        
        array(
            'id'          => 'ut_page_hero_tabs',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Manage Tablet Images',
            'type'        => 'list-item',
            'settings'    => array( 
              
              array(
                'id'          => 'image',
                'label'       => 'Image',
                'type'        => 'upload',
              ),
                     
              array(
                'id'          => 'description',
                'label'       => 'Image Description',
                'type'        => 'textarea-simple',
                'rows'        => '3'
              ),
              
              array(
                'id'          => 'link_one_url',
                'label'       => 'Left Button URL',
                'type'        => 'text'
              ),
              
              array(
                'id'          => 'link_one_text',
                'label'       => 'Left Button Text',
                'type'        => 'text'
              ),
              
                array(
                'id'          => 'link_two_url',
                'label'       => 'Right Button URL',
                'type'        => 'text'
              ),
              
              array(
                'id'          => 'link_two_text',
                'label'       => 'Right Button Text',
                'type'        => 'text'
              )
              
            )
          ),
        
        /*
	    | Image Type
	    */
        array(
            'id'          => 'ut_page_hero_parallax',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Activate Parallax',
            'desc'        => 'Keep in mind, that activating this option can reduce your website performance.',
            'type'        => 'select',
            'choices'     => array( 
              array(
                'value'       => 'on',
                'label'       => 'On'
              ),
              array(
                'value'       => 'off',
                'label'       => 'Off'
              )
            ),
        ),
        
        array(
          'id'          => 'ut_page_hero_rain_effect',
          'metapanel'   => 'ut-hero-type',
          'label'       => 'Activate Rain Effect',
          'type'        => 'select_group',
          'std'		    => 'off',
          'desc'        => 'Keep in mind, that activating this option can reduce your website performance.',
          'choices'     => array( 
            array(
              'value'       => 'on',
              'for'         => array('ut_page_hero_rain_sound'),
              'label'       => 'On'
            ),
            array(
              'value'       => 'off',
              'for'         => array(),
              'label'       => 'Off'
            )
          ),
        ),
          
        array(
          'id'          => 'ut_page_hero_rain_sound',
          'metapanel'   => 'ut-hero-type',
          'label'       => 'Activate Rain Sound',
          'type'        => 'select',
          'std'		  => 'off',
          'choices'     => array( 
            array(
              'value'       => 'on',
              'label'       => 'On'
            ),
            array(
              'value'       => 'off',
              'label'       => 'Off'
            )
          ),
        ),
        
        array(
            'id'          => 'ut_page_hero_image',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Background Image',
            'desc'        => 'For best image results, we recommend to upload an image with minimum size of 1600x900 pixel or maximum size of 1920x1080(optimal) pixel. Also try to avoid uploading images with more than 200-300Kb size. Keep in mind, that you are not able to set a background position or attachment if the parallax option has been set to "on".',
            'type'        => 'background',
        ),
        
        array(
            'id'          => 'ut_page_hero_split_content_type',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Hero Split Content Type',
            'desc'        => '',
            'type'        => 'select_group',
            'choices'     => array( 
              array(
                'value'       => 'image',
                'for'         => array('ut_page_hero_split_image','ut_page_hero_split_image_max_width','ut_page_hero_split_image_effect'),
                'label'       => 'Image'
              ),
              array(
                'value'       => 'video',
                'for'         => array('ut_page_hero_split_video','ut_page_hero_split_video_box','ut_page_hero_split_video_box_style'),
                'label'       => 'Video'
              )
            ),
        ),
          
        array(
            'id'          => 'ut_page_hero_split_video',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Hero Split Video',
            'desc'        => 'This video will display on the right side of the hero caption. It will not display on mobile devices! Please use the only embed codes from youtube or vimeo.',
            'type'        => 'textarea_simple',
        ),
        
        array(
            'id'          => 'ut_page_hero_split_video_box',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Activate Hero Split Video Box',
            'desc'        => '',
            'type'        => 'select_group',
            'choices'     => array( 
              array(
                'value'       => 'on',
                'for'         => array('ut_page_hero_split_video_box_style'),
                'label'       => 'yes, please!'
              ),
              array(
                'value'       => 'off',
                'for'         => array(),
                'label'       => 'no, thanks!'
              )
            ),
            
        ),
        
        array(
            'id'          => 'ut_page_hero_split_video_box_style',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Hero Split Video Box Style',
            'desc'        => '',
            'type'        => 'select',
            'choices'     => array( 
              array(
                'value'       => 'light',
                'label'       => 'Light'
              ),
              array(
                'value'       => 'dark',
                'label'       => 'Dark'
              )
            ),
        ),
        
        array(
          'id'          => 'ut_page_hero_split_image',
          'metapanel'   => 'ut-hero-type',
          'label'       => 'Hero Split Image',
          'desc'        => 'This image will display on the right side of the Hero Caption. It will not display on mobile devices!',
          'type'        => 'upload',
        ),
        
        array(
          'id'          => 'ut_page_hero_split_image_effect',
          'metapanel'   => 'ut-hero-type',
          'label'       => 'Hero Split Image Animation Effect',
          'desc'		=> 'Choose animation effect for Hero Split Image.',
          'type'        => 'select',
          'std'		    => 'none',
          'choices'     => array( 
            array(
              'value'       => 'none',
              'label'       => 'No effect'
            ),
            array(
              'value'       => 'fadeIn',
              'label'       => 'Fade In'
            ),
            array(
              'value'       => 'slideInRight',
              'label'       => 'Slide in Right'
            ),
            array(
              'value'       => 'slideInLeft',
              'label'       => 'Slide in Left'
            ),
           
            
          ),
        ),	
          
        array(
          'id'          => 'ut_page_hero_split_image_max_width',
          'metapanel'   => 'ut-hero-type',
          'label'       => 'Hero Split Image Max Width',
          'desc'        => 'Adjust this value until the Hero Split Image fits inside the Hero. Default "60".',
          'type'        => 'numeric-slider',
          'std'         => '60',
          'min_max_step'=> '0,100,1'
        ),  
          
        /*
        | Animated Image Type
        */
        array(
          'id'          => 'ut_page_hero_animated_image',
          'metapanel'   => 'ut-hero-type',
          'label'       => 'Animated Background Image',
          'desc'        => 'For best image results, we recommend to upload an image with minimum size of 1600x900 pixel or maximum size of 1920x1080(optimal) pixel. Also try to avoid uploading images with more than 200-300Kb size.',
          'type'        => 'upload',
        ),
          
          /*
          | Slider Type
          */
           array(
            'id'          => 'ut_page_hero_slider_animation_speed',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Animation Speed',
            'desc'        => 'Set the speed of animations, in milliseconds.',
            'type'        => 'text',
          ),
          
          array(
            'id'          => 'ut_page_hero_slider_slideshow_speed',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Slideshow Speed',
            'desc'        => 'Set the speed of the slideshow cycling, in milliseconds.',
            'type'        => 'text',
          ),
          
          array(
            'id'          => 'ut_page_hero_slider',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Slider',
            'type'        => 'list-item',
            'settings'    => array( 
              array(
                'id'          => 'image',
                'label'       => 'Image',
                'desc'        => 'For best image results, we recommend to upload an image with minimum size of 1600x900 pixel or maximum size of 1920x1080(optimal) pixel. Also try to avoid uploading images with more than 200-300Kb size.',
                'type'        => 'upload',
              ),
              array(
                'id'          => 'style',
                'label'       => 'Hero Caption Style',
                'type'        => 'select',
                'choices'     => array( 
                    array(
                      'value'       => 'ut-hero-style-1',
                      'label'       => 'Style One'
                    ),
                    array(
                      'value'       => 'ut-hero-style-2',
                      'label'       => 'Style Two'
                    ),
                    array(
                      'value'       => 'ut-hero-style-3',
                      'label'       => 'Style Three'
                    ),
                    array(
                      'value'       => 'ut-hero-style-4',
                      'label'       => 'Style Four'
                    ),
                    array(
                      'value'       => 'ut-hero-style-5',
                      'label'       => 'Style Five'
                    ),
                    array(
                      'value'       => 'ut-hero-style-6',
                      'label'       => 'Style Six'
                    ),
                    array(
                      'value'       => 'ut-hero-style-7',
                      'label'       => 'Style Seven'
                    ),
                    array(
                      'value'       => 'ut-hero-style-8',
                      'label'       => 'Style Eight'
                    ),
                    array(
                      'value'       => 'ut-hero-style-9',
                      'label'       => 'Style Nine'
                    ),
                    array(
                      'value'       => 'ut-hero-style-10',
                      'label'       => 'Style Ten'
                    ),
                    array(
                      'value'       => 'ut-hero-style-11',
                      'label'       => 'Style Eleven'
                    )
                ),
              ),
              array(
                'id'          => 'font_style',
                'label'       => 'Hero Caption Font Style',
                'desc'		  => 'Setting this option to default will load the hero font style ( which has been set under Front Page Settings -> Hero Settings).',
                'type'        => 'select',
                'std'		  => 'global',
                'choices'     => array( 
                  array(
                    'value'       => 'global',
                    'label'       => 'Default'
                  ),
                  array(
                    'value'       => 'extralight',
                    'label'       => 'Extra Light'
                  ),
                  array(
                    'value'       => 'light',
                    'label'       => 'Light'
                  ),
                  array(
                    'value'       => 'regular',
                    'label'       => 'Regular'
                  ),
                  array(
                    'value'       => 'medium',
                    'label'       => 'Medium'
                  ),
                  array(
                    'value'       => 'semibold',
                    'label'       => 'Semi Bold'
                  ),
                  array(
                    'value'       => 'bold',
                    'label'       => 'Bold'
                  )
                ),
              ),
              array(
                'id'          => 'align',
                'label'       => 'Caption Alignment',
                'type'        => 'select',
                'desc'		  => '',
                'std'		  => 'center',
                'choices'     => array(     
                  array(
                    'value'       => 'center',
                    'label'       => 'Center'
                  ),
                  array(
                    'value'       => 'left',
                    'label'       => 'Left'
                  ),
                  array(
                    'value'       => 'right',
                    'label'       => 'Right'
                  )
                ),
              ),
              array(
                'id'          => 'direction',
                'label'       => 'Caption Animation Direction',
                'std'		  => 'top',
                'type'        => 'select',
                'choices'     => array( 
                      
                      array(
                        'value'       => 'top',
                        'label'       => 'Top'
                      ),
                      array(
                        'value'       => 'left',
                        'label'       => 'Left'
                      ),
                      array(
                        'value'       => 'right',
                        'label'       => 'Right'
                      ),
                      array(
                        'value'       => 'bottom',
                        'label'       => 'Bottom'
                      )
                     
                ),
              ),
              array(
                'id'          => 'expertise',
                'label'       => 'Hero Caption Slogan',
                'type'        => 'textarea-simple',
                'rows'        => '3'
              ),
              array(
                'id'          => 'description',
                'label'       => 'Hero Caption',
                'type'        => 'textarea-simple',
                'rows'        => '3'
              ),
              array(
                'id'          => 'catchphrase',
                'label'       => 'Hero Caption Description',
                'type'        => 'textarea-simple',
                'rows'        => '3'
              ),
              array(
                'id'          => 'link',
                'label'       => 'Link',
                'type'        => 'text',
                'rows'        => '3'
              ),
              array(
                'id'          => 'link_description',
                'label'       => 'Link Button Text',
                'type'        => 'text'
              )
            )
          ),	
          
          /*
          | Fancy Slider
          */
          
          array(
            'id'          => 'ut_page_hero_fancy_slider_height',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Slider Height',
            'desc'        => 'Set the height of the slideshow in pixel e.g. 600px.',
            'type'        => 'text',
          ),
          
          array(
            'id'          => 'ut_page_hero_fancy_slider_effect',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Slide Effect',
            'desc'		  => 'Choose an effect for your slider, this effect will affect all slides.',
            'type'        => 'select',
            'std'		  => 'fxSoftScale',
            'choices'     => array( 
              array(
                'value'       => 'fxSoftScale',
                'label'       => 'Soft scale'
              ),
              array(
                'value'       => 'fxPressAway',
                'label'       => 'Press away'
              ),
              array(
                'value'       => 'fxSideSwing',
                'label'       => 'Side Swing'
              ),
              array(
                'value'       => 'fxFortuneWheel',
                'label'       => 'Fortune wheel'
              ),
              array(
                'value'       => 'fxSwipe',
                'label'       => 'Swipe'
              ),
              array(
                'value'       => 'fxPushReveal',
                'label'       => 'Push reveal'
              ),
              array(
                'value'       => 'fxSnapIn',
                'label'       => 'Snap in'
              ),
              array(
                'value'       => 'fxLetMeIn',
                'label'       => 'Let me in'
              ),
              array(
                'value'       => 'fxStickIt',
                'label'       => 'Stick it'
              ),
              array(
                'value'       => 'fxArchiveMe',
                'label'       => 'Archive me'
              ),
              array(
                'value'       => 'fxVGrowth',
                'label'       => 'Vertical growth'
              ),
              array(
                'value'       => 'fxSlideBehind',
                'label'       => 'Slide Behind'
              ),
              array(
                'value'       => 'fxSoftPulse',
                'label'       => 'Soft Pulse'
              ),
              array(
                'value'       => 'fxEarthquake',
                'label'       => 'Earthquake'
              ),
              array(
                'value'       => 'fxCliffDiving',
                'label'       => 'Cliff diving'
              )
              
            ),
          ),	
          
          array(
            'id'          => 'ut_page_hero_fancy_slider',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Fancy Slider',
            'type'        => 'list-item',
            'settings'    => array( 
              array(
                'id'          => 'image',
                'label'       => 'Image',
                'desc'        => 'For best image results, we recommend to upload an image with minimum size of 1600 x (set height) pixel or maximum size of 1920x (set height) (optimal) pixel. Also try to avoid uploading images with more than 200-300Kb size.',
                'type'        => 'upload',
              ),
              array(
                'id'          => 'style',
                'label'       => 'Hero Caption Style',
                'type'        => 'select',
                'choices'     => array( 
                       array(
                        'value'       => 'ut-hero-style-1',
                        'label'       => 'Style One'
                      ),
                      array(
                        'value'       => 'ut-hero-style-2',
                        'label'       => 'Style Two'
                      ),
                      array(
                        'value'       => 'ut-hero-style-3',
                        'label'       => 'Style Three'
                      ),
                      array(
                        'value'       => 'ut-hero-style-4',
                        'label'       => 'Style Four'
                      ),
                      array(
                        'value'       => 'ut-hero-style-5',
                        'label'       => 'Style Five'
                      ),
                      array(
                        'value'       => 'ut-hero-style-6',
                        'label'       => 'Style Six'
                      ),
                      array(
                        'value'       => 'ut-hero-style-7',
                        'label'       => 'Style Seven'
                      ),
                      array(
                        'value'       => 'ut-hero-style-8',
                        'label'       => 'Style Eight'
                      ),
                      array(
                        'value'       => 'ut-hero-style-9',
                        'label'       => 'Style Nine'
                      ),
                      array(
                        'value'       => 'ut-hero-style-10',
                        'label'       => 'Style Ten'
                      ),
                      array(
                        'value'       => 'ut-hero-style-11',
                        'label'       => 'Style Eleven'
                      )
                ),
              ),
              array(
                'id'          => 'font_style',
                'label'       => 'Hero Caption Font Style',
                'desc'		  => 'Setting this option to default will load the hero font style ( which has been set under Front Page Settings -> Hero Settings ).',
                'type'        => 'select',
                'std'		  => 'global',
                'choices'     => array( 
                  array(
                    'value'       => 'global',
                    'label'       => 'Default'
                  ),
                  array(
                    'value'       => 'extralight',
                    'label'       => 'Extra Light'
                  ),
                  array(
                    'value'       => 'light',
                    'label'       => 'Light'
                  ),
                  array(
                    'value'       => 'regular',
                    'label'       => 'Regular'
                  ),
                  array(
                    'value'       => 'medium',
                    'label'       => 'Medium'
                  ),
                  array(
                    'value'       => 'semibold',
                    'label'       => 'Semi Bold'
                  ),
                  array(
                    'value'       => 'bold',
                    'label'       => 'Bold'
                  )
                ),
              ),
               array(
                'id'          => 'align',
                'label'       => 'Choose Caption Alignment',
                'type'        => 'select',
                'std'		  => 'left',
                'choices'     => array( 
                  array(
                    'value'       => 'center',
                    'label'       => 'Center'
                  ),
                  array(
                    'value'       => 'left',
                    'label'       => 'Left'
                  ),
                  array(
                    'value'       => 'right',
                    'label'       => 'Right'
                  )
                ),
              ),
              array(
                'id'          => 'expertise',
                'label'       => 'Hero Caption Slogan',
                'type'        => 'textarea-simple',
                'rows'        => '3'
              ),
              array(
                'id'          => 'description',
                'label'       => 'Hero Caption',
                'type'        => 'textarea-simple',
                'rows'        => '3'
              ),
              array(
                'id'          => 'catchphrase',
                'label'       => 'Hero Caption Description',
                'type'        => 'textarea-simple',
                'rows'        => '3'
              ),
              array(
                'id'          => 'link',
                'label'       => 'Link',
                'type'        => 'text',
                'rows'        => '3'
              ),              
              array(
                'id'          => 'link_description',
                'label'       => 'Link Button Text',
                'type'        => 'text'
              )
            )
          ),
          
          
          /*
	      | Video Type
	      */
           array(
            'id'          => 'ut_page_video_source',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Video Source',
            'desc'        => '',
            'type'        => 'select_group',
            'std'		  => 'youtube',
            'choices'     => array( 
              array(
                'value'       => 'youtube',
                'for'         => array('ut_page_video'),
                'label'       => 'Youtube'
              ),
              array(
                'value'       => 'selfhosted',
                'for'         => array('ut_page_video_mp4','ut_page_video_ogg','ut_page_video_webm','ut_page_video_loop','ut_page_video_preload'),
                'label'       => 'Selfthosted'
              ),
              array(
                'value'       => 'custom',
                'for'         => array('ut_page_video_custom'),
                'label'       => 'Custom'
              )
            ),
          ),
          
          array(
            'id'          => 'ut_page_video',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Video URL',
            'desc'        => 'Please insert the url only e.g. http://youtu.be/gvt_YFuZ8LA . Please do not insert the complete embedded code!',
            'type'        => 'text',
          ),
          
          array(
            'id'          => 'ut_page_video_custom',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Video Embedded Code',
            'desc'        => 'Please insert the complete embedded code of your favorite video hoster!',
            'type'        => 'textarea-simple',
          ),
          
          array(
            'id'          => 'ut_page_video_mp4',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'MP4',
            'desc'        => '',
            'type'        => 'upload',    
          ),
          
           array(
            'id'          => 'ut_page_video_ogg',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'OGG',
            'desc'        => '',
            'type'        => 'upload',    
          ),
          
           array(
            'id'          => 'ut_page_video_webm',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'WEBM',
            'desc'        => '',
            'type'        => 'upload',   
          ),
          
          array(
            'id'          	=> 'ut_page_video_loop',
            'metapanel'     => 'ut-hero-type',
            'label'       	=> 'Loop Video',
            'desc'        	=> '',
            'type'        	=> 'select',
            'choices'     	=> array(
              
              array(
                'label'       => 'yes, please!',
                'value'       => 'on'
              ),
              array(
                'label'       => 'no, thanks!',
                'value'       => 'off'
              )
              
            ),
            'std'         	=> 'on'
          ),
          
          array(
            'id'          	=> 'ut_page_video_preload',
            'metapanel'     => 'ut-hero-type',
            'label'       	=> 'Preload Video',
            'desc'        	=> '',
            'type'        	=> 'select',
            'choices'     	=> array(
              
              array(
                'label'       => 'yes, please!',
                'value'       => 'on'
              ),
              array(
                'label'       => 'no, thanks!',
                'value'       => 'off'
              )
              
            ),
            'std'         	=> 'on'
          ),
          
          array(
            'id'          => 'ut_page_video_sound',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Activate video sound after page is loaded?',
            'desc'        => '<strong>(optional)</strong>. Play sound directly when page is loaded.',
            'std'         => 'off',
            'type'        => 'select',
            'choices'     => array( 
              array(
                'value'       => 'on',
                'label'       => 'yes, please!'
              ),
              array(
                'value'       => 'off',
                'label'       => 'no, thanks!'
              )
            ),
          ),
          
          array(
            'id'          => 'ut_page_video_volume',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Video Volume',
            'desc'        => '1-100 - default 5',
            'std'         => '5',
            'type'        => 'numeric-slider',
            'min_max_step'=> '0,100,1'
          ),
          
          array(
            'id'          	=> 'ut_page_video_mute_button',
            'metapanel'     => 'ut-hero-type',
            'label'       	=> 'Show Mute Button?',
            'desc'        	=> '',
            'type'        	=> 'select',
            'choices'     	=> array(
              
              array(
                'label'       => 'yes, please!',
                'value'       => 'show'
              ),
              array(
                'label'       => 'no, thanks!',
                'value'       => 'hide'
              )
              
            ),
            'std'         	=> 'hide'
          ),
          
          array(
            'id'          => 'ut_page_video_poster',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Poster Image',
            'desc'        => 'This image will be displayed instead of the video on mobile devices.',
            'type'        => 'upload',    
          ),
          
          /*
          | Custom Shortcode
          */
          
          array(
            'id'          => 'ut_page_hero_custom_shortcode',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Custom Shortcode',
            'desc'        => 'Ideal for plugin shortcodes from Revolution Slider or Layer Slider.',
            'type'        => 'text',
          ),
          
          /*
          | Dynamic
          */
          
          array(
            'id'          => 'ut_page_hero_dynamic_content',
            'metapanel'   => 'ut-hero-type',
            'label'       => 'Custom Hero Content',
            'desc'        => '',
            'type'        => 'textarea',
          ),
          
          /*
          |--------------------------------------------------------------------------
          | Hero Styling
          |--------------------------------------------------------------------------
          */
          
          array(
            'id'          	=> 'ut-hero-styling',
            'metapanel'     => 'ut-hero-styling',
            'label'       	=> 'Hero Styling',
            'type'        	=> 'textblock',
            'desc'        	=> '<h2><span>Hero /</span> Styling</h2> Changes inside this tab are only are affecting single pages.',
            'section_class'	=> 'ut-settings-heading',        
                'class'       	=> ''
          ),
          
          array(
            'id'          => 'ut_page_hero_style',
            'metapanel'   => 'ut-hero-styling',
            'label'       => 'Hero Caption Style',
            'desc'        => 'Choose between 11 different Hero Caption styles. If you are using a slider as your desired header type, you can define an individual style for each slide. <a href="#" class="ut-hero-preview">Preview Hero Styles</a>',
            'type'        => 'select',
            'choices'     => array( 
              array(
                'value'       => 'ut-hero-style-1',
                'label'       => 'Style One',
                'src'         => ''
              ),
              array(
                'value'       => 'ut-hero-style-2',
                'label'       => 'Style Two'
              ),
              array(
                'value'       => 'ut-hero-style-3',
                'label'       => 'Style Three'
              ),
              array(
                'value'       => 'ut-hero-style-4',
                'label'       => 'Style Four'
              ),
              array(
                'value'       => 'ut-hero-style-5',
                'label'       => 'Style Five'
              ),
              array(
                'value'       => 'ut-hero-style-6',
                'label'       => 'Style Six'
              ),
              array(
                'value'       => 'ut-hero-style-7',
                'label'       => 'Style Seven'
              ),
              array(
                'value'       => 'ut-hero-style-8',
                'label'       => 'Style Eight'
              ),
              array(
                'value'       => 'ut-hero-style-9',
                'label'       => 'Style Nine'
              ),
              array(
                'value'       => 'ut-hero-style-10',
                'label'       => 'Style Ten'
              ),
              array(
                'value'       => 'ut-hero-style-11',
                'label'       => 'Style Eleven'
              )
            ),
          ),
          
          array(
            'id'          => 'ut_page_hero_font_style',
            'metapanel'   => 'ut-hero-styling',
            'label'       => 'Hero Caption Font Style',
            'desc'        => '<a href="#" class="ut-font-preview">Preview Font Styles</a>',
            'type'        => 'select',
            'choices'     => array(               
              array(
                'value'       => 'extralight',
                'label'       => 'Extra Light'
              ),
              array(
                'value'       => 'light',
                'label'       => 'Light'
              ),
              array(
                'value'       => 'regular',
                'label'       => 'Regular'
              ),
              array(
                'value'       => 'medium',
                'label'       => 'Medium'
              ),
              array(
                'value'       => 'semibold',
                'label'       => 'Semi Bold'
              ),
              array(
                'value'       => 'bold',
                'label'       => 'Bold'
              )
            ),
          ),
          
          array(
            'id'          => 'ut_page_hero_font_size',
            'metapanel'   => 'ut-hero-styling',
            'label'       => 'Hero Caption Title Font Size',
            'desc'		  => 'This option only affects Desktop view, Mobile and Tablet views are not affected. Value in em: e.g. "6em".',
            'type'        => 'text'
          ),
          
          array(
            'id'          => 'ut_page_hero_align',
            'metapanel'   => 'ut-hero-styling',
            'label'       => 'Choose Hero Caption Alignment',
            'type'        => 'select',
            'desc'		  => '',
            'std'		  => 'center',
            'choices'     => array(     
              array(
                'value'       => 'center',
                'label'       => 'Center'
              ),
              array(
                'value'       => 'left',
                'label'       => 'Left'
              ),
              array(
                'value'       => 'right',
                'label'       => 'Right'
              )
            ),
          ),
          
          array(
            'id'          => 'ut_page_hero_overlay',
            'metapanel'   => 'ut-hero-styling',
            'label'       => 'Activate Overlay',
            'desc'        => '<strong>(optional)</strong>',
            'std'         => 'on',
            'type'        => 'select_group',
            'choices'     => array( 
              array(
                'value'       => 'on',
                'for'         => array('ut_page_hero_overlay_color','ut_page_hero_overlay_color_opacity','ut_page_hero_overlay_pattern','ut_page_hero_overlay_pattern_style'),
                'label'       => 'On'
              ),
              array(
                'value'       => 'off',
                'for'         => array(),
                'label'       => 'Off'
              )
            ),
          ),
          
          array(
            'id'          => 'ut_page_hero_overlay_color',
            'metapanel'   => 'ut-hero-styling',
            'label'       => 'Overlay Color',
            'desc'        => '<strong>(optional)</strong>',
            'type'        => 'colorpicker',
          ),
          
          array(
            'id'          => 'ut_page_hero_overlay_color_opacity',
            'metapanel'   => 'ut-hero-styling',
            'label'       => 'Overlay Color Opacity',
            'desc'        => '<strong>(optional)</strong>',
            'type'        => 'numeric-slider',
            'min_max_step'=> '0,1,0.1'
          ),
          
          array(
            'id'          => 'ut_page_hero_overlay_pattern',
            'metapanel'   => 'ut-hero-styling',
            'label'       => 'Activate Overlay Pattern',
            'desc'        => '<strong>(optional)</strong>',
            'std'         => 'on',
            'type'        => 'select',
            'choices'     => array( 
              array(
                'value'       => 'on',
                'label'       => 'On'
              ),
              array(
                'value'       => 'off',
                'label'       => 'Off'
              )
            ),
          ),
          
          array(
            'id'          => 'ut_page_hero_overlay_pattern_style',
            'metapanel'   => 'ut-hero-styling',
            'label'       => 'Overlay Pattern Style',
            'desc'        => '<strong>(optional)</strong>',
            'std'         => 'style_one',
            'type'        => 'select',
            'choices'     => array( 
              array(
                'value'       => 'style_one',
                'label'       => 'Style One'
              ),
              array(
                'value'       => 'style_two',
                'label'       => 'Style Two'
              )
            ),
          ),
          
          array(
            'id'          => 'ut_page_main_hero_button_style',
            'metapanel'   => 'ut-hero-styling',
            'label'       => 'Choose hero button style',            
            'desc'        => '',
            'type'        => 'select_group',
            'std'		  => 'default',
            'choices'     => array( 
              array(
                'value'       => 'default',
                'for'         => array(''),
                'label'       => 'Default'
              ),
              array(
                'value'       => 'custom',
                'for'         => array('ut_page_main_hrbtn'),
                'label'       => 'Custom'
              ),	  
            ),
          ),
          
          array(
            'id'          => 'ut_page_main_hrbtn',
            'metapanel'   => 'ut-hero-styling',
            'label'       => 'Custom Button Styling',
            'desc'        => '',
            'type'        => 'button_builder',
          ),
          
          array(
            'id'          => 'ut_page_second_button_style',
            'metapanel'   => 'ut-hero-styling',
            'label'       => 'Choose hero second button style',
            'desc'        => '',
            'type'        => 'select_group',
            'std'		  => 'default',
            'choices'     => array( 
              array(
                'value'       => 'default',
                'for'         => array(),
                'label'       => 'Default'
              ),
              array(
                'value'       => 'custom',
                'for'         => array('ut_page_second_hrbtn'),
                'label'       => 'Custom'
              ),	  
            ),
          ),
          
          array(
            'id'          => 'ut_page_second_hrbtn',
            'metapanel'   => 'ut-hero-styling',
            'label'       => 'Custom Button Styling',
            'desc'        => '',
            'type'        => 'button_builder',
          ),
          
          /*
          |--------------------------------------------------------------------------
          | Hero Settings
          |--------------------------------------------------------------------------
          */
          
          array(
            'id'          	=> 'ut-hero-settings',
            'metapanel'     => 'ut-hero-settings',
            'label'       	=> 'Hero Caption',
            'type'        	=> 'textblock',
            'desc'        	=> '<h2><span>Hero /</span> Caption</h2> Changes inside this tab are only are affecting single pages.',
            'section_class'	=> 'ut-settings-heading',        
            'class'       	=> ''
          ),
          
          array(
            'id'          => 'ut_page_custom_hero_html',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Custom Hero HTML',
            'desc'        => 'This field appears above the Hero Caption Slogan.',
            'type'        => 'textarea',
            'rows'        => '10'
          ),
          
          array(
            'id'          => 'ut_page_caption_slogan',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Hero Caption Slogan',
            'desc'        => 'This field appears above the Hero Caption.',
            'type'        => 'textarea-simple',
            'rows'        => '5'
          ),
          
          array(
            'id'          => 'ut_page_caption_title',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Hero Caption Title',
            'desc'        => 'This field also accepts HTML tags and shortcodes such as word rotator for example.',
            'type'        => 'textarea-simple',
            'rows'        => '5'
          ),
          
          array(
            'id'          => 'ut_page_caption_slogan_uppercase',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Uppercase',
            'desc'        => 'Display the Hero Caption Title in uppercase letters?',
            'type'        => 'radio',
            'std'		  => 'on',
            'choices'     => array( 
              array(
                'value'       => 'on',
                'label'       => 'yes please!'
              ),
              array(
                'value'       => 'off',
                'label'       => 'no thanks!'
              ),
            )
          ),
          
          array(
            'id'          => 'ut_page_caption_slogan_color',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Color',
            'desc'        => '<strong>(optional)</strong> - set\'s an alternative for <strong>Hero Caption Title</strong>.',
            'type'        => 'colorpicker',
          ),
          
           array(
            'id'          => 'ut_page_caption_description',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Hero Caption Description',
            'desc'        => 'This field appears beneath the Hero Caption.',
            'type'        => 'textarea-simple',
            'rows'        => '5'
          ),
          
          array(
            'id'          => 'ut_page_caption_description_color',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Color',
            'desc'        => '<strong>(optional)</strong> - set\'s an alternative for <strong>Hero Caption Description</strong>.',
            'type'        => 'colorpicker',
          ),   
          
          array(
            'id'          	=> 'ut-hero-button-settings',
            'metapanel'     => 'ut-hero-settings',
            'label'       	=> 'Hero Button Settings',
            'type'        	=> 'textblock',
            'desc'        	=> '<h2><span>Hero /</span> Caption Buttons</h2>',
            'section_class'	=> 'ut-settings-heading',        
            'class'       	=> ''
          ),
          
          array(
            'id'          => 'ut_page_main_hero_button',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Need a button?',
            'desc'        => 'You can optionally style this button inside the "Hero Styling" tab.',
            'type'        => 'radio_group',
            'toplevel'    => true,
            'std'		  => 'off',
            'choices'     => array( 
              array(
                'value'       => 'off',
                'for'         =>  array(''),
                'label'       => 'no thanks!'
              ),
              array(
                'value'       => 'on',
                'for'         => array('ut_page_main_hero_button_text','ut_page_main_hero_button_url_type','ut_page_main_hero_button_url','ut_page_main_hero_button_target'),
                'label'       => 'yes please!'
              ),          
            )
          ),
          
          array(
            'id'          => 'ut_page_main_hero_button_text',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Main Button Text',
            'desc'        => 'Enter your desired text for this button.',
            'type'        => 'text',
          ),
          
          array(
            'id'          => 'ut_page_main_hero_button_url_type',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Main Button Link Type',
            'desc'        => 'Do you like to link to the content or an external URL?',
            'type'        => 'radio_group',
            'std'		  => 'content',
            'choices'     => array( 
              array(
                'value'       => 'content',
                'for'         => array(),
                'label'       => 'link to the main content of this page!'
              ),
              array(
                'value'       => 'external',
                'for'         => array('ut_page_main_hero_button_url' , 'ut_page_main_hero_button_target'),
                'label'       => 'link to an external url!'
              ),          
            )
          ),
          
          array(
            'id'          => 'ut_page_main_hero_button_url',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Main Button URL',
            'desc'        => 'Enter your desired URL. Do not forget to place "http://" in front of your link.',
            'type'        => 'text',
          ),
          
          array(
            'id'          => 'ut_page_main_hero_button_target',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Main Button Target',
            'type'        => 'select',
            'std'		  => '_blank',
            'choices'     => array( 
              array(
                'value'       => '_blank',
                'label'       => 'blank'
              ),
              array(
                'value'       => '_self',
                'label'       => 'self'
              ),          
            )
          ),
          
          
          array(
            'id'          => 'ut_page_second_button',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Need a second button?',
            'desc'        => 'You can optionally style this button inside the "Hero Styling" tab.',
            'type'        => 'radio_group',
            'toplevel'    => true,
            'std'		  => 'off',
            'choices'     => array( 
              array(
                'value'       => 'off',
                'for'         =>  array(''),
                'label'       => 'no thanks!'
              ),
              array(
                'value'       => 'on',
                'for'         => array('ut_page_second_button_text','ut_page_second_button_url_type','ut_page_second_button_url','ut_page_second_button_target'),
                'label'       => 'yes please!'
              ),          
            )
          ),
          
          array(
            'id'          => 'ut_page_second_button_text',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Second Button Text',
            'desc'        => 'Enter your desired buttontext',
            'type'        => 'text',
          ),
          
          array(
            'id'          => 'ut_page_second_button_url_type',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Second Button Link Type',
            'desc'        => 'Do you like to link to a section or external URL?',
            'type'        => 'radio_group',
            'std'		  => 'content',
            'choices'     => array( 
              array(
                'value'       => 'content',
                'for'         =>  array(),
                'label'       => 'link to the main content of this page!'
              ),
              array(
                'value'       => 'external',
                'for'         =>  array('ut_page_second_button_target','ut_page_second_button_url'),
                'label'       => 'link to an external url!'
              ),          
            )
          ),
          
          array(
            'id'          => 'ut_page_second_button_url',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Second Button URL',
            'desc'        => 'Enter your desired URL. Do not forget to place "http://" in front of your link.',
            'type'        => 'text',
          ),
          
          array(
            'id'          => 'ut_page_second_button_target',
            'metapanel'   => 'ut-hero-settings',
            'label'       => 'Second Button Target',
            'type'        => 'select',
            'std'		  => '_blank',
            'choices'     => array( 
              array(
                'value'       => '_blank',
                'label'       => 'blank'
              ),
              array(
                'value'       => '_self',
                'label'       => 'self'
              ),          
            )
          ),  
          
          
              
    
    
    )
  
  );
  
  ot_register_meta_box( $ut_metabox_hero_settings );

}

?>