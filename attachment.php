<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="box620">
<?php if (wp_attachment_is_image($post->id)) {

$att_image = wp_get_attachment_image_src( $post->id, "full"); ?>

<img src="<?php echo $att_image[0];?>" alt="<?php the_title(); ?>" />

<?php } ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<?php include('responsive-sidebar.php'); ?>

</div><!--.box620-->

<aside>
<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
