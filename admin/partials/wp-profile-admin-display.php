<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @since      1.0.0
 *
 * @package    WP_Profile
 * @subpackage WP_Profile/admin/partials
 */
?>

<div class="wrap wp-profile-settings-page">
	<h2><?php echo get_admin_page_title() ?></h2>

	<?php if ( $_GET['settings-updated'] == true ) { ?>
		<div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible">
			<p><strong><?php _e( 'Settings saved.', 'wp-profile' ); ?></strong></p>
			<button type="button" class="notice-dismiss"><span class="screen-reader-text"><?php _e( 'Dismiss this notice.', 'wp-profile' ); ?></span></button>
		</div>
	<?php }
	if ( get_current_screen()->parent_base !== 'options-general' ) {
		settings_errors( 'setting_name' );
	}
	?>

	<form action="options.php" method="POST">
		<?php
		settings_fields( "wp-profile-main-options" );
		do_settings_sections( "wp-profile-main-options" );
		?>
		<table class="form-table">
			<tbody>
			<tr>
				<th scope="row"><label for="wp_profile_slug"><?php _e( 'Profile page slug', 'wp-profile' ); ?></label></th>
				<td>
					<input type="text" class="regular-text" name="wp_profile_slug" id="wp_profile_slug" value="<?php echo esc_attr( get_option( 'wp_profile_slug' ) ) ?>">
					<p class="description"><?php _e( 'default "profile"', 'wp-profile' ); ?></p>
				</td>
			</tr>
			</tbody>
		</table>
		<?php submit_button(); ?>
	</form>
</div>