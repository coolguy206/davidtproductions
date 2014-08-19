</div>
</div>
</div><!--wrapper-content-->

<div class="wrapper-footer">
<footer>
<div class="box460">
<p>Copyright &copy; <?php echo date('Y'); ?> All rights reserved <a href="<?php bloginfo('url'); ?>">DavidTProductions.com</a></p>
</div>

<div class="box460">
<?php include('social-media-icons.php'); ?>
</div><!--.box460-->

</footer>
</div><!--wrapper-footer-->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/responsive-nav.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/image-swap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('.flexslider').flexslider({directionNav: false});
});
</script>
<?php wp_footer(); ?>
</body>
</html> 