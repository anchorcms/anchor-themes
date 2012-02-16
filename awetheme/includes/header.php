<!DOCTYPE html>
<html>
<head>
<title><?php echo site_name(); ?> | <?php echo page_title(); ?></title>

<!-- Stylesheets -->
<link rel='stylesheet' type='text/css' href='<?php echo theme_url('style.css'); ?>'>
<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>

<!-- jQuery -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
<script>
$(document).ready(function(){
	$('footer img').hover(function(){
		$(this).stop().animate({opacity: 1}, 300);
	}, function(){
		$(this).stop().animate({opacity: 0.5}, 300);
	});
});
</script>
</head>

<body>
<header>
	<div class="wrapper">
		<nav>
			<ul>
				<?php while(menu_items()) : ?>
					<li <?php echo (menu_active() ? 'class="active"' : ''); ?>><a href="<?php echo menu_url(); ?>"><?php echo menu_name(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</nav>
		<h1 class="wobble"><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h1>
	</div>
</header>