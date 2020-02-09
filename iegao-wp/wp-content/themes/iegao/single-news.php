
<?php get_header(); ?>


	<!-- main -->
	<div id="main" class="container">


		<!-- posts -->
		<div id="posts">
			<div id="posts_bg">
				<?php if(have_posts()): the_post(); ?>
				<article <?php post_class( 'article-content' ); ?>>
				  <div class="article-info">
				    <!--投稿日を取得-->
				    <span class="article-date">
				      <i class="far fa-clock"></i>
				      <time
				      datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
				      <?php echo get_the_date(); ?>
				      </time>
				    </span>
					  <!--タイトル-->
					  <h1 id="single_title"><?php the_title(); ?></h1>
					  <!--サブタイトル-->
					  <p id="posts_subtitle">
					  	<?php $text_field = get_field('posts_subtitle'); ?>
					  	<?php echo $text_field; ?>
					  </p>

					  <div id="posts_tag">
	                	<ul>
	                 		<li><a href="#"><?php the_tags( 'タグ', '' ); ?></a></li>
	              	 	</ul>
	           		</div>
					  <!--アイキャッチ取得-->
					  <div id="article-img">
					    <?php if( has_post_thumbnail() ): ?>
					      <?php the_post_thumbnail( 'post_thumbnail' ); ?>
					    <?php endif; ?>
					  </div>
					  <!--本文取得-->
					  <div id="posts_body">
					  <?php the_content(); ?>
					  </div>
					  <!--タグ-->
				  <div id="posts_tag">
	                	<ul>
	                 		<li><a href="#"><?php the_tags( 'タグ', '' ); ?></a></li>
	              	 	</ul>
	           		</div>
				</article>
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


