<?php theme_include('header'); ?>
<section id="content"<?php if(PLAIN_NO_SIDEBAR == true): echo 'class="no-sidebar"'; endif; ?>>

    <article id="article" class="article-<?php echo article_id(); ?>">
        <h2><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>
        <div class="meta">
            <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php if(PLAIN_POST_RELATIVE_TIME == false): echo date('F j, Y', article_time()); else: echo relative_time(article_time()); endif; ?></time>
        </div>
        <div class="entry">
            <?php echo article_html(); ?>
        </div>
    </article>

	<?php include "includes/comment_form.php"; ?>

</section>

<?php if(PLAIN_NO_SIDEBAR == false): ?>
<section id="sidebar">
	<?php include "includes/sidebar.php"; ?>
</section>
<?php endif; ?>
<?php theme_include('footer'); ?>