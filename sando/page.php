<?php theme_include('header'); ?>
<article>
    <h2 id="postTitle"><?php echo page_title(); ?></h2>
    <?php if(user_authed()): ?><p class="postMeta"><a href="<?php echo admin_url(); ?>/pages/edit/<?php echo page_id(); ?>">Edit</a></p><?php endif; ?>

    <div class="content">
        <?php echo page_content(); ?>
    </div>
</article>
<?php theme_include('footer'); ?>