<?php theme_include('header'); ?>
<article>
    <h2 id="postTitle"><?php echo article_title(); ?></h2>
    <p class="postMeta">
        Posted on <?php echo date('F jS, Y', article_time()); ?>

        <?php if(user_authed()): ?>
            <span>&rarr;</span> <a href="<?php echo admin_url(); ?>/posts/edit/<?php echo article_id(); ?>">Edit</a>
        <?php endif; ?>
    </p>


    <div class="content">
        <?php echo article_html(); ?>
    </div>


    <p class="postFooter"><p>This article is my <?php echo numeral(article_id() + 1); ?> oldest. It is <?php echo count_words(article_html()); ?> words long.</p>
</article>
<?php theme_include('footer'); ?>