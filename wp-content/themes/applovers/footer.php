	<footer>
		<div class="foo-about">
			
			<img src="<?php echo get_theme_file_uri() . '/img/logo.svg'; ?>" alt="logo" />
			<p><?php echo the_field('foo_about'); ?></p>
			<ul class="social-media-list">
				<li class="facebook-link"><img src="<?php echo get_theme_file_uri() . '/img/FACEBOOK.svg';?>" alt="facebook" /></li>
				<li class="twitter-link"><img src="<?php echo get_theme_file_uri() . '/img/TWITTER.svg';?>" alt="twitter" /></li>
				<li class="pinterest-link"><img src="<?php echo get_theme_file_uri() . '/img/PINTEREST.svg'; ?>" alt="pinterest" /></li>
				<li class="instagram-link"><img src="<?php echo get_theme_file_uri() . '/img/INSTAGRAM.svg';?>" alt="instagram" /></li>
			</ul>
		</div>
		<!-- /.foo-about -->

		<div class="foo-menu">
			<h2>MENU</h2>
			<nav>
				<ul class="f-menu">
					<?php
					wp_nav_menu(array(
					'theme_location' => 'footerMenu'
					));
					?>
				</ul>
			</nav>
		</div>
		<!-- /.foo-menu -->

		<div class="foo-contact">
			<h2>KONTAKT</h2>
			<p><?php echo the_field('foo_contact'); ?></p>
			<a class="email-me" href="mailto:loremipsum@gmail.com" hreflang="pl"><span><img class="mail-icon" src="<?php echo get_theme_file_uri() . '/img/email.svg'?>" alt="email us" /></span><?php echo the_field('foo_email'); ?></a>
		</div>
		<!-- /.foo-contact -->

	</footer>

	<script>
		var mm = document.querySelector(".mobile-menu");
		
		document.getElementById("hmenu").onclick = function(){
			
		
			
		if(mm.style.display==='none') {
    	mm.style.display = 'block';
 		 }
  		else {
    	mm.style.display = 'none';
  		}
	
		}
		
		var bclose = document.querySelector(".m-close");
		
		bclose.addEventListener('click', function(){
			
		mm.style.display = 'none';	
			
		});
		
		
		var articles = document.querySelector(".sec-mountains");
		var sarticles = articles.getElementsByTagName('article')[1];
		var tarticles = articles.getElementsByTagName('article')[2];
		
		sarticles.classList.remove("mount-article-first");
		sarticles.classList.add("mount-article-secend");
		
		tarticles.classList.remove("mount-article-first");
		tarticles.classList.add("mount-article-third");
		
		var mountseca = document.querySelector(".mount-article-secend");
		var ldiv = mountseca.getElementsByTagName('div')[0];
		var rdiv = mountseca.getElementsByTagName('div')[1];
		
		ldiv.classList.remove("first-article-left");
		ldiv.classList.add("secend-article-right");
		
		rdiv.classList.remove("first-article-right");
		rdiv.classList.add("secend-article-left");



		function resize() {
			var heights = window.innerHeight - 10;
			document.querySelector(".intro-container").style.height = heights + "px";
		}
		
		resize();
		
		window.onresize = function() {
			
			resize();
			
		};

	</script>

<?php wp_footer(); ?>

</body>

</html>