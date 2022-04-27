<?php
/**
 * Settings page template.
 *
 * @package Custom_Login_Dashboard
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

return function () {

	$settings = get_option( 'plugin_erident_settings', [] );
	?>

	<div class="wrap heatbox-wrap cldashboard-settings-page">

		<div class="heatbox-header heatbox-has-tab-nav heatbox-margin-bottom">

			<div class="heatbox-container heatbox-container-center">

				<div class="logo-container">

					<div>
						<span class="title">
							<?php _e( 'Custom Login & Dashboard', 'erident-custom-login-and-dashboard' ); ?>
							<span class="version"><?php echo esc_html( CUSTOM_LOGIN_DASHBOARD_PLUGIN_VERSION ); ?></span>
						</span>
						<p class="subtitle"><?php _e( 'Top rated plugin for Login Page Customization!.', 'erident-custom-login-and-dashboard' ); ?></p>
					</div>

					<div>
						<img src="<?php echo esc_url( CUSTOM_LOGIN_DASHBOARD_PLUGIN_URL ); ?>/assets/images/logo.png">
					</div>

				</div>

				<nav>
					<ul class="heatbox-tab-nav">
						<li class="heatbox-tab-nav-item cldsahboard-general-panel">
							<a href="#general"><?php _e( 'General', 'erident-custom-login-and-dashboard' ); ?></a>
						</li>
						<li class="heatbox-tab-nav-item cldsahboard-login-page-panel">
							<a href="#login-page"><?php _e( 'Login Page', 'erident-custom-login-and-dashboard' ); ?></a>
						</li>
						<li class="heatbox-tab-nav-item cldsahboard-tools-panel">
							<a href="#tools"><?php _e( 'Tools', 'erident-custom-login-and-dashboard' ); ?></a>
						</li>
					</ul>
				</nav>

			</div>

		</div>

		<div class="heatbox-container heatbox-container-center heatbox-form-container">

			<h1 style="display: none;"></h1>

				<div>
					<form method="post" action="options.php" class="cldashboard-settings-form">
						<div class="heatbox-admin-panel cldashboard-general-panel">
							<?php
							$dashboard_settings_box = require __DIR__ . '/setting-boxes/dashboard-settings.php';
							$dashboard_settings_box( $settings );

							$misc_settings_box = require __DIR__ . '/setting-boxes/misc-settings.php';
							$misc_settings_box( $settings );
							?>
						</div>

						<div class="heatbox-admin-panel cldashboard-login-page-panel">
							<?php
							require_once __DIR__ . '/setting-boxes/login-bg-settings.php';
							?>
						</div>

						<?php submit_button( '', 'button button-primary button-larger' ); ?>
					</form>

					<div class="heatbox-admin-panel cldashboard-tools-panel">
						<div class="cldashboard-tools-container">

							<?php
							require_once __DIR__ . '/setting-boxes/export-settings.php';
							require_once __DIR__ . '/setting-boxes/import-settings.php';
							?>

						</div>
					</div>
				</div>

			<div class="heatbox-divider"></div>

		</div>

		<div class="heatbox-container heatbox-container-wide heatbox-container-center featured-products">

			<h2><?php _e( 'Check out our other free WordPress products!', 'erident-custom-login-and-dashboard' ); ?></h2>

			<ul class="products">
				<li class="heatbox">
					<a href="https://wordpress.org/plugins/better-admin-bar/" target="_blank">
						<img src="<?php echo esc_url( CUSTOM_LOGIN_DASHBOARD_PLUGIN_URL ); ?>/assets/images/swift-control.jpg">
					</a>
					<div class="heatbox-content">
						<h3><?php _e( 'Better Admin Bar', 'erident-custom-login-and-dashboard' ); ?></h3>
						<p class="subheadline"><?php _e( 'Replace the boring WordPress Admin Bar with this!', 'erident-custom-login-and-dashboard' ); ?></p>
						<p><?php _e( 'Better Admin Bar is the plugin that make your clients love WordPress. It drastically improves the user experience when working with WordPress and allows you to replace the boring WordPress admin bar with your own navigation panel.', 'erident-custom-login-and-dashboard' ); ?></p>
						<a href="https://wordpress.org/plugins/better-admin-bar/" target="_blank" class="button"><?php _e( 'View Features', 'erident-custom-login-and-dashboard' ); ?></a>
					</div>
				</li>
				<li class="heatbox">
					<a href="https://wordpress.org/themes/ultimate-dashboard/" target="_blank">
						<img src="<?php echo esc_url( CUSTOM_LOGIN_DASHBOARD_PLUGIN_URL ); ?>/assets/images/page-builder-framework.jpg">
					</a>
					<div class="heatbox-content">
						<h3><?php _e( 'Page Builder Framework', 'erident-custom-login-and-dashboard' ); ?></h3>
						<p class="subheadline"><?php _e( 'The only Theme you\'ll ever need.', 'erident-custom-login-and-dashboard' ); ?></p>
						<p class="description"><?php _e( 'With its minimalistic design the Page Builder Framework theme is the perfect foundation for your next project. Build blazing fast websites with a theme that is easy to use, lightweight & highly customizable.', 'erident-custom-login-and-dashboard' ); ?></p>
						<a href="https://wordpress.org/themes/page-builder-framework/" target="_blank" class="button"><?php _e( 'View Features', 'erident-custom-login-and-dashboard' ); ?></a>
					</div>
				</li>
				<li class="heatbox">
					<a href="https://wordpress.org/plugins/responsive-youtube-vimeo-popup/" target="_blank">
						<img src="<?php echo esc_url( CUSTOM_LOGIN_DASHBOARD_PLUGIN_URL ); ?>/assets/images/wp-video-popup.jpg">
					</a>
					<div class="heatbox-content">
						<h3><?php _e( 'WP Video Popup', 'erident-custom-login-and-dashboard' ); ?></h3>
						<p class="subheadline"><?php _e( 'The #1 Video Popup Plugin for WordPress.', 'erident-custom-login-and-dashboard' ); ?></p>
						<p><?php _e( 'Add beautiful responsive YouTube & Vimeo video lightbox popups to any post, page or custom post type of website without sacrificing performance.', 'erident-custom-login-and-dashboard' ); ?></p>
						<a href="https://wordpress.org/plugins/responsive-youtube-vimeo-popup/" target="_blank" class="button"><?php _e( 'View Features', 'erident-custom-login-and-dashboard' ); ?></a>
					</div>
				</li>
			</ul>

			<p class="credit"><?php _e( 'Made with ❤ in Aschaffenburg, Germany', 'erident-custom-login-and-dashboard' ); ?></p>

		</div>

	</div>

	<?php
};
