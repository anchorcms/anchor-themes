<?php theme_include('header'); ?>
<section id="content">
	<div class="wrapper">
		<section id="posts" class="col_2">
			<article>
				<h2 class="noTop"><?php echo page_title(); ?></h2>
				<?php if(user_authed()): ?>
					<p class="meta">
						<a href="<?php echo base_url('admin/posts/edit/' . page_id()); ?>">Edit</a>
					</p>
				<?php endif; ?>
				<?php echo page_content(); ?>
			</article>
		</section>
		<?php include('includes/sidebar.php'); ?>
	</div>
</section>
<?php theme_include('footer'); ?>