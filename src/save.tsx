/**
 * External dependencies
 */
import { useBlockProps } from '@wordpress/block-editor';

interface attributes {
	label: string;
}

interface props {
	attributes: { label: string; alignment: string };
	setAttributes: ( attributes: Record< string, unknown > ) => void;
}

export const save = ( { attributes }: props ): JSX.Element => {
	const { alignment, label } = attributes;

	return (
		<p { ...useBlockProps.save() } style={ { textAlign: alignment } }>
			<a href="#to-the-top">{ label }</a>
		</p>
	);
};
