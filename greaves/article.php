<?php theme_include('header'); ?>
<section class="row post-single" id="article-<?php echo article_id(); ?>">

    <article class="two columns">
    	<p class="date"><?php echo relative_time(article_time()); ?></p>
    </article>

    <article class="eight columns">
    	<h2><?php echo article_title(); ?></h2>
	    <?php echo article_html(); ?>
    </article>

	<article class="two columns side">
        <ul class="post-stats hide-on-phones">
            <li class="side-comments"><?php echo total_comments() . pluralise(total_comments(), ' comment'); ?></li>
            <li><a href="#comment" title="Contribute to the discussion!"><em>Add your own</em></a></li>
        </ul>

        <ul class="post-ego hide-on-phones">
            <li class="bio">This article is my <?php echo numeral(article_id() + 1); ?> oldest. It is <?php echo count_words(article_html()); ?> words long.</li>
        </ul>
     </article>

</section>
<?php include('includes/comment_form.php'); ?>
<?php theme_include('footer'); ?>