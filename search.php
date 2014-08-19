<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>

<?php get_header(); ?>

<div class="box620">
<h1>Search Results: <?php the_search_query(); ?> </h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="blog">
<header>
<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
<div class="date">
<i class="fa fa-calendar fa-lg"></i> <?php the_time('F j, Y'); ?>

<!--check if has categories-->
<?php if(has_category()){ ?>
| <i class="fa fa-folder-open-o fa-lg"></i> <?php the_category(); ?>
<?php } ?> 

<!--check if has tags-->
<?php if(has_tag()){ ?>
| <i class="fa fa-tags fa-lg"></i> <?php the_tags(''); ?>
<?php } ?>
</div><!--.date-->
</header>

<div class="blog-content">
<div class="box300">

<?php if ( has_post_thumbnail()) : ?>
 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

   <?php the_post_thumbnail(array(300,9999)); ?>
   </a>
 <?php endif; ?>

</div><!--.box300-->

<div>
<?php the_excerpt(); ?>
</div>
</div><!--.blog-content-->

</article>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria. Please try a different search'); ?></p>

<?php endif; ?>

<?php include('responsive-sidebar.php'); ?>

</div><!--.box620-->

<aside>
<?php get_sidebar(); ?>
</aside>

<div class="post-links">
<?php next_posts_link('<i class="fa fa-arrow-circle-left fa-4x"></i>'); ?>
<?php previous_posts_link('<i class="fa fa-arrow-circle-right fa-4x"></i>'); ?>
</div><!--.post-links-->

<?php get_footer(); ?>