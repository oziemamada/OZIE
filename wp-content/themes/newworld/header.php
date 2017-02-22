<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	
	
	<meta name="keywords" content="<?php bloginfo('name'); ?>">
	<?php if(is_single()||is_page()) { ?>
	<?php while (have_posts()) : the_post(); ?>
	<meta property="og:image" content="<?php post_ogp($post->ID); ?>" />
	<meta property="og:author" content="181562681871005" />
		<?php endwhile; ?>
	
	<?php } else { ?>
	<meta property="og:image" content="<?php echo get_bloginfo('template_directory') . '/ogp_default.jpg'; ?>" />
	<?php } ?>
		

<!-- External files -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	
<?php wp_head(); ?>
<meta property="fb:admins" content="1098889991" />

</head>

<body <?php body_class(); ?>>

<!--FB・Like Box用-->
<!--
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--ここまで-->

	<div id="page">
		<div id="wrapper">

<!-- Header -->		
			<div id="header">
				<h1><a href="<? bloginfo('url'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a></h1>
			</div><!-- /#header -->