<?php
/**
 * Copyright (c) 2018.
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 */

/**
 *   Description
 *
 * @package  MaroonTechnologyLtd\CollapsibleContent
 *
 * @since    1.0.0
 *
 * @author   Terry Collins
 *
 * @link     https://maroon.technology
 *
 * @license  GNU-2.0+
 *
 **/
namespace MaroonTechnologyLtd\CollapsibleContent;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ .  '\enqueue_assets');


/**
 * Enqueue plugin assets
 *
 */
function enqueue_assets() {

		wp_enqueue_style('dashicons');

		wp_enqueue_script(
			'collapsible-content-plugin-script',
			COLLAPSIBLE_CONTENT_URL . 'assets/dist/js/jquery.project.min.js',
			array('jquery'),
			'1.0.0',
			true
			);

		/*$script_parameters = array (
			'showIcon' =>'dashicons dashicons-arrow-down-alt2',
			'hideIcon' =>'dashicons dashicons-arrow-up-alt2'
		);

		wp_localize_script('collapsible-content-plugin-script',
							'scriptParameters',
							$script_parameters );
		*/

}

/**
 * Autoload plugin files
 *
 */
function autoload() {

	$sfiles = array (
		'shortcode/shortcodes.php',
	);

	foreach ( $sfiles as $file ) {

		include( __DIR__ . 'plugin.php/' . $file );


	}


}

autoload();