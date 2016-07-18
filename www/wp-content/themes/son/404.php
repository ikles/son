<?php get_header(); ?>
<div class="left">
	<a href="/" class="logo"><img src="<? bloginfo('template_url') ?>/img/logo.png" alt=""></a>
	<?php dynamic_sidebar('left__menu'); ?>
<?php dynamic_sidebar('banner_l'); ?>
</div>
<div class="center">
	<?php dynamic_sidebar('slogan'); ?>
	<?php dynamic_sidebar('slogan2'); ?>
	<?php dynamic_sidebar('slider'); ?>
	<div class="main_content page">
		<p>Страница не найдена</p>
</div>
</div><!--center-->
<div class="right">
	<?php dynamic_sidebar('right__phone'); ?>
	<?php dynamic_sidebar('right__menu'); ?>
	<?php dynamic_sidebar('right__text'); ?>
	<?php dynamic_sidebar('banner_r'); ?>
</div>
<?php get_footer(); ?>		