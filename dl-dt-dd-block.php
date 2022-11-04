<?php
/**
 * Plugin Name:       Dl Dt Dd Block
 * Description:       to set up a description list, term and description block with corresponding html tags (dl, dt, dd)
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Silver Hoop Edge LLC
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       dl-dt-dd-block
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
function create_block_dl_dt_dd_block_init() {
	
	register_block_type( __DIR__ . '/build/dt-and-dd' );
	register_block_type( __DIR__ . '/build/description-list-container' );
}
add_action( 'init', 'create_block_dl_dt_dd_block_init' );



