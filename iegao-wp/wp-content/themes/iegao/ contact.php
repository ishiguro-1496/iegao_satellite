<?php get_header(); ?>


	<!-- main -->
	<div id="main" class="container">


		<!-- posts -->
		<div id="posts">
			<div id="posts_bg">
				<h1><img src="<?php bloginfo('template_directory'); ?>/img/contact.jpg">お問い合わせ</h1>
				<div id="contact">
					<?php echo do_shortcode('[contact-form-7 id="86" title="お問い合わせフォーム"]'); ?>
					<?php
					/**
					 * Template Name: お問い合わせ */
					?>
				</div>
			</div>
		</div>
		<!-- posts_end -->


		<?php get_sidebar(); ?>
	


	</div>



	<!-- main_end -->


<?php get_footer(); ?>

</body>
</html>

