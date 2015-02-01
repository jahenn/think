<?php

/*
 * Twitter by United Themes
 * http://www.unitedthemes.com/
 */

class WP_UT_Widget_Twitter extends WP_Widget {
	
	protected $slug = 'ut_twitter';
	
    function __construct() {
		$widget_ops = array('classname' => 'ut_widget_twitter', 'description' => __( 'Displays simple Twitter tweets', 'ut_lang') );
		parent::__construct('lw_ut_twitter', __('United Themes - Twitter', 'ut_lang'), $widget_ops);
		$this->alt_option_name = 'ut_widget_twitter';

	}

    function form($instance) {
	
	if ( $instance ) {
	    
		$title = esc_attr( $instance['title'] );
				
	    $twitter_count = esc_attr($instance['count']);
	    $twitter_count = is_int($twitter_count) && (!$twitter_count) ? "5" : $twitter_count;		

	} ?>

	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'ut_lang'); ?>
	    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo isset($title) ? $title : ''; ?>" />
	</label>
	<p class="description"><?php _e('The widgets title.', 'ut_lang' ); ?></p>
	
	<label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Count:', 'ut_lang'); ?>
	    <input class="widefat" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo isset($twitter_count) ? $twitter_count : ''; ?>" />
	</label>
	<p class="description"><?php _e('How many tweets to display.', 'ut_lang' ); ?></p>

	<?php
    }

    function update($new_instance, $old_instance) {
        return $new_instance;
    }

    function widget( $args, $instance ) {
        
        $twitter_options = ( is_array( get_option('ut_twitter_options') ) ) ? get_option('ut_twitter_options') : array();
        
        extract( $args ); extract( $instance );
        
        $title = apply_filters( $this->slug, $title );
        
        if(empty($count) )
        $count = 3;	
        
        /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
        $settings = array(
            'oauth_access_token' => $twitter_options['oauth_access_token'],
            'oauth_access_token_secret' => $twitter_options['oauth_access_token_secret'],
            'consumer_key' => $twitter_options['consumer_key'],
            'consumer_secret' => $twitter_options['consumer_secret']
        );
        
		if( empty($twitter_options['oauth_access_token']) || empty($twitter_options['oauth_access_token_secret']) || empty($twitter_options['consumer_key']) || empty($twitter_options['consumer_secret']) ) {
		
			_e( 'Please make sure you have entered all necessary Twitter API Keys under Dashboard -> Settings -> Twitter' , 'ut_lang');
		
		} else {		
		                                
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
                
                return '<div class="ut-alert themecolor">'.__('An Error has occured, no Twitter Feeds are available','ut_lang').'</div>';
                
            } else {        
                                    
                /* fallback */
                $title = (isset($title)) ? $before_title.do_shortcode($title).$after_title  : '';        
                
                /* output */
                echo $before_widget;
                echo $title; 
                
                /* tweets */ ?>
                
                <div class="ut-tweets">
                    <ul class="tweet_list">
                        
                        <?php foreach($tweets as $tweet) : ?>
                            
                            <?php /* tweet data */
                            
                            $tweetdate = new DateTime($tweet->created_at);
                            $tweetdate = strtotime($tweetdate->format('Y-m-d H:i:s'));
                            $currentdate = strtotime(date('Y-m-d H:i:s'));  
                            $days = ut_twitter_time_ago($tweetdate , $currentdate);
                                                
                            /* end tweet data */ ?>
                            
                            <li class="tweet">
                            
                                <div class="">
                                
                                    <div class="tweet-left">
                                        
                                        <img src="<?php echo $tweet->user->profile_image_url; ?>">
                                        
                                        <div class="clear"></div>
                                        
                                        <span class="tweet-actions">
                                            <a href="https://twitter.com/intent/favorite?tweet_id=<?php echo $tweet->id_str; ?>" title="Favorite" rel="nofollow"><i class="icon-star icon-2"></i></a>
                                            <a href="https://twitter.com/intent/retweet?tweet_id=<?php echo $tweet->id_str; ?>" title="Retweet" rel="nofollow"><i class="icon-refresh icon-2"></i></a>
                                        </span>
                                        
                                    </div>
                                    
                                    <div class="tweet-right"> 
                                        
                                        <span class="tweet_text"><?php echo ut_twitterify($tweet->text) ; ?></span>
                                        
                                    </div>
                                    
                                    <div class="clear"></div>
                                                                        
                                    <div class="tweet-bottom clearfix">
                                    
                                        <span class="tweet_time"><a href="http://twitter.com/<?php echo $tweet->user->screen_name; ?>/status/<?php echo $tweet->id_str; ?>"><?php _e('about', 'ut_lang'); ?> <?php echo $days; ?></a></span>
                                        
                                    </div>
                                    
                            
                                </div>
                                
                            </li>
                        
                        <?php endforeach; ?>
                        
                    </ul>
                </div>
                
                <?php /* end tweets */ 
                
                echo $after_widget;
		
            }
        
        }
    
	}

}

add_action( 'widgets_init', create_function( '', 'return register_widget("WP_UT_Widget_Twitter");' ) );

?>