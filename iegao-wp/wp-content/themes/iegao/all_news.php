<?php get_header(); ?>


	<!-- main -->
	<div id="main" class="container">


		<!-- posts -->
		<div id="posts">
			<div id="posts_bg">
			<h1><img src="<?php bloginfo('template_directory'); ?>/img/news.jpg">お知らせ一覧</h1>
			<?php
			/**
			 * Template Name: お知らせ一覧 */
			?>

			<?php
			$paged = (int) get_query_var('paged');
			$args = array(
				'posts_per_page' => 5,
				'paged' => $paged,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'post_type' => 'news',
				'post_status' => 'publish'
			);
			$the_query = new WP_Query($args);
			if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
				<div id="all_news">
					<a href="<?php the_permalink() ?>">
						<P>
							<?php echo get_the_date(); ?>
							<?php the_title();?>   
						</P>
					</a>
				</div>
			<?php endwhile; endif; ?>

			<div id="page_nation">

			<?php
			if ($the_query->max_num_pages > 1) {
				echo paginate_links(array(
					'base' => get_pagenum_link(1) . '%_%',
					'format' => 'page/%#%/',
					'current' => max(1, $paged),
					'total' => $the_query->max_num_pages
				));
			}
			?>
			</div>
			<?php wp_reset_postdata(); ?>

			</div>
		</div>
		<!-- posts_end -->


		<?php get_sidebar(); ?>
	


	</div>



	<!-- main_end -->


<?php get_footer(); ?>

</body>
</html>

