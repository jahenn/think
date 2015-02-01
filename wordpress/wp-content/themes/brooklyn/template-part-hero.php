<?php 
/*
|--------------------------------------------------------------------------
| hero settings
|--------------------------------------------------------------------------
*/

global $detect;

$dataeffect  = $animated = NULL;

/* hero type */
$ut_hero_type                   = ut_return_hero_config('ut_hero_type');
                
/* hero caption content and description */ 
$ut_custom_slogan               = ut_return_hero_config('ut_custom_slogan');
$ut_expertise_slogan 	        = ut_return_hero_config('ut_expertise_slogan');
$ut_company_slogan 	 	        = ut_return_hero_config('ut_company_slogan');
$ut_catchphrase 		        = ut_return_hero_config('ut_catchphrase');

/* main hero button */
$ut_main_hero_button 	 		= ut_return_hero_config('ut_main_hero_button');

/* only load button config when button has been activated */
if( !empty( $ut_main_hero_button ) ) {
    $ut_main_hero_button_url_type    = ut_return_hero_config('ut_main_hero_button_url_type', 'section');    
    $ut_main_hero_button_target	     = ut_return_hero_config('ut_main_hero_button_target' , '#ut-to-first-section');
    $ut_main_hero_button_link_target = ut_return_hero_config('ut_main_hero_button_link_target');
    $ut_main_hero_button_style       = ut_return_hero_config('ut_main_hero_button_style' , 'default');
    $ut_main_hero_button_settings    = ut_return_hero_config('ut_main_hero_button_settings');
}

/* second hero button */ 
$ut_second_hero_button          = ut_return_hero_config('ut_second_hero_button' , 'off');

/* only load button config when button has been activated */
if( $ut_second_hero_button == 'on' ) {    
    $ut_second_hero_button_text     = ut_return_hero_config('ut_second_hero_button_text');
    $ut_second_hero_button_url_type = ut_return_hero_config('ut_second_hero_button_url_type', 'section');
    $ut_second_hero_button_target   = ut_return_hero_config('ut_second_hero_button_target');
    $ut_second_hero_button_url      = ut_return_hero_config('ut_second_hero_button_url');
    $ut_second_hero_button_style    = ut_return_hero_config('ut_second_hero_button_style' , 'default'); 
    $ut_second_hero_button_settings = ut_return_hero_config('ut_second_hero_button_settings');	
}

/* hero content and styling */
$ut_hero_overlay	 		    = ut_return_hero_config('ut_hero_overlay');
$ut_hero_style	 			    = ut_return_hero_config('ut_hero_style' , 'ut-hero-style-1');
$ut_hero_align   			    = ut_return_hero_config('ut_hero_align' , 'center');
$ut_hero_font_style			    = ut_return_hero_config('ut_hero_font_style' , 'semibold');
$ut_hero_overlay_pattern    	= ut_return_hero_config('ut_hero_overlay_pattern' , 'on');
$ut_hero_dynamic_content 	    = ut_return_hero_config('ut_hero_dynamic_content');
$ut_hero_shortcode              = ut_return_hero_config('ut_hero_shortcode');
        
/* hero image */
$ut_hero_image                  = ut_return_hero_config('ut_hero_image');
if( is_array($ut_hero_image) && !empty( $ut_hero_image['background-image'] ) ) {
    $ut_hero_image = $ut_hero_image['background-image'];
}

/* hero rain effect */
$ut_hero_rain_effect            = ut_return_hero_config('ut_hero_rain_effect' , 'off');
$ut_hero_rain_sound             = ut_return_hero_config('ut_hero_rain_sound' , 'off');

/* hero video button  */
if($ut_hero_type == 'video') {
    $ut_video_mute_button           = ut_return_hero_config('ut_video_mute_button' , 'hide');
    $ut_video_mute_state            = ut_return_hero_config('ut_video_mute_state' , 'off');
    $ut_video_source                = ut_return_hero_config('ut_video_source' , 'youtube');
}

/* hero tab slider */
if($ut_hero_type == 'tabs') {
    $ut_tabs_headline               = ut_return_hero_config('ut_tabs_headline');
    $ut_tabs                        = ut_return_hero_config('ut_tabs');
}

/* hero background slider */
if($ut_hero_type == 'slider') {
    $ut_background_slider_slides    = ut_return_hero_config('ut_background_slider_slides');
}

/* hero fancy slider */
if($ut_hero_type == 'transition') {
    $ut_fancy_slider_slides         = ut_return_hero_config('ut_fancy_slider_slides');
    $ut_fancy_slider_effect         = ut_return_hero_config('ut_fancy_slider_effect' , 'fxSoftScale');
}

/* hero split content */
if($ut_hero_type == 'splithero') {
    
    $ut_hero_split_content_type    = ut_return_hero_config('ut_hero_split_content_type' , 'image');
    $ut_hero_split_image            = ut_return_hero_config('ut_hero_split_image');
    $ut_hero_split_image_effect     = ut_return_hero_config('ut_hero_split_image_effect');
    
    if($ut_hero_split_content_type == 'video') {
        $ut_hero_split_video = ut_return_hero_config('ut_hero_split_video');
        $ut_hero_split_video_box = ut_return_hero_config('ut_hero_split_video_box' , 'on');
        $ut_hero_split_video_box_style = ut_return_hero_config('ut_hero_split_video_box_style' , 'light');
    }            
    
}        
        
