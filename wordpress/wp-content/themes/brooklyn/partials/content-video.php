<?php

/*
|--------------------------------------------------------------------------
| The template for displaying posts in the video post format
|--------------------------------------------------------------------------
*/

?>
      		
<?php /* start output for classic blog , search , category tag or archive page */ ?>   
   
    <!-- post -->    
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> >
    
    	<!-- entry-meta -->
    	<div class="grid-25 tablet-grid-25 hide-on-mobile">
 		
    	<div class="entry-meta">
        
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
            <div class="date-format">
                <span class="day"><?php the_time('d'); ?></span>
                <span class="month"><?php the_time('M'); ?> <?php the_time('Y'); ?></span>
            </div>
            <span class="ut-sticky"><i class="fa fa-thumb-tack"></i><?php _e('Sticky Post', 'unitedthemes') ?></span>
            <span class="author-links"><i class="fa fa-user"></i><?php _e('By', 'unitedthemes') ?> <?php the_author_posts_link(); ?></span>  
            <?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list( __( ', ', 'unitedthemes' ) );
                if ( $categories_list && unitedthemes_categorized_blog() ) :
            ?>
            <span class="cat-links"><i class="fa fa-folder-open-o"></i><?php printf( __( 'Posted in %1$s', 'unitedthemes' ), $categories_list ); ?></span> 
            <?php endif; // End if categories ?>      
            <?php endif; // End if 'post' == get_post_type() ?>
            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <span class="comments-link"><i class="fa fa-comments-o"></i><?php _e('With', 'unitedthemes') ?> <?php comments_popup_link(__('No Comments', 'unitedthemes'), __('1 Comment', 'unitedthemes'), __('% Comments', 'unitedthemes')); ?></span>
            <?php endif; ?>
            <span class="permalink"><i class="fa fa-link"></i><a title="<?php printf(__('Permanent Link to %s', 'unitedthemes'), get_the_title()); ?>" href="<?php the_permalink(); ?>"><?php _e('Permalink', 'unitedthemes') ?></a></span>
            <?php edit_post_link( __( 'Edit', 'unitedthemes' ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?> 
            
    	</div>       
    
    	</div><!-- close entry-meta -->  
    
    <div class="grid-75 tablet-grid-75 mobile-grid-100">
    
    <!-- entry-header -->    
    <header class="entry-header">
    
        <?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'unitedthemes'), get_the_title()); ?>"> <?php the_title(); ?></a></h2>
		<?php endif; // is_single() ?>
        
        <div class="entry-meta hide-on-desktop hide-on-tablet">
        
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
            <span class="ut-sticky"><i class="fa fa-thumb-tack"></i><?php _e('Sticky Post', 'unitedthemes') ?></span>
            <span class="author-links"><i class="fa fa-user"></i><?php _e('By', 'unitedthemes') ?> <?php the_author_posts_link(); ?></span>  
            <span class="date-format"><i class="fa fa-clock-o"></i><?php _e('On', 'unitedthemes') ?> <span><?php the_time( get_option('date_format') ); ?></span></span>
            <?php endif; // End if 'post' == get_post_type() ?>
            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <span class="comments-link"><i class="fa fa-comments-o"></i><?php _e('With', 'unitedthemes') ?> <?php comments_popup_link(__('No Comments', 'unitedthemes'), __('1 Comment', 'unitedthemes'), __('% Comments', 'unitedthemes')); ?></span>
            <?php endif; ?>
            
    	</div>          
                             
    </header><!-- close entry-header -->   
        
    <?php if ( is_search() || ( !is_single() && has_excerpt() ) ) : ?>
    
        <!-- entry-summary -->
        <div class="entry-summary clearfix">
            
            <?php the_excerpt(); ?>
            <p> 
                <a href="<?php the_permalink(); ?>" class="more-link">
                    <span class="more-link"> <?php _e( 'Read more', 'unitedthemes' ); ?><i class="fa fa-chevron-circle-right"></i></span>
                </a>
            </p>
            
        </div><!-- close entry-summary -->
     
    <?php else : ?>
    
    <!-- entry-content -->
    <div class="entry-content clearfix">
        <?php the_content( '<span class="more-link">' . __( 'Read more', 'unitedthemes' ) . '<i class="fa fa-chevron-circle-right"></i></span>' ); ?>
        <?php ut_link_pages( array( 'before' => '<div class="page-links">', 'after' => '</div>' ) ); ?>
        
        <?php if ( is_single() ) : ?>
        <?php
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'unitedthemes' ) );
		if ( $tags_list ) :
		?>
        <span class="tags-links">
            <i class="fa fa-tags"></i><?php printf( __( 'Tagged&#58; %1$s', 'unitedthemes' ), $tags_list ); ?>
        </span>
    	<?php endif; // End if $tags_list ?>
        <?php endif; // is_single() ?>
        
    </div><!-- close entry-content -->
    
    <?php endif; ?>
             
    </div>     
    </article><!-- close post --> 