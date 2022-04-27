<?php
/**
 * Login form bg settings template.
 *
 * @package Custom_Login_Dashboard
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

/**
 * Display login form bg settings template.
 *
 * @param array $settings The plugin settings.
 */
return function ( $settings ) {

	$bg_color       = isset( $settings['dashboard_login_bg'] ) && ! empty( $settings['dashboard_login_bg'] ) ? $settings['dashboard_login_bg'] : '';
	$bg_opacity     = isset( $settings['dashboard_login_bg_opacity'] ) ? $settings['dashboard_login_bg_opacity'] : 1; // 0 is allowed here.
	$bg_image_url   = isset( $settings['login_bg_image'] ) && ! empty( $settings['login_bg_image'] ) ? $settings['login_bg_image'] : '';
	$bg_repeat      = isset( $settings['login_bg_repeat'] ) && ! empty( $settings['login_bg_repeat'] ) ? $settings['login_bg_repeat'] : '';
	$horizontal_pos = isset( $settings['login_bg_xpos'] ) && ! empty( $settings['login_bg_xpos'] ) ? $settings['login_bg_xpos'] : '';
	$vertical_pos   = isset( $settings['login_bg_ypos'] ) && ! empty( $settings['login_bg_ypos'] ) ? $settings['login_bg_ypos'] : '';
	?>

	<div class="heatbox dashboard-settings-box">
		<h2>
			<?php _e( 'Form Background Settings', 'erident-custom-login-and-dashboard' ); ?>
		</h2>
		<div class="setting-fields">

			<div class="field is-horizontal">
				<div class="field-label">
					<label for="dashboard_login_bg" class="label">
						<?php _e( 'Background Color', 'erident-custom-login-and-dashboard' ); ?>
						<p class="description">
							The form background color.
						</p>
					</label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
							<input type="text" name="dashboard_login_bg" id="dashboard_login_bg" value="<?php echo esc_attr( $bg_color ); ?>" class="color-picker-field general-setting-field" data-alpha="true" data-default-color="<?php echo esc_attr( $bg_color ); ?>">
						</div>
					</div>
				</div>
			</div>

			<div class="field is-horizontal">
				<div class="field-label">
					<label for="dashboard_login_bg_opacity" class="label">
						<?php _e( 'Background Opacity', 'erident-custom-login-and-dashboard' ); ?>
						<p class="description">
							The form background transparency.
							<a href="https://wordpress.org/plugins/erident-custom-login-and-dashboard/#faq" target="_blank">More info</a>
						</p>
					</label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
							<input type="number" min="0" max="1" step="0.1" name="dashboard_login_bg_opacity" id="dashboard_login_bg_opacity" value="<?php echo esc_attr( $bg_opacity ); ?>" class="general-setting-field is-tiny">
						</div>
					</div>
				</div>
			</div>

			<hr>

			<div class="field is-horizontal">
				<div class="field-label">
					<label for="login_bg_image" class="label">
						<?php _e( 'Background Image URL', 'erident-custom-login-and-dashboard' ); ?>
						<p class="description">
							Leave blank if you don't need background image.
						</p>
					</label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
							<input type="text" id="login_bg_image" name="login_bg_image" value="<?php echo esc_url( $bg_image_url ); ?>" class="general-setting-field is-small cldashboard-form-bg-image-field">
							<button type="button" class="button-secondary cldashboard-upload-button">
								<?php _e( 'Add Background Image', 'erident-custom-login-and-dashboard' ); ?>
							</button>
							<button type="button" class="button-secondary cldashboard-clear-button">x</button>
						</div>
					</div>
				</div>
			</div>

			<div class="field is-horizontal">
				<div class="field-label">
					<label for="login_bg_repeat" class="label">
						<?php _e( 'Background Repeat', 'erident-custom-login-and-dashboard' ); ?>
					</label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
							<?php
							$bg_repeat_opts = [
								'no-repeat',
								'repeat',
								'repeat-x',
								'repeat-y',
							];
							?>
							<select name="login_bg_repeat" id="login_bg_repeat" class="general-setting-field is-tiny">
								<?php foreach ( $bg_repeat_opts as $bg_repeat_opt ) : ?>
									<option value="<?php echo esc_attr( $bg_repeat_opt ); ?>" <?php selected( $bg_repeat_opt, $bg_repeat ); ?>>
										<?php echo esc_attr( $bg_repeat_opt ); ?>
									</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="field is-horizontal" data-hide-if-field="login_bg_repeat" data-hide-if-value="repeat">
				<div class="field-label">
					<label for="login_bg_xpos" class="label">
						<?php _e( 'Background Horizontal Position', 'erident-custom-login-and-dashboard' ); ?>
						<p class="description">
							The horizontal position of the background image. Possible value: <code>left</code>, or <code>center</code>, or <code>right</code>, or numeric value.
							If you use numeric value, you can use <code>px</code>, or <code>em</code>, or <code>%</code>, or other unit as the suffix.
							<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/background-position-x" target="_blank">More info</a>
						</p>
					</label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
							<input type="text" name="login_bg_xpos" id="login_bg_xpos" value="<?php echo esc_attr( $horizontal_pos ); ?>" class="general-setting-field is-tiny">
						</div>
					</div>
				</div>
			</div>

			<div class="field is-horizontal" data-hide-if-field="login_bg_repeat" data-hide-if-value="repeat">
				<div class="field-label">
					<label for="login_bg_ypos" class="label">
						<?php _e( 'Background Vertical Position', 'erident-custom-login-and-dashboard' ); ?>
						<p class="description">
							The vertical position of the background image. Possible value: <code>top</code>, or <code>center</code>, or <code>bottom</code>, or numeric value.
							If you use numeric value, you can use <code>px</code>, or <code>em</code>, or <code>%</code>, or other unit as the suffix.
							<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/background-position-y" target="_blank">More info</a>
						</p>
					</label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
							<input type="text" name="login_bg_ypos" id="login_bg_ypos" value="<?php echo esc_attr( $vertical_pos ); ?>" class="general-setting-field is-tiny">
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php
};