/* hero overlay pattern */
$pattern                        = ( $ut_hero_overlay_pattern == 'on' ) ? 'parallax-overlay-pattern' : '';
$patternstyle                   = ut_return_hero_config('ut_hero_overlay_pattern_style' , 'style_one');

/*
|--------------------------------------------------------------------------
| output for: dynamic hero with custom content
|--------------------------------------------------------------------------
*/

if( ( $ut_hero_type == 'dynamic') ) : ?>
    
    <!-- hero section -->
    <section class="ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
    
         <?php echo apply_filters( 'the_content' , $ut_hero_dynamic_content ); ?>
    
    </section>


<?php
/*
|--------------------------------------------------------------------------
| output for: custom header
|--------------------------------------------------------------------------
*/
        
elseif( $ut_hero_type == 'custom' ) : ?>
    
    <!-- hero section -->
    <section class="ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
    
        <?php echo do_shortcode($ut_hero_shortcode); ?>
        
    </section>

<?php
/*
|--------------------------------------------------------------------------
| output for: fancy transition fancy image slider header
|--------------------------------------------------------------------------
*/

elseif( $ut_hero_type == 'transition' ) : 
    
    $slidecount = 1; ?>
      
    <!-- hero section -->
    <section class="ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
        
        <?php if( !empty($ut_fancy_slider_slides) && is_array($ut_fancy_slider_slides) ) : ?>
            
        <!-- slider -->
        <div id="ut-fancy-slider" class="ut-fancy-slider ut-fancy-slider-fullwidth <?php echo $ut_fancy_slider_effect; ?>">
            
            <ul class="ut-fancy-slides">
                
                <?php foreach( $ut_fancy_slider_slides as $slide ) : ?>
                
                    <li <?php echo $slidecount==1 ? 'class="current"' : ''; ?>>
                            
                        <?php 
                        
                        /* single caption settings */
                        $style = ( !empty($slide['style']) && $slide['style'] != 'global') ? $slide['style'] : $ut_hero_style;
                        $fontstyle = ( !empty($slide['font_style']) && $slide['font_style'] != 'global') ? $slide['font_style'] : $ut_hero_font_style;
                        $link_description = !empty($slide['link_description']) ? $slide['link_description'] : '';
                        
                        if( !empty( $slide['scroll_to_target'] ) ) {
                                                            
                            $slidelink = '#section-' . ut_get_the_slug($slide['scroll_to_target']);  
                                                          
                        } elseif( !empty($link_description) ) {  
                                                      
                            $slidelink = !empty($slide['link']) ? $slide['link'] : '#ut-to-first-section';  
                                                      
                        }
                        
                        ?>                
                                                                        
                        <div class="grid-container">
                            <!-- hero holder -->
                            <div class="hero-holder grid-100 mobile-grid-100 tablet-grid-100 <?php echo $style; ?>">
                                <div class="hero-inner" style="text-align:<?php echo $slide['align']; ?>">                
                                    
                                    <?php if( !empty($slide['expertise']) ) : ?>
                                        <div class="hdh"><span class="hero-description"><?php echo do_shortcode( ut_translate_meta($slide['expertise']) ); ?></span></div>
                                    <?php endif; ?>
                                                    
                                    <?php if( !empty($slide['description']) ) : ?>
                                        <div class="hth"><h1 class="hero-title <?php echo $fontstyle; ?>"><?php echo do_shortcode( ut_translate_meta($slide['description']) ); ?></h1></div>
                                    <?php endif; ?>
                                    
                                    <?php if( !empty($slide['catchphrase']) ) : ?>
                                        <div class="hdb"><span class="hero-description-bottom"><?php echo do_shortcode( ut_translate_meta($slide['catchphrase']) ); ?></span></div>
                                    <?php endif; ?>
                                    
                                    <?php if( !empty($link_description) ) : ?>
                                        <span class="hero-btn-holder"><a target="_blank" href="<?php echo $slidelink; ?>" class="hero-btn hero-slider-button"><?php echo ut_translate_meta($link_description); ?></a></span>
                                    <?php endif; ?>    
                                                                   
                                </div>
                            </div><!-- close hero-holder -->
                        </div>
                        
                        <img alt="<?php echo !empty($slide['title']) ? $slide['title'] : ''; ?>" src="<?php echo $slide['image']; ?>">

                    </li>
                
                <?php $slidecount++; endforeach; ?>
                
            </ul>
            
            <nav>
                <a class="prev" href="#"><?php _e('Previous item' , 'unitedthemes'); ?></a>
                <a class="next" href="#"><?php _e('Next item' , 'unitedthemes'); ?></a>
            </nav>
            
        </div>
        
        <?php endif; ?>
    
    </section>

<?php
/*
|--------------------------------------------------------------------------
| output for: image slider header
|--------------------------------------------------------------------------
*/

