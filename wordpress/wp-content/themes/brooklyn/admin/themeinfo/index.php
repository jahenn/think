<?php

global $wpdb;

/*
|--------------------------------------------------------------------------
| Add to Appearance Menu
|--------------------------------------------------------------------------
*/ 
add_action('admin_menu', 'ut_theme_info_page');

function ut_theme_info_page() {
    
	global $theme_path;
	
	add_submenu_page( 'themes.php' , 'Theme Info' , 'Theme Info' , 'manage_options', 'view_info', 'ut_view_info' );

}

/*
|--------------------------------------------------------------------------
| Output
|--------------------------------------------------------------------------
*/ 
function ut_view_info() { ?>

<div class="wrap">
	
    <div class="icon32" id="icon-options-general"><br></div>
    <h2><?php _e( 'Theme Info' , 'unitedthemes' ); ?></h2>
	<h3 class="title"><?php _e( 'Please paste down these information when starting a support inquiry in our supportforum' , 'unitedthemes' ); ?></h3>
	
    <table class="form-table">
    <tbody>
    
    <tr valign="top">
        <th scope="row">WordPress Version:</th>
        <td> <?php echo get_bloginfo('version'); ?> </td>
    </tr>
    
    <tr valign="top">
        <th scope="row">URL:</th>
        <td> <?php echo site_url(); ?> </td>
    </tr>
    
    <tr valign="top">
        <th scope="row">Installed Theme:</th>
        <td> <?php echo UT_THEME_NAME; ?> </td>
    </tr>
    
    <tr valign="top">
        <th scope="row">Theme Version:</th>
        <td> <?php echo UT_THEME_VERSION; ?> </td>
    </tr>
   
   	<tr valign="top">
        <th scope="row">PHP Version:</th>
        <td> <?php echo phpversion(); ?> </td>
    </tr>
    
    <?php if( is_array(get_option( 'active_plugins' ))) : ?>
    <tr valign="top">
        <th scope="row">Installed Plugins:</th>
        <td>
        
        <ul>
        <?php foreach(get_option( 'active_plugins' ) as $plugin) {
                echo '<li>'.$plugin.'</li>';
        } ?>
        </ul>
        
        </td>
    </tr>
    <?php endif; ?>
        
    </tbody></table>
        
</div>

<?php } ?>