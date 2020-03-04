<!-- sidebar -->
		<div id="sidebar">
			<div id="keyword">
				<h1><img src="<?php bloginfo('template_directory'); ?>/img/keyword.jpg">キーワードから探す</h1>
				<?php
				$args = array(
				    'orderby' => 'name',
				    'order' => 'ASC'
				);
				$posttags = get_tags( $args );

				if ( $posttags ){
					echo ' <ul> ';
					foreach( $posttags as $tag ) {
						echo '<li><a href="'. get_tag_link( $tag->term_id ) . '">' . $tag->name . '</a></li>';
					}
					echo ' </ul> ';
				}
				?>
			</div>
			<div id="ranking">
				<h1><img src="<?php bloginfo('template_directory'); ?>/img/ranking.jpg">検索ワードランキング</h1>
				<?php
				$args = array(
				    'orderby' => 'count',
				    'order' => 'DESC',
				    'number' => 3	
				);

				$i = 3;

				$posttags = get_tags( $args );


				if ( $posttags ){
					echo ' <ul> ';
					foreach( $posttags as $tag ) {
						echo '<li>
						<a href="'. get_tag_link( $tag->term_id ) . '"><span>1</span>' . $tag->name . '
						</a>
						</li>';
					}
					echo ' </ul> ';
				}
				?>
				
			</div>
		</div>
		<!-- sidebar_end -->