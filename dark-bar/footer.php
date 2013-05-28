	        <?php echo get_last_tweet(); ?>
            <footer id="bottom">
                <div class="wrap">
	                <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>

	                <ul role="navigation">
	                    <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
	                    <?php $twittername = twitter_account();
	                    if (!empty($twittername)) : ?>
	                   		<li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
	                    <?php endif; ?>
	                    <?php if(user_authed()): ?>
	                    <li><a href="<?php echo admin_url(); ?>" title="Administer your site!">Admin area</a></li>
	                    <?php endif; ?>
	                    <li><a href="<?php echo base_url(); ?>" title="Go back to my website.">Home</a></li>
	                </ul>

	                <a id="attribution" title="Powered by Anchor CMS" href="//anchorcms.com">Powered by Anchor CMS</a>
	             </div>
            </footer>

    </body>
</html>
