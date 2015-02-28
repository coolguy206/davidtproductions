<?php get_header(); ?>

<div class="box620">
<h1><?php single_cat_title(); ?></h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="blog">


<div class="blog-content">


<?php if ( has_post_thumbnail()) : ?>
	<div class="box300">
 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

   <?php the_post_thumbnail(array(300,9999)); ?>
   </a>
   </div><!--.box300-->
 <?php endif; ?>

<div>
	<header>
<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
<div class="date">
<i class="fa fa-calendar fa-lg"></i> <?php the_time('M j, Y'); ?>

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

<?php the_excerpt(); ?>
</div>
</div><!--.blog-content-->

</article>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<?php include('responsive-sidebar.php'); ?>

</div><!--.box620-->

<aside>
<?php get_sidebar(); ?>
</aside>
<?php get_footer(); ?>