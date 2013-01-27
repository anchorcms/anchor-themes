<?php theme_include('header'); ?>
<div id="content-bg">
<?php if(has_posts()): ?>
    <ul class="items wrap">
    	<?php while(posts()): ?>
    	<li>
    		<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
    		    <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
    		    <h2><?php echo article_title(); ?></h2>
				<p class="article_desc"><?php echo article_description();?></p>
    		</a>
    	</li>
    	<?php endwhile; ?>
    </ul>
<?php else: ?>
    <p>Looks like you have some writing to do!</p>
<?php endif; ?>
</div>
<?php theme_include('footer'); ?>
