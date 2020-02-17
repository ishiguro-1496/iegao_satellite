<?php get_header(); ?>


	<!-- main -->
	<div id="main" class="container">


		<!-- posts -->
		<div id="posts">
				  <div id="new_posts">
					<h1>
						<img src="<?php bloginfo('template_directory'); ?>/img/new.jpg">新着コラム
					</h1>
					<div id="posts_block">
						<?php
						$new_posts = get_posts(array(
						    'post_type' => 'post', 
						    'category_name' => 'new', 
						    'posts_per_page' => 3, 
						    'orderby' => 'date', 
						    'order' => 'DESC' 
						));
						global $post;
						if($new_posts): foreach($new_posts as $post): setup_postdata($post); ?>
							<div>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('new_posts_thumbnail');?>
								</a>
								<h2><?php echo get_the_date(); ?></h2>
								<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
								</a>
							</div>
						<?php endforeach; endif; wp_reset_postdata(); ?>
					</div>
				</div>

				
			
			<div id="news">
				<h1><img src="<?php bloginfo('template_directory'); ?>/img/news.jpg">お知らせ</h1>
				<div>
					<?php $args = array('post_type' => array('news'), 'posts_per_page' => 5); ?>
					<?php $posts = get_posts($args); ?>
					<?php if (!empty($posts)): ?>
					<ul class="news_content">
					<?php foreach ($posts as $post):setup_postdata($post); ?>
							 
					
						
						<a href="<?php the_permalink() ?>"><P> <?php echo get_the_date(); ?>    <?php the_title();?>   <span>NEW!</span></P></a>
					

					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>

						 
						

				</div>
			</div>


			<div id="pickups">
				<h1><img src="<?php bloginfo('template_directory'); ?>/img/pickup.jpg">おすすめコラム</h1>
				<div id="pickup_post_wrapper">
					<?php
						$pickup_posts = get_posts(array(
						    'post_type' => 'post',
						    'category_name' => 'pickup', 
						    'posts_per_page' => 5, 
						    'orderby' => 'date', 
						    'order' => 'DESC' 
						));
						global $post;
						if($pickup_posts): foreach($pickup_posts as $post): setup_postdata($post); ?>
		  	
					<div class="pickup_post">
			  			<div class="content-left">
							 <a href="<?php the_permalink(); ?>">
							 	<?php the_post_thumbnail('pickups_thumbnail');?>
							 </a>
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

				<?php endforeach; endif; wp_reset_postdata(); ?>	
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


