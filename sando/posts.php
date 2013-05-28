<?php theme_include('header'); ?>
<?php if(has_posts()): ?>
    <ul id="posts">
        <?php while(posts()): ?>
    	<li>
        	<?php if(user_authed()): ?>
        	    <div class="edit"><a href="<?php echo base_url('admin'); ?>/posts/edit/<?php echo article_id(); ?>">Edit</a></div>
        	<?php endif; ?>

            <div class="date"><span><?php echo date('jS', article_time()); ?></span> <?php echo date('M', article_time()); ?></div>

        	<h2><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>

            <p>This article is my <?php echo (article_id() != 1 ? numeral(article_id()) . ' ' : ''); ?>oldest. It is <?php echo count_words(article_html()); ?> words long.</p>
        </li>
        <?php endwhile; ?>
    </ul>

    <?php if(isset($pagination)): ?>
    <div id="page-nav">
    	<a href="<?php echo base_url(); ?>" class="older">Older Posts</a>
    	<a href="<?php echo base_url(); ?>" class="newer">Newer Posts</a>
    </div>
    <?php endif; ?>


<?php else: ?>
    <p>Looks like you have some writing to do!</p>
<?php endif; ?>
<?php theme_include('footer'); ?>