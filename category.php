<?php get_header(); ?>



<div class="box140">

</div>

<div class="box780">
<h1>Category: <?php single_cat_title(); ?></h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="blog-content">
<div class="box220">

<?php if ( has_post_thumbnail()) : ?>
 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

   <?php the_post_thumbnail(array(220,9999)); ?>
   </a>
 <?php endif; ?>

</div><!--.box220-->

<div>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
Posted on: <?php the_time('F j, Y'); ?><br>
 <?php the_excerpt(); ?>
</div><!--.box540-->
</div><!--.blog-content-->



<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

</div>
<?php get_footer(); ?>