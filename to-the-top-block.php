<?php
/**
 * Plugin Name:       To The Top Block
 * Description:       Adds a jump to the top link to your pages, posts or custom post types.
 * Requires at least: 5.0
 * Requires PHP:      7.0
 * Version:           1.1.0
 * Author:            Niels Lange
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       to-the-top-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_to_the_top_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_to_the_top_block_block_init' );

/**
 * Add anchor after the opening body tag.
 *
 * @return void
 */
function to_the_top_anchor() {
	print( '<div id="to-the-top"></div>' );
}
add_action( 'wp_body_open', 'to_the_top_anchor' );