<?php
/**
 * Class that handle the show/hide hooks.
 *
 * @package Inc/Addons/Modules/Custom_Layouts/Admin
 */

/**
 * Class Hestia_View_Hooks
 */
class Hestia_View_Hooks {

	/**
	 * Initialize function.
	 */
	public function init() {
		if ( ! $this->should_load() ) {
			return;
		}
		add_action( 'admin_bar_menu', array( $this, 'admin_bar_menu' ), 99 );
		add_action( 'wp', array( $this, 'render_hook_placeholder' ) );
		add_action( 'wp_head', array( $this, 'render_hook_placeholder_css' ) );
	}

	/**
	 * Check user role before allowing the class to run
	 *
	 * @return bool
	 */
	private function should_load() {
		return current_user_can( 'administrator' );
	}

	/**
	 * Admin Bar Menu
	 *
	 * @param array $wp_admin_bar Admin bar menus.
	 */
	function admin_bar_menu( $wp_admin_bar = array() ) {
		if ( is_admin() ) {
			return;
		}

		$title = __( 'Show Hooks', 'hestia-pro' );

		$href = add_query_arg( 'hestia_preview_hook', 'show' );
		if ( isset( $_GET['hestia_preview_hook'] ) && 'show' === $_GET['hestia_preview_hook'] ) {
			$title = __( 'Hide Hooks', 'hestia-pro' );
			$href  = remove_query_arg( 'hestia_preview_hook' );
		}

		$wp_admin_bar->add_menu(
			array(
				'title'  => $title,
				'id'     => 'hestia_preview_hook',
				'parent' => false,
				'href'   => $href,
			)
		);
	}

	/**
	 * Beautify hook names.
	 *
	 * @param string $hook Hook name.
	 *
	 * @return string
	 */
	public static function beautify_hook( $hook ) {
		$hook_label = str_replace( '_', ' ', $hook );
		$hook_label = str_replace( 'hestia', ' ', $hook_label );
		$hook_label = str_replace( 'woocommerce', ' ', $hook_label );
		$hook_label = ucwords( $hook_label );
		return $hook_label;
	}

	/**
	 * Render hook placeholder.
	 */
	public function render_hook_placeholder() {
		if ( ! isset( $_GET['hestia_preview_hook'] ) || 'show' !== $_GET['hestia_preview_hook'] ) {
			return;
		}
		$hooks = Hestia_Custom_Layouts_Module::$hooks;
		foreach ( $hooks as $hooks_in_category ) {
			foreach ( $hooks_in_category as $hook_value ) {
				$hook_label = self::beautify_hook( $hook_value );
				add_action(
					$hook_value,
					function () use ( $hook_label, $hook_value ) {
						$hook_new_url = add_query_arg( 'page', 'hestia_hooks_settings', admin_url( 'themes.php' ) );
						echo '<div class="hestia-hook-wrapper">';
						echo '<div class="hestia-hook-placeholder">';
						echo '<a href="' . esc_url( $hook_new_url ) . '" title="' . esc_attr__( 'Add Custom Layout on Hook', 'hestia-pro' ) . '" class="hook-page-link">';
						echo '<span class="hestia-hook-icon dashicons dashicons-plus"></span>';
						echo '<span class="hestia-hook-label">' . esc_html( $hook_label ) . '</span>';
						echo '</a>';
						echo '</div>';
						echo '</div>';
					}
				);
			}
		}
	}

	/**
	 * View hook page css.
	 */
	public function render_hook_placeholder_css() {
		$css = '
		.hestia-hook-wrapper {
			text-align: center; width: 100%;
		}
		.hestia-hook-placeholder {
			display: flex; 
			width: 98%; 
			justify-content: center;
			align-items: center;
			margin: 10px auto; 
			border: 2px dashed #A020F0;
			font-size: 14px; 
			padding: 6px 10px; 
			text-align: left; 
			word-break: break-word;
			color: #A020F0;
			position: relative;
		}
		.hestia-hook-placeholder a, .hestia-hook-upsell a {
			align-items: center;
			justify-content: center;
			font-size: 14px !important;
			text-decoration: none;
			color: #A020F0 !important;
		}
		.hestia-hook-placeholder a:hover, .hestia-hook-upsell a:hover {
			color: #A020F0 !important;
		}
		.hestia-hook-placeholder a:hover, .hestia-hook-placeholder a:focus {
			text-decoration: none;
		}
		.hestia-hook-placeholder a:hover .hestia-hook-icon, .hestia-hook-placeholder a:focus .hestia-hook-icon {
			box-shadow: inset 0 0 0 1px  #A020F0;
			color: #A020F0;
			opacity: 1;
			display: block;
		 }
		.hestia-hook-placeholder a .hestia-hook-icon {
			box-shadow: inset 0 0 0 1px #A020F0;
			border-radius: 50%;
			width: 20px;
			height: 20px;
			font-size: 16px;
			padding: 3px 2px;
			margin-left: -2px;
			opacity: 0;
			transform:rotate(360deg);
			transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
			position: absolute;
			left: 0;
			right: 0;
			margin: auto;
		}
		.hestia-hook-placeholder a .hestia-hook-label {
			transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
			font-size: 14px;
			opacity: 1;
		}
		.hestia-hook-placeholder a:hover .hestia-hook-label, .hestia-hook-placeholder a:focus .hestia-hook-label {
			opacity: 0;
		}
		.section-image .hestia-hook-wrapper {
			position: relative;
			z-index: 2;
		}';
		echo '<style type="text/css">';
		echo esc_attr( hestia_minimize_css( $css ) );
		echo '</style>';
	}


}
