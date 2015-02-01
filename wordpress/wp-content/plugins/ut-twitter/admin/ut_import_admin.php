<div class="wrap ut-twitter-wrap"> 

    <div id="poststuff">
     
        <?php echo "<h2>" . __( 'United Themes - Twitter Plugin' , UT_TWITTER_LANG ) . "</h2>"; ?>  
         
        <div id="ut-twitter-manager" class="postbox">
         
            <form method="post" action="options.php"> 
             
                <?php wp_nonce_field('update-options'); ?>
                <?php settings_fields('ut_twitter_options_group'); ?>         
                
                <?php $twitter_options = ( is_array( get_option('ut_twitter_options') ) ) ? get_option('ut_twitter_options') : array(); ?> 
         
                <h3 class="hndle"><span><?php _e("United Themes - Twitter Settings (OAuth)" , UT_TWITTER_LANG ); echo ' v' . UT_TWITTER_VERSION; ?></span></h3>
                
                <div class="inside">
                       
                <p>Please go to <a href="https://dev.twitter.com/apps">Twitter Developer Apps</a> and create a new APP for your Website. Make sure the the Request Type has been set to "GET" inside the "OAuth Tool" tab. Learn more about the new Twitter API here <a href="https://dev.twitter.com/docs/auth/oauth/faq">OAuth FAQ</a> and here <a href="https://dev.twitter.com/">Twitter Developer</a>.</p>
                
                <table class="form-table">
                    <tbody>
        
                        <tr valign="top">
                            <th scope="row"><label for="ut_twitter_options[consumer_key]"><?php _e("Consumer Key: " , UT_TWITTER_LANG ); ?></label></th>
                            <td>
                                <input class="regular-text code" type="text" name="ut_twitter_options[consumer_key]" value="<?php echo (isset($twitter_options['consumer_key'])) ? $twitter_options['consumer_key'] : '' ; ?>">
                            </td>
                        </tr>
                        
                        <tr valign="top">
                            <th scope="row"><label for="ut_twitter_options[consumer_secret]"><?php _e("Consumer Secret Key: " , UT_TWITTER_LANG ); ?></label></th>
                            <td>
                                <input class="regular-text code" type="text" name="ut_twitter_options[consumer_secret]" value="<?php echo (isset($twitter_options['consumer_secret'])) ? $twitter_options['consumer_secret'] : '' ; ?>">
                            </td>
                        </tr>
                        
                        <tr valign="top">
                            <th scope="row"><label for="ut_twitter_options[oauth_access_token]"><?php _e("Access Token: " , UT_TWITTER_LANG ); ?></label></th>
                            <td>
                                <input class="regular-text code" type="text" name="ut_twitter_options[oauth_access_token]" value="<?php echo (isset($twitter_options['oauth_access_token'])) ? $twitter_options['oauth_access_token'] : '' ; ?>">
                            </td>
                        </tr>
                        
                        <tr valign="top">
                            <th scope="row"><label for="ut_twitter_options[oauth_access_token_secret]"><?php _e("Access Token Secret: " , UT_TWITTER_LANG ); ?></label></th>
                            <td>
                                <input class="regular-text code" type="text" name="ut_twitter_options[oauth_access_token_secret]" value="<?php echo (isset($twitter_options['oauth_access_token_secret'])) ? $twitter_options['oauth_access_token_secret'] : '' ; ?>">
                            </td>
                        </tr>
                        
                    </tbody>
                 </table>    
                
                 <input type="hidden" name="action" value="update" />
                 <input type="hidden" name="page_options" value="ut_twitter_options" />
                 <p class="submit"><input id="submit" type="submit" class="button button-primary" value="<?php _e('Save Changes', UT_THEME_NAME) ?>" /></p>
                
                
             </form>
         
         </div> <!-- end #ut-twitter-manager -->
     
     </div> <!-- end #poststuff -->
       
</div><!-- end #wrap -->