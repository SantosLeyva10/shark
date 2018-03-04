<?php

function matraman_lite_customize_register($wp_customize) {

	/***** Register Custom Controls *****/

	class MATRAMAN_LITE_Customize_Header_Control extends WP_Customize_Control {
        public function render_content() { ?>
			<span class="customize-control-title"><?php echo esc_html($this->label); ?></span> <?php
        }
    }

	class MATRAMAN_LITE_Customize_Text_Control extends WP_Customize_Control {
        public function render_content() { ?>
			<span class="textfield"><?php echo esc_html($this->label); ?></span> <?php
        }
    }

    class MATRAMAN_LITE_Customize_Button_Control extends WP_Customize_Control {
        public function render_content() {  ?>
			<p>
				<a href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'ThemeURI' ); ?>" target="_blank" class="button button-secondary"><?php echo esc_html($this->label); ?></a>
			</p> <?php
        }
    }

	$wp_customize->add_section('matraman_lite_upgrade', array('title' => __('Upgrade to Premium', 'matraman-lite'), 'capability' => 'edit_theme_options', 'theme_supports' => '', 'priority' => 2));

    /***** Add Settings *****/

	$wp_customize->add_setting('matraman_lite_options[premium_version_label]', array('default' => '', 'type' => 'option', 'sanitize_callback' => 'esc_attr'));
	$wp_customize->add_setting('matraman_lite_options[premium_version_text]', array('default' => '', 'type' => 'option', 'sanitize_callback' => 'esc_attr'));
	$wp_customize->add_setting('matraman_lite_options[premium_version_button]', array('default' => '', 'type' => 'option', 'sanitize_callback' => 'esc_attr'));

    /***** Add Controls *****/
	$wp_customize->add_control(new MATRAMAN_LITE_Customize_Header_Control($wp_customize, 'premium_version_label', array('label' => __('Need more features and options?', 'matraman-lite'), 'section' => 'matraman_lite_upgrade', 'settings' => 'matraman_lite_options[premium_version_label]', 'priority' => 1)));
	$wp_customize->add_control(new MATRAMAN_LITE_Customize_Text_Control($wp_customize, 'premium_version_text', array('label' => __('Check out the Premium Version of this theme which comes with additional features and advanced customization options for your website.', 'matraman-lite'), 'section' => 'matraman_lite_upgrade', 'settings' => 'matraman_lite_options[premium_version_text]', 'priority' => 2)));
	$wp_customize->add_control(new MATRAMAN_LITE_Customize_Button_Control($wp_customize, 'premium_version_button', array('label' => __('Learn more about the Premium Version', 'matraman-lite'), 'section' => 'matraman_lite_upgrade', 'settings' => 'matraman_lite_options[premium_version_button]', 'priority' => 3)));
}
add_action('customize_register', 'matraman_lite_customize_register');


/***** Return Theme Options / Set Default Options *****/

if (!function_exists('matraman_lite_theme_options')) {
	function matraman_lite_theme_options() {
		$theme_options = wp_parse_args(
			get_option('matraman_lite_options', array()),
			matraman_lite_default_options()
		);
		return $theme_options;
	}
}

if (!function_exists('matraman_lite_default_options')) {
	function matraman_lite_default_options() {
		$default_options = array(
			'excerpt_length' => '50',
			'excerpt_more' => __('Read More', 'matraman-lite'),
			'sidebar' => 'right',
			'premium_version_label' => '',
			'premium_version_text' => '',
			'premium_version_button' => ''
		);
		return $default_options;
	}
}

?>