<?php theme_include('header'); ?>
<section class="row post">
            <article class="offset-by-two ten columns"><h2><?php echo page_title(); ?></h2></article>
            <article class="two columns"><?php echo page_content(); ?></article>
</section>

<!--
		If you want to add custom functionality per-page, you can do so by using the bind() function, which is stored in the functions.php of your theme.
		Then, if you want to echo out your custom function, you just add a recieve() function. Here's an example: "<?php // echo recieve(); ?>".
	 -->
<?php theme_include('footer'); ?>