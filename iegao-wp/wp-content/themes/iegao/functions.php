<?php 

add_theme_support('menus');




register_sidebar(
	array(
		'id' => 'widget_keyword',
		'name' => 'keyword',
		'description' => 'ウィジェットエリアについての説明を書きます',

	)
);



function create_post_type_news() {
  $Supports = [
    'title',
    'editor',
    'thumbnail',
  ];
  register_post_type( 'news',
    array(
      'label' => 'お知らせ',
      'labels' => array(
      'all_items' => 'お知らせ一覧'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'supports' => $Supports
    )
  );
}
add_action( 'init', 'create_post_type_news' );



add_theme_support('post-thumbnails');

add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
 add_image_size('pickups_thumbnail', 200, 150 ,true );
 add_image_size( 'new_posts_thumbnail', 240, 180, true );
 add_image_size('post_thumbnail', 560, 420, true );
}





