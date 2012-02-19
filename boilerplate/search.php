
<section role="main">
	<h1>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>
	
<?php if(has_search_results()): ?>
	<p>We found <?php echo total_search_results(). ' ' . pluralise(total_search_results(), 'result'); ?> for &ldquo;<?php echo search_term(); ?>&rdquo;</p>

	<?php while(search_results()): ?>
	<article>
		<h2><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>
		<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo article_date(); ?></time> by 
		<span class="author"><?php echo article_author(); ?></span>

		<summary>
			<?php echo article_description(); ?>
		</summary>
	</article>
	<?php endwhile; ?>

	<p><?php echo search_prev(); ?> <?php echo search_next(); ?></p>
<?php else: ?>
	<p>Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
<?php endif; ?>    
</section>
