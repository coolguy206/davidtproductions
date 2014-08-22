<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<title>
<?php
// Titles for different page types
if ( is_home() || is_front_page() ) {
	bloginfo('description'); echo ' | '; bloginfo('name'); echo "| Seattle, WA";
} elseif (is_search()) {
	echo 'Search Results for: '; the_search_query(); echo ' | '; bloginfo('name'); echo '| Seattle, WA';
} elseif (is_tag()) {
	echo 'Tag: '; single_tag_title();  echo ' | '; bloginfo('name'); echo '| Seattle, WA';
} elseif (is_category()) {
	echo 'Category: '; single_cat_title(); echo ' | '; bloginfo('name'); echo '| Seattle, WA';
} elseif (is_page()) {
	echo get_post_meta($post->ID, 'title', true); echo ' | '; bloginfo('name'); echo '| Seattle, WA';
} else {
	wp_title('', TRUE, 'right'); echo ' | '; bloginfo('name'); echo '| Seattle, WA';
}
?>
</title>
<meta name="description" content="<?php if(is_page()){ echo get_post_meta($post->ID, 'excerpt', true); } elseif(is_single()){ echo get_the_excerpt(); } ?>">
<meta name="keywords" content="Seattle,Web design,development,services,HTML5,CSS3,JavaScript,jQuery,PHP,MySQL,WordPress,tutorials">
<meta name="author" content="David Thanphilom">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/flexslider.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/font-awesome/css/font-awesome.css">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon">

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22854947-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<div class="wrapper-header">

<header>
<div class="logo">
<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-header.png" alt="<?php bloginfo('name'); ?>"></a><br>
<span class="tagline">Your Web Development Solutions!</span>
</div><!--.logo-->

<div class="box380">
<?php include('social-media-icons.php'); ?>
<?php get_search_form(); ?> 

<div class="responsive-icons">

<i class="fa fa-toggle-down fa-2x"> Menu</i>

</div><!--.responsive-icons-->

</div><!--.box380-->
</header>

<div class="wrapper-nav">

<nav>
<?php wp_nav_menu( array(
'menu' => 'Main',
'container' => ''
)); ?>
</nav>
</div><!--wrapper-nav-->

<div class="wrapper-content">
<div class="content">
