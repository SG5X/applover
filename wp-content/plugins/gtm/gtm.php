<?php 

/*
Plugin name: Google Tag Manager (GTM)
Description: recruitment task
Version: 1.0
Author: SG
Author URI: http://forntendhero.pl
Plugin URI: http://frontendhero.pl
*/

	function db_create(){
		
		global $wpdb;
		
		$table = $wpdb->prefix . 'gtm';
		$ch_collate = $wpdb->get_charset_collate();
		
		$sql = "CREATE TABLE $table(
		`key` varchar(200) CHARACTER SET utf8 NOT NULL
		) $ch_collate;";
		
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}

	register_activation_hook(__FILE__ , 'db_create');

	function drop_table(){
		
		global $wpdb;
		
		$table = $wpdb->prefix . 'gtm';
		$wpdb->query( "DROP TABLE IF EXISTS $table" );

	}

	register_deactivation_hook(__FILE__ , 'drop_table');
	
	function show_admin_menu(){
			
			add_menu_page('GTM', 
						  'GTM', 
						  'manage_options', 
						  'google_t_manager', 
						  'insert_gtm', 
						  'dashicons-tickets'
						 );
		}

	add_action('admin_menu', 'show_admin_menu');

	define('RTDIR', plugin_dir_path(__FILE__));
	require_once(RTDIR . 'list.php');


?>