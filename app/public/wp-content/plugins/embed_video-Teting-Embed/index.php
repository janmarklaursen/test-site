<?php
/**
 * Plugin Name:       Jamaa Embed Video - Block
 * Description:       Example block scaffolded with Create Block tool 2.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       boilerplate
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.

 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function jamaa_embed_video_render_callbackOFF($attributes, $content, $block)
{
	//$value = get_field("video_url");
	/*if (!$value) {
		return;
	}*/
	$html = '
			<div class="background-video--container testtest">
					<video class="background-video--video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg" >
					<source src="http://test-site.local/wp-content/uploads/2023/03/river.mp4" type="video/mp4"></source>
					</video>';
			/*<a data-fslightbox="1" data-type="video" autoplay=1 href="http://test-site.local/wp-content/uploads/2023/03/river.mp4">';*/

	// Loop through each inner block
	/*
	foreach ($block->inner_blocks as $inner_block) {
		$html .= $inner_block->render();
		
	}*/
	$html .= '</div>';
	return $html;
	
}

function jamaa_embed_video_render_callback($attributes, $content, $block)
{
	$html = "< class='background-video--container testtest'>
					<video class='background-video--video' autoplay loop muted poster='https://assets.codepen.io/6093409/river.jpg' >
					<source src='http://test-site.local/wp-content/uploads/2023/03/river.mp4' type='video/mp4'></source>
					</video>";
	foreach ($block->inner_blocks as $inner_block) {
		$html .= $inner_block->render();
		
	}
	$html .= '</div>';
	return $html;
}

function jamaa_embed_video_block_init()
{
	register_block_type(__DIR__ . '/build', array(
		'render_callback' => 'jamaa_embed_video_render_callback'
	));
}
add_action('init', 'jamaa_embed_video_block_init');






function react_boilerplate_block_init()
{
	register_block_type(__DIR__ . '/build');
}
//add_action('init', 'react_boilerplate_block_init');







//function to filter button block inside jamaa-background-video block.
//Problem is that it filter every instance of this block and not just the one inside jamaa-background-video


function jamaa_filter_embed_video_button($block_content, $block)
{

		if ("generateblocks/button" !== $block['blockName'] ) {
			return $block_content;
		}
		
		$output = '<div class="MYCONTAINER">';
		$output .= $block_content;
		$output .= '</div>';
		
		return $output;
	

}

//add_filter('render_block', 'jamaa_filter_embed_video_button', 10, 3);