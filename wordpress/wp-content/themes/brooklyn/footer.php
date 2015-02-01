<?php global $detect; ?>
	
    </div><!-- close main-content-background -->
    
    <div class="clear"></div>
    
    <?php ut_before_footer_hook(); // action hook, see inc/ut-theme-hooks.php ?>
    
    <?php 
	
	/* check if contact section is active */		
	$ut_activate_csection = ut_return_csection_config('ut_activate_csection','on');
                                 	
	if( $ut_activate_csection == 'on' ) {
			
		/* contact section headline */ 
		$ut_csection_header_expertise_slogan = ot_get_option('ut_csection_header_expertise_slogan') ;
		$ut_csection_header_slogan = ot_get_option('ut_csection_header_slogan') ;
		$ut_csection_header_style = ot_get_option('ut_csection_header_style' , 'pt-style-1');
		$ut_csection_header_style = $ut_csection_header_style == 'global' ? ot_get_option('ut_global_headline_style') : $ut_csection_header_style;
				
		/* contact section background and overlay - available inside theme options as well as on pages */
		$ut_csection_overlay = ut_return_csection_config( 'ut_csection_overlay' , 'on' );        
        
        /* contact section background and overlay - currently only located inside theme options panel */
        $ut_csection_background_type = ot_get_option('ut_csection_background_type' , 'image');
		$ut_csection_parallax = ( ot_get_option('ut_csection_parallax' , 'off') == 'on' ) ? 'parallax-background parallax-section' : '';
		$ut_csection_overlay_pattern = ot_get_option( 'ut_csection_overlay_pattern' , 'on' );		
		$ut_csection_overlay_pattern = $ut_csection_overlay_pattern == 'on' ? 'parallax-overlay-pattern' : '';
		$ut_csection_overlay_pattern_style = ot_get_option( 'ut_csection_overlay_pattern_style' , 'style_one' );
		$ut_csection_map = ot_get_option( 'ut_csection_map' );
		$contact_map_class = ($ut_csection_map && $ut_csection_background_type == 'map') ? 'contact-map' : '';
		
        /* section video */
        $ut_csection_video_source = ot_get_option('ut_csection_video_source' , 'youtube');
        $ut_section_video_class = ($ut_csection_background_type=='video' && $ut_csection_video_source == 'selfhosted') ? 'ut-video-section' : '';
        		
		/* contact section skin */
		$ut_csection_skin = ot_get_option( 'ut_csection_skin' );
		
		/* contact section areas */
		$ut_left_csection_content_area = ot_get_option('ut_left_csection_content_area');
		$ut_right_csection_content_area = ot_get_option('ut_right_csection_content_area');
		
		$ut_left_csection_content_area_width = !empty($ut_right_csection_content_area) ? 'grid-45 suffix-5 mobile-grid-100 tablet-grid-50' : 'grid-70 prefix-15 mobile-grid-100 tablet-grid-100';
		$ut_right_csection_content_area_width = !empty($ut_left_csection_content_area) ? 'grid-50 mobile-grid-100 tablet-grid-50' : 'grid-70 prefix-15 mobile-grid-100 tablet-grid-100';
		
	}
	
	?>
    
    <?php if( $ut_activate_csection == 'on' ) : ?>
    
    <section id="contact-section" data-effect="fadeIn" class="animated contact-section <?php echo $ut_csection_parallax; ?> <?php echo $ut_csection_skin; ?> <?php echo $contact_map_class; ?> <?php echo $ut_section_video_class; ?>">   		
    
    <a class="ut-offset-anchor" id="section-contact"></a> 
        
        <?php if( $ut_csection_map && $ut_csection_background_type == 'map' ) : ?>       
        
        <div class="background-map"><?php echo do_shortcode($ut_csection_map); ?></div>
        
        <?php endif; ?>
        
        <?php if( $ut_csection_background_type == 'video' ) :       
            
            $playerconfig = array();
            
            if($ut_csection_video_source=='youtube') {
                $ut_csection_video = ot_get_option('ut_csection_video');
                if(isset($ut_csection_video) && $ut_csection_video != '') { array_push($playerconfig, 'video="'.$ut_csection_video.'"'); }
            }
                        
            if($ut_csection_video_source=='selfhosted') {
                $ut_csection_video_mp4 = ot_get_option('ut_csection_video_mp4');
                if(isset($ut_csection_video_mp4) && $ut_csection_video_mp4 != '') { array_push($playerconfig, 'mp4="'.$ut_csection_video_mp4.'"'); }
                
                $ut_csection_video_ogg = ot_get_option('ut_csection_video_ogg');
                if(isset($ut_csection_video_ogg) && $ut_csection_video_ogg != '') { array_push($playerconfig, 'ogg="'.$ut_csection_video_ogg.'"'); }
                
                $ut_csection_video_webm = ot_get_option('ut_csection_video_webm');
                if(isset($ut_csection_video_webm) && $ut_csection_video_webm != '') { array_push($playerconfig, 'webm="'.$ut_csection_video_webm.'"'); }
                
                $ut_csection_video_preload = ot_get_option('ut_csection_video_preload');
                if(isset($ut_csection_video_preload) && $ut_csection_video_preload != '') { array_push($playerconfig, 'preload="'.$ut_csection_video_preload.'"'); }
            }
            
            $ut_csection_video_loop = ot_get_option('ut_csection_video_loop');
            if(isset($ut_csection_video_loop) && $ut_csection_video_loop != '') { array_push($playerconfig, 'loop="'.$ut_csection_video_loop.'"'); }
            
            $ut_csection_video_volume = ot_get_option('ut_csection_video_volume');
            if(isset($ut_csection_video_volume) && $ut_csection_video_volume != '') { array_push($playerconfig, 'volume="'.$ut_csection_video_volume.'"'); }
            
            $ut_csection_video_sound = ot_get_option('ut_csection_video_sound');
            if(isset($ut_csection_video_sound) && $ut_csection_video_sound != '') { array_push($playerconfig, 'sound="'.$ut_csection_video_sound.'"'); }
            
            $ut_csection_video_mute_button = ot_get_option('ut_csection_video_mute_button' , true );
            if(isset($ut_csection_video_mute_button) && $ut_csection_video_mute_button != '') { array_push($playerconfig, 'mutebutton="'.$ut_csection_video_mute_button.'"'); }
            
            echo do_shortcode('[ut_section_video id="contact-section-video" section="contact-section" source="'.$ut_csection_video_source.'" '.implode(" ", $playerconfig).']');        
        
        endif; ?>
        
        <?php if( $ut_csection_overlay == 'on' ) : ?>
        
        <div class="parallax-overlay <?php echo $ut_csection_overlay_pattern; ?> <?php echo $ut_csection_overlay_pattern_style; ?>">
		
        <?php endif; ?>
        
        <div class="grid-container parallax-content">
        	
            <?php if( !empty($ut_csection_header_slogan) || !empty($ut_csection_header_expertise_slogan) ) : ?>
            
            <!-- parallax header -->
            <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                <header class="parallax-header <?php echo $ut_csection_header_style; ?>">
                    
                    <?php if( !empty($ut_csection_header_slogan) ) : ?>
                    	<h2 class="parallax-title"><span><?php echo do_shortcode( ut_translate_meta($ut_csection_header_slogan) ); ?></span></h2>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_csection_header_expertise_slogan) ) : ?>
                    	<p class="lead"><?php echo do_shortcode( ut_translate_meta($ut_csection_header_expertise_slogan) ); ?></p>
                    <?php endif; ?>
                    
                </header>
            </div>
            <!-- close parallax header -->
            
            <div class="clear"></div>
            
            <?php endif; ?>
        
        </div>
        <div class="grid-container section-content">
            
            <!-- contact wrap -->
            <div class="grid-100 mobile-grid-100 tablet-grid-100">
                <div class="contact-wrap">
                
                    <?php if( !empty($ut_left_csection_content_area) ) : ?>
                    
                    <!-- contact message -->
                    <div class="<?php echo $ut_left_csection_content_area_width; ?>">
                        <div class="ut-left-footer-area clearfix">
                            
                            <?php echo wpautop(do_shortcode(ot_get_option('ut_left_csection_content_area'))); ?>
                            
                        </div>
                    </div><!-- close contact message -->
                    
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_right_csection_content_area) ) :?>
                    
                    <!-- contact form-holder -->
                    <div class="<?php echo $ut_right_csection_content_area_width; ?>">
                        <div class="ut-right-footer-area clearfix">
                        	
                            <?php echo wpautop(do_shortcode(ot_get_option('ut_right_csection_content_area'))); ?>
                                
                        </div>
                    </div><!-- close contact-form-holder -->
                	
                    <?php endif; ?>                    
                    
                </div>
            </div><!-- close contact wrap -->
            
            
		</div><!-- close container -->
        
        <?php if( $ut_csection_overlay == 'on' ) : ?>
        
        </div><!-- parallax overlay -->
		
        <?php endif; ?>
        
	</section>
    
    <div class="clear"></div>
    
    <?php endif; //#ut_activate_csection ?>    
    
    <?php $footerwidgets = is_active_sidebar('first-footer-widget-area') + is_active_sidebar('second-footer-widget-area') + is_active_sidebar('third-footer-widget-area') + is_active_sidebar('fourth-footer-widget-area'); ?>
        
	<!-- Footer Section -->
    <footer class="footer <?php echo ot_get_option('ut_footer_skin' , 'ut-footer-light'); ?>">
        
        <?php get_sidebar( 'footer' ); ?>
                
        <?php if( ut_return_csection_config('ut_show_scroll_up_button' , 'on') == 'on' ) : ?>
        
            <a href="#top" class="toTop"><i class="fa fa-angle-double-up"></i></a>
    	
        <?php endif; ?>
        
        <div class="footer-content">        
            
            <div class="grid-container">
                
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                
                    <?php echo ot_get_option('ut_site_copyright'); ?>
                        
                    <?php 
                        
                        $social = ot_get_option('ut_footer_social_icons');
                        
                        if( is_array( $social ) && !empty( $social ) ) {
                            
                            echo '<ul class="ut-footer-so">';    
                                
                                foreach( $social as $icon => $value) {
                                    
                                    $link  = !empty($value["link"]) ? $value["link"] : '#' ;
                                    $title = !empty($value["title"]) ? 'title="'.$value["title"].'"' : '' ;
                                    
                                    echo '<li>';
                                        echo '<a '.$title.' href="'.$link.'"><i class="fa '.$value["icon"].' fa-lg"></i></a>';
                                    echo '</li>';
                                    
                                }
                            
                            echo '</ul>';    
                        
                        } 
                    ?>
                        
                    <span class="copyright">
                        <?php _e('Diseñada por Thinkers in Motion 2014' , ''); ?> <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'unitedthemes' ); ?>" data-rel="generator"><?php printf( __( ' %s', 'unitedthemes' ), '' ); ?></a>
                        <?php printf( __( '', 'unitedthemes' ), '', '<a href="http://themeforest.net/item/brooklyn-creative-one-page-multipurpose-theme/6221179?ref=UnitedThemes" data-rel="designer"></a>' ); ?>
                    </span>
                        
                </div>
                    
            </div><!-- close container -->        
        </div><!-- close footer content -->
        
	</footer><!-- close footer -->
        
   	<?php ut_after_footer_hook(); // action hook, see inc/ut-theme-hooks.php ?>
	
    <?php wp_footer(); ?>
    
	<script type="text/javascript">
    /* <![CDATA[ */        
        
		<?php ut_java_footer_hook(); // action hook, see inc/ut-theme-hooks.php ?> 
		
		<?php if( ot_get_option('ut_google_analytics') ) : ?>
		  
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', '<?php echo stripslashes( ot_get_option('ut_google_analytics') ); ?>']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		  
		<?php endif; ?>
		     
     /* ]]> */
    </script> 
    
    </div><!-- close #main-content -->
	            
    </body>
</html>