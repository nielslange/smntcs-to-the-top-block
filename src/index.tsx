/**
 * External dependencies
 */
import { registerBlockType } from '@wordpress/blocks';

/**
 * Internal dependencies
 */
import { Edit } from './edit';
import { save } from './save';
import './style.scss';

registerBlockType( 'nielslange/smntcs-to-the-top-block', {
	edit: Edit,
	save,
	example: {},
} );
