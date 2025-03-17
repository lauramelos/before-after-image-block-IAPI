/**
 * WordPress dependencies
 */
import { store, getContext } from '@wordpress/interactivity';

const { state } = store( 'create-block', {
	actions: {
		changePosition( e ) {
			const context = getContext();
			context.sliderPosition = `${e.target.value}%`;
		},

	},
} );
