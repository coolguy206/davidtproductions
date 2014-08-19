<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="box620">
<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<?php include('responsive-sidebar.php'); ?>

</div><!--.box620-->

<aside>
<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>