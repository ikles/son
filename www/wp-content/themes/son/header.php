<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<title><?php
	if (is_front_page()) {
			wp_title(' '); ?><?php if(wp_title(' ', false)) { ?> at <?php } ?><?php bloginfo('name');
		}
		else {
			wp_title(' '); ?><?php if(wp_title(' ', false)) { } 
		}
		?></title>
		<link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/main.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="<? bloginfo('template_url') ?>/js/jquery-1.12.0.min.js"></script>
<script src="<? bloginfo('template_url') ?>/js/toTop.js"></script>
<script src="<? bloginfo('template_url') ?>/js/common.js"></script>
</head>
<body <?php body_class(); ?>>