elseif( $ut_hero_type == 'slider' ) : ?>
      
      <!-- hero section -->
      <section id="ut-hero" class="slider hero ha-waypoint parallax-section parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
      
      <?php if( $ut_hero_overlay == 'on') : ?>
        
           <div class="parallax-overlay <?php echo $pattern; ?> <?php echo $patternstyle; ?>" style="position:absolute;"></div> 
        
      <?php endif; ?>                         
      
      
      <?php if( !empty($ut_background_slider_slides) && is_array($ut_background_slider_slides) ) : ?>
      
          <!-- slider -->
          <div id="ut-hero-slider" class="ut-hero-slider flexslider">
              
              <ul class="slides">
  
                  <?php foreach($ut_background_slider_slides as $slide) : ?>
                                  
                      <li style="background:url(<?php echo $slide['image'] ; ?>)"></li>
                  
                  <?php endforeach; ?>
  
              </ul>
              
          </div>
          <!-- close slider -->
          
          <!-- controls -->
          <a class="ut-flex-control next"></a>
          <a class="ut-flex-control prev"></a>
          <!-- !controls -->
          
          <!-- caption -->
          <div id="ut-hero-captions" class="ut-hero-captions flexslider">
              <ul class="slides">
                  
                      <?php foreach($ut_background_slider_slides as $slide) : ?>
                      
                          <?php 
                          
                          /* single caption settings */
                          $style = ( !empty($slide['style']) && $slide['style'] != 'global') ? $slide['style'] : $ut_hero_style;
                          $fontstyle = ( !empty($slide['font_style']) && $slide['font_style'] != 'global') ? $slide['font_style'] : $ut_hero_font_style;
                          $align = ( !empty($slide['align']) ) ? $slide['align'] : 'center';
                          $animation_direction = !empty($slide['direction']) ? $slide['direction'] : 'top'; 
                          
                          $slidelink = !empty($slide['link']) ? $slide['link'] : '#ut-to-first-section';
                          $link_description = !empty($slide['link_description']) ? $slide['link_description'] : '';
                          
                          ?>                
                      
                          <li>
                              
                              <div class="grid-container">
                                  <!-- hero holder -->
                                  <div class="hero-holder grid-100 mobile-grid-100 tablet-grid-100 <?php echo $style; ?>" data-animation="<?php echo $animation_direction; ?>">
                                      <div class="hero-inner" style="text-align:<?php echo $align; ?>;">                
                                          
                                          <?php if( !empty($slide['expertise']) ) : ?>
                                              <div class="hdh"><span class="hero-description"><?php echo do_shortcode( ut_translate_meta($slide['expertise']) ); ?></span></div>
                                          <?php endif; ?>
                                                          
                                          <?php if( !empty($slide['description']) ) : ?>
                                              <div class="hth"><h1 class="hero-title <?php echo $fontstyle; ?>"><?php echo do_shortcode( ut_translate_meta($slide['description']) ); ?></h1></div>
                                          <?php endif; ?>
                                          
                                          <?php if( !empty($slide['catchphrase']) ) : ?>
                                               <div class="hdb"><span class="hero-description-bottom"><?php echo do_shortcode( ut_translate_meta($slide['catchphrase']) ); ?></span></div>
                                          <?php endif; ?>
                                          
                                          <?php if( !empty($link_description) ) : ?>
                                              <?php $slide['link_description'] = !empty($slide['link_description']) ? $slide['link_description'] : __('Read more' , 'unitedthemes'); ?>
                                              <span class="hero-btn-holder"><a target="_blank" href="<?php echo $slidelink; ?>" class="hero-btn hero-slider-button"><?php echo ut_translate_meta($link_description); ?></a></span>
                                          <?php endif; ?>    
                                                                         
                                      </div>
                                  </div><!-- close hero-holder -->
                              </div>
                              
                          </li>
                      
                      <?php endforeach; ?>
                                  
              </ul>
          </div>
          <!-- close captions -->
      
      <?php endif; ?> 
      
      </section>

