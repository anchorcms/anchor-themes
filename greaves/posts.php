<?php theme_include('header'); ?>
<?php if(has_posts()): ?>

    	<?php while(posts()): ?>
    	<section class="row post">
        	<article class="two columns"><p class="date"><?php echo relative_time(article_time()); ?></p></article>
            <article class="six columns"><h2><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2></article>
            <article class="four columns"><p><?php echo article_description(); ?></p></article>
    	</section>
    	<?php endwhile; ?>



<?php else: ?>
    <p>Looks like you have some writing to do!</p>
<?php endif; ?>
<?php theme_include('footer'); ?>