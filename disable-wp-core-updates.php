<?php

	/**
	 * Plugin Name: GMT Disable WP Core Updates
	 * Plugin URI: https://github.com/cferdinandi/gmt-disable-wp-core-updates
	 * GitHub Plugin URI: https://github.com/cferdinandi/gmt-disable-wp-core-updates
	 * Description: Remove the "Update WordPress" button and nag message in the Dashboard.
	 * Author: Chris Ferdinandi
	 * Author URI: http://gomakethings.com
	 * Version: 1.0.0
	 * License: MIT
	 */


	/**
	 * Remove the "Time to Update" nag message in WordPress
	 */
	function keel_hide_core_updates_nag() {
	    remove_action( 'admin_notices', 'update_nag', 3 );
	}
	add_action( 'admin_menu', 'keel_hide_core_updates_nag' );


	/**
	 * Remove the ability to update from the Dashboard
	 */
	function keel_remove_core_updates_action() {
		?>
			<style type="text/css">
				.core-updates {
					display: none;
					visibility: hidden;
				}
			</style>
		<?php
	}
	add_action( 'admin_head', 'keel_remove_core_updates_action' );