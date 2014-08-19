<?php /*Template Name: Home */ ?>
<?php get_header(); ?>

<div class="flexslider">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
</div>

<div class="box300">
<?php rewind_posts(); // stop loop two ?> 

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1>Services</h1>
<?php echo get_post_meta(10, 'excerpt', true); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

</div>

<div class="box300">
<?php rewind_posts(); // stop loop one ?>
<?php query_posts('posts_per_page=1&orderby=rand&cat=5'); ?> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1>Portfolio</h1>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if ( has_post_thumbnail()) : ?>

   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

   <?php the_post_thumbnail(array(300,9999)); ?>

   </a>

 <?php endif; ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?> 

</div>

<div class="box300">
<h1>Blog</h1>
<?php rewind_posts(); // stop loop two ?> 
 <?php query_posts('showposts=1&cat=-5'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2>
<div class="date">Posted on: <?php the_time('F j, Y'); ?><br> 
<?php the_category(); ?> | <?php the_tags(''); ?>
</div>
<?php if ( has_post_thumbnail()) : ?>
 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

   <?php the_post_thumbnail(array(300,9999)); ?>
   </a>

 <?php endif; ?>
 <?php echo the_excerpt(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
</div>


<?php get_footer(); ?>