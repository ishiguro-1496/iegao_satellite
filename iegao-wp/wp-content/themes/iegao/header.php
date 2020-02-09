<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title><?php bloginfo("name"); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" type="text/css"/>
<link rel="stylesheet"  href="<?php echo get_stylesheet_uri(); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

</head>
<body>
	<!-- header -->
	<div id="header" class="container">
		<div id="service_name">
			<a href="<?php echo home_url('/'); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/img/iegao_logo.png">
			</a>
		</div>

		<div id="global-navigation">
			<div>
				<a href="<?php echo home_url('/'); ?>">
				<p><img src="<?php bloginfo('template_directory'); ?>/img/home.jpg">TOP</p>
				</a>
			</div>
			<div>
				<a href="http://iegao-wp.com/コラム一覧/">
				<p><img src="<?php bloginfo('template_directory'); ?>/img/all_posts.jpg">コラム一覧</p>
				</a>
			</div>
			<div>
				<a href="http://iegao-wp.com/お知らせ一覧/">
				<p><img src="<?php bloginfo('template_directory'); ?>/img/news.jpg">お知らせ一覧</p>
				</a>
			</div>
			<div>
				<a href="http://iegao-wp.com/お問い合わせ/">
				<p><img src="<?php bloginfo('template_directory'); ?>/img/contact.jpg">お問い合わせ</p>
				</a>
			</div>
		</div>

		<?php get_search_form(); ?>

		<div id="sp_menu">

			<div id="nav-drawer">
			    <input id="nav-input" type="checkbox" class="nav-unshown">
			    <label id="nav-open" for="nav-input"><span></span></label>
			    <label class="nav-unshown" id="nav-close" for="nav-input"></label>
			    <div id="nav-content">
			    	<div id="sp_service_name">
			    		<a href="<?php echo home_url('/'); ?>">
			    			<img src="<?php bloginfo('template_directory'); ?>/img/iegao_logo.png">
			    		</a>
			    	</div>
			    	<div>
						<a href="<?php echo home_url('/'); ?>">
						<p><img src="<?php bloginfo('template_directory'); ?>/img/home.jpg">TOP</p>
						</a>
					</div>
					<div>
						<a href="http://iegao-wp.com/コラム一覧/">
						<p><img src="<?php bloginfo('template_directory'); ?>/img/all_posts.jpg">コラム一覧</p>
						</a>
					</div>
					<div>
						<a href="http://iegao-wp.com/お知らせ一覧/">
						<p><img src="<?php bloginfo('template_directory'); ?>/img/news.jpg">お知らせ一覧</p>
						</a>
					</div>
					<div>
						<a href="http://iegao-wp.com/お問い合わせ/">
						<p><img src="<?php bloginfo('template_directory'); ?>/img/contact.jpg">お問い合わせ</p>
						</a>
					</div>

					<?php get_search_form(); ?>

			    	
			    </div>
			</div>
		</div>

	</div>
	<!-- header_end -->
<?php wp_head(); ?>