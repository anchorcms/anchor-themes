<?php theme_include('header'); ?>
<section id="content"<?php if(PLAIN_NO_SIDEBAR == true): echo 'class="no-sidebar"'; endif; ?>>

    <article id="article" class="page-<?php echo page_id(); ?>">
        <h2><?php echo page_title(); ?></a></h2>
        <div class="entry">
            <?php echo page_content(); ?>
        </div>
    </article>

</section>

<?php if(PLAIN_NO_SIDEBAR == false): ?>
<section id="sidebar">
	<?php include "includes/sidebar.php"; ?>
</section>
<?php endif; ?>
<?php theme_include('footer'); ?>