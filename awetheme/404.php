<?php theme_include('header'); ?>
<section id="content" class="single">
	<div class="wrapper">
		<form class="search" action="<?php echo search_url(); ?>" method="post">
			<input type="text" name="term" placeholder="Type and hit enter for searching through the posts..." value="<?php echo search_term(); ?>">
		</form>
		<article>
			<h2 class="postTitle">404 Not Found</h2>
			<p>This page do not exist on this site...</p>
		</article>
	</div>
</section>
<?php theme_include('footer'); ?>