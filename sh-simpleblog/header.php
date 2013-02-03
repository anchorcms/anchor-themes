<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/sunburst.css'); ?>">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/rainbow-custom.min.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>

	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo current_url(); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body class="<?php echo body_class(); ?>">
		<div class="main-wrap">


			<?php
				$headerText = page_custom_field("header-text");
				if($headerText == null || $headerText == "")
				{
					?>
						<header class="content-box" id="header">
			<div class="slidey" id="tray">
				<form id="search-form" action="<?php echo search_url(); ?>" method="post">
					<input type="search" id="term" name="term" placeholder="search&hellip;" value="<?php echo search_term(); ?>">
				</form>
			</div>
							<h1><a id="logo" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h1>
							<h2><?php echo site_description(); ?></h2>

							<?php if(has_menu_items()): ?>
							<nav id="navigation" role="navigation">
								<ul>
									<?php while(menu_items()): ?>
									<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
										<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
											<?php echo menu_name(); ?>
										</a>
									</li>
									<?php endwhile; ?>
									<li>
										<a href="#" id="search" title="search">
											Search
										</a>
									</li>
								</ul>
							</nav>
							<?php endif; ?>
					<?php
				}
				else
				{
					?>
					<header class="content-box">
						<div id="header" class="box-top text">
			<div class="slidey" id="tray">
				<form id="search-form" action="<?php echo search_url(); ?>" method="post">
					<input type="search" id="term" name="term" placeholder="search&hellip;" value="<?php echo search_term(); ?>">
				</form>
			</div>

							<h1><a id="logo" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h1>
							<h2><?php echo site_description(); ?></h2>

							<?php if(has_menu_items()): ?>
							<nav id="navigation" role="navigation">
								<ul>
									<?php while(menu_items()): ?>
									<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
										<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
											<?php echo menu_name(); ?>
										</a>
									</li>
									<?php endwhile; ?>
									<li>
										<a href="#" id="search" title="search">
											Search
										</a>
									</li>
								</ul>
							</nav>
							<?php endif; ?>

						</div>
						<p><?php echo Html::markdown($headerText); ?></p>
					<?php
				}
			?>
					</header>