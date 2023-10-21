<?php

class FontAwesome5 extends Icon_Export_Base {
	public static    $result = array();
	protected static $groups = array(
		'brands'  => 'Brands',
		'solid'   => 'Solid',
		'regular' => 'Regular',
		'light'   => 'Light',
	);

	protected static $styles = array(
		'brands'  => 'fab',
		'solid'   => 'fas',
		'regular' => 'far',
		'light'   => 'fal',
	);

	public static function extract_icons( $icons ) {
		$result = array();
		foreach ( $icons as $css => $icon ) {
			$icon_arg          = array_merge( Icon_Exporter::$icon_defaults, array( 'css' => $css ) );
			$icon_arg['title'] = ( ! empty( $icon['label'] ) ) ? $icon['label'] : $css;
			$icon_arg['terms'] = ( ! empty( $icon['search']['terms'] ) ) ? $icon['search']['terms'] : array();
			$icon_arg['terms'] = ( is_array( $icon_arg['terms'] ) ) ? implode( ' ', $icon_arg['terms'] ) : $icon_arg['terms'];
			if ( is_array( $icon['styles'] ) && ! empty( $icon['styles'] ) ) {
				foreach ( $icon['styles'] as $style ) {
					if ( isset( static::$styles[ $style ] ) ) {
						$_ico = $icon_arg;
						$key  = static::$styles[ $style ] . ' fa-' . $_ico['css'];
						unset( $_ico['css'] );
						$_ico = array_filter( $_ico );

						if ( ! isset( $result[ static::$groups[ $style ] ] ) ) {
							$result[ static::$groups[ $style ] ] = array();
						}

						if ( count( $_ico ) === 1 ) {
							$result[ static::$groups[ $style ] ][ $key ] = ( isset( $_ico['title'] ) ) ? $_ico['title'] : $key;
						} else {
							$result[ static::$groups[ $style ] ][ $key ] = $_ico;
						}
					}
				}
			}
		}
		return $result;
	}

	public static function init() {
		$framework = 'fontawesome5';
		$data      = Icon_Exporter::$libs['fontawesome5'];
		$css       = Icon_Exporter::contents( $data['src'] );
		if ( ! empty( $css ) ) {
			wpo_log( 'Exporting : ' . $framework );
			$icons = spyc_load( $css );

			if ( is_array( $icons ) ) {
				static::$result = static::extract_icons( $icons );
			}

			$slug = static::slug( $framework, $data );
			static::save_json( $slug, static::$result );
			static::icon_register_function( $slug, $data, $framework );
			static::icon_callback_function( $slug, $data );
		} else {
			wpo_log( 'Failed - Exporting : ' . $framework );
		}
	}
}

FontAwesome5::init();
