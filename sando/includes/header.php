<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo page_title(); ?> &mdash; <?php echo site_name(); ?></title>
        
        <link rel="stylesheet" href="<?php echo theme_url('style.css'); ?>">
    </head>
<body>
    <header>
    	<div class="wrapper">
        	<h1 id="logo"><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h1>
            
            <form class="search" action="<?php echo search_url(); ?>" method="post">
            	<input name="term" placeholder="Type and enter to search" value="<?php echo search_term(); ?>">
            </form>
            
            <?php if(has_menu_items()): ?>
            <nav>
            	<ul>
            		<?php while(menu_items()): ?>
            		<li <?php echo (menu_active() ? 'class="current"' : ''); ?>>
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
    
    <section id="content">