<?php theme_include('header'); ?>
<section id="content">
	<div class="wrapper">
		<section id="posts" class="col_2">
			<?php if(has_posts()) : ?>
				<?php $i=0; while(posts()) : ?>
					<?php if($i===0) : ?>
						<article>
							<h2 class="noTop"><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>
							<p class="meta">
								Posted on <?php echo article_date(); ?>
								<?php if(user_authed()): ?>
									&rarr; <a href="<?php echo base_url('admin/posts/edit/' . article_id()); ?>">Edit</a>
								<?php endif; ?>
							</p>
							<?php echo article_description(); ?>
							<a href="<?php echo article_url(); ?>" class="button">Continue reading &rarr;</a>
						</article>
					<?php else : ?>
						<article class="compact">
							<h2><a href="<?php echo article_url(); ?>"><span><?php echo article_date(); ?></span><?php echo article_title(); ?></a></h2>
						</article>
					<?php endif; ?>
				<?php $i++; endwhile; ?>
			<?php else : ?>
				<article>
					<h2 class="noTop">Are you sure this is a blog?</h2>
					<p>Because you haven't posted anything yet, still, you're using Prototype!</p>
				</article>
			<?php endif; ?>
		</section>
		<?php include('includes/sidebar.php'); ?>
	</div>
</section>
<?php theme_include('footer'); ?>