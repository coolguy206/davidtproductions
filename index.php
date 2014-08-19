<?php get_header(); ?>

<div class="box140">

</div>

<div class="box780">
<h1><?php wp_title(''); ?></h1>
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts("cat=-5&paged=$paged"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="blog">
<header>
<h2><a href="<?php the_permalink();?>"><?php the_title(); ?> | <?php bloginfo('name'); ?></a></h2>
<div class="date">Posted on: <?php the_time('F j, Y'); ?> | <?php the_category(); ?> | <?php the_tags(''); ?></div>
</header>

<div class="blog-content">
<div class="box220">

<?php if ( has_post_thumbnail()) : ?>
 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

   <?php the_post_thumbnail(array(220,9999)); ?>
   </a>
 <?php endif; ?>

</div><!--.box220-->

<div>
<?php the_excerpt(); ?>
</div><!--.box540-->
</div><!--.blog-content-->

</article>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<div class="post-links">
<?php next_posts_link('&laquo; Previous posts'); ?> 
<?php previous_posts_link('Next posts &raquo;'); ?>
</div>

</div>

<?php get_footer(); ?>