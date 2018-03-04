<?php

/***** Theme Info Page *****/

if (!function_exists('matraman_lite_add_theme_info_page')) {
	function matraman_lite_add_theme_info_page() {
		add_theme_page(__('Welcome to Matraman lite', 'matraman-lite'), __('Theme Info', 'matraman-lite'), 'edit_theme_options', 'matraman-lite', 'matraman_lite_display_theme_info_page');
	}
}
add_action('admin_menu', 'matraman_lite_add_theme_info_page');

if (!function_exists('matraman_lite_display_theme_info_page')) {
	function matraman_lite_display_theme_info_page() {
		$theme_data = wp_get_theme(); ?>
		<div class="theme-info-wrap">
			<h1><?php printf(__('Welcome to %1s %2s', 'matraman-lite'), $theme_data->Name, $theme_data->Version ); ?></h1>
			<div class="theme-description"><?php echo $theme_data->Description; ?></div>
			<hr>
			<div class="theme-links clearfix">
				<p><strong><?php _e('Important Links:', 'matraman-lite'); ?></strong>
					<a href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'ThemeURI' ); ?>" target="_blank"><?php _e('Theme Info Page', 'matraman-lite'); ?></a>
				</p>
			</div>
			<hr>
			<div id="getting-started">
				<h3><?php printf(__('Getting Started with %s', 'matraman-lite'), $theme_data->Name); ?></h3>
				<div class="row clearfix">
					<div class="section">
						<h4><?php _e('Upgrade to Premium', 'matraman-lite'); ?></h4>
						<p class="about"><?php _e('Need more features and options? Check out the Premium Version of this theme which comes with additional features and advanced customization options for your website.', 'matraman-lite'); ?></p>
						<p>
							<a href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'ThemeURI' ); ?>" target="_blank" class="button button-secondary"><?php _e('See the Premium Version', 'matraman-lite'); ?></a>
						</p>
					</div>
					<div class="info-comparison">
					<img src="<?php echo get_template_directory_uri(); ?>/img/matraman-comparison.jpg" alt="<?php _e('Theme Screenshot', 'matraman-lite'); ?>" />
					</div>
				</div>
			</div>
			<hr>
			<div id="theme-author">
				<p><?php $my_theme = wp_get_theme(); echo $my_theme->get( 'Name' ); ?> is free for you by 
					<a target="_blank" href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'AuthorURI' ); ?>" title="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'Author' ); ?>"><?php $my_theme = wp_get_theme(); echo $my_theme->get( 'Author' ); ?></a>
				</p>
			</div>
		</div> <?php
	}
}

?>