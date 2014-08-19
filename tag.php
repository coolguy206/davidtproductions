<?php get_header(); ?>
<h1>Tag: <?php single_tag_title(); ?></h1>
<ol>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="tag">
<?php
echo get_the_tag_list('<li><h2>','','</h2></li>');
?>

<div class="blog-content">
<div class="box220">
<?php if ( has_post_thumbnail()) : ?>
 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

   <?php the_post_thumbnail(array(220,9999)); ?>
   </a>
 <?php endif; ?>
</div><!--.box220-->

<div>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
Posted on: <?php the_time('F j, Y'); ?><br>
<?php the_excerpt(); ?>
</div><!--.box540-->
</div><!--.blog-content-->

</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
</ol>
<?php get_footer(); ?>