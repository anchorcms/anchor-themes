<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/assets/css/main.css'); ?>">
		
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
		<script>window.jQuery || document.write("<script src='/assets/js/jquery-1.7.1.min.js'>\x3C/script>")</script>
        
		<script>var base = '<?php echo theme_url(); ?>';</script>
        
		<script src="<?php echo theme_url('/assets/js/main.js'); ?>"></script>
        
        <script type="text/javascript">
		  WebFontConfig = {
			google: { families: [ 'Droid+Serif:400,700,400italic,700italic:latin', 'Oswald::latin' ] }
		  };
		  (function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
			  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		  })(); 
  		</script>
  
		
	    <meta name="viewport" content="width=device-width">
		
		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>
    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body>
    
    <!-- container -->
	<div class="container">
	
		<form id="search" action="<?php echo search_url(); ?>" method="post" class="row">
			<input type="search" results="5" autosave="true" name="term" placeholder="To search, type and hit enter&hellip;" class="columns offset-by-two" value="<?php echo search_term(); ?>">
		</form>
        
        <header class="row" id="top">
      
			<div class="offset-by-two columns">
				<h1><a id="logo" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h1>
			</div>
            <?php if(has_menu_items()): ?>
            <nav class="eight columns wrap">
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
        
		</header><!--Ends Header-->