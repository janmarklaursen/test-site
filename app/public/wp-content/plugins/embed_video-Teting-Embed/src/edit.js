import { __ } from '@wordpress/i18n';
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import './editor.scss';


export default function Edit(props) {
	return (
		<div {...useBlockProps()} className="background-video--container" >
			<video className="background-video--video extra--class" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
				<source src="https://assets.codepen.io/6093409/river.mp4" type="video/mp4"></source>
			</video>
			<InnerBlocks />
		</div>
	);
}
