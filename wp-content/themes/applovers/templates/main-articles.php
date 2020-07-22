<section class="sec-mountains">
	<?php $articles = new WP_Query(array(
		'post_type' => 'articles',
		'post_per_page' => 3,
		'orderby' => 'date' 
		));
		?>
	<?php
	while($articles->have_posts()){
		$articles->the_post(); ?>
	<article class="mount-article-first">
		<div class="first-article-left"><img src="<?php the_post_thumbnail_url(); ?>" alt="foggy mountains" /></div>
		<div class="first-article-right">
			<img class="paragraph-decor" src="<?php echo get_theme_file_uri(). '/img/p-decor.svg';?>" alt="paragraph decoration" />
			<p>
				<?php the_content(); ?>
			</p>
		</div>
	</article>
	<!-- /.mount-article-first -->
	<?php
	}
	wp_reset_postdata();
	?>


</section>
<!-- /.sec-mountains -->
