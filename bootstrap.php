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

 * @package  MaroonTechnologyLtd\CollapsibleContent

 * @since    1.0.0

 * @author   Terry Collins

 * @link     https://maroon.technology

 * @license  GNU-2.0+
 * */
/*
* @wordpress-plugin
* Plugin Name: Collapsible Content
* Plugin URI: https://maroon.technology/plugins
* Description: A collapsible content jquery WordPress plugin that shows and hides hidden content.
* Version: 1.0.0
* Author: Terry Collins
* Author URI: https://maroon.technology
* Text Domain: collapsible_content
* Requires WP: 4.7
* Requires PHP: 5.5
*/

/*
This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

//namespace MaroonTechnologyLtd\CollapsibleContent;

if ( ! defined( 'ABSPATH' ) ) {

	die( "Oh, silly, there's nothing to see here.");
}

//echo 'made it into the plugin';
include( __DIR__ . '/src/shortcode/shortcodes.php');