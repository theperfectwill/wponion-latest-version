import WPOnion_Field from '../class/field';

export default class extends WPOnion_Field {
	/**
	 * Inits Field.
	 */
	init() {
		let $arg     = this.handle_args( this.option( 'clone', {} ), 'cloner' ),
			$add_btn = this.element.find( 'button[data-wponion-clone-add]' ),
			//$remove_btn = $clone_wrap.find( 'button[data-wponion-clone-remove]' ),
			//$is_toast   = ( $arg.toast_error !== undefined ) ? $arg.toast_error : true,
			$sort    = ( $arg.sort !== false ) ? {
				items: '.wponion-field-clone',
				handle: '> .wponion-clone-action .cloner-sort',
				placeholder: 'wponion-accordion-placeholder',
				start: ( event, ui ) => ui.item.css( 'background-color', '#eeee' ),
				stop: ( event, ui ) => {
					this.element.trigger( 'change' );
					ui.item.removeAttr( 'style' );
				},
			} : false;

		this.element.find( 'div.wponion-clone-wrap' ).WPOnionCloner( {
			add_btn: $add_btn,
			limit: ( $arg.limit !== undefined ) ? $arg.limit : false,
			clone_elem: '.wponion-field-clone',
			remove_btn: '.wponion-clone-action > .cloner-remove',
			template: this.option( 'clone_template' ),
			templateAfterRender: ( $e ) => {
				this.element.trigger( 'change' );
				window.wponion_field_reload_all( $e.find( '> div.wponion-field-clone:last-child' ) );
			},
			onRemoveAfter: () => this.element.trigger( 'change' ),
			sortable: $sort,
			onLimitReached: function() {
				if( $add_btn.parent().find( 'div.wpo-alert' ).length === 0 ) {
					$add_btn.parent().prepend( jQuery( $arg.error_msg ).hide() );
					$add_btn.parent().find( 'div.wpo-alert' ).slideDown();
					window.wponion_notice( $add_btn.parent().find( 'div.wpo-alert, div.wpo-notice' ) );
				}
			},
			show_animation: $arg.animations.show,
			hide_animation: $arg.animations.hide,
		} );
	}
}
