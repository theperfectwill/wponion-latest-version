export default function() {
	let $pointers_group = window.wpo_core.windowArgs( 'wp_pointers', false );

	if( $pointers_group ) {
		for( let $group_id in $pointers_group ) {
			if( !$pointers_group.hasOwnProperty( $group_id ) ) {
				continue;
			}

			for( let $pointer_key in $pointers_group[ $group_id ] ) {
				if( !$pointers_group[ $group_id ].hasOwnProperty( $pointer_key ) ) {
					continue;
				}

				let $pointer = $pointers_group[ $group_id ][ $pointer_key ];
				jQuery( $pointer.selector ).WPOnion_onAvailable( () => {
					if( !$pointer.show ) {
						$pointer.show = 'open';
					}

					let $handler = {
						content: '<h3>' + $pointer.title + '</h3><p>' + $pointer.text + '</p>',
						pointerWidth: parseInt( $pointer.width ),
						pointerClass: 'wp-pointer pointerplus' + $pointer.class,
						position: { edge: $pointer.edge, align: $pointer.align },
						close: () => jQuery.post( window.ajaxurl, {
							pointer: $pointer_key,
							action: 'dismiss-wp-pointer'
						} ),
					};

					$handler.buttons = function( event, t ) {
						let $button;
						if( $pointer.jsnext ) {
							let jsnext = new Function( 't', '$', $pointer.jsnext );
							return jsnext( t, jQuery );
						} else if( $pointer.next ) {
							$button = jQuery( '<a id="pointer-close" class="button action">Next</a>' );
							$button.bind( 'click.pointer', function() {
								t.element.pointer( 'close' );
								let $next = $pointers_group[ $group_id ][ $pointer.next ];

								if( false === $next.parent ) {
									jQuery( $next.selector ).pointer( 'open' );
								} else if( false === window.wponion._.isUndefined( $next.instance ) ) {
									jQuery( $next.selector ).pointer( $next.instance ).pointer( 'open' );
								}

								if( $next.icon_class !== '' ) {
									jQuery( '.pp-' + $pointer.next + ' .pp-pointer-content h3' )
										.addClass( 'dashicons-before' )
										.addClass( $next.icon_class );
								}
							} );
							return $button;
						} else {
							let close  = 'Dismiss',
								button = jQuery( '<a class="close" href="#">' + close + '</a>' );
							return button.bind( 'click.pointer', function( e ) {
								e.preventDefault();
								t.element.pointer( 'close' );
							} );
						}
					};
					if( false === $pointer.parent ) {
						jQuery( $pointer.selector ).pointer( $handler ).pointer( $pointer.show );
						$handler = null;
					} else {
						$pointers_group[ $group_id ][ $pointer_key ].instance = $handler;
					}
				} );
			}
		}

		/*for( let $id in $pointers_group ) {
			if( $pointers_group.hasOwnProperty( $id ) ) {
				for( let $pid in $pointers_group[ $id ] ) {
					if( $pointers_group[ $id ].hasOwnProperty( $pid ) ) {
						let $pointer = $pointers_group[ $id ][ $pid ];
						if( $pointers_group[ $id ][ $pointer.next ] ) {
							//	jQuery( $pointers_group[ $id ][ $pointer.next ].selector ).pointer( 'close' );
						}
					}
				}
			}
		}*/
	}
}
