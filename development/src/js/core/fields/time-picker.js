import WPOnion_Field from '../class/field';

export default class extends WPOnion_Field {
	/**
	 * Inits Field.
	 */
	init() {
		let $settings = this.option( 'settings' ),
			$view,
			$main_div = 'div#' + this.id() + 'timepicker';

		if( false === window.wponion._.isUndefined( $settings.theme ) ) {
			$view = $settings.theme;
			delete $settings.theme;
		} else {
			$view = 'default';
		}
		if( jQuery( $main_div ).length === 0 ) {
			jQuery( 'body' )
				.append( jQuery( '<div class="wponion-datepicker-' + $view + '" id="' + this.id() + 'timepicker"></div>' ) );
		}

		$settings            = this.handle_args( $settings, 'time_picker' );
		$settings.noCalendar = true;
		$settings.enableTime = true;
		$settings.appendTo   = jQuery( $main_div )[ 0 ];
		this.element.find( 'input' ).flatpickr( $settings );
	}
}
