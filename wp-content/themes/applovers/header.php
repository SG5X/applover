<!DOCTYPE html>

<html lang="pl">

<head>

	<title>
		<?php bloginfo('title'); ?>
	</title>

	<!-- Meta charset -->
	<meta charset="<?php bloginfo('charset'); ?>" />

	<!-- Mobile Specyfic Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Meta Description -->
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<link rel="stylesheet" href="style.css" />

	<!-- Favicons -->
	<link rel="shortcut icon" href="">

	<!-- OG Tags -->
	<meta prefix="og: http://ogp.me/ns#" property="”og:title”" content="Applovers">
	<meta prefix="og: http://ogp.me/ns#" property="og:url" content="localhost">
	<meta prefix="og: http://ogp.me/ns#" property="og:type" content="website">
	<meta prefix="og: http://ogp.me/ns#" property="og:description" content="Recruitment Task Website">
	<meta prefix="og: http://ogp.me/ns#" property="og:image" content="">

	<!-- Google Tag Manager -->
	<script>
		<?php 
		global $wpdb;
		$table = $wpdb->prefix . 'gtm';
	
		$rows = $wpdb->get_results("SELECT * FROM $table");
		
		
		?>
		
		
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', '<?php foreach($rows as $row){echo $row->key;}?>');

	</script>
	<!-- End Google Tag Manager -->

</head>
<?php wp_head(); ?>
