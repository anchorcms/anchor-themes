<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title><?php echo site_name(); ?> | <?php echo page_title(); ?></title>
<meta name="description" content="<?php echo site_description(); ?>">

<!-- Loading required CSS -->
<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">

<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script>var base = '<?php echo theme_url(); ?>';</script>
<script src="<?php echo theme_url('/js/main.js'); ?>"></script>

<?php if(customised()): ?>
<!-- Custom CSS -->
<style><?php echo article_css(); ?></style>

<!--  Custom Javascript -->
<script><?php echo article_js(); ?></script>
<?php endif; ?>

</head>

<body>
<header>
	<div class="wrapper">
		<div class="col_3">
			<nav>
				<ul>
					<?php while(menu_items()) : ?>
						<li <?php echo (menu_active() ? 'class="active"' : ''); ?>><a href="<?php echo menu_url(); ?>"><?php echo menu_name(); ?></a></li>
					<?php endwhile; ?>
				</ul>
			</nav>
			<h1 id="logo"><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h1>
		</div>
	</div>
</header>