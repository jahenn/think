<?php 

if( !function_exists('ut_metabox_portfolio_settings') ) :
    
    add_action( 'admin_init', 'ut_metabox_portfolio_settings' );
    
    function ut_metabox_portfolio_settings() {
        
        $ut_metabox_portfolio_settings = array(
            
            'id'          => 'ut_metabox_portfolio_settings',
            'title'       => 'United Themes - Portfolio Settings',
            'desc'        => '',
            'pages'       => array( 'portfolio' ),
            'context'     => 'normal',
            'priority'    => 'low',
            'fields'      => array(
                
                array(
                    'id'          	=> 'ut_portfolio_settings',
                    'metapanel'     => 'ut-portfolio-details',
                    'label'       	=> 'Portfolio Details',
                    'type'        	=> 'textblock',
                    'desc'        	=> '<h2><span>Portfolio /</span> Details</h2>',
                    'section_class'	=> 'ut-settings-heading',        
                    'class'       	=> ''
                ),
                                
                array(
                    'id'          => 'ut_portfolio_link_type',
                    'metapanel'   => 'ut-portfolio-details',
                    'label'       => 'Show Portfolio',
                    'type'        => 'select_group',
                    'desc'		  => 'Choose how the portfolio details should display.',
                    'std'		  => 'onepage',
                    'choices'     => array(     
                        array(
                            'value'       => 'onepage',
                            'for'         => array(),
                            'label'       => 'as part of the One Page'
                        ),
                        array(
                            'value'       => 'internal',
                            'for'         => array(),
                            'label'       => 'on a separate portfolio page'
                        ),
                        array(
                            'value'       => 'external',
                            'for'         => array('ut_external_link'),
                            'label'       => 'on an external website'
                        )
                    ),
                ),
                
                array(
                    'id'          => 'ut_external_link',
                    'metapanel'   => 'ut-portfolio-details',
                    'label'       => 'Project Link',
                    'type'        => 'text',
                    'desc'		  => 'Redirect the portfolio thumbnail directly to an external site. Only available for standard post format.'
                ),
                
                array(
                    'id'          => 'ut_portfolio_details',
                    'metapanel'   => 'ut-portfolio-details',
                    'label'       => 'Project Link',
                    'type'        => 'list-item',
                    'desc'		  => 'Add a nice portfolio description list to this portfolio.',
                    'settings'    => array(

                        array(
                            'id'        => 'value',
                            'label'     => 'Description',
                            'type'      => 'text'
                        )                    
                    
                    )
                ),
                
                
                
                
                
                
                
            )
        
        );
        
        ot_register_meta_box( $ut_metabox_portfolio_settings );
        
    }
    
endif;    

?>