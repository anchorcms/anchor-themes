<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo site_name(). ' - ' . article_title()?></title>
		<meta name="description" content="<?php echo site_description(); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/stylesheet.css'); ?>">
		<meta name="viewport" content="width=device-width"/>
		
		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>
    		
    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	
	<body>
		<header id="top">
			<div id="nav_wrap">
				<a href="<?php echo base_url();?>"><p id="heading"><?php echo site_name(); ?></p></a>
				<?php if(has_menu_items()): ?>
					<nav id="main" role="navigation">
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
			</div>
		</header>