<?php
/*
|--------------------------------------------------------------------------
| output for: image hero
|--------------------------------------------------------------------------
*/
elseif($ut_hero_type == 'image') : ?>
    
    <!-- hero section -->
    <section id="ut-hero" class="hero ha-waypoint parallax-section parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
        
        <?php /* overlay effect for hero */ ?>
            
            <?php if( $ut_hero_overlay == 'on') : ?>
            
            <div class="parallax-overlay <?php echo $pattern; ?> <?php echo $patternstyle; ?>">
            
            <?php endif; ?>
        
        <?php /* rain effect for hero */ ?>
        
            <?php if( $ut_hero_rain_effect == 'on' ) : ?>
                
                <?php /* needed image */ ?>                    
                <img id="ut-rain-background" src="<?php echo $ut_hero_image; ?>" alt="rain" />
                
            <?php endif; ?>
        
        <?php /* main output for hero */ ?>
        
        <div class="grid-container">
            <!-- hero holder -->
            <div class="hero-holder grid-100 mobile-grid-100 tablet-grid-100 <?php echo $ut_hero_style; ?>">
                <div class="hero-inner" style="text-align:<?php echo $ut_hero_align; ?>;">                
                    
                    <?php if( !empty($ut_custom_slogan) ) : ?>
                        <?php echo do_shortcode( ut_translate_meta($ut_custom_slogan) ); ?>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_expertise_slogan) ) : ?>
                        <div class="hdh"><span class="hero-description"><?php echo do_shortcode( ut_translate_meta($ut_expertise_slogan) ); ?></span></div>
                    <?php endif; ?>
                                    
                    <?php if( !empty($ut_company_slogan) ) : ?>
                        <div class="hth"><h1 class="hero-title"><?php echo do_shortcode( ut_translate_meta($ut_company_slogan) ); ?></h1></div>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_catchphrase) ) : ?>
                        <div class="hdb"><span class="hero-description-bottom"><?php echo do_shortcode( ut_translate_meta($ut_catchphrase) ); ?></span></div>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_main_hero_button) ) : ?>
                        
                        <span class="hero-btn-holder">
                            
                            <a id="to-about-section" target="<?php echo $ut_main_hero_button_link_target; ?>" href="<?php echo $ut_main_hero_button_target; ?>" class="hero-btn <?php echo $ut_main_hero_button_style; ?>">
                            
                                <?php if( $ut_main_hero_button_style == 'custom' ) : ?>                                        
                                    
                                    <?php echo !empty($ut_main_hero_button_settings['icon']) ? '<i class="fa ' . $ut_main_hero_button_settings['icon'] . '"></i>' : ''; ?> 
                                    
                                <?php endif; ?>
                                
                                <?php echo ut_translate_meta($ut_main_hero_button); ?>
                            
                            </a>
                            
                            <?php if( $ut_second_hero_button == 'on' ) : ?>
                        
                                <a href="<?php echo $ut_second_hero_button_url; ?>" class="hero-second-btn <?php echo $ut_second_hero_button_style; ?>" target="<?php echo $ut_second_hero_button_target; ?>">
                                    
                                    <?php if( $ut_second_hero_button_style == 'custom' ) : ?>                                        
                                
                                        <?php echo !empty($ut_second_hero_button_settings['icon']) ? '<i class="fa ' . $ut_second_hero_button_settings['icon'] . '"></i>' : ''; ?> 
                                        
                                    <?php endif; ?>
                                    
                                    <?php echo ut_translate_meta($ut_second_hero_button_text); ?>                                        
                                
                                </a>
                        
                            <?php endif; ?> 
                        
                        </span>
                        
                    <?php endif; ?>
                    
                </div>
            </div><!-- close hero-holder -->
        </div>
        
        <?php /* rain sound effect for hero */ ?>
        
            <?php if( $ut_hero_rain_effect == 'on' && $ut_hero_rain_sound == 'on' ) : ?>
                    
                <div id="ut-hero-audio" class="hero-audio-holder">
                    <?php echo do_shortcode('[audio mp3="' . THEME_WEB_ROOT . '/sounds/heavyrain.mp3" wav="' . THEME_WEB_ROOT . '/sounds/heavyrain.wav" loop="on" autoplay=""]'); ?>
                </div>
                
                <a href="#ut-hero-audio" class="ut-audio-control ut-unmute">Unmute</a>
            
            <?php endif; ?>               
        
        <?php /* overlay effect for hero */ ?>
        
            <?php if( $ut_hero_overlay == 'on') : ?>
            
            </div> 
            
            <?php endif; ?>
        
        <div data-section="top" class="ut-scroll-up-waypoint"></div>
        
    </section><!-- close hero section -->            

