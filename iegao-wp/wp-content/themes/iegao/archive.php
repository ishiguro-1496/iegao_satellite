<?php get_header(); ?>


	<!-- main -->
	<div id="main" class="container">


		<!-- posts -->
		<div id="posts">
			<div id="posts_bg">
			<?php if ( have_posts() ) : ?>
  			<?php while ( have_posts() ) : the_post(); ?>

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
			<?php endwhile;?>

			<?php else : ?>
			  <p>お探しの記事はありません。</p>
			<?php endif; ?>
			</div>
		</div>
		<!-- posts_end -->


		<?php get_sidebar(); ?>
	

		</div>



	<!-- main_end -->


<?php get_footer(); ?>

</body>
</html>




