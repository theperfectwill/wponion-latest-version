import WPOnion_Field from '../class/field';

/* global swal:true */
export default class extends WPOnion_Field {
	/**
	 * Inits Field.
	 */
	init() {
		let $this     = this,
			$elem     = $this.element,
			$textarea = $elem.find( 'textarea' );
		$elem.find( '#wponion-wp-link-picker > button' ).on( 'click', function() {
			$textarea.val( '' );
			if( !window.wpLink ) {
				swal.fire( {
					icon: 'error',
					title: window.wpo_core.txt( 'wp_link_error_title', 'WP Link JS Lib Not Found' ),
				} );
			}

			window.wpLink.open( $textarea.attr( 'id' ) );
		} );


		$textarea.on( 'change', function() {
			let $data = jQuery( jQuery( this ).val() );

			if( $elem.find( 'span.example_output span.value' ) ) {
				$elem.find( 'span.example_output span.value' ).html( jQuery( this ).val() );
			}

			if( $elem.find( 'input#url' ).length > 0 ) {
				$elem.find( 'input#url' ).val( $data.attr( 'href' ) );
			}

			if( $elem.find( 'input#title' ).length > 0 ) {
				$elem.find( 'input#title' ).val( $data.text() );
			}

			if( $elem.find( 'input#target' ).length > 0 ) {
				$elem.find( 'input#target' ).val( $data.attr( 'target' ) );
			}

			if( $elem.find( 'span.url span.value' ).length > 0 ) {
				$elem.find( 'span.url span.value' ).html( $data.attr( 'href' ) );
			}

			if( $elem.find( 'span.title span.value' ).length > 0 ) {
				$elem.find( 'span.title span.value' ).html( $data.text() );
			}

			if( $elem.find( 'span.target span.value' ).length > 0 ) {
				$elem.find( 'span.target span.value' ).html( $data.attr( 'target' ) );
			}
		} );
	}
}
