<?php
/**
 * Plugin Name:       SMNTCS To The Top Block
 * Plugin URI:        https://github.com/nielslange/smntcs-to-the-top-block
 * Description:       Adds a jump to the top link to your pages, posts or custom post types.
 * Author:            Niels Lange
 * Author URI:        https://nielslange.de
 * Text Domain:       to-the-top-block
 * Version:           1.7
 * Requires at least: 6.6
 * Requires PHP:      7.4
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package SMNTCS_To_The_Top_Block
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 *
 * @return void
 */
function create_block_to_the_top_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_to_the_top_block_block_init', 10, 0 );

/**
 * Add anchor after the opening body tag.
 *
 * @return void
 */
function to_the_top_anchor() {
	print( '<div id="to-the-top"></div>' );
}
add_action( 'wp_body_open', 'to_the_top_anchor', 10, 0 );
