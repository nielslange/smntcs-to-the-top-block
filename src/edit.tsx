/**
 * External dependencies
 */
import {
	AlignmentToolbar,
	BlockControls,
	PlainText,
	useBlockProps,
} from '@wordpress/block-editor';

interface props {
	attributes: { label: string; alignment: string };
	setAttributes: ( attributes: Record< string, unknown > ) => void;
}

export const Edit = ( { attributes, setAttributes }: props ): JSX.Element => {
	const { alignment, label } = attributes;

	return (
		<p { ...useBlockProps() }>
			{
				<BlockControls>
					<AlignmentToolbar
						value={ alignment }
						onChange={ ( value ) =>
							setAttributes( { alignment: value } )
						}
					/>
				</BlockControls>
			}
			<a href="#to-the-top">
				<PlainText
					style={ { textAlign: alignment } }
					value={ label }
					onChange={ ( value ) => setAttributes( { label: value } ) }
				/>
			</a>
		</p>
	);
};
