<?php get_header(); ?>
<div class="box620">
<h2>Oops! What happened?!?</h2>
<p>It seems we have made a mistake. We are sorry about that, please try another search or check out our <a href="<?php echo get_permalink(get_page_by_title( 'Services' )); ?>">Services Page</a>.</p> 
<?php get_search_form(); ?>

<?php include('responsive-sidebar.php'); ?>

</div><!--.box620-->
<aside>
<?php get_sidebar(); ?>
</aside>
<?php get_footer(); ?>