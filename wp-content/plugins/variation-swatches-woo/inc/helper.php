<?php
/**
 * Helper.
 *
 * @package variation-swatches-woo
 * @since 1.0.0
 */

namespace CFVSW\Inc;

/**
 * Helper
 *
 * @since 1.0.0
 */
class Helper {

	/**
	 * Keep default values of all settings.
	 *
	 * @var array
	 * @since  1.0.0
	 */
	public $defaults = [
		CFVSW_GLOBAL => [
			'enable_swatches'      => true,
			'enable_swatches_shop' => true,
			'auto_convert'         => true,
			'min_width'            => 24,
			'min_height'           => 24,
			'border_radius'        => 3,
			'disable_attr_type'    => 'blur',
			'tooltip'              => true,
			'html_design'          => 'none',
			'font_size'            => 12,
		],
		CFVSW_SHOP   => [
			'override_global'   => false,
			'enable_swatches'   => true,
			'auto_convert'      => true,
			'min_width'         => 24,
			'min_height'        => 24,
			'border_radius'     => 24,
			'disable_attr_type' => 'blur',
			'alignment'         => 'left',
			'label'             => false,
			'position'          => 'after_price',
			'limit'             => '',
			'font_size'         => 12,
		],
		CFVSW_STYLE  => [
			'tooltip_background' => '#000000',
			'tooltip_font_color' => '#ffffff',
			'tooltip_font_size'  => 12,
			'tooltip_image'      => false,
			'border_color'       => '#000000',
			'label_font_size'    => '',
			'filters'            => false,
		],
	];

	/**
	 * Get attribute type from database from attribute name
	 *
	 * @param string $name attribute name of product attribute.
	 * @return mixed
	 * @since  1.0.0
	 */
	public function get_attr_type_by_name( $name = '' ) {
		if ( empty( $name ) || ! taxonomy_exists( $name ) ) {
			return '';
		}

		global $wpdb;
		$name = substr( $name, 3 );
		$type = $wpdb->get_var( $wpdb->prepare( 'SELECT attribute_type FROM ' . $wpdb->prefix . 'woocommerce_attribute_taxonomies WHERE attribute_name = %s', $name ) );
		return is_null( $type ) ? '' : $type;
	}

	/**
	 * Get option value from database and retruns value merged with default values
	 *
	 * @param string $option option name to get value from.
	 * @return array
	 * @since  1.0.0
	 */
	public function get_option( $option ) {
		$db_values = get_option( $option, [] );
		return wp_parse_args( $db_values, $this->defaults[ $option ] );
	}
}
