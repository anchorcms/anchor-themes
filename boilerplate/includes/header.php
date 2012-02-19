<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title(); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		
		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>
    		
    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body>
	
		<header>
			<p><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></p>

			<?php if(has_menu_items()): ?>
			<nav role="navigation">
				<ul>
					<?php while(menu_items()): ?>
					<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
						<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
							<?php echo menu_name(); ?>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
			</nav>
			<?php endif; ?>
		</header>

		<form action="<?php echo search_url(); ?>" method="post">
			<p><label>Search <input type="search" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>"></label></p>
		</form>
