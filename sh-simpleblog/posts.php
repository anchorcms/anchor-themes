<?php theme_include('header');
has_search_results();
?>

		<?php $i = 0; while(posts()): $i++; ?>
			<article class="content-box post" style="background: <?php echo getBoxColour($i-1); ?>;">
				<?php
					if($associate=article_custom_field("post-associate"))
					{
				?>
					<div class="box-top">
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
							<img src="<?php echo $associate; ?>" />
						</a>
					</div>
				<?php
					}
				?>
				<h2><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>
				<time><?php echo relative_time(article_date()); ?></time>
				<p><?php echo Html::markdown(article_description()); ?></p>
				<a class="read-more" href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">read more</a>
				<div style="clear:both;"></div>
			</article>
		<?php endwhile; ?>

		<?php if(has_pagination()): ?>
			<nav class="pagination">
				<?php echo posts_prev(); ?>
				<?php echo posts_next(); ?>
			</nav>
		<?php endif; ?>

<?php theme_include('footer'); ?>