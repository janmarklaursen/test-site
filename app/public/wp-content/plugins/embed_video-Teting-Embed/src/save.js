import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function save(props) {
	return (
		<div {...useBlockProps.save()} className="background-video--container maaark">
			<video controls width="100%" class="background-video--video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
      			
      			<source src="http://test-site.local/wp-content/uploads/2023/03/river.mp4" type="video/webm"/>
      			<source src="http://test-site.local/wp-content/uploads/2023/03/river.mp4" type="video/mp4"/>
      			Sorry, your browser doesn't support videos.
    		</video>
			<InnerBlocks.Content />
		</div>
	);
}




/*
<source src="/video-example.webm" type="video/webm" />



<div class="background-video--container testtest">
					<video class="background-video--video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg" >
					<source src="' . $value . '" type="video/mp4"></source>
					</video>
			<a data-fslightbox="1" data-type="video" autoplay=1 href="' . $value . '">';
			*/