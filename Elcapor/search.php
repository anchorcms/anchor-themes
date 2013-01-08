<?php theme_include('header'); ?>
<div class="page_wrap">
	<section class="content">

		<h1>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>

		<?php if(has_search_results()): ?>
			<p>We found <?php echo total_search_results(); ?> <?php echo pluralise(total_search_results(), 'result'); ?> for &ldquo;<?php echo search_term(); ?>&rdquo;</p>
			<ul class="posts_wrap">
			<?php while(search_results()): ?>
			<li>
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
					<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
					<h2><?php echo article_title(); ?></h2>
					<p id="desc"><?php echo article_description(); ?></p>
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
		<div class="search_wrap">
			<form id="search" action="<?php echo search_url(); ?>" method="post">
				<input type="search" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
			</form>
		</div>
		<div class="feed_wrap">
			<h3>Topics:</h3>
			<p class="topic"><a href="../search/programming">Programming</a> - Posts teaching and advising programming techniques, bringing you the latest information and news to keep you up to date with your favourite languages.</p>
			<p class="topic"><a href="../search/internet">The Internet</a> - Primarily random posts with no category, else they involve a specific feature of the internet, possibly something I have found.</p>
			<p class="topic"><a href="../search/anchor">Anchor</a> - Posts in this topic are about Anchor, the free; open-source blogging CMS developed by an ever growing community.</p>
		</div>
		<?php else: ?>
			<p>Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
			<div class="search_wrap_large">
				<form id="search" action="<?php echo search_url(); ?>" method="post">
					<input type="search" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
				</form>
			</div>
		<?php endif; ?>



	</section>

</div>
<?php theme_include('footer'); ?>