<?php
/*
|--------------------------------------------------------------------------
| output for: split hero image hero
|--------------------------------------------------------------------------
*/
elseif($ut_hero_type == 'splithero') : ?>
    
    <!-- hero section -->
    <section id="ut-hero" class="hero ha-waypoint parallax-section parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
        
        <?php /* overlay effect for hero */ ?>
            
            <?php if( $ut_hero_overlay == 'on') : ?>
            
            <div class="parallax-overlay <?php echo $pattern; ?> <?php echo $patternstyle; ?>">
            
            <?php endif; ?>
            
            
        <?php /* rain effect for hero */ ?>
            
            <?php if( $ut_hero_rain_effect == 'on' ) : ?>
                
                <?php /* needed image */ ?>                    
                 <img id="ut-rain-background" src="<?php echo $ut_hero_image; ?>" alt="rain" />
                
            <?php endif; ?>
        
        <?php /* main output for hero */ ?>
        
        <div class="grid-container">
            <!-- hero holder -->
            <div class="hero-holder ut-split-hero grid-parent grid-100 mobile-grid-100 tablet-grid-100 <?php echo $ut_hero_style; ?>">
                <div class="hero-inner" style="text-align:<?php echo $ut_hero_align; ?>;">                
                    
                    <div class="grid-50 tablet-grid-50 mobile-grid-100">
                    
                    <?php if( !empty($ut_custom_slogan) ) : ?>
                        <?php echo do_shortcode( ut_translate_meta($ut_custom_slogan) ); ?>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_expertise_slogan) ) : ?>
                        <div class="hdh"><span class="hero-description"><?php echo do_shortcode( ut_translate_meta($ut_expertise_slogan) ); ?></span></div>
                    <?php endif; ?>
                                    
                    <?php if( !empty($ut_company_slogan) ) : ?>
                        <div class="hth"><h1 class="hero-title"><?php echo do_shortcode( ut_translate_meta($ut_company_slogan) ); ?></h1></div>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_catchphrase) ) : ?>
                        <div class="hdb"><span class="hero-description-bottom"><?php echo do_shortcode( ut_translate_meta($ut_catchphrase) ); ?></span></div>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_main_hero_button) ) : ?>
                        
                        <span class="hero-btn-holder">
                            
                            <a id="to-about-section" target="<?php echo $ut_main_hero_button_link_target; ?>" href="<?php echo $ut_main_hero_button_target; ?>" class="hero-btn <?php echo $ut_main_hero_button_style; ?>">
                            
                                <?php if( $ut_main_hero_button_style == 'custom' ) : ?>                                        
                                    
                                    <?php echo !empty($ut_main_hero_button_settings['icon']) ? '<i class="fa ' . $ut_main_hero_button_settings['icon'] . '"></i>' : ''; ?> 
                                    
                                <?php endif; ?>
                                
                                <?php echo ut_translate_meta($ut_main_hero_button); ?>
                            
                            </a>
                            
                            <?php if( $ut_second_hero_button == 'on' ) : ?>
                        
                                <a href="<?php echo $ut_second_hero_button_url; ?>" class="hero-second-btn <?php echo $ut_second_hero_button_style; ?>" target="<?php echo $ut_second_hero_button_target; ?>">
                                    
                                    <?php if( $ut_second_hero_button_style == 'custom' ) : ?>                                        
                                
                                        <?php echo !empty($ut_second_hero_button_settings['icon']) ? '<i class="fa ' . $ut_second_hero_button_settings['icon'] . '"></i>' : ''; ?> 
                                        
                                    <?php endif; ?>
                                    
                                    <?php echo ut_translate_meta($ut_second_hero_button_text); ?>                                        
                                
                                </a>
                        
                            <?php endif; ?> 
                        
                        </span>
                        
                    <?php endif; ?>       
                    
                                            
                    </div>
                                        
                    <div class="grid-50 tablet-grid-50 hide-on-mobile">
                        
                        <?php if($ut_hero_split_content_type == 'image' && !empty($ut_hero_split_image) ) : ?>
                         
                            <?php if( !empty($ut_hero_split_image_effect) && $ut_hero_split_image_effect !='none' ) {
                                
                                $dataeffect = 'data-effect="'.$ut_hero_split_image_effect.'"';
                                $animated  	= 'ut-animate-element animated';                                    
                            
                            } ?>                                
                            
                            <div class="ut-split-image">
                                <img class="<?php echo $animated; ?>" <?php echo $dataeffect; ?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" src="<?php echo $ut_hero_split_image ?>" />
                            </div>
                        
                        <?php endif; ?>
                        
                        <?php if($ut_hero_split_content_type == 'video' && !empty($ut_hero_split_video) ) : ?>
                            
                            <?php $style = ( $ut_hero_split_video_box == 'on' ) ? 'ut-hero-video-' . $ut_hero_split_video_box_style : ''; ?>
                            
                            <div class="ut-hero-video <?php echo $ut_hero_split_video_box == 'on' ? 'ut-hero-video-boxed' : ''; ?> <?php echo $style; ?>">    
                                <div class="ut-video">
                                    <?php echo do_shortcode($ut_hero_split_video); ?>                                        
                                </div>
                            </div>    
                        
                        <?php endif; ?>
                        
                    </div>                    
                    
                </div>
            </div><!-- close hero-holder -->
        </div>
            
        <?php /* rain sound effect for hero */ ?>
          
            <?php if( $ut_hero_rain_effect == 'on' && $ut_hero_rain_sound == 'on' ) : ?>
                      
                <div id="ut-hero-audio" class="hero-audio-holder">
                    <?php echo do_shortcode('[audio mp3="' . THEME_WEB_ROOT . '/sounds/heavyrain.mp3" wav="' . THEME_WEB_ROOT . '/sounds/heavyrain.wav" loop="on" autoplay=""]'); ?>
                </div>
                
                <a href="#ut-hero-audio" class="ut-audio-control ut-unmute">Unmute</a>
              
            <?php endif; ?>
        
        <?php /* overlay effect for hero */ ?>
        
            <?php if( $ut_hero_overlay == 'on') : ?>
            
            </div> 
            
            <?php endif; ?>
        
        <div data-section="top" class="ut-scroll-up-waypoint"></div>
        
    </section><!-- close hero section -->

