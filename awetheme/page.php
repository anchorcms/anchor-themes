<?php theme_include('header'); ?>
<section id="content" class="single">
	<div class="wrapper">
		<form class="search" action="<?php echo search_url(); ?>" method="post">
			<input type="text" name="term" placeholder="Type and hit enter for searching through the posts..." value="<?php echo search_term(); ?>">
		</form>
		<article>
			<h2 class="postTitle"><?php echo page_title(); ?></h2>
			<time>
				<?php if(user_authed()): ?>&rarr; <a href="<?php echo base_url('admin/pages/edit/' . page_id()); ?>">Edit</a><?php endif; ?>
			</time>
			<?php echo page_content(); ?>
		</article>
	</div>
</section>
<?php theme_include('footer'); ?>