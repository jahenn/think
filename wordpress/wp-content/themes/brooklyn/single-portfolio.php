<?php
/**
 * The template for displaying single portfolio pages.
 *
 * @package unitedthemes
 */

global $post;

$ut_display_section_header = get_post_meta( get_the_ID() , 'ut_display_section_header' , true );

/* check if page header has been activated */
if( $ut_display_section_header != 'hide' ) {
    
    $ut_page_slogan   = get_post_meta( get_the_ID() , 'ut_section_slogan' , true );
    $ut_page_header_style = get_post_meta( get_the_ID() , 'ut_section_header_style' , true ); 
    $ut_page_header_style = ( !empty($ut_page_header_style) && $ut_page_header_style != 'global' ) ? $ut_page_header_style : ot_get_option('ut_global_headline_style');
        
}

/* post format */
$post_format = get_post_format();

/* portfolio details */
$ut_portfolio_details = get_post_meta( $post->ID , 'ut_portfolio_details', true ); 

/* needed variables */
$content     = $the_content = NULL; 
$pageslogan  = get_post_meta( $post->ID , 'ut_page_slogan' , true ); 
$socialshare = get_option('portfolio_social_setting');

/* color and css */
$ut_page_skin = get_post_meta( $post->ID , 'ut_section_skin' , true);
$ut_page_class = get_post_meta( $post->ID , 'ut_section_class' , true);

?>

<?php get_header(); ?>
    
    <?php if ( have_posts() ) : ?>
                
        <?php while ( have_posts() ) : the_post(); 
            
            /* assign content - depending on the post format we might need to modify it */
            $content = get_the_content();                  
            
            /* standard post format or audio format */
            if ( empty( $post_format ) || $post_format == 'audio' ) :        

                $the_content = apply_filters( 'the_content' , $content ); 
                
            /* video post format */    
            elseif( $post_format == 'video' ) :               
                 
                /* try to catch video url */
                $video_url = ut_get_portfolio_format_video_content( $content );
                
                if( !empty($video_url) ) : 
                    
                    /* cut out the video url from content and format it */
                    $the_content = str_replace( $video_url , "" , $content);
                    $the_content = apply_filters( 'the_content' , $the_content );
                    
                endif; 
            
            /* gallery post format */
            elseif( $post_format == 'gallery' ) : 
            
                /* assign content */
                $content = preg_replace( '/(.?)\[(gallery)\b(.*?)(?:(\/))?\](?:(.+?)\[\/\2\])?(.?)/s', '$1$6', $content );
                $the_content = apply_filters( 'the_content' , $content );               
                
            endif; ?>    
            
            <div class="grid-container">
                
                <div id="primary" class="grid-parent grid-100 tablet-grid-100 mobile-grid-100 <?php echo $ut_page_skin; ?> <?php echo $ut_page_class; ?>">
                            
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            
                            <?php if( $ut_display_section_header != 'hide' ) : ?>
                            
                            <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">                                
                                <header class="page-header <?php echo $ut_page_header_style;?>">
                                        
                                        <h1 class="page-title"><span><?php the_title(); ?></span></h1> 
                                        
                                        <?php if( !empty($pageslogan) ) : ?>
                                            <div class="lead"><?php echo wpautop($pageslogan); ?></div>
                                        <?php endif; ?>
                                            
                                        <div class="entry-meta">
                                            <?php edit_post_link( __( 'Edit', 'unitedthemes' ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?>
                                        </div>
                                                                     
                                </header><!-- .page-header -->                             
                             </div>
                             
                             <?php endif; ?>
                             
                             <?php if( is_array( $ut_portfolio_details ) && !empty( $ut_portfolio_details ) && ( count($ut_portfolio_details) > 1 ) ) : ?>
                                
                                <div class="grid-75 tablet-grid-75 mobile-grid-100">
                                
                                    <div class="entry-content clearfix">	
                                        
                                        <?php echo $the_content ?>
                                        
                                        <?php if( $socialshare == 'on' ) : ?>
                                
                                        <div class="clear"></div>
                                                    
                                        <ul class="ut-project-sc clearfix">
                                            <li><?php _e('Share:' , 'unitedthemes'); ?></li>
                                            <li><a class="ut-share-link sc-twitter" data-social="utsharetwitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="ut-share-link sc-facebook" data-social="utsharefacebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="ut-share-link sc-google" data-social="utsharegoogle"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="ut-share-link sc-linkedin" data-social="utsharelinkedin"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a class="ut-share-link sc-pinterest" data-social="utsharepinterest"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a class="ut-share-link sc-xing" data-social="utsharexing"><i class="fa fa-xing"></i></a></li>
                                        </ul>                                            
                                        
                                        <?php endif; ?>
                                                                      
                                    </div><!-- .entry-content -->
                                      
                                </div>
                                
                                <div class="grid-25 tablet-grid-25 mobile-grid-100">
                                    
                                    <div class="ut-portfolio-info clearfix">
                                    
                                    <?php foreach( $ut_portfolio_details as $portfolio_detail ) {
                                        
                                        if( !empty($portfolio_detail['title']) && !empty($portfolio_detail['value']) ) {                                        
                                            echo "<p>" . $portfolio_detail['title'] . ":<br><span>" . $portfolio_detail['value'] . "</span></p>";
                                        }
                                        
                                    } ?>
                                    
                                    </div>
                                
                                </div>
                             
                             <?php else : ?>
                                
                                <div class="grid-100 mobile-grid-100 tablet-grid-100">
                                  
                                      <div class="entry-content clearfix">	
                                          
                                        <?php echo $the_content; ?>
                                      
                                        <?php if( $socialshare == 'on' ) : ?>
                                
                                        <div class="clear"></div>
                                                    
                                        <ul class="ut-project-sc clearfix">
                                            <li><?php _e('Share:' , 'unitedthemes'); ?></li>
                                            <li><a class="ut-share-link sc-twitter" data-social="utsharetwitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="ut-share-link sc-facebook" data-social="utsharefacebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="ut-share-link sc-google" data-social="utsharegoogle"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="ut-share-link sc-linkedin" data-social="utsharelinkedin"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a class="ut-share-link sc-pinterest" data-social="utsharepinterest"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a class="ut-share-link sc-xing" data-social="utsharexing"><i class="fa fa-xing"></i></a></li>
                                        </ul>                                            
                                        
                                        <?php endif; ?>
                                                                        
                                      </div><!-- .entry-content -->
                                      
                                </div>
                                
                            <?php endif; ?> 

                                
                        </div><!-- #post -->
                                                        
                        <?php if ( comments_open() || '0' != get_comments_number() )  {
                                comments_template();
                        } ?>
                
                </div><!-- close #primary -->
                
            </div><!-- close grid-container -->
        
        <?php endwhile; // end of the loop. ?>
    			
    <?php endif; ?>
    
<?php get_footer(); ?>