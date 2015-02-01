<?php 

#-----------------------------------------------------------------
# United Themes Hooks
#-----------------------------------------------------------------
   
/*
* Located in header.php after <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />  
*/
function ut_meta_hook(){

	do_action('ut_meta_hook');

}

/*
* Located in header.php after , only gets used when Yoast Yeo is inactive  
*/
function ut_meta_theme_hook(){

	do_action('ut_meta_theme_hook');

}

/*
* Located in header.php before <header id="masthead" class="site-header" role="banner"> 
*/
function ut_before_header_hook(){

	do_action('ut_before_header_hook');

}


/*
* Located in header.php before <div class="container">
*/
function ut_before_content_hook(){

	do_action('ut_before_content_hook');

}


/*
* Located in footer.php before <footer id="ut-footer" class="site-footer" role="contentinfo"> 
*/
function ut_before_footer_hook(){

	do_action('ut_before_footer_hook');

}

/*
* Located in footer.php after </footer><!-- #ut-footer .site-footer -->
*/
function ut_after_footer_hook(){

	do_action('ut_after_footer_hook');

}

/*
* Located in footer.php after </footer><!-- #ut-footer .site-footer -->
*/
function ut_java_footer_hook(){

	do_action('ut_java_footer_hook');

}


?>