<?php
/*
|--------------------------------------------------------------------------
| output for: animated image hero
|--------------------------------------------------------------------------
*/
elseif($ut_hero_type == 'animatedimage') : ?>
    
    <!-- hero section -->
    <section id="ut-hero" class="hero ha-waypoint parallax-section parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
        
        <?php /* overlay effect for hero */ ?>
            
            <?php if( $ut_hero_overlay == 'on') : ?>
            
            <div class="parallax-overlay <?php echo $pattern; ?> <?php echo $patternstyle; ?>">
            
            <?php endif; ?>
        
        <?php /* main output for hero */ ?>
        
        <div class="grid-container">
            <!-- hero holder -->
            <div class="hero-holder grid-100 mobile-grid-100 tablet-grid-100 <?php echo $ut_hero_style; ?>">
                <div class="hero-inner" style="text-align:<?php echo $ut_hero_align; ?>;">                
                    
                    <?php if( !empty($ut_custom_slogan) ) : ?>
                        <?php echo do_shortcode( ut_translate_meta($ut_custom_slogan) ); ?>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_expertise_slogan) ) : ?>
                        <div class="hdh"><span class="hero-description"><?php echo do_shortcode( ut_translate_meta($ut_expertise_slogan) ); ?></span></div>
                    <?php endif; ?>
                                    
                    <?php if( !empty($ut_company_slogan) ) : ?>
                        <div class="hth"><h1 class="hero-title"><?php echo do_shortcode( ut_translate_meta($ut_company_slogan) ); ?></h1></div>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_catchphrase) ) : ?>
                        <div class="hdb"><span class="hero-description-bottom"><?php echo do_shortcode( ut_translate_meta($ut_catchphrase) ); ?></span></div>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_main_hero_button) ) : ?>
                        
                        <span class="hero-btn-holder">
                            
                            <a id="to-about-section" target="<?php echo $ut_main_hero_button_link_target; ?>" href="<?php echo $ut_main_hero_button_target; ?>" class="hero-btn <?php echo $ut_main_hero_button_style; ?>">
                            
                                <?php if( $ut_main_hero_button_style == 'custom' ) : ?>                                        
                                    
                                    <?php echo !empty($ut_main_hero_button_settings['icon']) ? '<i class="fa ' . $ut_main_hero_button_settings['icon'] . '"></i>' : ''; ?> 
                                    
                                <?php endif; ?>
                                
                                <?php echo ut_translate_meta($ut_main_hero_button); ?>
                            
                            </a>
                            
                            <?php if( $ut_second_hero_button == 'on' ) : ?>
                        
                                <a href="<?php echo $ut_second_hero_button_url; ?>" class="hero-second-btn <?php echo $ut_second_hero_button_style; ?>" target="<?php echo $ut_second_hero_button_target; ?>">
                                    
                                    <?php if( $ut_second_hero_button_style == 'custom' ) : ?>                                        
                                
                                        <?php echo !empty($ut_second_hero_button_settings['icon']) ? '<i class="fa ' . $ut_second_hero_button_settings['icon'] . '"></i>' : ''; ?> 
                                        
                                    <?php endif; ?>
                                    
                                    <?php echo ut_translate_meta($ut_second_hero_button_text); ?>                                       
                                
                                </a>
                        
                            <?php endif; ?> 
                        
                        </span>
                        
                    <?php endif; ?>
                    
                </div>
            </div><!-- close hero-holder -->
        </div>
        
        <?php /* overlay effect for hero */ ?>
        
            <?php if( $ut_hero_overlay == 'on') : ?>
            
            </div> 
            
            <?php endif; ?>
        
        <div data-section="top" class="ut-scroll-up-waypoint"></div>
        
    </section><!-- close hero section -->

