<?php /*Template Name: About */ ?>
<?php get_header(); ?>

<nav class="box140">
<?php wp_nav_menu( array(
'menu' => 'About',
'container' => ''
)); ?>

</nav>

<section class="box780">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php wp_title(''); ?></h1>
<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

</section>

<?php get_footer(); ?>