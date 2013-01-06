<?php theme_include('header'); ?>
<section id="content">
	<div id="intro">
		<div class="wrapper">
			<article>
				<h2 class="postTitle"><?php echo page_title(); ?></h2>
				<?php echo page_content(); ?>
			</article>
		</div>
	</div>
	<div class="wrapper">
		<form class="search" action="<?php echo search_url(); ?>" method="post">
			<input type="text" name="term" placeholder="Type and hit enter for searching through the posts..." value="<?php echo search_term(); ?>">
		</form>
		<?php if(has_posts()) : ?>
			<?php while(posts()) : ?>
				<article class="compact">
					<h2 class="postTitle"><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?><span><?php echo article_date(); ?></span></a></h2>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<article>
				<h2>No posts yet</h2>
				<p>You should take the time and write something...</p>
			</article>
		<?php endif; ?>
	</div>
</section>
<?php theme_include('footer'); ?>