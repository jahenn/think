<?php

if ( ! function_exists( 'ut_get_video_player' ) ) :

	function ut_get_video_player() {
        
        /* get video to check */
		$video = $_POST['video'];
        
        /* needed variables */
        $embed_code = NULL;
        
        /* check if youtube has been used */
        preg_match('~(?:http|https|)(?::\/\/|)(?:www.|)(?:youtu\.be\/|youtube\.com(?:\/embed\/|\/v\/|\/watch\?v=|\/ytscreeningroom\?v=|\/feeds\/api\/videos\/|\/user\S*[^\w\-\s]|\S*[^\w\-\s]))([\w\-]{11})[a-z0-9;:@#?&%=+\/\$_.-]*~i', trim($video) , $matches);        
            
        if( !empty($matches[1]) ) {
            $embed_code = '<iframe height="315" width="560" src="http://www.youtube.com/embed/'.trim($matches[1]).'?wmode=transparent&vq=hd720" wmode="Opaque" allowfullscreen="" frameborder="0"></iframe>';          
        }
        
        /* check if vimeo has been used */
        preg_match("/https?:\/\/.*vimeo\.com\/.*\d+/", trim($video) , $matches);
        
        if( !empty($matches[1]) && empty($embed_code) ) {
          
            $embed_code = do_shortcode('[ut_video_vimeo id="'.$matches[1].'"]');
          
        }
        
        /* no video found so far , try to create a player  */
        if( empty($embed_code) ) {
            
            $video_embed = wp_oembed_get(trim($video));
            if( !empty($video_embed) ) {
                $embed_code = $video_embed;            
            }
            
        }
        
        /* still no video found , let's try to apply a shortcode */
        if( empty($embed_code) ) {
            $embed_code = do_shortcode(stripslashes($video));
        
        }
         
        echo $embed_code;
        
        die(1);
        
    }
    
endif;

add_action( 'wp_ajax_nopriv_ut_get_video_player', 'ut_get_video_player' );
add_action( 'wp_ajax_ut_get_video_player', 'ut_get_video_player' ); ?>