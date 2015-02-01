<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package unitedthemes
 */

$ut_page_skin = get_post_meta( $post->ID , 'ut_section_skin' , true);
$ut_page_class = get_post_meta( $post->ID , 'ut_section_class' , true);

get_header(); ?>
		
        <div class="grid-container">
        	
            <?php $grid = is_active_sidebar('page-widget-area') ? 'grid-75 tablet-grid-75 mobile-grid-100' : 'grid-100 tablet-grid-100 mobile-grid-100'; ?>
            
            <div id="primary" class="grid-parent <?php echo $grid; ?> <?php echo $ut_page_skin; ?> <?php echo $ut_page_class; ?>">
            
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'partials/content', 'page' ); ?>
			
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>
			
            </div><!-- close #primary -->
            
            <?php //get_sidebar(); ?>
            
		</div><!-- close grid-container -->
        
        <div class="ut-scroll-up-waypoint" data-section="section-<?php echo $post->post_name; ?>"></div>
        
<?php get_footer(); ?>
