<?php get_header(); ?>

<body>

	<main class="wrapper">
		<section class="intro-container">
			<div class="intro">
				<?php $image = get_field('intro_logo'); ?>
				<img class="logo-intro" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<hr>
				<h2><?php echo the_field('intro_first_line'); ?> <br><strong><?php echo the_field('intro_secend_line'); ?></strong><br> <?php echo the_field('intro_third_line'); ?></h2>
				<img class="keep-scrolling" src="<?php echo get_theme_file_uri() . '/img/scroll.svg'; ?>" alt="keep scrolling icon" />

				<div class="side-menu">
					<nav>
						<ul>
							<?php
					wp_nav_menu(array(
					'theme_location' => 'headerMenu'
					));
					?>
						</ul>
					</nav>
				</div>
				<!-- /.side-menu -->
				
			</div>
			<!-- /.intro -->
			
			<!-- Hamburger Menu -->
				<img id="hmenu" src="<?php echo get_theme_file_uri() . '/img/menu-ham.svg';?>" alt="logo mobile" />
				
				<div class="mobile-menu">
					<img class="m-close" src="<?php echo get_theme_file_uri() . '/img/btn-close.svg';?>"/>
					<img src="<?php echo $image['url']; ?>" alt="logo big" />
					<nav>
						<ul>
					        <?php
					wp_nav_menu(array(
					'theme_location' => 'headerMenu'
					));
					?>
							
						</ul>
					</nav>
				</div>
				<!-- /.mobile-menu -->

			<div class="infos">
				<div class="logo-brand"><img src="<?php echo get_theme_file_uri() .'/img/logo.svg'; ?>" alt="logo" /></div>
				<div class="nav-slogan">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</div>
				<div class="nav-copy">powered by applover.com</div>
			</div>

		</section>
		<!-- /.intro-container -->

		<?php get_template_part('templates/main', 'articles'); ?>

		<?php get_template_part('templates/photo', 'gallery'); ?>
		
		<?php get_template_part('templates/learn', 'more'); ?>

	</main>
	<!-- /.wrapper -->
<?php get_footer(); ?>