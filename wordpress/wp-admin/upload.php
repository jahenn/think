<?php
/**
 * Media Library administration panel.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

if ( !current_user_can('upload_files') )
	wp_die( __( 'You do not have permission to upload files.' ) );

$mode = get_user_option( 'media_library_mode', get_current_user_id() ) ? get_user_option( 'media_library_mode', get_current_user_id() ) : 'grid';
$modes = array( 'grid', 'list' );

if ( isset( $_GET['mode'] ) && in_array( $_GET['mode'], $modes ) ) {
	$mode = $_GET['mode'];
	update_user_option( get_current_user_id(), 'media_library_mode', $mode );
}

if ( 'grid' === $mode ) {
	wp_enqueue_media();
	wp_enqueue_script( 'media-grid' );
	wp_enqueue_script( 'media' );
	wp_localize_script( 'media-grid', '_wpMediaGridSettings', array(
		'adminUrl' => parse_url( self_admin_url(), PHP_URL_PATH ),
	) );

	get_current_screen()->add_help_tab( array(
		'id'		=> 'overview',
		'title'		=> __( 'Overview' ),
		'content'	=>
			'<p>' . __( 'All the files you&#8217;ve uploaded are listed in the Media Library, with the most recent uploads listed first.' ) . '</p>' .
			'<p>' . __( 'You can view your media in a simple visual grid or a list with columns. Switch between these views using the icons to the left above the media.' ) . '</p>' .
			'<p>' . __( 'To delete media items, click the Bulk Select button at the top of the screen. Select any items you wish to delete, then click the Delete Selected button. Clicking the Cancel Selection button takes you back to viewing your media.' ) . '</p>'
	) );

	get_current_screen()->add_help_tab( array(
		'id'		=> 'attachment-details',
		'title'		=> __( 'Attachment Details' ),
		'content'	=>
			'<p>' . __( 'Clicking an item will display an Attachment Details dialog, which allows you to preview media and make quick edits. Any changes you make to the attachment details will be automatically saved.' ) . '</p>' .
			'<p>' . __( 'Use the arrow buttons at the top of the dialog, or the left and right arrow keys on your keyboard, to navigate between media items quickly.' ) . '</p>' .
			'<p>' . __( 'You can also delete individual items and access the extended edit screen from the details dialog.' ) . '</p>'
	) );

	get_current_screen()->set_help_sidebar(
		'<p><strong>' . __( 'For more information:' ) . '</strong></p>' .
		'<p>' . __( '<a href="http://codex.wordpress.org/Media_Library_Screen" target="_blank">Documentation on Media Library</a>' ) . '</p>' .
		'<p>' . __( '<a href="https://wordpress.org/support/" target="_blank">Support Forums</a>' ) . '</p>'
	);

	$title = __('Media Library');
	$parent_file = 'upload.php';

	require_once( ABSPATH . 'wp-admin/admin-header.php' );
	?>
	<div class="wrap">
		<h2>
		<?php
		echo esc_html( $title );
		if ( current_user_can( 'upload_files' ) ) { ?>
			<a href="media-new.php" class="add-new-h2"><?php echo esc_html_x( 'Add New', 'file' ); ?></a><?php
		}
		?>
		</h2>
		<div class="error hide-if-js">
			<p><?php _e( 'The grid view for the Media Library requires JavaScript. <a href="upload.php?mode=list">Switch to the list view</a>.' ); ?></p>
		</div>
	</div>
	<?php
	include( ABSPATH . 'wp-admin/admin-footer.php' );
	exit;
}

$wp_list_table = _get_list_table('WP_Media_List_Table');
$pagenum = $wp_list_table->get_pagenum();

// Handle bulk actions
$doaction = $wp_list_table->current_action();

if ( $doaction ) {
	check_admin_referer('bulk-media');

	if ( 'delete_all' == $doaction ) {
		$post_ids = $wpdb->get_col( "SELECT ID FROM $wpdb->posts WHERE post_type='attachment' AND post_status = 'trash'" );
		$doaction = 'delete';
	} elseif ( isset( $_REQUEST['media'] ) ) {
		$post_ids = $_REQUEST['media'];
	} elseif ( isset( $_REQUEST['ids'] ) ) {
		$post_ids = explode( ',', $_REQUEST['ids'] );
	}

	$location = 'upload.php';
	if ( $referer = wp_get_referer() ) {
		if ( false !== strpos( $referer, 'upload.php' ) )
			$location = remove_query_arg( array( 'trashed', 'untrashed', 'deleted', 'message', 'ids', 'posted' ), $referer );
	}

	switch ( $doaction ) {
		case 'attach':
			$parent_id = (int) $_REQUEST['found_post_id'];
			if ( !$parent_id )
				return;

			$parent = get_post( $parent_id );
			if ( !current_user_can( 'edit_post', $parent_id ) )
				wp_die( __( 'You are not allowed to edit this post.' ) );

			$attach = array();
			foreach ( (array) $_REQUEST['media'] as $att_id ) {
				$att_id = (int) $att_id;

				if ( !current_user_can( 'edit_post', $att_id ) )
					continue;

				$attach[] = $att_id;
			}

			if ( ! empty( $attach ) ) {
				$attach_string = implode( ',', $attach );
				$attached = $wpdb->query( $wpdb->prepare( "UPDATE $wpdb->posts SET post_parent = %d WHERE post_type = 'attachment' AND ID IN ( $attach_string )", $parent_id ) );
				foreach ( $attach as $att_id ) {
					clean_attachment_cache( $att_id );
				}
			}

			if ( isset( $attached ) ) {
				$location = 'upload.php';
				if ( $referer = wp_get_referer() ) {
					if ( false !== strpos( $referer, 'upload.php' ) )
						$location = $referer;
				}

				$location = add_query_arg( array( 'attached' => $attached ) , $location );
				wp_redirect( $location );
				exit;
			}
			break;
		case 'trash':
			if ( !isset( $post_ids ) )
				break;
			foreach ( (array) $post_ids as $post_id ) {
				if ( !current_user_can( 'delete_post', $post_id ) )
					wp_die( __( 'You are not allowed to move this post to the trash.' ) );

				if ( !wp_trash_post( $post_id ) )
					wp_die( __( 'Error in moving to trash.' ) );
			}
			$location = add_query_arg( array( 'trashed' => count( $post_ids ), 'ids' => join( ',', $post_ids ) ), $location );
			break;
		case 'untrash':
			if ( !isset( $post_ids ) )
				break;
			foreach ( (array) $post_ids as $post_id ) {
				if ( !current_user_can( 'delete_post', $post_id ) )
					wp_die( __( 'You are not allowed to move this post out of the trash.' ) );

				if ( !wp_untrash_post( $post_id ) )
					wp_die( __( 'Error in restoring from trash.' ) );
			}
			$location = add_query_arg( 'untrashed', count( $post_ids ), $location );
			break;
		case 'delete':
			if ( !isset( $post_ids ) )
				break;
			foreach ( (array) $post_ids as $post_id_del ) {
				if ( !current_user_can( 'delete_post', $post_id_del ) )
					wp_die( __( 'You are not allowed to delete this post.' ) );

				if ( !wp_delete_attachment( $post_id_del ) )
					wp_die( __( 'Error in deleting.' ) );
			}
			$location = add_query_arg( 'deleted', count( $post_ids ), $location );
			break;
	}

	wp_redirect( $location );
	exit;
} elseif ( ! empty( $_GET['_wp_http_referer'] ) ) {
	 wp_redirect( remove_query_arg( array( '_wp_http_referer', '_wpnonce' ), wp_unslash( $_SERVER['REQUEST_URI'] ) ) );
	 exit;
}

$wp_list_table->prepare_items();

$title = __('Media Library');
$parent_file = 'upload.php';

wp_enqueue_script( 'media' );

add_screen_option( 'per_page', array('label' => _x( 'Media items', 'items per page (screen options)' )) );

get_current_screen()->add_help_tab( array(
'id'		=> 'overview',
'title'		=> __('Overview'),
'content'	=>
	'<p>' . __( 'All the files you&#8217;ve uploaded are listed in the Media Library, with the most recent uploads listed first. You can use the Screen Options tab to customize the display of this screen.' ) . '</p>' .
	'<p>' . __( 'You can narrow the list by file type/status using the text link filters at the top of the screen. You also can refine the list by date using the dropdown menu above the media table.' ) . '</p>' .
	'<p>' . __( 'You can view your media in a simple visual grid or a list with columns. Switch between these views using the icons to the left above the media.' ) . '</p>'
) );
get_current_screen()->add_help_tab( array(
'id'		=> 'actions-links',
'title'		=> __('Available Actions'),
'content'	=>
	'<p>' . __( 'Hovering over a row reveals action links: Edit, Delete Permanently, and View. Clicking Edit or on the media file&#8217;s name displays a simple screen to edit that individual file&#8217;s metadata. Clicking Delete Permanently will delete the file from the media library (as well as from any posts to which it is currently attached). View will take you to the display page for that file.' ) . '</p>'
) );
get_current_screen()->add_help_tab( array(
'id'		=> 'attaching-files',
'title'		=> __('Attaching Files'),
'content'	=>
	'<p>' . __( 'If a media file has not been attached to any post, you will see that in the Attached To column, and can click on Attach File to launch a small popup that will allow you to search for a post and attach the file.' ) . '</p>'
) );

get_current_screen()->set_help_sidebar(
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' .
	'<p>' . __( '<a href="http://codex.wordpress.org/Media_Library_Screen" target="_blank">Documentation on Media Library</a>' ) . '</p>' .
	'<p>' . __( '<a href="https://wordpress.org/support/" target="_blank">Support Forums</a>' ) . '</p>'
);

require_once( ABSPATH . 'wp-admin/admin-header.php' );
?>

<div class="wrap">
<h2>
<?php
echo esc_html( $title );
if ( current_user_can( 'upload_files' ) ) { ?>
	<a href="media-new.php" class="add-new-h2"><?php echo esc_html_x('Add New', 'file'); ?></a><?php
}
if ( ! empty( $_REQUEST['s'] ) )
	printf( '<span class="subtitle">' . __('Search results for &#8220;%s&#8221;') . '</span>', get_search_query() ); ?>
</h2>

<?php
$message = '';
if ( ! empty( $_GET['posted'] ) ) {
	$message = __('Media attachment updated.');
	$_SERVER['REQUEST_URI'] = remove_query_arg(array('posted'), $_SERVER['REQUEST_URI']);
}

if ( ! empty( $_GET['attached'] ) && $attached = absint( $_GET['attached'] ) ) {
	$message = sprintf( _n('Reattached %d attachment.', 'Reattached %d attachments.', $attached), $attached );
	$_SERVER['REQUEST_URI'] = remove_query_arg(array('attached'), $_SERVER['REQUEST_URI']);
}

if ( ! empty( $_GET['deleted'] ) && $deleted = absint( $_GET['deleted'] ) ) {
	$message = sprintf( _n( 'Media attachment permanently deleted.', '%d media attachments permanently deleted.', $deleted ), number_format_i18n( $_GET['deleted'] ) );
	$_SERVER['REQUEST_URI'] = remove_query_arg(array('deleted'), $_SERVER['REQUEST_URI']);
}

if ( ! empty( $_GET['trashed'] ) && $trashed = absint( $_GET['trashed'] ) ) {
	$message = sprintf( _n( 'Media attachment moved to the trash.', '%d media attachments moved to the trash.', $trashed ), number_format_i18n( $_GET['trashed'] ) );
	$message .= ' <a href="' . esc_url( wp_nonce_url( 'upload.php?doaction=undo&action=untrash&ids='.(isset($_GET['ids']) ? $_GET['ids'] : ''), "bulk-media" ) ) . '">' . __('Undo') . '</a>';
	$_SERVER['REQUEST_URI'] = remove_query_arg(array('trashed'), $_SERVER['REQUEST_URI']);
}

if ( ! empty( $_GET['untrashed'] ) && $untrashed = absint( $_GET['untrashed'] ) ) {
	$message = sprintf( _n( 'Media attachment restored from the trash.', '%d media attachments restored from the trash.', $untrashed ), number_format_i18n( $_GET['untrashed'] ) );
	$_SERVER['REQUEST_URI'] = remove_query_arg(array('untrashed'), $_SERVER['REQUEST_URI']);
}

$messages[1] = __('Media attachment updated.');
$messages[2] = __('Media permanently deleted.');
$messages[3] = __('Error saving media attachment.');
$messages[4] = __('Media moved to the trash.') . ' <a href="' . esc_url( wp_nonce_url( 'upload.php?doaction=undo&action=untrash&ids='.(isset($_GET['ids']) ? $_GET['ids'] : ''), "bulk-media" ) ) . '">' . __('Undo') . '</a>';
$messages[5] = __('Media restored from the trash.');

if ( ! empty( $_GET['message'] ) && isset( $messages[ $_GET['message'] ] ) ) {
	$message = $messages[ $_GET['message'] ];
	$_SERVER['REQUEST_URI'] = remove_query_arg(array('message'), $_SERVER['REQUEST_URI']);
}

if ( !empty($message) ) { ?>
<div id="message" class="updated"><p><?php echo $message; ?></p></div>
<?php } ?>

<form id="posts-filter" action="" method="get">

<?php $wp_list_table->views(); ?>

<?php $wp_list_table->display(); ?>

<div id="ajax-response"></div>
<?php find_posts_div(); ?>
</form>
</div>

<?php
include( ABSPATH . 'wp-admin/admin-footer.php' );
