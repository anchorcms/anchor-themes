<?php theme_include('header'); ?>
<div id="content-bg">
<section class="content">

    <h1><?php echo article_title(); ?></h1>

	<article>
	    <?php echo article_html(); ?>
	</article>
</section>

<?php include('includes/comment_form.php'); ?>

<section class="footnote">
	<p>This article is my <?php echo numeral(article_id()); ?> oldest. It is <?php echo count_words(article_html()); ?> words long. </p>
</section>

</div>
<?php theme_include('footer'); ?>
