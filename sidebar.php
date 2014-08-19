<?php if(is_active_sidebar('primary-sidebar')) { ?>

	<?php dynamic_sidebar( 'primary-sidebar' ); ?>

<?php } else { ?>	

<h3>Categories</h3>
<ul>
<?php wp_list_categories('title_li='); ?>
</ul>

<?php } ?>