<?php
/*
|--------------------------------------------------------------------------
| output for: video hero
|--------------------------------------------------------------------------
*/
elseif($ut_hero_type == 'video') : ?>
    
    <!-- hero section -->
    <section id="ut-hero" class="<?php echo (!empty($ut_video_source) && $ut_video_source == 'custom') ? 'ut-single-video' : ''; ?> hero ha-waypoint parallax-section parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
        
        <?php echo ut_create_bg_videoplayer(); ?>
        
        <?php /* overlay effect for hero */ ?>
            
            <?php if($ut_hero_overlay == 'on') : ?>
            
            <div class="parallax-overlay <?php echo $pattern; ?> <?php echo $patternstyle; ?> <?php echo (!empty($ut_video_source) && $ut_video_source == 'selfhosted' && !$detect->isMobile() ) ? 'ut-hero-video-position' : ''; ?>">
            
            <?php elseif($ut_hero_overlay == 'off' && !empty($ut_video_source) && $ut_video_source == 'selfhosted' && !$detect->isMobile() ) :?>
            
            <div class="ut-hero-video-position">
            
            <?php endif; ?>
        
        <?php /* main output for hero */ ?>
        
        <?php if($ut_video_source != 'custom') : ?>
            
        <div class="grid-container">
            <!-- hero holder -->
            <div class="hero-holder grid-100 mobile-grid-100 tablet-grid-100 <?php echo $ut_hero_style; ?>">
                <div class="hero-inner" style="text-align:<?php echo $ut_hero_align; ?>;">                
                    
                    <?php if( !empty($ut_custom_slogan) ) : ?>
                        <?php echo do_shortcode( ut_translate_meta($ut_custom_slogan) ); ?>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_expertise_slogan) ) : ?>
                        <div class="hdh"><span class="hero-description"><?php echo do_shortcode( ut_translate_meta($ut_expertise_slogan) ); ?></span></div>
                    <?php endif; ?>
                                    
                    <?php if( !empty($ut_company_slogan) ) : ?>
                        <div class="hth"><h1 class="hero-title"><?php echo do_shortcode( ut_translate_meta($ut_company_slogan) ); ?></h1></div>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_catchphrase) ) : ?>
                        <div class="hdb"><span class="hero-description-bottom"><?php echo do_shortcode( ut_translate_meta($ut_catchphrase) ); ?></span></div>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_main_hero_button) ) : ?>
                            
                            <span class="hero-btn-holder">
                                
                                <a id="to-about-section" target="<?php echo $ut_main_hero_button_link_target; ?>" href="<?php echo $ut_main_hero_button_target; ?>" class="hero-btn <?php echo $ut_main_hero_button_style; ?>">
                                
                                    <?php if( $ut_main_hero_button_style == 'custom' ) : ?>                                        
                                        
                                        <?php echo !empty($ut_main_hero_button_settings['icon']) ? '<i class="fa ' . $ut_main_hero_button_settings['icon'] . '"></i>' : ''; ?> 
                                        
                                    <?php endif; ?>
                                    
                                    <?php echo ut_translate_meta($ut_main_hero_button); ?>
                                
                                </a>
                                
                                <?php if( $ut_second_hero_button == 'on' ) : ?>
                            
                                    <a href="<?php echo $ut_second_hero_button_url; ?>" class="hero-second-btn <?php echo $ut_second_hero_button_style; ?>" target="<?php echo $ut_second_hero_button_target; ?>">
                                        
                                        <?php if( $ut_second_hero_button_style == 'custom' ) : ?>                                        
                                    
                                            <?php echo !empty($ut_second_hero_button_settings['icon']) ? '<i class="fa ' . $ut_second_hero_button_settings['icon'] . '"></i>' : ''; ?> 
                                            
                                        <?php endif; ?>
                                        
                                        <?php echo ut_translate_meta($ut_second_hero_button_text); ?>                                       
                                    
                                    </a>
                            
                                <?php endif; ?> 
                            
                            </span>
                            
                        <?php endif; ?>
                    
                </div>
            </div><!-- close hero-holder -->
        </div>
        
        <?php endif; ?>
        
        <?php if( $ut_video_mute_button == 'show' && $ut_video_source != 'custom' ) : ?>
            
            <?php $mute = ( $ut_video_mute_state == "on" ) ? 'ut-mute' : 'ut-unmute'; ?>
                                
            <a id="ut-video-hero-control" data-for="ut-video-hero" href="#" class="ut-video-control <?php echo $ut_video_source; ?> <?php echo $mute; ?>">Unmute</a>
        
        <?php endif; ?>
        
        <?php /* overlay effect for hero */ ?>
        
            <?php if( $ut_hero_overlay == 'on') : ?>
            
            </div> 
            
            <?php elseif($ut_hero_overlay == 'off' && !empty($ut_video_source) && $ut_video_source == 'selfhosted') :?>
            
            </div>
            
            <?php endif; ?>
        
        <div data-section="top" class="ut-scroll-up-waypoint"></div>
        
    </section><!-- close hero section -->

