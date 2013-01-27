<?php theme_include('header'); ?>
<h1 class="wrapper">You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>

<?php if(has_search_results()): ?>
    <ul id="posts">
        <?php while(search_results()): ?>
    	<li>
        	<?php if(user_authed()): ?>
        	    <div class="edit"><a href="<?php echo admin_url(); ?>/posts/edit/<?php echo article_id(); ?>">Edit</a></div>
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
    <p>No search results, sorry!</p>
<?php endif; ?>
<?php theme_include('footer'); ?>
