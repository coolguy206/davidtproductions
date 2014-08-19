<?php /*Template Name: Contact */ ?>
<?php get_header(); ?>

<nav class="box140">
<?php wp_nav_menu( array(
'menu' => 'Contact',
'container' => ''
)); ?>
<a href="https://secure1.inmotionhosting.com/cgi-bin/gby/clickthru.cgi?id=davidt" class="advertisement">
<img src="http://creatives.inmotionhosting.com/live-support/imh_banner_125x125_livesupport.jpg" border=0></a>
<a href="http://www.netfirms.com/join/index.bml?AffID=712321" class="advertisement"><img src="http://www2.netfirms.com/affiliate/banners/866" style="border:0px" alt="affiliate_link"></a>
</nav>

<section class="box780">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

</section>

<?php get_footer(); ?>