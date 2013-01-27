<?php theme_include('header'); ?>
<section id="content" class="single">
	<div class="wrapper">
		<form class="search" action="<?php echo search_url(); ?>" method="post">
			<input type="text" name="term" placeholder="Type and hit enter for searching through the posts..." value="<?php echo search_term(); ?>">
		</form>
		<article>
			<h2 class="postTitle"><?php echo article_title(); ?></h2>
			<time>
				Posted on <?php echo article_date(); ?> <?php if(user_authed()): ?>&rarr; <a href="<?php echo base_url('admin/posts/edit/' . article_id()); ?>">Edit</a><?php endif; ?>
			</time>
			<?php echo article_html(); ?>
			<p id="footnote">This article is my <?php echo numeral(article_id()); ?> oldest. It is <?php echo count_words(article_html()); ?> words long.</p>
		</article>
		<?php include('includes/comment_form.php'); ?>
	</div>
</section>
<?php theme_include('footer'); ?>