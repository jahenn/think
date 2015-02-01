<?php

add_action( 'admin_init', 'ut_theme_options' );

function ut_theme_options() {

  $saved_settings = get_option( 'option_tree_settings', array() );
  
  $ut_settings = array( 
    
    'contextual_help' => array( 
        'sidebar'       => ''
    ),
    
    'sections'        => array( 
      
      array(
        'id'          => 'ut_general_settings',
        'title'       => 'General',
        'icon'        => 'fa-globe'
      ),
      
      array(
        'id'          => 'ut_typography_settings',
        'title'       => 'Typography',
        'icon'        => 'fa-font'
      ),
      
      array(
        'id'          => 'ut_front_page_settings',
        'title'       => 'Front Page',
        'icon'        => 'fa-home'
      ),
      
      array(
        'id'          => 'ut_blog_settings',
        'title'       => 'Blog',
        'icon'        => 'fa-pencil'
      ), 
      
      array(
        'id'          => 'ut_csection_settings',
        'title'       => 'Contact',
        'icon'        => 'fa-envelope-o '        
      ),
      
      array(
        'id'          => 'ut_advanced_settings',
        'title'       => 'Advanced',
        'icon'        => 'fa-wrench'        
      )      
            
    ),
    
    'settings'        => array(
      
      /*
      |--------------------------------------------------------------------------
      | Sub Section Logo and Themecolor
      |--------------------------------------------------------------------------
      */ 
      array(
        'id'          => 'ut_customize_settings_menu',
        'subid'       => 'ut_customize_settings',
        'label'       => 'Customize',
        'type'        => 'section_headline',
        'section'     => 'ut_general_settings',
      ),
      
      array(
        'id'          => 'ut_customize_setting_headline',
        'label'       => 'Customize',
        'desc'        => '<h2 class="section-headline">Customize Logo & Accentcolor</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_customize_settings'
      ),
      
      array(
        'id'          => 'ut_accentcolor',
        'label'       => 'Themecolor',
        'desc'        => 'Define your desired primary theme accent color. Keep in mind, that you can easily define own colors for each page or section by using the "Color Settings" tab beneath the WordPress Editor. Besides you can also add a custom CSS class to each page or section by using the class field and afterwards simply define your own styles.',
        'type'        => 'colorpicker_customizer',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_customize_settings',
      ),
      
      array(
        'id'          => 'ut_site_logo',
        'label'       => 'Main Logo',
        'desc'        => 'The maximum width of the logo should be 330px and the maximum height of the logo should be 60px. And for retina logo, please double the size of your logo by keeping the aspect ratio. Learn more about the logo setup here: <a class="ut-faq-link" target="_blank" href="http://faq.unitedthemes.com/brooklyn/written-tutorials/upload-your-own-logo/">Logo Setup</a>',
        'type'        => 'upload_customizer',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_customize_settings',
      ),
      
      array(
        'id'          => 'ut_site_logo_alt',
        'label'       => 'Alternate Logo',
        'desc'        => '',
        'type'        => 'upload_customizer',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_customize_settings',
      ),
      
      array(
        'id'          => 'ut_site_logo_retina',
        'label'       => 'Retina Main Logo',
        'desc'        => '',
        'type'        => 'upload_customizer',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_customize_settings',
      ),
      
      array(
        'id'          => 'ut_site_logo_alt_retina',
        'label'       => 'Retina Alternate Logo',
        'desc'        => '',
        'type'        => 'upload_customizer',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_customize_settings',
      ),     

      
      /*
      |--------------------------------------------------------------------------
      | Sub Section Touch Icons
      |--------------------------------------------------------------------------
      */ 
      
      array(
        'id'          => 'ut_touch_settings_menu',
        'subid'       => 'ut_touch_settings',
        'label'       => 'Apple Touch Icons',
        'type'        => 'section_headline',
        'section'     => 'ut_general_settings',
      ),
      
      array(
        'id'          => 'ut_touch_setting_headline',
        'label'       => 'Apple Touch Icons',
        'desc'        => '<h2 class="section-headline">Apple Touch Icons</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_touch_settings'
      ),
      
      array(
        'id'          => 'ut_favicon',
        'label'       => 'Favicon',
        'desc'        => 'The dimension for the image must be 16x16 pixels or 32x32 pixels, using either 8-bit or 24-bit colors and the format must be one of PNG (a W3C standard), GIF, or ICO.',
        'type'        => 'upload',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_touch_settings'
      ),
        
      array(
        'id'          => 'ut_apple_touch_icon_iphone',
        'label'       => 'Apple Touch Icon IPhone',
        'desc'        => '57x57 pixel for iPhone and iPod touch. <br /> <strong>Recommended format must be one of PNG, GIF, or JPG</strong>.',
        'type'        => 'upload',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_touch_settings'
      ),
      
      array(
        'id'          => 'ut_apple_touch_icon_ipad',
        'label'       => 'Apple Touch Icon IPad',
        'desc'        => '72 x 72 pixel for IPad. <br /> <strong>Recommended format must be one of PNG, GIF, or JPG</strong>.',
        'type'        => 'upload',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_touch_settings'
      ),
      
      array(
        'id'          => 'ut_apple_touch_icon_iphone_retina',
        'label'       => 'Apple Touch Icon IPhone ( Retina )',
        'desc'        => '114 x 114 pixel for high-resolution iPhone and iPod touch. <br /> <strong>Recommended format must be one of PNG, GIF, or JPG</strong>.',
        'type'        => 'upload',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_touch_settings'
      ),
      
      array(
        'id'          => 'ut_apple_touch_icon_ipad_retina',
        'label'       => 'Apple Touch Icon IPad ( Retina )',
        'desc'        => '144 x 144 pixel for high-resolution iPad. <br /> <strong>Recommended format must be one of PNG, GIF, or JPG</strong>.',
        'type'        => 'upload',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_touch_settings'
      ),
       
      /*
      |--------------------------------------------------------------------------
      | Header Skin
      |--------------------------------------------------------------------------
      */
      
      array(
        'id'          => 'ut_navigation_settings_menu',
        'subid'       => 'ut_navigation_settings',
        'label'       => 'Navigation',
        'type'        => 'section_headline',
        'section'     => 'ut_general_settings'
      ),
      
      array(
        'id'          => 'ut_navigation_setting_headline',
        'label'       => 'Navigation',
        'desc'        => '<h2 class="section-headline">Navigation</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_navigation_settings',
      ),
       
      array(
        'id'          => 'ut_navigation_skin',
        'label'       => 'Navigation Color Skin',
        'desc'        => '',
        'type'        => 'select',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_navigation_settings',
        'std'         => 'ut-header-light',
        'choices'     => array( 
          array(
            'value'       => 'ut-header-dark',
            'label'       => 'Dark'
          ),
          array(
            'value'       => 'ut-header-light',
            'label'       => 'Light'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_navigation_width',
        'label'       => 'Navigation Width',
        'desc'        => '',
        'type'        => 'select',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_navigation_settings',
        'std'         => 'centered',
        'choices'     => array( 
          array(
            'value'       => 'centered',
            'label'       => 'Centered'
          ),
          array(
            'value'       => 'fullwidth',
            'label'       => 'Fullwidth'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_navigation_font_weight',
        'label'       => 'Navigation Font Weight',
        'desc'        => '',
        'type'        => 'select',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_navigation_settings',
        'std'         => 'normal',
        'choices'     => array( 
          array(
            'value'       => 'normal',
            'label'       => 'Normal'
          ),
          array(
            'value'       => 'bold',
            'label'       => 'Bold'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_navigation_state',
        'label'       => 'Always show navigation',
        'desc'        => 'This option makes the navigation visible all the time. If you choose "On (transparent)". The navigation will turn into the chosen skin when reaching the main content."',
        'type'        => 'select',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_navigation_settings',
        'std'         => 'off',
        'choices'     => array( 
          array(
            'value'       => 'on',
            'label'       => 'On (with chosen skin)'
          ),
          array(
            'value'       => 'on_transparent',
            'label'       => 'On (transparent)'
          ),
          array(
            'value'       => 'off',
            'label'       => 'Off'
          )
        ),
      ),
      
      
      array(
        'id'          => 'ut_navigation_level_one_color',
        'label'       => 'Navigation First Level Color',
        'desc'        => 'Change the font color of the first navigation level.',
        'type'        => 'colorpicker',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_navigation_settings',
      ),
      
      array(
        'id'          => 'ut_navigation_level_one_icon_color',
        'label'       => 'Navigation First Level Dot Color',
        'desc'        => 'Change the dot color of the first navigation level.',
        'type'        => 'colorpicker',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_navigation_settings',
      ),
      
      
      /*
      |--------------------------------------------------------------------------
      | Footer
      |--------------------------------------------------------------------------
      */
            
      array(
        'id'          => 'ut_footer_settings_menu',
        'subid'       => 'ut_footer_settings',
        'label'       => 'Footer',
        'type'        => 'section_headline',
        'section'     => 'ut_general_settings'
      ),
      
      array(
        'id'          => 'ut_footer_setting_headline',
        'label'       => 'Footer',
        'desc'        => '<h2 class="section-headline">Footer</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_footer_settings',
      ),
      
      array(
        'id'          => 'ut_footer_skin',
        'label'       => 'Footer Color Skin',
        'desc'        => '',
        'type'        => 'select',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_footer_settings',
        'std'          => 'ut-footer-light',
        'choices'     => array( 
          array(
            'value'       => 'ut-footer-dark',
            'label'       => 'Dark'
          ),
          array(
            'value'       => 'ut-footer-light',
            'label'       => 'Light'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_footer_font_weight',
        'label'       => 'Footer Font Weight',
        'desc'        => '',
        'type'        => 'select',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_footer_settings',
        'std'          => 'normal',
        'choices'     => array( 
          array(
            'value'       => 'normal',
            'label'       => 'Normal'
          ),
          array(
            'value'       => 'bold',
            'label'       => 'Bold'
          )
        ),
      ),
                  
      array(
        'id'          => 'ut_site_copyright',
        'label'       => 'Copyright',
        'desc'        => 'Adds an additional copyright to the footer of this theme.',
        'type'        => 'textarea-simple',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_footer_settings',
        'rows'        => '3'
      ),     
      
      array(
        'id'          => 'ut_footer_social_icons',
        'label'       => 'Social Icons',
        'type'        => 'list-item',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_footer_settings',
        'settings'    => array( 
          array(
            'id'          => 'icon',
            'label'       => 'Icon',
            'type'        => 'select',
            'choices'     => array( 
                  array(
                    'value'       => 'fa-adn',
                    'label'       => 'Alpha'                    
                  ),
                  array(
                    'value'       => 'fa-behance',
                    'label'       => 'Behance'                    
                  ),
                  array(
                    'value'       => 'fa-bitbucket',
                    'label'       => 'Bitbucket'                    
                  ),
                  array(
                    'value'       => 'fa-codepen',
                    'label'       => 'Codepen'                    
                  ),
                  array(
                    'value'       => 'fa-delicious',
                    'label'       => 'Delicious'                    
                  ),
                  array(
                    'value'       => 'fa-deviantart',
                    'label'       => 'Deviantart'                    
                  ),
                  array(
                    'value'       => 'fa-digg',
                    'label'       => 'Digg'                    
                  ),
                  array(
                    'value'       => 'fa-dribbble',
                    'label'       => 'Dribbble'
                  ),
                  array(
                    'value'       => 'fa-dropbox',
                    'label'       => 'Dropbox'
                  ),
                  array(
                    'value'       => 'fa-facebook',
                    'label'       => 'Facebook'
                  ),
                  array(
                    'value'       => 'fa-flickr',
                    'label'       => 'Flickr'
                  ),
                  array(
                    'value'       => 'fa-foursquare',
                    'label'       => 'Foursquare'
                  ),                  
                  array(
                    'value'       => 'fa-github',
                    'label'       => 'Github'
                  ),
                  array(
                    'value'       => 'fa-gittip',
                    'label'       => 'Gittip'
                  ),
                  array(
                    'value'       => 'fa-google-plus',
                    'label'       => 'Google Plus'
                  ),
                  array(
                    'value'       => 'fa-instagram',
                    'label'       => 'Instagram'
                  ),
                  array(
                    'value'       => 'fa-jsfiddle',
                    'label'       => 'JSFiddle'
                  ),
                  array(
                    'value'       => 'fa-linkedin',
                    'label'       => 'LinkedIn'
                  ),
                  array(
                    'value'       => 'fa-reddit',
                    'label'       => 'Reddit'
                  ),
                  array(
                    'value'       => 'fa-pinterest',
                    'label'       => 'Pinterest'
                  ),
                  array(
                    'value'       => 'fa-skype',
                    'label'       => 'Skype'
                  ),
                  array(
                    'value'       => 'fa-soundcloud',
                    'label'       => 'Soundcloud'
                  ),
                  array(
                    'value'       => 'fa-tumblr',
                    'label'       => 'Tumblr'
                  ),
                  array(
                    'value'       => 'fa-twitter',
                    'label'       => 'Twitter'
                  ),
                  array(
                    'value'       => 'fa-vimeo-square',
                    'label'       => 'Vimeo'
                  ),
                  array(
                    'value'       => 'fa-vk',
                    'label'       => 'VK'
                  ),
                  array(
                    'value'       => 'fa-xing',
                    'label'       => 'Xing'
                  ),
                  array(
                    'value'       => 'fa-youtube',
                    'label'       => 'Youtube'
                  ),
                  
                  

            ),
          ),
          array(
            'id'          => 'link',
            'label'       => 'Link',
            'type'        => 'text',
            'rows'        => '3'
          )
        )
      ),
      
      array(
        'id'          => 'ut_show_scroll_up_button',
        'label'       => 'Scroll To Top Button',
        'desc'        => 'Display "Scroll To Top" button? You can change the state of this button individually on each page.', 
        'type'        => 'select',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_footer_settings',
        'std'          => 'show',
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
      
      /*
      |--------------------------------------------------------------------------
      | Dynamic Sidebars
      |--------------------------------------------------------------------------
      */
      /*array(
        'id'          => 'ut_sidebar_settings_menu',
        'subid'          => 'ut_sidebar_settings',
        'label'       => 'Sidebars',
        'type'        => 'section_headline',
        'section'     => 'ut_general_settings'
      ),
      
      array(
        'id'          => 'ut_sidebars',
        'label'       => 'Create Sidebar',
        'type'        => 'list-item',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_sidebar_settings',
        'settings'    => array( 
          array(
            'id'          => 'ut_sidebardesc',
            'label'       => 'Sidebar Description',
            'type'        => 'text'
          )
        )
      ),*/
      
      /*
      |--------------------------------------------------------------------------
      | Cookie Options - for future update
      |--------------------------------------------------------------------------
      */      
      
      /*array(
        'id'          => 'ut_cookie_settings_menu',
        'subid'          => 'ut_cookie_settings',
        'label'       => 'Cookie Law',
        'type'        => 'section_headline',
        'section'     => 'ut_general_settings'
      ),
      
      array(
        'id'          => 'ut_cookie_setting_headline',
        'label'       => 'Cookie Law',
        'desc'        => '<h2 class="section-headline">Cookie Law</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_cookie_settings',
      ),
      
      array(
        'id'          => 'ut_activate_cookie_law',
        'label'       => 'Activate Cookie Law notification box.',
        'desc'        => '',
        'type'        => 'select',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_cookie_settings',
        'std'          => 'off',
        'choices'     => array( 
          array(
            'value'       => 'off',
            'label'       => 'off'
          ),
          array(
            'value'       => 'on',
            'label'       => 'on'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_cookie_button_accept_text',
        'label'       => 'Accept Cookie Button Text',
        'desc'        => '',
        'type'        => 'text',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_cookie_settings',
      ),
      
      array(
        'id'          => 'ut_cookie_internal_link',
        'label'       => 'Privacy Cookie Page',
        'desc'        => 'You can use this shortcode here to display a link to your own Privacy Cookie Page [ut_cookiepage].',
        'type'        => 'page_select',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_cookie_settings',
      ),
      
      array(
        'id'          => 'ut_cookie_banner_message',
        'label'       => 'Custom Hero HTML',
        'desc'        => '',
        'type'        => 'textarea',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_cookie_settings',
        'rows'        => '10',
        'std'         => '[ut_cookiepage]'
      ),
      
      array(
        'id'          => 'ut_cookie_lifetime',
        'label'       => 'Cookie Lifetime',
        'desc'        => '',
        'type'        => 'select',
        'section'     => 'ut_general_settings',
        'subsection'  => 'ut_cookie_settings',
        'std'          => 'off',
        'choices'     => array( 
          array(
            'value'       => '86400',
            'label'       => '1 Day'
          ),
          array(
            'value'       => '604800',
            'label'       => '1 Week'
          ),
          array(
            'value'       => '2592000',
            'label'       => '1 Month'
          ),
          array(
            'value'       => '7862400',
            'label'       => '3 Months'
          ),
          array(
            'value'       => '15811200',
            'label'       => '6 Months'
          ),
          array(
            'value'       => '31536000',
            'label'       => '1 Year'
          ),
          array(
            'value'       => '315360000',
            'label'       => 'Infinite'
          ),
        ),
      ), */      
      
      /*
      |--------------------------------------------------------------------------
      | Typography - Body
      |--------------------------------------------------------------------------
      */
      
      array(
        'id'          => 'ut_global_body_menu',
        'subid'          => 'ut_global_body_settings',
        'label'       => 'Body',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings'
      ),
      
      array(
        'id'          => 'ut_global_body_headline',
        'label'       => 'Body Font Face',
        'desc'        => '<h2 class="section-headline">Body Font Face</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_body_settings',
      ),
      
      array(
        'id'          => 'ut_body_font_type',
        'label'       => 'Choose Font Source',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_body_settings',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'ut-font',
            'for'         => array('ut_body_font_style'),
            'label'       => 'Theme Font'
          ),
          array(
            'value'       => 'ut-google',
            'for'          => array('ut_google_body_font_style'),
            'label'       => 'Google Font'
          )
        ),
      ),    
      
      array(
        'id'          => 'ut_google_body_font_style',
        'label'       => 'Body Font Style',
        'type'        => 'googlefont',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_body_settings'
      ),
      
      array(
        'id'          => 'ut_body_font_style',
        'label'       => 'Body Font Style',
        'desc'        => '<strong>(optional)</strong> - default regular. <a href="#" class="ut-font-preview">Preview Theme Font Style</a>',
        'std'         => 'regular',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_body_settings',
        'choices'     => array( 
          array(
            'value'       => 'extralight',

            'label'       => 'Extralight'
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
      
      /*
      |--------------------------------------------------------------------------
      | Global Headline Font Styles
      |--------------------------------------------------------------------------
      */
      array(
        'id'          => 'ut_global_htags_menu',
        'subid'       => 'ut_global_htags_settings',
        'label'       => 'General Headlines',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings'
      ),
      
      array(
        'id'          => 'ut_global_htags_headline_h1',
        'label'       => 'H1',
        'desc'        => '<h2 class="section-headline">H1</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
      ),
      
      array(
        'id'          => 'ut_global_h1_font_type',
        'label'       => 'Choose font source for H1 tags',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'ut-font',
            'for'          => array('ut_h1_font_style'),
            'label'       => 'Theme Font'
          ),
          array(
            'value'       => 'ut-google',
            'for'          => array('ut_h1_google_font_style'),
            'label'       => 'Google Font'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_h1_google_font_style',
        'label'       => 'Content H1 Font Style',
        'type'        => 'googlefont',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings'
      ), 
      
      array(
        'id'          => 'ut_h1_font_style',
        'label'       => 'Content H1 Font Style',
        'desc'        => '<strong>(optional)</strong> - default semibold. This option will affect content headlines. <a href="#" class="ut-font-preview">Preview Font Style</a>',
        'std'         => 'semibold',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
        'choices'     => array( 
          array(
            'value'       => 'extralight',
            'label'       => 'Extralight'
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
        'id'          => 'ut_global_htags_headline_h2',
        'label'       => 'H2',
        'desc'        => '<h2 class="section-headline">H2</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
      ),
            
      array(
        'id'          => 'ut_global_h2_font_type',
        'label'       => 'Choose font source for H2 tags',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'ut-font',
            'for'          => array('ut_h2_font_style'),
            'label'       => 'Theme Font'
          ),
          array(
            'value'       => 'ut-google',
            'for'          => array('ut_h2_google_font_style'),
            'label'       => 'Google Font'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_h2_google_font_style',
        'label'       => 'Content H2 Font Style',
        'type'        => 'googlefont',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings'
      ), 
      
      array(
        'id'          => 'ut_h2_font_style',
        'label'       => 'Content H2 Font Style',
        'desc'        => '<strong>(optional)</strong> - default semibold. This option will affect content headlines. <a href="#" class="ut-font-preview">Preview Font Style</a>',
        'std'         => 'semibold',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
        'choices'     => array( 
          array(
            'value'       => 'extralight',
            'label'       => 'Extralight'
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
        'id'          => 'ut_global_htags_headline_h3',
        'label'       => 'H3',
        'desc'        => '<h2 class="section-headline">H3</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
      ),
            
      array(
        'id'          => 'ut_global_h3_font_type',
        'label'       => 'Choose font source for H3 tags',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'ut-font',
            'for'          => array('ut_h3_font_style'),
            'label'       => 'Theme Font'
          ),
          array(
            'value'       => 'ut-google',
            'for'          => array('ut_h3_google_font_style'),
            'label'       => 'Google Font'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_h3_google_font_style',
        'label'       => 'Content H3 Font Style',
        'type'        => 'googlefont',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings'
      ), 
      
      array(
        'id'          => 'ut_h3_font_style',
        'label'       => 'Content H3 Font Style',
        'desc'        => '<strong>(optional)</strong> - default semibold. This option will affect content headlines. <a href="#" class="ut-font-preview">Preview Font Style</a>',
        'std'         => 'semibold',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
        'choices'     => array( 
          array(
            'value'       => 'extralight',
            'label'       => 'Extralight'
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
        'id'          => 'ut_global_htags_headline_h4',
        'label'       => 'H4',
        'desc'        => '<h2 class="section-headline">H4</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
      ),
      
      array(
        'id'          => 'ut_global_h4_font_type',
        'label'       => 'Choose font source for H4 tags',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'ut-font',
            'for'          => array('ut_h4_font_style'),
            'label'       => 'Theme Font'
          ),
          array(
            'value'       => 'ut-google',
            'for'          => array('ut_h4_google_font_style'),
            'label'       => 'Google Font'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_h4_google_font_style',
        'label'       => 'Content H4 Font Style',
        'type'        => 'googlefont',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings'
      ), 
      
      array(
        'id'          => 'ut_h4_font_style',
        'label'       => 'Content H4 Font Style',
        'desc'        => '<strong>(optional)</strong> - default semibold. This option will affect content headlines. <a href="#" class="ut-font-preview">Preview Font Style</a>',
        'std'         => 'semibold',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
        'choices'     => array( 
          array(
            'value'       => 'extralight',
            'label'       => 'Extralight'
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
        'id'          => 'ut_global_htags_headline_h5',
        'label'       => 'H5',
        'desc'        => '<h2 class="section-headline">H5</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
      ),
            
      array(
        'id'          => 'ut_global_h5_font_type',
        'label'       => 'Choose font source for H5 tags',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'ut-font',
            'for'          => array('ut_h5_font_style'),
            'label'       => 'Theme Font'
          ),
          array(
            'value'       => 'ut-google',
            'for'          => array('ut_h5_google_font_style'),
            'label'       => 'Google Font'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_h5_google_font_style',
        'label'       => 'Content H5 Font Style',
        'type'        => 'googlefont',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings'
      ), 
      
      array(
        'id'          => 'ut_h5_font_style',
        'label'       => 'Content H5 Font Style',
        'desc'        => '<strong>(optional)</strong> - default semibold. This option will affect content headlines. <a href="#" class="ut-font-preview">Preview Font Style</a>',
        'std'         => 'semibold',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
        'choices'     => array( 
          array(
            'value'       => 'extralight',
            'label'       => 'Extralight'
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
        'id'          => 'ut_global_htags_headline_h6',
        'label'       => 'H6',
        'desc'        => '<h2 class="section-headline">H6</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
      ),
      
      array(
        'id'          => 'ut_global_h6_font_type',
        'label'       => 'Choose font source for H6 tags',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'ut-font',
            'for'          => array('ut_h6_font_style'),
            'label'       => 'Theme Font'
          ),
          array(
            'value'       => 'ut-google',
            'for'          => array('ut_h6_google_font_style'),
            'label'       => 'Google Font'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_h6_google_font_style',
        'label'       => 'Content H6 Font Style',
        'type'        => 'googlefont',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings'
      ), 
      
      array(
        'id'          => 'ut_h6_font_style',
        'label'       => 'Content H6 Font Style',
        'desc'        => '<strong>(optional)</strong> - default semibold. This option will affect content headlines. <a href="#" class="ut-font-preview">Preview Font Style</a>',
        'std'         => 'semibold',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_htags_settings',
        'choices'     => array( 
          array(
            'value'       => 'extralight',
            'label'       => 'Extralight'
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
      
      /*
      |--------------------------------------------------------------------------
      | Global Header Typography and Styles
      |--------------------------------------------------------------------------
      */
      
      array(
        'id'          => 'ut_global_header_menu',
        'subid'          => 'ut_global_header_settings',
        'label'       => 'General Section Headlines',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings'
      ),
      
      array(
        'id'          => 'ut_global_header_styles_headline',
        'label'       => 'General Section Headlines',
        'desc'        => '<h2 class="section-headline">General Section Headlines</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_header_settings',
      ),
      
      array(
        'id'          => 'ut_global_headline_style',
        'label'       => 'General Section Headlines Style',
        'desc'        => '<strong>(optional)</strong> - default "Style One". This option will affect section and single page headers. <br /> <strong>Keep in mind: You can change the header style individually for each page!</strong> <a href="#" class="ut-header-preview">Preview Header Styles</a>',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_header_settings',
        'choices'     => array( 
          
          array(
            'value'       => 'pt-style-1',
            'label'       => 'Style One'
          ),
          
          array(
            'value'       => 'pt-style-2',
            'label'       => 'Style Two'
          ),
          
          array(
            'value'       => 'pt-style-3',
            'label'       => 'Style Three'
          ),
          
          array(
            'value'       => 'pt-style-4',
            'label'       => 'Style Four'
          ),
          
          array(
            'value'       => 'pt-style-5',
            'label'       => 'Style Five'
          ),
          
          array(
            'value'       => 'pt-style-6',
            'label'       => 'Style Six'
          ),
          
          array(
            'value'       => 'pt-style-7',
            'label'       => 'Style Seven'
          )
          
        ),
      ),
      
      array(
        'id'          => 'ut_global_header_font_headline',
        'label'       => 'General Section Headlines Font Face',
        'desc'        => '<h2 class="section-headline">General Section Headlines Font Face</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_header_settings',
      ),
      
      array(
        'id'          => 'ut_global_headline_font_type',
        'label'       => 'Choose Font Source',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_header_settings',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'ut-font',
            'for'          => array('ut_global_headline_font_style'),
            'label'       => 'Theme Font'
          ),
          array(
            'value'       => 'ut-google',
            'for'          => array('ut_global_google_headline_font_style'),
            'label'       => 'Google Font'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_global_google_headline_font_style',
        'label'       => 'General Section Headlines Font Style',
        'type'        => 'googlefont',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_header_settings'
      ), 
      
      array(
        'id'          => 'ut_global_headline_font_style',
        'label'       => 'General Section Headlines Font Style',
        'desc'        => '<strong>(optional)</strong> - default semibold. This option will affect section and single page headers. <br /> <strong>Keep in mind: You can change the header font style individually for each page!</strong> <a href="#" class="ut-font-preview">Preview Font Style</a>',
        'std'         => 'semibold',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_header_settings',
        'choices'     => array( 
          array(
            'value'       => 'extralight',
            'label'       => 'Extralight'
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
      
      /*
      |--------------------------------------------------------------------------
      | Global Header Lead  Typography and Styles
      |--------------------------------------------------------------------------
      */
       
      array(
        'id'          => 'ut_global_lead_menu',
        'subid'          => 'ut_global_lead_settings',
        'label'       => 'General Section Slogans',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings'
      ),
      
      array(
        'id'          => 'ut_global_lead_headline',
        'label'       => 'General Section Slogans',
        'desc'        => '<h2 class="section-headline">General Section Slogans</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_lead_settings',
      ),
      
      array(
        'id'          => 'ut_global_lead_font_type',
        'label'       => 'Choose Font Source',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_lead_settings',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'ut-font',
            'for'          => array('ut_lead_font_style'),
            'label'       => 'Theme Font'
          ),
          array(
            'value'       => 'ut-google',
            'for'          => array('ut_google_lead_font_style'),
            'label'       => 'Google Font'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_google_lead_font_style',
        'label'       => 'General Section Slogans Font Style',
        'type'        => 'googlefont',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_lead_settings'
      ), 
      
      array(
        'id'          => 'ut_lead_font_style',
        'label'       => 'General Section Slogans Font Style',
        'desc'        => '<a href="#" class="ut-font-preview">General Section Slogans Font Style</a>',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_lead_settings',
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
      
      /*
      |--------------------------------------------------------------------------
      | Hero Front Font Style
      |--------------------------------------------------------------------------
      */
      
      array(
        'id'          => 'ut_front_hero_font_style_menu',
        'subid'          => 'ut_front_hero_font_style_settings',
        'label'       => 'Front Page Hero',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings'
      ),
      
      array(
        'id'          => 'ut_front_hero_font_style_headline',
        'label'       => 'Front Page Hero Font Face',
        'desc'        => '<h2 class="section-headline">Front Page Hero Font Face</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_front_hero_font_style_settings',
      ),
      
      array(
        'id'          => 'ut_front_hero_font_type',
        'label'       => 'Choose Font Source',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_front_hero_font_style_settings',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'ut-font',
            'for'         => array('ut_front_page_hero_font_style'),
            'label'       => 'Theme Font'
          ),
          array(
            'value'       => 'ut-google',
            'for'         => array('ut_google_front_page_hero_font_style'),
            'label'       => 'Google Font'
          )
        ),
      ), 
      
     array(
        'id'          => 'ut_google_front_page_hero_font_style',
        'label'       => 'Hero Font Style',
        'type'        => 'googlefont',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_front_hero_font_style_settings'
      ),
      
      array(
        'id'          => 'ut_front_page_hero_font_style',
        'label'       => 'Hero Font Style',
        'desc'        => '<a href="#" class="ut-font-preview">Preview Font Styles</a>',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_front_hero_font_style_settings',
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
        'id'          => 'ut_front_page_hero_font_size',
        'label'       => 'Hero Caption Title Font Size',
        'desc'          => 'This option only affects Desktop view, Mobile and Tablet views are not affected. Value in em: e.g. "6em".',
        'type'        => 'text',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_front_hero_font_style_settings',
      ),      
      
      /*
      |--------------------------------------------------------------------------
      | Contact Section Header Font Style
      |--------------------------------------------------------------------------
      */
      array(
        'id'          => 'ut_csection_header_font_menu',
        'subid'       => 'ut_csection_header_font_setting',
        'label'       => 'Contact Section Header',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings'
      ),
      
      array(
        'id'          => 'ut_csection_header_font_headline',
        'label'       => 'Contact Section Header',
        'desc'        => '<h2 class="section-headline">Contact Section Header</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_csection_header_font_setting',
      ),
      
      array(
        'id'          => 'ut_csection_header_font_type',
        'label'       => 'Choose font source for Header',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_csection_header_font_setting',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'ut-font',
            'for'          => array('ut_csection_header_font_style'),
            'label'       => 'Theme Font'
          ),
          array(
            'value'       => 'ut-google',
            'for'          => array('ut_csection_header_google_font_style'),
            'label'       => 'Google Font'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_csection_header_google_font_style',
        'label'       => 'Header Font Style',
        'type'        => 'googlefont',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_csection_header_font_setting'
      ), 
      
      array(
        'id'          => 'ut_csection_header_font_style',
        'label'       => 'Header Font Style',
        'desc'        => '<strong>(optional)</strong> - default : Typography -> General Headlines. <a href="#" class="ut-font-preview">Preview Font Styles</a>',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_csection_header_font_setting',
        'choices'     => array( 
          
          array(
            'label'       => 'Default',
            'value'       => 'global'
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
      
      /*
      |--------------------------------------------------------------------------
      | Hero Blog Font Style
      |--------------------------------------------------------------------------
      */
      
      array(
        'id'          => 'ut_blog_font_style_menu',
        'subid'          => 'ut_blog_font_style_settings',
        'label'       => 'Blog Hero',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings'
      ),
      
      array(
        'id'          => 'ut_blog_font_style_headline',
        'label'       => 'Blog Hero Font Face',
        'desc'        => '<h2 class="section-headline">Blog Hero Font Face</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_blog_font_style_settings',
      ),
       
      array(
        'id'          => 'ut_blog_hero_font_type',
        'label'       => 'Choose Font Source',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_blog_font_style_settings',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'ut-font',
            'for'         => array('ut_blog_hero_font_style'),
            'label'       => 'Theme Font'
          ),
          array(
            'value'       => 'ut-google',
            'for'         => array('ut_google_blog_hero_font_style'),
            'label'       => 'Google Font'
          )
        ),
      ), 
      
      array(
        'id'          => 'ut_google_blog_hero_font_style',
        'label'       => 'Hero Font Style',
        'type'        => 'googlefont',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_blog_font_style_settings'
      ),
      
      array(
        'id'          => 'ut_blog_hero_font_style',
        'label'       => 'Hero Font Style',
        'desc'        => '<a href="#" class="ut-font-preview">Preview Font Styles</a>',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_blog_font_style_settings',
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
        'id'          => 'ut_blog_hero_font_size',
        'label'       => 'Hero Caption Title Font Size',
        'desc'          => 'This option only affects Desktop view, Mobile and Tablet views are not affected. Value in em: e.g. "6em".',
        'type'        => 'text',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_blog_font_style_settings',
      ),
      
      /*
      |--------------------------------------------------------------------------
      | Typography - Blockquote
      |--------------------------------------------------------------------------
      */
       
      array(
        'id'          => 'ut_global_blockquote_menu',
        'subid'          => 'ut_global_blockquote_settings',
        'label'       => 'Blockquotes',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings'
      ),
      
      array(
        'id'          => 'ut_global_blockquote_headline',
        'label'       => 'Blockquotes Font Face',
        'desc'        => '<h2 class="section-headline">Blockquotes Font Face</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_blockquote_settings',
      ),
      
      array(
        'id'          => 'ut_blockquote_font_type',
        'label'       => 'Choose Font Source',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_blockquote_settings',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'ut-font',
            'for'         => array('ut_blockquote_font_style'),
            'label'       => 'Theme Font'
          ),
          array(
            'value'       => 'ut-google',
            'for'         => array('ut_google_blockquote_font_style'),
            'label'       => 'Google Font'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_google_blockquote_font_style',
        'label'       => 'Blockquote Font Style',
        'type'        => 'googlefont',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_blockquote_settings'
      ),
      
      array(
        'id'          => 'ut_blockquote_font_style',
        'label'       => 'Blockquote Font Style',
        'desc'        => '<a href="#" class="ut-font-preview">Blockquote Font Styles</a>',
        'type'        => 'select',
        'section'     => 'ut_typography_settings',
        'subsection'  => 'ut_global_blockquote_settings',
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
      
      
      /*
      |--------------------------------------------------------------------------
      | Hero Front Settings
      |--------------------------------------------------------------------------
      */
      array(
        'id'          => 'ut_front_hero_setting_menu',
        'subid'          => 'ut_front_hero_settings',
        'label'       => 'Hero Settings',
        'type'        => 'section_headline',
        'section'     => 'ut_front_page_settings',
      ),
      
      array(
        'id'          => 'ut_front_hero_setting_headline',
        'label'       => 'Hero Settings',
        'desc'        => '<h2 class="section-headline">Hero Settings</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings',
      ),
      
      array(
        'id'          => 'ut_front_custom_slogan',
        'label'       => 'Custom Hero HTML',
        'desc'        => 'This field appears above the Hero Caption Slogan.',
        'type'        => 'textarea',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings',
        'rows'        => '10'
      ),
      
      array(
        'id'          => 'ut_front_expertise_slogan',
        'label'       => 'Hero Caption Slogan',
        'desc'        => 'This field appears above the Hero Caption.',
        'type'        => 'textarea-simple',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings',
        'rows'        => '5'
      ),
      
      array(
        'id'          => 'ut_front_company_slogan',
        'label'       => 'Hero Caption Title',
        'desc'        => 'This field also accepts HTML tags and shortcodes such as word rotator for example.',
        'type'        => 'textarea-simple',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings',
        'rows'        => '5'
      ),
      
      array(
        'id'          => 'ut_front_company_slogan_uppercase',
        'label'       => 'Uppercase',
        'desc'        => 'Display the Hero Caption Title in uppercase letters?',
        'type'        => 'radio',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings',
        'std'          => 'on',
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
        'id'          => 'ut_front_company_slogan_color',
        'label'       => 'Color',
        'desc'        => '<strong>(optional)</strong> - set\'s an alternative for <strong>Hero Caption Title</strong>.',
        'type'        => 'colorpicker',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings'
      ),
      
      array(
        'id'          => 'ut_front_catchphrase',
        'label'       => 'Hero Caption Description',
        'desc'        => 'This field appears beneath the Hero Caption.  ',
        'type'        => 'textarea-simple',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings',
        'rows'        => '5'
      ),
      
      array(
        'id'          => 'ut_front_expertise_slogan_color',
        'label'       => 'Color',
        'desc'        => '<strong>(optional)</strong> - set\'s an alternative for <strong>Hero Caption Description</strong>.',
        'type'        => 'colorpicker',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings'
      ),      
      
      array(
        'id'          => 'ut_front_scroll_to_main',
        'label'       => 'Main Button Text',
        'desc'        => 'Enter your desired text or leave this field empty to hide the scroll to button.',
        'type'        => 'text',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings'
      ),
      
      array(
        'id'          => 'ut_front_scroll_to_main_url_type',
        'label'       => 'Main Button Link Type',
        'desc'        => 'Do you like to link to a section or external URL?',
        'type'        => 'radio_group',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings',
        'std'          => 'section',
        'choices'     => array( 
          array(
            'value'       => 'section',
            'for'         => array('ut_front_scroll_to_main_target'),
            'label'       => 'to a section of the front page!'
          ),
          array(
            'value'       => 'external',
            'for'         => array('ut_front_scroll_to_main_url' , 'ut_front_scroll_to_main_link_target'),
            'label'       => 'to an external url!'
          ),          
        )
      ),
      
      array(
        'id'          => 'ut_front_scroll_to_main_target',
        'label'       => 'Scroll to Section',
        'desc'        => 'Select the section you like to main button. Leave empty ( set to -- Choose One -- ) to scroll to the first section.',
        'type'        => 'section-select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings'
      ),
      
      array(
        'id'          => 'ut_front_scroll_to_main_url',
        'label'       => 'Main Button URL',
        'desc'        => 'Enter your desired URL. Do not forget to place "http://" in front of your link.',
        'type'        => 'text',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings'
      ),
      
      array(
        'id'          => 'ut_front_scroll_to_main_link_target',
        'label'       => 'Main Button Target',
        'type'        => 'select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings',
        'std'          => '_blank',
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
        'id'          => 'ut_front_second_button',
        'label'       => 'Need a second button?',
        'desc'        => 'You can optionally style this button inside the "Hero Styling" tab.',
        'type'        => 'radio_group',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings',
        'std'          => 'off',
        'choices'     => array( 
          array(
            'value'       => 'off',
            'for'         =>  array(''),
            'label'       => 'no thanks!'
          ),
          array(
            'value'       => 'on',
            'for'         => array('ut_front_second_button_text','ut_front_second_button_url_type','ut_front_second_button_scroll_target','ut_front_second_button_url','ut_front_second_target'),
            'label'       => 'yes please!'
          ),          
        )
      ),
      
      array(
        'id'          => 'ut_front_second_button_text',
        'label'       => 'Second Button Text',
        'desc'        => 'Enter your desired buttontext.',
        'type'        => 'text',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings'
      ),
      
      array(
        'id'          => 'ut_front_second_button_url_type',
        'label'       => 'Second Button Link Type',
        'desc'        => 'Would you like to link to a section or external URL?"',
        'type'        => 'radio_group',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings',
        'std'          => 'section',
        'choices'     => array( 
          array(
            'value'       => 'section',
            'for'         =>  array('ut_front_second_button_scroll_target'),
            'label'       => 'to a section of the front page!'
          ),
          array(
            'value'       => 'external',
            'for'         =>  array('ut_front_second_button_url','ut_front_second_button_target'),
            'label'       => 'to an external url!'
          ),          
        )
      ),      
      
      array(
        'id'          => 'ut_front_second_button_scroll_target',
        'label'       => 'Scroll to Section',
        'desc'        => 'Select the section you like to scroll to. Leave empty to scroll to the first section.',
        'type'        => 'section-select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings'
      ),
      
      array(
        'id'          => 'ut_front_second_button_url',
        'label'       => 'Second Button URL',
        'desc'        => 'Enter your desired URL. Do not forget to place "http://" in front of your link.',
        'type'        => 'text',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings'
      ),
      
      array(
        'id'          => 'ut_front_second_button_target',
        'label'       => 'Second Button Target',
        'type'        => 'select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_settings',
        'std'          => '_blank',
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
      
      /*
      |--------------------------------------------------------------------------
      | Hero Styling
      |--------------------------------------------------------------------------
      */
      
      array(
        'id'          => 'ut_front_hero_styling_menu',
        'subid'          => 'ut_front_hero_styling_settings',
        'label'       => 'Hero Styling',
        'type'        => 'section_headline',
        'section'     => 'ut_front_page_settings',
      ),
      
      array(
        'id'          => 'ut_front_hero_styling_headline',
        'label'       => 'Hero Styling',
        'desc'        => '<h2 class="section-headline">Hero Styling</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_styling_settings',
      ),
      
      array(
        'id'          => 'ut_front_page_hero_style',
        'label'       => 'Hero Style',
        'desc'        => 'Choose between 11 different hero header styles. If you are using a slider as your desired hero type, you can define an individual style for each slide. <a href="#" class="ut-hero-preview">Preview Hero Styles</a>',
        'type'        => 'select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_styling_settings',
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
        'id'          => 'ut_front_page_hero_align',
        'label'       => 'Choose Hero Alignment',
        'type'        => 'select',
        'desc'          => '',
        'std'          => 'center',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_styling_settings',
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
        'id'          => 'ut_front_page_overlay',
        'label'       => 'Activate Overlay',
        'desc'        => '<strong>(optional)</strong>',
        'std'         => 'on',
        'type'        => 'select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_styling_settings',
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
        'id'          => 'ut_front_page_overlay_pattern',
        'label'       => 'Activate Overlay Pattern',
        'desc'        => '<strong>(optional)</strong>',
        'std'         => 'on',
        'type'        => 'select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_styling_settings',
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
        'id'          => 'ut_front_page_overlay_pattern_style',
        'label'       => 'Overlay Pattern Style',
        'desc'        => '<strong>(optional)</strong>',
        'std'         => 'style_one',
        'type'        => 'select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_styling_settings',
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
        'id'          => 'ut_front_page_overlay_color',
        'label'       => 'Overlay Color',
        'desc'        => '<strong>(optional)</strong>',
        'type'        => 'colorpicker',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_styling_settings',
      ),
      
      array(
        'id'          => 'ut_front_page_overlay_color_opacity',
        'label'       => 'Color Opacity',
        'desc'        => '<strong>(optional)</strong>',
        'type'        => 'numeric-slider',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_styling_settings',
        'min_max_step'=> '0,1,0.1'
      ),      
      
      array(
        'id'          => 'ut_front_scroll_to_main_style',
        'label'       => 'Choose hero button style',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_styling_settings',
        'std'          => 'default',
        'choices'     => array( 
          array(
            'value'       => 'default',
            'for'         => array(''),
            'label'       => 'default'
          ),
          array(
            'value'       => 'custom',
            'for'         => array('ut_front_hrbtn'),
            'label'       => 'custom'
          ),      
        ),
      ),
      
      array(
        'id'          => 'ut_front_hrbtn',
        'label'       => 'Custom Button Styling',
        'desc'        => '',
        'type'        => 'button_builder',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_styling_settings',
      ),
      
      array(
        'id'          => 'ut_front_second_button_style',
        'label'       => 'Choose hero second button style',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_styling_settings',
        'std'          => 'default',
        'choices'     => array( 
          array(
            'value'       => 'default',
            'for'         => array(),
            'label'       => 'default'
          ),
          array(
            'value'       => 'custom',
            'for'         => array('ut_front_second_hrbtn'),
            'label'       => 'custom'
          ),      
        ),
      ),
      
      array(
        'id'          => 'ut_front_second_hrbtn',
        'label'       => 'Custom Button Styling',
        'desc'        => '',
        'type'        => 'button_builder',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_styling_settings',
      ),
      
      /*
      |--------------------------------------------------------------------------
      | Hero Type
      |--------------------------------------------------------------------------
      */
      
      array(
        'id'          => 'ut_front_hero_background_menu',
        'subid'       => 'ut_front_hero_background_settings',
        'label'       => 'Hero Type',
        'type'        => 'section_headline',
        'section'     => 'ut_front_page_settings'
      ),
      
      array(
        'id'          => 'ut_front_hero_background_headline',
        'label'       => 'Hero Type',
        'desc'        => '<h2 class="section-headline">Hero Type</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      array(
        'id'          => 'ut_front_page_header_type',
        'label'       => 'Choose Hero Type',
        'type'        => 'select_group',
        'toplevel'    => true,
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
        'choices'     => array( 
          array(
            'value'       => 'image',
            'for'         => array( 
                                'ut_front_header_image',
                                'ut_front_header_parallax',
                                'ut_front_header_rain',
                                'ut_front_header_rain_sound'
            ),
            'label'       => 'Single Background Image'
          ),
          array(
            'value'       => 'animatedimage',
            'for'         => array('ut_front_header_animatedimage'),
            'label'       => 'Animated Single Background Image'
          ),
          array(
            'value'       => 'splithero',
            'for'         => array( 
                                'ut_front_header_image',
                                'ut_front_header_parallax',
                                'ut_front_header_rain',
                                'ut_front_header_rain_sound',
                                'ut_front_split_image',
                                'ut_front_split_image_max_width',
                                'ut_front_split_image_effect',
                                'ut_front_split_content_type',
                                'ut_front_split_video',
                                'ut_front_split_video_box',
                                'ut_front_split_video_box_style'
            ),
            'label'       => 'Split Hero'
          ),
          array(
            'value'       => 'slider',
            'for'         => array( 
                                'ut_front_page_slider',
                                'front_animation_speed',
                                'front_slideshow_speed',
                                'ut_front_page_slider'
            ),
            'label'       => 'Background Image Slider'
          ),
          array(
            'value'       => 'transition',
            'for'         => array(
                                'ut_front_page_fancy_slider',
                                'front_fancy_slider_effect',
                                'front_fancy_slider_height'
            ),
            'label'       => 'Fancy Image Slider'
          ),
          array(
            'value'       => 'tabs',
            'for'         => array(
                                'ut_front_header_image',
                                'ut_front_header_parallax',
                                'ut_front_page_tabs_headline',
                                'ut_front_page_tabs_headline_style',
                                'ut_front_page_tabs'
            ),
            'label'       => 'Tablet Slider'
          ),
          array(
            'value'       => 'video',
            'for'         => array(
                                'ut_front_video_setting_description',
                                'ut_front_video_source',
                                'ut_front_video',
                                'ut_front_video_custom',
                                'ut_front_video_mp4',
                                'ut_front_video_ogg',
                                'ut_front_video_webm',
                                'ut_front_video_sound',
                                'ut_front_video_loop',
                                'ut_front_video_preload',
                                'ut_video_mute_button',
                                'ut_front_video_volume',
                                'ut_front_video_poster'
            ),
            'label'       => 'Video Header'
          ),
          array(
            'value'       => 'custom',
            'for'         => array('front_hero_custom_shortcode'),
            'label'       => 'Custom Shortcode'
          ),
          array(
            'value'       => 'dynamic',
            'for'         => array('front_hero_dynamic_content'),
            'label'       => 'Dynamic Hero ( dynamic height )'
          )
        ),
      ),
      
      /*
      | Image Tab Slider
      */
      
      array(
        'id'          => 'ut_front_page_tabs_headline',
        'label'       => 'Tablet Headline',
        'type'        => 'text',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      array(
        'id'          => 'ut_front_page_tabs_headline_style',
        'label'       => 'Tablet Headline Font Style',
        'desc'          => '',
        'type'        => 'select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
        'std'          => 'global',
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
        'id'          => 'ut_front_page_tabs',
        'label'       => 'Manage Tablet Images',
        'type'        => 'list-item',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
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
        'id'          => 'ut_front_header_parallax',
        'label'       => 'Activate Parallax',
        'desc'        => 'Keep in mind, that activating this option can reduce your website performance.',
        'type'        => 'select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
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
        'id'          => 'ut_front_header_rain',
        'label'       => 'Activate Rain Effect',
        'desc'        => 'Keep in mind, that activating this option can reduce your website performance.',
        'type'        => 'select',
        'section'     => 'ut_front_page_settings',
        'std'         => 'off',
        'subsection'  => 'ut_front_hero_background_settings',
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
        'id'          => 'ut_front_header_rain_sound',
        'label'       => 'Activate Rain Sound',
        'type'        => 'select',
        'section'     => 'ut_front_page_settings',
        'std'          => 'off',
        'subsection'  => 'ut_front_hero_background_settings',
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
        'id'          => 'ut_front_header_image',
        'label'       => 'Background Image',
        'desc'        => 'For best image results, we recommend to upload an image with minimum size of 1600x900 pixel or maximum size of 1920x1080(optimal) pixel. Also try to avoid uploading images with more than 200-300Kb size. Keep in mind, that you are not able to set a background position or attachment if the parallax option has been set to "on".',
        'type'        => 'background',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      array(
        'id'          => 'ut_front_split_content_type',
        'label'       => 'Hero Split Content Type',
        'desc'        => '',
        'type'        => 'select_group',
        'choices'     => array( 
          array(
            'value'       => 'image',
            'for'         => array('ut_front_split_image','ut_front_split_image_max_width','ut_front_split_image_effect'),
            'label'       => 'Image'
          ),
          array(
            'value'       => 'video',
            'for'         => array('ut_front_split_video','ut_front_split_video_box','ut_front_split_video_box_style'),
            'label'       => 'Video'
          )
        ),
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      array(
        'id'          => 'ut_front_split_video',
        'label'       => 'Hero Split Video',
        'desc'        => 'This video will display on the right side of the hero caption. It will not display on mobile devices! Please use the only embed codes from youtube or vimeo.',
        'type'        => 'textarea_simple',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      array(
          'id'          => 'ut_front_split_video_box',
          'label'       => 'Activate Hero Split Video Box',
          'desc'        => '',
          'type'        => 'select_group',
          'choices'     => array( 
            array(
              'value'       => 'on',
              'for'         => array('ut_front_split_video_box_style'),
              'label'       => 'yes, please!'
            ),
            array(
              'value'       => 'off',
              'for'         => array(),
              'label'       => 'no, thanks!'
            )
          ),
          'section'     => 'ut_front_page_settings',
          'subsection'  => 'ut_front_hero_background_settings',
          
      ),
      
      array(
          'id'          => 'ut_front_split_video_box_style',
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
          'section'     => 'ut_front_page_settings',
          'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      array(
        'id'          => 'ut_front_split_image',
        'label'       => 'Hero Split Image',
        'desc'        => 'This image will display on the right side of the hero caption. It will not display on mobile devices!',
        'type'        => 'upload',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      array(
        'id'          => 'ut_front_split_image_effect',
        'label'       => 'Hero Split Image Animation Effect',
        'desc'        => 'Choose animation effect for Hero Split Image.',
        'type'        => 'select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
        'std'          => 'none',
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
        'id'          => 'ut_front_split_image_max_width',
        'label'       => 'Image Max Width',
        'desc'        => 'Adjust this value until the image fits inside the hero. Default "60".',
        'type'        => 'numeric-slider',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
        'std'         => '60',
        'min_max_step'=> '0,100,1'
      ),
            
      /*
      | Animated Image Type
      */
      array(
        'id'          => 'ut_front_header_animatedimage',
        'label'       => 'Animated Background Image',
        'desc'        => '',
        'type'        => 'upload',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      /*
      | Slider Type
      */
      
      array(
        'id'          => 'front_animation_speed',
        'label'       => 'Animation Speed',
        'desc'        => 'Set the speed of animations, in milliseconds.',
        'type'        => 'text',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      array(
        'id'          => 'front_slideshow_speed',
        'label'       => 'Slideshow Speed',
        'desc'        => 'Set the speed of the slideshow cycling, in milliseconds.',
        'type'        => 'text',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      array(
        'id'          => 'ut_front_page_slider',
        'label'       => 'Slider',
        'type'        => 'list-item',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
        'settings'    => array( 
          array(
            'id'          => 'image',
            'label'       => 'Image',
            'type'        => 'upload',
          ),
          array(
            'id'          => 'style',
            'label'       => 'Caption / Hero Style',
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
            'label'       => 'Caption / Hero Font Style',
            'desc'          => 'Setting this option to default will load the hero font style ( which has been set under Front Page Settings -> Hero Settings).',
            'type'        => 'select',
            'std'          => 'global',
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
            'desc'          => '',
            'std'          => 'center',
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
            'std'          => 'top',
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
            'label'       => 'Caption Slogan',
            'type'        => 'textarea-simple',
            'rows'        => '3'
          ),
          array(
            'id'          => 'description',
            'label'       => 'Caption',
            'type'        => 'textarea-simple',
            'rows'        => '3'
          ),
          array(
            'id'          => 'catchphrase',
            'label'       => 'Caption Description',
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
        'id'          => 'ut_front_page_fancy_slider',
        'label'       => 'Fancy Slider',
        'type'        => 'list-item',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
        'settings'    => array( 
          array(
            'id'          => 'image',
            'label'       => 'Image',
            'type'        => 'upload',
          ),
          array(
            'id'          => 'style',
            'label'       => 'Caption / Hero Style',
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
            'label'       => 'Caption / Hero Font Style',
            'desc'          => 'Setting this option to default will load the hero font style ( which has been set under Front Page Settings -> Hero Settings ).',
            'type'        => 'select',
            'std'          => 'global',
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
            'std'          => 'left',
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
            'label'       => 'Caption Slogan',
            'type'        => 'textarea-simple',
            'rows'        => '3'
          ),
          array(
            'id'          => 'description',
            'label'       => 'Caption',
            'type'        => 'textarea-simple',
            'rows'        => '3'
          ),
          array(
            'id'          => 'catchphrase',
            'label'       => 'Caption Description',
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
            'id'          => 'scroll_to_target',
            'label'       => 'Scroll to Content Target',
            'desc'        => 'Select the page, section you like to scroll to. Leave empty to scroll to the first section.',
            'type'        => 'section-select',
          ),
          array(
            'id'          => 'link_description',
            'label'       => 'Link Button Text',
            'type'        => 'text'
          )
        )
      ),
      
      array(
        'id'          => 'front_fancy_slider_effect',
        'label'       => 'Slide Effect',
        'desc'        => 'Choose an effect for your slider, this effect will affect all slides.',
        'type'        => 'select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
        'std'         => 'fxSoftScale',
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
        'id'          => 'front_fancy_slider_height',
        'label'       => 'Slider Height',
        'desc'        => 'Set the height of the slideshow in pixel e.g. 600px.',
        'type'        => 'text',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      /*
      | Custom Shortcode
      */
      
      array(
        'id'          => 'front_hero_custom_shortcode',
        'label'       => 'Custom Shortcode',
        'desc'        => '',
        'type'        => 'text',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      /*
      | Dynamic
      */
      
      array(
        'id'          => 'front_hero_dynamic_content',
        'label'       => 'Custom Hero Content',
        'desc'        => '',
        'type'        => 'textarea',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      /*
      | Video
      */
      
      array(
        'id'          => 'ut_front_video_setting_description',
        'label'       => 'Video',
        'desc'        => 'At the current stage the theme only supports youtube videos as well as selfhosted videos. Custom Player are possible, but using them will cause many hero options not taking effect. If a mobile or tablet device is visiting the site, the video hero support will be dropped and the theme will display a poster image instead. The main reason for this behavior is, that most mobile and tablet devices do not support the video backgrounds.',
        'type'        => 'textblock',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      array(
        'id'          => 'ut_front_video_source',
        'label'       => 'Video Source',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
        'std'          => 'youtube',
        'choices'     => array( 
          array(
            'value'       => 'youtube',
            'for'         => array('ut_front_video','ut_front_video_sound','ut_front_video_loop','ut_video_mute_button','ut_front_video_volume','ut_front_video_poster'),
            'label'       => 'Youtube'
          ),
          array(
            'value'       => 'selfhosted',
            'for'         => array('ut_front_video_mp4','ut_front_video_ogg','ut_front_video_webm','ut_front_video_sound','ut_front_video_loop','ut_front_video_preload','ut_video_mute_button','ut_front_video_volume','ut_front_video_poster'),
            'label'       => 'Selfthosted'
          ),
          array(
            'value'       => 'custom',
            'for'         => array('ut_front_video_custom'),
            'label'       => 'Custom Embedded Code'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_front_video',
        'label'       => 'Video URL for front page.',
        'desc'        => 'Please insert the url only e.g. http://youtu.be/gvt_YFuZ8LA . Please do not insert the complete embedded code! This video will be displayed on the front page.',
        'type'        => 'text',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      array(
        'id'          => 'ut_front_video_custom',
        'label'       => 'Video embedded code for front page.',
        'desc'        => 'Please insert the complete embedded code of your favorite video hoster! This video will be displayed on the front page. Keep in mind, that hero settings like "Hero Caption" do not display if this type of video source is active.',
        'type'        => 'textarea-simple',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      array(
        'id'          => 'ut_front_video_mp4',
        'label'       => 'MP4',
        'desc'        => '',
        'type'        => 'upload',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
       array(
        'id'          => 'ut_front_video_ogg',
        'label'       => 'OGG',
        'desc'        => '',
        'type'        => 'upload',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',

      ),
      
       array(
        'id'          => 'ut_front_video_webm',
        'label'       => 'WEBM',
        'desc'        => '',
        'type'        => 'upload',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      array(
        'id'          => 'ut_front_video_sound',
        'label'       => 'Activate video sound after page is loaded?',
        'desc'        => '<strong>(optional)</strong>. Play sound directly when page is loaded.',
        'std'         => 'off',
        'type'        => 'select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
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
        'id'              => 'ut_front_video_loop',
        'label'           => 'Loop Video?',
        'desc'            => '',
        'type'            => 'select',
        'section'         => 'ut_front_page_settings',
        'subsection'      => 'ut_front_hero_background_settings',
        'choices'         => array(
          
          array(
            'label'       => 'yes, please!',
            'value'       => 'on'
          ),
          array(
            'label'       => 'no, thanks!',
            'value'       => 'off'
          )
          
        ),
        'std'             => 'on'
      ),
      
      array(
        'id'              => 'ut_front_video_preload',
        'label'           => 'Preload Video?',
        'desc'            => '',
        'type'            => 'select',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
        'choices'         => array(
          
          array(
            'label'       => 'yes, please!',
            'value'       => 'on'
          ),
          array(
            'label'       => 'no, thanks!',
            'value'       => 'off'
          )
          
        ),
        'std'             => 'on'
      ),
            
      array(
        'id'              => 'ut_video_mute_button',
        'label'           => 'Show Mute Button?',
        'desc'            => '',
        'type'            => 'select',
        'section'       => 'ut_front_page_settings',
        'subsection'    => 'ut_front_hero_background_settings',
        'choices'         => array(
          
          array(
            'label'       => 'yes, please!',
            'value'       => 'show'
          ),
          array(
            'label'       => 'no, thanks!',
            'value'       => 'hide'
          )
          
        ),
        'std'             => 'hide'
      ),
      
      array(
        'id'          => 'ut_front_video_volume',
        'label'       => 'Video Volume',
        'desc'        => '1-100 - default 5',
        'std'         => '5',
        'type'        => 'numeric-slider',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
        'min_max_step'=> '0,100,1'
      ),      
                  
      array(
        'id'          => 'ut_front_video_poster',
        'label'       => 'Poster Image',
        'desc'        => 'This image will be displayed instead of the video on mobile devices.',
        'type'        => 'upload',
        'section'     => 'ut_front_page_settings',
        'subsection'  => 'ut_front_hero_background_settings',
      ),
      
      /*
      |--------------------------------------------------------------------------
      | Hero Blog Setting
      |--------------------------------------------------------------------------
      */ 
      
      array(
        'id'          => 'ut_blog_hero_settings_menu',
        'subid'          => 'ut_blog_hero_settings',
        'label'       => 'Hero Settings',
        'desc'        => '<h2 class="section-headline">Hero Settings</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_blog_settings'
      ),
      
      array(
        'id'          => 'ut_blog_hero_settings_headline',
        'label'       => 'Hero Settings',
        'desc'        => '<h2 class="section-headline">Hero Settings</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
      ),
      
      array(
        'id'          => 'ut_blog_custom_slogan',
        'label'       => 'Custom Hero HTML',
        'desc'        => 'This field appears above the Caption Slogan.',
        'type'        => 'textarea',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
        'rows'        => '10'
      ),
      
      array(
        'id'          => 'ut_blog_expertise_slogan',
        'label'       => 'Caption Slogan',
        'desc'        => 'This field appears above the Hero Caption.',
        'type'        => 'textarea-simple',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
        'rows'        => '5'
      ),
      
      array(
        'id'          => 'ut_blog_company_slogan',
        'label'       => 'Hero Caption',
        'desc'        => 'This field also accepts HTML tags and shortcodes such as word rotator for example.',
        'type'        => 'textarea-simple',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
        'rows'        => '5'
      ),
      
      array(
        'id'          => 'ut_blog_company_slogan_uppercase',
        'label'       => 'Uppercase',
        'desc'        => 'Display the Hero Caption Title in uppercase letters?',
        'type'        => 'radio',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
        'std'          => 'on',
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
        'id'          => 'ut_blog_company_slogan_color',
        'label'       => 'Color',
        'desc'        => '<strong>(optional)</strong>',
        'type'        => 'colorpicker',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
      ),
      
      array(
        'id'          => 'ut_blog_catchphrase',
        'label'       => 'Caption Description',
        'desc'        => 'This field appears beneath the Hero Caption.',
        'type'        => 'textarea-simple',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
        'rows'        => '5'
      ),
      
      array(
        'id'          => 'ut_blog_expertise_slogan_color',
        'label'       => 'Color',
        'desc'        => '<strong>(optional)</strong>',
        'type'        => 'colorpicker',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
      ),
      
      array(
        'id'          => 'ut_blog_scroll_to_main',
        'label'       => 'Scroll to Blog Text',
        'desc'        => 'Enter your desired text or leave this field empty to hide the scroll to button.',
        'type'        => 'text',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
      ),
      
      array(
        'id'          => 'ut_blog_second_button',
        'label'       => 'Need a second button?',
        'desc'        => 'You can optionally style this button inside the "Hero Styling" tab.',
        'type'        => 'radio_group',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
        'std'          => 'off',
        'choices'     => array( 
          array(
            'value'       => 'off',
            'for'         => array(''),
            'label'       => 'no thanks!'
          ),
          array(
            'value'       => 'on',
            'for'         => array(
                                'ut_blog_second_button_text',
                                'ut_blog_second_button_url',
                                'ut_blog_second_button_target'
            ),
            'label'       => 'yes please!'
          ),          
        )
      ),
      
     array(
        'id'          => 'ut_blog_second_button_text',
        'label'       => 'Second Button Text',
        'desc'        => 'Enter your desired buttontext',
        'type'        => 'text',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
      ),
      
      array(
        'id'          => 'ut_blog_second_button_url',
        'label'       => 'Second Button URL',
        'desc'        => 'Enter your desired URL. Do not forget to place "http://" in front of your link.',
        'type'        => 'text',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
      ),
      
      array(
        'id'          => 'ut_blog_second_button_target',
        'label'       => 'Second Button Target',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
        'std'          => '_blank',
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
      
      /*array(
        'id'          => 'ut_blog_scroll_to_main_style',
        'label'       => 'Choose button style ( requires unitedthemes shortcode plugin )',
        'desc'        => '',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_settings',
        'std'          => 'ut-font',
        'choices'     => array( 
          array(
            'value'       => 'red',
            'label'       => 'Red'
          ),
          array(
            'value'       => 'turquoise',
            'label'       => 'Turquoise'
          ),
          array(
            'value'       => 'green',
            'label'       => 'Green'
          ),
          array(
            'value'       => 'blue',
            'label'       => 'Blue'
          ),
          array(
            'value'       => 'mid-blue',
            'label'       => 'Mid Blue'
          ),
          array(
            'value'       => 'yellow',
            'label'       => 'Yellow'
          ),
          array(
            'value'       => 'purple',
            'label'       => 'Purple'
          ),
          array(
            'value'       => 'orange',
            'label'       => 'Orange'
          ),
          array(
            'value'       => 'theme-btn',
            'label'       => 'Theme Button'
          )
          
        ),
      ),*/
      
      /*
      |--------------------------------------------------------------------------
      | Hero Blog Styling
      |--------------------------------------------------------------------------
      */
      
      array(
        'id'          => 'ut_blog_hero_styling_menu',
        'subid'          => 'ut_blog_hero_styling_settings',
        'label'       => 'Hero Styling',
        'type'        => 'section_headline',
        'section'     => 'ut_blog_settings',
      ),
      
      array(
        'id'          => 'ut_blog_hero_styling_headline',
        'label'       => 'Hero Styling',
        'desc'        => '<h2 class="section-headline">Hero Styling</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_styling_settings',
      ),
      
      array(
        'id'          => 'ut_blog_hero_style',
        'label'       => 'Hero Style',
        'desc'        => 'Choose between 11 different hero header styles. If you are using a slider as your desired hero type, you can define an individual style for each slide.<a href="#" class="ut-hero-preview">Preview Hero Styles</a>',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_styling_settings',
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
            'label'       => 'Style Seven',
            'src'         => ''
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
        'id'          => 'ut_blog_hero_align',
        'label'       => 'Choose Hero Alignment',
        'type'        => 'select',
        'desc'          => '',
        'std'          => 'center',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_styling_settings',
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
        'id'          => 'ut_blog_overlay',
        'label'       => 'Activate Overlay',
        'desc'        => '<strong>(optional)</strong>',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_styling_settings',
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
        'id'          => 'ut_blog_overlay_pattern',
        'label'       => 'Activate Overlay Pattern',
        'desc'        => '<strong>(optional)</strong>',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_styling_settings',
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
        'id'          => 'ut_blog_overlay_pattern_style',
        'label'       => 'Overlay Pattern Style',
        'desc'        => '<strong>(optional)</strong>',
        'std'          => 'style_one',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_styling_settings',
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
        'id'          => 'ut_blog_overlay_color',
        'label'       => 'Overlay Color',
        'desc'        => '<strong>(optional)</strong>',
        'type'        => 'colorpicker',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_styling_settings',
      ),
      
      array(
        'id'          => 'ut_blog_overlay_color_opacity',
        'label'       => 'Color Opacity',
        'desc'        => '<strong>(optional)</strong>',
        'type'        => 'numeric-slider',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_styling_settings',
        'min_max_step'=> '0,1,0.1'
      ),
      
      array(
        'id'          => 'ut_blog_scroll_to_main_style',
        'label'       => 'Main Button Style',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_styling_settings',
        'std'          => 'default',
        'choices'     => array( 
          array(
            'value'       => 'default',
            'for'         => array(''),
            'label'       => 'default'
          ),
          array(
            'value'       => 'custom',
            'for'         => array('ut_blog_hrbtn'),
            'label'       => 'custom'
          ),      
        ),
      ),
      
      array(
        'id'          => 'ut_blog_hrbtn',
        'label'       => 'Custom Button Styling',
        'desc'        => '',
        'type'        => 'button_builder',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_styling_settings',
      ),
      
      array(
        'id'          => 'ut_blog_second_button_style',
        'label'       => 'Second Button Style',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_styling_settings',
        'std'          => 'default',
        'choices'     => array( 
          array(
            'value'       => 'default',
            'for'         => array(''),
            'label'       => 'default'
          ),
          array(
            'value'       => 'custom',
            'for'         => array('ut_blog_second_hrbtn'),
            'label'       => 'custom'
          ),      
        ),
      ),
      
      array(
        'id'          => 'ut_blog_second_hrbtn',
        'label'       => 'Custom Button Styling',
        'desc'        => '',
        'type'        => 'button_builder',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_styling_settings',
      ),
      
      
      /*
      |--------------------------------------------------------------------------
      | Hero Blog Type
      |--------------------------------------------------------------------------
      */
      array(
        'id'          => 'ut_blog_hero_background_menu',
        'subid'       => 'ut_blog_hero_background_settings',
        'label'       => 'Hero Type',
        'type'        => 'section_headline',
        'section'     => 'ut_blog_settings'
      ),
      
      array(
        'id'          => 'ut_blog_hero_background_headline',
        'label'       => 'Hero Type',
        'desc'        => '<h2 class="section-headline">Hero Type</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
      ),
      
      array(
        'id'          => 'ut_blog_header_type',
        'label'       => 'Header Type',
        'type'        => 'select_group',
        'toplevel'    => true,
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
        'choices'     => array( 
          array(
            'value'       => 'image',
            'for'         => array(
                                'ut_blog_header_image',
                                'ut_blog_header_parallax',
                                'ut_blog_header_rain',
                                'ut_blog_header_rain_sound'
            ),
            'label'       => 'Single Background Image'
          ),
          array(
            'value'       => 'animatedimage',
            'for'         => array('ut_blog_header_animatedimage'),
            'label'       => 'Animated Single Background Image'
          ),
          array(
            'value'       => 'splithero',
            'for'         => array(
                                'ut_blog_header_image',
                                'ut_blog_header_parallax',
                                'ut_blog_header_rain',
                                'ut_blog_header_rain_sound',
                                'ut_blog_split_image',
                                'ut_blog_split_image_max_width',
                                'ut_blog_split_image_effect',
                                'ut_blog_split_content_type',
                                'ut_blog_split_video',
                                'ut_blog_split_video_box',
                                'ut_blog_split_video_box_style'
            ),
            'label'       => 'Split Hero'
          ),
          array(
            'value'       => 'slider',
            'for'         => array(
                                'ut_blog_slider',
                                'blog_animation_speed',
                                'blog_slideshow_speed'
            ),
            'label'       => 'Background Image Slider'
          ),
          array(
            'value'       => 'transition',
            'for'         => array(
                                'ut_blog_fancy_slider',
                                'blog_fancy_slider_effect',
                                'blog_fancy_slider_height'                                
            ),
            'label'       => 'Fancy Transition Slider'
          ),
          array(
            'value'       => 'tabs',
            'for'         => array(
                                'ut_blog_header_image',
                                'ut_blog_header_parallax',
                                'ut_blog_tabs_headline',
                                'ut_blog_tabs_headline_style',
                                'ut_blog_tabs'
            ),
            'label'       => 'Tablet Slider'
          ),
          array(
            'value'       => 'video',
            'for'         => array(
                                'ut_blog_video_setting_description',
                                'ut_blog_video_source',
                                'ut_blog_video',
                                'ut_blog_video_custom',
                                'ut_blog_video_mp4',
                                'ut_blog_video_ogg',
                                'ut_blog_video_webm',
                                'ut_blog_video_sound',
                                'ut_blog_video_loop',
                                'ut_blog_video_preload',
                                'ut_video_mute_button_blog',
                                'ut_blog_video_volume',
                                'ut_blog_video_poster'
            ),
            'label'       => 'Video Header'
          ),
          array(
            'value'       => 'custom',
            'for'         => array('blog_hero_custom_shortcode'),
            'label'       => 'Custom Shortcode'
          ),
          array(
            'value'       => 'dynamic',
            'for'         => array('blog_hero_dynamic_content'),
            'label'       => 'Dynamic Hero ( dynamic height )'
          )
        ),
      ),
      
      /*
      | Image Tab Slider
      */
      
      array(
        'id'          => 'ut_blog_tabs_headline',
        'label'       => 'Tablet Headline',
        'type'        => 'text',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
      ),
      
      array(
        'id'          => 'ut_blog_tabs_headline_style',
        'label'       => 'Tablet Headline Font Style',
        'desc'          => '',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
        'std'          => 'global',
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
        'id'          => 'ut_blog_tabs',
        'label'       => 'Manage Tablet Images',
        'type'        => 'list-item',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
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
        'id'          => 'ut_blog_header_parallax',
        'label'       => 'Activate Parallax',
        'desc'        => 'Keep in mind, that activating this option can reduce your website performance.',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
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
        'id'          => 'ut_blog_header_rain',
        'label'       => 'Activate Rain Effect',
        'desc'        => 'Keep in mind, that activating this option can reduce your website performance.',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'std'         => 'off',
        'subsection'  => 'ut_blog_hero_background_settings', 
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
        'id'          => 'ut_blog_header_rain_sound',
        'label'       => 'Activate Rain Sound',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'std'          => 'off',
        'subsection'  => 'ut_blog_hero_background_settings',
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
        'id'          => 'ut_blog_header_image',
        'label'       => 'Header Image',
        'desc'        => 'For best image results, we recommend to upload an image with minimum size of 1600x900 pixel or maximum size of 1920x1080(optimal) pixel. Also try to avoid uploading images with more than 200-300Kb size. Keep in mind, that you are not able to set a background position or attachment if the parallax option has been set to "on".',
        'type'        => 'background',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
      array(
        'id'          => 'ut_blog_split_content_type',
        'label'       => 'Hero Split Content Type',
        'desc'        => '',
        'type'        => 'select_group',
        'choices'     => array( 
          array(
            'value'       => 'image',
            'for'         => array('ut_blog_split_image','ut_blog_split_image_max_width','ut_blog_split_image_effect'),
            'label'       => 'Image'
          ),
          array(
            'value'       => 'video',
            'for'         => array('ut_blog_split_video','ut_blog_split_video_box','ut_blog_split_video_box_style'),
            'label'       => 'Video'
          )
        ),
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
      array(
        'id'          => 'ut_blog_split_video',
        'label'       => 'Hero Split Video',
        'desc'        => 'This video will display on the right side of the hero caption. It will not display on mobile devices! Please use the only embed codes from youtube or vimeo.',
        'type'        => 'textarea_simple',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
      array(
          'id'          => 'ut_blog_split_video_box',
          'label'       => 'Activate Hero Split Video Box',
          'desc'        => '',
          'type'        => 'select_group',
          'choices'     => array( 
            array(
              'value'       => 'on',
              'for'         => array('ut_blog_split_video_box_style'),
              'label'       => 'yes, please!'
            ),
            array(
              'value'       => 'off',
              'for'         => array(),
              'label'       => 'no, thanks!'
            )
          ),
          'section'     => 'ut_blog_settings',
          'subsection'  => 'ut_blog_hero_background_settings'
          
      ),
      
      array(
          'id'          => 'ut_blog_split_video_box_style',
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
          'section'     => 'ut_blog_settings',
          'subsection'  => 'ut_blog_hero_background_settings'
      ),       
       
      array(
        'id'          => 'ut_blog_split_image',
        'label'       => 'Hero Split Image',
        'desc'        => 'This image will display on the right side of the hero caption. It will not display on mobile devices!',
        'type'        => 'upload',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
       array(
        'id'          => 'ut_blog_split_image_max_width',
        'label'       => 'Image Max Width',
        'desc'        => 'Adjust this value until the image fits inside the hero. Default "60".',
        'type'        => 'numeric-slider',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
        'std'         => '60',
        'min_max_step'=> '0,100,1'
      ),
      
       array(
        'id'          => 'ut_blog_split_image_effect',
        'label'       => 'Slide Effect',
        'desc'          => '',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
        'std'          => 'none',
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
      
      
      /*
      | Animated Image Type
      */
      
      array(
        'id'          => 'ut_blog_header_animatedimage',
        'label'       => 'Header Image',
        'desc'        => '',
        'type'        => 'upload',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
      /*
      | Slider Type
      */
      
       /*array(
        'id'          => 'blog_animation',
        'label'       => 'Slide Effect',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
        'choices'     => array( 
          array(
            'value'       => 'fade',
            'label'       => 'Fade'
          ),
          array(
            'value'       => 'slide',
            'label'       => 'Slide'
          )
        ),
      ),*/
      
      array(
        'id'          => 'blog_slideshow_speed',
        'label'       => 'Slideshow Speed',
        'desc'        => 'Set the speed of the slideshow cycling, in milliseconds.',
        'type'        => 'text',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
      array(
        'id'          => 'blog_animation_speed',
        'label'       => 'Animation Speed',
        'desc'        => 'Set the speed of animations, in milliseconds.',
        'type'        => 'text',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
      array(
        'id'          => 'ut_blog_slider',
        'label'       => 'Blog Slider',
        'type'        => 'list-item',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
        'settings'    => array( 
          array(
            'id'          => 'image',
            'label'       => 'Image',
            'type'        => 'upload',
          ),
          array(
            'id'          => 'style',
            'label'       => 'Caption Style',
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
            'id'          => 'font_style',
            'label'       => 'Caption Font Style',
            'desc'          => 'Setting this option to default will load the hero font style ( which has been set under Blog Settings -> Hero Settings).',
            'type'        => 'select',
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
            'desc'          => '',
            'std'          => 'center',
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
            'std'          => 'top',
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
            'label'       => 'Caption Slogan',
            'type'        => 'textarea-simple',
            'rows'        => '3'
          ),
          array(
            'id'          => 'description',
            'label'       => 'Caption',
            'type'        => 'textarea-simple',
            'rows'        => '3'
          ),
          array(
            'id'          => 'catchphrase',
            'label'       => 'Caption Description',
            'type'        => 'textarea-simple',
            'rows'        => '3'
          ),
          array(
            'id'          => 'link',
            'label'       => 'Link',
            'type'        => 'text'
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
        'id'          => 'ut_blog_fancy_slider',
        'label'       => 'Fancy Slider',
        'type'        => 'list-item',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
        'settings'    => array( 
          array(
            'id'          => 'image',
            'label'       => 'Image',
            'type'        => 'upload',
          ),
          array(
            'id'          => 'style',
            'label'       => 'Caption / Hero Style',
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
            'label'       => 'Caption / Hero Font Style',
            'desc'          => 'Setting this option to default will load the hero font style ( which has been set under Front Page Settings -> Hero Settings ).',
            'type'        => 'select',
            'std'          => 'global',
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
            'id'          => 'expertise',
            'label'       => 'Caption Slogan',
            'type'        => 'textarea-simple',
            'rows'        => '3'
          ),
          array(
            'id'          => 'description',
            'label'       => 'Caption',
            'type'        => 'textarea-simple',
            'rows'        => '3'
          ),
          array(
            'id'          => 'catchphrase',
            'label'       => 'Caption Description',
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
      
      array(
        'id'          => 'blog_fancy_slider_effect',
        'label'       => 'Slide Effect',
        'desc'        => 'Choose an effect for your slider, this effect will affect all slides.',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
        'std'          => 'fxSoftScale',
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
        'id'          => 'blog_fancy_slider_height',
        'label'       => 'Slider Height',
        'desc'        => 'Set the height of the slideshow in pixel e.g. 600px.',
        'type'        => 'text',
         'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
      ),
      
      /*
      | Custom Shortcode
      */
      
      array(
        'id'          => 'blog_hero_custom_shortcode',
        'label'       => 'Custom Shortcode',
        'desc'        => '',
        'type'        => 'text',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
      /*
      | Dynamic
      */
      
      array(
        'id'          => 'blog_hero_dynamic_content',
        'label'       => 'Custom Hero Content',
        'desc'        => '',
        'type'        => 'textarea',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
      /*
      | Video
      */
            
      array(
        'id'          => 'ut_blog_video_setting_description',
        'label'       => 'Video',
        'desc'        => 'At the current stage the theme only supports youtube videos as well as selfhosted videos. Custom Player are possible, but using them will cause many hero options not taking effect. If a mobile or tablet device is visiting the site, the video hero support will be dropped and the theme will display a poster image instead. The main reason for this behavior is, that most mobile and tablet devices do not support the video backgrounds.',
        'type'        => 'textblock',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
      array(
        'id'          => 'ut_blog_video_source',
        'label'       => 'Video Source',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
        'std'          => 'youtube',
        'choices'     => array( 
          array(
            'value'       => 'youtube',
            'for'         => array('ut_blog_video','ut_blog_video_sound','ut_blog_video_loop','ut_video_mute_button_blog','ut_blog_video_volume','ut_blog_video_poster'),
            'label'       => 'Youtube'
          ),
          array(
            'value'       => 'selfhosted',
            'for'         => array('ut_blog_video_mp4','ut_blog_video_ogg','ut_blog_video_webm','ut_blog_video_sound','ut_blog_video_loop','ut_blog_video_preload','ut_video_mute_button_blog','ut_blog_video_volume','ut_blog_video_poster'),
            'label'       => 'Selfthosted'
          ),
          array(
            'value'       => 'custom',
            'for'         => array('ut_blog_video_custom'),
            'label'       => 'Custom Embedded Code'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_blog_video',
        'label'       => 'Video URL for blog.',
        'desc'        => 'Please insert the url only e.g. http://youtu.be/gvt_YFuZ8LA . Please do not insert the complete embedded code! This video will be displayed on the main blog page.',
        'type'        => 'text',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
       array(
        'id'          => 'ut_blog_video_custom',
        'label'       => 'Video embedded code for blog.',
        'desc'        => 'Please insert the complete embedded code of your favorite video hoster! This video will be displayed on the main blog page. Keep in mind, that hero settings like "Hero Caption" do not display if this type of video source is active.',
        'type'        => 'textarea-simple',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
      array(
        'id'          => 'ut_blog_video_mp4',
        'label'       => 'MP4',
        'desc'        => '',
        'type'        => 'upload',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
       array(
        'id'          => 'ut_blog_video_ogg',
        'label'       => 'OGG',
        'desc'        => '',
        'type'        => 'upload',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
       array(
        'id'          => 'ut_blog_video_webm',
        'label'       => 'WEBM',
        'desc'        => '',
        'type'        => 'upload',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
      array(
        'id'          => 'ut_blog_video_sound',
        'label'       => 'Activate video sound after page is loaded?',
        'desc'        => '<strong>(optional)</strong>. Play sound directly when page is loaded.',
        'std'         => 'off',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
        'choices'     => array( 
          array(
            'label'       => 'yes, please!',
            'value'       => 'on'            
          ),
          array(
            'label'       => 'no, thanks!',
            'value'       => 'off',
          )
        ),
      ),
      
      array(
        'id'              => 'ut_blog_video_loop',
        'label'           => 'Loop Video?',
        'desc'            => '',
        'type'            => 'select',
        'section'       => 'ut_blog_settings',
        'subsection'    => 'ut_blog_hero_background_settings',
        'choices'         => array(
          
          array(
            'label'       => 'yes, please!',
            'value'       => 'on'
          ),
          array(
            'label'       => 'no, thanks!',
            'value'       => 'off'
          )
          
        ),
        'std'             => 'on'
      ),
      
      array(
        'id'              => 'ut_blog_video_preload',
        'label'           => 'Preload Video?',
        'desc'            => '',
        'type'            => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
        'choices'         => array(
          
          array(
            'label'       => 'yes, please!',
            'value'       => 'on'
          ),
          array(
            'label'       => 'no, thanks!',
            'value'       => 'off'
          )
          
        ),
        'std'             => 'on'
      ),
      
      array(
        'id'              => 'ut_video_mute_button_blog',
        'label'           => 'Show Mute Button?',
        'desc'            => '',
        'type'            => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
        'choices'         => array(
          
          array(
            'label'       => 'yes, please!',
            'value'       => 'show'            
          ),
          array(
            'label'       => 'no, thanks!',
            'value'       => 'hide'            
          )
          
        ),
        'std'             => 'hide'
      ),
      
      array(
        'id'          => 'ut_blog_video_volume',
        'label'       => 'Video Volume',
        'desc'        => '1-100 - default 5',
        'std'         => '5',
        'type'        => 'numeric-slider',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings',
        'min_max_step'=> '0,100,1'
      ),
      
      array(
        'id'          => 'ut_blog_video_poster',
        'label'       => 'Poster Image',
        'desc'        => 'This image will be displayed instead of the video on mobile devices.',
        'type'        => 'upload',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_hero_background_settings'
      ),
      
      /*
      |--------------------------------------------------------------------------
      | Blog Sidebar
      |--------------------------------------------------------------------------
      */
      array(
        'id'          => 'ut_blog_sidebar_menu',
        'subid'       => 'ut_blog_sidebar_setting',
        'label'       => 'Sidebar Setting',
        'type'        => 'section_headline',
        'section'     => 'ut_blog_settings'
      ),
      
      array(
        'id'          => 'ut_blog_sidebar_headline',
        'label'       => 'Sidebar Align',
        'desc'        => '<h2 class="section-headline">Sidebar Align</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_sidebar_setting',
      ),
      
      array(
        'id'          => 'ut_sidebar_align',
        'label'       => 'Sidebar Align',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_sidebar_setting',
        'choices'     => array( 
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
      
      /*
      |--------------------------------------------------------------------------
      | Blog Misc
      |--------------------------------------------------------------------------
      
      array(
        'id'          => 'ut_blog_misc_menu',
        'subid'       => 'ut_blog_misc_setting',
        'label'       => 'Miscellaneous',
        'type'        => 'section_headline',
        'section'     => 'ut_blog_settings'
      ),
      
      array(
        'id'          => 'ut_blog_misc_headline',
        'label'       => 'Blog Miscellaneous',
        'desc'        => '<h2 class="section-headline">Blog Miscellaneous</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_misc_setting',
      ),
      
      array(
        'id'          => 'ut_author_box',
        'label'       => 'Activate Author Box on Single Posts?',
        'type'        => 'select',
        'section'     => 'ut_blog_settings',
        'subsection'  => 'ut_blog_misc_setting',
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
      */
            
      /*
      |--------------------------------------------------------------------------
      | Contact Section Content
      |--------------------------------------------------------------------------
      */
      array(
        'id'          => 'ut_csection_content_menu',
        'subid'       => 'ut_csection_content_setting',
        'label'       => 'Content',
        'type'        => 'section_headline',
        'section'     => 'ut_csection_settings'
      ),
      
      array(
        'id'          => 'ut_csection_content_headline',
        'label'       => 'Contact Section Content',
        'desc'        => '<h2 class="section-headline">Contact Section Content</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_content_setting',
      ),
      
      array(
        'id'          => 'ut_activate_csection',
        'label'       => 'Activate Contact Section',
        'desc'        => 'You can individually decide if you like to activate or deactivate the contact section per page / portfolio.',
        'type'        => 'checkbox',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_content_setting',
        'choices'     => array( 
          array(
            'value'       => 'is_front_page',
            'label'       => 'Home'
          ),
          array(
            'value'       => 'is_home',
            'label'       => 'Blog'
          ),
           array(
            'value'       => 'is_page',
            'label'       => 'Single Pages'
          ),
          array(
            'value'       => 'is_single',
            'label'       => 'Single Posts'
          ),
          array(
            'value'       => 'is_singular',
            'label'       => 'Single Portfolio Pages'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_csection_header_slogan',
        'label'       => 'Contact Header Slogan',
        'type'        => 'textarea-simple',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_content_setting',
        'rows'        => '5'
      ),
      
      array(
        'id'          => 'ut_csection_header_expertise_slogan',
        'label'       => 'Contact Header Expertise Slogan',
        'type'        => 'textarea-simple',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_content_setting',
        'rows'        => '5'
      ),
      
      array(
        'id'          => 'ut_left_csection_content_area',
        'label'       => 'Left Content Area',
        'desc'        => '<p> For example : create a contact form with your desired form generator and insert the shortcode in here. We recommend to make use of Contact Form 7. P.S. This field is also a good place to place a Google map shortcode! Leave empty to hide the complete box. </p>',
        'type'        => 'textarea',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_content_setting',
        'rows'        => '25'
      ),
      
      array(
        'id'          => 'ut_right_csection_content_area',
        'label'       => 'Right Content Area',
        'desc'        => '<p> For example : create a contact form with your desired form generator and insert the shortcode in here. We recommend to make use of Contact Form 7. P.S. This field is also a good place to place a Google map shortcode! Leave empty to hide the complete box. </p>',
        'type'        => 'textarea',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_content_setting',
        'rows'        => '25'
      ),
      
      /*
      |--------------------------------------------------------------------------
      | Contact Section Background
      |--------------------------------------------------------------------------
      */
      
      array(
        'id'          => 'ut_csection_background_headline',
        'subid'       => 'ut_csection_background_setting',
        'label'       => 'Background',
        'type'        => 'section_headline',
        'section'     => 'ut_csection_settings'
      ),
      
      array(
        'id'          => 'ut_contact_background_setting_headline',
        'label'       => 'Contact Section Background',
        'desc'        => '<h2 class="section-headline">Contact Section Background</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting'
      ),
      
      array(
        'id'          => 'ut_csection_background_type',
        'label'       => 'Choose Background Type',
        'desc'        => '',
        'type'        => 'select_group',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting',
        'std'         => 'image',
        'toplevel'    => true,
        'choices'     => array( 
          array(
            'value'       => 'image',
            'for'         => array('ut_csection_background_image' , 'ut_csection_parallax'),
            'label'       => 'Image'
          ),
          array(
            'value'       => 'map',
            'for'          => array('ut_csection_map'),
            'label'       => 'Google Map'
          ),
          array(
            'value'       => 'video',
            'for'          => array(
                            'ut_csection_video_source',
                            'ut_csection_video',
                            'ut_csection_video_mp4',
                            'ut_csection_video_ogg',
                            'ut_csection_video_webm',
                            'ut_csection_video_loop',
                            'ut_csection_video_preload',
                            'ut_csection_video_sound',
                            'ut_csection_video_volume',
                            'ut_csection_video_mute_button',
                            'ut_csection_video_poster'
            ),
            'label'       => 'Video'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_csection_video_source',
        'label'       => 'Video Source',
        'desc'        => '',
        'type'        => 'select_group',
        'std'		  => 'youtube',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting',
        'choices'     => array( 
          array(
            'value'       => 'youtube',
            'for'         => array('ut_csection_video'),
            'label'       => 'Youtube'
          ),
          array(
            'value'       => 'selfhosted',
            'for'         => array('ut_csection_video_mp4','ut_csection_video_ogg','ut_csection_video_webm','ut_csection_video_preload'),
            'label'       => 'Selfthosted'
          )
        ),
      ),
      
      array(
        'id'          => 'ut_csection_video',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting',        
        'label'       => 'Video URL',
        'desc'        => 'Please insert the url only e.g. http://youtu.be/gvt_YFuZ8LA . Please do not insert the complete embedded code!',
        'type'        => 'text',
      ),
      
      array(
        'id'          => 'ut_csection_video_mp4',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting', 
        'label'       => 'MP4',
        'desc'        => '',
        'type'        => 'upload',    
      ),
      
       array(
        'id'          => 'ut_csection_video_ogg',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting', 
        'label'       => 'OGG',
        'desc'        => '',
        'type'        => 'upload',    
      ),
      
       array(
        'id'          => 'ut_csection_video_webm',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting', 
        'label'       => 'WEBM',
        'desc'        => '',
        'type'        => 'upload',   
      ),
      
      array(
        'id'          	=> 'ut_csection_video_loop',
        'section'       => 'ut_csection_settings',
        'subsection'    => 'ut_csection_background_setting', 
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
        'id'          	=> 'ut_csection_video_preload',
        'section'       => 'ut_csection_settings',
        'subsection'    => 'ut_csection_background_setting', 
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
        'id'          => 'ut_csection_video_sound',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting', 
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
        'id'          => 'ut_csection_video_volume',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting', 
        'label'       => 'Video Volume',
        'desc'        => '1-100 - default 5',
        'std'         => '5',
        'type'        => 'numeric-slider',
        'min_max_step'=> '0,100,1'
      ),
      
      array(
        'id'          	=> 'ut_csection_video_mute_button',
        'section'       => 'ut_csection_settings',
        'subsection'    => 'ut_csection_background_setting', 
        'label'       	=> 'Show Mute Button?',
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
        'std'         	=> 'off'
      ),
      
      array(
        'id'          => 'ut_csection_video_poster',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting', 
        'label'       => 'Poster Image',
        'desc'        => 'This image will be displayed instead of the video on mobile devices.',
        'type'        => 'upload',    
      ),
      
      array(
        'id'          => 'ut_csection_background_image',
        'label'       => 'Contact Section Background Image',
        'desc'        => 'Keep in mind, that you are not able to set a background position or attachment if the parallax option for this section has been set to "on".',
        'type'        => 'background',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting'
      ),
      
      array(
        'id'          => 'ut_csection_map',
        'label'       => 'Google Map Shortcode',
        'desc'        => 'We recommend to use the Maps Marker plugin to display maps! Placing a shortcode will overwrite the background image. Also keep in mind, that activating the parallax effect does not work with maps.',
        'type'        => 'text',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting'
      ),

      array(
        'id'          => 'ut_csection_parallax',
        'label'       => 'Activate Parallax',
        'desc'        => 'Only available for background images.',
        'std'         => 'off',
        'type'        => 'select',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting',
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
        'id'          => 'ut_contact_overlay_setting_headline',
        'label'       => 'Background Overlay',
        'desc'        => '<h2 class="section-headline">Background Overlay</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting'
      ),
      
      array(
        'id'          => 'ut_csection_overlay',
        'label'       => 'Overlay',
        'desc'        => 'Only available if background image has been set.',
        'type'        => 'select',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting',
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
        'id'          => 'ut_csection_overlay_pattern',
        'label'       => 'Overlay Pattern',
        'type'        => 'select',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting',
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
        'id'          => 'ut_csection_overlay_pattern_style',
        'label'       => 'Overlay Pattern Style',
        'type'        => 'select',
        'std'          => 'style_one',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting',
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
        'id'          => 'ut_csection_overlay_color',
        'label'       => 'Overlay Color',
        'desc'        => '<strong>(optional)</strong>',
        'type'        => 'colorpicker',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting'
      ),
      
      array(
        'id'          => 'ut_csection_overlay_opacity',
        'label'       => 'Overlay Color Opacity',
        'desc'        => '<strong>(optional)</strong> - default 0.8',
        'std'         => '0.8',
        'type'        => 'numeric-slider',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_background_setting',
        'min_max_step'=> '0,1,0.1'
      ),
      
      
      
      /*
      |--------------------------------------------------------------------------
      | Contact Section Styling
      |--------------------------------------------------------------------------
      */
      
      array(
        'id'          => 'ut_csection_styling_headline',
        'subid'       => 'ut_csection_styling_setting',
        'label'       => 'Styling',
        'type'        => 'section_headline',
        'section'     => 'ut_csection_settings'
      ),
      
      array(
        'id'          => 'ut_contact_header_setting_headline',
        'label'       => 'Contact Section Header Style',
        'desc'        => '<h2 class="section-headline">Contact Section Header Style</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting'
      ),
      
      array(
        'id'          => 'ut_csection_header_style',
        'label'       => 'Header Style',
        'desc'        => '<strong>(optional)</strong> - default : Typography -> Global Header Styles. <a href="#" class="ut-header-preview">Preview Header Styles</a>',
        'type'        => 'select',
        'std'          => 'global',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting',
        'choices'     => array( 
          
          array(
            'label'       => 'Default',
            'value'       => 'global'
          ),          
          
          array(
            'value'       => 'pt-style-1',
            'label'       => 'Style One'
          ),
          
          array(
            'value'       => 'pt-style-2',
            'label'       => 'Style Two'
          ),
          
          array(
            'value'       => 'pt-style-3',
            'label'       => 'Style Three'
          ),
          
          array(
            'value'       => 'pt-style-4',
            'label'       => 'Style Four'
          ),
          
          array(
            'value'       => 'pt-style-5',
            'label'       => 'Style Five'
          ),
          
           array(
            'value'       => 'pt-style-6',
            'label'       => 'Style Six'
          ),
          
          array(
            'value'       => 'pt-style-7',
            'label'       => 'Style Seven'
          )
         
        ),
      ),
      
      
      array(
        'id'          => 'ut_contact_padding_setting_headline',
        'label'       => 'Contact Section Padding',
        'desc'        => '<h2 class="section-headline">Contact Section Padding</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting'
      ),
      
      array(
        'id'          => 'ut_csection_padding_top',
        'label'       => 'Contact Section Padding Top',
        'desc'        => '<strong>(optional)</strong> - default 80px',
        'type'        => 'text',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting'
      ),
      
      array(
        'id'          => 'ut_csection_padding_bottom',
        'label'       => 'Contact Section Padding Bottom',
        'desc'        => '<strong>(optional)</strong> - default 40px',
        'type'        => 'text',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting'
      ),    
        
      array(
        'id'          => 'ut_contact_color_headline',
        'label'       => 'Color Settings',
        'desc'        => '<h2 class="section-headline">Color Settings</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting'
      ),
      
      array(
        'id'          => 'ut_csection_skin',
        'label'       => 'Section Color Skin',
        'type'        => 'select',
        'desc'        => 'If you are planing to use light background images or colors use the dark skin and the other way around. If these skins do not match your requirements, you can define your own colors beneath. The Dark skin has been made fir pure white background in this case.',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting',
        'choices'     => array(
          array(
            'label'     => 'Light',
            'value'     => 'light'
          ),
          array(
            'label'     => 'Dark',
            'value'     => 'dark'
          )
        ),
        'std'             => 'dark',
      ),
      
      array(
        'id'          => 'ut_csection_header_slogan_color',
        'label'       => 'Section Title Color',
        'desc'        => '<strong>(optional)</strong> - will overwrite the default CSS.',
        'type'        => 'colorpicker',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting'
      ),
      
      array(
        'id'          => 'ut_csection_header_expertise_slogan_color',
        'label'       => 'Section Slogan Color',
        'desc'        => '<strong>(optional)</strong> - will overwrite the default CSS.',
        'type'        => 'colorpicker',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting'
      ),
      
      array(
        'id'          => 'ut_csection_background_color',
        'label'       => 'Contact Section Background Color',
        'desc'        => '<strong>(optional)</strong> - will overwrite the default CSS.',
        'type'        => 'colorpicker',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting'
      ),
      
      array(
        'id'          => 'ut_left_csection_content_area_color',
        'label'       => 'Left Content Area Background Color',
        'desc'        => '<strong>(optional)</strong> - will overwrite the default CSS.',
        'type'        => 'colorpicker',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting'
      ),
      
      array(
        'id'          => 'ut_left_csection_content_area_opacity',
        'label'       => 'Color Opacity',
        'desc'        => '<strong>(optional)</strong> - will overwrite the default CSS. Opacity for left content area background color.',
        'std'         => '0.8',
        'type'        => 'numeric-slider',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting',
        'min_max_step'=> '0,1,0.1'
      ),
      
      array(
        'id'          => 'ut_right_csection_content_area_color',
        'label'       => 'Right Content Area Background Color',
        'desc'        => '<strong>(optional)</strong> - will overwrite the default CSS.',
        'type'        => 'colorpicker',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting',
      ),
      
      array(
        'id'          => 'ut_right_csection_content_area_opacity',
        'label'       => 'Color Opacity',
        'desc'        => '<strong>(optional)</strong> - will overwrite the default CSS. Opacity for right content area background color.',
        'std'         => '0.8',
        'type'        => 'numeric-slider',
        'section'     => 'ut_csection_settings',
        'subsection'  => 'ut_csection_styling_setting',
        'min_max_step'=> '0,1,0.1'
      ),
      
      
      /*
      |--------------------------------------------------------------------------
      | Advanced Settings
      |--------------------------------------------------------------------------
      */
      
      /*
      | Section Animation
      */
      
      array(
        'id'          => 'ut_sanimation_setting_menu',
        'subid'          => 'ut_sanimation_settings',
        'label'       => 'Section Animation',
        'desc'        => '<h2 class="section-headline">Section Animation</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_advanced_settings'
      ),
          
      array(
        'id'          => 'ut_sanimation_setting_headline',
        'label'       => 'Section Animation',
        'desc'        => '<h2 class="section-headline">Section Animation</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_sanimation_settings',
      ),
      
      array(
        'id'          => 'ut_scrollto_effect',
        'label'       => 'Scroll to Section Effect',
        'desc'        => 'This option will activate / deactivate the section fade animation.',
        'type'        => 'easing',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_sanimation_settings',
        'std'          => 'easeInOutExpo'
      ),
      
      array(
        'id'          => 'ut_scrollto_speed',
        'label'       => 'Scroll to Section Effect Speed',
        'desc'        => '<strong>(optional)</strong> - value in ms , default: 650',
        'type'        => 'text',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_sanimation_settings',
      ),
      
      array(
        'id'          => 'ut_animate_sections',
        'label'       => 'Animate Sections',
        'desc'        => 'This option will activate / deactivate the section fade animation.',
        'type'        => 'select',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_sanimation_settings',
        'std'          => 'on',
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
        'id'          => 'ut_animate_sections_timer',
        'label'       => 'Section Animation Timer',
        'desc'        => '<strong>(optional)</strong> - value in ms , default: 1600',
        'type'        => 'text',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_sanimation_settings',
      ),
          
      /*
      | Pre Loader
      */
      
      array(
        'id'          => 'ut_loader_setting_menu',
        'subid'          => 'ut_loader_settings',
        'label'       => 'Manage Preloader',
        'desc'        => '<h2 class="section-headline">Manage Preloader</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_advanced_settings'
      ),
      
      array(
        'id'          => 'ut_loader_setting_headline',
        'label'       => 'Manage Preloader',
        'desc'        => '<h2 class="section-headline">Manage Preloader</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_loader_settings',
      ),
      
      array(
        'id'          => 'ut_use_image_loader',
        'label'       => 'Use Image Preloader',
        'desc'        => 'This option will activate a JavaScript based preloader.',
        'type'        => 'select',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_loader_settings',
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
        'id'          => 'ut_use_image_loader_on',
        'label'       => 'Use Image Preloader for',
        'desc'        => '',
        'type'        => 'checkbox',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_loader_settings',
        'choices'     => array( 
          array(
            'value'       => 'is_front_page',
            'label'       => 'Home'
          ),
          array(
            'value'       => 'is_home',
            'label'       => 'Blog'
          ),
           array(
            'value'       => 'is_page',
            'label'       => 'Single Pages'
          ),
          array(
            'value'       => 'is_single',
            'label'       => 'Single Posts'
          ),
          array(
            'value'       => 'is_singular',
            'label'       => 'Single Portfolio Pages'
          )
        ),
      ),
      
      array(
        'id'              => 'ut_image_loader_logo',
        'label'           => 'Logo',
        'desc'            => 'Custom Logo for Preloader.',
        'type'            => 'upload',
        'section'       => 'ut_advanced_settings',
        'subsection'    => 'ut_loader_settings'
      ),
      
      array(
        'id'          => 'ut_image_loader_color',
        'label'       => 'Preloader Text Color',
        'desc'        => '<strong>(optional)</strong> - default: accentcolor. If you leave this field empty, the system will use the accentcolor which has been defined inside the theme customizer.',
        'type'        => 'colorpicker',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_loader_settings'
      ),
      
      array(
        'id'          => 'ut_image_loader_background',
        'label'       => 'Preloader Backgroundcolor',
        'desc'        => '<strong>(optional)</strong>',
        'type'        => 'colorpicker',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_loader_settings',
      ),
      
      array(
        'id'          => 'ut_show_loader_bar',
        'label'       => 'Display Loader Bar',
        'desc'        => '',
        'std'          => 'on',
        'type'        => 'select',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_loader_settings',
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
        'id'          => 'ut_image_loader_bar_color',
        'label'       => 'Preloader Bar Color',
        'desc'        => '<strong>(optional)</strong> - default: accentcolor. If you leave this field empty, the system will use the accentcolor which has been defined inside the theme customizer.',
        'type'        => 'colorpicker',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_loader_settings',
      ),
      
      array(
        'id'          => 'ut_image_loader_barheight',
        'label'          => 'Bar Height',    
        'desc'        => '<strong>(optional)</strong> - default: 3. Please insert integers only.',
        'type'        => 'text',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_loader_settings',
      ),     
      
      /*
      | Custom CSS
      */
      
      array(
        'id'              => 'ut_custom_css_headline',
        'subid'            => 'ut_custom_css_settings',
        'label'           => 'Custom CSS',
        'desc'            => '<h2 class="section-headline">Custom CSS</h2>',
        'type'            => 'section_headline',
        'section'         => 'ut_advanced_settings',
      ),
      
      array(
        'id'          => 'ut_custom_css',
        'label'       => 'Custom CSS',
        'desc'        => 'Insert your custom CSS code right in here if you are not planing to use the delivered child theme. This custom CSS will be directly hooked into the wp head right after all other Stylesheets.',
        'type'        => 'textarea-simple',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_custom_css_settings'
      ),
        
      /*
      | SEO
      */
      
      array(
        'id'              => 'ut_seo_headline',
        'subid'            => 'ut_seo_settings',
        'label'           => 'SEO',
        'desc'            => '<h2 class="section-headline">SEO</h2>',
        'type'            => 'section_headline',
        'section'         => 'ut_advanced_settings',
      ),
      
      array(
        'id'          => 'ut_google_analytics',
        'label'       => 'Google Analytics ID',
        'desc'        => 'Enter your Google Analytics ID here to track your site with Google Analytics.',
        'type'        => 'text',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_seo_settings'
      ),
      
      
      /*
      |--------------------------------------------------------------------------
      | Cache Options
      |--------------------------------------------------------------------------
      */      
      array(
        'id'          => 'ut_cache_settings_menu',
        'subid'          => 'ut_cache_settings',
        'label'       => 'One Page Cache',
        'type'        => 'section_headline',
        'section'     => 'ut_advanced_settings'
      ),
      
      array(
        'id'          => 'ut_cache_setting_headline',
        'label'       => 'One Page Cache',
        'desc'        => '<h2 class="section-headline">One Page Cache</h2>',
        'type'        => 'section_headline',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_cache_settings',
      ),
      
      array(
        'id'          => 'ut_use_cache',
        'label'       => 'Use Cache',
        'desc'        => 'This option will cache your one page. We recommend to turn this option off when developing the site or adding new content.',
        'type'        => 'select',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_cache_settings',
        'std'          => 'off',
        'choices'     => array( 
          array(
            'value'       => 'off',
            'label'       => 'off'
          ),
          array(
            'value'       => 'on',
            'label'       => 'on'
          )
        ),
      ),
          
      array(
        'id'          => 'ut_cache_ltime',
        'label'       => 'Cache Lifetime',
        'desc'        => 'In Minutes, for example : 10',
        'type'        => 'text',
        'section'     => 'ut_advanced_settings',
        'subsection'  => 'ut_cache_settings',
      ),
            
      /*
      | Theme Info
      */
      
      /*array(
        'id'              => 'ut_theme_info_headline',
        'subid'            => 'ut_theme_info_settings',
        'label'           => 'Theme Info',
        'desc'            => '<h2 class="section-headline">Theme Info</h2>',
        'type'            => 'section_headline',
        'section'         => 'ut_advanced_settings',
      ), */
      
      
    )
  );
  
  /* allow settings to be filtered before saving */
  $ut_settings = apply_filters( 'option_tree_settings_args', $ut_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $ut_settings ) {
    update_option( 'option_tree_settings', $ut_settings ); 
  }
  
}