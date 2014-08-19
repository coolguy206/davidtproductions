<?php /*Template Name: Contact */ ?>
<?php get_header(); ?>

<nav class="box140">
<?php wp_nav_menu( array(
'menu' => 'Contact',
'container' => ''
)); ?>
</nav>

<div class="box460">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<?php include('responsive-sidebar.php'); ?>

</div><!--.box460-->

<aside>
<?php get_sidebar(); ?>
<aside>

<?php get_footer(); ?>