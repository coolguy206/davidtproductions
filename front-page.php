<?php /*Template Name: Home */ ?>
<?php get_header(); ?>
<div class="box460">
<div class="flexslider">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
</div><!--.flexslider-->
</div><!--.box460-->

<div class="box460">
<?php rewind_posts(); // stop loop two ?> 

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1>Seattle Web Development</h1>
<?php echo get_post_meta(6, 'excerpt', true); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
</div><!--.box460-->

<div class="clear"></div>

<div class="box300">
<?php rewind_posts(); // stop loop two ?> 

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h2>Services</h2>
<?php echo get_post_meta(10, 'excerpt', true); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

</div><!--.box300-->

<div class="box300">
<h2>Portfolio</h2>
<?php rewind_posts(); // stop loop one ?>
<?php query_posts('posts_per_page=1&orderby=rand&cat=5'); ?> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail(array(300,9999)); ?>
   </a>
 <?php endif; ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?> 

</div><!--.box300-->

<div class="box300">
<h2>Blog</h2>
<?php rewind_posts(); // stop loop two ?> 
 <?php query_posts('showposts=1&cat=-5'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h3>
<header>
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
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
</div>


<?php get_footer(); ?>