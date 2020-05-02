<?php

namespace WPOnion\Field;

use WPOnion\Field;

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

if ( ! class_exists( '\WPOnion\Field\Font_Picker' ) ) {
	/**
	 * Class Font_Picker
	 *
	 * @package WPOnion\Field
	 * @author Varun Sridharan <varunsridharan23@gmail.com>
	 * @since 1.0
	 */
	class Font_Picker extends Field {
		/**
		 * font constructor.
		 *
		 * @param array $field
		 * @param array $value
		 * @param array $unique
		 */
		public function __construct( $field = array(), $value = array(), $unique = array() ) {
			if ( ! defined( 'WPONION_ADD_FONT_DATA' ) ) {
				define( 'WPONION_ADD_FONT_DATA', true );
			}
			parent::__construct( $field, $value, $unique );
		}

		/**
		 * Generates Final HTML Output.
		 *
		 * @return mixed|void
		 */
		protected function output() {
			echo $this->before();
			$this->select_framework = wponion_validate_select_framework( $this->field );

			//echo '<div class="wpo-row">';
			echo '<div class="wponion-font-select-container">';
			echo $this->sub_field( $this->font_select(), $this->value( 'font' ), $this->name() );
			echo '</div>';

			if ( false !== $this->data( 'variant' ) ) {
				echo '<div class="wponion-font-select-container">';
				echo $this->sub_field( $this->variant_select(), $this->value( 'variant' ), $this->name() );
				echo '</div>';
			}
			//echo '</div>';

			echo $this->after();
		}

		/**
		 * Returns Font Select Args.
		 *
		 * @return array
		 */
		protected function font_select() {
			$data = array_filter( array(
				'type'                  => 'select',
				'id'                    => 'font',
				'only_field'            => true,
				'class'                 => 'wponion-font-selector',
				//'options'               => wponion_get_fonts_array( $this->data( 'google_fonts' ), $this->data( 'websafe_fonts' ), $this->data( 'group' ) ),
				'options_html'          => wponion_fonts_options_html( $this->data( 'google_fonts' ), $this->data( 'websafe_fonts' ), $this->data( 'group' ), $this->value( 'font' ) ),
				$this->select_framework => $this->data( $this->select_framework ),
			) );
			$this->debug( 'Font Select', $data );
			return $data;
		}

		/**
		 * Returns Font Variant
		 *
		 * @return array
		 */
		protected function variant_select() {
			$websafe = wponion_websafe_fonts();
			$data    = array_filter( array(
				'type'                  => 'select',
				'id'                    => 'variant',
				'only_field'            => true,
				'class'                 => 'wponion-variant-selector',
				'options'               => $websafe['variants'],
				$this->select_framework => $this->data( $this->select_framework ),
			) );
			$this->debug( 'variant Fonts', $data );
			return $data;
		}

		/**
		 * Returns Field's Default Value.
		 *
		 * @return array|mixed
		 */
		protected function field_default() {
			return array(
				'google_fonts'  => true,
				'websafe_fonts' => true,
				'group'         => true,
				'variant'       => true,
			);
		}

		/**
		 * Returns all required values to use in js.
		 *
		 * @return array
		 */
		protected function js_field_args() {
			return array();
		}

		/**
		 * Handles Fields Assets.
		 *
		 * @return mixed|void
		 */
		public function field_assets() {
			$this->select_framework = wponion_validate_select_framework( $this->field );
			wponion_load_asset( $this->select_framework );
		}
	}
}
