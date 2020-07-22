<section class="photo-gallery">

			<h2><?php echo the_field('title_gallery'); ?></h2>
			<div class="g-divider">
				<span class="line"></span>
				<img src="<?php echo get_theme_file_uri() . '/img/green-decor.svg';?>" alt="green divider" />
				<span class="line"></span>
			</div>
			<div class="gallery-showcase">
				<?php $gimage1 = get_field('gallery_image_1'); ?>
				<img src="<?php echo $gimage1['url']; ?>" alt="road in the forest" />
				<?php $gimage2 = get_field('gallery_image_2'); ?>
				<img src="<?php echo $gimage2['url']; ?>" alt="seaside terrace" />
				<?php $gimage3 = get_field('gallery_image_3'); ?>
				<img src="<?php echo $gimage3['url']; ?>" alt="bird view island" />
				<?php $gimage4 = get_field('gallery_image_4'); ?>
				<img src="<?php echo $gimage4['url']; ?>" alt="waves seaside" />
				<?php $gimage5 = get_field('gallery_image_5'); ?>
				<img src="<?php echo $gimage5['url']; ?>" alt="girl holding hat on the beach" />
				<?php $gimage6 = get_field('gallery_image_6'); ?>
				<img src="<?php echo $gimage6['url']; ?>" alt="people walking on the beach" />
				<?php $gimage7 = get_field('gallery_image_7'); ?>
				<img src="<?php echo $gimage7['url']; ?>" alt="beach landscape at sunrise" />
				<?php $gimage8 = get_field('gallery_image_8'); ?>
				<img src="<?php echo $gimage8['url']; ?>" alt="lighthouse at the sea" />
				<?php $gimage9 = get_field('gallery_image_9'); ?>
				<img src="<?php echo $gimage9['url']; ?>" alt="road to the beach" />
				<?php $gimage10 = get_field('gallery_image_10'); ?>
				<img src="<?php echo $gimage10['url']; ?>" alt="birds waiting at the coast" />
				<?php $gimage11 = get_field('gallery_image_11'); ?>
				<img src="<?php echo $gimage11['url']; ?>" alt="rocky sea cost with mountaints" />
				<?php $gimage12 = get_field('gallery_image_12'); ?>
				<img src="<?php echo $gimage12['url']; ?>" alt="birds flying" />
			</div>
			<!-- /.gallery-showcase -->


		</section>
		<!-- /.photo-gallery -->