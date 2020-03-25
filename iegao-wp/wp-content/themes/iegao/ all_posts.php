<?php get_header(); ?>


	<!-- main -->
	<div id="main" class="container">


		<!-- posts -->
		<div id="posts">
			<div id="posts_bg">
			<h1><img src="<?php bloginfo('template_directory'); ?>/img/all_posts.jpg">コラム一覧</h1>
			<?php
			/**
			 * Template Name: コラム一覧 */
			?>

			<?php
			$paged = (int) get_query_var('paged');
			$args = array(
				'posts_per_page' => 5,
				'paged' => $paged,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'format' => '&paged=%#%',
				'post_type' => 'post',
				'post_status' => 'publish'

			);
			$the_query = new WP_Query($args);
			if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
				<div class="pickup_post">
	  			<div class="content-left">
					 <a href=""><?php the_post_thumbnail('pickups_thumbnail');?></a>
                </div>
	  			<div class="content-right">
		  			<h2><?php echo get_the_date(); ?></h2>
		     		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		     		<span>Pickup</span></h3>
		     		<p>
		     			<?php $text_field = get_field('posts_subtitle'); ?>
		     			<?php echo $text_field; ?>
		     		</p>
                  	<div id="posts_tag">
	                	<ul>
	                 		<li><a href="#"><?php the_tags( 'タグ', '' ); ?></a></li>
	              	 	</ul>
	           		</div>
				</div>
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

