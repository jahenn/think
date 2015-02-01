<?php

if( !function_exists('ut_metabox_color_settings') ) :
    
    add_action( 'admin_init', 'ut_metabox_color_settings' );
    
    function ut_metabox_color_settings() {
        
        $ut_metabox_color_settings = array(
            'id'          => 'ut_metabox_color_settings',
            'title'       => 'United Themes - Color Settings',
            'desc'        => '',
            'pages'       => array('page' , 'portfolio'),
            'context'     => 'normal',
            'priority'    => 'low',
            'fields'      => array(
                
                array(
                    'id'          	=> 'ut_color_section',
                    'metapanel'     => 'ut-color-settings',
                    'label'       	=> 'Color Settings',
                    'type'        	=> 'textblock',
                    'desc'        	=> '<h2><span>Color /</span> Settings</h2> Color settings are affecting single pages as well as pages which are sections on the front page.',
                    'std'         	=> '',
                    'rows'        	=> '',
                    'class'       	=> '',
                    'section_class' => 'ut-settings-heading'
                ),
                  
                array(
                    'id'          => 'ut_section_skin',
                    'metapanel'   => 'ut-color-settings',
                    'label'       => ' - Color Skin',
                    'needsprefix' => true,
                    'type'        => 'select',
                    'desc'        => 'If you are planing to use bright background images or bright background colors use the dark skin and the other way around. If these skins do not match your requirements, define your own colors beneath or add your own class inside the class field at the very bottom of this option set.',
                    'choices'     => array(
                        array(
                          'label'     => 'Dark',
                          'value'     => 'dark'
                        ),
                        array(
                          'label'     => 'Light',
                          'value'     => 'light'
                        )                        
                    ),
                    'std'         	=> 'dark',
                    'class'       	=> '',
                    'section_class' => ''
                ),
                  
                array(
                    'id'          	=> 'ut_section_title_color',
                    'metapanel'     => 'ut-color-settings',
                    'label'       	=> ' - Header Color',
                    'needsprefix'   => true,
                    'type'        	=> 'colorpicker',
                    'desc'       	=> '(optional)',
                    'std'         	=> '',
                    'rows'        	=> '',
                    'class'       	=> '',
                    'section_class' => ''
                ),
                
                array(
                    'id'          => 'ut_section_slogan_color',
                    'metapanel'   => 'ut-color-settings',
                    'label'       => ' - Header Slogan Color',
                    'needsprefix' => true,
                    'type'        => 'colorpicker',
                    'desc'        => '(optional)',
                    'std'         => '',
                    'rows'        => '',
                    'class'       => '',
                    'section_class' => ''
                ),
                
                array(
                    'id'          => 'ut_section_heading_color',
                    'metapanel'   => 'ut-color-settings',        
                    'label'       => ' - Content Headline Color',
                    'needsprefix' => true,
                    'type'        => 'colorpicker',
                    'desc'        => '(optional). Affects all headlines from H1 to H6.',
                    'std'         => '',
                    'rows'        => '',
                    'class'       => '',
                    'section_class' => ''
                ),
                
                array(
                    'id'         	=> 'ut_section_text_color',
                    'metapanel'     => 'ut-color-settings',
                    'label'       	=> ' - Content Text Color',
                    'needsprefix'   => true,
                    'type'        	=> 'colorpicker',
                    'desc'        	=> '(optional)',
                    'std'         	=> '',
                    'rows'        	=> '',
                    'class'       	=> '',
                    'section_class' => ''
                ),
                
                array(
                    'id'          	=> 'ut_section_background_color',
                    'metapanel'     => 'ut-color-settings',
                    'label'       	=> ' - Background Color',
                    'needsprefix'   => true,
                    'type'       	=> 'colorpicker',
                    'desc'        	=> 'Change the background color of this page or section, keep in mind that if you are planing to use a parallax background (sections only), this color is not visible anymore.',
                    'std'         	=> '',
                    'rows'        	=> '',
                    'class'       	=> '',
                    'section_class' => ''
                ),
                
                array(
                    'id'          => 'ut_section_class',
                    'metapanel'   => 'ut-color-settings',
                    'label'       => 'Optional Class',
                    'desc'        => 'Optional CSS Class. Simply enter the class name without a dot in front, this class will be added straight to the DIV named #primary. We recommend to place the class definition itself inside the Theme Options Panel under "Advanced" > "Custom CSS".',
                    'std'         => '',
                    'type'        => 'text',
                    'min_max_step'=> '',
                    'class'       => ''
                )
                  
            )
        );
    
        ot_register_meta_box( $ut_metabox_color_settings );
    
    }

endif;

?>