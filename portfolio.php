<?php /*Template Name: Portfolio */ ?>
<?php get_header(); ?>

<div class="box620">
<h1><?php wp_title(''); ?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php $args = array('category' => '5', 'order' => 'DESC', 'orderby' => 'date', 'posts_per_page' => '9999');
$lastposts = get_posts($args);
foreach($lastposts as $post) { ?>
<article class="blog">
<header>
<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
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
<?php } ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<?php include('responsive-sidebar.php'); ?>

</div><!--.box620-->

<aside>
<?php get_sidebar(); ?>
</aside>
<?php get_footer(); ?>