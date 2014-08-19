<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if (in_category('portfolio')) { ?>

<div class="box620">
<div class="single">
<article class="blog">
<header>
<h1><a href="<?php the_permalink();?>"><?php wp_title(''); ?></a></h1>

<?php if ( in_category('5')) { ?>
<?php previous_post_link('%link','Previous Post', true); ?> | <?php next_post_link('%link', 'Next Post', true); ?>
<?php } else { ?>
<?php previous_post_link('%link','Previous Post', false, '5'); ?> | <?php next_post_link('%link', 'Next Post', false, '5'); ?>
<?php } ?>

</header>

<?php the_content(); ?>

<div class="post-links">
<?php if ( in_category('5')) { ?>
<?php previous_post_link('%link','<i class="fa fa-arrow-circle-left fa-4x"></i>', TRUE); ?>
<?php next_post_link('%link','<i class="fa fa-arrow-circle-right fa-4x"></i>', TRUE); ?>
<?php } else { ?>
<?php previous_post_link('%link','<i class="fa fa-arrow-circle-left fa-4x"></i>','5'); ?>
<?php next_post_link('%link','<i class="fa fa-arrow-circle-right fa-4x"></i>','5'); ?>
<?php } ?>
</div><!--.post-links-->

<footer>
<h3>About David Thanphilom</h3> 
<p>
David Thanphilom is a front-end developer and has received his <a href="http://seattlecentral.edu/programs/webdesign/" target="_blank">Web Design Certification</a> from <a href="http://seattlecentral.edu" target="_blank">Seattle Colleges.</a> His passion drives him to be better at web development to help his employers and clients with their web problems such as generating more revenue, increasing web visibility, and promoting better usability. For information please see my <a href="<?php echo get_permalink(get_page_by_title( 'Services' )); ?>">Services</a> or <a href="<?php echo get_permalink(get_page_by_title( 'Contact' )); ?>">Contact Me</a> for your next project needs.
</p>
</footer>
</article>

<?php } else { ?>
<div class="box620">
<div class="single">
<article class="blog">
<header>
<h1><a href="<?php the_permalink();?>"><?php wp_title(''); ?></a></h1>
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
<?php if ( in_category('5')) { ?>
<?php previous_post_link('%link','Previous Post', true); ?> | <?php next_post_link('%link', 'Next Post', true); ?>
<?php } else { ?>
<?php previous_post_link('%link','Previous Post', false, '5'); ?> | <?php next_post_link('%link', 'Next Post', false, '5'); ?>
<?php } ?>

</header>

<?php the_content(); ?>

<div class="post-links">
<?php if ( in_category('5')) { ?>
<?php previous_post_link('%link','<i class="fa fa-arrow-circle-left fa-4x"></i>', TRUE); ?>
<?php next_post_link('%link','<i class="fa fa-arrow-circle-right fa-4x"></i>', TRUE); ?>
<?php } else { ?>
<?php previous_post_link('%link','<i class="fa fa-arrow-circle-left fa-4x"></i>'); ?>
<?php next_post_link('%link','<i class="fa fa-arrow-circle-right fa-4x"></i>'); ?>
<?php } ?>
</div><!--.post-links-->

<footer>
<h3>About David Thanphilom</h3> 
<p>
David Thanphilom is a front-end developer and has received his <a href="http://seattlecentral.edu/programs/webdesign/" target="_blank">Web Design Certification</a> from <a href="http://seattlecentral.edu" target="_blank">Seattle Colleges.</a> His passion drives him to be better at web development to help his employers and clients with their web problems such as generating more revenue, increasing web visibility, and promoting better usability. For information please see my <a href="<?php echo get_permalink(get_page_by_title( 'Services' )); ?>">Services</a> or <a href="<?php echo get_permalink(get_page_by_title( 'Contact' )); ?>">Contact Me</a> for your next project needs.
</p>
</footer>
</article>

<?php } ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

</div><!--.single-->

<?php include('responsive-sidebar.php'); ?>

</div><!--.box620-->

<aside>
<?php get_sidebar(); ?>
</aside>
<?php get_footer(); ?>