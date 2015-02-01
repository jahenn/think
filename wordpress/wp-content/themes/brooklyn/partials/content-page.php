<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package unitedthemes
 */

$ut_display_section_header = get_post_meta( get_the_ID() , 'ut_display_section_header' , true );

/* check if page header has been activated */
if( $ut_display_section_header == 'show' ) {
    
    $ut_page_slogan   = get_post_meta( get_the_ID() , 'ut_section_slogan' , true );
    $ut_page_header_style = get_post_meta( get_the_ID() , 'ut_section_header_style' , true ); 
    $ut_page_header_style = ( !empty($ut_page_header_style) && $ut_page_header_style != 'global' ) ? $ut_page_header_style : ot_get_option('ut_global_headline_style');
        
} ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php if( $ut_display_section_header == 'show' ) : ?>
    
	<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
		<header class="page-header <?php echo $ut_page_header_style;?>">
            <h1 class="page-title"><span><?php the_title(); ?></span></h1> 
            <?php if( !empty($ut_page_slogan) ) : ?>
                <p class="lead"><?php echo $ut_page_slogan; ?></p>
            <?php endif; ?>
                
            <div class="entry-meta">
                <?php edit_post_link( __( 'Edit', 'unitedthemes' ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?>
            </div>                                  
		</header><!-- .page-header -->
    </div>
	
    <?php endif; ?>
    
    <div class="grid-100 mobile-grid-100 tablet-grid-100">
    <div class="entry-content clearfix">	
        <?php the_content(); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'unitedthemes' ),
                'after'  => '</div>',
            ) );
        ?>    			         		          
    </div><!-- .entry-content -->
    </div>
</div><!-- #post -->