<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<title><?php is_front_page() ? bloginfo('description') : wp_title("", true); ?> | <?php bloginfo('name'); ?> | <?php echo('Seattle, WA'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="keywords" content="Seattle,Web design,development,services,HTML5,CSS3,JavaScript,PHP,Wordpress,tutorials">
<meta name="author" content="David Thanphilom">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/flexslider.css">
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/responsive-nav.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/image-swap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('.flexslider').flexslider({directionNav: false});
});
</script>
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
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
<section class="wrapper-header">

<header>
<div class="logo">
<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-header.png" alt="<?php bloginfo('name'); ?>" class="logo"></a><br>
<span class="tagline">Your Webdesign Solutions!</span>
</div>

<div class="box380">

<?php get_search_form(); ?> 

<div class="responsive-icons">
<!--
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/search-hover.png" alt="search" class="search">
-->
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/navigation-icon.png" alt="Nav icon" class="nav">
</div>

</div>
</header>

<section class="wrapper-nav">

<nav>
<?php wp_nav_menu( array(
'menu' => 'Main',
'container' => ''
)); ?>
</nav>
</section><!--wrapper-nav-->

<section class="wrapper-content">
<article class="content">
