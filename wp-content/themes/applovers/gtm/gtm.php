<?php 

/*
Plugin name: Google Tag Manager (GTM)
Description: recruitment task
Version: 1.0
Author: SG
Author URI: http://forntendhero.pl
Plugin URI: http://frontendhero.pl
*/

	function snippet(){
		
		return "<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-XXXX');</script>
<!-- End Google Tag Manager -->";
		
	}
	
	function db_create(){
		
		global $wpdb;
		
		$table = $wpdb->prefix . 'gtm';
		$ch_collate = $wpdb->get_charset_collate();
		
		$sql = "CREATE TABLE $table(
		`key` varchar(200) CHARACTER SET utf8 NOT NULL
		) $ch_collate;";
		
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
		
		add_filter('wp_head', 'snippet'); 
		
	}

	register_activation_hook(__FILE__ , 'db_create');
	
	function show_admin_menu(){
			
			add_menu_page('GTM', //page title
						  'GTM', //menu title
						  'manage_options', // role permission
						  'google_t_manager', // menu slug
						  'show_gtm', // function
						  'dashicons-tickets'
						 );
		}

	//add menu to dashboard
	add_action('admin_menu', 'show_admin_menu');

	define('RTDIR', plugin_dir_path(__FILE__));
	require_once(RTDIR . 'list.php');


?>