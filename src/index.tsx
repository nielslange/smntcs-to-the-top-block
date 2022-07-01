/**
 * External dependencies
 */
import { registerBlockType } from '@wordpress/blocks';

/**
 * Internal dependencies
 */
import { Edit } from './edit';
import { save } from './save';

registerBlockType( 'nielslange/to-the-top-block', {
	edit: Edit,
	save,
} );
