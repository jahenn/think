<?php
/*
	Admin Header - Leaflet Maps Marker Plugin
*/
//info prevent file from being accessed directly
if (basename($_SERVER['SCRIPT_FILENAME']) == 'admin-header.php') { die ("Please do not access this file directly. Thanks!<br/><a href='https://www.mapsmarker.com/go'>www.mapsmarker.com</a>"); }

//info: dont show on save (remove with AJAX ;-)
$action = isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : '');
if ( ($action == 'add') || ($action == 'edit') || ($action == 'duplicate') ) {
	return;
} else {

	require_once(ABSPATH . WPINC . DIRECTORY_SEPARATOR . "pluggable.php");
	$lmm_options = get_option( 'leafletmapsmarker_options' ); //info: required for bing maps api key check

	//info: make to menu buttons active depended on page you´re on
	$page = (isset($_GET['page']) ? $_GET['page'] : '');
	$oid = isset($_POST['id']) ? intval($_POST['id']) : (isset($_GET['id']) ? intval($_GET['id']) : '');
	if ($page == 'leafletmapsmarker_markers') {
		$buttonclass1 = 'button button-primary lmm-nav-primary';
		$buttonclass2 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2b = 'button button-secondary lmm-nav-secondary';
		$buttonclass3 = 'button button-secondary lmm-nav-secondary';
		$buttonclass4 = 'button button-secondary lmm-nav-secondary';
		$buttonclass5 = 'button button-secondary lmm-nav-secondary';
		$buttonclass6 = 'button button-secondary lmm-nav-secondary';
		$buttonclass7 = 'button button-secondary lmm-nav-secondary';
		$buttonclass8 = 'button button-secondary lmm-nav-secondary';
	} else if ($page == 'leafletmapsmarker_marker') {
		$buttonclass1 = 'button button-secondary lmm-nav-secondary';
		if ( ($oid == NULL) && ($page == 'leafletmapsmarker_marker') ) {
			$buttonclass2 = 'button button-primary lmm-nav-primary';
		} else if ( ($oid != NULL) && ($page == 'leafletmapsmarker_marker') ) {
			$buttonclass2 = 'button button-secondary lmm-nav-secondary';
		} else {
			$buttonclass2 = 'button button-secondary lmm-nav-secondary';
		}
		$buttonclass2b = 'button button-secondary lmm-nav-secondary';
		$buttonclass3 = 'button button-secondary lmm-nav-secondary';
		$buttonclass4 = 'button button-secondary lmm-nav-secondary';
		$buttonclass5 = 'button button-secondary lmm-nav-secondary';
		$buttonclass6 = 'button button-secondary lmm-nav-secondary';
		$buttonclass7 = 'button button-secondary lmm-nav-secondary';
		$buttonclass8 = 'button button-secondary lmm-nav-secondary';
	} else if ($page == 'leafletmapsmarker_import_export') {
		$buttonclass1 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2b = 'button button-primary lmm-nav-primary';
		$buttonclass3 = 'button button-secondary lmm-nav-secondary';
		$buttonclass4 = 'button button-secondary lmm-nav-secondary';
		$buttonclass5 = 'button button-secondary lmm-nav-secondary';
		$buttonclass6 = 'button button-secondary lmm-nav-secondary';
		$buttonclass7 = 'button button-secondary lmm-nav-secondary';
		$buttonclass8 = 'button button-secondary lmm-nav-secondary';
	} else if ($page == 'leafletmapsmarker_layers') {
		$buttonclass1 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2b = 'button button-secondary lmm-nav-secondary';
		$buttonclass3 = 'button button-primary lmm-nav-primary';
		$buttonclass4 = 'button button-secondary lmm-nav-secondary';
		$buttonclass5 = 'button button-secondary lmm-nav-secondary';
		$buttonclass6 = 'button button-secondary lmm-nav-secondary';
		$buttonclass7 = 'button button-secondary lmm-nav-secondary';
		$buttonclass8 = 'button button-secondary lmm-nav-secondary';
	} else if ($page == 'leafletmapsmarker_layer') {
		$buttonclass1 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2b = 'button button-secondary lmm-nav-secondary';
		$buttonclass3 = 'button button-secondary lmm-nav-secondary';
		if ( ($oid == NULL) && ($page == 'leafletmapsmarker_layer') ) {
			$buttonclass4 = 'button button-primary lmm-nav-primary';
		} else if ( ($oid != NULL) && ($page == 'leafletmapsmarker_layer') ) {
			$buttonclass4 = 'button button-secondary lmm-nav-secondary';
		} else {
			$buttonclass4 = 'button button-secondary lmm-nav-secondary';
		}
		$buttonclass5 = 'button button-secondary lmm-nav-secondary';
		$buttonclass6 = 'button button-secondary lmm-nav-secondary';
		$buttonclass7 = 'button button-secondary lmm-nav-secondary';
		$buttonclass8 = 'button button-secondary lmm-nav-secondary';
	} else if ($page == 'leafletmapsmarker_tools') {
		$buttonclass1 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2b = 'button button-secondary lmm-nav-secondary';
		$buttonclass3 = 'button button-secondary lmm-nav-secondary';
		$buttonclass4 = 'button button-secondary lmm-nav-secondary';
		$buttonclass5 = 'button button-primary lmm-nav-primary';
		$buttonclass6 = 'button button-secondary lmm-nav-secondary';
		$buttonclass7 = 'button button-secondary lmm-nav-secondary';
		$buttonclass8 = 'button button-secondary lmm-nav-secondary';
	} else if ($page == 'leafletmapsmarker_settings') {
		$buttonclass1 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2b = 'button button-secondary lmm-nav-secondary';
		$buttonclass3 = 'button button-secondary lmm-nav-secondary';
		$buttonclass4 = 'button button-secondary lmm-nav-secondary';
		$buttonclass5 = 'button button-secondary lmm-nav-secondary';
		$buttonclass6 = 'button button-primary lmm-nav-primary';
		$buttonclass7 = 'button button-secondary lmm-nav-secondary';
		$buttonclass8 = 'button button-secondary lmm-nav-secondary';
	} else if ($page == 'leafletmapsmarker_help') {
		$buttonclass1 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2b = 'button button-secondary lmm-nav-secondary';
		$buttonclass3 = 'button button-secondary lmm-nav-secondary';
		$buttonclass4 = 'button button-secondary lmm-nav-secondary';
		$buttonclass5 = 'button button-secondary lmm-nav-secondary';
		$buttonclass6 = 'button button-secondary lmm-nav-secondary';
		$buttonclass7 = 'button button-primary lmm-nav-primary';
		$buttonclass8 = 'button button-secondary lmm-nav-secondary';
	} else if ($page == 'leafletmapsmarker_pro_upgrade') {
		$buttonclass1 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2 = 'button button-secondary lmm-nav-secondary';
		$buttonclass2b = 'button button-secondary lmm-nav-secondary';
		$buttonclass3 = 'button button-secondary lmm-nav-secondary';
		$buttonclass4 = 'button button-secondary lmm-nav-secondary';
		$buttonclass5 = 'button button-secondary lmm-nav-secondary';
		$buttonclass6 = 'button button-secondary lmm-nav-secondary';
		$buttonclass7 = 'button button-secondary lmm-nav-secondary';
		$buttonclass8 = 'button button-primary lmm-nav-primary';
	}
	$admin_quicklink_tools_buttons = ( current_user_can( "activate_plugins" ) ) ? "<a class='" . $buttonclass5 ."' href='" . LEAFLET_WP_ADMIN_URL . "admin.php?page=leafletmapsmarker_tools'><img src='" . LEAFLET_PLUGIN_URL . "inc/img/icon-menu-tools.png' width='10' height='10'/> ".__('Tools','lmm')."</a>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;" : "";
	$admin_quicklink_settings_buttons = ( current_user_can( "activate_plugins" ) ) ? "<a class='" . $buttonclass6 ."' href='" . LEAFLET_WP_ADMIN_URL . "admin.php?page=leafletmapsmarker_settings'><img src='" . LEAFLET_PLUGIN_URL . "inc/img/icon-menu-settings.png' width='10' height='10'/> ".__('Settings','lmm')."</a>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;" : "";

	//////////////////////////////////////////////////////
	// info: admin notices which only show on LMM pages //
	//////////////////////////////////////////////////////
	if ( isset($lmm_options['misc_global_admin_notices']) && ($lmm_options['misc_global_admin_notices'] == 'show') ){
		//info: check if custom shadow image and custom marker icon directory exists
		function checkUrlExists($url) {
			$result = wp_remote_get(
				$url,
				array(
					'sslverify' => false,
					'body' => $url
				)
			);
			if (is_wp_error($result)) { return false; }
			if ((integer)$result['response']['code']!=200) { return false; }
			return true;
		}
		if ( $lmm_options['defaults_marker_icon_shadow_url_status'] == 'custom') {
			$custom_shadow_icon_url = $lmm_options['defaults_marker_icon_shadow_url'];
			$custom_shadow_icon_url_exists = checkUrlExists($custom_shadow_icon_url);
			if ( ($custom_shadow_icon_url != NULL) && (!$custom_shadow_icon_url_exists) ) {
				echo '<div class="error" style="padding:10px;margin:10px 0;"><strong>' . sprintf(__('Leaflet Maps Marker Warning: the setting for the marker shadow url (%1s) seems to be invalid. This can happen when you moved your WordPress installation from one server to another one.<br/>Please navigate to <a href="%2s">Settings / Map Defaults / "Default values for marker icons"</a> and update the option "Shadow URL". If you do not know which values to enter, please <a href="%3s">reset all plugins options to their defaults</a>', 'lmm'), $shadow_icon_url, LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_settings#mapdefaults-section5', LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_settings#reset') . '</strong></div>';
			}
		}
		//info: display admin notice (lmm only) if user switches back to free version
		$lmm_pro_readme = WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . 'leaflet-maps-marker-pro' . DIRECTORY_SEPARATOR . 'readme.txt';
		if (file_exists($lmm_pro_readme)) {
			$lmm_pro_version = get_option( 'leafletmapsmarker_version_pro' );
			if ( $lmm_pro_version != NULL) {
				echo '<p><div  class="updated" style="padding:10px;margin:10px 0;">' . sprintf(__('Too bad you are using the free version again :-( <a href="%1s" target="_blank">Please tell us what we can do to win you as a happy pro user and receive a discount voucher!</a>','lmm'), 'https://www.mapsmarker.com/feedback') . '<br/>' . __('This message will disappear once the pro version has been activated or deleted from your server (via the WordPress Plugins page!)','lmm') . '</div></p>';
			} else {
				echo '<p><div  class="updated" style="padding:10px;margin:10px 0;">' . sprintf(__('You downloaded <a href="%1s" target="_blank">Leaflet Maps Marker Pro</a> but did not register a free 30-day-trial license key. Please note that <a href="%2s" target="_blank">according to our privacy policy</a> we will not disclose, rent or sell your personal information!<br/>If you install Leaflet Maps Marker Pro on a localhost installation (<a href="%3s" target="_blank">see available packages on Wikipedia</a>) you can also test the pro plugin without registering a free 30-day-trial license key and without time limitation.','lmm'), 'https://www.mapsmarker.com', 'https://www.mapsmarker.com/privacy', 'http://en.wikipedia.org/wiki/List_of_AMP_packages') . '<br/>' . __('This message will disappear once the pro version has been activated or deleted from your server (via the WordPress Plugins page!)','lmm') . '</div></p>';
			}
		}
	}//info: end misc_global_admin_notices check
	//info: check if newer plugin version is available
	$plugin_updates = get_site_transient( 'update_plugins' );
	if (isset($plugin_updates->response['leaflet-maps-marker/leaflet-maps-marker.php']->new_version)) {
		$plugin_updates_lmm_installed = get_option("leafletmapsmarker_version");
		$plugin_updates_lmm_new_version = $plugin_updates->response['leaflet-maps-marker/leaflet-maps-marker.php']->new_version;
		echo '<p><div class="updated" style="padding:5px;"><strong>' . __('Leaflet Maps Marker - plugin update available!','lmm') . '</strong><br/>' . sprintf(__('You are currently using v%1s and the plugin author highly recommends updating to v%2s for new features, bugfixes and updated translations (please see <a href="http://mapsmarker.com/v%3s" target="_blank">this blog post</a> for more details about the latest release).','lmm'), $plugin_updates_lmm_installed, $plugin_updates_lmm_new_version, $plugin_updates_lmm_new_version) . '<br/>';
		if ( current_user_can( 'update_plugins' ) ) {
			echo sprintf(__('Update instruction: please start the update from the <a href="%1s">Updates-page</a>.','lmm'), get_admin_url() . 'update-core.php' ) . '</div></p>';
		} else {
			echo sprintf(__('Update instruction: as your user does not have the right to update plugins, please contact your <a href="mailto:%1s?subject=Please update plugin -Leaflet Maps Marker- on %2s">administrator</a>','lmm'), get_option('admin_email'), site_url() ) . '</div></p>';
		}
	}
	?>
	<table cellpadding="5" cellspacing="0" class="widefat fixed">
	  <tr>
		<td><div class="logo-rtl"><a href="<?php echo LEAFLET_WP_ADMIN_URL ?>admin.php?page=leafletmapsmarker_pro_upgrade" title="<?php _e('Upgrade to pro version for even more features - click here to find out how you can start a free 30-day-trial easily','lmm'); ?>"><img src="<?php echo LEAFLET_PLUGIN_URL ?>inc/img/logo-mapsmarker.png" width="65" height="65" alt="Leaflet Maps Marker Plugin Logo by Julia Loew, www.weiderand.net" /></a></div>
	<?php $free_version = get_option("leafletmapsmarker_version"); ?>
	<div style="font-size:1.5em;margin-bottom:5px;"><span style="font-weight:bold;">Maps Marker<sup style="font-size:75%;">&reg;</sup> <a href="https://www.mapsmarker.com/v<?php echo $free_version; ?>" target="_blank" title="<?php esc_attr_e('view blogpost for current version','lmm');?>">v<?php echo $free_version; ?></a> - <?php _e('Lite Edition','lmm'); ?></span></div>
	  <p style="margin:1em 0 0 0;line-height:32px;">
	  <a class="<?php echo $buttonclass1; ?>" href="<?php echo LEAFLET_WP_ADMIN_URL ?>admin.php?page=leafletmapsmarker_markers"><img src="<?php echo LEAFLET_PLUGIN_URL ?>inc/img/icon-menu-list.png" width="10" height="10" /><?php _e("List all markers", "lmm") ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <a class="<?php echo $buttonclass2; ?>" href="<?php echo LEAFLET_WP_ADMIN_URL ?>admin.php?page=leafletmapsmarker_marker"><img src="<?php echo LEAFLET_PLUGIN_URL ?>inc/img/icon-menu-add.png" width="10" height="10" /> <?php _e("Add new marker", "lmm"); ?></a>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	  <a class="<?php echo $buttonclass2b; ?>" href="<?php echo LEAFLET_WP_ADMIN_URL ?>admin.php?page=leafletmapsmarker_import_export"><img src="<?php echo LEAFLET_PLUGIN_URL ?>inc/img/icon-menu-import-export.png" width="10" height="10" /> <?php _e("Import/Export", "lmm"); ?></a>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	  <a class="<?php echo $buttonclass3; ?>" href="<?php echo LEAFLET_WP_ADMIN_URL ?>admin.php?page=leafletmapsmarker_layers"><img src="<?php echo LEAFLET_PLUGIN_URL ?>inc/img/icon-menu-list.png" width="10" height="10" /> <?php _e("List all layers", "lmm") ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <a class="<?php echo $buttonclass4; ?>" href="<?php echo LEAFLET_WP_ADMIN_URL ?>admin.php?page=leafletmapsmarker_layer"><img src="<?php echo LEAFLET_PLUGIN_URL ?>inc/img/icon-menu-add.png" width="10" height="10" /> <?php _e("Add new layer", "lmm"); ?></a>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	  <?php echo $admin_quicklink_tools_buttons ?>
	  <?php echo $admin_quicklink_settings_buttons ?>
	  <a class="<?php echo $buttonclass7; ?>" href="<?php echo LEAFLET_WP_ADMIN_URL ?>admin.php?page=leafletmapsmarker_help"><img src="<?php echo LEAFLET_PLUGIN_URL ?>inc/img/icon-menu-help.png" width="10" height="10" /> <?php _e("Support", "lmm") ?></a>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	  <a class="<?php echo $buttonclass8; ?>" style="background-color:#F99755;background-image:none;text-shadow:none;" href="<?php echo LEAFLET_WP_ADMIN_URL ?>admin.php?page=leafletmapsmarker_pro_upgrade" title="<?php _e('Upgrade to pro version for more features, higher performance and more! Click here to find out how you can start a free 30-day-trial easily','lmm'); ?>"><img src="<?php echo LEAFLET_PLUGIN_URL ?>inc/img/icon-up.png" width="10" height="10" /> <?php _e("Upgrade to Pro", "lmm") ?></a>
	  </p>
	</td></tr></table>

	<?php
	//info: display update info with current release notes
	$update_info_action = isset($_POST['update_info_action']) ? $_POST['update_info_action'] : '';
	$first_run = (isset($_GET['first_run']) ? 'true' : 'false');

	if ( ($update_info_action == 'hide') && ($first_run == 'false') ) {
		update_option('leafletmapsmarker_update_info', 'hide');
	}
	if ( (get_option('leafletmapsmarker_update_info') == 'show') && ($page != 'leafletmapsmarker_pro_upgrade') ){
		$lmm_version_old = get_option( 'leafletmapsmarker_version_before_update' );
		$lmm_version_new = get_option( 'leafletmapsmarker_version' );
		$lmm_changelog_new_version = '<a href="https://www.mapsmarker.com/v' . $lmm_version_new . '" target="_blank" style="text-decoration:none;">https://www.mapsmarker.com/v' . $lmm_version_new . '</a>';
		$lmm_full_changelog = '<a href="https://www.mapsmarker.com/changelog" target="_blank" style="text-decoration:none;">https://www.mapsmarker.com/changelog</a>';

		echo '<div style="border-radius:3px;border-color:#E6DB55;background-color:#FFFFE0;margin:10px 0 5px;padding:0 0.6em;border-style:solid;border-width:1px;">';
		if ($lmm_version_old == 0) {
			echo '<p><span style="font-weight:bold;font-size:125%;">' . sprintf(__('Leaflet Maps Marker has been successfully updated to version %1s!','lmm'), $lmm_version_new) . '</span></p>';
		} else {
			echo '<p><span style="font-weight:bold;font-size:125%;">' . sprintf(__('Leaflet Maps Marker has been successfully updated from version %1s to %2s!','lmm'), $lmm_version_old, $lmm_version_new) . '</span></p>';
		}
		echo '<iframe name="changelog" src="' . LEAFLET_PLUGIN_URL . 'inc/changelog.php" width="98%" height="285" marginwidth="0" marginheight="0" style="border:thin dashed #E6DB55;"></iframe>'.PHP_EOL;

		echo '<p>' . __('If you like using the plugin, please <a href="http://www.mapsmarker.com/reviews" target="_blank" style="text-decoration:none;">review the plugin on wordpress.org</a> - thanks!','lmm') . '</p>'.PHP_EOL;
		echo '<form method="post" style="padding:2px 0 6px 0;">
			<input type="hidden" name="update_info_action" value="hide" />
			<input class="button-secondary" type="submit" value="' . __('remove message', 'lmm') . '"/></form></div>';
	}
} //info: $action != add/edit/duplicate
?>