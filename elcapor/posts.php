<?php theme_include('header'); ?>
<div class="page_wrap">
	<?php if(has_posts()): ?>
		<ul class="posts_wrap">
			<?php while(posts()): ?>
			<li>
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
					<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
					<h2><?php echo article_title(); ?></h2>
					<p id="desc"><?php echo article_description(); ?></p>
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>

		<div class="search_wrap">
			<form id="search" action="<?php echo search_url(); ?>" method="post">
				<input type="search" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
			</form>
		</div>
		<div class="feed_wrap"><h3>Twitter feed:</h3>
		<?php
			if(function_exists('my_last_tweet')){
				echo ''. my_last_tweet() .'';
			}else{
				echo '<p>Unfortunately there was a problem getting the latest tweets for this user.</p>';
			}
		?>
		</div>
</div>
<?php theme_include('footer'); ?>