<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="box140">

</div>

<div class="box780">
<div class="single">
<article class="blog">
<header>
<h1><a href="<?php the_permalink();?>"><?php wp_title(''); ?> | <?php bloginfo('name'); ?></a></h1>
Posted on <?php the_date(); ?> | <?php the_category('|'); ?> | <?php the_tags(''); ?><br>
<br>

<?php if ( in_category('5')) { ?>
<?php previous_post_link('%link','Previous Post', true); ?> | <?php next_post_link('%link', 'Next Post', true); ?>
<?php } else { ?>
<?php previous_post_link('%link','Previous Post', false, '5'); ?> | <?php next_post_link('%link', 'Next Post', false, '5'); ?>
<?php } ?>

</header>

<?php the_content(); ?>


<footer>
<h3>To Contact DavidTProductions</h3> 
please visit us at<br>
 <a href="<?php bloginfo('url');?>">http://davidtproductions.com</a> and email us at <a href="mailto:<?php bloginfo('admin_email'); ?>">info@davidtproductions.com</a>
</footer>
</article>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

</div>
</div>
<?php get_footer(); ?>