<?php theme_include('header'); ?>
<section id="content">
	<div class="wrapper">
		<section id="posts" class="col_2">
			<?php if(has_search_results()): ?>
				<article>
					<h2 class="noTop">Search Results</h2>
					<p class="meta"><?php echo total_search_results(); ?> <?php echo pluralise(total_search_results(), 'result'); ?> results for: <strong><?php echo search_term(); ?></strong></a>
				</article>
				<?php while(search_results()): ?>
					<article class="compact">
						<h2><a href="<?php echo post_url(); ?>"><span><?php echo post_date(); ?></span><?php echo post_title(); ?></a></h2>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<article>
					<h2>Found Nothing!</h2>
					<p>For other string you may be looking for...</p>
					</article>
			<?php endif; ?>
		</section>
		<?php include('includes/sidebar.php'); ?>
	</div>
</section>
<?php theme_include('footer'); ?>