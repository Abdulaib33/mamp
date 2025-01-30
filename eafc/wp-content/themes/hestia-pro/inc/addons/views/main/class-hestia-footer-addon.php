<?php
/**
 * Handle the footer addons.
 *
 * @package Hestia
 */

/**
 * Class Hestia_Footer_Addon
 */
class Hestia_Footer_Addon extends Hestia_Footer {

	/**
	 * Initialize
	 */
	public function init() {
		parent::init();
	}

	/**
	 * Function to display footer copyright and footer menu.
	 * Also used as callback for selective refresh.
	 */
	public function bottom_footer_content() {
		$hestia_general_credits = get_theme_mod(
			'hestia_general_credits',
			sprintf(
			/* translators: %1$s is Theme Name, %2$s is WordPress */
				esc_html__( '%1$s | Developed by %2$s', 'hestia-pro' ),
				esc_html__( 'Hestia', 'hestia-pro' ),
				/* translators: %1$s is URL, %2$s is WordPress */
				sprintf(
					'<a href="%1$s" rel="nofollow">%2$s</a>',
					esc_url( __( 'https://themeisle.com', 'hestia-pro' ) ),
					'ThemeIsle'
				)
			)
		);

		wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'depth'          => 1,
				'container'      => 'ul',
				'menu_class'     => 'footer-menu',
			)
		);

		if ( ! empty( $hestia_general_credits ) || is_customize_preview() ) {
			echo '<div class="copyright ' . esc_attr( $this->add_footer_copyright_alignment_class() ) . '">';
			echo wp_kses_post( $hestia_general_credits );
			echo '</div>';
		}

	}
}
