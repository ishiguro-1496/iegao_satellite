<?php get_header(); ?>


	<!-- main -->
	<div id="main" class="container">


		<!-- posts -->
		<div id="posts">
			<div id="posts_bg">
			<?php if (have_posts() && get_search_query()) :  ?>
  			<?php while (have_posts()) :
            the_post();
            get_template_part( 'template-parts/post/content', 'title' ); ?>

			<div class="pickup_post">
	  			<div class="content-left">
					 <a href=""><img src="img/pic_14.jpg"></a>
                </div>
	  			<div class="content-right">
		  			<h2><?php echo get_the_date(); ?></h2>
		     		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		     		<span>Pickup</span></h3>
                  	<div class="posts_tag">
	                	<ul>
	                 		<li><a href="#"><?php the_tags( '', '' ); ?></a></li>
	              	 	</ul>
	           		</div>
				</div>
			</div>
			<?php endwhile;?>

			<?php else : ?>
			  <p>検索キーワードに該当する記事がありませんでした。</p>
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