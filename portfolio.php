<?php /*Template Name: Portfolio */ ?>
<?php get_header(); ?>

<div class="box140">

</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="box780">
<h1><?php wp_title(''); ?></h1>
<?php the_content(); ?>
<section class="portfolio">
<?php
$args = array('category' => '5', 'order' => 'DESC', 'orderby' => 'date', 'posts_per_page' => '9999');
$lastposts = get_posts($args);
foreach($lastposts as $post) : setup_postdata($post); ?>
<article>
<h2><?php the_title(); ?></h2>
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail(array(220,9999)); ?>
</a>
</article>
<?php endforeach; ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
</section>
</div>
<?php get_footer(); ?>