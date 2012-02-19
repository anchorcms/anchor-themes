<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="<?php echo site_description(); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>">
	<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
	<script src="<?php echo theme_url('/js/jquery.js'); ?>"></script>
	<script src="<?php echo theme_url('/js/plain.min.js'); ?>"></script>
	<?php if(customised()): ?>
	<style><?php echo article_css(); ?></style>
	<script><?php echo article_js(); ?></script>
	<?php endif; ?>
</head>
<body>

	<?php if(PLAIN_NO_HEADER == false AND PLAIN_NO_HEADER_TITLE == false): ?>
	<header id="header"<?php if(PLAIN_HEADER_IMAGE !== ""): echo ' style="background:url('.PLAIN_HEADER_IMAGE.') repeat-x !important;"'; endif; ?>>
		<div id="wrap"<?php if(PLAIN_NO_SIDEBAR == true): echo ' class="no-sidebar"'; endif; ?>>

			<h1><a href="<?php echo base_url(); ?>" title="<?php echo site_name(); ?>"><?php echo site_name(); ?></a></h1>

		</div>
	</header>

	<div class="clear">
	</div>
	
	<?php elseif(PLAIN_NO_HEADER == true AND PLAIN_NO_HEADER_TITLE == false): ?>
	<header id="header" class="no-header">
		<div id="wrap"<?php if(PLAIN_NO_SIDEBAR == true): echo ' class="no-sidebar"'; endif; ?>>

			<h1><a href="<?php echo base_url(); ?>" title="<?php echo site_name(); ?>"><?php echo site_name(); ?></a></h1>

		</div>
	</header>

	<div class="clear">
	</div>

	<?php elseif(PLAIN_NO_HEADER == false AND PLAIN_NO_HEADER_TITLE == true): ?>
	<header id="header"<?php if(PLAIN_HEADER_IMAGE !== ""): echo ' style="background:url('.PLAIN_HEADER_IMAGE.') repeat-x;"'; endif; ?>>
	</header>

	<div class="clear">
	</div>

	<?php endif; ?>
	<div id="wrap"<?php if(PLAIN_NO_SIDEBAR == true): echo ' class="no-sidebar"'; endif; ?>>

		<noscript>
		<p class="notice">
			It seems that you have traveled back in time to a very primitive internet where JavaScript did not exist! 
			However, this site does not function properly without it. You've been warned.
		</p>
		</noscript>