<?php
/*
|--------------------------------------------------------------------------
| output for: image tabs
|--------------------------------------------------------------------------
*/
elseif($ut_hero_type == 'tabs') : ?>
    
    <!-- hero section -->
    <section id="ut-hero" class="hero ha-waypoint parallax-section parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
        
        <?php /* overlay effect for hero */ ?>
            
            <?php if( $ut_hero_overlay == 'on') : ?>
            
            <div class="parallax-overlay <?php echo $pattern; ?> <?php echo $patternstyle; ?>">
            
            <?php endif; ?>
            
        <?php /* main output for hero */ ?>
        
        <div class="grid-container">
            
            <!-- hero holder -->
            <div class="hero-holder ut-half-height grid-100 mobile-grid-100 tablet-grid-100 <?php echo $ut_hero_style; ?>">
                <div class="hero-inner" style="text-align:<?php echo $ut_hero_align; ?>;">                
                    
                    <?php if( !empty($ut_expertise_slogan) ) : ?>
                        <div class="hdh"><span class="hero-description"><?php echo do_shortcode( ut_translate_meta($ut_expertise_slogan) ); ?></span></div>
                    <?php endif; ?>
                                    
                    <?php if( !empty($ut_company_slogan) ) : ?>
                        <div class="hth"><h1 class="hero-title"><?php echo do_shortcode( ut_translate_meta($ut_company_slogan) ); ?></h1></div>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_catchphrase) ) : ?>
                        <div class="hdb"><span class="hero-description-bottom"><?php echo do_shortcode( ut_translate_meta($slide['catchphrase']) ); ?></span></div>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_main_hero_button) ) : ?>
                            
                            <span class="hero-btn-holder">
                                
                                <a id="to-about-section" target="<?php echo $ut_main_hero_button_link_target; ?>" href="<?php echo $ut_main_hero_button_target; ?>" class="hero-btn <?php echo $ut_main_hero_button_style; ?>">
                                
                                    <?php if( $ut_main_hero_button_style == 'custom' ) : ?>                                        
                                        
                                        <?php echo !empty($ut_main_hero_button_settings['icon']) ? '<i class="fa ' . $ut_main_hero_button_settings['icon'] . '"></i>' : ''; ?> 
                                        
                                    <?php endif; ?>
                                    
                                    <?php echo ut_translate_meta($ut_main_hero_button); ?>
                                
                                </a>
                                
                                <?php if( $ut_second_hero_button == 'on' ) : ?>
                            
                                    <a href="<?php echo $ut_second_hero_button_url; ?>" class="hero-second-btn <?php echo $ut_second_hero_button_style; ?>" target="<?php echo $ut_second_hero_button_target; ?>">
                                        
                                        <?php if( $ut_second_hero_button_style == 'custom' ) : ?>                                        
                                    
                                            <?php echo !empty($ut_second_hero_button_settings['icon']) ? '<i class="fa ' . $ut_second_hero_button_settings['icon'] . '"></i>' : ''; ?> 
                                            
                                        <?php endif; ?>
                                        
                                        <?php echo ut_translate_meta($ut_second_hero_button_text); ?>                                        
                                    
                                    </a>
                            
                                <?php endif; ?> 
                            
                            </span>
                            
                        <?php endif; ?>
                    
                </div>
            </div><!-- close hero-holder -->
            
            <div class="ut-tablet-holder ut-half-height hide-on-mobile">
                
                <div class="ut-tablet-inner">
                    
                    <div class="grid-40 suffix-5 mobile-grid-100 tablet-grid-40 tablet-suffix-5">
                        
                        <?php if( !empty( $ut_tabs_headline  ) ) : ?>
                            
                            <h2 class="ut-tablet-title"><?php echo ut_translate_meta( $ut_tabs_headline  ); ?></h2>
                            
                        <?php endif;?>
                                            
                        <?php if( !empty($ut_tabs) && is_array($ut_tabs) ) : ?>
                            
                            <ul class="ut-tablet-nav">
                                
                            <?php $counter = 1; foreach($ut_tabs as $tab) : ?>
                                        
                                <li class="<?php echo ($counter == 1) ? 'selected' : ''; ?>"><a href="#"><?php echo $tab['title']; ?></a></li>
                        
                            <?php $counter++; endforeach; ?>
                            
                            </ul>
                        
                        <?php endif; ?>
                            
                    </div>
                    
                    <div class="grid-55 mobile-grid-100 tablet-grid-55">
                        
                        <?php if( !empty($ut_tabs) && is_array($ut_tabs) ) : ?>
                            
                            <ul class="ut-tablet">
                                
                            <?php $counter = 1; foreach($ut_tabs as $tab) : ?>
                                        
                                <li class="<?php echo ($counter == 1) ? 'show' : ''; ?>">
                                    
                                    <?php $tab_image = ut_resize( ut_translate_meta( $tab['image'] ) , '800' , '800', true , true , true ); ?>
                                    
                                    <img src="<?php echo $tab_image; ?>" alt="<?php echo $tab['title']; ?>">
                                    
                                    <div class="ut-tablet-overlay">
                                        <div class="ut-tablet-overlay-content">
                                        <?php if( !empty( $tab['title'] ) ) : ?>
                                        
                                            <h2 class="ut-tablet-single-title"><?php echo ut_translate_meta( $tab['title'] ); ?></h2>
                                        
                                        <?php endif; ?>
                                        
                                        <?php if( !empty( $tab['description'] ) ) : ?>
                                            
                                            <p class="ut-tablet-desc"><?php echo ut_translate_meta( $tab['description'] ); ?></p>
                                            
                                        <?php endif; ?>
                                        
                                        <?php if( !empty( $tab['link_one_text'] ) ) : ?>
                                            
                                            <a class="ut-btn ut-left-tablet-button theme-btn small round" href="<?php echo ut_translate_meta( $tab['link_one_url'] ); ?>"><?php echo ut_translate_meta( $tab['link_one_text'] ); ?></a>
                                            
                                        <?php endif; ?>
                                        
                                        <?php if( !empty( $tab['link_two_text'] ) ) : ?>
                                            
                                            <a class="ut-btn ut-right-tablet-button theme-btn small round" href="<?php echo ut_translate_meta( $tab['link_two_url'] ); ?>"><?php echo ut_translate_meta( $tab['link_two_text'] ); ?></a>
                                            
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                
                                </li>
                        
                            <?php $counter++; endforeach; ?>
                            
                            </ul>
                            
                        <?php endif; ?>
                        
                    </div>
            
                </div>
                
            </div>
            
        </div>                
        
        <?php /* overlay effect for hero */ ?>
        
            <?php if( $ut_hero_overlay == 'on') : ?>
            
            </div> 
            
            <?php endif; ?>
        
        <div data-section="top" class="ut-scroll-up-waypoint"></div>
        
    </section><!-- close hero section -->

<?php endif; ?>

<div class="clear"></div> 