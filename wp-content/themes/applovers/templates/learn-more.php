<section class="learn-more">
	<?php $image = get_field('intro_logo'); ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	<p>
		<?php echo the_field('text_learn_more_1');?><br>
		<?php echo the_field('text_learn_more_2');?>
	</p>
	<div class="lm-cta">
		<a href="#" class="lm-btn" href="#">
			<?php echo the_field('btn_learn_more');?></a>
	</div>
</section>
<!-- /.learn-more -->
