<?php


class UT_Section_Video_player {
	
    static $add_script;
    static $youtube;
    static $selfhosted;

	static function init() {
		
        add_shortcode('ut_section_video', array(__CLASS__, 'handle_shortcode'));
        
        add_action('init', array(__CLASS__, 'register_script'));
		add_action('wp_footer', array(__CLASS__, 'print_script'));
        
	}

	static function handle_shortcode($atts) {
		
        global $detect;
        
        self::$add_script = true;
        
        extract(shortcode_atts(array(
               'id'         => '',
               'section'    => '',
               'source'     => 'youtube',
               'video'      => '',
               'volume'     => '5',
               'mutebutton' => 'off',
               'sound'      => 'off',
               'loop'       => 'on',
               'mp4'        => '',
               'ogg'        => '',
               'webm'       => '',
               'preload'    => ''
        ), $atts));
        
        /* id or section is empty, nothing to do here */
        if( empty($id) || empty($section) || $detect->isMobile() ) {
            return;
        }
        
        $script = NULL;
        $player = NULL;
        
        if($source == 'youtube') {
            
            self::$youtube = true;
            
            /* get player options */
            $sound_attr   = ($sound == 'off') ? 'mute : true' : 'mute : false';            
            $volume_attr  = (empty($volume)) ? 'vol : 0' : 'vol: ' . $volume;            
            $loop_attr    = ($loop == 'on') ? 'loop : true' : 'loop : false';
            
            /* create player script */
            $script .= '
            <script type="text/javascript">
            /* <![CDATA[ */
            
            (function($){
    
                $(document).ready(function(){
                    
                    if( $("#ut-background-video-' . $id . '").length ) {
                        
                        $("#ut-background-video-' . $id . '").mb_YTPlayer();
                        
                        /* player mute control */
                        $("#ut-video-control-' . $id . '").click(function(event){
                            
                            event.preventDefault();		
                            
                            if( $(this).hasClass("ut-unmute") ) {
                                
                                $(this).removeClass("ut-unmute").addClass("ut-mute").text("MUTE");														
                                $("#ut-background-video-' . $id . '").unmuteYTPVolume();
                                $("#ut-background-video-' . $id . '").setYTPVolume(' . $volume . ');
                                
                            } else {
                                
                                $(this).removeClass("ut-mute").addClass("ut-unmute").text("UNMUTE");
                                $("#ut-background-video-' . $id . '").muteYTPVolume();							
                                
                            }

                        });
                        
                        
                    }
           
                });

            })(jQuery);
            
             /* ]]> */	
            </script>';
            
            $player .= '<a id="ut-background-video-' . $id . '" class="ut-video-section-player" data-property="{ videoURL : \'' . $video . '\' , containment : \'#'.$section.'\' , showControls: false, autoPlay : true, '.$loop_attr.', '.$sound_attr.', '.$volume_attr.', startAt : 0, opacity : 1}"></a>';
            
            $sound = ( $sound == "on" ) ? 'ut-mute' : 'ut-unmute';
            
            if($mutebutton == 'on') {
                $player .= '<a id="ut-video-control-' . $id . '" class="ut-video-control '.$sound.' youtube" data-source="youtube" data-for="ut-background-video-' . $id . '" href="#">Unmute</a>';
            }
            
        }
        
        if($source == 'selfhosted') {
            
            if( !empty($mp4) || !empty($ogg) || !empty($webm) ) {
                
                self::$selfhosted = true;
                    
                /* build config */
                $sound   = ($sound == 'off') ? 'muted' : '';            
                $volume  = (empty($volume)) ? '5' : $volume;            
                $loop    = ($loop == 'on') ? 'loop' : '';
                $preload = ($preload == 'on') ? 'preload="auto"' : '';
                
                /* build player */
                $player .= '<div class="ut-video-container"><video id="ut-selfvideo-player-' . $id . '" class="ut-selfvideo-player" autoplay '.$loop.' '.$sound.' '.$preload.' volume="'.$volume.'" autobuffer controls>';
                
                if( !empty( $mp4 ) ) :
                            
                    $player .= '<source src="' . $mp4 . '" type="video/mp4"> ';
                    
                endif;
                
                if( !empty( $webm ) ) :
                    
                    $player .= '<source src="' . $webm . '" type="video/webm"> ';
                    
                endif;    
                
                if( !empty( $ogg ) ) :
                    
                    $player .= ' <source src="' . $ogg . '" type="video/ogg ogv">';
                                    
                endif;
                
                $player .= '</video></div><div class="ut-video-spacer"></div>';
                
                $sound = ( $sound == "on" ) ? 'ut-mute' : 'ut-unmute';
                
                if($mutebutton == 'on') {
                    $player .= '<a id="ut-video-control-' . $id . '" class="ut-video-control '.$sound.'" data-for="ut-selfvideo-player-' . $id . '" href="#">Unmute</a>';
                }
            
            
            }
            
        
        }        
                
        return $script . $player;
        
		
	}

	static function register_script() {
		
        wp_register_script('ut-bgvid', THEME_WEB_ROOT . '/js/jquery.mb.YTPlayer.min.js', array('jquery'), '1.0' , true );
        wp_register_script('ut-video', THEME_WEB_ROOT . '/js/ut-videoplayer.js', array('jquery'), '1.0' , true );
        
	}

	static function print_script() {
		
        if ( ! self::$add_script ) {
			return;
        }
        
        if ( self::$youtube ) {
		    wp_enqueue_script('ut-bgvid');
        }
        
        if ( self::$selfhosted ) {
            wp_enqueue_script('ut-video');
        }
        
	}
    
}

UT_Section_Video_player::init(); ?>