<?php theme_include('header'); ?>
<div class="page_wrap">
	<section class="content">
		<h1><?php echo page_title(); ?></h1>

		<p><?php echo page_content(); ?></p>

		<!--
			If you want to add custom functionality per-page, you can do so by using the bind() function, which is stored in the functions.php of your theme.
			Then, if you want to echo out your custom function, you just add a recieve() function. Here's an example: "<?php // echo recieve(); ?>".
		 -->
	</section>
</div>
<?php theme_include('footer'); ?>