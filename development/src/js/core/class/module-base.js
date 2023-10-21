import WPOnion_Base from './base';
import { to_jquery } from 'vsp-js-helper/index';
import WPOnion_Theme_Base from './theme-base';

export default class WPOnion_Module_Base extends WPOnion_Base {
	constructor( $selector, $args = {} ) {
		super( $selector, $args );
		this.module_init();
	}

	module_init() {
	}

	/**
	 * Fetchs And Returns An Arg.
	 * @param $element
	 * @param $option_key
	 * @param $default
	 * @return {boolean|*}
	 */
	static arg( $element, $option_key = false, $default = false ) {
		let $jsid    = window.wpo_core.jsid( $element );
		let $windarg = window.wpo_core.windowArgs( 'wponion_module_args', {} );
		if( !window.wponion._.isUndefined( $jsid ) && !window.wponion._.isUndefined( $windarg[ $jsid ] ) && window.wponion._.isObject( $windarg[ $jsid ] ) ) {
			if( !window.wponion._.isEmpty( $option_key ) && !window.wponion._.isUndefined( $windarg[ $jsid ][ $option_key ] ) ) {
				return $windarg[ $jsid ][ $option_key ];
			} else if( false === $option_key ) {
				return $windarg[ $jsid ];
			}
		}
		return $default;
	}

	/**
	 * Validates If give module element has module args.
	 * @param $elem
	 * @return {*}
	 */
	static has_args( $elem ) {
		let $id   = window.wpo_core.jsid( $elem ),
			$args = window.wpo_core.windowArgs( 'wponion_module_args', {} );
		return ( false === window.wponion._.isUndefined( $id ) && false === window.wponion._.isUndefined( $args[ $id ] ) );
	}

	/**
	 * Validates if given html element is a wponion module instance.
	 * @param $elem
	 * @return {boolean}
	 */
	static is_valid( $elem ) {
		$elem = to_jquery( $elem );
		return !!( $elem.hasClass( 'wponion-framework' ) && WPOnion_Module_Base.has_args( $elem ) );
	}

	/**
	 * @param $container
	 * @return {boolean}
	 */
	has_only_uifields( $container ) {
		let $element    = $container.find( '.wponion-element' ).length;
		let $ui_element = $container.find( '.wponion-ui-field' ).length;
		return ( $element === $ui_element || $element === 0 && $ui_element > 0 );
	}

	/**
	 * @param $container
	 */
	hide_element_non_ui( $container ) {
		if( this.has_only_uifields( $container ) ) {
			this.element.find( 'button.wponion-save' ).hide();
		} else {
			this.element.find( 'button.wponion-save' ).show();
		}
	}

	/**
	 * Internal UI Menu Handler.
	 */
	ui_menu_handler() {
		let $main = this.element.find( '.wponion-container-wraps:not(.hidden)' );
		if( $main.hasClass( 'wponion-has-containers' ) ) {
			this.hide_element_non_ui( $main.find( '.wponion-sub-container-wraps:not(.hidden)' ) );
		} else {
			this.hide_element_non_ui( this.element );
		}

		this.element.find( '.wponion-menu > ul a' ).on( 'click', ( e ) => {
			let $elem = jQuery( e.currentTarget );

			if( $elem.hasClass( 'wpo-internal-href' ) && !e.ctrlKey && e.which !== 2 && e.which !== 3 ) {
				if( $elem.hasClass( 'dropdown' ) ) {
					e.preventDefault();
					if( $elem.parent().find( '> ul' ).is( ':visible' ) ) {
						this.element.find( '.wponion-menu > ul a.dropdown' ).removeClass( 'open' );
						$elem.parent().find( '> ul' ).slideToggle();
					} else {
						this.element.find( '.wponion-menu > ul ul' ).slideUp();
						this.element.find( '.wponion-menu > ul a.dropdown' ).removeClass( 'open' );
						$elem.addClass( 'open' );
						$elem.parent().find( '> ul' ).slideToggle();
					}
				} else {
					let $href = window.wponion.helper.url_params( $elem.attr( 'href' ) );
					if( false === window.wponion._.isUndefined( $href[ 'container-id' ] ) ) {
						let $lookup = 'div#wponion-tab-' + $href[ 'container-id' ];
						if( false === window.wponion._.isUndefined( $href[ 'sub-container-id' ] ) ) {
							$lookup = $lookup + '-' + $href[ 'sub-container-id' ];
						}

						$lookup = jQuery( $lookup );
						if( $lookup.length === 1 ) {
							e.preventDefault();
							let $parent = this.element.parent();
							$parent.find( 'input[name="container-id"]' ).val( $href[ 'container-id' ] );
							$parent.find( 'input[name="sub-container-id"]' ).val( $href[ 'sub-container-id' ] );
							this.element.find( 'div.wponion-container-wraps' ).addClass( 'hidden' );
							$lookup.removeClass( 'hidden' );
							this.element.find( '.wponion-menu .active' ).removeClass( 'active' );
							$elem.addClass( 'active' );
							$elem.parent().parent().parent().find( '> a' ).addClass( 'active' );
							this.hide_element_non_ui( $lookup );
							window.wponion_change_url_no_reload( $elem.text(), $elem.attr( 'href' ) );
						} else if( false === $elem.hasClass( 'disabled' ) ) {
						}
					} else if( false === $elem.hasClass( 'disabled' ) ) {
					}
				}
			}
		} );
	}
}
