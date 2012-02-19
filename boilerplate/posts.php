
<section role="main">
<?php if(has_posts()): ?>

	<?php while(posts()): ?>
	<article>
		<h2><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>
		<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo article_date(); ?></time> by 
		<span class="author"><?php echo article_author(); ?></span>

		<summary>
			<?php echo article_description(); ?>
		</summary>
	</article>
	<?php endwhile; ?>

	<p><?php echo posts_prev(); ?> <?php echo posts_next(); ?></p>
<?php else: ?>
	<p>Looks like you have some writing to do!</p>
<?php endif; ?>
</section>
