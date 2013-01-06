<?php theme_include('header'); ?>
<section id="content">
	<?php if(has_search_results()): ?>
		<div id="intro">
			<div class="wrapper">
				<article>
					<h2 class="postTitle"><?php echo total_search_results(); ?> <?php echo pluralise(total_search_results(), 'result'); ?></h2>
					<p>This is the best we could do. Sorry if you haven't found anything!</p>
				</article>
			</div>
		</div>
		<div class="wrapper">
			<form class="search" action="<?php echo search_url(); ?>" method="post">
				<input type="text" name="term" placeholder="Type and hit enter for searching through the posts..." value="<?php echo search_term(); ?>">
			</form>
			<?php while(search_results()): ?>
				<article class="compact">
					<h2 class="postTitle"><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?><span><?php echo article_date(); ?></span></a></h2>
				</article>
			<?php endwhile; ?>
		</div>
	<?php else : ?>
		<div class="wrapper" style="padding:50px 0">
			<form class="search" action="<?php echo search_url(); ?>" method="post">
				<input type="text" name="term" placeholder="Type and hit enter for searching through the posts..." value="<?php echo search_term(); ?>">
			</form>
			<article>
				<h2 class="postTitle">Nothing found as of yet</h2>
				<p>Maybe you could check back later?</p>
			</article>
		</div>
	<?php endif; ?>
</section>
<?php theme_include('footer'); ?>