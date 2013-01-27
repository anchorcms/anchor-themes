<?php if(has_menu_items() AND PLAIN_NO_MENU == false): ?>
<aside id="sidebar-block" class="menu">
	<ul>
		<?php while(menu_items()): ?>
		<li class="<?php echo (menu_active() ? 'active ' : ''); ?>menu-item-<?php echo menu_id(); ?>"><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
		<?php endwhile; ?>
	</ul>
</aside>
<?php endif; ?>

<?php if(PLAIN_NO_SEARCH == false): ?>
<aside id="sidebar-block" class="search">
	<h3>Search</h3>
	<form class="search" action="<?php echo search_url(); ?>" method="post">
		<input type="text" name="term" placeholder="Type and hit enter" value="">
	</form>
</aside>
<?php endif; ?>

<?php if(twitter_account()): ?>
<aside id="sidebar-block" class="twitter">
	<h3><a href="http://twitter.com/<?php echo twitter_account(); ?>" title="@<?php echo twitter_account(); ?> on Twitter">Twitter</a></h3>
	<?php plain_twitter(); ?>
</aside>
<?php endif; ?>